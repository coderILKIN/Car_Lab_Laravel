<!DOCTYPE html>
<html lang="en">

<head>
    <title>Carbook - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/front/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('assets/front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('assets/front/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('assets/front/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/front/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/jquery.timepicker.css')}}">

    <link rel="stylesheet" href="{{asset('assets/front/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/style.css')}}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    
    @yield('customCss')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>


    @include('front.partials.nav')

    @yield('content')

    @include('front.partials.footer')




    <script src="{{asset('assets/front/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/front/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('assets/front/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/front/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('assets/front/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/front/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('assets/front/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/front/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/front/js/aos.js')}}"></script>
    <script src="{{asset('assets/front/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('assets/front/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('assets/front/js/jquery.timepicker.min.js')}}"></script>
    <script src="{{asset('assets/front/js/scrollax.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{asset('assets/front/js/google-map.js')}}"></script>
    <script src="{{asset('assets/front/js/main.js')}}"></script>

    @yield('customJs')


</body>

</html>