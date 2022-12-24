<?php

namespace Botble\Blog\Models;

use Botble\ACL\Models\User;
use Botble\Base\Traits\EnumCastable;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\Revision\RevisionableTrait;
use Botble\Base\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Str;

class Post extends BaseModel
{
    use RevisionableTrait;
    use EnumCastable;

    protected $table = 'posts';

    protected mixed $revisionEnabled = true;

    protected mixed $revisionCleanup = true;

    protected int $historyLimit = 20;

    protected array $dontKeepRevisionOf = [
        'content',
        'views',
    ];

    protected $fillable = [
        'name',
        'description',
        'content',
        'image',
        'is_featured',
        'format_type',
        'status',
        'author_id',
        'author_type',
    ];

    protected $casts = [
        'status' => BaseStatusEnum::class,
    ];

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'post_tags');
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'post_categories');
    }

    public function getFirstCategoryAttribute(): ?Category
    {
        $this->loadMissing('categories');

        return $this->categories->first();
    }

    public function author(): MorphTo
    {
        return $this->morphTo()->withDefault();
    }

    public function morphTo($name = null, $type = null, $id = null, $ownerKey = null): MorphTo
    {
        // If no name is provided, we will use the backtrace to get the function name
        // since that is most likely the name of the polymorphic interface. We can
        // use that to get both the class and foreign key that will be utilized.
        $name = $name ?: $this->guessBelongsToRelation();

        [$type, $id] = $this->getMorphs(
            Str::snake($name),
            $type,
            $id
        );

        // If the type value is null it is probably safe to assume we're eager loading
        // the relationship. In this case we'll just pass in a dummy query where we
        // need to remove any eager loads that may already be defined on a model.

        $class = $this->getAttributeFromArray($type);

        if (empty($class)) {
            return $this->morphEagerTo($name, $type, $id, $ownerKey);
        }

        if (! class_exists($class)) {
            $class = User::class;
        }

        return $this->morphInstanceTo($class, $name, $type, $id, $ownerKey);
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function (Post $post) {
            $post->categories()->detach();
            $post->tags()->detach();
        });
    }
}
