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

@section('contents')
    <!-- Booking Section Top -->
    <div class="section-margin-100-0">
        <div class="container mx-auto px-6">
            <div class="flex-grow">
                <div class="relative">
                    <div class="flex justify-between items-center flex-wrap">
                        <div class="block-head-content mpb">
                            <h3 class="block-title font-bold text-[24px] text-[#364A63]">
                                Room List
                            </h3>
                            <div class="text-[#8094ae]">
                                <p class="text-sm pt-1">Here is our verious rooms.</p>
                            </div>
                        </div>

                        <div>
                            <div class="inline-block">
                                <!-- Button to open the modal -->
                                @if (Auth::user()->hasRole('Admin'))
                                    <a href="{{ route('rooms.create') }}" type="button"
                                        class="inline-flex bg-indigo-600 w-full justify-center items-center gap-x-1.5 rounded-md text-white border-none px-3 pl-4 py-2 text-sm shadow-sm ring-1 ring-inset ring-gray-300">
                                        <img class="h-[18.5px] w-[18px] shrink-0" alt=""
                                            src="{{ asset('/img/dashborad/icon-201.svg') }}" />
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Booking Section Details -->
    <section class="container mx-auto px-6 section-margin-20">
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
                                Status
                                <svg :class="{ 'rotate-180': open }" class="-mr-1 h-4 w-4 text-gray-400" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>

                        <div class="absolute left-0 mt-2 w-[125px] origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1"
                            x-show="open" x-cloak style="display: none;">
                            <div class="py-1" role="none">
                                <form action="{{ route('front-desk.rooms.filter') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="room-status" value="Room Status" id="queryInput" />

                                    <button type="submit" class="text-gray-700 block px-4 py-2 text-[13px]" role="menuitem"
                                        tabindex="-1" id="menu-item-1"
                                        onclick="document.getElementById('queryInput').value = 'any Status'">any
                                        Status</button>

                                    <button type="submit" class="text-gray-700 block px-4 py-2 text-[13px]" role="menuitem"
                                        tabindex="-1" id="menu-item-1"
                                        onclick="document.getElementById('queryInput').value = 'clean'">clean</button>

                                    <button type="submit" class="text-gray-700 block px-4 py-2 text-[13px]" role="menuitem"
                                        tabindex="-1" id="menu-item-1"
                                        onclick="document.getElementById('queryInput').value = 'cleaning'">cleaning</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="relative inline-block text-left mr-1" x-data="{ open: false }" @click.away="open = false">
                        <div>
                            <button type="button"
                                class="inline-flex w-full justify-center items-center gap-x-1.5 rounded-[25px] text-[#526484] px-3 py-2 font-medium text-[13px] shadow-sm ring-1 ring-inset ring-gray-300"
                                id="menu-button" aria-expanded="true" aria-haspopup="true" @click="open = !open">
                                <input type="text"
                                    class="outline-none text-[12px] pointer-events-none cursor-pointer border-0 overflow-hidden w-[68px]"
                                    name="room-type" disabled value="Room Type" id="room-types" />
                                <svg :class="{ 'rotate-180': open }" class="-mr-1 h-4 w-4 text-gray-400" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>

                        <div class="absolute right-0 z-10 mt-2 w-24 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1"
                            x-show="open" x-cloak style="display: none;">
                            <div class="py-1" role="none">
                                <form action="{{ route('front-desk.rooms.filter') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="room-type" value="Room Type" id="room-type" />

                                    <button type="submit" class="text-gray-700 block px-4 py-2 text-[13px]"
                                        role="menuitem" tabindex="-1" id="menu-item-0"
                                        onclick="document.getElementById('room-type').value = 'Single'">Single</button>

                                    <button type="submit" class="text-gray-700 block px-4 py-2 text-[13px]"
                                        role="menuitem" tabindex="-1" id="menu-item-1"
                                        onclick="document.getElementById('room-type').value = 'Double'">Double</button>

                                    <button type="submit" class="text-gray-700 block px-4 py-2 text-[13px]"
                                        role="menuitem" tabindex="-1" id="menu-item-1"
                                        onclick="document.getElementById('room-type').value = 'Suite'">Suite</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative inline-block text-left">
                    <div class="flex hidden-area">
                        <div class="flex items-center">
                            <div class="relative mx-4 lg:mx-0">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg class="w-5 h-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </span>

                                <form action="{{ route('front-desk.rooms.search') }}" method="POST" id="roomForm">
                                    @csrf
                                    <input
                                        class="w-[220px] sm:w-[180px] lg:w-[240px] pl-10 pr-4 rounded-lg form-input bg-[#ecf1f9] outline-none text-sm py-2 focus:border-indigo-600"
                                        type="text" placeholder="Search" name="room-search"
                                        onsubmit="document.getElementById('roomForm').submit();" />

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
                                x-show="open" x-cloak style="display: none;">
                                <div class="py-1" role="none">
                                    <div class="filter-header p-3 px-4 bcg-red-500 flex items-center justify-between">
                                        <h3 class="text-[13px] font-semibold text-[#364a63]">Filter Rooms</h3>
                                        <span class="font-bold text-[24] -mt-3" @click="open = !open">...</span>
                                    </div>
                                    <form action="{{ route('front-desk.rooms.filter') }}" method="POST">
                                        @csrf
                                        <div class="py-4  px-4 border-y">
                                            <div class="flex flex-wrap">
                                                <div class="w-1/2 pr-4 mb-3">
                                                    <label for="room-type"
                                                        class="text-[12px] font-semibold text-[#364a63]">
                                                        Room Type
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
                                                                    name="room-type" disabled value="Room Type"
                                                                    id="filter-type" />
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
                                                                    onclick="document.getElementById('filter-type').value = 'Single'"
                                                                    @click="open = !open">Single</button>

                                                                <button type="button"
                                                                    class="text-gray-700 block px-4 py-2 text-[13px]"
                                                                    role="menuitem" tabindex="-1" id="menu-item-1"
                                                                    onclick="document.getElementById('filter-type').value = 'Double'"
                                                                    @click="open = !open">Double</button>

                                                                <button type="button"
                                                                    class="text-gray-700 block px-4 py-2 text-[13px]"
                                                                    role="menuitem" tabindex="-1" id="menu-item-1"
                                                                    onclick="document.getElementById('filter-type').value = 'Suite'"
                                                                    @click="open = !open">Suite</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="w-1/2  mb-3">
                                                    <label for="room-type"
                                                        class="text-[12px] font-semibold text-[#364a63]">
                                                        Capacity
                                                    </label>
                                                    <div class="relative w-full inline-block text-left mr-1">
                                                        <input type="number" name="capacity" placeholder="2 Persons"
                                                            class="inline-flex w-full justify-between items-center gap-x-1.5 rounded-[5px] text-[#526484] px-3 py-2 font-medium text-[12px] shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 outline-none">
                                                    </div>
                                                </div>

                                                <div class="w-1/2 pr-4  mb-3">
                                                    <label for="room-type"
                                                        class="text-[12px] font-semibold text-[#364a63]">
                                                        Room Status
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
                                                                    name="room-status" disabled value="Room Status"
                                                                    id="filter-status" />
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
                                                                    onclick="document.getElementById('filter-status').value = 'any Status'"
                                                                    @click="open = !open">any Status</button>

                                                                <button type="button"
                                                                    class="text-gray-700 block px-4 py-2 text-[13px]"
                                                                    role="menuitem" tabindex="-1" id="menu-item-1"
                                                                    onclick="document.getElementById('filter-status').value = 'clean'"
                                                                    @click="open = !open">clean</button>

                                                                <button type="button"
                                                                    class="text-gray-700 block px-4 py-2 text-[13px]"
                                                                    role="menuitem" tabindex="-1" id="menu-item-1"
                                                                    onclick="document.getElementById('filter-status').value = 'cleaning'"
                                                                    @click="open = !open">cleaning</button>

                                                                <button type="button"
                                                                    class="text-gray-700 block px-4 py-2 text-[13px]"
                                                                    role="menuitem" tabindex="-1" id="menu-item-1"
                                                                    onclick="document.getElementById('filter-status').value = 'dirty'"
                                                                    @click="open = !open">dirty</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="w-1/2 mb-3">
                                                    <label for="room-type"
                                                        class="text-[12px] font-semibold text-[#364a63]">
                                                        Priority
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
                                                                    name="room-priority" disabled value="Room Priority"
                                                                    id="filter-priority" />
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
                                                                    onclick="document.getElementById('filter-priority').value = 'low'"
                                                                    @click="open = !open">low</button>

                                                                <button type="button"
                                                                    class="text-gray-700 block px-4 py-2 text-[13px]"
                                                                    role="menuitem" tabindex="-1" id="menu-item-1"
                                                                    onclick="document.getElementById('filter-priority').value = 'high'"
                                                                    @click="open = !open">high</button>
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
                                x-show="open" x-cloak style="display: none;">
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

            <!-- Booking Section Details main -->
            <div class="card">
                <div class="min-w-full overflow-x-auto">
                    <table class="w-full text-left">
                        <thead>
                            <tr class="bg-[#F8FAFC] border-b-[0.7px]">
                                <th class="whitespace-nowrap px-4 py-3 text-[13px] text-[#364A62] lg:px-5">
                                    #
                                </th>
                                <th class="whitespace-nowrap px-4 py-3 uppercase text-[13px] text-[#364A62] lg:px-5">
                                    Image
                                </th>
                                <th class="whitespace-nowrap px-4 py-3 uppercase text-[13px] text-[#364A62] lg:px-5">
                                    Name
                                </th>
                                <th class="whitespace-nowrap px-4 py-3 uppercase text-[13px] text-[#364A62] lg:px-5">
                                    Room Type
                                </th>
                                <th class="whitespace-nowrap px-4 py-3 uppercase text-[13px] text-[#364A62] lg:px-5">
                                    Price
                                </th>

                                <th class="whitespace-nowrap px-4 py-3 uppercase text-[13px] text-[#364A62] lg:px-5">
                                    Status
                                </th>

                                <th class="whitespace-nowrap px-4 py-3 uppercase text-[13px] text-[#364A62] lg:px-5">
                                    Capacity
                                </th>

                                <th class="whitespace-nowrap px-4 py-3 uppercase text-[13px] text-[#364A62] lg:px-5">
                                    Priority
                                </th>

                                <th class="whitespace-nowrap px-4 py-3 uppercase text-[13px] text-[#364A62] lg:px-5">
                                    More
                                </th>
                            </tr>
                        </thead>
                        <tbody x-data="{ expanded: false }">
                            @forelse ($rooms as $room)
                                <tr class="border-y">
                                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">{{ $room->id }}</td>
                                    <td class="px-4 py-3 sm:px-5">
                                        <div class="block w-9 h-9 overflow-hidden rounded-full shadow focus:outline-none">
                                            <img class="object-cover w-full h-full"
                                                src="{{ $room->getFirstMediaUrl('rooms') }}" alt="Your avatar" />
                                        </div>
                                    </td>
                                    <td
                                        class="whitespace-nowrap px-4 py-3 text-sm font-medium text-slate-700 dark:text-navy-100 sm:px-5">
                                        {{ $room->name }}
                                    </td>
                                    <td
                                        class="text-[13px] whitespace-nowrap text-orange-500 text-xs font-semibold px-4 py-3 sm:px-5">
                                        {{ $room->type->type }}
                                    </td>
                                    <td
                                        class="text-[13px] whitespace-nowrap text-[#1d1c1c] font-bold text-sm px-4 py-3 sm:px-5">
                                        <span class="font-bold">$</span>{{ $room->price }}
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                        <div class="flex space-x-2">
                                            <div
                                                class="rounded-full border text-[11px] px-[8px] py-[3px] font-semibold
                                            {{ $room->statut == 'clean'
                                                ? 'bg-green-200 border-green-500 text-green-500'
                                                : ($room->statut == 'dirty'
                                                    ? 'bg-red-200 border-red-500 text-red-500'
                                                    : 'bg-[#fcf3ec] border-orange-500 text-orange-500') }}">
                                                {{ $room->statut }}
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="whitespace-nowrap px-4 py-3 text-sm font-medium text-slate-700 dark:text-navy-100 sm:px-5">
                                        {{ $room->capacity }} Persons
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                        <div class="flex space-x-2">
                                            <div
                                                class="rounded-full border text-[11px] px-[8px] py-[3px] font-semibold
                                            {{ $room->priority == 'low'
                                                ? 'bg-green-200 border-green-500 text-green-500'
                                                : 'bg-red-200 border-red-500 text-red-500' }}">
                                                {{ $room->priority }}
                                            </div>
                                        </div>
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                        <div class="flex justify-center items-center">
                                            <!-- Show Details Icon -->
                                            <a href="{{ route('front-desk.rooms.show', $room->id) }}" class="mr-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    width="22" height="22" fill="none" stroke="#3367d1"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <circle cx="12" cy="12" r="10" />
                                                    <line x1="12" y1="16" x2="12" y2="12" />
                                                    <line x1="12" y1="8" x2="12" y2="8" />
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9" class="text-center text-gray-400 py-4">No rooms found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                @if ($rooms->hasPages())
                    <div class="py-4 px-4">
                        {{ $rooms->links() }}
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
