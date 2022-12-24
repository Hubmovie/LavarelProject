<?php //bc59a9f501ebbfa7643fa0179367bda7
/** @noinspection all */

namespace Botble\Marketplace\Models {

    use Botble\ACL\Models\User;
    use Botble\Base\Enums\BaseStatusEnum;
    use Botble\Base\Models\MetaBox;
    use Botble\Ecommerce\Models\Currency;
    use Botble\Ecommerce\Models\Customer;
    use Botble\Ecommerce\Models\Order;
    use Botble\Ecommerce\Models\Product;
    use Botble\Ecommerce\Models\ProductCategory;
    use Botble\Marketplace\Enums\RevenueTypeEnum;
    use Botble\Marketplace\Enums\WithdrawalStatusEnum;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Botble\ACL\Models\_IH_User_QB;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_MetaBox_C;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_MetaBox_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_Currency_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_Customer_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_Order_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_Order_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_ProductCategory_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_Product_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_Product_QB;
    use LaravelIdea\Helper\Botble\Marketplace\Models\_IH_CategoryCommission_C;
    use LaravelIdea\Helper\Botble\Marketplace\Models\_IH_CategoryCommission_QB;
    use LaravelIdea\Helper\Botble\Marketplace\Models\_IH_Revenue_C;
    use LaravelIdea\Helper\Botble\Marketplace\Models\_IH_Revenue_QB;
    use LaravelIdea\Helper\Botble\Marketplace\Models\_IH_Store_C;
    use LaravelIdea\Helper\Botble\Marketplace\Models\_IH_Store_QB;
    use LaravelIdea\Helper\Botble\Marketplace\Models\_IH_VendorInfo_C;
    use LaravelIdea\Helper\Botble\Marketplace\Models\_IH_VendorInfo_QB;
    use LaravelIdea\Helper\Botble\Marketplace\Models\_IH_Withdrawal_C;
    use LaravelIdea\Helper\Botble\Marketplace\Models\_IH_Withdrawal_QB;

    /**
     * @property int $id
     * @property int $product_category_id
     * @property float $commission_percentage
     * @property ProductCategory $category
     * @method BelongsTo|_IH_ProductCategory_QB category()
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @method static _IH_CategoryCommission_QB onWriteConnection()
     * @method _IH_CategoryCommission_QB newQuery()
     * @method static _IH_CategoryCommission_QB on(null|string $connection = null)
     * @method static _IH_CategoryCommission_QB query()
     * @method static _IH_CategoryCommission_QB with(array|string $relations)
     * @method _IH_CategoryCommission_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_CategoryCommission_C|CategoryCommission[] all()
     * @mixin _IH_CategoryCommission_QB
     */
    class CategoryCommission extends Model {}

    /**
     * @property int $id
     * @property int|null $customer_id
     * @property int|null $order_id
     * @property float|null $sub_amount
     * @property float|null $fee
     * @property float|null $amount
     * @property float|null $current_balance
     * @property string|null $currency
     * @property string|null $description
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property int $user_id
     * @property RevenueTypeEnum|null $type
     * @property-read string $description_tooltip attribute
     * @property Currency|null $currencyRelation
     * @method BelongsTo|_IH_Currency_QB currencyRelation()
     * @property Customer|null $customer
     * @method BelongsTo|_IH_Customer_QB customer()
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property Order|null $order
     * @method BelongsTo|_IH_Order_QB order()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Revenue_QB onWriteConnection()
     * @method _IH_Revenue_QB newQuery()
     * @method static _IH_Revenue_QB on(null|string $connection = null)
     * @method static _IH_Revenue_QB query()
     * @method static _IH_Revenue_QB with(array|string $relations)
     * @method _IH_Revenue_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Revenue_C|Revenue[] all()
     * @ownLinks user_id,\Botble\ACL\Models\User,id
     * @mixin _IH_Revenue_QB
     */
    class Revenue extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string|null $email
     * @property string|null $phone
     * @property string|null $address
     * @property string|null $country
     * @property string|null $state
     * @property string|null $city
     * @property int|null $customer_id
     * @property string|null $logo
     * @property string|null $description
     * @property string|null $content
     * @property BaseStatusEnum $status
     * @property Carbon|null $vendor_verified_at
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string|null $zip_code
     * @property string|null $company
     * @property-read null|string $city_name attribute
     * @property-read null|string $country_name attribute
     * @property-read string $full_address attribute
     * @property-read null|string $logo_url attribute
     * @property-read null|string $state_name attribute
     * @property Customer|null $customer
     * @method BelongsTo|_IH_Customer_QB customer()
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property _IH_Order_C|Order[] $orders
     * @property-read int $orders_count
     * @method HasMany|_IH_Order_QB orders()
     * @property _IH_Product_C|Product[] $products
     * @property-read int $products_count
     * @method HasMany|_IH_Product_QB products()
     * @property _IH_Product_C|Product[] $reviews
     * @property-read int $reviews_count
     * @method HasMany|_IH_Product_QB reviews()
     * @method static _IH_Store_QB onWriteConnection()
     * @method _IH_Store_QB newQuery()
     * @method static _IH_Store_QB on(null|string $connection = null)
     * @method static _IH_Store_QB query()
     * @method static _IH_Store_QB with(array|string $relations)
     * @method _IH_Store_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Store_C|Store[] all()
     * @mixin _IH_Store_QB
     */
    class Store extends Model {}

    /**
     * @property int $id
     * @property int $customer_id
     * @property float $balance
     * @property float $total_fee
     * @property float $total_revenue
     * @property string|null $signature
     * @property array|null $bank_info
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string|null $payout_payment_method
     * @property array|null $tax_info
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @method static _IH_VendorInfo_QB onWriteConnection()
     * @method _IH_VendorInfo_QB newQuery()
     * @method static _IH_VendorInfo_QB on(null|string $connection = null)
     * @method static _IH_VendorInfo_QB query()
     * @method static _IH_VendorInfo_QB with(array|string $relations)
     * @method _IH_VendorInfo_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_VendorInfo_C|VendorInfo[] all()
     * @mixin _IH_VendorInfo_QB
     */
    class VendorInfo extends Model {}

    /**
     * @property int $id
     * @property int|null $customer_id
     * @property float|null $fee
     * @property float|null $amount
     * @property float|null $current_balance
     * @property string|null $currency
     * @property string|null $description
     * @property array|null $bank_info
     * @property string|null $payment_channel
     * @property int $user_id
     * @property WithdrawalStatusEnum $status
     * @property array|null $images
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string|null $transaction_id
     * @property-read bool $vendor_can_edit attribute
     * @property Customer|null $customer
     * @method BelongsTo|_IH_Customer_QB customer()
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @method static _IH_Withdrawal_QB onWriteConnection()
     * @method _IH_Withdrawal_QB newQuery()
     * @method static _IH_Withdrawal_QB on(null|string $connection = null)
     * @method static _IH_Withdrawal_QB query()
     * @method static _IH_Withdrawal_QB with(array|string $relations)
     * @method _IH_Withdrawal_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Withdrawal_C|Withdrawal[] all()
     * @ownLinks user_id,\Botble\ACL\Models\User,id
     * @mixin _IH_Withdrawal_QB
     */
    class Withdrawal extends Model {}
}
