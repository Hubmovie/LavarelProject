<?php //a3536d8c4721322f289ec67f9eae4b56
/** @noinspection all */

namespace Barryvdh\Debugbar {

    /**
     * @see \Illuminate\Support\Facades\Facade::clearResolvedInstances
     * @method static void clearResolvedInstances()
     * @see \Barryvdh\Debugbar\Facades\Debugbar::critical
     * @method static void critical($message)
     * @see \Barryvdh\Debugbar\Facades\Debugbar::log
     * @method static void log($message)
     * @see \Barryvdh\Debugbar\Facades\Debugbar::getCollector
     * @method static \Barryvdh\Debugbar\Facades\LaravelDebugbar getCollector(string $name)
     * @see \Illuminate\Support\Facades\Facade::shouldReceive
     * @method static \Mockery\Expectation shouldReceive()
     * @see \Illuminate\Support\Facades\Facade::getFacadeRoot
     * @method static mixed getFacadeRoot()
     * @see \Barryvdh\Debugbar\Facades\Debugbar::emergency
     * @method static void emergency($message)
     * @see \Barryvdh\Debugbar\Facades\Debugbar::error
     * @method static void error($message)
     * @see \Illuminate\Support\Facades\Facade::expects
     * @method static \Mockery\Expectation expects()
     * @see \Illuminate\Support\Facades\Facade::getFacadeApplication
     * @method static \Illuminate\Contracts\Foundation\Application getFacadeApplication()
     * @see \Illuminate\Support\Facades\Facade::setFacadeApplication
     * @method static void setFacadeApplication(\Illuminate\Contracts\Foundation\Application $app)
     * @see \Barryvdh\Debugbar\Facades\Debugbar::addCollector
     * @method static \Barryvdh\Debugbar\Facades\LaravelDebugbar addCollector(\DebugBar\DataCollector\DataCollectorInterface $collector)
     * @see \Barryvdh\Debugbar\Facades\Debugbar::alert
     * @method static void alert($message)
     * @see \Barryvdh\Debugbar\Facades\Debugbar::warning
     * @method static void warning($message)
     * @see \Barryvdh\Debugbar\Facades\Debugbar::info
     * @method static void info($message)
     * @see \Barryvdh\Debugbar\Facades\Debugbar::notice
     * @method static void notice($message)
     * @see \Illuminate\Support\Facades\Facade::resolved
     * @method static void resolved(\Closure $callback)
     * @see \Barryvdh\Debugbar\Facades\Debugbar::debug
     * @method static void debug($message)
     * @see \Illuminate\Support\Facades\Facade::defaultAliases
     * @method static \Illuminate\Support\Collection defaultAliases()
     * @see \Illuminate\Support\Facades\Facade::swap
     * @method static void swap($instance)
     * @see \Barryvdh\Debugbar\Facades\Debugbar::hasCollector
     * @method static bool hasCollector(string $name)
     * @see \Barryvdh\Debugbar\Facades\Debugbar::addMessage
     * @method static void addMessage($message, string $label = 'info')
     * @see \Illuminate\Support\Facades\Facade::clearResolvedInstance
     * @method static void clearResolvedInstance(string $name)
     * @see \Illuminate\Support\Facades\Facade::partialMock
     * @method static \Mockery\MockInterface partialMock()
     * @see \Illuminate\Support\Facades\Facade::spy
     * @method static \Mockery\MockInterface spy()
     * @see \DebugBar\DebugBar::isDataPersisted
     * @method static bool isDataPersisted()
     * @see \DebugBar\DebugBar::getCurrentRequestId
     * @method static string getCurrentRequestId()
     * @see \DebugBar\DebugBar::getData
     * @method static array getData()
     * @see LaravelDebugbar::startMeasure
     * @method static void startMeasure(string $name, string $label = null)
     * @see \DebugBar\DebugBar::getStackedData
     * @method static array getStackedData(bool $delete = true)
     * @see LaravelDebugbar::enable
     * @method static void enable()
     * @see LaravelDebugbar::getJavascriptRenderer
     * @method static JavascriptRenderer getJavascriptRenderer(string $baseUrl = null, $basePath = null)
     * @see LaravelDebugbar::isEnabled
     * @method static bool isEnabled()
     * @see \DebugBar\DebugBar::hasStackedData
     * @method static bool hasStackedData()
     * @see \DebugBar\DebugBar::getStorage
     * @method static \DebugBar\Storage\StorageInterface getStorage()
     * @see \DebugBar\DebugBar::getHttpDriver
     * @method static \DebugBar\HttpDriverInterface|\DebugBar\PhpHttpDriver getHttpDriver()
     * @see \DebugBar\DebugBar::getDataAsHeaders
     * @method static array getDataAsHeaders(string $headerName = 'phpdebugbar', int $maxHeaderLength = 4096, $maxTotalHeaderLength = 250000)
     * @see \DebugBar\DebugBar::setStackDataSessionNamespace
     * @method static \DebugBar\DebugBar setStackDataSessionNamespace(string $ns)
     * @see \DebugBar\DebugBar::setStackAlwaysUseSessionStorage
     * @method static \DebugBar\DebugBar setStackAlwaysUseSessionStorage(bool $enabled = true)
     * @see LaravelDebugbar::measure
     * @method static mixed measure(string $label, \Closure $closure)
     * @see \DebugBar\DebugBar::offsetUnset
     * @method static void offsetUnset($key)
     * @see \DebugBar\DebugBar::stackData
     * @method static \DebugBar\DebugBar stackData()
     * @see LaravelDebugbar::modifyResponse
     * @method static \Symfony\Component\HttpFoundation\Response modifyResponse(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\HttpFoundation\Response $response)
     * @see LaravelDebugbar::handleError
     * @method static void handleError($level, $message, string $file = '', int $line = 0, array $context = [])
     * @see LaravelDebugbar::shouldCollect
     * @method static void shouldCollect($name, $default = false)
     * @see LaravelDebugbar::stopMeasure
     * @method static void stopMeasure(string $name)
     * @see LaravelDebugbar::collect
     * @method static array|array[] collect()
     * @see \DebugBar\DebugBar::sendDataInHeaders
     * @method static \DebugBar\DebugBar sendDataInHeaders(bool $useOpenHandler = null, string $headerName = 'phpdebugbar', int $maxHeaderLength = 4096)
     * @see \DebugBar\DebugBar::offsetGet
     * @method static \DebugBar\DataCollector\DataCollectorInterface offsetGet($key)
     * @see LaravelDebugbar::addThrowable
     * @method static void addThrowable(\Exception $e)
     * @see \DebugBar\DebugBar::offsetSet
     * @method static void offsetSet($key, $value)
     * @see \DebugBar\DebugBar::getRequestIdGenerator
     * @method static \DebugBar\RequestIdGenerator|\DebugBar\RequestIdGeneratorInterface getRequestIdGenerator()
     * @see \DebugBar\DebugBar::getStackDataSessionNamespace
     * @method static string getStackDataSessionNamespace()
     * @see \DebugBar\DebugBar::isStackAlwaysUseSessionStorage
     * @method static bool isStackAlwaysUseSessionStorage()
     * @see \DebugBar\DebugBar::setRequestIdGenerator
     * @method static \DebugBar\DebugBar setRequestIdGenerator(\DebugBar\RequestIdGeneratorInterface $generator)
     * @see \DebugBar\DebugBar::setHttpDriver
     * @method static \DebugBar\DebugBar setHttpDriver(\DebugBar\HttpDriverInterface $driver)
     * @see \DebugBar\DebugBar::offsetExists
     * @method static bool offsetExists($key)
     * @see LaravelDebugbar::boot
     * @method static void boot()
     * @see LaravelDebugbar::collectConsole
     * @method static array|array[] collectConsole()
     * @see LaravelDebugbar::addException
     * @method static null addException(\Exception $e)
     * @see LaravelDebugbar::injectDebugbar
     * @method static void injectDebugbar(\Symfony\Component\HttpFoundation\Response $response)
     * @see LaravelDebugbar::addMeasure
     * @method static void addMeasure(string $label, float $start, float $end)
     * @see \DebugBar\DebugBar::setStorage
     * @method static \DebugBar\DebugBar setStorage(\DebugBar\Storage\StorageInterface $storage = null)
     * @see LaravelDebugbar::disable
     * @method static void disable()
     * @see \DebugBar\DebugBar::getCollectors
     * @method static array getCollectors()
     */
    class Facade {}
}

namespace Barryvdh\Debugbar\Facades {

    /**
     * @see \DebugBar\DebugBar::isDataPersisted
     * @method static bool isDataPersisted()
     * @see \DebugBar\DebugBar::getCurrentRequestId
     * @method static string getCurrentRequestId()
     * @see \Barryvdh\Debugbar\LaravelDebugbar::emergency
     * @method static void emergency(...$message)
     * @see \DebugBar\DebugBar::getData
     * @method static array getData()
     * @see \Barryvdh\Debugbar\LaravelDebugbar::startMeasure
     * @method static void startMeasure(string $name, string $label = null)
     * @see \DebugBar\DebugBar::getStackedData
     * @method static array getStackedData(bool $delete = true)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::addCollector
     * @method static \Barryvdh\Debugbar\LaravelDebugbar addCollector(\DebugBar\DataCollector\DataCollectorInterface $collector)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::enable
     * @method static void enable()
     * @see \Barryvdh\Debugbar\LaravelDebugbar::warning
     * @method static void warning(...$message)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::getJavascriptRenderer
     * @method static \Barryvdh\Debugbar\JavascriptRenderer getJavascriptRenderer(string $baseUrl = null, $basePath = null)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::isEnabled
     * @method static bool isEnabled()
     * @see \Barryvdh\Debugbar\LaravelDebugbar::info
     * @method static void info(...$message)
     * @see \DebugBar\DebugBar::hasStackedData
     * @method static bool hasStackedData()
     * @see \DebugBar\DebugBar::getStorage
     * @method static \DebugBar\Storage\StorageInterface getStorage()
     * @see \DebugBar\DebugBar::getHttpDriver
     * @method static \DebugBar\HttpDriverInterface|\DebugBar\PhpHttpDriver getHttpDriver()
     * @see \DebugBar\DebugBar::getDataAsHeaders
     * @method static array getDataAsHeaders(string $headerName = 'phpdebugbar', int $maxHeaderLength = 4096, $maxTotalHeaderLength = 250000)
     * @see \DebugBar\DebugBar::hasCollector
     * @method static bool hasCollector(string $name)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::addMessage
     * @method static void addMessage($message, string $label = 'info')
     * @see \DebugBar\DebugBar::setStackDataSessionNamespace
     * @method static \DebugBar\DebugBar setStackDataSessionNamespace(string $ns)
     * @see \DebugBar\DebugBar::setStackAlwaysUseSessionStorage
     * @method static \DebugBar\DebugBar setStackAlwaysUseSessionStorage(bool $enabled = true)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::measure
     * @method static mixed measure(string $label, \Closure $closure)
     * @see \DebugBar\DebugBar::offsetUnset
     * @method static void offsetUnset($key)
     * @see \DebugBar\DebugBar::stackData
     * @method static \DebugBar\DebugBar stackData()
     * @see \Barryvdh\Debugbar\LaravelDebugbar::modifyResponse
     * @method static \Symfony\Component\HttpFoundation\Response modifyResponse(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\HttpFoundation\Response $response)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::handleError
     * @method static void handleError($level, $message, string $file = '', int $line = 0, array $context = [])
     * @see \Barryvdh\Debugbar\LaravelDebugbar::shouldCollect
     * @method static void shouldCollect($name, $default = false)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::stopMeasure
     * @method static void stopMeasure(string $name)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::collect
     * @method static array|array[] collect()
     * @see \DebugBar\DebugBar::sendDataInHeaders
     * @method static \DebugBar\DebugBar sendDataInHeaders(bool $useOpenHandler = null, string $headerName = 'phpdebugbar', int $maxHeaderLength = 4096)
     * @see \DebugBar\DebugBar::offsetGet
     * @method static \DebugBar\DataCollector\DataCollectorInterface offsetGet($key)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::addThrowable
     * @method static void addThrowable(\Exception $e)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::critical
     * @method static void critical(...$message)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::log
     * @method static void log(...$message)
     * @see \DebugBar\DebugBar::getCollector
     * @method static \DebugBar\DataCollector\DataCollectorInterface getCollector(string $name)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::error
     * @method static void error(...$message)
     * @see \DebugBar\DebugBar::offsetSet
     * @method static void offsetSet($key, $value)
     * @see \DebugBar\DebugBar::getRequestIdGenerator
     * @method static \DebugBar\RequestIdGenerator|\DebugBar\RequestIdGeneratorInterface getRequestIdGenerator()
     * @see \DebugBar\DebugBar::getStackDataSessionNamespace
     * @method static string getStackDataSessionNamespace()
     * @see \DebugBar\DebugBar::isStackAlwaysUseSessionStorage
     * @method static bool isStackAlwaysUseSessionStorage()
     * @see \Barryvdh\Debugbar\LaravelDebugbar::alert
     * @method static void alert(...$message)
     * @see \DebugBar\DebugBar::setRequestIdGenerator
     * @method static \DebugBar\DebugBar setRequestIdGenerator(\DebugBar\RequestIdGeneratorInterface $generator)
     * @see \DebugBar\DebugBar::setHttpDriver
     * @method static \DebugBar\DebugBar setHttpDriver(\DebugBar\HttpDriverInterface $driver)
     * @see \DebugBar\DebugBar::offsetExists
     * @method static bool offsetExists($key)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::boot
     * @method static void boot()
     * @see \Barryvdh\Debugbar\LaravelDebugbar::collectConsole
     * @method static array|array[] collectConsole()
     * @see \Barryvdh\Debugbar\LaravelDebugbar::notice
     * @method static void notice(...$message)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::debug
     * @method static void debug(...$message)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::addException
     * @method static null addException(\Exception $e)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::injectDebugbar
     * @method static void injectDebugbar(\Symfony\Component\HttpFoundation\Response $response)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::addMeasure
     * @method static void addMeasure(string $label, float $start, float $end)
     * @see \DebugBar\DebugBar::setStorage
     * @method static \DebugBar\DebugBar setStorage(\DebugBar\Storage\StorageInterface $storage = null)
     * @see \Barryvdh\Debugbar\LaravelDebugbar::disable
     * @method static void disable()
     * @see \DebugBar\DebugBar::getCollectors
     * @method static array getCollectors()
     */
    class Debugbar {}
}

namespace Botble\Ads\Facades {

    /**
     * @see \Botble\Ads\Supports\AdsManager::displayAds
     * @method static null|string displayAds(null|string $key, array $attributes = [], array $linkAttributes = [])
     * @see \Botble\Ads\Supports\AdsManager::locationHasAds
     * @method static bool locationHasAds(string $location)
     * @see \Botble\Ads\Supports\AdsManager::load
     * @method static \Botble\Ads\Supports\AdsManager load(bool $force = false)
     * @see \Botble\Ads\Supports\AdsManager::getLocations
     * @method static array getLocations()
     * @see \Botble\Ads\Supports\AdsManager::display
     * @method static string display(string $location, array $attributes = [])
     * @see \Botble\Ads\Supports\AdsManager::registerLocation
     * @method static \Botble\Ads\Supports\AdsManager registerLocation(string $key, string $name)
     * @see \Botble\Ads\Supports\AdsManager::getData
     * @method static \Illuminate\Support\Collection getData(bool $isLoad = false, bool $isNotExpired = false)
     */
    class AdsManagerFacade {}
}

namespace Botble\Analytics\Facades {

    /**
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Botble\Analytics\Analytics::performQuery
     * @method static array|\Google\Service\Analytics\GaData|null performQuery(\Botble\Analytics\Period $period, string $metrics, array $others = [])
     * @see \Botble\Analytics\Analytics::fetchTopReferrers
     * @method static \Illuminate\Support\Collection fetchTopReferrers(\Botble\Analytics\Period $period, int $maxResults = 20)
     * @see \Botble\Analytics\Analytics::fetchUserTypes
     * @method static \Illuminate\Support\Collection fetchUserTypes(\Botble\Analytics\Period $period)
     * @see \Botble\Analytics\Analytics::fetchVisitorsAndPageViews
     * @method static \Illuminate\Support\Collection fetchVisitorsAndPageViews(\Botble\Analytics\Period $period)
     * @see \Botble\Analytics\Analytics::getAnalyticsService
     * @method static \Google_Service_Analytics getAnalyticsService()
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Botble\Analytics\Analytics::fetchTotalVisitorsAndPageViews
     * @method static \Illuminate\Support\Collection fetchTotalVisitorsAndPageViews(\Botble\Analytics\Period $period)
     * @see \Botble\Analytics\Analytics::setPropertyId
     * @method static \Botble\Analytics\Analytics setPropertyId(string $propertyId)
     * @see \Botble\Analytics\Analytics::fetchTopBrowsers
     * @method static \Illuminate\Support\Collection fetchTopBrowsers(\Botble\Analytics\Period $period, int $maxResults = 10)
     * @see \Botble\Analytics\Analytics::fetchMostVisitedPages
     * @method static \Illuminate\Support\Collection fetchMostVisitedPages(\Botble\Analytics\Period $period, int $maxResults = 20)
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Botble\Analytics\Analytics::getPropertyId
     * @method static string getPropertyId()
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     */
    class AnalyticsFacade {}
}

namespace Botble\Api\Facades {

    /**
     * @see \Botble\Api\Supports\ApiHelper::setModelName
     * @method static \Botble\Api\Supports\ApiHelper setModelName(string $modelName)
     * @see \Botble\Api\Supports\ApiHelper::newModel
     * @method static \Botble\Base\Models\BaseModel|mixed newModel()
     * @see \Botble\Api\Supports\ApiHelper::setConfig
     * @method static \Illuminate\Config\Repository|\Illuminate\Contracts\Foundation\Application|mixed setConfig(array $config)
     * @see \Botble\Api\Supports\ApiHelper::passwordBroker
     * @method static null|string passwordBroker()
     * @see \Botble\Api\Supports\ApiHelper::guard
     * @method static null|string guard()
     * @see \Botble\Api\Supports\ApiHelper::modelName
     * @method static string modelName()
     * @see \Botble\Api\Supports\ApiHelper::getTable
     * @method static string getTable()
     * @see \Botble\Api\Supports\ApiHelper::getConfig
     * @method static \Illuminate\Config\Repository|\Illuminate\Contracts\Foundation\Application|mixed getConfig(string $key, $default = null)
     * @see \Botble\Api\Supports\ApiHelper::enabled
     * @method static bool enabled()
     */
    class ApiHelperFacade {}
}

namespace Botble\Assets\Facades {

    /**
     * @see \Botble\Assets\Assets::removeItemDirectly
     * @method static \Botble\Assets\Assets removeItemDirectly(array|string $assets, null|string $location = null)
     * @see \Botble\Assets\Assets::removeStyles
     * @method static \Botble\Assets\Assets removeStyles(array $assets)
     * @see \Botble\Assets\Assets::addStyles
     * @method static \Botble\Assets\Assets addStyles(string[] $assets)
     * @see \Botble\Assets\Assets::renderFooter
     * @method static string renderFooter()
     * @see \Botble\Assets\Assets::scriptToHtml
     * @method static null|string scriptToHtml(string $name)
     * @see \Botble\Assets\Assets::renderHeader
     * @method static string renderHeader(array $lastStyles = [])
     * @see \Botble\Assets\Assets::getStyles
     * @method static array getStyles(array $lastStyles = [])
     * @see \Botble\Assets\Assets::getBuildVersion
     * @method static string getBuildVersion()
     * @see \Botble\Assets\Assets::addScriptsDirectly
     * @method static \Botble\Assets\Assets addScriptsDirectly(array|string $assets, string $location = self::ASSETS_SCRIPT_POSITION_FOOTER)
     * @see \Botble\Assets\Assets::getHtmlBuilder
     * @method static \Botble\Assets\HtmlBuilder getHtmlBuilder()
     * @see \Botble\Assets\Assets::styleToHtml
     * @method static string styleToHtml(string $name)
     * @see \Botble\Assets\Assets::removeScripts
     * @method static \Botble\Assets\Assets removeScripts(array $assets)
     * @see \Botble\Assets\Assets::getScripts
     * @method static array getScripts(string $location = null)
     * @see \Botble\Assets\Assets::addStylesDirectly
     * @method static \Botble\Assets\Assets addStylesDirectly(array|string $assets)
     * @see \Botble\Assets\Assets::addScripts
     * @method static \Botble\Assets\Assets addScripts(array $assets)
     */
    class AssetsFacade {}
}

namespace Botble\AuditLog\Facades {

    /**
     * @see \Botble\AuditLog\AuditLog::getReferenceName
     * @method static string getReferenceName(string $screen, \Botble\ACL\Models\User|\Eloquent|\stdClass $data)
     * @see \Botble\AuditLog\AuditLog::handleEvent
     * @method static bool handleEvent(string $screen, \Eloquent|false $data, string $action, string $type = 'info')
     */
    class AuditLogFacade {}
}

namespace Botble\Base\Facades {

    /**
     * @see \Botble\Base\Supports\ActionHookEvent::removeListener
     * @method static \Botble\Base\Supports\ActionHookEvent removeListener(string $hook)
     * @see \Botble\Base\Supports\ActionHookEvent::addListener
     * @method static void addListener(array|string $hook, $callback, int $priority = 20, int $arguments = 1)
     * @see \Botble\Base\Supports\Action::fire
     * @method static void fire(string $action, array $args)
     * @see \Botble\Base\Supports\ActionHookEvent::getListeners
     * @method static array getListeners()
     */
    class ActionFacade {}

    /**
     * @see \Botble\Base\Supports\Assets::setConfig
     * @method static void setConfig(array $config)
     * @see \Botble\Base\Supports\Assets::renderHeader
     * @method static string renderHeader(array $lastStyles = [])
     * @see \Botble\Assets\Assets::getBuildVersion
     * @method static string getBuildVersion()
     * @see \Botble\Assets\Assets::addScriptsDirectly
     * @method static \Botble\Assets\Assets addScriptsDirectly(array|string $assets, string $location = self::ASSETS_SCRIPT_POSITION_FOOTER)
     * @see \Botble\Assets\Assets::removeScripts
     * @method static \Botble\Assets\Assets removeScripts(array $assets)
     * @see \Botble\Assets\Assets::getScripts
     * @method static array getScripts(string $location = null)
     * @see \Botble\Base\Supports\Assets::usingVueJS
     * @method static \Botble\Base\Supports\Assets usingVueJS()
     * @see \Botble\Assets\Assets::addStylesDirectly
     * @method static \Botble\Assets\Assets addStylesDirectly(array|string $assets)
     * @see \Botble\Assets\Assets::addScripts
     * @method static \Botble\Assets\Assets addScripts(array $assets)
     * @see \Botble\Assets\Assets::removeItemDirectly
     * @method static \Botble\Assets\Assets removeItemDirectly(array|string $assets, null|string $location = null)
     * @see \Botble\Assets\Assets::removeStyles
     * @method static \Botble\Assets\Assets removeStyles(array $assets)
     * @see \Botble\Base\Supports\Assets::disableVueJS
     * @method static \Botble\Base\Supports\Assets disableVueJS()
     * @see \Botble\Assets\Assets::addStyles
     * @method static \Botble\Assets\Assets addStyles(string[] $assets)
     * @see \Botble\Base\Supports\Assets::renderFooter
     * @method static string renderFooter()
     * @see \Botble\Assets\Assets::scriptToHtml
     * @method static null|string scriptToHtml(string $name)
     * @see \Botble\Base\Supports\Assets::getThemes
     * @method static string[] getThemes()
     * @see \Botble\Assets\Assets::getStyles
     * @method static array getStyles(array $lastStyles = [])
     * @see \Botble\Assets\Assets::getHtmlBuilder
     * @method static \Botble\Assets\HtmlBuilder getHtmlBuilder()
     * @see \Botble\Assets\Assets::styleToHtml
     * @method static string styleToHtml(string $name)
     */
    class AssetsFacade {}

    /**
     * @see \Botble\Base\Helpers\BaseHelper::getRichEditor
     * @method static string getRichEditor()
     * @see \Botble\Base\Helpers\BaseHelper::removeQueryStringVars
     * @method static null|string removeQueryStringVars(null|string $url, array|string $key)
     * @see \Botble\Base\Helpers\BaseHelper::isJoined
     * @method static bool isJoined(\Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Query\Builder $query, string $table)
     * @see \Botble\Base\Helpers\BaseHelper::getGoogleFontsURL
     * @method static string getGoogleFontsURL()
     * @see \Botble\Base\Helpers\BaseHelper::cleanShortcodes
     * @method static null|string cleanShortcodes(null|string $content)
     * @see \Botble\Base\Helpers\BaseHelper::getAdminPrefix
     * @method static string getAdminPrefix()
     * @see \Botble\Base\Helpers\BaseHelper::iniSet
     * @method static \Botble\Base\Helpers\BaseHelper iniSet(string $key, int|null|string $value)
     * @see \Botble\Base\Helpers\BaseHelper::getFileData
     * @method static array|mixed|null|string getFileData(string $file, bool $convertToArray = true)
     * @see \Botble\Base\Helpers\BaseHelper::getHomepageId
     * @method static null|string getHomepageId()
     * @see \Botble\Base\Helpers\BaseHelper::maximumExecutionTimeAndMemoryLimit
     * @method static \Botble\Base\Helpers\BaseHelper maximumExecutionTimeAndMemoryLimit()
     * @see \Botble\Base\Helpers\BaseHelper::getDateFormats
     * @method static string[] getDateFormats()
     * @see \Botble\Base\Helpers\BaseHelper::humanFilesize
     * @method static string humanFilesize(int $bytes, int $precision = 2)
     * @see \Botble\Base\Helpers\BaseHelper::hexToRgba
     * @method static string hexToRgba(string $color, float $opacity = 1)
     * @see \Botble\Base\Helpers\BaseHelper::html
     * @method static \Illuminate\Support\HtmlString html(array|null|string $dirty, array|string $config = null)
     * @see \Botble\Base\Helpers\BaseHelper::formatDateTime
     * @method static null|string formatDateTime(null|string $date, string $format = null)
     * @see \Botble\Base\Helpers\BaseHelper::siteLanguageDirection
     * @method static string siteLanguageDirection()
     * @see \Botble\Base\Helpers\BaseHelper::hexToRgb
     * @method static array hexToRgb(string $color)
     * @see \Botble\Base\Helpers\BaseHelper::sortSearchResults
     * @method static \Illuminate\Support\Collection sortSearchResults(array|\Illuminate\Support\Collection $collection, string $searchTerms, string $column)
     * @see \Botble\Base\Helpers\BaseHelper::saveFileData
     * @method static bool saveFileData(string $path, array|null|string $data, bool $json = true)
     * @see \Botble\Base\Helpers\BaseHelper::adminLanguageDirection
     * @method static string adminLanguageDirection()
     * @see \Botble\Base\Helpers\BaseHelper::formatTime
     * @method static string formatTime(\Carbon\Carbon $timestamp, null|string $format = 'j M Y H:i')
     * @see \Botble\Base\Helpers\BaseHelper::getPhoneValidationRule
     * @method static string getPhoneValidationRule()
     * @see \Botble\Base\Helpers\BaseHelper::jsonEncodePrettify
     * @method static string jsonEncodePrettify(array|null|string $data)
     * @see \Botble\Base\Helpers\BaseHelper::cleanEditorContent
     * @method static string cleanEditorContent(null|string $value)
     * @see \Botble\Base\Helpers\BaseHelper::removeSpecialCharacters
     * @method static array|null|string removeSpecialCharacters(null|string $string)
     * @see \Botble\Base\Helpers\BaseHelper::clean
     * @method static null|string clean(array|null|string $dirty, array|string $config = null)
     * @see \Botble\Base\Helpers\BaseHelper::formatDate
     * @method static null|string formatDate(null|string $date, null|string $format = null)
     * @see \Botble\Base\Helpers\BaseHelper::getInputValueFromQueryString
     * @method static string getInputValueFromQueryString(string $name)
     * @see \Botble\Base\Helpers\BaseHelper::isHomepage
     * @method static bool isHomepage(int|null $pageId = null)
     * @see \Botble\Base\Helpers\BaseHelper::getAdminMasterLayoutTemplate
     * @method static string getAdminMasterLayoutTemplate()
     * @see \Botble\Base\Helpers\BaseHelper::scanFolder
     * @method static array scanFolder(string $path, array $ignoreFiles = [])
     * @see \Botble\Base\Helpers\BaseHelper::stringify
     * @method static null|string stringify($content)
     */
    class BaseHelperFacade {}

    /**
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Botble\Base\Supports\BreadcrumbsManager::before
     * @method static void before(callable $callback)
     * @see \Botble\Base\Supports\BreadcrumbsManager::for
     * @method static void for(string $name, callable $callback)
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Botble\Base\Supports\BreadcrumbsManager::current
     * @method static null|\stdClass current()
     * @see \Botble\Base\Supports\BreadcrumbsManager::view
     * @method static \Illuminate\Support\HtmlString view(string $view, string $name = null, ...$params)
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Botble\Base\Supports\BreadcrumbsManager::setCurrentRoute
     * @method static void setCurrentRoute(string $name, ...$params)
     * @see \Botble\Base\Supports\BreadcrumbsManager::clearCurrentRoute
     * @method static void clearCurrentRoute()
     * @see \Botble\Base\Supports\BreadcrumbsManager::exists
     * @method static bool exists(string $name = null)
     * @see \Botble\Base\Supports\BreadcrumbsManager::after
     * @method static void after(callable $callback)
     * @see \Botble\Base\Supports\BreadcrumbsManager::render
     * @method static string render(string $name = null, ...$params)
     * @see \Botble\Base\Supports\BreadcrumbsManager::generate
     * @method static \Illuminate\Support\Collection generate(string $name = null, ...$params)
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     * @see \Botble\Base\Supports\BreadcrumbsManager::register
     * @method static void register(string $name, callable $callback)
     */
    class BreadcrumbsFacade {}

    /**
     * @see \Botble\Base\Supports\DashboardMenu::getAll
     * @method static \Illuminate\Support\Collection getAll()
     * @see \Botble\Base\Supports\DashboardMenu::removeItem
     * @method static \Botble\Base\Supports\DashboardMenu removeItem(array|string $id, $parentId = null)
     * @see \Botble\Base\Supports\DashboardMenu::registerItem
     * @method static \Botble\Base\Supports\DashboardMenu registerItem(array $options)
     * @see \Botble\Base\Supports\DashboardMenu::hasItem
     * @method static bool hasItem(string $id, null|string $parentId = null)
     */
    class DashboardMenuFacade {}

    /**
     * @see \Botble\Base\Supports\EmailHandler::setType
     * @method static \Botble\Base\Supports\EmailHandler setType(string $type)
     * @see \Botble\Base\Supports\EmailHandler::getType
     * @method static string getType()
     * @see \Botble\Base\Supports\EmailHandler::addTemplateSettings
     * @method static \Botble\Base\Supports\EmailHandler addTemplateSettings(string $module, array $data, string $type = 'plugins')
     * @see \Botble\Base\Supports\EmailHandler::getTemplateSubject
     * @method static string getTemplateSubject(string $template, string $type = 'plugins')
     * @see \Botble\Base\Supports\EmailHandler::setVariableValues
     * @method static \Botble\Base\Supports\EmailHandler setVariableValues(array $data, null|string $module = null)
     * @see \Botble\Base\Supports\EmailHandler::setVariableValue
     * @method static \Botble\Base\Supports\EmailHandler setVariableValue(string $variable, string $value, string $module = null)
     * @see \Botble\Base\Supports\EmailHandler::sendErrorException
     * @method static void sendErrorException(\Exception $exception)
     * @see \Botble\Base\Supports\EmailHandler::templateEnabled
     * @method static bool templateEnabled(string $template, string $type = 'plugins')
     * @see \Botble\Base\Supports\EmailHandler::sendUsingTemplate
     * @method static bool sendUsingTemplate(string $template, array|null|string $email = null, array $args = [], bool $debug = false, string $type = 'plugins', $subject = null)
     * @see \Botble\Base\Supports\EmailHandler::getSubject
     * @method static string getSubject()
     * @see \Botble\Base\Supports\EmailHandler::getContent
     * @method static string getContent()
     * @see \Botble\Base\Supports\EmailHandler::getTemplate
     * @method static null|string getTemplate()
     * @see \Botble\Base\Supports\EmailHandler::getVariableValue
     * @method static string getVariableValue(string $variable, string $module, string $default = '')
     * @see \Botble\Base\Supports\EmailHandler::getVariableValues
     * @method static array getVariableValues(null|string $module = null)
     * @see \Botble\Base\Supports\EmailHandler::setTemplate
     * @method static \Botble\Base\Supports\EmailHandler setTemplate(null|string $template)
     * @see \Botble\Base\Supports\EmailHandler::getVariables
     * @method static array getVariables(string $type, string $module, string $name)
     * @see \Botble\Base\Supports\EmailHandler::initVariableValues
     * @method static void initVariableValues()
     * @see \Botble\Base\Supports\EmailHandler::getTemplateContent
     * @method static null|string getTemplateContent(string $template, string $type = 'plugins')
     * @see \Botble\Base\Supports\EmailHandler::prepareData
     * @method static string prepareData(string $content)
     * @see \Botble\Base\Supports\EmailHandler::getTemplateData
     * @method static array|null|string getTemplateData(string $type, string $module, string $name)
     * @see \Botble\Base\Supports\EmailHandler::getTemplates
     * @method static array getTemplates()
     * @see \Botble\Base\Supports\EmailHandler::getCoreVariables
     * @method static array getCoreVariables()
     * @see \Botble\Base\Supports\EmailHandler::send
     * @method static void send(string $content, string $title, array|null|string $to = null, array $args = [], bool $debug = false)
     * @see \Botble\Base\Supports\EmailHandler::setModule
     * @method static \Botble\Base\Supports\EmailHandler setModule(string $module)
     */
    class EmailHandlerFacade {}

