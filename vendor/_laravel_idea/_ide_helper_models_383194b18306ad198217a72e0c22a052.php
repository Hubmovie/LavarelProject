<?php //6ed017c887714fbdaa2940ea0f347d2e
/** @noinspection all */

namespace Botble\Ecommerce\Models {

    use Botble\ACL\Models\User;
    use Botble\Base\Enums\BaseStatusEnum;
    use Botble\Base\Models\MetaBox;
    use Botble\Ecommerce\Enums\CustomerStatusEnum;
    use Botble\Ecommerce\Enums\InvoiceStatusEnum;
    use Botble\Ecommerce\Enums\OrderAddressTypeEnum;
    use Botble\Ecommerce\Enums\OrderReturnReasonEnum;
    use Botble\Ecommerce\Enums\OrderReturnStatusEnum;
    use Botble\Ecommerce\Enums\OrderStatusEnum;
    use Botble\Ecommerce\Enums\ProductTypeEnum;
    use Botble\Ecommerce\Enums\ShippingCodStatusEnum;
    use Botble\Ecommerce\Enums\ShippingMethodEnum;
    use Botble\Ecommerce\Enums\ShippingRuleTypeEnum;
    use Botble\Ecommerce\Enums\ShippingStatusEnum;
    use Botble\Ecommerce\Enums\StockStatusEnum;
    use Botble\Payment\Models\Payment;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\BelongsToMany;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\HasOne;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Notifications\DatabaseNotification;
    use Illuminate\Notifications\DatabaseNotificationCollection;
    use Illuminate\Support\Carbon;
    use Illuminate\Support\Collection;
    use Illuminate\Support\HtmlString;
    use Laravel\Sanctum\PersonalAccessToken;
    use LaravelIdea\Helper\Botble\ACL\Models\_IH_User_QB;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_MetaBox_C;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_MetaBox_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_Address_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_Address_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_BrandTranslation_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_BrandTranslation_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_Brand_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_Brand_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_Currency_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_Currency_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_Customer_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_Customer_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_DiscountCustomer_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_DiscountCustomer_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_DiscountProductCollection_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_DiscountProductCollection_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_DiscountProduct_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_DiscountProduct_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_Discount_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_Discount_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_FlashSaleTranslation_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_FlashSaleTranslation_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_FlashSale_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_FlashSale_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_GlobalOptionValue_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_GlobalOptionValue_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_GlobalOption_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_GlobalOption_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_GroupedProduct_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_GroupedProduct_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_InvoiceItem_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_InvoiceItem_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_Invoice_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_Invoice_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_OptionValue_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_OptionValue_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_Option_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_Option_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_OrderAddress_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_OrderAddress_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_OrderHistory_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_OrderHistory_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_OrderProduct_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_OrderProduct_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_OrderReferral_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_OrderReferral_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_OrderReturnItem_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_OrderReturnItem_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_OrderReturn_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_OrderReturn_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_Order_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_Order_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_ProductAttributeSetTranslation_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_ProductAttributeSetTranslation_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_ProductAttributeSet_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_ProductAttributeSet_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_ProductAttributeTranslation_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_ProductAttributeTranslation_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_ProductAttribute_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_ProductAttribute_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_ProductCategoryTranslation_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_ProductCategoryTranslation_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_ProductCategory_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_ProductCategory_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_ProductCollectionTranslation_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_ProductCollectionTranslation_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_ProductCollection_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_ProductCollection_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_ProductFile_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_ProductFile_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_ProductLabelTranslation_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_ProductLabelTranslation_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_ProductLabel_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_ProductLabel_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_ProductTagTranslation_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_ProductTagTranslation_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_ProductTag_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_ProductTag_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_ProductTranslation_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_ProductTranslation_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_ProductVariationItem_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_ProductVariationItem_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_ProductVariation_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_ProductVariation_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_Product_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_Product_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_Review_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_Review_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_ShipmentHistory_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_ShipmentHistory_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_Shipment_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_Shipment_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_ShippingRuleItem_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_ShippingRuleItem_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_ShippingRule_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_ShippingRule_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_Shipping_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_Shipping_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_StoreLocator_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_StoreLocator_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_Tax_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_Tax_QB;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_Wishlist_C;
    use LaravelIdea\Helper\Botble\Ecommerce\Models\_IH_Wishlist_QB;
    use LaravelIdea\Helper\Botble\Payment\Models\_IH_Payment_QB;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_QB;
    use LaravelIdea\Helper\Laravel\Sanctum\_IH_PersonalAccessToken_C;
    use LaravelIdea\Helper\Laravel\Sanctum\_IH_PersonalAccessToken_QB;

    /**
     * @property int $id
     * @property string $name
     * @property string|null $email
     * @property string|null $phone
     * @property string|null $country
     * @property string|null $state
     * @property string|null $city
     * @property string $address
     * @property int $customer_id
     * @property int $is_default
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string|null $zip_code
     * @property-read null|string $city_name attribute
     * @property-read null|string $country_name attribute
     * @property-read string $full_address attribute
     * @property-read null|string $state_name attribute
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @method static _IH_Address_QB onWriteConnection()
     * @method _IH_Address_QB newQuery()
     * @method static _IH_Address_QB on(null|string $connection = null)
     * @method static _IH_Address_QB query()
     * @method static _IH_Address_QB with(array|string $relations)
     * @method _IH_Address_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Address_C|Address[] all()
     * @mixin _IH_Address_QB
     */
    class Address extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string|null $description
     * @property string|null $website
     * @property string|null $logo
     * @property BaseStatusEnum $status
     * @property int $order
     * @property int $is_featured
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property _IH_Product_C|Product[] $products
     * @property-read int $products_count
     * @method HasMany|_IH_Product_QB products()
     * @method static _IH_Brand_QB onWriteConnection()
     * @method _IH_Brand_QB newQuery()
     * @method static _IH_Brand_QB on(null|string $connection = null)
     * @method static _IH_Brand_QB query()
     * @method static _IH_Brand_QB with(array|string $relations)
     * @method _IH_Brand_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Brand_C|Brand[] all()
     * @foreignLinks id,\Botble\Ecommerce\Models\BrandTranslation,ec_brands_id
     * @mixin _IH_Brand_QB
     */
    class Brand extends Model {}

    /**
     * @property string $lang_code
     * @property int $ec_brands_id
     * @property string|null $name
     * @property string|null $description
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @method static _IH_BrandTranslation_QB onWriteConnection()
     * @method _IH_BrandTranslation_QB newQuery()
     * @method static _IH_BrandTranslation_QB on(null|string $connection = null)
     * @method static _IH_BrandTranslation_QB query()
     * @method static _IH_BrandTranslation_QB with(array|string $relations)
     * @method _IH_BrandTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_BrandTranslation_C|BrandTranslation[] all()
     * @ownLinks ec_brands_id,\Botble\Ecommerce\Models\Brand,id
     * @mixin _IH_BrandTranslation_QB
     */
    class BrandTranslation extends Model {}

