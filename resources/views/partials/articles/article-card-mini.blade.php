<div class="block-21 mb-4 d-flex">
    <a class="blog-img mr-4" href="{{ locale_route('articles.show', compact('article')) }}">
        <img src="{{ $article->image_src }}" alt="...">
    </a>
    <div class="text">
        <h3 class="heading">
            <a href="{{ locale_route('articles.show', compact('article')) }}">
                {{ text_format($article->name, 20) }}
            </a>
        </h3>
        <div class="meta">
            <div><span class="icon-calendar"></span> {{ $article->short_creation_date }}</div>
            <div><span class="icon-chat"></span> {{ $article->comments->count() }}</div>
            <div><span class="icon-person"></span> {{ $article->creator_name }}</div>
        </div>
    </div>
</div>