    /**
     * @see \Botble\Base\Supports\ActionHookEvent::removeListener
     * @method static \Botble\Base\Supports\ActionHookEvent removeListener(string $hook)
     * @see \Botble\Base\Supports\ActionHookEvent::addListener
     * @method static void addListener(array|string $hook, $callback, int $priority = 20, int $arguments = 1)
     * @see \Botble\Base\Supports\Filter::fire
     * @method static mixed|string fire(string $action, array $args)
     * @see \Botble\Base\Supports\ActionHookEvent::getListeners
     * @method static array getListeners()
     */
    class FilterFacade {}

    /**
     * @see \Botble\Base\Supports\MacroableModels::removeMacro
     * @method static bool removeMacro(string $model, string $name)
     * @see \Botble\Base\Supports\MacroableModels::addMacro
     * @method static void addMacro(string $model, string $name, \Closure $closure)
     * @see \Botble\Base\Supports\MacroableModels::getMacro
     * @method static array|\ArrayAccess|mixed getMacro(string $name)
     * @see \Botble\Base\Supports\MacroableModels::modelsThatImplement
     * @method static array modelsThatImplement(string $name)
     * @see \Botble\Base\Supports\MacroableModels::macrosForModel
     * @method static array macrosForModel(string $model)
     * @see \Botble\Base\Supports\MacroableModels::modelHasMacro
     * @method static bool modelHasMacro(string $model, string $name)
     * @see \Botble\Base\Supports\MacroableModels::getAllMacros
     * @method static array getAllMacros()
     */
    class MacroableModelsFacade {}

    /**
     * @see \Botble\Base\Supports\MetaBox::addMetaBox
     * @method static void addMetaBox(string $id, string $title, array|\Closure|string $callback, null $reference = null, string $context = 'advanced', string $priority = 'default', null $callbackArgs = null)
     * @see \Botble\Base\Supports\MetaBox::doMetaBoxes
     * @method static int doMetaBoxes(string $context, $object = null)
     * @see \Botble\Base\Supports\MetaBox::removeMetaBox
     * @method static void removeMetaBox(string $id, object|string $reference, string $context)
     * @see \Botble\Base\Supports\MetaBox::getMetaData
     * @method static array|mixed|string getMetaData($object, string $key, bool $single = false, array $select = ['meta_value'])
     * @see \Botble\Base\Supports\MetaBox::getMetaBoxes
     * @method static array getMetaBoxes()
     * @see \Botble\Base\Supports\MetaBox::saveMetaBoxData
     * @method static bool saveMetaBoxData($object, string $key, $value, $options = null)
     * @see \Botble\Base\Supports\MetaBox::getMeta
     * @method static mixed getMeta($object, string $key, array $select = ['meta_value'])
     * @see \Botble\Base\Supports\MetaBox::deleteMetaData
     * @method static mixed deleteMetaData($object, string $key)
     */
    class MetaBoxFacade {}

    /**
     * @see \Botble\Base\Supports\PageTitle::setTitle
     * @method static void setTitle(string $title)
     * @see \Botble\Base\Supports\PageTitle::getTitle
     * @method static null|string getTitle(bool $full = true)
     */
    class PageTitleFacade {}
}

namespace Botble\Ecommerce\Facades {

    /**
     * @see \Botble\Ecommerce\Cart\Cart::rawSubTotal
     * @method static int rawSubTotal()
     * @see \Botble\Ecommerce\Cart\Cart::instance
     * @method static \Botble\Ecommerce\Cart\Cart instance(null|string $instance = null)
     * @see \Botble\Ecommerce\Cart\Cart::currentInstance
     * @method static string currentInstance()
     * @see \Botble\Ecommerce\Cart\Cart::update
     * @method static bool|\Botble\Ecommerce\Cart\CartItem|null update(string $rowId, $qty)
     * @see \Botble\Ecommerce\Cart\Cart::setTax
     * @method static void setTax(string $rowId, float|int $taxRate)
     * @see \Botble\Ecommerce\Cart\Cart::associate
     * @method static void associate(string $rowId, $model)
     * @see \Botble\Ecommerce\Cart\Cart::remove
     * @method static void remove(string $rowId)
     * @see \Botble\Ecommerce\Cart\Cart::content
     * @method static \Illuminate\Support\Collection content()
     * @see \Botble\Ecommerce\Cart\Cart::products
     * @method static \Illuminate\Support\Collection products()
     * @see \Botble\Ecommerce\Cart\Cart::search
     * @method static \Illuminate\Support\Collection search(\Closure $search)
     * @see \Botble\Ecommerce\Cart\Cart::total
     * @method static string total()
     * @see \Botble\Ecommerce\Cart\Cart::rawTax
     * @method static float|int rawTax()
     * @see \Botble\Ecommerce\Cart\Cart::get
     * @method static \Botble\Ecommerce\Cart\CartItem|null get(string $rowId)
     * @see \Botble\Ecommerce\Cart\Cart::add
     * @method static array|\Botble\Ecommerce\Cart\CartItem add($id, $name = null, float|int $qty = null, float $price = null, array $options = [])
     * @see \Botble\Ecommerce\Cart\Cart::countByItems
     * @method static float|int countByItems($content)
     * @see \Botble\Ecommerce\Cart\Cart::restore
     * @method static void restore($identifier)
     * @see \Botble\Ecommerce\Cart\Cart::count
     * @method static float|int count()
     * @see \Botble\Ecommerce\Cart\Cart::destroy
     * @method static void destroy()
     * @see \Botble\Ecommerce\Cart\Cart::weight
     * @method static float|int weight()
     * @see \Botble\Ecommerce\Cart\Cart::tax
     * @method static float|int tax()
     * @see \Botble\Ecommerce\Cart\Cart::store
     * @method static void store($identifier)
     * @see \Botble\Ecommerce\Cart\Cart::getLastUpdatedAt
     * @method static \Carbon\Carbon getLastUpdatedAt()
     * @see \Botble\Ecommerce\Cart\Cart::rawSubTotalByItems
     * @method static int rawSubTotalByItems($content)
     * @see \Botble\Ecommerce\Cart\Cart::rawTaxByItems
     * @method static float|int rawTaxByItems($content)
     * @see \Botble\Ecommerce\Cart\Cart::rawTotalByItems
     * @method static int rawTotalByItems($content)
     * @see \Botble\Ecommerce\Cart\Cart::setLastUpdatedAt
     * @method static mixed setLastUpdatedAt()
     * @see \Botble\Ecommerce\Cart\Cart::rawTotal
     * @method static int rawTotal()
     * @see \Botble\Ecommerce\Cart\Cart::putToSession
     * @method static \Botble\Ecommerce\Cart\Cart putToSession($content)
     * @see \Botble\Ecommerce\Cart\Cart::subtotal
     * @method static float subtotal()
     */
    class CartFacade {}

    /**
     * @see \Botble\Ecommerce\Supports\CurrencySupport::setApplicationCurrency
     * @method static void setApplicationCurrency(\Botble\Ecommerce\Models\Currency $currency)
     * @see \Botble\Ecommerce\Supports\CurrencySupport::getApplicationCurrency
     * @method static \Botble\Ecommerce\Models\Currency|null getApplicationCurrency()
     * @see \Botble\Ecommerce\Supports\CurrencySupport::countryCurrencies
     * @method static string[] countryCurrencies()
     * @see \Botble\Ecommerce\Supports\CurrencySupport::getDefaultCurrency
     * @method static \Botble\Ecommerce\Models\Currency|null getDefaultCurrency()
     * @see \Botble\Ecommerce\Supports\CurrencySupport::detectedCurrencyCode
     * @method static null|string detectedCurrencyCode()
     * @see \Botble\Ecommerce\Supports\CurrencySupport::currencyCodes
     * @method static string[] currencyCodes()
     * @see \Botble\Ecommerce\Supports\CurrencySupport::currencies
     * @method static \Illuminate\Support\Collection currencies()
     */
    class CurrencyFacade {}

    /**
     * @see \Botble\Ecommerce\Supports\DiscountSupport::promotionForProduct
     * @method static \Botble\Ecommerce\Models\Discount|null promotionForProduct(array $productIds, array $productCollectionIds)
     * @see \Botble\Ecommerce\Supports\DiscountSupport::getAvailablePromotions
     * @method static \Illuminate\Support\Collection getAvailablePromotions()
     */
    class DiscountFacade {}

    /**
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::getCities
     * @method static array getCities(int|string $stateId)
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::allowPartialReturn
     * @method static int allowPartialReturn()
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::getProductVariationInfo
     * @method static array getProductVariationInfo(\Botble\Ecommerce\Models\Product $product)
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::showNumberOfProductsInProductSingle
     * @method static bool showNumberOfProductsInProductSingle()
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::getOriginAddress
     * @method static array getOriginAddress()
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::isTaxEnabled
     * @method static bool isTaxEnabled()
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::getProductReviews
     * @method static \Illuminate\Support\Collection getProductReviews(\Botble\Ecommerce\Models\Product $product, int $star = 0, int $perPage = 10)
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::getAvailableCitiesByState
     * @method static array getAvailableCitiesByState(int|string $stateId)
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::productFilterParamsValidated
     * @method static bool productFilterParamsValidated($request)
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::withReviewsCount
     * @method static array withReviewsCount()
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::getDecimalSeparatorForInputMask
     * @method static string getDecimalSeparatorForInputMask()
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::getShowParams
     * @method static array getShowParams()
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::isPhoneFieldOptionalAtCheckout
     * @method static bool isPhoneFieldOptionalAtCheckout()
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::isDisplayProductIncludingTaxes
     * @method static bool isDisplayProductIncludingTaxes()
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::isFacebookPixelEnabled
     * @method static bool isFacebookPixelEnabled()
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::reviewMaxFileSize
     * @method static int reviewMaxFileSize(bool $isConvertToKB = false)
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::viewPath
     * @method static string viewPath(string $view)
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::isOrderTrackingEnabled
     * @method static bool isOrderTrackingEnabled()
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::getMinimumOrderAmount
     * @method static float getMinimumOrderAmount()
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::getCustomerAddressValidationRules
     * @method static array getCustomerAddressValidationRules(null|string $prefix = '')
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::getSortParams
     * @method static array getSortParams()
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::getThousandSeparatorForInputMask
     * @method static string getThousandSeparatorForInputMask()
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::getProductsSearchBy
     * @method static string[] getProductsSearchBy()
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::getAvailableStatesByCountry
     * @method static array getAvailableStatesByCountry(int|string $countryId)
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::isReviewEnabled
     * @method static bool isReviewEnabled()
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::canCustomReturnProductQty
     * @method static int canCustomReturnProductQty()
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::isCompareEnabled
     * @method static bool isCompareEnabled()
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::validateOrderWeight
     * @method static float|int validateOrderWeight(float|int $weight)
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::getShippingData
     * @method static array getShippingData(array|\Illuminate\Support\Collection $products, array $session, array $origin, float $orderTotal, null|string $paymentMethod = null)
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::isEnableEmailVerification
     * @method static bool isEnableEmailVerification()
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::isGoogleTagManagerEnabled
     * @method static bool isGoogleTagManagerEnabled()
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::getCountryNameById
     * @method static null|string getCountryNameById($countryId)
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::isEnabledGuestCheckout
     * @method static bool isEnabledGuestCheckout()
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::loadCountriesStatesCitiesFromPluginLocation
     * @method static bool loadCountriesStatesCitiesFromPluginLocation()
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::getReturnableDays
     * @method static int getReturnableDays()
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::isWishlistEnabled
     * @method static bool isWishlistEnabled()
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::maxCustomerRecentlyViewedProducts
     * @method static int maxCustomerRecentlyViewedProducts()
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::isCartEnabled
     * @method static bool isCartEnabled()
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::withReviewsParams
     * @method static array|array[] withReviewsParams()
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::reviewMaxFileNumber
     * @method static int reviewMaxFileNumber()
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::isBillingAddressEnabled
     * @method static bool isBillingAddressEnabled()
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::getStates
     * @method static array getStates(null|string $countryCode)
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::getDateRangeInReport
     * @method static array getDateRangeInReport(\Illuminate\Http\Request $request)
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::getAvailableCountries
     * @method static array getAvailableCountries()
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::isEnabledSupportDigitalProducts
     * @method static bool isEnabledSupportDigitalProducts()
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::getPhoneValidationRule
     * @method static string getPhoneValidationRule()
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::getSettingPrefix
     * @method static null|string getSettingPrefix()
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::getQuickBuyButtonTarget
     * @method static string getQuickBuyButtonTarget()
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::isZipCodeEnabled
     * @method static bool isZipCodeEnabled()
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::isUsingInMultipleCountries
     * @method static bool isUsingInMultipleCountries()
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::isEnabledCustomerRecentlyViewedProducts
     * @method static bool isEnabledCustomerRecentlyViewedProducts()
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::isQuickBuyButtonEnabled
     * @method static bool isQuickBuyButtonEnabled()
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::countDigitalProducts
     * @method static int countDigitalProducts(\Illuminate\Support\Collection $products)
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::handleCustomerRecentlyViewedProduct
     * @method static \Botble\Ecommerce\Supports\EcommerceHelper handleCustomerRecentlyViewedProduct(\Botble\Ecommerce\Models\Product $product)
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::isAvailableShipping
     * @method static bool isAvailableShipping(\Illuminate\Support\Collection $products)
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::getReviewsGroupedByProductId
     * @method static \Illuminate\Support\Collection getReviewsGroupedByProductId(int $productId, int $reviewsCount = 0)
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::disableOrderInvoiceUntilOrderConfirmed
     * @method static bool disableOrderInvoiceUntilOrderConfirmed()
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::showOutOfStockProducts
     * @method static bool showOutOfStockProducts()
     * @see \Botble\Ecommerce\Supports\EcommerceHelper::getFirstCountryId
     * @method static int|string getFirstCountryId()
     */
    class EcommerceHelperFacade {}

    /**
     * @see \Botble\Ecommerce\Supports\FlashSaleSupport::flashSaleForProduct
     * @method static \Botble\Ecommerce\Models\Product|null flashSaleForProduct(\Botble\Ecommerce\Models\Product $product)
     * @see \Botble\Ecommerce\Supports\FlashSaleSupport::getAvailableFlashSales
     * @method static \Illuminate\Support\Collection getAvailableFlashSales()
     */
    class FlashSaleFacade {}

    /**
     * @see \Botble\Ecommerce\Supports\InvoiceHelper::makeInvoicePDF
     * @method static \Barryvdh\DomPDF\PDF makeInvoicePDF(\Botble\Ecommerce\Models\Invoice $invoice)
     * @see \Botble\Ecommerce\Supports\InvoiceHelper::store
     * @method static \Botble\Ecommerce\Models\Invoice|\Illuminate\Database\Eloquent\Model store(\Botble\Ecommerce\Models\Order $order)
     * @see \Botble\Ecommerce\Supports\InvoiceHelper::streamInvoice
     * @method static \Illuminate\Http\Response streamInvoice(\Botble\Ecommerce\Models\Invoice $invoice)
     * @see \Botble\Ecommerce\Supports\InvoiceHelper::generateInvoice
     * @method static string generateInvoice(\Botble\Ecommerce\Models\Invoice $invoice)
     * @see \Botble\Ecommerce\Supports\InvoiceHelper::downloadInvoice
     * @method static \Illuminate\Http\Response downloadInvoice(\Botble\Ecommerce\Models\Invoice $invoice)
     */
    class InvoiceHelperFacade {}

    /**
     * @see \Botble\Ecommerce\Supports\OrderHelper::processOrderProductData
     * @method static array processOrderProductData(array $products, array $sessionData)
     * @see \Botble\Ecommerce\Supports\OrderHelper::setEmailVariables
     * @method static \Botble\Base\Supports\EmailHandler setEmailVariables(\Botble\Ecommerce\Models\Order $order)
     * @see \Botble\Ecommerce\Supports\OrderHelper::getOrderSessionToken
     * @method static string getOrderSessionToken()
     * @see \Botble\Ecommerce\Supports\OrderHelper::sendOrderConfirmationEmail
     * @method static bool sendOrderConfirmationEmail(\Botble\Ecommerce\Models\Order $order, bool $saveHistory = false)
     * @see \Botble\Ecommerce\Supports\OrderHelper::processAddressOrder
     * @method static array processAddressOrder(int $currentUserId, array $sessionData, \Illuminate\Http\Request $request)
     * @see \Botble\Ecommerce\Supports\OrderHelper::clearSessions
     * @method static void clearSessions(null|string $token)
     * @see \Botble\Ecommerce\Supports\OrderHelper::mergeOrderSessionData
     * @method static array mergeOrderSessionData(null|string $token, array|string $data)
     * @see \Botble\Ecommerce\Supports\OrderHelper::processOrder
     * @method static bool|\Botble\Base\Models\BaseModel processOrder(array|string $orderIds, null|string $chargeId = null)
     * @see \Botble\Ecommerce\Supports\OrderHelper::downloadInvoice
     * @method static \Illuminate\Http\Response downloadInvoice(\Botble\Ecommerce\Models\Order $order)
     * @see \Botble\Ecommerce\Supports\OrderHelper::makeInvoicePDF
     * @method static \Barryvdh\DomPDF\PDF makeInvoicePDF(\Botble\Ecommerce\Models\Order $order)
     * @see \Botble\Ecommerce\Supports\OrderHelper::getShippingMethod
     * @method static array|null|string getShippingMethod(string $method, null $option = null)
     * @see \Botble\Ecommerce\Supports\OrderHelper::confirmPayment
     * @method static bool confirmPayment(\Botble\Ecommerce\Models\Order $order)
     * @see \Botble\Ecommerce\Supports\OrderHelper::handleAddCart
     * @method static array handleAddCart(\Botble\Ecommerce\Models\Product $product, \Illuminate\Http\Request $request)
     * @see \Botble\Ecommerce\Supports\OrderHelper::processOrderInCheckout
     * @method static array processOrderInCheckout($sessionData, $request, $cartItems, $order, array $generalData)
     * @see \Botble\Ecommerce\Supports\OrderHelper::generateInvoice
     * @method static string generateInvoice(\Botble\Ecommerce\Models\Order $order)
     * @see \Botble\Ecommerce\Supports\OrderHelper::shippingStatusDelivered
     * @method static \Botble\Ecommerce\Models\Order shippingStatusDelivered(\Botble\Ecommerce\Models\Shipment $shipment, \Illuminate\Http\Request $request, int $userId = 0)
     * @see \Botble\Ecommerce\Supports\OrderHelper::decreaseProductQuantity
     * @method static bool decreaseProductQuantity(\Botble\Ecommerce\Models\Order $order)
     * @see \Botble\Ecommerce\Supports\OrderHelper::getOrderSessionData
     * @method static array getOrderSessionData(null|string $token = null)
     * @see \Botble\Ecommerce\Supports\OrderHelper::createOrder
     * @method static mixed createOrder(\Illuminate\Http\Request $request, int $currentUserId, string $token, array $cartItems)
     * @see \Botble\Ecommerce\Supports\OrderHelper::cancelOrder
     * @method static \Botble\Ecommerce\Models\Order cancelOrder(\Botble\Ecommerce\Models\Order $order)
     * @see \Botble\Ecommerce\Supports\OrderHelper::setOrderSessionData
     * @method static array setOrderSessionData(null|string $token, array|string $data)
     * @see \Botble\Ecommerce\Supports\OrderHelper::processHistoryVariables
     * @method static mixed|null processHistoryVariables(\Botble\Ecommerce\Models\OrderHistory|\Botble\Ecommerce\Models\ShipmentHistory $history)
     * @see \Botble\Ecommerce\Supports\OrderHelper::streamInvoice
     * @method static \Illuminate\Http\Response streamInvoice(\Botble\Ecommerce\Models\Order $order)
     */
    class OrderHelperFacade {}

    /**
     * @see \Botble\Ecommerce\Supports\OrderReturnHelper::returnOrder
     * @method static array returnOrder(\Botble\Ecommerce\Models\Order $order, array $data)
     * @see \Botble\Ecommerce\Supports\OrderReturnHelper::updateReturnOrder
     * @method static array updateReturnOrder(\Botble\Ecommerce\Models\OrderReturn $orderReturn, array $data)
     * @see \Botble\Ecommerce\Supports\OrderReturnHelper::cancelReturnOrder
     * @method static array cancelReturnOrder(\Botble\Ecommerce\Models\OrderReturn $orderReturn)
     */
    class OrderReturnHelperFacade {}

    /**
     * @see \Botble\Ecommerce\Supports\ProductCategoryHelper::getProductCategoriesWithIndentName
     * @method static array getProductCategoriesWithIndentName(array|\Illuminate\Support\Collection $categories = [], string $indent = '&nbsp;&nbsp;')
     * @see \Botble\Ecommerce\Supports\ProductCategoryHelper::getAllProductCategoriesWithChildren
     * @method static array getAllProductCategoriesWithChildren()
     * @see \Botble\Ecommerce\Supports\ProductCategoryHelper::getActiveTreeCategories
     * @method static \Illuminate\Support\Collection getActiveTreeCategories()
     * @see \Botble\Ecommerce\Supports\ProductCategoryHelper::getProductCategoriesWithIndent
     * @method static \Illuminate\Support\Collection getProductCategoriesWithIndent(string $indent = '&nbsp;&nbsp;', bool $sortChildren = true)
     * @see \Botble\Ecommerce\Supports\ProductCategoryHelper::getAllProductCategories
     * @method static \Illuminate\Support\Collection getAllProductCategories(array $params = [], bool $onlyParent = false)
     * @see \Botble\Ecommerce\Supports\ProductCategoryHelper::getAllProductCategoriesSortByChildren
     * @method static \Illuminate\Support\Collection getAllProductCategoriesSortByChildren()
     * @see \Botble\Ecommerce\Supports\ProductCategoryHelper::appendIndentTextToProductCategoryName
     * @method static bool appendIndentTextToProductCategoryName(\Illuminate\Support\Collection $categories, int $depth = 0, array $results = [], string $indent = '&nbsp;&nbsp;')
     */
    class ProductCategoryHelperFacade {}
}

namespace Botble\Language\Facades {

    /**
     * @see \Botble\Language\LanguageManager::getCurrentLocaleCode
     * @method static null|string getCurrentLocaleCode()
     * @see \Botble\Language\LanguageManager::setSwitcherURLs
     * @method static \Botble\Language\LanguageManager setSwitcherURLs(array $urls)
     * @see \Botble\Language\LanguageManager::getCurrentLocaleFlag
     * @method static null|string getCurrentLocaleFlag()
     * @see \Botble\Language\LanguageManager::hideDefaultLocaleInURL
     * @method static bool hideDefaultLocaleInURL()
     * @see \Botble\Language\LanguageManager::getNonLocalizedURL
     * @method static string getNonLocalizedURL(false|string $url = null)
     * @see \Botble\Language\LanguageManager::setCurrentAdminLocale
     * @method static void setCurrentAdminLocale(null|string $code)
     * @see \Botble\Language\LanguageManager::localizeURL
     * @method static string localizeURL(null|string $url = null, null $locale = null)
     * @see \Botble\Language\LanguageManager::getLocalizedURL
     * @method static string getLocalizedURL(bool|string $locale = null, false|string $url = null, array $attributes = [], $forceDefaultLocation = true)
     * @see \Botble\Language\LanguageManager::deleteLanguage
     * @method static bool deleteLanguage(string $screen, \Eloquent|false $data)
     * @see \Botble\Language\LanguageManager::transRoute
     * @method static string transRoute(string $routeName)
     * @see \Botble\Language\LanguageManager::getInversedLocaleFromMapping
     * @method static null|string getInversedLocaleFromMapping(null|string $locale)
     * @see \Botble\Language\LanguageManager::registerModule
     * @method static \Botble\Language\LanguageManager registerModule(array|string $model)
     * @see \Botble\Language\LanguageManager::getCurrentLocale
     * @method static bool|string getCurrentLocale()
     * @see \Botble\Language\LanguageManager::getLocalesMapping
     * @method static array getLocalesMapping()
     * @see \Botble\Language\LanguageManager::getRouteNameFromAPath
     * @method static false|string getRouteNameFromAPath(string $path)
     * @see \Botble\Language\LanguageManager::createUrlFromUri
     * @method static string createUrlFromUri(null|string $uri)
     * @see \Botble\Language\LanguageManager::getLocaleByLocaleCode
     * @method static null|string getLocaleByLocaleCode(string $localeCode)
     * @see \Botble\Language\LanguageManager::getURLFromRouteNameTranslated
     * @method static false|string getURLFromRouteNameTranslated(bool|string $locale, string $transKeyName, array $attributes = [], $forceDefaultLocation = false)
     * @see \Botble\Language\LanguageManager::setLocale
     * @method static null|string setLocale(null|string $locale = null)
     * @see \Botble\Language\LanguageManager::setDefaultLocale
     * @method static void setDefaultLocale()
     * @see \Botble\Language\LanguageManager::getSupportedLocales
     * @method static array getSupportedLocales()
     * @see \Botble\Language\LanguageManager::getActiveLanguage
     * @method static array|\Illuminate\Support\Collection getActiveLanguage(array $select = ['*'])
     * @see \Botble\Language\LanguageManager::setSupportedLocales
     * @method static void setSupportedLocales(array $locales)
     * @see \Botble\Language\LanguageManager::getRelatedLanguageItem
     * @method static array getRelatedLanguageItem(int $id, null|string $uniqueKey)
     * @see \Botble\Language\LanguageManager::getCurrentAdminLocale
     * @method static null|string getCurrentAdminLocale()
     * @see \Botble\Language\LanguageManager::getLocaleFromMapping
     * @method static null|string getLocaleFromMapping(null|string $locale)
     * @see \Botble\Language\LanguageManager::getForcedLocale
     * @method static null|string getForcedLocale()
     * @see \Botble\Language\LanguageManager::setRoutesCachePath
     * @method static string setRoutesCachePath()
     * @see \Botble\Language\LanguageManager::getDefaultLanguage
     * @method static \Botble\Language\Models\Language|null getDefaultLanguage(array $select = ['*'])
     * @see \Botble\Language\LanguageManager::getSerializedTranslatedRoutes
     * @method static string getSerializedTranslatedRoutes()
     * @see \Botble\Language\LanguageManager::useAcceptLanguageHeader
     * @method static bool useAcceptLanguageHeader()
     * @see \Botble\Language\LanguageManager::getHiddenLanguageText
     * @method static string getHiddenLanguageText()
     * @see \Botble\Language\LanguageManager::getDefaultLocale
     * @method static string getDefaultLocale()
     * @see \Botble\Language\LanguageManager::setSerializedTranslatedRoutes
     * @method static void setSerializedTranslatedRoutes(null|string $serializedRoutes)
     * @see \Botble\Language\LanguageManager::setRouteName
     * @method static void setRouteName(string $routeName)
     * @see \Botble\Language\LanguageManager::checkLocaleInSupportedLocales
     * @method static bool checkLocaleInSupportedLocales(bool|string $locale)
     * @see \Botble\Language\LanguageManager::setBaseUrl
     * @method static void setBaseUrl(string $url)
     * @see \Botble\Language\LanguageManager::getDefaultLocaleCode
     * @method static null|string getDefaultLocaleCode()
     * @see \Botble\Language\LanguageManager::supportedModels
     * @method static array supportedModels()
     * @see \Botble\Language\LanguageManager::saveLanguage
     * @method static bool saveLanguage(string $screen, \Illuminate\Http\Request $request, \Eloquent|false $data)
     * @see \Botble\Language\LanguageManager::getSwitcherUrl
     * @method static \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\UrlGenerator|mixed|string getSwitcherUrl(string $localeCode, string $languageCode)
     * @see \Botble\Language\LanguageManager::getCurrentLocaleRTL
     * @method static false|string getCurrentLocaleRTL()
     * @see \Botble\Language\LanguageManager::getSupportedLanguagesKeys
     * @method static array getSupportedLanguagesKeys()
     * @see \Botble\Language\LanguageManager::getCurrentLocaleName
     * @method static null|string getCurrentLocaleName()
     * @see \Botble\Language\LanguageManager::getCurrentAdminLocaleCode
     * @method static null|string getCurrentAdminLocaleCode()
     */
    class LanguageFacade {}
}

namespace Botble\Location\Facades {

    /**
     * @see \Botble\Location\Location::getCitiesByState
     * @method static array getCitiesByState($stateId)
     * @see \Botble\Location\Location::downloadRemoteLocation
     * @method static array downloadRemoteLocation(string $countryCode)
     * @see \Botble\Location\Location::getRemoteAvailableLocations
     * @method static array|string[] getRemoteAvailableLocations()
     * @see \Botble\Location\Location::registerModule
     * @method static bool registerModule(string $model, array $keys = [])
     * @see \Botble\Location\Location::filter
     * @method static mixed filter($model, int $cityId = null, string $location = null)
     * @see \Botble\Location\Location::supportedModels
     * @method static array supportedModels()
     * @see \Botble\Location\Location::getSupported
     * @method static array getSupported(object|string $model = null)
     * @see \Botble\Location\Location::getStates
     * @method static array getStates()
     * @see \Botble\Location\Location::isSupported
     * @method static bool isSupported(object|string $model)
     * @see \Botble\Location\Location::getCityNameById
     * @method static null|string getCityNameById($cityId)
     * @see \Botble\Location\Location::getStateNameById
     * @method static null|string getStateNameById($stateId)
     * @see \Botble\Location\Location::getCityById
     * @method static \Botble\Location\Models\City|null getCityById($cityId)
     */
    class LocationFacade {}
}

namespace Botble\Marketplace\Facades {

    /**
     * @see \Botble\Marketplace\Supports\MarketplaceHelper::getAssetVersion
     * @method static string getAssetVersion()
     * @see \Botble\Marketplace\Supports\MarketplaceHelper::view
     * @method static \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View view(string $view, array $data = [])
     * @see \Botble\Marketplace\Supports\MarketplaceHelper::allowVendorManageShipping
     * @method static bool allowVendorManageShipping()
     * @see \Botble\Marketplace\Supports\MarketplaceHelper::getSettingKey
     * @method static string getSettingKey(string $key = '')
     * @see \Botble\Marketplace\Supports\MarketplaceHelper::hideStoreEmail
     * @method static bool hideStoreEmail()
     * @see \Botble\Marketplace\Supports\MarketplaceHelper::hideStorePhoneNumber
     * @method static bool hideStorePhoneNumber()
     * @see \Botble\Marketplace\Supports\MarketplaceHelper::setEmailVendorVariables
     * @method static \Botble\Base\Supports\EmailHandler setEmailVendorVariables(\Botble\Ecommerce\Models\Order $order)
     * @see \Botble\Marketplace\Supports\MarketplaceHelper::discountTypes
     * @method static array discountTypes()
     * @see \Botble\Marketplace\Supports\MarketplaceHelper::viewPath
     * @method static string viewPath(string $view)
     * @see \Botble\Marketplace\Supports\MarketplaceHelper::getSetting
     * @method static array|bool|null|string getSetting(string $key, array|bool|null|string $default = '')
     * @see \Botble\Marketplace\Supports\MarketplaceHelper::sendMailToVendorAfterProcessingOrder
     * @method static array|\Illuminate\Support\Collection|mixed sendMailToVendorAfterProcessingOrder($orders)
     * @see \Botble\Marketplace\Supports\MarketplaceHelper::isCommissionCategoryFeeBasedEnabled
     * @method static bool isCommissionCategoryFeeBasedEnabled()
     */
    class MarketplaceHelperFacade {}
}

namespace Botble\Media\Facades {