    /**
     * @property int $id
     * @property string $title
     * @property string $symbol
     * @property int $is_prefix_symbol
     * @property int|null $decimals
     * @property int|null $order
     * @property int $is_default
     * @property float $exchange_rate
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @method static _IH_Currency_QB onWriteConnection()
     * @method _IH_Currency_QB newQuery()
     * @method static _IH_Currency_QB on(null|string $connection = null)
     * @method static _IH_Currency_QB query()
     * @method static _IH_Currency_QB with(array|string $relations)
     * @method _IH_Currency_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Currency_C|Currency[] all()
     * @mixin _IH_Currency_QB
     */
    class Currency extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string $email
     * @property string $password
     * @property string|null $avatar
     * @property Carbon|null $dob
     * @property string|null $phone
     * @property string|null $remember_token
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Carbon|null $confirmed_at
     * @property string|null $email_verify_token
     * @property bool $is_vendor
     * @property Carbon|null $vendor_verified_at
     * @property CustomerStatusEnum $status
     * @property-read string $avatar_url attribute
     * @property _IH_Address_C|Address[] $addresses
     * @property-read int $addresses_count
     * @method HasMany|_IH_Address_QB addresses()
     * @property _IH_Discount_C|Discount[] $discounts
     * @property-read int $discounts_count
     * @method BelongsToMany|_IH_Discount_QB discounts()
     * @property DatabaseNotificationCollection|DatabaseNotification[] $notifications
     * @property-read int $notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB notifications()
     * @property _IH_Order_C|Order[] $orders
     * @property-read int $orders_count
     * @method HasMany|_IH_Order_QB orders()
     * @property _IH_Discount_C|Discount[] $promotions
     * @property-read int $promotions_count
     * @method BelongsToMany|_IH_Discount_QB promotions()
     * @property DatabaseNotificationCollection|DatabaseNotification[] $readNotifications
     * @property-read int $read_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB readNotifications()
     * @property _IH_Review_C|Review[] $reviews
     * @property-read int $reviews_count
     * @method HasMany|_IH_Review_QB reviews()
     * @property _IH_PersonalAccessToken_C|PersonalAccessToken[] $tokens
     * @property-read int $tokens_count
     * @method MorphToMany|_IH_PersonalAccessToken_QB tokens()
     * @property DatabaseNotificationCollection|DatabaseNotification[] $unreadNotifications
     * @property-read int $unread_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB unreadNotifications()
     * @property _IH_Product_C|Product[] $viewedProducts
     * @property-read int $viewed_products_count
     * @method BelongsToMany|_IH_Product_QB viewedProducts()
     * @property _IH_Wishlist_C|Wishlist[] $wishlist
     * @property-read int $wishlist_count
     * @method HasMany|_IH_Wishlist_QB wishlist()
     * @method static _IH_Customer_QB onWriteConnection()
     * @method _IH_Customer_QB newQuery()
     * @method static _IH_Customer_QB on(null|string $connection = null)
     * @method static _IH_Customer_QB query()
     * @method static _IH_Customer_QB with(array|string $relations)
     * @method _IH_Customer_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Customer_C|Customer[] all()
     * @mixin _IH_Customer_QB
     */
    class Customer extends Model {}

    /**
     * @property int $id
     * @property string|null $title
     * @property string|null $code
     * @property Carbon|null $start_date
     * @property Carbon|null $end_date
     * @property int|null $quantity
     * @property int $total_used
     * @property float|null $value
     * @property string|null $type
     * @property bool $can_use_with_promotion
     * @property string|null $discount_on
     * @property int|null $product_quantity
     * @property string $type_option
     * @property string $target
     * @property float|null $min_order_price
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property int|null $store_id
     * @property _IH_Customer_C|Customer[] $customers
     * @property-read int $customers_count
     * @method BelongsToMany|_IH_Customer_QB customers()
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property _IH_ProductCollection_C|ProductCollection[] $productCollections
     * @property-read int $product_collections_count
     * @method BelongsToMany|_IH_ProductCollection_QB productCollections()
     * @property _IH_Product_C|Product[] $products
     * @property-read int $products_count
     * @method BelongsToMany|_IH_Product_QB products()
     * @method static _IH_Discount_QB onWriteConnection()
     * @method _IH_Discount_QB newQuery()
     * @method static _IH_Discount_QB on(null|string $connection = null)
     * @method static _IH_Discount_QB query()
     * @method static _IH_Discount_QB with(array|string $relations)
     * @method _IH_Discount_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Discount_C|Discount[] all()
     * @mixin _IH_Discount_QB
     */
    class Discount extends Model {}

    /**
     * @property int $discount_id
     * @property int $customer_id
     * @property Customer $customers
     * @method BelongsTo|_IH_Customer_QB customers()
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @method static _IH_DiscountCustomer_QB onWriteConnection()
     * @method _IH_DiscountCustomer_QB newQuery()
     * @method static _IH_DiscountCustomer_QB on(null|string $connection = null)
     * @method static _IH_DiscountCustomer_QB query()
     * @method static _IH_DiscountCustomer_QB with(array|string $relations)
     * @method _IH_DiscountCustomer_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_DiscountCustomer_C|DiscountCustomer[] all()
     * @mixin _IH_DiscountCustomer_QB
     */
    class DiscountCustomer extends Model {}

    /**
     * @property int $discount_id
     * @property int $product_id
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property Product $products
     * @method BelongsTo|_IH_Product_QB products()
     * @method static _IH_DiscountProduct_QB onWriteConnection()
     * @method _IH_DiscountProduct_QB newQuery()
     * @method static _IH_DiscountProduct_QB on(null|string $connection = null)
     * @method static _IH_DiscountProduct_QB query()
     * @method static _IH_DiscountProduct_QB with(array|string $relations)
     * @method _IH_DiscountProduct_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_DiscountProduct_C|DiscountProduct[] all()
     * @mixin _IH_DiscountProduct_QB
     */
    class DiscountProduct extends Model {}

    /**
     * @property int $discount_id
     * @property int $product_collection_id
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property ProductCollection $productCollections
     * @method BelongsTo|_IH_ProductCollection_QB productCollections()
     * @method static _IH_DiscountProductCollection_QB onWriteConnection()
     * @method _IH_DiscountProductCollection_QB newQuery()
     * @method static _IH_DiscountProductCollection_QB on(null|string $connection = null)
     * @method static _IH_DiscountProductCollection_QB query()
     * @method static _IH_DiscountProductCollection_QB with(array|string $relations)
     * @method _IH_DiscountProductCollection_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_DiscountProductCollection_C|DiscountProductCollection[] all()
     * @mixin _IH_DiscountProductCollection_QB
     */
    class DiscountProductCollection extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property Carbon $end_date
     * @property BaseStatusEnum $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property _IH_Product_C|Product[] $products
     * @property-read int $products_count
     * @method BelongsToMany|_IH_Product_QB products()
     * @method static _IH_FlashSale_QB onWriteConnection()
     * @method _IH_FlashSale_QB newQuery()
     * @method static _IH_FlashSale_QB on(null|string $connection = null)
     * @method static _IH_FlashSale_QB query()
     * @method static _IH_FlashSale_QB with(array|string $relations)
     * @method _IH_FlashSale_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_FlashSale_C|FlashSale[] all()
     * @foreignLinks id,\Botble\Ecommerce\Models\FlashSaleTranslation,ec_flash_sales_id
     * @mixin _IH_FlashSale_QB
     */
    class FlashSale extends Model {}

    /**
     * @property string $lang_code
     * @property int $ec_flash_sales_id
     * @property string|null $name
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @method static _IH_FlashSaleTranslation_QB onWriteConnection()
     * @method _IH_FlashSaleTranslation_QB newQuery()
     * @method static _IH_FlashSaleTranslation_QB on(null|string $connection = null)
     * @method static _IH_FlashSaleTranslation_QB query()
     * @method static _IH_FlashSaleTranslation_QB with(array|string $relations)
     * @method _IH_FlashSaleTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_FlashSaleTranslation_C|FlashSaleTranslation[] all()
     * @ownLinks ec_flash_sales_id,\Botble\Ecommerce\Models\FlashSale,id
     * @mixin _IH_FlashSaleTranslation_QB
     */
    class FlashSaleTranslation extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string $option_type
     * @property bool $required
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property-read null|string $option_name attribute
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property _IH_GlobalOptionValue_C|GlobalOptionValue[] $values
     * @property-read int $values_count
     * @method HasMany|_IH_GlobalOptionValue_QB values()
     * @method static _IH_GlobalOption_QB onWriteConnection()
     * @method _IH_GlobalOption_QB newQuery()
     * @method static _IH_GlobalOption_QB on(null|string $connection = null)
     * @method static _IH_GlobalOption_QB query()
     * @method static _IH_GlobalOption_QB with(array|string $relations)
     * @method _IH_GlobalOption_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_GlobalOption_C|GlobalOption[] all()
     * @mixin _IH_GlobalOption_QB
     */
    class GlobalOption extends Model {}

