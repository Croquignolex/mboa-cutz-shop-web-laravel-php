<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">Articles en vedette</h2>
                <p>Des astuces et des conseil pour tous. N'ésitez pas a y laisser des commentaires.</p>
            </div>
        </div>
        <div class="row d-flex">
            @foreach($featured_articles as $article)
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="{{ locale_route('articles.show', compact('article')) }}" class="block-20">
                            <img src="{{ $article->image_src }}" alt="...">
                        </a>
                        <div class="text p-4 d-block">
                            <div class="meta">
                                <div><span class="icon-calendar"></span> {{ $article-> }}</div>
                                <div><span class="icon-person"></span> Admin</div>
                                <div><span class="icon-chat"></span> 3</div>
                            </div>
                            <h3 class="heading mt-2">
                                <a href="{{ locale_route('articles.show', compact('article')) }}">
                                    Men's hairstyle for all face shapes
                                </a>
                            </h3>
                            <p>
                                A small river named Duden flows by their place and supplies it with
                                the necessary regelialia.
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>