<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ locale_route('home.index') }}">
            <img src="{{ img_asset('logo-white') }}" alt="..." class="image-responsive" height="70">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ active_page(collect('home.index'))  }}">
                    <a href="{{ locale_route('home.index') }}" class="nav-link">
                        {{ __('page.home') }}
                    </a>
                </li>
                <li class="nav-item {{ active_page(collect('products.index')) }}">
                    <a href="{{ locale_route('products.index') }}" class="nav-link">
                        {{ __('page.products') }}
                    </a>
                </li>
                <li class="nav-item {{ active_page(collect('services.index'))  }}">
                    <a href="{{ locale_route('services.index') }}" class="nav-link">
                        {{ __('page.services') }}
                    </a>
                </li>
                <li class="nav-item {{ active_page(collect(['articles.index', 'articles.show']))  }}">
                    <a href="{{ locale_route('articles.index') }}" class="nav-link">
                        {{ __('page.blog') }}
                    </a>
                </li>
                <li class="nav-item {{ active_page(collect('contact.index'))  }}">
                    <a href="{{ locale_route('contact.index') }}" class="nav-link">
                        {{ __('page.contact') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ language_url() }}" class="nav-link text-danger">
                        <i class="icon-flag"></i> {{ language_title() }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>