<div style="margin-bottom: 20px;">
    <label>{{ __('Availability') }}: </label>
    <span class="number-items-available">
        @if ($product->isOutOfStock())
            <span class="text-danger">{{ __('Out of stock') }}</span>
        @else
            @if (!$productVariation)
                <span class="text-secondary">{{ __('Not available') }}</span>
            @else
                @if ($productVariation->isOutOfStock())
                    <span class="text-danger">{{ __('Out of stock') }}</span>
                @elseif  (!$productVariation->with_storehouse_management || $productVariation->quantity < 1)
                    {!! BaseHelper::clean($productVariation->stock_status_html) !!}
                @elseif ($productVariation->quantity)
                    @if (EcommerceHelper::showNumberOfProductsInProductSingle())
                        <span class="text-success">
                            @if ($productVariation->quantity != 1)
                                    {{ __(':number products available', ['number' => $productVariation->quantity]) }}
                            @else
                                {{ __(':number product available', ['number' => $productVariation->quantity]) }}
                            @endif
                        </span>
                    @else
                        <span class="text-success">{{ __('In stock') }}</span>
                    @endif
                @endif
            @endif
        @endif
    </span>
</div>

