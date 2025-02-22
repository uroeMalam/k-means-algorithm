
<!-- =========================================================
* Argon Dashboard PRO v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard-pro
* Copyright 2019 Creative Tim (https://www.creative-tim.com)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 -->
 <!DOCTYPE html>
 <html>
 
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
   <meta name="author" content="Creative Tim">
   <title>SIG_Hasil Produksi Padi</title>
   <link href="{{ asset('datatables.net-bs4\css\dataTables.bootstrap4.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('sweetalert2\dist\sweetalert2.min.css') }}">
   <!-- Favicon -->
   <link rel="icon" href="{{asset('template')}}/assets/img/brand/kosong.png" type="image/png">
   <!-- Fonts -->
   <link rel="stylesheet" href="{{asset('template')}}/https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
   <!-- Icons -->
   <link rel="stylesheet" href="{{asset('template')}}/assets/vendor/nucleo/css/nucleo.css" type="text/css">
   <link rel="stylesheet" href="{{asset('template')}}/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
   <!-- Page plugins -->
   <!-- Argon CSS -->
   <link rel="stylesheet" href="{{asset('template')}}/assets/css/argon.css?v=1.1.0" type="text/css">
   @stack('page-css')
 </head>
 
 <body>
   <!-- Sidenav -->
   <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
     <div class="scrollbar-inner">
       <!-- Brand -->
       <div class="sidenav-header d-flex align-items-center pl-5">
        <h2 class="h2 d-inline-block mb-0">Zsazsa Fakhriani</h2>
         {{-- <a class="navbar-brand" href="{{asset('template')}}/pages/dashboards/dashboard.html">
           <img src="{{asset('template')}}/assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
         </a> --}}
         <div class="ml-auto">
           <!-- Sidenav toggler -->
           <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
             <div class="sidenav-toggler-inner">
               <i class="sidenav-toggler-line"></i>
               <i class="sidenav-toggler-line"></i>
               <i class="sidenav-toggler-line"></i>
             </div>
           </div>
         </div>
       </div>
       <div class="navbar-inner">
         <!-- Collapse -->
         <div class="collapse navbar-collapse" id="sidenav-collapse-main">
           <!-- sidebar -->
           <ul class="navbar-nav">
             <li class="nav-item">
               <a class="nav-link  {{ Request::is('/dashboard') ? 'active':''}}" href="{{('/dashboard')}}" >
                 <i class="ni ni-align-center text-green"></i>
                 <span class="nav-link-text">Dashboards</span>
               </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('kabupaten') ? 'active':''}}" href="{{('kabupaten')}}">
                  <i class="ni ni-align-center text-green"></i>
                  <span class="nav-link-text">Kabupaten</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link  {{ Request::is('kecamatan') ? 'active':''}}" href="{{('kecamatan')}}">
                  <i class="ni ni-align-center text-green"></i>
                  <span class="nav-link-text">Kecamatan</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link  {{ Request::is('data') ? 'active':''}}" href="{{('data')}}">
                  <i class="ni ni-align-center text-green"></i>
                  <span class="nav-link-text">Data Perhitungan</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link  {{ Request::is('dataCenter') ? 'active':''}}" href="{{('dataCenter')}}">
                  <i class="ni ni-align-center text-green"></i>
                  <span class="nav-link-text">Data Center</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('perhitungan') ? 'active':''}}" href="{{('perhitungan')}}">
                  <i class="ni ni-align-center text-green"></i>
                  <span class="nav-link-text">Data Hasil Perhitungan</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('map') ? 'active':''}}" href="{{('map')}}">
                  <i class="ni ni-align-center text-green"></i>
                  <span class="nav-link-text">Data Dalam Peta</span>
                </a>
              </li>
            </ul>
          </div>
         </div>
       </div>
     </div>
   </nav>
   <!-- Main content -->
   <div class="main-content" id="panel">
     <!-- Topnav -->
     <nav class="navbar navbar-top navbar-expand navbar-light bg-secondary border-bottom">
       <div class="container-fluid">
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <!-- Search form -->
           <form class="navbar-search  form-inline mr-sm-3" id="navbar-search-main">
             <div class="form-group mb-0">
               <div class="input-group input-group-alternative input-group-merge">
                 <div class="input-group-prepend">
                   <span class="input-group-text"><i class="fas fa-search"></i></span>
                 </div>
                 <input class="form-control" placeholder="Search" type="text">
               </div>
             </div>
             <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
               <span aria-hidden="true">×</span>
             </button>
           </form>
           <!-- Navbar links -->
           <ul class="navbar-nav align-items-center ml-md-auto">
             <li class="nav-item d-sm-none">
               <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                 <i class="ni ni-zoom-split-in"></i>
               </a>
             </li>
             <li class="nav-item dropdown">
               <a class="nav-link" href="#" role="button" data-toggle="#" aria-haspopup="true" aria-expanded="false">
                 <i class="ni ni-bell-55"></i>
               </a>
             </li>
             <li class="nav-item dropdown">
               <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <i class="ni ni-ungroup"></i>
               </a>
 
             </li>
           </ul>
           <ul class="navbar-nav align-items-center ml-auto ml-md-0">
             <li class="nav-item dropdown">
               <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <div class="media align-items-center">
                   {{-- <span class="avatar avatar-sm rounded-circle">
                     <img alt="Image placeholder" src="{{asset('template')}}/assets/img/theme/team-4.jpg">
                   </span> --}}
                   <div class="media-body ml-2 d-none d-lg-block">
                     <span class="mb-0 text-sm  font-weight-bold">Admin</span>
                   </div>
                 </div>
               </a>
               <div class="dropdown-menu dropdown-menu-right">
                 <div class="dropdown-header noti-title">
                   <h6 class="text-overflow m-0">Hy Admin</h6>
                 </div>
                 
                 <div class="dropdown-divider"></div>
                 <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item">Logout</button>
                </form>
               </div>
             </li>
           </ul>
         </div>
       </div>
     </nav>
     <!-- Header -->
     <!-- Header -->
     <div class="header pb-6">
       <div class="container-fluid">
         <div class="header-body">
           <div class="row align-items-center py-4">
             <div class="col-lg-6 col-7">
               <h6 class="h2 d-inline-block mb-0">Sistem Informasi Geografis</h6>
             </div>
           </div>
         </div>
       </div>
     </div>
     <!-- Page content -->
     <div class="container-fluid mt--6">


