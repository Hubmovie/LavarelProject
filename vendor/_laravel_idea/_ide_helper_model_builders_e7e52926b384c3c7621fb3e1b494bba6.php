<?php //7df8f2f2822705da8c455bd10b179a17
/** @noinspection all */

namespace LaravelIdea\Helper\Botble\AuditLog\Models {

    use Botble\AuditLog\Models\AuditHistory;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method AuditHistory|null getOrPut($key, $value)
     * @method AuditHistory|$this shift(int $count = 1)
     * @method AuditHistory|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method AuditHistory|$this pop(int $count = 1)
     * @method AuditHistory|null pull($key, \Closure $default = null)
     * @method AuditHistory|null last(callable $callback = null, \Closure $default = null)
     * @method AuditHistory|$this random(callable|int|null $number = null)
     * @method AuditHistory|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method AuditHistory|null get($key, \Closure $default = null)
     * @method AuditHistory|null first(callable $callback = null, \Closure $default = null)
     * @method AuditHistory|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method AuditHistory|null find($key, $default = null)
     * @method AuditHistory[] all()
     */
    class _IH_AuditHistory_C extends _BaseCollection {
        /**
         * @param int $size
         * @return AuditHistory[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_AuditHistory_QB whereId($value)
     * @method _IH_AuditHistory_QB whereUserId($value)
     * @method _IH_AuditHistory_QB whereModule($value)
     * @method _IH_AuditHistory_QB whereRequest($value)
     * @method _IH_AuditHistory_QB whereAction($value)
     * @method _IH_AuditHistory_QB whereUserAgent($value)
     * @method _IH_AuditHistory_QB whereIpAddress($value)
     * @method _IH_AuditHistory_QB whereReferenceUser($value)
     * @method _IH_AuditHistory_QB whereReferenceId($value)
     * @method _IH_AuditHistory_QB whereReferenceName($value)
     * @method _IH_AuditHistory_QB whereType($value)
     * @method _IH_AuditHistory_QB whereCreatedAt($value)
     * @method _IH_AuditHistory_QB whereUpdatedAt($value)
     * @method AuditHistory baseSole(array|string $columns = ['*'])
     * @method AuditHistory create(array $attributes = [])
     * @method _IH_AuditHistory_C|AuditHistory[] cursor()
     * @method AuditHistory|null|_IH_AuditHistory_C|AuditHistory[] find($id, array|string $columns = ['*'])
     * @method _IH_AuditHistory_C|AuditHistory[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method AuditHistory|_IH_AuditHistory_C|AuditHistory[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method AuditHistory|_IH_AuditHistory_C|AuditHistory[] findOrFail($id, array|string $columns = ['*'])
     * @method AuditHistory|_IH_AuditHistory_C|AuditHistory[] findOrNew($id, array|string $columns = ['*'])
     * @method AuditHistory first(array|string $columns = ['*'])
     * @method AuditHistory firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method AuditHistory firstOrCreate(array $attributes = [], array $values = [])
     * @method AuditHistory firstOrFail(array|string $columns = ['*'])
     * @method AuditHistory firstOrNew(array $attributes = [], array $values = [])
     * @method AuditHistory firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method AuditHistory forceCreate(array $attributes)
     * @method _IH_AuditHistory_C|AuditHistory[] fromQuery(string $query, array $bindings = [])
     * @method _IH_AuditHistory_C|AuditHistory[] get(array|string $columns = ['*'])
     * @method AuditHistory getModel()
     * @method AuditHistory[] getModels(array|string $columns = ['*'])
     * @method _IH_AuditHistory_C|AuditHistory[] hydrate(array $items)
     * @method AuditHistory make(array $attributes = [])
     * @method AuditHistory newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|AuditHistory[]|_IH_AuditHistory_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|AuditHistory[]|_IH_AuditHistory_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AuditHistory sole(array|string $columns = ['*'])
     * @method AuditHistory updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_AuditHistory_QB extends _BaseBuilder {}
}
