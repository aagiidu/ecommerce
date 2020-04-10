<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head> 
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Orientalnova') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="/images/favicon.ico" rel="icon">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/all.min.css">
    <link rel="stylesheet" href="/css/animate.min.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/css/tooltipster.min.css">
    <link rel="stylesheet" href="/css/cubeportfolio.min.css">
    <link rel="stylesheet" href="/css/revolution/navigation.css">
    <link rel="stylesheet" href="/css/revolution/settings.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
	<!--PreLoader-->
	<div class="loader">
	    <div class="loader-inner">
	        <div class="cssload-loader"></div>
	    </div>
	</div>
	<!--PreLoader Ends-->
    <div id="app">
    	@include('partials.header')
        <main>
            @yield('content')
        </main>
    </div>
    @include('partials.footer')
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="/js/jquery-3.4.1.min.js"></script>
	<!--Bootstrap Core-->
	<script src="/js/propper.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<!--to view items on reach-->
	<script src="/js/jquery.appear.js"></script>
	<!--Owl Slider-->
	<script src="/js/owl.carousel.min.js"></script>
	<!--number counters-->
	<script src="/js/jquery-countTo.js"></script>
	<!--Parallax Background-->
	<script src="/js/parallaxie.js"></script>
	<!--Cubefolio Gallery-->
	<script src="/js/jquery.cubeportfolio.min.js"></script>
	<!--Fancybox js-->
	<script src="/js/jquery.fancybox.min.js"></script>
	<!--tooltip js-->
	<script src="/js/tooltipster.min.js"></script>
	<!--wow js-->
	<script src="/js/wow.js"></script>
	<!--Revolution SLider-->
	<script src="/js/revolution/jquery.themepunch.tools.min.js"></script>
	<script src="/js/revolution/jquery.themepunch.revolution.min.js"></script>
	<!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
	<script src="/js/revolution/extensions/revolution.extension.actions.min.js"></script>
	<script src="/js/revolution/extensions/revolution.extension.carousel.min.js"></script>
	<script src="/js/revolution/extensions/revolution.extension.kenburn.min.js"></script>
	<script src="/js/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
	<script src="/js/revolution/extensions/revolution.extension.migration.min.js"></script>
	<script src="/js/revolution/extensions/revolution.extension.navigation.min.js"></script>
	<script src="/js/revolution/extensions/revolution.extension.parallax.min.js"></script>
	<script src="/js/revolution/extensions/revolution.extension.slideanims.min.js"></script>
	<script src="/js/revolution/extensions/revolution.extension.video.min.js"></script>
	<!--custom functions and script-->
	<script src="/js/functions.js"></script>
@yield('extra-js')
</body>
</html>
