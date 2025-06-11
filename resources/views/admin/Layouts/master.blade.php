
@include('admin.Layouts.head')
<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Header -->
        @include('admin.Layouts.header')

        <!-- /Header -->

        <!-- Sidebar -->
        @include('admin.Layouts.sidebar')

        <!-- /Sidebar -->


        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="content container-fluid">
                <!-- Page Header -->
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Dashboard</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <!-- /Page Header -->

                @yield('content')
            </div>
            <!-- /Page Wrapper -->

        </div>
        <!-- /Main Wrapper -->
    </div>

    @include('admin.Layouts.footer-script')
    @include('layouts.toast-messages')