    /**
     * @see \Botble\Media\RvMedia::uploadFromUrl
     * @method static array|null uploadFromUrl(string $url, int $folderId = 0, null|string $folderSlug = null, null|string $defaultMimetype = null)
     * @see \Botble\Media\RvMedia::renderContent
     * @method static string renderContent()
     * @see \Botble\Media\RvMedia::getUploadPath
     * @method static string getUploadPath()
     * @see \Botble\Media\RvMedia::isUsingCloud
     * @method static bool isUsingCloud()
     * @see \Botble\Media\RvMedia::getSize
     * @method static null|string getSize(string $name)
     * @see \Botble\Media\RvMedia::hasPermission
     * @method static bool hasPermission(string $permission)
     * @see \Botble\Media\RvMedia::createFolder
     * @method static int createFolder(string $folderSlug, int|null $parentId = 0)
     * @see \Botble\Media\RvMedia::setPermissions
     * @method static void setPermissions(array $permissions)
     * @see \Botble\Media\RvMedia::getImageUrl
     * @method static array|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\UrlGenerator|mixed|null|string|string[] getImageUrl(null|string $url, $size = null, bool $relativePath = false, $default = null)
     * @see \Botble\Media\RvMedia::getAllImageSizes
     * @method static array getAllImageSizes(null|string $url)
     * @see \Botble\Media\RvMedia::removeSize
     * @method static \Botble\Media\RvMedia removeSize(string $name)
     * @see \Botble\Media\RvMedia::canGenerateThumbnails
     * @method static bool canGenerateThumbnails(null|string $mimeType)
     * @see \Botble\Media\RvMedia::setUploadPathAndURLToPublic
     * @method static \Botble\Media\RvMedia setUploadPathAndURLToPublic()
     * @see \Botble\Media\RvMedia::getMimeType
     * @method static null|string getMimeType(string $url)
     * @see \Botble\Media\RvMedia::getPermissions
     * @method static array getPermissions()
     * @see \Botble\Media\RvMedia::renderHeader
     * @method static string renderHeader()
     * @see \Botble\Media\RvMedia::deleteFile
     * @method static bool deleteFile(\Botble\Media\Models\MediaFile $file)
     * @see \Botble\Media\RvMedia::removePermission
     * @method static void removePermission(string $permission)
     * @see \Botble\Media\RvMedia::isImage
     * @method static bool isImage(string $mimeType)
     * @see \Botble\Media\RvMedia::handleTargetFolder
     * @method static string handleTargetFolder(int|null $folderId = 0, string $filePath = '')
     * @see \Botble\Media\RvMedia::getSizes
     * @method static array getSizes()
     * @see \Botble\Media\RvMedia::turnOffAutomaticUrlTranslationIntoLatin
     * @method static bool turnOffAutomaticUrlTranslationIntoLatin()
     * @see \Botble\Media\RvMedia::handleUpload
     * @method static array handleUpload(\Illuminate\Http\UploadedFile|null $fileUpload, int|null $folderId = 0, null|string $folderSlug = null, bool $skipValidation = false)
     * @see \Botble\Media\RvMedia::getRealPath
     * @method static string getRealPath(string $url)
     * @see \Botble\Media\RvMedia::hasAnyPermission
     * @method static bool hasAnyPermission(array $permissions)
     * @see \Botble\Media\RvMedia::isChunkUploadEnabled
     * @method static bool isChunkUploadEnabled()
     * @see \Botble\Media\RvMedia::responseError
     * @method static \Illuminate\Http\JsonResponse responseError(string $message, array $data = [], int|null $code = null, int $status = 200)
     * @see \Botble\Media\RvMedia::uploadFromPath
     * @method static array uploadFromPath(string $path, int $folderId = 0, null|string $folderSlug = null, null|string $defaultMimetype = null)
     * @see \Botble\Media\RvMedia::insertWatermark
     * @method static bool insertWatermark(string $image)
     * @see \Botble\Media\RvMedia::getConfig
     * @method static array|\ArrayAccess|\Illuminate\Config\Repository|\Illuminate\Contracts\Foundation\Application|mixed getConfig(null|string $key = null, array|null|string $default = null)
     * @see \Botble\Media\RvMedia::renderFooter
     * @method static string renderFooter()
     * @see \Botble\Media\RvMedia::getUrls
     * @method static array getUrls()
     * @see \Botble\Media\RvMedia::responseSuccess
     * @method static \Illuminate\Http\JsonResponse responseSuccess(array $data, null|string $message = null)
     * @see \Botble\Media\RvMedia::getUploadURL
     * @method static string getUploadURL()
     * @see \Botble\Media\RvMedia::url
     * @method static string url(null|string $path)
     * @see \Botble\Media\RvMedia::generateThumbnails
     * @method static bool generateThumbnails(\Botble\Media\Models\MediaFile $file)
     * @see \Botble\Media\RvMedia::imageValidationRule
     * @method static string imageValidationRule()
     * @see \Botble\Media\RvMedia::getServerConfigMaxUploadFileSize
     * @method static float getServerConfigMaxUploadFileSize()
     * @see \Botble\Media\RvMedia::deleteThumbnails
     * @method static bool deleteThumbnails(\Botble\Media\Models\MediaFile $file)
     * @see \Botble\Media\RvMedia::addPermission
     * @method static void addPermission(string $permission)
     * @see \Botble\Media\RvMedia::uploadFromEditor
     * @method static \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\JsonResponse|\Illuminate\Http\Response uploadFromEditor(\Illuminate\Http\Request $request, int|null $folderId = 0, $folderName = null, string $fileInput = 'upload')
     * @see \Botble\Media\RvMedia::addSize
     * @method static \Botble\Media\RvMedia addSize(string $name, int|string $width, int|string $height = 'auto')
     * @see \Botble\Media\RvMedia::getImageProcessingLibrary
     * @method static string getImageProcessingLibrary()
     * @see \Botble\Media\RvMedia::getDefaultImage
     * @method static string getDefaultImage(bool $relative = false)
     * @see \Botble\Media\RvMedia::parseSize
     * @method static float parseSize(int|string $size)
     */
    class RvMediaFacade {}
}

namespace Botble\Menu\Facades {

    /**
     * @see \Botble\Menu\Menu::addMenuLocation
     * @method static \Botble\Menu\Menu addMenuLocation(string $location, string $description)
     * @see \Botble\Menu\Menu::hasMenu
     * @method static bool hasMenu(string $slug, bool $active)
     * @see \Botble\Menu\Menu::getMenuOptionModels
     * @method static array getMenuOptionModels()
     * @see \Botble\Menu\Menu::generateSelect
     * @method static null|string generateSelect(array $args = [])
     * @see \Botble\Menu\Menu::generateMenu
     * @method static null|string generateMenu(array $args = [])
     * @see \Botble\Menu\Menu::getReferenceMenuNode
     * @method static \Botble\Menu\Models\MenuNode getReferenceMenuNode(array $item, \Botble\Menu\Models\MenuNode $menuNode)
     * @see \Botble\Menu\Menu::renderMenuLocation
     * @method static string renderMenuLocation(string $location, array $attributes = [])
     * @see \Botble\Menu\Menu::removeMenuLocation
     * @method static \Botble\Menu\Menu removeMenuLocation(string $location)
     * @see \Botble\Menu\Menu::getMenuLocations
     * @method static array getMenuLocations()
     * @see \Botble\Menu\Menu::load
     * @method static void load(bool $force = false)
     * @see \Botble\Menu\Menu::setMenuOptionModels
     * @method static \Botble\Menu\Menu setMenuOptionModels(array $models)
     * @see \Botble\Menu\Menu::registerMenuOptions
     * @method static void registerMenuOptions(string $model, string $name)
     * @see \Botble\Menu\Menu::clearCacheMenuItems
     * @method static \Botble\Menu\Menu clearCacheMenuItems()
     * @see \Botble\Menu\Menu::isLocationHasMenu
     * @method static bool isLocationHasMenu(string $location)
     * @see \Botble\Menu\Menu::recursiveSaveMenu
     * @method static array recursiveSaveMenu(array $menuNodes, int $menuId, int $parentId)
     * @see \Botble\Menu\Menu::addMenuOptionModel
     * @method static \Botble\Menu\Menu addMenuOptionModel(string $model)
     */
    class MenuFacade {}
}

namespace Botble\Optimize\Facades {

    /**
     * @see \Botble\Optimize\Supports\Optimizer::disable
     * @method static \Botble\Optimize\Supports\Optimizer disable()
     * @see \Botble\Optimize\Supports\Optimizer::enable
     * @method static \Botble\Optimize\Supports\Optimizer enable()
     * @see \Botble\Optimize\Supports\Optimizer::isEnabled
     * @method static bool isEnabled()
     */
    class OptimizerFacade {}
}

namespace Botble\SeoHelper\Facades {

    /**
     * @see \Botble\SeoHelper\SeoHelper::setSeoOpenGraph
     * @method static \Botble\SeoHelper\SeoHelper setSeoOpenGraph(\Botble\SeoHelper\Contracts\SeoOpenGraphContract $seoOpenGraph)
     * @see \Botble\SeoHelper\SeoHelper::getDescription
     * @method static null|string getDescription()
     * @see \Botble\SeoHelper\SeoHelper::registerModule
     * @method static \Botble\SeoHelper\SeoHelper registerModule(array|string $model)
     * @see \Botble\SeoHelper\SeoHelper::setSeoTwitter
     * @method static \Botble\SeoHelper\SeoHelper setSeoTwitter(\Botble\SeoHelper\Contracts\SeoTwitterContract $seoTwitter)
     * @see \Botble\SeoHelper\SeoHelper::deleteMetaData
     * @method static bool deleteMetaData(string $screen, \Botble\Base\Models\BaseModel $object)
     * @see \Botble\SeoHelper\SeoHelper::saveMetaData
     * @method static bool saveMetaData(string $screen, \Illuminate\Http\Request $request, \Botble\Base\Models\BaseModel $object)
     * @see \Botble\SeoHelper\SeoHelper::twitter
     * @method static \Botble\SeoHelper\Contracts\SeoTwitterContract twitter()
     * @see \Botble\SeoHelper\SeoHelper::setTitle
     * @method static \Botble\SeoHelper\SeoHelper setTitle(string $title, null|string $siteName = null, null|string $separator = null)
     * @see \Botble\SeoHelper\SeoHelper::meta
     * @method static \Botble\SeoHelper\Contracts\SeoMetaContract meta()
     * @see \Botble\SeoHelper\SeoHelper::getTitle
     * @method static null|string getTitle()
     * @see \Botble\SeoHelper\SeoHelper::setSeoMeta
     * @method static \Botble\SeoHelper\SeoHelper setSeoMeta(\Botble\SeoHelper\Contracts\SeoMetaContract $seoMeta)
     * @see \Botble\SeoHelper\SeoHelper::render
     * @method static string render()
     * @see \Botble\SeoHelper\SeoHelper::setDescription
     * @method static \Botble\SeoHelper\SeoHelper setDescription(string $description)
     * @see \Botble\SeoHelper\SeoHelper::openGraph
     * @method static \Botble\SeoHelper\Contracts\SeoOpenGraphContract openGraph()
     */
    class SeoHelperFacade {}
}

namespace Botble\Setting\Facades {

    /**
     * @see \Botble\Setting\Supports\SettingStore::all
     * @method static array all()
     * @see \Botble\Setting\Supports\SettingStore::forgetAll
     * @method static \Botble\Setting\Supports\SettingStore forgetAll()
     * @see \Botble\Setting\Supports\SettingStore::forget
     * @method static \Botble\Setting\Supports\SettingStore forget(string $key)
     * @see \Botble\Setting\Supports\SettingStore::set
     * @method static \Botble\Setting\Supports\SettingStore set(array|string $key, $value = null)
     * @see \Botble\Setting\Supports\SettingStore::load
     * @method static void load(bool $force = false)
     * @see \Botble\Setting\Supports\SettingStore::get
     * @method static mixed get(array|string $key, $default = null)
     * @see \Botble\Setting\Supports\SettingStore::save
     * @method static bool save()
     * @see \Botble\Setting\Supports\SettingStore::has
     * @method static bool has(string $key)
     */
    class SettingFacade {}
}

namespace Botble\Slug\Facades {

    /**
     * @see \Botble\Slug\SlugHelper::removeModule
     * @method static \Botble\Slug\SlugHelper removeModule(array|string $model)
     * @see \Botble\Slug\SlugHelper::canPreview
     * @method static bool canPreview(string $model)
     * @see \Botble\Slug\SlugHelper::setPrefix
     * @method static \Botble\Slug\SlugHelper setPrefix(string $model, null|string $prefix, bool $canEmptyPrefix = false)
     * @see \Botble\Slug\SlugHelper::registerModule
     * @method static \Botble\Slug\SlugHelper registerModule(array|string $model, null|string $name = null)
     * @see \Botble\Slug\SlugHelper::getPrefix
     * @method static null|string getPrefix(string $model, string $default = '')
     * @see \Botble\Slug\SlugHelper::setColumnUsedForSlugGenerator
     * @method static \Botble\Slug\SlugHelper setColumnUsedForSlugGenerator(string $model, string $column)
     * @see \Botble\Slug\SlugHelper::disablePreview
     * @method static \Botble\Slug\SlugHelper disablePreview(array|string $model)
     * @see \Botble\Slug\SlugHelper::getCanEmptyPrefixes
     * @method static array|string[] getCanEmptyPrefixes()
     * @see \Botble\Slug\SlugHelper::supportedModels
     * @method static array supportedModels()
     * @see \Botble\Slug\SlugHelper::getSlug
     * @method static mixed getSlug(null|string $key, null|string $prefix = null, null|string $model = null, $referenceId = null)
     * @see \Botble\Slug\SlugHelper::isSupportedModel
     * @method static bool isSupportedModel(string $model)
     * @see \Botble\Slug\SlugHelper::getPermalinkSettingKey
     * @method static string getPermalinkSettingKey(string $model)
     * @see \Botble\Slug\SlugHelper::turnOffAutomaticUrlTranslationIntoLatin
     * @method static bool turnOffAutomaticUrlTranslationIntoLatin()
     * @see \Botble\Slug\SlugHelper::getColumnNameToGenerateSlug
     * @method static null|string getColumnNameToGenerateSlug(object|string $model)
     */
    class SlugHelperFacade {}
}

namespace Botble\SocialLogin\Facades {

    /**
     * @see \Botble\SocialLogin\Supports\SocialService::getDataDisable
     * @method static string getDataDisable(string $key)
     * @see \Botble\SocialLogin\Supports\SocialService::isSupportedGuard
     * @method static bool isSupportedGuard(string $guard)
     * @see \Botble\SocialLogin\Supports\SocialService::getProviderKeysEnabled
     * @method static array getProviderKeysEnabled()
     * @see \Botble\SocialLogin\Supports\SocialService::getEnvDisableData
     * @method static string[] getEnvDisableData()
     * @see \Botble\SocialLogin\Supports\SocialService::getDataProviderDefault
     * @method static array[] getDataProviderDefault()
     * @see \Botble\SocialLogin\Supports\SocialService::registerModule
     * @method static \Botble\SocialLogin\Supports\SocialService registerModule(array $model)
     * @see \Botble\SocialLogin\Supports\SocialService::getProviderKeys
     * @method static array getProviderKeys()
     * @see \Botble\SocialLogin\Supports\SocialService::getProviderEnabled
     * @method static string getProviderEnabled(string $provider)
     * @see \Botble\SocialLogin\Supports\SocialService::isSupportedModule
     * @method static bool isSupportedModule(string $model)
     * @see \Botble\SocialLogin\Supports\SocialService::setting
     * @method static string setting(string $key, bool $default = false)
     * @see \Botble\SocialLogin\Supports\SocialService::hasAnyProviderEnable
     * @method static bool hasAnyProviderEnable()
     * @see \Botble\SocialLogin\Supports\SocialService::getProviders
     * @method static array[] getProviders()
     * @see \Botble\SocialLogin\Supports\SocialService::supportedModules
     * @method static array supportedModules()
     * @see \Botble\SocialLogin\Supports\SocialService::isSupportedModuleByKey
     * @method static bool isSupportedModuleByKey(string $key)
     * @see \Botble\SocialLogin\Supports\SocialService::getModule
     * @method static array|null getModule(string $key)
     */
    class SocialServiceFacade {}
}

namespace Botble\Theme\Facades {

    /**
     * @see \Botble\Theme\Supports\AdminBar::getLinksNoGroup
     * @method static array getLinksNoGroup()
     * @see \Botble\Theme\Supports\AdminBar::isDisplay
     * @method static bool isDisplay()
     * @see \Botble\Theme\Supports\AdminBar::getGroups
     * @method static array|array[] getGroups()
     * @see \Botble\Theme\Supports\AdminBar::setIsDisplay
     * @method static \Botble\Theme\Supports\AdminBar setIsDisplay(bool $isDisplay = true)
     * @see \Botble\Theme\Supports\AdminBar::registerGroup
     * @method static \Botble\Theme\Supports\AdminBar registerGroup(string $slug, string $title, string $link = 'javascript:;')
     * @see \Botble\Theme\Supports\AdminBar::render
     * @method static string render()
     * @see \Botble\Theme\Supports\AdminBar::registerLink
     * @method static \Botble\Theme\Supports\AdminBar registerLink(string $title, string $url, $group = null, string $permission = null)
     */
    class AdminBarFacade {}

    /**
     * @see \Botble\Theme\Manager::getAllThemes
     * @method static array getAllThemes()
     * @see \Botble\Theme\Manager::getThemes
     * @method static array getThemes()
     * @see \Botble\Theme\Manager::registerTheme
     * @method static void registerTheme(array|string $theme)
     */
    class ManagerFacade {}

    /**
     * @see \Botble\Theme\Supports\SiteMapManager::add
     * @method static \Botble\Theme\Supports\SiteMapManager add(string $url, null|string $date, string $priority = '1.0', string $sequence = 'daily')
     * @see \Botble\Theme\Supports\SiteMapManager::render
     * @method static \Illuminate\Http\Response render(string $type = 'xml')
     */
    class SiteMapManagerFacade {}

    /**
     * @see \Botble\Theme\Theme::partialComposer
     * @method static void partialComposer($view, \Closure $callback, null|string $layout = null)
     * @see \Botble\Theme\Theme::prepend
     * @method static \Botble\Theme\Theme prepend(string $region, string $value)
     * @see \Botble\Theme\Theme::getContentArgument
     * @method static mixed getContentArgument(string $key, null $default = null)
     * @see \Botble\Theme\Theme::setUpContent
     * @method static \Botble\Theme\Theme setUpContent(string $view, array $args = [])
     * @see \Botble\Theme\Theme::routes
     * @method static mixed routes()
     * @see \Botble\Theme\Theme::path
     * @method static string path(null|string $forceThemeName = null)
     * @see \Botble\Theme\Theme::bind
     * @method static mixed bind(string $variable, $callback = null)
     * @see \Botble\Theme\Theme::getThemeNamespace
     * @method static string getThemeNamespace(string $path = '')
     * @see \Botble\Theme\Theme::fire
     * @method static void fire(string $event, $args)
     * @see \Botble\Theme\Theme::loadView
     * @method static string loadView(string $view)
     * @see \Botble\Theme\Theme::has
     * @method static bool has(string $region)
     * @see \Botble\Theme\Theme::loadPartial
     * @method static null|string loadPartial(string $view, string $partialDir, array $args)
     * @see \Botble\Theme\Theme::binded
     * @method static bool binded(string $variable)
     * @see \Botble\Theme\Theme::getThemeName
     * @method static string getThemeName()
     * @see \Botble\Theme\Theme::header
     * @method static string header()
     * @see \Botble\Theme\Theme::partial
     * @method static null|string partial(string $view, array $args = [])
     * @see \Botble\Theme\Theme::ofWithLayout
     * @method static \Botble\Theme\Theme ofWithLayout(string $view, array $args = [])
     * @see \Botble\Theme\Theme::partialWithLayout
     * @method static null|string partialWithLayout(string $view, array $args = [])
     * @see \Botble\Theme\Theme::footer
     * @method static string footer()
     * @see \Botble\Theme\Theme::getContentArguments
     * @method static array getContentArguments()
     * @see \Botble\Theme\Theme::fireEventGlobalAssets
     * @method static \Botble\Theme\Theme fireEventGlobalAssets()
     * @see \Botble\Theme\Theme::getThemeScreenshot
     * @method static string getThemeScreenshot(string $theme)
     * @see \Botble\Theme\Theme::content
     * @method static null|string content()
     * @see \Botble\Theme\Theme::setThemeName
     * @method static \Botble\Theme\Theme setThemeName(string $theme)
     * @see \Botble\Theme\Theme::load
     * @method static \Botble\Theme\Theme load(string $view, array $args = [])
     * @see \Botble\Theme\Theme::get
     * @method static mixed|string get(string $region, null|string $default = null)
     * @see \Botble\Theme\Theme::scope
     * @method static \Botble\Theme\Theme|void scope(string $view, array $args = [], null $default = null)
     * @see \Botble\Theme\Theme::of
     * @method static \Botble\Theme\Theme of(string $view, array $args = [])
     * @see \Botble\Theme\Theme::theme
     * @method static \Botble\Theme\Theme theme(null|string $theme = null)
     * @see \Botble\Theme\Theme::share
     * @method static mixed share(string $key, $value)
     * @see \Botble\Theme\Theme::place
     * @method static null|string place(string $region, null|string $default = null)
     * @see \Botble\Theme\Theme::getStyleIntegrationPath
     * @method static string getStyleIntegrationPath()
     * @see \Botble\Theme\Theme::getLayoutName
     * @method static string getLayoutName()
     * @see \Botble\Theme\Theme::render
     * @method static \Illuminate\Http\Response render(int $statusCode = 200)
     * @see \Botble\Theme\Theme::hasContentArgument
     * @method static bool hasContentArgument(string $key)
     * @see \Botble\Theme\Theme::watchPartial
     * @method static null|string watchPartial(string $view, array $args = [])
     * @see \Botble\Theme\Theme::set
     * @method static \Botble\Theme\Theme set(string $region, $value)
     * @see \Botble\Theme\Theme::composer
     * @method static void composer($view, \Closure $callback, null|string $layout = null)
     * @see \Botble\Theme\Theme::getConfig
     * @method static array|mixed getConfig(null|string $key = null)
     * @see \Botble\Theme\Theme::layout
     * @method static \Botble\Theme\Theme layout(string $layout)
     * @see \Botble\Theme\Theme::breadcrumb
     * @method static \Botble\Theme\Breadcrumb breadcrumb()
     * @see \Botble\Theme\Theme::getPublicThemeName
     * @method static string getPublicThemeName()
     * @see \Botble\Theme\Theme::exists
     * @method static bool exists(null|string $theme)
     * @see \Botble\Theme\Theme::location
     * @method static null|string location(bool $realPath = false)
     * @see \Botble\Theme\Theme::uses
     * @method static \Botble\Theme\Theme uses(null|string $theme = null)
     * @see \Botble\Theme\Theme::asset
     * @method static \Botble\Theme\Asset|\Botble\Theme\AssetContainer asset()
     * @see \Botble\Theme\Theme::append
     * @method static \Botble\Theme\Theme append(string $region, string $value)
     */
    class ThemeFacade {}

    /**
     * @see \Botble\Theme\ThemeOption::processFieldsArray
     * @method static void processFieldsArray(string $sectionId = '', array $fields = [])
     * @see \Botble\Theme\ThemeOption::constructArgs
     * @method static array constructArgs()
     * @see \Botble\Theme\ThemeOption::getSections
     * @method static array getSections()
     * @see \Botble\Theme\ThemeOption::checkOptName
     * @method static void checkOptName()
     * @see \Botble\Theme\ThemeOption::hideField
     * @method static void hideField(string $id = '', bool $hide = true)
     * @see \Botble\Theme\ThemeOption::constructSections
     * @method static array constructSections()
     * @see \Botble\Theme\ThemeOption::getArg
     * @method static null|string getArg(string $key = '')
     * @see \Botble\Theme\ThemeOption::getSection
     * @method static bool getSection(string $id = '')
     * @see \Botble\Theme\ThemeOption::getField
     * @method static array|bool getField(string $id = '')
     * @see \Botble\Theme\ThemeOption::removeSection
     * @method static \Botble\Theme\ThemeOption removeSection(string $id = '', bool $fields = false)
     * @see \Botble\Theme\ThemeOption::hasOption
     * @method static bool hasOption(string $key)
     * @see \Botble\Theme\ThemeOption::setField
     * @method static \Botble\Theme\ThemeOption setField(array $field = [])
     * @see \Botble\Theme\ThemeOption::setOption
     * @method static \Botble\Theme\ThemeOption setOption(string $key, null|string $value = '')
     * @see \Botble\Theme\ThemeOption::setSections
     * @method static \Botble\Theme\ThemeOption setSections(array $sections = [])
     * @see \Botble\Theme\ThemeOption::removeField
     * @method static \Botble\Theme\ThemeOption removeField(string $id = '')
     * @see \Botble\Theme\ThemeOption::setArgs
     * @method static \Botble\Theme\ThemeOption setArgs(array $args = [])
     * @see \Botble\Theme\ThemeOption::hideSection
     * @method static void hideSection(string $id = '', bool $hide = true)
     * @see \Botble\Theme\ThemeOption::getPriority
     * @method static int getPriority(string $type)
     * @see \Botble\Theme\ThemeOption::setSection
     * @method static \Botble\Theme\ThemeOption setSection(array $section = [])
     * @see \Botble\Theme\ThemeOption::getOption
     * @method static null|string getOption(string $key = '', $default = '')
     * @see \Botble\Theme\ThemeOption::constructFields
     * @method static array constructFields(string $sectionId = '')
     * @see \Botble\Theme\ThemeOption::getArgs
     * @method static array getArgs()
     * @see \Botble\Theme\ThemeOption::getFields
     * @method static array getFields()
     * @see \Botble\Theme\ThemeOption::saveOptions
     * @method static bool saveOptions()
     * @see \Botble\Theme\ThemeOption::renderField
     * @method static mixed|null|string renderField(array $field)
     */
    class ThemeOptionFacade {}
}

namespace Collective\Html {

    /**
     * @see FormBuilder::date
     * @method static \Illuminate\Support\HtmlString date(string $name, string $value = null, array $options = [])
     * @see FormBuilder::select
     * @method static \Illuminate\Support\HtmlString select(string $name, array $list = [], bool|string $selected = null, array $selectAttributes = [], array $optionsAttributes = [], array $optgroupsAttributes = [])
     * @see FormBuilder::considerRequest
     * @method static void considerRequest(bool $consider = true)
     * @see FormBuilder::getModel
     * @method static mixed getModel()
     * @see FormBuilder::textarea
     * @method static \Illuminate\Support\HtmlString textarea(string $name, string $value = null, array $options = [])
     * @see FormBuilder::radio
     * @method static \Illuminate\Support\HtmlString radio(string $name, $value = null, bool $checked = null, array $options = [])
     * @see FormBuilder::number
     * @method static \Illuminate\Support\HtmlString number(string $name, string $value = null, array $options = [])
     * @see FormBuilder::datetime
     * @method static \Illuminate\Support\HtmlString datetime(string $name, string $value = null, array $options = [])
     * @see FormBuilder::password
     * @method static \Illuminate\Support\HtmlString password(string $name, array $options = [])
     * @see FormBuilder::tel
     * @method static \Illuminate\Support\HtmlString tel(string $name, string $value = null, array $options = [])
     * @see FormBuilder::model
     * @method static \Illuminate\Support\HtmlString model($model, array $options = [])
     * @see FormBuilder::getSelectOption
     * @method static \Illuminate\Support\HtmlString getSelectOption(string $display, string $value, string $selected, array $attributes = [], array $optgroupAttributes = [])
     * @see FormBuilder::selectRange
     * @method static \Illuminate\Support\HtmlString selectRange(string $name, string $begin, string $end, string $selected = null, array $options = [])
     * @see FormBuilder::text
     * @method static \Illuminate\Support\HtmlString text(string $name, string $value = null, array $options = [])
     * @see FormBuilder::selectMonth
     * @method static \Illuminate\Support\HtmlString selectMonth(string $name, string $selected = null, array $options = [], string $format = '%B')
     * @see FormBuilder::image
     * @method static \Illuminate\Support\HtmlString image(string $url, string $name = null, array $attributes = [])
     * @see FormBuilder::setModel
     * @method static void setModel($model)
     * @see FormBuilder::old
     * @method static mixed old(string $name)
     * @see FormBuilder::datetimeLocal
     * @method static \Illuminate\Support\HtmlString datetimeLocal(string $name, string $value = null, array $options = [])
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see FormBuilder::input
     * @method static \Illuminate\Support\HtmlString input(string $type, string $name, string $value = null, array $options = [])
     * @see FormBuilder::month
     * @method static \Illuminate\Support\HtmlString month(string $name, string $value = null, array $options = [])
     * @see FormBuilder::getSessionStore
     * @method static \Illuminate\Contracts\Session\Session getSessionStore()
     * @see FormBuilder::reset
     * @method static \Illuminate\Support\HtmlString reset(string $value, array $attributes = [])
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     * @see FormBuilder::week
     * @method static \Illuminate\Support\HtmlString week(string $name, string $value = null, array $options = [])
     * @see FormBuilder::color
     * @method static \Illuminate\Support\HtmlString color(string $name, string $value = null, array $options = [])
     * @see FormBuilder::submit
     * @method static \Illuminate\Support\HtmlString submit(string $value = null, array $options = [])
     * @see FormBuilder::hidden
     * @method static \Illuminate\Support\HtmlString hidden(string $name, string $value = null, array $options = [])
     * @see FormBuilder::range
     * @method static \Illuminate\Support\HtmlString range(string $name, string $value = null, array $options = [])
     * @see FormBuilder::getValueAttribute
     * @method static array|mixed|null|string getValueAttribute(string $name, string $value = null)
     * @see FormBuilder::setSessionStore
     * @method static FormBuilder setSessionStore(\Illuminate\Contracts\Session\Session $session)
     * @see FormBuilder::button
     * @method static \Illuminate\Support\HtmlString button(string $value = null, array $options = [])
     * @see FormBuilder::search
     * @method static \Illuminate\Support\HtmlString search(string $name, string $value = null, array $options = [])
     * @see FormBuilder::file
     * @method static \Illuminate\Support\HtmlString file(string $name, array $options = [])
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see FormBuilder::checkbox
     * @method static \Illuminate\Support\HtmlString checkbox(string $name, $value = 1, bool $checked = null, array $options = [])
     * @see FormBuilder::close
     * @method static \Illuminate\Support\HtmlString|string close()
     * @see FormBuilder::email
     * @method static \Illuminate\Support\HtmlString email(string $name, string $value = null, array $options = [])
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see FormBuilder::oldInputIsEmpty
     * @method static bool oldInputIsEmpty()
     * @see FormBuilder::selectYear
     * @method static mixed selectYear()
     * @see FormBuilder::datalist
     * @method static \Illuminate\Support\HtmlString datalist(string $id, array $list = [])
     * @see Componentable::componentCall
     * @method static \Illuminate\Contracts\View\View|mixed componentCall(string $method, array $parameters)
     * @see FormBuilder::label
     * @method static \Illuminate\Support\HtmlString label(string $name, string $value = null, array $options = [], bool $escape_html = true)
     * @see FormBuilder::url
     * @method static \Illuminate\Support\HtmlString url(string $name, string $value = null, array $options = [])
     * @see FormBuilder::token
     * @method static \Illuminate\Support\HtmlString|string token()
     * @see Componentable::component
     * @method static void component($name, $view, array $signature)
     * @see FormBuilder::getIdAttribute
     * @method static string getIdAttribute(string $name, array $attributes)
     * @see FormBuilder::time
     * @method static \Illuminate\Support\HtmlString time(string $name, string $value = null, array $options = [])
     * @see \Illuminate\Support\Traits\Macroable::macroCall
     * @method static mixed macroCall(string $method, array $parameters)
     * @see Componentable::hasComponent
     * @method static bool hasComponent($name)
     * @see FormBuilder::open
     * @method static \Illuminate\Support\HtmlString open(array $options = [])
     */
    class FormFacade {}

    /**
     * @see HtmlBuilder::linkSecureAsset
     * @method static \Illuminate\Support\HtmlString linkSecureAsset(string $url, string $title = null, array $attributes = [], bool $escape = true)
     * @see HtmlBuilder::link
     * @method static \Illuminate\Support\HtmlString link(string $url, string $title = null, array $attributes = [], bool $secure = null, bool $escape = true)
     * @see HtmlBuilder::dl
     * @method static \Illuminate\Support\HtmlString dl(array $list, array $attributes = [])
     * @see HtmlBuilder::linkAction
     * @method static \Illuminate\Support\HtmlString linkAction(string $action, string $title = null, array $parameters = [], array $attributes = [], bool $secure = null, bool $escape = true)
     * @see HtmlBuilder::decode
     * @method static string decode(string $value)
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see HtmlBuilder::ul
     * @method static \Illuminate\Support\HtmlString|string ul(array $list, array $attributes = [])
     * @see HtmlBuilder::tag
     * @method static \Illuminate\Support\HtmlString tag(string $tag, $content, array $attributes = [])
     * @see HtmlBuilder::ol
     * @method static \Illuminate\Support\HtmlString|string ol(array $list, array $attributes = [])
     * @see HtmlBuilder::email
     * @method static string email(string $email)
     * @see HtmlBuilder::image
     * @method static \Illuminate\Support\HtmlString image(string $url, string $alt = null, array $attributes = [], bool $secure = null)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see HtmlBuilder::nbsp
     * @method static string nbsp(int $num = 1)
     * @see HtmlBuilder::obfuscate
     * @method static string obfuscate(string $value)
     * @see HtmlBuilder::secureLink
     * @method static \Illuminate\Support\HtmlString secureLink(string $url, string $title = null, array $attributes = [], bool $escape = true)
     * @see HtmlBuilder::favicon
     * @method static \Illuminate\Support\HtmlString favicon(string $url, array $attributes = [], bool $secure = null)
     * @see Componentable::componentCall
     * @method static \Illuminate\Contracts\View\View|mixed componentCall(string $method, array $parameters)
     * @see HtmlBuilder::script
     * @method static \Illuminate\Support\HtmlString script(string $url, array $attributes = [], bool $secure = null)
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see Componentable::component
     * @method static void component($name, $view, array $signature)
     * @see HtmlBuilder::entities
     * @method static string entities(string $value)
     * @see HtmlBuilder::meta
     * @method static \Illuminate\Support\HtmlString meta(string $name, string $content, array $attributes = [])
     * @see HtmlBuilder::linkRoute
     * @method static \Illuminate\Support\HtmlString linkRoute(string $name, string $title = null, array $parameters = [], array $attributes = [], bool $secure = null, bool $escape = true)
     * @see HtmlBuilder::style
     * @method static \Illuminate\Support\HtmlString style(string $url, array $attributes = [], bool $secure = null)
     * @see HtmlBuilder::mailto
     * @method static \Illuminate\Support\HtmlString mailto(string $email, string $title = null, array $attributes = [], bool $escape = true)
     * @see HtmlBuilder::attributes
     * @method static string attributes(array $attributes)
     * @see \Illuminate\Support\Traits\Macroable::macroCall
     * @method static mixed macroCall(string $method, array $parameters)
     * @see Componentable::hasComponent
     * @method static bool hasComponent($name)
     * @see HtmlBuilder::linkAsset
     * @method static \Illuminate\Support\HtmlString linkAsset(string $url, string $title = null, array $attributes = [], bool $secure = null, bool $escape = true)
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     */
    class HtmlFacade {}
}

namespace Illuminate\Support\Facades {

