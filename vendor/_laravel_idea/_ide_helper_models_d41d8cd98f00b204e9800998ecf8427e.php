<?php //f6a605538a5f3e3c0b76fccaf23b6f78
/** @noinspection all */

namespace  {

    use Illuminate\Database\Eloquent\Model;
    use LaravelIdea\Helper\_IH_DummyEloquentModel2_C;
    use LaravelIdea\Helper\_IH_DummyEloquentModel2_QB;
    use LaravelIdea\Helper\_IH_DummyEloquentModel_C;
    use LaravelIdea\Helper\_IH_DummyEloquentModel_QB;
    use LaravelIdea\Helper\_IH_TestModel_C;
    use LaravelIdea\Helper\_IH_TestModel_QB;

    /**
     * @method static _IH_DummyEloquentModel_QB onWriteConnection()
     * @method _IH_DummyEloquentModel_QB newQuery()
     * @method static _IH_DummyEloquentModel_QB on(null|string $connection = null)
     * @method static _IH_DummyEloquentModel_QB query()
     * @method static _IH_DummyEloquentModel_QB with(array|string $relations)
     * @method _IH_DummyEloquentModel_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_DummyEloquentModel_C|\DummyEloquentModel[] all()
     * @mixin _IH_DummyEloquentModel_QB
     */
    class DummyEloquentModel extends Model {}

    /**
     * @method static _IH_DummyEloquentModel2_QB onWriteConnection()
     * @method _IH_DummyEloquentModel2_QB newQuery()
     * @method static _IH_DummyEloquentModel2_QB on(null|string $connection = null)
     * @method static _IH_DummyEloquentModel2_QB query()
     * @method static _IH_DummyEloquentModel2_QB with(array|string $relations)
     * @method _IH_DummyEloquentModel2_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_DummyEloquentModel2_C|\DummyEloquentModel2[] all()
     * @mixin _IH_DummyEloquentModel2_QB
     */
    class DummyEloquentModel2 extends Model {}

    /**
     * @method static _IH_TestModel_QB onWriteConnection()
     * @method _IH_TestModel_QB newQuery()
     * @method static _IH_TestModel_QB on(null|string $connection = null)
     * @method static _IH_TestModel_QB query()
     * @method static _IH_TestModel_QB with(array|string $relations)
     * @method _IH_TestModel_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_TestModel_C|\TestModel[] all()
     * @mixin _IH_TestModel_QB
     */
    class TestModel extends Model {}
}
