@if (is_plugin_active('ecommerce'))
    @php
        $products = get_trending_products([
            'take'      => (int) $config['number_display'] ?: 4,
            'with'      => ['slugable'],
        ] + EcommerceHelper::withReviewsParams());
    @endphp
    @if ($products->count())
        <div class="sidebar-widget product-sidebar mb-50 p-30 bg-grey border-radius-10">
            <h5 class="section-title style-1 mb-30">{{ $config['name'] }}</h5>
            @foreach ($products as $product)
                <div class="single-post clearfix">
                    <div class="image">
                        <img src="{{ RvMedia::getImageUrl($product->image, 'product-thumb', false, RvMedia::getDefaultImage()) }}" alt="{{ $product->name }}">
                    </div>
                    <div class="content pt-10">
                        <h5><a href="{{ $product->url }}">{{ $product->name }}</a></h5>
                        <p class="price mb-0 mt-5">{{ format_price($product->front_sale_price_with_taxes) }}</p>
                        @if (EcommerceHelper::isReviewEnabled() && $product->reviews_count)
                            <div class="product-rate">
                                <div class="product-rating" style="width: {{ $product->reviews_avg * 20 }}%"></div>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endif
