<?php //4b70a40ac692b67ddc4c894720e39c95
/** @noinspection all */

namespace LaravelIdea\Helper\Botble\Translation\Models {

    use Botble\Translation\Models\Translation;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method Translation|null getOrPut($key, $value)
     * @method Translation|$this shift(int $count = 1)
     * @method Translation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Translation|$this pop(int $count = 1)
     * @method Translation|null pull($key, \Closure $default = null)
     * @method Translation|null last(callable $callback = null, \Closure $default = null)
     * @method Translation|$this random(callable|int|null $number = null)
     * @method Translation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Translation|null get($key, \Closure $default = null)
     * @method Translation|null first(callable $callback = null, \Closure $default = null)
     * @method Translation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Translation|null find($key, $default = null)
     * @method Translation[] all()
     */
    class _IH_Translation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Translation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Translation_QB whereId($value)
     * @method _IH_Translation_QB whereStatus($value)
     * @method _IH_Translation_QB whereLocale($value)
     * @method _IH_Translation_QB whereGroup($value)
     * @method _IH_Translation_QB whereValue($value)
     * @method _IH_Translation_QB whereCreatedAt($value)
     * @method _IH_Translation_QB whereUpdatedAt($value)
     * @method Translation baseSole(array|string $columns = ['*'])
     * @method Translation create(array $attributes = [])
     * @method _IH_Translation_C|Translation[] cursor()
     * @method Translation|null|_IH_Translation_C|Translation[] find($id, array|string $columns = ['*'])
     * @method _IH_Translation_C|Translation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Translation|_IH_Translation_C|Translation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Translation|_IH_Translation_C|Translation[] findOrFail($id, array|string $columns = ['*'])
     * @method Translation|_IH_Translation_C|Translation[] findOrNew($id, array|string $columns = ['*'])
     * @method Translation first(array|string $columns = ['*'])
     * @method Translation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Translation firstOrCreate(array $attributes = [], array $values = [])
     * @method Translation firstOrFail(array|string $columns = ['*'])
     * @method Translation firstOrNew(array $attributes = [], array $values = [])
     * @method Translation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Translation forceCreate(array $attributes)
     * @method _IH_Translation_C|Translation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Translation_C|Translation[] get(array|string $columns = ['*'])
     * @method Translation getModel()
     * @method Translation[] getModels(array|string $columns = ['*'])
     * @method _IH_Translation_C|Translation[] hydrate(array $items)
     * @method Translation make(array $attributes = [])
     * @method Translation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Translation[]|_IH_Translation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Translation[]|_IH_Translation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Translation sole(array|string $columns = ['*'])
     * @method Translation updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Translation_QB ofTranslatedGroup($group)
     * @method _IH_Translation_QB orderByGroupKeys($ordered)
     * @method _IH_Translation_QB selectDistinctGroup()
     */
    class _IH_Translation_QB extends _BaseBuilder {}
}
