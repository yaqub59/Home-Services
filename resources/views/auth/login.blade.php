@section('title')
    Login
@endsection
@include('auth.Layout.head')

<body class="account-page">

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Start Navigation -->
        <!-- Header -->
        @include('auth.Layout.header')

        <!-- /Header -->

        <!-- Page Content -->
        <div class="login-wrapper">
            <div class="content">
                <!-- Login Content -->
                <div class="account-content">
                    <div class="align-items-center justify-content-center">
                        <div class="login-right">
                            <div class="login-header text-center">
                                <a href="index.html"><img src="{{ asset('images/settings/' . Setting()->site_logo) }}"
                                        height="100" width="100" alt="logo" class="img-fluid"></a>
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="input-block">
                                    <label class="focus-label">Email Address <span class="label-star">
                                            *</span></label>
                                    <input type="text" class="form-control floating" name="email"
                                        value="{{ old('email') }}">
                                </div>

                                <div class="input-block">
                                    <label class="focus-label">Password <span class="label-star"> *</span></label>
                                    <div class="position-relative">
                                        <input type="password" class="form-control floating pass-input" name="password">
                                        @error('password')
                                        @enderror
                                        <div class="password-icon ">
                                            <span class="fas toggle-password fa-eye-slash"></span>
                                        </div>
                                    </div>
                                </div>
                                <button
                                    class="btn btn-primary w-100 btn-lg login-btn d-flex align-items-center justify-content-center"
                                    type="submit"> {{ __('Login') }}<i class="feather-arrow-right ms-2"></i></button>
                                <div class="row">
                                    <div class="col-sm-8 dont-have d-flex  align-items-center"><a
                                            href="{{ route('register') }}" class="ms-2">Signup?</a>
                                    </div>
                                    {{-- <div class="col-sm-4 text-sm-end">
                                        <a class="forgot-link" href="{{ route('password.request') }}">Lost
                                            Password?</a>
                                    </div> --}}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /Login Content -->
            </div>
        </div>

        <!-- /Page Content -->

        <!-- Footer -->
        <footer class="footer">
            <div class="footer-top">
                <div class="container">

                    <div class="row">
                        <div class="col-md-3">
                            <h2 class="footer-title">Office Address</h2>
                            <div class="footer-address">
                                <div class="off-address">
                                    <p class="mb-2">New York, USA (HQ)</p>
                                    <address class="mb-0">750 Sing Sing Rd, Horseheads, NY, 14845</address>
                                    <p>Call: <a href="javascript:void(0);"><u>469-537-2410</u> (Toll-free)</a> </p>
                                </div>
                                <div class="off-address">
                                    <p class="mb-2">Sydney, Australia </p>
                                    <address class="mb-0">24 Farrar Parade COOROW WA 6515</address>
                                    <p>Call: <a href="javascript:void(0);"><u>(08) 9064 9807</u> (Toll-free)</a> </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="footer-widget footer-menu">
                                <h2 class="footer-title">Useful Links</h2>
                                <ul>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="blog-list.html">Blog</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="forgot-password.html">Forgot Password</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="footer-widget footer-menu">
                                <h2 class="footer-title">Help & Support</h2>
                                <ul>
                                    <li><a href="chats.html">Chat</a></li>
                                    <li><a href="faq.html">Faq</a></li>
                                    <li><a href="review.html">Reviews</a></li>
                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="term-condition.html">Terms of use</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="footer-widget footer-menu">
                                <h2 class="footer-title">Other Links</h2>
                                <ul>
                                    <li><a href="freelancer-dashboard.html">Freelancers</a></li>
                                    <li><a href="freelancer-portfolio.html">Freelancer Details</a></li>
                                    <li><a href="project.html">Project</a></li>
                                    <li><a href="project-details.html">Project Details</a></li>
                                    <li><a href="post-project.html">Post Project</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="footer-widget footer-menu">
                                <h2 class="footer-title">Mobile Application</h2>
                                <p>Download our App and get the latest Breaking News Alerts and latest headlines and
                                    daily articles near you.</p>
                                <div class="row g-2">
                                    <div class="col">
                                        <a href="javascript:void(0);"><img class="img-fluid"
                                                src="assets/img/app-store.svg" alt="app-store"></a>
                                    </div>
                                    <div class="col">
                                        <a href="javascript:void(0);"><img class="img-fluid"
                                                src="assets/img/google-play.svg" alt="google-play"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Footer Top -->

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="container">

                    <!-- Copyright -->
                    <div class="copyright">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="copyright-text">
                                    <p class="mb-0">&copy; 2021 All Rights Reserved</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 right-text">
                                <div class="social-icon">
                                    <ul>
                                        <li><a href="javascript:void(0);" class="icon" target="_blank"><i
                                                    class="fab fa-instagram"></i> </a></li>
                                        <li><a href="javascript:void(0);" class="icon" target="_blank"><i
                                                    class="fab fa-linkedin-in"></i> </a></li>
                                        <li><a href="javascript:void(0);" class="icon" target="_blank"><i
                                                    class="fab fa-twitter"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Copyright -->
                </div>
            </div>
            <!-- /Footer Bottom -->
        </footer>
        <!-- /Footer -->

    </div>
    <!-- /Main Wrapper -->
    @include('auth.Layout.footer-script')
    @include('layouts.toast-messages')
