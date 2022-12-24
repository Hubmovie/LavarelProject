<?php //391bd2e5cd202ed40625e168a013651b
/** @noinspection all */

namespace Botble\Ads\Models {

    use Botble\Base\Enums\BaseStatusEnum;
    use Botble\Base\Models\MetaBox;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Botble\Ads\Models\_IH_AdsTranslation_C;
    use LaravelIdea\Helper\Botble\Ads\Models\_IH_AdsTranslation_QB;
    use LaravelIdea\Helper\Botble\Ads\Models\_IH_Ads_C;
    use LaravelIdea\Helper\Botble\Ads\Models\_IH_Ads_QB;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_MetaBox_C;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_MetaBox_QB;

    /**
     * @property int $id
     * @property string $name
     * @property Carbon|null $expired_at
     * @property string|null $location
     * @property string $key
     * @property string|null $image
     * @property string|null $url
     * @property int $clicked
     * @property int|null $order
     * @property BaseStatusEnum $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @method static _IH_Ads_QB onWriteConnection()
     * @method _IH_Ads_QB newQuery()
     * @method static _IH_Ads_QB on(null|string $connection = null)
     * @method static _IH_Ads_QB query()
     * @method static _IH_Ads_QB with(array|string $relations)
     * @method _IH_Ads_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Ads_C|Ads[] all()
     * @foreignLinks id,\Botble\Ads\Models\AdsTranslation,ads_id
     * @mixin _IH_Ads_QB
     */
    class Ads extends Model {}

    /**
     * @property string $lang_code
     * @property int $ads_id
     * @property string|null $name
     * @property string|null $image
     * @property string|null $url
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @method static _IH_AdsTranslation_QB onWriteConnection()
     * @method _IH_AdsTranslation_QB newQuery()
     * @method static _IH_AdsTranslation_QB on(null|string $connection = null)
     * @method static _IH_AdsTranslation_QB query()
     * @method static _IH_AdsTranslation_QB with(array|string $relations)
     * @method _IH_AdsTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_AdsTranslation_C|AdsTranslation[] all()
     * @ownLinks ads_id,\Botble\Ads\Models\Ads,id
     * @mixin _IH_AdsTranslation_QB
     */
    class AdsTranslation extends Model {}
}
