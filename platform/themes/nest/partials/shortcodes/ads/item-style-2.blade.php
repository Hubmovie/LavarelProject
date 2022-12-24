<div class="banner-img style-6 wow animate__animated animate__fadeInUp {{ $class ?? '' }}" @if (!empty($loop)) data-wow-delay="{{ $loop->iteration * 2 / 10 }}" @endif>
    <img src="{{ RvMedia::getImageUrl($ads->image) }}" alt="{{ $ads->name }}">
    <div class="banner-text">
        <h6 class="mb-10 mt-30">{!! BaseHelper::clean(nl2br($ads->getMetaData('subtitle', true) ?: '')) !!}</h6>
        @if ($buttonText = $ads->getMetaData('button_text', true))
            @if ($ads->url)
                <a href="{{ route('public.ads-click', $ads->key) }}" class="btn btn-xs">
                    {{ $buttonText }} <i class="fi-rs-arrow-small-right"></i>
                </a>
            @else
                <p>{{ $buttonText }}</p>
            @endif
        @endif
    </div>
</div>
