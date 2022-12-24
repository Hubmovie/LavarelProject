<?php //afea14de47faa320bd8b6df9946ba2d0
/** @noinspection all */

namespace Botble\Base\Models {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_BaseModel_C;
    use LaravelIdea\Helper\_BaseBuilder;

    /**
     * @method BaseModel baseSole(array|string $columns = ['*'])
     * @method BaseModel create(array $attributes = [])
     * @method _IH_BaseModel_C|BaseModel[] cursor()
     * @method BaseModel|null|_IH_BaseModel_C|BaseModel[] find($id, array|string $columns = ['*'])
     * @method _IH_BaseModel_C|BaseModel[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method BaseModel|_IH_BaseModel_C|BaseModel[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method BaseModel|_IH_BaseModel_C|BaseModel[] findOrFail($id, array|string $columns = ['*'])
     * @method BaseModel|_IH_BaseModel_C|BaseModel[] findOrNew($id, array|string $columns = ['*'])
     * @method BaseModel first(array|string $columns = ['*'])
     * @method BaseModel firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method BaseModel firstOrCreate(array $attributes = [], array $values = [])
     * @method BaseModel firstOrFail(array|string $columns = ['*'])
     * @method BaseModel firstOrNew(array $attributes = [], array $values = [])
     * @method BaseModel firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method BaseModel forceCreate(array $attributes)
     * @method _IH_BaseModel_C|BaseModel[] fromQuery(string $query, array $bindings = [])
     * @method _IH_BaseModel_C|BaseModel[] get(array|string $columns = ['*'])
     * @method BaseModel getModel()
     * @method BaseModel[] getModels(array|string $columns = ['*'])
     * @method _IH_BaseModel_C|BaseModel[] hydrate(array $items)
     * @method BaseModel make(array $attributes = [])
     * @method BaseModel newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|BaseModel[]|_IH_BaseModel_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|BaseModel[]|_IH_BaseModel_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method BaseModel sole(array|string $columns = ['*'])
     * @method BaseModel updateOrCreate(array $attributes, array $values = [])
     */
    class BaseQueryBuilder extends _BaseBuilder {}
}
