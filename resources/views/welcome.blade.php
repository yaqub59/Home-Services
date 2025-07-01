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
     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

     <style>
         .checked {
             color: #ffc107;
         }

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

         .hover-effect {
             transition: transform 0.3s ease, box-shadow 0.3s ease;
         }

         .hover-effect:hover {
             transform: translateY(-5px);
             box-shadow: 0 12px 20px rgba(0, 0, 0, 0.1);
         }

         .hover-service-card {
             transition: all 0.4s ease;
             border: 2px solid transparent;
         }

         .hover-service-card:hover {
             transform: translateY(-6px);
             border-image: linear-gradient(135deg, #6a11cb, #2575fc) 1;
             border-radius: 16px;
             box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
         }

         .zoom-img {
             transition: transform 0.3s ease;
         }

         .hover-service-card:hover .zoom-img {
             transform: scale(1.1);
         }

         .underline {
             width: 60px;
             height: 4px;
             background: linear-gradient(to right, #6a11cb, #2575fc);
             border-radius: 2px;
             animation: pulseLine 1.6s infinite ease-in-out;
         }

         @keyframes pulseLine {

             0%,
             100% {
                 transform: scaleX(1);
                 opacity: 0.7;
             }

             50% {
                 transform: scaleX(1.5);
                 opacity: 1;
             }
         }

         .btn-gradient {
             background: linear-gradient(135deg, #ff6a00, #ee0979);
             border: none;
             transition: all 0.3s ease;
         }

         .btn-gradient:hover {
             box-shadow: 0 0 15px rgba(255, 106, 0, 0.5);
             transform: translateY(-2px);
         }

         @keyframes spin {
             0% {
                 transform: rotate(0deg);
             }

             100% {
                 transform: rotate(360deg);
             }
         }

         #global-loader {
             z-index: 9999;
             background-color: #ffffff;
         }

         @keyframes spin {
             0% {
                 transform: rotate(0deg);
             }

             100% {
                 transform: rotate(360deg);
             }
         }

         #global-loader {
             z-index: 9999;
             background-color: #ffffff;
             transition: opacity 0.5s ease;
         }

         #global-loader.hidden {
             opacity: 0;
             visibility: hidden;
             pointer-events: none;
         }

         .category-scroll a:hover {
             background-color: #0d6efd !important;
             color: white !important;
         }

         .navbar-brand .rounded-circle:hover {
             box-shadow: 0 0 0 3px #cfe2ff;
             transition: all 0.3s ease-in-out;
         }
     </style>

 </head>

 <body class="home-page bg-one">

     <!-- Loader -->
     <!-- ✅ Loader HTML -->
     <div id="global-loader"
         class="d-flex justify-content-center align-items-center vh-100 bg-white position-fixed top-0 start-0 w-100 z-9999">
         <div class="loader-wrapper position-relative" style="width: 120px; height: 120px;">

             <!-- 🔁 Spinner Border -->
             <div class="position-absolute top-0 start-0 w-100 h-100 rounded-circle border border-4 border-primary border-top-0 border-end-0"
                 style="animation: spin 1s linear infinite;"></div>

             <!-- 🌀 Logo Centered -->
             <div class="rounded-circle bg-white d-flex justify-content-center align-items-center shadow"
                 style="width: 100px; height: 100px; position: absolute; top: 10px; left: 10px;">
                 <img src="{{ asset('images/settings/' . Setting()->site_logo) }}" alt="Logo" class="img-fluid"
                     style="max-height: 50px;">
             </div>
         </div>
     </div>


     <!-- Loader -->

     <!-- Main Wrapper -->
     <div class="main-wrapper">

         <!-- Start Navigation -->
         <!-- Header -->
         <header class="header py-2 bg-white shadow-sm">
             <div class="container">
                 <nav class="navbar navbar-expand-lg d-flex align-items-center justify-content-between p-0">

                     <!-- 🔹 Left: Logo + Mobile Menu -->
                     <div class="d-flex align-items-center">
                         <a id="mobile_btn" href="javascript:void(0);" class="me-2 d-lg-none">
                             <span class="bar-icon">
                                 <span></span>
                                 <span></span>
                                 <span></span>
                             </span>
                         </a>
                         <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center">
                             <div class="p-2 rounded-circle shadow-sm"
                                 style="background-color: #f1f5f9; width: 54px; height: 54px; display: flex; justify-content: center; align-items: center;">
                                 <img src="{{ asset('images/settings/' . Setting()->site_logo) }}" height="40"
                                     width="40" class="img-fluid rounded-circle" alt="Logo">
                             </div>
                         </a>

                     </div>
                     <div class="category-scroll d-none d-lg-flex flex-grow-1 mx-3 gap-2 overflow-auto py-2 px-2 justify-content-center"
                         style="scroll-snap-type: x mandatory; white-space: nowrap; scrollbar-width: thin; background: transparent;">
                         @php $services = getAllServices()->take(10); @endphp
                         @foreach ($services as $service)
                             <a href="{{ auth()->check() ? route('request.index', ['service_id' => $service->id]) : route('login') }}"
                                 class="text-decoration-none text-dark fw-medium d-inline-flex align-items-center rounded-pill px-2 py-1 me-1"
                                 style="scroll-snap-align: start; min-width: max-content; font-size: 0.85rem; transition: all 0.3s ease;">
                                 <i class="bi bi-gear me-1" style="font-size: 0.9rem;"></i>
                                 {{ $service->name }}
                             </a>
                         @endforeach
                     </div>





                     <!-- 🔸 Right: Auth Buttons -->
                     <ul class="nav header-navbar-rht d-flex align-items-center gap-2 ms-auto">
                         <li>
                             <a href="{{ route('register') }}"
                                 class="btn btn-sm rounded-pill px-3 py-2 d-flex align-items-center text-primary border-0"
                                 style="background: transparent; min-width: 100px;">
                                 <img src="{{ asset('assets/img/icon/users.svg') }}" class="me-2" width="16"
                                     alt="icon">
                                 Register
                             </a>
                         </li>
                         <li>
                             <a href="{{ route('login') }}"
                                 class="btn btn-sm rounded-pill px-3 py-2 d-flex align-items-center text-primary border-0"
                                 style="background: transparent; min-width: 100px;">
                                 <img src="{{ asset('assets/img/icon/lock.svg') }}" class="me-2" width="16"
                                     alt="icon">
                                 Login
                             </a>
                         </li>
                     </ul>


                 </nav>
             </div>
         </header>
         {{-- Video --}}

         <div class="position-relative overflow-hidden" style="height: 100vh;">

             <!-- 🔹 Background Video -->
             <video autoplay muted loop playsinline
                 class="w-100 h-100 object-fit-cover position-absolute top-0 start-0 z-0">
                 <source src="{{ asset('videos/home-banner.mp4') }}" type="video/mp4">
                 Your browser does not support the video tag.
             </video>

             <!-- 🔹 Gradient Overlay -->
             <div class="position-absolute top-0 start-0 w-100 h-100"
                 style="background: linear-gradient(rgba(15, 23, 42, 0.6), rgba(15, 23, 42, 0.6)); z-index: 1;"></div>

             <!-- 🔹 Content -->
             <div class="position-relative z-2 h-100 d-flex justify-content-center align-items-center">
                 <div class="text-center px-4 py-5 rounded-4 shadow-lg"
                     style="backdrop-filter: blur(8px); background: rgba(255, 255, 255, 0.05); max-width: 700px;">

                     <h1 class="display-4 fw-bold text-white mb-3">Welcome to Our Platform</h1>
                     <p class="lead text-white-50 mb-4">
                         Connecting homeowners with skilled, verified service professionals.
                     </p>
                     <a href="{{ route('register') }}" class="btn btn-primary px-4 py-2 rounded-pill shadow-sm">
                         Get Started
                     </a>

                 </div>
             </div>

         </div>
         {{-- End Video --}}



         <!-- /Header -->

         <section class="section home-banner row-middle py-5 position-relative"
             style="background: linear-gradient(to right, #f8f9fa, #ffffff); overflow: hidden;">
             <div class="container">
                 <div class="row g-4 mt-4 align-items-stretch">
                     <!-- Banner Text (Left Side) -->
                     <div class="col-lg-7 d-flex">
                         <div class="d-flex align-items-stretch w-100">
                             <div class="banner-content aos w-100 d-flex flex-column justify-content-center"
                                 data-aos="fade-up" data-aos-duration="1200"
                                 style="backdrop-filter: blur(10px); background: rgba(255, 255, 255, 0.65); padding: 40px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">

                                 <!-- Highlight Badges -->
                                 <div class="mb-4">
                                     <div class="row g-3">
                                         @php
                                             $highlights = [
                                                 [
                                                     'icon' => 'fas fa-tools',
                                                     'color' => 'primary',
                                                     'title' => 'Expert Technicians',
                                                     'desc' => '1000+ verified professionals',
                                                 ],
                                                 [
                                                     'icon' => 'fas fa-clock',
                                                     'color' => 'success',
                                                     'title' => 'Fast Response',
                                                     'desc' => 'Within 30 minutes',
                                                 ],
                                                 [
                                                     'icon' => 'fas fa-shield-alt',
                                                     'color' => 'danger',
                                                     'title' => 'Secure & Reliable',
                                                     'desc' => 'Safe payment and quality check',
                                                 ],
                                             ];
                                         @endphp
                                         @foreach ($highlights as $index => $item)
                                             <div class="col-md-4" data-aos="fade-up"
                                                 data-aos-delay="{{ 100 * $index }}">
                                                 <div
                                                     class="p-3 bg-white rounded-4 shadow-sm h-100 d-flex align-items-start gap-3 hover-effect position-relative">
                                                     <i
                                                         class="{{ $item['icon'] }} fa-2x text-{{ $item['color'] }}"></i>
                                                     <div>
                                                         <h5 class="fw-bold mb-1">{{ $item['title'] }}</h5>
                                                         <small class="text-muted">{{ $item['desc'] }}</small>
                                                     </div>
                                                 </div>
                                             </div>
                                         @endforeach
                                     </div>
                                 </div>

                                 <!-- Counters -->
                                 <div class="row text-center mt-4">
                                     <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="100">
                                         <h3 class="fw-bold mb-0 text-primary">2M+</h3>
                                         <small class="text-muted">Happy Customers</small>
                                     </div>
                                     <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="200">
                                         <h3 class="fw-bold mb-0 text-success">1.2k</h3>
                                         <small class="text-muted">Experts Online</small>
                                     </div>
                                     <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="300">
                                         <h3 class="fw-bold mb-0 text-warning">99%</h3>
                                         <small class="text-muted">Positive Feedback</small>
                                     </div>
                                     <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="400">
                                         <h3 class="fw-bold mb-0 text-danger">24/7</h3>
                                         <small class="text-muted">Support</small>
                                     </div>
                                 </div>

                                 <!-- Call to Action -->
                                 <div class="text-center mt-5" data-aos="zoom-in">
                                     <a href="{{ route('register') }}"
                                         class="btn btn-lg px-5 py-3 text-white fw-semibold"
                                         style="background: linear-gradient(to right, #ff416c, #ff4b2b); border-radius: 50px; box-shadow: 0 0 10px rgba(255,75,43,0.3); transition: 0.3s;">
                                         <i class="fas fa-bolt me-2"></i> Get Started Now
                                     </a>
                                     <p class="mt-2 text-muted">Create your free account to explore services and get
                                         matched with trusted professionals.</p>
                                 </div>

                                 <!-- Search Form -->
                                 @php $services = getAllServices(); @endphp
                                 <form class="form mt-4" id="searchForm" onsubmit="return handleCategorySearch();"
                                     data-aos="fade-up" data-aos-delay="500">
                                     <div class="row g-2 align-items-center">
                                         <div class="col-md-8">
                                             <select class="form-select form-control border-primary"
                                                 id="categorySelect">
                                                 <option value="">🔍 Select Category</option>
                                                 @foreach ($services as $service)
                                                     <option value="{{ $service->id }}">{{ $service->name }}
                                                     </option>
                                                 @endforeach
                                             </select>
                                         </div>
                                         <div class="col-md-4">
                                             <button class="btn w-100 text-white" type="submit"
                                                 style="background: linear-gradient(135deg, #ff6a00, #ee0979); border: none;">
                                                 <i class="fas fa-search me-1"></i> Search
                                             </button>
                                         </div>
                                     </div>
                                 </form>

                             </div>
                         </div>
                     </div>

                     <!-- Banner Image (Right Side) -->
                     <div class="col-lg-5 d-flex">
                         <div class="aos w-100 d-flex align-items-center justify-content-center" data-aos="zoom-in"
                             data-aos-duration="1200">
                             <img src="{{ asset('images/banner.webp') }}"
                                 class="img-fluid rounded-4 shadow h-100 w-100"
                                 style="object-fit: cover; max-height: 100%; min-height: 100%;" alt="banner image">
                         </div>
                     </div>
                 </div>
             </div>

             <!-- Wave Shape -->
             <div style="position: absolute; bottom: -1px; left: 0; width: 100%; overflow: hidden; line-height: 0;">
                 <svg viewBox="0 0 500 50" preserveAspectRatio="none" style="height: 40px; width: 100%;">
                     <path d="M0,20 C150,60 350,0 500,30 L500,00 L0,0 Z" style="stroke: none; fill: #f8f9fa;"></path>
                 </svg>
             </div>
         </section>


         {{-- Banner Section --}}
         <section class="py-5 bg-white">
             <div class="container">
                 <div class="row align-items-center justify-content-between g-5">

                     <!-- 🔹 Text Side -->
                     <div class="col-md-6">
                         <h2 class="fw-bold mb-3 text-primary display-6">
                             Trusted Home Services, Just One Click Away
                         </h2>
                         <p class="text-muted lead mb-4">
                             From AC repair to beauty services, get top-rated professionals at your doorstep.
                         </p>
                         {{-- <a href="{{ route('services') }}" class="btn btn-primary px-4 py-2 rounded-pill shadow-sm">
                             Explore Now
                         </a> --}}
                     </div>

                     <!-- 🔹 Image Side -->
                     <div class="col-md-6 text-center">
                         <img src="{{ asset('bannner/baner Image.png') }}" class="img-fluid rounded-4 shadow"
                             alt="Banner Image">
                     </div>

                 </div>
             </div>
         </section>


         {{-- End Banneer Section --}}



         <section class="section review py-5" style="background-color: #f8f9fa;">
             <div class="container">
                 <!-- Section Header -->
                 <div class="col-md-12 text-center mb-5">
                     <div class="section-header aos" data-aos="fade-down">
                         <h2 class="fw-bold display-5" style="position: relative; display: inline-block;">
                             Explore Our <span class="text-primary">Top Services</span>
                         </h2>
                         <div class="underline mx-auto mt-2 mb-3"></div>
                         <p class="text-muted fs-6" style="max-width: 600px; margin: 0 auto;">
                             Discover the most in-demand services people trust every day — from experts who care.
                         </p>
                     </div>
                 </div>


                 @php
                     $services = getAllServices();
                 @endphp

                 <!-- Service Cards Grid -->
                 <div class="row g-4">
                     @foreach ($services as $service)
                         <div class="col-lg-3 col-md-6 col-sm-12" data-aos="fade-up"
                             data-aos-delay="{{ $loop->index * 100 }}">
                             @php
                                 $serviceUrl = auth()->check()
                                     ? route('request.index', ['service_id' => $service->id])
                                     : route('login', [
                                         'redirect' => route('request.index', ['service_id' => $service->id]),
                                     ]);
                             @endphp

                             <a href="{{ $serviceUrl }}" class="text-decoration-none">
                                 <div
                                     class="card service-card h-100 text-center border-0 shadow-sm hover-service-card p-3 rounded-4 bg-white">
                                     <div class="card-body d-flex flex-column align-items-center">
                                         <div class="service-img-wrapper position-relative mb-3"
                                             style="width: 100px; height: 100px;">
                                             <img src="{{ asset('images/admin/services/' . ($service->image ?? 'default-icon.svg')) }}"
                                                 alt="{{ $service->name }}"
                                                 class="rounded-circle img-fluid shadow service-img zoom-img"
                                                 style="width: 100%; height: 100%; object-fit: cover; border: 4px solid transparent;">
                                         </div>
                                         <h5 class="fw-semibold mb-2 text-dark">{{ $service->name }}</h5>
                                         <p class="text-muted small mb-0">
                                             {{ \Illuminate\Support\Str::limit($service->description, 80) }}</p>
                                     </div>
                                 </div>
                             </a>
                         </div>
                     @endforeach
                 </div>
             </div>
         </section>

         <!-- Footer -->
         <footer class="footer text-white position-relative" style="background: #0f172a; overflow: hidden;">
             <div class="container py-5">
                 <div class="row gy-4">

                     <!-- Logo + About -->
                     <div class="col-lg-4 col-md-6">
                         <div class="d-flex align-items-center mb-3">
                             <img src="{{ asset('images/settings/' . Setting()->site_logo) }}" alt="Logo"
                                 width="50" class="me-2">
                             <h5 class="fw-bold text-white m-0">{{ Setting()->site_name ?? 'HomeServices' }}</h5>
                         </div>
                         <p class="small text-light">
                             Discover and hire top-rated home service professionals. Trusted, secure & quick.
                         </p>
                         <div class="d-flex gap-3 mt-3">
                             <a href="https://www.facebook.com/profile.php?id=61577758240283"
                                 class="text-light fs-5"><i class="fab fa-facebook-f"></i></a>
                             <a href="#" class="text-light fs-5"><i class="fab fa-instagram"></i></a>
                             <a href="#" class="text-light fs-5"><i class="fab fa-linkedin-in"></i></a>
                             <a href="#" class="text-light fs-5"><i class="fab fa-twitter"></i></a>
                         </div>
                     </div>

                     <!-- Services -->
                     <div class="col-lg-2 col-md-6">
                         <h6 class="text-uppercase fw-bold mb-3">Services</h6>
                         <ul class="list-unstyled small">
                             @foreach (getAllServices()->take(4) as $service)
                                 <li class="mb-2">
                                     <a href="{{ route('request.index', ['service_id' => $service->id]) }}"
                                         class="text-light text-decoration-none">
                                         <i class="fas fa-chevron-right me-1 text-primary"></i> {{ $service->name }}
                                     </a>
                                 </li>
                             @endforeach
                         </ul>
                     </div>

                     <!-- Quick Links -->
                     <div class="col-lg-2 col-md-6">
                         <h6 class="text-uppercase fw-bold mb-3">Quick Links</h6>
                         <ul class="list-unstyled small">
                             <li class="mb-2"><a href="{{ url('/') }}"
                                     class="text-light text-decoration-none">Home</a></li>
                             <li class="mb-2"><a href="{{ route('login') }}"
                                     class="text-light text-decoration-none">Login</a></li>
                             <li class="mb-2"><a href="{{ route('register') }}"
                                     class="text-light text-decoration-none">Register</a></li>
                             <li class="mb-2"><a href="#" class="text-light text-decoration-none">FAQs</a>
                             </li>
                         </ul>
                     </div>

                     <!-- Contact Info -->
                     <div class="col-lg-4 col-md-6">
                         <h6 class="text-uppercase fw-bold mb-3">Contact Us</h6>
                         <ul class="list-unstyled small text-light">
                             <li class="mb-2"><i class="fas fa-map-marker-alt me-2 text-primary"></i>123 Main
                                 Street, Lahore, PK</li>
                             <li class="mb-2"><i
                                     class="fas fa-envelope me-2 text-primary"></i>support@homeservices.com</li>
                             <li><i class="fas fa-phone-alt me-2 text-primary"></i>+92 300 1234567</li>
                         </ul>
                     </div>
                 </div>

                 <hr class="text-secondary my-4">

                 <div class="text-center small text-light">
                     &copy; {{ date('Y') }} <span
                         class="text-primary fw-bold">{{ Setting()->site_name ?? 'HomeServices' }}</span> — All rights
                     reserved.
                 </div>
             </div>

             <!-- Top Border Glow -->
             <div
                 style="position: absolute; top: 0; left: 0; width: 100%; height: 4px; background: linear-gradient(to right, #ff6a00, #ee0979);">
             </div>
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
     <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
     <script>
         AOS.init();
     </script>
     <script>
         window.addEventListener('load', () => {
             const loader = document.getElementById('global-loader');
             if (loader) {
                 loader.classList.add('hidden'); // fades out and disables pointer events
             }
         });
     </script>
 </body>

 </html>
