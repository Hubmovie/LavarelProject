<?php

namespace Botble\Ecommerce\Http\Requests;

use Botble\Ecommerce\Enums\ShippingMethodEnum;
use Botble\Payment\Enums\PaymentMethodEnum;
use Botble\Support\Http\Requests\Request;
use Cart;
use EcommerceHelper;
use Illuminate\Support\Arr;
use Illuminate\Validation\Rule;

class CheckoutRequest extends Request
{
    public function rules(): array
    {
        $paymentMethods = Arr::where(PaymentMethodEnum::values(), function ($value) {
            return get_payment_setting('status', $value) == 1;
        });

        $rules = [
            'payment_method' => 'required|' . Rule::in($paymentMethods),
            'amount' => 'required|min:0',
        ];

        $products = Cart::instance('cart')->products();
        if (EcommerceHelper::isAvailableShipping($products)) {
            $rules['shipping_method'] = 'required|' . Rule::in(ShippingMethodEnum::values());
            $rules['address.address_id'] = 'required_without:address.name';
            if (! $this->has('address.address_id') || $this->input('address.address_id') === 'new') {
                $rules = array_merge($rules, EcommerceHelper::getCustomerAddressValidationRules('address.'));
            }

            if ($this->input('create_account') == 1) {
                $rules['password'] = 'required|min:6';
                $rules['password_confirmation'] = 'required|same:password';
                $rules['address.email'] = 'required|max:60|min:6|email|unique:ec_customers,email';
                $rules['address.name'] = 'required|min:3|max:120';
            }
        }

        return apply_filters(PROCESS_CHECKOUT_RULES_REQUEST_ECOMMERCE, $rules);
    }

    public function messages(): array
    {
        return apply_filters(PROCESS_CHECKOUT_MESSAGES_REQUEST_ECOMMERCE, [
            'address.name.required' => trans('plugins/ecommerce::order.address_name_required'),
            'address.phone.required' => trans('plugins/ecommerce::order.address_phone_required'),
            'address.email.required' => trans('plugins/ecommerce::order.address_email_required'),
            'address.email.unique' => trans('plugins/ecommerce::order.address_email_unique'),
            'address.state.required' => trans('plugins/ecommerce::order.address_state_required'),
            'address.city.required' => trans('plugins/ecommerce::order.address_city_required'),
            'address.country.required' => trans('plugins/ecommerce::order.address_country_required'),
            'address.address.required' => trans('plugins/ecommerce::order.address_address_required'),
            'address.zip_code.required' => trans('plugins/ecommerce::order.address_zipcode_required'),
        ]);
    }

    public function attributes(): array
    {
        return [
            'address.name' => __('Name'),
            'address.phone' => __('Phone'),
            'address.email' => __('Email'),
            'address.state' => __('State'),
            'address.city' => __('City'),
            'address.country' => __('Country'),
            'address.address' => __('Address'),
            'address.zip_code' => __('Zipcode'),
        ];
    }
}
