<?php //1c08af5ea50a1fce73fbdd98b51b91d4
/** @noinspection all */

namespace Botble\Faq\Models {

    use Botble\Base\Enums\BaseStatusEnum;
    use Botble\Base\Models\MetaBox;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_MetaBox_C;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_MetaBox_QB;
    use LaravelIdea\Helper\Botble\Faq\Models\_IH_FaqCategoryTranslation_C;
    use LaravelIdea\Helper\Botble\Faq\Models\_IH_FaqCategoryTranslation_QB;
    use LaravelIdea\Helper\Botble\Faq\Models\_IH_FaqCategory_C;
    use LaravelIdea\Helper\Botble\Faq\Models\_IH_FaqCategory_QB;
    use LaravelIdea\Helper\Botble\Faq\Models\_IH_FaqTranslation_C;
    use LaravelIdea\Helper\Botble\Faq\Models\_IH_FaqTranslation_QB;
    use LaravelIdea\Helper\Botble\Faq\Models\_IH_Faq_C;
    use LaravelIdea\Helper\Botble\Faq\Models\_IH_Faq_QB;

    /**
     * @property int $id
     * @property string $question
     * @property string $answer
     * @property int $category_id
     * @property BaseStatusEnum $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property FaqCategory $category
     * @method BelongsTo|_IH_FaqCategory_QB category()
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @method static _IH_Faq_QB onWriteConnection()
     * @method _IH_Faq_QB newQuery()
     * @method static _IH_Faq_QB on(null|string $connection = null)
     * @method static _IH_Faq_QB query()
     * @method static _IH_Faq_QB with(array|string $relations)
     * @method _IH_Faq_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Faq_C|Faq[] all()
     * @ownLinks category_id,\Botble\Blog\Models\Category,id
     * @foreignLinks id,\Botble\Faq\Models\FaqTranslation,faqs_id
     * @mixin _IH_Faq_QB
     */
    class Faq extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property int $order
     * @property BaseStatusEnum $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_Faq_C|Faq[] $faqs
     * @property-read int $faqs_count
     * @method HasMany|_IH_Faq_QB faqs()
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @method static _IH_FaqCategory_QB onWriteConnection()
     * @method _IH_FaqCategory_QB newQuery()
     * @method static _IH_FaqCategory_QB on(null|string $connection = null)
     * @method static _IH_FaqCategory_QB query()
     * @method static _IH_FaqCategory_QB with(array|string $relations)
     * @method _IH_FaqCategory_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_FaqCategory_C|FaqCategory[] all()
     * @foreignLinks id,\Botble\Faq\Models\FaqCategoryTranslation,faq_categories_id
     * @mixin _IH_FaqCategory_QB
     */
    class FaqCategory extends Model {}

    /**
     * @property string $lang_code
     * @property int $faq_categories_id
     * @property string|null $name
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @method static _IH_FaqCategoryTranslation_QB onWriteConnection()
     * @method _IH_FaqCategoryTranslation_QB newQuery()
     * @method static _IH_FaqCategoryTranslation_QB on(null|string $connection = null)
     * @method static _IH_FaqCategoryTranslation_QB query()
     * @method static _IH_FaqCategoryTranslation_QB with(array|string $relations)
     * @method _IH_FaqCategoryTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_FaqCategoryTranslation_C|FaqCategoryTranslation[] all()
     * @ownLinks faq_categories_id,\Botble\Faq\Models\FaqCategory,id
     * @mixin _IH_FaqCategoryTranslation_QB
     */
    class FaqCategoryTranslation extends Model {}

    /**
     * @property string $lang_code
     * @property int $faqs_id
     * @property string|null $question
     * @property string|null $answer
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @method static _IH_FaqTranslation_QB onWriteConnection()
     * @method _IH_FaqTranslation_QB newQuery()
     * @method static _IH_FaqTranslation_QB on(null|string $connection = null)
     * @method static _IH_FaqTranslation_QB query()
     * @method static _IH_FaqTranslation_QB with(array|string $relations)
     * @method _IH_FaqTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_FaqTranslation_C|FaqTranslation[] all()
     * @ownLinks faqs_id,\Botble\Faq\Models\Faq,id
     * @mixin _IH_FaqTranslation_QB
     */
    class FaqTranslation extends Model {}
}
