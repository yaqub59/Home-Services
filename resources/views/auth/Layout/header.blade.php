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
                  <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center">
                      <div class="p-2 rounded-circle shadow-sm"
                          style="background-color: #f1f5f9; width: 54px; height: 54px; display: flex; justify-content: center; align-items: center;">
                          <img src="{{ asset('images/settings/' . Setting()->site_logo) }}" height="40"
                              width="40" class="img-fluid rounded-circle" alt="Logo">
                      </div>
                  </a>
              </div>
              <div class="main-menu-wrapper">
                  <div class="menu-header">
                      <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center">
                          <div class="p-2 rounded-circle shadow-sm"
                              style="background-color: #f1f5f9; width: 54px; height: 54px; display: flex; justify-content: center; align-items: center;">
                              <img src="{{ asset('images/settings/' . Setting()->site_logo) }}" height="40"
                                  width="40" class="img-fluid rounded-circle" alt="Logo">
                          </div>
                      </a>
                      <a id="menu_close" class="menu-close" href="javascript:void(0);">
                          <i class="fas fa-times"></i>
                      </a>
                  </div>

              </div>

          </nav>
      </div>

  </header>
