@extends('layouts.home.app')
{{-- Success Alert --}}
@if (Session::has('success'))
    <div id="dismiss-alert" x-data="{ show: true }" x-show="show" x-transition:leave="transition ease-in duration-2000"
        x-transition:leave-start="opacity-100 translate-x-0" x-transition:leave-end="opacity-0 -translate-x-full"
        x-init="setTimeout(() => show = false, 4000)" class="fixed left-0 top-[24%] m-6 max-w-md rounded-lg p-4"
        style="z-index: 9999; background-color: #E42C76; color: #fff; border-color: #E42C76;" role="alert">
        <div class="flex">
            <div class="flex-shrink-0">
                <svg class="flex-shrink-0 size-4 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
                    <path d="m9 12 2 2 4-4"></path>
                </svg>
            </div>
            <div class="ms-2">
                <div class="text-sm font-medium">
                    {{ session('success') }}
                </div>
            </div>
            <div class="ps-3 ms-auto">
                <div class="-mx-1.5 -my-1.5">
                    <button type="button"
                        class="inline-flex rounded-lg p-1.5 hover:bg-[#E42C76] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-[#E42C76] focus:ring-[#E42C76]"
                        style="background-color: #E42C76; color: #fff;" @click="show = !open">
                        <span class="sr-only">Dismiss</span>
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endif

{{-- Warning Alert --}}
@if (Session::has('warning'))
    <div id="dismiss-alert" x-data="{ show: true }" x-show="show" x-transition:leave="transition ease-in duration-2000"
        x-transition:leave-start="opacity-100 translate-x-0" x-transition:leave-end="opacity-0 -translate-x-full"
        x-init="setTimeout(() => show = false, 4000)" class="fixed left-0 top-1/4 m-6 max-w-md rounded-lg p-4"
        style="z-index: 9999; background-color: #FF9E0E; color: #fff; border-color: #FF9E0E;" role="alert">
        <div class="flex items-center">
            <div class="flex-shrink-0">
                <img src="{{ asset('img/dashborad/warning.svg') }}" width="18px" class="mt-0.5" height="18px"
                    alt="">
            </div>
            <div class="ms-2">
                <div class="text-sm font-medium">
                    {{ session('warning') }}
                </div>
            </div>
            <div class="ps-3 ms-auto">
                <div class="-mx-1.5 -my-1.5">
                    <button type="button"
                        class="inline-flex rounded-lg p-1.5 hover:bg-[#FF9E0E] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-[#FF9E0E] focus:ring-[#FF9E0E]"
                        style="background-color: #FF9E0E; color: #fff;" @click="show = false">
                        <span class="sr-only">Dismiss</span>
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endif

