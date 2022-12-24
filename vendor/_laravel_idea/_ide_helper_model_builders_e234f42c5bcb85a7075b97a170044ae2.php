<?php //e5df50cd7c224993e50ddba0683953c5
/** @noinspection all */

namespace LaravelIdea\Helper\Botble\Slug\Models {

    use Botble\Slug\Models\Slug;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method Slug|null getOrPut($key, $value)
     * @method Slug|$this shift(int $count = 1)
     * @method Slug|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Slug|$this pop(int $count = 1)
     * @method Slug|null pull($key, \Closure $default = null)
     * @method Slug|null last(callable $callback = null, \Closure $default = null)
     * @method Slug|$this random(callable|int|null $number = null)
     * @method Slug|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Slug|null get($key, \Closure $default = null)
     * @method Slug|null first(callable $callback = null, \Closure $default = null)
     * @method Slug|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Slug|null find($key, $default = null)
     * @method Slug[] all()
     */
    class _IH_Slug_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Slug[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Slug_QB whereId($value)
     * @method _IH_Slug_QB whereReferenceId($value)
     * @method _IH_Slug_QB whereReferenceType($value)
     * @method _IH_Slug_QB wherePrefix($value)
     * @method _IH_Slug_QB whereCreatedAt($value)
     * @method _IH_Slug_QB whereUpdatedAt($value)
     * @method Slug baseSole(array|string $columns = ['*'])
     * @method Slug create(array $attributes = [])
     * @method _IH_Slug_C|Slug[] cursor()
     * @method Slug|null|_IH_Slug_C|Slug[] find($id, array|string $columns = ['*'])
     * @method _IH_Slug_C|Slug[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Slug|_IH_Slug_C|Slug[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Slug|_IH_Slug_C|Slug[] findOrFail($id, array|string $columns = ['*'])
     * @method Slug|_IH_Slug_C|Slug[] findOrNew($id, array|string $columns = ['*'])
     * @method Slug first(array|string $columns = ['*'])
     * @method Slug firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Slug firstOrCreate(array $attributes = [], array $values = [])
     * @method Slug firstOrFail(array|string $columns = ['*'])
     * @method Slug firstOrNew(array $attributes = [], array $values = [])
     * @method Slug firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Slug forceCreate(array $attributes)
     * @method _IH_Slug_C|Slug[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Slug_C|Slug[] get(array|string $columns = ['*'])
     * @method Slug getModel()
     * @method Slug[] getModels(array|string $columns = ['*'])
     * @method _IH_Slug_C|Slug[] hydrate(array $items)
     * @method Slug make(array $attributes = [])
     * @method Slug newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Slug[]|_IH_Slug_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Slug[]|_IH_Slug_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Slug sole(array|string $columns = ['*'])
     * @method Slug updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Slug_QB extends _BaseBuilder {}
}
