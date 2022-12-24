<?php //0f30e346f4acf4b478db074e4ee3be93
/** @noinspection all */

namespace Botble\Newsletter\Models {

    use Botble\Base\Models\MetaBox;
    use Botble\Newsletter\Enums\NewsletterStatusEnum;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_MetaBox_C;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_MetaBox_QB;
    use LaravelIdea\Helper\Botble\Newsletter\Models\_IH_Newsletter_C;
    use LaravelIdea\Helper\Botble\Newsletter\Models\_IH_Newsletter_QB;

    /**
     * @property int $id
     * @property string $email
     * @property string|null $name
     * @property NewsletterStatusEnum $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @method static _IH_Newsletter_QB onWriteConnection()
     * @method _IH_Newsletter_QB newQuery()
     * @method static _IH_Newsletter_QB on(null|string $connection = null)
     * @method static _IH_Newsletter_QB query()
     * @method static _IH_Newsletter_QB with(array|string $relations)
     * @method _IH_Newsletter_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Newsletter_C|Newsletter[] all()
     * @mixin _IH_Newsletter_QB
     */
    class Newsletter extends Model {}
}
