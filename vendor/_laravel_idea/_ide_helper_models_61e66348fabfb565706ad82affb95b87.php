<?php //725d4ff6dec41ad6fbe1d394725eb617
/** @noinspection all */

namespace Botble\Menu\Models {

    use Botble\Base\Enums\BaseStatusEnum;
    use Botble\Base\Models\MetaBox;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_MetaBox_C;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_MetaBox_QB;
    use LaravelIdea\Helper\Botble\Menu\Models\_IH_MenuLocation_C;
    use LaravelIdea\Helper\Botble\Menu\Models\_IH_MenuLocation_QB;
    use LaravelIdea\Helper\Botble\Menu\Models\_IH_MenuNode_C;
    use LaravelIdea\Helper\Botble\Menu\Models\_IH_MenuNode_QB;
    use LaravelIdea\Helper\Botble\Menu\Models\_IH_Menu_C;
    use LaravelIdea\Helper\Botble\Menu\Models\_IH_Menu_QB;

    /**
     * @property int $id
     * @property string $name
     * @property string|null $slug
     * @property BaseStatusEnum $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_MenuLocation_C|MenuLocation[] $locations
     * @property-read int $locations_count
     * @method HasMany|_IH_MenuLocation_QB locations()
     * @property _IH_MenuNode_C|MenuNode[] $menuNodes
     * @property-read int $menu_nodes_count
     * @method HasMany|_IH_MenuNode_QB menuNodes()
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @method static _IH_Menu_QB onWriteConnection()
     * @method _IH_Menu_QB newQuery()
     * @method static _IH_Menu_QB on(null|string $connection = null)
     * @method static _IH_Menu_QB query()
     * @method static _IH_Menu_QB with(array|string $relations)
     * @method _IH_Menu_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Menu_C|Menu[] all()
     * @foreignLinks id,\Botble\Menu\Models\MenuNode,menu_id|id,\Botble\Menu\Models\MenuLocation,menu_id
     * @mixin _IH_Menu_QB
     */
    class Menu extends Model {}

    /**
     * @property int $id
     * @property int $menu_id
     * @property string $location
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Menu $menu
     * @method BelongsTo|_IH_Menu_QB menu()
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @method static _IH_MenuLocation_QB onWriteConnection()
     * @method _IH_MenuLocation_QB newQuery()
     * @method static _IH_MenuLocation_QB on(null|string $connection = null)
     * @method static _IH_MenuLocation_QB query()
     * @method static _IH_MenuLocation_QB with(array|string $relations)
     * @method _IH_MenuLocation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_MenuLocation_C|MenuLocation[] all()
     * @ownLinks menu_id,\Botble\Menu\Models\Menu,id
     * @mixin _IH_MenuLocation_QB
     */
    class MenuLocation extends Model {}

    /**
     * @property int $id
     * @property int $menu_id
     * @property int $parent_id
     * @property int|null $reference_id
     * @property string|null $reference_type
     * @property string|null $url
     * @property string|null $icon_font
     * @property int $position
     * @property string|null $title
     * @property string|null $css_class
     * @property string $target
     * @property int $has_child
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property-read bool $active attribute
     * @property _IH_MenuNode_C|MenuNode[] $child
     * @property-read int $child_count
     * @method HasMany|_IH_MenuNode_QB child()
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property MenuNode $parent
     * @method BelongsTo|_IH_MenuNode_QB parent()
     * @property Model $reference
     * @method MorphTo reference()
     * @method static _IH_MenuNode_QB onWriteConnection()
     * @method _IH_MenuNode_QB newQuery()
     * @method static _IH_MenuNode_QB on(null|string $connection = null)
     * @method static _IH_MenuNode_QB query()
     * @method static _IH_MenuNode_QB with(array|string $relations)
     * @method _IH_MenuNode_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_MenuNode_C|MenuNode[] all()
     * @ownLinks menu_id,\Botble\Menu\Models\Menu,id
     * @mixin _IH_MenuNode_QB
     */
    class MenuNode extends Model {}
}
