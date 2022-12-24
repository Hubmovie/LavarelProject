<?php //46d7919d2600f9ce4bc351e727f327b6
/** @noinspection all */

namespace Botble\Setting\Models {

    use Botble\Base\Models\MetaBox;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_MetaBox_C;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_MetaBox_QB;
    use LaravelIdea\Helper\Botble\Setting\Models\_IH_Setting_C;
    use LaravelIdea\Helper\Botble\Setting\Models\_IH_Setting_QB;

    /**
     * @property int $id
     * @property string $key
     * @property string|null $value
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @method static _IH_Setting_QB onWriteConnection()
     * @method _IH_Setting_QB newQuery()
     * @method static _IH_Setting_QB on(null|string $connection = null)
     * @method static _IH_Setting_QB query()
     * @method static _IH_Setting_QB with(array|string $relations)
     * @method _IH_Setting_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Setting_C|Setting[] all()
     * @mixin _IH_Setting_QB
     */
    class Setting extends Model {}
}
