<?php //0f178c42ca0346f1b640af82774253f8
/** @noinspection all */

namespace App\Models {

    use Database\Factories\UserFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Notifications\DatabaseNotification;
    use Illuminate\Notifications\DatabaseNotificationCollection;
    use Illuminate\Support\Carbon;
    use Laravel\Sanctum\PersonalAccessToken;
    use LaravelIdea\Helper\App\Models\_IH_User_C;
    use LaravelIdea\Helper\App\Models\_IH_User_QB;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_QB;
    use LaravelIdea\Helper\Laravel\Sanctum\_IH_PersonalAccessToken_C;
    use LaravelIdea\Helper\Laravel\Sanctum\_IH_PersonalAccessToken_QB;

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
     * @property string|null $permissions
     * @property Carbon|null $last_login
     * @property DatabaseNotificationCollection|DatabaseNotification[] $notifications
     * @property-read int $notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB notifications()
     * @property DatabaseNotificationCollection|DatabaseNotification[] $readNotifications
     * @property-read int $read_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB readNotifications()
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
     * @method static UserFactory factory(array|callable|int|null $count = null, array|callable $state = [])
     */
    class User extends Model {}
}
