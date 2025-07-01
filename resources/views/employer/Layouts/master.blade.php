@include('employer.Layouts.head')

<body class="dashboard-page">

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Start Navigation -->
        <!-- Header -->
        @include('employer.Layouts.header')
        <!-- /Header -->
        <!-- Page Content -->
        <div class="content content-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 theiaStickySidebar">
                        <div class="settings-widget">
                            <div class="rounded-4 px-3 py-2 text-white"
                                style="background: linear-gradient(to right, #6366f1, #3b82f6); box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                                <div class="d-flex align-items-center flex-wrap text-center text-sm-start">
                                    <a href="{{ route('home') }}">
                                        <img src="{{ asset('images/settings/' . Setting()->site_logo) }}"
                                            class="rounded-circle shadow-sm me-3 mb-2 mb-sm-0" height="60"
                                            width="60" alt="User Image">
                                    </a>
                                    <div>
                                        <h6
                                            class="mb-1 fw-semibold d-flex align-items-center justify-content-center justify-content-sm-start">
                                            <a href="{{ route('home') }}"
                                                class="text-white text-decoration-none">{{ Auth::user()->name }}</a>
                                            <img src="{{ asset('assets/img/icon/verified-badge.svg') }}" class="ms-2"
                                                height="18" alt="Verified">
                                        </h6>
                                        <p class="mb-0 text-white-50 small">{{ Auth::user()->email }}</p>
                                    </div>
                                </div>
                            </div>


                            @include('employer.Layouts.sidebar')
                        </div>

                    </div>
                    @yield('content')
                </div>
            </div>
        </div>

        @include('employer.Layouts.footer')
        <!-- /Footer -->

    </div>
    <!-- /Main Wrapper -->

    @include('employer.Layouts.footer-script')
    @include('layouts.toast-messages')

</body>

</html>
