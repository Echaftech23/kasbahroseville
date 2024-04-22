@extends('layouts.home.app')

@section('contents')
<!-- Breadcrumb Area Start -->
    <div
      class="breadcrumb-area bg-img bg-overlay jarallax"
      style="background-image: url({{asset('img/bg-img/16.jpg')}})"
    >
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
            <div
              class="about-thumbnail mb-100 wow fadeInUp"
              data-wow-delay="100ms"
            >
              <img src="{{asset('img/bg-img/19.jpg')}}" alt="" />
            </div>
          </div>
          <div class="lg:w-1/2 pl-0 lg:pl-10">
            <!-- Section Heading -->
            <div class="section-heading wow fadeInUp" data-wow-delay="300ms">
              <h6>Testimonials</h6>
              <h2>20 Years Of Experience</h2>
            </div>
            <div
              class="about-content mb-100 wow fadeInUp"
              data-wow-delay="500ms"
            >
              <p>
                Excepteur sint occaecat cupidatat non proident, sunt in culpa
                qui officia dese mollit anim id est laborum. Sed ut perspiciatis
                unde omnis iste.
              </p>
              <p class="my-4">
                Excepteur sint occaecat cupidatat non proident, sunt in culpa
                qui officia dese mollit anim id est laborum. Sed ut perspiciatis
                unde omnis iste. Lorem Ipsum available.
              </p>
              <img src="img/core-img/signature.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About Us Area End -->
@endsection
