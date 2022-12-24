@if (is_plugin_active('simple-slider') && $config['slider_key'])
    @php
        $slider = app(Botble\SimpleSlider\Repositories\Interfaces\SimpleSliderInterface::class)->getFirstBy(['key' => $config['slider_key']]);
    @endphp
    @if ($slider && $slider->sliderItems && $slider->sliderItems->count())
        <div class="sidebar-widget widget_instagram mb-50">
            <h5 class="section-title style-1 mb-30">{{ $config['name'] }}</h5>
            <div class="instagram-gellay">
                <ul class="insta-feed img-popup">
                    @foreach ($slider->sliderItems as $item)
                        <li href="{{ RvMedia::getImageUrl($item->image) }}">
                            <a href="{{ RvMedia::getImageUrl($item->image) }}"><img class="border-radius-5" src="{{ RvMedia::getImageUrl($item->image) }}" alt="{{ $item->name ?: $slider->name }}" /></a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
@endif
