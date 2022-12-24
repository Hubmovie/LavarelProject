<?php //97009ad304cc1115ef379825e75d78dd
/** @noinspection all */

namespace Botble\Base\Models {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_BaseModel_C;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_MetaBox_C;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_MetaBox_QB;

    /**
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @method static BaseQueryBuilder onWriteConnection()
     * @method BaseQueryBuilder newQuery()
     * @method static BaseQueryBuilder on(null|string $connection = null)
     * @method static BaseQueryBuilder query()
     * @method static BaseQueryBuilder with(array|string $relations)
     * @method BaseQueryBuilder newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_BaseModel_C|BaseModel[] all()
     * @mixin BaseQueryBuilder
     */
    class BaseModel extends Model {}

    /**
     * @property int $id
     * @property string $meta_key
     * @property array|null $meta_value
     * @property int $reference_id
     * @property string $reference_type
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property Model $reference
     * @method MorphTo reference()
     * @method static _IH_MetaBox_QB onWriteConnection()
     * @method _IH_MetaBox_QB newQuery()
     * @method static _IH_MetaBox_QB on(null|string $connection = null)
     * @method static _IH_MetaBox_QB query()
     * @method static _IH_MetaBox_QB with(array|string $relations)
     * @method _IH_MetaBox_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_MetaBox_C|MetaBox[] all()
     * @mixin _IH_MetaBox_QB
     */
    class MetaBox extends Model {}
}
