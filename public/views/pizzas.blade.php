<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/counter.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}" defer></script>
    <script src="{{ asset('js/lightbox-plus-jquery.min.js') }}" defer></script>
    <script src="{{ asset('js/owl.carousel.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('fonts/fontawesome-webfont.eot') }}" rel="stylesheet">
    <link href="{{ asset('fonts/fontawesome-webfont.svg') }}" rel="stylesheet">
    <link href="{{ asset('fonts/fontawesome-webfont.ttf') }}" rel="stylesheet">
    <link href="{{ asset('fonts/fontawesome-webfont.woff') }}" rel="stylesheet">
    <link href="{{ asset('fonts/fontawesome-webfont.woff2') }}" rel="stylesheet">
    <link href="{{ asset('fonts/fontawesome.otf') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-starter.css') }}" rel="stylesheet">
   
    
</head>
<body>
    {{-- Navigation Starts --}}
    <!--header-->
<div class="w3l-top-header">
    <header id="site-header" class="fixed-top">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark stroke">
          <a class="navbar-brand" href="index.html">
            <span class="fa fa-pie-chart"></span> Pizza pan
          </a>
          <!-- if logo is image enable this   
        <a class="navbar-brand" href="#index.html">
            <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
        </a> -->
          <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
            <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </span>
          </button>
  
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item @@index-active">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item @@about-active">
                <a class="nav-link effect-3" href="about.html">About</a>
              </li>
              <li class="nav-item @@services-active">
                <a class="nav-link effect-3" href="services.html">Menu</a>
              </li>
              <li class="nav-item @@contact-active">
                <a class="nav-link effect-3" href="contact.html">Contact</a>
              </li>
              <li class="px-4 fill-none">
                <a href="#url" class="btn btn-style btn-secondary">Online Order</a>
                </li>
            </ul>
            <div class="popup">
              <a href="#domain" class="domain" data-toggle="modal" data-target="#DomainModal">
                <div class="hamburger1">
                  <div></div>
                  <div></div>
                  <div></div>
                </div>
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
  </div>
  <!--/header-->

    {{-- //Navigation --}}
    
</body>
</html>