<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/auth/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('assets/auth/img/logo1.png')}}">
  <title>
    Province Rhamna
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- CSRF Token notify-->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Nucleo Icons -->
  <link href="{{asset('assets/auth/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/auth/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('assets/auth/css/material-dashboard.css?v=3.1.0')}}" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>


<!-- discussion -->
    <!-- JavaScript -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!-- End JavaScript -->
  
    <!-- CSS -->
    <link rel="stylesheet" href="/style.css">
    <!-- End CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</head>

<body class="g-sidenav-show  bg-gray-200">
    @if(auth()->user()->role == '1')
        @include('Layouts.imc.sidebars.admin')
    @elseif(auth()->user()->role == '2')
        @include('Layouts.imc.sidebars.chefdivision')
    @elseif(auth()->user()->role == '0')
        @include('Layouts.imc.sidebars.fonctionnaire')
    @endif

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        @if(auth()->user()->role ==2)
          @include('Layouts.imc.navbar_chefdivision')
        @else
          @include('Layouts.imc.navbar')
        @endif
        <div class="container-fluid py-4">
            @yield('content')<!--content variable not same for other pages however other include are same for all pages so that s why layout-->
            @include('Layouts.imc.footers')
        </div>
    </main>
    @include('layouts.imc.fixed-plugin')


      <!--   Core JS Files   -->
  <script src="{{asset('assets/auth/js/core/popper.min.js')}}"></script>
  <script src="{{asset('assets/auth/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/auth/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('assets/auth/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script src="{{asset('assets/auth/js/plugins/chartjs.min.js')}}"></script>
  <!-- Link to JavaScript -->
  <script src="{{ asset('js/app.js') }}"></script>


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
  <script src="{{asset('assets/auth/js/material-dashboard.min.js?v=3.1.0')}}"></script>
    <!-- search bar-->


</body>

</html>




    
