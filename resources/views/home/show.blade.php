@extends('layouts.home.app')

@section('contents')
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url({{ asset('img/bg-img/16.jpg') }})">
        <div class="container mx-auto h-full">
            <div class="flex flex-wrap h-full items-end">
                <div class="w-full">
                    <div class="breadcrumb-content flex items-center justify-between pb-12">
                        <h2 class="room-title">{{ $room->name }}</h2>
                        <h2 class="room-price">${{ $room->price }} <span>/ Per Night</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Rooms Area Start -->
    <div class="kasbah-rooms-area section-padding-100-0">
        <div class="container mx-auto">
            <div class="flex flex-wrap">
                <div class="w-full lg:w-8/12">
                    <!-- Single Room Details Area -->
                    <div class="single-room-details-area mb-50">
                        <!-- Room Thumbnail Slides -->
                        <div class="room-thumbnail-slides mb-50">
                            <div id="room-thumbnail--slide" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach ($images as $image)
                                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                            <img src="{{ $image->getUrl() }}" class="block w-full h-full" alt="" />
                                        </div>
                                    @endforeach
                                </div>

                                <ol class="carousel-indicators">
                                    @foreach ($images as $image)
                                        <li data-target="#room-thumbnail--slide" data-slide-to="0"
                                            class="{{ $loop->first ? 'active' : '' }}">
                                            <img src="{{ $image->getUrl() }}" class="block w-full h-full" alt="" />
                                        </li>
                                    @endforeach
                                </ol>
                            </div>
                        </div>

                        <!-- Room Features -->
                        <div class="room-features-area flex flex-wrap mb-50">
                            <h6>Size: <span>{{ $room->size }}sqf</span></h6>
                            <h6>Capacity: <span>Max persion {{ $room->capacity }}</span></h6>
                            <h6>Type: <span>{{ $room->type->type }}</span></h6>
                            <h6>Services:
                                <span>
                                    @php
                                        $facilities = $room->facilities->slice(0, 1);
                                    @endphp

                                    @foreach ($facilities as $facility)
                                        {{ $loop->first ? '' : ',  ' }}
                                        {{ $facility->name }}
                                    @endforeach

                                    @if ($room->facilities->count() > 1)
                                        ...
                                    @endif
                                </span>
                            </h6>
                        </div>

                        <p>
                            If you live in New York City or travel to and from New York City
                            a lot, you know all about the traffic there. Getting places is
                            often next to impossible, even with the gazillion yellow cabs.
                            If you’re like me you often look with envy at those shiny
                            limousines with their unformed drivers and wish you could sit in
                            one. Well, you can. New York limo service is more affordable
                            than you think, whether it’s for Newark airport transportation,
                            LaGuardia airport transportation, or to drive wherever you wish
                            to go.
                        </p>
                    </div>

                    <!-- Room Service -->
                    <div class="room-service mb-50">
                        <h4>Room Services</h4>

                        <ul>
                            @foreach ($room->facilities as $facility)
                                <li>
                                    <img src="{{ $facility->getFirstMediaUrl('facilities') }}" alt="" />
                                    {{ $facility->name }}
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Room Review -->
                    <div class="room-review-area mb-100">
                        <h4>Room Review</h4>

                        <!-- Single Review Area -->
                        <div class="single-room-review-area flex items-center">
                            <div class="reviwer-thumbnail">
                                <img src="{{ asset('img/bg-img/53.jpg') }}" alt="" />
                            </div>
                            <div class="reviwer-content">
                                <div class="reviwer-title-rating flex items-center justify-between">
                                    <div class="reviwer-title">
                                        <span>27 Aug 2019</span>
                                        <h6>Brandon Kelley</h6>
                                    </div>
                                    <div class="reviwer-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <p>
                                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                                    amet, consectetur, adipisci velit, sed quia non numquam eius
                                    modi tempora.
                                </p>
                            </div>
                        </div>

                        <!-- Single Review Area -->
                        <div class="single-room-review-area flex items-center">
                            <div class="reviwer-thumbnail">
                                <img src="{{ asset('img/bg-img/54.jpg') }}" alt="" />
                            </div>
                            <div class="reviwer-content">
                                <div class="reviwer-title-rating flex items-center justify-between">
                                    <div class="reviwer-title">
                                        <span>27 Aug 2019</span>
                                        <h6>Sounron Masha</h6>
                                    </div>
                                    <div class="reviwer-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <p>
                                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                                    amet, consectetur, adipisci velit, sed quia non numquam eius
                                    modi tempora.
                                </p>
                            </div>
                        </div>

                        <!-- Single Review Area -->
                        <div class="single-room-review-area flex items-center">
                            <div class="reviwer-thumbnail">
                                <img src="{{ asset('img/bg-img/55.jpg') }}" alt="" />
                            </div>
                            <div class="reviwer-content">
                                <div class="reviwer-title-rating flex items-center justify-between">
                                    <div class="reviwer-title">
                                        <span>27 Aug 2019</span>
                                        <h6>Amada Lyly</h6>
                                    </div>
                                    <div class="reviwer-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <p>
                                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                                    amet, consectetur, adipisci velit, sed quia non numquam eius
                                    modi tempora.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-4/12 lg:pl-8">
                    <!-- kasbah Reservation Area -->
                    <div class="kasbah-reservation--area mb-100">
                        <form action="#" method="post">
                            <div class="form-group mb-30">
                                <div class="flex">
                                    <label for="checkInDate" class="w-6/12">Check In</label>
                                    <label for="checkOutDate" class="w-6/12">Check Out</label>
                                </div>
                                <div class="input-daterange">
                                    <div class="flex no-gutters">
                                        <div class="w-6/12">
                                            <input type="date"  class="input-smalld form-control" name="checkInDate" />
                                        </div>
                                        <div class="w-6/12">
                                            <input type="date" class="input-small form-control" name="checkOutDate" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-30">
                                <label for="guests">Guests</label>
                                <div class="flex">
                                    <div class="w-6/12 md:pr-4">
                                        <select name="adults" id="guests" class="form-control">
                                            <option value="adults">Adults</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                        </select>
                                    </div>
                                    <div class="w-6/12 md:pl-4">
                                        <select name="children" id="children" class="form-control">
                                            <option value="children">Children</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-50 relative">
                                <div class="slider-range">
                                    <div class="range-price">
                                        Max Price: $<span id="sliderValue">100</span> - $300
                                    </div>
                                    <input type="range" name="price" min="0" max="300" value="100" step="1"
                                        class="slider-range-price w-full h-2 appearance-none outline-none"
                                        id="sliderRangePrice" />
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn hero-btn w-full">
                                    Check Available
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Rooms Area End -->
@endsection
