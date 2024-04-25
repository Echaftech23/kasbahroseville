@extends('layouts.home.app')

{{-- Success Alert --}}
@if (Session::has('success'))
    <div id="dismiss-alert" x-data="{ show: true }" x-show="show" x-transition:leave="transition ease-in duration-2000"
        x-transition:leave-start="opacity-100 translate-x-0" x-transition:leave-end="opacity-0 -translate-x-full"
        x-init="setTimeout(() => show = false, 7000)" class="fixed left-0 top-[24%] m-6 max-w-md rounded-lg p-4"
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
        x-init="setTimeout(() => show = false, 6000)" class="fixed left-0 top-1/4 m-6 max-w-md rounded-lg p-4"
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
                            <h6>Created_at: <span>{{ $reservation->created_at->format('d M, Y H:i:s') }}</span></h6>
                        </div>

                        <p>
                            {{ $room->description }}
                        </p>
                    </div>

                    <!-- Room Service -->
                    <div class="room-service mb-100">
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
                </div>

                <div class="w-full lg:w-4/12 lg:pl-8">
                    <!-- kasbah Reservation Area -->
                    <div class="kasbah-reservation--area mb-100">
                        <div class="form-group mb-30">
                            <div class="flex">
                                <label for="checkIn" class="w-6/12">Check In</label>
                                <label for="checkOut" class="w-6/12">Check Out</label>
                            </div>
                            <div class="input-daterange">
                                <div class="flex no-gutters">
                                    <div class="w-6/12">
                                        <input type="text" disabled value="{{ $reservation->checkIn }}"
                                            class="input-smalld form-control" name="checkIn" />
                                    </div>

                                    <div class="w-6/12">
                                        <input type="text" disabled value="{{ $reservation->checkOut }}"
                                            class="input-small form-control" name="checkOut" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-30">
                            <div class="flex">
                                <div class="w-6/12 md:pr-4">
                                    <label for="guests">Adults</label>
                                    <input type="text" disabled value="{{ $reservation->total_adults }}"
                                        class="input-small form-control" />
                                </div>
                                <div class="w-6/12 md:pl-4">
                                    <label for="guests">Children</label>
                                    <input type="text" disabled value="{{ $reservation->total_children }}"
                                        class="input-small form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-50 relative">
                            <div class="slider-range">
                                <div class="range-price">
                                    Price: <span class="font-bold text-[18px] text-pink-700">${{ $room->price }}</span> /
                                    Per Night
                                </div>
                            </div>
                        </div>

                        <div class="form-group flex">
                            <form action="{{ route('reservations.destroy', $reservation) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button
                                    class="p-[14px] px-6 bg-[#E42C76] text-white hover:text-white hover:bg-black font-semibold text-sm">
                                    Cancel Booking
                                </button>
                            </form>

                            <form action="{{ route('invoiceDetails', $reservation->payment) }}" method="GET">
                                <button
                                    class="p-[14px] mx-3 px-6 bg-[#E42C76] text-white hover:text-white hover:bg-black font-semibold text-sm">
                                    Check Invoice
                                </button>
                            </form>
                        </div>

                        <div class="mt-8 p-4 bg-red-100 border-l-4 border-red-500 text-red-700">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="red"
                                        xmlns="http://www.w3.org/2000/svg" stroke="#ffff">

                                        <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                                        <g id="SVGRepo_iconCarrier">
                                            <path
                                                d="M12 15H12.01M12 12V9M4.98207 19H19.0179C20.5615 19 21.5233 17.3256 20.7455 15.9923L13.7276 3.96153C12.9558 2.63852 11.0442 2.63852 10.2724 3.96153L3.25452 15.9923C2.47675 17.3256 3.43849 19 4.98207 19Z"
                                                stroke="" stroke-width="1" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </g>

                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="font-bold">Please Note</p>
                                    <p class="text-sm">Reservation can only be deleted within 48 hours of creation and not on the same day of check-in
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Rooms Area End -->
@endsection
