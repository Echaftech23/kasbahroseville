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
                            <div class="py-1" role="none">
                                <a href="#" class="text-gray-700 block px-4 py-2 text-[13px]" role="menuitem"
                                    tabindex="-1" id="menu-item-0">Last 24 Hours</a>
                                <a href="#" class="text-gray-700 block px-4 py-2 text-[13px]" role="menuitem"
                                    tabindex="-1" id="menu-item-1">Last 7 Days</a>
                                <a href="#" class="text-gray-700 block px-4 py-2 text-[13px]" role="menuitem"
                                    tabindex="-1" id="menu-item-2">Last 30 Days</a>
                            </div>
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
                                <a href="#" class="text-gray-700 block px-4 py-2 text-[13px]" role="menuitem"
                                    tabindex="-1" id="menu-item-0">confirmed</a>
                                <a href="#" class="text-gray-700 block px-4 py-2 text-[13px]" role="menuitem"
                                    tabindex="-1" id="menu-item-1">Checked In
                                </a>
                                <a href="#" class="text-gray-700 block px-4 py-2 text-[13px]" role="menuitem"
                                    tabindex="-1" id="menu-item-1">Checked Out
                                </a>
                                <a href="#" class="text-gray-700 block px-4 py-2 text-[13px]" role="menuitem"
                                    tabindex="-1" id="menu-item-1">Due In
                                </a>
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
                                <a href="#" class="text-gray-700 block px-4 py-2 text-[13px]" role="menuitem"
                                    tabindex="-1" id="menu-item-0">Due</a>
                                <a href="#" class="text-gray-700 block px-4 py-2 text-[13px]" role="menuitem"
                                    tabindex="-1" id="menu-item-1">Paid</a>
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

                            <div class="absolute right-0 z-10 mt-2 w-[130px] origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1"
                                x-show="open">
                                <div class="py-1" role="none">
                                    <a href="#" class="text-gray-700 block px-4 py-2 text-[13px]" role="menuitem"
                                        tabindex="-1" id="menu-item-0">confirmed</a>
                                    <a href="#" class="text-gray-700 block px-4 py-2 text-[13px]" role="menuitem"
                                        tabindex="-1" id="menu-item-1">Checked In
                                    </a>
                                    <a href="#" class="text-gray-700 block px-4 py-2 text-[13px]" role="menuitem"
                                        tabindex="-1" id="menu-item-2">Checked Out
                                    </a>
                                    <a href="#" class="text-gray-700 block px-4 py-2 text-[13px]" role="menuitem"
                                        tabindex="-1" id="menu-item-3">Due In
                                    </a>
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
                                    Customer
                                </th>
                                <th class="whitespace-nowrap px-4 py-3 uppercase text-[13px] text-[#364A62] lg:px-5">
                                    Name
                                </th>
                                <th class="whitespace-nowrap px-4 py-3 uppercase text-[13px] text-[#364A62] lg:px-5">
                                    check in
                                </th>
                                <th class="whitespace-nowrap px-4 py-3 uppercase text-[13px] text-[#364A62] lg:px-5">
                                    check out
                                </th>
                                <th class="whitespace-nowrap px-4 py-3 uppercase text-[13px] text-[#364A62] lg:px-5">
                                    amount
                                </th>
                                <th class="whitespace-nowrap px-4 py-3 uppercase text-[13px] text-[#364A62] lg:px-5">
                                    amount_paid
                                </th>
                                <th class="whitespace-nowrap px-4 py-3 uppercase text-[13px] text-[#364A62] lg:px-5">
                                    Status
                                </th>
                                <th class="whitespace-nowrap px-4 py-3 uppercase text-[13px] text-[#364A62] lg:px-5">
                                    Ref
                                </th>
                                <th class="whitespace-nowrap px-4 py-3 uppercase text-[13px] text-[#364A62] lg:px-5">
                                    More
                                </th>
                            </tr>
                        </thead>
                        <tbody id="reservationsList">
                            @forelse ($reservations as $reservation)
                                <tr class="border-y border-transparent">
                                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">{{ $reservation->id }}</td>
                                    <td class="whitespace-nowrap  px-4 py-3 sm:px-5">
                                        <div class="block w-9 h-9 overflow-hidden rounded-full shadow focus:outline-none">
                                            <img class="object-cover w-full h-full"
                                                src="{{ $reservation->user->getFirstMediaUrl('profile') ? $reservation->user->getFirstMediaUrl('profile') : asset('img/bg-img/default-profile.jpeg') }}"
                                                alt="Your avatar" />
                                        </div>
                                    </td>
                                    <td
                                        class="whitespace-nowrap  px-4 py-3 text-sm font-medium text-slate-700 dark:text-navy-100 sm:px-5">
                                        {{ $reservation->user->name }}
                                    </td>
                                    <td class="text-[13px] whitespace-nowrap  text-[#64748B] text-sm px-4 py-3 sm:px-5">
                                        {{ \Carbon\Carbon::parse($reservation->checkIn)->format('j M') }}
                                    </td>
                                    <td class="text-[13px] whitespace-nowrap  text-[#64748B] text-sm px-4 py-3 sm:px-5">
                                        {{ \Carbon\Carbon::parse($reservation->checkOut)->format('j M') }}
                                    </td>
                                    <td
                                        class="whitespace-nowrap  px-4 py-3 text-sm font-medium text-slate-700 dark:text-navy-100 sm:px-5">
                                        ${{ $reservation->payment->totalAmount }}
                                    </td>
                                    <td
                                        class="whitespace-nowrap  px-4 py-3 text-sm font-medium text-slate-700 dark:text-navy-100 sm:px-5">
                                        ${{ $reservation->payment->amountPaid }}
                                    </td>
                                    <td class="whitespace-nowrap  px-4 py-3 sm:px-5">
                                        <div class="flex space-x-2">
                                            @php
                                                $statusColors = [
                                                    'Confirmed' => 'bg-cyan-100 border-cyan-500 text-cyan-500',
                                                    'Due In' => 'bg-green-100 border-green-500 text-green-500',
                                                    'Checked In' => 'bg-indigo-100 border-indigo-500 text-indigo-500',
                                                    'Due Out' => 'bg-pink-100 border-pink-500 text-pink-500',
                                                    'Checked Out' => 'bg-orange-100 border-orange-500 text-orange-500',
                                                    'Pending' => 'bg-yellow-100 border-yellow-500 text-yellow-500',
                                                    'Rejected' => 'bg-red-100 border-red-500 text-red-500',
                                                ];
                                            @endphp

                                            <div
                                                class="rounded-full border {{ $statusColors[$reservation->statut] }} text-[11px] px-[8px] py-[3px] font-semibold">
                                                {{ $reservation->statut }}
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-[13px] whitespace-nowrap  text-[#64748B] text-sm px-4 py-3 sm:px-5">
                                        {{ $reservation->ref }}
                                    </td>
                                    <td class="whitespace-nowrap  px-4 py-3 sm:px-5">
                                        <button
                                            onclick="document.getElementById('showTr{{ $reservation->id }}').classList.toggle('hidden')"
                                            class="btn size-8 rounded-full p-0 text-[#64748B] text-sm hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                            <i id="icon"
                                                class="fas fa-chevron-down text-sm transition-transform"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr id="showTr{{ $reservation->id }}"
                                    class="hidden border-y border-transparent border-b-slate-200 dark:border-b-navy-500">
                                    <td colspan="100" class="p-0">
                                        <div>
                                            <div class="px-4 pb-4 sm:px-5">
                                                <div class="is-scrollbar-hidden min-w-full overflow-x-auto">
                                                    <table class="is-hoverable w-full text-left">
                                                        <thead>
                                                            <tr
                                                                class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500">
                                                                <th
                                                                    class="whitespace-nowrap  px-4 py-3 uppercase text-[13px] text-[#364A62] lg:px-5">
                                                                    EMail
                                                                </th>
                                                                <th
                                                                    class="whitespace-nowrap px-4 py-3 uppercase text-[13px] text-[#364A62] lg:px-5">
                                                                    Phone
                                                                </th>
                                                                <th
                                                                    class="whitespace-nowrap px-4 py-3 uppercase text-[13px] text-[#364A62] lg:px-5">
                                                                    Room
                                                                </th>
                                                                <th
                                                                    class="whitespace-nowrap  px-4 py-3 uppercase text-[13px] text-[#364A62] lg:px-5">
                                                                    Room Type
                                                                </th>
                                                                <th
                                                                    class="whitespace-nowrap  px-4 py-3 uppercase text-[13px] text-[#364A62] lg:px-5">
                                                                    Price
                                                                </th>
                                                                <th
                                                                    class="whitespace-nowrap  px-4 py-3 uppercase text-[13px] text-[#364A62] lg:px-5">
                                                                    created at
                                                                </th>
                                                                <th
                                                                    class="whitespace-nowrap  px-4 py-3 uppercase text-[13px] text-[#364A62] lg:px-5">
                                                                    Actions
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="border-y border-transparent">
                                                                <td
                                                                    class="whitespace-nowrap  text-[#364A62] text-sm px-4 py-3 sm:px-5">
                                                                    {{ $reservation->user->email }}
                                                                </td>
                                                                <td
                                                                    class="whitespace-nowrap  text-[#64748B] text-sm px-4 py-3 sm:px-5">
                                                                    {{ $reservation->user->phone ? $reservation->user->phone : '000-000-0000' }}
                                                                </td>
                                                                <td
                                                                    class="whitespace-nowrap text-[#364A62] text-sm px-4 py-3 sm:px-5">
                                                                    {{ $reservation->room->name }}
                                                                </td>
                                                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                                    <div class="flex space-x-2">
                                                                        @php
                                                                            $roomStatus = [
                                                                                'Single' => 'text-orange-500',
                                                                                'Double' => 'text-green-500',
                                                                                'Suite' =>
                                                                                    'bg-indigo-100 border-indigo-500 text-indigo-500',
                                                                            ];
                                                                        @endphp

                                                                        <div
                                                                            class="rounded-full {{ $roomStatus[$reservation->room->type->type] }} text-xs px-2 py-1 font-semibold">
                                                                            {{ $reservation->room->type->type }}
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                                    <div class="flex space-x-2">
                                                                        <div class=" px-[8px] py-[3px] font-semibold">
                                                                            ${{ $reservation->room->price }}
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td
                                                                    class="whitespace-nowrap text-[#364A62] text-sm px-4 py-3 sm:px-5">
                                                                    {{ $reservation->created_at->format('d M, Y') }}
                                                                </td>
                                                                <td>
                                                                    <div class="flex justify-center items-center">
                                                                        <!-- Edit Icon -->
                                                                        @if ($reservation->ref == 'guest')
                                                                            <div>
                                                                                <!-- Button trigger modal -->
                                                                                <a href="#"
                                                                                    class="modalButton text-gray-700 block px-4 py-2 text-sm"
                                                                                    role="menuitem" tabindex="-1"
                                                                                    data-target-modal="myModal{{ $reservation->id }}"
                                                                                    id="modalButton">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 32 32" width="32"
                                                                                        fill="#364A62" height="32">
                                                                                        <path
                                                                                            d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z">
                                                                                        </path>
                                                                                    </svg>
                                                                                </a>

                                                                                <!-- Modal -->
                                                                                <div class="myModal fixed z-50 inset-0 flex items-center justify-center"
                                                                                    aria-labelledby="modal-title"
                                                                                    id="myModal{{ $reservation->id }}"
                                                                                    style="display: none;" role="dialog"
                                                                                    aria-modal="true">
                                                                                    <div class="fixed w-full h-full  top-0 left-0 bg-gray-500 bg-opacity-75 transition-opacity"
                                                                                        aria-hidden="true"></div>

                                                                                    <!-- Modal content -->
                                                                                    <div
                                                                                        class="bg-white rounded-lg text-left shadow-xl transform transition-all sm:max-w-sm sm:w-full">
                                                                                        <div class="pb-4 sm:py-6 sm:pb-4">
                                                                                            <div
                                                                                                class="flex items-center justify-between px-6">
                                                                                                <h3 class="text-lg leading-6 font-medium text-gray-900"
                                                                                                    id="modal-title">
                                                                                                    Edit Reservation statut
                                                                                                </h3>
                                                                                                <button type="button"
                                                                                                    class="closeModal text-gray-400 bg-transparent  hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                                                                                                    <svg class="w-3 h-3"
                                                                                                        aria-hidden="true"
                                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                                        fill="none"
                                                                                                        viewBox="0 0 14 14">
                                                                                                        <path
                                                                                                            stroke="currentColor"
                                                                                                            stroke-linecap="round"
                                                                                                            stroke-linejoin="round"
                                                                                                            stroke-width="2"
                                                                                                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                                                                    </svg>
                                                                                                </button>
                                                                                            </div>
                                                                                            <div class="mt-2">
                                                                                                <form
                                                                                                    enctype="multipart/form-data"
                                                                                                    id="reservation-form-{{ $reservation->id }});"
                                                                                                    action="{{ route('admin.reservations.update', $reservation) }}"
                                                                                                    method="POST">
                                                                                                    @csrf
                                                                                                    @method('PUT')
                                                                                                    <div
                                                                                                        class="border-t px-6 py-4">
                                                                                                        <div
                                                                                                            class="">
                                                                                                            <div
                                                                                                                class="pr-4">
                                                                                                                <label
                                                                                                                    for="statut"
                                                                                                                    class="text-[12px] font-semibold text-[#364a63]">
                                                                                                                    Rservation
                                                                                                                    Statut
                                                                                                                </label>
                                                                                                                <div class="relative w-full inline-block text-left mr-1"
                                                                                                                    x-data="{ open: false }"
                                                                                                                    @click.away="open = false">
                                                                                                                    <div>
                                                                                                                        <button
                                                                                                                            type="button"
                                                                                                                            class="inline-flex w-full justify-between items-center gap-x-1.5 rounded-[5px] text-[#526484] px-3 py-3 font-medium text-sm shadow-sm ring-1 ring-inset ring-gray-300"
                                                                                                                            id="menu-button"
                                                                                                                            aria-expanded="true"
                                                                                                                            aria-haspopup="true"
                                                                                                                            @click="open = !open">
                                                                                                                            <input
                                                                                                                                type="hidden"
                                                                                                                                name="statut"
                                                                                                                                value="{{ $reservation->statut }}"
                                                                                                                                id="inputValue{{ $reservation->id }}" />
                                                                                                                            <input
                                                                                                                                type="text"
                                                                                                                                class="outline-none text-[12px] pointer-events-none cursor-pointer border-0 overflow-hidden w-11/12"
                                                                                                                                name="statut"
                                                                                                                                disabled
                                                                                                                                value="{{ $reservation->statut }}"
                                                                                                                                id="filter-type{{ $reservation->id }}" />
                                                                                                                            <svg :class="{ 'rotate-180': open }"
                                                                                                                                class="-mr-1 h-4 w-4 text-gray-400"
                                                                                                                                viewBox="0 0 20 20"
                                                                                                                                fill="currentColor"
                                                                                                                                aria-hidden="true">
                                                                                                                                <path
                                                                                                                                    fill-rule="evenodd"
                                                                                                                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                                                                                                    clip-rule="evenodd" />
                                                                                                                            </svg>
                                                                                                                        </button>
                                                                                                                    </div>

                                                                                                                    <div class="absolute right-0 z-50 mt-2 w-6/12 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                                                                                                        role="menu"
                                                                                                                        aria-orientation="vertical"
                                                                                                                        aria-labelledby="menu-button"
                                                                                                                        tabindex="-1"
                                                                                                                        x-show="open">
                                                                                                                        <div class="py-1"
                                                                                                                            role="none">
                                                                                                                            @foreach (App\Models\Reservation::STATUT_RADIO as $value => $label)
                                                                                                                                <button
                                                                                                                                    type="button"
                                                                                                                                    class="text-gray-70 block px-4 py-1.5 sm:py-2 text-[15px]"
                                                                                                                                    role="menuitem"
                                                                                                                                    tabindex="-1"
                                                                                                                                    id="menu-item-0"
                                                                                                                                    onclick="document.getElementById('filter-type{{ $reservation->id }}').value = '{{ $value }}'
                                                                                                                                    document.getElementById('inputValue{{ $reservation->id }}').value = '{{ $value }}'"
                                                                                                                                    @click="open = !open">{{ $label }}
                                                                                                                                </button>
                                                                                                                            @endforeach
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div
                                                                                                            class="mt-5  sm:mt-6">
                                                                                                            <button
                                                                                                                type="submit"
                                                                                                                class="inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm">
                                                                                                                Save
                                                                                                            </button>
                                                                                                            <button
                                                                                                                type="button"
                                                                                                                class="closeModalButton mt-3 inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                                                                                                Close
                                                                                                            </button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </form>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @else
                                                                            <!-- Button trigger modal -->
                                                                            <a href="{{ route('admin.reservations.edit', $reservation) }}"
                                                                                class="modalButton text-gray-700 block px-4 py-2 text-sm"
                                                                                role="menuitem" tabindex="-1"
                                                                                data-target-modal="myModal{{ $reservation->id }}"
                                                                                id="modalButton">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 32 32" width="32"
                                                                                    fill="#364A62" height="32">
                                                                                    <path
                                                                                        d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z">
                                                                                    </path>
                                                                                </svg>
                                                                            </a>
                                                                        @endif

                                                                        <!-- Delete Icon -->
                                                                        <div x-data="{ open: false }">
                                                                            <!-- Delete Icon -->
                                                                            <button @click="open = true">
                                                                                <svg class="mt-1"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    fill="#E11D48" viewBox="0 0 32 32"
                                                                                    width="32" height="32"
                                                                                    stroke-width="1">
                                                                                    <path d="M13 15h2v6h-2zM17 15h2v6h-2z">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M20 9c0-.6-.4-1-1-1h-6c-.6 0-1 .4-1 1v2H8v2h1v10c0 .6.4 1 1 1h12c.6 0 1-.4 1-1V13h1v-2h-4V9zm-6 1h4v1h-4v-1zm7 3v9H11v-9h10z">
                                                                                    </path>
                                                                                </svg>
                                                                            </button>

                                                                            <!-- Modal -->
                                                                            <div x-show="open"
                                                                                class="fixed z-50 inset-0 flex items-center justify-center"
                                                                                aria-labelledby="modal-title"
                                                                                role="dialog" aria-modal="true">
                                                                                <div class="fixed w-full h-full  top-0 left-0 bg-gray-500 bg-opacity-75 transition-opacity"
                                                                                    aria-hidden="true"></div>

                                                                                <!-- Modal content -->
                                                                                <div
                                                                                    class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                                                                    <div
                                                                                        class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                                                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200"
                                                                                            aria-hidden="true"
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                            fill="none"
                                                                                            viewBox="0 0 20 20">
                                                                                            <path stroke="currentColor"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"
                                                                                                stroke-width="2"
                                                                                                d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                                                        </svg>
                                                                                        <h3
                                                                                            class="mb-3 text-center text-lg font-normal text-gray-500 dark:text-gray-400">
                                                                                            Are you sure you want to delete
                                                                                            this Reservation?</h3>
                                                                                    </div>
                                                                                    <div
                                                                                        class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                                                                        <form
                                                                                            class="flex items-center justify-center w-full pb-3"
                                                                                            action="{{ route('admin.reservations.destroy', $reservation) }}"
                                                                                            method="POST">
                                                                                            @csrf
                                                                                            @method('DELETE')

                                                                                            <button type="submit"
                                                                                                @click="open = false"
                                                                                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                                                                Yes, I'm sure
                                                                                            </button>
                                                                                            <button type="button"
                                                                                                @click="open = false"
                                                                                                class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No,
                                                                                                cancel
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9" class="text-center text-gray-400 py-4">No reservations found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <nav id="paginationContainer">
                    @if ($reservations->hasPages())
                        <div class="py-4 px-4">
                            {{ $reservations->links('pagination::custom') }}
                        </div>
                    @endif
                </nav>
            </div>
        </div>
    </section>

    <script>
        var modalButtons = document.querySelectorAll('.modalButton');
        var closeButtons = document.querySelectorAll('.closeModal, .closeModalButton');

        // Add event listener for the modal button
        modalButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                var targetModal = document.getElementById(this.dataset.targetModal);
                targetModal.style.display = 'flex';
            });
        });

        closeButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                var targetModal = this.closest('.myModal');
                targetModal.style.display = 'none';
            });
        });
    </script>


    <script>
        document.getElementById("searchForm").addEventListener("submit", function(event) {
            event.preventDefault();

            let url = event.target.action;
            let formData = new FormData(event.target);

            fetch(url, {
                    method: "POST",
                    body: formData,
                    headers: {
                        "X-Requested-With": "XMLHttpRequest",
                        "X-CSRF-TOKEN": document
                            .querySelector('meta[name="csrf-token"]')
                            .getAttribute("content"),
                    },
                })
                .then((response) => response.json())
                .then((data) => {
                    // Clear the existing rooms
                    let reservationContainer = document.getElementById("reservationsList");
                    reservationContainer.innerHTML = "";

                    statusColors = {
                        'Confirmed': 'bg-cyan-100 border-cyan-500 text-cyan-500',
                        'Due In': 'bg-green-100 border-green-500 text-green-500',
                        'Checked In': 'bg-indigo-100 border-indigo-500 text-indigo-500',
                        'Due Out': 'bg-pink-100 border-pink-500 text-pink-500',
                        'Checked Out': 'bg-orange-100 border-orange-500 text-orange-500',
                        'Pending': 'bg-yellow-100 border-yellow-500 text-yellow-500',
                        'Rejected': 'bg-red-100 border-red-500 text-red-500',
                    };


                    roomStatus = {
                        'Single' : 'text-orange-500',
                        'Double' : 'text-green-500',
                        'Suite' : 'bg-indigo-100 border-indigo-500 text-indigo-500',
                    };


                    // Add the new reservations
                    data.reservations.forEach((reservation) => {

                        var statusClass = statusColors[reservation.statut];

                        let reservationElement = `
                        <tr class="border-y border-transparent">
                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">${reservation.id}</td>
                            <td class="whitespace-nowrap  px-4 py-3 sm:px-5">
                                <div class="block w-9 h-9 overflow-hidden rounded-full shadow focus:outline-none">
                                    <img class="object-cover w-full h-full"
                                        src="${reservation.image ? reservation.image : 'img/bg-img/default-profile.jpeg'}"
                                        alt="Your avatar" />
                                </div>
                            </td>
                            <td
                                class="whitespace-nowrap  px-4 py-3 text-sm font-medium text-slate-700 dark:text-navy-100 sm:px-5">
                                ${reservation.name}
                            </td>
                            <td class="text-[13px] whitespace-nowrap  text-[#64748B] text-sm px-4 py-3 sm:px-5">
                                ${new Date(reservation.checkIn).toLocaleDateString('en-GB', { day: 'numeric', month: 'short' })}
                            </td>
                            <td class="text-[13px] whitespace-nowrap  text-[#64748B] text-sm px-4 py-3 sm:px-5">
                                ${new Date(reservation.checkOut).toLocaleDateString('en-GB', { day: 'numeric', month: 'short' })}
                            </td>
                            <td
                                class="whitespace-nowrap  px-4 py-3 text-sm font-medium text-slate-700 dark:text-navy-100 sm:px-5">
                                $${reservation.totalAmount}
                            </td>
                            <td
                                class="whitespace-nowrap  px-4 py-3 text-sm font-medium text-slate-700 dark:text-navy-100 sm:px-5">
                                $${reservation.amountPaid}
                            </td>
                            <td class="whitespace-nowrap  px-4 py-3 sm:px-5">
                                <div class="flex space-x-2">
                                    <div
                                        class="rounded-full border ${statusClass} text-[11px] px-[8px] py-[3px] font-semibold">
                                        ${reservation.statut}
                                    </div>

                                </div>
                            </td>
                            <td class="text-[13px] whitespace-nowrap  text-[#64748B] text-sm px-4 py-3 sm:px-5">
                                ${reservation.ref}
                            </td>
                            <td class="whitespace-nowrap  px-4 py-3 sm:px-5">
                                <button onclick="document.getElementById('showTr${reservation.id}').classList.toggle('hidden')"
                                    class="btn size-8 rounded-full p-0 text-[#64748B] text-sm hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                    <i id="icon"
                                        class="fas fa-chevron-down text-sm transition-transform"></i>
                                </button>
                            </td>
                        </tr>

                        <tr id="showTr${reservation.id}"
                            class="hidden border-y border-transparent border-b-slate-200 dark:border-b-navy-500">
                            <td colspan="100" class="p-0">
                                <div>
                                    <div class="px-4 pb-4 sm:px-5">
                                        <div class="is-scrollbar-hidden min-w-full overflow-x-auto">
                                            <table class="is-hoverable w-full text-left">
                                                <thead>
                                                    <tr
                                                        class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500">
                                                        <th
                                                            class="whitespace-nowrap  px-4 py-3 uppercase text-[13px] text-[#364A62] lg:px-5">
                                                            EMail
                                                        </th>
                                                        <th
                                                            class="whitespace-nowrap px-4 py-3 uppercase text-[13px] text-[#364A62] lg:px-5">
                                                            Phone
                                                        </th>
                                                        <th
                                                            class="whitespace-nowrap px-4 py-3 uppercase text-[13px] text-[#364A62] lg:px-5">
                                                            Room
                                                        </th>
                                                        <th
                                                            class="whitespace-nowrap  px-4 py-3 uppercase text-[13px] text-[#364A62] lg:px-5">
                                                            Room Type
                                                        </th>
                                                        <th
                                                            class="whitespace-nowrap  px-4 py-3 uppercase text-[13px] text-[#364A62] lg:px-5">
                                                            Price
                                                        </th>
                                                        <th
                                                            class="whitespace-nowrap  px-4 py-3 uppercase text-[13px] text-[#364A62] lg:px-5">
                                                            created at
                                                        </th>
                                                        <th
                                                            class="whitespace-nowrap  px-4 py-3 uppercase text-[13px] text-[#364A62] lg:px-5">
                                                            Actions
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="border-y border-transparent">
                                                        <td
                                                            class="whitespace-nowrap  text-[#364A62] text-sm px-4 py-3 sm:px-5">
                                                            ${reservation.email}
                                                        </td>
                                                        <td
                                                            class="whitespace-nowrap  text-[#64748B] text-sm px-4 py-3 sm:px-5">
                                                            ${reservation.phone ? reservation.phone : '000-000-0000'}
                                                        </td>
                                                        <td
                                                            class="whitespace-nowrap text-[#364A62] text-sm px-4 py-3 sm:px-5">
                                                            ${reservation.name }
                                                        </td>
                                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                            <div class="flex space-x-2">


                                                                <div
                                                                    class="rounded-full ${roomStatus[reservation.room_type]} text-xs px-2 py-1 font-semibold">
                                                                    ${reservation.room_type }
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                            <div class="flex space-x-2">
                                                                <div class=" px-[8px] py-[3px] font-semibold">
                                                                    ${ reservation.room_price }
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td
                                                            class="whitespace-nowrap text-[#364A62] text-sm px-4 py-3 sm:px-5">
                                                            ${new Date(reservation.created_at).toLocaleDateString('en-GB', { day: 'numeric', month: 'short', year: 'numeric'})}
                                                        </td>
                                                        <td>
                                                            <div class="flex justify-center items-center">
                                                                @if ($reservation->ref == 'guest')
                                                                    <div>
                                                                        <!-- Button trigger modal -->
                                                                        <a href="${reservation.detailsUrl}"
                                                                            class="modalButton text-gray-700 block px-4 py-2 text-sm"
                                                                            role="menuitem" tabindex="-1"
                                                                            data-target-modal="myModal${reservation.id}"
                                                                            id="modalButton">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 32 32" width="32"
                                                                                fill="#364A62" height="32">
                                                                                <path
                                                                                    d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z">
                                                                                </path>
                                                                            </svg>
                                                                        </a>

                                                                        <!-- Modal -->
                                                                        <div class="myModal fixed z-50 inset-0 flex items-center justify-center"
                                                                            aria-labelledby="modal-title"
                                                                            id="myModal${reservation.id}"
                                                                            style="display: none;" role="dialog"
                                                                            aria-modal="true">
                                                                            <div class="fixed w-full h-full  top-0 left-0 bg-gray-500 bg-opacity-75 transition-opacity"
                                                                                aria-hidden="true"></div>

                                                                            <!-- Modal content -->
                                                                            <div
                                                                                class="bg-white rounded-lg text-left shadow-xl transform transition-all sm:max-w-sm sm:w-full">
                                                                                <div class="pb-4 sm:py-6 sm:pb-4">
                                                                                    <div
                                                                                        class="flex items-center justify-between px-6">
                                                                                        <h3 class="text-lg leading-6 font-medium text-gray-900"
                                                                                            id="modal-title">
                                                                                            Edit Reservation statut
                                                                                        </h3>
                                                                                        <button type="button"
                                                                                            class="closeModal text-gray-400 bg-transparent  hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                                                                                            <svg class="w-3 h-3"
                                                                                                aria-hidden="true"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                fill="none"
                                                                                                viewBox="0 0 14 14">
                                                                                                <path
                                                                                                    stroke="currentColor"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    stroke-width="2"
                                                                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                                                            </svg>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="mt-2">
                                                                                        <form
                                                                                            enctype="multipart/form-data"
                                                                                            id="reservation-form-${reservation.id });"
                                                                                            action="${reservation.updateUrl}"
                                                                                            method="POST">
                                                                                            @csrf
                                                                                            @method('PUT')
                                                                                            <div
                                                                                                class="border-t px-6 py-4">
                                                                                                <div
                                                                                                    class="">
                                                                                                    <div
                                                                                                        class="pr-4">
                                                                                                        <label
                                                                                                            for="statut"
                                                                                                            class="text-[12px] font-semibold text-[#364a63]">
                                                                                                            Rservation
                                                                                                            Statut
                                                                                                        </label>
                                                                                                        <div class="relative w-full inline-block text-left mr-1"
                                                                                                            x-data="{ open: false }"
                                                                                                            @click.away="open = false">
                                                                                                            <div>
                                                                                                                <button
                                                                                                                    type="button"
                                                                                                                    class="inline-flex w-full justify-between items-center gap-x-1.5 rounded-[5px] text-[#526484] px-3 py-3 font-medium text-sm shadow-sm ring-1 ring-inset ring-gray-300"
                                                                                                                    id="menu-button"
                                                                                                                    aria-expanded="true"
                                                                                                                    aria-haspopup="true"
                                                                                                                    @click="open = !open">
                                                                                                                    <input
                                                                                                                        type="hidden"
                                                                                                                        name="statut"
                                                                                                                        value="${reservation.statut }"
                                                                                                                        id="inputValue${reservation.id}" />
                                                                                                                    <input
                                                                                                                        type="text"
                                                                                                                        class="outline-none text-[12px] pointer-events-none cursor-pointer border-0 overflow-hidden w-11/12"
                                                                                                                        name="statut"
                                                                                                                        disabled
                                                                                                                        value="${reservation.statut }"
                                                                                                                        id="filter-type${reservation.id }" />
                                                                                                                    <svg :class="{ 'rotate-180': open }"
                                                                                                                        class="-mr-1 h-4 w-4 text-gray-400"
                                                                                                                        viewBox="0 0 20 20"
                                                                                                                        fill="currentColor"
                                                                                                                        aria-hidden="true">
                                                                                                                        <path
                                                                                                                            fill-rule="evenodd"
                                                                                                                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                                                                                            clip-rule="evenodd" />
                                                                                                                    </svg>
                                                                                                                </button>
                                                                                                            </div>

                                                                                                            <div class="absolute right-0 z-50 mt-2 w-6/12 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                                                                                                role="menu"
                                                                                                                aria-orientation="vertical"
                                                                                                                aria-labelledby="menu-button"
                                                                                                                tabindex="-1"
                                                                                                                x-show="open">
                                                                                                                <div class="py-1"
                                                                                                                    role="none">
                                                                                                                    @foreach (App\Models\Reservation::STATUT_RADIO as $value => $label)
                                                                                                                        <button
                                                                                                                            type="button"
                                                                                                                            class="text-gray-70 block px-4 py-1.5 sm:py-2 text-[15px]"
                                                                                                                            role="menuitem"
                                                                                                                            tabindex="-1"
                                                                                                                            id="menu-item-0"
                                                                                                                            onclick="document.getElementById('filter-type${reservation.id }').value = '{{ $value }}'
                                                                                                                            document.getElementById('inputValue{{ $reservation->id }}').value = '{{ $value }}'"
                                                                                                                            @click="open = !open">{{ $label }}
                                                                                                                        </button>
                                                                                                                    @endforeach
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div
                                                                                                    class="mt-5  sm:mt-6">
                                                                                                    <button
                                                                                                        type="submit"
                                                                                                        class="inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm">
                                                                                                        Save
                                                                                                    </button>
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="closeModalButton mt-3 inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                                                                                        Close
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @else
                                                                    <!-- Button trigger modal -->
                                                                    <a href="${reservation.detailsUrl}"
                                                                        class="modalButton text-gray-700 block px-4 py-2 text-sm"
                                                                        role="menuitem" tabindex="-1"
                                                                        data-target-modal="myModal${reservation.id}"
                                                                        id="modalButton">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 32 32" width="32"
                                                                            fill="#364A62" height="32">
                                                                            <path
                                                                                d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z">
                                                                            </path>
                                                                        </svg>
                                                                    </a>
                                                                @endif

                                                                <!-- Delete Icon -->
                                                                <div x-data="{ open: false }">
                                                                    <!-- Delete Icon -->
                                                                    <button @click="open = true">
                                                                        <svg class="mt-1"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            fill="#E11D48" viewBox="0 0 32 32"
                                                                            width="32" height="32"
                                                                            stroke-width="1">
                                                                            <path d="M13 15h2v6h-2zM17 15h2v6h-2z">
                                                                            </path>
                                                                            <path
                                                                                d="M20 9c0-.6-.4-1-1-1h-6c-.6 0-1 .4-1 1v2H8v2h1v10c0 .6.4 1 1 1h12c.6 0 1-.4 1-1V13h1v-2h-4V9zm-6 1h4v1h-4v-1zm7 3v9H11v-9h10z">
                                                                            </path>
                                                                        </svg>
                                                                    </button>

                                                                    <!-- Modal -->
                                                                    <div x-show="open"
                                                                        class="fixed z-50 inset-0 flex items-center justify-center"
                                                                        aria-labelledby="modal-title"
                                                                        role="dialog" aria-modal="true">
                                                                        <div class="fixed w-full h-full  top-0 left-0 bg-gray-500 bg-opacity-75 transition-opacity"
                                                                            aria-hidden="true"></div>

                                                                        <!-- Modal content -->
                                                                        <div
                                                                            class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                                                            <div
                                                                                class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                                                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200"
                                                                                    aria-hidden="true"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    fill="none"
                                                                                    viewBox="0 0 20 20">
                                                                                    <path stroke="currentColor"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        stroke-width="2"
                                                                                        d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                                                </svg>
                                                                                <h3
                                                                                    class="mb-3 text-center text-lg font-normal text-gray-500 dark:text-gray-400">
                                                                                    Are you sure you want to delete
                                                                                    this Reservation?</h3>
                                                                            </div>
                                                                            <div
                                                                                class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                                                                <form
                                                                                    class="flex items-center justify-center w-full pb-3"
                                                                                    action="${reservation.deleteUrl}"
                                                                                    method="POST">
                                                                                    @csrf
                                                                                    @method('DELETE')

                                                                                    <button type="submit"
                                                                                        @click="open = false"
                                                                                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                                                        Yes, I'm sure
                                                                                    </button>
                                                                                    <button type="button"
                                                                                        @click="open = false"
                                                                                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No,
                                                                                        cancel
                                                                                    </button>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>`
                        reservationContainer.innerHTML += reservationElement;
                    });

                    document.getElementById("paginationContainer").innerHTML =
                        data.links;
                })

                .catch((error) => {
                    console.error("Error:", error);
                });
        });
    </script>
@endsection
