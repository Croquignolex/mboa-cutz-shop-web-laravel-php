<div class="col-md-4 sidebar ftco-animate">
    {{-- Article categories area --}}
    <div class="sidebar-box ftco-animate">
        <div class="categories">
            <h3>@lang('general.categories')</h3>
            @foreach($categories as $category)
                <li><a href="#">{{ $category->name }} <span>({{ $category->articles->count() }})</span></a></li>
            @endforeach
        </div>
    </div>

    {{-- Article tags area --}}
    <div class="sidebar-box ftco-animate">
        <h3>@lang('general.tags')</h3>
        <div class="tagcloud">
            @foreach($tags as $tag)
                <a href="#" class="tag-cloud-link">{{ $tag->name }} ({{ $tag->articles->count() }})</a>
            @endforeach
        </div>
    </div>

    {{-- Related articles area --}}
    <div class="sidebar-box ftco-animate">
        <h3>@lang('general.related_articles')</h3>
        @foreach($article->related as $article)
            @include('partials.articles.article-card-mini', compact('article'))
        @endforeach
    </div>
</div>