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
                            <h6>Actions:
                                <span>
                                    <td class="whitespace-nowrap">
                                        <div class="flex justify-center items-center">
                                            <!-- Show Details Icon -->                                            
                                            <a href="{{route('invoiceDetails', $reservation->payment)}}" class="mr-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    width="22" height="22" fill="none" stroke="#3367d1"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <circle cx="12" cy="12" r="10" />
                                                    <line x1="12" y1="16" x2="12" y2="12" />
                                                    <line x1="12" y1="8" x2="12" y2="8" />
                                                </svg>
                                            </a>
                                            <!-- Edit Icon -->
                                            <a href="{{ route('reservations.edit', $reservation) }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"
                                                    width="32" fill="#364A62" height="32">
                                                    <path
                                                        d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <!-- Delete Icon -->
                                            <form action="{{ route('rooms.destroy', $room->id) }}" method="POST"
                                                onsubmit="return confirm('Are You sure You want To Cancel This Reservation?')">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit">
                                                    <svg class="mt-1" xmlns="http://www.w3.org/2000/svg" fill="#E11D48"
                                                        viewBox="0 0 32 32" width="32" height="32"
                                                        stroke-width="1">
                                                        <path d="M13 15h2v6h-2zM17 15h2v6h-2z"></path>
                                                        <path
                                                            d="M20 9c0-.6-.4-1-1-1h-6c-.6 0-1 .4-1 1v2H8v2h1v10c0 .6.4 1 1 1h12c.6 0 1-.4 1-1V13h1v-2h-4V9zm-6 1h4v1h-4v-1zm7 3v9H11v-9h10z">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </span>
                            </h6>
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
                                        <input type="text" disabled value="{{ $reservation->checkIn }}" class="input-smalld form-control" name="checkIn" />
                                    </div>

                                    <div class="w-6/12">
                                        <input type="text" disabled value="{{ $reservation->checkOut }}" class="input-small form-control" name="checkOut" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-30">
                            <div class="flex">
                                <div class="w-6/12 md:pr-4">
                                    <label for="guests">Adults</label>
                                    <input type="text" disabled value="{{ $reservation->total_adults }}" class="input-small form-control"/>
                                </div>
                                <div class="w-6/12 md:pl-4">
                                    <label for="guests">Children</label>
                                    <input type="text" disabled value="{{ $reservation->total_children }}" class="input-small form-control"/>
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

                        <div class="form-group">

                            <form action="{{route('invoiceDetails', $reservation)}}" method="GET">
                                <button class="w-full {{ $reservation->statut == 'Pending' ? 'booked-btn' : 'hero-btn' }}"
                                    {{ $reservation->statut == 'Pending' ? 'disabled' : '' }}>
                                    {{ $reservation->statut == 'Pending'  ? 'Pending' : 'Check Invoice' }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Rooms Area End -->
@endsection
