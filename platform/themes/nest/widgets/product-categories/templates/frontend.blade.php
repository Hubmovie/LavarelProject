@if (is_plugin_active('ecommerce'))
    <div class="sidebar-widget widget-category-2 mb-30">
        <h5 class="section-title style-1 mb-30">{{ $config['name'] }}</h5>
        <ul>
            @foreach(get_featured_product_categories(['take' => $config['number_display'], 'withCount' => ['products'], 'with' => ['slugable', 'metadata']]) as $category)
                <li>
                    <a href="{{ $category->url }}">
                        <img src="{{ RvMedia::getImageUrl($category->getMetaData('icon_image', true), null, false, RvMedia::getDefaultImage()), }}" alt="{{ $category->name }}" />{{ $category->name }}
                    </a>
                    <span class="count">{{ $category->products_count }}</span>
                </li>
            @endforeach
        </ul>
    </div>
@endif
