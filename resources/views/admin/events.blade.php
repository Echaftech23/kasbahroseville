@extends('layouts.dashboard.app')

{{-- Success Alert --}}
@if (Session::has('success'))
    <div id="dismiss-alert" x-data="{ show: true }" x-show="show" x-transition:leave="transition ease-in duration-2000"
        x-transition:leave-start="opacity-100 translate-x-0" x-transition:leave-end="opacity-0 -translate-x-full"
        x-init="setTimeout(() => show = false, 4000)" class="fixed left-0 top-1/4 m-6 max-w-md rounded-lg p-4"
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
    @push('scripts')
        <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/core/main.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid/main.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid/main.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
        <script> 
            document.addEventListener('DOMContentLoaded', function () {
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    themeSystem: 'tailwind',
                    events: @json($events),
                });
                calendar.render();
            });
        </script>
    @endpush
    <div class="section-margin-100-0">
        <div class="container mx-auto px-6">
            <div class="flex-grow">
                <div class="relative">
                    <div class="flex justify-between items-center flex-wrap">
                        <div class="block-head-content mpb">
                            <h3 class="block-title font-bold text-[24px] text-[#364A63]">
                                Booking Lists
                            </h3>
                            <div class="text-[#8094ae]">
                                <p class="text-sm pt-1">You have total 200 booking's.</p>
                            </div>
                        </div>
                        <div>
                            <div class="relative inline-block text-left mr-1">
                                <div>
                                    <button type="button"
                                        class="inline-flex w-full justify-center items-center gap-x-1.5 rounded-md bg-white text-[#526484] px-3 py-2 font-medium text-sm shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                                        <img class="h-[18.7px] w-[18.5px] relative overflow-hidden shrink-0"
                                            alt="" src="../img/dashborad/icon-191.svg" />

                                        Export
                                    </button>
                                </div>
                            </div>

                            <div class="inline-block">
                                <div>
                                    <a href="{{ route('admin.reservations.create') }}" type="button"
                                        class="inline-flex bg-indigo-600 w-full justify-center items-center gap-x-1.5 rounded-md text-white border-none px-3 pl-4 py-2 text-sm shadow-sm ring-1 ring-inset ring-gray-300">
                                        <img class="h-[18.5px] w-[18px] shrink-0" alt=""
                                            src="../img/dashborad/icon-201.svg" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Booking Section Details -->
    <section class="container mx-auto px-6 section-margin-20 ">
        <div class="rounded-t-[4px] border bg-white">
            <!-- Booking Section Details Top -->
            <div class="px-5 py-5 flex justify-between border-b-[0.7px]">
                <div
                    class="hidden relative sm:inline-block text-left hidden-area transition duration-300 transform lg:translate-x-0 lg:static lg:inset-0">

                    <div class="relative inline-block text-left mr-1" x-data="{ open: false }" @click.away="open = false">
                        <div>
                            <button type="button"
                                class="inline-flex w-full justify-center items-center gap-x-1.5 rounded-[25px] text-[#526484] px-3 py-2 font-medium text-[13px] shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
                                id="menu-button" aria-expanded="true" aria-haspopup="true" @click="open = !open">
                                Select Period
                                <svg class="-mr-1 h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>

                        <div class="absolute right-0 z-10 mt-2 w-[135px] origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1"
                            x-show="open">
                            <form action="{{ route('reservations.filter') }}" method="POST">
                                @csrf
                                <button type="submit" name="period" value="24_hours"
                                    class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1">Last 24
                                    Hours</button>
                                <button type="submit" name="period" value="7_days"
                                    class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1">Last 7
                                    Days</button>
                                <button type="submit" name="period" value="30_days"
                                    class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1">Last 30
                                    Days</button>
                            </form>
                        </div>
                    </div>

                    <div class="relative inline-block text-left mr-1" x-data="{ open: false }" @click.away="open = false">
                        <div>
                            <button type="button"
                                class="inline-flex w-full justify-center items-center gap-x-1.5 rounded-[25px] text-[#526484] px-3 py-2 font-medium text-[13px] shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
                                id="menu-button" aria-expanded="true" aria-haspopup="true" @click="open = !open">
                                Status
                                <svg class="-mr-1 h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>

                        <div class="absolute right-0 z-10 mt-2 w-[130px] origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1"
                            x-show="open">
                            <div class="py-1" role="none">
                                <form action="{{ route('reservations.filter') }}" method="POST">
                                    @csrf
                                    <button type="submit" name="statut" value="Pending"
                                        class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                                        tabindex="-1">Pending</button>
                                    <button type="submit" name="statut" value="Confirmed"
                                        class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                                        tabindex="-1">Confirmed</button>
                                    <button type="submit" name="statut" value="Rejected"
                                        class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                                        tabindex="-1">Rejected</button>
                                    <button type="submit" name="statut" value="Checked In"
                                        class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                                        tabindex="-1">Checked In</button>
                                    <button type="submit" name="statut" value="Checked Out"
                                        class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                                        tabindex="-1">Checked Out</button>
                                    <button type="submit" name="statut" value="Due In"
                                        class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1">Due
                                        In</button>
                                    <button type="submit" name="statut" value="Due Out"
                                        class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1">Due
                                        Out</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="relative inline-block text-left mr-1" x-data="{ open: false }" @click.away="open = false">
                        <div>
                            <button type="button"
                                class="inline-flex w-full justify-center items-center gap-x-1.5 rounded-[25px] text-[#526484] px-3 py-2 font-medium text-[13px] shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
                                id="menu-button" aria-expanded="true" aria-haspopup="true" @click="open = !open">
                                Payment
                                <svg class="-mr-1 h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>

                        <div class="absolute right-0 z-10 mt-2 w-24 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1"
                            x-show="open">
                            <div class="py-1" role="none">
                                <form action="{{ route('reservations.filter') }}" method="POST">
                                    @csrf
                                    <button type="submit" name="payment_statut" value="Complete"
                                        class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                                        tabindex="-1">Complete</button>
                                    <button type="submit" name="payment_statut" value="Pending"
                                        class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                                        tabindex="-1">Pending</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative inline-block text-left">
                    <div class="flex hidden-area">
                        <div class="flex items-center">
                            <div class="relative mx-4 lg:mx-0">
                                <form action="{{ route('reservations.search') }}" method="POST" id="searchForm">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                        <svg class="w-5 h-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </span>

                                    @csrf
                                    <input
                                        class="w-[220px] sm:w-[180px] lg:w-[240px] pl-10 pr-4 rounded-lg form-input bg-[#ecf1f9] outline-none text-sm py-2 focus:border-indigo-600"
                                        type="search" name="reservation-search" id="searchFormInput"
                                        placeholder="Search" />
                                </form>
                            </div>
                        </div>
                        <div class="relative inline-block text-left" x-data="{ open: false }" @click.away="open = false">
                            <div>
                                <button type="button"
                                    class="inline-flex w-full justify-center items-center gap-x-1.5 px-3 py-2 font-medium text-[13px]"
                                    id="menu-button" aria-expanded="true" aria-haspopup="true" @click="open = !open">
                                    <img src="../img/dashborad/filter.svg" alt="" />
                                </button>
                            </div>

                            <div class="absolute right-0 z-10 mt-2 w-[320px] origin-top-left rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1"
                                x-show="open">
                                <div class="py-1" role="none">
                                    <div class="filter-header p-3 px-4 bcg-red-500 flex items-center justify-between">
                                        <h3 class="text-[13px] font-semibold text-[#364a63]">Filter Rooms</h3>
                                        <span class="font-bold text-[24] -mt-3" @click="open = !open">...</span>
                                    </div>
                                    <form action="{{ route('reservations.filter') }}" method="POST">
                                        @csrf
                                        <div class="py-4  px-4 border-y">
                                            <div class="flex flex-wrap">

                                                <div class="w-1/2 pr-4 mb-3">
                                                    <label for="room-type"
                                                        class="text-[12px] font-semibold text-[#364a63]">
                                                        Period
                                                    </label>
                                                    <div class="relative w-full inline-block text-left mr-1"
                                                        x-data="{ open: false }" @click.away="open = false">
                                                        <div>
                                                            <button type="button"
                                                                class="inline-flex w-full justify-between items-center gap-x-1.5 rounded-[5px] text-[#526484] px-3 py-2 font-medium text-[13px] shadow-sm ring-1 ring-inset ring-gray-300"
                                                                id="menu-button" aria-expanded="true"
                                                                aria-haspopup="true" @click="open = !open">
                                                                <input type="text"
                                                                    class="outline-none text-[12px] pointer-events-none cursor-pointer border-0 overflow-hidden w-11/12"
                                                                    name="period" disabled value="Select Period"
                                                                    id="period" />
                                                                <svg :class="{ 'rotate-180': open }"
                                                                    class="-mr-1 h-4 w-4 text-gray-400"
                                                                    viewBox="0 0 20 20" fill="currentColor"
                                                                    aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                                        clip-rule="evenodd" />
                                                                </svg>
                                                            </button>
                                                        </div>

                                                        <div class="absolute right-0 z-10 mt-2 w-full origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                                            role="menu" aria-orientation="vertical"
                                                            aria-labelledby="menu-button" tabindex="-1" x-show="open">
                                                            <div class="py-1" role="none">
                                                                <button type="button"
                                                                    class="text-gray-700 block px-4 py-2 text-[13px]"
                                                                    role="menuitem" tabindex="-1" id="menu-item-0"
                                                                    onclick="document.getElementById('period').value = '24_hours'"
                                                                    @click="open = !open">Last 24 Hours</button>

                                                                <button type="button"
                                                                    class="text-gray-700 block px-4 py-2 text-[13px]"
                                                                    role="menuitem" tabindex="-1" id="menu-item-1"
                                                                    onclick="document.getElementById('period').value = '7_days'"
                                                                    @click="open = !open">Last 7 Days</button>

                                                                <button type="button"
                                                                    class="text-gray-700 block px-4 py-2 text-[13px]"
                                                                    role="menuitem" tabindex="-1" id="menu-item-1"
                                                                    onclick="document.getElementById('period').value = '30_days'"
                                                                    @click="open = !open">Last 30 Days</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="w-1/2  mb-3">
                                                    <label for="room-type"
                                                        class="text-[12px] font-semibold text-[#364a63]">
                                                        Reservation Statut
                                                    </label>
                                                    <div class="relative w-full inline-block text-left mr-1"
                                                        x-data="{ open: false }" @click.away="open = false">
                                                        <div>
                                                            <button type="button"
                                                                class="inline-flex w-full justify-between items-center gap-x-1.5 rounded-[5px] text-[#526484] px-3 py-2 font-medium text-[13px] shadow-sm ring-1 ring-inset ring-gray-300"
                                                                id="menu-button" aria-expanded="true"
                                                                aria-haspopup="true" @click="open = !open">
                                                                <input type="text"
                                                                    class="outline-none text-[12px] pointer-events-none cursor-pointer border-0 overflow-hidden w-11/12"
                                                                    name="statut" disabled value="Select Statut"
                                                                    id="reservationStatut" />
                                                                <svg :class="{ 'rotate-180': open }"
                                                                    class="-mr-1 h-4 w-4 text-gray-400"
                                                                    viewBox="0 0 20 20" fill="currentColor"
                                                                    aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                                        clip-rule="evenodd" />
                                                                </svg>
                                                            </button>
                                                        </div>

                                                        <div class="absolute right-0 z-10 mt-2 w-32 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                                            role="menu" aria-orientation="vertical"
                                                            aria-labelledby="menu-button" tabindex="-1" x-show="open">
                                                            <div class="py-1" role="none">
                                                                <button type="button"
                                                                    class="text-gray-700 block px-4 py-2 text-[13px]"
                                                                    role="menuitem" tabindex="-1" id="menu-item-0"
                                                                    onclick="document.getElementById('reservationStatut').value = 'Pending'"
                                                                    @click="open = !open">Pending</button>

                                                                <button type="button"
                                                                    class="text-gray-700 block px-4 py-2 text-[13px]"
                                                                    role="menuitem" tabindex="-1" id="menu-item-1"
                                                                    onclick="document.getElementById('reservationStatut').value = 'Confirmed'"
                                                                    @click="open = !open">Confirmed</button>

                                                                <button type="button"
                                                                    class="text-gray-700 block px-4 py-2 text-[13px]"
                                                                    role="menuitem" tabindex="-1" id="menu-item-1"
                                                                    onclick="document.getElementById('reservationStatut').value = 'Rejected'"
                                                                    @click="open = !open">Rejected</button>

                                                                <button type="button"
                                                                    class="text-gray-700 block px-4 py-2 text-[13px]"
                                                                    role="menuitem" tabindex="-1" id="menu-item-1"
                                                                    onclick="document.getElementById('reservationStatut').value = 'Checked In'"
                                                                    @click="open = !open">Checked In</button>

                                                                <button type="button"
                                                                    class="text-gray-700 block px-4 py-2 text-[13px]"
                                                                    role="menuitem" tabindex="-1" id="menu-item-1"
                                                                    onclick="document.getElementById('reservationStatut').value = 'Checked Out'"
                                                                    @click="open = !open">Checked Out</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="w-1/2 pr-4 mb-3">
                                                    <label for="room-type"
                                                        class="text-[12px] font-semibold text-[#364a63]">
                                                        Name
                                                    </label>
                                                    <div class="relative w-full inline-block text-left mr-1">
                                                        <input type="text" name="name" placeholder="Costumer Name"
                                                            class="inline-flex w-full justify-between items-center gap-x-1.5 rounded-[5px] text-[#526484] px-3 py-2 font-medium text-[12px] shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 outline-none">
                                                    </div>
                                                </div>

                                                <div class="w-1/2 mb-3">
                                                    <label for="room-type"
                                                        class="text-[12px] font-semibold text-[#364a63]">
                                                        Payment Statut
                                                    </label>
                                                    <div class="relative w-full inline-block text-left mr-1"
                                                        x-data="{ open: false }" @click.away="open = false">
                                                        <div>
                                                            <button type="button"
                                                                class="inline-flex w-full justify-between items-center gap-x-1.5 rounded-[5px] text-[#526484] px-3 py-2 font-medium text-[13px] shadow-sm ring-1 ring-inset ring-gray-300"
                                                                id="menu-button" aria-expanded="true"
                                                                aria-haspopup="true" @click="open = !open">
                                                                <input type="text"
                                                                    class="outline-none text-[12px] pointer-events-none cursor-pointer border-0 overflow-hidden w-11/12"
                                                                    name="payment_statut" disabled value="Payment Statut"
                                                                    id="paymentStatut" />
                                                                <svg :class="{ 'rotate-180': open }"
                                                                    class="-mr-1 h-4 w-4 text-gray-400"
                                                                    viewBox="0 0 20 20" fill="currentColor"
                                                                    aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                                        clip-rule="evenodd" />
                                                                </svg>
                                                            </button>
                                                        </div>

                                                        <div class="absolute right-0 z-10 mt-2 w-24 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                                            role="menu" aria-orientation="vertical"
                                                            aria-labelledby="menu-button" tabindex="-1" x-show="open">
                                                            <div class="py-1" role="none">
                                                                <button type="button"
                                                                    class="text-gray-700 block px-4 py-2 text-[13px]"
                                                                    role="menuitem" tabindex="-1" id="menu-item-0"
                                                                    onclick="document.getElementById('paymentStatut').value = 'Complete'"
                                                                    @click="open = !open">Complete</button>

                                                                <button type="button"
                                                                    class="text-gray-700 block px-4 py-2 text-[13px]"
                                                                    role="menuitem" tabindex="-1" id="menu-item-1"
                                                                    onclick="document.getElementById('paymentStatut').value = 'Pending'"
                                                                    @click="open = !open">Pending</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div>
                                                <button type="submit"
                                                    class="bg-[#2d3a50] text-white px-5 py-2 rounded-[5px] text-[13px] font-semibold">
                                                    Filter
                                                </button>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-between px-4 py-3">
                                            <button type="reset" class="text-[13px] text-blue-500">Reset Filter</button>
                                            <button type="submit" class="text-[13px] text-blue-500">Save Filter</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <div class="relative inline-block text-left" x-data="{ open: false }" @click.away="open = false">
                            <div>
                                <button type="button"
                                    class="inline-flex w-full justify-center items-center py-2 font-medium border-0"
                                    id="menu-button" aria-expanded="true" aria-haspopup="true" @click="open = !open">
                                    <img src="../img/dashborad/speen.svg" alt="" />
                                </button>
                            </div>

                            <div class="absolute right-0 z-10 mt-2 w-24 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1"
                                x-show="open">
                                <div class="py-1" role="none">
                                    <a href="#" class="text-gray-700 block px-4 py-2 text-[13px]" role="menuitem"
                                        tabindex="-1" id="menu-item-0">Due</a>
                                    <a href="#" class="text-gray-700 block px-4 py-2 text-[13px]" role="menuitem"
                                        tabindex="-1" id="menu-item-1">Paid</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div  class="p-6">
                <div id="calendar"></div>
            </div>
        </div>
        @push('scripts')
            <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
        @endpush
    </section>
@endsection