    /**
     * @property int $option_id
     * @property float|null $affect_price
     * @property int $order
     * @property int $affect_type
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property GlobalOption $option
     * @method BelongsTo|_IH_GlobalOption_QB option()
     * @method static _IH_GlobalOptionValue_QB onWriteConnection()
     * @method _IH_GlobalOptionValue_QB newQuery()
     * @method static _IH_GlobalOptionValue_QB on(null|string $connection = null)
     * @method static _IH_GlobalOptionValue_QB query()
     * @method static _IH_GlobalOptionValue_QB with(array|string $relations)
     * @method _IH_GlobalOptionValue_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_GlobalOptionValue_C|GlobalOptionValue[] all()
     * @mixin _IH_GlobalOptionValue_QB
     */
    class GlobalOptionValue extends Model {}

    /**
     * @property int $id
     * @property int $parent_product_id
     * @property int $product_id
     * @property int $fixed_qty
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @method static _IH_GroupedProduct_QB onWriteConnection()
     * @method _IH_GroupedProduct_QB newQuery()
     * @method static _IH_GroupedProduct_QB on(null|string $connection = null)
     * @method static _IH_GroupedProduct_QB query()
     * @method static _IH_GroupedProduct_QB with(array|string $relations)
     * @method _IH_GroupedProduct_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_GroupedProduct_C|GroupedProduct[] all()
     * @mixin _IH_GroupedProduct_QB
     */
    class GroupedProduct extends Model {}

    /**
     * @property int $id
     * @property int $reference_id
     * @property string $reference_type
     * @property string $code
     * @property string|null $customer_name
     * @property string|null $company_name
     * @property string|null $company_logo
     * @property string|null $customer_email
     * @property string|null $customer_phone
     * @property string|null $customer_address
     * @property string|null $customer_tax_id
     * @property float $sub_total
     * @property float $tax_amount
     * @property float $shipping_amount
     * @property float $discount_amount
     * @property string|null $shipping_option
     * @property string $shipping_method
     * @property string|null $coupon_code
     * @property string|null $discount_description
     * @property float $amount
     * @property string|null $description
     * @property int|null $payment_id
     * @property InvoiceStatusEnum $status
     * @property Carbon|null $paid_at
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_InvoiceItem_C|InvoiceItem[] $items
     * @property-read int $items_count
     * @method HasMany|_IH_InvoiceItem_QB items()
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property Payment|null $payment
     * @method BelongsTo|_IH_Payment_QB payment()
     * @property Model $reference
     * @method MorphTo reference()
     * @method static _IH_Invoice_QB onWriteConnection()
     * @method _IH_Invoice_QB newQuery()
     * @method static _IH_Invoice_QB on(null|string $connection = null)
     * @method static _IH_Invoice_QB query()
     * @method static _IH_Invoice_QB with(array|string $relations)
     * @method _IH_Invoice_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Invoice_C|Invoice[] all()
     * @ownLinks payment_id,\Botble\Payment\Models\Payment,id
     * @mixin _IH_Invoice_QB
     */
    class Invoice extends Model {}

    /**
     * @property int $id
     * @property int $invoice_id
     * @property int $reference_id
     * @property string $reference_type
     * @property string $name
     * @property string|null $description
     * @property string|null $image
     * @property int $qty
     * @property float $sub_total
     * @property float $tax_amount
     * @property float $discount_amount
     * @property float $amount
     * @property string|null $options
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Invoice $invoice
     * @method BelongsTo|_IH_Invoice_QB invoice()
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property Model $reference
     * @method MorphTo reference()
     * @method static _IH_InvoiceItem_QB onWriteConnection()
     * @method _IH_InvoiceItem_QB newQuery()
     * @method static _IH_InvoiceItem_QB on(null|string $connection = null)
     * @method static _IH_InvoiceItem_QB query()
     * @method static _IH_InvoiceItem_QB with(array|string $relations)
     * @method _IH_InvoiceItem_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_InvoiceItem_C|InvoiceItem[] all()
     * @mixin _IH_InvoiceItem_QB
     */
    class InvoiceItem extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string|null $option_type
     * @property int $product_id
     * @property int $order
     * @property bool $required
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property Product $products
     * @method BelongsTo|_IH_Product_QB products()
     * @property _IH_OptionValue_C|OptionValue[] $values
     * @property-read int $values_count
     * @method HasMany|_IH_OptionValue_QB values()
     * @method static _IH_Option_QB onWriteConnection()
     * @method _IH_Option_QB newQuery()
     * @method static _IH_Option_QB on(null|string $connection = null)
     * @method static _IH_Option_QB query()
     * @method static _IH_Option_QB with(array|string $relations)
     * @method _IH_Option_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Option_C|Option[] all()
     * @mixin _IH_Option_QB
     */
    class Option extends Model {}

    /**
     * @property int $option_id
     * @property float|null $affect_price
     * @property int $order
     * @property int $affect_type
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property Option $option
     * @method BelongsTo|_IH_Option_QB option()
     * @method static _IH_OptionValue_QB onWriteConnection()
     * @method _IH_OptionValue_QB newQuery()
     * @method static _IH_OptionValue_QB on(null|string $connection = null)
     * @method static _IH_OptionValue_QB query()
     * @method static _IH_OptionValue_QB with(array|string $relations)
     * @method _IH_OptionValue_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_OptionValue_C|OptionValue[] all()
     * @mixin _IH_OptionValue_QB
     */
    class OptionValue extends Model {}

