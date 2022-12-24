<?php //f9e98b5e3f85894d7059345dacc3bdc4
/** @noinspection all */

namespace Botble\Media\Models {

    use Botble\Base\Models\MetaBox;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_MetaBox_C;
    use LaravelIdea\Helper\Botble\Base\Models\_IH_MetaBox_QB;
    use LaravelIdea\Helper\Botble\Media\Models\_IH_MediaFile_C;
    use LaravelIdea\Helper\Botble\Media\Models\_IH_MediaFile_QB;
    use LaravelIdea\Helper\Botble\Media\Models\_IH_MediaFolder_C;
    use LaravelIdea\Helper\Botble\Media\Models\_IH_MediaFolder_QB;
    use LaravelIdea\Helper\Botble\Media\Models\_IH_MediaSetting_C;
    use LaravelIdea\Helper\Botble\Media\Models\_IH_MediaSetting_QB;

    /**
     * @property int $id
     * @property int $user_id
     * @property string $name
     * @property int $folder_id
     * @property string $mime_type
     * @property int $size
     * @property string $url
     * @property array|null $options
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Carbon|null $deleted_at
     * @property-read string $human_size attribute
     * @property-read string $icon attribute
     * @property-read null|string $preview_type attribute
     * @property-read null|string $preview_url attribute
     * @property-read string $type attribute
     * @property MediaFolder $folder
     * @method BelongsTo|_IH_MediaFolder_QB folder()
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @method static _IH_MediaFile_QB onWriteConnection()
     * @method _IH_MediaFile_QB newQuery()
     * @method static _IH_MediaFile_QB on(null|string $connection = null)
     * @method static _IH_MediaFile_QB query()
     * @method static _IH_MediaFile_QB with(array|string $relations)
     * @method _IH_MediaFile_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_MediaFile_C|MediaFile[] all()
     * @ownLinks user_id,\Botble\ACL\Models\User,id
     * @mixin _IH_MediaFile_QB
     */
    class MediaFile extends Model {}

    /**
     * @property int $id
     * @property int $user_id
     * @property string|null $name
     * @property string|null $slug
     * @property int $parent_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Carbon|null $deleted_at
     * @property _IH_MediaFile_C|MediaFile[] $files
     * @property-read int $files_count
     * @method HasMany|_IH_MediaFile_QB files()
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @method static _IH_MediaFolder_QB onWriteConnection()
     * @method _IH_MediaFolder_QB newQuery()
     * @method static _IH_MediaFolder_QB on(null|string $connection = null)
     * @method static _IH_MediaFolder_QB query()
     * @method static _IH_MediaFolder_QB with(array|string $relations)
     * @method _IH_MediaFolder_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_MediaFolder_C|MediaFolder[] all()
     * @ownLinks user_id,\Botble\ACL\Models\User,id
     * @mixin _IH_MediaFolder_QB
     */
    class MediaFolder extends Model {}

    /**
     * @property int $id
     * @property string $key
     * @property array|null $value
     * @property int|null $media_id
     * @property int|null $user_id
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_MetaBox_C|MetaBox[] $metadata
     * @property-read int $metadata_count
     * @method MorphToMany|_IH_MetaBox_QB metadata()
     * @method static _IH_MediaSetting_QB onWriteConnection()
     * @method _IH_MediaSetting_QB newQuery()
     * @method static _IH_MediaSetting_QB on(null|string $connection = null)
     * @method static _IH_MediaSetting_QB query()
     * @method static _IH_MediaSetting_QB with(array|string $relations)
     * @method _IH_MediaSetting_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_MediaSetting_C|MediaSetting[] all()
     * @ownLinks user_id,\Botble\ACL\Models\User,id
     * @mixin _IH_MediaSetting_QB
     */
    class MediaSetting extends Model {}
}
