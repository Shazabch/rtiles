<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <!-- Primary Meta Tags -->
  <title>Royal Tiles</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="title" content="Volt - Free Bootstrap 5 Dashboard">
  <meta name="author" content="Themesberg">
  <meta name="description" content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
  <meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, themesberg, themesberg dashboard, themesberg admin dashboard" />
  <link rel="canonical" href="https://themesberg.com/product/admin-dashboard/volt-premium-bootstrap-5-dashboard">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://demo.themesberg.com/volt-pro">
  <meta property="og:title" content="Volt - Free Bootstrap 5 Dashboard">
  <meta property="og:description" content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
  <meta property="og:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-pro-bootstrap-5-dashboard/volt-pro-preview.jpg">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://demo.themesberg.com/volt-pro">
  <meta property="twitter:title" content="Volt - Free Bootstrap 5 Dashboard">
  <meta property="twitter:description" content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
  <meta property="twitter:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-pro-bootstrap-5-dashboard/volt-pro-preview.jpg">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="120x120" href="{{asset('volt-theme/html&css/assets/img/favicon/apple-touch-icon.png')}}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{asset('volt-theme/html&css/assets/img/favicon/favicon-32x32.png')}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('volt-theme/html&css/assets/img/favicon/favicon-16x16.png')}}">
  <link rel="manifest" href="{{asset('volt-theme/html&css/assets/img/favicon/site.webmanifest')}}">
  <link rel="mask-icon" href="{{asset('volt-theme/html&css/assets/img/favicon/safari-pinned-tab.svg')}}" color="#ffffff">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">
  <!--start font awesome -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
  <!--end font awesome -->
  <link type="text/css" href="{{asset('volt-theme/html&css/vendor/sweetalert2/dist/sweetalert2.min.css')}}" rel="stylesheet">
  <link type="text/css" href="{{asset('volt-theme/html&css/vendor/notyf/notyf.min.css')}}" rel="stylesheet">
  <link type="text/css" href="{{asset('volt-theme/html&css/css/volt.css')}}" rel="stylesheet">
  <!-- Styles for livewire datTable -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  @yield('styles')
  @livewireStyles
</head>