    /**
     * @property int $id
     * @property int $user_id
     * @property string|null $shipping_option
     * @property ShippingMethodEnum $shipping_method
     * @property OrderStatusEnum $status
     * @property float $amount
     * @property float|null $tax_amount
     * @property float|null $shipping_amount
     * @property string|null $description
     * @property string|null $coupon_code
     * @property float|null $discount_amount
     * @property float $sub_total
     * @property bool $is_confirmed
     * @property string|null $discount_description
     * @property bool|null $is_finished
     * @property string|null $token
     * @property int|null $payment_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property int|null $store_id
     * @property Carbon|null $completed_at
     * @property string|null $code
     * @property-read string $amount_format attribute
     * @property-read string $discount_amount_format attribute
     * @property-read string $full_address attribute
     * @property-read bool $is_free_shipping attribute
     * @property-read float|int $products_weight attribute
     * @property-read array|null|string $shipping_method_name attribute
     * @property-read null|string $user_name attribute
     * @property OrderAddress $address
     * @method HasOne|_IH_OrderAddress_QB address()
     * @property OrderAddress $billingAddress
     * @method HasOne|_IH_OrderAddress_QB billingAddress()
     * @property _IH_OrderHistory_C|OrderHistory[] $histories
     * @property-read int $histories_count
     * @method HasMany|_IH_OrderHistory_QB histories()
     * @property Invoice $invoice
     * @method HasOne|_IH_Invoice_QB invoice()
     * @property Invoice $isInvoiceAvailable
     * @method HasOne|_IH_Invoice_QB isInvoiceAvailable()
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property Payment|null $payment
     * @method BelongsTo|_IH_Payment_QB payment()
     * @property _IH_OrderProduct_C|OrderProduct[] $products
     * @property-read int $products_count
     * @method HasMany|_IH_OrderProduct_QB products()
     * @property OrderReferral $referral
     * @method HasOne|_IH_OrderReferral_QB referral()
     * @property OrderReturn $returnRequest
     * @method HasOne|_IH_OrderReturn_QB returnRequest()
     * @property Shipment $shipment
     * @method HasOne|_IH_Shipment_QB shipment()
     * @property OrderAddress $shippingAddress
     * @method HasOne|_IH_OrderAddress_QB shippingAddress()
     * @property Customer $user
     * @method BelongsTo|_IH_Customer_QB user()
     * @method static _IH_Order_QB onWriteConnection()
     * @method _IH_Order_QB newQuery()
     * @method static _IH_Order_QB on(null|string $connection = null)
     * @method static _IH_Order_QB query()
     * @method static _IH_Order_QB with(array|string $relations)
     * @method _IH_Order_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Order_C|Order[] all()
     * @ownLinks user_id,\Botble\ACL\Models\User,id|payment_id,\Botble\Payment\Models\Payment,id
     * @mixin _IH_Order_QB
     */
    class Order extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string|null $phone
     * @property string|null $email
     * @property string|null $country
     * @property string|null $state
     * @property string|null $city
     * @property string|null $address
     * @property int $order_id
     * @property string|null $zip_code
     * @property OrderAddressTypeEnum $type
     * @property-read string $avatar_url attribute
     * @property-read null|string $city_name attribute
     * @property-read null|string $country_name attribute
     * @property-read string $full_address attribute
     * @property-read null|string $state_name attribute
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property Order $order
     * @method BelongsTo|_IH_Order_QB order()
     * @method static _IH_OrderAddress_QB onWriteConnection()
     * @method _IH_OrderAddress_QB newQuery()
     * @method static _IH_OrderAddress_QB on(null|string $connection = null)
     * @method static _IH_OrderAddress_QB query()
     * @method static _IH_OrderAddress_QB with(array|string $relations)
     * @method _IH_OrderAddress_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_OrderAddress_C|OrderAddress[] all()
     * @mixin _IH_OrderAddress_QB
     */
    class OrderAddress extends Model {}

    /**
     * @property int $id
     * @property string $action
     * @property string $description
     * @property int|null $user_id
     * @property int $order_id
     * @property string|null $extras
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property Order $order
     * @method BelongsTo|_IH_Order_QB order()
     * @property User|null $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_OrderHistory_QB onWriteConnection()
     * @method _IH_OrderHistory_QB newQuery()
     * @method static _IH_OrderHistory_QB on(null|string $connection = null)
     * @method static _IH_OrderHistory_QB query()
     * @method static _IH_OrderHistory_QB with(array|string $relations)
     * @method _IH_OrderHistory_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_OrderHistory_C|OrderHistory[] all()
     * @ownLinks user_id,\Botble\ACL\Models\User,id
     * @mixin _IH_OrderHistory_QB
     */
    class OrderHistory extends Model {}

    /**
     * @property int $id
     * @property int $order_id
     * @property int $qty
     * @property float $price
     * @property float $tax_amount
     * @property array|null $options
     * @property int|null $product_id
     * @property string $product_name
     * @property float|null $weight
     * @property int|null $restock_quantity
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string $product_type
     * @property int $times_downloaded
     * @property array|null $product_options
     * @property string|null $product_image
     * @property-read string $amount_format attribute
     * @property-read string $total_format attribute
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property Order $order
     * @method BelongsTo|_IH_Order_QB order()
     * @property Product|null $product
     * @method BelongsTo|_IH_Product_QB product()
     * @property _IH_ProductFile_C|ProductFile[] $productFiles
     * @property-read int $product_files_count
     * @method HasMany|_IH_ProductFile_QB productFiles()
     * @method static _IH_OrderProduct_QB onWriteConnection()
     * @method _IH_OrderProduct_QB newQuery()
     * @method static _IH_OrderProduct_QB on(null|string $connection = null)
     * @method static _IH_OrderProduct_QB query()
     * @method static _IH_OrderProduct_QB with(array|string $relations)
     * @method _IH_OrderProduct_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_OrderProduct_C|OrderProduct[] all()
     * @mixin _IH_OrderProduct_QB
     */
    class OrderProduct extends Model {}

    /**
     * @property int $id
     * @property string|null $ip
     * @property string|null $landing_domain
     * @property string|null $landing_page
     * @property string|null $landing_params
     * @property string|null $referral
     * @property string|null $gclid
     * @property string|null $fclid
     * @property string|null $utm_source
     * @property string|null $utm_campaign
     * @property string|null $utm_medium
     * @property string|null $utm_term
     * @property string|null $utm_content
     * @property string|null $referrer_url
     * @property string|null $referrer_domain
     * @property int|null $order_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property Order|null $order
     * @method BelongsTo|_IH_Order_QB order()
     * @method static _IH_OrderReferral_QB onWriteConnection()
     * @method _IH_OrderReferral_QB newQuery()
     * @method static _IH_OrderReferral_QB on(null|string $connection = null)
     * @method static _IH_OrderReferral_QB query()
     * @method static _IH_OrderReferral_QB with(array|string $relations)
     * @method _IH_OrderReferral_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_OrderReferral_C|OrderReferral[] all()
     * @mixin _IH_OrderReferral_QB
     */
    class OrderReferral extends Model {}

    /**
     * @property int $id
     * @property int $order_id
     * @property int|null $store_id
     * @property int $user_id
     * @property OrderReturnReasonEnum|null $reason
     * @property OrderStatusEnum|null $order_status
     * @property OrderReturnStatusEnum $return_status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string|null $code
     * @property Customer $customer
     * @method BelongsTo|_IH_Customer_QB customer()
     * @property _IH_OrderReturnItem_C|OrderReturnItem[] $items
     * @property-read int $items_count
     * @method HasMany|_IH_OrderReturnItem_QB items()
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property Order $order
     * @method BelongsTo|_IH_Order_QB order()
     * @method static _IH_OrderReturn_QB onWriteConnection()
     * @method _IH_OrderReturn_QB newQuery()
     * @method static _IH_OrderReturn_QB on(null|string $connection = null)
     * @method static _IH_OrderReturn_QB query()
     * @method static _IH_OrderReturn_QB with(array|string $relations)
     * @method _IH_OrderReturn_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_OrderReturn_C|OrderReturn[] all()
     * @ownLinks user_id,\Botble\ACL\Models\User,id
     * @mixin _IH_OrderReturn_QB
     */
    class OrderReturn extends Model {}

