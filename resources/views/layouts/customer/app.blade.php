@extends('master')

@section('master.title')@yield('customer.app.master.title')@endsection

@section('master.body')
    <div class="wrapper">
        <nav class="topnav navbar navbar-light">
            <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
                <i class="fe fe-menu navbar-toggler-icon"></i>
            </button>
            <form class="form-inline mr-auto searchform text-muted">
                <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search" placeholder="Type something..." aria-label="Search">
            </form>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="dark">
                        <i class="fe fe-sun fe-16"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-shortcut">
                        <span class="fe fe-grid fe-16"></span>
                    </a>
                </li>
                <li class="nav-item nav-notif">
                    <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-notif">
                        <span class="fe fe-bell fe-16"></span>
                        <span class="dot dot-md bg-success"></span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="avatar avatar-sm mt-2">
                <img src="./assets/avatars/face-1.jpg" alt="..." class="avatar-img rounded-circle">
              </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activities</a>
                    </div>
                </li>
            </ul>
        </nav>
        @yield('customer.app.master.body')
    </div>
@endsection

@push('master.style')
    <link rel="stylesheet" href="{{ customer_css_asset('style') }}" type="text/css">
    <link rel="stylesheet" href="{{ customer_css_asset('feather') }}" type="text/css">
    <link rel="stylesheet" href="{{ customer_css_asset('simplebar') }}" type="text/css">
    @stack('customer.app.master.style')
@endpush

@push('master.script')
    <script src="{{ customer_js_asset('jquery.min') }}" type="application/javascript"></script>
    <script src="{{ customer_js_asset('popper.min') }}" type="application/javascript"></script>
    <script src="{{ customer_js_asset('bootstrap.min') }}" type="application/javascript"></script>
    <script src="{{ customer_js_asset('simplebar.min') }}" type="application/javascript"></script>
    <script src="{{ customer_js_asset('jquery.stickOnScroll') }}" type="application/javascript"></script>
    @stack('customer.app.master.script')
@endpush
