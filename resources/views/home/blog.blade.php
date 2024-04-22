@extends('layouts.home.app')

@section('contents')
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url({{ asset('img/bg-img/16.jpg') }})">
        <div class="container mx-auto h-full">
            <div class="flex h-full items-center">
                <div class="w-full">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title pb-2">Kasbah Roseville Blogs</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb flex justify-center">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Roseville Blogs
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Blog Area Start -->
    <div class="kasbah-news-area section-padding-100-0">
        <div class="container mx-auto">
            <div class="flex justify-center flex-wrap md:pr-4">
                <div class="w-full lg:w-8/12">
                    <!-- Single Blog Post Area -->
                    <div class="single-blog-post flex items-center mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <a href="single-blog.html"><img src="{{asset('img/bg-img/event-1.jpg')}}" alt="" /></a>
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <a href="single-blog.html" class="post-author">Jan 01, 2024</a>
                                <a href="single-blog.html" class="post-tutorial">Event</a>
                            </div>
                            <!-- Post Title -->
                            <a href="single-blog.html" class="post-title">15 of the Best Moroccan Riads Interior Design
                                Decor</a>
                            <p>
                                Just stumbled upon the most enchanting secret – Moroccan
                                riads! Dive into a world of vibrant tiles, arches, and
                                lanterns, each telling a unique tale of culture and
                                elegance...
                            </p>
                            <a href="single-blog.html" class="btn continue-btn">Read More</a>
                        </div>
                    </div>

                    <!-- Single Blog Post Area -->
                    <div class="single-blog-post flex items-center mb-50 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <a href="single-blog.html"><img src="{{asset('img/bg-img/26.jpg')}}" alt="" /></a>
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <a href="single-blog.html" class="post-author">Jan 01, 2024</a>
                                <a href="single-blog.html" class="post-tutorial">Event</a>
                            </div>
                            <!-- Post Title -->
                            <a href="single-blog.html" class="post-title">Global Travel And Vacations Luxury Travel On A
                                Tight
                                Budget</a>
                            <p>
                                Life is hectic; it’s true. There are so many things that
                                demand your time and attention. Between work, kids, family and
                                household chores, there is precious little time left over for
                                you.
                            </p>
                            <a href="single-blog.html" class="btn continue-btn">Read More</a>
                        </div>
                    </div>

                    <!-- Single Blog Post Area -->
                    <div class="single-blog-post flex items-center mb-50 wow fadeInUp" data-wow-delay="400ms">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <a href="single-blog.html"><img src="{{asset('img/bg-img/flag.jpg')}}" alt="" /></a>
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <a href="single-blog.html" class="post-author">Jan 01, 2024</a>
                                <a href="single-blog.html" class="post-tutorial">Event</a>
                            </div>
                            <!-- Post Title -->
                            <a href="single-blog.html" class="post-title">
                                18 Super Important Must Knows Before You Travel to Morocco
                            </a>
                            <p>
                                Everyone loves good, old fashioned charcoal grilling. Aside
                                from being cheaper than other grilling methods, it adds a raw,
                                distinctive taste to your sausages, burgers, ribs, and other
                                grilled ite...
                            </p>
                            <a href="single-blog.html" class="btn continue-btn">Read More</a>
                        </div>
                    </div>

                    <!-- Single Blog Post Area -->
                    <div class="single-blog-post flex items-center mb-50 wow fadeInUp" data-wow-delay="500ms">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <a href="single-blog.html"><img src="{{asset('img/bg-img/28.jpg')}}" alt="" /></a>
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <a href="single-blog.html" class="post-author">Jan 01, 2024</a>
                                <a href="single-blog.html" class="post-tutorial">Event</a>
                            </div>
                            <!-- Post Title -->
                            <a href="single-blog.html" class="post-title">Les Houches The Hidden Gem Of The Chamonix
                                Valley</a>
                            <p>
                                Las Vegas has more than 100,000 hotel rooms to choose from.
                                There is something for every budget, and enough entertainment
                                within walking distance to keep anyone occupied for months.
                            </p>
                            <a href="single-blog.html" class="btn continue-btn">Read More</a>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <nav class="kasbah-pagination wow fadeInUp mb-100" data-wow-delay="600ms">
                        <ul class="pagination flex">
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next <i class="fa fa-angle-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="w-full sm:w-8/12 md:w-6/12 lg:w-4/12">
                    <div class="kasbah-sidebar-area md:pl-12">
                        <!-- Newsletter -->
                        <div class="single-widget-area mb-100">
                            <div class="newsletter-form">
                                <h5>Newsletter</h5>
                                <p>
                                    Subscribe our newsletter gor get notification new updates.
                                </p>

                                <form action="#" method="post">
                                    <input type="email" name="nl-email" id="nlEmail"
                                        class="form-control w-full my-3 pl-3" placeholder="Enter your email..." />
                                    <button type="submit" class="btn hero-btn w-full">
                                        Subscribe
                                    </button>
                                </form>
                            </div>
                        </div>

                        <!-- Recent Post -->
                        <div class="single-widget-area mb-100">
                            <h4 class="widget-title mb-30">Recent News</h4>

                            <!-- Single Recent Post -->
                            <div class="single-recent-post flex">
                                <!-- Thumb -->
                                <div class="post-thumb">
                                    <a href="single-blog.html"><img src="{{asset('img/blogs/blog-5.jpg')}}" alt="" /></a>
                                </div>
                                <!-- Content -->
                                <div class="post-content">
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <a href="single-blog.html" class="post-author">Jan 01, 2024</a>
                                        <a href="single-blog.html" class="post-tutorial">Event</a>
                                    </div>
                                    <a href="single-blog.html" class="post-title">Marrakech Top Things To Do</a>
                                </div>
                            </div>

                            <!-- Single Recent Post -->
                            <div class="single-recent-post flex">
                                <!-- Thumb -->
                                <div class="post-thumb">
                                    <a href="single-blog.html"><img src="{{asset('img/blogs/blog-4.jpg')}}" alt="" /></a>
                                </div>
                                <!-- Content -->
                                <div class="post-content">
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <a href="single-blog.html" class="post-author">Jan 01, 2024</a>
                                        <a href="single-blog.html" class="post-tutorial">Event</a>
                                    </div>
                                    <a href="single-blog.html" class="post-title">World Heritage Sites in Morocco</a>
                                </div>
                            </div>

                            <!-- Single Recent Post -->
                            <div class="single-recent-post flex">
                                <!-- Thumb -->
                                <div class="post-thumb">
                                    <a href="single-blog.html"><img src="{{asset("img/blogs/berber-people-2.jpg")}}"
                                            alt="" /></a>
                                </div>
                                <!-- Content -->
                                <div class="post-content">
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <a href="single-blog.html" class="post-author">Jan 01, 2024</a>
                                        <a href="single-blog.html" class="post-tutorial">Event</a>
                                    </div>
                                    <a href="single-blog.html" class="post-title">Erg Chigaga: Into The Wild Sahara</a>
                                </div>
                            </div>

                            <!-- Single Recent Post -->
                            <div class="single-recent-post flex">
                                <!-- Thumb -->
                                <div class="post-thumb">
                                    <a href="single-blog.html">
                                        <img src="{{asset('img/blogs/berber-people.jpg')}}" alt="" />
                                    </a>
                                </div>
                                <!-- Content -->
                                <div class="post-content">
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <a href="single-blog.html" class="post-author">Jan 01, 2024</a>
                                        <a href="single-blog.html" class="post-tutorial">Event</a>
                                    </div>
                                    <a href="single-blog.html" class="post-title">Who Are The Morocco Berbers?</a>
                                </div>
                            </div>
                        </div>

                        <!-- Popular Tags : Edited style from : mb-100 to style="margin-bottom: 200px" -->
                        <div class="single-widget-area clearfix" style="margin-bottom: 200px">
                            <h4 class="widget-title mb-30">Tags</h4>
                            <!-- Popular Tags -->
                            <ul class="popular-tags">
                                <li><a href="#">Bed,</a></li>
                                <li><a href="#">Hotel,</a></li>
                                <li><a href="#">Travel,</a></li>
                                <li><a href="#">Restaurant,</a></li>
                                <li><a href="#">Sport,</a></li>
                                <li><a href="#">Trip,</a></li>
                                <li><a href="#">Music,</a></li>
                                <li><a href="#">Holiday,</a></li>
                                <li><a href="#">Tourist,</a></li>
                                <li><a href="#">Foody,</a></li>
                                <li><a href="#">Resorts.</a></li>
                            </ul>
                        </div>

                        <!-- Instagram -->
                        <div class="single-widget-area mb-100 clearfix">
                            <h4 class="widget-title mb-30">Instagram</h4>
                            <!-- Instagram Feeds -->
                            <ul class="instagram-feeds">
                                <li>
                                    <a href="#"><img src="{{asset('img/blogs/berber-people-2.jpg')}}" alt="" /></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{{asset('img/blogs/blog-3.jpg')}}}" alt="" /></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{asset('img/blogs/blog-4.jpg')}}" alt="" /></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{asset('img/blogs/blog-5.jpg')}}" alt="" /></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{asset('img/blogs/insta-post-2.jpg')}}" alt="" /></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{asset('img/blogs/insta-post-3.jpg')}}" alt="" /></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Area End -->
@endsection