    /**
     * @property int $id
     * @property int $order_return_id
     * @property int $order_product_id
     * @property int $product_id
     * @property string $product_name
     * @property int $qty
     * @property float $price
     * @property OrderReturnReasonEnum|null $reason
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string|null $product_image
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property OrderProduct $orderProduct
     * @method BelongsTo|_IH_OrderProduct_QB orderProduct()
     * @property OrderReturn $orderReturn
     * @method BelongsTo|_IH_OrderReturn_QB orderReturn()
     * @property Product $product
     * @method BelongsTo|_IH_Product_QB product()
     * @method static _IH_OrderReturnItem_QB onWriteConnection()
     * @method _IH_OrderReturnItem_QB newQuery()
     * @method static _IH_OrderReturnItem_QB on(null|string $connection = null)
     * @method static _IH_OrderReturnItem_QB query()
     * @method static _IH_OrderReturnItem_QB with(array|string $relations)
     * @method _IH_OrderReturnItem_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_OrderReturnItem_C|OrderReturnItem[] all()
     * @mixin _IH_OrderReturnItem_QB
     */
    class OrderReturnItem extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string|null $description
     * @property string|null $content
     * @property BaseStatusEnum $status
     * @property string|null $images
     * @property string|null $sku
     * @property int $order
     * @property int|null $quantity
     * @property int $allow_checkout_when_out_of_stock
     * @property int $with_storehouse_management
     * @property int $is_featured
     * @property int|null $brand_id
     * @property int $is_variation
     * @property int $sale_type
     * @property float|null $price
     * @property float|null $sale_price
     * @property Carbon|null $start_date
     * @property Carbon|null $end_date
     * @property float|null $length
     * @property float|null $wide
     * @property float|null $height
     * @property float|null $weight
     * @property int|null $tax_id
     * @property int $views
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property StockStatusEnum|null $stock_status
     * @property int|null $store_id
     * @property int|null $created_by_id
     * @property string $created_by_type
     * @property int|null $approved_by
     * @property string|null $image
     * @property ProductTypeEnum|null $product_type
     * @property-read array $faq_items attribute
     * @property-read false|float|null $front_sale_price attribute
     * @property-read float|null $front_sale_price_with_taxes attribute
     * @property-read float|null $original_price attribute
     * @property-read int|null $original_product attribute
     * @property-read string $price_in_table attribute
     * @property-read float|null $price_with_taxes attribute
     * @property-read array $review_images attribute
     * @property-read null|string $stock_status_html attribute
     * @property-read null|string $stock_status_label attribute
     * @property-read $total_taxes_percentage attribute
     * @property-read string $variation_attributes attribute
     * @property Brand|null $brand
     * @method BelongsTo|_IH_Brand_QB brand()
     * @property _IH_ProductCategory_C|ProductCategory[] $categories
     * @property-read int $categories_count
     * @method BelongsToMany|_IH_ProductCategory_QB categories()
     * @property Model $createdBy
     * @method MorphTo createdBy()
     * @property _IH_Product_C|Product[] $crossSales
     * @property-read int $cross_sales_count
     * @method BelongsToMany|_IH_Product_QB crossSales()
     * @property ProductVariation $defaultVariation
     * @method HasOne|_IH_ProductVariation_QB defaultVariation()
     * @property _IH_Discount_C|Discount[] $discounts
     * @property-read int $discounts_count
     * @method BelongsToMany|_IH_Discount_QB discounts()
     * @property _IH_GroupedProduct_C|GroupedProduct[] $groupedItems
     * @property-read int $grouped_items_count
     * @method HasMany|_IH_GroupedProduct_QB groupedItems()
     * @property _IH_Product_C|Product[] $groupedProduct
     * @property-read int $grouped_product_count
     * @method BelongsToMany|_IH_Product_QB groupedProduct()
     * @property _IH_FlashSale_C|FlashSale[] $latestFlashSales
     * @property-read int $latest_flash_sales_count
     * @method BelongsToMany|_IH_FlashSale_QB latestFlashSales()
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property _IH_Option_C|Option[] $options
     * @property-read int $options_count
     * @method HasMany|_IH_Option_QB options()
     * @property _IH_Product_C|Product[] $parentProduct
     * @property-read int $parent_product_count
     * @method BelongsToMany|_IH_Product_QB parentProduct()
     * @property _IH_ProductAttributeSet_C|ProductAttributeSet[] $productAttributeSets
     * @property-read int $product_attribute_sets_count
     * @method BelongsToMany|_IH_ProductAttributeSet_QB productAttributeSets()
     * @property _IH_ProductCollection_C|ProductCollection[] $productCollections
     * @property-read int $product_collections_count
     * @method BelongsToMany|_IH_ProductCollection_QB productCollections()
     * @property _IH_ProductFile_C|ProductFile[] $productFiles
     * @property-read int $product_files_count
     * @method HasMany|_IH_ProductFile_QB productFiles()
     * @property _IH_ProductLabel_C|ProductLabel[] $productLabels
     * @property-read int $product_labels_count
     * @method BelongsToMany|_IH_ProductLabel_QB productLabels()
     * @property _IH_Product_C|Product[] $products
     * @property-read int $products_count
     * @method BelongsToMany|_IH_Product_QB products()
     * @property _IH_Discount_C|Discount[] $promotions
     * @property-read int $promotions_count
     * @method BelongsToMany|_IH_Discount_QB promotions()
     * @property _IH_Review_C|Review[] $reviews
     * @property-read int $reviews_count
     * @method HasMany|_IH_Review_QB reviews()
     * @property _IH_ProductTag_C|ProductTag[] $tags
     * @property-read int $tags_count
     * @method BelongsToMany|_IH_ProductTag_QB tags()
     * @property Tax|null $tax
     * @method BelongsTo|_IH_Tax_QB tax()
     * @property _IH_Tax_C|Tax[] $taxes
     * @property-read int $taxes_count
     * @method BelongsToMany|_IH_Tax_QB taxes()
     * @property _IH_Product_C|Product[] $upSales
     * @property-read int $up_sales_count
     * @method BelongsToMany|_IH_Product_QB upSales()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @property _IH_ProductVariation_C|ProductVariation[] $variationAttributeSwatchesForProductList
     * @property-read int $variation_attribute_swatches_for_product_list_count
     * @method HasMany|_IH_ProductVariation_QB variationAttributeSwatchesForProductList()
     * @property ProductVariation $variationInfo
     * @method HasOne|_IH_ProductVariation_QB variationInfo()
     * @property _IH_ProductVariation_C|ProductVariation[] $variationProductAttributes
     * @property-read int $variation_product_attributes_count
     * @method HasMany|_IH_ProductVariation_QB variationProductAttributes()
     * @property _IH_ProductVariation_C|ProductVariation[] $variations
     * @property-read int $variations_count
     * @method HasMany|_IH_ProductVariation_QB variations()
     * @method static _IH_Product_QB onWriteConnection()
     * @method _IH_Product_QB newQuery()
     * @method static _IH_Product_QB on(null|string $connection = null)
     * @method static _IH_Product_QB query()
     * @method static _IH_Product_QB with(array|string $relations)
     * @method _IH_Product_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Product_C|Product[] all()
     * @foreignLinks id,\Botble\Ecommerce\Models\ProductTranslation,ec_products_id
     * @mixin _IH_Product_QB
     */
    class Product extends Model {}

    /**
     * @property int $id
     * @property int $attribute_set_id
     * @property string $title
     * @property string|null $slug
     * @property string|null $color
     * @property string|null $image
     * @property int $is_default
     * @property int $order
     * @property BaseStatusEnum $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property ProductAttributeSet $productAttributeSet
     * @method BelongsTo|_IH_ProductAttributeSet_QB productAttributeSet()
     * @property _IH_ProductVariationItem_C|ProductVariationItem[] $productVariationItems
     * @property-read int $product_variation_items_count
     * @method HasMany|_IH_ProductVariationItem_QB productVariationItems()
     * @method static _IH_ProductAttribute_QB onWriteConnection()
     * @method _IH_ProductAttribute_QB newQuery()
     * @method static _IH_ProductAttribute_QB on(null|string $connection = null)
     * @method static _IH_ProductAttribute_QB query()
     * @method static _IH_ProductAttribute_QB with(array|string $relations)
     * @method _IH_ProductAttribute_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductAttribute_C|ProductAttribute[] all()
     * @foreignLinks id,\Botble\Ecommerce\Models\ProductAttributeTranslation,ec_product_attributes_id
     * @mixin _IH_ProductAttribute_QB
     */
    class ProductAttribute extends Model {}

