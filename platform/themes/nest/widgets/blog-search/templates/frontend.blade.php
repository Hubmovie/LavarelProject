@if (is_plugin_active('blog'))
    <div class="sidebar-widget-2 widget_search mb-50">
        <div class="search-form">
            <form action="{{ route('public.search') }}" method="GET">
                <input type="text" name="q" value="{{ request()->query('q') }}" placeholder="{{ __('Search...') }}">
                <button type="submit"><i class="fi-rs-search"></i></button>
            </form>
        </div>
    </div>
@endif
