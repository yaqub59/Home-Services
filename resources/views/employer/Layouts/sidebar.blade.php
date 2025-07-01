<div class="settings-menu">
    <div id="sidebar-menu" class="sidebar-menu">
        <ul>
            <li class="nav-item">
                <a href="{{ route('request.index') }}"
                    class="nav-link {{ Route::currentRouteName() == 'request.index' ? 'active' : '' }}">
                    <img src="{{ asset('assets/img/icon/sidebar-icon-06.svg') }}" alt="Img"> Service Providers
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}">
                    <img src="{{ asset('assets/img/icon/sidebar-icon-01.svg') }}" alt="Img"> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('reviews') }}"
                    class="nav-link {{ Route::currentRouteName() == 'reviews' ? 'active' : '' }}">
                    <img src="{{ asset('assets/img/icon/sidebar-icon-04.svg') }}" alt="Img"> Requests
                </a>
            </li>
        </ul>
    </div>
</div>