    /**
     * @see \Illuminate\Contracts\Container\Container::instance
     * @method static mixed instance(string $abstract, $instance)
     * @see \Illuminate\Contracts\Container\Container::singletonIf
     * @method static void singletonIf(string $abstract, \Closure|null|string $concrete = null)
     * @see \Illuminate\Contracts\Foundation\Application::basePath
     * @method static string basePath(string $path = '')
     * @see \Illuminate\Contracts\Container\Container::when
     * @method static \Illuminate\Contracts\Container\ContextualBindingBuilder when(array|string $concrete)
     * @see \Illuminate\Contracts\Foundation\Application::resourcePath
     * @method static string resourcePath(string $path = '')
     * @see \Illuminate\Contracts\Foundation\Application::databasePath
     * @method static string databasePath(string $path = '')
     * @see \Illuminate\Contracts\Container\Container::bind
     * @method static void bind(string $abstract, \Closure|null|string $concrete = null, bool $shared = false)
     * @see \Illuminate\Contracts\Container\Container::tagged
     * @method static iterable tagged(string $tag)
     * @see \Illuminate\Contracts\Foundation\Application::storagePath
     * @method static string storagePath(string $path = '')
     * @see \Illuminate\Contracts\Foundation\Application::booted
     * @method static void booted(callable $callback)
     * @see \Illuminate\Contracts\Container\Container::tag
     * @method static void tag(array|string $abstracts, array|array[] $tags)
     * @see \Psr\Container\ContainerInterface::has
     * @method static bool has(string $id)
     * @see \Illuminate\Contracts\Foundation\Application::registerDeferredProvider
     * @method static void registerDeferredProvider(string $provider, null|string $service = null)
     * @see \Illuminate\Contracts\Container\Container::addContextualBinding
     * @method static void addContextualBinding(string $concrete, string $abstract, \Closure|string $implementation)
     * @see \Illuminate\Contracts\Foundation\Application::isDownForMaintenance
     * @method static bool isDownForMaintenance()
     * @see \Illuminate\Contracts\Container\Container::bindIf
     * @method static void bindIf(string $abstract, \Closure|null|string $concrete = null, bool $shared = false)
     * @see \Illuminate\Contracts\Foundation\Application::version
     * @method static string version()
     * @see \Illuminate\Contracts\Container\Container::extend
     * @method static void extend(string $abstract, \Closure $closure)
     * @see \Illuminate\Contracts\Foundation\Application::hasBeenBootstrapped
     * @method static bool hasBeenBootstrapped()
     * @see \Illuminate\Contracts\Foundation\Application::loadDeferredProviders
     * @method static void loadDeferredProviders()
     * @see \Illuminate\Contracts\Container\Container::afterResolving
     * @method static void afterResolving(\Closure|string $abstract, \Closure $callback = null)
     * @see \Illuminate\Contracts\Foundation\Application::terminate
     * @method static void terminate()
     * @see \Illuminate\Contracts\Foundation\Application::runningInConsole
     * @method static bool runningInConsole()
     * @see \Illuminate\Contracts\Foundation\Application::runningUnitTests
     * @method static bool runningUnitTests()
     * @see \Illuminate\Contracts\Foundation\Application::setLocale
     * @method static void setLocale(string $locale)
     * @see \Illuminate\Contracts\Foundation\Application::bootstrapPath
     * @method static string bootstrapPath(string $path = '')
     * @see \Illuminate\Contracts\Foundation\Application::maintenanceMode
     * @method static \Illuminate\Contracts\Foundation\MaintenanceMode maintenanceMode()
     * @see \Illuminate\Contracts\Foundation\Application::resolveProvider
     * @method static \Illuminate\Support\ServiceProvider resolveProvider(string $provider)
     * @see \Illuminate\Contracts\Container\Container::beforeResolving
     * @method static void beforeResolving(\Closure|string $abstract, \Closure $callback = null)
     * @see \Illuminate\Contracts\Foundation\Application::getProviders
     * @method static array getProviders(\Illuminate\Support\ServiceProvider|string $provider)
     * @see \Illuminate\Contracts\Container\Container::flush
     * @method static void flush()
     * @see \Illuminate\Contracts\Foundation\Application::registerConfiguredProviders
     * @method static void registerConfiguredProviders()
     * @see \Psr\Container\ContainerInterface::get
     * @method static mixed get(string $id)
     * @see \Illuminate\Contracts\Container\Container::alias
     * @method static void alias(string $abstract, string $alias)
     * @see \Illuminate\Contracts\Foundation\Application::getNamespace
     * @method static string getNamespace()
     * @see \Illuminate\Contracts\Foundation\Application::boot
     * @method static void boot()
     * @see \Illuminate\Contracts\Container\Container::make
     * @method static mixed make(string $abstract, array $parameters = [])
     * @see \Illuminate\Contracts\Container\Container::scopedIf
     * @method static void scopedIf(string $abstract, \Closure|null|string $concrete = null)
     * @see \Illuminate\Contracts\Container\Container::resolved
     * @method static bool resolved(string $abstract)
     * @see \Illuminate\Contracts\Foundation\Application::bootstrapWith
     * @method static void bootstrapWith(array $bootstrappers)
     * @see \Illuminate\Contracts\Container\Container::singleton
     * @method static void singleton(string $abstract, \Closure|null|string $concrete = null)
     * @see \Illuminate\Contracts\Container\Container::factory
     * @method static \Closure factory(string $abstract)
     * @see \Illuminate\Contracts\Container\Container::resolving
     * @method static void resolving(\Closure|string $abstract, \Closure $callback = null)
     * @see \Illuminate\Contracts\Container\Container::bound
     * @method static bool bound(string $abstract)
     * @see \Illuminate\Contracts\Foundation\Application::shouldSkipMiddleware
     * @method static bool shouldSkipMiddleware()
     * @see \Illuminate\Contracts\Foundation\Application::booting
     * @method static void booting(callable $callback)
     * @see \Illuminate\Contracts\Container\Container::call
     * @method static mixed call(callable|string $callback, array $parameters = [], null|string $defaultMethod = null)
     * @see \Illuminate\Contracts\Foundation\Application::environment
     * @method static bool|string environment(...$environments)
     * @see \Illuminate\Contracts\Container\Container::scoped
     * @method static void scoped(string $abstract, \Closure|null|string $concrete = null)
     * @see \Illuminate\Contracts\Foundation\Application::getLocale
     * @method static string getLocale()
     * @see \Illuminate\Contracts\Foundation\Application::terminating
     * @method static \Illuminate\Contracts\Foundation\Application terminating(callable|string $callback)
     * @see \Illuminate\Contracts\Foundation\Application::configPath
     * @method static string configPath(string $path = '')
     * @see \Illuminate\Contracts\Foundation\Application::register
     * @method static \Illuminate\Support\ServiceProvider register(\Illuminate\Support\ServiceProvider|string $provider, bool $force = false)
     */
    class App {}

    /**
     * @see \Illuminate\Contracts\Console\Kernel::all
     * @method static array all()
     * @see \Illuminate\Contracts\Console\Kernel::output
     * @method static string output()
     * @see \Illuminate\Contracts\Console\Kernel::call
     * @method static int call(string $command, array $parameters = [], null|\Symfony\Component\Console\Output\OutputInterface $outputBuffer = null)
     * @see \Illuminate\Contracts\Console\Kernel::handle
     * @method static int handle(\Symfony\Component\Console\Input\InputInterface $input, null|\Symfony\Component\Console\Output\OutputInterface $output = null)
     * @see \Illuminate\Contracts\Console\Kernel::terminate
     * @method static void terminate(\Symfony\Component\Console\Input\InputInterface $input, int $status)
     * @see \Illuminate\Contracts\Console\Kernel::bootstrap
     * @method static void bootstrap()
     * @see \Illuminate\Contracts\Console\Kernel::queue
     * @method static \Illuminate\Foundation\Bus\PendingDispatch queue(string $command, array $parameters = [])
     */
    class Artisan {}

    /**
     * @see \Illuminate\Auth\CreatesUserProviders::getDefaultUserProvider
     * @method static string getDefaultUserProvider()
     * @see \Illuminate\Auth\AuthManager::forgetGuards
     * @method static \Illuminate\Auth\AuthManager forgetGuards()
     * @see \Illuminate\Auth\AuthManager::setDefaultDriver
     * @method static void setDefaultDriver(string $name)
     * @see \Illuminate\Auth\AuthManager::shouldUse
     * @method static void shouldUse(string $name)
     * @see \Illuminate\Auth\AuthManager::guard
     * @method static \Illuminate\Contracts\Auth\Guard|\Illuminate\Contracts\Auth\StatefulGuard guard(null|string $name = null)
     * @see \Illuminate\Auth\CreatesUserProviders::createUserProvider
     * @method static \Illuminate\Contracts\Auth\UserProvider|null createUserProvider(null|string $provider = null)
     * @see \Illuminate\Auth\AuthManager::createTokenDriver
     * @method static \Illuminate\Auth\TokenGuard createTokenDriver(string $name, array $config)
     * @see \Illuminate\Auth\AuthManager::viaRequest
     * @method static \Illuminate\Auth\AuthManager viaRequest(string $driver, callable $callback)
     * @see \Illuminate\Auth\AuthManager::extend
     * @method static \Illuminate\Auth\AuthManager extend(string $driver, \Closure $callback)
     * @see \Illuminate\Auth\AuthManager::hasResolvedGuards
     * @method static bool hasResolvedGuards()
     * @see \Illuminate\Auth\AuthManager::provider
     * @method static \Illuminate\Auth\AuthManager provider(string $name, \Closure $callback)
     * @see \Illuminate\Auth\AuthManager::userResolver
     * @method static \Closure userResolver()
     * @see \Illuminate\Auth\AuthManager::resolveUsersUsing
     * @method static \Illuminate\Auth\AuthManager resolveUsersUsing(\Closure $userResolver)
     * @see \Illuminate\Auth\AuthManager::setApplication
     * @method static \Illuminate\Auth\AuthManager setApplication(\Illuminate\Contracts\Foundation\Application $app)
     * @see \Illuminate\Auth\AuthManager::createSessionDriver
     * @method static \Illuminate\Auth\SessionGuard createSessionDriver(string $name, array $config)
     * @see \Illuminate\Auth\AuthManager::getDefaultDriver
     * @method static string getDefaultDriver()
     * @see \Illuminate\Contracts\Auth\Guard::setUser
     * @method static void setUser(\Illuminate\Contracts\Auth\Authenticatable $user)
     * @see \Illuminate\Contracts\Auth\Guard::guest
     * @method static bool guest()
     * @see \Illuminate\Contracts\Auth\Guard::id
     * @method static int|null|string id()
     * @see \Illuminate\Contracts\Auth\Guard::check
     * @method static bool check()
     * @see \Illuminate\Contracts\Auth\Guard::hasUser
     * @method static bool hasUser()
     * @see \Illuminate\Contracts\Auth\Guard::user
     * @method static \Illuminate\Contracts\Auth\Authenticatable|null user()
     * @see \Illuminate\Contracts\Auth\Guard::validate
     * @method static bool validate(array $credentials = [])
     * @see \Illuminate\Contracts\Auth\StatefulGuard::onceUsingId
     * @method static bool|\Illuminate\Contracts\Auth\Authenticatable onceUsingId($id)
     * @see \Illuminate\Contracts\Auth\StatefulGuard::login
     * @method static void login(\Illuminate\Contracts\Auth\Authenticatable $user, bool $remember = false)
     * @see \Illuminate\Contracts\Auth\StatefulGuard::attempt
     * @method static bool attempt(array $credentials = [], bool $remember = false)
     * @see \Illuminate\Contracts\Auth\StatefulGuard::viaRemember
     * @method static bool viaRemember()
     * @see \Illuminate\Contracts\Auth\StatefulGuard::logout
     * @method static void logout()
     * @see \Illuminate\Contracts\Auth\StatefulGuard::once
     * @method static bool once(array $credentials = [])
     * @see \Illuminate\Contracts\Auth\StatefulGuard::loginUsingId
     * @method static bool|\Illuminate\Contracts\Auth\Authenticatable loginUsingId($id, bool $remember = false)
     */
    class Auth {}

    /**
     * @see \Illuminate\View\Compilers\BladeCompiler::getCustomDirectives
     * @method static array getCustomDirectives()
     * @see \Illuminate\View\Compilers\BladeCompiler::getClassComponentNamespaces
     * @method static array getClassComponentNamespaces()
     * @see \Illuminate\View\Compilers\Concerns\CompilesConditionals::compileEndOnce
     * @method static string compileEndOnce()
     * @see \Illuminate\View\Compilers\BladeCompiler::componentNamespace
     * @method static void componentNamespace(string $namespace, string $prefix)
     * @see \Illuminate\View\Compilers\BladeCompiler::if
     * @method static void if(string $name, callable $callback)
     * @see \Illuminate\View\Compilers\BladeCompiler::extend
     * @method static void extend(callable $compiler)
     * @see \Illuminate\View\Compilers\BladeCompiler::withoutDoubleEncoding
     * @method static void withoutDoubleEncoding()
     * @see \Illuminate\View\Compilers\Concerns\CompilesEchos::compileEchos
     * @method static string compileEchos(string $value)
     * @see \Illuminate\View\Compilers\BladeCompiler::renderComponent
     * @method static string renderComponent(\Illuminate\View\Component $component)
     * @see \Illuminate\View\Compilers\BladeCompiler::components
     * @method static void components(array $components, string $prefix = '')
     * @see \Illuminate\View\Compilers\BladeCompiler::precompiler
     * @method static void precompiler(callable $precompiler)
     * @see \Illuminate\View\Compilers\Compiler::getCompiledPath
     * @method static string getCompiledPath(string $path)
     * @see \Illuminate\View\Compilers\BladeCompiler::getClassComponentAliases
     * @method static array getClassComponentAliases()
     * @see \Illuminate\View\Compilers\BladeCompiler::include
     * @method static void include(string $path, null|string $alias = null)
     * @see \Illuminate\View\Compilers\Concerns\CompilesComponents::compileClassComponentOpening
     * @method static string compileClassComponentOpening(string $component, string $alias, string $data, string $hash)
     * @see \Illuminate\View\Compilers\BladeCompiler::getAnonymousComponentNamespaces
     * @method static array getAnonymousComponentNamespaces()
     * @see \Illuminate\View\Compilers\BladeCompiler::component
     * @method static void component(string $class, null|string $alias = null, string $prefix = '')
     * @see \Illuminate\View\Compilers\Concerns\CompilesComponents::compileEndComponentClass
     * @method static string compileEndComponentClass()
     * @see \Illuminate\View\Compilers\BladeCompiler::getExtensions
     * @method static array getExtensions()
     * @see \Illuminate\View\Compilers\BladeCompiler::withDoubleEncoding
     * @method static void withDoubleEncoding()
     * @see \Illuminate\View\Compilers\BladeCompiler::setEchoFormat
     * @method static void setEchoFormat(string $format)
     * @see \Illuminate\View\Compilers\BladeCompiler::aliasInclude
     * @method static void aliasInclude(string $path, null|string $alias = null)
     * @see \Illuminate\View\Compilers\BladeCompiler::compile
     * @method static void compile(null|string $path = null)
     * @see \Illuminate\View\Compilers\Compiler::isExpired
     * @method static bool isExpired(string $path)
     * @see \Illuminate\View\Compilers\Concerns\CompilesEchos::stringable
     * @method static void stringable(callable|string $class, callable|null $handler = null)
     * @see \Illuminate\View\Compilers\BladeCompiler::check
     * @method static bool check(string $name, ...$parameters)
     * @see \Illuminate\View\Compilers\Concerns\CompilesEchos::applyEchoHandler
     * @method static string applyEchoHandler(string $value)
     * @see \Illuminate\View\Compilers\Concerns\CompilesComponents::sanitizeComponentAttribute
     * @method static \Illuminate\View\ComponentAttributeBag|mixed sanitizeComponentAttribute($value)
     * @see \Illuminate\View\Compilers\BladeCompiler::withoutComponentTags
     * @method static void withoutComponentTags()
     * @see \Illuminate\View\Compilers\BladeCompiler::aliasComponent
     * @method static void aliasComponent(string $path, null|string $alias = null)
     * @see \Illuminate\View\Compilers\BladeCompiler::setPath
     * @method static void setPath(string $path)
     * @see \Illuminate\View\Compilers\BladeCompiler::render
     * @method static string render(string $string, array $data = [], bool $deleteCachedView = false)
     * @see \Illuminate\View\Compilers\BladeCompiler::stripParentheses
     * @method static string stripParentheses(string $expression)
     * @see \Illuminate\View\Compilers\BladeCompiler::getPath
     * @method static string getPath()
     * @see \Illuminate\View\Compilers\BladeCompiler::compileString
     * @method static string compileString(string $value)
     * @see \Illuminate\View\Compilers\BladeCompiler::directive
     * @method static void directive(string $name, callable $handler)
     * @see \Illuminate\View\Compilers\BladeCompiler::anonymousComponentNamespace
     * @method static void anonymousComponentNamespace(string $directory, string $prefix = null)
     * @see \Illuminate\View\Compilers\Concerns\CompilesComponents::newComponentHash
     * @method static string newComponentHash(string $component)
     */
    class Blade {}

    /**
     * @see \Illuminate\Contracts\Broadcasting\Factory::connection
     * @method static \Illuminate\Contracts\Broadcasting\Broadcaster connection(null|string $name = null)
     */
    class Broadcast {}

    /**
     * @see \Illuminate\Contracts\Bus\Dispatcher::getCommandHandler
     * @method static bool|mixed getCommandHandler($command)
     * @see \Illuminate\Contracts\Bus\Dispatcher::dispatchSync
     * @method static mixed dispatchSync($command, $handler = null)
     * @see \Illuminate\Contracts\Bus\Dispatcher::dispatch
     * @method static mixed dispatch($command)
     * @see \Illuminate\Contracts\Bus\Dispatcher::dispatchNow
     * @method static mixed dispatchNow($command, $handler = null)
     * @see \Illuminate\Contracts\Bus\Dispatcher::hasCommandHandler
     * @method static bool hasCommandHandler($command)
     * @see \Illuminate\Contracts\Bus\Dispatcher::pipeThrough
     * @method static \Illuminate\Contracts\Bus\Dispatcher pipeThrough(array $pipes)
     * @see \Illuminate\Contracts\Bus\Dispatcher::map
     * @method static \Illuminate\Contracts\Bus\Dispatcher map(array $map)
     */
    class Bus {}

    /**
     * @see \Psr\SimpleCache\CacheInterface::setMultiple
     * @method static bool setMultiple(iterable $values, \DateInterval|int|null $ttl = null)
     * @see \Illuminate\Cache\CacheManager::setDefaultDriver
     * @method static void setDefaultDriver(string $name)
     * @see \Illuminate\Contracts\Cache\Repository::increment
     * @method static bool|int increment(string $key, $value = 1)
     * @see \Illuminate\Cache\CacheManager::purge
     * @method static void purge(null|string $name = null)
     * @see \Illuminate\Cache\CacheManager::refreshEventDispatcher
     * @method static void refreshEventDispatcher()
     * @see \Illuminate\Cache\CacheManager::repository
     * @method static \Illuminate\Cache\Repository repository(\Illuminate\Contracts\Cache\Store $store)
     * @see \Psr\SimpleCache\CacheInterface::delete
     * @method static bool delete(string $key)
     * @see \Illuminate\Contracts\Cache\Repository::rememberForever
     * @method static mixed rememberForever(string $key, \Closure $callback)
     * @see \Illuminate\Contracts\Cache\Repository::put
     * @method static bool put(string $key, $value, \DateInterval|\DateTimeInterface|int|null $ttl = null)
     * @see \Illuminate\Contracts\Cache\Repository::remember
     * @method static mixed remember(string $key, \DateInterval|\DateTimeInterface|int|null $ttl, \Closure $callback)
     * @see \Psr\SimpleCache\CacheInterface::has
     * @method static bool has(string $key)
     * @see \Psr\SimpleCache\CacheInterface::getMultiple
     * @method static mixed[] getMultiple(iterable $keys, $default = null)
     * @see \Illuminate\Contracts\Cache\Repository::add
     * @method static bool add(string $key, $value, \DateInterval|\DateTimeInterface|int|null $ttl = null)
     * @see \Illuminate\Contracts\Cache\Repository::getStore
     * @method static \Illuminate\Contracts\Cache\Store getStore()
     * @see \Illuminate\Cache\CacheManager::forgetDriver
     * @method static \Illuminate\Cache\CacheManager forgetDriver(array|null|string $name = null)
     * @see \Psr\SimpleCache\CacheInterface::set
     * @method static bool set(string $key, $value, \DateInterval|int|null $ttl = null)
     * @see \Psr\SimpleCache\CacheInterface::clear
     * @method static bool clear()
     * @see \Illuminate\Cache\CacheManager::store
     * @method static \Illuminate\Contracts\Cache\Repository store(null|string $name = null)
     * @see \Illuminate\Cache\CacheManager::extend
     * @method static \Illuminate\Cache\CacheManager extend(string $driver, \Closure $callback)
     * @see \Illuminate\Contracts\Cache\Repository::pull
     * @method static mixed pull(string $key, $default = null)
     * @see \Illuminate\Contracts\Cache\Repository::forget
     * @method static bool forget(string $key)
     * @see \Illuminate\Cache\CacheManager::driver
     * @method static \Illuminate\Contracts\Cache\Repository driver(null|string $driver = null)
     * @see \Illuminate\Contracts\Cache\Repository::sear
     * @method static mixed sear(string $key, \Closure $callback)
     * @see \Illuminate\Contracts\Cache\Repository::decrement
     * @method static bool|int decrement(string $key, $value = 1)
     * @see \Psr\SimpleCache\CacheInterface::deleteMultiple
     * @method static bool deleteMultiple(iterable $keys)
     * @see \Illuminate\Contracts\Cache\Repository::forever
     * @method static bool forever(string $key, $value)
     * @see \Illuminate\Cache\CacheManager::getDefaultDriver
     * @method static string getDefaultDriver()
     * @see \Illuminate\Cache\Repository::supportsTags
     * @method static bool supportsTags()
     * @see \Illuminate\Cache\Repository::putMany
     * @method static bool putMany(array $values, \DateInterval|\DateTimeInterface|int|null $ttl = null)
     * @see \Illuminate\Cache\Repository::getDefaultCacheTime
     * @method static int|null getDefaultCacheTime()
     * @see \Illuminate\Contracts\Cache\Store::getPrefix
     * @method static string getPrefix()
     * @see \Illuminate\Cache\Repository::tags
     * @method static \Illuminate\Cache\TaggedCache tags(array|mixed $names)
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Cache\Repository::setDefaultCacheTime
     * @method static \Illuminate\Cache\Repository setDefaultCacheTime(int|null $seconds)
     * @see \Illuminate\Cache\Repository::offsetUnset
     * @method static void offsetUnset(string $key)
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     * @see \Illuminate\Cache\Repository::offsetGet
     * @method static mixed offsetGet(string $key)
     * @see \Illuminate\Cache\Repository::setEventDispatcher
     * @method static void setEventDispatcher(\Illuminate\Contracts\Events\Dispatcher $events)
     * @see \Illuminate\Cache\Repository::offsetSet
     * @method static void offsetSet(string $key, $value)
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Contracts\Cache\Store::flush
     * @method static bool flush()
     * @see \Illuminate\Cache\Repository::get
     * @method static mixed get(array|string $key, $default = null)
     * @see \Illuminate\Cache\Repository::getEventDispatcher
     * @method static \Illuminate\Contracts\Events\Dispatcher getEventDispatcher()
     * @see \Illuminate\Cache\Repository::missing
     * @method static bool missing(string $key)
     * @see \Illuminate\Cache\Repository::offsetExists
     * @method static bool offsetExists(string $key)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Cache\Repository::many
     * @method static array many(array $keys)
     * @see \Illuminate\Support\Traits\Macroable::macroCall
     * @method static mixed macroCall(string $method, array $parameters)
     */
    class Cache {}

    /**
     * @see \Illuminate\Config\Repository::all
     * @method static array all()
     * @see \Illuminate\Config\Repository::offsetGet
     * @method static mixed offsetGet(string $key)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Config\Repository::set
     * @method static void set(array|string $key, $value = null)
     * @see \Illuminate\Config\Repository::getMany
     * @method static array getMany(array $keys)
     * @see \Illuminate\Config\Repository::prepend
     * @method static void prepend(string $key, $value)
     * @see \Illuminate\Config\Repository::offsetSet
     * @method static void offsetSet(string $key, $value)
     * @see \Illuminate\Config\Repository::push
     * @method static void push(string $key, $value)
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Config\Repository::offsetUnset
     * @method static void offsetUnset(string $key)
     * @see \Illuminate\Config\Repository::get
     * @method static array|mixed get(array|string $key, $default = null)
     * @see \Illuminate\Config\Repository::offsetExists
     * @method static bool offsetExists(string $key)
     * @see \Illuminate\Config\Repository::has
     * @method static bool has(string $key)
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     */
    class Config {}

    /**
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Cookie\CookieJar::unqueue
     * @method static void unqueue(string $name, null|string $path = null)
     * @see \Illuminate\Cookie\CookieJar::queued
     * @method static null|\Symfony\Component\HttpFoundation\Cookie queued(string $key, $default = null, null|string $path = null)
     * @see \Illuminate\Cookie\CookieJar::getQueuedCookies
     * @method static \Symfony\Component\HttpFoundation\Cookie[] getQueuedCookies()
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Cookie\CookieJar::forget
     * @method static \Symfony\Component\HttpFoundation\Cookie forget(string $name, null|string $path = null, null|string $domain = null)
     * @see \Illuminate\Cookie\CookieJar::hasQueued
     * @method static bool hasQueued(string $key, null|string $path = null)
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Cookie\CookieJar::expire
     * @method static void expire(string $name, null|string $path = null, null|string $domain = null)
     * @see \Illuminate\Cookie\CookieJar::setDefaultPathAndDomain
     * @method static \Illuminate\Cookie\CookieJar setDefaultPathAndDomain(string $path, string $domain, bool $secure = false, null|string $sameSite = null)
     * @see \Illuminate\Cookie\CookieJar::forever
     * @method static \Symfony\Component\HttpFoundation\Cookie forever(string $name, string $value, null|string $path = null, null|string $domain = null, bool|null $secure = null, bool $httpOnly = true, bool $raw = false, null|string $sameSite = null)
     * @see \Illuminate\Cookie\CookieJar::make
     * @method static \Symfony\Component\HttpFoundation\Cookie make(string $name, string $value, int $minutes = 0, null|string $path = null, null|string $domain = null, bool|null $secure = null, bool $httpOnly = true, bool $raw = false, null|string $sameSite = null)
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     * @see \Illuminate\Cookie\CookieJar::queue
     * @method static void queue(...$parameters)
     * @see \Illuminate\Cookie\CookieJar::flushQueuedCookies
     * @method static \Illuminate\Cookie\CookieJar flushQueuedCookies()
     */
    class Cookie {}

    /**
     * @see \Illuminate\Encryption\Encrypter::getKey
     * @method static string getKey()
     * @see \Illuminate\Encryption\Encrypter::encryptString
     * @method static string encryptString(string $value)
     * @see \Illuminate\Encryption\Encrypter::generateKey
     * @method static string generateKey(string $cipher)
     * @see \Illuminate\Encryption\Encrypter::decryptString
     * @method static string decryptString(string $payload)
     * @see \Illuminate\Encryption\Encrypter::encrypt
     * @method static string encrypt($value, bool $serialize = true)
     * @see \Illuminate\Encryption\Encrypter::decrypt
     * @method static mixed decrypt(string $payload, bool $unserialize = true)
     * @see \Illuminate\Encryption\Encrypter::supported
     * @method static bool supported(string $key, string $cipher)
     */
    class Crypt {}

    /**
     * @see \Illuminate\Database\Connection::logQuery
     * @method static void logQuery(string $query, array $bindings, float|null $time = null)
     * @see \Illuminate\Database\DatabaseManager::disconnect
     * @method static void disconnect(null|string $name = null)
     * @see \Illuminate\Database\Connection::select
     * @method static array select(string $query, array $bindings = [], bool $useReadPdo = true)
     * @see \Illuminate\Database\Connection::getDatabaseName
     * @method static string getDatabaseName()
     * @see \Illuminate\Database\Connection::prepareBindings
     * @method static array prepareBindings(array $bindings)
     * @see \Illuminate\Database\DatabaseManager::getConnections
     * @method static \Illuminate\Database\Connection[] getConnections()
     * @see \Illuminate\Database\Concerns\ManagesTransactions::commit
     * @method static void commit()
     * @see \Illuminate\Database\Connection::recordsHaveBeenModified
     * @method static void recordsHaveBeenModified(bool $value = true)
     * @see \Illuminate\Database\Connection::getSchemaGrammar
     * @method static \Illuminate\Database\Schema\Grammars\Grammar getSchemaGrammar()
     * @see \Illuminate\Database\Connection::pretend
     * @method static array pretend(\Closure $callback)
     * @see \Illuminate\Database\Connection::useDefaultSchemaGrammar
     * @method static void useDefaultSchemaGrammar()
     * @see \Illuminate\Database\DatabaseManager::connection
     * @method static \Illuminate\Database\Connection connection(null|string $name = null)
     * @see \Illuminate\Database\Connection::allowQueryDurationHandlersToRunAgain
     * @method static void allowQueryDurationHandlersToRunAgain()
     * @see \Illuminate\Database\DatabaseManager::setDefaultConnection
     * @method static void setDefaultConnection(string $name)
     * @see \Illuminate\Database\Connection::raw
     * @method static \Illuminate\Database\Query\Expression raw($value)
     * @see \Illuminate\Database\Connection::getSchemaBuilder
     * @method static \Illuminate\Database\Schema\Builder getSchemaBuilder()
     * @see \Illuminate\Database\DatabaseManager::extend
     * @method static void extend(string $name, callable $resolver)
     * @see \Illuminate\Database\Connection::scalar
     * @method static mixed|null scalar(string $query, array $bindings = [], bool $useReadPdo = true)
     * @see \Illuminate\Database\Connection::setReadWriteType
     * @method static \Illuminate\Database\Connection setReadWriteType(null|string $readWriteType)
     * @see \Illuminate\Database\Connection::logging
     * @method static bool logging()
     * @see \Illuminate\Database\DatabaseManager::getDefaultConnection
     * @method static string getDefaultConnection()
     * @see \Illuminate\Database\Connection::affectingStatement
     * @method static int affectingStatement(string $query, array $bindings = [])
     * @see \Illuminate\Database\Connection::selectOne
     * @method static mixed selectOne(string $query, array $bindings = [], bool $useReadPdo = true)
     * @see \Illuminate\Database\DatabaseManager::reconnect
     * @method static \Illuminate\Database\Connection reconnect(null|string $name = null)
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Database\Connection::getEventDispatcher
     * @method static \Illuminate\Contracts\Events\Dispatcher getEventDispatcher()
     * @see \Illuminate\Database\Connection::setPdo
     * @method static \Illuminate\Database\Connection setPdo(\Closure|null|\PDO $pdo)
     * @see \Illuminate\Database\Connection::bindValues
     * @method static void bindValues(\PDOStatement $statement, array $bindings)
     * @see \Illuminate\Database\DatabaseManager::registerDoctrineType
     * @method static void registerDoctrineType(string $class, string $name, string $type)
     * @see \Illuminate\Database\Connection::table
     * @method static \Illuminate\Database\Query\Builder table(\Closure|\Illuminate\Database\Query\Builder|string $table, null|string $as = null)
     * @see \Illuminate\Database\Connection::getRawPdo
     * @method static \Closure|null|\PDO getRawPdo()
     * @see \Illuminate\Database\Concerns\ManagesTransactions::rollBack
     * @method static void rollBack(int|null $toLevel = null)
     * @see \Illuminate\Database\Concerns\ManagesTransactions::transactionLevel
     * @method static int transactionLevel()
     * @see \Illuminate\Database\Connection::setPostProcessor
     * @method static \Illuminate\Database\Connection setPostProcessor(\Illuminate\Database\Query\Processors\Processor $processor)
     * @see \Illuminate\Database\Connection::forgetRecordModificationState
     * @method static void forgetRecordModificationState()
     * @see \Illuminate\Database\Connection::unprepared
     * @method static bool unprepared(string $query)
     * @see \Illuminate\Database\DatabaseManager::supportedDrivers
     * @method static string[] supportedDrivers()
     * @see \Illuminate\Database\Connection::setReadPdo
     * @method static \Illuminate\Database\Connection setReadPdo(\Closure|null|\PDO $pdo)
     * @see \Illuminate\Database\Connection::getPdo
     * @method static \Closure|\PDO getPdo()
     * @see \Illuminate\Database\Connection::flushQueryLog
     * @method static void flushQueryLog()
     * @see \Illuminate\Database\Connection::getDriverName
     * @method static string getDriverName()
     * @see \Illuminate\Database\Connection::resolverFor
     * @method static void resolverFor(string $driver, \Closure $callback)
     * @see \Illuminate\Database\Connection::getName
     * @method static null|string getName()
     * @see \Illuminate\Database\Connection::getRawReadPdo
     * @method static \Closure|null|\PDO getRawReadPdo()
     * @see \Illuminate\Database\DatabaseManager::availableDrivers
     * @method static string[] availableDrivers()
     * @see \Illuminate\Database\Connection::getReadPdo
     * @method static \Closure|\PDO getReadPdo()
     * @see \Illuminate\Database\Connection::unsetEventDispatcher
     * @method static void unsetEventDispatcher()
     * @see \Illuminate\Database\Connection::getDoctrineConnection
     * @method static \Doctrine\DBAL\Connection getDoctrineConnection()
     * @see \Illuminate\Support\Traits\Macroable::macroCall
     * @method static mixed macroCall(string $method, array $parameters)
     * @see \Illuminate\Database\Concerns\ManagesTransactions::transaction
     * @method static mixed transaction(\Closure $callback, int $attempts = 1)
     * @see \Illuminate\Database\Connection::getPostProcessor
     * @method static \Illuminate\Database\Query\Processors\Processor getPostProcessor()
     * @see \Illuminate\Database\Connection::selectFromWriteConnection
     * @method static array selectFromWriteConnection(string $query, array $bindings = [])
     * @see \Illuminate\Database\Connection::useDefaultPostProcessor
     * @method static void useDefaultPostProcessor()
     * @see \Illuminate\Database\Connection::getDoctrineSchemaManager
     * @method static \Doctrine\DBAL\Schema\AbstractSchemaManager getDoctrineSchemaManager()
     * @see \Illuminate\Database\Connection::listen
     * @method static void listen(\Closure $callback)
     * @see \Illuminate\Database\Connection::getQueryGrammar
     * @method static \Illuminate\Database\Query\Grammars\Grammar getQueryGrammar()
     * @see \Illuminate\Database\DatabaseManager::forgetExtension
     * @method static void forgetExtension(string $name)
     * @see \Illuminate\Database\Connection::resetTotalQueryDuration
     * @method static void resetTotalQueryDuration()
     * @see \Illuminate\Database\Concerns\ManagesTransactions::afterCommit
     * @method static void afterCommit(callable $callback)
     * @see \Illuminate\Database\Connection::whenQueryingForLongerThan
     * @method static void whenQueryingForLongerThan(\Carbon\CarbonInterval|\DateTimeInterface|float|int $threshold, callable $handler)
     * @see \Illuminate\Database\Connection::getDoctrineColumn
     * @method static \Doctrine\DBAL\Schema\Column getDoctrineColumn(string $table, string $column)
     * @see \Illuminate\Database\Connection::getQueryLog
     * @method static array getQueryLog()
     * @see \Illuminate\Database\DatabaseManager::usingConnection
     * @method static mixed usingConnection(string $name, callable $callback)
     * @see \Illuminate\Database\Connection::isDoctrineAvailable
     * @method static bool isDoctrineAvailable()
     * @see \Illuminate\Database\Connection::query
     * @method static \Illuminate\Database\Query\Builder query()
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Database\Connection::disableQueryLog
     * @method static void disableQueryLog()
     * @see \Illuminate\Database\Connection::setQueryGrammar
     * @method static \Illuminate\Database\Connection setQueryGrammar(\Illuminate\Database\Query\Grammars\Grammar $grammar)
     * @see \Illuminate\Database\Connection::getTablePrefix
     * @method static string getTablePrefix()
     * @see \Illuminate\Database\Connection::totalQueryDuration
     * @method static float totalQueryDuration()
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     * @see \Illuminate\Database\Connection::getNameWithReadWriteType
     * @method static null|string getNameWithReadWriteType()
     * @see \Illuminate\Database\Connection::cursor
     * @method static \Generator cursor(string $query, array $bindings = [], bool $useReadPdo = true)
     * @see \Illuminate\Database\Connection::useDefaultQueryGrammar
     * @method static void useDefaultQueryGrammar()
     * @see \Illuminate\Database\Concerns\ManagesTransactions::beginTransaction
     * @method static void beginTransaction()
     * @see \Illuminate\Database\Connection::pretending
     * @method static bool pretending()
     * @see \Illuminate\Database\DatabaseManager::setReconnector
     * @method static void setReconnector(callable $reconnector)
     * @see \Illuminate\Database\Connection::insert
     * @method static bool insert(string $query, array $bindings = [])
     * @see \Illuminate\Database\Connection::update
     * @method static int update(string $query, array $bindings = [])
     * @see \Illuminate\Database\Connection::setDatabaseName
     * @method static \Illuminate\Database\Connection setDatabaseName(string $database)
     * @see \Illuminate\Database\DatabaseManager::purge
     * @method static void purge(null|string $name = null)
     * @see \Illuminate\Database\Connection::withTablePrefix
     * @method static \Illuminate\Database\Grammar withTablePrefix(\Illuminate\Database\Grammar $grammar)
     * @see \Illuminate\Database\Connection::setEventDispatcher
     * @method static \Illuminate\Database\Connection setEventDispatcher(\Illuminate\Contracts\Events\Dispatcher $events)
     * @see \Illuminate\Database\Connection::delete
     * @method static int delete(string $query, array $bindings = [])
     * @see \Illuminate\Database\Connection::setRecordModificationState
     * @method static \Illuminate\Database\Connection setRecordModificationState(bool $value)
     * @see \Illuminate\Database\Connection::beforeExecuting
     * @method static \Illuminate\Database\Connection beforeExecuting(\Closure $callback)
     * @see \Illuminate\Database\DatabaseManager::setApplication
     * @method static \Illuminate\Database\DatabaseManager setApplication(\Illuminate\Contracts\Foundation\Application $app)
     * @see \Illuminate\Database\Connection::statement
     * @method static bool statement(string $query, array $bindings = [])
     * @see \Illuminate\Database\Connection::unsetTransactionManager
     * @method static void unsetTransactionManager()
     * @see \Illuminate\Database\Connection::setTablePrefix
     * @method static \Illuminate\Database\Connection setTablePrefix(string $prefix)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Database\Connection::enableQueryLog
     * @method static void enableQueryLog()
     * @see \Illuminate\Database\Connection::getConfig
     * @method static mixed getConfig(null|string $option = null)
     * @see \Illuminate\Database\Connection::setTransactionManager
     * @method static \Illuminate\Database\Connection setTransactionManager(\Illuminate\Database\DatabaseTransactionsManager $manager)
     * @see \Illuminate\Database\Connection::setSchemaGrammar
     * @method static \Illuminate\Database\Connection setSchemaGrammar(\Illuminate\Database\Schema\Grammars\Grammar $grammar)
     * @see \Illuminate\Database\Connection::useWriteConnectionWhenReading
     * @method static \Illuminate\Database\Connection useWriteConnectionWhenReading(bool $value = true)
     * @see \Illuminate\Database\Connection::getResolver
     * @method static \Closure|mixed|null getResolver(string $driver)
     * @see \Illuminate\Database\Connection::hasModifiedRecords
     * @method static bool hasModifiedRecords()
     */
    class DB {}

