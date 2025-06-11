@include('service.Layouts.head')

<body class="dashboard-page">

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Start Navigation -->
        <!-- Header -->
        @include('service.Layouts.header')
        <!-- /Header -->
        <!-- Page Content -->
        <div class="content content-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 theiaStickySidebar">
                        <div class="settings-widget">
                            <div
                                class="settings-header d-sm-flex flex-row flex-wrap text-center text-sm-start align-items-center">
                                <a href="{{ route('service.profile') }}"><img alt="profile image"
                                        src="{{ asset('images/settings/' . Setting()->site_logo) }}" height="70"
                                        width="70" class="avatar-lg rounded-circle"></a>
                                <div class="ms-sm-3 ms-md-0 ms-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
                                    <h3 class="mb-0"><a href="{{ route('service.profile') }}">{{ Auth::user()->name }}</a><img
                                            src="{{ asset('assets/img/icon/verified-badge.svg') }}" class="ms-1"
                                            alt="Img"></h3>
                                    <p class="mb-0">{{ Auth::user()->email }}</p>
                                </div>
                            </div>
                            @include('service.Layouts.sidebar')
                        </div>
                    </div>
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- /Page Content -->
        <!-- Footer -->
        @include('service.Layouts.footer')
        <!-- /Footer -->

    </div>
    <!-- /Main Wrapper -->

    @include('service.Layouts.footer-script')
    @include('layouts.toast-messages')

</body>

</html>
