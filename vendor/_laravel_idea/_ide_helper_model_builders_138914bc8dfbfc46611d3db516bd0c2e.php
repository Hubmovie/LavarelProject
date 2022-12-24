<?php //54b2a8707a71585cb80d4e5c6bb6f66a
/** @noinspection all */

namespace LaravelIdea\Helper\Botble\Faq\Models {

    use Botble\Faq\Models\Faq;
    use Botble\Faq\Models\FaqCategory;
    use Botble\Faq\Models\FaqCategoryTranslation;
    use Botble\Faq\Models\FaqTranslation;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method FaqCategoryTranslation|null getOrPut($key, $value)
     * @method FaqCategoryTranslation|$this shift(int $count = 1)
     * @method FaqCategoryTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method FaqCategoryTranslation|$this pop(int $count = 1)
     * @method FaqCategoryTranslation|null pull($key, \Closure $default = null)
     * @method FaqCategoryTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method FaqCategoryTranslation|$this random(callable|int|null $number = null)
     * @method FaqCategoryTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method FaqCategoryTranslation|null get($key, \Closure $default = null)
     * @method FaqCategoryTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method FaqCategoryTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method FaqCategoryTranslation|null find($key, $default = null)
     * @method FaqCategoryTranslation[] all()
     */
    class _IH_FaqCategoryTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return FaqCategoryTranslation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_FaqCategoryTranslation_QB whereLangCode($value)
     * @method _IH_FaqCategoryTranslation_QB whereFaqCategoriesId($value)
     * @method _IH_FaqCategoryTranslation_QB whereName($value)
     * @method FaqCategoryTranslation baseSole(array|string $columns = ['*'])
     * @method FaqCategoryTranslation create(array $attributes = [])
     * @method _IH_FaqCategoryTranslation_C|FaqCategoryTranslation[] cursor()
     * @method FaqCategoryTranslation|null|_IH_FaqCategoryTranslation_C|FaqCategoryTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_FaqCategoryTranslation_C|FaqCategoryTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method FaqCategoryTranslation|_IH_FaqCategoryTranslation_C|FaqCategoryTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FaqCategoryTranslation|_IH_FaqCategoryTranslation_C|FaqCategoryTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method FaqCategoryTranslation|_IH_FaqCategoryTranslation_C|FaqCategoryTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method FaqCategoryTranslation first(array|string $columns = ['*'])
     * @method FaqCategoryTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FaqCategoryTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method FaqCategoryTranslation firstOrFail(array|string $columns = ['*'])
     * @method FaqCategoryTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method FaqCategoryTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method FaqCategoryTranslation forceCreate(array $attributes)
     * @method _IH_FaqCategoryTranslation_C|FaqCategoryTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_FaqCategoryTranslation_C|FaqCategoryTranslation[] get(array|string $columns = ['*'])
     * @method FaqCategoryTranslation getModel()
     * @method FaqCategoryTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_FaqCategoryTranslation_C|FaqCategoryTranslation[] hydrate(array $items)
     * @method FaqCategoryTranslation make(array $attributes = [])
     * @method FaqCategoryTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|FaqCategoryTranslation[]|_IH_FaqCategoryTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|FaqCategoryTranslation[]|_IH_FaqCategoryTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FaqCategoryTranslation sole(array|string $columns = ['*'])
     * @method FaqCategoryTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_FaqCategoryTranslation_QB extends _BaseBuilder {}

