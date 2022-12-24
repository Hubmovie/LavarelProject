<?php //070103c0a821c871a96931cf996bdcd3
/** @noinspection all */

namespace Botble\Payment\Models {

    use Botble\ACL\Models\User;
    use Botble\Payment\Enums\PaymentMethodEnum;
    use Botble\Payment\Enums\PaymentStatusEnum;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Botble\ACL\Models\_IH_User_QB;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_MetaBox_QB;
    use LaravelIdea\Helper\Botble\Payment\Models\_IH_Payment_C;
    use LaravelIdea\Helper\Botble\Payment\Models\_IH_Payment_QB;

    /**
     * @property int $id
     * @property string|null $currency
     * @property int $user_id
     * @property string|null $charge_id
     * @property PaymentMethodEnum|null $payment_channel
     * @property string|null $description
     * @property float $amount
     * @property int|null $order_id
     * @property PaymentStatusEnum|null $status
     * @property string|null $payment_type
     * @property int|null $customer_id
     * @property float|null $refunded_amount
     * @property string|null $refund_note
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string|null $customer_type
     * @property array|null $metadata
     * @property Model $customer
     * @method MorphTo customer()
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Payment_QB onWriteConnection()
     * @method _IH_Payment_QB newQuery()
     * @method static _IH_Payment_QB on(null|string $connection = null)
     * @method static _IH_Payment_QB query()
     * @method static _IH_Payment_QB with(array|string $relations)
     * @method _IH_Payment_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Payment_C|Payment[] all()
     * @ownLinks user_id,\Botble\ACL\Models\User,id
     * @foreignLinks id,\Botble\Ecommerce\Models\Order,payment_id|id,\Botble\Ecommerce\Models\Invoice,payment_id
     * @mixin _IH_Payment_QB
     */
    class Payment extends Model {}
}
