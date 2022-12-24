<?php //8d8fc0288df969b919d0838d0ced8379
/** @noinspection all */

namespace LaravelIdea\Helper\Botble\Revision {

    use Botble\Revision\Revision;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method Revision|null getOrPut($key, $value)
     * @method Revision|$this shift(int $count = 1)
     * @method Revision|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Revision|$this pop(int $count = 1)
     * @method Revision|null pull($key, \Closure $default = null)
     * @method Revision|null last(callable $callback = null, \Closure $default = null)
     * @method Revision|$this random(callable|int|null $number = null)
     * @method Revision|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Revision|null get($key, \Closure $default = null)
     * @method Revision|null first(callable $callback = null, \Closure $default = null)
     * @method Revision|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Revision|null find($key, $default = null)
     * @method Revision[] all()
     */
    class _IH_Revision_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Revision[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Revision_QB whereId($value)
     * @method _IH_Revision_QB whereRevisionableType($value)
     * @method _IH_Revision_QB whereRevisionableId($value)
     * @method _IH_Revision_QB whereUserId($value)
     * @method _IH_Revision_QB whereOldValue($value)
     * @method _IH_Revision_QB whereNewValue($value)
     * @method _IH_Revision_QB whereCreatedAt($value)
     * @method _IH_Revision_QB whereUpdatedAt($value)
     * @method Revision baseSole(array|string $columns = ['*'])
     * @method Revision create(array $attributes = [])
     * @method _IH_Revision_C|Revision[] cursor()
     * @method Revision|null|_IH_Revision_C|Revision[] find($id, array|string $columns = ['*'])
     * @method _IH_Revision_C|Revision[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Revision|_IH_Revision_C|Revision[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Revision|_IH_Revision_C|Revision[] findOrFail($id, array|string $columns = ['*'])
     * @method Revision|_IH_Revision_C|Revision[] findOrNew($id, array|string $columns = ['*'])
     * @method Revision first(array|string $columns = ['*'])
     * @method Revision firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Revision firstOrCreate(array $attributes = [], array $values = [])
     * @method Revision firstOrFail(array|string $columns = ['*'])
     * @method Revision firstOrNew(array $attributes = [], array $values = [])
     * @method Revision firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Revision forceCreate(array $attributes)
     * @method _IH_Revision_C|Revision[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Revision_C|Revision[] get(array|string $columns = ['*'])
     * @method Revision getModel()
     * @method Revision[] getModels(array|string $columns = ['*'])
     * @method _IH_Revision_C|Revision[] hydrate(array $items)
     * @method Revision make(array $attributes = [])
     * @method Revision newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Revision[]|_IH_Revision_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Revision[]|_IH_Revision_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Revision sole(array|string $columns = ['*'])
     * @method Revision updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Revision_QB extends _BaseBuilder {}
}
