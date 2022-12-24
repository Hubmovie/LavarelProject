<?php //442ec01416021aa87558e224d4aa6b04
/** @noinspection all */

namespace Botble\Language\Models {

    use Botble\Base\Models\MetaBox;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_MetaBox_C;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_MetaBox_QB;
    use LaravelIdea\Helper\Botble\Language\Models\_IH_LanguageMeta_C;
    use LaravelIdea\Helper\Botble\Language\Models\_IH_LanguageMeta_QB;
    use LaravelIdea\Helper\Botble\Language\Models\_IH_Language_C;
    use LaravelIdea\Helper\Botble\Language\Models\_IH_Language_QB;

    /**
     * @property int $lang_id
     * @property string $lang_name
     * @property string $lang_locale
     * @property string $lang_code
     * @property string|null $lang_flag
     * @property int $lang_is_default
     * @property int $lang_order
     * @property int $lang_is_rtl
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @method static _IH_Language_QB onWriteConnection()
     * @method _IH_Language_QB newQuery()
     * @method static _IH_Language_QB on(null|string $connection = null)
     * @method static _IH_Language_QB query()
     * @method static _IH_Language_QB with(array|string $relations)
     * @method _IH_Language_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Language_C|Language[] all()
     * @mixin _IH_Language_QB
     */
    class Language extends Model {}

    /**
     * @property int $lang_meta_id
     * @property string|null $lang_meta_code
     * @property string $lang_meta_origin
     * @property int $reference_id
     * @property string $reference_type
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property Model $reference
     * @method MorphTo reference()
     * @method static _IH_LanguageMeta_QB onWriteConnection()
     * @method _IH_LanguageMeta_QB newQuery()
     * @method static _IH_LanguageMeta_QB on(null|string $connection = null)
     * @method static _IH_LanguageMeta_QB query()
     * @method static _IH_LanguageMeta_QB with(array|string $relations)
     * @method _IH_LanguageMeta_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_LanguageMeta_C|LanguageMeta[] all()
     * @mixin _IH_LanguageMeta_QB
     */
    class LanguageMeta extends Model {}
}