    /**
     * @property int $id
     * @property string $title
     * @property string|null $slug
     * @property string $display_layout
     * @property int $is_searchable
     * @property int $is_comparable
     * @property int $is_use_in_product_listing
     * @property BaseStatusEnum $status
     * @property int $order
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property int $use_image_from_product_variation
     * @property _IH_ProductAttribute_C|ProductAttribute[] $attributes
     * @property-read int $attributes_count
     * @method HasMany|_IH_ProductAttribute_QB attributes()
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @method static _IH_ProductAttributeSet_QB onWriteConnection()
     * @method _IH_ProductAttributeSet_QB newQuery()
     * @method static _IH_ProductAttributeSet_QB on(null|string $connection = null)
     * @method static _IH_ProductAttributeSet_QB query()
     * @method static _IH_ProductAttributeSet_QB with(array|string $relations)
     * @method _IH_ProductAttributeSet_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductAttributeSet_C|ProductAttributeSet[] all()
     * @foreignLinks id,\Botble\Ecommerce\Models\ProductAttributeSetTranslation,ec_product_attribute_sets_id
     * @mixin _IH_ProductAttributeSet_QB
     */
    class ProductAttributeSet extends Model {}

    /**
     * @property string $lang_code
     * @property int $ec_product_attribute_sets_id
     * @property string|null $title
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @method static _IH_ProductAttributeSetTranslation_QB onWriteConnection()
     * @method _IH_ProductAttributeSetTranslation_QB newQuery()
     * @method static _IH_ProductAttributeSetTranslation_QB on(null|string $connection = null)
     * @method static _IH_ProductAttributeSetTranslation_QB query()
     * @method static _IH_ProductAttributeSetTranslation_QB with(array|string $relations)
     * @method _IH_ProductAttributeSetTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductAttributeSetTranslation_C|ProductAttributeSetTranslation[] all()
     * @ownLinks ec_product_attribute_sets_id,\Botble\Ecommerce\Models\ProductAttributeSet,id
     * @mixin _IH_ProductAttributeSetTranslation_QB
     */
    class ProductAttributeSetTranslation extends Model {}

    /**
     * @property string $lang_code
     * @property int $ec_product_attributes_id
     * @property string|null $title
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @method static _IH_ProductAttributeTranslation_QB onWriteConnection()
     * @method _IH_ProductAttributeTranslation_QB newQuery()
     * @method static _IH_ProductAttributeTranslation_QB on(null|string $connection = null)
     * @method static _IH_ProductAttributeTranslation_QB query()
     * @method static _IH_ProductAttributeTranslation_QB with(array|string $relations)
     * @method _IH_ProductAttributeTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductAttributeTranslation_C|ProductAttributeTranslation[] all()
     * @ownLinks ec_product_attributes_id,\Botble\Ecommerce\Models\ProductAttribute,id
     * @mixin _IH_ProductAttributeTranslation_QB
     */
    class ProductAttributeTranslation extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property int $parent_id
     * @property string|null $description
     * @property BaseStatusEnum $status
     * @property int $order
     * @property string|null $image
     * @property int $is_featured
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property-read HtmlString $badge_with_count attribute
     * @property-read Collection $parents attribute
     * @property _IH_ProductCategory_C|ProductCategory[] $activeChildren
     * @property-read int $active_children_count
     * @method HasMany|_IH_ProductCategory_QB activeChildren()
     * @property _IH_ProductCategory_C|ProductCategory[] $children
     * @property-read int $children_count
     * @method HasMany|_IH_ProductCategory_QB children()
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property ProductCategory $parent
     * @method BelongsTo|_IH_ProductCategory_QB parent()
     * @property _IH_Product_C|Product[] $products
     * @property-read int $products_count
     * @method BelongsToMany|_IH_Product_QB products()
     * @method static _IH_ProductCategory_QB onWriteConnection()
     * @method _IH_ProductCategory_QB newQuery()
     * @method static _IH_ProductCategory_QB on(null|string $connection = null)
     * @method static _IH_ProductCategory_QB query()
     * @method static _IH_ProductCategory_QB with(array|string $relations)
     * @method _IH_ProductCategory_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductCategory_C|ProductCategory[] all()
     * @foreignLinks id,\Botble\Ecommerce\Models\ProductCategoryTranslation,ec_product_categories_id
     * @mixin _IH_ProductCategory_QB
     */
    class ProductCategory extends Model {}

    /**
     * @property string $lang_code
     * @property int $ec_product_categories_id
     * @property string|null $name
     * @property string|null $description
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @method static _IH_ProductCategoryTranslation_QB onWriteConnection()
     * @method _IH_ProductCategoryTranslation_QB newQuery()
     * @method static _IH_ProductCategoryTranslation_QB on(null|string $connection = null)
     * @method static _IH_ProductCategoryTranslation_QB query()
     * @method static _IH_ProductCategoryTranslation_QB with(array|string $relations)
     * @method _IH_ProductCategoryTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductCategoryTranslation_C|ProductCategoryTranslation[] all()
     * @ownLinks ec_product_categories_id,\Botble\Ecommerce\Models\ProductCategory,id
     * @mixin _IH_ProductCategoryTranslation_QB
     */
    class ProductCategoryTranslation extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string $slug
     * @property string|null $description
     * @property string|null $image
     * @property BaseStatusEnum $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property int $is_featured
     * @property _IH_Discount_C|Discount[] $discounts
     * @property-read int $discounts_count
     * @method BelongsToMany|_IH_Discount_QB discounts()
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property _IH_Product_C|Product[] $products
     * @property-read int $products_count
     * @method BelongsToMany|_IH_Product_QB products()
     * @property _IH_Discount_C|Discount[] $promotions
     * @property-read int $promotions_count
     * @method BelongsToMany|_IH_Discount_QB promotions()
     * @method static _IH_ProductCollection_QB onWriteConnection()
     * @method _IH_ProductCollection_QB newQuery()
     * @method static _IH_ProductCollection_QB on(null|string $connection = null)
     * @method static _IH_ProductCollection_QB query()
     * @method static _IH_ProductCollection_QB with(array|string $relations)
     * @method _IH_ProductCollection_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductCollection_C|ProductCollection[] all()
     * @foreignLinks id,\Botble\Ecommerce\Models\ProductCollectionTranslation,ec_product_collections_id
     * @mixin _IH_ProductCollection_QB
     */
    class ProductCollection extends Model {}

    /**
     * @property string $lang_code
     * @property int $ec_product_collections_id
     * @property string|null $name
     * @property string|null $description
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @method static _IH_ProductCollectionTranslation_QB onWriteConnection()
     * @method _IH_ProductCollectionTranslation_QB newQuery()
     * @method static _IH_ProductCollectionTranslation_QB on(null|string $connection = null)
     * @method static _IH_ProductCollectionTranslation_QB query()
     * @method static _IH_ProductCollectionTranslation_QB with(array|string $relations)
     * @method _IH_ProductCollectionTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductCollectionTranslation_C|ProductCollectionTranslation[] all()
     * @ownLinks ec_product_collections_id,\Botble\Ecommerce\Models\ProductCollection,id
     * @mixin _IH_ProductCollectionTranslation_QB
     */
    class ProductCollectionTranslation extends Model {}