    /**
     * @method FaqCategory|null getOrPut($key, $value)
     * @method FaqCategory|$this shift(int $count = 1)
     * @method FaqCategory|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method FaqCategory|$this pop(int $count = 1)
     * @method FaqCategory|null pull($key, \Closure $default = null)
     * @method FaqCategory|null last(callable $callback = null, \Closure $default = null)
     * @method FaqCategory|$this random(callable|int|null $number = null)
     * @method FaqCategory|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method FaqCategory|null get($key, \Closure $default = null)
     * @method FaqCategory|null first(callable $callback = null, \Closure $default = null)
     * @method FaqCategory|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method FaqCategory|null find($key, $default = null)
     * @method FaqCategory[] all()
     */
    class _IH_FaqCategory_C extends _BaseCollection {
        /**
         * @param int $size
         * @return FaqCategory[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_FaqCategory_QB whereId($value)
     * @method _IH_FaqCategory_QB whereName($value)
     * @method _IH_FaqCategory_QB whereOrder($value)
     * @method _IH_FaqCategory_QB whereStatus($value)
     * @method _IH_FaqCategory_QB whereCreatedAt($value)
     * @method _IH_FaqCategory_QB whereUpdatedAt($value)
     * @method FaqCategory baseSole(array|string $columns = ['*'])
     * @method FaqCategory create(array $attributes = [])
     * @method _IH_FaqCategory_C|FaqCategory[] cursor()
     * @method FaqCategory|null|_IH_FaqCategory_C|FaqCategory[] find($id, array|string $columns = ['*'])
     * @method _IH_FaqCategory_C|FaqCategory[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method FaqCategory|_IH_FaqCategory_C|FaqCategory[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FaqCategory|_IH_FaqCategory_C|FaqCategory[] findOrFail($id, array|string $columns = ['*'])
     * @method FaqCategory|_IH_FaqCategory_C|FaqCategory[] findOrNew($id, array|string $columns = ['*'])
     * @method FaqCategory first(array|string $columns = ['*'])
     * @method FaqCategory firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FaqCategory firstOrCreate(array $attributes = [], array $values = [])
     * @method FaqCategory firstOrFail(array|string $columns = ['*'])
     * @method FaqCategory firstOrNew(array $attributes = [], array $values = [])
     * @method FaqCategory firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method FaqCategory forceCreate(array $attributes)
     * @method _IH_FaqCategory_C|FaqCategory[] fromQuery(string $query, array $bindings = [])
     * @method _IH_FaqCategory_C|FaqCategory[] get(array|string $columns = ['*'])
     * @method FaqCategory getModel()
     * @method FaqCategory[] getModels(array|string $columns = ['*'])
     * @method _IH_FaqCategory_C|FaqCategory[] hydrate(array $items)
     * @method FaqCategory make(array $attributes = [])
     * @method FaqCategory newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|FaqCategory[]|_IH_FaqCategory_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|FaqCategory[]|_IH_FaqCategory_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FaqCategory sole(array|string $columns = ['*'])
     * @method FaqCategory updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_FaqCategory_QB extends _BaseBuilder {}

    /**
     * @method FaqTranslation|null getOrPut($key, $value)
     * @method FaqTranslation|$this shift(int $count = 1)
     * @method FaqTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method FaqTranslation|$this pop(int $count = 1)
     * @method FaqTranslation|null pull($key, \Closure $default = null)
     * @method FaqTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method FaqTranslation|$this random(callable|int|null $number = null)
     * @method FaqTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method FaqTranslation|null get($key, \Closure $default = null)
     * @method FaqTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method FaqTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method FaqTranslation|null find($key, $default = null)
     * @method FaqTranslation[] all()
     */
    class _IH_FaqTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return FaqTranslation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_FaqTranslation_QB whereLangCode($value)
     * @method _IH_FaqTranslation_QB whereFaqsId($value)
     * @method _IH_FaqTranslation_QB whereQuestion($value)
     * @method _IH_FaqTranslation_QB whereAnswer($value)
     * @method FaqTranslation baseSole(array|string $columns = ['*'])
     * @method FaqTranslation create(array $attributes = [])
     * @method _IH_FaqTranslation_C|FaqTranslation[] cursor()
     * @method FaqTranslation|null|_IH_FaqTranslation_C|FaqTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_FaqTranslation_C|FaqTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method FaqTranslation|_IH_FaqTranslation_C|FaqTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FaqTranslation|_IH_FaqTranslation_C|FaqTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method FaqTranslation|_IH_FaqTranslation_C|FaqTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method FaqTranslation first(array|string $columns = ['*'])
     * @method FaqTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FaqTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method FaqTranslation firstOrFail(array|string $columns = ['*'])
     * @method FaqTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method FaqTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method FaqTranslation forceCreate(array $attributes)
     * @method _IH_FaqTranslation_C|FaqTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_FaqTranslation_C|FaqTranslation[] get(array|string $columns = ['*'])
     * @method FaqTranslation getModel()
     * @method FaqTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_FaqTranslation_C|FaqTranslation[] hydrate(array $items)
     * @method FaqTranslation make(array $attributes = [])
     * @method FaqTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|FaqTranslation[]|_IH_FaqTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|FaqTranslation[]|_IH_FaqTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FaqTranslation sole(array|string $columns = ['*'])
     * @method FaqTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_FaqTranslation_QB extends _BaseBuilder {}

    /**
     * @method Faq|null getOrPut($key, $value)
     * @method Faq|$this shift(int $count = 1)
     * @method Faq|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Faq|$this pop(int $count = 1)
     * @method Faq|null pull($key, \Closure $default = null)
     * @method Faq|null last(callable $callback = null, \Closure $default = null)
     * @method Faq|$this random(callable|int|null $number = null)
     * @method Faq|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Faq|null get($key, \Closure $default = null)
     * @method Faq|null first(callable $callback = null, \Closure $default = null)
     * @method Faq|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Faq|null find($key, $default = null)
     * @method Faq[] all()
     */
    class _IH_Faq_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Faq[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Faq_QB whereId($value)
     * @method _IH_Faq_QB whereQuestion($value)
     * @method _IH_Faq_QB whereAnswer($value)
     * @method _IH_Faq_QB whereCategoryId($value)
     * @method _IH_Faq_QB whereStatus($value)
     * @method _IH_Faq_QB whereCreatedAt($value)
     * @method _IH_Faq_QB whereUpdatedAt($value)
     * @method Faq baseSole(array|string $columns = ['*'])
     * @method Faq create(array $attributes = [])
     * @method _IH_Faq_C|Faq[] cursor()
     * @method Faq|null|_IH_Faq_C|Faq[] find($id, array|string $columns = ['*'])
     * @method _IH_Faq_C|Faq[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Faq|_IH_Faq_C|Faq[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Faq|_IH_Faq_C|Faq[] findOrFail($id, array|string $columns = ['*'])
     * @method Faq|_IH_Faq_C|Faq[] findOrNew($id, array|string $columns = ['*'])
     * @method Faq first(array|string $columns = ['*'])
     * @method Faq firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Faq firstOrCreate(array $attributes = [], array $values = [])
     * @method Faq firstOrFail(array|string $columns = ['*'])
     * @method Faq firstOrNew(array $attributes = [], array $values = [])
     * @method Faq firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Faq forceCreate(array $attributes)
     * @method _IH_Faq_C|Faq[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Faq_C|Faq[] get(array|string $columns = ['*'])
     * @method Faq getModel()
     * @method Faq[] getModels(array|string $columns = ['*'])
     * @method _IH_Faq_C|Faq[] hydrate(array $items)
     * @method Faq make(array $attributes = [])
     * @method Faq newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Faq[]|_IH_Faq_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Faq[]|_IH_Faq_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Faq sole(array|string $columns = ['*'])
     * @method Faq updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Faq_QB extends _BaseBuilder {}
}
