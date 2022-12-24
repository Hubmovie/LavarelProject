<?php //d5867bc31d6764ba8f18d6543c30e8fe
/** @noinspection all */

namespace LaravelIdea\Helper\Botble\Page\Models {

    use Botble\Page\Models\Page;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method Page|null getOrPut($key, $value)
     * @method Page|$this shift(int $count = 1)
     * @method Page|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Page|$this pop(int $count = 1)
     * @method Page|null pull($key, \Closure $default = null)
     * @method Page|null last(callable $callback = null, \Closure $default = null)
     * @method Page|$this random(callable|int|null $number = null)
     * @method Page|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Page|null get($key, \Closure $default = null)
     * @method Page|null first(callable $callback = null, \Closure $default = null)
     * @method Page|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Page|null find($key, $default = null)
     * @method Page[] all()
     */
    class _IH_Page_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Page[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Page_QB whereId($value)
     * @method _IH_Page_QB whereName($value)
     * @method _IH_Page_QB whereContent($value)
     * @method _IH_Page_QB whereUserId($value)
     * @method _IH_Page_QB whereImage($value)
     * @method _IH_Page_QB whereTemplate($value)
     * @method _IH_Page_QB whereDescription($value)
     * @method _IH_Page_QB whereStatus($value)
     * @method _IH_Page_QB whereCreatedAt($value)
     * @method _IH_Page_QB whereUpdatedAt($value)
     * @method Page baseSole(array|string $columns = ['*'])
     * @method Page create(array $attributes = [])
     * @method _IH_Page_C|Page[] cursor()
     * @method Page|null|_IH_Page_C|Page[] find($id, array|string $columns = ['*'])
     * @method _IH_Page_C|Page[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Page|_IH_Page_C|Page[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Page|_IH_Page_C|Page[] findOrFail($id, array|string $columns = ['*'])
     * @method Page|_IH_Page_C|Page[] findOrNew($id, array|string $columns = ['*'])
     * @method Page first(array|string $columns = ['*'])
     * @method Page firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Page firstOrCreate(array $attributes = [], array $values = [])
     * @method Page firstOrFail(array|string $columns = ['*'])
     * @method Page firstOrNew(array $attributes = [], array $values = [])
     * @method Page firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Page forceCreate(array $attributes)
     * @method _IH_Page_C|Page[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Page_C|Page[] get(array|string $columns = ['*'])
     * @method Page getModel()
     * @method Page[] getModels(array|string $columns = ['*'])
     * @method _IH_Page_C|Page[] hydrate(array $items)
     * @method Page make(array $attributes = [])
     * @method Page newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Page[]|_IH_Page_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Page[]|_IH_Page_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Page sole(array|string $columns = ['*'])
     * @method Page updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Page_QB extends _BaseBuilder {}
}
