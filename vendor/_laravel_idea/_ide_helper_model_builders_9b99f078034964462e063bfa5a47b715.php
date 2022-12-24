<?php //85381220c2fa15368d337e19c3f724b5
/** @noinspection all */

namespace LaravelIdea\Helper\Botble\Payment\Models {

    use Botble\Payment\Models\Payment;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method Payment|null getOrPut($key, $value)
     * @method Payment|$this shift(int $count = 1)
     * @method Payment|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Payment|$this pop(int $count = 1)
     * @method Payment|null pull($key, \Closure $default = null)
     * @method Payment|null last(callable $callback = null, \Closure $default = null)
     * @method Payment|$this random(callable|int|null $number = null)
     * @method Payment|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Payment|null get($key, \Closure $default = null)
     * @method Payment|null first(callable $callback = null, \Closure $default = null)
     * @method Payment|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Payment|null find($key, $default = null)
     * @method Payment[] all()
     */
    class _IH_Payment_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Payment[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Payment_QB whereId($value)
     * @method _IH_Payment_QB whereCurrency($value)
     * @method _IH_Payment_QB whereUserId($value)
     * @method _IH_Payment_QB whereChargeId($value)
     * @method _IH_Payment_QB wherePaymentChannel($value)
     * @method _IH_Payment_QB whereDescription($value)
     * @method _IH_Payment_QB whereAmount($value)
     * @method _IH_Payment_QB whereOrderId($value)
     * @method _IH_Payment_QB whereStatus($value)
     * @method _IH_Payment_QB wherePaymentType($value)
     * @method _IH_Payment_QB whereCustomerId($value)
     * @method _IH_Payment_QB whereRefundedAmount($value)
     * @method _IH_Payment_QB whereRefundNote($value)
     * @method _IH_Payment_QB whereCreatedAt($value)
     * @method _IH_Payment_QB whereUpdatedAt($value)
     * @method _IH_Payment_QB whereCustomerType($value)
     * @method _IH_Payment_QB whereMetadata($value)
     * @method Payment baseSole(array|string $columns = ['*'])
     * @method Payment create(array $attributes = [])
     * @method _IH_Payment_C|Payment[] cursor()
     * @method Payment|null|_IH_Payment_C|Payment[] find($id, array|string $columns = ['*'])
     * @method _IH_Payment_C|Payment[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Payment|_IH_Payment_C|Payment[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Payment|_IH_Payment_C|Payment[] findOrFail($id, array|string $columns = ['*'])
     * @method Payment|_IH_Payment_C|Payment[] findOrNew($id, array|string $columns = ['*'])
     * @method Payment first(array|string $columns = ['*'])
     * @method Payment firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Payment firstOrCreate(array $attributes = [], array $values = [])
     * @method Payment firstOrFail(array|string $columns = ['*'])
     * @method Payment firstOrNew(array $attributes = [], array $values = [])
     * @method Payment firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Payment forceCreate(array $attributes)
     * @method _IH_Payment_C|Payment[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Payment_C|Payment[] get(array|string $columns = ['*'])
     * @method Payment getModel()
     * @method Payment[] getModels(array|string $columns = ['*'])
     * @method _IH_Payment_C|Payment[] hydrate(array $items)
     * @method Payment make(array $attributes = [])
     * @method Payment newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Payment[]|_IH_Payment_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Payment[]|_IH_Payment_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Payment sole(array|string $columns = ['*'])
     * @method Payment updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Payment_QB extends _BaseBuilder {}
}