    /**
     * @property int $id
     * @property int|null $product_id
     * @property string|null $url
     * @property array|null $extras
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property-read string $basename attribute
     * @property-read string $file_extension attribute
     * @property-read string $file_name attribute
     * @property-read int $file_size attribute
     * @property-read string $mime_type attribute
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property Product|null $product
     * @method BelongsTo|_IH_Product_QB product()
     * @method static _IH_ProductFile_QB onWriteConnection()
     * @method _IH_ProductFile_QB newQuery()
     * @method static _IH_ProductFile_QB on(null|string $connection = null)
     * @method static _IH_ProductFile_QB query()
     * @method static _IH_ProductFile_QB with(array|string $relations)
     * @method _IH_ProductFile_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductFile_C|ProductFile[] all()
     * @mixin _IH_ProductFile_QB
     */
    class ProductFile extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string|null $color
     * @property BaseStatusEnum $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @method static _IH_ProductLabel_QB onWriteConnection()
     * @method _IH_ProductLabel_QB newQuery()
     * @method static _IH_ProductLabel_QB on(null|string $connection = null)
     * @method static _IH_ProductLabel_QB query()
     * @method static _IH_ProductLabel_QB with(array|string $relations)
     * @method _IH_ProductLabel_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductLabel_C|ProductLabel[] all()
     * @foreignLinks id,\Botble\Ecommerce\Models\ProductLabelTranslation,ec_product_labels_id
     * @mixin _IH_ProductLabel_QB
     */
    class ProductLabel extends Model {}

    /**
     * @property string $lang_code
     * @property int $ec_product_labels_id
     * @property string|null $name
     * @property string|null $description
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @method static _IH_ProductLabelTranslation_QB onWriteConnection()
     * @method _IH_ProductLabelTranslation_QB newQuery()
     * @method static _IH_ProductLabelTranslation_QB on(null|string $connection = null)
     * @method static _IH_ProductLabelTranslation_QB query()
     * @method static _IH_ProductLabelTranslation_QB with(array|string $relations)
     * @method _IH_ProductLabelTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductLabelTranslation_C|ProductLabelTranslation[] all()
     * @ownLinks ec_product_labels_id,\Botble\Ecommerce\Models\ProductLabel,id
     * @mixin _IH_ProductLabelTranslation_QB
     */
    class ProductLabelTranslation extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string|null $description
     * @property BaseStatusEnum $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property _IH_Product_C|Product[] $products
     * @property-read int $products_count
     * @method BelongsToMany|_IH_Product_QB products()
     * @method static _IH_ProductTag_QB onWriteConnection()
     * @method _IH_ProductTag_QB newQuery()
     * @method static _IH_ProductTag_QB on(null|string $connection = null)
     * @method static _IH_ProductTag_QB query()
     * @method static _IH_ProductTag_QB with(array|string $relations)
     * @method _IH_ProductTag_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductTag_C|ProductTag[] all()
     * @foreignLinks id,\Botble\Ecommerce\Models\ProductTagTranslation,ec_product_tags_id
     * @mixin _IH_ProductTag_QB
     */
    class ProductTag extends Model {}

    /**
     * @property string $lang_code
     * @property int $ec_product_tags_id
     * @property string|null $name
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @method static _IH_ProductTagTranslation_QB onWriteConnection()
     * @method _IH_ProductTagTranslation_QB newQuery()
     * @method static _IH_ProductTagTranslation_QB on(null|string $connection = null)
     * @method static _IH_ProductTagTranslation_QB query()
     * @method static _IH_ProductTagTranslation_QB with(array|string $relations)
     * @method _IH_ProductTagTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductTagTranslation_C|ProductTagTranslation[] all()
     * @ownLinks ec_product_tags_id,\Botble\Ecommerce\Models\ProductTag,id
     * @mixin _IH_ProductTagTranslation_QB
     */
    class ProductTagTranslation extends Model {}

    /**
     * @property string $lang_code
     * @property int $ec_products_id
     * @property string|null $name
     * @property string|null $description
     * @property string|null $content
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @method static _IH_ProductTranslation_QB onWriteConnection()
     * @method _IH_ProductTranslation_QB newQuery()
     * @method static _IH_ProductTranslation_QB on(null|string $connection = null)
     * @method static _IH_ProductTranslation_QB query()
     * @method static _IH_ProductTranslation_QB with(array|string $relations)
     * @method _IH_ProductTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductTranslation_C|ProductTranslation[] all()
     * @ownLinks ec_products_id,\Botble\Ecommerce\Models\Product,id
     * @mixin _IH_ProductTranslation_QB
     */
    class ProductTranslation extends Model {}

    /**
     * @property int $id
     * @property int|null $product_id
     * @property int $configurable_product_id
     * @property int $is_default
     * @property Product $configurableProduct
     * @method BelongsTo|_IH_Product_QB configurableProduct()
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property Product|null $product
     * @method BelongsTo|_IH_Product_QB product()
     * @property _IH_ProductAttribute_C|ProductAttribute[] $productAttributes
     * @property-read int $product_attributes_count
     * @method BelongsToMany|_IH_ProductAttribute_QB productAttributes()
     * @property _IH_ProductVariationItem_C|ProductVariationItem[] $variationItems
     * @property-read int $variation_items_count
     * @method HasMany|_IH_ProductVariationItem_QB variationItems()
     * @method static _IH_ProductVariation_QB onWriteConnection()
     * @method _IH_ProductVariation_QB newQuery()
     * @method static _IH_ProductVariation_QB on(null|string $connection = null)
     * @method static _IH_ProductVariation_QB query()
     * @method static _IH_ProductVariation_QB with(array|string $relations)
     * @method _IH_ProductVariation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductVariation_C|ProductVariation[] all()
     * @mixin _IH_ProductVariation_QB
     */
    class ProductVariation extends Model {}

    /**
     * @property int $id
     * @property int $attribute_id
     * @property int $variation_id
     * @property ProductAttribute $attribute
     * @method BelongsTo|_IH_ProductAttribute_QB attribute()
     * @property _IH_ProductAttributeSet_C|ProductAttributeSet[] $attributeSet
     * @property-read int $attribute_set_count
     * @method HasMany|_IH_ProductAttributeSet_QB attributeSet()
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property ProductVariation $productVariation
     * @method BelongsTo|_IH_ProductVariation_QB productVariation()
     * @method static _IH_ProductVariationItem_QB onWriteConnection()
     * @method _IH_ProductVariationItem_QB newQuery()
     * @method static _IH_ProductVariationItem_QB on(null|string $connection = null)
     * @method static _IH_ProductVariationItem_QB query()
     * @method static _IH_ProductVariationItem_QB with(array|string $relations)
     * @method _IH_ProductVariationItem_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductVariationItem_C|ProductVariationItem[] all()
     * @mixin _IH_ProductVariationItem_QB
     */
    class ProductVariationItem extends Model {}

    /**
     * @property int $id
     * @property int $customer_id
     * @property int $product_id
     * @property float $star
     * @property string $comment
     * @property BaseStatusEnum $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property array|null $images
     * @property-read null|string $product_name attribute
     * @property-read null|string $user_name attribute
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property Product $product
     * @method BelongsTo|_IH_Product_QB product()
     * @property Customer $user
     * @method BelongsTo|_IH_Customer_QB user()
     * @method static _IH_Review_QB onWriteConnection()
     * @method _IH_Review_QB newQuery()
     * @method static _IH_Review_QB on(null|string $connection = null)
     * @method static _IH_Review_QB query()
     * @method static _IH_Review_QB with(array|string $relations)
     * @method _IH_Review_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Review_C|Review[] all()
     * @mixin _IH_Review_QB
     */
    class Review extends Model {}

