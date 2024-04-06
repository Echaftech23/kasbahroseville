<header class="header-area relative w-full bg-preload">
    <!-- Search Form -->
    <div class="search-form kasbah-search-form relative w-full overflow-hidden h-0 bg-white" x-data="{ isActive: false }"
        :class="{ 'search-form-active': isActive }" @click.self="isActive = !isActive">
        <div class="container mx-auto my-10">
            <form action="{{route('search')}}" method="POST" id="searchForm">
                @csrf
                <input type="search" class="w-10/12 h-[50px] sm:w-11/12 px-4 bg-[#E2E8F0] rounded-l-lg" name="room-search"
                    id="searchFormInput" placeholder="Type your keyword..." @click.stop />
                <button type="submit" class="w-2/12 sm:w-1/12 h-[50px] rounded-r-lg bg-preload" @click.stop>
                    <i class="icon_search cursor-pointer text-white w-full text-right"></i>
                </button>
            </form>
        </div>

        <div class="container result-container mx-auto my-10">
            <div class="container mx-auto rounded-lg p-4 border shadow-lg" @click.stop>
                <h3 class="text-sm font-bold pb-0">Our Recent Rooms</h3>
                <div class="flex items-center flex-wrap justify-between p-4 pb-0" id="rooms-list">
                    @include('data')
                </div>
                @if ($rooms->hasPages())
                    {{ $rooms->links('vendor.pagination.header') }}
                @endif
            </div>
        </div>
    </div>

    <!-- Top Header Area Start -->
    <div class="top-header-area relative w-full">
        <div class="container">
            <div class="flex justify-between">
                <div>
                    <div class="top-header-content flex items-center">
                        <a href="#"><i class="icon_phone"></i>
                            <span>(+212) 069-890-9638</span></a>
                        <a href="#"><i class="icon_mail"></i>
                            <span>Kasbah.roseville@gmail.com</span></a>
                    </div>
                </div>

                <div>
                    <div class="top-header-content flex items-center">
                        <!-- Top Social Area -->
                        <div class="top-social-area ml-auto">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Header Area End -->

    <!-- Main Header Start -->
    <div class="main-header-area">
        <div class="classy-nav-container breakpoint-off p-0 bg-transparent">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-between p-0" id="kasbahNav">
                    <!-- Logo -->
                    <a class="nav-brand" href="index.html">
                        <img src="{{ asset('img/core-img/logo.png') }}" width="100px" alt="" />
                    </a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap">
                                <span class="top"></span><span class="bottom"></span>
                            </div>
                        </div>
                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li class="active"><a href="{{route('home')}}">Home</a></li>
                                <li><a href="{{route('home.rooms')}}">Rooms</a></li>
                                <li><a href="{{route('home')}}">About Us</a></li>
                                <li><a href="{{route('home')}}">Blogs</a></li>
                                <li><a href="{{route('home')}}">Contact</a></li>
                            </ul>

                            <!-- Search -->
                            <div class="search-btn ml-4">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </div>

                            <!-- Book Now -->
                            <div class="book-now-btn lg:ml-5">
                                <a href="#">Book Now
                                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
