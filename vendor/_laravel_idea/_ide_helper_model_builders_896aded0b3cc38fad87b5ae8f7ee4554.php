<?php //6b08842fb41cb4f74188de516b88aaaf
/** @noinspection all */

namespace LaravelIdea\Helper\Botble\Blog\Models {

    use Botble\Blog\Models\Category;
    use Botble\Blog\Models\CategoryTranslation;
    use Botble\Blog\Models\Post;
    use Botble\Blog\Models\PostTranslation;
    use Botble\Blog\Models\Tag;
    use Botble\Blog\Models\TagTranslation;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method CategoryTranslation|null getOrPut($key, $value)
     * @method CategoryTranslation|$this shift(int $count = 1)
     * @method CategoryTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method CategoryTranslation|$this pop(int $count = 1)
     * @method CategoryTranslation|null pull($key, \Closure $default = null)
     * @method CategoryTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method CategoryTranslation|$this random(callable|int|null $number = null)
     * @method CategoryTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method CategoryTranslation|null get($key, \Closure $default = null)
     * @method CategoryTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method CategoryTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method CategoryTranslation|null find($key, $default = null)
     * @method CategoryTranslation[] all()
     */
    class _IH_CategoryTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CategoryTranslation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_CategoryTranslation_QB whereLangCode($value)
     * @method _IH_CategoryTranslation_QB whereCategoriesId($value)
     * @method _IH_CategoryTranslation_QB whereName($value)
     * @method _IH_CategoryTranslation_QB whereDescription($value)
     * @method CategoryTranslation baseSole(array|string $columns = ['*'])
     * @method CategoryTranslation create(array $attributes = [])
     * @method _IH_CategoryTranslation_C|CategoryTranslation[] cursor()
     * @method CategoryTranslation|null|_IH_CategoryTranslation_C|CategoryTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_CategoryTranslation_C|CategoryTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method CategoryTranslation|_IH_CategoryTranslation_C|CategoryTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CategoryTranslation|_IH_CategoryTranslation_C|CategoryTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method CategoryTranslation|_IH_CategoryTranslation_C|CategoryTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method CategoryTranslation first(array|string $columns = ['*'])
     * @method CategoryTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CategoryTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method CategoryTranslation firstOrFail(array|string $columns = ['*'])
     * @method CategoryTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method CategoryTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CategoryTranslation forceCreate(array $attributes)
     * @method _IH_CategoryTranslation_C|CategoryTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CategoryTranslation_C|CategoryTranslation[] get(array|string $columns = ['*'])
     * @method CategoryTranslation getModel()
     * @method CategoryTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_CategoryTranslation_C|CategoryTranslation[] hydrate(array $items)
     * @method CategoryTranslation make(array $attributes = [])
     * @method CategoryTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CategoryTranslation[]|_IH_CategoryTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|CategoryTranslation[]|_IH_CategoryTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CategoryTranslation sole(array|string $columns = ['*'])
     * @method CategoryTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_CategoryTranslation_QB extends _BaseBuilder {}

