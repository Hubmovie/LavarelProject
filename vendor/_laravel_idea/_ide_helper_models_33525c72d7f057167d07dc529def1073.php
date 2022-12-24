<?php //f092618518cdd9f0bdfa2ef01611ae19
/** @noinspection all */

namespace Botble\Location\Models {

    use Botble\Base\Enums\BaseStatusEnum;
    use Botble\Base\Models\MetaBox;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_MetaBox_C;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_MetaBox_QB;
    use LaravelIdea\Helper\Botble\Location\Models\_IH_CityTranslation_C;
    use LaravelIdea\Helper\Botble\Location\Models\_IH_CityTranslation_QB;
    use LaravelIdea\Helper\Botble\Location\Models\_IH_City_C;
    use LaravelIdea\Helper\Botble\Location\Models\_IH_City_QB;
    use LaravelIdea\Helper\Botble\Location\Models\_IH_CountryTranslation_C;
    use LaravelIdea\Helper\Botble\Location\Models\_IH_CountryTranslation_QB;
    use LaravelIdea\Helper\Botble\Location\Models\_IH_Country_C;
    use LaravelIdea\Helper\Botble\Location\Models\_IH_Country_QB;
    use LaravelIdea\Helper\Botble\Location\Models\_IH_StateTranslation_C;
    use LaravelIdea\Helper\Botble\Location\Models\_IH_StateTranslation_QB;
    use LaravelIdea\Helper\Botble\Location\Models\_IH_State_C;
    use LaravelIdea\Helper\Botble\Location\Models\_IH_State_QB;

    /**
     * @property int $id
     * @property string $name
     * @property int $state_id
     * @property int|null $country_id
     * @property string|null $record_id
     * @property int $order
     * @property int $is_default
     * @property BaseStatusEnum $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Country|null $country
     * @method BelongsTo|_IH_Country_QB country()
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property State $state
     * @method BelongsTo|_IH_State_QB state()
     * @method static _IH_City_QB onWriteConnection()
     * @method _IH_City_QB newQuery()
     * @method static _IH_City_QB on(null|string $connection = null)
     * @method static _IH_City_QB query()
     * @method static _IH_City_QB with(array|string $relations)
     * @method _IH_City_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_City_C|City[] all()
     * @ownLinks state_id,\Botble\Location\Models\State,id|country_id,\Botble\Location\Models\Country,id
     * @foreignLinks id,\Botble\Location\Models\CityTranslation,cities_id
     * @mixin _IH_City_QB
     */
    class City extends Model {}

    /**
     * @property string $lang_code
     * @property int $cities_id
     * @property string|null $name
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @method static _IH_CityTranslation_QB onWriteConnection()
     * @method _IH_CityTranslation_QB newQuery()
     * @method static _IH_CityTranslation_QB on(null|string $connection = null)
     * @method static _IH_CityTranslation_QB query()
     * @method static _IH_CityTranslation_QB with(array|string $relations)
     * @method _IH_CityTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_CityTranslation_C|CityTranslation[] all()
     * @ownLinks cities_id,\Botble\Location\Models\City,id
     * @mixin _IH_CityTranslation_QB
     */
    class CityTranslation extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string|null $nationality
     * @property int $order
     * @property int $is_default
     * @property BaseStatusEnum $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string|null $code
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @property _IH_State_C|State[] $states
     * @property-read int $states_count
     * @method HasMany|_IH_State_QB states()
     * @method static _IH_Country_QB onWriteConnection()
     * @method _IH_Country_QB newQuery()
     * @method static _IH_Country_QB on(null|string $connection = null)
     * @method static _IH_Country_QB query()
     * @method static _IH_Country_QB with(array|string $relations)
     * @method _IH_Country_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Country_C|Country[] all()
     * @foreignLinks id,\Botble\Location\Models\State,country_id|id,\Botble\Location\Models\City,country_id|id,\Botble\Location\Models\CountryTranslation,countries_id
     * @mixin _IH_Country_QB
     */
    class Country extends Model {}

    /**
     * @property string $lang_code
     * @property int $countries_id
     * @property string|null $name
     * @property string|null $nationality
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @method static _IH_CountryTranslation_QB onWriteConnection()
     * @method _IH_CountryTranslation_QB newQuery()
     * @method static _IH_CountryTranslation_QB on(null|string $connection = null)
     * @method static _IH_CountryTranslation_QB query()
     * @method static _IH_CountryTranslation_QB with(array|string $relations)
     * @method _IH_CountryTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_CountryTranslation_C|CountryTranslation[] all()
     * @ownLinks countries_id,\Botble\Location\Models\Country,id
     * @mixin _IH_CountryTranslation_QB
     */
    class CountryTranslation extends Model {}

    /**
     * @property int $id
     * @property string $name
     * @property string|null $abbreviation
     * @property int|null $country_id
     * @property int $order
     * @property int $is_default
     * @property BaseStatusEnum $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_City_C|City[] $cities
     * @property-read int $cities_count
     * @method HasMany|_IH_City_QB cities()
     * @property Country|null $country
     * @method BelongsTo|_IH_Country_QB country()
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @method static _IH_State_QB onWriteConnection()
     * @method _IH_State_QB newQuery()
     * @method static _IH_State_QB on(null|string $connection = null)
     * @method static _IH_State_QB query()
     * @method static _IH_State_QB with(array|string $relations)
     * @method _IH_State_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_State_C|State[] all()
     * @ownLinks country_id,\Botble\Location\Models\Country,id
     * @foreignLinks id,\Botble\Location\Models\City,state_id|id,\Botble\Location\Models\StateTranslation,states_id
     * @mixin _IH_State_QB
     */
    class State extends Model {}

    /**
     * @property string $lang_code
     * @property int $states_id
     * @property string|null $name
     * @property string|null $abbreviation
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @method static _IH_StateTranslation_QB onWriteConnection()
     * @method _IH_StateTranslation_QB newQuery()
     * @method static _IH_StateTranslation_QB on(null|string $connection = null)
     * @method static _IH_StateTranslation_QB query()
     * @method static _IH_StateTranslation_QB with(array|string $relations)
     * @method _IH_StateTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_StateTranslation_C|StateTranslation[] all()
     * @ownLinks states_id,\Botble\Location\Models\State,id
     * @mixin _IH_StateTranslation_QB
     */
    class StateTranslation extends Model {}
}
