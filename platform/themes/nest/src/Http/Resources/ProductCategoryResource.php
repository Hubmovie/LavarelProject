<?php

namespace Theme\Nest\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Arr;
use RvMedia;

class ProductCategoryResource extends JsonResource
{
    /**
     * @var array
     */
    public static $params = [];

    /**
     * Create a new anonymous resource collection.
     *
     * @param mixed $resource
     * @param array $data
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public static function collection($resource, $data = [])
    {
        static::$params = $data;

        return parent::collection($resource);
    }

    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        $defaultImage = RvMedia::getDefaultImage();

        if (Arr::get(static::$params, 'simple')) {
            return [
                'id' => $this->id,
                'name' => $this->name,
                'url' => $this->url,
                'icon_image' => RvMedia::getImageUrl($this->getMetaData('icon_image', true), null, false, $defaultImage),
            ];
        }

        return [
            'id' => $this->id,
            'name' => $this->name,
            'url' => $this->url,
            'image' => RvMedia::getImageUrl($this->image, null, false, $defaultImage),
            'thumbnail' => RvMedia::getImageUrl($this->image, 'product-thumb', false, $defaultImage),
            'products_count_text' => __(':count items', ['count' => $this->products_count]),
            'background_color' => $this->getMetaData('background_color', true),
        ];
    }
}
