<?php //3d23a9e8d435c78c0a5bd15736a40ee4
/** @noinspection all */

namespace LaravelIdea\Helper\Botble\Media\Models {

    use Botble\Media\Models\MediaFile;
    use Botble\Media\Models\MediaFolder;
    use Botble\Media\Models\MediaSetting;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method MediaFile|null getOrPut($key, $value)
     * @method MediaFile|$this shift(int $count = 1)
     * @method MediaFile|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method MediaFile|$this pop(int $count = 1)
     * @method MediaFile|null pull($key, \Closure $default = null)
     * @method MediaFile|null last(callable $callback = null, \Closure $default = null)
     * @method MediaFile|$this random(callable|int|null $number = null)
     * @method MediaFile|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method MediaFile|null get($key, \Closure $default = null)
     * @method MediaFile|null first(callable $callback = null, \Closure $default = null)
     * @method MediaFile|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method MediaFile|null find($key, $default = null)
     * @method MediaFile[] all()
     */
    class _IH_MediaFile_C extends _BaseCollection {
        /**
         * @param int $size
         * @return MediaFile[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_MediaFile_QB whereId($value)
     * @method _IH_MediaFile_QB whereUserId($value)
     * @method _IH_MediaFile_QB whereName($value)
     * @method _IH_MediaFile_QB whereFolderId($value)
     * @method _IH_MediaFile_QB whereMimeType($value)
     * @method _IH_MediaFile_QB whereSize($value)
     * @method _IH_MediaFile_QB whereUrl($value)
     * @method _IH_MediaFile_QB whereOptions($value)
     * @method _IH_MediaFile_QB whereCreatedAt($value)
     * @method _IH_MediaFile_QB whereUpdatedAt($value)
     * @method _IH_MediaFile_QB whereDeletedAt($value)
     * @method MediaFile baseSole(array|string $columns = ['*'])
     * @method MediaFile create(array $attributes = [])
     * @method _IH_MediaFile_C|MediaFile[] cursor()
     * @method MediaFile|null|_IH_MediaFile_C|MediaFile[] find($id, array|string $columns = ['*'])
     * @method _IH_MediaFile_C|MediaFile[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method MediaFile|_IH_MediaFile_C|MediaFile[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method MediaFile|_IH_MediaFile_C|MediaFile[] findOrFail($id, array|string $columns = ['*'])
     * @method MediaFile|_IH_MediaFile_C|MediaFile[] findOrNew($id, array|string $columns = ['*'])
     * @method MediaFile first(array|string $columns = ['*'])
     * @method MediaFile firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method MediaFile firstOrCreate(array $attributes = [], array $values = [])
     * @method MediaFile firstOrFail(array|string $columns = ['*'])
     * @method MediaFile firstOrNew(array $attributes = [], array $values = [])
     * @method MediaFile firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method MediaFile forceCreate(array $attributes)
     * @method _IH_MediaFile_C|MediaFile[] fromQuery(string $query, array $bindings = [])
     * @method _IH_MediaFile_C|MediaFile[] get(array|string $columns = ['*'])
     * @method MediaFile getModel()
     * @method MediaFile[] getModels(array|string $columns = ['*'])
     * @method _IH_MediaFile_C|MediaFile[] hydrate(array $items)
     * @method MediaFile make(array $attributes = [])
     * @method MediaFile newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|MediaFile[]|_IH_MediaFile_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|MediaFile[]|_IH_MediaFile_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method MediaFile sole(array|string $columns = ['*'])
     * @method MediaFile updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_MediaFile_QB extends _BaseBuilder {}

    /**
     * @method MediaFolder|null getOrPut($key, $value)
     * @method MediaFolder|$this shift(int $count = 1)
     * @method MediaFolder|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method MediaFolder|$this pop(int $count = 1)
     * @method MediaFolder|null pull($key, \Closure $default = null)
     * @method MediaFolder|null last(callable $callback = null, \Closure $default = null)
     * @method MediaFolder|$this random(callable|int|null $number = null)
     * @method MediaFolder|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method MediaFolder|null get($key, \Closure $default = null)
     * @method MediaFolder|null first(callable $callback = null, \Closure $default = null)
     * @method MediaFolder|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method MediaFolder|null find($key, $default = null)
     * @method MediaFolder[] all()
     */
    class _IH_MediaFolder_C extends _BaseCollection {
        /**
         * @param int $size
         * @return MediaFolder[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_MediaFolder_QB whereId($value)
     * @method _IH_MediaFolder_QB whereUserId($value)
     * @method _IH_MediaFolder_QB whereName($value)
     * @method _IH_MediaFolder_QB whereSlug($value)
     * @method _IH_MediaFolder_QB whereParentId($value)
     * @method _IH_MediaFolder_QB whereCreatedAt($value)
     * @method _IH_MediaFolder_QB whereUpdatedAt($value)
     * @method _IH_MediaFolder_QB whereDeletedAt($value)
     * @method MediaFolder baseSole(array|string $columns = ['*'])
     * @method MediaFolder create(array $attributes = [])
     * @method _IH_MediaFolder_C|MediaFolder[] cursor()
     * @method MediaFolder|null|_IH_MediaFolder_C|MediaFolder[] find($id, array|string $columns = ['*'])
     * @method _IH_MediaFolder_C|MediaFolder[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method MediaFolder|_IH_MediaFolder_C|MediaFolder[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method MediaFolder|_IH_MediaFolder_C|MediaFolder[] findOrFail($id, array|string $columns = ['*'])
     * @method MediaFolder|_IH_MediaFolder_C|MediaFolder[] findOrNew($id, array|string $columns = ['*'])
     * @method MediaFolder first(array|string $columns = ['*'])
     * @method MediaFolder firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method MediaFolder firstOrCreate(array $attributes = [], array $values = [])
     * @method MediaFolder firstOrFail(array|string $columns = ['*'])
     * @method MediaFolder firstOrNew(array $attributes = [], array $values = [])
     * @method MediaFolder firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method MediaFolder forceCreate(array $attributes)
     * @method _IH_MediaFolder_C|MediaFolder[] fromQuery(string $query, array $bindings = [])
     * @method _IH_MediaFolder_C|MediaFolder[] get(array|string $columns = ['*'])
     * @method MediaFolder getModel()
     * @method MediaFolder[] getModels(array|string $columns = ['*'])
     * @method _IH_MediaFolder_C|MediaFolder[] hydrate(array $items)
     * @method MediaFolder make(array $attributes = [])
     * @method MediaFolder newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|MediaFolder[]|_IH_MediaFolder_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|MediaFolder[]|_IH_MediaFolder_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method MediaFolder sole(array|string $columns = ['*'])
     * @method MediaFolder updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_MediaFolder_QB extends _BaseBuilder {}

    /**
     * @method MediaSetting|null getOrPut($key, $value)
     * @method MediaSetting|$this shift(int $count = 1)
     * @method MediaSetting|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method MediaSetting|$this pop(int $count = 1)
     * @method MediaSetting|null pull($key, \Closure $default = null)
     * @method MediaSetting|null last(callable $callback = null, \Closure $default = null)
     * @method MediaSetting|$this random(callable|int|null $number = null)
     * @method MediaSetting|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method MediaSetting|null get($key, \Closure $default = null)
     * @method MediaSetting|null first(callable $callback = null, \Closure $default = null)
     * @method MediaSetting|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method MediaSetting|null find($key, $default = null)
     * @method MediaSetting[] all()
     */
    class _IH_MediaSetting_C extends _BaseCollection {
        /**
         * @param int $size
         * @return MediaSetting[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_MediaSetting_QB whereId($value)
     * @method _IH_MediaSetting_QB whereValue($value)
     * @method _IH_MediaSetting_QB whereMediaId($value)
     * @method _IH_MediaSetting_QB whereUserId($value)
     * @method _IH_MediaSetting_QB whereCreatedAt($value)
     * @method _IH_MediaSetting_QB whereUpdatedAt($value)
     * @method MediaSetting baseSole(array|string $columns = ['*'])
     * @method MediaSetting create(array $attributes = [])
     * @method _IH_MediaSetting_C|MediaSetting[] cursor()
     * @method MediaSetting|null|_IH_MediaSetting_C|MediaSetting[] find($id, array|string $columns = ['*'])
     * @method _IH_MediaSetting_C|MediaSetting[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method MediaSetting|_IH_MediaSetting_C|MediaSetting[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method MediaSetting|_IH_MediaSetting_C|MediaSetting[] findOrFail($id, array|string $columns = ['*'])
     * @method MediaSetting|_IH_MediaSetting_C|MediaSetting[] findOrNew($id, array|string $columns = ['*'])
     * @method MediaSetting first(array|string $columns = ['*'])
     * @method MediaSetting firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method MediaSetting firstOrCreate(array $attributes = [], array $values = [])
     * @method MediaSetting firstOrFail(array|string $columns = ['*'])
     * @method MediaSetting firstOrNew(array $attributes = [], array $values = [])
     * @method MediaSetting firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method MediaSetting forceCreate(array $attributes)
     * @method _IH_MediaSetting_C|MediaSetting[] fromQuery(string $query, array $bindings = [])
     * @method _IH_MediaSetting_C|MediaSetting[] get(array|string $columns = ['*'])
     * @method MediaSetting getModel()
     * @method MediaSetting[] getModels(array|string $columns = ['*'])
     * @method _IH_MediaSetting_C|MediaSetting[] hydrate(array $items)
     * @method MediaSetting make(array $attributes = [])
     * @method MediaSetting newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|MediaSetting[]|_IH_MediaSetting_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|MediaSetting[]|_IH_MediaSetting_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method MediaSetting sole(array|string $columns = ['*'])
     * @method MediaSetting updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_MediaSetting_QB extends _BaseBuilder {}
}
