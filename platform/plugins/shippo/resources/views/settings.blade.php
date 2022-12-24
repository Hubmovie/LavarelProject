@php
    $status = setting('shipping_shippo_status', 0);
    $testKey = setting('shipping_shippo_test_key') ?: '';
    $prodKey = setting('shipping_shippo_production_key') ?: '';
    $test = setting('shipping_shippo_sandbox', 1) ?: 0;
    $logging = setting('shipping_shippo_logging', 1) ?: 0;
    $webhook = setting('shipping_shippo_webhooks', 1) ?: 0;
@endphp
<table class="table mt-4 bg-white">
    <tbody>
        <tr class="border-pay-row">
            <td class="border-pay-col">
                <i class="fas fa-shipping-fast"></i>
            </td>
            <td style="width: 20%;">
                <img class="filter-black" src="{{ url('vendor/core/plugins/shippo/images/logo-dark.svg') }}" alt="Shippo">
            </td>
            <td class="border-right">
                <ul>
                    <li>
                        <a href="https://goshippo.com/" target="_blank">Shippo</a>
                        <p>{{ trans('plugins/shippo::shippo.description') }}</p>
                    </li>
                </ul>
            </td>
        </tr>
        <tr class="bg-white">
            <td colspan="3">
                <div class="float-start" style="margin-top: 5px;">
                    <div class="payment-name-label-group  @if ($status == 0) d-none @endif">
                        <span class="payment-note v-a-t">{{ trans('plugins/payment::payment.use') }}:</span>
                        <label class="ws-nm inline-display method-name-label">Shippo</label>
                    </div>
                </div>
                <div class="float-end">
                    <a class="btn btn-secondary" data-bs-toggle="collapse"
                        href="#collapse-shipping-method-shippo" role="button" aria-expanded="false"
                        aria-controls="collapse-shipping-method-shippo">
                        @if ($status == 0) {{ trans('core/base::forms.edit') }} @else {{ trans('core/base::layouts.settings') }} @endif
                    </a>
                </div>
            </td>
        </tr>
        <tr class="collapse" id="collapse-shipping-method-shippo">
            <td class="border-left" colspan="3">
                {!! Form::open(['route' => 'ecommerce.shipments.shippo.settings.update']) !!}
                    <div class="row">
                        <div class="col-sm-6">
                            <ul>

                                <li>
                                    <div class="alert alert-warning">
                                        <h5 class="text-danger">{{ trans('plugins/shippo::shippo.note_0') }}</h5>
                                        <ul class="ps-3">
                                            <li style="list-style-type: circle;">
                                                <span>{!! BaseHelper::clean(trans('plugins/shippo::shippo.note_1', ['link' => 'https://docs.botble.com/farmart/1.x/usage-location'])) !!}</span>
                                            </li>
                                            <li style="list-style-type: circle;">
                                                <span>{{ trans('plugins/shippo::shippo.note_2') }}</span>
                                            </li>
                                            <li style="list-style-type: circle;">
                                                <span>{!! BaseHelper::clean(trans('plugins/shippo::shippo.note_3', ['link' => route('ecommerce.settings')])) !!}</span>
                                            </li>
                                            <li style="list-style-type: circle;">
                                                <span>{!! BaseHelper::clean(trans('plugins/shippo::shippo.note_6', ['link' => 'https://goshippo.com/docs/reference#parcels-extras'])) !!}</span>
                                            </li>
                                            @if (is_plugin_active('marketplace'))
                                                <li style="list-style-type: circle;">
                                                    <span>{{ trans('plugins/shippo::shippo.note_4') }}</span>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <label>{{ trans('plugins/shippo::shippo.configuration_instruction', ['name' => 'Shippo']) }}</label>
                                </li>
                                <li class="text-secondary">
                                    <p>{{ trans('plugins/shippo::shippo.configuration_requirement', ['name' => 'Shippo']) }}:</p>
                                    <ul class="ms-3 ps-2">
                                        <li style="list-style-type: decimal">
                                            <p>
                                                <a href="https://apps.goshippo.com/join" target="_blank">
                                                    {{ trans('plugins/shippo::shippo.service_registration', ['name' => 'Shippo']) }}
                                                </a>
                                            </p>
                                        </li>
                                        <li style="list-style-type: decimal">
                                            <p>{{ trans('plugins/shippo::shippo.after_service_registration_msg', ['name' => 'Shippo']) }}</p>
                                        </li>
                                        <li style="list-style-type: decimal">
                                            <p>{{ trans('plugins/shippo::shippo.enter_api_key') }}</p>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <div class="well">
                                <p class="text-secondary">
                                    {{ trans('plugins/shippo::shippo.please_provide_information') }}
                                    <a target="_blank" href="https://goshippo.com/">Shippo</a>:
                                </p>
                                <div class="form-group mb-3">
                                    <label class="control-label" for="shipping_shippo_test_key">{{ trans('plugins/shippo::shippo.test_api_token') }}</label>
                                    <input type="text" class="form-control" placeholder="<API-KEY>" id="shipping_shippo_test_key"
                                        name="shipping_shippo_test_key"
                                        @env('demo') disabled value="{{ Str::mask($testKey, '*', 10) }}" @else value="{{ $testKey }}" @endenv>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="control-label" for="shipping_shippo_production_key">{{ trans('plugins/shippo::shippo.live_api_token') }}</label>
                                    <div class="input-option">
                                        <input type="text" class="form-control" placeholder="<API-KEY>" id="shipping_shippo_production_key"
                                            name="shipping_shippo_production_key"
                                            @env('demo') disabled value="{{ Str::mask($prodKey, '*', 10) }}" @else value="{{ $prodKey }}" @endenv>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="control-label" for="shipping_shippo_sandbox">
                                        {!! Form::onOff('shipping_shippo_sandbox', $test) !!}
                                        {{ trans('plugins/shippo::shippo.sandbox_mode') }}
                                    </label>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="control-label" for="shipping_shippo_status">
                                        {!! Form::onOff('shipping_shippo_status', $status) !!}
                                        {{ trans('plugins/shippo::shippo.activate') }}
                                    </label>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="control-label" for="shipping_shippo_logging">
                                        {!! Form::onOff('shipping_shippo_logging', $logging) !!}
                                        {{ trans('plugins/shippo::shippo.logging') }}
                                    </label>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="control-label" for="shipping_shippo_webhooks">
                                        {!! Form::onOff('shipping_shippo_webhooks', $webhook) !!}
                                        {{ trans('plugins/shippo::shippo.webhooks') }}
                                    </label>
                                    <div class="help-block">
                                        <a href="https://goshippo.com/docs/webhooks" target="_blank" rel="noopener noreferrer" class="text-warning fw-bold">
                                            <span>Webhooks</span>
                                            <i class="fas fa-external-link-alt"></i>
                                        </a>
                                        <div>URL: <i>{{ route('shippo.webhooks', ['_token' => '__API_TOKEN__']) }}</i></div>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="control-label" for="shipping_shippo_validate">
                                        {!! Form::checkbox('shipping_shippo_validate', 1) !!}
                                        {{ trans('plugins/shippo::shippo.check_validate_token') }}
                                    </label>
                                </div>
                            </div>
                            @env('demo')
                                <div class="col-12">
                                    <div class="alert alert-warning">
                                        <strong>{{ trans('plugins/shippo::shippo.disabled_in_demo_mode') }}</strong>
                                    </div>
                                </div>
                            @else
                                <div class="col-12 text-end">
                                    <button class="btn btn-info" type="submit">{{ trans('core/base::forms.update') }}</button>
                                </div>
                            @endif
                        </div>
                    </div>
                {!! Form::close() !!}
            </td>
        </tr>
    </tbody>
</table>
