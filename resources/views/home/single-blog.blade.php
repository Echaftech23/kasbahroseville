@extends('layouts.home.app')

@section('contents')
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url({{ asset('img/bg-img/17.jpg') }})">
        <div class="container mx-auto h-full">
            <div class="flex h-full items-center">
                <div class="w-full">
                    <div class="breadcrumb-content text-center">
                        <div class="breadcrumb-post-content">
                            <h2 class="post-title">
                                15 Best Interior Design WordPress Themes
                            </h2>
                            <div class="post-meta">
                                <a href="#" class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i> Jan
                                    01, 2024</a>
                                <a href="#" class="post-author"><i class="fa fa-user" aria-hidden="true"></i> by Joe
                                    Fylan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Blog Area Start -->
    <div class="kasbah-news-area section-padding-100-0">
        <div class="container">
            <div class="flex justify-center flex-wrap md:pr-4">
                <div class="w-full lg:w-8/12">
                    <!-- Post Thumbnail -->
                    <div class="post-thumbnail mb-50">
                        <img class="min-w-full max-h-[430px]" src="{{asset('img/bg-img/event-1.jpg')}}" alt="" />
                    </div>
                    <!-- Blog Details Text -->
                    <div class="blog-details-text">
                        <p>
                            “IT” (otherwise known as HD 36405.b) isn’t your average
                            “oddball” exo-solar planet made of rock that wobbles on its end
                            &amp; zips around a nearby star in less than 2.46 days.
                        </p>

                        <p>
                            Seeking a spot of serenity somewhere in the universe, I recently
                            booked a deep-discount dodgy berth on the ‘White Elephant
                            Express Space Shuttle’, to a little known place in a galaxy far,
                            far away.
                        </p>

                        <p>
                            If truth be told, (after reading random excerpts from “The Itty
                            Bitty Bunkum Book About Life, the Universe &amp; Practically
                            Everything Under the Sun Not To Mention Stuff Going On In Remote
                            Galaxies), I was basically delirious. According to its noted
                            author, Dr. Jarn Leffer, “IT is a ‘must-see’ for those with
                            little time on their hands &amp; a passionate interest in
                            Innocuous Things.”
                        </p>

                        <p>
                            Most linear thinkers have a great deal of difficulty even
                            comprehending why on earth someone in their “right mind” would
                            be interested in visiting a planet called “IT”. Not being a
                            linear thinker with an investment in the “right” answer, I
                            didn’t give a hoot. After all, what does one (who walks on water
                            &amp; listens to miffed mortals all day long) do for a frigging
                            night off, now I ask you?
                        </p>

                        <!-- Blockquote -->
                        <blockquote class="kasbah-blockquote flex">
                            <div class="icon">
                                <img src="img/core-img/quote.png" alt="" />
                            </div>
                            <div class="text">
                                <h5>
                                    “Before you took that first cruise, your thoughts about
                                    cruise ships and cruise vacations consisted of flashbacks to
                                    Love Boat re-runs. Cruising was all about sunny, tropical
                                    destinations like Bermuda”
                                </h5>
                            </div>
                        </blockquote>

                        <p>
                            The city of southern California, san diego is locally known as
                            ‘America’s Finest City’. It’s located on San Diego Bay, an inlet
                            of the Pacific Ocean near the Mexican border. San Diego is the
                            second largest city in California and the seventh largest in the
                            United States. It is also nicknamed as ‘America’s biggest small
                            town’.
                        </p>
                    </div>

                    <!-- Post Author Area -->
                    <div class="post-author-area flex align-items-center justify-content-between mb-50">
                        <ul class="popular-tags">
                            <li><a href="#">Bed,</a></li>
                            <li><a href="#">Travel,</a></li>
                            <li><a href="#">Hotel</a></li>
                        </ul>

                        <!-- Author Social Info -->
                        <div class="author-social-info flex items-center">
                            <p>Share:</p>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                        </div>
                    </div>

                    <!-- Comments Area -->
                    <div class="comment_area mb-50 clearfix">
                        <h2>02 Comments</h2>

                        <ol>
                            <!-- Single Comment Area -->
                            <li class="single_comment_area">
                                <!-- Comment Content -->
                                <div class="comment-content flex">
                                    <!-- Comment Author -->
                                    <div class="comment-author">
                                        <img src="{{asset('img/bg-img/40.jpg')}}" alt="author" />
                                    </div>
                                    <!-- Comment Meta -->
                                    <div class="comment-meta">
                                        <a href="#" class="post-date">27 JAN 2024</a>
                                        <h5>Brandon Kelley</h5>
                                        <p>
                                            Neque porro quisquam est, qui dolorem ipsum quia dolor
                                            sit amet, consectetur, adipisci velit, sed quia non
                                            numquam eius modi.
                                        </p>
                                        <a href="#" class="like">Like</a>
                                        <a href="#" class="reply">Reply</a>
                                    </div>
                                </div>

                                <ol class="children">
                                    <li class="single_comment_area">
                                        <!-- Comment Content -->
                                        <div class="comment-content flex">
                                            <!-- Comment Author -->
                                            <div class="comment-author">
                                                <img src="{{asset('img/bg-img/41.jpg')}}" alt="author" />
                                            </div>
                                            <!-- Comment Meta -->
                                            <div class="comment-meta">
                                                <a href="#" class="post-date">28 JAN 2024</a>
                                                <h5>John Doe</h5>
                                                <p>
                                                    Neque porro quisquam est, qui dolorem ipsum quia
                                                    dolor sit amet, consectetu adipisci velit, sed quia
                                                    non numquam eius modi
                                                </p>
                                                <a href="#" class="like">Like</a>
                                                <a href="#" class="reply">Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </li>

                            <!-- Single Comment Area -->
                            <li class="single_comment_area">
                                <!-- Comment Content -->
                                <div class="comment-content d-flex">
                                    <!-- Comment Author -->
                                    <div class="comment-author">
                                        <img src="{{asset('img/bg-img/42.jpg')}}" alt="author" />
                                    </div>
                                    <!-- Comment Meta -->
                                    <div class="comment-meta">
                                        <a href="#" class="post-date">28 JAN 2024</a>
                                        <h5>Lander Tea</h5>
                                        <p>
                                            Neque porro quisquam est, qui dolorem ipsum quia dolor
                                            sit amet, consectetu adipisci velit, sed quia non
                                            numquam eius modi
                                        </p>
                                        <a href="#" class="like">Like</a>
                                        <a href="#" class="reply">Reply</a>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div>

                    <!-- Leave A Reply -->
                    <div class="kasbah-contact-form mt-80 mb-100">
                        <h2>Leave A Comment</h2>

                        <!-- Form -->
                        <form action="#" method="post">
                            <div class="flex flex-wrap">
                                <div class="w-full">
                                    <input type="text" name="message-name" class="form-control mb-30"
                                        placeholder="Your Name" />
                                </div>
                                <div class="w-full">
                                    <input type="email" name="message-email" class="form-control mb-30"
                                        placeholder="Email" />
                                </div>
                                <div class="w-full">
                                    <textarea name="message" class="form-control mb-30" placeholder="Start the discussion..."></textarea>
                                </div>
                                <div class="w-full">
                                    <button type="submit" class="btn hero-btn btn-3 mt-15">
                                        Post Comment
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
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
                                    <a href="single-blog.html"><img src="img/blogs/blog-5.jpg" alt="" /></a>
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
                                    <a href="single-blog.html"><img src="img/blogs/blog-4.jpg" alt="" /></a>
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
                                    <a href="single-blog.html"><img src="img/blogs/berber-people-2.jpg"
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
                                        <img src="img/blogs/berber-people.jpg" alt="" />
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
                                    <a href="#"><img src="img/blogs/berber-people-2.jpg" alt="" /></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/blogs/blog-3.jpg" alt="" /></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/blogs/blog-4.jpg" alt="" /></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/blogs/blog-5.jpg" alt="" /></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/blogs/insta-post-2.jpg" alt="" /></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/blogs/insta-post-3.jpg" alt="" /></a>
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
