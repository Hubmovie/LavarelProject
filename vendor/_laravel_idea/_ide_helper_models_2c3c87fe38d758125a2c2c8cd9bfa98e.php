<?php //593069106691258c90cc6101f4da98ca
/** @noinspection all */

namespace Botble\Slug\Models {

    use Botble\Base\Models\MetaBox;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_MetaBox_C;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_MetaBox_QB;
    use LaravelIdea\Helper\Botble\Slug\Models\_IH_Slug_C;
    use LaravelIdea\Helper\Botble\Slug\Models\_IH_Slug_QB;

    /**
     * @property int $id
     * @property string $key
     * @property int $reference_id
     * @property string $reference_type
     * @property string|null $prefix
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property Model $reference
     * @method MorphTo reference()
     * @method static _IH_Slug_QB onWriteConnection()
     * @method _IH_Slug_QB newQuery()
     * @method static _IH_Slug_QB on(null|string $connection = null)
     * @method static _IH_Slug_QB query()
     * @method static _IH_Slug_QB with(array|string $relations)
     * @method _IH_Slug_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Slug_C|Slug[] all()
     * @mixin _IH_Slug_QB
     */
    class Slug extends Model {}
}