    /**
     * @see \Illuminate\Events\Dispatcher::dispatch
     * @method static array|null dispatch(object|string $event, $payload = [], bool $halt = false)
     * @see \Illuminate\Events\Dispatcher::getRawListeners
     * @method static array getRawListeners()
     * @see \Illuminate\Events\Dispatcher::hasListeners
     * @method static bool hasListeners(string $eventName)
     * @see \Illuminate\Events\Dispatcher::listen
     * @method static void listen(array|\Closure|string $events, array|\Closure|null|string $listener = null)
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Events\Dispatcher::flush
     * @method static void flush(string $event)
     * @see \Illuminate\Events\Dispatcher::makeListener
     * @method static \Closure makeListener(array|\Closure|string $listener, bool $wildcard = false)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Events\Dispatcher::setQueueResolver
     * @method static \Illuminate\Events\Dispatcher setQueueResolver(callable $resolver)
     * @see \Illuminate\Events\Dispatcher::subscribe
     * @method static void subscribe(object|string $subscriber)
     * @see \Illuminate\Events\Dispatcher::push
     * @method static void push(string $event, array|object $payload = [])
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Events\Dispatcher::forget
     * @method static void forget(string $event)
     * @see \Illuminate\Events\Dispatcher::hasWildcardListeners
     * @method static bool hasWildcardListeners(string $eventName)
     * @see \Illuminate\Events\Dispatcher::until
     * @method static array|null until(object|string $event, $payload = [])
     * @see \Illuminate\Events\Dispatcher::forgetPushed
     * @method static void forgetPushed()
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     * @see \Illuminate\Events\Dispatcher::createClassListener
     * @method static \Closure createClassListener(string $listener, bool $wildcard = false)
     * @see \Illuminate\Events\Dispatcher::getListeners
     * @method static array getListeners(string $eventName)
     */
    class Event {}

    /**
     * @see \Illuminate\Filesystem\Filesystem::ensureDirectoryExists
     * @method static void ensureDirectoryExists(string $path, int $mode = 0755, bool $recursive = true)
     * @see \Illuminate\Filesystem\Filesystem::isWritable
     * @method static bool isWritable(string $path)
     * @see \Illuminate\Filesystem\Filesystem::prepend
     * @method static bool|int prepend(string $path, string $data)
     * @see \Illuminate\Filesystem\Filesystem::replace
     * @method static void replace(string $path, string $content)
     * @see \Illuminate\Filesystem\Filesystem::type
     * @method static string type(string $path)
     * @see \Illuminate\Filesystem\Filesystem::dirname
     * @method static string dirname(string $path)
     * @see \Illuminate\Support\Traits\Conditionable::when
     * @method static \Illuminate\Support\HigherOrderWhenProxy|\Illuminate\Support\Traits\Conditionable when(\Closure|null $value = null, callable $callback = null, callable $default = null)
     * @see \Illuminate\Filesystem\Filesystem::put
     * @method static bool|int put(string $path, string $contents, bool $lock = false)
     * @see \Illuminate\Filesystem\Filesystem::copyDirectory
     * @method static bool copyDirectory(string $directory, string $destination, int|null $options = null)
     * @see \Illuminate\Filesystem\Filesystem::hasSameHash
     * @method static bool hasSameHash(string $firstFile, string $secondFile)
     * @see \Illuminate\Filesystem\Filesystem::relativeLink
     * @method static void relativeLink(string $target, string $link)
     * @see \Illuminate\Filesystem\Filesystem::isFile
     * @method static bool isFile(string $file)
     * @see \Illuminate\Filesystem\Filesystem::guessExtension
     * @method static null|string guessExtension(string $path)
     * @see \Illuminate\Filesystem\Filesystem::getRequire
     * @method static mixed getRequire(string $path, array $data = [])
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Filesystem\Filesystem::basename
     * @method static string basename(string $path)
     * @see \Illuminate\Filesystem\Filesystem::isEmptyDirectory
     * @method static bool isEmptyDirectory(string $directory, bool $ignoreDotFiles = false)
     * @see \Illuminate\Filesystem\Filesystem::size
     * @method static int size(string $path)
     * @see \Illuminate\Filesystem\Filesystem::lastModified
     * @method static int lastModified(string $path)
     * @see \Illuminate\Filesystem\Filesystem::isReadable
     * @method static bool isReadable(string $path)
     * @see \Illuminate\Filesystem\Filesystem::name
     * @method static string name(string $path)
     * @see \Illuminate\Filesystem\Filesystem::files
     * @method static \Symfony\Component\Finder\SplFileInfo[] files(string $directory, bool $hidden = false)
     * @see \Illuminate\Filesystem\Filesystem::cleanDirectory
     * @method static bool cleanDirectory(string $directory)
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     * @see \Illuminate\Filesystem\Filesystem::hash
     * @method static string hash(string $path, string $algorithm = 'md5')
     * @see \Illuminate\Filesystem\Filesystem::deleteDirectories
     * @method static bool deleteDirectories(string $directory)
     * @see \Illuminate\Filesystem\Filesystem::extension
     * @method static string extension(string $path)
     * @see \Illuminate\Filesystem\Filesystem::link
     * @method static void link(string $target, string $link)
     * @see \Illuminate\Filesystem\Filesystem::glob
     * @method static array glob(string $pattern, int $flags = 0)
     * @see \Illuminate\Filesystem\Filesystem::delete
     * @method static bool delete(array|string $paths)
     * @see \Illuminate\Filesystem\Filesystem::requireOnce
     * @method static mixed requireOnce(string $path, array $data = [])
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Support\Traits\Conditionable::unless
     * @method static \Illuminate\Support\Traits\Conditionable unless(\Closure|null $value = null, callable $callback = null, callable $default = null)
     * @see \Illuminate\Filesystem\Filesystem::get
     * @method static string get(string $path, bool $lock = false)
     * @see \Illuminate\Filesystem\Filesystem::missing
     * @method static bool missing(string $path)
     * @see \Illuminate\Filesystem\Filesystem::directories
     * @method static array directories(string $directory)
     * @see \Illuminate\Filesystem\Filesystem::chmod
     * @method static mixed chmod(string $path, int|null $mode = null)
     * @see \Illuminate\Filesystem\Filesystem::copy
     * @method static bool copy(string $path, string $target)
     * @see \Illuminate\Filesystem\Filesystem::lines
     * @method static \Illuminate\Support\LazyCollection lines(string $path)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Filesystem\Filesystem::move
     * @method static bool move(string $path, string $target)
     * @see \Illuminate\Filesystem\Filesystem::isDirectory
     * @method static bool isDirectory(string $directory)
     * @see \Illuminate\Filesystem\Filesystem::moveDirectory
     * @method static bool moveDirectory(string $from, string $to, bool $overwrite = false)
     * @see \Illuminate\Filesystem\Filesystem::sharedGet
     * @method static string sharedGet(string $path)
     * @see \Illuminate\Filesystem\Filesystem::replaceInFile
     * @method static void replaceInFile(array|string $search, array|string $replace, string $path)
     * @see \Illuminate\Filesystem\Filesystem::deleteDirectory
     * @method static bool deleteDirectory(string $directory, bool $preserve = false)
     * @see \Illuminate\Filesystem\Filesystem::makeDirectory
     * @method static bool makeDirectory(string $path, int $mode = 0755, bool $recursive = false, bool $force = false)
     * @see \Illuminate\Filesystem\Filesystem::exists
     * @method static bool exists(string $path)
     * @see \Illuminate\Filesystem\Filesystem::mimeType
     * @method static false|string mimeType(string $path)
     * @see \Illuminate\Filesystem\Filesystem::allFiles
     * @method static \Symfony\Component\Finder\SplFileInfo[] allFiles(string $directory, bool $hidden = false)
     * @see \Illuminate\Filesystem\Filesystem::append
     * @method static int append(string $path, string $data)
     */
    class File {}

    /**
     * @see \Illuminate\Contracts\Auth\Access\Gate::allows
     * @method static bool allows(string $ability, array|mixed $arguments = [])
     * @see \Illuminate\Contracts\Auth\Access\Gate::resource
     * @method static \Illuminate\Contracts\Auth\Access\Gate resource(string $name, string $class, array $abilities = null)
     * @see \Illuminate\Contracts\Auth\Access\Gate::before
     * @method static \Illuminate\Contracts\Auth\Access\Gate before(callable $callback)
     * @see \Illuminate\Contracts\Auth\Access\Gate::getPolicyFor
     * @method static mixed getPolicyFor(object|string $class)
     * @see \Illuminate\Contracts\Auth\Access\Gate::raw
     * @method static mixed raw(string $ability, array|mixed $arguments = [])
     * @see \Illuminate\Contracts\Auth\Access\Gate::check
     * @method static bool check(iterable|string $abilities, array|mixed $arguments = [])
     * @see \Illuminate\Contracts\Auth\Access\Gate::denies
     * @method static bool denies(string $ability, array|mixed $arguments = [])
     * @see \Illuminate\Contracts\Auth\Access\Gate::any
     * @method static bool any(iterable|string $abilities, array|mixed $arguments = [])
     * @see \Illuminate\Contracts\Auth\Access\Gate::abilities
     * @method static array abilities()
     * @see \Illuminate\Contracts\Auth\Access\Gate::forUser
     * @method static \Illuminate\Contracts\Auth\Access\Gate forUser(\Illuminate\Contracts\Auth\Authenticatable|mixed $user)
     * @see \Illuminate\Contracts\Auth\Access\Gate::define
     * @method static \Illuminate\Contracts\Auth\Access\Gate define(string $ability, callable|string $callback)
     * @see \Illuminate\Contracts\Auth\Access\Gate::inspect
     * @method static \Illuminate\Auth\Access\Response inspect(string $ability, array|mixed $arguments = [])
     * @see \Illuminate\Contracts\Auth\Access\Gate::has
     * @method static bool has(string $ability)
     * @see \Illuminate\Contracts\Auth\Access\Gate::after
     * @method static \Illuminate\Contracts\Auth\Access\Gate after(callable $callback)
     * @see \Illuminate\Contracts\Auth\Access\Gate::authorize
     * @method static \Illuminate\Auth\Access\Response authorize(string $ability, array|mixed $arguments = [])
     * @see \Illuminate\Contracts\Auth\Access\Gate::policy
     * @method static \Illuminate\Contracts\Auth\Access\Gate policy(string $class, string $policy)
     */
    class Gate {}

    /**
     * @see \Illuminate\Support\Manager::forgetDrivers
     * @method static \Illuminate\Support\Manager forgetDrivers()
     * @see \Illuminate\Hashing\HashManager::createArgonDriver
     * @method static \Illuminate\Hashing\ArgonHasher createArgonDriver()
     * @see \Illuminate\Hashing\HashManager::check
     * @method static bool check(string $value, string $hashedValue, array $options = [])
     * @see \Illuminate\Support\Manager::setContainer
     * @method static \Illuminate\Support\Manager setContainer(\Illuminate\Contracts\Container\Container $container)
     * @see \Illuminate\Support\Manager::extend
     * @method static \Illuminate\Support\Manager extend(string $driver, \Closure $callback)
     * @see \Illuminate\Hashing\HashManager::createBcryptDriver
     * @method static \Illuminate\Hashing\BcryptHasher createBcryptDriver()
     * @see \Illuminate\Support\Manager::driver
     * @method static mixed driver(null|string $driver = null)
     * @see \Illuminate\Hashing\HashManager::needsRehash
     * @method static bool needsRehash(string $hashedValue, array $options = [])
     * @see \Illuminate\Support\Manager::getContainer
     * @method static \Illuminate\Contracts\Container\Container getContainer()
     * @see \Illuminate\Hashing\HashManager::make
     * @method static string make(string $value, array $options = [])
     * @see \Illuminate\Hashing\HashManager::createArgon2idDriver
     * @method static \Illuminate\Hashing\Argon2IdHasher createArgon2idDriver()
     * @see \Illuminate\Hashing\HashManager::getDefaultDriver
     * @method static string getDefaultDriver()
     * @see \Illuminate\Support\Manager::getDrivers
     * @method static array getDrivers()
     * @see \Illuminate\Hashing\HashManager::info
     * @method static array info(string $hashedValue)
     */
    class Hash {}

    /**
     * @see \Illuminate\Http\Client\Factory::dd
     * @method static \Illuminate\Http\Client\PendingRequest dd()
     * @see \Illuminate\Http\Client\Factory::assertSentCount
     * @method static void assertSentCount(int $count)
     * @see \Illuminate\Http\Client\Factory::fakeSequence
     * @method static \Illuminate\Http\Client\ResponseSequence fakeSequence(string $url = '*')
     * @see \Illuminate\Http\Client\Factory::withDigestAuth
     * @method static \Illuminate\Http\Client\PendingRequest withDigestAuth(string $username, string $password)
     * @see \Illuminate\Http\Client\Factory::withoutRedirecting
     * @method static \Illuminate\Http\Client\PendingRequest withoutRedirecting()
     * @see \Illuminate\Http\Client\Factory::put
     * @method static \Illuminate\Http\Client\Response put(string $url, array $data = [])
     * @see \Illuminate\Http\Client\Factory::patch
     * @method static \Illuminate\Http\Client\Response patch(string $url, array $data = [])
     * @see \Illuminate\Http\Client\Factory::post
     * @method static \Illuminate\Http\Client\Response post(string $url, array $data = [])
     * @see \Illuminate\Http\Client\Factory::asJson
     * @method static \Illuminate\Http\Client\PendingRequest asJson()
     * @see \Illuminate\Http\Client\Factory::acceptJson
     * @method static \Illuminate\Http\Client\PendingRequest acceptJson()
     * @see \Illuminate\Http\Client\Factory::stub
     * @method static \Illuminate\Http\Client\PendingRequest stub(callable $callback)
     * @see \Illuminate\Http\Client\Factory::throwUnless
     * @method static \Illuminate\Http\Client\PendingRequest throwUnless($condition)
     * @see \Illuminate\Http\Client\Factory::withUserAgent
     * @method static \Illuminate\Http\Client\PendingRequest withUserAgent(string $userAgent)
     * @see \Illuminate\Http\Client\Factory::withBody
     * @method static \Illuminate\Http\Client\PendingRequest withBody(resource|string $content, string $contentType)
     * @see \Illuminate\Http\Client\Factory::recordRequestResponsePair
     * @method static void recordRequestResponsePair(\Illuminate\Http\Client\Request $request, \Illuminate\Http\Client\Response $response)
     * @see \Illuminate\Http\Client\Factory::withCookies
     * @method static \Illuminate\Http\Client\PendingRequest withCookies(array $cookies, string $domain)
     * @see \Illuminate\Http\Client\Factory::sink
     * @method static \Illuminate\Http\Client\PendingRequest sink(resource|string $to)
     * @see \Illuminate\Http\Client\Factory::pool
     * @method static array pool(callable $callback)
     * @see \Illuminate\Http\Client\Factory::maxRedirects
     * @method static \Illuminate\Http\Client\PendingRequest maxRedirects(int $max)
     * @see \Illuminate\Http\Client\Factory::withBasicAuth
     * @method static \Illuminate\Http\Client\PendingRequest withBasicAuth(string $username, string $password)
     * @see \Illuminate\Http\Client\Factory::accept
     * @method static \Illuminate\Http\Client\PendingRequest accept(string $contentType)
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Http\Client\Factory::sequence
     * @method static \Illuminate\Http\Client\ResponseSequence sequence(array $responses = [])
     * @see \Illuminate\Http\Client\Factory::assertNothingSent
     * @method static void assertNothingSent()
     * @see \Illuminate\Http\Client\Factory::send
     * @method static \Illuminate\Http\Client\Response send(string $method, string $url, array $options = [])
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     * @see \Illuminate\Http\Client\Factory::withoutVerifying
     * @method static \Illuminate\Http\Client\PendingRequest withoutVerifying()
     * @see \Illuminate\Http\Client\Factory::throwIf
     * @method static \Illuminate\Http\Client\PendingRequest throwIf($condition)
     * @see \Illuminate\Http\Client\Factory::assertSentInOrder
     * @method static void assertSentInOrder(array $callbacks)
     * @see \Illuminate\Http\Client\Factory::delete
     * @method static \Illuminate\Http\Client\Response delete(string $url, array $data = [])
     * @see \Illuminate\Http\Client\Factory::timeout
     * @method static \Illuminate\Http\Client\PendingRequest timeout(int $seconds)
     * @see \Illuminate\Http\Client\Factory::head
     * @method static \Illuminate\Http\Client\Response head(string $url, array|null|string $query = null)
     * @see \Illuminate\Http\Client\Factory::withHeaders
     * @method static \Illuminate\Http\Client\PendingRequest withHeaders(array $headers)
     * @see \Illuminate\Http\Client\Factory::withMiddleware
     * @method static \Illuminate\Http\Client\PendingRequest withMiddleware(callable $middleware)
     * @see \Illuminate\Http\Client\Factory::baseUrl
     * @method static \Illuminate\Http\Client\PendingRequest baseUrl(string $url)
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Http\Client\Factory::getDispatcher
     * @method static \Illuminate\Contracts\Events\Dispatcher|null getDispatcher()
     * @see \Illuminate\Http\Client\Factory::get
     * @method static \Illuminate\Http\Client\Response get(string $url, array|null|string $query = null)
     * @see \Illuminate\Http\Client\Factory::assertSequencesAreEmpty
     * @method static void assertSequencesAreEmpty()
     * @see \Illuminate\Http\Client\Factory::dump
     * @method static \Illuminate\Http\Client\PendingRequest dump()
     * @see \Illuminate\Http\Client\Factory::attach
     * @method static \Illuminate\Http\Client\PendingRequest attach(array|string $name, resource|string $contents = '', null|string $filename = null, array $headers = [])
     * @see \Illuminate\Http\Client\Factory::preventStrayRequests
     * @method static \Illuminate\Http\Client\Factory preventStrayRequests(bool $prevent = true)
     * @see \Illuminate\Http\Client\Factory::retry
     * @method static \Illuminate\Http\Client\PendingRequest retry(int $times, int $sleepMilliseconds = 0, callable|null $when = null, bool $throw = true)
     * @see \Illuminate\Http\Client\Factory::connectTimeout
     * @method static \Illuminate\Http\Client\PendingRequest connectTimeout(int $seconds)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Http\Client\Factory::allowStrayRequests
     * @method static \Illuminate\Http\Client\Factory allowStrayRequests()
     * @see \Illuminate\Http\Client\Factory::bodyFormat
     * @method static \Illuminate\Http\Client\PendingRequest bodyFormat(string $format)
     * @see \Illuminate\Http\Client\Factory::withOptions
     * @method static \Illuminate\Http\Client\PendingRequest withOptions(array $options)
     * @see \Illuminate\Http\Client\Factory::recorded
     * @method static \Illuminate\Support\Collection recorded(callable $callback = null)
     * @see \Illuminate\Http\Client\Factory::contentType
     * @method static \Illuminate\Http\Client\PendingRequest contentType(string $contentType)
     * @see \Illuminate\Http\Client\Factory::async
     * @method static \Illuminate\Http\Client\PendingRequest async()
     * @see \Illuminate\Http\Client\Factory::assertSent
     * @method static void assertSent(callable $callback)
     * @see \Illuminate\Http\Client\Factory::beforeSending
     * @method static \Illuminate\Http\Client\PendingRequest beforeSending(callable $callback)
     * @see \Illuminate\Http\Client\Factory::throw
     * @method static \Illuminate\Http\Client\PendingRequest throw(callable $callback = null)
     * @see \Illuminate\Http\Client\Factory::response
     * @method static \GuzzleHttp\Promise\PromiseInterface response(array|null|string $body = null, int $status = 200, array $headers = [])
     * @see \Illuminate\Http\Client\Factory::fake
     * @method static \Illuminate\Http\Client\Factory fake(array|callable|null $callback = null)
     * @see \Illuminate\Http\Client\Factory::asMultipart
     * @method static \Illuminate\Http\Client\PendingRequest asMultipart()
     * @see \Illuminate\Support\Traits\Macroable::macroCall
     * @method static mixed macroCall(string $method, array $parameters)
     * @see \Illuminate\Http\Client\Factory::asForm
     * @method static \Illuminate\Http\Client\PendingRequest asForm()
     * @see \Illuminate\Http\Client\Factory::stubUrl
     * @method static \Illuminate\Http\Client\Factory stubUrl(string $url, callable|\GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response $callback)
     * @see \Illuminate\Http\Client\Factory::assertNotSent
     * @method static void assertNotSent(callable $callback)
     * @see \Illuminate\Http\Client\Factory::withToken
     * @method static \Illuminate\Http\Client\PendingRequest withToken(string $token, string $type = 'Bearer')
     */
    class Http {}

    /**
     * @see \Illuminate\Translation\Translator::parseKey
     * @method static array parseKey(string $key)
     * @see \Illuminate\Translation\Translator::setLocale
     * @method static void setLocale(string $locale)
     * @see \Illuminate\Translation\Translator::addJsonPath
     * @method static void addJsonPath(string $path)
     * @see \Illuminate\Translation\Translator::locale
     * @method static string locale()
     * @see \Illuminate\Translation\Translator::setFallback
     * @method static void setFallback(string $fallback)
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Translation\Translator::load
     * @method static void load(string $namespace, string $group, string $locale)
     * @see \Illuminate\Translation\Translator::get
     * @method static array|null|string get(string $key, array $replace = [], null|string $locale = null, bool $fallback = true)
     * @see \Illuminate\Translation\Translator::hasForLocale
     * @method static bool hasForLocale(string $key, null|string $locale = null)
     * @see \Illuminate\Translation\Translator::setLoaded
     * @method static void setLoaded(array $loaded)
     * @see \Illuminate\Translation\Translator::has
     * @method static bool has(string $key, null|string $locale = null, bool $fallback = true)
     * @see \Illuminate\Translation\Translator::determineLocalesUsing
     * @method static void determineLocalesUsing(callable $callback)
     * @see \Illuminate\Support\NamespacedItemResolver::setParsedKey
     * @method static void setParsedKey(string $key, array $parsed)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Translation\Translator::addNamespace
     * @method static void addNamespace(string $namespace, string $hint)
     * @see \Illuminate\Translation\Translator::getFallback
     * @method static string getFallback()
     * @see \Illuminate\Support\NamespacedItemResolver::flushParsedKeys
     * @method static void flushParsedKeys()
     * @see \Illuminate\Translation\Translator::getLoader
     * @method static \Illuminate\Contracts\Translation\Loader getLoader()
     * @see \Illuminate\Translation\Translator::getSelector
     * @method static \Illuminate\Translation\MessageSelector getSelector()
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Translation\Translator::addLines
     * @method static void addLines(array $lines, string $locale, string $namespace = '*')
     * @see \Illuminate\Translation\Translator::getLocale
     * @method static string getLocale()
     * @see \Illuminate\Translation\Translator::choice
     * @method static string choice(string $key, array|\Countable|int $number, array $replace = [], null|string $locale = null)
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     * @see \Illuminate\Translation\Translator::setSelector
     * @method static void setSelector(\Illuminate\Translation\MessageSelector $selector)
     */
    class Lang {}

    /**
     * @see \Illuminate\Log\Logger::debug
     * @method static void debug(array|\Illuminate\Contracts\Support\Arrayable|\Illuminate\Contracts\Support\Jsonable|\Illuminate\Support\Stringable|string $message, array $context = [])
     * @see \Illuminate\Log\Logger::critical
     * @method static void critical(array|\Illuminate\Contracts\Support\Arrayable|\Illuminate\Contracts\Support\Jsonable|\Illuminate\Support\Stringable|string $message, array $context = [])
     * @see \Illuminate\Log\Logger::log
     * @method static void log(string $level, array|\Illuminate\Contracts\Support\Arrayable|\Illuminate\Contracts\Support\Jsonable|\Illuminate\Support\Stringable|string $message, array $context = [])
     * @see \Illuminate\Log\Logger::emergency
     * @method static void emergency(array|\Illuminate\Contracts\Support\Arrayable|\Illuminate\Contracts\Support\Jsonable|\Illuminate\Support\Stringable|string $message, array $context = [])
     * @see \Illuminate\Log\Logger::withContext
     * @method static \Illuminate\Log\Logger withContext(array $context = [])
     * @see \Illuminate\Log\Logger::getLogger
     * @method static \Psr\Log\LoggerInterface getLogger()
     * @see \Illuminate\Log\Logger::error
     * @method static void error(array|\Illuminate\Contracts\Support\Arrayable|\Illuminate\Contracts\Support\Jsonable|\Illuminate\Support\Stringable|string $message, array $context = [])
     * @see \Illuminate\Log\Logger::setEventDispatcher
     * @method static void setEventDispatcher(\Illuminate\Contracts\Events\Dispatcher $dispatcher)
     * @see \Illuminate\Log\Logger::listen
     * @method static void listen(\Closure $callback)
     * @see \Illuminate\Log\Logger::alert
     * @method static void alert(array|\Illuminate\Contracts\Support\Arrayable|\Illuminate\Contracts\Support\Jsonable|\Illuminate\Support\Stringable|string $message, array $context = [])
     * @see \Illuminate\Log\Logger::getEventDispatcher
     * @method static \Illuminate\Contracts\Events\Dispatcher|null getEventDispatcher()
     * @see \Illuminate\Log\Logger::warning
     * @method static void warning(array|\Illuminate\Contracts\Support\Arrayable|\Illuminate\Contracts\Support\Jsonable|\Illuminate\Support\Stringable|string $message, array $context = [])
     * @see \Illuminate\Log\Logger::withoutContext
     * @method static \Illuminate\Log\Logger withoutContext()
     * @see \Illuminate\Log\Logger::write
     * @method static void write(string $level, array|\Illuminate\Contracts\Support\Arrayable|\Illuminate\Contracts\Support\Jsonable|\Illuminate\Support\Stringable|string $message, array $context = [])
     * @see \Illuminate\Log\Logger::info
     * @method static void info(array|\Illuminate\Contracts\Support\Arrayable|\Illuminate\Contracts\Support\Jsonable|\Illuminate\Support\Stringable|string $message, array $context = [])
     * @see \Illuminate\Log\Logger::notice
     * @method static void notice(array|\Illuminate\Contracts\Support\Arrayable|\Illuminate\Contracts\Support\Jsonable|\Illuminate\Support\Stringable|string $message, array $context = [])
     */
    class Log {}

    /**
     * @see \Illuminate\Mail\Mailer::alwaysReplyTo
     * @method static void alwaysReplyTo(string $address, null|string $name = null)
     * @see \Illuminate\Mail\Mailer::bcc
     * @method static \Illuminate\Mail\PendingMail bcc($users)
     * @see \Illuminate\Mail\Mailer::laterOn
     * @method static mixed laterOn(string $queue, \DateInterval|\DateTimeInterface|int $delay, \Illuminate\Contracts\Mail\Mailable $view)
     * @see \Illuminate\Mail\Mailer::later
     * @method static mixed later(\DateInterval|\DateTimeInterface|int $delay, \Illuminate\Contracts\Mail\Mailable $view, null|string $queue = null)
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Mail\Mailer::plain
     * @method static \Illuminate\Mail\SentMessage|null plain(string $view, array $data, $callback)
     * @see \Illuminate\Mail\Mailer::alwaysTo
     * @method static void alwaysTo(string $address, null|string $name = null)
     * @see \Illuminate\Mail\Mailer::html
     * @method static \Illuminate\Mail\SentMessage|null html(string $html, $callback)
     * @see \Illuminate\Mail\Mailer::render
     * @method static string render(array|string $view, array $data = [])
     * @see \Illuminate\Mail\Mailer::cc
     * @method static \Illuminate\Mail\PendingMail cc($users)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Mail\Mailer::getViewFactory
     * @method static \Illuminate\Contracts\View\Factory getViewFactory()
     * @see \Illuminate\Mail\Mailer::alwaysFrom
     * @method static void alwaysFrom(string $address, null|string $name = null)
     * @see \Illuminate\Mail\Mailer::setSymfonyTransport
     * @method static void setSymfonyTransport(\Symfony\Component\Mailer\Transport\TransportInterface $transport)
     * @see \Illuminate\Mail\Mailer::onQueue
     * @method static mixed onQueue(string $queue, \Illuminate\Contracts\Mail\Mailable $view)
     * @see \Illuminate\Mail\Mailer::raw
     * @method static \Illuminate\Mail\SentMessage|null raw(string $text, $callback)
     * @see \Illuminate\Mail\Mailer::alwaysReturnPath
     * @method static void alwaysReturnPath(string $address)
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Mail\Mailer::setQueue
     * @method static \Illuminate\Mail\Mailer setQueue(\Illuminate\Contracts\Queue\Factory $queue)
     * @see \Illuminate\Mail\Mailer::to
     * @method static \Illuminate\Mail\PendingMail to($users)
     * @see \Illuminate\Mail\Mailer::getSymfonyTransport
     * @method static \Symfony\Component\Mailer\Transport\TransportInterface getSymfonyTransport()
     * @see \Illuminate\Mail\Mailer::send
     * @method static \Illuminate\Mail\SentMessage|null send(array|\Illuminate\Contracts\Mail\Mailable|string $view, array $data = [], \Closure|null|string $callback = null)
     * @see \Illuminate\Mail\Mailer::queueOn
     * @method static mixed queueOn(string $queue, \Illuminate\Contracts\Mail\Mailable $view)
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     * @see \Illuminate\Mail\Mailer::queue
     * @method static mixed queue(array|\Illuminate\Contracts\Mail\Mailable|string $view, null|string $queue = null)
     * @see \Illuminate\Support\Testing\Fakes\MailFake::queued
     * @method static \Illuminate\Support\Collection queued(\Closure|string $mailable, callable|null $callback = null)
     * @see \Illuminate\Support\Testing\Fakes\MailFake::assertNothingQueued
     * @method static void assertNothingQueued()
     * @see \Illuminate\Support\Testing\Fakes\MailFake::assertNotOutgoing
     * @method static void assertNotOutgoing(\Closure|string $mailable, callable|null $callback = null)
     * @see \Illuminate\Support\Testing\Fakes\MailFake::failures
     * @method static array failures()
     * @see \Illuminate\Support\Testing\Fakes\MailFake::assertNotQueued
     * @method static void assertNotQueued(\Closure|string $mailable, callable|null $callback = null)
     * @see \Illuminate\Support\Testing\Fakes\MailFake::hasSent
     * @method static bool hasSent(string $mailable)
     * @see \Illuminate\Support\Testing\Fakes\MailFake::mailer
     * @method static \Illuminate\Contracts\Mail\Mailer mailer(null|string $name = null)
     * @see \Illuminate\Support\Testing\Fakes\MailFake::forgetMailers
     * @method static \Illuminate\Support\Testing\Fakes\MailFake forgetMailers()
     * @see \Illuminate\Support\Testing\Fakes\MailFake::sent
     * @method static \Illuminate\Support\Collection sent(\Closure|string $mailable, callable|null $callback = null)
     * @see \Illuminate\Support\Testing\Fakes\MailFake::assertQueued
     * @method static null|void assertQueued(\Closure|string $mailable, callable|int|null $callback = null)
     * @see \Illuminate\Support\Testing\Fakes\MailFake::assertSent
     * @method static null|void assertSent(\Closure|string $mailable, callable|int|null $callback = null)
     * @see \Illuminate\Support\Testing\Fakes\MailFake::hasQueued
     * @method static bool hasQueued(string $mailable)
     * @see \Illuminate\Support\Testing\Fakes\MailFake::assertNothingSent
     * @method static void assertNothingSent()
     * @see \Illuminate\Support\Testing\Fakes\MailFake::assertNothingOutgoing
     * @method static void assertNothingOutgoing()
     * @see \Illuminate\Support\Testing\Fakes\MailFake::assertNotSent
     * @method static void assertNotSent(\Closure|string $mailable, callable|null $callback = null)
     */
    class Mail {}

