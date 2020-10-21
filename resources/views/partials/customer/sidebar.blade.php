<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
        {{-- Logo area --}}
        <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{ locale_route('customer.dashboard.index') }}">
                <img src="{{ img_asset('logo-black') }}" alt="..." width="60">
            </a>
        </div>
        {{-- Menu area --}}
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item active">
                <a href="#dashboard" class="nav-link">
                    <i class="fe fe-home fe-16"></i>
                    <span class="ml-3 item-text">Dashboard</span>
                </a>
            </li>
        </ul>
        {{-- Logout area --}}
        <div class="btn-box w-100 mt-4 mb-1">
            <button class="btn mb-2 btn-danger btn-lg btn-block" onclick="document.getElementById('logout-form').submit();">
                <i class="fe fe-log-out fe-12 mr-2"></i><span class="small">Logout</span>
            </button>
            <form id="logout-form" action="{{ locale_route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
    </nav>
</aside>