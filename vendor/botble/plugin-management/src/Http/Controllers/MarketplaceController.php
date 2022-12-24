<?php

namespace Botble\PluginManagement\Http\Controllers;

use Assets;
use Botble\Base\Supports\MarketplaceService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;

class MarketplaceController extends Controller
{
    public function index()
    {
        page_title()->setTitle(trans('packages/plugin-management::plugin.plugins_add_new'));

        Assets::addScriptsDirectly('vendor/core/packages/plugin-management/js/marketplace.js')
            ->usingVueJS();

        return view('packages/plugin-management::marketplace.index');
    }

    public function list(Request $request, MarketplaceService $marketplaceService)
    {
        $request->merge([
            'type' => 'plugin',
            'per_page' => 12,
        ]);

        $response = $marketplaceService->callApi('get', '/products', $request->input());

        if ($response instanceof JsonResponse) {
            return $response;
        }

        return $response->json();
    }

    public function detail(string $id, MarketplaceService $marketplaceService)
    {
        $response = $marketplaceService->callApi('get', '/products/' . $id);

        if ($response instanceof JsonResponse) {
            return $response;
        }

        return $response->json();
    }

    public function iframe(string $id, MarketplaceService $marketplaceService)
    {
        $response = $marketplaceService->callApi('get', '/products/' . $id . '/iframe');

        if ($response instanceof JsonResponse) {
            return $response;
        }

        return $response->body();
    }

    public function install(string $id, MarketplaceService $marketplaceService): JsonResponse
    {
        $detail = $this->detail($id, $marketplaceService);

        $name = Str::afterLast($detail['data']['package_name'], '/');

        return $marketplaceService->beginInstall($id, 'plugin', $name);
    }
}
