<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="{{ Route::currentRouteName() == 'admin.home' ? 'active' : '' }}">
                    <a href="{{ route('admin.home') }}">
                        <i data-feather="home"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li class="{{ Route::currentRouteName() == 'admin.users' ? 'active' : '' }}">
                    <a href="{{ route('admin.users') }}">
                        <i data-feather="users"></i> <span>Users</span>
                    </a>
                </li>
                <li class="{{ Route::currentRouteName() == 'admin.institute' ? 'active' : '' }}">
                    <a href="{{ route('admin.institute') }}">
                        <i data-feather="book"></i> <span>Institute</span>
                    </a>
                </li>
                <li class="{{ Route::currentRouteName() == 'admin.services' ? 'active' : '' }}">
                    <a href="{{ route('admin.services') }}">
                        <i data-feather="briefcase"></i> <span>Services</span>
                    </a>
                </li>
                <li class="{{ Route::currentRouteName() == 'admin.setting' ? 'active' : '' }}">
                    <a href="{{ route('admin.setting') }}">
                        <i data-feather="settings"></i> <span>Settings</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
