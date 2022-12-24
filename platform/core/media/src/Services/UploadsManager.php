<?php

namespace Botble\Media\Services;

use Carbon\Carbon;
use Exception;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use League\Flysystem\FilesystemException;
use Mimey\MimeTypes;
use RvMedia;
use Storage;

class UploadsManager
{
    protected MimeTypes $mimeType;

    public function __construct(MimeTypes $mimeType)
    {
        $this->mimeType = $mimeType;
    }

    public function fileDetails(string $path): array
    {
        return [
            'filename' => File::basename($path),
            'url' => $path,
            'mime_type' => $this->fileMimeType($path),
            'size' => $this->fileSize($path),
            'modified' => $this->fileModified($path),
        ];
    }

    public function fileMimeType(string $path): ?string
    {
        return $this->mimeType->getMimeType(File::extension(RvMedia::getRealPath($path)));
    }

    public function fileSize(string $path): int
    {
        return Storage::size($path);
    }

    public function fileModified(string $path): string
    {
        return Carbon::createFromTimestamp(Storage::lastModified($path));
    }

    public function createDirectory(string $folder): bool|string
    {
        $folder = $this->cleanFolder($folder);

        if (Storage::exists($folder)) {
            return trans('core/media::media.folder_exists', compact('folder'));
        }

        return Storage::makeDirectory($folder);
    }

    protected function cleanFolder(string $folder): string
    {
        return DIRECTORY_SEPARATOR . trim(str_replace('..', '', $folder), DIRECTORY_SEPARATOR);
    }

    public function deleteDirectory(string $folder): bool|string
    {
        $folder = $this->cleanFolder($folder);

        $filesFolders = array_merge(Storage::directories($folder), Storage::files($folder));

        if (! empty($filesFolders)) {
            return trans('core/media::media.directory_must_empty');
        }

        return Storage::deleteDirectory($folder);
    }

    public function deleteFile(string $path): bool
    {
        $path = $this->cleanFolder($path);

        return Storage::delete($path);
    }

    public function saveFile(
        string $path,
        string $content,
        UploadedFile $file = null,
        array $visibility = ['visibility' => 'public']
    ): bool {
        if (! RvMedia::isChunkUploadEnabled() || ! $file) {
            return Storage::put($this->cleanFolder($path), $content, $visibility);
        }

        $currentChunksPath = RvMedia::getConfig('chunk.storage.chunks') . '/' . $file->getFilename();
        $disk = Storage::disk(RvMedia::getConfig('chunk.storage.disk'));

        try {
            $stream = $disk->getDriver()->readStream($currentChunksPath);

            if ($result = Storage::writeStream($path, $stream, $visibility)) {
                $disk->delete($currentChunksPath);
            }
        } catch (Exception|FilesystemException) {
            return Storage::put($this->cleanFolder($path), $content, $visibility);
        }

        return $result;
    }
}
