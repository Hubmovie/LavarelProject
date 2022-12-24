<?php //de995260f74366934f1bd072d431a32c
/** @noinspection all */

namespace Botble\Widget\Models {

    use Botble\Base\Models\MetaBox;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_MetaBox_C;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_MetaBox_QB;
    use LaravelIdea\Helper\Botble\Widget\Models\_IH_Widget_C;
    use LaravelIdea\Helper\Botble\Widget\Models\_IH_Widget_QB;

    /**
     * @property int $id
     * @property string $widget_id
     * @property string $sidebar_id
     * @property string $theme
     * @property int $position
     * @property array|null $data
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @method static _IH_Widget_QB onWriteConnection()
     * @method _IH_Widget_QB newQuery()
     * @method static _IH_Widget_QB on(null|string $connection = null)
     * @method static _IH_Widget_QB query()
     * @method static _IH_Widget_QB with(array|string $relations)
     * @method _IH_Widget_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Widget_C|Widget[] all()
     * @foreignLinks id,\Botble\Dashboard\Models\DashboardWidgetSetting,widget_id
     * @mixin _IH_Widget_QB
     */
    class Widget extends Model {}
}
