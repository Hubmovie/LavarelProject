<?php //d0c1fc34f72a91d2acadf5f56266d69c
/** @noinspection all */

namespace LaravelIdea\Helper\Botble\Widget\Models {

    use Botble\Widget\Models\Widget;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method Widget|null getOrPut($key, $value)
     * @method Widget|$this shift(int $count = 1)
     * @method Widget|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Widget|$this pop(int $count = 1)
     * @method Widget|null pull($key, \Closure $default = null)
     * @method Widget|null last(callable $callback = null, \Closure $default = null)
     * @method Widget|$this random(callable|int|null $number = null)
     * @method Widget|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Widget|null get($key, \Closure $default = null)
     * @method Widget|null first(callable $callback = null, \Closure $default = null)
     * @method Widget|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Widget|null find($key, $default = null)
     * @method Widget[] all()
     */
    class _IH_Widget_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Widget[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Widget_QB whereId($value)
     * @method _IH_Widget_QB whereWidgetId($value)
     * @method _IH_Widget_QB whereSidebarId($value)
     * @method _IH_Widget_QB whereTheme($value)
     * @method _IH_Widget_QB wherePosition($value)
     * @method _IH_Widget_QB whereData($value)
     * @method _IH_Widget_QB whereCreatedAt($value)
     * @method _IH_Widget_QB whereUpdatedAt($value)
     * @method Widget baseSole(array|string $columns = ['*'])
     * @method Widget create(array $attributes = [])
     * @method _IH_Widget_C|Widget[] cursor()
     * @method Widget|null|_IH_Widget_C|Widget[] find($id, array|string $columns = ['*'])
     * @method _IH_Widget_C|Widget[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Widget|_IH_Widget_C|Widget[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Widget|_IH_Widget_C|Widget[] findOrFail($id, array|string $columns = ['*'])
     * @method Widget|_IH_Widget_C|Widget[] findOrNew($id, array|string $columns = ['*'])
     * @method Widget first(array|string $columns = ['*'])
     * @method Widget firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Widget firstOrCreate(array $attributes = [], array $values = [])
     * @method Widget firstOrFail(array|string $columns = ['*'])
     * @method Widget firstOrNew(array $attributes = [], array $values = [])
     * @method Widget firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Widget forceCreate(array $attributes)
     * @method _IH_Widget_C|Widget[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Widget_C|Widget[] get(array|string $columns = ['*'])
     * @method Widget getModel()
     * @method Widget[] getModels(array|string $columns = ['*'])
     * @method _IH_Widget_C|Widget[] hydrate(array $items)
     * @method Widget make(array $attributes = [])
     * @method Widget newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Widget[]|_IH_Widget_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Widget[]|_IH_Widget_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Widget sole(array|string $columns = ['*'])
     * @method Widget updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Widget_QB extends _BaseBuilder {}
}
