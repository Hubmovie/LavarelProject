<?php //5af42a234916559aa2a240c466a8e013
/** @noinspection all */

namespace Botble\Base\Jobs {

    use Illuminate\Foundation\Bus\PendingDispatch;

    /**
     * @method static PendingDispatch dispatch(null|string $content, null|string $title, $to, array $args, bool $debug = false)
     * @method static void dispatchNow(null|string $content, null|string $title, $to, array $args, bool $debug = false)
     * @method static void dispatchSync(null|string $content, null|string $title, $to, array $args, bool $debug = false)
     */
    class SendMailJob {}
}

namespace Botble\Installer\Events {

    use Illuminate\Broadcasting\PendingBroadcast;
    use Illuminate\Http\Request;

    /**
     * @method static void dispatch(Request $request)
     * @method static PendingBroadcast broadcast(Request $request)
     */
    class EnvironmentSaved {}
}

namespace Botble\Newsletter\Events {

    use Botble\Newsletter\Models\Newsletter;
    use Illuminate\Broadcasting\PendingBroadcast;

    /**
     * @method static void dispatch(Newsletter $newsletter)
     * @method static PendingBroadcast broadcast(Newsletter $newsletter)
     */
    class SubscribeNewsletterEvent {}
}

namespace Illuminate\Foundation\Console {

    use Illuminate\Foundation\Bus\PendingDispatch;

    /**
     * @method static PendingDispatch dispatch(array $data)
     * @method static void dispatchNow(array $data)
     * @method static void dispatchSync(array $data)
     */
    class QueuedCommand {}
}

namespace Illuminate\Queue {

    use Illuminate\Foundation\Bus\PendingDispatch;
    use Laravel\SerializableClosure\SerializableClosure;

    /**
     * @method static PendingDispatch dispatch(SerializableClosure $closure)
     * @method static void dispatchNow(SerializableClosure $closure)
     * @method static void dispatchSync(SerializableClosure $closure)
     */
    class CallQueuedClosure {}
}

namespace Maatwebsite\Excel\Jobs {

    use Illuminate\Contracts\Queue\ShouldQueue;
    use Illuminate\Foundation\Bus\PendingDispatch;
    use Maatwebsite\Excel\Concerns\FromQuery;
    use Maatwebsite\Excel\Concerns\FromView;
    use Maatwebsite\Excel\Files\TemporaryFile;

    /**
     * @method static PendingDispatch dispatch(object $sheetExport, TemporaryFile $temporaryFile, string $writerType, int $sheetIndex, array $data)
     * @method static void dispatchNow(object $sheetExport, TemporaryFile $temporaryFile, string $writerType, int $sheetIndex, array $data)
     * @method static void dispatchSync(object $sheetExport, TemporaryFile $temporaryFile, string $writerType, int $sheetIndex, array $data)
     */
    class AppendDataToSheet {}

    /**
     * @method static PendingDispatch dispatch(FromQuery $sheetExport, TemporaryFile $temporaryFile, string $writerType, int $sheetIndex, int $page, int $chunkSize)
     * @method static void dispatchNow(FromQuery $sheetExport, TemporaryFile $temporaryFile, string $writerType, int $sheetIndex, int $page, int $chunkSize)
     * @method static void dispatchSync(FromQuery $sheetExport, TemporaryFile $temporaryFile, string $writerType, int $sheetIndex, int $page, int $chunkSize)
     */
    class AppendQueryToSheet {}

    /**
     * @method static PendingDispatch dispatch(FromView $sheetExport, TemporaryFile $temporaryFile, string $writerType, int $sheetIndex)
     * @method static void dispatchNow(FromView $sheetExport, TemporaryFile $temporaryFile, string $writerType, int $sheetIndex)
     * @method static void dispatchSync(FromView $sheetExport, TemporaryFile $temporaryFile, string $writerType, int $sheetIndex)
     */
    class AppendViewToSheet {}

    /**
     * @method static PendingDispatch dispatch(object $export, TemporaryFile $temporaryFile, string $writerType)
     * @method static void dispatchNow(object $export, TemporaryFile $temporaryFile, string $writerType)
     * @method static void dispatchSync(object $export, TemporaryFile $temporaryFile, string $writerType)
     */
    class QueueExport {}

    /**
     * @method static PendingDispatch dispatch(ShouldQueue $import = null)
     * @method static void dispatchNow(ShouldQueue $import = null)
     * @method static void dispatchSync(ShouldQueue $import = null)
     */
    class QueueImport {}
}
