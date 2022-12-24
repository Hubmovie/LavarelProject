<?php //40155292e582a2574f30ae3844cd0577
/** @noinspection all */

namespace Botble\SimpleSlider\Models {

    use Botble\Base\Enums\BaseStatusEnum;
    use Botble\Base\Models\MetaBox;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_MetaBox_C;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_MetaBox_QB;
    use LaravelIdea\Helper\Botble\SimpleSlider\Models\_IH_SimpleSliderItem_C;
    use LaravelIdea\Helper\Botble\SimpleSlider\Models\_IH_SimpleSliderItem_QB;
    use LaravelIdea\Helper\Botble\SimpleSlider\Models\_IH_SimpleSlider_C;
    use LaravelIdea\Helper\Botble\SimpleSlider\Models\_IH_SimpleSlider_QB;

    /**
     * @property int $id
     * @property string $name
     * @property string $key
     * @property string|null $description
     * @property BaseStatusEnum $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property _IH_SimpleSliderItem_C|SimpleSliderItem[] $sliderItems
     * @property-read int $slider_items_count
     * @method HasMany|_IH_SimpleSliderItem_QB sliderItems()
     * @method static _IH_SimpleSlider_QB onWriteConnection()
     * @method _IH_SimpleSlider_QB newQuery()
     * @method static _IH_SimpleSlider_QB on(null|string $connection = null)
     * @method static _IH_SimpleSlider_QB query()
     * @method static _IH_SimpleSlider_QB with(array|string $relations)
     * @method _IH_SimpleSlider_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_SimpleSlider_C|SimpleSlider[] all()
     * @foreignLinks id,\Botble\SimpleSlider\Models\SimpleSliderItem,simple_slider_id
     * @mixin _IH_SimpleSlider_QB
     */
    class SimpleSlider extends Model {}

    /**
     * @property int $id
     * @property int $simple_slider_id
     * @property string|null $title
     * @property string $image
     * @property string|null $link
     * @property string|null $description
     * @property int $order
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @method static _IH_SimpleSliderItem_QB onWriteConnection()
     * @method _IH_SimpleSliderItem_QB newQuery()
     * @method static _IH_SimpleSliderItem_QB on(null|string $connection = null)
     * @method static _IH_SimpleSliderItem_QB query()
     * @method static _IH_SimpleSliderItem_QB with(array|string $relations)
     * @method _IH_SimpleSliderItem_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_SimpleSliderItem_C|SimpleSliderItem[] all()
     * @ownLinks simple_slider_id,\Botble\SimpleSlider\Models\SimpleSlider,id
     * @mixin _IH_SimpleSliderItem_QB
     */
    class SimpleSliderItem extends Model {}
}
