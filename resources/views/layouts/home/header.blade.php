<header class="header-area relative w-full bg-preload">
    <!-- Search Form -->
    <div class="search-form flex relative items-center w-full h-0 bg-preload">
        <div class="container mx-auto">
            <form action="" method="get">
                <input type="search" class="w-full bg-transparent text-white" name="search-form-input" id="searchFormInput"
                    placeholder="Type your keyword ..." />
                <button type="submit">
                    <i class="icon_search bg-transparent cursor-pointer text-white text-right"></i>
                </button>
            </form>
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
                                <li class="active"><a href="index.html">Home</a></li>
                                <li><a href="rooms.html">Rooms</a></li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="blog.html">Blogs</a></li>
                                <li><a href="contact.html">Contact</a></li>
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
