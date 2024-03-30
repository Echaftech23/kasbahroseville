<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ mix('resources/css/app.css') }}" />
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet" />

    <script src="{{ asset('js/app.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('css/apexcharts.css') }}" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}" />
  </head>
  <body>
    <div
      x-data="{ sidebarOpen: false }"
      class="flex w-full h-screen bg-[#F5F6FA]"
    >
      <div
        :class="sidebarOpen ? 'block' : 'hidden'"
        @click="sidebarOpen = false"
        class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden"
      ></div>

      <!-- Sidebar -->
      @include('layouts.dashboard.sidebar')

      <div class="flex w-full flex-col flex-1 overflow-x-hidden">
        <!-- header -->
        @include('layouts.dashboard.header')


        <main>
            @yield('contents')
        </main>

        <!-- footer -->
        @include('layouts.dashboard.footer')

      </div>
    </div>
    <!-- **** All JS Files ***** -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>

    <script src="{{ asset('js/lodash.min.js') }}"></script>
    <script src="{{ asset('js/apexcharts.min.js') }}"></script>

    <!-- Apexcharts build helpers -->
    <script src="https://preline.co/assets/js/hs-apexcharts-helpers.js"></script>
  </body>
</html>
