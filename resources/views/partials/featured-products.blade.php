<section class="ftco-section ftco-bg-dark">
    <div class="container mb-5">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">Produits en vedette</h2>
                <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
                <p class="mt-5">
                    Nous vous assurons un service de qualité et des produits validé par les experts.
                    N'ésitez surtout pas a consulter le catalogue de nos différents produits et services.
                </p>
            </div>
        </div>
        <div class="row">
            @foreach($featured_products as $product)
                <div class="col-md-3 ftco-animate">
                    <div class="product-entry text-center">
                        <a href="{{ locale_route('products.show', compact('product')) }}">
                            <img src="{{ $product->image_src }}" class="img-fluid" alt="...">
                        </a>
                        <div class="text">
                            <p class="rate" style="white-space: nowrap;">
                                @include('partials.rating-star', ['rate' => $product->rate])
                            </p>
                            <h3><a href="{{ locale_route('products.show', compact('product')) }}">{{ $product->name }}</a></h3>
                            <span class="price mb-4">
                                @if($product->is_a_discount)
                                    {{ amount_format($product->amount) }}
                                    <small><s>{{ amount_format($product->price) }}</s></small>
                                @else
                                    {{ amount_format($product->price) }}
                                @endif
                            </span>
                            <p><a href="javascript:void(0)" class="btn btn-primary">Ajouter au panier</a></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>