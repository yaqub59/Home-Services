@include('auth.Layout.head')

<body class="account-page">

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Start Navigation -->
        <!-- Header -->
        <header class="header">
            <div class="container">
                <nav class="navbar navbar-expand-lg header-nav p-0">
                    <div class="navbar-header">
                        <a id="mobile_btn" href="javascript:void(0);">
                            <span class="bar-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </a>
                        <a href="index.html" class="navbar-brand logo">
                            <img src="{{ asset('images/settings/' .Setting()->site_logo) }}" height="70" width="70" class="img-fluid" alt="Logo">
                        </a>
                    </div>
                    <div class="main-menu-wrapper">
                        <div class="menu-header">
                            <a href="index.html" class="menu-logo">
                                <img src="{{ asset('images/settings/' .Setting()->site_logo) }}" height="70" width="70" class="img-fluid" alt="Logo">
                            </a>
                            <a id="menu_close" class="menu-close" href="javascript:void(0);">
                                <i class="fas fa-times"></i>
                            </a>
                        </div>
                        <ul class="main-nav">
                            <li class=" has-submenu">
                                <a href="index.html">Home <i class="fas fa-chevron-down"></i></a>
                                <ul class="submenu">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="index-2.html">Home 2</a></li>
                                    <li><a href="index-3.html">Home 3</a></li>
                                    <li><a href="index-4.html">Home 4</a></li>
                                    <li><a href="index-5.html">Home 5</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="javascript:void(0);">For Employers <i class="fas fa-chevron-down"></i></a>
                                <ul class="submenu">
                                    <li class="has-submenu">
                                        <a href="javascript:void(0);">Freelancer</a>
                                        <ul class="submenu">
                                            <li><a href="developer.html">Freelancer</a></li>
                                            <li><a href="developer-details.html">Freelancer Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="dashboard.html">Dashboard</a></li>
                                    <li><a href="company-profile.html">My Profile</a></li>

                                    <li><a href="manage-projects.html">Projects</a></li>
                                    <li><a href="favourites.html">Favourites</a></li>
                                    <li><a href="membership-plans.html">Membership</a></li>
                                    <li><a href="milestones.html">Milestones</a></li>
                                    <li><a href="chats.html">Chats</a></li>
                                    <li><a href="review.html">Review</a></li>
                                    <li><a href="deposit-funds.html">Payments</a></li>
                                    <li><a href="verify-identity.html">Verify Identity</a></li>
                                    <li><a href="profile-settings.html">Settings</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="javascript:void(0);">For Freelancer <i class="fas fa-chevron-down"></i></a>
                                <ul class="submenu">
                                    <li class="has-submenu">
                                        <a href="javascript:void(0);">Projects</a>
                                        <ul class="submenu">
                                            <li><a href="project.html">Projects</a></li>
                                            <li><a href="project-details.html">Project Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="freelancer-dashboard.html">Dashboard</a></li>
                                    <li><a href="developer-profile.html">My Profile</a></li>
                                    <li><a href="developer-details.html">Freelancer Details</a></li>
                                    <li><a href="freelancer-project-proposals.html">Projects</a></li>
                                    <li><a href="freelancer-favourites.html">Favourites</a></li>
                                    <li><a href="freelancer-membership.html">Membership</a></li>
                                    <li><a href="freelancer-change-password.html">Change Password</a></li>
                                    <li><a href="freelancer-chats.html">Chats</a></li>
                                    <li><a href="freelancer-review.html">Review</a></li>
                                    <li><a href="freelancer-withdraw-money.html">Payments</a></li>
                                    <li><a href="freelancer-verify-identity.html">Verify Identity</a></li>
                                    <li><a href="freelancer-profile-settings.html">Settings</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu active">
                                <a href="javascript:void(0);">Pages <i class="fas fa-chevron-down"></i></a>
                                <ul class="submenu">
                                    <li><a href="about.html">About us</a></li>
                                    <li><a href="blank-page.html">Starter Page</a></li>
                                    <li><a href="404-page.html">404 Page</a></li>
                                    <li class="active"><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="onboard-screen.html">Onboard Screen</a></li>
                                    <li><a href="forgot-password.html">Forgot Password</a></li>
                                    <li><a href="change-passwords.html">Change Password</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="javascript:void(0);">Blog <i class="fas fa-chevron-down"></i></a>
                                <ul class="submenu">
                                    <li><a href="blog-list.html">Blog List</a></li>
                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="admin/index.html" target="_blank">Admin</a>
                            </li>
                        </ul>
                    </div>
                    <ul class="nav header-navbar-rht reg-head">
                        <li><a href="register.html" class="reg-btn"><img src="assets/img/icon/users.svg"
                                    class="me-1" alt="img">Register</a></li>
                        <li><a href="login.html" class="log-btn active"><img src="assets/img/icon/lock.svg"
                                    class="me-1" alt="img"> Login</a></li>
                        <li><a href="post-project.html" class="login-btn"><i class="feather-plus me-1"></i>Post a
                                Project </a></li>
                    </ul>
                </nav>
            </div>

        </header>
        <!-- /Header -->

        <!-- Page Content -->
        <div class="login-wrapper">
            <div class="content">
                <!-- Login Content -->
                <div class="account-content">
                    <div class="align-items-center justify-content-center">
                        <div class="login-right">
                            <div class="login-header text-center">
                                <a href="index.html"><img src="{{ asset('images/settings/' .Setting()->site_logo) }}" height="100" width="100" alt="logo"
                                        class="img-fluid"></a>
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="input-block">
                                    <label class="focus-label">Email Address <span class="label-star">
                                            *</span></label>
                                    <input type="text"
                                        class="form-control floating @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}">
                                </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="input-block">
                                    <label class="focus-label">Password <span class="label-star"> *</span></label>
                                    <div class="position-relative">
                                        <input type="password"
                                            class="form-control floating pass-input @error('password') is-invalid @enderror"
                                            name="password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <div class="password-icon ">
                                            <span class="fas toggle-password fa-eye-slash"></span>
                                        </div>
                                    </div>
                                </div>
                                <button
                                    class="btn btn-primary w-100 btn-lg login-btn d-flex align-items-center justify-content-center"
                                    type="submit"> {{ __('Login') }}<i
                                        class="feather-arrow-right ms-2"></i></button>

                                <div class="login-or">
                                    <p><span>OR</span></p>
                                </div>
                                <div class="row social-login">
                                    <div class="col-sm-4">
                                        <a href="javascript:void(0);" class="btn btn-block"><img
                                                src="assets/img/icon/google-icon.svg" alt="Google">Google</a>
                                    </div>
                                    <div class="col-sm-4">
                                        <a href="javascript:void(0);" class="btn btn-block"><img
                                                src="assets/img/icon/fb-icon.svg" alt="Fb">Facebook</a>
                                    </div>
                                    <div class="col-sm-4">
                                        <a href="javascript:void(0);" class="btn btn-block"><img
                                                src="assets/img/icon/ios-icon.svg" alt="Apple">Apple</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8 dont-have d-flex  align-items-center">New to Kofejob <a
                                            href="{{ route('register') }}" class="ms-2">Signup?</a></div>
                                    <div class="col-sm-4 text-sm-end">
                                        <a class="forgot-link" href="{{ route('password.request') }}">Lost
                                            Password?</a>
                                    </div>
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
