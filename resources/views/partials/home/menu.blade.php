<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ locale_route('home.index') }}">MBOA CUTZ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ active_route_class('home.index')  }}">
                    <a href="{{ locale_route('home.index') }}" class="nav-link">
                        {{ trans('page.home') }}
                    </a>
                </li>
                <li class="nav-item {{ active_route_class('products.index') }}">
                    <a href="{{ locale_route('products.index') }}" class="nav-link">
                        {{ trans('page.products') }}
                    </a>
                </li>
                <li class="nav-item {{ active_route_class('services.index')  }}">
                    <a href="{{ locale_route('services.index') }}" class="nav-link">
                        {{ trans('page.services') }}
                    </a>
                </li>
                <li class="nav-item {{ active_route_class('blog.index')  }}">
                    <a href="{{ locale_route('blog.index') }}" class="nav-link">
                        {{ trans('page.blog') }}
                    </a>
                </li>
                <li class="nav-item {{ active_route_class('contact.index')  }}">
                    <a href="{{ locale_route('contact.index') }}" class="nav-link">
                        {{ trans('page.contact') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>