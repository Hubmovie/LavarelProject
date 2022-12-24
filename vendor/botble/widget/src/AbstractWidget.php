<?php

namespace Botble\Widget;

use Botble\Widget\Repositories\Interfaces\WidgetInterface;
use Illuminate\Support\Collection;
use Theme;

abstract class AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * @var string
     */
    protected $frontendTemplate = 'frontend';

    /**
     * @var string
     */
    protected $backendTemplate = 'backend';

    /**
     * @var string
     */
    protected $widgetDirectory;

    /**
     * @var bool
     */
    protected $isCore = false;

    /**
     * @var WidgetInterface
     */
    protected mixed $widgetRepository;

    protected ?string $theme = null;

    protected Collection|array $data = [];

    protected bool $loaded = false;

    public function __construct(array $config = [])
    {
        foreach ($config as $key => $value) {
            $this->config[$key] = $value;
        }

        $this->widgetRepository = app(WidgetInterface::class);
    }

    public function getConfig(): array
    {
        return $this->config;
    }

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $widgetGroup = app('botble.widget-group-collection');
        $widgetGroup->load();
        $widgetGroupData = $widgetGroup->getData();

        Theme::uses(Theme::getThemeName());
        $args = func_get_args();
        $data = $widgetGroupData
            ->where('widget_id', $this->getId())
            ->where('sidebar_id', $args[0])
            ->where('position', $args[1])
            ->first();

        if (! empty($data)) {
            $this->config = array_merge($this->config, $data->data);
        }

        if (! $this->isCore) {
            return Theme::loadPartial(
                $this->frontendTemplate,
                Theme::getThemeNamespace('/../widgets/' . $this->widgetDirectory . '/templates'),
                [
                    'config' => $this->config,
                    'sidebar' => $args[0],
                ]
            );
        }

        return view($this->frontendTemplate, [
            'config' => $this->config,
            'sidebar' => $args[0],
        ]);
    }

    public function getId(): string
    {
        return get_class($this);
    }

    public function form(?string $sidebarId = null, int $position = 0)
    {
        Theme::uses(Theme::getThemeName());
        if (! empty($sidebarId)) {
            $widgetGroup = app('botble.widget-group-collection');
            $widgetGroup->load();
            $widgetGroupData = $widgetGroup->getData();

            $data = $widgetGroupData
                ->where('widget_id', $this->getId())
                ->where('sidebar_id', $sidebarId)
                ->where('position', $position)
                ->first();

            if (! empty($data)) {
                $this->config = array_merge($this->config, $data->data);
            }
        }

        if (! $this->isCore) {
            return Theme::loadPartial(
                $this->backendTemplate,
                Theme::getThemeNamespace('/../widgets/' . $this->widgetDirectory . '/templates'),
                [
                    'config' => $this->config,
                ]
            );
        }

        return view($this->backendTemplate, [
            'config' => $this->config,
        ]);
    }
}
