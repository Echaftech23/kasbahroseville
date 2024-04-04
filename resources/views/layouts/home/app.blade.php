<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico" />

    <!-- Style files  -->
    <link rel="stylesheet" href="{{ mix('resources/css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/default-assets/classy-nav.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    {{--  Google fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700" rel="stylesheet">

</head>
 <body>
    <!-- Preloader -->
    {{-- <div
      id="preloader"
      class="w-full h-full fixed top-0 left-0 bg-preload flex items-center justify-center overflow-hidden"
    >
      <div class="loader text-white relative"></div>
    </div> --}}
    <!-- /Preloader -->

    <!-- Header Area Start -->
    @include('layouts.home.header')
    <!-- Header Area End -->

    @yield('contents')


    <!-- Call To Action Area Start -->
    @include('layouts.home.cta')
    <!-- Call To Action Area End -->

    <!-- Partner Area Start -->
    @include('layouts.home.partners')
    <!-- Partner Area End -->

    <!-- Footer Area Start -->
    @include('layouts.home.footer')
    <!-- Footer Area End -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- home -->
    <script src="{{ asset('js/home.min.js') }}"></script>
    <!-- All Plugins -->
    <script src="{{ asset('js/kasbah.bundle.js') }}"></script>
    <!-- Active -->
    <script src="{{ asset('js/default-assets/active.js') }}"></script>
  </body>
</html>
