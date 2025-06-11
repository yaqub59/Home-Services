<div class="settings-menu">
    <div id="sidebar-menu" class="sidebar-menu">
        <ul>
            <li class="nav-item">
                <a href="{{ route('service.home') }}" class="nav-link {{ Route::currentRouteName() == 'service.home' ? 'active' : '' }}">
                    <img src="{{ asset('assets/img/icon/sidebar-icon-01.svg') }}" alt="Img"> Dashboard
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('service.show-review') }}" class="nav-link {{ Route::currentRouteName() == 'service.show-review' ? 'active' : '' }}">
                    <img src="{{ asset('assets/img/icon/sidebar-icon-06.svg')}}" alt="Img"> Requests
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('service.reviews') }}" class="nav-link {{ Route::currentRouteName() == 'service.reviews' ? 'active' : '' }}">
                    <img src="{{ asset('assets/img/icon/sidebar-icon-04.svg')}}" alt="Img"> Reviews
                </a>
            </li>
        </ul>
    </div>
</div>
