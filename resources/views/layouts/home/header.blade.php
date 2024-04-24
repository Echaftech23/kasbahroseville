<header class="header-area relative w-full bg-preload">
    <!-- Search Form -->
    <div class="search-form kasbah-search-form relative w-full overflow-hidden h-0 bg-white" x-data="{ isActive: false }"
        :class="{ 'search-form-active': isActive }" @click.self="isActive = !isActive">
        <div class="container mx-auto my-10">
            <form action="{{ route('search') }}" method="POST" id="searchForm">
                @csrf
                <input type="search" class="w-10/12 h-[50px] sm:w-11/12 px-4 bg-[#E2E8F0] rounded-l-lg"
                    name="room-search" id="searchFormInput" placeholder="Type your keyword..." @click.stop />
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
                    <a class="nav-brand" href="#">
                        <img src="{{ asset('img/core-img/logo.png') }}" width="100px" alt="" />
                    </a>
                    <div class="flex items-center">
                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </div>
                        @if (Auth::check())
                            <div x-data="{ dropdownOpen: false }" @click.away="{ dropdownOpen = false }"
                                class="relative inline-block lg:hidden  ml-[20px] lg:ml-[30px]">
                                <button class="flex items-center justify-center" @click="dropdownOpen = !dropdownOpen">
                                    <div
                                        class="relative block w-8 h-8 overflow-hidden rounded-full shadow focus:outline-none mr-2">
                                        <img class="object-cover w-full h-full" src="{{ asset('img/bg-img/1.jpg') }}"
                                            alt="Your avatar" />
                                    </div>
                                    <span
                                        class="text-sm hidden sm:block font-medium mobile md:block cursor-pointer">{{ Auth::user()->name }}</span>
                                </button>
                                <div x-show="dropdownOpen"
                                    class="absolute right-0 z-10 bg-white shadow-lg mt-2 w-[160px] border p-3 overflow-hidden rounded-md"
                                    style="display: none;">
                                    @if (Auth::user()->hasRole('Guest'))
                                        <a href="{{ route('guest.profile', Auth::user()->id) }}" class="flex w-full items-center px-2 py-2 text-s">
                                            <img src="{{ asset('img/dashborad/profile.svg') }}"
                                                class="w-5  mr-1 inline-flex" alt="">
                                            <span>Profile</span>
                                        </a>
                                    @elseif (Auth::user()->hasRole('front-desk'))
                                        <a href="{{ route('front-desk.profile') }}" class="flex w-full items-center px-2 py-2 text-s">
                                            <img src="{{ asset('img/dashborad/profile.svg') }}"
                                                class="w-5  mr-1 inline-flex" alt="">
                                            <span>Profile</span>
                                        </a>
                                    @else
                                        <a href="{{ route('admin.profile') }}" class="flex w-full items-center px-2 py-2 text-s">
                                            <img src="{{ asset('img/dashborad/profile.svg') }}"
                                                class="w-5  mr-1 inline-flex" alt="">
                                            <span>Profile</span>
                                        </a>
                                    @endif

                                    @if (Auth::user()->hasRole('Guest'))
                                        @if (Auth::user()->reservations->count() > 0)
                                            <a href="{{ route('user.reservations') }}"
                                                class="flex w-full items-center px-2 py-2 text-s">
                                                <img src="{{ asset('img/dashborad/reservation.svg') }}"
                                                    class="w-5 mr-1 inline-flex" alt="">
                                                <span>Bookings</span>
                                            </a>
                                        @endif
                                    @endif
                                    @if (Auth::user()->hasRole('Admin'))
                                        <a href="{{ route('admin.dashboard') }}"
                                            class="flex w-full items-center px-2 py-2 text-s">
                                            <img src="{{ asset('img/dashborad/dashboard.svg') }}"
                                                class="w-5 mr-1 inline-flex" alt="">
                                            <span>Dashboard</span>
                                        </a>
                                    @else
                                        <a href="{{ route('front-desk.dashboard') }}"
                                            class="flex w-full items-center px-2 py-2 text-s">
                                            <img src="{{ asset('img/dashborad/dashboard.svg') }}"
                                                class="w-5 mr-1 inline-flex" alt="">
                                            <span>Dashboard</span>
                                        </a>
                                    @endif
                                    <a href="{{ url('settings') }}" class="flex w-full items-center px-2 py-2 text-s">
                                        <img src="{{ asset('img/dashborad/speen.svg') }}" class="w-5 mr-1 inline-flex"
                                            alt="">
                                        <span>Settings</span>
                                    </a>
                                    <a href="{{ url('logout') }}" class="flex w-full items-center px-2 py-2 text-s">
                                        <img src="{{ asset('img/dashborad/logout.svg') }}" class="w-5 mr-1 inline-flex"
                                            alt="">
                                        <span>Logout</span>
                                    </a>
                                </div>
                            </div>
                        @endif
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
                                <li class="active"><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('home.rooms.index') }}">Rooms</a></li>
                                <li><a href="{{ route('home.about') }}">About Us</a></li>
                                <li><a href="{{ route('home.blog') }}">Blogs</a></li>
                                <li><a href="{{ route('home.contact') }}">Contact</a></li>
                            </ul>

                            <!-- Search -->
                            <div class="search-btn ml-4">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </div>

                            <!-- Book Now -->
                            <div>
                                @if (Auth::check())
                                    <div x-data="{ dropdownOpen: false }" @click.away="{ dropdownOpen = false }"
                                        class="relative hidden sm:block ml-[10px] lg:ml-[30px]">
                                        <button class="flex items-center justify-center"
                                            @click="dropdownOpen = !dropdownOpen">
                                            <div
                                                class="relative block w-10 h-10 overflow-hidden rounded-full shadow focus:outline-none mr-2">
                                                <img class="object-cover w-full h-full"
                                                    src="{{ asset('img/bg-img/1.jpg') }}" alt="Your avatar" />
                                            </div>
                                            <span
                                                class="text-sm font-medium mobile md:block cursor-pointer">{{ Auth::user()->name }}</span>
                                        </button>

                                        <div x-show="dropdownOpen"
                                            class="absolute right-0 z-10 bg-white shadow-lg mt-2 w-[160px] border p-3 overflow-hidden rounded-md"
                                            style="display: none;">
                                            @if (Auth::user()->hasRole('Guest'))
                                                <a href="{{ route('guest.profile', Auth::user()->id) }}" class="flex w-full items-center px-2 py-2 text-s">
                                                    <img src="{{ asset('img/dashborad/profile.svg') }}"
                                                        class="w-5  mr-1 inline-flex" alt="">
                                                    <span>Profile</span>
                                                </a>
                                            @elseif (Auth::user()->hasRole('front-desk'))
                                                <a href="{{ route('front-desk.profile') }}" class="flex w-full items-center px-2 py-2 text-s">
                                                    <img src="{{ asset('img/dashborad/profile.svg') }}"
                                                        class="w-5  mr-1 inline-flex" alt="">
                                                    <span>Profile</span>
                                                </a>
                                            @else
                                                <a href="{{ route('admin.profile') }}" class="flex w-full items-center px-2 py-2 text-s">
                                                    <img src="{{ asset('img/dashborad/profile.svg') }}"
                                                        class="w-5  mr-1 inline-flex" alt="">
                                                    <span>Profile</span>
                                                </a>
                                            @endif

                                            @if (Auth::user()->hasRole('Guest'))
                                                @if (Auth::user()->reservations->count() > 0)
                                                    <a href="{{ route('user.reservations') }}"
                                                        class="flex w-full items-center px-2 py-2 text-s">
                                                        <img src="{{ asset('img/dashborad/reservation.svg') }}"
                                                            class="w-5 mr-1 inline-flex" alt="">
                                                        <span>Bookings</span>
                                                    </a>
                                                @endif
                                            @endif
                                            @if (Auth::user()->hasRole('Admin'))
                                                <a href="{{ route('admin.dashboard') }}"
                                                    class="flex w-full items-center px-2 py-2 text-s">
                                                    <img src="{{ asset('img/dashborad/dashboard.svg') }}"
                                                        class="w-5 mr-1 inline-flex" alt="">
                                                    <span>Dashboard</span>
                                                </a>
                                            @elseif (Auth::user()->hasRole('front)desk'))
                                                <a href="{{ route('front-desk.dashboard') }}"
                                                    class="flex w-full items-center px-2 py-2 text-s">
                                                    <img src="{{ asset('img/dashborad/dashboard.svg') }}"
                                                        class="w-5 mr-1 inline-flex" alt="">
                                                    <span>Dashboard</span>
                                                </a>
                                            @endif
                                            <a href="{{ url('settings') }}"
                                                class="flex w-full items-center px-2 py-2 text-s">
                                                <img src="{{ asset('img/dashborad/speen.svg') }}"
                                                    class="w-5 mr-1 inline-flex" alt="">
                                                <span>Settings</span>
                                            </a>
                                            <a href="{{ url('logout') }}"
                                                class="flex w-full items-center px-2 py-2 text-s">
                                                <img src="{{ asset('img/dashborad/logout.svg') }}"
                                                    class="w-5 mr-1 inline-flex" alt="">
                                                <span>Logout</span>
                                            </a>
                                        </div>
                                    </div>
                                @else
                                    <div class="book-now-btn lg:ml-5">
                                        <a href="{{ Auth::check() ? route('home.rooms') : route('login') }}">Book Now
                                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
