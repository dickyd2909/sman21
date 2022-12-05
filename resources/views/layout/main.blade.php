@php
use App\Http\Controllers\CounterController;

CounterController::visitorCount();
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>SMA Negeri 21 Bandung - Home</title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link href="{{ URL::asset('assets/img/favicon.png') }}" rel="icon">
<link href="{{ URL::asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="{{ URL::asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet">

</head>

<body>
    <!-- Navbar -->
    @include('layout.navbar')

    <!-- Content -->
    @yield('content')

    <!-- Footer -->
    @include('layout.footer')

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ URL::asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ URL::asset('assets/js/main.js') }}"></script>

</body>

</html>