    /**
     * @method Category|null getOrPut($key, $value)
     * @method Category|$this shift(int $count = 1)
     * @method Category|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Category|$this pop(int $count = 1)
     * @method Category|null pull($key, \Closure $default = null)
     * @method Category|null last(callable $callback = null, \Closure $default = null)
     * @method Category|$this random(callable|int|null $number = null)
     * @method Category|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Category|null get($key, \Closure $default = null)
     * @method Category|null first(callable $callback = null, \Closure $default = null)
     * @method Category|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Category|null find($key, $default = null)
     * @method Category[] all()
     */
    class _IH_Category_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Category[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Category_QB whereId($value)
     * @method _IH_Category_QB whereName($value)
     * @method _IH_Category_QB whereParentId($value)
     * @method _IH_Category_QB whereDescription($value)
     * @method _IH_Category_QB whereStatus($value)
     * @method _IH_Category_QB whereAuthorId($value)
     * @method _IH_Category_QB whereAuthorType($value)
     * @method _IH_Category_QB whereIcon($value)
     * @method _IH_Category_QB whereOrder($value)
     * @method _IH_Category_QB whereIsFeatured($value)
     * @method _IH_Category_QB whereIsDefault($value)
     * @method _IH_Category_QB whereCreatedAt($value)
     * @method _IH_Category_QB whereUpdatedAt($value)
     * @method Category baseSole(array|string $columns = ['*'])
     * @method Category create(array $attributes = [])
     * @method _IH_Category_C|Category[] cursor()
     * @method Category|null|_IH_Category_C|Category[] find($id, array|string $columns = ['*'])
     * @method _IH_Category_C|Category[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Category|_IH_Category_C|Category[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Category|_IH_Category_C|Category[] findOrFail($id, array|string $columns = ['*'])
     * @method Category|_IH_Category_C|Category[] findOrNew($id, array|string $columns = ['*'])
     * @method Category first(array|string $columns = ['*'])
     * @method Category firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Category firstOrCreate(array $attributes = [], array $values = [])
     * @method Category firstOrFail(array|string $columns = ['*'])
     * @method Category firstOrNew(array $attributes = [], array $values = [])
     * @method Category firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Category forceCreate(array $attributes)
     * @method _IH_Category_C|Category[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Category_C|Category[] get(array|string $columns = ['*'])
     * @method Category getModel()
     * @method Category[] getModels(array|string $columns = ['*'])
     * @method _IH_Category_C|Category[] hydrate(array $items)
     * @method Category make(array $attributes = [])
     * @method Category newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Category[]|_IH_Category_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Category[]|_IH_Category_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Category sole(array|string $columns = ['*'])
     * @method Category updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Category_QB extends _BaseBuilder {}

    /**
     * @method PostTranslation|null getOrPut($key, $value)
     * @method PostTranslation|$this shift(int $count = 1)
     * @method PostTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PostTranslation|$this pop(int $count = 1)
     * @method PostTranslation|null pull($key, \Closure $default = null)
     * @method PostTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method PostTranslation|$this random(callable|int|null $number = null)
     * @method PostTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PostTranslation|null get($key, \Closure $default = null)
     * @method PostTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method PostTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PostTranslation|null find($key, $default = null)
     * @method PostTranslation[] all()
     */
    class _IH_PostTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PostTranslation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_PostTranslation_QB whereLangCode($value)
     * @method _IH_PostTranslation_QB wherePostsId($value)
     * @method _IH_PostTranslation_QB whereName($value)
     * @method _IH_PostTranslation_QB whereDescription($value)
     * @method _IH_PostTranslation_QB whereContent($value)
     * @method PostTranslation baseSole(array|string $columns = ['*'])
     * @method PostTranslation create(array $attributes = [])
     * @method _IH_PostTranslation_C|PostTranslation[] cursor()
     * @method PostTranslation|null|_IH_PostTranslation_C|PostTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_PostTranslation_C|PostTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PostTranslation|_IH_PostTranslation_C|PostTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostTranslation|_IH_PostTranslation_C|PostTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method PostTranslation|_IH_PostTranslation_C|PostTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method PostTranslation first(array|string $columns = ['*'])
     * @method PostTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PostTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method PostTranslation firstOrFail(array|string $columns = ['*'])
     * @method PostTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method PostTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PostTranslation forceCreate(array $attributes)
     * @method _IH_PostTranslation_C|PostTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PostTranslation_C|PostTranslation[] get(array|string $columns = ['*'])
     * @method PostTranslation getModel()
     * @method PostTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_PostTranslation_C|PostTranslation[] hydrate(array $items)
     * @method PostTranslation make(array $attributes = [])
     * @method PostTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PostTranslation[]|_IH_PostTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|PostTranslation[]|_IH_PostTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PostTranslation sole(array|string $columns = ['*'])
     * @method PostTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_PostTranslation_QB extends _BaseBuilder {}

    /**
     * @method Post|null getOrPut($key, $value)
     * @method Post|$this shift(int $count = 1)
     * @method Post|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Post|$this pop(int $count = 1)
     * @method Post|null pull($key, \Closure $default = null)
     * @method Post|null last(callable $callback = null, \Closure $default = null)
     * @method Post|$this random(callable|int|null $number = null)
     * @method Post|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Post|null get($key, \Closure $default = null)
     * @method Post|null first(callable $callback = null, \Closure $default = null)
     * @method Post|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Post|null find($key, $default = null)
     * @method Post[] all()
     */
    class _IH_Post_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Post[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Post_QB whereId($value)
     * @method _IH_Post_QB whereName($value)
     * @method _IH_Post_QB whereDescription($value)
     * @method _IH_Post_QB whereContent($value)
     * @method _IH_Post_QB whereStatus($value)
     * @method _IH_Post_QB whereAuthorId($value)
     * @method _IH_Post_QB whereAuthorType($value)
     * @method _IH_Post_QB whereIsFeatured($value)
     * @method _IH_Post_QB whereImage($value)
     * @method _IH_Post_QB whereViews($value)
     * @method _IH_Post_QB whereFormatType($value)
     * @method _IH_Post_QB whereCreatedAt($value)
     * @method _IH_Post_QB whereUpdatedAt($value)
     * @method Post baseSole(array|string $columns = ['*'])
     * @method Post create(array $attributes = [])
     * @method _IH_Post_C|Post[] cursor()
     * @method Post|null|_IH_Post_C|Post[] find($id, array|string $columns = ['*'])
     * @method _IH_Post_C|Post[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Post|_IH_Post_C|Post[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Post|_IH_Post_C|Post[] findOrFail($id, array|string $columns = ['*'])
     * @method Post|_IH_Post_C|Post[] findOrNew($id, array|string $columns = ['*'])
     * @method Post first(array|string $columns = ['*'])
     * @method Post firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Post firstOrCreate(array $attributes = [], array $values = [])
     * @method Post firstOrFail(array|string $columns = ['*'])
     * @method Post firstOrNew(array $attributes = [], array $values = [])
     * @method Post firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Post forceCreate(array $attributes)
     * @method _IH_Post_C|Post[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Post_C|Post[] get(array|string $columns = ['*'])
     * @method Post getModel()
     * @method Post[] getModels(array|string $columns = ['*'])
     * @method _IH_Post_C|Post[] hydrate(array $items)
     * @method Post make(array $attributes = [])
     * @method Post newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Post[]|_IH_Post_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Post[]|_IH_Post_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Post sole(array|string $columns = ['*'])
     * @method Post updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Post_QB extends _BaseBuilder {}

    /**
     * @method TagTranslation|null getOrPut($key, $value)
     * @method TagTranslation|$this shift(int $count = 1)
     * @method TagTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method TagTranslation|$this pop(int $count = 1)
     * @method TagTranslation|null pull($key, \Closure $default = null)
     * @method TagTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method TagTranslation|$this random(callable|int|null $number = null)
     * @method TagTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method TagTranslation|null get($key, \Closure $default = null)
     * @method TagTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method TagTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method TagTranslation|null find($key, $default = null)
     * @method TagTranslation[] all()
     */
    class _IH_TagTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return TagTranslation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_TagTranslation_QB whereLangCode($value)
     * @method _IH_TagTranslation_QB whereTagsId($value)
     * @method _IH_TagTranslation_QB whereName($value)
     * @method _IH_TagTranslation_QB whereDescription($value)
     * @method TagTranslation baseSole(array|string $columns = ['*'])
     * @method TagTranslation create(array $attributes = [])
     * @method _IH_TagTranslation_C|TagTranslation[] cursor()
     * @method TagTranslation|null|_IH_TagTranslation_C|TagTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_TagTranslation_C|TagTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method TagTranslation|_IH_TagTranslation_C|TagTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method TagTranslation|_IH_TagTranslation_C|TagTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method TagTranslation|_IH_TagTranslation_C|TagTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method TagTranslation first(array|string $columns = ['*'])
     * @method TagTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method TagTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method TagTranslation firstOrFail(array|string $columns = ['*'])
     * @method TagTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method TagTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method TagTranslation forceCreate(array $attributes)
     * @method _IH_TagTranslation_C|TagTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_TagTranslation_C|TagTranslation[] get(array|string $columns = ['*'])
     * @method TagTranslation getModel()
     * @method TagTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_TagTranslation_C|TagTranslation[] hydrate(array $items)
     * @method TagTranslation make(array $attributes = [])
     * @method TagTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|TagTranslation[]|_IH_TagTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|TagTranslation[]|_IH_TagTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method TagTranslation sole(array|string $columns = ['*'])
     * @method TagTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_TagTranslation_QB extends _BaseBuilder {}

    /**
     * @method Tag|null getOrPut($key, $value)
     * @method Tag|$this shift(int $count = 1)
     * @method Tag|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Tag|$this pop(int $count = 1)
     * @method Tag|null pull($key, \Closure $default = null)
     * @method Tag|null last(callable $callback = null, \Closure $default = null)
     * @method Tag|$this random(callable|int|null $number = null)
     * @method Tag|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Tag|null get($key, \Closure $default = null)
     * @method Tag|null first(callable $callback = null, \Closure $default = null)
     * @method Tag|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Tag|null find($key, $default = null)
     * @method Tag[] all()
     */
    class _IH_Tag_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Tag[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Tag_QB whereId($value)
     * @method _IH_Tag_QB whereName($value)
     * @method _IH_Tag_QB whereAuthorId($value)
     * @method _IH_Tag_QB whereAuthorType($value)
     * @method _IH_Tag_QB whereDescription($value)
     * @method _IH_Tag_QB whereStatus($value)
     * @method _IH_Tag_QB whereCreatedAt($value)
     * @method _IH_Tag_QB whereUpdatedAt($value)
     * @method Tag baseSole(array|string $columns = ['*'])
     * @method Tag create(array $attributes = [])
     * @method _IH_Tag_C|Tag[] cursor()
     * @method Tag|null|_IH_Tag_C|Tag[] find($id, array|string $columns = ['*'])
     * @method _IH_Tag_C|Tag[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Tag|_IH_Tag_C|Tag[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Tag|_IH_Tag_C|Tag[] findOrFail($id, array|string $columns = ['*'])
     * @method Tag|_IH_Tag_C|Tag[] findOrNew($id, array|string $columns = ['*'])
     * @method Tag first(array|string $columns = ['*'])
     * @method Tag firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Tag firstOrCreate(array $attributes = [], array $values = [])
     * @method Tag firstOrFail(array|string $columns = ['*'])
     * @method Tag firstOrNew(array $attributes = [], array $values = [])
     * @method Tag firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Tag forceCreate(array $attributes)
     * @method _IH_Tag_C|Tag[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Tag_C|Tag[] get(array|string $columns = ['*'])
     * @method Tag getModel()
     * @method Tag[] getModels(array|string $columns = ['*'])
     * @method _IH_Tag_C|Tag[] hydrate(array $items)
     * @method Tag make(array $attributes = [])
     * @method Tag newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Tag[]|_IH_Tag_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Tag[]|_IH_Tag_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Tag sole(array|string $columns = ['*'])
     * @method Tag updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Tag_QB extends _BaseBuilder {}
}
