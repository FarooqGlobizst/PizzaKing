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
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}" defer></script>
    <script src="{{ asset('js/lightbox-plus-jquery.min.js') }}" defer></script>
    <script src="{{ asset('js/owl.carousel.js') }}" defer></script>
    <script src="{{ asset('js/counter.js') }}" defer></script>

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
    {{-- PHP Code --}}
        @php
        $year = date('Y');   
        @endphp
    {{-- PHP Code Ends --}}
</head>
<body>

{{-- Navigation Starts --}}
    <!--header-->
    <div class="w3l-top-header">
        <header id="site-header" class="fixed-top">
          <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark stroke">
              <a class="navbar-brand" href="{{ url('/') }}">
                <span class="fa fa-pie-chart"></span> Pizza King
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
                    <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item @@about-active">
                    <a class="nav-link effect-3" href="{{ url('/about') }}">About</a>
                  </li>
                  <li class="nav-item @@services-active">
                    <a class="nav-link effect-3" href="{{ url('/menu') }}">Menu</a>
                  </li>
                  <li class="nav-item @@contact-active">
                    <a class="nav-link effect-3" href="contact.html">Contact</a>
                  </li>
     @guest
        @if (Route::has('login'))
                  <li class="nav-item @@contact-active">
                    <a class="nav-link effect-3" href="{{ route('login') }}">Login</a>
                  </li>
        
    
            @if (Route::has('register'))
                  <li class="nav-item @@contact-active">
                    <a class="nav-link effect-3" href="{{ route('register') }}">Register</a>
                  </li>
            @endif
            @else
                  <li class="nav-item @@contact-active">
                    <a class="nav-link effect-3" >{{ Auth::user()->name }}</a>
                  </li>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
       @endif
   @endguest
        
                  
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




    
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}

        
            @yield('content')
        
    
<!-- footers 20 -->
<section class="w3l-footers-20">
    <div class="footers20">
        <div class="container">
            <div class="footers20-content">
                <div class="d-grid grid-col-4 grids-content">
                    <div class="column">
                        <h4>Address</h4>
                        <p class="contact-para3">New York, NY-90814 Hill Station 4th Street</p>
                        <a href="mailto:hello@w3layouts.com">
                            <p class="contact-mail mt-2">pizza@order.com</p>
                        </a>
                    </div>
                    <div class="column">
                        <h4>Book a Table</h4>
                        <p>Lorem ipsum dolor sit amet, elit. Minima, enim.</p>
                        <a href="tel:+1-2345-678-11">
                            <p class="contact-phone mt-2">+1-2345-678-11</p>
                        </a>
                    </div>
                    <div class="column">
                        <h4>Opening hours</h4>
                        <p>Monday - Friday</p>
                        <p class="mt-2">09:00 am to 10:00 pm</p>
                    </div>
                    <div class="column">
                        <h4>Twitter feed</h4>
                        <a href="blog-single.html">
                            <p><span class="fa fa-twitter mr-2"></span>Eating hot spicy pizza is best thing to
                                consider</p>
                        </a>
                        <p class="small mt-2"><span class="fa fa-clock-o"></span> March 25, 2020</p>
                    </div>
                </div>
                <div class="d-grid grid-col-3 grids-content1 bottom-border">
                    <div class="columns copyright-grid">
                        <p class="copy-footer-29">© {{$year}} Pizza Pan. All rights reserved | Designed by <a
                                href="http://globizst.com">Farooq Akram</a></p>
                    </div>
                    <div class="columns text-right social-grid">
                        <ul class="social">
                            <li><a href="#url"><span class="fa fa-facebook" aria-hidden="true"></span></a></li>
                            <li><a href="#url"><span class="fa fa-instagram" aria-hidden="true"></span></a></li>
                            <li><a href="#url"><span class="fa fa-twitter" aria-hidden="true"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
    &#10548;
</button>
<script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
        } else {
            document.getElementById("movetop").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
<!-- /move top -->
</section>

<!-- jQuery and Bootstrap JS -->


<!-- libhtbox -->
<script src="{{ asset('js/jquery-3.3.1.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}" defer></script>
    <script src="{{ asset('js/lightbox-plus-jquery.min.js') }}" defer></script>
    <script src="{{ asset('js/owl.carousel.js') }}" defer></script>
    <script src="{{ asset('js/counter.js') }}" defer></script>
<script>
    
</script>

<!-- testimonials owlcarousel -->

<script>
   
</script>
<!-- //script for Testimonials-->

<!-- script for food-->
<script>
   
</script>
<!--//MENU-JS-->
<script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>