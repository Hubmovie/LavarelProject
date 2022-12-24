<?php //18f5c453c7edc01841392bde087475f6
/** @noinspection all */

namespace LaravelIdea\Helper\Botble\Menu\Models {

    use Botble\Menu\Models\Menu;
    use Botble\Menu\Models\MenuLocation;
    use Botble\Menu\Models\MenuNode;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method MenuLocation|null getOrPut($key, $value)
     * @method MenuLocation|$this shift(int $count = 1)
     * @method MenuLocation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method MenuLocation|$this pop(int $count = 1)
     * @method MenuLocation|null pull($key, \Closure $default = null)
     * @method MenuLocation|null last(callable $callback = null, \Closure $default = null)
     * @method MenuLocation|$this random(callable|int|null $number = null)
     * @method MenuLocation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method MenuLocation|null get($key, \Closure $default = null)
     * @method MenuLocation|null first(callable $callback = null, \Closure $default = null)
     * @method MenuLocation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method MenuLocation|null find($key, $default = null)
     * @method MenuLocation[] all()
     */
    class _IH_MenuLocation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return MenuLocation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_MenuLocation_QB whereId($value)
     * @method _IH_MenuLocation_QB whereMenuId($value)
     * @method _IH_MenuLocation_QB whereLocation($value)
     * @method _IH_MenuLocation_QB whereCreatedAt($value)
     * @method _IH_MenuLocation_QB whereUpdatedAt($value)
     * @method MenuLocation baseSole(array|string $columns = ['*'])
     * @method MenuLocation create(array $attributes = [])
     * @method _IH_MenuLocation_C|MenuLocation[] cursor()
     * @method MenuLocation|null|_IH_MenuLocation_C|MenuLocation[] find($id, array|string $columns = ['*'])
     * @method _IH_MenuLocation_C|MenuLocation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method MenuLocation|_IH_MenuLocation_C|MenuLocation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method MenuLocation|_IH_MenuLocation_C|MenuLocation[] findOrFail($id, array|string $columns = ['*'])
     * @method MenuLocation|_IH_MenuLocation_C|MenuLocation[] findOrNew($id, array|string $columns = ['*'])
     * @method MenuLocation first(array|string $columns = ['*'])
     * @method MenuLocation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method MenuLocation firstOrCreate(array $attributes = [], array $values = [])
     * @method MenuLocation firstOrFail(array|string $columns = ['*'])
     * @method MenuLocation firstOrNew(array $attributes = [], array $values = [])
     * @method MenuLocation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method MenuLocation forceCreate(array $attributes)
     * @method _IH_MenuLocation_C|MenuLocation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_MenuLocation_C|MenuLocation[] get(array|string $columns = ['*'])
     * @method MenuLocation getModel()
     * @method MenuLocation[] getModels(array|string $columns = ['*'])
     * @method _IH_MenuLocation_C|MenuLocation[] hydrate(array $items)
     * @method MenuLocation make(array $attributes = [])
     * @method MenuLocation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|MenuLocation[]|_IH_MenuLocation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|MenuLocation[]|_IH_MenuLocation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method MenuLocation sole(array|string $columns = ['*'])
     * @method MenuLocation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_MenuLocation_QB extends _BaseBuilder {}