    /**
     * @see \Illuminate\Support\Manager::forgetDrivers
     * @method static \Illuminate\Support\Manager forgetDrivers()
     * @see \Illuminate\Notifications\ChannelManager::channel
     * @method static mixed channel(null|string $name = null)
     * @see \Illuminate\Notifications\ChannelManager::locale
     * @method static \Illuminate\Notifications\ChannelManager locale(string $locale)
     * @see \Illuminate\Notifications\ChannelManager::sendNow
     * @method static void sendNow(array|\Illuminate\Support\Collection|mixed $notifiables, $notification, array $channels = null)
     * @see \Illuminate\Support\Manager::setContainer
     * @method static \Illuminate\Support\Manager setContainer(\Illuminate\Contracts\Container\Container $container)
     * @see \Illuminate\Support\Manager::extend
     * @method static \Illuminate\Support\Manager extend(string $driver, \Closure $callback)
     * @see \Illuminate\Notifications\ChannelManager::deliverVia
     * @method static void deliverVia(string $channel)
     * @see \Illuminate\Support\Manager::driver
     * @method static mixed driver(null|string $driver = null)
     * @see \Illuminate\Support\Manager::getContainer
     * @method static \Illuminate\Contracts\Container\Container getContainer()
     * @see \Illuminate\Notifications\ChannelManager::send
     * @method static void send(array|\Illuminate\Support\Collection|mixed $notifiables, $notification)
     * @see \Illuminate\Notifications\ChannelManager::deliversVia
     * @method static string deliversVia()
     * @see \Illuminate\Notifications\ChannelManager::getDefaultDriver
     * @method static string getDefaultDriver()
     * @see \Illuminate\Support\Manager::getDrivers
     * @method static array getDrivers()
     */
    class Notification {}

    /**
     * @see \Illuminate\Testing\ParallelTesting::callSetUpTestCaseCallbacks
     * @method static void callSetUpTestCaseCallbacks(\Illuminate\Foundation\Testing\TestCase $testCase)
     * @see \Illuminate\Testing\ParallelTesting::resolveTokenUsing
     * @method static void resolveTokenUsing(\Closure|null $resolver)
     * @see \Illuminate\Testing\ParallelTesting::callTearDownProcessCallbacks
     * @method static void callTearDownProcessCallbacks()
     * @see \Illuminate\Testing\ParallelTesting::resolveOptionsUsing
     * @method static void resolveOptionsUsing(\Closure|null $resolver)
     * @see \Illuminate\Testing\ParallelTesting::callSetUpProcessCallbacks
     * @method static void callSetUpProcessCallbacks()
     * @see \Illuminate\Testing\ParallelTesting::token
     * @method static false|string token()
     * @see \Illuminate\Testing\ParallelTesting::setUpTestDatabase
     * @method static void setUpTestDatabase(callable $callback)
     * @see \Illuminate\Testing\ParallelTesting::tearDownProcess
     * @method static void tearDownProcess(callable $callback)
     * @see \Illuminate\Testing\ParallelTesting::setUpProcess
     * @method static void setUpProcess(callable $callback)
     * @see \Illuminate\Testing\ParallelTesting::callSetUpTestDatabaseCallbacks
     * @method static void callSetUpTestDatabaseCallbacks(string $database)
     * @see \Illuminate\Testing\ParallelTesting::tearDownTestCase
     * @method static void tearDownTestCase(callable $callback)
     * @see \Illuminate\Testing\ParallelTesting::callTearDownTestCaseCallbacks
     * @method static void callTearDownTestCaseCallbacks(\Illuminate\Foundation\Testing\TestCase $testCase)
     * @see \Illuminate\Testing\ParallelTesting::option
     * @method static mixed option(string $option)
     * @see \Illuminate\Testing\ParallelTesting::setUpTestCase
     * @method static void setUpTestCase(callable $callback)
     */
    class ParallelTesting {}

    /**
     * @see \Illuminate\Auth\Passwords\PasswordBroker::sendResetLink
     * @method static string sendResetLink(array $credentials, \Closure $callback = null)
     * @see \Illuminate\Auth\Passwords\PasswordBroker::getRepository
     * @method static \Illuminate\Auth\Passwords\TokenRepositoryInterface getRepository()
     * @see \Illuminate\Auth\Passwords\PasswordBroker::getUser
     * @method static \Illuminate\Contracts\Auth\CanResetPassword|null getUser(array $credentials)
     * @see \Illuminate\Auth\Passwords\PasswordBroker::deleteToken
     * @method static void deleteToken(\Illuminate\Contracts\Auth\CanResetPassword $user)
     * @see \Illuminate\Auth\Passwords\PasswordBroker::createToken
     * @method static string createToken(\Illuminate\Contracts\Auth\CanResetPassword $user)
     * @see \Illuminate\Auth\Passwords\PasswordBroker::tokenExists
     * @method static bool tokenExists(\Illuminate\Contracts\Auth\CanResetPassword $user, string $token)
     * @see \Illuminate\Auth\Passwords\PasswordBroker::reset
     * @method static \Illuminate\Contracts\Auth\CanResetPassword|mixed|null|string reset(array $credentials, \Closure $callback)
     */
    class Password {}

    /**
     * @see \Illuminate\Queue\QueueManager::addConnector
     * @method static void addConnector(string $driver, \Closure $resolver)
     * @see \Illuminate\Contracts\Queue\Queue::setConnectionName
     * @method static \Illuminate\Contracts\Queue\Queue setConnectionName(string $name)
     * @see \Illuminate\Queue\QueueManager::setDefaultDriver
     * @method static void setDefaultDriver(string $name)
     * @see \Illuminate\Queue\QueueManager::before
     * @method static void before($callback)
     * @see \Illuminate\Contracts\Queue\Queue::pop
     * @method static \Illuminate\Contracts\Queue\Job|null pop(null|string $queue = null)
     * @see \Illuminate\Contracts\Queue\Queue::laterOn
     * @method static mixed laterOn(string $queue, \DateInterval|\DateTimeInterface|int $delay, object|string $job, $data = '')
     * @see \Illuminate\Contracts\Queue\Queue::later
     * @method static mixed later(\DateInterval|\DateTimeInterface|int $delay, object|string $job, $data = '', null|string $queue = null)
     * @see \Illuminate\Queue\QueueManager::setApplication
     * @method static \Illuminate\Queue\QueueManager setApplication(\Illuminate\Contracts\Foundation\Application $app)
     * @see \Illuminate\Queue\QueueManager::connection
     * @method static \Illuminate\Contracts\Queue\Queue connection(null|string $name = null)
     * @see \Illuminate\Queue\QueueManager::after
     * @method static void after($callback)
     * @see \Illuminate\Queue\QueueManager::looping
     * @method static void looping($callback)
     * @see \Illuminate\Contracts\Queue\Queue::pushRaw
     * @method static mixed pushRaw(string $payload, null|string $queue = null, array $options = [])
     * @see \Illuminate\Queue\QueueManager::getApplication
     * @method static \Illuminate\Contracts\Foundation\Application getApplication()
     * @see \Illuminate\Queue\QueueManager::exceptionOccurred
     * @method static void exceptionOccurred($callback)
     * @see \Illuminate\Contracts\Queue\Queue::getConnectionName
     * @method static string getConnectionName()
     * @see \Illuminate\Contracts\Queue\Queue::push
     * @method static mixed push(object|string $job, $data = '', null|string $queue = null)
     * @see \Illuminate\Queue\QueueManager::connected
     * @method static bool connected(null|string $name = null)
     * @see \Illuminate\Queue\QueueManager::extend
     * @method static null|void extend(string $driver, \Closure $resolver)
     * @see \Illuminate\Queue\QueueManager::getName
     * @method static string getName(null|string $connection = null)
     * @see \Illuminate\Contracts\Queue\Queue::size
     * @method static int size(null|string $queue = null)
     * @see \Illuminate\Queue\QueueManager::stopping
     * @method static void stopping($callback)
     * @see \Illuminate\Queue\QueueManager::failing
     * @method static void failing($callback)
     * @see \Illuminate\Contracts\Queue\Queue::pushOn
     * @method static mixed pushOn(string $queue, object|string $job, $data = '')
     * @see \Illuminate\Contracts\Queue\Queue::bulk
     * @method static mixed bulk(array $jobs, $data = '', null|string $queue = null)
     * @see \Illuminate\Queue\QueueManager::getDefaultDriver
     * @method static string getDefaultDriver()
     * @see \Illuminate\Queue\Queue::getJobBackoff
     * @method static mixed getJobBackoff($job)
     * @see \Illuminate\Queue\Queue::setContainer
     * @method static void setContainer(\Illuminate\Container\Container $container)
     * @see \Illuminate\Queue\Queue::getContainer
     * @method static \Illuminate\Container\Container getContainer()
     * @see \Illuminate\Queue\Queue::createPayloadUsing
     * @method static void createPayloadUsing(callable|null $callback)
     * @see \Illuminate\Queue\Queue::getJobExpiration
     * @method static mixed getJobExpiration($job)
     */
    class Queue {}

    /**
     * @see \Illuminate\Cache\RateLimiter::availableIn
     * @method static int availableIn(string $key)
     * @see \Illuminate\Cache\RateLimiter::retriesLeft
     * @method static int retriesLeft(string $key, int $maxAttempts)
     * @see \Illuminate\Cache\RateLimiter::for
     * @method static \Illuminate\Cache\RateLimiter for(string $name, \Closure $callback)
     * @see \Illuminate\Cache\RateLimiter::clear
     * @method static void clear(string $key)
     * @see \Illuminate\Cache\RateLimiter::tooManyAttempts
     * @method static bool tooManyAttempts(string $key, int $maxAttempts)
     * @see \Illuminate\Cache\RateLimiter::attempt
     * @method static false|mixed attempt(string $key, int $maxAttempts, \Closure $callback, int $decaySeconds = 60)
     * @see \Illuminate\Cache\RateLimiter::remaining
     * @method static int remaining(string $key, int $maxAttempts)
     * @see \Illuminate\Cache\RateLimiter::hit
     * @method static int hit(string $key, int $decaySeconds = 60)
     * @see \Illuminate\Cache\RateLimiter::cleanRateLimiterKey
     * @method static string cleanRateLimiterKey(string $key)
     * @see \Illuminate\Cache\RateLimiter::resetAttempts
     * @method static mixed resetAttempts(string $key)
     * @see \Illuminate\Cache\RateLimiter::limiter
     * @method static \Closure|null limiter(string $name)
     * @see \Illuminate\Cache\RateLimiter::attempts
     * @method static mixed attempts(string $key)
     */
    class RateLimiter {}

    /**
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Routing\Redirector::setSession
     * @method static void setSession(\Illuminate\Session\Store $session)
     * @see \Illuminate\Routing\Redirector::away
     * @method static \Illuminate\Http\RedirectResponse away(string $path, int $status = 302, array $headers = [])
     * @see \Illuminate\Routing\Redirector::back
     * @method static \Illuminate\Http\RedirectResponse back(int $status = 302, array $headers = [], $fallback = false)
     * @see \Illuminate\Routing\Redirector::refresh
     * @method static \Illuminate\Http\RedirectResponse refresh(int $status = 302, array $headers = [])
     * @see \Illuminate\Routing\Redirector::secure
     * @method static \Illuminate\Http\RedirectResponse secure(string $path, int $status = 302, array $headers = [])
     * @see \Illuminate\Routing\Redirector::home
     * @method static \Illuminate\Http\RedirectResponse home(int $status = 302)
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Routing\Redirector::route
     * @method static \Illuminate\Http\RedirectResponse route(string $route, $parameters = [], int $status = 302, array $headers = [])
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Routing\Redirector::setIntendedUrl
     * @method static \Illuminate\Routing\Redirector setIntendedUrl(string $url)
     * @see \Illuminate\Routing\Redirector::intended
     * @method static \Illuminate\Http\RedirectResponse intended($default = '/', int $status = 302, array $headers = [], bool|null $secure = null)
     * @see \Illuminate\Routing\Redirector::signedRoute
     * @method static \Illuminate\Http\RedirectResponse signedRoute(string $route, $parameters = [], \DateInterval|\DateTimeInterface|int|null $expiration = null, int $status = 302, array $headers = [])
     * @see \Illuminate\Routing\Redirector::temporarySignedRoute
     * @method static \Illuminate\Http\RedirectResponse temporarySignedRoute(string $route, \DateInterval|\DateTimeInterface|int|null $expiration, $parameters = [], int $status = 302, array $headers = [])
     * @see \Illuminate\Routing\Redirector::action
     * @method static \Illuminate\Http\RedirectResponse action(array|string $action, $parameters = [], int $status = 302, array $headers = [])
     * @see \Illuminate\Routing\Redirector::guest
     * @method static \Illuminate\Http\RedirectResponse guest(string $path, int $status = 302, array $headers = [], bool|null $secure = null)
     * @see \Illuminate\Routing\Redirector::to
     * @method static \Illuminate\Http\RedirectResponse to(string $path, int $status = 302, array $headers = [], bool|null $secure = null)
     * @see \Illuminate\Routing\Redirector::getIntendedUrl
     * @method static null|string getIntendedUrl()
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     * @see \Illuminate\Routing\Redirector::getUrlGenerator
     * @method static \Illuminate\Routing\UrlGenerator getUrlGenerator()
     */
    class Redirect {}

    /**
     * @see \Illuminate\Redis\Connections\Connection::throttle
     * @method static \Illuminate\Redis\Limiters\DurationLimiterBuilder throttle(string $name)
     * @see \Illuminate\Redis\RedisManager::resolve
     * @method static \Illuminate\Redis\Connections\Connection resolve(null|string $name = null)
     * @see \Illuminate\Redis\Connections\Connection::funnel
     * @method static \Illuminate\Redis\Limiters\ConcurrencyLimiterBuilder funnel(string $name)
     * @see \Illuminate\Redis\RedisManager::purge
     * @method static void purge(null|string $name = null)
     * @see \Illuminate\Redis\Connections\Connection::psubscribe
     * @method static null|void psubscribe(array|string $channels, \Closure $callback)
     * @see \Illuminate\Redis\Connections\Connection::setEventDispatcher
     * @method static void setEventDispatcher(\Illuminate\Contracts\Events\Dispatcher $events)
     * @see \Illuminate\Redis\RedisManager::setDriver
     * @method static void setDriver(string $driver)
     * @see \Illuminate\Redis\Connections\Connection::listen
     * @method static void listen(\Closure $callback)
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Redis\Connections\Connection::getEventDispatcher
     * @method static \Illuminate\Contracts\Events\Dispatcher getEventDispatcher()
     * @see \Illuminate\Redis\Connections\Connection::client
     * @method static mixed|\Redis client()
     * @see \Illuminate\Redis\RedisManager::connection
     * @method static \Illuminate\Redis\Connections\Connection connection(null|string $name = null)
     * @see \Illuminate\Redis\RedisManager::connections
     * @method static array connections()
     * @see \Illuminate\Redis\Connections\Connection::createSubscription
     * @method static void createSubscription(array|string $channels, \Closure $callback, string $method = 'subscribe')
     * @see \Illuminate\Redis\RedisManager::enableEvents
     * @method static void enableEvents()
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Redis\Connections\Connection::subscribe
     * @method static null|void subscribe(array|string $channels, \Closure $callback)
     * @see \Illuminate\Redis\RedisManager::disableEvents
     * @method static void disableEvents()
     * @see \Illuminate\Redis\Connections\Connection::command
     * @method static mixed command(string $method, array $parameters = [])
     * @see \Illuminate\Redis\RedisManager::extend
     * @method static \Illuminate\Redis\RedisManager extend(string $driver, \Closure $callback)
     * @see \Illuminate\Redis\Connections\Connection::getName
     * @method static null|string getName()
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Redis\Connections\Connection::setName
     * @method static \Illuminate\Redis\Connections\Connection setName(string $name)
     * @see \Illuminate\Redis\Connections\Connection::unsetEventDispatcher
     * @method static void unsetEventDispatcher()
     * @see \Illuminate\Support\Traits\Macroable::macroCall
     * @method static mixed macroCall(string $method, array $parameters)
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     */
    class Redis {}

    /**
     * @see \Symfony\Component\HttpFoundation\Request::hasPreviousSession
     * @method static bool hasPreviousSession()
     * @see \Symfony\Component\HttpFoundation\Request::isMethod
     * @method static bool isMethod(string $method)
     * @see \Illuminate\Http\Request::getUserResolver
     * @method static \Closure getUserResolver()
     * @see \Illuminate\Http\Request::ajax
     * @method static bool ajax()
     * @see \Illuminate\Http\Request::setJson
     * @method static \Illuminate\Http\Request setJson(\Symfony\Component\HttpFoundation\ParameterBag $json)
     * @see \Illuminate\Http\Request::path
     * @method static string path()
     * @see \Symfony\Component\HttpFoundation\Request::isMethodIdempotent
     * @method static bool isMethodIdempotent()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::hasAny
     * @method static bool hasAny(array|string $keys)
     * @see \Illuminate\Http\Request::merge
     * @method static \Illuminate\Http\Request merge(array $input)
     * @see \Illuminate\Http\Concerns\InteractsWithContentTypes::acceptsHtml
     * @method static bool acceptsHtml()
     * @see \Symfony\Component\HttpFoundation\Request::getSchemeAndHttpHost
     * @method static string getSchemeAndHttpHost()
     * @see \Illuminate\Http\Request::setRequestLocale
     * @method static void setRequestLocale(string $locale)
     * @see \Symfony\Component\HttpFoundation\Request::getQueryString
     * @method static null|string getQueryString()
     * @see \Symfony\Component\HttpFoundation\Request::isXmlHttpRequest
     * @method static bool isXmlHttpRequest()
     * @see \Illuminate\Http\Concerns\InteractsWithFlashData::old
     * @method static array|\Illuminate\Database\Eloquent\Model|null|string old(null|string $key = null, array|\Illuminate\Database\Eloquent\Model|null|string $default = null)
     * @see \Symfony\Component\HttpFoundation\Request::getBaseUrl
     * @method static string getBaseUrl()
     * @see \Illuminate\Http\Request::httpHost
     * @method static string httpHost()
     * @see \Illuminate\Http\Request::ips
     * @method static array ips()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::str
     * @method static \Illuminate\Support\Stringable str(string $key, $default = null)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::input
     * @method static mixed input(null|string $key = null, $default = null)
     * @see \Symfony\Component\HttpFoundation\Request::enableHttpMethodParameterOverride
     * @method static void enableHttpMethodParameterOverride()
     * @see \Illuminate\Http\Request::route
     * @method static \Illuminate\Routing\Route|null|object|string route(null|string $param = null, $default = null)
     * @see \Symfony\Component\HttpFoundation\Request::getPathInfo
     * @method static string getPathInfo()
     * @see \Illuminate\Http\Concerns\InteractsWithFlashData::flashOnly
     * @method static void flashOnly(array|mixed $keys)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::except
     * @method static array except(array|mixed $keys)
     * @see \Symfony\Component\HttpFoundation\Request::getProtocolVersion
     * @method static null|string getProtocolVersion()
     * @see \Symfony\Component\HttpFoundation\Request::isMethodCacheable
     * @method static bool isMethodCacheable()
     * @see \Illuminate\Http\Request::decodedPath
     * @method static string decodedPath()
     * @see \Symfony\Component\HttpFoundation\Request::getRequestFormat
     * @method static null|string getRequestFormat(null|string $default = 'html')
     * @see \Illuminate\Http\Concerns\InteractsWithFlashData::flash
     * @method static void flash()
     * @see \Symfony\Component\HttpFoundation\Request::setLocale
     * @method static void setLocale(string $locale)
     * @see \Symfony\Component\HttpFoundation\Request::setDefaultLocale
     * @method static void setDefaultLocale(string $locale)
     * @see \Illuminate\Http\Request::fullUrlWithoutQuery
     * @method static string fullUrlWithoutQuery(array|string $keys)
     * @see \Symfony\Component\HttpFoundation\Request::setRequestFormat
     * @method static void setRequestFormat(null|string $format)
     * @see \Illuminate\Http\Request::userAgent
     * @method static null|string userAgent()
     * @see \Symfony\Component\HttpFoundation\Request::setTrustedProxies
     * @method static void setTrustedProxies(array $proxies, int $trustedHeaderSet)
     * @see \Illuminate\Http\Concerns\InteractsWithContentTypes::wantsJson
     * @method static bool wantsJson()
     * @see \Symfony\Component\HttpFoundation\Request::getETags
     * @method static array getETags()
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Symfony\Component\HttpFoundation\Request::preferSafeContent
     * @method static bool preferSafeContent()
     * @see \Illuminate\Http\Concerns\InteractsWithContentTypes::matchesType
     * @method static bool matchesType(string $actual, string $type)
     * @see \Illuminate\Http\Request::validate
     * @method static array validate(array $rules, ...$params)
     * @see \Symfony\Component\HttpFoundation\Request::getTrustedProxies
     * @method static string[] getTrustedProxies()
     * @see \Symfony\Component\HttpFoundation\Request::getDefaultLocale
     * @method static string getDefaultLocale()
     * @see \Symfony\Component\HttpFoundation\Request::getCharsets
     * @method static array getCharsets()
     * @see \Illuminate\Http\Request::getSession
     * @method static \Symfony\Component\HttpFoundation\Session\SessionInterface getSession()
     * @see \Symfony\Component\HttpFoundation\Request::getUserInfo
     * @method static null|string getUserInfo()
     * @see \Symfony\Component\HttpFoundation\Request::getHost
     * @method static string getHost()
     * @see \Symfony\Component\HttpFoundation\Request::initialize
     * @method static void initialize(array $query = [], array $request = [], array $attributes = [], array $cookies = [], array $files = [], array $server = [], null|resource|string $content = null)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::dd
     * @method static never dd(...$keys)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::hasFile
     * @method static bool hasFile(string $key)
     * @see \Symfony\Component\HttpFoundation\Request::createFromGlobals
     * @method static \Symfony\Component\HttpFoundation\Request createFromGlobals()
     * @see \Illuminate\Http\Request::hasSession
     * @method static bool hasSession(bool $skipIfUninitialized = false)
     * @see \Illuminate\Http\Concerns\CanBePrecognitive::isPrecognitive
     * @method static bool isPrecognitive()
     * @see \Illuminate\Http\Request::secure
     * @method static bool secure()
     * @see \Illuminate\Http\Concerns\CanBePrecognitive::filterPrecognitiveRules
     * @method static array filterPrecognitiveRules(array $rules)
     * @see \Illuminate\Http\Request::createFromBase
     * @method static \Illuminate\Http\Request createFromBase(\Symfony\Component\HttpFoundation\Request $request)
     * @see \Illuminate\Http\Concerns\CanBePrecognitive::isAttemptingPrecognition
     * @method static bool isAttemptingPrecognition()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::post
     * @method static array|null|string post(null|string $key = null, array|null|string $default = null)
     * @see \Illuminate\Http\Request::segment
     * @method static null|string segment(int $index, null|string $default = null)
     * @see \Symfony\Component\HttpFoundation\Request::setFactory
     * @method static void setFactory(callable|null $callable)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::has
     * @method static bool has(array|string $key)
     * @see \Illuminate\Http\Concerns\InteractsWithContentTypes::isJson
     * @method static bool isJson()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::query
     * @method static array|null|string query(null|string $key = null, array|null|string $default = null)
     * @see \Illuminate\Http\Request::duplicate
     * @method static \Illuminate\Http\Request duplicate(array $query = null, array $request = null, array $attributes = null, array $cookies = null, array $files = null, array $server = null)
     * @see \Illuminate\Http\Request::mergeIfMissing
     * @method static \Illuminate\Http\Request mergeIfMissing(array $input)
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Symfony\Component\HttpFoundation\Request::getTrustedHosts
     * @method static string[] getTrustedHosts()
     * @see \Symfony\Component\HttpFoundation\Request::getBasePath
     * @method static string getBasePath()
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     * @see \Illuminate\Http\Request::offsetGet
     * @method static mixed offsetGet(string $offset)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::string
     * @method static \Illuminate\Support\Stringable string(string $key, $default = null)
     * @see \Illuminate\Http\Request::session
     * @method static \Illuminate\Contracts\Session\Session session()
     * @see \Illuminate\Http\Request::prefetch
     * @method static bool prefetch()
     * @see \Symfony\Component\HttpFoundation\Request::getMethod
     * @method static string getMethod()
     * @see \Illuminate\Http\Concerns\InteractsWithContentTypes::expectsJson
     * @method static bool expectsJson()
     * @see \Illuminate\Http\Concerns\InteractsWithFlashData::flush
     * @method static void flush()
     * @see \Symfony\Component\HttpFoundation\Request::normalizeQueryString
     * @method static string normalizeQueryString(null|string $qs)
     * @see \Illuminate\Http\Request::root
     * @method static string root()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::missing
     * @method static bool missing(array|string $key)
     * @see \Symfony\Component\HttpFoundation\Request::isFromTrustedProxy
     * @method static bool isFromTrustedProxy()
     * @see \Illuminate\Http\Request::json
     * @method static mixed|null|\Symfony\Component\HttpFoundation\ParameterBag json(null|string $key = null, $default = null)
     * @see \Illuminate\Http\Request::offsetExists
     * @method static bool offsetExists(string $offset)
     * @see \Symfony\Component\HttpFoundation\Request::getFormat
     * @method static null|string getFormat(null|string $mimeType)
     * @see \Symfony\Component\HttpFoundation\Request::getScriptName
     * @method static string getScriptName()
     * @see \Illuminate\Http\Request::fullUrlIs
     * @method static bool fullUrlIs(...$patterns)
     * @see \Symfony\Component\HttpFoundation\Request::getAcceptableContentTypes
     * @method static array getAcceptableContentTypes()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::allFiles
     * @method static array allFiles()
     * @see \Illuminate\Http\Request::createFrom
     * @method static \Illuminate\Http\Request createFrom(\Illuminate\Http\Request $from, \Illuminate\Http\Request|null $to = null)
     * @see \Illuminate\Http\Request::schemeAndHttpHost
     * @method static string schemeAndHttpHost()
     * @see \Illuminate\Http\Request::fullUrl
     * @method static string fullUrl()
     * @see \Symfony\Component\HttpFoundation\Request::setSessionFactory
     * @method static void setSessionFactory(callable $factory)
     * @see \Symfony\Component\HttpFoundation\Request::getEncodings
     * @method static array getEncodings()
     * @see \Symfony\Component\HttpFoundation\Request::overrideGlobals
     * @method static void overrideGlobals()
     * @see \Symfony\Component\HttpFoundation\Request::setTrustedHosts
     * @method static void setTrustedHosts(array $hostPatterns)
     * @see \Symfony\Component\HttpFoundation\Request::isMethodSafe
     * @method static bool isMethodSafe()
     * @see \Illuminate\Http\Request::fingerprint
     * @method static string fingerprint()
     * @see \Illuminate\Http\Request::method
     * @method static string method()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::cookie
     * @method static array|null|string cookie(null|string $key = null, array|null|string $default = null)
     * @see \Illuminate\Http\Request::ip
     * @method static null|string ip()
     * @see \Symfony\Component\HttpFoundation\Request::getContent
     * @method static false|null|resource|string getContent(bool $asResource = false)
     * @see \Illuminate\Http\Request::is
     * @method static bool is(...$patterns)
     * @see \Symfony\Component\HttpFoundation\Request::getUriForPath
     * @method static string getUriForPath(string $path)
     * @see \Illuminate\Http\Request::getRouteResolver
     * @method static \Closure getRouteResolver()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::enum
     * @method static null enum(string $key, $enumClass)
     * @see \Illuminate\Http\Request::offsetUnset
     * @method static void offsetUnset(string $offset)
     * @see \Symfony\Component\HttpFoundation\Request::getTrustedHeaderSet
     * @method static int getTrustedHeaderSet()
     * @see \Symfony\Component\HttpFoundation\Request::getPreferredFormat
     * @method static null|string getPreferredFormat(null|string $default = 'html')
     * @see \Illuminate\Http\Concerns\InteractsWithInput::isNotFilled
     * @method static bool isNotFilled(array|string $key)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::server
     * @method static array|null|string server(null|string $key = null, array|null|string $default = null)
     * @see \Illuminate\Http\Request::setUserResolver
     * @method static \Illuminate\Http\Request setUserResolver(\Closure $callback)
     * @see \Symfony\Component\HttpFoundation\Request::getPort
     * @method static int|null|string getPort()
     * @see \Illuminate\Http\Request::setRouteResolver
     * @method static \Illuminate\Http\Request setRouteResolver(\Closure $callback)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::whenMissing
     * @method static \Illuminate\Http\Concerns\InteractsWithInput|mixed whenMissing(string $key, callable $callback, callable $default = null)
     * @see \Symfony\Component\HttpFoundation\Request::getHttpMethodParameterOverride
     * @method static bool getHttpMethodParameterOverride()
     * @see \Illuminate\Http\Request::segments
     * @method static array segments()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::file
     * @method static array|\Illuminate\Http\UploadedFile|\Illuminate\Http\UploadedFile[]|null file(null|string $key = null, $default = null)
     * @see \Symfony\Component\HttpFoundation\Request::getContentType
     * @method static null|string getContentType()
     * @see \Illuminate\Http\Request::get
     * @method static mixed get(string $key, $default = null)
     * @see \Symfony\Component\HttpFoundation\Request::getMimeTypes
     * @method static array getMimeTypes(string $format)
     * @see \Illuminate\Http\Concerns\InteractsWithContentTypes::acceptsJson
     * @method static bool acceptsJson()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::whenHas
     * @method static \Illuminate\Http\Concerns\InteractsWithInput|mixed whenHas(string $key, callable $callback, callable $default = null)
     * @see \Illuminate\Http\Concerns\InteractsWithContentTypes::prefers
     * @method static null|string prefers(array|string $contentTypes)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::hasHeader
     * @method static bool hasHeader(string $key)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::filled
     * @method static bool filled(array|string $key)
     * @see \Illuminate\Http\Request::url
     * @method static string url()
     * @see \Illuminate\Http\Request::setDefaultRequestLocale
     * @method static void setDefaultRequestLocale(string $locale)
     * @see \Symfony\Component\HttpFoundation\Request::setMethod
     * @method static void setMethod(string $method)
     * @see \Illuminate\Http\Request::hasValidSignature
     * @method static bool hasValidSignature(bool $absolute = true)
     * @see \Symfony\Component\HttpFoundation\Request::getPassword
     * @method static null|string getPassword()
     * @see \Symfony\Component\HttpFoundation\Request::getLocale
     * @method static string getLocale()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::exists
     * @method static bool exists(array|string $key)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::date
     * @method static \Illuminate\Support\Carbon|null date(string $key, null|string $format = null, null|string $tz = null)
     * @see \Illuminate\Http\Request::instance
     * @method static \Illuminate\Http\Request instance()
     * @see \Symfony\Component\HttpFoundation\Request::getRelativeUriForPath
     * @method static string getRelativeUriForPath(string $path)
     * @see \Illuminate\Http\Request::pjax
     * @method static bool pjax()
     * @see \Illuminate\Http\Request::replace
     * @method static \Illuminate\Http\Request replace(array $input)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::integer
     * @method static int integer(string $key, int $default = 0)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::float
     * @method static float float(string $key, float $default = 0.0)
     * @see \Symfony\Component\HttpFoundation\Request::getRealMethod
     * @method static string getRealMethod()
     * @see \Symfony\Component\HttpFoundation\Request::getPreferredLanguage
     * @method static null|string getPreferredLanguage(array $locales = null)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::bearerToken
     * @method static null|string bearerToken()
     * @see \Symfony\Component\HttpFoundation\Request::getClientIps
     * @method static array|string[] getClientIps()
     * @see \Illuminate\Http\Request::host
     * @method static string host()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::only
     * @method static array only(array|mixed $keys)
     * @see \Symfony\Component\HttpFoundation\Request::create
     * @method static \Symfony\Component\HttpFoundation\Request create(string $uri, string $method = 'GET', array $parameters = [], array $cookies = [], array $files = [], array $server = [], null|resource|string $content = null)
     * @see \Symfony\Component\HttpFoundation\Request::getHttpHost
     * @method static string getHttpHost()
     * @see \Symfony\Component\HttpFoundation\Request::setFormat
     * @method static void setFormat(null|string $format, array|string $mimeTypes)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::all
     * @method static array all(array|mixed|null $keys = null)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::whenFilled
     * @method static \Illuminate\Http\Concerns\InteractsWithInput|mixed whenFilled(string $key, callable $callback, callable $default = null)
     * @see \Symfony\Component\HttpFoundation\Request::setSession
     * @method static void setSession(\Symfony\Component\HttpFoundation\Session\SessionInterface $session)
     * @see \Illuminate\Http\Request::routeIs
     * @method static bool routeIs(...$patterns)
     * @see \Illuminate\Http\Concerns\InteractsWithContentTypes::accepts
     * @method static bool accepts(array|string $contentTypes)
     * @see \Illuminate\Http\Concerns\InteractsWithContentTypes::format
     * @method static string format(string $default = 'html')
     * @see \Illuminate\Http\Request::capture
     * @method static \Illuminate\Http\Request capture()
     * @see \Symfony\Component\HttpFoundation\Request::getClientIp
     * @method static null|string getClientIp()
     * @see \Illuminate\Http\Request::validateWithBag
     * @method static array validateWithBag(string $errorBag, array $rules, ...$params)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::hasCookie
     * @method static bool hasCookie(string $key)
     * @see \Symfony\Component\HttpFoundation\Request::getUser
     * @method static null|string getUser()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::header
     * @method static array|null|string header(null|string $key = null, array|null|string $default = null)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::collect
     * @method static \Illuminate\Support\Collection collect(array|null|string $key = null)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::anyFilled
     * @method static bool anyFilled(array|string $keys)
     * @see \Illuminate\Http\Concerns\InteractsWithInput::keys
     * @method static array keys()
     * @see \Symfony\Component\HttpFoundation\Request::isNoCache
     * @method static bool isNoCache()
     * @see \Illuminate\Http\Request::offsetSet
     * @method static void offsetSet(string $offset, $value)
     * @see \Symfony\Component\HttpFoundation\Request::getMimeType
     * @method static null|string getMimeType(string $format)
     * @see \Illuminate\Http\Concerns\InteractsWithFlashData::flashExcept
     * @method static void flashExcept(array|mixed $keys)
     * @see \Illuminate\Http\Concerns\InteractsWithContentTypes::acceptsAnyContentType
     * @method static bool acceptsAnyContentType()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::dump
     * @method static \Illuminate\Http\Concerns\InteractsWithInput dump($keys = [])
     * @see \Symfony\Component\HttpFoundation\Request::getUri
     * @method static string getUri()
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Symfony\Component\HttpFoundation\Request::isSecure
     * @method static bool isSecure()
     * @see \Illuminate\Http\Request::fullUrlWithQuery
     * @method static string fullUrlWithQuery(array $query)
     * @see \Symfony\Component\HttpFoundation\Request::getScheme
     * @method static string getScheme()
     * @see \Illuminate\Http\Concerns\InteractsWithInput::boolean
     * @method static bool boolean(null|string $key = null, bool $default = false)
     * @see \Illuminate\Http\Request::setLaravelSession
     * @method static void setLaravelSession(\Illuminate\Contracts\Session\Session $session)
     * @see \Symfony\Component\HttpFoundation\Request::getRequestUri
     * @method static string getRequestUri()
     * @see \Illuminate\Http\Request::toArray
     * @method static array toArray()
     * @see \Illuminate\Http\Request::user
     * @method static mixed user(null|string $guard = null)
     * @see \Symfony\Component\HttpFoundation\Request::getLanguages
     * @method static array getLanguages()
     * @see \Illuminate\Http\Request::footprint
     * @method static string footprint()
     * @see \Illuminate\Http\Request::hasValidRelativeSignature
     * @method static bool hasValidRelativeSignature()
     * @see \Illuminate\Http\Request::hasValidSignatureWhileIgnoring
     * @method static bool hasValidSignatureWhileIgnoring($ignoreQuery = [], $absolute = true)
     */
    class Request {}

