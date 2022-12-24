<?php //797d5dc46d3b024269e36841fddb5420
/** @noinspection all */

namespace LaravelIdea\Helper\Botble\Dashboard\Models {

    use Botble\Dashboard\Models\DashboardWidget;
    use Botble\Dashboard\Models\DashboardWidgetSetting;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method DashboardWidgetSetting|null getOrPut($key, $value)
     * @method DashboardWidgetSetting|$this shift(int $count = 1)
     * @method DashboardWidgetSetting|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method DashboardWidgetSetting|$this pop(int $count = 1)
     * @method DashboardWidgetSetting|null pull($key, \Closure $default = null)
     * @method DashboardWidgetSetting|null last(callable $callback = null, \Closure $default = null)
     * @method DashboardWidgetSetting|$this random(callable|int|null $number = null)
     * @method DashboardWidgetSetting|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method DashboardWidgetSetting|null get($key, \Closure $default = null)
     * @method DashboardWidgetSetting|null first(callable $callback = null, \Closure $default = null)
     * @method DashboardWidgetSetting|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method DashboardWidgetSetting|null find($key, $default = null)
     * @method DashboardWidgetSetting[] all()
     */
    class _IH_DashboardWidgetSetting_C extends _BaseCollection {
        /**
         * @param int $size
         * @return DashboardWidgetSetting[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_DashboardWidgetSetting_QB whereId($value)
     * @method _IH_DashboardWidgetSetting_QB whereSettings($value)
     * @method _IH_DashboardWidgetSetting_QB whereUserId($value)
     * @method _IH_DashboardWidgetSetting_QB whereWidgetId($value)
     * @method _IH_DashboardWidgetSetting_QB whereOrder($value)
     * @method _IH_DashboardWidgetSetting_QB whereStatus($value)
     * @method _IH_DashboardWidgetSetting_QB whereCreatedAt($value)
     * @method _IH_DashboardWidgetSetting_QB whereUpdatedAt($value)
     * @method DashboardWidgetSetting baseSole(array|string $columns = ['*'])
     * @method DashboardWidgetSetting create(array $attributes = [])
     * @method _IH_DashboardWidgetSetting_C|DashboardWidgetSetting[] cursor()
     * @method DashboardWidgetSetting|null|_IH_DashboardWidgetSetting_C|DashboardWidgetSetting[] find($id, array|string $columns = ['*'])
     * @method _IH_DashboardWidgetSetting_C|DashboardWidgetSetting[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method DashboardWidgetSetting|_IH_DashboardWidgetSetting_C|DashboardWidgetSetting[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method DashboardWidgetSetting|_IH_DashboardWidgetSetting_C|DashboardWidgetSetting[] findOrFail($id, array|string $columns = ['*'])
     * @method DashboardWidgetSetting|_IH_DashboardWidgetSetting_C|DashboardWidgetSetting[] findOrNew($id, array|string $columns = ['*'])
     * @method DashboardWidgetSetting first(array|string $columns = ['*'])
     * @method DashboardWidgetSetting firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method DashboardWidgetSetting firstOrCreate(array $attributes = [], array $values = [])
     * @method DashboardWidgetSetting firstOrFail(array|string $columns = ['*'])
     * @method DashboardWidgetSetting firstOrNew(array $attributes = [], array $values = [])
     * @method DashboardWidgetSetting firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method DashboardWidgetSetting forceCreate(array $attributes)
     * @method _IH_DashboardWidgetSetting_C|DashboardWidgetSetting[] fromQuery(string $query, array $bindings = [])
     * @method _IH_DashboardWidgetSetting_C|DashboardWidgetSetting[] get(array|string $columns = ['*'])
     * @method DashboardWidgetSetting getModel()
     * @method DashboardWidgetSetting[] getModels(array|string $columns = ['*'])
     * @method _IH_DashboardWidgetSetting_C|DashboardWidgetSetting[] hydrate(array $items)
     * @method DashboardWidgetSetting make(array $attributes = [])
     * @method DashboardWidgetSetting newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|DashboardWidgetSetting[]|_IH_DashboardWidgetSetting_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|DashboardWidgetSetting[]|_IH_DashboardWidgetSetting_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method DashboardWidgetSetting sole(array|string $columns = ['*'])
     * @method DashboardWidgetSetting updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_DashboardWidgetSetting_QB extends _BaseBuilder {}

    /**
     * @method DashboardWidget|null getOrPut($key, $value)
     * @method DashboardWidget|$this shift(int $count = 1)
     * @method DashboardWidget|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method DashboardWidget|$this pop(int $count = 1)
     * @method DashboardWidget|null pull($key, \Closure $default = null)
     * @method DashboardWidget|null last(callable $callback = null, \Closure $default = null)
     * @method DashboardWidget|$this random(callable|int|null $number = null)
     * @method DashboardWidget|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method DashboardWidget|null get($key, \Closure $default = null)
     * @method DashboardWidget|null first(callable $callback = null, \Closure $default = null)
     * @method DashboardWidget|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method DashboardWidget|null find($key, $default = null)
     * @method DashboardWidget[] all()
     */
    class _IH_DashboardWidget_C extends _BaseCollection {
        /**
         * @param int $size
         * @return DashboardWidget[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_DashboardWidget_QB whereId($value)
     * @method _IH_DashboardWidget_QB whereName($value)
     * @method _IH_DashboardWidget_QB whereCreatedAt($value)
     * @method _IH_DashboardWidget_QB whereUpdatedAt($value)
     * @method DashboardWidget baseSole(array|string $columns = ['*'])
     * @method DashboardWidget create(array $attributes = [])
     * @method _IH_DashboardWidget_C|DashboardWidget[] cursor()
     * @method DashboardWidget|null|_IH_DashboardWidget_C|DashboardWidget[] find($id, array|string $columns = ['*'])
     * @method _IH_DashboardWidget_C|DashboardWidget[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method DashboardWidget|_IH_DashboardWidget_C|DashboardWidget[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method DashboardWidget|_IH_DashboardWidget_C|DashboardWidget[] findOrFail($id, array|string $columns = ['*'])
     * @method DashboardWidget|_IH_DashboardWidget_C|DashboardWidget[] findOrNew($id, array|string $columns = ['*'])
     * @method DashboardWidget first(array|string $columns = ['*'])
     * @method DashboardWidget firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method DashboardWidget firstOrCreate(array $attributes = [], array $values = [])
     * @method DashboardWidget firstOrFail(array|string $columns = ['*'])
     * @method DashboardWidget firstOrNew(array $attributes = [], array $values = [])
     * @method DashboardWidget firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method DashboardWidget forceCreate(array $attributes)
     * @method _IH_DashboardWidget_C|DashboardWidget[] fromQuery(string $query, array $bindings = [])
     * @method _IH_DashboardWidget_C|DashboardWidget[] get(array|string $columns = ['*'])
     * @method DashboardWidget getModel()
     * @method DashboardWidget[] getModels(array|string $columns = ['*'])
     * @method _IH_DashboardWidget_C|DashboardWidget[] hydrate(array $items)
     * @method DashboardWidget make(array $attributes = [])
     * @method DashboardWidget newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|DashboardWidget[]|_IH_DashboardWidget_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|DashboardWidget[]|_IH_DashboardWidget_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method DashboardWidget sole(array|string $columns = ['*'])
     * @method DashboardWidget updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_DashboardWidget_QB extends _BaseBuilder {}
}
