@if (!empty($big))
    <div class="page-header mt-30 mb-75">
        <div class="container">
            <div class="archive-header" @if (!empty($background)) style="background-image: url({{ RvMedia::getImageUrl($background) }})" @endif>
                <div class="row align-items-center">
                    <div class="col-xl-3">
                        <h1 class="mb-15">{{ SeoHelper::getTitle() }}</h1>
                        <div class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
                            @foreach ($crumbs = Theme::breadcrumb()->getCrumbs() as $i => $crumb)
                                @if ($i != (count($crumbs) - 1))
                                    <div itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="breadcrumb-item d-inline-block">
                                        <a href="{{ $crumb['url'] }}" itemprop="item" title="{{ $crumb['label'] }}">
                                            {{ $crumb['label'] }}
                                            <meta itemprop="name" content="{{ $crumb['label'] }}" />
                                        </a>
                                        <meta itemprop="position" content="{{ $i + 1}}" />
                                    </div>
                                    <span></span>
                                @else
                                    <div class="breadcrumb-item d-inline-block active" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                        {!! $crumb['label'] !!}
                                        <meta itemprop="name" content="{{ $crumb['label'] }}" />
                                        <meta itemprop="position" content="{{ $i + 1}}" />
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
                @foreach ($crumbs = Theme::breadcrumb()->getCrumbs() as $i => $crumb)
                    @if ($i != (count($crumbs) - 1))
                        <div itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumb-item d-inline-block">
                            <a href="{{ $crumb['url'] }}" itemprop="item" title="{{ $crumb['label'] }}">
                                {{ $crumb['label'] }}
                                <meta itemprop="name" content="{{ $crumb['label'] }}" />
                            </a>
                            <meta itemprop="position" content="{{ $i + 1}}" />
                        </div>
                        <span></span>
                    @else
                        <div class="breadcrumb-item d-inline-block active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            {!! $crumb['label'] !!}
                            <meta itemprop="name" content="{{ $crumb['label'] }}" />
                            <meta itemprop="position" content="{{ $i + 1}}" />
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endif
