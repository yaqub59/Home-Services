 <div class="header">
     <!-- Logo -->
     <div class="header-left">
         <a href="javascript:void(0);" class="navbar-brand logo d-flex align-items-center">
             <div class="p-2 rounded-circle shadow-sm"
                 style="background-color: #f1f5f9; width: 50px; height: 50px; display: flex; justify-content: center; align-items: center;">
                 <img src="{{ asset('images/settings/' . Setting()->site_logo) }}" height="60" width="60"
                     class="img-fluid rounded-circle" alt="Logo">
             </div>
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
         {{-- <li class="nav-item dropdown">
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
                                             has accepted your estimate <span class="noti-title">#GTR458789</span></p>
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
                 
             </div>
         </li> --}}
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
                 <a class="dropdown-item" href="{{ route('admin.profile') }}"> <i data-feather="user"
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
