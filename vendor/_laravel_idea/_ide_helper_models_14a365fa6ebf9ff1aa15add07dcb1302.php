<?php //d2522034d628d60c0f368d849a3ce4aa
/** @noinspection all */

namespace Botble\Revision {

    use Botble\Base\Models\MetaBox;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_MetaBox_C;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_MetaBox_QB;
    use LaravelIdea\Helper\Botble\Revision\_IH_Revision_C;
    use LaravelIdea\Helper\Botble\Revision\_IH_Revision_QB;

    /**
     * @property int $id
     * @property string $revisionable_type
     * @property int $revisionable_id
     * @property int|null $user_id
     * @property string $key
     * @property string|null $old_value
     * @property string|null $new_value
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property Model $revisionable
     * @method MorphTo revisionable()
     * @method static _IH_Revision_QB onWriteConnection()
     * @method _IH_Revision_QB newQuery()
     * @method static _IH_Revision_QB on(null|string $connection = null)
     * @method static _IH_Revision_QB query()
     * @method static _IH_Revision_QB with(array|string $relations)
     * @method _IH_Revision_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Revision_C|Revision[] all()
     * @ownLinks user_id,\Botble\ACL\Models\User,id
     * @mixin _IH_Revision_QB
     */
    class Revision extends Model {}
}
