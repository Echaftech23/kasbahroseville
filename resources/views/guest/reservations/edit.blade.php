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
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax"
        style="background-image: url({{ asset('img/bg-img/16.jpg') }})">
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
                                            <img src="{{ $image->getUrl() }}" class="block object-cover w-full h-full"
                                                alt="" />
                                        </div>
                                    @endforeach
                                </div>

                                <ol class="carousel-indicators">
                                    @foreach ($images as $image)
                                        <li data-target="#room-thumbnail--slide" data-slide-to="0"
                                            class="{{ $loop->first ? 'active' : '' }}">
                                            <img src="{{ $image->getUrl() }}" class="block object-cover w-full h-full"
                                                alt="" />
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
                            {{ $room->description }}
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
                        <form action="{{ route('reservations.update') }}" method="POST">
                            @csrf
                            <div class="form-group mb-30">
                                <input type="hidden" name="ref" value="guest">
                                <input type="hidden" name="room_id" value="{{ $room->id }}">
                                <input type="hidden" name="price" value="{{ $room->price }}">
                                <div class="flex">
                                    <label for="checkIn" class="w-6/12">Check In</label>
                                    <label for="checkOut" class="w-6/12">Check Out</label>
                                </div>
                                <div class="input-daterange">
                                    <div class="flex no-gutters">
                                        <div class="w-6/12">
                                            <input type="date" value="{{ $reservation->checkIn }}"
                                                class="input-smalld form-control" name="checkIn" />
                                            @error('checkIn')
                                                <span class="text-[12px] mt-1 text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="w-6/12">
                                            <input type="date" value="{{ $reservation->checkOut }}"
                                                class="input-small form-control" name="checkOut" />
                                            @error('checkOut')
                                                <span class="text-[12px] mt-1 text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-30">
                                <div class="flex">
                                    <div class="w-6/12 md:pr-4">
                                        <label for="guests">Adults</label>
                                        <select name="total_adults" id="guests" class="form-control">
                                            <option value="{{ $reservation->id }}">0{{ $reservation->total_adults }}</option>
                                            @foreach (range(0, 4) as $value)
                                                @if ($value != $reservation->total_children)
                                                    <option value="{{ $value }}">
                                                        0{{ $value }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('adults')
                                            <span class="text-[12px] mt-1 text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="w-6/12 md:pl-4">
                                        <label for="guests">Children</label>
                                        <select name="total_children" id="children" class="form-control">
                                            <option value="{{ $reservation->id }}">0{{ $reservation->total_children }}</option>
                                            @foreach (range(0, 4) as $value)
                                                @if ($value != $reservation->total_children)
                                                    <option value="{{ $value }}">
                                                        0{{ $value }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('children')
                                            <span class="text-[12px] mt-1 text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-50 relative">
                                <div class="slider-range">
                                    <div class="range-price">
                                        Price: <span
                                            class="font-bold text-[18px] text-pink-700">${{ $room->price }}</span> / Per
                                        Night
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">

                                <button class="w-full hero-btn">
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
