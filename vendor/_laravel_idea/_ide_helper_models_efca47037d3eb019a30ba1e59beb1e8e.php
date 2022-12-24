<?php //6c5704300dcec054579ba60ce202676f
/** @noinspection all */

namespace Botble\Dashboard\Models {

    use Botble\Base\Models\MetaBox;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_MetaBox_C;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_MetaBox_QB;
    use LaravelIdea\Helper\Botble\Dashboard\Models\_IH_DashboardWidgetSetting_C;
    use LaravelIdea\Helper\Botble\Dashboard\Models\_IH_DashboardWidgetSetting_QB;
    use LaravelIdea\Helper\Botble\Dashboard\Models\_IH_DashboardWidget_C;
    use LaravelIdea\Helper\Botble\Dashboard\Models\_IH_DashboardWidget_QB;

    /**
     * @property int $id
     * @property string $name
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property _IH_DashboardWidgetSetting_C|DashboardWidgetSetting[] $settings
     * @property-read int $settings_count
     * @method HasMany|_IH_DashboardWidgetSetting_QB settings()
     * @method static _IH_DashboardWidget_QB onWriteConnection()
     * @method _IH_DashboardWidget_QB newQuery()
     * @method static _IH_DashboardWidget_QB on(null|string $connection = null)
     * @method static _IH_DashboardWidget_QB query()
     * @method static _IH_DashboardWidget_QB with(array|string $relations)
     * @method _IH_DashboardWidget_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_DashboardWidget_C|DashboardWidget[] all()
     * @mixin _IH_DashboardWidget_QB
     */
    class DashboardWidget extends Model {}

    /**
     * @property int $id
     * @property array|null $settings
     * @property int $user_id
     * @property int $widget_id
     * @property int $order
     * @property int $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property DashboardWidget $widget
     * @method BelongsTo|_IH_DashboardWidget_QB widget()
     * @method static _IH_DashboardWidgetSetting_QB onWriteConnection()
     * @method _IH_DashboardWidgetSetting_QB newQuery()
     * @method static _IH_DashboardWidgetSetting_QB on(null|string $connection = null)
     * @method static _IH_DashboardWidgetSetting_QB query()
     * @method static _IH_DashboardWidgetSetting_QB with(array|string $relations)
     * @method _IH_DashboardWidgetSetting_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_DashboardWidgetSetting_C|DashboardWidgetSetting[] all()
     * @ownLinks user_id,\Botble\ACL\Models\User,id|widget_id,\Botble\Widget\Models\Widget,id
     * @mixin _IH_DashboardWidgetSetting_QB
     */
    class DashboardWidgetSetting extends Model {}
}
