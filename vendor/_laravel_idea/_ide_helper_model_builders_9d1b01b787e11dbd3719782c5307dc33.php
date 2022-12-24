<?php //e8aaf6cc5c24a0c7f07f2a9db7b70872
/** @noinspection all */

namespace LaravelIdea\Helper\Botble\Newsletter\Models {

    use Botble\Newsletter\Models\Newsletter;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method Newsletter|null getOrPut($key, $value)
     * @method Newsletter|$this shift(int $count = 1)
     * @method Newsletter|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Newsletter|$this pop(int $count = 1)
     * @method Newsletter|null pull($key, \Closure $default = null)
     * @method Newsletter|null last(callable $callback = null, \Closure $default = null)
     * @method Newsletter|$this random(callable|int|null $number = null)
     * @method Newsletter|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Newsletter|null get($key, \Closure $default = null)
     * @method Newsletter|null first(callable $callback = null, \Closure $default = null)
     * @method Newsletter|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Newsletter|null find($key, $default = null)
     * @method Newsletter[] all()
     */
    class _IH_Newsletter_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Newsletter[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Newsletter_QB whereId($value)
     * @method _IH_Newsletter_QB whereEmail($value)
     * @method _IH_Newsletter_QB whereName($value)
     * @method _IH_Newsletter_QB whereStatus($value)
     * @method _IH_Newsletter_QB whereCreatedAt($value)
     * @method _IH_Newsletter_QB whereUpdatedAt($value)
     * @method Newsletter baseSole(array|string $columns = ['*'])
     * @method Newsletter create(array $attributes = [])
     * @method _IH_Newsletter_C|Newsletter[] cursor()
     * @method Newsletter|null|_IH_Newsletter_C|Newsletter[] find($id, array|string $columns = ['*'])
     * @method _IH_Newsletter_C|Newsletter[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Newsletter|_IH_Newsletter_C|Newsletter[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Newsletter|_IH_Newsletter_C|Newsletter[] findOrFail($id, array|string $columns = ['*'])
     * @method Newsletter|_IH_Newsletter_C|Newsletter[] findOrNew($id, array|string $columns = ['*'])
     * @method Newsletter first(array|string $columns = ['*'])
     * @method Newsletter firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Newsletter firstOrCreate(array $attributes = [], array $values = [])
     * @method Newsletter firstOrFail(array|string $columns = ['*'])
     * @method Newsletter firstOrNew(array $attributes = [], array $values = [])
     * @method Newsletter firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Newsletter forceCreate(array $attributes)
     * @method _IH_Newsletter_C|Newsletter[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Newsletter_C|Newsletter[] get(array|string $columns = ['*'])
     * @method Newsletter getModel()
     * @method Newsletter[] getModels(array|string $columns = ['*'])
     * @method _IH_Newsletter_C|Newsletter[] hydrate(array $items)
     * @method Newsletter make(array $attributes = [])
     * @method Newsletter newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Newsletter[]|_IH_Newsletter_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Newsletter[]|_IH_Newsletter_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Newsletter sole(array|string $columns = ['*'])
     * @method Newsletter updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Newsletter_QB extends _BaseBuilder {}
}
