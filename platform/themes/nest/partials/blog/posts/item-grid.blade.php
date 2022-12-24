<article class="col-xl-4 col-lg-6 col-md-6 text-center hover-up mb-30 animated">
    <div class="post-thumb">
        <a href="{{ $post->url }}">
            <img class="border-radius-15" src="{{ RvMedia::getImageUrl($post->image, 'medium', false, RvMedia::getDefaultImage()) }}" alt="{{ $post->name }}" />
        </a>
    </div>
    <div class="entry-content-2">
        @if ($post->first_category->name)
            <h6 class="mb-10 font-sm">
                <a class="entry-meta text-muted" href="{{ $post->first_category->url }}">{{ $post->first_category->name }}</a>
            </h6>
        @endif
        <h4 class="post-title mb-15">
            <a href="{{ $post->url }}">{{ $post->name }}</a>
        </h4>
        <div class="entry-meta font-xs color-grey mt-10 pb-10">
            <div>
                <span class="post-on mr-10">{{ $post->created_at->translatedFormat('d M Y') }}</span>
                <span class="hit-count has-dot mr-10">{{ __(':count Views', ['count' => number_format($post->views)]) }}</span>
            </div>
        </div>
    </div>
</article>
