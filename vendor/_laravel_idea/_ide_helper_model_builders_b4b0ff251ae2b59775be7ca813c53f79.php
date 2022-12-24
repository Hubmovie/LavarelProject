<?php //21302e7e5965092d3cbfe2ffbfec44cf
/** @noinspection all */

namespace LaravelIdea\Helper\Botble\Location\Models {

    use Botble\Location\Models\City;
    use Botble\Location\Models\CityTranslation;
    use Botble\Location\Models\Country;
    use Botble\Location\Models\CountryTranslation;
    use Botble\Location\Models\State;
    use Botble\Location\Models\StateTranslation;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method CityTranslation|null getOrPut($key, $value)
     * @method CityTranslation|$this shift(int $count = 1)
     * @method CityTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method CityTranslation|$this pop(int $count = 1)
     * @method CityTranslation|null pull($key, \Closure $default = null)
     * @method CityTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method CityTranslation|$this random(callable|int|null $number = null)
     * @method CityTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method CityTranslation|null get($key, \Closure $default = null)
     * @method CityTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method CityTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method CityTranslation|null find($key, $default = null)
     * @method CityTranslation[] all()
     */
    class _IH_CityTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CityTranslation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_CityTranslation_QB whereLangCode($value)
     * @method _IH_CityTranslation_QB whereCitiesId($value)
     * @method _IH_CityTranslation_QB whereName($value)
     * @method CityTranslation baseSole(array|string $columns = ['*'])
     * @method CityTranslation create(array $attributes = [])
     * @method _IH_CityTranslation_C|CityTranslation[] cursor()
     * @method CityTranslation|null|_IH_CityTranslation_C|CityTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_CityTranslation_C|CityTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method CityTranslation|_IH_CityTranslation_C|CityTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CityTranslation|_IH_CityTranslation_C|CityTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method CityTranslation|_IH_CityTranslation_C|CityTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method CityTranslation first(array|string $columns = ['*'])
     * @method CityTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CityTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method CityTranslation firstOrFail(array|string $columns = ['*'])
     * @method CityTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method CityTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CityTranslation forceCreate(array $attributes)
     * @method _IH_CityTranslation_C|CityTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CityTranslation_C|CityTranslation[] get(array|string $columns = ['*'])
     * @method CityTranslation getModel()
     * @method CityTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_CityTranslation_C|CityTranslation[] hydrate(array $items)
     * @method CityTranslation make(array $attributes = [])
     * @method CityTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CityTranslation[]|_IH_CityTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|CityTranslation[]|_IH_CityTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CityTranslation sole(array|string $columns = ['*'])
     * @method CityTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_CityTranslation_QB extends _BaseBuilder {}

