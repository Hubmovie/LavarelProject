<?php //46f25c47373810c2949bbaedbedf5ab5
/** @noinspection all */

namespace Botble\LanguageAdvanced\Models {

    use Botble\Base\Models\MetaBox;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_MetaBox_C;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_MetaBox_QB;
    use LaravelIdea\Helper\Botble\LanguageAdvanced\Models\_IH_PageTranslation_C;
    use LaravelIdea\Helper\Botble\LanguageAdvanced\Models\_IH_PageTranslation_QB;

    /**
     * @property string $lang_code
     * @property int $pages_id
     * @property string|null $name
     * @property string|null $description
     * @property string|null $content
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @method static _IH_PageTranslation_QB onWriteConnection()
     * @method _IH_PageTranslation_QB newQuery()
     * @method static _IH_PageTranslation_QB on(null|string $connection = null)
     * @method static _IH_PageTranslation_QB query()
     * @method static _IH_PageTranslation_QB with(array|string $relations)
     * @method _IH_PageTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PageTranslation_C|PageTranslation[] all()
     * @ownLinks pages_id,\Botble\Page\Models\Page,id
     * @mixin _IH_PageTranslation_QB
     */
    class PageTranslation extends Model {}
}
