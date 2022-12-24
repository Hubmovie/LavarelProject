<?php //51f8c0000cacb978ded1e4de568c27d0
/** @noinspection all */

namespace Botble\Translation\Models {

    use Botble\Base\Models\MetaBox;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_MetaBox_C;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_MetaBox_QB;
    use LaravelIdea\Helper\Botble\Translation\Models\_IH_Translation_C;
    use LaravelIdea\Helper\Botble\Translation\Models\_IH_Translation_QB;

    /**
     * @property int $id
     * @property int $status
     * @property string $locale
     * @property string $group
     * @property string $key
     * @property string|null $value
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @method static _IH_Translation_QB onWriteConnection()
     * @method _IH_Translation_QB newQuery()
     * @method static _IH_Translation_QB on(null|string $connection = null)
     * @method static _IH_Translation_QB query()
     * @method static _IH_Translation_QB with(array|string $relations)
     * @method _IH_Translation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Translation_C|Translation[] all()
     * @mixin _IH_Translation_QB
     */
    class Translation extends Model {}
}
