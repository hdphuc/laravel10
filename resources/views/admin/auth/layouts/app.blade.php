<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/assets_template/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/assets_template/img/favicon.png') }}">
    <title>@yield('title') | Template</title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/assets_template/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/assets_template/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('assets/assets_template/css/material-dashboard.css') }}" rel="stylesheet" />
    @yield('css')
</head>

<body class="g-sidenav-show  bg-gray-200">
    <main class="main-content mt-0 position-relative max-height-vh-100 h-100 border-radius-lg ">
        @include('admin.auth.layouts.partials.header')
        <div class="main" id="main">
            <div class="main-wrapper">
                  @yield('content')
            </div>
        </div>
    </main>
    @include('admin.auth.layouts.partials.footer')
    @yield('script')
</body>

<script src="{{ asset('assets/assets_template/js/core/popper.min.js') }}"></script>
<script src="{{ asset('assets/assets_template/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/assets_template/js/plugins/smooth-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/assets_template/js/plugins/perfect-scrollbar.min.js') }}"></script>

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
<script async defer src="{{ asset('assets/assets_template/js/buttons.js') }}"></script>  
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('assets/assets_template/js/material-dashboard.min.js') }}"></script>
@yield('js')

</html>