@section('title')
Settings
@endsection
@include('admin.Layouts.setting-head')
<body>
    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <!-- Header -->
        <div class="header">
            <!-- Logo -->
            <div class="header-left">
                <a href="javascript:void(0);" class="navbar-brand logo d-flex align-items-center">
                    <div class="p-2 rounded-circle shadow-sm"
                        style="background-color: #f1f5f9; width: 50px; height: 50px; display: flex; justify-content: center; align-items: center;">
                        <img src="{{ asset('images/settings/' . Setting()->site_logo) }}" height="60" width="60"
                            class="img-fluid rounded-circle" alt="Logo">
                    </div>
                </a>
                
                <!-- Sidebar Toggle -->
                <a href="javascript:void(0);" id="toggle_btn">
                    <i class="feather-chevrons-left"></i>
                </a>
                <!-- /Sidebar Toggle -->

                <!-- Mobile Menu Toggle -->
                <a class="mobile_btn" id="mobile_btn">
                    <i class="feather-chevrons-left"></i>
                </a>
                <!-- /Mobile Menu Toggle -->
            </div>
            <!-- /Logo -->

            <!-- Search -->
            <div class="top-nav-search">
                <form>
                    <input type="text" class="form-control" placeholder="Start typing your Search...">
                    <button class="btn" type="submit"><i class="feather-search"></i></button>
                </form>
            </div>
            <!-- /Search -->

            <!-- Header Menu -->
            <ul class="nav user-menu">

                
                <!-- /Notifications -->

                <!-- User Menu -->
                <li class="nav-item dropdown has-arrow main-drop">
                    <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <span class="user-img">
                            <img src="{{ asset('images/settings/' . Setting()->site_logo) }}" alt="Img">
                            <span class="status online"></span>
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        {{-- <a class="dropdown-item" href="profile.html"><i data-feather="user" class="me-1"></i>
                            Profile</a> --}}
                        <a class="dropdown-item" href="{{ route('admin.profile') }}"><i data-feather="user"
                                class="me-1"></i>
                            Profile</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); 
                     document.getElementById('logout-form').submit();"><i
                                data-feather="log-out" class="me-1"></i>
                            Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf </form>
                    </div>
                </li>
                <!-- /User Menu -->

            </ul>
            <!-- /Header Menu -->

        </div>
        <!-- /Header -->

        <!-- Sidebar -->
        @include('admin.Layouts.sidebar')
        <!-- /Sidebar -->

        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="page-title">Settings</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="settings.html">Settings</a></li>
                                <li class="breadcrumb-item active">General Settings</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body pt-0">
                                        <div class="card-header">
                                            <h5 class="card-title">Panel Setting</h5>
                                        </div>
                                        <form action="{{ route('admin.update-setting') }}" method="Post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="settings-form">
                                                <div class="form-group">
                                                    <label>Website Name <span class="star-red">*</span></label>
                                                    <input type="text" name="site_name"
                                                        value="{{ $setting->site_name }}" class="form-control"
                                                        placeholder="Enter Website Name">
                                                </div>
                                                <div class="form-group">
                                                    <p class="settings-label">Logo <span class="star-red">*</span></p>
                                                    <div class="settings-btn">
                                                        <input type="file" accept="image/*" name="site_logo"
                                                            id="siteLogo" onchange="previewLogo(event)"
                                                            class="hide-input">
                                                        <label for="siteLogo" class="upload">
                                                            <i class="feather-upload"></i>
                                                        </label>
                                                    </div>
                                                    <div class="upload-images">
                                                        <img id="logoPreview"
                                                            src="{{ asset('images/settings/' . $setting->site_logo) }}"
                                                            alt="Logo Preview"
                                                            style="width: 100px; height: 100px; object-fit: contain;">
                                                        <a href="javascript:void(0);" class="btn-icon logo-hide-btn">
                                                            <i class="feather-x-circle"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                                <!-- Favicon Upload Section -->
                                                <div class="form-group">
                                                    <p class="settings-label">Favicon <span class="star-red">*</span>
                                                    </p>
                                                    <div class="settings-btn">
                                                        <input type="file" accept="image/*" name="site_favicon"
                                                            id="siteFavicon" onchange="previewFavicon(event)"
                                                            class="hide-input">
                                                        <label for="siteFavicon" class="upload">
                                                            <i class="feather-upload"></i>
                                                        </label>
                                                    </div>
                                                    <div class="upload-images upload-size">
                                                        <img id="faviconPreview"
                                                            src="{{ asset('images/settings/' . $setting->site_favicon) }}"
                                                            alt="Favicon Preview"
                                                            style="width: 50px; height: 50px; object-fit: contain;">
                                                        <a href="javascript:void(0);" class="btn-icon logo-hide-btn">
                                                            <i class="feather-x-circle"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0">
                                                    <div class="settings-btns">
                                                        <button type="submit" class="btn btn-orange">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Wrapper -->
    </div>
    <!-- /Main Wrapper -->
    @include('admin.Layouts.setting-footer')

</body>

</html>
