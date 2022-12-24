<?php //00437abe9b8e2213fc4b63a2097b742b
/** @noinspection all */

namespace LaravelIdea\Helper\Botble\Ecommerce\Models {

    use Botble\Ecommerce\Models\Address;
    use Botble\Ecommerce\Models\Brand;
    use Botble\Ecommerce\Models\BrandTranslation;
    use Botble\Ecommerce\Models\Currency;
    use Botble\Ecommerce\Models\Customer;
    use Botble\Ecommerce\Models\Discount;
    use Botble\Ecommerce\Models\DiscountCustomer;
    use Botble\Ecommerce\Models\DiscountProduct;
    use Botble\Ecommerce\Models\DiscountProductCollection;
    use Botble\Ecommerce\Models\FlashSale;
    use Botble\Ecommerce\Models\FlashSaleTranslation;
    use Botble\Ecommerce\Models\GlobalOption;
    use Botble\Ecommerce\Models\GlobalOptionValue;
    use Botble\Ecommerce\Models\GroupedProduct;
    use Botble\Ecommerce\Models\Invoice;
    use Botble\Ecommerce\Models\InvoiceItem;
    use Botble\Ecommerce\Models\Option;
    use Botble\Ecommerce\Models\OptionValue;
    use Botble\Ecommerce\Models\Order;
    use Botble\Ecommerce\Models\OrderAddress;
    use Botble\Ecommerce\Models\OrderHistory;
    use Botble\Ecommerce\Models\OrderProduct;
    use Botble\Ecommerce\Models\OrderReferral;
    use Botble\Ecommerce\Models\OrderReturn;
    use Botble\Ecommerce\Models\OrderReturnItem;
    use Botble\Ecommerce\Models\Product;
    use Botble\Ecommerce\Models\ProductAttribute;
    use Botble\Ecommerce\Models\ProductAttributeSet;
    use Botble\Ecommerce\Models\ProductAttributeSetTranslation;
    use Botble\Ecommerce\Models\ProductAttributeTranslation;
    use Botble\Ecommerce\Models\ProductCategory;
    use Botble\Ecommerce\Models\ProductCategoryTranslation;
    use Botble\Ecommerce\Models\ProductCollection;
    use Botble\Ecommerce\Models\ProductCollectionTranslation;
    use Botble\Ecommerce\Models\ProductFile;
    use Botble\Ecommerce\Models\ProductLabel;
    use Botble\Ecommerce\Models\ProductLabelTranslation;
    use Botble\Ecommerce\Models\ProductTag;
    use Botble\Ecommerce\Models\ProductTagTranslation;
    use Botble\Ecommerce\Models\ProductTranslation;
    use Botble\Ecommerce\Models\ProductVariation;
    use Botble\Ecommerce\Models\ProductVariationItem;
    use Botble\Ecommerce\Models\Review;
    use Botble\Ecommerce\Models\Shipment;
    use Botble\Ecommerce\Models\ShipmentHistory;
    use Botble\Ecommerce\Models\Shipping;
    use Botble\Ecommerce\Models\ShippingRule;
    use Botble\Ecommerce\Models\ShippingRuleItem;
    use Botble\Ecommerce\Models\StoreLocator;
    use Botble\Ecommerce\Models\Tax;
    use Botble\Ecommerce\Models\Wishlist;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method Address|null getOrPut($key, $value)
     * @method Address|$this shift(int $count = 1)
     * @method Address|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Address|$this pop(int $count = 1)
     * @method Address|null pull($key, \Closure $default = null)
     * @method Address|null last(callable $callback = null, \Closure $default = null)
     * @method Address|$this random(callable|int|null $number = null)
     * @method Address|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Address|null get($key, \Closure $default = null)
     * @method Address|null first(callable $callback = null, \Closure $default = null)
     * @method Address|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Address|null find($key, $default = null)
     * @method Address[] all()
     */
    class _IH_Address_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Address[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Address_QB whereId($value)
     * @method _IH_Address_QB whereName($value)
     * @method _IH_Address_QB whereEmail($value)
     * @method _IH_Address_QB wherePhone($value)
     * @method _IH_Address_QB whereCountry($value)
     * @method _IH_Address_QB whereState($value)
     * @method _IH_Address_QB whereCity($value)
     * @method _IH_Address_QB whereAddress($value)
     * @method _IH_Address_QB whereCustomerId($value)
     * @method _IH_Address_QB whereIsDefault($value)
     * @method _IH_Address_QB whereCreatedAt($value)
     * @method _IH_Address_QB whereUpdatedAt($value)
     * @method _IH_Address_QB whereZipCode($value)
     * @method Address baseSole(array|string $columns = ['*'])
     * @method Address create(array $attributes = [])
     * @method _IH_Address_C|Address[] cursor()
     * @method Address|null|_IH_Address_C|Address[] find($id, array|string $columns = ['*'])
     * @method _IH_Address_C|Address[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Address|_IH_Address_C|Address[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Address|_IH_Address_C|Address[] findOrFail($id, array|string $columns = ['*'])
     * @method Address|_IH_Address_C|Address[] findOrNew($id, array|string $columns = ['*'])
     * @method Address first(array|string $columns = ['*'])
     * @method Address firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Address firstOrCreate(array $attributes = [], array $values = [])
     * @method Address firstOrFail(array|string $columns = ['*'])
     * @method Address firstOrNew(array $attributes = [], array $values = [])
     * @method Address firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Address forceCreate(array $attributes)
     * @method _IH_Address_C|Address[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Address_C|Address[] get(array|string $columns = ['*'])
     * @method Address getModel()
     * @method Address[] getModels(array|string $columns = ['*'])
     * @method _IH_Address_C|Address[] hydrate(array $items)
     * @method Address make(array $attributes = [])
     * @method Address newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Address[]|_IH_Address_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Address[]|_IH_Address_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Address sole(array|string $columns = ['*'])
     * @method Address updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Address_QB extends _BaseBuilder {}

    /**
     * @method BrandTranslation|null getOrPut($key, $value)
     * @method BrandTranslation|$this shift(int $count = 1)
     * @method BrandTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method BrandTranslation|$this pop(int $count = 1)
     * @method BrandTranslation|null pull($key, \Closure $default = null)
     * @method BrandTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method BrandTranslation|$this random(callable|int|null $number = null)
     * @method BrandTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method BrandTranslation|null get($key, \Closure $default = null)
     * @method BrandTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method BrandTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method BrandTranslation|null find($key, $default = null)
     * @method BrandTranslation[] all()
     */
    class _IH_BrandTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return BrandTranslation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_BrandTranslation_QB whereLangCode($value)
     * @method _IH_BrandTranslation_QB whereEcBrandsId($value)
     * @method _IH_BrandTranslation_QB whereName($value)
     * @method _IH_BrandTranslation_QB whereDescription($value)
     * @method BrandTranslation baseSole(array|string $columns = ['*'])
     * @method BrandTranslation create(array $attributes = [])
     * @method _IH_BrandTranslation_C|BrandTranslation[] cursor()
     * @method BrandTranslation|null|_IH_BrandTranslation_C|BrandTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_BrandTranslation_C|BrandTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method BrandTranslation|_IH_BrandTranslation_C|BrandTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method BrandTranslation|_IH_BrandTranslation_C|BrandTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method BrandTranslation|_IH_BrandTranslation_C|BrandTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method BrandTranslation first(array|string $columns = ['*'])
     * @method BrandTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method BrandTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method BrandTranslation firstOrFail(array|string $columns = ['*'])
     * @method BrandTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method BrandTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method BrandTranslation forceCreate(array $attributes)
     * @method _IH_BrandTranslation_C|BrandTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_BrandTranslation_C|BrandTranslation[] get(array|string $columns = ['*'])
     * @method BrandTranslation getModel()
     * @method BrandTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_BrandTranslation_C|BrandTranslation[] hydrate(array $items)
     * @method BrandTranslation make(array $attributes = [])
     * @method BrandTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|BrandTranslation[]|_IH_BrandTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|BrandTranslation[]|_IH_BrandTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method BrandTranslation sole(array|string $columns = ['*'])
     * @method BrandTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_BrandTranslation_QB extends _BaseBuilder {}

    /**
     * @method Brand|null getOrPut($key, $value)
     * @method Brand|$this shift(int $count = 1)
     * @method Brand|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Brand|$this pop(int $count = 1)
     * @method Brand|null pull($key, \Closure $default = null)
     * @method Brand|null last(callable $callback = null, \Closure $default = null)
     * @method Brand|$this random(callable|int|null $number = null)
     * @method Brand|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Brand|null get($key, \Closure $default = null)
     * @method Brand|null first(callable $callback = null, \Closure $default = null)
     * @method Brand|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Brand|null find($key, $default = null)
     * @method Brand[] all()
     */
    class _IH_Brand_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Brand[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Brand_QB whereId($value)
     * @method _IH_Brand_QB whereName($value)
     * @method _IH_Brand_QB whereDescription($value)
     * @method _IH_Brand_QB whereWebsite($value)
     * @method _IH_Brand_QB whereLogo($value)
     * @method _IH_Brand_QB whereStatus($value)
     * @method _IH_Brand_QB whereOrder($value)
     * @method _IH_Brand_QB whereIsFeatured($value)
     * @method _IH_Brand_QB whereCreatedAt($value)
     * @method _IH_Brand_QB whereUpdatedAt($value)
     * @method Brand baseSole(array|string $columns = ['*'])
     * @method Brand create(array $attributes = [])
     * @method _IH_Brand_C|Brand[] cursor()
     * @method Brand|null|_IH_Brand_C|Brand[] find($id, array|string $columns = ['*'])
     * @method _IH_Brand_C|Brand[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Brand|_IH_Brand_C|Brand[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Brand|_IH_Brand_C|Brand[] findOrFail($id, array|string $columns = ['*'])
     * @method Brand|_IH_Brand_C|Brand[] findOrNew($id, array|string $columns = ['*'])
     * @method Brand first(array|string $columns = ['*'])
     * @method Brand firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Brand firstOrCreate(array $attributes = [], array $values = [])
     * @method Brand firstOrFail(array|string $columns = ['*'])
     * @method Brand firstOrNew(array $attributes = [], array $values = [])
     * @method Brand firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Brand forceCreate(array $attributes)
     * @method _IH_Brand_C|Brand[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Brand_C|Brand[] get(array|string $columns = ['*'])
     * @method Brand getModel()
     * @method Brand[] getModels(array|string $columns = ['*'])
     * @method _IH_Brand_C|Brand[] hydrate(array $items)
     * @method Brand make(array $attributes = [])
     * @method Brand newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Brand[]|_IH_Brand_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Brand[]|_IH_Brand_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Brand sole(array|string $columns = ['*'])
     * @method Brand updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Brand_QB extends _BaseBuilder {}

    /**
     * @method Currency|null getOrPut($key, $value)
     * @method Currency|$this shift(int $count = 1)
     * @method Currency|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Currency|$this pop(int $count = 1)
     * @method Currency|null pull($key, \Closure $default = null)
     * @method Currency|null last(callable $callback = null, \Closure $default = null)
     * @method Currency|$this random(callable|int|null $number = null)
     * @method Currency|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Currency|null get($key, \Closure $default = null)
     * @method Currency|null first(callable $callback = null, \Closure $default = null)
     * @method Currency|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Currency|null find($key, $default = null)
     * @method Currency[] all()
     */
    class _IH_Currency_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Currency[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Currency_QB whereId($value)
     * @method _IH_Currency_QB whereTitle($value)
     * @method _IH_Currency_QB whereSymbol($value)
     * @method _IH_Currency_QB whereIsPrefixSymbol($value)
     * @method _IH_Currency_QB whereDecimals($value)
     * @method _IH_Currency_QB whereOrder($value)
     * @method _IH_Currency_QB whereIsDefault($value)
     * @method _IH_Currency_QB whereExchangeRate($value)
     * @method _IH_Currency_QB whereCreatedAt($value)
     * @method _IH_Currency_QB whereUpdatedAt($value)
     * @method Currency baseSole(array|string $columns = ['*'])
     * @method Currency create(array $attributes = [])
     * @method _IH_Currency_C|Currency[] cursor()
     * @method Currency|null|_IH_Currency_C|Currency[] find($id, array|string $columns = ['*'])
     * @method _IH_Currency_C|Currency[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Currency|_IH_Currency_C|Currency[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Currency|_IH_Currency_C|Currency[] findOrFail($id, array|string $columns = ['*'])
     * @method Currency|_IH_Currency_C|Currency[] findOrNew($id, array|string $columns = ['*'])
     * @method Currency first(array|string $columns = ['*'])
     * @method Currency firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Currency firstOrCreate(array $attributes = [], array $values = [])
     * @method Currency firstOrFail(array|string $columns = ['*'])
     * @method Currency firstOrNew(array $attributes = [], array $values = [])
     * @method Currency firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Currency forceCreate(array $attributes)
     * @method _IH_Currency_C|Currency[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Currency_C|Currency[] get(array|string $columns = ['*'])
     * @method Currency getModel()
     * @method Currency[] getModels(array|string $columns = ['*'])
     * @method _IH_Currency_C|Currency[] hydrate(array $items)
     * @method Currency make(array $attributes = [])
     * @method Currency newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Currency[]|_IH_Currency_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Currency[]|_IH_Currency_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Currency sole(array|string $columns = ['*'])
     * @method Currency updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Currency_QB extends _BaseBuilder {}

    /**
     * @method Customer|null getOrPut($key, $value)
     * @method Customer|$this shift(int $count = 1)
     * @method Customer|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Customer|$this pop(int $count = 1)
     * @method Customer|null pull($key, \Closure $default = null)
     * @method Customer|null last(callable $callback = null, \Closure $default = null)
     * @method Customer|$this random(callable|int|null $number = null)
     * @method Customer|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Customer|null get($key, \Closure $default = null)
     * @method Customer|null first(callable $callback = null, \Closure $default = null)
     * @method Customer|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Customer|null find($key, $default = null)
     * @method Customer[] all()
     */
    class _IH_Customer_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Customer[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Customer_QB whereId($value)
     * @method _IH_Customer_QB whereName($value)
     * @method _IH_Customer_QB whereEmail($value)
     * @method _IH_Customer_QB wherePassword($value)
     * @method _IH_Customer_QB whereAvatar($value)
     * @method _IH_Customer_QB whereDob($value)
     * @method _IH_Customer_QB wherePhone($value)
     * @method _IH_Customer_QB whereRememberToken($value)
     * @method _IH_Customer_QB whereCreatedAt($value)
     * @method _IH_Customer_QB whereUpdatedAt($value)
     * @method _IH_Customer_QB whereConfirmedAt($value)
     * @method _IH_Customer_QB whereEmailVerifyToken($value)
     * @method _IH_Customer_QB whereIsVendor($value)
     * @method _IH_Customer_QB whereVendorVerifiedAt($value)
     * @method _IH_Customer_QB whereStatus($value)
     * @method Customer baseSole(array|string $columns = ['*'])
     * @method Customer create(array $attributes = [])
     * @method _IH_Customer_C|Customer[] cursor()
     * @method Customer|null|_IH_Customer_C|Customer[] find($id, array|string $columns = ['*'])
     * @method _IH_Customer_C|Customer[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Customer|_IH_Customer_C|Customer[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Customer|_IH_Customer_C|Customer[] findOrFail($id, array|string $columns = ['*'])
     * @method Customer|_IH_Customer_C|Customer[] findOrNew($id, array|string $columns = ['*'])
     * @method Customer first(array|string $columns = ['*'])
     * @method Customer firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Customer firstOrCreate(array $attributes = [], array $values = [])
     * @method Customer firstOrFail(array|string $columns = ['*'])
     * @method Customer firstOrNew(array $attributes = [], array $values = [])
     * @method Customer firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Customer forceCreate(array $attributes)
     * @method _IH_Customer_C|Customer[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Customer_C|Customer[] get(array|string $columns = ['*'])
     * @method Customer getModel()
     * @method Customer[] getModels(array|string $columns = ['*'])
     * @method _IH_Customer_C|Customer[] hydrate(array $items)
     * @method Customer make(array $attributes = [])
     * @method Customer newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Customer[]|_IH_Customer_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Customer[]|_IH_Customer_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Customer sole(array|string $columns = ['*'])
     * @method Customer updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Customer_QB extends _BaseBuilder {}

    /**
     * @method DiscountCustomer|null getOrPut($key, $value)
     * @method DiscountCustomer|$this shift(int $count = 1)
     * @method DiscountCustomer|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method DiscountCustomer|$this pop(int $count = 1)
     * @method DiscountCustomer|null pull($key, \Closure $default = null)
     * @method DiscountCustomer|null last(callable $callback = null, \Closure $default = null)
     * @method DiscountCustomer|$this random(callable|int|null $number = null)
     * @method DiscountCustomer|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method DiscountCustomer|null get($key, \Closure $default = null)
     * @method DiscountCustomer|null first(callable $callback = null, \Closure $default = null)
     * @method DiscountCustomer|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method DiscountCustomer|null find($key, $default = null)
     * @method DiscountCustomer[] all()
     */
    class _IH_DiscountCustomer_C extends _BaseCollection {
        /**
         * @param int $size
         * @return DiscountCustomer[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_DiscountCustomer_QB whereDiscountId($value)
     * @method _IH_DiscountCustomer_QB whereCustomerId($value)
     * @method DiscountCustomer baseSole(array|string $columns = ['*'])
     * @method DiscountCustomer create(array $attributes = [])
     * @method _IH_DiscountCustomer_C|DiscountCustomer[] cursor()
     * @method DiscountCustomer|null|_IH_DiscountCustomer_C|DiscountCustomer[] find($id, array|string $columns = ['*'])
     * @method _IH_DiscountCustomer_C|DiscountCustomer[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method DiscountCustomer|_IH_DiscountCustomer_C|DiscountCustomer[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method DiscountCustomer|_IH_DiscountCustomer_C|DiscountCustomer[] findOrFail($id, array|string $columns = ['*'])
     * @method DiscountCustomer|_IH_DiscountCustomer_C|DiscountCustomer[] findOrNew($id, array|string $columns = ['*'])
     * @method DiscountCustomer first(array|string $columns = ['*'])
     * @method DiscountCustomer firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method DiscountCustomer firstOrCreate(array $attributes = [], array $values = [])
     * @method DiscountCustomer firstOrFail(array|string $columns = ['*'])
     * @method DiscountCustomer firstOrNew(array $attributes = [], array $values = [])
     * @method DiscountCustomer firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method DiscountCustomer forceCreate(array $attributes)
     * @method _IH_DiscountCustomer_C|DiscountCustomer[] fromQuery(string $query, array $bindings = [])
     * @method _IH_DiscountCustomer_C|DiscountCustomer[] get(array|string $columns = ['*'])
     * @method DiscountCustomer getModel()
     * @method DiscountCustomer[] getModels(array|string $columns = ['*'])
     * @method _IH_DiscountCustomer_C|DiscountCustomer[] hydrate(array $items)
     * @method DiscountCustomer make(array $attributes = [])
     * @method DiscountCustomer newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|DiscountCustomer[]|_IH_DiscountCustomer_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|DiscountCustomer[]|_IH_DiscountCustomer_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method DiscountCustomer sole(array|string $columns = ['*'])
     * @method DiscountCustomer updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_DiscountCustomer_QB extends _BaseBuilder {}

    /**
     * @method DiscountProductCollection|null getOrPut($key, $value)
     * @method DiscountProductCollection|$this shift(int $count = 1)
     * @method DiscountProductCollection|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method DiscountProductCollection|$this pop(int $count = 1)
     * @method DiscountProductCollection|null pull($key, \Closure $default = null)
     * @method DiscountProductCollection|null last(callable $callback = null, \Closure $default = null)
     * @method DiscountProductCollection|$this random(callable|int|null $number = null)
     * @method DiscountProductCollection|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method DiscountProductCollection|null get($key, \Closure $default = null)
     * @method DiscountProductCollection|null first(callable $callback = null, \Closure $default = null)
     * @method DiscountProductCollection|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method DiscountProductCollection|null find($key, $default = null)
     * @method DiscountProductCollection[] all()
     */
    class _IH_DiscountProductCollection_C extends _BaseCollection {
        /**
         * @param int $size
         * @return DiscountProductCollection[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_DiscountProductCollection_QB whereDiscountId($value)
     * @method _IH_DiscountProductCollection_QB whereProductCollectionId($value)
     * @method DiscountProductCollection baseSole(array|string $columns = ['*'])
     * @method DiscountProductCollection create(array $attributes = [])
     * @method _IH_DiscountProductCollection_C|DiscountProductCollection[] cursor()
     * @method DiscountProductCollection|null|_IH_DiscountProductCollection_C|DiscountProductCollection[] find($id, array|string $columns = ['*'])
     * @method _IH_DiscountProductCollection_C|DiscountProductCollection[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method DiscountProductCollection|_IH_DiscountProductCollection_C|DiscountProductCollection[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method DiscountProductCollection|_IH_DiscountProductCollection_C|DiscountProductCollection[] findOrFail($id, array|string $columns = ['*'])
     * @method DiscountProductCollection|_IH_DiscountProductCollection_C|DiscountProductCollection[] findOrNew($id, array|string $columns = ['*'])
     * @method DiscountProductCollection first(array|string $columns = ['*'])
     * @method DiscountProductCollection firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method DiscountProductCollection firstOrCreate(array $attributes = [], array $values = [])
     * @method DiscountProductCollection firstOrFail(array|string $columns = ['*'])
     * @method DiscountProductCollection firstOrNew(array $attributes = [], array $values = [])
     * @method DiscountProductCollection firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method DiscountProductCollection forceCreate(array $attributes)
     * @method _IH_DiscountProductCollection_C|DiscountProductCollection[] fromQuery(string $query, array $bindings = [])
     * @method _IH_DiscountProductCollection_C|DiscountProductCollection[] get(array|string $columns = ['*'])
     * @method DiscountProductCollection getModel()
     * @method DiscountProductCollection[] getModels(array|string $columns = ['*'])
     * @method _IH_DiscountProductCollection_C|DiscountProductCollection[] hydrate(array $items)
     * @method DiscountProductCollection make(array $attributes = [])
     * @method DiscountProductCollection newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|DiscountProductCollection[]|_IH_DiscountProductCollection_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|DiscountProductCollection[]|_IH_DiscountProductCollection_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method DiscountProductCollection sole(array|string $columns = ['*'])
     * @method DiscountProductCollection updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_DiscountProductCollection_QB extends _BaseBuilder {}

    /**
     * @method DiscountProduct|null getOrPut($key, $value)
     * @method DiscountProduct|$this shift(int $count = 1)
     * @method DiscountProduct|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method DiscountProduct|$this pop(int $count = 1)
     * @method DiscountProduct|null pull($key, \Closure $default = null)
     * @method DiscountProduct|null last(callable $callback = null, \Closure $default = null)
     * @method DiscountProduct|$this random(callable|int|null $number = null)
     * @method DiscountProduct|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method DiscountProduct|null get($key, \Closure $default = null)
     * @method DiscountProduct|null first(callable $callback = null, \Closure $default = null)
     * @method DiscountProduct|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method DiscountProduct|null find($key, $default = null)
     * @method DiscountProduct[] all()
     */
    class _IH_DiscountProduct_C extends _BaseCollection {
        /**
         * @param int $size
         * @return DiscountProduct[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_DiscountProduct_QB whereDiscountId($value)
     * @method _IH_DiscountProduct_QB whereProductId($value)
     * @method DiscountProduct baseSole(array|string $columns = ['*'])
     * @method DiscountProduct create(array $attributes = [])
     * @method _IH_DiscountProduct_C|DiscountProduct[] cursor()
     * @method DiscountProduct|null|_IH_DiscountProduct_C|DiscountProduct[] find($id, array|string $columns = ['*'])
     * @method _IH_DiscountProduct_C|DiscountProduct[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method DiscountProduct|_IH_DiscountProduct_C|DiscountProduct[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method DiscountProduct|_IH_DiscountProduct_C|DiscountProduct[] findOrFail($id, array|string $columns = ['*'])
     * @method DiscountProduct|_IH_DiscountProduct_C|DiscountProduct[] findOrNew($id, array|string $columns = ['*'])
     * @method DiscountProduct first(array|string $columns = ['*'])
     * @method DiscountProduct firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method DiscountProduct firstOrCreate(array $attributes = [], array $values = [])
     * @method DiscountProduct firstOrFail(array|string $columns = ['*'])
     * @method DiscountProduct firstOrNew(array $attributes = [], array $values = [])
     * @method DiscountProduct firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method DiscountProduct forceCreate(array $attributes)
     * @method _IH_DiscountProduct_C|DiscountProduct[] fromQuery(string $query, array $bindings = [])
     * @method _IH_DiscountProduct_C|DiscountProduct[] get(array|string $columns = ['*'])
     * @method DiscountProduct getModel()
     * @method DiscountProduct[] getModels(array|string $columns = ['*'])
     * @method _IH_DiscountProduct_C|DiscountProduct[] hydrate(array $items)
     * @method DiscountProduct make(array $attributes = [])
     * @method DiscountProduct newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|DiscountProduct[]|_IH_DiscountProduct_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|DiscountProduct[]|_IH_DiscountProduct_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method DiscountProduct sole(array|string $columns = ['*'])
     * @method DiscountProduct updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_DiscountProduct_QB extends _BaseBuilder {}

    /**
     * @method Discount|null getOrPut($key, $value)
     * @method Discount|$this shift(int $count = 1)
     * @method Discount|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Discount|$this pop(int $count = 1)
     * @method Discount|null pull($key, \Closure $default = null)
     * @method Discount|null last(callable $callback = null, \Closure $default = null)
     * @method Discount|$this random(callable|int|null $number = null)
     * @method Discount|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Discount|null get($key, \Closure $default = null)
     * @method Discount|null first(callable $callback = null, \Closure $default = null)
     * @method Discount|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Discount|null find($key, $default = null)
     * @method Discount[] all()
     */
    class _IH_Discount_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Discount[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Discount_QB whereId($value)
     * @method _IH_Discount_QB whereTitle($value)
     * @method _IH_Discount_QB whereCode($value)
     * @method _IH_Discount_QB whereStartDate($value)
     * @method _IH_Discount_QB whereEndDate($value)
     * @method _IH_Discount_QB whereQuantity($value)
     * @method _IH_Discount_QB whereTotalUsed($value)
     * @method _IH_Discount_QB whereValue($value)
     * @method _IH_Discount_QB whereType($value)
     * @method _IH_Discount_QB whereCanUseWithPromotion($value)
     * @method _IH_Discount_QB whereDiscountOn($value)
     * @method _IH_Discount_QB whereProductQuantity($value)
     * @method _IH_Discount_QB whereTypeOption($value)
     * @method _IH_Discount_QB whereTarget($value)
     * @method _IH_Discount_QB whereMinOrderPrice($value)
     * @method _IH_Discount_QB whereCreatedAt($value)
     * @method _IH_Discount_QB whereUpdatedAt($value)
     * @method _IH_Discount_QB whereStoreId($value)
     * @method Discount baseSole(array|string $columns = ['*'])
     * @method Discount create(array $attributes = [])
     * @method _IH_Discount_C|Discount[] cursor()
     * @method Discount|null|_IH_Discount_C|Discount[] find($id, array|string $columns = ['*'])
     * @method _IH_Discount_C|Discount[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Discount|_IH_Discount_C|Discount[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Discount|_IH_Discount_C|Discount[] findOrFail($id, array|string $columns = ['*'])
     * @method Discount|_IH_Discount_C|Discount[] findOrNew($id, array|string $columns = ['*'])
     * @method Discount first(array|string $columns = ['*'])
     * @method Discount firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Discount firstOrCreate(array $attributes = [], array $values = [])
     * @method Discount firstOrFail(array|string $columns = ['*'])
     * @method Discount firstOrNew(array $attributes = [], array $values = [])
     * @method Discount firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Discount forceCreate(array $attributes)
     * @method _IH_Discount_C|Discount[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Discount_C|Discount[] get(array|string $columns = ['*'])
     * @method Discount getModel()
     * @method Discount[] getModels(array|string $columns = ['*'])
     * @method _IH_Discount_C|Discount[] hydrate(array $items)
     * @method Discount make(array $attributes = [])
     * @method Discount newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Discount[]|_IH_Discount_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Discount[]|_IH_Discount_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Discount sole(array|string $columns = ['*'])
     * @method Discount updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Discount_QB extends _BaseBuilder {}

    /**
     * @method FlashSaleTranslation|null getOrPut($key, $value)
     * @method FlashSaleTranslation|$this shift(int $count = 1)
     * @method FlashSaleTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method FlashSaleTranslation|$this pop(int $count = 1)
     * @method FlashSaleTranslation|null pull($key, \Closure $default = null)
     * @method FlashSaleTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method FlashSaleTranslation|$this random(callable|int|null $number = null)
     * @method FlashSaleTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method FlashSaleTranslation|null get($key, \Closure $default = null)
     * @method FlashSaleTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method FlashSaleTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method FlashSaleTranslation|null find($key, $default = null)
     * @method FlashSaleTranslation[] all()
     */
    class _IH_FlashSaleTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return FlashSaleTranslation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_FlashSaleTranslation_QB whereLangCode($value)
     * @method _IH_FlashSaleTranslation_QB whereEcFlashSalesId($value)
     * @method _IH_FlashSaleTranslation_QB whereName($value)
     * @method FlashSaleTranslation baseSole(array|string $columns = ['*'])
     * @method FlashSaleTranslation create(array $attributes = [])
     * @method _IH_FlashSaleTranslation_C|FlashSaleTranslation[] cursor()
     * @method FlashSaleTranslation|null|_IH_FlashSaleTranslation_C|FlashSaleTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_FlashSaleTranslation_C|FlashSaleTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method FlashSaleTranslation|_IH_FlashSaleTranslation_C|FlashSaleTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FlashSaleTranslation|_IH_FlashSaleTranslation_C|FlashSaleTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method FlashSaleTranslation|_IH_FlashSaleTranslation_C|FlashSaleTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method FlashSaleTranslation first(array|string $columns = ['*'])
     * @method FlashSaleTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FlashSaleTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method FlashSaleTranslation firstOrFail(array|string $columns = ['*'])
     * @method FlashSaleTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method FlashSaleTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method FlashSaleTranslation forceCreate(array $attributes)
     * @method _IH_FlashSaleTranslation_C|FlashSaleTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_FlashSaleTranslation_C|FlashSaleTranslation[] get(array|string $columns = ['*'])
     * @method FlashSaleTranslation getModel()
     * @method FlashSaleTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_FlashSaleTranslation_C|FlashSaleTranslation[] hydrate(array $items)
     * @method FlashSaleTranslation make(array $attributes = [])
     * @method FlashSaleTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|FlashSaleTranslation[]|_IH_FlashSaleTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|FlashSaleTranslation[]|_IH_FlashSaleTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FlashSaleTranslation sole(array|string $columns = ['*'])
     * @method FlashSaleTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_FlashSaleTranslation_QB extends _BaseBuilder {}

    /**
     * @method FlashSale|null getOrPut($key, $value)
     * @method FlashSale|$this shift(int $count = 1)
     * @method FlashSale|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method FlashSale|$this pop(int $count = 1)
     * @method FlashSale|null pull($key, \Closure $default = null)
     * @method FlashSale|null last(callable $callback = null, \Closure $default = null)
     * @method FlashSale|$this random(callable|int|null $number = null)
     * @method FlashSale|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method FlashSale|null get($key, \Closure $default = null)
     * @method FlashSale|null first(callable $callback = null, \Closure $default = null)
     * @method FlashSale|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method FlashSale|null find($key, $default = null)
     * @method FlashSale[] all()
     */
    class _IH_FlashSale_C extends _BaseCollection {
        /**
         * @param int $size
         * @return FlashSale[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_FlashSale_QB whereId($value)
     * @method _IH_FlashSale_QB whereName($value)
     * @method _IH_FlashSale_QB whereEndDate($value)
     * @method _IH_FlashSale_QB whereStatus($value)
     * @method _IH_FlashSale_QB whereCreatedAt($value)
     * @method _IH_FlashSale_QB whereUpdatedAt($value)
     * @method FlashSale baseSole(array|string $columns = ['*'])
     * @method FlashSale create(array $attributes = [])
     * @method _IH_FlashSale_C|FlashSale[] cursor()
     * @method FlashSale|null|_IH_FlashSale_C|FlashSale[] find($id, array|string $columns = ['*'])
     * @method _IH_FlashSale_C|FlashSale[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method FlashSale|_IH_FlashSale_C|FlashSale[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FlashSale|_IH_FlashSale_C|FlashSale[] findOrFail($id, array|string $columns = ['*'])
     * @method FlashSale|_IH_FlashSale_C|FlashSale[] findOrNew($id, array|string $columns = ['*'])
     * @method FlashSale first(array|string $columns = ['*'])
     * @method FlashSale firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FlashSale firstOrCreate(array $attributes = [], array $values = [])
     * @method FlashSale firstOrFail(array|string $columns = ['*'])
     * @method FlashSale firstOrNew(array $attributes = [], array $values = [])
     * @method FlashSale firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method FlashSale forceCreate(array $attributes)
     * @method _IH_FlashSale_C|FlashSale[] fromQuery(string $query, array $bindings = [])
     * @method _IH_FlashSale_C|FlashSale[] get(array|string $columns = ['*'])
     * @method FlashSale getModel()
     * @method FlashSale[] getModels(array|string $columns = ['*'])
     * @method _IH_FlashSale_C|FlashSale[] hydrate(array $items)
     * @method FlashSale make(array $attributes = [])
     * @method FlashSale newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|FlashSale[]|_IH_FlashSale_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|FlashSale[]|_IH_FlashSale_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FlashSale sole(array|string $columns = ['*'])
     * @method FlashSale updateOrCreate(array $attributes, array $values = [])
     * @method _IH_FlashSale_QB expired()
     * @method _IH_FlashSale_QB notExpired()
     */
    class _IH_FlashSale_QB extends _BaseBuilder {}

    /**
     * @method GlobalOptionValue|null getOrPut($key, $value)
     * @method GlobalOptionValue|$this shift(int $count = 1)
     * @method GlobalOptionValue|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method GlobalOptionValue|$this pop(int $count = 1)
     * @method GlobalOptionValue|null pull($key, \Closure $default = null)
     * @method GlobalOptionValue|null last(callable $callback = null, \Closure $default = null)
     * @method GlobalOptionValue|$this random(callable|int|null $number = null)
     * @method GlobalOptionValue|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method GlobalOptionValue|null get($key, \Closure $default = null)
     * @method GlobalOptionValue|null first(callable $callback = null, \Closure $default = null)
     * @method GlobalOptionValue|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method GlobalOptionValue|null find($key, $default = null)
     * @method GlobalOptionValue[] all()
     */
    class _IH_GlobalOptionValue_C extends _BaseCollection {
        /**
         * @param int $size
         * @return GlobalOptionValue[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_GlobalOptionValue_QB whereOptionId($value)
     * @method _IH_GlobalOptionValue_QB whereAffectPrice($value)
     * @method _IH_GlobalOptionValue_QB whereOrder($value)
     * @method _IH_GlobalOptionValue_QB whereAffectType($value)
     * @method _IH_GlobalOptionValue_QB whereCreatedAt($value)
     * @method _IH_GlobalOptionValue_QB whereUpdatedAt($value)
     * @method GlobalOptionValue baseSole(array|string $columns = ['*'])
     * @method GlobalOptionValue create(array $attributes = [])
     * @method _IH_GlobalOptionValue_C|GlobalOptionValue[] cursor()
     * @method GlobalOptionValue|null|_IH_GlobalOptionValue_C|GlobalOptionValue[] find($id, array|string $columns = ['*'])
     * @method _IH_GlobalOptionValue_C|GlobalOptionValue[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method GlobalOptionValue|_IH_GlobalOptionValue_C|GlobalOptionValue[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method GlobalOptionValue|_IH_GlobalOptionValue_C|GlobalOptionValue[] findOrFail($id, array|string $columns = ['*'])
     * @method GlobalOptionValue|_IH_GlobalOptionValue_C|GlobalOptionValue[] findOrNew($id, array|string $columns = ['*'])
     * @method GlobalOptionValue first(array|string $columns = ['*'])
     * @method GlobalOptionValue firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method GlobalOptionValue firstOrCreate(array $attributes = [], array $values = [])
     * @method GlobalOptionValue firstOrFail(array|string $columns = ['*'])
     * @method GlobalOptionValue firstOrNew(array $attributes = [], array $values = [])
     * @method GlobalOptionValue firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method GlobalOptionValue forceCreate(array $attributes)
     * @method _IH_GlobalOptionValue_C|GlobalOptionValue[] fromQuery(string $query, array $bindings = [])
     * @method _IH_GlobalOptionValue_C|GlobalOptionValue[] get(array|string $columns = ['*'])
     * @method GlobalOptionValue getModel()
     * @method GlobalOptionValue[] getModels(array|string $columns = ['*'])
     * @method _IH_GlobalOptionValue_C|GlobalOptionValue[] hydrate(array $items)
     * @method GlobalOptionValue make(array $attributes = [])
     * @method GlobalOptionValue newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|GlobalOptionValue[]|_IH_GlobalOptionValue_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|GlobalOptionValue[]|_IH_GlobalOptionValue_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method GlobalOptionValue sole(array|string $columns = ['*'])
     * @method GlobalOptionValue updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_GlobalOptionValue_QB extends _BaseBuilder {}

    /**
     * @method GlobalOption|null getOrPut($key, $value)
     * @method GlobalOption|$this shift(int $count = 1)
     * @method GlobalOption|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method GlobalOption|$this pop(int $count = 1)
     * @method GlobalOption|null pull($key, \Closure $default = null)
     * @method GlobalOption|null last(callable $callback = null, \Closure $default = null)
     * @method GlobalOption|$this random(callable|int|null $number = null)
     * @method GlobalOption|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method GlobalOption|null get($key, \Closure $default = null)
     * @method GlobalOption|null first(callable $callback = null, \Closure $default = null)
     * @method GlobalOption|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method GlobalOption|null find($key, $default = null)
     * @method GlobalOption[] all()
     */
    class _IH_GlobalOption_C extends _BaseCollection {
        /**
         * @param int $size
         * @return GlobalOption[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_GlobalOption_QB whereId($value)
     * @method _IH_GlobalOption_QB whereName($value)
     * @method _IH_GlobalOption_QB whereOptionType($value)
     * @method _IH_GlobalOption_QB whereRequired($value)
     * @method _IH_GlobalOption_QB whereCreatedAt($value)
     * @method _IH_GlobalOption_QB whereUpdatedAt($value)
     * @method GlobalOption baseSole(array|string $columns = ['*'])
     * @method GlobalOption create(array $attributes = [])
     * @method _IH_GlobalOption_C|GlobalOption[] cursor()
     * @method GlobalOption|null|_IH_GlobalOption_C|GlobalOption[] find($id, array|string $columns = ['*'])
     * @method _IH_GlobalOption_C|GlobalOption[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method GlobalOption|_IH_GlobalOption_C|GlobalOption[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method GlobalOption|_IH_GlobalOption_C|GlobalOption[] findOrFail($id, array|string $columns = ['*'])
     * @method GlobalOption|_IH_GlobalOption_C|GlobalOption[] findOrNew($id, array|string $columns = ['*'])
     * @method GlobalOption first(array|string $columns = ['*'])
     * @method GlobalOption firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method GlobalOption firstOrCreate(array $attributes = [], array $values = [])
     * @method GlobalOption firstOrFail(array|string $columns = ['*'])
     * @method GlobalOption firstOrNew(array $attributes = [], array $values = [])
     * @method GlobalOption firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method GlobalOption forceCreate(array $attributes)
     * @method _IH_GlobalOption_C|GlobalOption[] fromQuery(string $query, array $bindings = [])
     * @method _IH_GlobalOption_C|GlobalOption[] get(array|string $columns = ['*'])
     * @method GlobalOption getModel()
     * @method GlobalOption[] getModels(array|string $columns = ['*'])
     * @method _IH_GlobalOption_C|GlobalOption[] hydrate(array $items)
     * @method GlobalOption make(array $attributes = [])
     * @method GlobalOption newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|GlobalOption[]|_IH_GlobalOption_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|GlobalOption[]|_IH_GlobalOption_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method GlobalOption sole(array|string $columns = ['*'])
     * @method GlobalOption updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_GlobalOption_QB extends _BaseBuilder {}

    /**
     * @method GroupedProduct|null getOrPut($key, $value)
     * @method GroupedProduct|$this shift(int $count = 1)
     * @method GroupedProduct|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method GroupedProduct|$this pop(int $count = 1)
     * @method GroupedProduct|null pull($key, \Closure $default = null)
     * @method GroupedProduct|null last(callable $callback = null, \Closure $default = null)
     * @method GroupedProduct|$this random(callable|int|null $number = null)
     * @method GroupedProduct|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method GroupedProduct|null get($key, \Closure $default = null)
     * @method GroupedProduct|null first(callable $callback = null, \Closure $default = null)
     * @method GroupedProduct|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method GroupedProduct|null find($key, $default = null)
     * @method GroupedProduct[] all()
     */
    class _IH_GroupedProduct_C extends _BaseCollection {
        /**
         * @param int $size
         * @return GroupedProduct[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_GroupedProduct_QB whereId($value)
     * @method _IH_GroupedProduct_QB whereParentProductId($value)
     * @method _IH_GroupedProduct_QB whereProductId($value)
     * @method _IH_GroupedProduct_QB whereFixedQty($value)
     * @method GroupedProduct baseSole(array|string $columns = ['*'])
     * @method GroupedProduct create(array $attributes = [])
     * @method _IH_GroupedProduct_C|GroupedProduct[] cursor()
     * @method GroupedProduct|null|_IH_GroupedProduct_C|GroupedProduct[] find($id, array|string $columns = ['*'])
     * @method _IH_GroupedProduct_C|GroupedProduct[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method GroupedProduct|_IH_GroupedProduct_C|GroupedProduct[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method GroupedProduct|_IH_GroupedProduct_C|GroupedProduct[] findOrFail($id, array|string $columns = ['*'])
     * @method GroupedProduct|_IH_GroupedProduct_C|GroupedProduct[] findOrNew($id, array|string $columns = ['*'])
     * @method GroupedProduct first(array|string $columns = ['*'])
     * @method GroupedProduct firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method GroupedProduct firstOrCreate(array $attributes = [], array $values = [])
     * @method GroupedProduct firstOrFail(array|string $columns = ['*'])
     * @method GroupedProduct firstOrNew(array $attributes = [], array $values = [])
     * @method GroupedProduct firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method GroupedProduct forceCreate(array $attributes)
     * @method _IH_GroupedProduct_C|GroupedProduct[] fromQuery(string $query, array $bindings = [])
     * @method _IH_GroupedProduct_C|GroupedProduct[] get(array|string $columns = ['*'])
     * @method GroupedProduct getModel()
     * @method GroupedProduct[] getModels(array|string $columns = ['*'])
     * @method _IH_GroupedProduct_C|GroupedProduct[] hydrate(array $items)
     * @method GroupedProduct make(array $attributes = [])
     * @method GroupedProduct newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|GroupedProduct[]|_IH_GroupedProduct_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|GroupedProduct[]|_IH_GroupedProduct_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method GroupedProduct sole(array|string $columns = ['*'])
     * @method GroupedProduct updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_GroupedProduct_QB extends _BaseBuilder {}

    /**
     * @method InvoiceItem|null getOrPut($key, $value)
     * @method InvoiceItem|$this shift(int $count = 1)
     * @method InvoiceItem|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method InvoiceItem|$this pop(int $count = 1)
     * @method InvoiceItem|null pull($key, \Closure $default = null)
     * @method InvoiceItem|null last(callable $callback = null, \Closure $default = null)
     * @method InvoiceItem|$this random(callable|int|null $number = null)
     * @method InvoiceItem|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method InvoiceItem|null get($key, \Closure $default = null)
     * @method InvoiceItem|null first(callable $callback = null, \Closure $default = null)
     * @method InvoiceItem|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method InvoiceItem|null find($key, $default = null)
     * @method InvoiceItem[] all()
     */
    class _IH_InvoiceItem_C extends _BaseCollection {
        /**
         * @param int $size
         * @return InvoiceItem[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_InvoiceItem_QB whereId($value)
     * @method _IH_InvoiceItem_QB whereInvoiceId($value)
     * @method _IH_InvoiceItem_QB whereReferenceId($value)
     * @method _IH_InvoiceItem_QB whereReferenceType($value)
     * @method _IH_InvoiceItem_QB whereName($value)
     * @method _IH_InvoiceItem_QB whereDescription($value)
     * @method _IH_InvoiceItem_QB whereImage($value)
     * @method _IH_InvoiceItem_QB whereQty($value)
     * @method _IH_InvoiceItem_QB whereSubTotal($value)
     * @method _IH_InvoiceItem_QB whereTaxAmount($value)
     * @method _IH_InvoiceItem_QB whereDiscountAmount($value)
     * @method _IH_InvoiceItem_QB whereAmount($value)
     * @method _IH_InvoiceItem_QB whereOptions($value)
     * @method _IH_InvoiceItem_QB whereCreatedAt($value)
     * @method _IH_InvoiceItem_QB whereUpdatedAt($value)
     * @method InvoiceItem baseSole(array|string $columns = ['*'])
     * @method InvoiceItem create(array $attributes = [])
     * @method _IH_InvoiceItem_C|InvoiceItem[] cursor()
     * @method InvoiceItem|null|_IH_InvoiceItem_C|InvoiceItem[] find($id, array|string $columns = ['*'])
     * @method _IH_InvoiceItem_C|InvoiceItem[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method InvoiceItem|_IH_InvoiceItem_C|InvoiceItem[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method InvoiceItem|_IH_InvoiceItem_C|InvoiceItem[] findOrFail($id, array|string $columns = ['*'])
     * @method InvoiceItem|_IH_InvoiceItem_C|InvoiceItem[] findOrNew($id, array|string $columns = ['*'])
     * @method InvoiceItem first(array|string $columns = ['*'])
     * @method InvoiceItem firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method InvoiceItem firstOrCreate(array $attributes = [], array $values = [])
     * @method InvoiceItem firstOrFail(array|string $columns = ['*'])
     * @method InvoiceItem firstOrNew(array $attributes = [], array $values = [])
     * @method InvoiceItem firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method InvoiceItem forceCreate(array $attributes)
     * @method _IH_InvoiceItem_C|InvoiceItem[] fromQuery(string $query, array $bindings = [])
     * @method _IH_InvoiceItem_C|InvoiceItem[] get(array|string $columns = ['*'])
     * @method InvoiceItem getModel()
     * @method InvoiceItem[] getModels(array|string $columns = ['*'])
     * @method _IH_InvoiceItem_C|InvoiceItem[] hydrate(array $items)
     * @method InvoiceItem make(array $attributes = [])
     * @method InvoiceItem newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|InvoiceItem[]|_IH_InvoiceItem_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|InvoiceItem[]|_IH_InvoiceItem_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method InvoiceItem sole(array|string $columns = ['*'])
     * @method InvoiceItem updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_InvoiceItem_QB extends _BaseBuilder {}

    /**
     * @method Invoice|null getOrPut($key, $value)
     * @method Invoice|$this shift(int $count = 1)
     * @method Invoice|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Invoice|$this pop(int $count = 1)
     * @method Invoice|null pull($key, \Closure $default = null)
     * @method Invoice|null last(callable $callback = null, \Closure $default = null)
     * @method Invoice|$this random(callable|int|null $number = null)
     * @method Invoice|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Invoice|null get($key, \Closure $default = null)
     * @method Invoice|null first(callable $callback = null, \Closure $default = null)
     * @method Invoice|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Invoice|null find($key, $default = null)
     * @method Invoice[] all()
     */
    class _IH_Invoice_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Invoice[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Invoice_QB whereId($value)
     * @method _IH_Invoice_QB whereReferenceId($value)
     * @method _IH_Invoice_QB whereReferenceType($value)
     * @method _IH_Invoice_QB whereCode($value)
     * @method _IH_Invoice_QB whereCustomerName($value)
     * @method _IH_Invoice_QB whereCompanyName($value)
     * @method _IH_Invoice_QB whereCompanyLogo($value)
     * @method _IH_Invoice_QB whereCustomerEmail($value)
     * @method _IH_Invoice_QB whereCustomerPhone($value)
     * @method _IH_Invoice_QB whereCustomerAddress($value)
     * @method _IH_Invoice_QB whereCustomerTaxId($value)
     * @method _IH_Invoice_QB whereSubTotal($value)
     * @method _IH_Invoice_QB whereTaxAmount($value)
     * @method _IH_Invoice_QB whereShippingAmount($value)
     * @method _IH_Invoice_QB whereDiscountAmount($value)
     * @method _IH_Invoice_QB whereShippingOption($value)
     * @method _IH_Invoice_QB whereShippingMethod($value)
     * @method _IH_Invoice_QB whereCouponCode($value)
     * @method _IH_Invoice_QB whereDiscountDescription($value)
     * @method _IH_Invoice_QB whereAmount($value)
     * @method _IH_Invoice_QB whereDescription($value)
     * @method _IH_Invoice_QB wherePaymentId($value)
     * @method _IH_Invoice_QB whereStatus($value)
     * @method _IH_Invoice_QB wherePaidAt($value)
     * @method _IH_Invoice_QB whereCreatedAt($value)
     * @method _IH_Invoice_QB whereUpdatedAt($value)
     * @method Invoice baseSole(array|string $columns = ['*'])
     * @method Invoice create(array $attributes = [])
     * @method _IH_Invoice_C|Invoice[] cursor()
     * @method Invoice|null|_IH_Invoice_C|Invoice[] find($id, array|string $columns = ['*'])
     * @method _IH_Invoice_C|Invoice[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Invoice|_IH_Invoice_C|Invoice[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Invoice|_IH_Invoice_C|Invoice[] findOrFail($id, array|string $columns = ['*'])
     * @method Invoice|_IH_Invoice_C|Invoice[] findOrNew($id, array|string $columns = ['*'])
     * @method Invoice first(array|string $columns = ['*'])
     * @method Invoice firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Invoice firstOrCreate(array $attributes = [], array $values = [])
     * @method Invoice firstOrFail(array|string $columns = ['*'])
     * @method Invoice firstOrNew(array $attributes = [], array $values = [])
     * @method Invoice firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Invoice forceCreate(array $attributes)
     * @method _IH_Invoice_C|Invoice[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Invoice_C|Invoice[] get(array|string $columns = ['*'])
     * @method Invoice getModel()
     * @method Invoice[] getModels(array|string $columns = ['*'])
     * @method _IH_Invoice_C|Invoice[] hydrate(array $items)
     * @method Invoice make(array $attributes = [])
     * @method Invoice newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Invoice[]|_IH_Invoice_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Invoice[]|_IH_Invoice_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Invoice sole(array|string $columns = ['*'])
     * @method Invoice updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Invoice_QB extends _BaseBuilder {}

    /**
     * @method OptionValue|null getOrPut($key, $value)
     * @method OptionValue|$this shift(int $count = 1)
     * @method OptionValue|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method OptionValue|$this pop(int $count = 1)
     * @method OptionValue|null pull($key, \Closure $default = null)
     * @method OptionValue|null last(callable $callback = null, \Closure $default = null)
     * @method OptionValue|$this random(callable|int|null $number = null)
     * @method OptionValue|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method OptionValue|null get($key, \Closure $default = null)
     * @method OptionValue|null first(callable $callback = null, \Closure $default = null)
     * @method OptionValue|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method OptionValue|null find($key, $default = null)
     * @method OptionValue[] all()
     */
    class _IH_OptionValue_C extends _BaseCollection {
        /**
         * @param int $size
         * @return OptionValue[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_OptionValue_QB whereOptionId($value)
     * @method _IH_OptionValue_QB whereAffectPrice($value)
     * @method _IH_OptionValue_QB whereOrder($value)
     * @method _IH_OptionValue_QB whereAffectType($value)
     * @method _IH_OptionValue_QB whereCreatedAt($value)
     * @method _IH_OptionValue_QB whereUpdatedAt($value)
     * @method OptionValue baseSole(array|string $columns = ['*'])
     * @method OptionValue create(array $attributes = [])
     * @method _IH_OptionValue_C|OptionValue[] cursor()
     * @method OptionValue|null|_IH_OptionValue_C|OptionValue[] find($id, array|string $columns = ['*'])
     * @method _IH_OptionValue_C|OptionValue[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method OptionValue|_IH_OptionValue_C|OptionValue[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method OptionValue|_IH_OptionValue_C|OptionValue[] findOrFail($id, array|string $columns = ['*'])
     * @method OptionValue|_IH_OptionValue_C|OptionValue[] findOrNew($id, array|string $columns = ['*'])
     * @method OptionValue first(array|string $columns = ['*'])
     * @method OptionValue firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method OptionValue firstOrCreate(array $attributes = [], array $values = [])
     * @method OptionValue firstOrFail(array|string $columns = ['*'])
     * @method OptionValue firstOrNew(array $attributes = [], array $values = [])
     * @method OptionValue firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method OptionValue forceCreate(array $attributes)
     * @method _IH_OptionValue_C|OptionValue[] fromQuery(string $query, array $bindings = [])
     * @method _IH_OptionValue_C|OptionValue[] get(array|string $columns = ['*'])
     * @method OptionValue getModel()
     * @method OptionValue[] getModels(array|string $columns = ['*'])
     * @method _IH_OptionValue_C|OptionValue[] hydrate(array $items)
     * @method OptionValue make(array $attributes = [])
     * @method OptionValue newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|OptionValue[]|_IH_OptionValue_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|OptionValue[]|_IH_OptionValue_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method OptionValue sole(array|string $columns = ['*'])
     * @method OptionValue updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_OptionValue_QB extends _BaseBuilder {}

    /**
     * @method Option|null getOrPut($key, $value)
     * @method Option|$this shift(int $count = 1)
     * @method Option|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Option|$this pop(int $count = 1)
     * @method Option|null pull($key, \Closure $default = null)
     * @method Option|null last(callable $callback = null, \Closure $default = null)
     * @method Option|$this random(callable|int|null $number = null)
     * @method Option|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Option|null get($key, \Closure $default = null)
     * @method Option|null first(callable $callback = null, \Closure $default = null)
     * @method Option|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Option|null find($key, $default = null)
     * @method Option[] all()
     */
    class _IH_Option_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Option[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Option_QB whereId($value)
     * @method _IH_Option_QB whereName($value)
     * @method _IH_Option_QB whereOptionType($value)
     * @method _IH_Option_QB whereProductId($value)
     * @method _IH_Option_QB whereOrder($value)
     * @method _IH_Option_QB whereRequired($value)
     * @method _IH_Option_QB whereCreatedAt($value)
     * @method _IH_Option_QB whereUpdatedAt($value)
     * @method Option baseSole(array|string $columns = ['*'])
     * @method Option create(array $attributes = [])
     * @method _IH_Option_C|Option[] cursor()
     * @method Option|null|_IH_Option_C|Option[] find($id, array|string $columns = ['*'])
     * @method _IH_Option_C|Option[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Option|_IH_Option_C|Option[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Option|_IH_Option_C|Option[] findOrFail($id, array|string $columns = ['*'])
     * @method Option|_IH_Option_C|Option[] findOrNew($id, array|string $columns = ['*'])
     * @method Option first(array|string $columns = ['*'])
     * @method Option firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Option firstOrCreate(array $attributes = [], array $values = [])
     * @method Option firstOrFail(array|string $columns = ['*'])
     * @method Option firstOrNew(array $attributes = [], array $values = [])
     * @method Option firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Option forceCreate(array $attributes)
     * @method _IH_Option_C|Option[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Option_C|Option[] get(array|string $columns = ['*'])
     * @method Option getModel()
     * @method Option[] getModels(array|string $columns = ['*'])
     * @method _IH_Option_C|Option[] hydrate(array $items)
     * @method Option make(array $attributes = [])
     * @method Option newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Option[]|_IH_Option_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Option[]|_IH_Option_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Option sole(array|string $columns = ['*'])
     * @method Option updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Option_QB extends _BaseBuilder {}

    /**
     * @method OrderAddress|null getOrPut($key, $value)
     * @method OrderAddress|$this shift(int $count = 1)
     * @method OrderAddress|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method OrderAddress|$this pop(int $count = 1)
     * @method OrderAddress|null pull($key, \Closure $default = null)
     * @method OrderAddress|null last(callable $callback = null, \Closure $default = null)
     * @method OrderAddress|$this random(callable|int|null $number = null)
     * @method OrderAddress|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method OrderAddress|null get($key, \Closure $default = null)
     * @method OrderAddress|null first(callable $callback = null, \Closure $default = null)
     * @method OrderAddress|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method OrderAddress|null find($key, $default = null)
     * @method OrderAddress[] all()
     */
    class _IH_OrderAddress_C extends _BaseCollection {
        /**
         * @param int $size
         * @return OrderAddress[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_OrderAddress_QB whereId($value)
     * @method _IH_OrderAddress_QB whereName($value)
     * @method _IH_OrderAddress_QB wherePhone($value)
     * @method _IH_OrderAddress_QB whereEmail($value)
     * @method _IH_OrderAddress_QB whereCountry($value)
     * @method _IH_OrderAddress_QB whereState($value)
     * @method _IH_OrderAddress_QB whereCity($value)
     * @method _IH_OrderAddress_QB whereAddress($value)
     * @method _IH_OrderAddress_QB whereOrderId($value)
     * @method _IH_OrderAddress_QB whereZipCode($value)
     * @method _IH_OrderAddress_QB whereType($value)
     * @method OrderAddress baseSole(array|string $columns = ['*'])
     * @method OrderAddress create(array $attributes = [])
     * @method _IH_OrderAddress_C|OrderAddress[] cursor()
     * @method OrderAddress|null|_IH_OrderAddress_C|OrderAddress[] find($id, array|string $columns = ['*'])
     * @method _IH_OrderAddress_C|OrderAddress[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method OrderAddress|_IH_OrderAddress_C|OrderAddress[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method OrderAddress|_IH_OrderAddress_C|OrderAddress[] findOrFail($id, array|string $columns = ['*'])
     * @method OrderAddress|_IH_OrderAddress_C|OrderAddress[] findOrNew($id, array|string $columns = ['*'])
     * @method OrderAddress first(array|string $columns = ['*'])
     * @method OrderAddress firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method OrderAddress firstOrCreate(array $attributes = [], array $values = [])
     * @method OrderAddress firstOrFail(array|string $columns = ['*'])
     * @method OrderAddress firstOrNew(array $attributes = [], array $values = [])
     * @method OrderAddress firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method OrderAddress forceCreate(array $attributes)
     * @method _IH_OrderAddress_C|OrderAddress[] fromQuery(string $query, array $bindings = [])
     * @method _IH_OrderAddress_C|OrderAddress[] get(array|string $columns = ['*'])
     * @method OrderAddress getModel()
     * @method OrderAddress[] getModels(array|string $columns = ['*'])
     * @method _IH_OrderAddress_C|OrderAddress[] hydrate(array $items)
     * @method OrderAddress make(array $attributes = [])
     * @method OrderAddress newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|OrderAddress[]|_IH_OrderAddress_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|OrderAddress[]|_IH_OrderAddress_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method OrderAddress sole(array|string $columns = ['*'])
     * @method OrderAddress updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_OrderAddress_QB extends _BaseBuilder {}

    /**
     * @method OrderHistory|null getOrPut($key, $value)
     * @method OrderHistory|$this shift(int $count = 1)
     * @method OrderHistory|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method OrderHistory|$this pop(int $count = 1)
     * @method OrderHistory|null pull($key, \Closure $default = null)
     * @method OrderHistory|null last(callable $callback = null, \Closure $default = null)
     * @method OrderHistory|$this random(callable|int|null $number = null)
     * @method OrderHistory|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method OrderHistory|null get($key, \Closure $default = null)
     * @method OrderHistory|null first(callable $callback = null, \Closure $default = null)
     * @method OrderHistory|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method OrderHistory|null find($key, $default = null)
     * @method OrderHistory[] all()
     */
    class _IH_OrderHistory_C extends _BaseCollection {
        /**
         * @param int $size
         * @return OrderHistory[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_OrderHistory_QB whereId($value)
     * @method _IH_OrderHistory_QB whereAction($value)
     * @method _IH_OrderHistory_QB whereDescription($value)
     * @method _IH_OrderHistory_QB whereUserId($value)
     * @method _IH_OrderHistory_QB whereOrderId($value)
     * @method _IH_OrderHistory_QB whereExtras($value)
     * @method _IH_OrderHistory_QB whereCreatedAt($value)
     * @method _IH_OrderHistory_QB whereUpdatedAt($value)
     * @method OrderHistory baseSole(array|string $columns = ['*'])
     * @method OrderHistory create(array $attributes = [])
     * @method _IH_OrderHistory_C|OrderHistory[] cursor()
     * @method OrderHistory|null|_IH_OrderHistory_C|OrderHistory[] find($id, array|string $columns = ['*'])
     * @method _IH_OrderHistory_C|OrderHistory[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method OrderHistory|_IH_OrderHistory_C|OrderHistory[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method OrderHistory|_IH_OrderHistory_C|OrderHistory[] findOrFail($id, array|string $columns = ['*'])
     * @method OrderHistory|_IH_OrderHistory_C|OrderHistory[] findOrNew($id, array|string $columns = ['*'])
     * @method OrderHistory first(array|string $columns = ['*'])
     * @method OrderHistory firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method OrderHistory firstOrCreate(array $attributes = [], array $values = [])
     * @method OrderHistory firstOrFail(array|string $columns = ['*'])
     * @method OrderHistory firstOrNew(array $attributes = [], array $values = [])
     * @method OrderHistory firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method OrderHistory forceCreate(array $attributes)
     * @method _IH_OrderHistory_C|OrderHistory[] fromQuery(string $query, array $bindings = [])
     * @method _IH_OrderHistory_C|OrderHistory[] get(array|string $columns = ['*'])
     * @method OrderHistory getModel()
     * @method OrderHistory[] getModels(array|string $columns = ['*'])
     * @method _IH_OrderHistory_C|OrderHistory[] hydrate(array $items)
     * @method OrderHistory make(array $attributes = [])
     * @method OrderHistory newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|OrderHistory[]|_IH_OrderHistory_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|OrderHistory[]|_IH_OrderHistory_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method OrderHistory sole(array|string $columns = ['*'])
     * @method OrderHistory updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_OrderHistory_QB extends _BaseBuilder {}

    /**
     * @method OrderProduct|null getOrPut($key, $value)
     * @method OrderProduct|$this shift(int $count = 1)
     * @method OrderProduct|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method OrderProduct|$this pop(int $count = 1)
     * @method OrderProduct|null pull($key, \Closure $default = null)
     * @method OrderProduct|null last(callable $callback = null, \Closure $default = null)
     * @method OrderProduct|$this random(callable|int|null $number = null)
     * @method OrderProduct|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method OrderProduct|null get($key, \Closure $default = null)
     * @method OrderProduct|null first(callable $callback = null, \Closure $default = null)
     * @method OrderProduct|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method OrderProduct|null find($key, $default = null)
     * @method OrderProduct[] all()
     */
    class _IH_OrderProduct_C extends _BaseCollection {
        /**
         * @param int $size
         * @return OrderProduct[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_OrderProduct_QB whereId($value)
     * @method _IH_OrderProduct_QB whereOrderId($value)
     * @method _IH_OrderProduct_QB whereQty($value)
     * @method _IH_OrderProduct_QB wherePrice($value)
     * @method _IH_OrderProduct_QB whereTaxAmount($value)
     * @method _IH_OrderProduct_QB whereOptions($value)
     * @method _IH_OrderProduct_QB whereProductId($value)
     * @method _IH_OrderProduct_QB whereProductName($value)
     * @method _IH_OrderProduct_QB whereWeight($value)
     * @method _IH_OrderProduct_QB whereRestockQuantity($value)
     * @method _IH_OrderProduct_QB whereCreatedAt($value)
     * @method _IH_OrderProduct_QB whereUpdatedAt($value)
     * @method _IH_OrderProduct_QB whereProductType($value)
     * @method _IH_OrderProduct_QB whereTimesDownloaded($value)
     * @method _IH_OrderProduct_QB whereProductOptions($value)
     * @method _IH_OrderProduct_QB whereProductImage($value)
     * @method OrderProduct baseSole(array|string $columns = ['*'])
     * @method OrderProduct create(array $attributes = [])
     * @method _IH_OrderProduct_C|OrderProduct[] cursor()
     * @method OrderProduct|null|_IH_OrderProduct_C|OrderProduct[] find($id, array|string $columns = ['*'])
     * @method _IH_OrderProduct_C|OrderProduct[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method OrderProduct|_IH_OrderProduct_C|OrderProduct[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method OrderProduct|_IH_OrderProduct_C|OrderProduct[] findOrFail($id, array|string $columns = ['*'])
     * @method OrderProduct|_IH_OrderProduct_C|OrderProduct[] findOrNew($id, array|string $columns = ['*'])
     * @method OrderProduct first(array|string $columns = ['*'])
     * @method OrderProduct firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method OrderProduct firstOrCreate(array $attributes = [], array $values = [])
     * @method OrderProduct firstOrFail(array|string $columns = ['*'])
     * @method OrderProduct firstOrNew(array $attributes = [], array $values = [])
     * @method OrderProduct firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method OrderProduct forceCreate(array $attributes)
     * @method _IH_OrderProduct_C|OrderProduct[] fromQuery(string $query, array $bindings = [])
     * @method _IH_OrderProduct_C|OrderProduct[] get(array|string $columns = ['*'])
     * @method OrderProduct getModel()
     * @method OrderProduct[] getModels(array|string $columns = ['*'])
     * @method _IH_OrderProduct_C|OrderProduct[] hydrate(array $items)
     * @method OrderProduct make(array $attributes = [])
     * @method OrderProduct newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|OrderProduct[]|_IH_OrderProduct_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|OrderProduct[]|_IH_OrderProduct_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method OrderProduct sole(array|string $columns = ['*'])
     * @method OrderProduct updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_OrderProduct_QB extends _BaseBuilder {}

    /**
     * @method OrderReferral|null getOrPut($key, $value)
     * @method OrderReferral|$this shift(int $count = 1)
     * @method OrderReferral|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method OrderReferral|$this pop(int $count = 1)
     * @method OrderReferral|null pull($key, \Closure $default = null)
     * @method OrderReferral|null last(callable $callback = null, \Closure $default = null)
     * @method OrderReferral|$this random(callable|int|null $number = null)
     * @method OrderReferral|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method OrderReferral|null get($key, \Closure $default = null)
     * @method OrderReferral|null first(callable $callback = null, \Closure $default = null)
     * @method OrderReferral|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method OrderReferral|null find($key, $default = null)
     * @method OrderReferral[] all()
     */
    class _IH_OrderReferral_C extends _BaseCollection {
        /**
         * @param int $size
         * @return OrderReferral[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_OrderReferral_QB whereId($value)
     * @method _IH_OrderReferral_QB whereIp($value)
     * @method _IH_OrderReferral_QB whereLandingDomain($value)
     * @method _IH_OrderReferral_QB whereLandingPage($value)
     * @method _IH_OrderReferral_QB whereLandingParams($value)
     * @method _IH_OrderReferral_QB whereReferral($value)
     * @method _IH_OrderReferral_QB whereGclid($value)
     * @method _IH_OrderReferral_QB whereFclid($value)
     * @method _IH_OrderReferral_QB whereUtmSource($value)
     * @method _IH_OrderReferral_QB whereUtmCampaign($value)
     * @method _IH_OrderReferral_QB whereUtmMedium($value)
     * @method _IH_OrderReferral_QB whereUtmTerm($value)
     * @method _IH_OrderReferral_QB whereUtmContent($value)
     * @method _IH_OrderReferral_QB whereReferrerUrl($value)
     * @method _IH_OrderReferral_QB whereReferrerDomain($value)
     * @method _IH_OrderReferral_QB whereOrderId($value)
     * @method _IH_OrderReferral_QB whereCreatedAt($value)
     * @method _IH_OrderReferral_QB whereUpdatedAt($value)
     * @method OrderReferral baseSole(array|string $columns = ['*'])
     * @method OrderReferral create(array $attributes = [])
     * @method _IH_OrderReferral_C|OrderReferral[] cursor()
     * @method OrderReferral|null|_IH_OrderReferral_C|OrderReferral[] find($id, array|string $columns = ['*'])
     * @method _IH_OrderReferral_C|OrderReferral[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method OrderReferral|_IH_OrderReferral_C|OrderReferral[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method OrderReferral|_IH_OrderReferral_C|OrderReferral[] findOrFail($id, array|string $columns = ['*'])
     * @method OrderReferral|_IH_OrderReferral_C|OrderReferral[] findOrNew($id, array|string $columns = ['*'])
     * @method OrderReferral first(array|string $columns = ['*'])
     * @method OrderReferral firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method OrderReferral firstOrCreate(array $attributes = [], array $values = [])
     * @method OrderReferral firstOrFail(array|string $columns = ['*'])
     * @method OrderReferral firstOrNew(array $attributes = [], array $values = [])
     * @method OrderReferral firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method OrderReferral forceCreate(array $attributes)
     * @method _IH_OrderReferral_C|OrderReferral[] fromQuery(string $query, array $bindings = [])
     * @method _IH_OrderReferral_C|OrderReferral[] get(array|string $columns = ['*'])
     * @method OrderReferral getModel()
     * @method OrderReferral[] getModels(array|string $columns = ['*'])
     * @method _IH_OrderReferral_C|OrderReferral[] hydrate(array $items)
     * @method OrderReferral make(array $attributes = [])
     * @method OrderReferral newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|OrderReferral[]|_IH_OrderReferral_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|OrderReferral[]|_IH_OrderReferral_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method OrderReferral sole(array|string $columns = ['*'])
     * @method OrderReferral updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_OrderReferral_QB extends _BaseBuilder {}

    /**
     * @method OrderReturnItem|null getOrPut($key, $value)
     * @method OrderReturnItem|$this shift(int $count = 1)
     * @method OrderReturnItem|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method OrderReturnItem|$this pop(int $count = 1)
     * @method OrderReturnItem|null pull($key, \Closure $default = null)
     * @method OrderReturnItem|null last(callable $callback = null, \Closure $default = null)
     * @method OrderReturnItem|$this random(callable|int|null $number = null)
     * @method OrderReturnItem|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method OrderReturnItem|null get($key, \Closure $default = null)
     * @method OrderReturnItem|null first(callable $callback = null, \Closure $default = null)
     * @method OrderReturnItem|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method OrderReturnItem|null find($key, $default = null)
     * @method OrderReturnItem[] all()
     */
    class _IH_OrderReturnItem_C extends _BaseCollection {
        /**
         * @param int $size
         * @return OrderReturnItem[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_OrderReturnItem_QB whereId($value)
     * @method _IH_OrderReturnItem_QB whereOrderReturnId($value)
     * @method _IH_OrderReturnItem_QB whereOrderProductId($value)
     * @method _IH_OrderReturnItem_QB whereProductId($value)
     * @method _IH_OrderReturnItem_QB whereProductName($value)
     * @method _IH_OrderReturnItem_QB whereQty($value)
     * @method _IH_OrderReturnItem_QB wherePrice($value)
     * @method _IH_OrderReturnItem_QB whereReason($value)
     * @method _IH_OrderReturnItem_QB whereCreatedAt($value)
     * @method _IH_OrderReturnItem_QB whereUpdatedAt($value)
     * @method _IH_OrderReturnItem_QB whereProductImage($value)
     * @method OrderReturnItem baseSole(array|string $columns = ['*'])
     * @method OrderReturnItem create(array $attributes = [])
     * @method _IH_OrderReturnItem_C|OrderReturnItem[] cursor()
     * @method OrderReturnItem|null|_IH_OrderReturnItem_C|OrderReturnItem[] find($id, array|string $columns = ['*'])
     * @method _IH_OrderReturnItem_C|OrderReturnItem[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method OrderReturnItem|_IH_OrderReturnItem_C|OrderReturnItem[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method OrderReturnItem|_IH_OrderReturnItem_C|OrderReturnItem[] findOrFail($id, array|string $columns = ['*'])
     * @method OrderReturnItem|_IH_OrderReturnItem_C|OrderReturnItem[] findOrNew($id, array|string $columns = ['*'])
     * @method OrderReturnItem first(array|string $columns = ['*'])
     * @method OrderReturnItem firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method OrderReturnItem firstOrCreate(array $attributes = [], array $values = [])
     * @method OrderReturnItem firstOrFail(array|string $columns = ['*'])
     * @method OrderReturnItem firstOrNew(array $attributes = [], array $values = [])
     * @method OrderReturnItem firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method OrderReturnItem forceCreate(array $attributes)
     * @method _IH_OrderReturnItem_C|OrderReturnItem[] fromQuery(string $query, array $bindings = [])
     * @method _IH_OrderReturnItem_C|OrderReturnItem[] get(array|string $columns = ['*'])
     * @method OrderReturnItem getModel()
     * @method OrderReturnItem[] getModels(array|string $columns = ['*'])
     * @method _IH_OrderReturnItem_C|OrderReturnItem[] hydrate(array $items)
     * @method OrderReturnItem make(array $attributes = [])
     * @method OrderReturnItem newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|OrderReturnItem[]|_IH_OrderReturnItem_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|OrderReturnItem[]|_IH_OrderReturnItem_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method OrderReturnItem sole(array|string $columns = ['*'])
     * @method OrderReturnItem updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_OrderReturnItem_QB extends _BaseBuilder {}

    /**
     * @method OrderReturn|null getOrPut($key, $value)
     * @method OrderReturn|$this shift(int $count = 1)
     * @method OrderReturn|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method OrderReturn|$this pop(int $count = 1)
     * @method OrderReturn|null pull($key, \Closure $default = null)
     * @method OrderReturn|null last(callable $callback = null, \Closure $default = null)
     * @method OrderReturn|$this random(callable|int|null $number = null)
     * @method OrderReturn|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method OrderReturn|null get($key, \Closure $default = null)
     * @method OrderReturn|null first(callable $callback = null, \Closure $default = null)
     * @method OrderReturn|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method OrderReturn|null find($key, $default = null)
     * @method OrderReturn[] all()
     */
    class _IH_OrderReturn_C extends _BaseCollection {
        /**
         * @param int $size
         * @return OrderReturn[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_OrderReturn_QB whereId($value)
     * @method _IH_OrderReturn_QB whereOrderId($value)
     * @method _IH_OrderReturn_QB whereStoreId($value)
     * @method _IH_OrderReturn_QB whereUserId($value)
     * @method _IH_OrderReturn_QB whereReason($value)
     * @method _IH_OrderReturn_QB whereOrderStatus($value)
     * @method _IH_OrderReturn_QB whereReturnStatus($value)
     * @method _IH_OrderReturn_QB whereCreatedAt($value)
     * @method _IH_OrderReturn_QB whereUpdatedAt($value)
     * @method _IH_OrderReturn_QB whereCode($value)
     * @method OrderReturn baseSole(array|string $columns = ['*'])
     * @method OrderReturn create(array $attributes = [])
     * @method _IH_OrderReturn_C|OrderReturn[] cursor()
     * @method OrderReturn|null|_IH_OrderReturn_C|OrderReturn[] find($id, array|string $columns = ['*'])
     * @method _IH_OrderReturn_C|OrderReturn[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method OrderReturn|_IH_OrderReturn_C|OrderReturn[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method OrderReturn|_IH_OrderReturn_C|OrderReturn[] findOrFail($id, array|string $columns = ['*'])
     * @method OrderReturn|_IH_OrderReturn_C|OrderReturn[] findOrNew($id, array|string $columns = ['*'])
     * @method OrderReturn first(array|string $columns = ['*'])
     * @method OrderReturn firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method OrderReturn firstOrCreate(array $attributes = [], array $values = [])
     * @method OrderReturn firstOrFail(array|string $columns = ['*'])
     * @method OrderReturn firstOrNew(array $attributes = [], array $values = [])
     * @method OrderReturn firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method OrderReturn forceCreate(array $attributes)
     * @method _IH_OrderReturn_C|OrderReturn[] fromQuery(string $query, array $bindings = [])
     * @method _IH_OrderReturn_C|OrderReturn[] get(array|string $columns = ['*'])
     * @method OrderReturn getModel()
     * @method OrderReturn[] getModels(array|string $columns = ['*'])
     * @method _IH_OrderReturn_C|OrderReturn[] hydrate(array $items)
     * @method OrderReturn make(array $attributes = [])
     * @method OrderReturn newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|OrderReturn[]|_IH_OrderReturn_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|OrderReturn[]|_IH_OrderReturn_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method OrderReturn sole(array|string $columns = ['*'])
     * @method OrderReturn updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_OrderReturn_QB extends _BaseBuilder {}

    /**
     * @method Order|null getOrPut($key, $value)
     * @method Order|$this shift(int $count = 1)
     * @method Order|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Order|$this pop(int $count = 1)
     * @method Order|null pull($key, \Closure $default = null)
     * @method Order|null last(callable $callback = null, \Closure $default = null)
     * @method Order|$this random(callable|int|null $number = null)
     * @method Order|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Order|null get($key, \Closure $default = null)
     * @method Order|null first(callable $callback = null, \Closure $default = null)
     * @method Order|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Order|null find($key, $default = null)
     * @method Order[] all()
     */
    class _IH_Order_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Order[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Order_QB whereId($value)
     * @method _IH_Order_QB whereUserId($value)
     * @method _IH_Order_QB whereShippingOption($value)
     * @method _IH_Order_QB whereShippingMethod($value)
     * @method _IH_Order_QB whereStatus($value)
     * @method _IH_Order_QB whereAmount($value)
     * @method _IH_Order_QB whereTaxAmount($value)
     * @method _IH_Order_QB whereShippingAmount($value)
     * @method _IH_Order_QB whereDescription($value)
     * @method _IH_Order_QB whereCouponCode($value)
     * @method _IH_Order_QB whereDiscountAmount($value)
     * @method _IH_Order_QB whereSubTotal($value)
     * @method _IH_Order_QB whereIsConfirmed($value)
     * @method _IH_Order_QB whereDiscountDescription($value)
     * @method _IH_Order_QB whereIsFinished($value)
     * @method _IH_Order_QB whereToken($value)
     * @method _IH_Order_QB wherePaymentId($value)
     * @method _IH_Order_QB whereCreatedAt($value)
     * @method _IH_Order_QB whereUpdatedAt($value)
     * @method _IH_Order_QB whereStoreId($value)
     * @method _IH_Order_QB whereCompletedAt($value)
     * @method _IH_Order_QB whereCode($value)
     * @method Order baseSole(array|string $columns = ['*'])
     * @method Order create(array $attributes = [])
     * @method _IH_Order_C|Order[] cursor()
     * @method Order|null|_IH_Order_C|Order[] find($id, array|string $columns = ['*'])
     * @method _IH_Order_C|Order[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Order|_IH_Order_C|Order[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Order|_IH_Order_C|Order[] findOrFail($id, array|string $columns = ['*'])
     * @method Order|_IH_Order_C|Order[] findOrNew($id, array|string $columns = ['*'])
     * @method Order first(array|string $columns = ['*'])
     * @method Order firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Order firstOrCreate(array $attributes = [], array $values = [])
     * @method Order firstOrFail(array|string $columns = ['*'])
     * @method Order firstOrNew(array $attributes = [], array $values = [])
     * @method Order firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Order forceCreate(array $attributes)
     * @method _IH_Order_C|Order[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Order_C|Order[] get(array|string $columns = ['*'])
     * @method Order getModel()
     * @method Order[] getModels(array|string $columns = ['*'])
     * @method _IH_Order_C|Order[] hydrate(array $items)
     * @method Order make(array $attributes = [])
     * @method Order newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Order[]|_IH_Order_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Order[]|_IH_Order_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Order sole(array|string $columns = ['*'])
     * @method Order updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Order_QB extends _BaseBuilder {}

    /**
     * @method ProductAttributeSetTranslation|null getOrPut($key, $value)
     * @method ProductAttributeSetTranslation|$this shift(int $count = 1)
     * @method ProductAttributeSetTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductAttributeSetTranslation|$this pop(int $count = 1)
     * @method ProductAttributeSetTranslation|null pull($key, \Closure $default = null)
     * @method ProductAttributeSetTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method ProductAttributeSetTranslation|$this random(callable|int|null $number = null)
     * @method ProductAttributeSetTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductAttributeSetTranslation|null get($key, \Closure $default = null)
     * @method ProductAttributeSetTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method ProductAttributeSetTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductAttributeSetTranslation|null find($key, $default = null)
     * @method ProductAttributeSetTranslation[] all()
     */
    class _IH_ProductAttributeSetTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductAttributeSetTranslation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ProductAttributeSetTranslation_QB whereLangCode($value)
     * @method _IH_ProductAttributeSetTranslation_QB whereEcProductAttributeSetsId($value)
     * @method _IH_ProductAttributeSetTranslation_QB whereTitle($value)
     * @method ProductAttributeSetTranslation baseSole(array|string $columns = ['*'])
     * @method ProductAttributeSetTranslation create(array $attributes = [])
     * @method _IH_ProductAttributeSetTranslation_C|ProductAttributeSetTranslation[] cursor()
     * @method ProductAttributeSetTranslation|null|_IH_ProductAttributeSetTranslation_C|ProductAttributeSetTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductAttributeSetTranslation_C|ProductAttributeSetTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductAttributeSetTranslation|_IH_ProductAttributeSetTranslation_C|ProductAttributeSetTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductAttributeSetTranslation|_IH_ProductAttributeSetTranslation_C|ProductAttributeSetTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductAttributeSetTranslation|_IH_ProductAttributeSetTranslation_C|ProductAttributeSetTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductAttributeSetTranslation first(array|string $columns = ['*'])
     * @method ProductAttributeSetTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductAttributeSetTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductAttributeSetTranslation firstOrFail(array|string $columns = ['*'])
     * @method ProductAttributeSetTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method ProductAttributeSetTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductAttributeSetTranslation forceCreate(array $attributes)
     * @method _IH_ProductAttributeSetTranslation_C|ProductAttributeSetTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductAttributeSetTranslation_C|ProductAttributeSetTranslation[] get(array|string $columns = ['*'])
     * @method ProductAttributeSetTranslation getModel()
     * @method ProductAttributeSetTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductAttributeSetTranslation_C|ProductAttributeSetTranslation[] hydrate(array $items)
     * @method ProductAttributeSetTranslation make(array $attributes = [])
     * @method ProductAttributeSetTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductAttributeSetTranslation[]|_IH_ProductAttributeSetTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductAttributeSetTranslation[]|_IH_ProductAttributeSetTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductAttributeSetTranslation sole(array|string $columns = ['*'])
     * @method ProductAttributeSetTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductAttributeSetTranslation_QB extends _BaseBuilder {}

    /**
     * @method ProductAttributeSet|null getOrPut($key, $value)
     * @method ProductAttributeSet|$this shift(int $count = 1)
     * @method ProductAttributeSet|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductAttributeSet|$this pop(int $count = 1)
     * @method ProductAttributeSet|null pull($key, \Closure $default = null)
     * @method ProductAttributeSet|null last(callable $callback = null, \Closure $default = null)
     * @method ProductAttributeSet|$this random(callable|int|null $number = null)
     * @method ProductAttributeSet|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductAttributeSet|null get($key, \Closure $default = null)
     * @method ProductAttributeSet|null first(callable $callback = null, \Closure $default = null)
     * @method ProductAttributeSet|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductAttributeSet|null find($key, $default = null)
     * @method ProductAttributeSet[] all()
     */
    class _IH_ProductAttributeSet_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductAttributeSet[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ProductAttributeSet_QB whereId($value)
     * @method _IH_ProductAttributeSet_QB whereTitle($value)
     * @method _IH_ProductAttributeSet_QB whereSlug($value)
     * @method _IH_ProductAttributeSet_QB whereDisplayLayout($value)
     * @method _IH_ProductAttributeSet_QB whereIsSearchable($value)
     * @method _IH_ProductAttributeSet_QB whereIsComparable($value)
     * @method _IH_ProductAttributeSet_QB whereIsUseInProductListing($value)
     * @method _IH_ProductAttributeSet_QB whereStatus($value)
     * @method _IH_ProductAttributeSet_QB whereOrder($value)
     * @method _IH_ProductAttributeSet_QB whereCreatedAt($value)
     * @method _IH_ProductAttributeSet_QB whereUpdatedAt($value)
     * @method _IH_ProductAttributeSet_QB whereUseImageFromProductVariation($value)
     * @method ProductAttributeSet baseSole(array|string $columns = ['*'])
     * @method ProductAttributeSet create(array $attributes = [])
     * @method _IH_ProductAttributeSet_C|ProductAttributeSet[] cursor()
     * @method ProductAttributeSet|null|_IH_ProductAttributeSet_C|ProductAttributeSet[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductAttributeSet_C|ProductAttributeSet[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductAttributeSet|_IH_ProductAttributeSet_C|ProductAttributeSet[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductAttributeSet|_IH_ProductAttributeSet_C|ProductAttributeSet[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductAttributeSet|_IH_ProductAttributeSet_C|ProductAttributeSet[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductAttributeSet first(array|string $columns = ['*'])
     * @method ProductAttributeSet firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductAttributeSet firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductAttributeSet firstOrFail(array|string $columns = ['*'])
     * @method ProductAttributeSet firstOrNew(array $attributes = [], array $values = [])
     * @method ProductAttributeSet firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductAttributeSet forceCreate(array $attributes)
     * @method _IH_ProductAttributeSet_C|ProductAttributeSet[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductAttributeSet_C|ProductAttributeSet[] get(array|string $columns = ['*'])
     * @method ProductAttributeSet getModel()
     * @method ProductAttributeSet[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductAttributeSet_C|ProductAttributeSet[] hydrate(array $items)
     * @method ProductAttributeSet make(array $attributes = [])
     * @method ProductAttributeSet newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductAttributeSet[]|_IH_ProductAttributeSet_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductAttributeSet[]|_IH_ProductAttributeSet_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductAttributeSet sole(array|string $columns = ['*'])
     * @method ProductAttributeSet updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductAttributeSet_QB extends _BaseBuilder {}

    /**
     * @method ProductAttributeTranslation|null getOrPut($key, $value)
     * @method ProductAttributeTranslation|$this shift(int $count = 1)
     * @method ProductAttributeTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductAttributeTranslation|$this pop(int $count = 1)
     * @method ProductAttributeTranslation|null pull($key, \Closure $default = null)
     * @method ProductAttributeTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method ProductAttributeTranslation|$this random(callable|int|null $number = null)
     * @method ProductAttributeTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductAttributeTranslation|null get($key, \Closure $default = null)
     * @method ProductAttributeTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method ProductAttributeTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductAttributeTranslation|null find($key, $default = null)
     * @method ProductAttributeTranslation[] all()
     */
    class _IH_ProductAttributeTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductAttributeTranslation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ProductAttributeTranslation_QB whereLangCode($value)
     * @method _IH_ProductAttributeTranslation_QB whereEcProductAttributesId($value)
     * @method _IH_ProductAttributeTranslation_QB whereTitle($value)
     * @method ProductAttributeTranslation baseSole(array|string $columns = ['*'])
     * @method ProductAttributeTranslation create(array $attributes = [])
     * @method _IH_ProductAttributeTranslation_C|ProductAttributeTranslation[] cursor()
     * @method ProductAttributeTranslation|null|_IH_ProductAttributeTranslation_C|ProductAttributeTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductAttributeTranslation_C|ProductAttributeTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductAttributeTranslation|_IH_ProductAttributeTranslation_C|ProductAttributeTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductAttributeTranslation|_IH_ProductAttributeTranslation_C|ProductAttributeTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductAttributeTranslation|_IH_ProductAttributeTranslation_C|ProductAttributeTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductAttributeTranslation first(array|string $columns = ['*'])
     * @method ProductAttributeTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductAttributeTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductAttributeTranslation firstOrFail(array|string $columns = ['*'])
     * @method ProductAttributeTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method ProductAttributeTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductAttributeTranslation forceCreate(array $attributes)
     * @method _IH_ProductAttributeTranslation_C|ProductAttributeTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductAttributeTranslation_C|ProductAttributeTranslation[] get(array|string $columns = ['*'])
     * @method ProductAttributeTranslation getModel()
     * @method ProductAttributeTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductAttributeTranslation_C|ProductAttributeTranslation[] hydrate(array $items)
     * @method ProductAttributeTranslation make(array $attributes = [])
     * @method ProductAttributeTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductAttributeTranslation[]|_IH_ProductAttributeTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductAttributeTranslation[]|_IH_ProductAttributeTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductAttributeTranslation sole(array|string $columns = ['*'])
     * @method ProductAttributeTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductAttributeTranslation_QB extends _BaseBuilder {}

    /**
     * @method ProductAttribute|null getOrPut($key, $value)
     * @method ProductAttribute|$this shift(int $count = 1)
     * @method ProductAttribute|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductAttribute|$this pop(int $count = 1)
     * @method ProductAttribute|null pull($key, \Closure $default = null)
     * @method ProductAttribute|null last(callable $callback = null, \Closure $default = null)
     * @method ProductAttribute|$this random(callable|int|null $number = null)
     * @method ProductAttribute|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductAttribute|null get($key, \Closure $default = null)
     * @method ProductAttribute|null first(callable $callback = null, \Closure $default = null)
     * @method ProductAttribute|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductAttribute|null find($key, $default = null)
     * @method ProductAttribute[] all()
     */
    class _IH_ProductAttribute_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductAttribute[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ProductAttribute_QB whereId($value)
     * @method _IH_ProductAttribute_QB whereAttributeSetId($value)
     * @method _IH_ProductAttribute_QB whereTitle($value)
     * @method _IH_ProductAttribute_QB whereSlug($value)
     * @method _IH_ProductAttribute_QB whereColor($value)
     * @method _IH_ProductAttribute_QB whereImage($value)
     * @method _IH_ProductAttribute_QB whereIsDefault($value)
     * @method _IH_ProductAttribute_QB whereOrder($value)
     * @method _IH_ProductAttribute_QB whereStatus($value)
     * @method _IH_ProductAttribute_QB whereCreatedAt($value)
     * @method _IH_ProductAttribute_QB whereUpdatedAt($value)
     * @method ProductAttribute baseSole(array|string $columns = ['*'])
     * @method ProductAttribute create(array $attributes = [])
     * @method _IH_ProductAttribute_C|ProductAttribute[] cursor()
     * @method ProductAttribute|null|_IH_ProductAttribute_C|ProductAttribute[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductAttribute_C|ProductAttribute[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductAttribute|_IH_ProductAttribute_C|ProductAttribute[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductAttribute|_IH_ProductAttribute_C|ProductAttribute[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductAttribute|_IH_ProductAttribute_C|ProductAttribute[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductAttribute first(array|string $columns = ['*'])
     * @method ProductAttribute firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductAttribute firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductAttribute firstOrFail(array|string $columns = ['*'])
     * @method ProductAttribute firstOrNew(array $attributes = [], array $values = [])
     * @method ProductAttribute firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductAttribute forceCreate(array $attributes)
     * @method _IH_ProductAttribute_C|ProductAttribute[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductAttribute_C|ProductAttribute[] get(array|string $columns = ['*'])
     * @method ProductAttribute getModel()
     * @method ProductAttribute[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductAttribute_C|ProductAttribute[] hydrate(array $items)
     * @method ProductAttribute make(array $attributes = [])
     * @method ProductAttribute newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductAttribute[]|_IH_ProductAttribute_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductAttribute[]|_IH_ProductAttribute_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductAttribute sole(array|string $columns = ['*'])
     * @method ProductAttribute updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductAttribute_QB extends _BaseBuilder {}

    /**
     * @method ProductCategoryTranslation|null getOrPut($key, $value)
     * @method ProductCategoryTranslation|$this shift(int $count = 1)
     * @method ProductCategoryTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductCategoryTranslation|$this pop(int $count = 1)
     * @method ProductCategoryTranslation|null pull($key, \Closure $default = null)
     * @method ProductCategoryTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method ProductCategoryTranslation|$this random(callable|int|null $number = null)
     * @method ProductCategoryTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductCategoryTranslation|null get($key, \Closure $default = null)
     * @method ProductCategoryTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method ProductCategoryTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductCategoryTranslation|null find($key, $default = null)
     * @method ProductCategoryTranslation[] all()
     */
    class _IH_ProductCategoryTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductCategoryTranslation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ProductCategoryTranslation_QB whereLangCode($value)
     * @method _IH_ProductCategoryTranslation_QB whereEcProductCategoriesId($value)
     * @method _IH_ProductCategoryTranslation_QB whereName($value)
     * @method _IH_ProductCategoryTranslation_QB whereDescription($value)
     * @method ProductCategoryTranslation baseSole(array|string $columns = ['*'])
     * @method ProductCategoryTranslation create(array $attributes = [])
     * @method _IH_ProductCategoryTranslation_C|ProductCategoryTranslation[] cursor()
     * @method ProductCategoryTranslation|null|_IH_ProductCategoryTranslation_C|ProductCategoryTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductCategoryTranslation_C|ProductCategoryTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductCategoryTranslation|_IH_ProductCategoryTranslation_C|ProductCategoryTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductCategoryTranslation|_IH_ProductCategoryTranslation_C|ProductCategoryTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductCategoryTranslation|_IH_ProductCategoryTranslation_C|ProductCategoryTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductCategoryTranslation first(array|string $columns = ['*'])
     * @method ProductCategoryTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductCategoryTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductCategoryTranslation firstOrFail(array|string $columns = ['*'])
     * @method ProductCategoryTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method ProductCategoryTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductCategoryTranslation forceCreate(array $attributes)
     * @method _IH_ProductCategoryTranslation_C|ProductCategoryTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductCategoryTranslation_C|ProductCategoryTranslation[] get(array|string $columns = ['*'])
     * @method ProductCategoryTranslation getModel()
     * @method ProductCategoryTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductCategoryTranslation_C|ProductCategoryTranslation[] hydrate(array $items)
     * @method ProductCategoryTranslation make(array $attributes = [])
     * @method ProductCategoryTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductCategoryTranslation[]|_IH_ProductCategoryTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductCategoryTranslation[]|_IH_ProductCategoryTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductCategoryTranslation sole(array|string $columns = ['*'])
     * @method ProductCategoryTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductCategoryTranslation_QB extends _BaseBuilder {}

    /**
     * @method ProductCategory|null getOrPut($key, $value)
     * @method ProductCategory|$this shift(int $count = 1)
     * @method ProductCategory|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductCategory|$this pop(int $count = 1)
     * @method ProductCategory|null pull($key, \Closure $default = null)
     * @method ProductCategory|null last(callable $callback = null, \Closure $default = null)
     * @method ProductCategory|$this random(callable|int|null $number = null)
     * @method ProductCategory|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductCategory|null get($key, \Closure $default = null)
     * @method ProductCategory|null first(callable $callback = null, \Closure $default = null)
     * @method ProductCategory|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductCategory|null find($key, $default = null)
     * @method ProductCategory[] all()
     */
    class _IH_ProductCategory_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductCategory[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ProductCategory_QB whereId($value)
     * @method _IH_ProductCategory_QB whereName($value)
     * @method _IH_ProductCategory_QB whereParentId($value)
     * @method _IH_ProductCategory_QB whereDescription($value)
     * @method _IH_ProductCategory_QB whereStatus($value)
     * @method _IH_ProductCategory_QB whereOrder($value)
     * @method _IH_ProductCategory_QB whereImage($value)
     * @method _IH_ProductCategory_QB whereIsFeatured($value)
     * @method _IH_ProductCategory_QB whereCreatedAt($value)
     * @method _IH_ProductCategory_QB whereUpdatedAt($value)
     * @method ProductCategory baseSole(array|string $columns = ['*'])
     * @method ProductCategory create(array $attributes = [])
     * @method _IH_ProductCategory_C|ProductCategory[] cursor()
     * @method ProductCategory|null|_IH_ProductCategory_C|ProductCategory[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductCategory_C|ProductCategory[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductCategory|_IH_ProductCategory_C|ProductCategory[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductCategory|_IH_ProductCategory_C|ProductCategory[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductCategory|_IH_ProductCategory_C|ProductCategory[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductCategory first(array|string $columns = ['*'])
     * @method ProductCategory firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductCategory firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductCategory firstOrFail(array|string $columns = ['*'])
     * @method ProductCategory firstOrNew(array $attributes = [], array $values = [])
     * @method ProductCategory firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductCategory forceCreate(array $attributes)
     * @method _IH_ProductCategory_C|ProductCategory[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductCategory_C|ProductCategory[] get(array|string $columns = ['*'])
     * @method ProductCategory getModel()
     * @method ProductCategory[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductCategory_C|ProductCategory[] hydrate(array $items)
     * @method ProductCategory make(array $attributes = [])
     * @method ProductCategory newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductCategory[]|_IH_ProductCategory_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductCategory[]|_IH_ProductCategory_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductCategory sole(array|string $columns = ['*'])
     * @method ProductCategory updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductCategory_QB extends _BaseBuilder {}

    /**
     * @method ProductCollectionTranslation|null getOrPut($key, $value)
     * @method ProductCollectionTranslation|$this shift(int $count = 1)
     * @method ProductCollectionTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductCollectionTranslation|$this pop(int $count = 1)
     * @method ProductCollectionTranslation|null pull($key, \Closure $default = null)
     * @method ProductCollectionTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method ProductCollectionTranslation|$this random(callable|int|null $number = null)
     * @method ProductCollectionTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductCollectionTranslation|null get($key, \Closure $default = null)
     * @method ProductCollectionTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method ProductCollectionTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductCollectionTranslation|null find($key, $default = null)
     * @method ProductCollectionTranslation[] all()
     */
    class _IH_ProductCollectionTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductCollectionTranslation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ProductCollectionTranslation_QB whereLangCode($value)
     * @method _IH_ProductCollectionTranslation_QB whereEcProductCollectionsId($value)
     * @method _IH_ProductCollectionTranslation_QB whereName($value)
     * @method _IH_ProductCollectionTranslation_QB whereDescription($value)
     * @method ProductCollectionTranslation baseSole(array|string $columns = ['*'])
     * @method ProductCollectionTranslation create(array $attributes = [])
     * @method _IH_ProductCollectionTranslation_C|ProductCollectionTranslation[] cursor()
     * @method ProductCollectionTranslation|null|_IH_ProductCollectionTranslation_C|ProductCollectionTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductCollectionTranslation_C|ProductCollectionTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductCollectionTranslation|_IH_ProductCollectionTranslation_C|ProductCollectionTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductCollectionTranslation|_IH_ProductCollectionTranslation_C|ProductCollectionTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductCollectionTranslation|_IH_ProductCollectionTranslation_C|ProductCollectionTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductCollectionTranslation first(array|string $columns = ['*'])
     * @method ProductCollectionTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductCollectionTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductCollectionTranslation firstOrFail(array|string $columns = ['*'])
     * @method ProductCollectionTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method ProductCollectionTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductCollectionTranslation forceCreate(array $attributes)
     * @method _IH_ProductCollectionTranslation_C|ProductCollectionTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductCollectionTranslation_C|ProductCollectionTranslation[] get(array|string $columns = ['*'])
     * @method ProductCollectionTranslation getModel()
     * @method ProductCollectionTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductCollectionTranslation_C|ProductCollectionTranslation[] hydrate(array $items)
     * @method ProductCollectionTranslation make(array $attributes = [])
     * @method ProductCollectionTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductCollectionTranslation[]|_IH_ProductCollectionTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductCollectionTranslation[]|_IH_ProductCollectionTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductCollectionTranslation sole(array|string $columns = ['*'])
     * @method ProductCollectionTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductCollectionTranslation_QB extends _BaseBuilder {}

    /**
     * @method ProductCollection|null getOrPut($key, $value)
     * @method ProductCollection|$this shift(int $count = 1)
     * @method ProductCollection|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductCollection|$this pop(int $count = 1)
     * @method ProductCollection|null pull($key, \Closure $default = null)
     * @method ProductCollection|null last(callable $callback = null, \Closure $default = null)
     * @method ProductCollection|$this random(callable|int|null $number = null)
     * @method ProductCollection|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductCollection|null get($key, \Closure $default = null)
     * @method ProductCollection|null first(callable $callback = null, \Closure $default = null)
     * @method ProductCollection|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductCollection|null find($key, $default = null)
     * @method ProductCollection[] all()
     */
    class _IH_ProductCollection_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductCollection[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ProductCollection_QB whereId($value)
     * @method _IH_ProductCollection_QB whereName($value)
     * @method _IH_ProductCollection_QB whereSlug($value)
     * @method _IH_ProductCollection_QB whereDescription($value)
     * @method _IH_ProductCollection_QB whereImage($value)
     * @method _IH_ProductCollection_QB whereStatus($value)
     * @method _IH_ProductCollection_QB whereCreatedAt($value)
     * @method _IH_ProductCollection_QB whereUpdatedAt($value)
     * @method _IH_ProductCollection_QB whereIsFeatured($value)
     * @method ProductCollection baseSole(array|string $columns = ['*'])
     * @method ProductCollection create(array $attributes = [])
     * @method _IH_ProductCollection_C|ProductCollection[] cursor()
     * @method ProductCollection|null|_IH_ProductCollection_C|ProductCollection[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductCollection_C|ProductCollection[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductCollection|_IH_ProductCollection_C|ProductCollection[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductCollection|_IH_ProductCollection_C|ProductCollection[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductCollection|_IH_ProductCollection_C|ProductCollection[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductCollection first(array|string $columns = ['*'])
     * @method ProductCollection firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductCollection firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductCollection firstOrFail(array|string $columns = ['*'])
     * @method ProductCollection firstOrNew(array $attributes = [], array $values = [])
     * @method ProductCollection firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductCollection forceCreate(array $attributes)
     * @method _IH_ProductCollection_C|ProductCollection[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductCollection_C|ProductCollection[] get(array|string $columns = ['*'])
     * @method ProductCollection getModel()
     * @method ProductCollection[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductCollection_C|ProductCollection[] hydrate(array $items)
     * @method ProductCollection make(array $attributes = [])
     * @method ProductCollection newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductCollection[]|_IH_ProductCollection_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductCollection[]|_IH_ProductCollection_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductCollection sole(array|string $columns = ['*'])
     * @method ProductCollection updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductCollection_QB extends _BaseBuilder {}

    /**
     * @method ProductFile|null getOrPut($key, $value)
     * @method ProductFile|$this shift(int $count = 1)
     * @method ProductFile|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductFile|$this pop(int $count = 1)
     * @method ProductFile|null pull($key, \Closure $default = null)
     * @method ProductFile|null last(callable $callback = null, \Closure $default = null)
     * @method ProductFile|$this random(callable|int|null $number = null)
     * @method ProductFile|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductFile|null get($key, \Closure $default = null)
     * @method ProductFile|null first(callable $callback = null, \Closure $default = null)
     * @method ProductFile|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductFile|null find($key, $default = null)
     * @method ProductFile[] all()
     */
    class _IH_ProductFile_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductFile[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ProductFile_QB whereId($value)
     * @method _IH_ProductFile_QB whereProductId($value)
     * @method _IH_ProductFile_QB whereUrl($value)
     * @method _IH_ProductFile_QB whereExtras($value)
     * @method _IH_ProductFile_QB whereCreatedAt($value)
     * @method _IH_ProductFile_QB whereUpdatedAt($value)
     * @method ProductFile baseSole(array|string $columns = ['*'])
     * @method ProductFile create(array $attributes = [])
     * @method _IH_ProductFile_C|ProductFile[] cursor()
     * @method ProductFile|null|_IH_ProductFile_C|ProductFile[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductFile_C|ProductFile[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductFile|_IH_ProductFile_C|ProductFile[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductFile|_IH_ProductFile_C|ProductFile[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductFile|_IH_ProductFile_C|ProductFile[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductFile first(array|string $columns = ['*'])
     * @method ProductFile firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductFile firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductFile firstOrFail(array|string $columns = ['*'])
     * @method ProductFile firstOrNew(array $attributes = [], array $values = [])
     * @method ProductFile firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductFile forceCreate(array $attributes)
     * @method _IH_ProductFile_C|ProductFile[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductFile_C|ProductFile[] get(array|string $columns = ['*'])
     * @method ProductFile getModel()
     * @method ProductFile[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductFile_C|ProductFile[] hydrate(array $items)
     * @method ProductFile make(array $attributes = [])
     * @method ProductFile newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductFile[]|_IH_ProductFile_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductFile[]|_IH_ProductFile_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductFile sole(array|string $columns = ['*'])
     * @method ProductFile updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductFile_QB extends _BaseBuilder {}

    /**
     * @method ProductLabelTranslation|null getOrPut($key, $value)
     * @method ProductLabelTranslation|$this shift(int $count = 1)
     * @method ProductLabelTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductLabelTranslation|$this pop(int $count = 1)
     * @method ProductLabelTranslation|null pull($key, \Closure $default = null)
     * @method ProductLabelTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method ProductLabelTranslation|$this random(callable|int|null $number = null)
     * @method ProductLabelTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductLabelTranslation|null get($key, \Closure $default = null)
     * @method ProductLabelTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method ProductLabelTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductLabelTranslation|null find($key, $default = null)
     * @method ProductLabelTranslation[] all()
     */
    class _IH_ProductLabelTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductLabelTranslation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ProductLabelTranslation_QB whereLangCode($value)
     * @method _IH_ProductLabelTranslation_QB whereEcProductLabelsId($value)
     * @method _IH_ProductLabelTranslation_QB whereName($value)
     * @method _IH_ProductLabelTranslation_QB whereDescription($value)
     * @method ProductLabelTranslation baseSole(array|string $columns = ['*'])
     * @method ProductLabelTranslation create(array $attributes = [])
     * @method _IH_ProductLabelTranslation_C|ProductLabelTranslation[] cursor()
     * @method ProductLabelTranslation|null|_IH_ProductLabelTranslation_C|ProductLabelTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductLabelTranslation_C|ProductLabelTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductLabelTranslation|_IH_ProductLabelTranslation_C|ProductLabelTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductLabelTranslation|_IH_ProductLabelTranslation_C|ProductLabelTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductLabelTranslation|_IH_ProductLabelTranslation_C|ProductLabelTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductLabelTranslation first(array|string $columns = ['*'])
     * @method ProductLabelTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductLabelTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductLabelTranslation firstOrFail(array|string $columns = ['*'])
     * @method ProductLabelTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method ProductLabelTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductLabelTranslation forceCreate(array $attributes)
     * @method _IH_ProductLabelTranslation_C|ProductLabelTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductLabelTranslation_C|ProductLabelTranslation[] get(array|string $columns = ['*'])
     * @method ProductLabelTranslation getModel()
     * @method ProductLabelTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductLabelTranslation_C|ProductLabelTranslation[] hydrate(array $items)
     * @method ProductLabelTranslation make(array $attributes = [])
     * @method ProductLabelTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductLabelTranslation[]|_IH_ProductLabelTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductLabelTranslation[]|_IH_ProductLabelTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductLabelTranslation sole(array|string $columns = ['*'])
     * @method ProductLabelTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductLabelTranslation_QB extends _BaseBuilder {}

    /**
     * @method ProductLabel|null getOrPut($key, $value)
     * @method ProductLabel|$this shift(int $count = 1)
     * @method ProductLabel|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductLabel|$this pop(int $count = 1)
     * @method ProductLabel|null pull($key, \Closure $default = null)
     * @method ProductLabel|null last(callable $callback = null, \Closure $default = null)
     * @method ProductLabel|$this random(callable|int|null $number = null)
     * @method ProductLabel|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductLabel|null get($key, \Closure $default = null)
     * @method ProductLabel|null first(callable $callback = null, \Closure $default = null)
     * @method ProductLabel|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductLabel|null find($key, $default = null)
     * @method ProductLabel[] all()
     */
    class _IH_ProductLabel_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductLabel[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ProductLabel_QB whereId($value)
     * @method _IH_ProductLabel_QB whereName($value)
     * @method _IH_ProductLabel_QB whereColor($value)
     * @method _IH_ProductLabel_QB whereStatus($value)
     * @method _IH_ProductLabel_QB whereCreatedAt($value)
     * @method _IH_ProductLabel_QB whereUpdatedAt($value)
     * @method ProductLabel baseSole(array|string $columns = ['*'])
     * @method ProductLabel create(array $attributes = [])
     * @method _IH_ProductLabel_C|ProductLabel[] cursor()
     * @method ProductLabel|null|_IH_ProductLabel_C|ProductLabel[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductLabel_C|ProductLabel[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductLabel|_IH_ProductLabel_C|ProductLabel[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductLabel|_IH_ProductLabel_C|ProductLabel[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductLabel|_IH_ProductLabel_C|ProductLabel[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductLabel first(array|string $columns = ['*'])
     * @method ProductLabel firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductLabel firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductLabel firstOrFail(array|string $columns = ['*'])
     * @method ProductLabel firstOrNew(array $attributes = [], array $values = [])
     * @method ProductLabel firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductLabel forceCreate(array $attributes)
     * @method _IH_ProductLabel_C|ProductLabel[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductLabel_C|ProductLabel[] get(array|string $columns = ['*'])
     * @method ProductLabel getModel()
     * @method ProductLabel[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductLabel_C|ProductLabel[] hydrate(array $items)
     * @method ProductLabel make(array $attributes = [])
     * @method ProductLabel newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductLabel[]|_IH_ProductLabel_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductLabel[]|_IH_ProductLabel_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductLabel sole(array|string $columns = ['*'])
     * @method ProductLabel updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductLabel_QB extends _BaseBuilder {}

    /**
     * @method ProductTagTranslation|null getOrPut($key, $value)
     * @method ProductTagTranslation|$this shift(int $count = 1)
     * @method ProductTagTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductTagTranslation|$this pop(int $count = 1)
     * @method ProductTagTranslation|null pull($key, \Closure $default = null)
     * @method ProductTagTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method ProductTagTranslation|$this random(callable|int|null $number = null)
     * @method ProductTagTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductTagTranslation|null get($key, \Closure $default = null)
     * @method ProductTagTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method ProductTagTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductTagTranslation|null find($key, $default = null)
     * @method ProductTagTranslation[] all()
     */
    class _IH_ProductTagTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductTagTranslation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ProductTagTranslation_QB whereLangCode($value)
     * @method _IH_ProductTagTranslation_QB whereEcProductTagsId($value)
     * @method _IH_ProductTagTranslation_QB whereName($value)
     * @method ProductTagTranslation baseSole(array|string $columns = ['*'])
     * @method ProductTagTranslation create(array $attributes = [])
     * @method _IH_ProductTagTranslation_C|ProductTagTranslation[] cursor()
     * @method ProductTagTranslation|null|_IH_ProductTagTranslation_C|ProductTagTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductTagTranslation_C|ProductTagTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductTagTranslation|_IH_ProductTagTranslation_C|ProductTagTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductTagTranslation|_IH_ProductTagTranslation_C|ProductTagTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductTagTranslation|_IH_ProductTagTranslation_C|ProductTagTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductTagTranslation first(array|string $columns = ['*'])
     * @method ProductTagTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductTagTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductTagTranslation firstOrFail(array|string $columns = ['*'])
     * @method ProductTagTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method ProductTagTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductTagTranslation forceCreate(array $attributes)
     * @method _IH_ProductTagTranslation_C|ProductTagTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductTagTranslation_C|ProductTagTranslation[] get(array|string $columns = ['*'])
     * @method ProductTagTranslation getModel()
     * @method ProductTagTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductTagTranslation_C|ProductTagTranslation[] hydrate(array $items)
     * @method ProductTagTranslation make(array $attributes = [])
     * @method ProductTagTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductTagTranslation[]|_IH_ProductTagTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductTagTranslation[]|_IH_ProductTagTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductTagTranslation sole(array|string $columns = ['*'])
     * @method ProductTagTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductTagTranslation_QB extends _BaseBuilder {}

    /**
     * @method ProductTag|null getOrPut($key, $value)
     * @method ProductTag|$this shift(int $count = 1)
     * @method ProductTag|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductTag|$this pop(int $count = 1)
     * @method ProductTag|null pull($key, \Closure $default = null)
     * @method ProductTag|null last(callable $callback = null, \Closure $default = null)
     * @method ProductTag|$this random(callable|int|null $number = null)
     * @method ProductTag|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductTag|null get($key, \Closure $default = null)
     * @method ProductTag|null first(callable $callback = null, \Closure $default = null)
     * @method ProductTag|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductTag|null find($key, $default = null)
     * @method ProductTag[] all()
     */
    class _IH_ProductTag_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductTag[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ProductTag_QB whereId($value)
     * @method _IH_ProductTag_QB whereName($value)
     * @method _IH_ProductTag_QB whereDescription($value)
     * @method _IH_ProductTag_QB whereStatus($value)
     * @method _IH_ProductTag_QB whereCreatedAt($value)
     * @method _IH_ProductTag_QB whereUpdatedAt($value)
     * @method ProductTag baseSole(array|string $columns = ['*'])
     * @method ProductTag create(array $attributes = [])
     * @method _IH_ProductTag_C|ProductTag[] cursor()
     * @method ProductTag|null|_IH_ProductTag_C|ProductTag[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductTag_C|ProductTag[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductTag|_IH_ProductTag_C|ProductTag[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductTag|_IH_ProductTag_C|ProductTag[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductTag|_IH_ProductTag_C|ProductTag[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductTag first(array|string $columns = ['*'])
     * @method ProductTag firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductTag firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductTag firstOrFail(array|string $columns = ['*'])
     * @method ProductTag firstOrNew(array $attributes = [], array $values = [])
     * @method ProductTag firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductTag forceCreate(array $attributes)
     * @method _IH_ProductTag_C|ProductTag[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductTag_C|ProductTag[] get(array|string $columns = ['*'])
     * @method ProductTag getModel()
     * @method ProductTag[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductTag_C|ProductTag[] hydrate(array $items)
     * @method ProductTag make(array $attributes = [])
     * @method ProductTag newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductTag[]|_IH_ProductTag_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductTag[]|_IH_ProductTag_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductTag sole(array|string $columns = ['*'])
     * @method ProductTag updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductTag_QB extends _BaseBuilder {}

    /**
     * @method ProductTranslation|null getOrPut($key, $value)
     * @method ProductTranslation|$this shift(int $count = 1)
     * @method ProductTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductTranslation|$this pop(int $count = 1)
     * @method ProductTranslation|null pull($key, \Closure $default = null)
     * @method ProductTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method ProductTranslation|$this random(callable|int|null $number = null)
     * @method ProductTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductTranslation|null get($key, \Closure $default = null)
     * @method ProductTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method ProductTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductTranslation|null find($key, $default = null)
     * @method ProductTranslation[] all()
     */
    class _IH_ProductTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductTranslation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ProductTranslation_QB whereLangCode($value)
     * @method _IH_ProductTranslation_QB whereEcProductsId($value)
     * @method _IH_ProductTranslation_QB whereName($value)
     * @method _IH_ProductTranslation_QB whereDescription($value)
     * @method _IH_ProductTranslation_QB whereContent($value)
     * @method ProductTranslation baseSole(array|string $columns = ['*'])
     * @method ProductTranslation create(array $attributes = [])
     * @method _IH_ProductTranslation_C|ProductTranslation[] cursor()
     * @method ProductTranslation|null|_IH_ProductTranslation_C|ProductTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductTranslation_C|ProductTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductTranslation|_IH_ProductTranslation_C|ProductTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductTranslation|_IH_ProductTranslation_C|ProductTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductTranslation|_IH_ProductTranslation_C|ProductTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductTranslation first(array|string $columns = ['*'])
     * @method ProductTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductTranslation firstOrFail(array|string $columns = ['*'])
     * @method ProductTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method ProductTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductTranslation forceCreate(array $attributes)
     * @method _IH_ProductTranslation_C|ProductTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductTranslation_C|ProductTranslation[] get(array|string $columns = ['*'])
     * @method ProductTranslation getModel()
     * @method ProductTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductTranslation_C|ProductTranslation[] hydrate(array $items)
     * @method ProductTranslation make(array $attributes = [])
     * @method ProductTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductTranslation[]|_IH_ProductTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductTranslation[]|_IH_ProductTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductTranslation sole(array|string $columns = ['*'])
     * @method ProductTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductTranslation_QB extends _BaseBuilder {}

    /**
     * @method ProductVariationItem|null getOrPut($key, $value)
     * @method ProductVariationItem|$this shift(int $count = 1)
     * @method ProductVariationItem|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductVariationItem|$this pop(int $count = 1)
     * @method ProductVariationItem|null pull($key, \Closure $default = null)
     * @method ProductVariationItem|null last(callable $callback = null, \Closure $default = null)
     * @method ProductVariationItem|$this random(callable|int|null $number = null)
     * @method ProductVariationItem|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductVariationItem|null get($key, \Closure $default = null)
     * @method ProductVariationItem|null first(callable $callback = null, \Closure $default = null)
     * @method ProductVariationItem|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductVariationItem|null find($key, $default = null)
     * @method ProductVariationItem[] all()
     */
    class _IH_ProductVariationItem_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductVariationItem[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ProductVariationItem_QB whereId($value)
     * @method _IH_ProductVariationItem_QB whereAttributeId($value)
     * @method _IH_ProductVariationItem_QB whereVariationId($value)
     * @method ProductVariationItem baseSole(array|string $columns = ['*'])
     * @method ProductVariationItem create(array $attributes = [])
     * @method _IH_ProductVariationItem_C|ProductVariationItem[] cursor()
     * @method ProductVariationItem|null|_IH_ProductVariationItem_C|ProductVariationItem[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductVariationItem_C|ProductVariationItem[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductVariationItem|_IH_ProductVariationItem_C|ProductVariationItem[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductVariationItem|_IH_ProductVariationItem_C|ProductVariationItem[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductVariationItem|_IH_ProductVariationItem_C|ProductVariationItem[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductVariationItem first(array|string $columns = ['*'])
     * @method ProductVariationItem firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductVariationItem firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductVariationItem firstOrFail(array|string $columns = ['*'])
     * @method ProductVariationItem firstOrNew(array $attributes = [], array $values = [])
     * @method ProductVariationItem firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductVariationItem forceCreate(array $attributes)
     * @method _IH_ProductVariationItem_C|ProductVariationItem[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductVariationItem_C|ProductVariationItem[] get(array|string $columns = ['*'])
     * @method ProductVariationItem getModel()
     * @method ProductVariationItem[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductVariationItem_C|ProductVariationItem[] hydrate(array $items)
     * @method ProductVariationItem make(array $attributes = [])
     * @method ProductVariationItem newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductVariationItem[]|_IH_ProductVariationItem_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductVariationItem[]|_IH_ProductVariationItem_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductVariationItem sole(array|string $columns = ['*'])
     * @method ProductVariationItem updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductVariationItem_QB extends _BaseBuilder {}

    /**
     * @method ProductVariation|null getOrPut($key, $value)
     * @method ProductVariation|$this shift(int $count = 1)
     * @method ProductVariation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductVariation|$this pop(int $count = 1)
     * @method ProductVariation|null pull($key, \Closure $default = null)
     * @method ProductVariation|null last(callable $callback = null, \Closure $default = null)
     * @method ProductVariation|$this random(callable|int|null $number = null)
     * @method ProductVariation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductVariation|null get($key, \Closure $default = null)
     * @method ProductVariation|null first(callable $callback = null, \Closure $default = null)
     * @method ProductVariation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductVariation|null find($key, $default = null)
     * @method ProductVariation[] all()
     */
    class _IH_ProductVariation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductVariation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ProductVariation_QB whereId($value)
     * @method _IH_ProductVariation_QB whereProductId($value)
     * @method _IH_ProductVariation_QB whereConfigurableProductId($value)
     * @method _IH_ProductVariation_QB whereIsDefault($value)
     * @method ProductVariation baseSole(array|string $columns = ['*'])
     * @method ProductVariation create(array $attributes = [])
     * @method _IH_ProductVariation_C|ProductVariation[] cursor()
     * @method ProductVariation|null|_IH_ProductVariation_C|ProductVariation[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductVariation_C|ProductVariation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductVariation|_IH_ProductVariation_C|ProductVariation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductVariation|_IH_ProductVariation_C|ProductVariation[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductVariation|_IH_ProductVariation_C|ProductVariation[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductVariation first(array|string $columns = ['*'])
     * @method ProductVariation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductVariation firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductVariation firstOrFail(array|string $columns = ['*'])
     * @method ProductVariation firstOrNew(array $attributes = [], array $values = [])
     * @method ProductVariation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductVariation forceCreate(array $attributes)
     * @method _IH_ProductVariation_C|ProductVariation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductVariation_C|ProductVariation[] get(array|string $columns = ['*'])
     * @method ProductVariation getModel()
     * @method ProductVariation[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductVariation_C|ProductVariation[] hydrate(array $items)
     * @method ProductVariation make(array $attributes = [])
     * @method ProductVariation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductVariation[]|_IH_ProductVariation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ProductVariation[]|_IH_ProductVariation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductVariation sole(array|string $columns = ['*'])
     * @method ProductVariation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductVariation_QB extends _BaseBuilder {}

    /**
     * @method Product|null getOrPut($key, $value)
     * @method Product|$this shift(int $count = 1)
     * @method Product|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Product|$this pop(int $count = 1)
     * @method Product|null pull($key, \Closure $default = null)
     * @method Product|null last(callable $callback = null, \Closure $default = null)
     * @method Product|$this random(callable|int|null $number = null)
     * @method Product|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Product|null get($key, \Closure $default = null)
     * @method Product|null first(callable $callback = null, \Closure $default = null)
     * @method Product|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Product|null find($key, $default = null)
     * @method Product[] all()
     */
    class _IH_Product_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Product[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Product_QB whereId($value)
     * @method _IH_Product_QB whereName($value)
     * @method _IH_Product_QB whereDescription($value)
     * @method _IH_Product_QB whereContent($value)
     * @method _IH_Product_QB whereStatus($value)
     * @method _IH_Product_QB whereImages($value)
     * @method _IH_Product_QB whereSku($value)
     * @method _IH_Product_QB whereOrder($value)
     * @method _IH_Product_QB whereQuantity($value)
     * @method _IH_Product_QB whereAllowCheckoutWhenOutOfStock($value)
     * @method _IH_Product_QB whereWithStorehouseManagement($value)
     * @method _IH_Product_QB whereIsFeatured($value)
     * @method _IH_Product_QB whereBrandId($value)
     * @method _IH_Product_QB whereIsVariation($value)
     * @method _IH_Product_QB whereSaleType($value)
     * @method _IH_Product_QB wherePrice($value)
     * @method _IH_Product_QB whereSalePrice($value)
     * @method _IH_Product_QB whereStartDate($value)
     * @method _IH_Product_QB whereEndDate($value)
     * @method _IH_Product_QB whereLength($value)
     * @method _IH_Product_QB whereWide($value)
     * @method _IH_Product_QB whereHeight($value)
     * @method _IH_Product_QB whereWeight($value)
     * @method _IH_Product_QB whereTaxId($value)
     * @method _IH_Product_QB whereViews($value)
     * @method _IH_Product_QB whereCreatedAt($value)
     * @method _IH_Product_QB whereUpdatedAt($value)
     * @method _IH_Product_QB whereStockStatus($value)
     * @method _IH_Product_QB whereStoreId($value)
     * @method _IH_Product_QB whereCreatedById($value)
     * @method _IH_Product_QB whereCreatedByType($value)
     * @method _IH_Product_QB whereApprovedBy($value)
     * @method _IH_Product_QB whereImage($value)
     * @method _IH_Product_QB whereProductType($value)
     * @method Product baseSole(array|string $columns = ['*'])
     * @method Product create(array $attributes = [])
     * @method _IH_Product_C|Product[] cursor()
     * @method Product|null|_IH_Product_C|Product[] find($id, array|string $columns = ['*'])
     * @method _IH_Product_C|Product[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Product|_IH_Product_C|Product[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Product|_IH_Product_C|Product[] findOrFail($id, array|string $columns = ['*'])
     * @method Product|_IH_Product_C|Product[] findOrNew($id, array|string $columns = ['*'])
     * @method Product first(array|string $columns = ['*'])
     * @method Product firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Product firstOrCreate(array $attributes = [], array $values = [])
     * @method Product firstOrFail(array|string $columns = ['*'])
     * @method Product firstOrNew(array $attributes = [], array $values = [])
     * @method Product firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Product forceCreate(array $attributes)
     * @method _IH_Product_C|Product[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Product_C|Product[] get(array|string $columns = ['*'])
     * @method Product getModel()
     * @method Product[] getModels(array|string $columns = ['*'])
     * @method _IH_Product_C|Product[] hydrate(array $items)
     * @method Product make(array $attributes = [])
     * @method Product newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Product[]|_IH_Product_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Product[]|_IH_Product_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Product sole(array|string $columns = ['*'])
     * @method Product updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Product_QB notOutOfStock()
     */
    class _IH_Product_QB extends _BaseBuilder {}

    /**
     * @method Review|null getOrPut($key, $value)
     * @method Review|$this shift(int $count = 1)
     * @method Review|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Review|$this pop(int $count = 1)
     * @method Review|null pull($key, \Closure $default = null)
     * @method Review|null last(callable $callback = null, \Closure $default = null)
     * @method Review|$this random(callable|int|null $number = null)
     * @method Review|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Review|null get($key, \Closure $default = null)
     * @method Review|null first(callable $callback = null, \Closure $default = null)
     * @method Review|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Review|null find($key, $default = null)
     * @method Review[] all()
     */
    class _IH_Review_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Review[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Review_QB whereId($value)
     * @method _IH_Review_QB whereCustomerId($value)
     * @method _IH_Review_QB whereProductId($value)
     * @method _IH_Review_QB whereStar($value)
     * @method _IH_Review_QB whereComment($value)
     * @method _IH_Review_QB whereStatus($value)
     * @method _IH_Review_QB whereCreatedAt($value)
     * @method _IH_Review_QB whereUpdatedAt($value)
     * @method _IH_Review_QB whereImages($value)
     * @method Review baseSole(array|string $columns = ['*'])
     * @method Review create(array $attributes = [])
     * @method _IH_Review_C|Review[] cursor()
     * @method Review|null|_IH_Review_C|Review[] find($id, array|string $columns = ['*'])
     * @method _IH_Review_C|Review[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Review|_IH_Review_C|Review[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Review|_IH_Review_C|Review[] findOrFail($id, array|string $columns = ['*'])
     * @method Review|_IH_Review_C|Review[] findOrNew($id, array|string $columns = ['*'])
     * @method Review first(array|string $columns = ['*'])
     * @method Review firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Review firstOrCreate(array $attributes = [], array $values = [])
     * @method Review firstOrFail(array|string $columns = ['*'])
     * @method Review firstOrNew(array $attributes = [], array $values = [])
     * @method Review firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Review forceCreate(array $attributes)
     * @method _IH_Review_C|Review[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Review_C|Review[] get(array|string $columns = ['*'])
     * @method Review getModel()
     * @method Review[] getModels(array|string $columns = ['*'])
     * @method _IH_Review_C|Review[] hydrate(array $items)
     * @method Review make(array $attributes = [])
     * @method Review newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Review[]|_IH_Review_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Review[]|_IH_Review_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Review sole(array|string $columns = ['*'])
     * @method Review updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Review_QB extends _BaseBuilder {}

    /**
     * @method ShipmentHistory|null getOrPut($key, $value)
     * @method ShipmentHistory|$this shift(int $count = 1)
     * @method ShipmentHistory|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ShipmentHistory|$this pop(int $count = 1)
     * @method ShipmentHistory|null pull($key, \Closure $default = null)
     * @method ShipmentHistory|null last(callable $callback = null, \Closure $default = null)
     * @method ShipmentHistory|$this random(callable|int|null $number = null)
     * @method ShipmentHistory|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ShipmentHistory|null get($key, \Closure $default = null)
     * @method ShipmentHistory|null first(callable $callback = null, \Closure $default = null)
     * @method ShipmentHistory|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ShipmentHistory|null find($key, $default = null)
     * @method ShipmentHistory[] all()
     */
    class _IH_ShipmentHistory_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ShipmentHistory[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ShipmentHistory_QB whereId($value)
     * @method _IH_ShipmentHistory_QB whereAction($value)
     * @method _IH_ShipmentHistory_QB whereDescription($value)
     * @method _IH_ShipmentHistory_QB whereUserId($value)
     * @method _IH_ShipmentHistory_QB whereShipmentId($value)
     * @method _IH_ShipmentHistory_QB whereOrderId($value)
     * @method _IH_ShipmentHistory_QB whereCreatedAt($value)
     * @method _IH_ShipmentHistory_QB whereUpdatedAt($value)
     * @method ShipmentHistory baseSole(array|string $columns = ['*'])
     * @method ShipmentHistory create(array $attributes = [])
     * @method _IH_ShipmentHistory_C|ShipmentHistory[] cursor()
     * @method ShipmentHistory|null|_IH_ShipmentHistory_C|ShipmentHistory[] find($id, array|string $columns = ['*'])
     * @method _IH_ShipmentHistory_C|ShipmentHistory[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ShipmentHistory|_IH_ShipmentHistory_C|ShipmentHistory[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ShipmentHistory|_IH_ShipmentHistory_C|ShipmentHistory[] findOrFail($id, array|string $columns = ['*'])
     * @method ShipmentHistory|_IH_ShipmentHistory_C|ShipmentHistory[] findOrNew($id, array|string $columns = ['*'])
     * @method ShipmentHistory first(array|string $columns = ['*'])
     * @method ShipmentHistory firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ShipmentHistory firstOrCreate(array $attributes = [], array $values = [])
     * @method ShipmentHistory firstOrFail(array|string $columns = ['*'])
     * @method ShipmentHistory firstOrNew(array $attributes = [], array $values = [])
     * @method ShipmentHistory firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ShipmentHistory forceCreate(array $attributes)
     * @method _IH_ShipmentHistory_C|ShipmentHistory[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ShipmentHistory_C|ShipmentHistory[] get(array|string $columns = ['*'])
     * @method ShipmentHistory getModel()
     * @method ShipmentHistory[] getModels(array|string $columns = ['*'])
     * @method _IH_ShipmentHistory_C|ShipmentHistory[] hydrate(array $items)
     * @method ShipmentHistory make(array $attributes = [])
     * @method ShipmentHistory newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ShipmentHistory[]|_IH_ShipmentHistory_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ShipmentHistory[]|_IH_ShipmentHistory_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ShipmentHistory sole(array|string $columns = ['*'])
     * @method ShipmentHistory updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ShipmentHistory_QB extends _BaseBuilder {}

    /**
     * @method Shipment|null getOrPut($key, $value)
     * @method Shipment|$this shift(int $count = 1)
     * @method Shipment|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Shipment|$this pop(int $count = 1)
     * @method Shipment|null pull($key, \Closure $default = null)
     * @method Shipment|null last(callable $callback = null, \Closure $default = null)
     * @method Shipment|$this random(callable|int|null $number = null)
     * @method Shipment|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Shipment|null get($key, \Closure $default = null)
     * @method Shipment|null first(callable $callback = null, \Closure $default = null)
     * @method Shipment|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Shipment|null find($key, $default = null)
     * @method Shipment[] all()
     */
    class _IH_Shipment_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Shipment[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Shipment_QB whereId($value)
     * @method _IH_Shipment_QB whereOrderId($value)
     * @method _IH_Shipment_QB whereUserId($value)
     * @method _IH_Shipment_QB whereWeight($value)
     * @method _IH_Shipment_QB whereShipmentId($value)
     * @method _IH_Shipment_QB whereNote($value)
     * @method _IH_Shipment_QB whereStatus($value)
     * @method _IH_Shipment_QB whereCodAmount($value)
     * @method _IH_Shipment_QB whereCodStatus($value)
     * @method _IH_Shipment_QB whereCrossCheckingStatus($value)
     * @method _IH_Shipment_QB wherePrice($value)
     * @method _IH_Shipment_QB whereStoreId($value)
     * @method _IH_Shipment_QB whereCreatedAt($value)
     * @method _IH_Shipment_QB whereUpdatedAt($value)
     * @method _IH_Shipment_QB whereTrackingId($value)
     * @method _IH_Shipment_QB whereShippingCompanyName($value)
     * @method _IH_Shipment_QB whereTrackingLink($value)
     * @method _IH_Shipment_QB whereEstimateDateShipped($value)
     * @method _IH_Shipment_QB whereDateShipped($value)
     * @method _IH_Shipment_QB whereLabelUrl($value)
     * @method _IH_Shipment_QB whereRateId($value)
     * @method _IH_Shipment_QB whereMetadata($value)
     * @method Shipment baseSole(array|string $columns = ['*'])
     * @method Shipment create(array $attributes = [])
     * @method _IH_Shipment_C|Shipment[] cursor()
     * @method Shipment|null|_IH_Shipment_C|Shipment[] find($id, array|string $columns = ['*'])
     * @method _IH_Shipment_C|Shipment[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Shipment|_IH_Shipment_C|Shipment[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Shipment|_IH_Shipment_C|Shipment[] findOrFail($id, array|string $columns = ['*'])
     * @method Shipment|_IH_Shipment_C|Shipment[] findOrNew($id, array|string $columns = ['*'])
     * @method Shipment first(array|string $columns = ['*'])
     * @method Shipment firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Shipment firstOrCreate(array $attributes = [], array $values = [])
     * @method Shipment firstOrFail(array|string $columns = ['*'])
     * @method Shipment firstOrNew(array $attributes = [], array $values = [])
     * @method Shipment firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Shipment forceCreate(array $attributes)
     * @method _IH_Shipment_C|Shipment[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Shipment_C|Shipment[] get(array|string $columns = ['*'])
     * @method Shipment getModel()
     * @method Shipment[] getModels(array|string $columns = ['*'])
     * @method _IH_Shipment_C|Shipment[] hydrate(array $items)
     * @method Shipment make(array $attributes = [])
     * @method Shipment newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Shipment[]|_IH_Shipment_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Shipment[]|_IH_Shipment_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Shipment sole(array|string $columns = ['*'])
     * @method Shipment updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Shipment_QB extends _BaseBuilder {}

    /**
     * @method ShippingRuleItem|null getOrPut($key, $value)
     * @method ShippingRuleItem|$this shift(int $count = 1)
     * @method ShippingRuleItem|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ShippingRuleItem|$this pop(int $count = 1)
     * @method ShippingRuleItem|null pull($key, \Closure $default = null)
     * @method ShippingRuleItem|null last(callable $callback = null, \Closure $default = null)
     * @method ShippingRuleItem|$this random(callable|int|null $number = null)
     * @method ShippingRuleItem|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ShippingRuleItem|null get($key, \Closure $default = null)
     * @method ShippingRuleItem|null first(callable $callback = null, \Closure $default = null)
     * @method ShippingRuleItem|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ShippingRuleItem|null find($key, $default = null)
     * @method ShippingRuleItem[] all()
     */
    class _IH_ShippingRuleItem_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ShippingRuleItem[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ShippingRuleItem_QB whereId($value)
     * @method _IH_ShippingRuleItem_QB whereShippingRuleId($value)
     * @method _IH_ShippingRuleItem_QB whereCountry($value)
     * @method _IH_ShippingRuleItem_QB whereState($value)
     * @method _IH_ShippingRuleItem_QB whereCity($value)
     * @method _IH_ShippingRuleItem_QB whereAdjustmentPrice($value)
     * @method _IH_ShippingRuleItem_QB whereIsEnabled($value)
     * @method _IH_ShippingRuleItem_QB whereCreatedAt($value)
     * @method _IH_ShippingRuleItem_QB whereUpdatedAt($value)
     * @method _IH_ShippingRuleItem_QB whereZipCode($value)
     * @method ShippingRuleItem baseSole(array|string $columns = ['*'])
     * @method ShippingRuleItem create(array $attributes = [])
     * @method _IH_ShippingRuleItem_C|ShippingRuleItem[] cursor()
     * @method ShippingRuleItem|null|_IH_ShippingRuleItem_C|ShippingRuleItem[] find($id, array|string $columns = ['*'])
     * @method _IH_ShippingRuleItem_C|ShippingRuleItem[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ShippingRuleItem|_IH_ShippingRuleItem_C|ShippingRuleItem[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ShippingRuleItem|_IH_ShippingRuleItem_C|ShippingRuleItem[] findOrFail($id, array|string $columns = ['*'])
     * @method ShippingRuleItem|_IH_ShippingRuleItem_C|ShippingRuleItem[] findOrNew($id, array|string $columns = ['*'])
     * @method ShippingRuleItem first(array|string $columns = ['*'])
     * @method ShippingRuleItem firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ShippingRuleItem firstOrCreate(array $attributes = [], array $values = [])
     * @method ShippingRuleItem firstOrFail(array|string $columns = ['*'])
     * @method ShippingRuleItem firstOrNew(array $attributes = [], array $values = [])
     * @method ShippingRuleItem firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ShippingRuleItem forceCreate(array $attributes)
     * @method _IH_ShippingRuleItem_C|ShippingRuleItem[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ShippingRuleItem_C|ShippingRuleItem[] get(array|string $columns = ['*'])
     * @method ShippingRuleItem getModel()
     * @method ShippingRuleItem[] getModels(array|string $columns = ['*'])
     * @method _IH_ShippingRuleItem_C|ShippingRuleItem[] hydrate(array $items)
     * @method ShippingRuleItem make(array $attributes = [])
     * @method ShippingRuleItem newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ShippingRuleItem[]|_IH_ShippingRuleItem_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ShippingRuleItem[]|_IH_ShippingRuleItem_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ShippingRuleItem sole(array|string $columns = ['*'])
     * @method ShippingRuleItem updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ShippingRuleItem_QB extends _BaseBuilder {}

    /**
     * @method ShippingRule|null getOrPut($key, $value)
     * @method ShippingRule|$this shift(int $count = 1)
     * @method ShippingRule|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ShippingRule|$this pop(int $count = 1)
     * @method ShippingRule|null pull($key, \Closure $default = null)
     * @method ShippingRule|null last(callable $callback = null, \Closure $default = null)
     * @method ShippingRule|$this random(callable|int|null $number = null)
     * @method ShippingRule|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ShippingRule|null get($key, \Closure $default = null)
     * @method ShippingRule|null first(callable $callback = null, \Closure $default = null)
     * @method ShippingRule|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ShippingRule|null find($key, $default = null)
     * @method ShippingRule[] all()
     */
    class _IH_ShippingRule_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ShippingRule[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ShippingRule_QB whereId($value)
     * @method _IH_ShippingRule_QB whereName($value)
     * @method _IH_ShippingRule_QB whereShippingId($value)
     * @method _IH_ShippingRule_QB whereType($value)
     * @method _IH_ShippingRule_QB whereFrom($value)
     * @method _IH_ShippingRule_QB whereTo($value)
     * @method _IH_ShippingRule_QB wherePrice($value)
     * @method _IH_ShippingRule_QB whereCreatedAt($value)
     * @method _IH_ShippingRule_QB whereUpdatedAt($value)
     * @method ShippingRule baseSole(array|string $columns = ['*'])
     * @method ShippingRule create(array $attributes = [])
     * @method _IH_ShippingRule_C|ShippingRule[] cursor()
     * @method ShippingRule|null|_IH_ShippingRule_C|ShippingRule[] find($id, array|string $columns = ['*'])
     * @method _IH_ShippingRule_C|ShippingRule[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ShippingRule|_IH_ShippingRule_C|ShippingRule[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ShippingRule|_IH_ShippingRule_C|ShippingRule[] findOrFail($id, array|string $columns = ['*'])
     * @method ShippingRule|_IH_ShippingRule_C|ShippingRule[] findOrNew($id, array|string $columns = ['*'])
     * @method ShippingRule first(array|string $columns = ['*'])
     * @method ShippingRule firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ShippingRule firstOrCreate(array $attributes = [], array $values = [])
     * @method ShippingRule firstOrFail(array|string $columns = ['*'])
     * @method ShippingRule firstOrNew(array $attributes = [], array $values = [])
     * @method ShippingRule firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ShippingRule forceCreate(array $attributes)
     * @method _IH_ShippingRule_C|ShippingRule[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ShippingRule_C|ShippingRule[] get(array|string $columns = ['*'])
     * @method ShippingRule getModel()
     * @method ShippingRule[] getModels(array|string $columns = ['*'])
     * @method _IH_ShippingRule_C|ShippingRule[] hydrate(array $items)
     * @method ShippingRule make(array $attributes = [])
     * @method ShippingRule newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ShippingRule[]|_IH_ShippingRule_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ShippingRule[]|_IH_ShippingRule_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ShippingRule sole(array|string $columns = ['*'])
     * @method ShippingRule updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ShippingRule_QB extends _BaseBuilder {}

    /**
     * @method Shipping|null getOrPut($key, $value)
     * @method Shipping|$this shift(int $count = 1)
     * @method Shipping|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Shipping|$this pop(int $count = 1)
     * @method Shipping|null pull($key, \Closure $default = null)
     * @method Shipping|null last(callable $callback = null, \Closure $default = null)
     * @method Shipping|$this random(callable|int|null $number = null)
     * @method Shipping|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Shipping|null get($key, \Closure $default = null)
     * @method Shipping|null first(callable $callback = null, \Closure $default = null)
     * @method Shipping|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Shipping|null find($key, $default = null)
     * @method Shipping[] all()
     */
    class _IH_Shipping_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Shipping[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Shipping_QB whereId($value)
     * @method _IH_Shipping_QB whereTitle($value)
     * @method _IH_Shipping_QB whereCountry($value)
     * @method _IH_Shipping_QB whereCreatedAt($value)
     * @method _IH_Shipping_QB whereUpdatedAt($value)
     * @method Shipping baseSole(array|string $columns = ['*'])
     * @method Shipping create(array $attributes = [])
     * @method _IH_Shipping_C|Shipping[] cursor()
     * @method Shipping|null|_IH_Shipping_C|Shipping[] find($id, array|string $columns = ['*'])
     * @method _IH_Shipping_C|Shipping[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Shipping|_IH_Shipping_C|Shipping[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Shipping|_IH_Shipping_C|Shipping[] findOrFail($id, array|string $columns = ['*'])
     * @method Shipping|_IH_Shipping_C|Shipping[] findOrNew($id, array|string $columns = ['*'])
     * @method Shipping first(array|string $columns = ['*'])
     * @method Shipping firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Shipping firstOrCreate(array $attributes = [], array $values = [])
     * @method Shipping firstOrFail(array|string $columns = ['*'])
     * @method Shipping firstOrNew(array $attributes = [], array $values = [])
     * @method Shipping firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Shipping forceCreate(array $attributes)
     * @method _IH_Shipping_C|Shipping[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Shipping_C|Shipping[] get(array|string $columns = ['*'])
     * @method Shipping getModel()
     * @method Shipping[] getModels(array|string $columns = ['*'])
     * @method _IH_Shipping_C|Shipping[] hydrate(array $items)
     * @method Shipping make(array $attributes = [])
     * @method Shipping newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Shipping[]|_IH_Shipping_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Shipping[]|_IH_Shipping_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Shipping sole(array|string $columns = ['*'])
     * @method Shipping updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Shipping_QB extends _BaseBuilder {}

    /**
     * @method StoreLocator|null getOrPut($key, $value)
     * @method StoreLocator|$this shift(int $count = 1)
     * @method StoreLocator|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method StoreLocator|$this pop(int $count = 1)
     * @method StoreLocator|null pull($key, \Closure $default = null)
     * @method StoreLocator|null last(callable $callback = null, \Closure $default = null)
     * @method StoreLocator|$this random(callable|int|null $number = null)
     * @method StoreLocator|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method StoreLocator|null get($key, \Closure $default = null)
     * @method StoreLocator|null first(callable $callback = null, \Closure $default = null)
     * @method StoreLocator|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method StoreLocator|null find($key, $default = null)
     * @method StoreLocator[] all()
     */
    class _IH_StoreLocator_C extends _BaseCollection {
        /**
         * @param int $size
         * @return StoreLocator[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_StoreLocator_QB whereId($value)
     * @method _IH_StoreLocator_QB whereName($value)
     * @method _IH_StoreLocator_QB whereEmail($value)
     * @method _IH_StoreLocator_QB wherePhone($value)
     * @method _IH_StoreLocator_QB whereAddress($value)
     * @method _IH_StoreLocator_QB whereCountry($value)
     * @method _IH_StoreLocator_QB whereState($value)
     * @method _IH_StoreLocator_QB whereCity($value)
     * @method _IH_StoreLocator_QB whereIsPrimary($value)
     * @method _IH_StoreLocator_QB whereIsShippingLocation($value)
     * @method _IH_StoreLocator_QB whereCreatedAt($value)
     * @method _IH_StoreLocator_QB whereUpdatedAt($value)
     * @method StoreLocator baseSole(array|string $columns = ['*'])
     * @method StoreLocator create(array $attributes = [])
     * @method _IH_StoreLocator_C|StoreLocator[] cursor()
     * @method StoreLocator|null|_IH_StoreLocator_C|StoreLocator[] find($id, array|string $columns = ['*'])
     * @method _IH_StoreLocator_C|StoreLocator[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method StoreLocator|_IH_StoreLocator_C|StoreLocator[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method StoreLocator|_IH_StoreLocator_C|StoreLocator[] findOrFail($id, array|string $columns = ['*'])
     * @method StoreLocator|_IH_StoreLocator_C|StoreLocator[] findOrNew($id, array|string $columns = ['*'])
     * @method StoreLocator first(array|string $columns = ['*'])
     * @method StoreLocator firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method StoreLocator firstOrCreate(array $attributes = [], array $values = [])
     * @method StoreLocator firstOrFail(array|string $columns = ['*'])
     * @method StoreLocator firstOrNew(array $attributes = [], array $values = [])
     * @method StoreLocator firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method StoreLocator forceCreate(array $attributes)
     * @method _IH_StoreLocator_C|StoreLocator[] fromQuery(string $query, array $bindings = [])
     * @method _IH_StoreLocator_C|StoreLocator[] get(array|string $columns = ['*'])
     * @method StoreLocator getModel()
     * @method StoreLocator[] getModels(array|string $columns = ['*'])
     * @method _IH_StoreLocator_C|StoreLocator[] hydrate(array $items)
     * @method StoreLocator make(array $attributes = [])
     * @method StoreLocator newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|StoreLocator[]|_IH_StoreLocator_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|StoreLocator[]|_IH_StoreLocator_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method StoreLocator sole(array|string $columns = ['*'])
     * @method StoreLocator updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_StoreLocator_QB extends _BaseBuilder {}

    /**
     * @method Tax|null getOrPut($key, $value)
     * @method Tax|$this shift(int $count = 1)
     * @method Tax|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Tax|$this pop(int $count = 1)
     * @method Tax|null pull($key, \Closure $default = null)
     * @method Tax|null last(callable $callback = null, \Closure $default = null)
     * @method Tax|$this random(callable|int|null $number = null)
     * @method Tax|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Tax|null get($key, \Closure $default = null)
     * @method Tax|null first(callable $callback = null, \Closure $default = null)
     * @method Tax|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Tax|null find($key, $default = null)
     * @method Tax[] all()
     */
    class _IH_Tax_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Tax[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Tax_QB whereId($value)
     * @method _IH_Tax_QB whereTitle($value)
     * @method _IH_Tax_QB wherePercentage($value)
     * @method _IH_Tax_QB wherePriority($value)
     * @method _IH_Tax_QB whereStatus($value)
     * @method _IH_Tax_QB whereCreatedAt($value)
     * @method _IH_Tax_QB whereUpdatedAt($value)
     * @method Tax baseSole(array|string $columns = ['*'])
     * @method Tax create(array $attributes = [])
     * @method _IH_Tax_C|Tax[] cursor()
     * @method Tax|null|_IH_Tax_C|Tax[] find($id, array|string $columns = ['*'])
     * @method _IH_Tax_C|Tax[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Tax|_IH_Tax_C|Tax[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Tax|_IH_Tax_C|Tax[] findOrFail($id, array|string $columns = ['*'])
     * @method Tax|_IH_Tax_C|Tax[] findOrNew($id, array|string $columns = ['*'])
     * @method Tax first(array|string $columns = ['*'])
     * @method Tax firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Tax firstOrCreate(array $attributes = [], array $values = [])
     * @method Tax firstOrFail(array|string $columns = ['*'])
     * @method Tax firstOrNew(array $attributes = [], array $values = [])
     * @method Tax firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Tax forceCreate(array $attributes)
     * @method _IH_Tax_C|Tax[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Tax_C|Tax[] get(array|string $columns = ['*'])
     * @method Tax getModel()
     * @method Tax[] getModels(array|string $columns = ['*'])
     * @method _IH_Tax_C|Tax[] hydrate(array $items)
     * @method Tax make(array $attributes = [])
     * @method Tax newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Tax[]|_IH_Tax_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Tax[]|_IH_Tax_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Tax sole(array|string $columns = ['*'])
     * @method Tax updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Tax_QB extends _BaseBuilder {}

    /**
     * @method Wishlist|null getOrPut($key, $value)
     * @method Wishlist|$this shift(int $count = 1)
     * @method Wishlist|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Wishlist|$this pop(int $count = 1)
     * @method Wishlist|null pull($key, \Closure $default = null)
     * @method Wishlist|null last(callable $callback = null, \Closure $default = null)
     * @method Wishlist|$this random(callable|int|null $number = null)
     * @method Wishlist|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Wishlist|null get($key, \Closure $default = null)
     * @method Wishlist|null first(callable $callback = null, \Closure $default = null)
     * @method Wishlist|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Wishlist|null find($key, $default = null)
     * @method Wishlist[] all()
     */
    class _IH_Wishlist_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Wishlist[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Wishlist_QB whereId($value)
     * @method _IH_Wishlist_QB whereCustomerId($value)
     * @method _IH_Wishlist_QB whereProductId($value)
     * @method _IH_Wishlist_QB whereCreatedAt($value)
     * @method _IH_Wishlist_QB whereUpdatedAt($value)
     * @method Wishlist baseSole(array|string $columns = ['*'])
     * @method Wishlist create(array $attributes = [])
     * @method _IH_Wishlist_C|Wishlist[] cursor()
     * @method Wishlist|null|_IH_Wishlist_C|Wishlist[] find($id, array|string $columns = ['*'])
     * @method _IH_Wishlist_C|Wishlist[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Wishlist|_IH_Wishlist_C|Wishlist[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Wishlist|_IH_Wishlist_C|Wishlist[] findOrFail($id, array|string $columns = ['*'])
     * @method Wishlist|_IH_Wishlist_C|Wishlist[] findOrNew($id, array|string $columns = ['*'])
     * @method Wishlist first(array|string $columns = ['*'])
     * @method Wishlist firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Wishlist firstOrCreate(array $attributes = [], array $values = [])
     * @method Wishlist firstOrFail(array|string $columns = ['*'])
     * @method Wishlist firstOrNew(array $attributes = [], array $values = [])
     * @method Wishlist firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Wishlist forceCreate(array $attributes)
     * @method _IH_Wishlist_C|Wishlist[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Wishlist_C|Wishlist[] get(array|string $columns = ['*'])
     * @method Wishlist getModel()
     * @method Wishlist[] getModels(array|string $columns = ['*'])
     * @method _IH_Wishlist_C|Wishlist[] hydrate(array $items)
     * @method Wishlist make(array $attributes = [])
     * @method Wishlist newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Wishlist[]|_IH_Wishlist_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Wishlist[]|_IH_Wishlist_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Wishlist sole(array|string $columns = ['*'])
     * @method Wishlist updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Wishlist_QB extends _BaseBuilder {}
}
