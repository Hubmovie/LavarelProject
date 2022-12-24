<?php //0b3196a53dfe6828bf464b39fdb8e580
/** @noinspection all */

namespace Botble\Contact\Models {

    use Botble\Base\Models\MetaBox;
    use Botble\Contact\Enums\ContactStatusEnum;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_MetaBox_C;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_MetaBox_QB;
    use LaravelIdea\Helper\Botble\Contact\Models\_IH_ContactReply_C;
    use LaravelIdea\Helper\Botble\Contact\Models\_IH_ContactReply_QB;
    use LaravelIdea\Helper\Botble\Contact\Models\_IH_Contact_C;
    use LaravelIdea\Helper\Botble\Contact\Models\_IH_Contact_QB;

    /**
     * @property int $id
     * @property string $name
     * @property string $email
     * @property string|null $phone
     * @property string|null $address
     * @property string|null $subject
     * @property string $content
     * @property ContactStatusEnum $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property-read string $avatar_url attribute
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property _IH_ContactReply_C|ContactReply[] $replies
     * @property-read int $replies_count
     * @method HasMany|_IH_ContactReply_QB replies()
     * @method static _IH_Contact_QB onWriteConnection()
     * @method _IH_Contact_QB newQuery()
     * @method static _IH_Contact_QB on(null|string $connection = null)
     * @method static _IH_Contact_QB query()
     * @method static _IH_Contact_QB with(array|string $relations)
     * @method _IH_Contact_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Contact_C|Contact[] all()
     * @foreignLinks id,\Botble\Contact\Models\ContactReply,contact_id
     * @mixin _IH_Contact_QB
     */
    class Contact extends Model {}

    /**
     * @property int $id
     * @property string $message
     * @property int $contact_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @method static _IH_ContactReply_QB onWriteConnection()
     * @method _IH_ContactReply_QB newQuery()
     * @method static _IH_ContactReply_QB on(null|string $connection = null)
     * @method static _IH_ContactReply_QB query()
     * @method static _IH_ContactReply_QB with(array|string $relations)
     * @method _IH_ContactReply_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ContactReply_C|ContactReply[] all()
     * @ownLinks contact_id,\Botble\Contact\Models\Contact,id
     * @mixin _IH_ContactReply_QB
     */
    class ContactReply extends Model {}
}
