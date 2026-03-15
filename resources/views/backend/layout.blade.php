<!--
=========================================================
* Material Dashboard 3 - v3.2.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2024 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{url('')}}/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="{{url('')}}/assets/img/favicon.png">
  <title>
    @yield('title')
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
  <!-- Nucleo Icons -->
  <link href="{{url('')}}/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="{{url('')}}/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{url('')}}/assets/css/material-dashboard.css?v=3.2.0" rel="stylesheet" />
  <style>
    .form-control-pill {
    border-radius: 50px;
    padding-left: 20px;
    padding-right: 20px;
    border: 1px solid #ced4da;
    height: 45px;
  }
  .form-control-pill:focus {
      border-color: #0d6efd;
      box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
      outline: none;
    }

    .form-control-pilltext {
    border-radius: 50px;
    padding-left: 20px;
    padding-right: 20px;
    border: 1px solid #ced4da;
    height: 90px;
  }
  .form-control-pilltext:focus {
      border-color: #0d6efd;
      box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
      outline: none;
    }
  </style>
</head>

<body class="g-sidenav-show  bg-gray-100">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2  bg-white my-2" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand px-4 py-3 m-0" href="/" target="_blank">
        <img src="{{url('')}}/img/" class="navbar-brand-img" width="35" height="35" alt="main_logo">
        <span class="ms-1 text-sm text-dark">Dashboard</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-dark" href="{{route('dashboard')}}">
            <i class="material-symbols-rounded opacity-5">table_view</i>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="{{route('index.infografis')}}">
            <i class="material-symbols-rounded opacity-5">table_view</i>
            <span class="nav-link-text ms-1">Infografis</span>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="{{route('index.kegiatan')}}">
              <i class="material-symbols-rounded opacity-5">table_view</i>
              <span class="nav-link-text ms-1">Kegiatan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="{{route('index.berita')}}">
              <i class="material-symbols-rounded opacity-5">table_view</i>
              <span class="nav-link-text ms-1">Berita</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="{{route('index.rfc')}}">
              <i class="material-symbols-rounded opacity-5">table_view</i>
              <span class="nav-link-text ms-1">RFC</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="{{route('index.pedoman')}}">
              <i class="material-symbols-rounded opacity-5">table_view</i>
              <span class="nav-link-text ms-1">Pedoman</span>
            </a>
          </li>
          
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        <a href="/" class="btn btn-outline-dark mt-4 w-100" onclick="return confirmLogout()">Logout</a>

        <script>
            function confirmLogout() {
                return confirm("Anda yakin ingin logout?");
            }
        </script>
        
      </div>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-3 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">@yield('title')</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Tables</li>
          </ol>
        </nav>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-2">
        @yield('content')
   
    </div>
  </main>

  <!--   Core JS Files   -->
  <script src="{{url('')}}/assets/js/core/popper.min.js"></script>
  <script src="{{url('')}}/assets/js/core/bootstrap.min.js"></script>
  <script src="{{url('')}}/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="{{url('')}}/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{url('')}}/assets/js/material-dashboard.min.js?v=3.2.0"></script>
</body>

</html>