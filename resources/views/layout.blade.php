<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Wonder Group | Agencia de Marketing y publicidad </title>

    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Diseñamos productos digitales
que ayudaran a hacer crecer tu empresa en Bolivia"/>
    <!-- Include All CSS here-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/settings.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/icons.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/preset.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/theme.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/presets/color1.css') }}" id="colorChange"/>
    <link href="https://file.myfontastic.com/HMrQFniq4ZiAS8qdZhKQ5/icons.css" rel="stylesheet">
    <!-- End Include All CSS -->

    <!-- Favicon Icon -->
    <link rel="icon"  type="image/png" href="{{ asset('images/favicon.svg') }}">
</head>
<body>
<!-- Preloading -->
<div class="preloader text-center">
    <div class="la-ball-circus la-2x">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- Preloading -->

<!-- MENU -->
    @include('partials.nav')
<!-- END MENU -->

<!-- Revolution SLIDER -->
    @include('partials.slide')
<!-- Revolution Slider -->



<!-- SERVICIOS Section -->
    @include('partials.servicios')
<!-- Services END Section -->

<!-- Portfolio Section -->
    @include('partials.portafolio');
<!-- Portfolio END Section -->

<!-- contador Section -->
    @include('partials.contador')
<!-- contador END Section -->

<!-- Team Section -->
    @include('partials.team')
<!-- Team END Section -->

<!-- Clientes Section -->
    @include('partials.clientes')
<!-- Clientes END Section -->

<!-- Testimonial Section -->
    @include('partials.testimonio')
<!-- Testimonial END Section -->



<!-- Footer Section -->
@include('partials.footer')
<!-- Footer Section -->

<!-- Bact To To -->
<a id="backToTop" href="#" class=""><i class="fa fa-angle-double-up"></i></a>
<!-- Bact To To -->

<!-- Include All JS -->
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/modernizr.custom.js') }}"></script>
<script src="{{ asset('js/gmaps.js') }}"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyDTPlX-43R1TpcQUyWjFgiSfL_BiGxslZU"></script>
<script src="{{ asset('js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('js/jquery.themepunch.tools.min.js') }}"></script>
<!-- Rev slider Add on Start -->
<script src="{{ asset('js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('js/extensions/revolution.extension.video.min.js') }}"></script>
<!-- Rev slider Add on End -->
<script src="{{ asset('js/dlmenu.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('js/mixer.js') }}"></script>
<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('js/owl.carousel.js') }}"></script>
<script src="{{ asset('js/slick.js') }}"></script>
<script src="{{ asset('js/jquery.appear.js') }}"></script>
<script src="{{ asset('js/theme.js') }}"></script>
<!-- Include All JS -->
</body>
</html>
