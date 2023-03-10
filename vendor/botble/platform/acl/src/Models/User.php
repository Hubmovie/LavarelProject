<?php

namespace Botble\ACL\Models;

use Botble\ACL\Notifications\ResetPasswordNotification;
use Botble\ACL\Traits\PermissionTrait;
use Botble\Base\Supports\Avatar;
use Botble\Media\Models\MediaFile;
use Eloquent;
use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use RvMedia;

/**
 * @mixin Eloquent
 */
class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use PermissionTrait;
    use Notifiable;

    protected $table = 'users';

    protected $fillable = [
        'username',
        'email',
        'first_name',
        'last_name',
        'password',
        'avatar_id',
        'permissions',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'permissions' => 'json',
    ];

    public function getFirstNameAttribute(?string $value): string
    {
        return ucfirst((string)$value);
    }

    public function getLastNameAttribute(?string $value): string
    {
        return ucfirst((string)$value);
    }

    public function getNameAttribute(): string
    {
        return ucfirst((string)$this->first_name) . ' ' . ucfirst((string)$this->last_name);
    }

    public function avatar(): BelongsTo
    {
        return $this->belongsTo(MediaFile::class)->withDefault();
    }

    public function getAvatarUrlAttribute(): string
    {
        if ($this->avatar->url) {
            return RvMedia::url($this->avatar->url);
        }

        try {
            return (new Avatar())->create($this->name)->toBase64();
        } catch (Exception) {
            return RvMedia::getDefaultImage();
        }
    }

    public function getPermissionsAttribute(?string $value): array
    {
        try {
            return json_decode($value ?: '', true) ?: [];
        } catch (Exception) {
            return [];
        }
    }

    public function setPermissionsAttribute(array $permissions)
    {
        $this->attributes['permissions'] = $permissions ? json_encode($permissions) : '';
    }

    public function roles(): BelongsToMany
    {
        return $this
            ->belongsToMany(Role::class, 'role_users', 'user_id', 'role_id')
            ->withTimestamps();
    }

    public function isSuperUser(): bool
    {
        return $this->super_user || $this->hasAccess(ACL_ROLE_SUPER_USER);
    }

    public function hasPermission(string $permission): bool
    {
        if ($this->isSuperUser()) {
            return true;
        }

        return $this->hasAccess($permission);
    }

    public function hasAnyPermission(array $permissions): bool
    {
        if ($this->isSuperUser()) {
            return true;
        }

        return $this->hasAnyAccess($permissions);
    }

    /**
     * Send the password reset notification.
     *
     * @param string $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

    public function activations(): HasMany
    {
        return $this->hasMany(Activation::class, 'user_id');
    }

    public function inRole($role): bool
    {
        $roleId = null;
        if ($role instanceof Role) {
            $roleId = $role->getKey();
        }

        foreach ($this->roles as $instance) {
            /**
             * @var Role $instance
             */
            if ($role instanceof Role) {
                if ($instance->getKey() === $roleId) {
                    return true;
                }
            } elseif ($instance->getKey() == $role || $instance->slug == $role) {
                return true;
            }
        }

        return false;
    }

    public function delete(): ?bool
    {
        if ($this->exists) {
            $this->activations()->delete();
            $this->roles()->detach();
        }

        return parent::delete();
    }
}
