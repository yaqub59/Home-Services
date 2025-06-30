 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
     <title>Home Page</title>

     <!-- Favicon -->
     <link rel="shortcut icon" href="{{ asset('images/settings/' . Setting()->site_favicon) }}">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

     <!-- Fontawesome CSS -->
     <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

     <!-- Owl Carousel CSS -->
     <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">

     <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

     <!-- Feather CSS -->
     <link rel="stylesheet" href="{{ asset('assets/plugins/feather/feather.css') }}">

     <!-- Aos CSS -->
     <link rel="stylesheet" href="{{ asset('assets/plugins/aos/aos.css') }}">

     <!-- Select2 CSS -->
     <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">

     <!-- Main CSS -->
     <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
     <style>
         .service-card {
             transition: all 0.3s ease-in-out;
             border-radius: 20px;
             background: #fff;
         }

         .service-card:hover {
             transform: translateY(-5px);
             box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
         }

         .service-img-wrapper {
             width: 90px;
             height: 90px;
             border-radius: 50%;
             overflow: hidden;
             border: 3px solid #f1f1f1;
             background-color: #fafafa;
             display: flex;
             justify-content: center;
             align-items: center;
         }

         .service-img-wrapper img {
             width: 100%;
             height: 100%;
             object-fit: cover;
         }
     </style>

 </head>

 <body class="home-page bg-one">

     <!-- Loader -->
     <div id="global-loader">
         <div class="whirly-loader"> </div>
         <div class="loader-img">
             <img src="assets/img/load-icon.svg" class="img-fluid" alt="Img">
         </div>
     </div>
     <!-- Loader -->

     <!-- Main Wrapper -->
     <div class="main-wrapper">

         <!-- Start Navigation -->
         <!-- Header -->
         <header class="header">
             <div class="container">
                 <nav class="navbar navbar-expand-lg header-nav p-0">

                     {{-- Mobile menu + Logo --}}
                     <div class="navbar-header">
                         <a id="mobile_btn" href="javascript:void(0);">
                             <span class="bar-icon">
                                 <span></span>
                                 <span></span>
                                 <span></span>
                             </span>
                         </a>
                         <a href="{{ url('/') }}" class="navbar-brand logo">
                             <img src="{{ asset('images/settings/' . Setting()->site_logo) }}" height="70"
                                 width="70" class="img-fluid" alt="Logo">
                         </a>
                     </div>

                     {{-- Main Menu --}}
                     <div class="main-menu-wrapper">
                         <div class="menu-header">
                             <a href="{{ url('/') }}" class="menu-logo">
                                 <img src="{{ asset('images/settings/' . Setting()->site_logo) }}" height="70"
                                     width="70" class="img-fluid" alt="Logo">
                             </a>
                         </div>
                         <ul class="nav main-nav">
                             @php
                                 $services = getAllServices();
                             @endphp

                             @foreach ($services as $service)
                                 <li class="nav-item">
                                     <a class="nav-link"
                                         href="{{ auth()->check() ? route('request.index', ['service_id' => $service->id]) : route('login') }}">
                                         {{ $service->name }}
                                     </a>
                                 </li>
                             @endforeach
                         </ul>
                     </div>

                     {{-- Right Side (Login/Register) --}}
                     <ul class="nav header-navbar-rht reg-head">
                         <li>
                             <a href="{{ route('register') }}" class="reg-btn">
                                 <img src="{{ asset('assets/img/icon/users.svg') }}" class="me-1"
                                     alt="img">Register
                             </a>
                         </li>
                         <li>
                             <a href="{{ route('login') }}" class="log-btn">
                                 <img src="{{ asset('assets/img/icon/lock.svg') }}" class="me-1" alt="img">
                                 Login
                             </a>
                         </li>
                     </ul>

                 </nav>
             </div>
         </header>

         <!-- /Header -->

         <!-- Home Banner -->
         <section class="section home-banner row-middle">
             <div class="container">
                 <div class="row align-items-center">
                     <div class="col-md-8 col-lg-7">
                         <div class="banner-content aos" data-aos="fade-up" data-aos-duration="3000">
                             <div class="rating">
                                 <i class="fas fa-star checked"></i>
                                 <i class="fas fa-star checked"></i>
                                 <i class="fas fa-star checked"></i>
                                 <i class="fas fa-star checked"></i>
                                 <i class="fas fa-star checked"></i>
                                 <h5>Trused by over 2M+ users</h5>
                             </div>
                             <h1>Get The Perfect <span class="orange-text"><br>Developers & Projects</span></h1>
                             <p>There are many variations of passages of the Ipsum available, but the majority have
                                 suffered alteration in some form, by injected humour.</p>
                             @php
                                 $services = getAllServices();
                             @endphp

                             <form class="form" id="searchForm" onsubmit="return handleCategorySearch();">
                                 <div class="form-inner">
                                     <div class="row g-2 align-items-center">
                                         <div class="col-md-8">
                                             <select class="form-select form-control" id="categorySelect">
                                                 <option value="">Select Category</option>
                                                 @foreach ($services as $service)
                                                     <option value="{{ $service->id }}">{{ $service->name }}</option>
                                                 @endforeach
                                             </select>
                                         </div>
                                         <div class="col-md-4">
                                             <button class="btn btn-primary w-100" type="submit">Search</button>
                                         </div>
                                     </div>
                                 </div>
                             </form>
                         </div>
                     </div>
                     <div class="col-md-4 col-lg-5">
                         <div class="banner-img aos" data-aos="zoom-in" data-aos-duration="3000">
                             <img src="assets/img/banner-img.svg" class="img-fluid" alt="banner">
                         </div>
                     </div>
                 </div>
             </div>
         </section>
         <!-- /Home Banner -->
         <section class="section review">
             <div class="container">
                 <div class="col-md-12 col-sm-12 col-12 mx-auto text-center">
                     <div class="section-header aos" data-aos="fade-up">
                         <h2 class="header-title">Popular Categories</h2>
                     </div>
                 </div>
                 @php
                     $services = getAllServices();
                 @endphp
                 <div class="row g-4">
                     @foreach ($services as $service)
                         <div class="col-lg-3 col-md-6 col-sm-12">
                             <div class="card service-card h-100 text-center shadow-sm border-0">
                                 <div class="card-body">
                                     <a href="{{ auth()->check() ? route('request.index') : route('login') }}"
                                         class="text-decoration-none text-dark">
                                         <div class="service-img-wrapper mx-auto mb-3">
                                             <img src="{{ asset('images/admin/services/' . ($service->image ?? 'default-icon.svg')) }}"
                                                 alt="{{ $service->name }}" class="rounded-circle img-fluid">
                                         </div>
                                         <h5 class="card-title">{{ $service->name }}</h5>
                                         <p class="text-muted small">
                                             {{ \Illuminate\Support\Str::limit($service->description, 80) }}
                                         </p>
                                     </a>
                                 </div>
                             </div>
                         </div>
                     @endforeach
                 </div>




             </div>
         </section>
         <!-- Footer -->
         <footer class="footer">
             <!-- Footer Bottom -->
             <div class="footer-bottom">
                 <div class="container">

                     <!-- Copyright -->
                     <div class="copyright bg-light py-3">
                         <div class="container">
                             <div class="row">
                                 <div class="col-12 text-center">
                                     <p class="mb-0 text-muted small">
                                         &copy; <span class="fw-semibold">{{ date('Y') }}</span>
                                         <span
                                             class="text-primary">{{ Setting()->site_name ?? 'YourSiteName' }}</span>
                                         &mdash;
                                         All rights reserved.
                                     </p>
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
     <button class="scroll-top scroll-to-target" data-target="html">
         <span class="ti-angle-up"><img src="{{ asset('assets/img/icon/top-icon.svg') }}" class="img-fluid"
                 alt="Img"></span>
     </button>
     <!-- jQuery -->
     <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>

     <!-- Bootstrap Bundle JS -->
     <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

     <!-- Owl Carousel -->
     <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

     <!-- counterup JS -->
     <script src="{{ asset('assets/js/jquery.waypoints.js') }}"></script>
     <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>

     <!-- Aos -->
     <script src="{{ asset('assets/plugins/aos/aos.js') }}"></script>

     <!-- Select2 JS -->
     <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>

     <!-- Slick JS -->
     <script src="{{ asset('assets/js/slick.js') }}"></script>

     <!-- Custom JS -->
     <script src="{{ asset('assets/js/script.js') }}"></script>
     <script>
         function handleCategorySearch() {
             const categoryId = document.getElementById('categorySelect').value;

             if (!categoryId) {
                 alert('Please select a category.');
                 return false;
             }

             @if (auth()->check())
                 // User is logged in — redirect to request.index
                 let url = "{{ route('request.index') }}?service_id=" + categoryId;
                 window.location.href = url;
             @else
                 // User is not logged in
                 window.location.href = "{{ route('login') }}";
             @endif

             return false; // prevent actual form submission
         }
     </script>


 </body>

 </html>
