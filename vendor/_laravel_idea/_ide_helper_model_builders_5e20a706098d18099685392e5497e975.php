<?php //00a9cdf5e0a09ff37fa1effe2cfcb124
/** @noinspection all */

namespace LaravelIdea\Helper\Botble\LanguageAdvanced\Models {

    use Botble\LanguageAdvanced\Models\PageTranslation;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method PageTranslation|null getOrPut($key, $value)
     * @method PageTranslation|$this shift(int $count = 1)
     * @method PageTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PageTranslation|$this pop(int $count = 1)
     * @method PageTranslation|null pull($key, \Closure $default = null)
     * @method PageTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method PageTranslation|$this random(callable|int|null $number = null)
     * @method PageTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PageTranslation|null get($key, \Closure $default = null)
     * @method PageTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method PageTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PageTranslation|null find($key, $default = null)
     * @method PageTranslation[] all()
     */
    class _IH_PageTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PageTranslation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_PageTranslation_QB whereLangCode($value)
     * @method _IH_PageTranslation_QB wherePagesId($value)
     * @method _IH_PageTranslation_QB whereName($value)
     * @method _IH_PageTranslation_QB whereDescription($value)
     * @method _IH_PageTranslation_QB whereContent($value)
     * @method PageTranslation baseSole(array|string $columns = ['*'])
     * @method PageTranslation create(array $attributes = [])
     * @method _IH_PageTranslation_C|PageTranslation[] cursor()
     * @method PageTranslation|null|_IH_PageTranslation_C|PageTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_PageTranslation_C|PageTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PageTranslation|_IH_PageTranslation_C|PageTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PageTranslation|_IH_PageTranslation_C|PageTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method PageTranslation|_IH_PageTranslation_C|PageTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method PageTranslation first(array|string $columns = ['*'])
     * @method PageTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PageTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method PageTranslation firstOrFail(array|string $columns = ['*'])
     * @method PageTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method PageTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PageTranslation forceCreate(array $attributes)
     * @method _IH_PageTranslation_C|PageTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PageTranslation_C|PageTranslation[] get(array|string $columns = ['*'])
     * @method PageTranslation getModel()
     * @method PageTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_PageTranslation_C|PageTranslation[] hydrate(array $items)
     * @method PageTranslation make(array $attributes = [])
     * @method PageTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PageTranslation[]|_IH_PageTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|PageTranslation[]|_IH_PageTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PageTranslation sole(array|string $columns = ['*'])
     * @method PageTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_PageTranslation_QB extends _BaseBuilder {}
}
