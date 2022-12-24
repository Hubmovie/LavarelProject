<?php //4925cfc74e6955f2cd75231ca42f765e
/** @noinspection all */

namespace Botble\ACL\Models {

    use Botble\Base\Models\MetaBox;
    use Botble\Media\Models\MediaFile;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\BelongsToMany;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Notifications\DatabaseNotification;
    use Illuminate\Notifications\DatabaseNotificationCollection;
    use Illuminate\Support\Carbon;
    use Laravel\Sanctum\PersonalAccessToken;
    use LaravelIdea\Helper\Botble\ACL\Models\_IH_Activation_C;
    use LaravelIdea\Helper\Botble\ACL\Models\_IH_Activation_QB;
    use LaravelIdea\Helper\Botble\ACL\Models\_IH_Role_C;
    use LaravelIdea\Helper\Botble\ACL\Models\_IH_Role_QB;
    use LaravelIdea\Helper\Botble\ACL\Models\_IH_UserMeta_C;
    use LaravelIdea\Helper\Botble\ACL\Models\_IH_UserMeta_QB;
    use LaravelIdea\Helper\Botble\ACL\Models\_IH_User_C;
    use LaravelIdea\Helper\Botble\ACL\Models\_IH_User_QB;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_MetaBox_C;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_MetaBox_QB;
    use LaravelIdea\Helper\Botble\Media\Models\_IH_MediaFile_QB;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_QB;
    use LaravelIdea\Helper\Laravel\Sanctum\_IH_PersonalAccessToken_C;
    use LaravelIdea\Helper\Laravel\Sanctum\_IH_PersonalAccessToken_QB;

    /**
     * @property int $id
     * @property int $user_id
     * @property string $code
     * @property bool $completed
     * @property Carbon|null $completed_at
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @method static _IH_Activation_QB onWriteConnection()
     * @method _IH_Activation_QB newQuery()
     * @method static _IH_Activation_QB on(null|string $connection = null)
     * @method static _IH_Activation_QB query()
     * @method static _IH_Activation_QB with(array|string $relations)
     * @method _IH_Activation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Activation_C|Activation[] all()
     * @ownLinks user_id,\Botble\ACL\Models\User,id
     * @mixin _IH_Activation_QB
     */
    class Activation extends Model {}

    /**
     * @property int $id
     * @property string $slug
     * @property string $name
     * @property array|null $permissions
     * @property string|null $description
     * @property int $is_default
     * @property int $created_by
     * @property int $updated_by
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property User $author
     * @method BelongsTo|_IH_User_QB author()
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property _IH_User_C|User[] $users
     * @property-read int $users_count
     * @method BelongsToMany|_IH_User_QB users()
     * @method static _IH_Role_QB onWriteConnection()
     * @method _IH_Role_QB newQuery()
     * @method static _IH_Role_QB on(null|string $connection = null)
     * @method static _IH_Role_QB query()
     * @method static _IH_Role_QB with(array|string $relations)
     * @method _IH_Role_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Role_C|Role[] all()
     * @foreignLinks
     * @mixin _IH_Role_QB
     */
    class Role extends Model {}

    /**
     * @property int $id
     * @property string $email
     * @property Carbon|null $email_verified_at
     * @property string|null $password
     * @property string|null $remember_token
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string|null $first_name
     * @property string|null $last_name
     * @property string|null $username
     * @property int|null $avatar_id
     * @property bool $super_user
     * @property bool $manage_supers
     * @property array|null $permissions
     * @property Carbon|null $last_login
     * @property-read string $avatar_url attribute
     * @property-read string $name attribute
     * @property _IH_Activation_C|Activation[] $activations
     * @property-read int $activations_count
     * @method HasMany|_IH_Activation_QB activations()
     * @property MediaFile|null $avatar
     * @method BelongsTo|_IH_MediaFile_QB avatar()
     * @property DatabaseNotificationCollection|DatabaseNotification[] $notifications
     * @property-read int $notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB notifications()
     * @property DatabaseNotificationCollection|DatabaseNotification[] $readNotifications
     * @property-read int $read_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB readNotifications()
     * @property _IH_Role_C|Role[] $roles
     * @property-read int $roles_count
     * @method BelongsToMany|_IH_Role_QB roles()
     * @property _IH_PersonalAccessToken_C|PersonalAccessToken[] $tokens
     * @property-read int $tokens_count
     * @method MorphToMany|_IH_PersonalAccessToken_QB tokens()
     * @property DatabaseNotificationCollection|DatabaseNotification[] $unreadNotifications
     * @property-read int $unread_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB unreadNotifications()
     * @method static _IH_User_QB onWriteConnection()
     * @method _IH_User_QB newQuery()
     * @method static _IH_User_QB on(null|string $connection = null)
     * @method static _IH_User_QB query()
     * @method static _IH_User_QB with(array|string $relations)
     * @method _IH_User_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_User_C|User[] all()
     * @foreignLinks id,\Botble\Revision\Revision,user_id|id,\Botble\AuditLog\Models\AuditHistory,user_id|id,\Botble\ACL\Models\Activation,user_id|id,\Botble\ACL\Models\UserMeta,user_id|id,\Botble\Page\Models\Page,user_id|id,\Botble\Dashboard\Models\DashboardWidgetSetting,user_id|id,\Botble\Media\Models\MediaFolder,user_id|id,\Botble\Media\Models\MediaFile,user_id|id,\Botble\Media\Models\MediaSetting,user_id|id,\Botble\Payment\Models\Payment,user_id|id,\Botble\Ecommerce\Models\Order,user_id|id,\Botble\Ecommerce\Models\OrderHistory,user_id|id,\Botble\Ecommerce\Models\Shipment,user_id|id,\Botble\Ecommerce\Models\ShipmentHistory,user_id|id,\Botble\Marketplace\Models\Revenue,user_id|id,\Botble\Marketplace\Models\Withdrawal,user_id|id,\Botble\Ecommerce\Models\OrderReturn,user_id
     * @mixin _IH_User_QB
     */
    class User extends Model {}

    /**
     * @property int $id
     * @property string|null $key
     * @property string|null $value
     * @property int $user_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @method static _IH_UserMeta_QB onWriteConnection()
     * @method _IH_UserMeta_QB newQuery()
     * @method static _IH_UserMeta_QB on(null|string $connection = null)
     * @method static _IH_UserMeta_QB query()
     * @method static _IH_UserMeta_QB with(array|string $relations)
     * @method _IH_UserMeta_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_UserMeta_C|UserMeta[] all()
     * @ownLinks user_id,\Botble\ACL\Models\User,id
     * @mixin _IH_UserMeta_QB
     */
    class UserMeta extends Model {}
}