<body>

  <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->


  <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
    <a class="navbar-brand me-lg-5" href="{{ route('home') }}">
      <img class="navbar-brand-dark" src="{{asset('volt-theme/html&css/assets/img/brand/light.svg')}}" alt="Volt logo" /> <img class="navbar-brand-light" src="volt-theme/html&css/assets/img/brand/dark.svg" alt="Volt logo" />
    </a>
    <div class="d-flex align-items-center">
      <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
      <div class="user-card d-flex d-md-none align-items-center justify-content-end justify-content-md-center pb-4">
        <div class="collapse-close d-md-none">
          <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
            <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
          </a>
        </div>
      </div>
      <ul class="nav flex-column pt-3 pt-md-0">
        <li class="nav-item {{request()->segment(1) == 'home' ? 'active' : ''}}">
          <a href="{{route('home')}}" class="nav-link d-flex align-items-center " >
            <span class="sidebar-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-boxes" viewBox="0 0 16 16">
                <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2z" />
              </svg>
            </span>
            <span class="mt-1 sidebar-text">Dashboard</span>
          </a>
        </li>


        <!-- <li class="nav-item ">
          <span class="nav-link  collapsed  d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#ss">
            <span>
              <span class="sidebar-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-boxes" viewBox="0 0 16 16">
                  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5H0V4zm11.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2zM0 11v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1H0z" />
                </svg>
              </span>
              <span class="sidebar-text">Payments</span>
            </span>
            <span class="link-arrow">
              <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
              </svg>
            </span>
          </span>
        </li> -->
        <!-- Stock in starts  -->
        <li class="nav-item {{request()->segment(1) == 'purchases' ? 'active' : ''}}" >
          <span class="nav-link  collapsed  d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#ss1">
            <a href="{{route('purchases')}}">
              <span>
                <span class="sidebar-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-down" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
                  </svg>
                </span>
                <span class="sidebar-text">Purchases</span>
              </span>
            </a>
            <a href="{{route('purchases')}}">
              <span class="link-arrow">
                <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
              </span>
            </a>
          </span>
        </li>
        <!-- stock in ends  -->
        <!-- Vendors starts  -->
        <li class="nav-item {{request()->segment(1) == 'vendors' ? 'active' : ''}}">
         <span class="nav-link  collapsed  d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#ss2">
           <a href="{{route('vendors')}}">
            <span>
              <span class="sidebar-icon">
                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
                </svg>
              </span>
              <span class="sidebar-text">Vendors</span>
            </span>
          </a>
            <span class="link-arrow">
              <a href="{{route('vendors')}}">
                <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
              </a>
            </span>
          </span>
        </li>
        <!-- Vendors ends  -->
        <!-- Sizes Starts  -->
        <li class="nav-item {{request()->segment(1) == 'sizes' ? 'active' : ''}}">
          <span class="nav-link  collapsed  d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#ss3">
            <span>
             <a href="{{route('sizes')}}">
              <span class="sidebar-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sliders2" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10.5 1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4H1.5a.5.5 0 0 1 0-1H10V1.5a.5.5 0 0 1 .5-.5ZM12 3.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Zm-6.5 2A.5.5 0 0 1 6 6v1.5h8.5a.5.5 0 0 1 0 1H6V10a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5ZM1 8a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2A.5.5 0 0 1 1 8Zm9.5 2a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V13H1.5a.5.5 0 0 1 0-1H10v-1.5a.5.5 0 0 1 .5-.5Zm1.5 2.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Z"/>
                  </svg>
                </span>
                <span class="sidebar-text">Articles</span>
              </a>
              </span>
            <a href="{{route('sizes')}}">
              <span class="link-arrow">
                <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
              </span>
            </a>
          </span>
          
        </li>
        <!-- sizes ends  -->
        <!-- Stock Out Starts  -->
        <li class="nav-item {{request()->segment(1) == 'sales' ? 'active' : ''}}">
          <span class="nav-link  collapsed  d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#ss4">
            <span>
              <a href="{{route('sales')}}">
              <span class="sidebar-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-up" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 10a.5.5 0 0 0 .5-.5V3.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 3.707V9.5a.5.5 0 0 0 .5.5zm-7 2.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5z"/>
                  </svg>
                </span>
                <span class="sidebar-text">Sales</span>
              </a>
            </span>
            <a href="{{route('sales')}}">
            <span class="link-arrow">
              <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
              </svg>
            </span>
            </a>
          </span>
        </li>
        <!-- Stock Out Ends  -->
        <!-- Customers start -->
        <li class="nav-item {{request()->segment(1) == 'customers' ? 'active' : ''}}">
          <span class="nav-link  collapsed  d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#ss4">
            <span>
              <a href="{{route('customers')}}">
                <span class="sidebar-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                    <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                    <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                  </svg>
                </span>
                <span class="sidebar-text">Customers</span>
              </a>
            </span>
            <a href="{{route('customers')}}">
            <span class="link-arrow">
              <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
              </svg>
            </span>
            </a>
          </span>
        </li>
        <!-- Customers Ends  -->
        <!-- Company Starts  -->
        <!-- <li class="nav-item">
          <span class="nav-link  collapsed  d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#ss5">
            <span>
              <span class="sidebar-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-boxes" viewBox="0 0 16 16">
                  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5H0V4zm11.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2zM0 11v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1H0z" />
                </svg>
              </span>
              <span class="sidebar-text">Companies</span>
            </span>
            <span class="link-arrow">
              <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
              </svg>
            </span>
          </span>
          <div class="multi-level collapse " role="list" id="ss5" aria-expanded="false">
            <ul class="flex-column nav">
              <li class="nav-item">
                <a class="nav-link" href="">
                  <span class="sidebar-text">Add New Company</span>
                </a>
              </li>
            </ul>
            <ul class="flex-column nav">
              <li class="nav-item">
                <a class="nav-link" href="">
                  <span class="sidebar-text">View All Companies</span>
                </a>
              </li>
            </ul>
          </div>
        </li> -->
        <!--Company Ends  -->


       
        <li class="nav-item">
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
          <a href="{{route('home')}}" class="nav-link d-flex align-items-center" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <span class="sidebar-icon">
              <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z" />
              </svg> </span>
            <span class="mt-1 sidebar-text">{{ __('Logout') }}</span>
          </a>
        </li>
      </ul>
    </div>
  </nav>

  <main class="content">
    @yield('content')
  </main>

  <script src="{{asset('volt-theme/html&css/vendor/@popperjs/core/dist/umd/popper.min.js')}}"></script>
  <script src="{{asset('volt-theme/html&css/vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('volt-theme/html&css/vendor/onscreen/dist/on-screen.umd.min.js')}}"></script>
  <script src="{{asset('volt-theme/html&css/vendor/nouislider/distribute/nouislider.min.js')}}"></script>
  <script src="{{asset('volt-theme/html&css/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js')}}"></script>
  <script src="{{asset('volt-theme/html&css/vendor/chartist/dist/chartist.min.js')}}"></script>
  <script src="{{asset('volt-theme/html&css/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
  <script src="{{asset('volt-theme/html&css/vendor/vanillajs-datepicker/dist/js/datepicker.min.js')}}"></script>
  <script src="{{asset('volt-theme/html&css/vendor/sweetalert2/dist/sweetalert2.all.min.js')}}"></script>
  <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js')}}"></script>
  <script src="{{asset('volt-theme/html&css/vendor/vanillajs-datepicker/dist/js/datepicker.min.js')}}"></script>
  <script src="{{asset('volt-theme/html&css/vendor/notyf/notyf.min.js')}}"></script>
  <script src="{{asset('volt-theme/html&css/vendor/simplebar/dist/simplebar.min.js')}}"></script>
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="{{asset('volt-theme/html&css/assets/js/volt.js')}}"></script>

  <!-- Scripts For Livewire dataTable -->
  <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  @yield('scripts')
  @livewireScripts
</body>

</html>