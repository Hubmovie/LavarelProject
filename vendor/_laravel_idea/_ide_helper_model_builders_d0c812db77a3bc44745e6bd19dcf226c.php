<?php //ab84e7a005452f82a4086cf3a4605db9
/** @noinspection all */

namespace LaravelIdea\Helper\Botble\Contact\Models {

    use Botble\Contact\Models\Contact;
    use Botble\Contact\Models\ContactReply;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method ContactReply|null getOrPut($key, $value)
     * @method ContactReply|$this shift(int $count = 1)
     * @method ContactReply|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ContactReply|$this pop(int $count = 1)
     * @method ContactReply|null pull($key, \Closure $default = null)
     * @method ContactReply|null last(callable $callback = null, \Closure $default = null)
     * @method ContactReply|$this random(callable|int|null $number = null)
     * @method ContactReply|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ContactReply|null get($key, \Closure $default = null)
     * @method ContactReply|null first(callable $callback = null, \Closure $default = null)
     * @method ContactReply|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ContactReply|null find($key, $default = null)
     * @method ContactReply[] all()
     */
    class _IH_ContactReply_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ContactReply[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_ContactReply_QB whereId($value)
     * @method _IH_ContactReply_QB whereMessage($value)
     * @method _IH_ContactReply_QB whereContactId($value)
     * @method _IH_ContactReply_QB whereCreatedAt($value)
     * @method _IH_ContactReply_QB whereUpdatedAt($value)
     * @method ContactReply baseSole(array|string $columns = ['*'])
     * @method ContactReply create(array $attributes = [])
     * @method _IH_ContactReply_C|ContactReply[] cursor()
     * @method ContactReply|null|_IH_ContactReply_C|ContactReply[] find($id, array|string $columns = ['*'])
     * @method _IH_ContactReply_C|ContactReply[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ContactReply|_IH_ContactReply_C|ContactReply[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ContactReply|_IH_ContactReply_C|ContactReply[] findOrFail($id, array|string $columns = ['*'])
     * @method ContactReply|_IH_ContactReply_C|ContactReply[] findOrNew($id, array|string $columns = ['*'])
     * @method ContactReply first(array|string $columns = ['*'])
     * @method ContactReply firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ContactReply firstOrCreate(array $attributes = [], array $values = [])
     * @method ContactReply firstOrFail(array|string $columns = ['*'])
     * @method ContactReply firstOrNew(array $attributes = [], array $values = [])
     * @method ContactReply firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ContactReply forceCreate(array $attributes)
     * @method _IH_ContactReply_C|ContactReply[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ContactReply_C|ContactReply[] get(array|string $columns = ['*'])
     * @method ContactReply getModel()
     * @method ContactReply[] getModels(array|string $columns = ['*'])
     * @method _IH_ContactReply_C|ContactReply[] hydrate(array $items)
     * @method ContactReply make(array $attributes = [])
     * @method ContactReply newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ContactReply[]|_IH_ContactReply_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|ContactReply[]|_IH_ContactReply_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ContactReply sole(array|string $columns = ['*'])
     * @method ContactReply updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ContactReply_QB extends _BaseBuilder {}

    /**
     * @method Contact|null getOrPut($key, $value)
     * @method Contact|$this shift(int $count = 1)
     * @method Contact|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Contact|$this pop(int $count = 1)
     * @method Contact|null pull($key, \Closure $default = null)
     * @method Contact|null last(callable $callback = null, \Closure $default = null)
     * @method Contact|$this random(callable|int|null $number = null)
     * @method Contact|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Contact|null get($key, \Closure $default = null)
     * @method Contact|null first(callable $callback = null, \Closure $default = null)
     * @method Contact|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Contact|null find($key, $default = null)
     * @method Contact[] all()
     */
    class _IH_Contact_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Contact[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Contact_QB whereId($value)
     * @method _IH_Contact_QB whereName($value)
     * @method _IH_Contact_QB whereEmail($value)
     * @method _IH_Contact_QB wherePhone($value)
     * @method _IH_Contact_QB whereAddress($value)
     * @method _IH_Contact_QB whereSubject($value)
     * @method _IH_Contact_QB whereContent($value)
     * @method _IH_Contact_QB whereStatus($value)
     * @method _IH_Contact_QB whereCreatedAt($value)
     * @method _IH_Contact_QB whereUpdatedAt($value)
     * @method Contact baseSole(array|string $columns = ['*'])
     * @method Contact create(array $attributes = [])
     * @method _IH_Contact_C|Contact[] cursor()
     * @method Contact|null|_IH_Contact_C|Contact[] find($id, array|string $columns = ['*'])
     * @method _IH_Contact_C|Contact[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Contact|_IH_Contact_C|Contact[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Contact|_IH_Contact_C|Contact[] findOrFail($id, array|string $columns = ['*'])
     * @method Contact|_IH_Contact_C|Contact[] findOrNew($id, array|string $columns = ['*'])
     * @method Contact first(array|string $columns = ['*'])
     * @method Contact firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Contact firstOrCreate(array $attributes = [], array $values = [])
     * @method Contact firstOrFail(array|string $columns = ['*'])
     * @method Contact firstOrNew(array $attributes = [], array $values = [])
     * @method Contact firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Contact forceCreate(array $attributes)
     * @method _IH_Contact_C|Contact[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Contact_C|Contact[] get(array|string $columns = ['*'])
     * @method Contact getModel()
     * @method Contact[] getModels(array|string $columns = ['*'])
     * @method _IH_Contact_C|Contact[] hydrate(array $items)
     * @method Contact make(array $attributes = [])
     * @method Contact newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Contact[]|_IH_Contact_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Contact[]|_IH_Contact_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Contact sole(array|string $columns = ['*'])
     * @method Contact updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Contact_QB extends _BaseBuilder {}
}
