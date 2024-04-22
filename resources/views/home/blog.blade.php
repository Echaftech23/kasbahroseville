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

                
            </div>
        </div>
    </div>
    <!-- Blog Area End -->
@endsection
