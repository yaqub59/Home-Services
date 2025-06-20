 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
     <title>Home Page</title>

     <!-- Favicon -->
     <link rel="shortcut icon" href="{{ asset('images/settings/' .Setting()->site_favicon) }}">

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
                     <div class="navbar-header">
                         <a id="mobile_btn" href="javascript:void(0);">
                             <span class="bar-icon">
                                 <span></span>
                                 <span></span>
                                 <span></span>
                             </span>
                         </a>
                         <a href="index.html" class="navbar-brand logo">
                             <img src="{{ asset('images/settings/' . Setting()->site_logo) }}" height="70"
                                 width="70" class="img-fluid" alt="Logo">
                         </a>
                     </div>
                     <div class="main-menu-wrapper">
                         <div class="menu-header">
                             <a href="index.html" class="menu-logo">
                                 <img src="{{ asset('images/settings/' . Setting()->site_logo) }}" height="70"
                                     width="70" class="img-fluid" alt="Logo">
                             </a>
                         </div>

                     </div>
                     <ul class="nav header-navbar-rht reg-head">
                         <li><a href="{{ route('register') }}" class="reg-btn"><img src="assets/img/icon/users.svg"
                                     class="me-1" alt="img">Register</a></li>
                         <li><a href="{{ route('login') }}" class="log-btn"><img src="assets/img/icon/lock.svg"
                                     class="me-1" alt="img"> Login</a></li>
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
                             <form class="form" name="store" id="store" method="post" action="project.html">
                                 <div class="form-inner">
                                     <div class="input-group">
                                         <span class="drop-detail">
                                             <select class="form-control select" name="storeID">
                                                 <option value="project.html">Select</option>
                                                 <option value="developer.html">Project</option>
                                                 <option value="developer.html">Freelancers</option>
                                             </select>
                                         </span>
                                         <input type="email" class="form-control" placeholder="Keywords">
                                         <button class="btn btn-primary sub-btn" type="submit">Search </button>
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
                 <div class="row">
                     <div class="col-md-12 col-sm-12 col-12 mx-auto text-center">
                         <div class="section-header aos" data-aos="fade-up">
                             <h2 class="header-title">Popular Categories</h2>
                             <p>Get some Inspirations from 1300+ skills</p>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-lg-3 col-md-6 col-12 aos" data-aos="zoom-in" data-aos-duration="1000">
                             <div class="popular-catergories">
                                 <div class="popular-catergories-img">
                                     <span><img src="assets/img/icon/categories1.svg" alt="img"></span>
                                 </div>
                                 <div class="popular-catergories-content">
                                     <h5>Development & IT</h5>
                                     <a href="javascript:void(0);">958 Skills<i
                                             class="feather-arrow-right ms-2"></i></a>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-3 col-md-6 col-12 aos" data-aos="zoom-in" data-aos-duration="1500">
                             <div class="popular-catergories">
                                 <div class="popular-catergories-img">
                                     <span><img src="assets/img/icon/categories7.svg" alt="img"></span>
                                 </div>
                                 <div class="popular-catergories-content">
                                     <h5>Design & Creative</h5>
                                     <a href="javascript:void(0);">515 Skills<i
                                             class="feather-arrow-right ms-2"></i></a>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-3 col-md-6 col-12 aos" data-aos="zoom-in" data-aos-duration="2000">
                             <div class="popular-catergories">
                                 <div class="popular-catergories-img">
                                     <span><img src="assets/img/icon/categories3.svg" alt="img"></span>
                                 </div>
                                 <div class="popular-catergories-content">
                                     <h5>Digital Marketing</h5>
                                     <a href="javascript:void(0);">486 Skills<i
                                             class="feather-arrow-right ms-2"></i></a>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-3 col-md-6 col-12 aos" data-aos="zoom-in" data-aos-duration="2500">
                             <div class="popular-catergories">
                                 <div class="popular-catergories-img">
                                     <span><img src="assets/img/icon/categories4.svg" alt="img"></span>
                                 </div>
                                 <div class="popular-catergories-content">
                                     <h5>Writing & Translation</h5>
                                     <a href="javascript:void(0);">956 Skills<i
                                             class="feather-arrow-right ms-2"></i></a>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-3 col-md-6 col-12 aos" data-aos="zoom-in" data-aos-duration="1000">
                             <div class="popular-catergories">
                                 <div class="popular-catergories-img">
                                     <span><img src="assets/img/icon/categories5.svg" alt="img"></span>
                                 </div>
                                 <div class="popular-catergories-content">
                                     <h5>Music & Video</h5>
                                     <a href="javascript:void(0);">662 Skills<i
                                             class="feather-arrow-right ms-2"></i></a>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-3 col-md-6 col-12 aos" data-aos="zoom-in" data-aos-duration="1500">
                             <div class="popular-catergories">
                                 <div class="popular-catergories-img">
                                     <span><img src="assets/img/icon/categories6.svg" alt="img"></span>
                                 </div>
                                 <div class="popular-catergories-content">
                                     <h5>Video & Animation</h5>
                                     <a href="javascript:void(0);">226 Skills<i
                                             class="feather-arrow-right ms-2"></i></a>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-3 col-md-6 col-12 aos" data-aos="zoom-in" data-aos-duration="2000">
                             <div class="popular-catergories">
                                 <div class="popular-catergories-img">
                                     <span><img src="assets/img/icon/categories7.svg" alt="img"></span>
                                 </div>
                                 <div class="popular-catergories-content">
                                     <h5>Engineering & Architecture</h5>
                                     <a href="javascript:void(0);">756 Skills<i
                                             class="feather-arrow-right ms-2"></i></a>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-3 col-md-6 col-12 aos" data-aos="zoom-in" data-aos-duration="2500">
                             <div class="popular-catergories">
                                 <div class="popular-catergories-img">
                                     <span><img src="assets/img/icon/categories8.svg" alt="img"></span>
                                 </div>
                                 <div class="popular-catergories-content">
                                     <h5>Finance & Accounting</h5>
                                     <a href="javascript:void(0);">958 Skills<i
                                             class="feather-arrow-right ms-2"></i></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>

         <!--- Developed Project  -->
         <section class="section news pt-0 review-set">
             <div class="container">
                 <div class="row">
                     <!-- Feature Item -->
                     <div class="col-lg-6 col-md-12">
                         <div class="work-box bg1" data-aos="zoom-in" data-aos-duration="1000">
                             <div class="work-content">
                                 <h2>I need a Developed <span>Project</span></h2>
                                 <p>Get the perfect Developed project for your budget from our creative community.</p>
                                 <a href="project.html" class="btn btn-primary">Browse</a>
                             </div>
                         </div>
                     </div>
                     <!-- /Feature Item -->
                     <div class="col-lg-6 col-md-12">
                         <div class="work-box aos bg2" data-aos="zoom-in" data-aos-duration="2000">
                             <div class="work-content ">
                                 <h2>Find Your Next Great <span>Job Opportunity!</span></h2>
                                 <p>Do you want to earn money, find unlimited clients and build your freelance career?
                                 </p>
                                 <a href="project.html" class="btn btn-primary">Browse</a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
         <!--- /Developed Project  -->

         <!-- Our Feature -->
         <section class="section projects pt-0">
             <div class="container">
                 <div class="row">
                     <div class="col-md-12 col-sm-12 col-12 mx-auto text-center">
                         <div class="section-header aos" data-aos="fade-up">
                             <h2 class="header-title">Achievement We Have Earned</h2>
                             <p>At Freelancer, we believe that talent is borderless and opportunity should be too.</p>
                         </div>
                     </div>
                     <!-- Feature Item -->
                     <div class="col-xl-3 col-md-6 aos" data-aos="zoom-in" data-aos-duration="1000">
                         <div class="feature-item freelance-count ">
                             <div class="feature-icon">
                                 <img src="assets/img/icon/achievement-1.svg" class="img-fluid" alt="Img">
                             </div>
                             <div class="feature-content course-count">
                                 <h3 class="counter-up">9,207</h3>
                                 <p>Freelance developers</p>
                             </div>
                         </div>
                     </div>
                     <!-- /Feature Item -->

                     <!-- Feature Item -->
                     <div class="col-xl-3 col-md-6 aos" data-aos="zoom-in" data-aos-duration="1500">
                         <div class="feature-item ">
                             <div class="feature-icon">
                                 <img src="assets/img/icon/achievement-2.svg" class="img-fluid" alt="Img">
                             </div>
                             <div class="feature-content course-count">
                                 <h3><span class="counter-up">8368 </span></h3>
                                 <p>Projects Added</p>
                             </div>
                         </div>
                     </div>
                     <!-- /Feature Item -->

                     <!-- Feature Item -->
                     <div class="col-xl-3 col-md-6 aos" data-aos="zoom-in" data-aos-duration="2000">
                         <div class="feature-item comp-project ">
                             <div class="feature-icon">
                                 <img src="assets/img/icon/achievement-3.svg" class="img-fluid" alt="Img">
                             </div>
                             <div class="feature-content course-count">
                                 <h3 class="counter-up">9198</h3>
                                 <p>Completed projects</p>
                             </div>
                         </div>
                     </div>
                     <!-- /Feature Item -->

                     <!-- Feature Item -->
                     <div class="col-xl-3 col-md-6 aos" data-aos="zoom-in" data-aos-duration="2500">
                         <div class="feature-item comp-project ">
                             <div class="feature-icon">
                                 <img src="assets/img/icon/achievement-4.svg" class="img-fluid" alt="Img">
                             </div>
                             <div class="feature-content course-count">
                                 <h3 class="counter-up">998</h3>
                                 <p>Companies Registered</p>
                             </div>
                         </div>
                     </div>
                     <!-- /Feature Item -->

                 </div>
             </div>
         </section>
         <!-- /Our Feature -->
         <section class="section review">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-6">
                         <div class="work-set-image">
                             <div class="work-set">
                                 <div class="recent-pro-img aos" data-aos="zoom-in" data-aos-duration="1000">
                                     <img src="assets/img/work1.jpg" alt="Img" class="img-fluid ">
                                 </div>
                             </div>
                             <div class="work-sets">
                                 <div class="recent-pro-img">
                                     <img src="assets/img/work2.jpg" alt="Img" class="img-fluid mb-2 aos"
                                         data-aos="zoom-in" data-aos-duration="2000">
                                     <img src="assets/img/work3.jpg" alt="Img" class="img-fluid aos"
                                         data-aos="zoom-in" data-aos-duration="2500">
                                 </div>
                             </div>
                         </div>

                     </div>
                     <div class="col-lg-6">
                         <div class="aos " data-aos="fade-up">
                             <div class="demand-professional">
                                 <h2>Get Expert in Less Time and Our Work Process</h2>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                     incididunt ut labore et dolore magna aliqua. </p>
                             </div>
                             <div class="demand-post-job">
                                 <div class="demand-post-img">
                                     <img src="assets/img/recent-icon-01.svg" alt="Img" class="img-fluid">
                                 </div>
                                 <div class="demand-content">
                                     <h6>Post a job</h6>
                                     <p>Publish the job posting on your selected platforms. Follow the specific
                                         submission process for each platform.</p>
                                 </div>
                             </div>
                             <div class="demand-post-job">
                                 <div class="demand-post-img">
                                     <img src="assets/img/recent-icon-02.svg" alt="Img" class="img-fluid">
                                 </div>
                                 <div class="demand-content">
                                     <h6>Hire Freelancers</h6>
                                     <p>Depending on the platform, you can either wait for freelancers to apply or
                                         invite specific freelancers to submit proposals.</p>
                                 </div>
                             </div>
                             <div class="demand-post-job">
                                 <div class="demand-post-img">
                                     <img src="assets/img/recent-icon-03.svg" alt="Img" class="img-fluid">
                                 </div>
                                 <div class="demand-content">
                                     <h6>Get Work Done</h6>
                                     <p>Utilize productivity tools and apps to help you stay organized, manage tasks,
                                         and set reminders.</p>
                                 </div>
                             </div>

                         </div>
                     </div>
                 </div>
             </div>
         </section>


         <!-- Projects -->
         <section class="section projects">
             <div class="container">
                 <div class="row">
                     <div class="col-12 col-md-12 mx-auto">
                         <div class="section-header text-center aos" data-aos="fade-up">
                             <h2 class="header-title">Get Inspired By Development Projects</h2>
                             <p>High performing solutions to your requests</p>
                         </div>
                     </div>
                 </div>
                 <div class="row">

                     <!--- Project Item  -->
                     <div class="col-lg-3 col-md-6 col-sm-6">
                         <div class="project-item aos" data-aos="fade-up">
                             <div class="project-img">
                                 <a href="project.html"><img src="assets/img/project/project-01.jpg" alt="Img"
                                         class="img-fluid"></a>
                                 <h6>Android Apps</h6>
                             </div>
                             <div class="d-flex justify-content-between align-items-start">
                                 <div class="project-content">
                                     <h4>45</h4>
                                     <h5><a href="project.html">Projects</a></h5>
                                 </div>
                                 <div class="pro-icon">
                                     <div class="project-icon"></div>
                                 </div>
                                 <div class="project-content">
                                     <h4>20</h4>
                                     <h5><a href="project.html">Developers</a></h5>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!--- /Project Item  -->

                     <!--- Project Item  -->
                     <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                         <div class="project-item aos" data-aos="fade-up">
                             <div class="project-img">
                                 <a href="project.html"><img src="assets/img/project/project-02.jpg" alt="Img"
                                         class="img-fluid"></a>
                                 <h6>Laravel</h6>
                             </div>
                             <div class="d-flex justify-content-between align-items-start">
                                 <div class="project-content">
                                     <h4>52</h4>
                                     <h5><a href="project.html">Projects</a></h5>
                                 </div>
                                 <div class="pro-icon">
                                     <div class="project-icon"></div>
                                 </div>
                                 <div class="project-content">
                                     <h4>17</h4>
                                     <h5><a href="project.html">Developers</a></h5>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!--- /Project Item  -->

                     <!--- Project-Item  -->
                     <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                         <div class="project-item aos" data-aos="fade-up">
                             <div class="project-img">
                                 <a href="project.html"><img src="assets/img/project/project-03.jpg" alt="Img"
                                         class="img-fluid"></a>
                                 <h6>React</h6>
                             </div>
                             <div class="d-flex justify-content-between align-items-start">
                                 <div class="project-content">
                                     <h4>58</h4>
                                     <h5><a href="project.html">Projects</a></h5>
                                 </div>
                                 <div class="pro-icon">
                                     <div class="project-icon"></div>
                                 </div>
                                 <div class="project-content">
                                     <h4>12</h4>
                                     <h5><a href="project.html">Developers</a></h5>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!--- /Project Item  -->

                     <!--- Project Item  -->
                     <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                         <div class="project-item aos" data-aos="fade-up">
                             <div class="project-img">
                                 <a href="project.html"><img src="assets/img/project/project-04.jpg" alt="Img"
                                         class="img-fluid"></a>
                                 <h6>Angular</h6>
                             </div>
                             <div class="d-flex justify-content-between align-items-start">
                                 <div class="project-content">
                                     <h4>26</h4>
                                     <h5><a href="project.html">Projects</a></h5>
                                 </div>
                                 <div class="pro-icon">
                                     <div class="project-icon"></div>
                                 </div>
                                 <div class="project-content">
                                     <h4>19</h4>
                                     <h5><a href="project.html">Developers</a></h5>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!--- /Project Item  -->

                     <!--- Project Item  -->
                     <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                         <div class="project-item aos" data-aos="fade-up">
                             <div class="project-img">
                                 <a href="project.html"><img src="assets/img/project/project-05.jpg" alt="Img"
                                         class="img-fluid"></a>
                                 <h6>.NET</h6>
                             </div>
                             <div class="d-flex justify-content-between align-items-start">
                                 <div class="project-content">
                                     <h4>45</h4>
                                     <h5><a href="project.html">Projects</a></h5>
                                 </div>
                                 <div class="pro-icon">
                                     <div class="project-icon"></div>
                                 </div>
                                 <div class="project-content">
                                     <h4>20</h4>
                                     <h5><a href="project.html">Developers</a></h5>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!--- /Project Item  -->

                     <!--- Project Item  -->
                     <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                         <div class="project-item aos" data-aos="fade-up">
                             <div class="project-img">
                                 <a href="project.html"><img src="assets/img/project/project-06.jpg" alt="Img"
                                         class="img-fluid"></a>
                                 <h6>Java</h6>
                             </div>
                             <div class="d-flex justify-content-between align-items-start">
                                 <div class="project-content">
                                     <h4>49</h4>
                                     <h5><a href="project.html">Projects</a></h5>
                                 </div>
                                 <div class="pro-icon">
                                     <div class="project-icon"></div>
                                 </div>
                                 <div class="project-content">
                                     <h4>36</h4>
                                     <h5><a href="project.html">Developers</a></h5>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!--- /Project Item  -->

                     <!--- Project Item  -->
                     <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                         <div class="project-item aos" data-aos="fade-up">
                             <div class="project-img">
                                 <a href="project.html"><img src="assets/img/project/project-07.jpg" alt="Img"
                                         class="img-fluid"></a>
                                 <h6>Python</h6>
                             </div>
                             <div class="d-flex justify-content-between align-items-start">
                                 <div class="project-content">
                                     <h4>73</h4>
                                     <h5><a href="project.html">Projects</a></h5>
                                 </div>
                                 <div class="pro-icon">
                                     <div class="project-icon"></div>
                                 </div>
                                 <div class="project-content">
                                     <h4>59</h4>
                                     <h5><a href="project.html">Developers</a></h5>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!--- /Project Item  -->

                     <!--- Project-Item  -->
                     <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                         <div class="project-item aos" data-aos="fade-up">
                             <div class="project-img">
                                 <a href="project.html"><img src="assets/img/project/project-08.jpg" alt="Img"
                                         class="img-fluid"></a>
                                 <h6>PHP</h6>
                             </div>
                             <div class="d-flex justify-content-between align-items-start">
                                 <div class="project-content">
                                     <h4>61</h4>
                                     <h5><a href="project.html">Projects </a></h5>
                                 </div>
                                 <div class="pro-icon">
                                     <div class="project-icon"></div>
                                 </div>
                                 <div class="project-content">
                                     <h4>53</h4>
                                     <h5><a href="project.html">Developers</a></h5>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!--- /Project Item  -->

                 </div>
                 <div class="row">
                     <div class="col-md-12 text-center">
                         <div class="see-all aos" data-aos="fade-up">
                             <a href="project.html" class="btn all-btn">View More Projects</a>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
         <!-- /Projects -->
         <!-- Top Instructor -->
         <section class="section developer">
             <div class="container">
                 <div class="row">
                     <div class="col-md-12 col-sm-12 col-12 mx-auto">
                         <div class="section-header aos" data-aos="fade-up">
                             <h2 class="header-title">Most Hired Developers</h2>
                             <p>Work with talented people at the most affordable price</p>
                         </div>
                     </div>
                 </div>
                 <div id="developers-slider" class="owl-carousel owl-theme developers-slider aos" data-aos="fade-up">
                     <div class="freelance-widget">
                         <div class="freelance-content">
                             <a data-toggle="modal" href="#rating" class="favourite"><i
                                     class="feather-heart"></i></a>
                             <div class="freelance-img">
                                 <a href="developer-details.html">
                                     <img src="assets/img/user/avatar-1.jpg" alt="User Image">
                                     <span class="verified"><i class="fas fa-check-circle"></i></span>
                                 </a>
                             </div>
                             <div class="freelance-info">
                                 <h3><a href="developer-details.html">Dran Gonzalez</a></h3>
                                 <div class="freelance-specific">React Developer</div>
                                 <div class="freelance-location"><img src="assets/img/icon/locations.svg"
                                         class="me-2" alt="img">Illinois, USA</div>
                                 <div class="rating">
                                     <i class="fas fa-star filled"></i>
                                     <i class="fas fa-star filled"></i>
                                     <i class="fas fa-star filled"></i>
                                     <i class="fas fa-star filled"></i>
                                     <i class="fas fa-star"></i>
                                     <span class="average-rating">5.0 (30)</span>
                                 </div>
                                 <div class="freelance-tags">
                                     <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web
                                             Design</span></a>
                                     <a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI
                                             Design</span></a>
                                     <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node
                                             Js</span></a>
                                 </div>
                                 <div class="freelance-blk-location">
                                     <div class="freelancers-price">$25 Hourly</div>

                                 </div>
                             </div>
                         </div>
                         <div class="cart-hover">
                             <a href="developer-details.html" class="btn-cart" tabindex="-1">View Profile</a>
                         </div>
                     </div>
                     <div class="freelance-widget">
                         <div class="freelance-content">
                             <a data-toggle="modal" href="#rating" class="favourite"><i
                                     class="feather-heart"></i></a>
                             <div class="freelance-img">
                                 <a href="developer-details.html">
                                     <img src="assets/img/user/avatar-2.jpg" alt="User Image">
                                     <span class="verified"><i class="fas fa-check-circle"></i></span>
                                 </a>
                             </div>
                             <div class="freelance-info">
                                 <h3><a href="developer-details.html">Timothy Smith</a></h3>
                                 <div class="freelance-specific">PHP Developer</div>
                                 <div class="freelance-location"><img src="assets/img/icon/locations.svg"
                                         class="me-2" alt="img">Illinois, USA</div>
                                 <div class="rating">
                                     <i class="fas fa-star filled"></i>
                                     <i class="fas fa-star filled"></i>
                                     <i class="fas fa-star filled"></i>
                                     <i class="fas fa-star"></i>
                                     <i class="fas fa-star"></i>
                                     <span class="average-rating">3.5 (25)</span>
                                 </div>
                                 <div class="freelance-tags">
                                     <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web
                                             Design</span></a>
                                     <a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI
                                             Design</span></a>
                                     <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node
                                             Js</span></a>
                                 </div>
                                 <div class="freelance-blk-location">
                                     <div class="freelancers-price">$25 Hourly</div>

                                 </div>
                             </div>
                         </div>
                         <div class="cart-hover">
                             <a href="developer-details.html" class="btn-cart" tabindex="-1">View Profile</a>
                         </div>
                     </div>
                     <div class="freelance-widget">
                         <div class="freelance-content">
                             <a data-toggle="modal" href="#rating" class="favourite"><i
                                     class="feather-heart"></i></a>
                             <div class="freelance-img">
                                 <a href="developer-details.html">
                                     <img src="assets/img/user/avatar-3.jpg" alt="User Image">
                                     <span class="verified"><i class="fas fa-check-circle"></i></span>
                                 </a>
                             </div>
                             <div class="freelance-info">
                                 <h3><a href="developer-details.html">Janet Paden</a></h3>
                                 <div class="freelance-specific">Graphic Designer</div>
                                 <div class="freelance-location"><img src="assets/img/icon/locations.svg"
                                         class="me-2" alt="img">Illinois, USA</div>
                                 <div class="rating">
                                     <i class="fas fa-star filled"></i>
                                     <i class="fas fa-star filled"></i>
                                     <i class="fas fa-star filled"></i>
                                     <i class="fas fa-star filled"></i>
                                     <i class="fas fa-star"></i>
                                     <span class="average-rating">4.1 (30)</span>
                                 </div>
                                 <div class="freelance-tags">
                                     <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web
                                             Design</span></a>
                                     <a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI
                                             Design</span></a>
                                     <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node
                                             Js</span></a>
                                 </div>
                                 <div class="freelance-blk-location">
                                     <div class="freelancers-price">$25 Hourly</div>

                                 </div>
                             </div>
                         </div>
                         <div class="cart-hover">
                             <a href="developer-details.html" class="btn-cart" tabindex="-1">View Profile</a>
                         </div>
                     </div>
                     <div class="freelance-widget">
                         <div class="freelance-content">
                             <a data-toggle="modal" href="#rating" class="favourite"><i
                                     class="feather-heart"></i></a>
                             <div class="freelance-img">
                                 <a href="developer-details.html">
                                     <img src="assets/img/user/avatar-4.jpg" alt="User Image">
                                     <span class="verified"><i class="fas fa-check-circle"></i></span>
                                 </a>
                             </div>
                             <div class="freelance-info">
                                 <h3><a href="developer-details.html">James Douglas</a></h3>
                                 <div class="freelance-specific">iOS Developer</div>
                                 <div class="freelance-location"><img src="assets/img/icon/locations.svg"
                                         class="me-2" alt="img">Florida, USA</div>
                                 <div class="rating">
                                     <i class="fas fa-star filled"></i>
                                     <i class="fas fa-star filled"></i>
                                     <i class="fas fa-star filled"></i>
                                     <i class="fas fa-star filled"></i>
                                     <i class="fas fa-star"></i>
                                     <span class="average-rating">4.3 (31)</span>
                                 </div>
                                 <div class="freelance-tags">
                                     <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web
                                             Design</span></a>
                                     <a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI
                                             Design</span></a>
                                     <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node
                                             Js</span></a>
                                 </div>
                                 <div class="freelance-blk-location">
                                     <div class="freelancers-price">$25 Hourly</div>

                                 </div>
                             </div>
                         </div>
                         <div class="cart-hover">
                             <a href="developer-details.html" class="btn-cart" tabindex="-1">View Profile</a>
                         </div>
                     </div>
                     <div class="freelance-widget">
                         <div class="freelance-content">
                             <a data-toggle="modal" href="#rating" class="favourite"><i
                                     class="feather-heart"></i></a>
                             <div class="freelance-img">
                                 <a href="developer-details.html">
                                     <img src="assets/img/user/avatar-2.jpg" alt="User Image">
                                     <span class="verified"><i class="fas fa-check-circle"></i></span>
                                 </a>
                             </div>
                             <div class="freelance-info">
                                 <h3><a href="developer-details.html">Richard Wilson</a></h3>
                                 <div class="freelance-specific">UI/UX Designer</div>
                                 <div class="freelance-location"><img src="assets/img/icon/locations.svg"
                                         class="me-2" alt="img">Illinois, USA</div>
                                 <div class="rating">
                                     <i class="fas fa-star filled"></i>
                                     <i class="fas fa-star filled"></i>
                                     <i class="fas fa-star filled"></i>
                                     <i class="fas fa-star filled"></i>
                                     <i class="fas fa-star"></i>
                                     <span class="average-rating">4.7 (32)</span>
                                 </div>
                                 <div class="freelance-tags">
                                     <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web
                                             Design</span></a>
                                     <a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI
                                             Design</span></a>
                                     <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node
                                             Js</span></a>
                                 </div>
                                 <div class="freelance-blk-location">
                                     <div class="freelancers-price">$25 Hourly</div>
                                 </div>
                             </div>
                         </div>
                         <div class="cart-hover">
                             <a href="developer-details.html" class="btn-cart" tabindex="-1">View Profile</a>
                         </div>
                     </div>
                     <div class="freelance-widget">
                         <div class="freelance-content">
                             <a data-toggle="modal" href="#rating" class="favourite"><i
                                     class="feather-heart"></i></a>
                             <div class="freelance-img">
                                 <a href="developer-details.html">
                                     <img src="assets/img/user/avatar-3.jpg" alt="User Image">
                                     <span class="verified"><i class="fas fa-check-circle"></i></span>
                                 </a>
                             </div>
                             <div class="freelance-info">
                                 <h3><a href="developer-details.html">Richard Wilson</a></h3>
                                 <div class="freelance-specific">UI/UX Designer</div>
                                 <div class="freelance-location"><img src="assets/img/icon/locations.svg"
                                         class="me-2" alt="img">Alabama, USA</div>
                                 <div class="rating">
                                     <i class="fas fa-star filled"></i>
                                     <i class="fas fa-star filled"></i>
                                     <i class="fas fa-star filled"></i>
                                     <i class="fas fa-star filled"></i>
                                     <i class="fas fa-star"></i>
                                     <span class="average-rating">4.7 (32)</span>
                                 </div>
                                 <div class="freelance-tags">
                                     <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web
                                             Design</span></a>
                                     <a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI
                                             Design</span></a>
                                     <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node
                                             Js</span></a>
                                 </div>
                                 <div class="freelance-blk-location">
                                     <div class="freelancers-price">$25 Hourly</div>

                                 </div>
                             </div>
                         </div>
                         <div class="cart-hover">
                             <a href="developer-details.html" class="btn-cart" tabindex="-1">View Profile</a>
                         </div>
                     </div>
                     <div class="freelance-widget">
                         <div class="freelance-content">
                             <a data-toggle="modal" href="#rating" class="favourite"><i
                                     class="feather-heart"></i></a>
                             <div class="freelance-img">
                                 <a href="developer-details.html">
                                     <img src="assets/img/user/avatar-4.jpg" alt="User Image">
                                     <span class="verified"><i class="fas fa-check-circle"></i></span>
                                 </a>
                             </div>
                             <div class="freelance-info">
                                 <h3><a href="developer-details.html">Richard Wilson</a></h3>
                                 <div class="freelance-specific">UI/UX Designer</div>
                                 <div class="freelance-location"><img src="assets/img/icon/locations.svg"
                                         class="me-2" alt="img">Illinois, USA</div>
                                 <div class="rating">
                                     <i class="fas fa-star filled"></i>
                                     <i class="fas fa-star filled"></i>
                                     <i class="fas fa-star filled"></i>
                                     <i class="fas fa-star filled"></i>
                                     <i class="fas fa-star"></i>
                                     <span class="average-rating">4.7 (32)</span>
                                 </div>
                                 <div class="freelance-tags">
                                     <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web
                                             Design</span></a>
                                     <a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI
                                             Design</span></a>
                                     <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node
                                             Js</span></a>
                                 </div>
                                 <div class="freelance-blk-location">
                                     <div class="freelancers-price">$25 Hourly</div>

                                 </div>
                             </div>
                         </div>
                         <div class="cart-hover">
                             <a href="developer-details.html" class="btn-cart" tabindex="-1">View Profile</a>
                         </div>
                     </div>
                     <div class="freelance-widget">
                         <div class="freelance-content">
                             <a data-toggle="modal" href="#rating" class="favourite"><i
                                     class="feather-heart"></i></a>
                             <div class="freelance-img">
                                 <a href="developer-details.html">
                                     <img src="assets/img/user/avatar-5.jpg" alt="User Image">
                                     <span class="verified"><i class="fas fa-check-circle"></i></span>
                                 </a>
                             </div>
                             <div class="freelance-info">
                                 <h3><a href="developer-details.html">Richard Wilson</a></h3>
                                 <div class="freelance-specific">UI/UX Designer</div>
                                 <div class="freelance-location"><img src="assets/img/icon/locations.svg"
                                         class="me-2" alt="img">Alabama, USA</div>
                                 <div class="rating">
                                     <i class="fas fa-star filled"></i>
                                     <i class="fas fa-star filled"></i>
                                     <i class="fas fa-star filled"></i>
                                     <i class="fas fa-star filled"></i>
                                     <i class="fas fa-star"></i>
                                     <span class="average-rating">4.7 (32)</span>
                                 </div>
                                 <div class="freelance-tags">
                                     <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web
                                             Design</span></a>
                                     <a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI
                                             Design</span></a>
                                     <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node
                                             Js</span></a>
                                 </div>
                                 <div class="freelance-blk-location">
                                     <div class="freelancers-price">$25 Hourly</div>

                                 </div>
                             </div>
                         </div>
                         <div class="cart-hover">
                             <a href="developer-details.html" class="btn-cart" tabindex="-1">View Profile</a>
                         </div>
                     </div>
                     <div class="freelance-widget">
                         <div class="freelance-content">
                             <a data-toggle="modal" href="#rating" class="favourite favourited"><i
                                     class="feather-heart"></i></a>
                             <div class="freelance-img">
                                 <a href="developer-details.html">
                                     <img src="assets/img/user/avatar-3.jpg" alt="User Image">
                                     <span class="verified"><i class="fas fa-check-circle"></i></span>
                                 </a>
                             </div>
                             <div class="freelance-info">
                                 <h3><a href="developer-details.html">Richard Wilson</a></h3>
                                 <div class="freelance-specific">UI/UX Designer</div>
                                 <div class="freelance-location"><img src="assets/img/icon/locations.svg"
                                         class="me-2" alt="img">Alabama, USA</div>
                                 <div class="rating">
                                     <i class="fas fa-star filled"></i>
                                     <i class="fas fa-star filled"></i>
                                     <i class="fas fa-star filled"></i>
                                     <i class="fas fa-star filled"></i>
                                     <i class="fas fa-star"></i>
                                     <span class="average-rating">4.8 (55)</span>
                                 </div>
                                 <div class="freelance-tags">
                                     <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web
                                             Design</span></a>
                                     <a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI
                                             Design</span></a>
                                     <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node
                                             Js</span></a>
                                 </div>
                                 <div class="freelance-blk-location">
                                     <div class="freelancers-price">$25 Hourly</div>

                                 </div>
                             </div>
                         </div>
                         <div class="cart-hover">
                             <a href="developer-details.html" class="btn-cart" tabindex="-1">View Profile</a>
                         </div>
                     </div>
                     <div class="freelance-widget">
                         <div class="freelance-content">
                             <a data-toggle="modal" href="#rating" class="favourite"><i
                                     class="feather-heart"></i></a>
                             <div class="freelance-img">
                                 <a href="developer-details.html">
                                     <img src="assets/img/user/avatar-5.jpg" alt="User Image">
                                     <span class="verified"><i class="feaather-heart"></i></span>
                                 </a>
                             </div>
                             <div class="freelance-info">
                                 <h3><a href="developer-details.html">Richard Wilson</a></h3>
                                 <div class="freelance-specific">UI/UX Designer</div>
                                 <div class="freelance-location"><img src="assets/img/icon/locations.svg"
                                         class="me-2" alt="img">Alabama, USA</div>
                                 <div class="rating">
                                     <i class="fas fa-star filled"></i>
                                     <i class="fas fa-star filled"></i>
                                     <i class="fas fa-star filled"></i>
                                     <i class="fas fa-star filled"></i>
                                     <i class="fas fa-star"></i>
                                     <span class="average-rating">5.0 (4)</span>
                                 </div>
                                 <div class="freelance-tags">
                                     <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web
                                             Design</span></a>
                                     <a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI
                                             Design</span></a>
                                     <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node
                                             Js</span></a>
                                 </div>
                                 <div class="freelance-blk-location">
                                     <div class="freelancers-price">$25 Hourly</div>

                                 </div>
                             </div>
                         </div>
                         <div class="cart-hover">
                             <a href="developer-details.html" class="btn-cart" tabindex="-1">View Profile</a>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
         <!-- End Developer -->


         <!-- Top Instructor -->
         <section class="section subscribe">
             <div class="bg-img">
                 <img src="assets/img/bg/bg3.png" class="bg-img3" alt="img">
             </div>
             <div class="container">
                 <div class="row">
                     <div class="col-md-12 col-sm-12 col-12 mx-auto ">
                         <div class="section-header aos text-center" data-aos="fade-up">
                             <h2 class="header-title">Subscribe To Get Discounts, Updates & More</h2>
                             <p>Monthly product updates, industry news and more!</p>
                         </div>
                     </div>
                     <div class="subscribe-form aos " data-aos="fade-up">
                         <input type="text" placeholder="Enter your Email">
                         <a href="javascript:void(0);" class="btn btn-sub">Send</a>
                     </div>
                 </div>

             </div>
         </section>
         <!-- End Developer -->
         <!-- Review -->
         <section class="section testimonial-section review">
             <div class="container">
                 <div class="row">
                     <div class="col-12">
                         <div class="section-header aos text-center" data-aos="fade-up">
                             <h2 class="header-title">Top Reviews</h2>
                             <p>High Performing Developers To Your</p>
                         </div>
                     </div>
                 </div>
                 <div id="testimonial-slider" class="owl-carousel owl-theme testimonial-slider aos"
                     data-aos="fade-up">

                     <!-- Review Widget -->
                     <div class="review-blog">
                         <div class="review-top d-flex align-items-center">
                             <div class="review-img">
                                 <a href="review.html"><img class="img-fluid" src="assets/img/review/review-01.jpg"
                                         alt="Post Image"></a>
                             </div>
                             <div class="review-info">
                                 <h3><a href="review.html">Durso Raeen</a></h3>
                                 <h5>Project Lead</h5>

                             </div>
                             <div class="test-quote-img">
                                 <img class="img-fluid" src="assets/img/test-quote.svg" alt="quote">
                             </div>
                         </div>
                         <div class="review-content">
                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh
                                 aliquam dui, nibh faucibus aenean.</p>
                             <div class="rating">
                                 <i class="fas fa-star filled"></i>
                                 <i class="fas fa-star filled"></i>
                                 <i class="fas fa-star filled"></i>
                                 <i class="fas fa-star filled"></i>
                                 <i class="fas fa-star"></i>
                                 <span class="average-rating">4.7</span>
                             </div>
                         </div>
                     </div>
                     <!-- / Review Widget -->

                     <!-- Review Widget -->
                     <div class="review-blog">
                         <div class="review-top d-flex align-items-center">
                             <div class="review-img">
                                 <a href="review.html"><img class="img-fluid" src="assets/img/review/review-02.jpg"
                                         alt="Post Image"></a>
                             </div>
                             <div class="review-info">
                                 <h3><a href="review.html">Camelia Rennesa</a></h3>
                                 <h5>Project Lead</h5>

                             </div>
                             <div class="test-quote-img">
                                 <img class="img-fluid" src="assets/img/test-quote.svg" alt="quote">
                             </div>
                         </div>
                         <div class="review-content">
                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh
                                 aliquam dui, nibh faucibus aenean.</p>
                             <div class="rating">
                                 <i class="fas fa-star filled"></i>
                                 <i class="fas fa-star filled"></i>
                                 <i class="fas fa-star filled"></i>
                                 <i class="fas fa-star filled"></i>
                                 <i class="fas fa-star"></i>
                                 <span class="average-rating">4.8</span>
                             </div>
                         </div>
                     </div>
                     <!-- /Review Widget -->

                     <!-- Review Widget -->
                     <div class="review-blog">
                         <div class="review-top d-flex align-items-center">
                             <div class="review-img">
                                 <a href="review.html"><img class="img-fluid" src="assets/img/review/review-03.jpg"
                                         alt="Post Image"></a>
                             </div>
                             <div class="review-info">
                                 <h3><a href="review.html">Brayan</a></h3>
                                 <h5>Team Lead</h5>

                             </div>
                             <div class="test-quote-img">
                                 <img class="img-fluid" src="assets/img/test-quote.svg" alt="quote">
                             </div>
                         </div>
                         <div class="review-content">
                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh
                                 aliquam dui, nibh faucibus aenean.</p>
                             <div class="rating">
                                 <i class="fas fa-star filled"></i>
                                 <i class="fas fa-star filled"></i>
                                 <i class="fas fa-star filled"></i>
                                 <i class="fas fa-star filled"></i>
                                 <i class="fas fa-star"></i>
                                 <span class="average-rating">5.0</span>
                             </div>
                         </div>
                     </div>
                     <!-- /Review Widget -->

                     <!-- Review Widget -->
                     <div class="review-blog">
                         <div class="review-top d-flex align-items-center">
                             <div class="review-img">
                                 <a href="review.html"><img class="img-fluid" src="assets/img/review/review-02.jpg"
                                         alt="Post Image"></a>
                             </div>
                             <div class="review-info">
                                 <h3><a href="review.html">Davis Payerf</a></h3>
                                 <h5>Project Lead</h5>

                             </div>
                             <div class="test-quote-img">
                                 <img class="img-fluid" src="assets/img/test-quote.svg" alt="quote">
                             </div>
                         </div>
                         <div class="review-content">
                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh
                                 aliquam dui, nibh faucibus aenean.</p>
                             <div class="rating">
                                 <i class="fas fa-star filled"></i>
                                 <i class="fas fa-star filled"></i>
                                 <i class="fas fa-star filled"></i>
                                 <i class="fas fa-star filled"></i>
                                 <i class="fas fa-star"></i>
                                 <span class="average-rating">3.2</span>
                             </div>
                         </div>
                     </div>
                     <!-- /Review Widget -->
                 </div>
             </div>
         </section>
         <!-- / Review -->

         <section class="section projects">
             <div class="container">
                 <div class="row">
                     <div class="col-12 col-md-12 mx-auto">
                         <div class="section-header text-center aos aos-init aos-animate" data-aos="fade-up">
                             <h2 class="header-title">Trusted by the world’s best</h2>
                             <p>Top companies</p>
                         </div>
                     </div>
                 </div>

                 <div class="row">
                     <div class="col-md-12 text-center">
                         <div class="best-company aos aos-init aos-animate" data-aos="fade-up">
                             <ul class="mb-0">
                                 <li>
                                     <div class="company-bestimg">
                                         <img src="assets/img/company/theme-1.png" alt="img">
                                     </div>
                                 </li>
                                 <li>
                                     <div class="company-bestimg">
                                         <img src="assets/img/company/theme-2.png" alt="img">
                                     </div>
                                 </li>
                                 <li>
                                     <div class="company-bestimg">
                                         <img src="assets/img/company/theme-3.png" alt="img">
                                     </div>
                                 </li>
                                 <li>
                                     <div class="company-bestimg">
                                         <img src="assets/img/company/theme-4.png" alt="img">
                                     </div>
                                 </li>
                                 <li>
                                     <div class="company-bestimg">
                                         <img src="assets/img/company/theme-5.png" alt="img">
                                     </div>
                                 </li>
                                 <li>
                                     <div class="company-bestimg">
                                         <img src="assets/img/company/theme-6.png" alt="img">
                                     </div>
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </section>




         <!-- News -->
         <section class="section news">
             <div class="container">
                 <div class="row">
                     <div class="col-12">
                         <div class="section-header text-center aos" data-aos="fade-up">
                             <h2 class="header-title">Our Blog</h2>
                             <p>Freelancing refers to working as an independent contractor</p>
                         </div>
                     </div>
                 </div>
                 <div class="row blog-grid-row">
                     <div class="col-xl-4 col-md-6 d-flex">

                         <!-- Blog Post -->
                         <div class="blog grid-blog aos" data-aos="fade-up">
                             <div class="blog-image">
                                 <a href="blog-details.html"><img class="img-fluid" src="assets/img/blog/blog-01.jpg"
                                         alt="Post Image"></a>
                             </div>
                             <div class="blog-content">
                                 <ul class="entry-meta meta-item mb-2">
                                     <li class="mb-0">
                                         <div class="post-author">
                                             <a href="developer-details.html"><img src="assets/img/img-02.jpg"
                                                     alt="Post Author"> <span>Aidan Funnell</span></a>
                                         </div>
                                     </li>
                                     <li><i class="feather-calendar me-1"></i> 4 Oct 2023</li>
                                 </ul>
                                 <h3 class="blog-title"><a href="blog-details.html">Choose a Blogging Platform</a>
                                 </h3>
                                 <p class="mb-0">Select a blogging platform that suits your needs. WordPress,
                                     Blogger, and Medium are popular options.</p>
                                 <div class="blog-read">
                                     <a href="blog-details.html">Read More <i
                                             class="fas fa-arrow-right ms-1"></i></a>
                                 </div>
                             </div>
                         </div>
                         <!-- /Blog Post -->

                     </div>
                     <div class="col-xl-4 col-md-6 d-flex">

                         <!-- Blog Post -->
                         <div class="blog grid-blog aos" data-aos="fade-up">
                             <div class="blog-image">
                                 <a href="blog-details.html"><img class="img-fluid"
                                         src="assets/img/blog/blog-02.jpg" alt="Post Image"></a>
                             </div>
                             <div class="blog-content">
                                 <ul class="entry-meta meta-item mb-2">
                                     <li class="mb-0">
                                         <div class="post-author">
                                             <a href="developer-details.html"><img src="assets/img/img-03.jpg"
                                                     alt="Post Author"> <span> Deborah Angel</span></a>
                                         </div>
                                     </li>
                                     <li><i class="feather-calendar me-1"></i> 10 Oct 2023</li>
                                 </ul>
                                 <h3 class="blog-title"><a href="blog-details.html">Pick a Domain Name</a></h3>
                                 <p class="mb-0">Choose a memorable and relevant domain name for your blog. Ideally,
                                     it should reflect your niche and personal brand.</p>
                                 <div class="blog-read">
                                     <a href="blog-details.html">Read More <i
                                             class="fas fa-arrow-right ms-1"></i></a>
                                 </div>
                             </div>
                         </div>
                         <!-- /Blog Post -->

                     </div>
                     <div class="col-xl-4 col-md-6 d-flex">

                         <!-- Blog Post -->
                         <div class="blog grid-blog aos" data-aos="fade-up">
                             <div class="blog-image">
                                 <a href="blog-details.html"><img class="img-fluid"
                                         src="assets/img/blog/blog-03.jpg" alt="Post Image"></a>
                             </div>
                             <div class="blog-content">
                                 <ul class="entry-meta meta-item mb-2">
                                     <li class="mb-0">
                                         <div class="post-author">
                                             <a href="developer-details.html"><img src="assets/img/img-04.jpg"
                                                     alt="Post Author"> <span>Darren Elder</span></a>
                                         </div>
                                     </li>
                                     <li><i class="feather-calendar me-1"></i> 3 Nov 2023</li>
                                 </ul>
                                 <h3 class="blog-title"><a href="blog-details.html">Analyze and Improve</a></h3>
                                 <p class="mb-0">Use analytics tools (e.g., Google Analytics) to track your blog's
                                     performance. Analyze which content performs well and adjust your strategy
                                     accordingly.</p>
                                 <div class="blog-read">
                                     <a href="blog-details.html">Read More <i
                                             class="fas fa-arrow-right ms-1"></i></a>
                                 </div>
                             </div>
                         </div>
                         <!-- /Blog Post -->

                     </div>
                 </div>
             </div>
         </section>
         <!-- / News -->

         <!-- News -->
         <section class="section job-register">
             <div class="container">
                 <div class="row">
                     <div class="col-12">
                         <div class="register-job-blk">
                             <div class="job-content-blk aos" data-aos="fade-up">
                                 <h2>Find Your Next Great Job Opportunity!</h2>
                                 <p>Quisque pretium dolor turpis, quis blandit turpis semper ut. Nam malesuada eros nec
                                     luctus laoreet.</p>
                                 <a href="register.html" class="btn all-btn">Join Now</a>
                             </div>
                             <div class="see-all mt-0 aos opportunity" data-aos="zoom-in">
                                 <img src="assets/img/job1.png" alt="img">
                             </div>
                         </div>
                     </div>
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
         <span class="ti-angle-up"><img src="{{ asset('assets/img/icon/top-icon.svg')}}" class="img-fluid"
                 alt="Img"></span>
     </button>
     <!-- jQuery -->
     <script src="{{ asset('assets/js/jquery-3.7.1.min.js')}}"></script>

     <!-- Bootstrap Bundle JS -->
     <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>

     <!-- Owl Carousel -->
     <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>

     <!-- counterup JS -->
     <script src="{{ asset('assets/js/jquery.waypoints.js')}}"></script>
     <script src="{{ asset('assets/js/jquery.counterup.min.js')}}"></script>

     <!-- Aos -->
     <script src="{{ asset('assets/plugins/aos/aos.js')}}"></script>

     <!-- Select2 JS -->
     <script src="{{ asset('assets/plugins/select2/js/select2.min.js')}}"></script>

     <!-- Slick JS -->
     <script src="{{ asset('assets/js/slick.js')}}"></script>

     <!-- Custom JS -->
     <script src="{{ asset('assets/js/script.js')}}"></script>
 </body>

 </html>
