<?php //66f4e378b7ff7b3cf89635f8a364d3bc
/** @noinspection all */

namespace Botble\Page\Models {

    use Botble\ACL\Models\User;
    use Botble\Base\Enums\BaseStatusEnum;
    use Botble\Base\Models\MetaBox;
    use Botble\Revision\Revision;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Botble\ACL\Models\_IH_User_QB;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_MetaBox_C;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_MetaBox_QB;
    use LaravelIdea\Helper\Botble\Page\Models\_IH_Page_C;
    use LaravelIdea\Helper\Botble\Page\Models\_IH_Page_QB;
    use LaravelIdea\Helper\Botble\Revision\_IH_Revision_C;
    use LaravelIdea\Helper\Botble\Revision\_IH_Revision_QB;

    /**
     * @property int $id
     * @property string $name
     * @property string|null $content
     * @property int $user_id
     * @property string|null $image
     * @property string|null $template
     * @property string|null $description
     * @property BaseStatusEnum $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property _IH_Revision_C|Revision[] $revisionHistory
     * @property-read int $revision_history_count
     * @method MorphToMany|_IH_Revision_QB revisionHistory()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Page_QB onWriteConnection()
     * @method _IH_Page_QB newQuery()
     * @method static _IH_Page_QB on(null|string $connection = null)
     * @method static _IH_Page_QB query()
     * @method static _IH_Page_QB with(array|string $relations)
     * @method _IH_Page_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Page_C|Page[] all()
     * @ownLinks user_id,\Botble\ACL\Models\User,id
     * @foreignLinks id,\Botble\LanguageAdvanced\Models\PageTranslation,pages_id
     * @mixin _IH_Page_QB
     */
    class Page extends Model {}
}
