<?php //2ff323f455874c87d7fae8644ab4d3fa
/** @noinspection all */

namespace LaravelIdea\Helper\Botble\ACL\Models {

    use Botble\ACL\Models\Activation;
    use Botble\ACL\Models\Role;
    use Botble\ACL\Models\User;
    use Botble\ACL\Models\UserMeta;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method Activation|null getOrPut($key, $value)
     * @method Activation|$this shift(int $count = 1)
     * @method Activation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Activation|$this pop(int $count = 1)
     * @method Activation|null pull($key, \Closure $default = null)
     * @method Activation|null last(callable $callback = null, \Closure $default = null)
     * @method Activation|$this random(callable|int|null $number = null)
     * @method Activation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Activation|null get($key, \Closure $default = null)
     * @method Activation|null first(callable $callback = null, \Closure $default = null)
     * @method Activation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Activation|null find($key, $default = null)
     * @method Activation[] all()
     */
    class _IH_Activation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Activation[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Activation_QB whereId($value)
     * @method _IH_Activation_QB whereUserId($value)
     * @method _IH_Activation_QB whereCode($value)
     * @method _IH_Activation_QB whereCompleted($value)
     * @method _IH_Activation_QB whereCompletedAt($value)
     * @method _IH_Activation_QB whereCreatedAt($value)
     * @method _IH_Activation_QB whereUpdatedAt($value)
     * @method Activation baseSole(array|string $columns = ['*'])
     * @method Activation create(array $attributes = [])
     * @method _IH_Activation_C|Activation[] cursor()
     * @method Activation|null|_IH_Activation_C|Activation[] find($id, array|string $columns = ['*'])
     * @method _IH_Activation_C|Activation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Activation|_IH_Activation_C|Activation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Activation|_IH_Activation_C|Activation[] findOrFail($id, array|string $columns = ['*'])
     * @method Activation|_IH_Activation_C|Activation[] findOrNew($id, array|string $columns = ['*'])
     * @method Activation first(array|string $columns = ['*'])
     * @method Activation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Activation firstOrCreate(array $attributes = [], array $values = [])
     * @method Activation firstOrFail(array|string $columns = ['*'])
     * @method Activation firstOrNew(array $attributes = [], array $values = [])
     * @method Activation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Activation forceCreate(array $attributes)
     * @method _IH_Activation_C|Activation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Activation_C|Activation[] get(array|string $columns = ['*'])
     * @method Activation getModel()
     * @method Activation[] getModels(array|string $columns = ['*'])
     * @method _IH_Activation_C|Activation[] hydrate(array $items)
     * @method Activation make(array $attributes = [])
     * @method Activation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Activation[]|_IH_Activation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Activation[]|_IH_Activation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Activation sole(array|string $columns = ['*'])
     * @method Activation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Activation_QB extends _BaseBuilder {}

    /**
     * @method Role|null getOrPut($key, $value)
     * @method Role|$this shift(int $count = 1)
     * @method Role|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Role|$this pop(int $count = 1)
     * @method Role|null pull($key, \Closure $default = null)
     * @method Role|null last(callable $callback = null, \Closure $default = null)
     * @method Role|$this random(callable|int|null $number = null)
     * @method Role|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Role|null get($key, \Closure $default = null)
     * @method Role|null first(callable $callback = null, \Closure $default = null)
     * @method Role|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Role|null find($key, $default = null)
     * @method Role[] all()
     */
    class _IH_Role_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Role[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Role_QB whereId($value)
     * @method _IH_Role_QB whereSlug($value)
     * @method _IH_Role_QB whereName($value)
     * @method _IH_Role_QB wherePermissions($value)
     * @method _IH_Role_QB whereDescription($value)
     * @method _IH_Role_QB whereIsDefault($value)
     * @method _IH_Role_QB whereCreatedBy($value)
     * @method _IH_Role_QB whereUpdatedBy($value)
     * @method _IH_Role_QB whereCreatedAt($value)
     * @method _IH_Role_QB whereUpdatedAt($value)
     * @method Role baseSole(array|string $columns = ['*'])
     * @method Role create(array $attributes = [])
     * @method _IH_Role_C|Role[] cursor()
     * @method Role|null|_IH_Role_C|Role[] find($id, array|string $columns = ['*'])
     * @method _IH_Role_C|Role[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Role|_IH_Role_C|Role[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Role|_IH_Role_C|Role[] findOrFail($id, array|string $columns = ['*'])
     * @method Role|_IH_Role_C|Role[] findOrNew($id, array|string $columns = ['*'])
     * @method Role first(array|string $columns = ['*'])
     * @method Role firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Role firstOrCreate(array $attributes = [], array $values = [])
     * @method Role firstOrFail(array|string $columns = ['*'])
     * @method Role firstOrNew(array $attributes = [], array $values = [])
     * @method Role firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Role forceCreate(array $attributes)
     * @method _IH_Role_C|Role[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Role_C|Role[] get(array|string $columns = ['*'])
     * @method Role getModel()
     * @method Role[] getModels(array|string $columns = ['*'])
     * @method _IH_Role_C|Role[] hydrate(array $items)
     * @method Role make(array $attributes = [])
     * @method Role newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Role[]|_IH_Role_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Role[]|_IH_Role_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Role sole(array|string $columns = ['*'])
     * @method Role updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Role_QB extends _BaseBuilder {}

    /**
     * @method UserMeta|null getOrPut($key, $value)
     * @method UserMeta|$this shift(int $count = 1)
     * @method UserMeta|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method UserMeta|$this pop(int $count = 1)
     * @method UserMeta|null pull($key, \Closure $default = null)
     * @method UserMeta|null last(callable $callback = null, \Closure $default = null)
     * @method UserMeta|$this random(callable|int|null $number = null)
     * @method UserMeta|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method UserMeta|null get($key, \Closure $default = null)
     * @method UserMeta|null first(callable $callback = null, \Closure $default = null)
     * @method UserMeta|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method UserMeta|null find($key, $default = null)
     * @method UserMeta[] all()
     */
    class _IH_UserMeta_C extends _BaseCollection {
        /**
         * @param int $size
         * @return UserMeta[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_UserMeta_QB whereId($value)
     * @method _IH_UserMeta_QB whereValue($value)
     * @method _IH_UserMeta_QB whereUserId($value)
     * @method _IH_UserMeta_QB whereCreatedAt($value)
     * @method _IH_UserMeta_QB whereUpdatedAt($value)
     * @method UserMeta baseSole(array|string $columns = ['*'])
     * @method UserMeta create(array $attributes = [])
     * @method _IH_UserMeta_C|UserMeta[] cursor()
     * @method UserMeta|null|_IH_UserMeta_C|UserMeta[] find($id, array|string $columns = ['*'])
     * @method _IH_UserMeta_C|UserMeta[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method UserMeta|_IH_UserMeta_C|UserMeta[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UserMeta|_IH_UserMeta_C|UserMeta[] findOrFail($id, array|string $columns = ['*'])
     * @method UserMeta|_IH_UserMeta_C|UserMeta[] findOrNew($id, array|string $columns = ['*'])
     * @method UserMeta first(array|string $columns = ['*'])
     * @method UserMeta firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UserMeta firstOrCreate(array $attributes = [], array $values = [])
     * @method UserMeta firstOrFail(array|string $columns = ['*'])
     * @method UserMeta firstOrNew(array $attributes = [], array $values = [])
     * @method UserMeta firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method UserMeta forceCreate(array $attributes)
     * @method _IH_UserMeta_C|UserMeta[] fromQuery(string $query, array $bindings = [])
     * @method _IH_UserMeta_C|UserMeta[] get(array|string $columns = ['*'])
     * @method UserMeta getModel()
     * @method UserMeta[] getModels(array|string $columns = ['*'])
     * @method _IH_UserMeta_C|UserMeta[] hydrate(array $items)
     * @method UserMeta make(array $attributes = [])
     * @method UserMeta newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|UserMeta[]|_IH_UserMeta_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|UserMeta[]|_IH_UserMeta_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UserMeta sole(array|string $columns = ['*'])
     * @method UserMeta updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_UserMeta_QB extends _BaseBuilder {}

    /**
     * @method User|null getOrPut($key, $value)
     * @method User|$this shift(int $count = 1)
     * @method User|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method User|$this pop(int $count = 1)
     * @method User|null pull($key, \Closure $default = null)
     * @method User|null last(callable $callback = null, \Closure $default = null)
     * @method User|$this random(callable|int|null $number = null)
     * @method User|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method User|null get($key, \Closure $default = null)
     * @method User|null first(callable $callback = null, \Closure $default = null)
     * @method User|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method User|null find($key, $default = null)
     * @method User[] all()
     */
    class _IH_User_C extends _BaseCollection {
        /**
         * @param int $size
         * @return User[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_User_QB whereId($value)
     * @method _IH_User_QB whereEmail($value)
     * @method _IH_User_QB whereEmailVerifiedAt($value)
     * @method _IH_User_QB wherePassword($value)
     * @method _IH_User_QB whereRememberToken($value)
     * @method _IH_User_QB whereCreatedAt($value)
     * @method _IH_User_QB whereUpdatedAt($value)
     * @method _IH_User_QB whereFirstName($value)
     * @method _IH_User_QB whereLastName($value)
     * @method _IH_User_QB whereUsername($value)
     * @method _IH_User_QB whereAvatarId($value)
     * @method _IH_User_QB whereSuperUser($value)
     * @method _IH_User_QB whereManageSupers($value)
     * @method _IH_User_QB wherePermissions($value)
     * @method _IH_User_QB whereLastLogin($value)
     * @method User baseSole(array|string $columns = ['*'])
     * @method User create(array $attributes = [])
     * @method _IH_User_C|User[] cursor()
     * @method User|null|_IH_User_C|User[] find($id, array|string $columns = ['*'])
     * @method _IH_User_C|User[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method User|_IH_User_C|User[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method User|_IH_User_C|User[] findOrFail($id, array|string $columns = ['*'])
     * @method User|_IH_User_C|User[] findOrNew($id, array|string $columns = ['*'])
     * @method User first(array|string $columns = ['*'])
     * @method User firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method User firstOrCreate(array $attributes = [], array $values = [])
     * @method User firstOrFail(array|string $columns = ['*'])
     * @method User firstOrNew(array $attributes = [], array $values = [])
     * @method User firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method User forceCreate(array $attributes)
     * @method _IH_User_C|User[] fromQuery(string $query, array $bindings = [])
     * @method _IH_User_C|User[] get(array|string $columns = ['*'])
     * @method User getModel()
     * @method User[] getModels(array|string $columns = ['*'])
     * @method _IH_User_C|User[] hydrate(array $items)
     * @method User make(array $attributes = [])
     * @method User newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|User[]|_IH_User_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|User[]|_IH_User_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method User sole(array|string $columns = ['*'])
     * @method User updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_User_QB extends _BaseBuilder {}
}