<!-- Page content  -->
@yield('content')
<!-- page tampilan  -->
@extends('layout/modal')

       

       <!-- Footer -->
       <footer class="footer pt-0">
         <div class="row align-items-center justify-content-lg-between">
           <div class="col-lg-6">
             <div class="copyright text-center text-lg-left text-muted">
               &copy; 2022 <a href="#" class="font-weight-bold ml-1">Sig Hasil Produksi Padi</a>
             </div>
           </div>
           <div class="col-lg-6">
             <ul class="nav nav-footer justify-content-center justify-content-lg-end">
               <li class="nav-item">
                 <a href="#" class="nav-link">Zsazsa Fakhriani</a>
               </li>
               
             </ul>
           </div>
         </div>
       </footer>
     </div>
   </div>
   <!-- Argon Scripts -->
   <!-- Core -->
   <script src="{{asset('template')}}/assets/vendor/jquery/dist/jquery.min.js"></script>
   <script src="{{asset('template')}}/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
   <script src="{{asset('template')}}/assets/vendor/js-cookie/js.cookie.js"></script>
   <script src="{{asset('template')}}/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
   <script src="{{asset('template')}}/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
   <!-- Optional JS -->
   <script src="{{asset('template')}}/assets/vendor/chart.js/dist/Chart.min.js"></script>
   <script src="{{asset('template')}}/assets/vendor/chart.js/dist/Chart.extension.js"></script>
   <script src="{{asset('template')}}/assets/vendor/jvectormap-next/jquery-jvectormap.min.js"></script>
   <script src="{{asset('template')}}/assets/js/vendor/jvectormap/jquery-jvectormap-world-mill.js"></script>
   <!-- Argon JS -->
   <script src="{{asset('dist\js\my-script.js') }}"></script>

   <script src="{{asset('template')}}/assets/js/argon.js?v=1.1.0"></script>
   <script src="{{ asset('datatables.net\js\jquery.dataTables.min.js')}}"></script>
  <script src="{{ asset('dist\js\datatable\datatable-basic.init.js') }}"></script>

  <script src="{{ asset('sweetalert2\dist\sweetalert2.min.js') }}"></script>

   <!-- java scripts punya cerita -->
  @stack('page-scripts')
 </body>
 
 </html>