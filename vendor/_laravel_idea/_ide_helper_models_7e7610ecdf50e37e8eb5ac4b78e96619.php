<?php //0daa6e4e3d8c18f8f8a397683d30b010
/** @noinspection all */

namespace Botble\AuditLog\Models {

    use Botble\ACL\Models\User;
    use Botble\Base\Models\MetaBox;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Botble\ACL\Models\_IH_User_QB;
    use LaravelIdea\Helper\Botble\AuditLog\Models\_IH_AuditHistory_C;
    use LaravelIdea\Helper\Botble\AuditLog\Models\_IH_AuditHistory_QB;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_MetaBox_C;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_MetaBox_QB;

    /**
     * @property int $id
     * @property int $user_id
     * @property string $module
     * @property string|null $request
     * @property string $action
     * @property string|null $user_agent
     * @property string|null $ip_address
     * @property int $reference_user
     * @property int $reference_id
     * @property string $reference_name
     * @property string $type
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_AuditHistory_QB onWriteConnection()
     * @method _IH_AuditHistory_QB newQuery()
     * @method static _IH_AuditHistory_QB on(null|string $connection = null)
     * @method static _IH_AuditHistory_QB query()
     * @method static _IH_AuditHistory_QB with(array|string $relations)
     * @method _IH_AuditHistory_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_AuditHistory_C|AuditHistory[] all()
     * @ownLinks user_id,\Botble\ACL\Models\User,id
     * @mixin _IH_AuditHistory_QB
     */
    class AuditHistory extends Model {}
}
