<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title')</title>
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/assets_web/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/assets_web/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/assets_web/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/assets_web/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/assets_web/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/assets_web/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/assets_web/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/assets_web/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/assets_web/css/style.css') }}" rel="stylesheet">
    @yield('css')
</head>

<body id="page-top">
    @include('cv.layouts.partials.header')
    <div class="content-wrap" id="content-wrap">
        <div class="main-content">
            @yield('content')
        </div>
    </div>
    @include('cv.layouts.partials.footer')
    
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/assets_web/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/assets_web/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/assets_web/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/assets_web/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/assets_web/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/assets_web/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/assets_web/vendor/typedjs/typed.min.js') }}"></script>
    <script src="{{ asset('assets/assets_web/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/assets_web/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/assets_web/js/main.js') }}"></script>
    @yield('scripts')
</body>

</html>
