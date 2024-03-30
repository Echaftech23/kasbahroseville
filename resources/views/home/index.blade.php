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
    <div
      id="preloader"
      class="w-full h-full fixed top-0 left-0 bg-preload flex items-center justify-center overflow-hidden"
    >
      <div class="loader text-white relative"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area relative w-full bg-preload">
      <!-- Search Form -->
      <div class="search-form flex relative items-center w-full h-0 bg-preload">
        <div class="container mx-auto">
          <form action="" method="get">
            <input
              type="search"
              class="w-full bg-transparent text-white"
              name="search-form-input"
              id="searchFormInput"
              placeholder="Type your keyword ..."
            />
            <button type="submit">
              <i
                class="icon_search bg-transparent cursor-pointer text-white text-right"
              ></i>
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
                <a href="#"
                  ><i class="icon_phone"></i>
                  <span>(+212) 069-890-9638</span></a
                >
                <a href="#"
                  ><i class="icon_mail"></i>
                  <span>Kasbah.roseville@gmail.com</span></a
                >
              </div>
            </div>

            <div>
              <div class="top-header-content flex items-center">
                <!-- Top Social Area -->
                <div class="top-social-area ml-auto">
                  <a href="#"
                    ><i class="fa fa-facebook" aria-hidden="true"></i
                  ></a>
                  <a href="#"
                    ><i class="fa fa-twitter" aria-hidden="true"></i
                  ></a>
                  <a href="#"
                    ><i class="fa fa-tripadvisor" aria-hidden="true"></i
                  ></a>
                  <a href="#"
                    ><i class="fa fa-instagram" aria-hidden="true"></i
                  ></a>
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
                    <li><a href="blog.html">Facilities</a></li>
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
                    <a href="#"
                      >Book Now
                      <i class="fa fa-long-arrow-right" aria-hidden="true"></i
                    ></a>
                  </div>
                </div>
                <!-- Nav End -->
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- Header Area End -->

    <!-- Welcome Area Start -->
    <section class="welcome-area">
      <div class="welcome-slides owl-carousel">
        <!-- Single Welcome Slide -->
        <div
          class="single-welcome-slide bg-img bg-overlay"
          style="background-image: url('{{ asset('img/cover/1686016799_DSC_6696vv1.jpg') }}')"
          data-img-url="img/cover/1686016799_DSC_6696vv1.jpg"
        >
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
                    <a
                      href="#"
                      class="btn hero-btn btn-2"
                      data-animation="fadeInLeft"
                      data-delay="800ms"
                      >DISCOVER NOW</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Single Welcome Slide -->
        <div
          class="single-welcome-slide bg-img bg-overlay"
          style="background-image: url('{{ asset('img/thumbnail/1687449551_kasbahroseville-riad.jpg') }}')"
          data-img-url="img/thumbnail/1687449551_kasbahroseville-riad.jpg"
        >
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
                    <a
                      href="#"
                      class="btn hero-btn btn-2"
                      data-animation="fadeInUp"
                      data-delay="800ms"
                      >GET IN TOUCH</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Single Welcome Slide -->
        <div
          class="single-welcome-slide bg-img bg-overlay"
          style="background-image: url('{{ asset('img/cover/1686001516_DSC_6647vv1.jpg') }}')"
          data-img-url="img/cover/1686001516_DSC_6647vv1.jpg"
        >
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
                    <a
                      href="#"
                      class="btn hero-btn btn-2"
                      data-animation="fadeInDown"
                      data-delay="800ms"
                      >WATCH VEDIO</a
                    >
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
        <div
          class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-3 items-center"
        >
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
              <img
                src="img/core-img/signature.png"
                alt=""
                class="wow fadeInUp"
                data-wow-delay="500ms"
              />
            </div>
          </div>

          <div class="col-span-1 md:col-span-1 lg:col-span-1">
            <div
              class="about-us-thumbnail mb-100 wow fadeInUp"
              data-wow-delay="700ms"
            >
              <div class="grid grid-cols-2 no-gutters">
                <div class="col-span-1">
                  <div class="single-thumb">
                    <img src="img/cover/1686016799_DSC_6696vv1.jpg" alt="" />
                  </div>
                  <div class="single-thumb">
                    <img src="img/thumbnail/1686946853_DSC_6809.jpg" alt="" />
                  </div>
                </div>
                <div class="col-span-1">
                  <div class="single-thumb">
                    <img
                      src="img/thumbnail/jewish_history_morocco.jpg"
                      alt=""
                    />
                  </div>
                  <div class="single-thumb">
                    <img src="img/core-img/1686053792_DSC_6717v1.jpg" alt="" />
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
              <div
                class="single-service--area text-center mb-100 wow fadeInUp"
                data-wow-delay="100ms"
              >
                <img src="img/core-img/icon-1.png" alt="" />
                <h5>Transportion</h5>
              </div>

              <!-- Single Service Area -->
              <div
                class="single-service--area text-center mb-100 wow fadeInUp"
                data-wow-delay="300ms"
              >
                <img src="img/core-img/icon-2.png" alt="" />
                <h5>Reiseservice</h5>
              </div>

              <!-- Single Service Area -->
              <div
                class="single-service--area text-center mb-100 wow fadeInUp"
                data-wow-delay="900ms"
              >
                <img src="img/core-img/icon-1.png" alt="" />
                <h5>Traditional Hammam</h5>
              </div>

              <!-- Single Service Area -->
              <div
                class="single-service--area text-center mb-100 wow fadeInUp"
                data-wow-delay="500ms"
              >
                <img src="img/core-img/icon-3.png" alt="" />
                <h5>Spa Relaxtion</h5>
              </div>

              <!-- Single Service Area -->
              <div
                class="single-service--area text-center mb-100 wow fadeInUp"
                data-wow-delay="700ms"
              >
                <img src="img/core-img/icon-4.png" alt="" />
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
        <div class="single-room-slide flex items-center">
          <!-- Thumbnail -->
          <div
            class="room-thumbnail h-full bg-img"
            style="
              background-image: url('img/cover/1686016799_DSC_6696vv1.jpg');
            "
          ></div>

          <!-- Content -->
          <div class="room-content">
            <h2 data-animation="fadeInUp" data-delay="100ms">
              Premium King Room
            </h2>
            <h3 data-animation="fadeInUp" data-delay="300ms">
              400$ <span>/ Day</span>
            </h3>
            <ul
              class="room-feature"
              data-animation="fadeInUp"
              data-delay="500ms"
            >
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
            <a
              href="#"
              class="btn hero-btn mt-30"
              data-animation="fadeInUp"
              data-delay="700ms"
              >View Details</a
            >
          </div>
        </div>

        <!-- Single Room Slide -->
        <div class="single-room-slide flex items-center">
          <!-- Thumbnail -->
          <div
            class="room-thumbnail h-full bg-img"
            style="background-image: url(img/cover/1686053792_DSC_6706vv1.jpg)"
          ></div>

          <!-- Content -->
          <div class="room-content">
            <h2 data-animation="fadeInUp" data-delay="100ms">Best King Room</h2>
            <h3 data-animation="fadeInUp" data-delay="300ms">
              125$ <span>/ Day</span>
            </h3>
            <ul
              class="room-feature"
              data-animation="fadeInUp"
              data-delay="500ms"
            >
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
            <a
              href="#"
              class="btn hero-btn mt-30"
              data-animation="fadeInUp"
              data-delay="700ms"
              >View Details</a
            >
          </div>
        </div>
      </div>
    </section>
    <!-- Our Room Area End -->

    <!-- Testimonials Area Start -->
    <section class="kasbah-testimonials-area section-padding-100-0">
      <div class="container mx-auto">
        <div
          class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 items-center"
        >
          <div class="col-span-1 md:col-span-6 lg:grid-cols-6 mx-3">
            <div class="testimonial-thumbnail owl-carousel mb-100">
              <img src="img/bg-img/10.jpg" alt="" />
              <img src="img/bg-img/11.jpg" alt="" />
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
        <div
          class="single-project-slide active bg-img"
          style="background-image: url(img/cover/IMG_5827.jpg)"
        >
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
            <a href="#" class="btn project-btn"
              >Discover Now
              <i class="fa fa-long-arrow-right" aria-hidden="true"></i
            ></a>
          </div>
        </div>

        <!-- Single Project Slide -->
        <div
          class="single-project-slide bg-img"
          style="background-image: url(img/cover/IMG_0557.jpg)"
        >
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
            <a href="#" class="btn project-btn"
              >Discover Now
              <i class="fa fa-long-arrow-right" aria-hidden="true"></i
            ></a>
          </div>
        </div>

        <!-- Single Project Slide -->
        <div
          class="single-project-slide bg-img"
          style="background-image: url(img/cover/12.jpg)"
        >
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
            <a href="#" class="btn project-btn"
              >Discover Now
              <i class="fa fa-long-arrow-right" aria-hidden="true"></i
            ></a>
          </div>
        </div>

        <!-- Single Project Slide -->
        <div
          class="single-project-slide bg-img"
          style="background-image: url(img/cover/IMG_9916.jpg)"
        >
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
            <a href="#" class="btn project-btn"
              >Discover Now
              <i class="fa fa-long-arrow-right" aria-hidden="true"></i
            ></a>
          </div>
        </div>

        <!-- Single Project Slide -->
        <div
          class="single-project-slide bg-img"
          style="background-image: url(img/cover/11.png)"
        >
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
            <a href="#" class="btn project-btn"
              >Discover Now
              <i class="fa fa-long-arrow-right" aria-hidden="true"></i
            ></a>
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
            <div
              class="section-heading text-center wow fadeInUp"
              data-wow-delay="100ms"
            >
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
            <div
              class="single-post-area mb-100 wow fadeInUp"
              data-wow-delay="300ms"
            >
              <a href="#" class="post-thumbnail">
                <img src="img/bg-img/2.jpg" alt="" />
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
            <div
              class="single-post-area mb-100 wow fadeInUp"
              data-wow-delay="500ms"
            >
              <a href="#" class="post-thumbnail">
                <img src="img/bg-img/3.jpg" alt="" />
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
            <div
              class="single-post-area mb-100 wow fadeInUp"
              data-wow-delay="700ms"
            >
              <a href="#" class="post-thumbnail">
                <img src="img/bg-img/4.jpg" alt="" />
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

    <!-- Call To Action Area Start -->
    <section class="kasbah-cta-area">
      <div class="container mx-auto">
        <div
          class="cta-content bg-img bg-overlay jarallax"
          style="background-image: url(img/bg-img/1.jpg)"
        >
          <div class="flex flex-wrap items-center">
            <div class="w-full md:w-7/12">
              <div class="cta-text mb-50">
                <h2>Contact us now!</h2>
                <h6>
                  Contact (+212) 068-480-0039 to book directly or for advice
                </h6>
              </div>
            </div>
            <div class="w-full md:w-5/12 text-right">
              <a href="#" class="btn hero-btn mb-50">Contact Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Call To Action Area End -->

    <!-- Partner Area Start -->
    <div class="partner-area">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full">
            <div
              class="partner-logo-content flex items-center justify-between wow fadeInUp"
              data-wow-delay="300ms"
            >
              <!-- Single Partner Logo -->
              <a href="#" class="partner-logo"
                ><img src="img/core-img/p1.png" alt="partner logo"
              /></a>
              <!-- Single Partner Logo -->
              <a href="#" class="partner-logo"
                ><img src="img/core-img/p2.png" alt="partner logo"
              /></a>
              <!-- Single Partner Logo -->
              <a href="#" class="partner-logo"
                ><img src="img/core-img/p3.png" alt="partner logo"
              /></a>
              <!-- Single Partner Logo -->
              <a href="#" class="partner-logo"
                ><img src="img/core-img/p4.png" alt="partner logo"
              /></a>
              <!-- Single Partner Logo -->
              <a href="#" class="partner-logo"
                ><img src="img/core-img/p5.png" alt="partner logo"
              /></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Partner Area End -->

    <!-- Footer Area Start -->
    <footer class="footer-area section-padding-80-0">
      <!-- Main Footer Area -->
      <div class="main-footer-area">
        <div class="container mx-auto">
          <div class="flex flex-wrap items-start justify-between">
            <!-- Single Footer Widget Area -->
            <div class="w-full sm:w-1/2 lg:w-1/4">
              <div class="single-footer-widget mb-80">
                <!-- Footer Logo -->
                <a href="#" class="footer-logo">
                  <img src="img/core-img/logo.png" width="120px" alt="logo" />
                </a>

                <h4>+212 069-890-9638</h4>
                <span>kasbah.roseville@gmail.com</span>
                <span>
                  Zaouiet Sidi Abdelmalek, Ait Sedrate Sahl El Gharbia
                </span>
              </div>
            </div>

            <!-- Single Footer Widget Area -->
            <div class="w-full sm:w-1/2 lg:w-1/4">
              <div class="single-footer-widget mb-80">
                <!-- Widget Title -->
                <h5 class="widget-title">Our Blog</h5>

                <!-- Single Blog Area -->
                <div class="latest-blog-area">
                  <a href="#" class="post-title">Freelance Design Tricks How</a>
                  <span class="post-date"
                    ><i class="fa fa-clock-o" aria-hidden="true"></i> Jan 02,
                    2019</span
                  >
                </div>

                <!-- Single Blog Area -->
                <div class="latest-blog-area">
                  <a href="#" class="post-title">
                    Free Advertising For Your Online
                  </a>
                  <span class="post-date">
                    <i class="fa fa-clock-o" aria-hidden="true"></i> Jan 02,
                    2019
                  </span>
                </div>
              </div>
            </div>

            <!-- Single Footer Widget Area -->
            <div class="w-full sm:w-1/3 lg:w-1/6">
              <div class="single-footer-widget mb-80">
                <!-- Widget Title -->
                <h5 class="widget-title">Links</h5>

                <!-- Footer Nav -->
                <ul class="footer-nav">
                  <li>
                    <a href="#"
                      ><i class="fa fa-caret-right" aria-hidden="true"></i>
                      About Us</a
                    >
                  </li>
                  <li>
                    <a href="#"
                      ><i class="fa fa-caret-right" aria-hidden="true"></i> Our
                      Room</a
                    >
                  </li>
                  <li>
                    <a href="#"
                      ><i class="fa fa-caret-right" aria-hidden="true"></i>
                      Career</a
                    >
                  </li>
                  <li>
                    <a href="#"
                      ><i class="fa fa-caret-right" aria-hidden="true"></i>
                      FAQs</a
                    >
                  </li>
                </ul>
              </div>
            </div>

            <!-- Single Footer Widget Area -->
            <div class="w-full sm:w-2/3 lg:w-1/3">
              <div class="single-footer-widget mb-80">
                <!-- Widget Title -->
                <h5 class="widget-title">Subscribe Newsletter</h5>
                <span>
                  Subscribe our newsletter gor get notification about new
                  updates.
                </span>

                <!-- Newsletter Form -->
                <form action="" class="nl-form">
                  <input
                    type="email"
                    class="form-control"
                    placeholder="Enter your email..."
                  />
                  <button type="submit">
                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Copywrite Area -->
      <div class="container mx-auto">
        <div class="copywrite-content">
          <div class="flex items-center">
            <div class="w-full md:w-2/3">
              <!-- Copywrite Text -->
              <div class="copywrite-text">
                <p>
                  Copyright &copy;
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  All rights reserved
                </p>
              </div>
            </div>
            <div class="w-full md:w-1/3">
              <!-- Social Info -->
              <div class="social-info">
                <a href="#"
                  ><i class="fa fa-facebook" aria-hidden="true"></i
                ></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"
                  ><i class="fa fa-instagram" aria-hidden="true"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
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
