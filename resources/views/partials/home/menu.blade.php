<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <a class="navbar-brand logo_h" href="{{ locale_route('home') }}">
                    <img src="{{ img_asset('logo', 'jpg') }}" alt="..." height="70">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ locale_route('home') }}">
                                {{ trans('page.home') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                {{ trans('page.products') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                {{ trans('page.services') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                {{ trans('page.blog') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                {{ trans('page.contact') }}
                            </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item">
                            <a href="#" class="cart">
                                <span class="ti-bag"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <button class="search">
                                <span class="lnr lnr-magnifier" id="search"></span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="search_input" id="search_input_box">
        <div class="container">
            <form class="d-flex justify-content-between">
                <label for="search_input"></label>
                <input type="text" class="form-control" id="search_input" placeholder="Rechercher...">
                <button type="submit" class="btn"></button>
                <span class="lnr lnr-cross" id="close_search"></span>
            </form>
        </div>
    </div>
</header>