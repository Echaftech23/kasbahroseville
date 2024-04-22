@extends('layouts.home.app')

@section('contents')
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url({{ asset('img/bg-img/16.jpg') }})">
        <div class="container mx-auto h-full">
            <div class="flex h-full items-center">
                <div class="w-full">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title pb-2">About Us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb flex justify-center">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    About Us
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- About Us Area Start -->
    <section class="kasbah-about-us-area section-padding-100-0">
        <div class="container mx-auto">
            <div class="flex flex-col lg:flex-row">
                <div class="lg:w-1/2 pr-0 lg:pr-12">
                    <div class="about-thumbnail mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <img src="{{ asset('img/thumbnail/1686946853_DSC_6809.jpg') }}" alt="" />
                    </div>
                </div>
                <div class="lg:w-1/2 pl-0 lg:pl-10">
                    <!-- Section Heading -->
                    <div class="section-heading wow fadeInUp" data-wow-delay="300ms">
                        <h6>Testimonials</h6>
                        <h2>10 Years Of Experience</h2>
                    </div>
                    <div class="about-content mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <p>
                            Kasbah RoseVille is a captivating and opulent kasbah
                            nestled in the heart of the picturesque Kalaat Magouna valleys.
                            This magnificent kasbah is a true gem that exudes luxury, elegance,
                        </p>
                        <p class="my-4">
                            and charm in
                            every corner, making it an unforgettable destination for discerning
                            travelers seeking an authentic Moroccan experience.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Area End -->

    <!-- Video Area Start -->
    <div class="kasbah--video--area bg-img bg-overlay jarallax section-padding-0-100"
        style="background-image: url({{asset('img/bg-img/20.jpg')}})">
        <div class="container mx-auto h-full">
            <div class="flex h-full items-center justify-center">
                <div class="w-full md:w-1/2">
                    <!-- Section Heading -->
                    <div class="section-heading text-center white wow fadeInUp" data-wow-delay="100ms">
                        <h6>Ultimate Solutions</h6>
                        <h2>Our Kasbah &amp; Room</h2>
                    </div>
                    <div class="video-content-area mt-100 wow fadeInUp" data-wow-delay="500ms">
                        <a href="https://www.youtube.com/watch?v=UtrZEJUatC4" class="video-play-btn"><i
                                class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Area End -->

    <!-- Service Area Start -->
    <section class="kasbah-service-area section-padding-100-0">
      <div class="container mx-auto">
        <div class="flex flex-col">
          <div class="w-full">
            <!-- Section Heading -->
            <div
              class="section-heading text-center wow fadeInUp"
              data-wow-delay="100ms"
            >
              <h6>Ultimate Solutions</h6>
              <h2>Our Kasbah &amp; Room</h2>
            </div>
          </div>
        </div>

        <div class="flex flex-wrap -mx-4">
          <!-- Single Service Area -->
          <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8 md:mb-0">
            <div
              class="single-service-area mb-100 wow fadeInUp"
              data-wow-delay="300ms"
            >
              <img src="{{asset('img/bg-img/21.jpg')}}" alt="" />
              <div class="service-title flex items-center justify-center">
                <h5>Restaurant &amp; Lounge</h5>
              </div>
            </div>
          </div>
          <!-- Single Service Area -->
          <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8 md:mb-0">
            <div
              class="single-service-area mb-100 wow fadeInUp"
              data-wow-delay="500ms"
            >
              <img src="{{asset('img/bg-img/22.jpg')}}" alt="" />
              <div class="service-title flex items-center justify-center">
                <h5>Spa &amp; Fitness</h5>
              </div>
            </div>
          </div>
          <!-- Single Service Area -->
          <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8 md:mb-0">
            <div
              class="single-service-area mb-100 wow fadeInUp"
              data-wow-delay="700ms"
            >
              <img src="{{asset('img/bg-img/23.jpg')}}" alt="" />
              <div class="service-title flex items-center justify-center">
                <h5>Pool &amp; Party</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Service Area End -->
@endsection