{{-- Warning Alert --}}
@if (Session::has('error'))
    <div id="dismiss-alert" x-data="{ show: true }" x-show="show" x-transition:leave="transition ease-in duration-2000"
        x-transition:leave-start="opacity-100 translate-x-0" x-transition:leave-end="opacity-0 -translate-x-full"
        x-init="setTimeout(() => show = false, 4000)" class="fixed left-0 top-1/4 m-6 max-w-md rounded-lg p-4"
        style="z-index: 9999; background-color: #eb2817; color: #fff; border-color: #eb2817;" role="alert">
        <div class="flex items-center">
            <div class="flex-shrink-0">
                <img src="{{ asset('img/dashborad/error.svg') }}" width="20px" height="20px" alt="">
            </div>
            <div class="ms-2">
                <div class="text-sm font-medium">
                    {{ session('error') }}
                </div>
            </div>
            <div class="ps-3 ms-auto">
                <div class="-mx-1.5 -my-1.5">
                    <button type="button"
                        class="inline-flex rounded-lg p-1.5 hover:bg-[#eb2817] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-[#eb2817] focus:ring-[#eb2817]"
                        style="background-color: #eb2817; color: #fff;" @click="show = false">
                        <span class="sr-only">Dismiss</span>
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endif
@section('contents')
    <!-- Welcome Area Start -->
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">
            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay"
                style="background-image: url('{{ asset('img/cover/1686016799_DSC_6696vv1.jpg') }}')"
                data-img-url="img/cover/1686016799_DSC_6696vv1.jpg">
                <!-- Welcome Content -->
                <div class="welcome-content h-full">
                    <div class="container h-full">
                        <div class="flex h-full items-center">
                            <!-- Welcome Text -->
                            <div class="w-full">
                                <div class="welcome-text text-center">
                                    <h6 data-animation="fadeInLeft" data-delay="200ms">
                                        Guest House
                                    </h6>
                                    <h2 data-animation="fadeInLeft" data-delay="500ms">
                                        Welcome To Roseville
                                    </h2>
                                    <a href="#" class="btn hero-btn btn-2" data-animation="fadeInLeft"
                                        data-delay="800ms">DISCOVER NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay"
                style="background-image: url('{{ asset('img/thumbnail/1687449551_kasbahroseville-riad.jpg') }}')"
                data-img-url="img/thumbnail/1687449551_kasbahroseville-riad.jpg">
                <!-- Welcome Content -->
                <div class="welcome-content h-full">
                    <div class="container mx-auto h-full">
                        <div class="flex h-full items-center">
                            <!-- Welcome Text -->
                            <div class="w-full">
                                <div class="welcome-text text-center">
                                    <h6 data-animation="fadeInUp" data-delay="200ms">
                                        Guest House
                                    </h6>
                                    <h2 data-animation="fadeInUp" data-delay="500ms">
                                        A Perfect Getway
                                    </h2>
                                    <a href="#" class="btn hero-btn btn-2" data-animation="fadeInUp"
                                        data-delay="800ms">GET IN TOUCH</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay"
                style="background-image: url('{{ asset('img/cover/1686001516_DSC_6647vv1.jpg') }}')"
                data-img-url="img/cover/1686001516_DSC_6647vv1.jpg">
                <!-- Welcome Content -->
                <div class="welcome-content h-full">
                    <div class="container h-full">
                        <div class="flex h-full items-center">
                            <!-- Welcome Text -->
                            <div class="w-full">
                                <div class="welcome-text text-center">
                                    <h6 data-animation="fadeInDown" data-delay="200ms">
                                        Guest House
                                    </h6>
                                    <h2 data-animation="fadeInDown" data-delay="500ms">
                                        A Peaceful Haven
                                    </h2>
                                    <a href="#" class="btn hero-btn btn-2" data-animation="fadeInDown"
                                        data-delay="800ms">WATCH VEDIO</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome Area End -->

    <!-- About Us Area Start -->
    <section class="roseville-about-area section-padding-100-0">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-3 items-center">
                <div class="col-span-1 md:col-span-1 lg:col-span-1">
                    <!-- Section Heading -->
                    <div class="section-heading wow fadeInUp" data-wow-delay="100ms">
                        <h6>About Us</h6>
                        <h2>Welcome to <br />Kasbah Roseville</h2>
                    </div>
                    <div class="about-us-content mb-100">
                        <h5 class="wow fadeInUp" data-wow-delay="300ms">
                            Kasbah RoseVille is a captivating and opulent kasbah nestled in
                            the heart of the picturesque Kalaat Magouna valleys. This
                            magnificent kasbah is a true gem that exudes luxury, elegance,
                            and charm in every corner, making it an unforgettable
                            destination for discerning travelers seeking an authentic
                            Moroccan experience.
                        </h5>
                        <p class="wow fadeInUp" data-wow-delay="400ms">
                            Manager: <span>Michen Taylor</span>
                        </p>
                        <img src="{{ asset('img/core-img/signature.png') }}" alt="" class="wow fadeInUp"
                            data-wow-delay="500ms" />
                    </div>
                </div>

                <div class="col-span-1 md:col-span-1 lg:col-span-1">
                    <div class="about-us-thumbnail mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <div class="grid grid-cols-2 no-gutters">
                            <div class="col-span-1">
                                <div class="single-thumb">
                                    <img src="{{ asset('img/cover/1686016799_DSC_6696vv1.jpg') }}" alt="" />
                                </div>
                                <div class="single-thumb">
                                    <img src="{{ asset('img/thumbnail/1686946853_DSC_6809.jpg') }}" alt="" />
                                </div>
                            </div>
                            <div class="col-span-1">
                                <div class="single-thumb">
                                    <img src="{{ asset('img/thumbnail/jewish_history_morocco.jpg') }}" alt="" />
                                </div>
                                <div class="single-thumb">
                                    <img src="{{ asset('img/core-img/1686053792_DSC_6717v1.jpg') }}" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Area End -->

    <!-- Service Area Start -->
    <div class="kasbah-service-area">
        <div class="container">
            <div class="grid">
                <div class="col-span-12">
                    <div class="service-content flex items-center justify-between">
                        <!-- Single Service Area -->
                        <div class="single-service--area text-center mb-100 wow fadeInUp" data-wow-delay="100ms">
                            <img src="{{ asset('img/core-img/icon-1.png') }}" alt="" />
                            <h5>Transportion</h5>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service--area text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                            <img src="{{ asset('img/core-img/icon-2.png') }}" alt="" />
                            <h5>Reiseservice</h5>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service--area text-center mb-100 wow fadeInUp" data-wow-delay="900ms">
                            <img src="{{ asset('img/core-img/icon-1.png') }}" alt="" />
                            <h5>Traditional Hammam</h5>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service--area text-center mb-100 wow fadeInUp" data-wow-delay="500ms">
                            <img src="{{ asset('img/core-img/icon-3.png') }}" alt="" />
                            <h5>Spa Relaxtion</h5>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service--area text-center mb-100 wow fadeInUp" data-wow-delay="700ms">
                            <img src="{{ asset('img/core-img/icon-4.png') }}" alt="" />
                            <h5>Restaurant</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Area End -->

    <!-- Our Room Area Start -->
    <section class="kasbah-rooms-area">
        <div class="rooms-slides owl-carousel">
            <!-- Single Room Slide -->
            @foreach ($rooms as $room)
                <div class="single-room-slide flex items-center">
                    <!-- Thumbnail -->
                    <div class="room-thumbnail h-full bg-img"
                        style="background-image: url('{{ $room->getFirstMediaUrl('rooms') }}');">
                    </div>

                    <!-- Content -->
                    <div class="room-content">
                        <h2 data-animation="fadeInUp" data-delay="100ms">
                            {{ $room->name }}
                        </h2>
                        <h3 data-animation="fadeInUp" data-delay="300ms">
                            {{ $room->price }}$ <span>/ Day</span>
                        </h3>
                        <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                            <li>
                                <span><i class="fa fa-check"></i> Size</span>
                                <span>: {{ $room->size }} ft</span>
                            </li>
                            <li>
                                <span><i class="fa fa-check"></i> Capacity</span>
                                <span>: Max persion {{ $room->capacity }}</span>
                            </li>
                            <li>
                                <span><i class="fa fa-check"></i> Type</span>
                                <span>: {{ $room->type->type }}</span>
                            </li>
                            <li>
                                <span><i class="fa fa-check"></i> Services</span>
                                : <span>
                                    @php
                                        $facilities = $room->facilities->slice(0, 3);
                                    @endphp

                                    @foreach ($facilities as $facility)
                                        {{ $loop->first ? '' : ',  ' }}
                                        {{ $facility->name }}
                                    @endforeach

                                    @if ($room->facilities->count() > 3)
                                        ...
                                    @endif
                                </span>
                            </li>
                        </ul>

                        <a href="{{ route('home.rooms.show', $room->id) }}" class="btn hero-btn mt-30">View Details</a>

                    </div>
                </div>
            @endforeach

            <!-- Single Room Slide -->
            <div class="single-room-slide flex items-center">
                <!-- Thumbnail -->
                <div class="room-thumbnail h-full bg-img"
                    style="background-image: url(img/cover/1686053792_DSC_6706vv1.jpg)"></div>

                <!-- Content -->
                <div class="room-content">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Best King Room</h2>
                    <h3 data-animation="fadeInUp" data-delay="300ms">
                        125$ <span>/ Day</span>
                    </h3>
                    <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                        <li>
                            <span><i class="fa fa-check"></i> Size</span>
                            <span>: 30 ft</span>
                        </li>
                        <li>
                            <span><i class="fa fa-check"></i> Capacity</span>
                            <span>: Max persion 5</span>
                        </li>
                        <li>
                            <span><i class="fa fa-check"></i> Bed</span>
                            <span>: King Beds</span>
                        </li>
                        <li>
                            <span><i class="fa fa-check"></i> Services</span>
                            <span>: Wifi, Television, Bathroom</span>
                        </li>
                    </ul>
                    <a href="#" class="btn hero-btn mt-30" data-animation="fadeInUp" data-delay="700ms">View
                        Details</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Room Area End -->

    <!-- Testimonials Area Start -->
    <section class="kasbah-testimonials-area section-padding-100-0">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 items-center">
                <div class="col-span-1 md:col-span-6 lg:grid-cols-6 mx-3">
                    <div class="testimonial-thumbnail owl-carousel mb-100">
                        <img src="{{asset('img/bg-img/10.jpg')}}" alt="" />
                        <img src="{{asset('img/bg-img/11.jpg')}}" alt="" />
                    </div>
                </div>

                <div class="col-span-1 md:col-span-6 lg:grid-cols-6 mx-3">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h6>Testimonials</h6>
                        <h2>Our Guests Love Us</h2>
                    </div>
                    <!-- Testimonial Slide -->
                    <div class="testimonial-slides owl-carousel mb-100">
                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide">
                            <h5>
                                “This can be achieved by applying search engine optimization
                                or popularly known as SEO. This is a marketing strategy which
                                increases the quality and quantity of traffic flow to a
                                particular website via search engines.”
                            </h5>
                            <div class="rating-title">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div>
                                <h6>Robert Downey <span>- CEO Deercreative</span></h6>
                            </div>
                        </div>

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide">
                            <h5>
                                “Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Necessitatibus delectus facilis molestias, error vitae
                                praesentium quos eaque qui ea, tempore blanditiis sint
                                reprehenderit, quaerat. Commodi ab architecto sit suscipit
                                exercitationem!”
                            </h5>
                            <div class="rating-title">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div>
                                <h6>Akash Downey <span>- CEO Deercreative</span></h6>
                            </div>
                        </div>

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide">
                            <h5>
                                “Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Dolor, ex quos. Alias a rem maiores, possimus dicta sit
                                distinctio quis iusto!”
                            </h5>
                            <div class="rating-title">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div>
                                <h6>Downey Sarah <span>- CEO Deercreative</span></h6>
                            </div>
                        </div>

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide">
                            <h5>
                                “Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Labore sequi laboriosam fugit suscipit aspernatur, minima
                                minus voluptatum, id ab atque similique ex earum. Magni.”
                            </h5>
                            <div class="rating-title">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div>
                                <h6>Robert Brown <span>- CEO Deercreative</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials Area End -->

    <!-- Projects Area Start -->
    <section class="kasbah-project-area">
        <!-- Projects Slide -->
        <div class="projects-slides owl-carousel">
            <!-- Single Project Slide -->
            <div class="single-project-slide active bg-img"
                style="background-image: url({{ asset('img/cover/IMG_5827.jpg') }})">
                <!-- Project Text -->
                <div class="project-content">
                    <div class="text">
                        <h6>Entertaiment</h6>
                        <h5>Racing Bike</h5>
                    </div>
                </div>
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <div class="text">
                        <h6>Entertaiment</h6>
                        <h5>Racing Bike</h5>
                        <p>
                            I focus a lot on helping the first time or inexperienced
                            traveler head out prepared and confident...
                        </p>
                    </div>
                    <a href="#" class="btn project-btn">Discover Now
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Project Slide -->
            <div class="single-project-slide bg-img"
                style="background-image: url({{ asset('img/cover/IMG_0557.jpg') }})">
                <!-- Project Text -->
                <div class="project-content">
                    <div class="text">
                        <h6>Entertaiment</h6>
                        <h5>Racing Bike</h5>
                    </div>
                </div>
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <div class="text">
                        <h6>Entertaiment</h6>
                        <h5>Racing Bike</h5>
                        <p>
                            I focus a lot on helping the first time or inexperienced
                            traveler head out prepared and confident...
                        </p>
                    </div>
                    <a href="#" class="btn project-btn">Discover Now
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Project Slide -->
            <div class="single-project-slide bg-img" style="background-image: url({{ asset('img/cover/12.jpg') }})">
                <!-- Project Text -->
                <div class="project-content">
                    <div class="text">
                        <h6>Entertaiment</h6>
                        <h5>Racing Bike</h5>
                    </div>
                </div>
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <div class="text">
                        <h6>Entertaiment</h6>
                        <h5>Racing Bike</h5>
                        <p>
                            I focus a lot on helping the first time or inexperienced
                            traveler head out prepared and confident...
                        </p>
                    </div>
                    <a href="#" class="btn project-btn">Discover Now
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Project Slide -->
            <div class="single-project-slide bg-img"
                style="background-image: url({{ asset('img/cover/IMG_9916.jpg') }})">
                <!-- Project Text -->
                <div class="project-content">
                    <div class="text">
                        <h6>Entertaiment</h6>
                        <h5>Racing Bike</h5>
                    </div>
                </div>
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <div class="text">
                        <h6>Entertaiment</h6>
                        <h5>Racing Bike</h5>
                        <p>
                            I focus a lot on helping the first time or inexperienced
                            traveler head out prepared and confident...
                        </p>
                    </div>
                    <a href="#" class="btn project-btn">Discover Now
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Single Project Slide -->
            <div class="single-project-slide bg-img" style="background-image: url({{ asset('img/cover/11.png') }})">
                <!-- Project Text -->
                <div class="project-content">
                    <div class="text">
                        <h6>Entertaiment</h6>
                        <h5>Racing Bike</h5>
                    </div>
                </div>
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <div class="text">
                        <h6>Entertaiment</h6>
                        <h5>Racing Bike</h5>
                        <p>
                            I focus a lot on helping the first time or inexperienced
                            traveler head out prepared and confident...
                        </p>
                    </div>
                    <a href="#" class="btn project-btn">Discover Now
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Projects Area End -->

    <!-- Blog Area Start -->
    <section class="kasbah-blog-area section-padding-100-0">
        <div class="container mx-auto">
            <div class="flex flex-wrap">
                <!-- Section Heading -->
                <div class="w-full">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h6 class="text-sm lg:text-base">Our Blog</h6>
                        <h2 class="text-2xl lg:text-4xl font-bold">
                            Latest News &amp; Event
                        </h2>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap">
                <!-- Single Post Area -->
                <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                    <div class="single-post-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <a href="#" class="post-thumbnail">
                            <img src="{{ asset('img/bg-img/2.jpg') }}" alt="" />
                        </a>
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <a href="#" class="post-date">Jan 02, 2019</a>
                            <a href="#" class="post-catagory">Event</a>
                        </div>
                        <!-- Post Title -->
                        <a href="#" class="post-title">Learn How To Motivate Yourself</a>
                        <p>
                            How many free autoresponders have you tried? And how many emails
                            did you get through using them?
                        </p>
                        <a href="index-2.html" class="btn continue-btn">
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>

                <!-- Single Post Area -->
                <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                    <div class="single-post-area mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <a href="#" class="post-thumbnail">
                            <img src="{{ asset('img/bg-img/3.jpg') }}" alt="" />
                        </a>
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <a href="#" class="post-date">Jan 02, 2019</a>
                            <a href="#" class="post-catagory">Event</a>
                        </div>
                        <!-- Post Title -->
                        <a href="#" class="post-title">What If Let You Run The Hubble</a>
                        <p>
                            My point here is that if you have no clue for the answers above
                            you probably are not operating a followup.
                        </p>
                        <a href="index-2.html" class="btn continue-btn">
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>

                <!-- Single Post Area -->
                <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                    <div class="single-post-area mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <a href="#" class="post-thumbnail">
                            <img src="{{ asset('img/bg-img/4.jpg') }}" alt="" />
                        </a>
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <a href="#" class="post-date">Jan 02, 2019</a>
                            <a href="#" class="post-catagory">Event</a>
                        </div>
                        <!-- Post Title -->
                        <a href="#" class="post-title">Six Pack Abs The Big Picture</a>
                        <p>
                            Some good steps to take to ensure you are getting what you need
                            out of an autoresponder include…
                        </p>
                        <a href="index-2.html" class="btn continue-btn">
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Area End -->
@endsection
