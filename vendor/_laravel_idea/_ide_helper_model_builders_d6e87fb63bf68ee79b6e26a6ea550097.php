<?php //acffdbddf879805866eb0bff12d8903f
/** @noinspection all */

namespace LaravelIdea\Helper\Botble\Ads\Models {

    use Botble\Ads\Models\Ads;
    use Botble\Ads\Models\AdsTranslation;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method AdsTranslation|null getOrPut($key, $value)
     * @method AdsTranslation|$this shift(int $count = 1)
     * @method AdsTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method AdsTranslation|$this pop(int $count = 1)
     * @method AdsTranslation|null pull($key, \Closure $default = null)
     * @method AdsTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method AdsTranslation|$this random(callable|int|null $number = null)
     * @method AdsTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method AdsTranslation|null get($key, \Closure $default = null)
     * @method AdsTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method AdsTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method AdsTranslation|null find($key, $default = null)
     * @method AdsTranslation[] all()
     */
    class _IH_AdsTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return AdsTranslation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_AdsTranslation_QB whereLangCode($value)
     * @method _IH_AdsTranslation_QB whereAdsId($value)
     * @method _IH_AdsTranslation_QB whereName($value)
     * @method _IH_AdsTranslation_QB whereImage($value)
     * @method _IH_AdsTranslation_QB whereUrl($value)
     * @method AdsTranslation baseSole(array|string $columns = ['*'])
     * @method AdsTranslation create(array $attributes = [])
     * @method _IH_AdsTranslation_C|AdsTranslation[] cursor()
     * @method AdsTranslation|null|_IH_AdsTranslation_C|AdsTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_AdsTranslation_C|AdsTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method AdsTranslation|_IH_AdsTranslation_C|AdsTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method AdsTranslation|_IH_AdsTranslation_C|AdsTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method AdsTranslation|_IH_AdsTranslation_C|AdsTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method AdsTranslation first(array|string $columns = ['*'])
     * @method AdsTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method AdsTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method AdsTranslation firstOrFail(array|string $columns = ['*'])
     * @method AdsTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method AdsTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method AdsTranslation forceCreate(array $attributes)
     * @method _IH_AdsTranslation_C|AdsTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_AdsTranslation_C|AdsTranslation[] get(array|string $columns = ['*'])
     * @method AdsTranslation getModel()
     * @method AdsTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_AdsTranslation_C|AdsTranslation[] hydrate(array $items)
     * @method AdsTranslation make(array $attributes = [])
     * @method AdsTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|AdsTranslation[]|_IH_AdsTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|AdsTranslation[]|_IH_AdsTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AdsTranslation sole(array|string $columns = ['*'])
     * @method AdsTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_AdsTranslation_QB extends _BaseBuilder {}

    /**
     * @method Ads|null getOrPut($key, $value)
     * @method Ads|$this shift(int $count = 1)
     * @method Ads|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Ads|$this pop(int $count = 1)
     * @method Ads|null pull($key, \Closure $default = null)
     * @method Ads|null last(callable $callback = null, \Closure $default = null)
     * @method Ads|$this random(callable|int|null $number = null)
     * @method Ads|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Ads|null get($key, \Closure $default = null)
     * @method Ads|null first(callable $callback = null, \Closure $default = null)
     * @method Ads|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Ads|null find($key, $default = null)
     * @method Ads[] all()
     */
    class _IH_Ads_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Ads[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Ads_QB whereId($value)
     * @method _IH_Ads_QB whereName($value)
     * @method _IH_Ads_QB whereExpiredAt($value)
     * @method _IH_Ads_QB whereLocation($value)
     * @method _IH_Ads_QB whereImage($value)
     * @method _IH_Ads_QB whereUrl($value)
     * @method _IH_Ads_QB whereClicked($value)
     * @method _IH_Ads_QB whereOrder($value)
     * @method _IH_Ads_QB whereStatus($value)
     * @method _IH_Ads_QB whereCreatedAt($value)
     * @method _IH_Ads_QB whereUpdatedAt($value)
     * @method Ads baseSole(array|string $columns = ['*'])
     * @method Ads create(array $attributes = [])
     * @method _IH_Ads_C|Ads[] cursor()
     * @method Ads|null|_IH_Ads_C|Ads[] find($id, array|string $columns = ['*'])
     * @method _IH_Ads_C|Ads[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Ads|_IH_Ads_C|Ads[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Ads|_IH_Ads_C|Ads[] findOrFail($id, array|string $columns = ['*'])
     * @method Ads|_IH_Ads_C|Ads[] findOrNew($id, array|string $columns = ['*'])
     * @method Ads first(array|string $columns = ['*'])
     * @method Ads firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Ads firstOrCreate(array $attributes = [], array $values = [])
     * @method Ads firstOrFail(array|string $columns = ['*'])
     * @method Ads firstOrNew(array $attributes = [], array $values = [])
     * @method Ads firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Ads forceCreate(array $attributes)
     * @method _IH_Ads_C|Ads[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Ads_C|Ads[] get(array|string $columns = ['*'])
     * @method Ads getModel()
     * @method Ads[] getModels(array|string $columns = ['*'])
     * @method _IH_Ads_C|Ads[] hydrate(array $items)
     * @method Ads make(array $attributes = [])
     * @method Ads newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Ads[]|_IH_Ads_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Ads[]|_IH_Ads_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Ads sole(array|string $columns = ['*'])
     * @method Ads updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Ads_QB notExpired()
     */
    class _IH_Ads_QB extends _BaseBuilder {}
}