    /**
     * @property int $id
     * @property int $order_id
     * @property int|null $user_id
     * @property float|null $weight
     * @property string|null $shipment_id
     * @property string|null $note
     * @property ShippingStatusEnum $status
     * @property float|null $cod_amount
     * @property ShippingCodStatusEnum $cod_status
     * @property string $cross_checking_status
     * @property float|null $price
     * @property int|null $store_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string|null $tracking_id
     * @property string|null $shipping_company_name
     * @property string|null $tracking_link
     * @property Carbon|null $estimate_date_shipped
     * @property Carbon|null $date_shipped
     * @property string|null $label_url
     * @property string|null $rate_id
     * @property array|null $metadata
     * @property _IH_ShipmentHistory_C|ShipmentHistory[] $histories
     * @property-read int $histories_count
     * @method HasMany|_IH_ShipmentHistory_QB histories()
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property Order $order
     * @method BelongsTo|_IH_Order_QB order()
     * @property StoreLocator|null $store
     * @method HasOne|_IH_StoreLocator_QB store()
     * @method static _IH_Shipment_QB onWriteConnection()
     * @method _IH_Shipment_QB newQuery()
     * @method static _IH_Shipment_QB on(null|string $connection = null)
     * @method static _IH_Shipment_QB query()
     * @method static _IH_Shipment_QB with(array|string $relations)
     * @method _IH_Shipment_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Shipment_C|Shipment[] all()
     * @ownLinks user_id,\Botble\ACL\Models\User,id
     * @mixin _IH_Shipment_QB
     */
    class Shipment extends Model {}

    /**
     * @property int $id
     * @property string $action
     * @property string $description
     * @property int|null $user_id
     * @property int $shipment_id
     * @property int $order_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property Order $order
     * @method BelongsTo|_IH_Order_QB order()
     * @property Shipment $shipment
     * @method BelongsTo|_IH_Shipment_QB shipment()
     * @property User|null $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_ShipmentHistory_QB onWriteConnection()
     * @method _IH_ShipmentHistory_QB newQuery()
     * @method static _IH_ShipmentHistory_QB on(null|string $connection = null)
     * @method static _IH_ShipmentHistory_QB query()
     * @method static _IH_ShipmentHistory_QB with(array|string $relations)
     * @method _IH_ShipmentHistory_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ShipmentHistory_C|ShipmentHistory[] all()
     * @ownLinks user_id,\Botble\ACL\Models\User,id
     * @mixin _IH_ShipmentHistory_QB
     */
    class ShipmentHistory extends Model {}

    /**
     * @property int $id
     * @property string|null $title
     * @property string|null $country
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property-read null|string $city_name attribute
     * @property-read null|string $country_name attribute
     * @property-read string $full_address attribute
     * @property-read null|string $state_name attribute
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property _IH_ShippingRule_C|ShippingRule[] $rules
     * @property-read int $rules_count
     * @method HasMany|_IH_ShippingRule_QB rules()
     * @method static _IH_Shipping_QB onWriteConnection()
     * @method _IH_Shipping_QB newQuery()
     * @method static _IH_Shipping_QB on(null|string $connection = null)
     * @method static _IH_Shipping_QB query()
     * @method static _IH_Shipping_QB with(array|string $relations)
     * @method _IH_Shipping_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Shipping_C|Shipping[] all()
     * @mixin _IH_Shipping_QB
     */
    class Shipping extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property int $shipping_id
     * @property ShippingRuleTypeEnum|null $type
     * @property float|null $from
     * @property float|null $to
     * @property float|null $price
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_ShippingRuleItem_C|ShippingRuleItem[] $items
     * @property-read int $items_count
     * @method HasMany|_IH_ShippingRuleItem_QB items()
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property Shipping $shipping
     * @method BelongsTo|_IH_Shipping_QB shipping()
     * @method static _IH_ShippingRule_QB onWriteConnection()
     * @method _IH_ShippingRule_QB newQuery()
     * @method static _IH_ShippingRule_QB on(null|string $connection = null)
     * @method static _IH_ShippingRule_QB query()
     * @method static _IH_ShippingRule_QB with(array|string $relations)
     * @method _IH_ShippingRule_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ShippingRule_C|ShippingRule[] all()
     * @mixin _IH_ShippingRule_QB
     */
    class ShippingRule extends Model {}

    /**
     * @property int $id
     * @property int $shipping_rule_id
     * @property string|null $country
     * @property string|null $state
     * @property string|null $city
     * @property float|null $adjustment_price
     * @property bool $is_enabled
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string|null $zip_code
     * @property-read null|string $city_name attribute
     * @property-read null|string $country_name attribute
     * @property-read string $full_address attribute
     * @property-read string $name_item attribute
     * @property-read null|string $state_name attribute
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property ShippingRule $shippingRule
     * @method BelongsTo|_IH_ShippingRule_QB shippingRule()
     * @method static _IH_ShippingRuleItem_QB onWriteConnection()
     * @method _IH_ShippingRuleItem_QB newQuery()
     * @method static _IH_ShippingRuleItem_QB on(null|string $connection = null)
     * @method static _IH_ShippingRuleItem_QB query()
     * @method static _IH_ShippingRuleItem_QB with(array|string $relations)
     * @method _IH_ShippingRuleItem_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ShippingRuleItem_C|ShippingRuleItem[] all()
     * @mixin _IH_ShippingRuleItem_QB
     */
    class ShippingRuleItem extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string|null $email
     * @property string $phone
     * @property string $address
     * @property string|null $country
     * @property string|null $state
     * @property string|null $city
     * @property bool|null $is_primary
     * @property bool|null $is_shipping_location
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property-read null|string $city_name attribute
     * @property-read null|string $country_name attribute
     * @property-read string $full_address attribute
     * @property-read null|string $state_name attribute
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @method static _IH_StoreLocator_QB onWriteConnection()
     * @method _IH_StoreLocator_QB newQuery()
     * @method static _IH_StoreLocator_QB on(null|string $connection = null)
     * @method static _IH_StoreLocator_QB query()
     * @method static _IH_StoreLocator_QB with(array|string $relations)
     * @method _IH_StoreLocator_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_StoreLocator_C|StoreLocator[] all()
     * @mixin _IH_StoreLocator_QB
     */
    class StoreLocator extends Model {}

    /**
     * @property int $id
     * @property string|null $title
     * @property float|null $percentage
     * @property int|null $priority
     * @property BaseStatusEnum $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property-read string $title_with_percentage attribute
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property _IH_Product_C|Product[] $products
     * @property-read int $products_count
     * @method BelongsToMany|_IH_Product_QB products()
     * @method static _IH_Tax_QB onWriteConnection()
     * @method _IH_Tax_QB newQuery()
     * @method static _IH_Tax_QB on(null|string $connection = null)
     * @method static _IH_Tax_QB query()
     * @method static _IH_Tax_QB with(array|string $relations)
     * @method _IH_Tax_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Tax_C|Tax[] all()
     * @mixin _IH_Tax_QB
     */
    class Tax extends Model {}

    /**
     * @property int $id
     * @property int $customer_id
     * @property int $product_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property Product $product
     * @method HasOne|_IH_Product_QB product()
     * @method static _IH_Wishlist_QB onWriteConnection()
     * @method _IH_Wishlist_QB newQuery()
     * @method static _IH_Wishlist_QB on(null|string $connection = null)
     * @method static _IH_Wishlist_QB query()
     * @method static _IH_Wishlist_QB with(array|string $relations)
     * @method _IH_Wishlist_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Wishlist_C|Wishlist[] all()
     * @mixin _IH_Wishlist_QB
     */
    class Wishlist extends Model {}
}