    /**
     * @method MenuNode|null getOrPut($key, $value)
     * @method MenuNode|$this shift(int $count = 1)
     * @method MenuNode|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method MenuNode|$this pop(int $count = 1)
     * @method MenuNode|null pull($key, \Closure $default = null)
     * @method MenuNode|null last(callable $callback = null, \Closure $default = null)
     * @method MenuNode|$this random(callable|int|null $number = null)
     * @method MenuNode|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method MenuNode|null get($key, \Closure $default = null)
     * @method MenuNode|null first(callable $callback = null, \Closure $default = null)
     * @method MenuNode|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method MenuNode|null find($key, $default = null)
     * @method MenuNode[] all()
     */
    class _IH_MenuNode_C extends _BaseCollection {
        /**
         * @param int $size
         * @return MenuNode[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_MenuNode_QB whereId($value)
     * @method _IH_MenuNode_QB whereMenuId($value)
     * @method _IH_MenuNode_QB whereParentId($value)
     * @method _IH_MenuNode_QB whereReferenceId($value)
     * @method _IH_MenuNode_QB whereReferenceType($value)
     * @method _IH_MenuNode_QB whereUrl($value)
     * @method _IH_MenuNode_QB whereIconFont($value)
     * @method _IH_MenuNode_QB wherePosition($value)
     * @method _IH_MenuNode_QB whereTitle($value)
     * @method _IH_MenuNode_QB whereCssClass($value)
     * @method _IH_MenuNode_QB whereTarget($value)
     * @method _IH_MenuNode_QB whereHasChild($value)
     * @method _IH_MenuNode_QB whereCreatedAt($value)
     * @method _IH_MenuNode_QB whereUpdatedAt($value)
     * @method MenuNode baseSole(array|string $columns = ['*'])
     * @method MenuNode create(array $attributes = [])
     * @method _IH_MenuNode_C|MenuNode[] cursor()
     * @method MenuNode|null|_IH_MenuNode_C|MenuNode[] find($id, array|string $columns = ['*'])
     * @method _IH_MenuNode_C|MenuNode[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method MenuNode|_IH_MenuNode_C|MenuNode[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method MenuNode|_IH_MenuNode_C|MenuNode[] findOrFail($id, array|string $columns = ['*'])
     * @method MenuNode|_IH_MenuNode_C|MenuNode[] findOrNew($id, array|string $columns = ['*'])
     * @method MenuNode first(array|string $columns = ['*'])
     * @method MenuNode firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method MenuNode firstOrCreate(array $attributes = [], array $values = [])
     * @method MenuNode firstOrFail(array|string $columns = ['*'])
     * @method MenuNode firstOrNew(array $attributes = [], array $values = [])
     * @method MenuNode firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method MenuNode forceCreate(array $attributes)
     * @method _IH_MenuNode_C|MenuNode[] fromQuery(string $query, array $bindings = [])
     * @method _IH_MenuNode_C|MenuNode[] get(array|string $columns = ['*'])
     * @method MenuNode getModel()
     * @method MenuNode[] getModels(array|string $columns = ['*'])
     * @method _IH_MenuNode_C|MenuNode[] hydrate(array $items)
     * @method MenuNode make(array $attributes = [])
     * @method MenuNode newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|MenuNode[]|_IH_MenuNode_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|MenuNode[]|_IH_MenuNode_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method MenuNode sole(array|string $columns = ['*'])
     * @method MenuNode updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_MenuNode_QB extends _BaseBuilder {}

    /**
     * @method Menu|null getOrPut($key, $value)
     * @method Menu|$this shift(int $count = 1)
     * @method Menu|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Menu|$this pop(int $count = 1)
     * @method Menu|null pull($key, \Closure $default = null)
     * @method Menu|null last(callable $callback = null, \Closure $default = null)
     * @method Menu|$this random(callable|int|null $number = null)
     * @method Menu|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Menu|null get($key, \Closure $default = null)
     * @method Menu|null first(callable $callback = null, \Closure $default = null)
     * @method Menu|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Menu|null find($key, $default = null)
     * @method Menu[] all()
     */
    class _IH_Menu_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Menu[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Menu_QB whereId($value)
     * @method _IH_Menu_QB whereName($value)
     * @method _IH_Menu_QB whereSlug($value)
     * @method _IH_Menu_QB whereStatus($value)
     * @method _IH_Menu_QB whereCreatedAt($value)
     * @method _IH_Menu_QB whereUpdatedAt($value)
     * @method Menu baseSole(array|string $columns = ['*'])
     * @method Menu create(array $attributes = [])
     * @method _IH_Menu_C|Menu[] cursor()
     * @method Menu|null|_IH_Menu_C|Menu[] find($id, array|string $columns = ['*'])
     * @method _IH_Menu_C|Menu[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Menu|_IH_Menu_C|Menu[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Menu|_IH_Menu_C|Menu[] findOrFail($id, array|string $columns = ['*'])
     * @method Menu|_IH_Menu_C|Menu[] findOrNew($id, array|string $columns = ['*'])
     * @method Menu first(array|string $columns = ['*'])
     * @method Menu firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Menu firstOrCreate(array $attributes = [], array $values = [])
     * @method Menu firstOrFail(array|string $columns = ['*'])
     * @method Menu firstOrNew(array $attributes = [], array $values = [])
     * @method Menu firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Menu forceCreate(array $attributes)
     * @method _IH_Menu_C|Menu[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Menu_C|Menu[] get(array|string $columns = ['*'])
     * @method Menu getModel()
     * @method Menu[] getModels(array|string $columns = ['*'])
     * @method _IH_Menu_C|Menu[] hydrate(array $items)
     * @method Menu make(array $attributes = [])
     * @method Menu newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Menu[]|_IH_Menu_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Menu[]|_IH_Menu_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Menu sole(array|string $columns = ['*'])
     * @method Menu updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Menu_QB extends _BaseBuilder {}
}
