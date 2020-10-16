<div class="blog-entry align-self-stretch">
    <a href="{{ locale_route('articles.show', compact('article')) }}" class="block-20">
        <img src="{{ $article->image_src }}" alt="...">
    </a>
    <div class="text py-4 d-block">
        <div class="meta">
            <div><span class="icon-calendar"></span> {{ $article->short_creation_date }}</div>
            <div><span class="icon-chat"></span> {{ $article->comments->count() }}</div>
        </div>
        <div class="meta">
            <div><span class="icon-person"></span> {{ $article->creator_name }}</div>
        </div>
        <h3 class="heading mt-2">
            <a href="{{ locale_route('articles.show', compact('article')) }}">
                {{ text_format($article->name, 30) }}
            </a>
        </h3>
        <p>{{ text_format($article->description, 80) }}</p>
    </div>
</div>