    /**
     * @method City|null getOrPut($key, $value)
     * @method City|$this shift(int $count = 1)
     * @method City|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method City|$this pop(int $count = 1)
     * @method City|null pull($key, \Closure $default = null)
     * @method City|null last(callable $callback = null, \Closure $default = null)
     * @method City|$this random(callable|int|null $number = null)
     * @method City|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method City|null get($key, \Closure $default = null)
     * @method City|null first(callable $callback = null, \Closure $default = null)
     * @method City|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method City|null find($key, $default = null)
     * @method City[] all()
     */
    class _IH_City_C extends _BaseCollection {
        /**
         * @param int $size
         * @return City[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_City_QB whereId($value)
     * @method _IH_City_QB whereName($value)
     * @method _IH_City_QB whereStateId($value)
     * @method _IH_City_QB whereCountryId($value)
     * @method _IH_City_QB whereRecordId($value)
     * @method _IH_City_QB whereOrder($value)
     * @method _IH_City_QB whereIsDefault($value)
     * @method _IH_City_QB whereStatus($value)
     * @method _IH_City_QB whereCreatedAt($value)
     * @method _IH_City_QB whereUpdatedAt($value)
     * @method City baseSole(array|string $columns = ['*'])
     * @method City create(array $attributes = [])
     * @method _IH_City_C|City[] cursor()
     * @method City|null|_IH_City_C|City[] find($id, array|string $columns = ['*'])
     * @method _IH_City_C|City[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method City|_IH_City_C|City[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method City|_IH_City_C|City[] findOrFail($id, array|string $columns = ['*'])
     * @method City|_IH_City_C|City[] findOrNew($id, array|string $columns = ['*'])
     * @method City first(array|string $columns = ['*'])
     * @method City firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method City firstOrCreate(array $attributes = [], array $values = [])
     * @method City firstOrFail(array|string $columns = ['*'])
     * @method City firstOrNew(array $attributes = [], array $values = [])
     * @method City firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method City forceCreate(array $attributes)
     * @method _IH_City_C|City[] fromQuery(string $query, array $bindings = [])
     * @method _IH_City_C|City[] get(array|string $columns = ['*'])
     * @method City getModel()
     * @method City[] getModels(array|string $columns = ['*'])
     * @method _IH_City_C|City[] hydrate(array $items)
     * @method City make(array $attributes = [])
     * @method City newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|City[]|_IH_City_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|City[]|_IH_City_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method City sole(array|string $columns = ['*'])
     * @method City updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_City_QB extends _BaseBuilder {}

    /**
     * @method CountryTranslation|null getOrPut($key, $value)
     * @method CountryTranslation|$this shift(int $count = 1)
     * @method CountryTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method CountryTranslation|$this pop(int $count = 1)
     * @method CountryTranslation|null pull($key, \Closure $default = null)
     * @method CountryTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method CountryTranslation|$this random(callable|int|null $number = null)
     * @method CountryTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method CountryTranslation|null get($key, \Closure $default = null)
     * @method CountryTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method CountryTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method CountryTranslation|null find($key, $default = null)
     * @method CountryTranslation[] all()
     */
    class _IH_CountryTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CountryTranslation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_CountryTranslation_QB whereLangCode($value)
     * @method _IH_CountryTranslation_QB whereCountriesId($value)
     * @method _IH_CountryTranslation_QB whereName($value)
     * @method _IH_CountryTranslation_QB whereNationality($value)
     * @method CountryTranslation baseSole(array|string $columns = ['*'])
     * @method CountryTranslation create(array $attributes = [])
     * @method _IH_CountryTranslation_C|CountryTranslation[] cursor()
     * @method CountryTranslation|null|_IH_CountryTranslation_C|CountryTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_CountryTranslation_C|CountryTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method CountryTranslation|_IH_CountryTranslation_C|CountryTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CountryTranslation|_IH_CountryTranslation_C|CountryTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method CountryTranslation|_IH_CountryTranslation_C|CountryTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method CountryTranslation first(array|string $columns = ['*'])
     * @method CountryTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CountryTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method CountryTranslation firstOrFail(array|string $columns = ['*'])
     * @method CountryTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method CountryTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CountryTranslation forceCreate(array $attributes)
     * @method _IH_CountryTranslation_C|CountryTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CountryTranslation_C|CountryTranslation[] get(array|string $columns = ['*'])
     * @method CountryTranslation getModel()
     * @method CountryTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_CountryTranslation_C|CountryTranslation[] hydrate(array $items)
     * @method CountryTranslation make(array $attributes = [])
     * @method CountryTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CountryTranslation[]|_IH_CountryTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|CountryTranslation[]|_IH_CountryTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CountryTranslation sole(array|string $columns = ['*'])
     * @method CountryTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_CountryTranslation_QB extends _BaseBuilder {}

