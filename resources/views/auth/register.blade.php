@section('title')
    Register
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
            <div class="content w-100">
                <!-- Login Content -->
                <div class="account-content">
                    <div class="align-items-center justify-content-center">
                        <div class="login-right">
                            <div class="login-header text-center">
                                <a href="javascript:void(0);"><img
                                        src="{{ asset('images/settings/' . Setting()->site_logo) }}" height="70"
                                        width="70"alt="logo" class="img-fluid"></a>
                            </div>
                            <nav class="user-tabs mb-4">
                                <ul role="tablist" class="nav nav-pills nav-justified">
                                    <li class="nav-item">
                                        <a href="#developer" data-bs-toggle="tab" class="nav-link active">Service</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#company" data-bs-toggle="tab" class="nav-link">Employer</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="tab-content pt-0">
                                <div role="tabpanel" id="developer" class="tab-pane fade active show">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="input-block ">
                                            <label class="focus-label">Service Name <span class="label-star">
                                                    *</span></label>
                                            <input type="text"
                                                class="form-control floating"
                                                name="name">
                                        </div>
                                        <div class="input-block ">
                                            <label class="focus-label">Email Address<span class="label-star">
                                                    *</span></label>
                                            <input type="email"
                                                class="form-control floating"
                                                name="email">
                                        </div>
                                        <div class="input-block ">
                                            <label class="focus-label">Password <span class="label-star">
                                                    *</span></label>
                                            <div class="position-relative">
                                                <input type="password"
                                                    class="form-control floating pass-input"
                                                    name="password">
                                                 
                                                <div class="password-icon ">
                                                    <span class="fas toggle-password fa-eye-slash"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-block  mb-0">
                                            <label class="focus-label">Confirm Password <span class="label-star">
                                                    *</span></label>
                                            <div class="position-relative">
                                                <input type="password" class="form-control floating pass-inputs"
                                                    name="password_confirmation">
                                                <div class="password-icons">
                                                    <span class="fas toggle-passwords fa-eye-slash"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" value="2" name="type">
                                        <div class="dont-have">
                                            <label class="custom_check">
                                                <input type="checkbox" name="rem_password">
                                                <span class="checkmark"></span> I have read and agree to all <a
                                                    href="privacy-policy.html">Terms &amp; Conditions</a>
                                            </label>
                                        </div>
                                        <button
                                            class="btn btn-primary w-100 btn-lg login-btn d-flex align-items-center justify-content-center"
                                            type="submit">{{ __('Register') }}<i
                                                class="feather-arrow-right ms-2"></i></button>
                                        <div class="row">
                                            <div class="col-sm-8 dont-have d-flex  align-items-center">Already have
                                                account <a href="{{ route('login') }}" class="ms-2">Sign in?</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div role="tabpanel" id="company" class="tab-pane fade">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="input-block ">
                                            <label class="focus-label">Employer Name <span class="label-star">
                                                    *</span></label>
                                            <input type="text"
                                                class="form-control floating"
                                                name="name">
                                        </div>
                                        <div class="input-block ">
                                            <label class="focus-label">Email Address<span class="label-star">
                                                    *</span></label>
                                            <input type="email" class="form-control floating" name="email">
                                        </div>
                                        <div class="input-block ">
                                            <label class="focus-label">Password <span class="label-star">
                                                    *</span></label>
                                            <div class="position-relative">
                                                <input type="password" class="form-control floating pass-input"
                                                    name="password">

                                                <div class="password-icon ">
                                                    <span class="fas toggle-password fa-eye-slash"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-block  mb-0">
                                            <label class="focus-label">Confirm Password <span class="label-star">
                                                    *</span></label>
                                            <div class="position-relative">
                                                <input type="password" class="form-control floating pass-inputs"
                                                    name="password_confirmation">
                                                <div class="password-icons">
                                                    <span class="fas toggle-passwords fa-eye-slash"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" value="0" name="type">
                                        <div class="dont-have">
                                            <label class="custom_check">
                                                <input type="checkbox" name="rem_password">
                                                <span class="checkmark"></span> I have read and agree to all <a
                                                    href="privacy-policy.html">Terms &amp; Conditions</a>
                                            </label>
                                        </div>
                                        <button
                                            class="btn btn-primary w-100 btn-lg login-btn d-flex align-items-center justify-content-center"
                                            type="submit">{{ __('Register') }}<i
                                                class="feather-arrow-right ms-2"></i></button>
                                        <div class="row">
                                            <div class="col-sm-8 dont-have d-flex  align-items-center">Already have
                                                account <a href="{{ route('login') }}" class="ms-2">Sign in?</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Login Content -->
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->
    @include('auth.Layout.footer-script')
    @include('layouts.toast-messages')
