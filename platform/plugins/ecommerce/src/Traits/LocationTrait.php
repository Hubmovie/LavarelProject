<?php

namespace Botble\Ecommerce\Traits;

use Botble\Location\Repositories\Interfaces\CityInterface;
use Botble\Location\Repositories\Interfaces\StateInterface;
use EcommerceHelper;

/**
 * @mixin \Eloquent
 */
trait LocationTrait
{
    public function getCountryNameAttribute(): ?string
    {
        return EcommerceHelper::getCountryNameById($this->country);
    }

    public function getStateNameAttribute(): ?string
    {
        $value = $this->state;

        if (! $value || ! is_plugin_active('location')) {
            return $value;
        }

        if (is_numeric($value)) {
            $stateName = app(StateInterface::class)->getModel()
                ->where('id', $value)
                ->value('name');

            if ($stateName) {
                return $stateName;
            }
        }

        return $value;
    }

    public function getCityNameAttribute(): ?string
    {
        $value = $this->city;

        if (! $value || ! is_plugin_active('location')) {
            return $value;
        }

        if (is_numeric($value)) {
            $cityName = app(CityInterface::class)->getModel()->where('id', $value)->value('name');

            if ($cityName) {
                return $cityName;
            }
        }

        return $value;
    }

    public function getFullAddressAttribute(): string
    {
        return ($this->address ? $this->address . ', ' : null) .
            $this->city_name . ', ' .
            $this->state_name . ', ' .
            $this->country_name .
            (EcommerceHelper::isZipCodeEnabled() && $this->zip_code ? ', ' . $this->zip_code : '');
    }
}
