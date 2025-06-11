<header class="header header-bg">
    <div class="container">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                <a href="javascript:void(0);" class="navbar-brand logo">
                    <img src="{{ asset('images/settings/' . Setting()->site_logo) }}" height="50" width="50"
                        class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="javascript:void(0);" class="menu-logo"
                        style="display: inline-block; width: 50px; height: 50px; overflow: hidden;">
                        <img src="{{ asset('images/settings/' . Setting()->site_logo) }}" alt="Logo"
                            style="max-width: 100%; max-height: 100%; object-fit: contain;">
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
            </div>
            <ul class="nav header-navbar-rht">
                <li class="nav-item dropdown account-item">
                    <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <span class="user-img">
                            <img src="{{ asset('images/settings/' . Setting()->site_logo) }}" alt="Img">
                        </span>
                        <span>{{ Auth::user()->name }}</span>
                    </a>
                    <div class="dropdown-menu emp">
                        <div class="drop-head">
                            <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                                <span class="user-img">
                                    <img src="{{ asset('images/settings/' . Setting()->site_logo) }}" alt="Img">
                                </span>
                                <div>
                                    <span>{{ Auth::user()->name }}</span>
                                    <p>{{ Auth::user()->email }}</p>
                                </div>
                            </a>
                        </div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); 
                            document.getElementById('logout-form').submit();"><img
                                src="{{ url('assets/img/icon/user-dropdown-icon--07.svg') }}" alt="Img">
                            Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf </form>
                    </div>
                </li>

            </ul>
        </nav>
    </div>

</header>
