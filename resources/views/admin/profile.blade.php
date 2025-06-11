@section('title')
    Profile
@endsection
@include('admin.Layouts.setting-head')

<body>
    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <!-- Header -->
        <div class="header">
            <!-- Logo -->
            <div class="header-left">
                <a href="index.html" class="logo">
                    <img src="{{ asset('images/settings/' . Setting()->site_logo) }}" alt="Logo">
                </a>
                <a href="index.html" class="logo logo-small">
                    <img src="{{ asset('images/settings/' . Setting()->site_logo) }}" alt="Logo" width="30"
                        height="30">
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

                <!-- Notifications -->
                <li class="nav-item dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <i class="feather-bell"></i> <span class="badge badge-pill">5</span>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All</a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="javascript:void(0);">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="Img"
                                                    src="{{ asset('admin-assets/img/profiles/avatar-02.jpg') }}">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Brian Johnson</span>
                                                    paid the invoice <span class="noti-title">#DF65485</span></p>
                                                <p class="noti-time"><span class="notification-time">4 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="javascript:void(0);">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="Img"
                                                    src="{{ asset('admin-assets/img/profiles/avatar-03.jpg') }}">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Marie Canales</span>
                                                    has accepted your estimate <span
                                                        class="noti-title">#GTR458789</span></p>
                                                <p class="noti-time"><span class="notification-time">6 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="javascript:void(0);">
                                        <div class="media d-flex">
                                            <div class="avatar avatar-sm flex-shrink-0">
                                                <span class="avatar-title rounded-circle bg-primary-light"><i
                                                        class="far fa-user"></i></span>
                                            </div>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">New user
                                                        registered</span></p>
                                                <p class="noti-time"><span class="notification-time">8 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="javascript:void(0);">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="Img"
                                                    src="{{ asset('admin-assets/img/profiles/avatar-04.jpg') }}">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Barbara Moore</span>
                                                    declined the invoice <span class="noti-title">#RDW026896</span></p>
                                                <p class="noti-time"><span class="notification-time">12 mins
                                                        ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="javascript:void(0);">
                                        <div class="media d-flex">
                                            <div class="avatar avatar-sm flex-shrink-0">
                                                <span class="avatar-title rounded-circle bg-info-light"><i
                                                        class="far fa-comment"></i></span>
                                            </div>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">You have received a
                                                        new message</span></p>
                                                <p class="noti-time"><span class="notification-time">2 days ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="javascript:void(0);">View all Notifications</a>
                        </div>
                    </div>
                </li>
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
                            <h3 class="page-title">Profile Settings</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="settings.html">Settings</a></li>
                                <li class="breadcrumb-item active">Profile Settings</li>
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
                                            <h5 class="card-title">Admin Details</h5>
                                        </div>
                                        <form method="Post" action="{{ route('admin.update-info') }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="settings-form">
                                                <div class="form-group">
                                                    <label>User Name<span class="star-red">*</span></label>
                                                    <input type="text" class="form-control"
                                                        value="{{ auth()->user()->name }}" name="name"
                                                        placeholder="Enter Name">
                                                </div>
                                                <div class="form-group">
                                                    <label>Email<span class="star-red">*</span></label>
                                                    <input type="text" value="{{ auth()->user()->email }}"
                                                        name="email" class="form-control"
                                                        placeholder="Enter Email">
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Image<span class="star-red">*</span></label>
                                                            <input type="file" name="image" id="imageInput"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group text-end">
                                                            <label>Current Image:</label><br>
                                                            @if (auth()->user()->image)
                                                                <img id="previewImage"
                                                                    src="{{ asset('images/admin/images/' . auth()->user()->image) }}"
                                                                    alt="Profile Image" class="img-thumbnail"
                                                                    style="width: 70px; height: 70px; object-fit: cover;">
                                                            @else
                                                                <p>No image uploaded.</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Password<span class="star-red">*</span></label>
                                                            <input type="password" name="password"
                                                                class="form-control" placeholder="Enter Password">
                                                                <small class="form-text text-muted">Leave blank if you don't want to update the
                                                password.</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Confirm Password<span
                                                                    class="star-red">*</span></label>
                                                            <input type="password" name="password_confirmation"
                                                                class="form-control"
                                                                placeholder="Enter Password Confirmation">
                                                                <small class="form-text text-muted">Leave blank if you don't want to update the
                                                password.</small>
                                                        </div>
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