    /**
     * @method Country|null getOrPut($key, $value)
     * @method Country|$this shift(int $count = 1)
     * @method Country|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Country|$this pop(int $count = 1)
     * @method Country|null pull($key, \Closure $default = null)
     * @method Country|null last(callable $callback = null, \Closure $default = null)
     * @method Country|$this random(callable|int|null $number = null)
     * @method Country|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Country|null get($key, \Closure $default = null)
     * @method Country|null first(callable $callback = null, \Closure $default = null)
     * @method Country|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Country|null find($key, $default = null)
     * @method Country[] all()
     */
    class _IH_Country_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Country[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Country_QB whereId($value)
     * @method _IH_Country_QB whereName($value)
     * @method _IH_Country_QB whereNationality($value)
     * @method _IH_Country_QB whereOrder($value)
     * @method _IH_Country_QB whereIsDefault($value)
     * @method _IH_Country_QB whereStatus($value)
     * @method _IH_Country_QB whereCreatedAt($value)
     * @method _IH_Country_QB whereUpdatedAt($value)
     * @method _IH_Country_QB whereCode($value)
     * @method Country baseSole(array|string $columns = ['*'])
     * @method Country create(array $attributes = [])
     * @method _IH_Country_C|Country[] cursor()
     * @method Country|null|_IH_Country_C|Country[] find($id, array|string $columns = ['*'])
     * @method _IH_Country_C|Country[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Country|_IH_Country_C|Country[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Country|_IH_Country_C|Country[] findOrFail($id, array|string $columns = ['*'])
     * @method Country|_IH_Country_C|Country[] findOrNew($id, array|string $columns = ['*'])
     * @method Country first(array|string $columns = ['*'])
     * @method Country firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Country firstOrCreate(array $attributes = [], array $values = [])
     * @method Country firstOrFail(array|string $columns = ['*'])
     * @method Country firstOrNew(array $attributes = [], array $values = [])
     * @method Country firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Country forceCreate(array $attributes)
     * @method _IH_Country_C|Country[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Country_C|Country[] get(array|string $columns = ['*'])
     * @method Country getModel()
     * @method Country[] getModels(array|string $columns = ['*'])
     * @method _IH_Country_C|Country[] hydrate(array $items)
     * @method Country make(array $attributes = [])
     * @method Country newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Country[]|_IH_Country_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Country[]|_IH_Country_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Country sole(array|string $columns = ['*'])
     * @method Country updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Country_QB extends _BaseBuilder {}

    /**
     * @method StateTranslation|null getOrPut($key, $value)
     * @method StateTranslation|$this shift(int $count = 1)
     * @method StateTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method StateTranslation|$this pop(int $count = 1)
     * @method StateTranslation|null pull($key, \Closure $default = null)
     * @method StateTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method StateTranslation|$this random(callable|int|null $number = null)
     * @method StateTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method StateTranslation|null get($key, \Closure $default = null)
     * @method StateTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method StateTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method StateTranslation|null find($key, $default = null)
     * @method StateTranslation[] all()
     */
    class _IH_StateTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return StateTranslation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_StateTranslation_QB whereLangCode($value)
     * @method _IH_StateTranslation_QB whereStatesId($value)
     * @method _IH_StateTranslation_QB whereName($value)
     * @method _IH_StateTranslation_QB whereAbbreviation($value)
     * @method StateTranslation baseSole(array|string $columns = ['*'])
     * @method StateTranslation create(array $attributes = [])
     * @method _IH_StateTranslation_C|StateTranslation[] cursor()
     * @method StateTranslation|null|_IH_StateTranslation_C|StateTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_StateTranslation_C|StateTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method StateTranslation|_IH_StateTranslation_C|StateTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method StateTranslation|_IH_StateTranslation_C|StateTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method StateTranslation|_IH_StateTranslation_C|StateTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method StateTranslation first(array|string $columns = ['*'])
     * @method StateTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method StateTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method StateTranslation firstOrFail(array|string $columns = ['*'])
     * @method StateTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method StateTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method StateTranslation forceCreate(array $attributes)
     * @method _IH_StateTranslation_C|StateTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_StateTranslation_C|StateTranslation[] get(array|string $columns = ['*'])
     * @method StateTranslation getModel()
     * @method StateTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_StateTranslation_C|StateTranslation[] hydrate(array $items)
     * @method StateTranslation make(array $attributes = [])
     * @method StateTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|StateTranslation[]|_IH_StateTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|StateTranslation[]|_IH_StateTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method StateTranslation sole(array|string $columns = ['*'])
     * @method StateTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_StateTranslation_QB extends _BaseBuilder {}

    /**
     * @method State|null getOrPut($key, $value)
     * @method State|$this shift(int $count = 1)
     * @method State|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method State|$this pop(int $count = 1)
     * @method State|null pull($key, \Closure $default = null)
     * @method State|null last(callable $callback = null, \Closure $default = null)
     * @method State|$this random(callable|int|null $number = null)
     * @method State|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method State|null get($key, \Closure $default = null)
     * @method State|null first(callable $callback = null, \Closure $default = null)
     * @method State|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method State|null find($key, $default = null)
     * @method State[] all()
     */
    class _IH_State_C extends _BaseCollection {
        /**
         * @param int $size
         * @return State[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_State_QB whereId($value)
     * @method _IH_State_QB whereName($value)
     * @method _IH_State_QB whereAbbreviation($value)
     * @method _IH_State_QB whereCountryId($value)
     * @method _IH_State_QB whereOrder($value)
     * @method _IH_State_QB whereIsDefault($value)
     * @method _IH_State_QB whereStatus($value)
     * @method _IH_State_QB whereCreatedAt($value)
     * @method _IH_State_QB whereUpdatedAt($value)
     * @method State baseSole(array|string $columns = ['*'])
     * @method State create(array $attributes = [])
     * @method _IH_State_C|State[] cursor()
     * @method State|null|_IH_State_C|State[] find($id, array|string $columns = ['*'])
     * @method _IH_State_C|State[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method State|_IH_State_C|State[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method State|_IH_State_C|State[] findOrFail($id, array|string $columns = ['*'])
     * @method State|_IH_State_C|State[] findOrNew($id, array|string $columns = ['*'])
     * @method State first(array|string $columns = ['*'])
     * @method State firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method State firstOrCreate(array $attributes = [], array $values = [])
     * @method State firstOrFail(array|string $columns = ['*'])
     * @method State firstOrNew(array $attributes = [], array $values = [])
     * @method State firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method State forceCreate(array $attributes)
     * @method _IH_State_C|State[] fromQuery(string $query, array $bindings = [])
     * @method _IH_State_C|State[] get(array|string $columns = ['*'])
     * @method State getModel()
     * @method State[] getModels(array|string $columns = ['*'])
     * @method _IH_State_C|State[] hydrate(array $items)
     * @method State make(array $attributes = [])
     * @method State newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|State[]|_IH_State_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|State[]|_IH_State_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method State sole(array|string $columns = ['*'])
     * @method State updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_State_QB extends _BaseBuilder {}
}
