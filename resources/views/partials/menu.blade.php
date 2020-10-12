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
                {{--<li class="nav-item {{ active_page('home.index')  }}">
                    <a href="{{ locale_route('home.index') }}" class="nav-link">
                        {{ trans('page.home') }}
                    </a>
                </li>
                <li class="nav-item {{ active_page('products.index') }}">
                    <a href="{{ locale_route('products.index') }}" class="nav-link">
                        {{ trans('page.products') }}
                    </a>
                </li>
                <li class="nav-item {{ active_page('services.index')  }}">
                    <a href="{{ locale_route('services.index') }}" class="nav-link">
                        {{ trans('page.services') }}
                    </a>
                </li>
                <li class="nav-item {{ active_page('articles.index')  }}">
                    <a href="{{ locale_route('articles.index') }}" class="nav-link">
                        {{ trans('page.blog') }}
                    </a>
                </li>
                <li class="nav-item {{ active_page('contact.index')  }}">
                    <a href="{{ locale_route('contact.index') }}" class="nav-link">
                        {{ trans('page.contact') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ language_url() }}" class="nav-link">
                        <i class="icon-flag"></i> {{ language_title() }}
                    </a>
                </li>--}}

                <li class="nav-item active">
                    <a href="#" class="nav-link">
                        {{ trans('page.home') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        {{ trans('page.products') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        {{ trans('page.services') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        {{ trans('page.blog') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        {{ trans('page.contact') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ language_url() }}" class="nav-link">
                        <i class="icon-flag"></i> {{ language_title() }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>