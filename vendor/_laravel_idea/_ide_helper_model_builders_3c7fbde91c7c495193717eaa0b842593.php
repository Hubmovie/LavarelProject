<?php //8e45d8e249a18cd627607faf9a353a22
/** @noinspection all */

namespace LaravelIdea\Helper\Botble\Base\Models {

    use Botble\Base\Models\BaseModel;
    use Botble\Base\Models\MetaBox;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method BaseModel|null getOrPut($key, $value)
     * @method BaseModel|$this shift(int $count = 1)
     * @method BaseModel|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method BaseModel|$this pop(int $count = 1)
     * @method BaseModel|null pull($key, \Closure $default = null)
     * @method BaseModel|null last(callable $callback = null, \Closure $default = null)
     * @method BaseModel|$this random(callable|int|null $number = null)
     * @method BaseModel|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method BaseModel|null get($key, \Closure $default = null)
     * @method BaseModel|null first(callable $callback = null, \Closure $default = null)
     * @method BaseModel|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method BaseModel|null find($key, $default = null)
     * @method BaseModel[] all()
     */
    class _IH_BaseModel_C extends _BaseCollection {
        /**
         * @param int $size
         * @return BaseModel[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method MetaBox|null getOrPut($key, $value)
     * @method MetaBox|$this shift(int $count = 1)
     * @method MetaBox|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method MetaBox|$this pop(int $count = 1)
     * @method MetaBox|null pull($key, \Closure $default = null)
     * @method MetaBox|null last(callable $callback = null, \Closure $default = null)
     * @method MetaBox|$this random(callable|int|null $number = null)
     * @method MetaBox|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method MetaBox|null get($key, \Closure $default = null)
     * @method MetaBox|null first(callable $callback = null, \Closure $default = null)
     * @method MetaBox|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method MetaBox|null find($key, $default = null)
     * @method MetaBox[] all()
     */
    class _IH_MetaBox_C extends _BaseCollection {
        /**
         * @param int $size
         * @return MetaBox[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_MetaBox_QB whereId($value)
     * @method _IH_MetaBox_QB whereMetaKey($value)
     * @method _IH_MetaBox_QB whereMetaValue($value)
     * @method _IH_MetaBox_QB whereReferenceId($value)
     * @method _IH_MetaBox_QB whereReferenceType($value)
     * @method _IH_MetaBox_QB whereCreatedAt($value)
     * @method _IH_MetaBox_QB whereUpdatedAt($value)
     * @method MetaBox baseSole(array|string $columns = ['*'])
     * @method MetaBox create(array $attributes = [])
     * @method _IH_MetaBox_C|MetaBox[] cursor()
     * @method MetaBox|null|_IH_MetaBox_C|MetaBox[] find($id, array|string $columns = ['*'])
     * @method _IH_MetaBox_C|MetaBox[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method MetaBox|_IH_MetaBox_C|MetaBox[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method MetaBox|_IH_MetaBox_C|MetaBox[] findOrFail($id, array|string $columns = ['*'])
     * @method MetaBox|_IH_MetaBox_C|MetaBox[] findOrNew($id, array|string $columns = ['*'])
     * @method MetaBox first(array|string $columns = ['*'])
     * @method MetaBox firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method MetaBox firstOrCreate(array $attributes = [], array $values = [])
     * @method MetaBox firstOrFail(array|string $columns = ['*'])
     * @method MetaBox firstOrNew(array $attributes = [], array $values = [])
     * @method MetaBox firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method MetaBox forceCreate(array $attributes)
     * @method _IH_MetaBox_C|MetaBox[] fromQuery(string $query, array $bindings = [])
     * @method _IH_MetaBox_C|MetaBox[] get(array|string $columns = ['*'])
     * @method MetaBox getModel()
     * @method MetaBox[] getModels(array|string $columns = ['*'])
     * @method _IH_MetaBox_C|MetaBox[] hydrate(array $items)
     * @method MetaBox make(array $attributes = [])
     * @method MetaBox newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|MetaBox[]|_IH_MetaBox_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|MetaBox[]|_IH_MetaBox_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method MetaBox sole(array|string $columns = ['*'])
     * @method MetaBox updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_MetaBox_QB extends _BaseBuilder {}
}