    /**
     * @see \Illuminate\Contracts\Routing\ResponseFactory::streamDownload
     * @method static \Symfony\Component\HttpFoundation\StreamedResponse streamDownload(\Closure $callback, null|string $name = null, array $headers = [], null|string $disposition = 'attachment')
     * @see \Illuminate\Contracts\Routing\ResponseFactory::jsonp
     * @method static \Illuminate\Http\JsonResponse jsonp(string $callback, $data = [], int $status = 200, array $headers = [], int $options = 0)
     * @see \Illuminate\Contracts\Routing\ResponseFactory::redirectTo
     * @method static \Illuminate\Http\RedirectResponse redirectTo(string $path, int $status = 302, array $headers = [], bool|null $secure = null)
     * @see \Illuminate\Contracts\Routing\ResponseFactory::redirectGuest
     * @method static \Illuminate\Http\RedirectResponse redirectGuest(string $path, int $status = 302, array $headers = [], bool|null $secure = null)
     * @see \Illuminate\Contracts\Routing\ResponseFactory::redirectToIntended
     * @method static \Illuminate\Http\RedirectResponse redirectToIntended(string $default = '/', int $status = 302, array $headers = [], bool|null $secure = null)
     * @see \Illuminate\Contracts\Routing\ResponseFactory::download
     * @method static \Symfony\Component\HttpFoundation\BinaryFileResponse download(\SplFileInfo|string $file, null|string $name = null, array $headers = [], null|string $disposition = 'attachment')
     * @see \Illuminate\Contracts\Routing\ResponseFactory::view
     * @method static \Illuminate\Http\Response view(array|string $view, array $data = [], int $status = 200, array $headers = [])
     * @see \Illuminate\Contracts\Routing\ResponseFactory::file
     * @method static \Symfony\Component\HttpFoundation\BinaryFileResponse file(\SplFileInfo|string $file, array $headers = [])
     * @see \Illuminate\Contracts\Routing\ResponseFactory::stream
     * @method static \Symfony\Component\HttpFoundation\StreamedResponse stream(\Closure $callback, int $status = 200, array $headers = [])
     * @see \Illuminate\Contracts\Routing\ResponseFactory::noContent
     * @method static \Illuminate\Http\Response noContent(int $status = 204, array $headers = [])
     * @see \Illuminate\Contracts\Routing\ResponseFactory::json
     * @method static \Illuminate\Http\JsonResponse json($data = [], int $status = 200, array $headers = [], int $options = 0)
     * @see \Illuminate\Contracts\Routing\ResponseFactory::redirectToRoute
     * @method static \Illuminate\Http\RedirectResponse redirectToRoute(string $route, $parameters = [], int $status = 302, array $headers = [])
     * @see \Illuminate\Contracts\Routing\ResponseFactory::make
     * @method static \Illuminate\Http\Response make(array|string $content = '', int $status = 200, array $headers = [])
     * @see \Illuminate\Contracts\Routing\ResponseFactory::redirectToAction
     * @method static \Illuminate\Http\RedirectResponse redirectToAction(string $action, $parameters = [], int $status = 302, array $headers = [])
     */
    class Response {}

    /**
     * @see \Illuminate\Routing\RouteRegistrar::scopeBindings
     * @method static \Illuminate\Routing\RouteRegistrar scopeBindings()
     * @see \Illuminate\Routing\Router::apiResources
     * @method static void apiResources(array $resources, array $options = [])
     * @see \Illuminate\Routing\Router::getLastGroupPrefix
     * @method static string getLastGroupPrefix()
     * @see \Illuminate\Routing\Router::substituteBindings
     * @method static \Illuminate\Routing\Route substituteBindings(\Illuminate\Routing\Route $route)
     * @see \Illuminate\Routing\Router::put
     * @method static \Illuminate\Routing\Route put(string $uri, array|callable|null|string $action = null)
     * @see \Illuminate\Routing\Router::permanentRedirect
     * @method static \Illuminate\Routing\Route permanentRedirect(string $uri, string $destination)
     * @see \Illuminate\Routing\CreatesRegularExpressionRouteConstraints::whereIn
     * @method static \Illuminate\Routing\CreatesRegularExpressionRouteConstraints whereIn(array|string $parameters, array $values)
     * @see \Illuminate\Routing\Router::patch
     * @method static \Illuminate\Routing\Route patch(string $uri, array|callable|null|string $action = null)
     * @see \Illuminate\Routing\Router::bind
     * @method static void bind(string $key, callable|string $binder)
     * @see \Illuminate\Routing\Router::toResponse
     * @method static \Symfony\Component\HttpFoundation\Response toResponse(\Symfony\Component\HttpFoundation\Request $request, $response)
     * @see \Illuminate\Routing\Router::options
     * @method static \Illuminate\Routing\Route options(string $uri, array|callable|null|string $action = null)
     * @see \Illuminate\Routing\Router::model
     * @method static void model(string $key, string $class, \Closure $callback = null)
     * @see \Illuminate\Routing\Router::removeMiddlewareFromGroup
     * @method static \Illuminate\Routing\Router removeMiddlewareFromGroup(string $group, string $middleware)
     * @see \Illuminate\Routing\Router::hasMiddlewareGroup
     * @method static bool hasMiddlewareGroup(string $name)
     * @see \Illuminate\Routing\Router::prependMiddlewareToGroup
     * @method static \Illuminate\Routing\Router prependMiddlewareToGroup(string $group, string $middleware)
     * @see \Illuminate\Routing\Router::addRoute
     * @method static \Illuminate\Routing\Route addRoute(array|string $methods, string $uri, array|callable|null|string $action)
     * @see \Illuminate\Routing\Router::aliasMiddleware
     * @method static \Illuminate\Routing\Router aliasMiddleware(string $name, string $class)
     * @see \Illuminate\Routing\Router::is
     * @method static bool is(...$patterns)
     * @see \Illuminate\Routing\Router::input
     * @method static mixed input(string $key, null|string $default = null)
     * @see \Illuminate\Routing\RouteRegistrar::as
     * @method static \Illuminate\Routing\RouteRegistrar as(string $value)
     * @see \Illuminate\Routing\RouteRegistrar::withoutScopedBindings
     * @method static \Illuminate\Routing\RouteRegistrar withoutScopedBindings()
     * @see \Illuminate\Routing\RouteRegistrar::domain
     * @method static \Illuminate\Routing\RouteRegistrar domain(string $value)
     * @see \Illuminate\Routing\Router::matched
     * @method static void matched(callable|string $callback)
     * @see \Illuminate\Routing\Router::currentRouteUses
     * @method static bool currentRouteUses(string $action)
     * @see \Illuminate\Routing\Router::resourceVerbs
     * @method static array|null resourceVerbs(array $verbs = [])
     * @see \Illuminate\Routing\Router::singularResourceParameters
     * @method static void singularResourceParameters(bool $singular = true)
     * @see \Illuminate\Routing\Router::pattern
     * @method static void pattern(string $key, string $pattern)
     * @see \Illuminate\Routing\Router::substituteImplicitBindings
     * @method static void substituteImplicitBindings(\Illuminate\Routing\Route $route)
     * @see \Illuminate\Routing\Router::singletons
     * @method static void singletons(array $singletons, array $options = [])
     * @see \Illuminate\Routing\CreatesRegularExpressionRouteConstraints::whereUuid
     * @method static \Illuminate\Routing\CreatesRegularExpressionRouteConstraints whereUuid(array|string $parameters)
     * @see \Illuminate\Routing\Router::current
     * @method static \Illuminate\Routing\Route|null current()
     * @see \Illuminate\Routing\Router::hasGroupStack
     * @method static bool hasGroupStack()
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Routing\Router::get
     * @method static \Illuminate\Routing\Route get(string $uri, array|callable|null|string $action = null)
     * @see \Illuminate\Routing\Router::gatherRouteMiddleware
     * @method static array gatherRouteMiddleware(\Illuminate\Routing\Route $route)
     * @see \Illuminate\Routing\CreatesRegularExpressionRouteConstraints::whereAlphaNumeric
     * @method static \Illuminate\Routing\CreatesRegularExpressionRouteConstraints whereAlphaNumeric(array|string $parameters)
     * @see \Illuminate\Routing\Router::apiSingleton
     * @method static \Illuminate\Routing\PendingSingletonResourceRegistration apiSingleton(string $name, string $controller, array $options = [])
     * @see \Illuminate\Routing\RouteRegistrar::where
     * @method static \Illuminate\Routing\RouteRegistrar where(array $where)
     * @see \Illuminate\Routing\Router::uniqueMiddleware
     * @method static array uniqueMiddleware(array $middleware)
     * @see \Illuminate\Routing\RouteRegistrar::attribute
     * @method static \Illuminate\Routing\RouteRegistrar attribute(string $key, $value)
     * @see \Illuminate\Routing\Router::redirect
     * @method static \Illuminate\Routing\Route redirect(string $uri, string $destination, int $status = 302)
     * @see \Illuminate\Routing\RouteRegistrar::controller
     * @method static \Illuminate\Routing\RouteRegistrar controller(string $controller)
     * @see \Illuminate\Routing\Router::middlewareGroup
     * @method static \Illuminate\Routing\Router middlewareGroup(string $name, array $middleware)
     * @see \Illuminate\Routing\RouteRegistrar::withoutMiddleware
     * @method static \Illuminate\Routing\RouteRegistrar withoutMiddleware(array|string $middleware)
     * @see \Illuminate\Routing\Router::currentRouteNamed
     * @method static bool currentRouteNamed(...$patterns)
     * @see \Illuminate\Routing\CreatesRegularExpressionRouteConstraints::whereNumber
     * @method static \Illuminate\Routing\CreatesRegularExpressionRouteConstraints whereNumber(array|string $parameters)
     * @see \Illuminate\Routing\Router::getCurrentRequest
     * @method static \Illuminate\Http\Request getCurrentRequest()
     * @see \Illuminate\Routing\Router::prepareResponse
     * @method static \Symfony\Component\HttpFoundation\Response prepareResponse(\Symfony\Component\HttpFoundation\Request $request, $response)
     * @see \Illuminate\Routing\Router::getCurrentRoute
     * @method static \Illuminate\Routing\Route|null getCurrentRoute()
     * @see \Illuminate\Support\Traits\Macroable::macroCall
     * @method static mixed macroCall(string $method, array $parameters)
     * @see \Illuminate\Routing\Router::getPatterns
     * @method static array getPatterns()
     * @see \Illuminate\Routing\Router::currentRouteName
     * @method static null|string currentRouteName()
     * @see \Illuminate\Routing\Router::dispatch
     * @method static \Symfony\Component\HttpFoundation\Response dispatch(\Illuminate\Http\Request $request)
     * @see \Illuminate\Routing\Router::newRoute
     * @method static \Illuminate\Routing\Route newRoute(array|string $methods, string $uri, $action)
     * @see \Illuminate\Routing\Router::setContainer
     * @method static \Illuminate\Routing\Router setContainer(\Illuminate\Container\Container $container)
     * @see \Illuminate\Routing\Router::view
     * @method static \Illuminate\Routing\Route view(string $uri, string $view, array $data = [], array|int $status = 200, array $headers = [])
     * @see \Illuminate\Routing\Router::post
     * @method static \Illuminate\Routing\Route post(string $uri, array|callable|null|string $action = null)
     * @see \Illuminate\Routing\Router::has
     * @method static bool has(array|string $name)
     * @see \Illuminate\Routing\Router::group
     * @method static \Illuminate\Routing\Router group(array $attributes, array|\Closure|string $routes)
     * @see \Illuminate\Routing\Router::currentRouteAction
     * @method static null|string currentRouteAction()
     * @see \Illuminate\Routing\Router::getBindingCallback
     * @method static \Closure|null getBindingCallback(string $key)
     * @see \Illuminate\Routing\Router::resource
     * @method static \Illuminate\Routing\PendingResourceRegistration resource(string $name, string $controller, array $options = [])
     * @see \Illuminate\Routing\Router::pushMiddlewareToGroup
     * @method static \Illuminate\Routing\Router pushMiddlewareToGroup(string $group, string $middleware)
     * @see \Illuminate\Routing\Router::patterns
     * @method static void patterns(array $patterns)
     * @see \Illuminate\Routing\Router::respondWithRoute
     * @method static \Symfony\Component\HttpFoundation\Response respondWithRoute(string $name)
     * @see \Illuminate\Routing\Router::getMiddlewareGroups
     * @method static array getMiddlewareGroups()
     * @see \Illuminate\Routing\Router::dispatchToRoute
     * @method static \Symfony\Component\HttpFoundation\Response dispatchToRoute(\Illuminate\Http\Request $request)
     * @see \Illuminate\Routing\Router::getRoutes
     * @method static \Illuminate\Routing\RouteCollection|\Illuminate\Routing\RouteCollectionInterface getRoutes()
     * @see \Illuminate\Routing\Router::apiResource
     * @method static \Illuminate\Routing\PendingResourceRegistration apiResource(string $name, string $controller, array $options = [])
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Routing\RouteRegistrar::name
     * @method static \Illuminate\Routing\RouteRegistrar name(string $value)
     * @see \Illuminate\Routing\Router::fallback
     * @method static \Illuminate\Routing\Route fallback(array|callable|null|string $action)
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     * @see \Illuminate\Routing\Router::getGroupStack
     * @method static array getGroupStack()
     * @see \Illuminate\Routing\Router::apiSingletons
     * @method static void apiSingletons(array $singletons, array $options = [])
     * @see \Illuminate\Routing\Router::delete
     * @method static \Illuminate\Routing\Route delete(string $uri, array|callable|null|string $action = null)
     * @see \Illuminate\Routing\Router::flushMiddlewareGroups
     * @method static \Illuminate\Routing\Router flushMiddlewareGroups()
     * @see \Illuminate\Routing\Router::setCompiledRoutes
     * @method static void setCompiledRoutes(array $routes)
     * @see \Illuminate\Routing\Router::getMiddleware
     * @method static array getMiddleware()
     * @see \Illuminate\Routing\Router::resourceParameters
     * @method static void resourceParameters(array $parameters = [])
     * @see \Illuminate\Routing\RouteRegistrar::middleware
     * @method static \Illuminate\Routing\RouteRegistrar middleware(array|null|string $middleware)
     * @see \Illuminate\Routing\Router::mergeWithLastGroup
     * @method static array mergeWithLastGroup(array $new, bool $prependExistingPrefix = true)
     * @see \Illuminate\Routing\Router::singleton
     * @method static \Illuminate\Routing\PendingSingletonResourceRegistration singleton(string $name, string $controller, array $options = [])
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Routing\Router::resolveMiddleware
     * @method static array resolveMiddleware(array $middleware, array $excluded = [])
     * @see \Illuminate\Routing\CreatesRegularExpressionRouteConstraints::whereAlpha
     * @method static \Illuminate\Routing\CreatesRegularExpressionRouteConstraints whereAlpha(array|string $parameters)
     * @see \Illuminate\Routing\Router::match
     * @method static \Illuminate\Routing\Route match(array|string $methods, string $uri, array|callable|null|string $action = null)
     * @see \Illuminate\Routing\Router::resources
     * @method static void resources(array $resources, array $options = [])
     * @see \Illuminate\Routing\Router::any
     * @method static \Illuminate\Routing\Route any(string $uri, array|callable|null|string $action = null)
     * @see \Illuminate\Routing\Router::setRoutes
     * @method static void setRoutes(\Illuminate\Routing\RouteCollection $routes)
     * @see \Illuminate\Routing\RouteRegistrar::namespace
     * @method static \Illuminate\Routing\RouteRegistrar namespace(null|string $value)
     * @see \Illuminate\Routing\Router::uses
     * @method static bool uses(...$patterns)
     */
    class Route {}

    /**
     * @see \Illuminate\Database\Schema\Builder::disableForeignKeyConstraints
     * @method static bool disableForeignKeyConstraints()
     * @see \Illuminate\Database\Schema\Builder::drop
     * @method static void drop(string $table)
     * @see \Illuminate\Database\Schema\Builder::hasColumns
     * @method static bool hasColumns(string $table, array $columns)
     * @see \Illuminate\Database\Schema\Builder::getConnection
     * @method static \Illuminate\Database\Connection getConnection()
     * @see \Illuminate\Database\Schema\Builder::whenTableDoesntHaveColumn
     * @method static void whenTableDoesntHaveColumn(string $table, string $column, \Closure $callback)
     * @see \Illuminate\Database\Schema\Builder::morphUsingUlids
     * @method static null|void morphUsingUlids()
     * @see \Illuminate\Database\Schema\Builder::morphUsingUuids
     * @method static null|void morphUsingUuids()
     * @see \Illuminate\Database\Schema\Builder::whenTableHasColumn
     * @method static void whenTableHasColumn(string $table, string $column, \Closure $callback)
     * @see \Illuminate\Database\Schema\Builder::enableForeignKeyConstraints
     * @method static bool enableForeignKeyConstraints()
     * @see \Illuminate\Database\Schema\Builder::blueprintResolver
     * @method static void blueprintResolver(\Closure $resolver)
     * @see \Illuminate\Database\Schema\Builder::defaultStringLength
     * @method static void defaultStringLength(int $length)
     * @see \Illuminate\Database\Schema\Builder::setConnection
     * @method static \Illuminate\Database\Schema\Builder setConnection(\Illuminate\Database\Connection $connection)
     * @see \Illuminate\Database\Schema\Builder::getColumnType
     * @method static string getColumnType(string $table, string $column)
     * @see \Illuminate\Database\Schema\Builder::create
     * @method static void create(string $table, \Closure $callback)
     * @see \Illuminate\Database\Schema\Builder::dropColumns
     * @method static void dropColumns(string $table, array|string $columns)
     * @see \Illuminate\Database\Schema\Builder::table
     * @method static void table(string $table, \Closure $callback)
     * @see \Illuminate\Database\Schema\Builder::getColumnListing
     * @method static array getColumnListing(string $table)
     * @see \Illuminate\Database\Schema\Builder::dropIfExists
     * @method static void dropIfExists(string $table)
     * @see \Illuminate\Database\Schema\Builder::dropDatabaseIfExists
     * @method static bool dropDatabaseIfExists(string $name)
     * @see \Illuminate\Database\Schema\Builder::dropAllTables
     * @method static void dropAllTables()
     * @see \Illuminate\Database\Schema\Builder::dropAllViews
     * @method static void dropAllViews()
     * @see \Illuminate\Database\Schema\Builder::hasTable
     * @method static bool hasTable(string $table)
     * @see \Illuminate\Database\Schema\Builder::getAllTables
     * @method static void getAllTables()
     * @see \Illuminate\Database\Schema\Builder::defaultMorphKeyType
     * @method static void defaultMorphKeyType(string $type)
     * @see \Illuminate\Database\Schema\Builder::rename
     * @method static void rename(string $from, string $to)
     * @see \Illuminate\Database\Schema\Builder::dropAllTypes
     * @method static void dropAllTypes()
     * @see \Illuminate\Database\Schema\Builder::hasColumn
     * @method static bool hasColumn(string $table, string $column)
     * @see \Illuminate\Database\Schema\Builder::createDatabase
     * @method static bool createDatabase(string $name)
     */
    class Schema {}

    /**
     * @see \Illuminate\Session\SessionManager::setDefaultDriver
     * @method static void setDefaultDriver(string $name)
     * @see \Illuminate\Session\SessionManager::getSessionConfig
     * @method static array getSessionConfig()
     * @see \Illuminate\Support\Manager::setContainer
     * @method static \Illuminate\Support\Manager setContainer(\Illuminate\Contracts\Container\Container $container)
     * @see \Illuminate\Support\Manager::getContainer
     * @method static \Illuminate\Contracts\Container\Container getContainer()
     * @see \Illuminate\Support\Manager::forgetDrivers
     * @method static \Illuminate\Support\Manager forgetDrivers()
     * @see \Illuminate\Session\SessionManager::blockDriver
     * @method static null|string blockDriver()
     * @see \Illuminate\Support\Manager::extend
     * @method static \Illuminate\Support\Manager extend(string $driver, \Closure $callback)
     * @see \Illuminate\Support\Manager::driver
     * @method static mixed driver(null|string $driver = null)
     * @see \Illuminate\Session\SessionManager::getDefaultDriver
     * @method static string getDefaultDriver()
     * @see \Illuminate\Support\Manager::getDrivers
     * @method static array getDrivers()
     * @see \Illuminate\Session\SessionManager::shouldBlock
     * @method static bool shouldBlock()
     * @see \Illuminate\Session\Store::regenerateToken
     * @method static void regenerateToken()
     * @see \Illuminate\Session\Store::handlerNeedsRequest
     * @method static bool handlerNeedsRequest()
     * @see \Illuminate\Session\Store::replace
     * @method static void replace(array $attributes)
     * @see \Illuminate\Session\Store::ageFlashData
     * @method static void ageFlashData()
     * @see \Illuminate\Session\Store::flashInput
     * @method static void flashInput(array $value)
     * @see \Illuminate\Session\Store::setRequestOnHandler
     * @method static void setRequestOnHandler(\Illuminate\Http\Request $request)
     * @see \Illuminate\Session\Store::put
     * @method static void put(array|string $key, $value = null)
     * @see \Illuminate\Session\Store::previousUrl
     * @method static null|string previousUrl()
     * @see \Illuminate\Session\Store::only
     * @method static array only(array $keys)
     * @see \Illuminate\Session\Store::has
     * @method static bool has(array|string $key)
     * @see \Illuminate\Session\Store::all
     * @method static array all()
     * @see \Illuminate\Session\Store::setPreviousUrl
     * @method static void setPreviousUrl(string $url)
     * @see \Illuminate\Session\Store::getId
     * @method static string getId()
     * @see \Illuminate\Session\Store::isValidId
     * @method static bool isValidId(string $id)
     * @see \Illuminate\Session\Store::push
     * @method static void push(string $key, $value)
     * @see \Illuminate\Session\Store::setName
     * @method static void setName(string $name)
     * @see \Illuminate\Session\Store::forget
     * @method static void forget(array|string $keys)
     * @see \Illuminate\Session\Store::reflash
     * @method static void reflash()
     * @see \Illuminate\Session\Store::setExists
     * @method static void setExists(bool $value)
     * @see \Illuminate\Session\Store::isStarted
     * @method static bool isStarted()
     * @see \Illuminate\Session\Store::regenerate
     * @method static bool regenerate(bool $destroy = false)
     * @see \Illuminate\Session\Store::keep
     * @method static void keep(array|mixed $keys = null)
     * @see \Illuminate\Session\Store::getOldInput
     * @method static mixed getOldInput(null|string $key = null, $default = null)
     * @see \Illuminate\Session\Store::migrate
     * @method static bool migrate(bool $destroy = false)
     * @see \Illuminate\Session\Store::flash
     * @method static void flash(string $key, $value = true)
     * @see \Illuminate\Session\Store::hasOldInput
     * @method static bool hasOldInput(null|string $key = null)
     * @see \Illuminate\Session\Store::save
     * @method static void save()
     * @see \Illuminate\Session\Store::increment
     * @method static int|mixed increment(string $key, int $amount = 1)
     * @see \Illuminate\Session\Store::remove
     * @method static mixed remove(string $key)
     * @see \Illuminate\Session\Store::remember
     * @method static mixed remember(string $key, \Closure $callback)
     * @see \Illuminate\Session\Store::flush
     * @method static void flush()
     * @see \Illuminate\Session\Store::now
     * @method static void now(string $key, $value)
     * @see \Illuminate\Session\Store::get
     * @method static mixed get(string $key, $default = null)
     * @see \Illuminate\Session\Store::missing
     * @method static bool missing(array|string $key)
     * @see \Illuminate\Session\Store::start
     * @method static bool start()
     * @see \Illuminate\Session\Store::getHandler
     * @method static \SessionHandlerInterface getHandler()
     * @see \Illuminate\Session\Store::invalidate
     * @method static bool invalidate()
     * @see \Illuminate\Session\Store::token
     * @method static string token()
     * @see \Illuminate\Session\Store::getName
     * @method static string getName()
     * @see \Illuminate\Session\Store::pull
     * @method static mixed pull(string $key, $default = null)
     * @see \Illuminate\Session\Store::passwordConfirmed
     * @method static void passwordConfirmed()
     * @see \Illuminate\Session\Store::decrement
     * @method static int decrement(string $key, int $amount = 1)
     * @see \Illuminate\Session\Store::exists
     * @method static bool exists(array|string $key)
     * @see \Illuminate\Session\Store::setHandler
     * @method static \SessionHandlerInterface|void setHandler(\SessionHandlerInterface $handler)
     * @see \Illuminate\Session\Store::setId
     * @method static void setId(string $id)
     */
    class Session {}

    /**
     * @see \Illuminate\Filesystem\FilesystemManager::createS3Driver
     * @method static \Illuminate\Contracts\Filesystem\Cloud|\Illuminate\Filesystem\AwsS3V3Adapter createS3Driver(array $config)
     * @see \Illuminate\Filesystem\FilesystemManager::forgetDisk
     * @method static \Illuminate\Filesystem\FilesystemManager forgetDisk(array|string $disk)
     * @see \Illuminate\Contracts\Filesystem\Filesystem::prepend
     * @method static bool prepend(string $path, string $data)
     * @see \Illuminate\Filesystem\FilesystemManager::purge
     * @method static void purge(null|string $name = null)
     * @see \Illuminate\Contracts\Filesystem\Filesystem::getVisibility
     * @method static string getVisibility(string $path)
     * @see \Illuminate\Contracts\Filesystem\Filesystem::delete
     * @method static bool delete(array|string $paths)
     * @see \Illuminate\Contracts\Filesystem\Filesystem::put
     * @method static bool put(string $path, resource|string $contents, $options = [])
     * @see \Illuminate\Filesystem\FilesystemManager::cloud
     * @method static \Illuminate\Contracts\Filesystem\Filesystem cloud()
     * @see \Illuminate\Filesystem\FilesystemManager::createFtpDriver
     * @method static \Illuminate\Contracts\Filesystem\Filesystem|\Illuminate\Filesystem\FilesystemAdapter createFtpDriver(array $config)
     * @see \Illuminate\Contracts\Filesystem\Filesystem::writeStream
     * @method static bool writeStream(string $path, resource $resource, array $options = [])
     * @see \Illuminate\Filesystem\FilesystemManager::setApplication
     * @method static \Illuminate\Filesystem\FilesystemManager setApplication(\Illuminate\Contracts\Foundation\Application $app)
     * @see \Illuminate\Filesystem\FilesystemManager::createLocalDriver
     * @method static \Illuminate\Contracts\Filesystem\Filesystem|\Illuminate\Filesystem\FilesystemAdapter createLocalDriver(array $config)
     * @see \Illuminate\Contracts\Filesystem\Filesystem::allDirectories
     * @method static array allDirectories(null|string $directory = null)
     * @see \Illuminate\Contracts\Filesystem\Filesystem::directories
     * @method static array directories(null|string $directory = null, bool $recursive = false)
     * @see \Illuminate\Contracts\Filesystem\Filesystem::copy
     * @method static bool copy(string $from, string $to)
     * @see \Illuminate\Contracts\Filesystem\Filesystem::readStream
     * @method static null|resource readStream(string $path)
     * @see \Illuminate\Filesystem\FilesystemManager::getDefaultCloudDriver
     * @method static string getDefaultCloudDriver()
     * @see \Illuminate\Contracts\Filesystem\Filesystem::move
     * @method static bool move(string $from, string $to)
     * @see \Illuminate\Filesystem\FilesystemManager::set
     * @method static \Illuminate\Filesystem\FilesystemManager set(string $name, $disk)
     * @see \Illuminate\Filesystem\FilesystemManager::createSftpDriver
     * @method static \Illuminate\Contracts\Filesystem\Filesystem|\Illuminate\Filesystem\FilesystemAdapter createSftpDriver(array $config)
     * @see \Illuminate\Filesystem\FilesystemManager::createScopedDriver
     * @method static \Illuminate\Contracts\Filesystem\Filesystem createScopedDriver(array $config)
     * @see \Illuminate\Contracts\Filesystem\Filesystem::deleteDirectory
     * @method static bool deleteDirectory(string $directory)
     * @see \Illuminate\Filesystem\FilesystemManager::extend
     * @method static \Illuminate\Filesystem\FilesystemManager extend(string $driver, \Closure $callback)
     * @see \Illuminate\Filesystem\FilesystemManager::disk
     * @method static \Illuminate\Contracts\Filesystem\Filesystem disk(null|string $name = null)
     * @see \Illuminate\Contracts\Filesystem\Filesystem::size
     * @method static int size(string $path)
     * @see \Illuminate\Filesystem\FilesystemManager::build
     * @method static \Illuminate\Contracts\Filesystem\Filesystem build(array|string $config)
     * @see \Illuminate\Contracts\Filesystem\Filesystem::makeDirectory
     * @method static bool makeDirectory(string $path)
     * @see \Illuminate\Contracts\Filesystem\Filesystem::lastModified
     * @method static int lastModified(string $path)
     * @see \Illuminate\Contracts\Filesystem\Filesystem::exists
     * @method static bool exists(string $path)
     * @see \Illuminate\Contracts\Filesystem\Filesystem::files
     * @method static array files(null|string $directory = null, bool $recursive = false)
     * @see \Illuminate\Contracts\Filesystem\Filesystem::allFiles
     * @method static array allFiles(null|string $directory = null)
     * @see \Illuminate\Filesystem\FilesystemManager::drive
     * @method static \Illuminate\Contracts\Filesystem\Filesystem drive(null|string $name = null)
     * @see \Illuminate\Contracts\Filesystem\Filesystem::setVisibility
     * @method static bool setVisibility(string $path, string $visibility)
     * @see \Illuminate\Filesystem\FilesystemManager::getDefaultDriver
     * @method static string getDefaultDriver()
     * @see \Illuminate\Contracts\Filesystem\Filesystem::append
     * @method static bool append(string $path, string $data)
     */
    class Storage {}

