<?php //029fca607f0313053e032b2e60efd466
/** @noinspection all */

namespace LaravelIdea\Helper\Botble\Language\Models {

    use Botble\Language\Models\Language;
    use Botble\Language\Models\LanguageMeta;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method LanguageMeta|null getOrPut($key, $value)
     * @method LanguageMeta|$this shift(int $count = 1)
     * @method LanguageMeta|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method LanguageMeta|$this pop(int $count = 1)
     * @method LanguageMeta|null pull($key, \Closure $default = null)
     * @method LanguageMeta|null last(callable $callback = null, \Closure $default = null)
     * @method LanguageMeta|$this random(callable|int|null $number = null)
     * @method LanguageMeta|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method LanguageMeta|null get($key, \Closure $default = null)
     * @method LanguageMeta|null first(callable $callback = null, \Closure $default = null)
     * @method LanguageMeta|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method LanguageMeta|null find($key, $default = null)
     * @method LanguageMeta[] all()
     */
    class _IH_LanguageMeta_C extends _BaseCollection {
        /**
         * @param int $size
         * @return LanguageMeta[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_LanguageMeta_QB whereLangMetaId($value)
     * @method _IH_LanguageMeta_QB whereLangMetaCode($value)
     * @method _IH_LanguageMeta_QB whereLangMetaOrigin($value)
     * @method _IH_LanguageMeta_QB whereReferenceId($value)
     * @method _IH_LanguageMeta_QB whereReferenceType($value)
     * @method LanguageMeta baseSole(array|string $columns = ['*'])
     * @method LanguageMeta create(array $attributes = [])
     * @method _IH_LanguageMeta_C|LanguageMeta[] cursor()
     * @method LanguageMeta|null|_IH_LanguageMeta_C|LanguageMeta[] find($id, array|string $columns = ['*'])
     * @method _IH_LanguageMeta_C|LanguageMeta[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method LanguageMeta|_IH_LanguageMeta_C|LanguageMeta[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method LanguageMeta|_IH_LanguageMeta_C|LanguageMeta[] findOrFail($id, array|string $columns = ['*'])
     * @method LanguageMeta|_IH_LanguageMeta_C|LanguageMeta[] findOrNew($id, array|string $columns = ['*'])
     * @method LanguageMeta first(array|string $columns = ['*'])
     * @method LanguageMeta firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method LanguageMeta firstOrCreate(array $attributes = [], array $values = [])
     * @method LanguageMeta firstOrFail(array|string $columns = ['*'])
     * @method LanguageMeta firstOrNew(array $attributes = [], array $values = [])
     * @method LanguageMeta firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method LanguageMeta forceCreate(array $attributes)
     * @method _IH_LanguageMeta_C|LanguageMeta[] fromQuery(string $query, array $bindings = [])
     * @method _IH_LanguageMeta_C|LanguageMeta[] get(array|string $columns = ['*'])
     * @method LanguageMeta getModel()
     * @method LanguageMeta[] getModels(array|string $columns = ['*'])
     * @method _IH_LanguageMeta_C|LanguageMeta[] hydrate(array $items)
     * @method LanguageMeta make(array $attributes = [])
     * @method LanguageMeta newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|LanguageMeta[]|_IH_LanguageMeta_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|LanguageMeta[]|_IH_LanguageMeta_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method LanguageMeta sole(array|string $columns = ['*'])
     * @method LanguageMeta updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_LanguageMeta_QB extends _BaseBuilder {}

    /**
     * @method Language|null getOrPut($key, $value)
     * @method Language|$this shift(int $count = 1)
     * @method Language|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Language|$this pop(int $count = 1)
     * @method Language|null pull($key, \Closure $default = null)
     * @method Language|null last(callable $callback = null, \Closure $default = null)
     * @method Language|$this random(callable|int|null $number = null)
     * @method Language|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Language|null get($key, \Closure $default = null)
     * @method Language|null first(callable $callback = null, \Closure $default = null)
     * @method Language|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Language|null find($key, $default = null)
     * @method Language[] all()
     */
    class _IH_Language_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Language[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Language_QB whereLangId($value)
     * @method _IH_Language_QB whereLangName($value)
     * @method _IH_Language_QB whereLangLocale($value)
     * @method _IH_Language_QB whereLangCode($value)
     * @method _IH_Language_QB whereLangFlag($value)
     * @method _IH_Language_QB whereLangIsDefault($value)
     * @method _IH_Language_QB whereLangOrder($value)
     * @method _IH_Language_QB whereLangIsRtl($value)
     * @method Language baseSole(array|string $columns = ['*'])
     * @method Language create(array $attributes = [])
     * @method _IH_Language_C|Language[] cursor()
     * @method Language|null|_IH_Language_C|Language[] find($id, array|string $columns = ['*'])
     * @method _IH_Language_C|Language[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Language|_IH_Language_C|Language[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Language|_IH_Language_C|Language[] findOrFail($id, array|string $columns = ['*'])
     * @method Language|_IH_Language_C|Language[] findOrNew($id, array|string $columns = ['*'])
     * @method Language first(array|string $columns = ['*'])
     * @method Language firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Language firstOrCreate(array $attributes = [], array $values = [])
     * @method Language firstOrFail(array|string $columns = ['*'])
     * @method Language firstOrNew(array $attributes = [], array $values = [])
     * @method Language firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Language forceCreate(array $attributes)
     * @method _IH_Language_C|Language[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Language_C|Language[] get(array|string $columns = ['*'])
     * @method Language getModel()
     * @method Language[] getModels(array|string $columns = ['*'])
     * @method _IH_Language_C|Language[] hydrate(array $items)
     * @method Language make(array $attributes = [])
     * @method Language newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Language[]|_IH_Language_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Language[]|_IH_Language_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Language sole(array|string $columns = ['*'])
     * @method Language updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Language_QB extends _BaseBuilder {}
}
