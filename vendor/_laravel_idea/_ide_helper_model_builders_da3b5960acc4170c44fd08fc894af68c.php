<?php //2088fb20cd149c8ecf5a9fac0bd2153f
/** @noinspection all */

namespace LaravelIdea\Helper\Botble\SimpleSlider\Models {

    use Botble\SimpleSlider\Models\SimpleSlider;
    use Botble\SimpleSlider\Models\SimpleSliderItem;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method SimpleSliderItem|null getOrPut($key, $value)
     * @method SimpleSliderItem|$this shift(int $count = 1)
     * @method SimpleSliderItem|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method SimpleSliderItem|$this pop(int $count = 1)
     * @method SimpleSliderItem|null pull($key, \Closure $default = null)
     * @method SimpleSliderItem|null last(callable $callback = null, \Closure $default = null)
     * @method SimpleSliderItem|$this random(callable|int|null $number = null)
     * @method SimpleSliderItem|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method SimpleSliderItem|null get($key, \Closure $default = null)
     * @method SimpleSliderItem|null first(callable $callback = null, \Closure $default = null)
     * @method SimpleSliderItem|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method SimpleSliderItem|null find($key, $default = null)
     * @method SimpleSliderItem[] all()
     */
    class _IH_SimpleSliderItem_C extends _BaseCollection {
        /**
         * @param int $size
         * @return SimpleSliderItem[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_SimpleSliderItem_QB whereId($value)
     * @method _IH_SimpleSliderItem_QB whereSimpleSliderId($value)
     * @method _IH_SimpleSliderItem_QB whereTitle($value)
     * @method _IH_SimpleSliderItem_QB whereImage($value)
     * @method _IH_SimpleSliderItem_QB whereLink($value)
     * @method _IH_SimpleSliderItem_QB whereDescription($value)
     * @method _IH_SimpleSliderItem_QB whereOrder($value)
     * @method _IH_SimpleSliderItem_QB whereCreatedAt($value)
     * @method _IH_SimpleSliderItem_QB whereUpdatedAt($value)
     * @method SimpleSliderItem baseSole(array|string $columns = ['*'])
     * @method SimpleSliderItem create(array $attributes = [])
     * @method _IH_SimpleSliderItem_C|SimpleSliderItem[] cursor()
     * @method SimpleSliderItem|null|_IH_SimpleSliderItem_C|SimpleSliderItem[] find($id, array|string $columns = ['*'])
     * @method _IH_SimpleSliderItem_C|SimpleSliderItem[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method SimpleSliderItem|_IH_SimpleSliderItem_C|SimpleSliderItem[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method SimpleSliderItem|_IH_SimpleSliderItem_C|SimpleSliderItem[] findOrFail($id, array|string $columns = ['*'])
     * @method SimpleSliderItem|_IH_SimpleSliderItem_C|SimpleSliderItem[] findOrNew($id, array|string $columns = ['*'])
     * @method SimpleSliderItem first(array|string $columns = ['*'])
     * @method SimpleSliderItem firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method SimpleSliderItem firstOrCreate(array $attributes = [], array $values = [])
     * @method SimpleSliderItem firstOrFail(array|string $columns = ['*'])
     * @method SimpleSliderItem firstOrNew(array $attributes = [], array $values = [])
     * @method SimpleSliderItem firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method SimpleSliderItem forceCreate(array $attributes)
     * @method _IH_SimpleSliderItem_C|SimpleSliderItem[] fromQuery(string $query, array $bindings = [])
     * @method _IH_SimpleSliderItem_C|SimpleSliderItem[] get(array|string $columns = ['*'])
     * @method SimpleSliderItem getModel()
     * @method SimpleSliderItem[] getModels(array|string $columns = ['*'])
     * @method _IH_SimpleSliderItem_C|SimpleSliderItem[] hydrate(array $items)
     * @method SimpleSliderItem make(array $attributes = [])
     * @method SimpleSliderItem newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|SimpleSliderItem[]|_IH_SimpleSliderItem_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|SimpleSliderItem[]|_IH_SimpleSliderItem_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method SimpleSliderItem sole(array|string $columns = ['*'])
     * @method SimpleSliderItem updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_SimpleSliderItem_QB extends _BaseBuilder {}

    /**
     * @method SimpleSlider|null getOrPut($key, $value)
     * @method SimpleSlider|$this shift(int $count = 1)
     * @method SimpleSlider|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method SimpleSlider|$this pop(int $count = 1)
     * @method SimpleSlider|null pull($key, \Closure $default = null)
     * @method SimpleSlider|null last(callable $callback = null, \Closure $default = null)
     * @method SimpleSlider|$this random(callable|int|null $number = null)
     * @method SimpleSlider|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method SimpleSlider|null get($key, \Closure $default = null)
     * @method SimpleSlider|null first(callable $callback = null, \Closure $default = null)
     * @method SimpleSlider|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method SimpleSlider|null find($key, $default = null)
     * @method SimpleSlider[] all()
     */
    class _IH_SimpleSlider_C extends _BaseCollection {
        /**
         * @param int $size
         * @return SimpleSlider[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_SimpleSlider_QB whereId($value)
     * @method _IH_SimpleSlider_QB whereName($value)
     * @method _IH_SimpleSlider_QB whereDescription($value)
     * @method _IH_SimpleSlider_QB whereStatus($value)
     * @method _IH_SimpleSlider_QB whereCreatedAt($value)
     * @method _IH_SimpleSlider_QB whereUpdatedAt($value)
     * @method SimpleSlider baseSole(array|string $columns = ['*'])
     * @method SimpleSlider create(array $attributes = [])
     * @method _IH_SimpleSlider_C|SimpleSlider[] cursor()
     * @method SimpleSlider|null|_IH_SimpleSlider_C|SimpleSlider[] find($id, array|string $columns = ['*'])
     * @method _IH_SimpleSlider_C|SimpleSlider[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method SimpleSlider|_IH_SimpleSlider_C|SimpleSlider[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method SimpleSlider|_IH_SimpleSlider_C|SimpleSlider[] findOrFail($id, array|string $columns = ['*'])
     * @method SimpleSlider|_IH_SimpleSlider_C|SimpleSlider[] findOrNew($id, array|string $columns = ['*'])
     * @method SimpleSlider first(array|string $columns = ['*'])
     * @method SimpleSlider firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method SimpleSlider firstOrCreate(array $attributes = [], array $values = [])
     * @method SimpleSlider firstOrFail(array|string $columns = ['*'])
     * @method SimpleSlider firstOrNew(array $attributes = [], array $values = [])
     * @method SimpleSlider firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method SimpleSlider forceCreate(array $attributes)
     * @method _IH_SimpleSlider_C|SimpleSlider[] fromQuery(string $query, array $bindings = [])
     * @method _IH_SimpleSlider_C|SimpleSlider[] get(array|string $columns = ['*'])
     * @method SimpleSlider getModel()
     * @method SimpleSlider[] getModels(array|string $columns = ['*'])
     * @method _IH_SimpleSlider_C|SimpleSlider[] hydrate(array $items)
     * @method SimpleSlider make(array $attributes = [])
     * @method SimpleSlider newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|SimpleSlider[]|_IH_SimpleSlider_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|SimpleSlider[]|_IH_SimpleSlider_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method SimpleSlider sole(array|string $columns = ['*'])
     * @method SimpleSlider updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_SimpleSlider_QB extends _BaseBuilder {}
}
