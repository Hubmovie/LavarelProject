<?php //3f2bc57a3a7c63bdcdbed1f3b765c2ca
/** @noinspection all */

namespace LaravelIdea\Helper\Botble\Marketplace\Models {

    use Botble\Marketplace\Models\CategoryCommission;
    use Botble\Marketplace\Models\Revenue;
    use Botble\Marketplace\Models\Store;
    use Botble\Marketplace\Models\VendorInfo;
    use Botble\Marketplace\Models\Withdrawal;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method CategoryCommission|null getOrPut($key, $value)
     * @method CategoryCommission|$this shift(int $count = 1)
     * @method CategoryCommission|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method CategoryCommission|$this pop(int $count = 1)
     * @method CategoryCommission|null pull($key, \Closure $default = null)
     * @method CategoryCommission|null last(callable $callback = null, \Closure $default = null)
     * @method CategoryCommission|$this random(callable|int|null $number = null)
     * @method CategoryCommission|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method CategoryCommission|null get($key, \Closure $default = null)
     * @method CategoryCommission|null first(callable $callback = null, \Closure $default = null)
     * @method CategoryCommission|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method CategoryCommission|null find($key, $default = null)
     * @method CategoryCommission[] all()
     */
    class _IH_CategoryCommission_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CategoryCommission[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_CategoryCommission_QB whereId($value)
     * @method _IH_CategoryCommission_QB whereProductCategoryId($value)
     * @method _IH_CategoryCommission_QB whereCommissionPercentage($value)
     * @method CategoryCommission baseSole(array|string $columns = ['*'])
     * @method CategoryCommission create(array $attributes = [])
     * @method _IH_CategoryCommission_C|CategoryCommission[] cursor()
     * @method CategoryCommission|null|_IH_CategoryCommission_C|CategoryCommission[] find($id, array|string $columns = ['*'])
     * @method _IH_CategoryCommission_C|CategoryCommission[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method CategoryCommission|_IH_CategoryCommission_C|CategoryCommission[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CategoryCommission|_IH_CategoryCommission_C|CategoryCommission[] findOrFail($id, array|string $columns = ['*'])
     * @method CategoryCommission|_IH_CategoryCommission_C|CategoryCommission[] findOrNew($id, array|string $columns = ['*'])
     * @method CategoryCommission first(array|string $columns = ['*'])
     * @method CategoryCommission firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CategoryCommission firstOrCreate(array $attributes = [], array $values = [])
     * @method CategoryCommission firstOrFail(array|string $columns = ['*'])
     * @method CategoryCommission firstOrNew(array $attributes = [], array $values = [])
     * @method CategoryCommission firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CategoryCommission forceCreate(array $attributes)
     * @method _IH_CategoryCommission_C|CategoryCommission[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CategoryCommission_C|CategoryCommission[] get(array|string $columns = ['*'])
     * @method CategoryCommission getModel()
     * @method CategoryCommission[] getModels(array|string $columns = ['*'])
     * @method _IH_CategoryCommission_C|CategoryCommission[] hydrate(array $items)
     * @method CategoryCommission make(array $attributes = [])
     * @method CategoryCommission newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CategoryCommission[]|_IH_CategoryCommission_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|CategoryCommission[]|_IH_CategoryCommission_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CategoryCommission sole(array|string $columns = ['*'])
     * @method CategoryCommission updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_CategoryCommission_QB extends _BaseBuilder {}

    /**
     * @method Revenue|null getOrPut($key, $value)
     * @method Revenue|$this shift(int $count = 1)
     * @method Revenue|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Revenue|$this pop(int $count = 1)
     * @method Revenue|null pull($key, \Closure $default = null)
     * @method Revenue|null last(callable $callback = null, \Closure $default = null)
     * @method Revenue|$this random(callable|int|null $number = null)
     * @method Revenue|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Revenue|null get($key, \Closure $default = null)
     * @method Revenue|null first(callable $callback = null, \Closure $default = null)
     * @method Revenue|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Revenue|null find($key, $default = null)
     * @method Revenue[] all()
     */
    class _IH_Revenue_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Revenue[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Revenue_QB whereId($value)
     * @method _IH_Revenue_QB whereCustomerId($value)
     * @method _IH_Revenue_QB whereOrderId($value)
     * @method _IH_Revenue_QB whereSubAmount($value)
     * @method _IH_Revenue_QB whereFee($value)
     * @method _IH_Revenue_QB whereAmount($value)
     * @method _IH_Revenue_QB whereCurrentBalance($value)
     * @method _IH_Revenue_QB whereCurrency($value)
     * @method _IH_Revenue_QB whereDescription($value)
     * @method _IH_Revenue_QB whereCreatedAt($value)
     * @method _IH_Revenue_QB whereUpdatedAt($value)
     * @method _IH_Revenue_QB whereUserId($value)
     * @method _IH_Revenue_QB whereType($value)
     * @method Revenue baseSole(array|string $columns = ['*'])
     * @method Revenue create(array $attributes = [])
     * @method _IH_Revenue_C|Revenue[] cursor()
     * @method Revenue|null|_IH_Revenue_C|Revenue[] find($id, array|string $columns = ['*'])
     * @method _IH_Revenue_C|Revenue[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Revenue|_IH_Revenue_C|Revenue[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Revenue|_IH_Revenue_C|Revenue[] findOrFail($id, array|string $columns = ['*'])
     * @method Revenue|_IH_Revenue_C|Revenue[] findOrNew($id, array|string $columns = ['*'])
     * @method Revenue first(array|string $columns = ['*'])
     * @method Revenue firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Revenue firstOrCreate(array $attributes = [], array $values = [])
     * @method Revenue firstOrFail(array|string $columns = ['*'])
     * @method Revenue firstOrNew(array $attributes = [], array $values = [])
     * @method Revenue firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Revenue forceCreate(array $attributes)
     * @method _IH_Revenue_C|Revenue[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Revenue_C|Revenue[] get(array|string $columns = ['*'])
     * @method Revenue getModel()
     * @method Revenue[] getModels(array|string $columns = ['*'])
     * @method _IH_Revenue_C|Revenue[] hydrate(array $items)
     * @method Revenue make(array $attributes = [])
     * @method Revenue newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Revenue[]|_IH_Revenue_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Revenue[]|_IH_Revenue_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Revenue sole(array|string $columns = ['*'])
     * @method Revenue updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Revenue_QB extends _BaseBuilder {}

    /**
     * @method Store|null getOrPut($key, $value)
     * @method Store|$this shift(int $count = 1)
     * @method Store|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Store|$this pop(int $count = 1)
     * @method Store|null pull($key, \Closure $default = null)
     * @method Store|null last(callable $callback = null, \Closure $default = null)
     * @method Store|$this random(callable|int|null $number = null)
     * @method Store|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Store|null get($key, \Closure $default = null)
     * @method Store|null first(callable $callback = null, \Closure $default = null)
     * @method Store|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Store|null find($key, $default = null)
     * @method Store[] all()
     */
    class _IH_Store_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Store[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Store_QB whereId($value)
     * @method _IH_Store_QB whereName($value)
     * @method _IH_Store_QB whereEmail($value)
     * @method _IH_Store_QB wherePhone($value)
     * @method _IH_Store_QB whereAddress($value)
     * @method _IH_Store_QB whereCountry($value)
     * @method _IH_Store_QB whereState($value)
     * @method _IH_Store_QB whereCity($value)
     * @method _IH_Store_QB whereCustomerId($value)
     * @method _IH_Store_QB whereLogo($value)
     * @method _IH_Store_QB whereDescription($value)
     * @method _IH_Store_QB whereContent($value)
     * @method _IH_Store_QB whereStatus($value)
     * @method _IH_Store_QB whereVendorVerifiedAt($value)
     * @method _IH_Store_QB whereCreatedAt($value)
     * @method _IH_Store_QB whereUpdatedAt($value)
     * @method _IH_Store_QB whereZipCode($value)
     * @method _IH_Store_QB whereCompany($value)
     * @method Store baseSole(array|string $columns = ['*'])
     * @method Store create(array $attributes = [])
     * @method _IH_Store_C|Store[] cursor()
     * @method Store|null|_IH_Store_C|Store[] find($id, array|string $columns = ['*'])
     * @method _IH_Store_C|Store[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Store|_IH_Store_C|Store[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Store|_IH_Store_C|Store[] findOrFail($id, array|string $columns = ['*'])
     * @method Store|_IH_Store_C|Store[] findOrNew($id, array|string $columns = ['*'])
     * @method Store first(array|string $columns = ['*'])
     * @method Store firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Store firstOrCreate(array $attributes = [], array $values = [])
     * @method Store firstOrFail(array|string $columns = ['*'])
     * @method Store firstOrNew(array $attributes = [], array $values = [])
     * @method Store firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Store forceCreate(array $attributes)
     * @method _IH_Store_C|Store[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Store_C|Store[] get(array|string $columns = ['*'])
     * @method Store getModel()
     * @method Store[] getModels(array|string $columns = ['*'])
     * @method _IH_Store_C|Store[] hydrate(array $items)
     * @method Store make(array $attributes = [])
     * @method Store newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Store[]|_IH_Store_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Store[]|_IH_Store_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Store sole(array|string $columns = ['*'])
     * @method Store updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Store_QB extends _BaseBuilder {}

    /**
     * @method VendorInfo|null getOrPut($key, $value)
     * @method VendorInfo|$this shift(int $count = 1)
     * @method VendorInfo|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method VendorInfo|$this pop(int $count = 1)
     * @method VendorInfo|null pull($key, \Closure $default = null)
     * @method VendorInfo|null last(callable $callback = null, \Closure $default = null)
     * @method VendorInfo|$this random(callable|int|null $number = null)
     * @method VendorInfo|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method VendorInfo|null get($key, \Closure $default = null)
     * @method VendorInfo|null first(callable $callback = null, \Closure $default = null)
     * @method VendorInfo|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method VendorInfo|null find($key, $default = null)
     * @method VendorInfo[] all()
     */
    class _IH_VendorInfo_C extends _BaseCollection {
        /**
         * @param int $size
         * @return VendorInfo[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_VendorInfo_QB whereId($value)
     * @method _IH_VendorInfo_QB whereCustomerId($value)
     * @method _IH_VendorInfo_QB whereBalance($value)
     * @method _IH_VendorInfo_QB whereTotalFee($value)
     * @method _IH_VendorInfo_QB whereTotalRevenue($value)
     * @method _IH_VendorInfo_QB whereSignature($value)
     * @method _IH_VendorInfo_QB whereBankInfo($value)
     * @method _IH_VendorInfo_QB whereCreatedAt($value)
     * @method _IH_VendorInfo_QB whereUpdatedAt($value)
     * @method _IH_VendorInfo_QB wherePayoutPaymentMethod($value)
     * @method _IH_VendorInfo_QB whereTaxInfo($value)
     * @method VendorInfo baseSole(array|string $columns = ['*'])
     * @method VendorInfo create(array $attributes = [])
     * @method _IH_VendorInfo_C|VendorInfo[] cursor()
     * @method VendorInfo|null|_IH_VendorInfo_C|VendorInfo[] find($id, array|string $columns = ['*'])
     * @method _IH_VendorInfo_C|VendorInfo[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method VendorInfo|_IH_VendorInfo_C|VendorInfo[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method VendorInfo|_IH_VendorInfo_C|VendorInfo[] findOrFail($id, array|string $columns = ['*'])
     * @method VendorInfo|_IH_VendorInfo_C|VendorInfo[] findOrNew($id, array|string $columns = ['*'])
     * @method VendorInfo first(array|string $columns = ['*'])
     * @method VendorInfo firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method VendorInfo firstOrCreate(array $attributes = [], array $values = [])
     * @method VendorInfo firstOrFail(array|string $columns = ['*'])
     * @method VendorInfo firstOrNew(array $attributes = [], array $values = [])
     * @method VendorInfo firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method VendorInfo forceCreate(array $attributes)
     * @method _IH_VendorInfo_C|VendorInfo[] fromQuery(string $query, array $bindings = [])
     * @method _IH_VendorInfo_C|VendorInfo[] get(array|string $columns = ['*'])
     * @method VendorInfo getModel()
     * @method VendorInfo[] getModels(array|string $columns = ['*'])
     * @method _IH_VendorInfo_C|VendorInfo[] hydrate(array $items)
     * @method VendorInfo make(array $attributes = [])
     * @method VendorInfo newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|VendorInfo[]|_IH_VendorInfo_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|VendorInfo[]|_IH_VendorInfo_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method VendorInfo sole(array|string $columns = ['*'])
     * @method VendorInfo updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_VendorInfo_QB extends _BaseBuilder {}

    /**
     * @method Withdrawal|null getOrPut($key, $value)
     * @method Withdrawal|$this shift(int $count = 1)
     * @method Withdrawal|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Withdrawal|$this pop(int $count = 1)
     * @method Withdrawal|null pull($key, \Closure $default = null)
     * @method Withdrawal|null last(callable $callback = null, \Closure $default = null)
     * @method Withdrawal|$this random(callable|int|null $number = null)
     * @method Withdrawal|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Withdrawal|null get($key, \Closure $default = null)
     * @method Withdrawal|null first(callable $callback = null, \Closure $default = null)
     * @method Withdrawal|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Withdrawal|null find($key, $default = null)
     * @method Withdrawal[] all()
     */
    class _IH_Withdrawal_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Withdrawal[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Withdrawal_QB whereId($value)
     * @method _IH_Withdrawal_QB whereCustomerId($value)
     * @method _IH_Withdrawal_QB whereFee($value)
     * @method _IH_Withdrawal_QB whereAmount($value)
     * @method _IH_Withdrawal_QB whereCurrentBalance($value)
     * @method _IH_Withdrawal_QB whereCurrency($value)
     * @method _IH_Withdrawal_QB whereDescription($value)
     * @method _IH_Withdrawal_QB whereBankInfo($value)
     * @method _IH_Withdrawal_QB wherePaymentChannel($value)
     * @method _IH_Withdrawal_QB whereUserId($value)
     * @method _IH_Withdrawal_QB whereStatus($value)
     * @method _IH_Withdrawal_QB whereImages($value)
     * @method _IH_Withdrawal_QB whereCreatedAt($value)
     * @method _IH_Withdrawal_QB whereUpdatedAt($value)
     * @method _IH_Withdrawal_QB whereTransactionId($value)
     * @method Withdrawal baseSole(array|string $columns = ['*'])
     * @method Withdrawal create(array $attributes = [])
     * @method _IH_Withdrawal_C|Withdrawal[] cursor()
     * @method Withdrawal|null|_IH_Withdrawal_C|Withdrawal[] find($id, array|string $columns = ['*'])
     * @method _IH_Withdrawal_C|Withdrawal[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Withdrawal|_IH_Withdrawal_C|Withdrawal[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Withdrawal|_IH_Withdrawal_C|Withdrawal[] findOrFail($id, array|string $columns = ['*'])
     * @method Withdrawal|_IH_Withdrawal_C|Withdrawal[] findOrNew($id, array|string $columns = ['*'])
     * @method Withdrawal first(array|string $columns = ['*'])
     * @method Withdrawal firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Withdrawal firstOrCreate(array $attributes = [], array $values = [])
     * @method Withdrawal firstOrFail(array|string $columns = ['*'])
     * @method Withdrawal firstOrNew(array $attributes = [], array $values = [])
     * @method Withdrawal firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Withdrawal forceCreate(array $attributes)
     * @method _IH_Withdrawal_C|Withdrawal[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Withdrawal_C|Withdrawal[] get(array|string $columns = ['*'])
     * @method Withdrawal getModel()
     * @method Withdrawal[] getModels(array|string $columns = ['*'])
     * @method _IH_Withdrawal_C|Withdrawal[] hydrate(array $items)
     * @method Withdrawal make(array $attributes = [])
     * @method Withdrawal newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Withdrawal[]|_IH_Withdrawal_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Withdrawal[]|_IH_Withdrawal_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Withdrawal sole(array|string $columns = ['*'])
     * @method Withdrawal updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Withdrawal_QB extends _BaseBuilder {}
}