    /**
     * @see \Illuminate\Routing\UrlGenerator::formatRoot
     * @method static string formatRoot(string $scheme, null|string $root = null)
     * @see \Illuminate\Routing\UrlGenerator::secure
     * @method static string secure(string $path, array $parameters = [])
     * @see \Illuminate\Routing\UrlGenerator::formatScheme
     * @method static null|string formatScheme(bool|null $secure = null)
     * @see \Illuminate\Routing\UrlGenerator::signatureHasNotExpired
     * @method static bool signatureHasNotExpired(\Illuminate\Http\Request $request)
     * @see \Illuminate\Routing\UrlGenerator::toRoute
     * @method static string toRoute(\Illuminate\Routing\Route $route, $parameters, bool $absolute)
     * @see \Illuminate\Routing\UrlGenerator::action
     * @method static string action(array|string $action, $parameters = [], bool $absolute = true)
     * @see \Illuminate\Routing\UrlGenerator::getRequest
     * @method static \Illuminate\Http\Request getRequest()
     * @see \Illuminate\Routing\UrlGenerator::setKeyResolver
     * @method static \Illuminate\Routing\UrlGenerator setKeyResolver(callable $keyResolver)
     * @see \Illuminate\Routing\UrlGenerator::format
     * @method static string format(string $root, string $path, \Illuminate\Routing\Route|null $route = null)
     * @see \Illuminate\Routing\UrlGenerator::hasValidRelativeSignature
     * @method static bool hasValidRelativeSignature(\Illuminate\Http\Request $request, array $ignoreQuery = [])
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Routing\UrlGenerator::formatHostUsing
     * @method static \Illuminate\Routing\UrlGenerator formatHostUsing(\Closure $callback)
     * @see \Illuminate\Routing\UrlGenerator::route
     * @method static string route(string $name, $parameters = [], bool $absolute = true)
     * @see \Illuminate\Routing\UrlGenerator::forceRootUrl
     * @method static void forceRootUrl(null|string $root)
     * @see \Illuminate\Routing\UrlGenerator::defaults
     * @method static void defaults(array $defaults)
     * @see \Illuminate\Routing\UrlGenerator::formatParameters
     * @method static array formatParameters(array|mixed $parameters)
     * @see \Illuminate\Routing\UrlGenerator::signedRoute
     * @method static string signedRoute(string $name, $parameters = [], \DateInterval|\DateTimeInterface|int|null $expiration = null, bool $absolute = true)
     * @see \Illuminate\Routing\UrlGenerator::setRequest
     * @method static void setRequest(\Illuminate\Http\Request $request)
     * @see \Illuminate\Routing\UrlGenerator::isValidUrl
     * @method static bool isValidUrl(string $path)
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     * @see \Illuminate\Routing\UrlGenerator::full
     * @method static string full()
     * @see \Illuminate\Routing\UrlGenerator::getDefaultParameters
     * @method static array getDefaultParameters()
     * @see \Illuminate\Routing\UrlGenerator::withKeyResolver
     * @method static \Illuminate\Routing\UrlGenerator withKeyResolver(callable $keyResolver)
     * @see \Illuminate\Routing\UrlGenerator::pathFormatter
     * @method static \Closure pathFormatter()
     * @see \Illuminate\Routing\UrlGenerator::current
     * @method static string current()
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Routing\UrlGenerator::getRootControllerNamespace
     * @method static string getRootControllerNamespace()
     * @see \Illuminate\Routing\UrlGenerator::temporarySignedRoute
     * @method static string temporarySignedRoute(string $name, \DateInterval|\DateTimeInterface|int $expiration, array $parameters = [], bool $absolute = true)
     * @see \Illuminate\Routing\UrlGenerator::secureAsset
     * @method static string secureAsset(string $path)
     * @see \Illuminate\Routing\UrlGenerator::formatPathUsing
     * @method static \Illuminate\Routing\UrlGenerator formatPathUsing(\Closure $callback)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Routing\UrlGenerator::previous
     * @method static string previous($fallback = false)
     * @see \Illuminate\Routing\UrlGenerator::hasCorrectSignature
     * @method static bool hasCorrectSignature(\Illuminate\Http\Request $request, bool $absolute = true, array $ignoreQuery = [])
     * @see \Illuminate\Routing\UrlGenerator::forceScheme
     * @method static void forceScheme(null|string $scheme)
     * @see \Illuminate\Routing\UrlGenerator::setSessionResolver
     * @method static \Illuminate\Routing\UrlGenerator setSessionResolver(callable $sessionResolver)
     * @see \Illuminate\Routing\UrlGenerator::setRoutes
     * @method static \Illuminate\Routing\UrlGenerator setRoutes(\Illuminate\Routing\RouteCollectionInterface $routes)
     * @see \Illuminate\Routing\UrlGenerator::previousPath
     * @method static string previousPath($fallback = false)
     * @see \Illuminate\Routing\UrlGenerator::hasValidSignature
     * @method static bool hasValidSignature(\Illuminate\Http\Request $request, bool $absolute = true, array $ignoreQuery = [])
     * @see \Illuminate\Routing\UrlGenerator::assetFrom
     * @method static string assetFrom(string $root, string $path, bool|null $secure = null)
     * @see \Illuminate\Routing\UrlGenerator::setRootControllerNamespace
     * @method static \Illuminate\Routing\UrlGenerator setRootControllerNamespace(string $rootNamespace)
     * @see \Illuminate\Routing\UrlGenerator::to
     * @method static string to(string $path, $extra = [], bool|null $secure = null)
     * @see \Illuminate\Routing\UrlGenerator::asset
     * @method static string asset(string $path, bool|null $secure = null)
     */
    class URL {}

    /**
     * @see \Illuminate\Validation\Factory::resolver
     * @method static void resolver(\Closure $resolver)
     * @see \Illuminate\Validation\Factory::setPresenceVerifier
     * @method static void setPresenceVerifier(\Illuminate\Validation\PresenceVerifierInterface $presenceVerifier)
     * @see \Illuminate\Validation\Factory::replacer
     * @method static void replacer(string $rule, \Closure|string $replacer)
     * @see \Illuminate\Validation\Factory::extendImplicit
     * @method static void extendImplicit(string $rule, \Closure|string $extension, null|string $message = null)
     * @see \Illuminate\Validation\Factory::setContainer
     * @method static \Illuminate\Validation\Factory setContainer(\Illuminate\Contracts\Container\Container $container)
     * @see \Illuminate\Validation\Factory::extend
     * @method static void extend(string $rule, \Closure|string $extension, null|string $message = null)
     * @see \Illuminate\Validation\Factory::extendDependent
     * @method static void extendDependent(string $rule, \Closure|string $extension, null|string $message = null)
     * @see \Illuminate\Validation\Factory::includeUnvalidatedArrayKeys
     * @method static void includeUnvalidatedArrayKeys()
     * @see \Illuminate\Validation\Factory::getContainer
     * @method static \Illuminate\Contracts\Container\Container|null getContainer()
     * @see \Illuminate\Validation\Factory::getTranslator
     * @method static \Illuminate\Contracts\Translation\Translator getTranslator()
     * @see \Illuminate\Validation\Factory::excludeUnvalidatedArrayKeys
     * @method static void excludeUnvalidatedArrayKeys()
     * @see \Illuminate\Validation\Factory::make
     * @method static \Illuminate\Validation\Validator make(array $data, array $rules, array $messages = [], array $customAttributes = [])
     * @see \Illuminate\Validation\Factory::getPresenceVerifier
     * @method static \Illuminate\Validation\PresenceVerifierInterface getPresenceVerifier()
     * @see \Illuminate\Validation\Factory::validate
     * @method static array validate(array $data, array $rules, array $messages = [], array $customAttributes = [])
     */
    class Validator {}

    /**
     * @see \Illuminate\View\Concerns\ManagesLayouts::stopSection
     * @method static string stopSection(bool $overwrite = false)
     * @see \Illuminate\View\Concerns\ManagesFragments::getFragment
     * @method static mixed|null|string getFragment(string $name, null|string $default = null)
     * @see \Illuminate\View\Concerns\ManagesLayouts::getSections
     * @method static array getSections()
     * @see \Illuminate\View\Concerns\ManagesLayouts::yieldContent
     * @method static string yieldContent(string $section, string $default = '')
     * @see \Illuminate\View\Concerns\ManagesEvents::callComposer
     * @method static void callComposer(\Illuminate\Contracts\View\View $view)
     * @see \Illuminate\View\Concerns\ManagesTranslations::startTranslation
     * @method static void startTranslation(array $replacements = [])
     * @see \Illuminate\View\Concerns\ManagesLayouts::sectionMissing
     * @method static bool sectionMissing(string $name)
     * @see \Illuminate\View\Factory::replaceNamespace
     * @method static \Illuminate\View\Factory replaceNamespace(string $namespace, array|string $hints)
     * @see \Illuminate\View\Concerns\ManagesComponents::endSlot
     * @method static void endSlot()
     * @see \Illuminate\View\Factory::addNamespace
     * @method static \Illuminate\View\Factory addNamespace(string $namespace, array|string $hints)
     * @see \Illuminate\View\Concerns\ManagesComponents::startComponent
     * @method static void startComponent(\Closure|\Illuminate\Contracts\Support\Htmlable|\Illuminate\Contracts\View\View|string $view, array $data = [])
     * @see \Illuminate\View\Concerns\ManagesStacks::startPrepend
     * @method static void startPrepend(string $section, string $content = '')
     * @see \Illuminate\View\Factory::renderUnless
     * @method static string renderUnless(bool $condition, string $view, array|\Illuminate\Contracts\Support\Arrayable $data = [], array $mergeData = [])
     * @see \Illuminate\View\Concerns\ManagesStacks::flushStacks
     * @method static void flushStacks()
     * @see \Illuminate\View\Factory::addLocation
     * @method static void addLocation(string $location)
     * @see \Illuminate\View\Factory::incrementRender
     * @method static void incrementRender()
     * @see \Illuminate\View\Factory::flushFinderCache
     * @method static void flushFinderCache()
     * @see \Illuminate\View\Factory::decrementRender
     * @method static void decrementRender()
     * @see \Illuminate\View\Factory::getEngineFromPath
     * @method static \Illuminate\Contracts\View\Engine getEngineFromPath(string $path)
     * @see \Illuminate\View\Concerns\ManagesLoops::getLoopStack
     * @method static array getLoopStack()
     * @see \Illuminate\View\Concerns\ManagesFragments::getFragments
     * @method static array getFragments()
     * @see \Illuminate\View\Factory::shared
     * @method static mixed shared(string $key, $default = null)
     * @see \Illuminate\View\Concerns\ManagesComponents::renderComponent
     * @method static string renderComponent()
     * @see \Illuminate\View\Factory::hasRenderedOnce
     * @method static bool hasRenderedOnce(string $id)
     * @see \Illuminate\View\Factory::getFinder
     * @method static \Illuminate\View\ViewFinderInterface getFinder()
     * @see \Illuminate\View\Concerns\ManagesComponents::getConsumableComponentData
     * @method static mixed|null getConsumableComponentData(string $key, $default = null)
     * @see \Illuminate\View\Factory::doneRendering
     * @method static bool doneRendering()
     * @see \Illuminate\View\Concerns\ManagesLoops::addLoop
     * @method static void addLoop(array|\Countable $data)
     * @see \Illuminate\View\Concerns\ManagesLayouts::hasSection
     * @method static bool hasSection(string $name)
     * @see \Illuminate\View\Factory::flushStateIfDoneRendering
     * @method static void flushStateIfDoneRendering()
     * @see \Illuminate\View\Factory::file
     * @method static \Illuminate\Contracts\View\View file(string $path, array|\Illuminate\Contracts\Support\Arrayable $data = [], array $mergeData = [])
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\View\Factory::getDispatcher
     * @method static \Illuminate\Contracts\Events\Dispatcher getDispatcher()
     * @see \Illuminate\View\Factory::share
     * @method static mixed share(array|string $key, mixed|null $value = null)
     * @see \Illuminate\View\Concerns\ManagesStacks::startPush
     * @method static void startPush(string $section, string $content = '')
     * @see \Illuminate\View\Concerns\ManagesStacks::stopPush
     * @method static string stopPush()
     * @see \Illuminate\View\Concerns\ManagesEvents::creator
     * @method static array creator(array|string $views, \Closure|string $callback)
     * @see \Illuminate\View\Concerns\ManagesEvents::composer
     * @method static array composer(array|string $views, \Closure|string $callback)
     * @see \Illuminate\View\Concerns\ManagesTranslations::renderTranslation
     * @method static string renderTranslation()
     * @see \Illuminate\View\Factory::addExtension
     * @method static void addExtension(string $extension, string $engine, \Closure|null $resolver = null)
     * @see \Illuminate\View\Concerns\ManagesLayouts::startSection
     * @method static void startSection(string $section, null|string $content = null)
     * @see \Illuminate\View\Concerns\ManagesStacks::stopPrepend
     * @method static string stopPrepend()
     * @see \Illuminate\View\Factory::flushState
     * @method static void flushState()
     * @see \Illuminate\View\Factory::exists
     * @method static bool exists(string $view)
     * @see \Illuminate\View\Factory::first
     * @method static \Illuminate\Contracts\View\View first(array $views, array|\Illuminate\Contracts\Support\Arrayable $data = [], array $mergeData = [])
     * @see \Illuminate\View\Factory::getExtensions
     * @method static array|string[] getExtensions()
     * @see \Illuminate\View\Concerns\ManagesEvents::callCreator
     * @method static void callCreator(\Illuminate\Contracts\View\View $view)
     * @see \Illuminate\View\Factory::getEngineResolver
     * @method static \Illuminate\View\Engines\EngineResolver getEngineResolver()
     * @see \Illuminate\View\Factory::prependNamespace
     * @method static \Illuminate\View\Factory prependNamespace(string $namespace, array|string $hints)
     * @see \Illuminate\View\Concerns\ManagesFragments::stopFragment
     * @method static string stopFragment()
     * @see \Illuminate\View\Factory::setContainer
     * @method static void setContainer(\Illuminate\Contracts\Container\Container $container)
     * @see \Illuminate\View\Factory::getContainer
     * @method static \Illuminate\Contracts\Container\Container getContainer()
     * @see \Illuminate\View\Concerns\ManagesLoops::getLastLoop
     * @method static null|object|\stdClass getLastLoop()
     * @see \Illuminate\View\Factory::renderEach
     * @method static string renderEach(string $view, array $data, string $iterator, string $empty = 'raw|')
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\View\Concerns\ManagesLayouts::yieldSection
     * @method static string yieldSection()
     * @see \Illuminate\View\Concerns\ManagesLayouts::appendSection
     * @method static string appendSection()
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     * @see \Illuminate\View\Concerns\ManagesFragments::flushFragments
     * @method static void flushFragments()
     * @see \Illuminate\View\Concerns\ManagesEvents::composers
     * @method static array composers(array $composers)
     * @see \Illuminate\View\Factory::setDispatcher
     * @method static void setDispatcher(\Illuminate\Contracts\Events\Dispatcher $events)
     * @see \Illuminate\View\Concerns\ManagesLayouts::flushSections
     * @method static void flushSections()
     * @see \Illuminate\View\Concerns\ManagesLayouts::parentPlaceholder
     * @method static string parentPlaceholder(string $section = '')
     * @see \Illuminate\View\Concerns\ManagesComponents::slot
     * @method static void slot(string $name, null|string $content = null, array $attributes = [])
     * @see \Illuminate\View\Concerns\ManagesLayouts::getSection
     * @method static mixed|null|string getSection(string $name, null|string $default = null)
     * @see \Illuminate\View\Concerns\ManagesStacks::yieldPushContent
     * @method static string yieldPushContent(string $section, string $default = '')
     * @see \Illuminate\View\Concerns\ManagesComponents::startComponentFirst
     * @method static void startComponentFirst(array $names, array $data = [])
     * @see \Illuminate\View\Factory::make
     * @method static \Illuminate\Contracts\View\View make(string $view, array|\Illuminate\Contracts\Support\Arrayable $data = [], array $mergeData = [])
     * @see \Illuminate\View\Factory::markAsRenderedOnce
     * @method static void markAsRenderedOnce(string $id)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\View\Factory::renderWhen
     * @method static string renderWhen(bool $condition, string $view, array|\Illuminate\Contracts\Support\Arrayable $data = [], array $mergeData = [])
     * @see \Illuminate\View\Factory::getShared
     * @method static array getShared()
     * @see \Illuminate\View\Concerns\ManagesFragments::startFragment
     * @method static void startFragment(string $fragment)
     * @see \Illuminate\View\Concerns\ManagesLoops::incrementLoopIndices
     * @method static void incrementLoopIndices()
     * @see \Illuminate\View\Concerns\ManagesLoops::popLoop
     * @method static void popLoop()
     * @see \Illuminate\View\Factory::setFinder
     * @method static void setFinder(\Illuminate\View\ViewFinderInterface $finder)
     * @see \Illuminate\View\Concerns\ManagesLayouts::inject
     * @method static void inject(string $section, string $content)
     */
    class View {}

    /**
     * @see \Illuminate\Foundation\Vite::withEntryPoints
     * @method static \Illuminate\Foundation\Vite withEntryPoints(array $entryPoints)
     * @see \Illuminate\Foundation\Vite::useHotFile
     * @method static \Illuminate\Foundation\Vite useHotFile(string $path)
     * @see \Illuminate\Foundation\Vite::hotFile
     * @method static string hotFile()
     * @see \Illuminate\Foundation\Vite::cspNonce
     * @method static null|string cspNonce()
     * @see \Illuminate\Foundation\Vite::useCspNonce
     * @method static string useCspNonce(null|string $nonce = null)
     * @see \Illuminate\Foundation\Vite::useIntegrityKey
     * @method static \Illuminate\Foundation\Vite useIntegrityKey(false|string $key)
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Illuminate\Foundation\Vite::useManifestFilename
     * @method static \Illuminate\Foundation\Vite useManifestFilename(string $filename)
     * @see \Illuminate\Foundation\Vite::toHtml
     * @method static string toHtml()
     * @see \Illuminate\Foundation\Vite::preloadedAssets
     * @method static array preloadedAssets()
     * @see \Illuminate\Foundation\Vite::useStyleTagAttributes
     * @method static \Illuminate\Foundation\Vite useStyleTagAttributes(array|callable $attributes)
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Illuminate\Foundation\Vite::useScriptTagAttributes
     * @method static \Illuminate\Foundation\Vite useScriptTagAttributes(array|callable $attributes)
     * @see \Illuminate\Foundation\Vite::reactRefresh
     * @method static \Illuminate\Support\HtmlString|void reactRefresh()
     * @see \Illuminate\Foundation\Vite::useBuildDirectory
     * @method static \Illuminate\Foundation\Vite useBuildDirectory(string $path)
     * @see \Illuminate\Foundation\Vite::usePreloadTagAttributes
     * @method static \Illuminate\Foundation\Vite usePreloadTagAttributes(array|callable $attributes)
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Foundation\Vite::manifestHash
     * @method static null|string manifestHash($buildDirectory = null)
     * @see \Illuminate\Foundation\Vite::isRunningHot
     * @method static bool isRunningHot()
     * @see \Illuminate\Foundation\Vite::asset
     * @method static string asset(string $asset, null|string $buildDirectory = null)
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     */
    class Vite {}
}

namespace Laravel\Socialite\Facades {

    /**
     * @see \Laravel\Socialite\SocialiteManager::forgetDrivers
     * @method static \Laravel\Socialite\SocialiteManager forgetDrivers()
     * @see \Laravel\Socialite\SocialiteManager::setContainer
     * @method static \Laravel\Socialite\SocialiteManager setContainer(\Illuminate\Contracts\Container\Container $container)
     * @see \Illuminate\Support\Manager::extend
     * @method static \Illuminate\Support\Manager extend(string $driver, \Closure $callback)
     * @see \Laravel\Socialite\SocialiteManager::with
     * @method static mixed with(string $driver)
     * @see \Laravel\Socialite\SocialiteManager::formatConfig
     * @method static array formatConfig(array $config)
     * @see \Illuminate\Support\Manager::driver
     * @method static mixed driver(null|string $driver = null)
     * @see \Illuminate\Support\Manager::getContainer
     * @method static \Illuminate\Contracts\Container\Container getContainer()
     * @see \Laravel\Socialite\SocialiteManager::getDefaultDriver
     * @method static string getDefaultDriver()
     * @see \Laravel\Socialite\SocialiteManager::buildProvider
     * @method static \Laravel\Socialite\Two\AbstractProvider buildProvider(string $provider, array $config)
     * @see \Illuminate\Support\Manager::getDrivers
     * @method static array getDrivers()
     */
    class Socialite {}
}

namespace Spatie\LaravelIgnition\Facades {

    /**
     * @see \Spatie\FlareClient\Flare::applicationPath
     * @method static \Spatie\FlareClient\Flare applicationPath(string $applicationPath)
     * @see \Spatie\FlareClient\Flare::registerFlareHandlers
     * @method static \Spatie\FlareClient\Flare registerFlareHandlers()
     * @see \Spatie\FlareClient\Flare::sendTestReport
     * @method static void sendTestReport(\Throwable $throwable)
     * @see \Spatie\FlareClient\Flare::handleException
     * @method static void handleException(\Throwable $throwable)
     * @see \Spatie\FlareClient\Flare::setApiToken
     * @method static \Spatie\FlareClient\Flare setApiToken(string $apiToken)
     * @see \Spatie\FlareClient\Flare::registerExceptionHandler
     * @method static \Spatie\FlareClient\Flare registerExceptionHandler()
     * @see \Spatie\FlareClient\Flare::createReportFromMessage
     * @method static \Spatie\FlareClient\Report createReportFromMessage(string $message, string $logLevel)
     * @see \Spatie\FlareClient\Flare::determineVersionUsing
     * @method static \Spatie\FlareClient\Flare determineVersionUsing(callable $determineVersionCallable)
     * @see \Spatie\FlareClient\Flare::setContainer
     * @method static \Spatie\FlareClient\Flare setContainer(\Illuminate\Contracts\Container\Container $container)
     * @see \Spatie\FlareClient\Flare::reportMessage
     * @method static void reportMessage(string $message, string $logLevel, callable $callback = null)
     * @see \Spatie\FlareClient\Flare::registerMiddleware
     * @method static \Spatie\FlareClient\Flare registerMiddleware(\Spatie\FlareClient\FlareMiddleware\FlareMiddleware|\Spatie\FlareClient\FlareMiddleware\FlareMiddleware[] $middleware)
     * @see \Spatie\FlareClient\Flare::getMiddleware
     * @method static \Spatie\FlareClient\FlareMiddleware\FlareMiddleware[]|string[] getMiddleware()
     * @see \Spatie\FlareClient\Concerns\HasContext::messageLevel
     * @method static \Spatie\FlareClient\Concerns\HasContext|\Spatie\FlareClient\Flare|\Spatie\FlareClient\Report messageLevel(null|string $messageLevel)
     * @see \Spatie\FlareClient\Flare::reportErrorLevels
     * @method static \Spatie\FlareClient\Flare reportErrorLevels(int $reportErrorLevels)
     * @see \Spatie\FlareClient\Concerns\HasContext::context
     * @method static \Spatie\FlareClient\Concerns\HasContext|\Spatie\FlareClient\Flare|\Spatie\FlareClient\Report context(string $key, $value)
     * @see \Spatie\FlareClient\Flare::getMiddlewares
     * @method static \Spatie\FlareClient\FlareMiddleware\FlareMiddleware[]|string[] getMiddlewares()
     * @see \Spatie\FlareClient\Flare::make
     * @method static \Spatie\FlareClient\Flare make(string $apiKey = null, \Spatie\FlareClient\Context\ContextProviderDetector $contextDetector = null)
     * @see \Spatie\FlareClient\Concerns\HasContext::group
     * @method static \Spatie\FlareClient\Concerns\HasContext|\Spatie\FlareClient\Flare|\Spatie\FlareClient\Report group(string $groupName, array $properties)
     * @see \Spatie\FlareClient\Flare::setContextProviderDetector
     * @method static \Spatie\FlareClient\Flare setContextProviderDetector(\Spatie\FlareClient\Context\ContextProviderDetector $contextDetector)
     * @see \Spatie\FlareClient\Flare::filterExceptionsUsing
     * @method static \Spatie\FlareClient\Flare filterExceptionsUsing(callable $filterExceptionsCallable)
     * @see \Spatie\FlareClient\Flare::setStage
     * @method static \Spatie\FlareClient\Flare setStage(null|string $stage)
     * @see \Spatie\FlareClient\Flare::filterReportsUsing
     * @method static \Spatie\FlareClient\Flare filterReportsUsing(callable $filterReportsCallable)
     * @see \Spatie\FlareClient\Concerns\HasContext::getGroup
     * @method static mixed[] getGroup(string $groupName = 'context', $default = [])
     * @see \Spatie\FlareClient\Flare::createReport
     * @method static \Spatie\FlareClient\Report createReport(\Throwable $throwable)
     * @see \Spatie\FlareClient\Flare::version
     * @method static null|string version()
     * @see \Spatie\FlareClient\Flare::anonymizeIp
     * @method static \Spatie\FlareClient\Flare anonymizeIp()
     * @see \Spatie\FlareClient\Flare::setBaseUrl
     * @method static \Spatie\FlareClient\Flare setBaseUrl(string $baseUrl)
     * @see \Spatie\FlareClient\Flare::apiTokenSet
     * @method static bool apiTokenSet()
     * @see \Spatie\FlareClient\Flare::censorRequestBodyFields
     * @method static \Spatie\FlareClient\Flare censorRequestBodyFields(array $fieldNames)
     * @see \Spatie\FlareClient\Concerns\HasContext::stage
     * @method static \Spatie\FlareClient\Concerns\HasContext|\Spatie\FlareClient\Flare|\Spatie\FlareClient\Report stage(null|string $stage)
     * @see \Spatie\FlareClient\Flare::registerErrorHandler
     * @method static \Spatie\FlareClient\Flare registerErrorHandler()
     * @see \Spatie\FlareClient\Flare::handleError
     * @method static mixed handleError($code, string $message, string $file = '', int $line = 0)
     * @see \Spatie\FlareClient\Flare::report
     * @method static null|\Spatie\FlareClient\Report report(\Throwable $throwable, callable $callback = null, \Spatie\FlareClient\Report $report = null)
     * @see \Spatie\FlareClient\Flare::reset
     * @method static void reset()
     * @see \Spatie\FlareClient\Flare::glow
     * @method static \Spatie\FlareClient\Flare glow(string $name, string $messageLevel = MessageLevels::INFO, array $metaData = [])
     * @see \Spatie\FlareClient\Flare::sendReportsImmediately
     * @method static \Spatie\FlareClient\Flare sendReportsImmediately()
     */
    class Flare {}
}

namespace Yajra\DataTables\Facades {

    /**
     * @see \Illuminate\Support\Traits\Macroable::macro
     * @method static void macro(string $name, callable|object $macro)
     * @see \Yajra\DataTables\DataTables::resource
     * @method static \Yajra\DataTables\ApiResourceDataTable|\Yajra\DataTables\DataTableAbstract resource(array|\Illuminate\Http\Resources\Json\AnonymousResourceCollection $resource)
     * @see \Yajra\DataTables\DataTables::query
     * @method static \Yajra\DataTables\QueryDataTable query(\Illuminate\Contracts\Database\Query\Builder $builder)
     * @see \Yajra\DataTables\DataTables::validateDataTable
     * @method static void validateDataTable(string $engine, string $parent)
     * @see \Yajra\DataTables\DataTables::getConfig
     * @method static \Yajra\DataTables\Utilities\Config getConfig()
     * @see \Yajra\DataTables\DataTables::collection
     * @method static \Yajra\DataTables\CollectionDataTable collection(array|\Illuminate\Support\Collection $collection)
     * @see \Yajra\DataTables\DataTables::throwInvalidEngineException
     * @method static void throwInvalidEngineException(string $engine, string $parent)
     * @see \Yajra\DataTables\DataTables::eloquent
     * @method static \Yajra\DataTables\EloquentDataTable eloquent(\Illuminate\Contracts\Database\Eloquent\Builder $builder)
     * @see \Illuminate\Support\Traits\Macroable::mixin
     * @method static void mixin(object $mixin, bool $replace = true)
     * @see \Illuminate\Support\Traits\Macroable::hasMacro
     * @method static bool hasMacro(string $name)
     * @see \Yajra\DataTables\DataTables::of
     * @method static \Yajra\DataTables\DataTableAbstract of(object $source)
     * @see \Yajra\DataTables\DataTables::getHtmlBuilder
     * @method static \Yajra\DataTables\Html\Builder getHtmlBuilder()
     * @see \Yajra\DataTables\DataTables::getRequest
     * @method static \Yajra\DataTables\Utilities\Request getRequest()
     * @see \Yajra\DataTables\DataTables::make
     * @method static \Yajra\DataTables\DataTableAbstract make(object $source)
     * @see \Illuminate\Support\Traits\Macroable::flushMacros
     * @method static void flushMacros()
     */
    class DataTables {}
}

namespace {
    class Action extends Botble\Base\Facades\ActionFacade {}
    class AdminBar extends Botble\Theme\Facades\AdminBarFacade {}
    class App extends Illuminate\Support\Facades\App {}
    class Arr extends Illuminate\Support\Arr {}
    class Artisan extends Illuminate\Support\Facades\Artisan {}
    class Assets extends Botble\Base\Facades\AssetsFacade {}
    class Auth extends Illuminate\Support\Facades\Auth {}
    class BaseHelper extends Botble\Base\Facades\BaseHelperFacade {}
    class Blade extends Illuminate\Support\Facades\Blade {}
    class Breadcrumbs extends Botble\Base\Facades\BreadcrumbsFacade {}
    class Broadcast extends Illuminate\Support\Facades\Broadcast {}
    class Bus extends Illuminate\Support\Facades\Bus {}
    class Cache extends Illuminate\Support\Facades\Cache {}
    class Config extends Illuminate\Support\Facades\Config {}
    class Cookie extends Illuminate\Support\Facades\Cookie {}
    class Crypt extends Illuminate\Support\Facades\Crypt {}
    class DB extends Illuminate\Support\Facades\DB {}
    class DataTables extends Yajra\DataTables\Facades\DataTables {}
    class Date extends Illuminate\Support\Facades\Date {}
    class Debugbar extends Barryvdh\Debugbar\Facades\Debugbar {}
    class Eloquent extends Illuminate\Database\Eloquent\Model {}
    class EmailHandler extends Botble\Base\Facades\EmailHandlerFacade {}
    class Event extends Illuminate\Support\Facades\Event {}
    class Excel extends Maatwebsite\Excel\Facades\Excel {}
    class File extends Illuminate\Support\Facades\File {}
    class Filter extends Botble\Base\Facades\FilterFacade {}
    class Flare extends Spatie\LaravelIgnition\Facades\Flare {}
    class Form extends Collective\Html\FormFacade {}
    class FormBuilder extends Kris\LaravelFormBuilder\Facades\FormBuilder {}
    class Gate extends Illuminate\Support\Facades\Gate {}
    class Hash extends Illuminate\Support\Facades\Hash {}
    class Html extends Collective\Html\HtmlFacade {}
    class Http extends Illuminate\Support\Facades\Http {}
    class Image extends Intervention\Image\Facades\Image {}
    class Js extends Illuminate\Support\Js {}
    class JsValidator extends Botble\JsValidation\Facades\JsValidatorFacade {}
    class Lang extends Illuminate\Support\Facades\Lang {}
    class Log extends Illuminate\Support\Facades\Log {}
    class MacroableModels extends Botble\Base\Facades\MacroableModelsFacade {}
    class Mail extends Illuminate\Support\Facades\Mail {}
    class Menu extends Botble\Menu\Facades\MenuFacade {}
    class MetaBox extends Botble\Base\Facades\MetaBoxFacade {}
    class Mollie extends Mollie\Laravel\Facades\Mollie {}
    class Newsletter extends Spatie\Newsletter\NewsletterFacade {}
    class Notification extends Illuminate\Support\Facades\Notification {}
    class PDF extends Barryvdh\DomPDF\Facade\Pdf {}
    class Password extends Illuminate\Support\Facades\Password {}
    class Paystack extends Unicodeveloper\Paystack\Facades\Paystack {}
    class Pdf extends Barryvdh\DomPDF\Facade\Pdf {}
    class Purifier extends Mews\Purifier\Facades\Purifier {}
    class Queue extends Illuminate\Support\Facades\Queue {}
    class RateLimiter extends Illuminate\Support\Facades\RateLimiter {}
    class Redirect extends Illuminate\Support\Facades\Redirect {}
    class Request extends Illuminate\Support\Facades\Request {}
    class Response extends Illuminate\Support\Facades\Response {}
    class Route extends Illuminate\Support\Facades\Route {}
    class Schema extends Illuminate\Support\Facades\Schema {}
    class SeoHelper extends Botble\SeoHelper\Facades\SeoHelperFacade {}
    class Session extends Illuminate\Support\Facades\Session {}
    class SiteMapManager extends Botble\Theme\Facades\SiteMapManagerFacade {}
    class SlugHelper extends Botble\Slug\Facades\SlugHelperFacade {}
    class Socialite extends Laravel\Socialite\Facades\Socialite {}
    class Storage extends Illuminate\Support\Facades\Storage {}
    class Str extends Illuminate\Support\Str {}
    class Theme extends Botble\Theme\Facades\ThemeFacade {}
    class ThemeManager extends Botble\Theme\Facades\ManagerFacade {}
    class ThemeOption extends Botble\Theme\Facades\ThemeOptionFacade {}
    class URL extends Illuminate\Support\Facades\URL {}
    class Validator extends Illuminate\Support\Facades\Validator {}
    class View extends Illuminate\Support\Facades\View {}
    class Vite extends Illuminate\Support\Facades\Vite {}
    class Widget extends Botble\Widget\Facades\WidgetFacade {}
    class WidgetGroup extends Botble\Widget\Facades\WidgetGroupFacade {}
}
