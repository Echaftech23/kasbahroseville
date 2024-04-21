@extends('layouts.dashboard.app')


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
    <!-- Booking Section Top -->
    <div class="section-margin-100-0">
        <div class="container mx-auto px-6">
            <div class="flex-grow">
                <div class="relative">
                    <div class="flex justify-between items-center flex-wrap">
                        <div class="block-head-content mpb">
                            <h3 class="block-title font-bold text-[24px] text-[#364A63]">
                                Facilities and Room Types List
                            </h3>
                            <div class="text-[#8094ae]">
                                <p class="text-sm pt-1">Here is our verious Facilities & Types.</p>
                            </div>
                        </div>

                        <div class="relative inline-block text-left mr-1" x-data="{ open: false }"
                            @click.away="open = false">
                            <div>
                                <button type="button" href="{{ '#' }}"
                                    class="inline-flex bg-indigo-600 w-full justify-center items-center gap-x-1.5 rounded-md text-white border-none px-3 pl-4 py-2 text-sm shadow-sm ring-1 ring-inset ring-gray-300"
                                    id="menu-button" aria-expanded="true" aria-haspopup="true" @click="open = !open">
                                    <img class="h-[18.5px] w-[18px] shrink-0" alt=""
                                        src="{{asset('img/dashborad/icon-201.svg')}}" />
                                </button>
                            </div>

                            <div class="absolute z-50  sm:right-0 mt-2 w-[125px] origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1"
                                x-show="open" style="display: none" x-clock>
                                <div class="py-1" role="none">
                                    <div x-data="{
                                        open: false,
                                        type: '',
                                        typeError: false,
                                        submitForm: function() {
                                            if (this.type) {
                                                let form = document.querySelector('#type-form');
                                                form.submit();
                                            } else { this.typeError = true; }
                                        }
                                    }">
                                        <!-- Button trigger modal -->
                                        <a href="#" @click="open = true"
                                            class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                                            id="menu-item-1">Add Type
                                        </a>

                                        <!-- Modal -->
                                        <div x-show="open" class="fixed z-30 inset-0 flex items-center justify-center"
                                            aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                            <div class="fixed w-full h-full  top-0 left-0 bg-gray-500 bg-opacity-75 transition-opacity"
                                                aria-hidden="true"></div>

                                            <!-- Modal content -->
                                            <div
                                                class="bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:max-w-sm sm:w-full">
                                                <div class="pt-5 pb-4 sm:py-6 sm:pb-4">
                                                    <div class="flex items-center justify-between px-6">
                                                        <h3 class="text-lg leading-6 font-medium text-gray-900"
                                                            id="modal-title">
                                                            Add New Type
                                                        </h3>
                                                        <button type="button" @click="open = false"
                                                            class=" text-gray-400 bg-transparent  hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                                                            <svg class="w-3 h-3" aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 14 14">
                                                                <path stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="2"
                                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="mt-2">
                                                        <form id="type-form" @submit.prevent="submitForm"
                                                            action="{{ route('admin.types.store') }}" method="POST">
                                                            @csrf
                                                            <div class="border-t px-6 py-4">
                                                                <div class="">
                                                                    <label for="type-name"
                                                                        class="block text-sm font-medium text-gray-700">
                                                                        Type</label>
                                                                    <input type="text" id="type-name" name="type"
                                                                        x-model="type" placeholder="type Name"
                                                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">

                                                                    <p x-show="typeError"
                                                                        class="text-red-500 text-xs mt-1">
                                                                        Type is required.</p>
                                                                </div>

                                                                <div class="mt-5  sm:mt-6">
                                                                    <button type="submit"
                                                                        class="inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm">
                                                                        Save
                                                                    </button>
                                                                    <button type="button" @click="open = false"
                                                                        class="mt-3 inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
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

                                    <div x-data="{
                                        open: false,
                                        name: '',
                                        nameError: false,
                                        submitForm: function() {
                                            if (this.name) {
                                                let form = document.querySelector('#facility-form');
                                                form.submit();
                                            } else { this.nameError = true; }
                                        }
                                    }">
                                        <!-- Button trigger modal -->
                                        <a href="#" @click="open = true"
                                            class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                                            id="menu-item-1">Add Facilities
                                        </a>

                                        <!-- Modal -->
                                        <div x-show="open" style="display: none" x-clock class="fixed z-30 inset-0 flex items-center justify-center"
                                            aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                            <div class="fixed w-full h-full  top-0 left-0 bg-gray-500 bg-opacity-75 transition-opacity"
                                                aria-hidden="true"></div>

                                            <!-- Modal content -->
                                            <div
                                                class="bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:max-w-sm sm:w-full">
                                                <div class="pb-4 sm:py-6 sm:pb-4">
                                                    <div class="flex items-center justify-between px-6">
                                                        <h3 class="text-lg leading-6 font-medium text-gray-900"
                                                            id="modal-title">
                                                            Add New Facility
                                                        </h3>
                                                        <button type="reset" @click="open = false"
                                                            class=" text-gray-400 bg-transparent  hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                                                            <svg class="w-3 h-3" aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 14 14">
                                                                <path stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="2"
                                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="mt-2">
                                                        <form id="facility-form" @submit.prevent="submitForm"
                                                            action="{{ route('admin.facilities.store') }}"
                                                            enctype="multipart/form-data" method="POST">
                                                            @csrf
                                                            <div class="border-t px-6 py-4">
                                                                <div class="">
                                                                    <label for="facility-name"
                                                                        class="block text-sm font-medium text-gray-700">
                                                                        Image</label>
                                                                    <input type="file" id="facility-image"
                                                                        name="facility-image"
                                                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">

                                                                    <label for="facility-name"
                                                                        class="block text-sm font-medium  mt-2 text-gray-700">
                                                                        Name</label>
                                                                    <input type="text" id="facility-name"
                                                                        name="name" x-model="name"
                                                                        placeholder="Facility Name"
                                                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                                    <p x-show="nameError"
                                                                        class="text-red-500 text-xs mt-1">
                                                                        Name is required.</p>
                                                                </div>

                                                                <div class="mt-5  sm:mt-6">
                                                                    <button type="submit"
                                                                        class="inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm">
                                                                        Save
                                                                    </button>
                                                                    <button type="reset" @click="open = false"
                                                                        class="mt-3 inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                                                        Reset
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
        <div class="flex gap-8 flex-wrap sm:flex-nowrap">
            <div class="rounded-t-[4px] w-full sm:w-1/2 border bg-white h-fit">
                <!-- Booking Section Details Top -->
                <div class="px-5 py-5 flex justify-between border-b-[0.7px]">
                    <div class="flex justify-between hidden-area w-full">
                        <div class="w-11/12">
                            <div class="relative mx-4 lg:mx-0">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg class="w-5 h-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </span>

                                <form action="{{ route('admin.facilities.search') }}" method="POST" id="searchForm">
                                    @csrf
                                    <input
                                        class="w-[220px] sm:w-[180px] lg:w-[240px] pl-10 pr-4 rounded-lg form-input bg-[#ecf1f9] outline-none text-sm py-2 focus:border-indigo-600"
                                        type="text" placeholder="Search" name="facilities-search"
                                        onchange="document.getElementById('searchForm').submit();" />

                                </form>
                            </div>
                        </div>

                        <div class="relative text-left" x-data="{ open: false }" @click.away="open = false">
                            <div>
                                <button type="button"
                                    class="inline-flex w-full justify-center items-center gap-x-1.5 px-3 py-2 font-medium text-[13px]"
                                    id="menu-button" aria-expanded="true" aria-haspopup="true" @click="open = !open">
                                    <img src="../img/dashborad/filter.svg" alt="" />
                                </button>
                            </div>

                            <div class="absolute right-0 z-10 mt-2 w-[130px] origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1"
                                x-show="open" x-cloak style="display: none;">
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
                                        Room facility
                                    </th>

                                    <th class="whitespace-nowrap px-4 py-3 uppercase text-[13px] text-[#364A62] lg:px-5">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody x-data="{ expanded: false }">
                                @foreach ($facilities as $facility)
                                    <tr class="border-y">
                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">{{ $facility->id }}</td>
                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">{{ $facility->name }}</td>
                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                            <div class="flex justify-center items-center">
                                                <!-- Edit Icon -->

                                                <div x-data="{
                                                    open: false,
                                                    name: '',
                                                    nameError: false,
                                                    submitForm: function() {
                                                        if (this.name) {
                                                            let form = document.querySelector('#facility-form-' + {{ $facility->id }});
                                                            form.submit();
                                                        } else {
                                                            this.nameError = true;
                                                        }
                                                    }
                                                }">
                                                    <!-- Button trigger modal -->
                                                    <a href="#"
                                                        @click="open = true, name = '{{ $facility->name }}'"
                                                        class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                                                        tabindex="-1" id="menu-item-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"
                                                            width="32" fill="#364A62" height="32">
                                                            <path
                                                                d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z">
                                                            </path>
                                                        </svg>
                                                    </a>

                                                    <!-- Modal -->
                                                    <div x-show="open"
                                                        class="fixed z-50 inset-0 flex items-center justify-center"
                                                        aria-labelledby="modal-title" role="dialog" aria-modal="true" x-cloak style="display: none;">
                                                        <div class="fixed w-full h-full  top-0 left-0 bg-gray-500 bg-opacity-75 transition-opacity"
                                                            aria-hidden="true"></div>

                                                        <!-- Modal content -->
                                                        <div
                                                            class="bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:max-w-sm sm:w-full">
                                                            <div class="pb-4 sm:py-6 sm:pb-4">
                                                                <div class="flex items-center justify-between px-6">
                                                                    <h3 class="text-lg leading-6 font-medium text-gray-900"
                                                                        id="modal-title">
                                                                        Edit Facility
                                                                    </h3>
                                                                    <button type="button" @click="open = false"
                                                                        class=" text-gray-400 bg-transparent  hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                                                                        <svg class="w-3 h-3" aria-hidden="true"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            fill="none" viewBox="0 0 14 14">
                                                                            <path stroke="currentColor"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="2"
                                                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <div class="mt-2">
                                                                    <form enctype="multipart/form-data"
                                                                        id="facility-form-{{ $facility->id }}"
                                                                        @submit.prevent="submitForm"
                                                                        action="{{ route('admin.facilities.update', $facility->id) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <div class="border-t px-6 py-4">
                                                                            <div class="">
                                                                                <label
                                                                                    for="facility-name-{{ $facility->id }}"
                                                                                    class="block text-sm font-medium text-gray-700">
                                                                                    Name
                                                                                </label>
                                                                                <input type="text"
                                                                                    id="facility-name-{{ $facility->id }}"
                                                                                    name="name" x-model="name"
                                                                                    placeholder="Facility Name"
                                                                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">

                                                                                <p x-show="nameError"
                                                                                    class="text-red-500 text-xs mt-1">
                                                                                    Name is required.</p>
                                                                                <label
                                                                                    for="facility-name-{{ $facility->id }}"
                                                                                    class="block text-sm mt-2 font-medium text-gray-700">
                                                                                    Name
                                                                                </label>

                                                                                <input type="file"
                                                                                    id="facility-name-{{ $facility->id }}"
                                                                                    name="facility-image"
                                                                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                                            </div>

                                                                            <div class="mt-5  sm:mt-6">
                                                                                <button type="submit"
                                                                                    class="inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm">
                                                                                    Save
                                                                                </button>
                                                                                <button type="button"
                                                                                    @click="open = false"
                                                                                    class="mt-3 inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
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

                                                <!-- Delete Icon -->
                                                <div x-data="{ open: false }">
                                                    <!-- Delete Icon -->
                                                    <button @click="open = true">
                                                        <svg class="mt-1" xmlns="http://www.w3.org/2000/svg"
                                                            fill="#E11D48" viewBox="0 0 32 32" width="32"
                                                            height="32" stroke-width="1">
                                                            <path d="M13 15h2v6h-2zM17 15h2v6h-2z"></path>
                                                            <path
                                                                d="M20 9c0-.6-.4-1-1-1h-6c-.6 0-1 .4-1 1v2H8v2h1v10c0 .6.4 1 1 1h12c.6 0 1-.4 1-1V13h1v-2h-4V9zm-6 1h4v1h-4v-1zm7 3v9H11v-9h10z">
                                                            </path>
                                                        </svg>
                                                    </button>

                                                    <!-- Modal -->
                                                    <div x-show="open"
                                                        class="fixed z-50 inset-0 flex items-center justify-center"
                                                        aria-labelledby="modal-title" role="dialog" aria-modal="true"
                                                        x-cloak style="display: none;">
                                                        <div class="fixed w-full h-full  top-0 left-0 bg-gray-500 bg-opacity-75 transition-opacity"
                                                            aria-hidden="true"></div>

                                                        <!-- Modal content -->
                                                        <div
                                                            class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                                            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200"
                                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                    fill="none" viewBox="0 0 20 20">
                                                                    <path stroke="currentColor" stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="2"
                                                                        d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                                </svg>
                                                                <h3
                                                                    class="mb-3 text-center text-lg font-normal text-gray-500 dark:text-gray-400">
                                                                    Are you sure you want to delete this Facitlity?</h3>
                                                            </div>
                                                            <div
                                                                class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                                                <form class="flex items-center justify-center w-full pb-3"
                                                                    action="{{ route('admin.facilities.destroy', $facility->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')

                                                                    <button type="submit" @click="open = false"
                                                                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                                        Yes, I'm sure
                                                                    </button>
                                                                    <button type="button" @click="open = false"
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
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @if ($facilities->hasPages())
                        <div class="py-4 px-4 flex items-center gap-x-1">
                            {{ $facilities->appends(['types_page' => request('types_page')])->links('vendor.pagination.custom') }}
                        </div>
                    @endif
                </div>
            </div>

            <div class="rounded-t-[4px] w-full sm:w-1/2 border bg-white h-fit">
                <!-- Booking Section Details Top -->
                <div class="px-5 py-5 flex justify-between border-b-[0.7px]">
                    <div class="flex justify-between hidden-area w-full">
                        <div class="w-11/12">
                            <div class="relative mx-4 lg:mx-0">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg class="w-5 h-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </span>

                                <form action="{{ route('admin.types.search') }}" method="POST" id="typesForm">
                                    @csrf
                                    <input
                                        class="w-[220px] sm:w-[180px] lg:w-[240px] pl-10 pr-4 rounded-lg form-input bg-[#ecf1f9] outline-none text-sm py-2 focus:border-indigo-600"
                                        type="text" placeholder="Search" name="types-search"
                                        onchange="document.getElementById('typesForm').submit();" />

                                </form>
                            </div>
                        </div>

                        <div class="relative text-left" x-data="{ open: false }" @click.away="open = false">
                            <div>
                                <button type="button"
                                    class="inline-flex w-full justify-center items-center gap-x-1.5 px-3 py-2 font-medium text-[13px]"
                                    id="menu-button" aria-expanded="true" aria-haspopup="true" @click="open = !open">
                                    <img src="../img/dashborad/filter.svg" alt="" />
                                </button>
                            </div>

                            <div class="absolute right-0 z-10 mt-2 w-[130px] origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1"
                                x-show="open" x-cloak style="display: none;">
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
                                        Room Type
                                    </th>

                                    <th class="whitespace-nowrap px-4 py-3 uppercase text-[13px] text-[#364A62] lg:px-5">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody x-data="{ expanded: false }">
                                @foreach ($types as $type)
                                    <tr class="border-y">
                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">{{ $type->id }}</td>
                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">{{ $type->type }}</td>
                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                            <div class="flex justify-center items-center">
                                                <!-- Edit Icon -->
                                                <div x-data="{
                                                    open: false,
                                                    type: '',
                                                    typeError: false,
                                                    submitForm: function() {
                                                        if (this.type) {
                                                            let form = document.querySelector('#type-form-' + {{ $type->id }});
                                                            form.submit();
                                                        } else { this.typeError = true; }
                                                    }
                                                }">
                                                    <!-- Button trigger modal -->
                                                    <a href="#" @click="open = true, type = '{{ $type->type }}'"
                                                        class="text-gray-700 block px-4 py-2 text-sm" role="menuitem"
                                                        tabindex="-1" id="menu-item-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"
                                                            width="32" fill="#364A62" height="32">
                                                            <path
                                                                d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z">
                                                            </path>
                                                        </svg>
                                                    </a>

                                                    <!-- Modal -->
                                                    <div x-show="open"
                                                        class="fixed z-50 inset-0 flex items-center justify-center"
                                                        aria-labelledby="modal-title" role="dialog" aria-modal="true"
                                                        x-cloak style="display: none;">
                                                        <div class="fixed w-full h-full  top-0 left-0 bg-gray-500 bg-opacity-75 transition-opacity"
                                                            aria-hidden="true"></div>

                                                        <!-- Modal content -->
                                                        <div
                                                            class="bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:max-w-sm sm:w-full">
                                                            <div class="pt-5 pb-4 sm:py-6 sm:pb-4">
                                                                <div class="flex items-center justify-between px-6">
                                                                    <h3 class="text-lg leading-6 font-medium text-gray-900"
                                                                        id="modal-title">
                                                                        Edit Type
                                                                    </h3>
                                                                    <button type="button" @click="open = false"
                                                                        class=" text-gray-400 bg-transparent  hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                                                                        <svg class="w-3 h-3" aria-hidden="true"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            fill="none" viewBox="0 0 14 14">
                                                                            <path stroke="currentColor"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="2"
                                                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <div class="mt-2">
                                                                    <form id="type-form-{{ $type->id }}"
                                                                        @submit.prevent="submitForm"
                                                                        action="{{ route('admin.types.update', $type->id) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <div class="border-t px-6 py-4">
                                                                            <div class="">
                                                                                <label for="type-name-{{ $type->id }}"
                                                                                    class="block text-sm font-medium text-gray-700">
                                                                                    Type</label>
                                                                                <input type="text"
                                                                                    id="type-name-{{ $type->id }}"
                                                                                    name="type" x-model="type"
                                                                                    placeholder="type Name"
                                                                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">

                                                                                <p x-show="typeError"
                                                                                    class="text-red-500 text-xs mt-1">
                                                                                    Type is required.</p>
                                                                            </div>

                                                                            <div class="mt-5  sm:mt-6">
                                                                                <button type="submit"
                                                                                    class="inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm">
                                                                                    Save
                                                                                </button>
                                                                                <button type="button"
                                                                                    @click="open = false"
                                                                                    class="mt-3 inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
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

                                                <div x-data="{ open: false }">
                                                    <!-- Delete Icon -->
                                                    <button @click="open = true">
                                                        <svg class="mt-1" xmlns="http://www.w3.org/2000/svg"
                                                            fill="#E11D48" viewBox="0 0 32 32" width="32"
                                                            height="32" stroke-width="1">
                                                            <path d="M13 15h2v6h-2zM17 15h2v6h-2z"></path>
                                                            <path
                                                                d="M20 9c0-.6-.4-1-1-1h-6c-.6 0-1 .4-1 1v2H8v2h1v10c0 .6.4 1 1 1h12c.6 0 1-.4 1-1V13h1v-2h-4V9zm-6 1h4v1h-4v-1zm7 3v9H11v-9h10z">
                                                            </path>
                                                        </svg>
                                                    </button>

                                                    <!-- Modal -->
                                                    <div x-show="open" x-cloak style="display: none;"
                                                        class="fixed z-50 inset-0 flex items-center justify-center"
                                                        aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                                        <div class="fixed w-full h-full  top-0 left-0 bg-gray-500 bg-opacity-75 transition-opacity"
                                                            aria-hidden="true"></div>

                                                        <!-- Modal content -->
                                                        <div
                                                            class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                                            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200"
                                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                    fill="none" viewBox="0 0 20 20">
                                                                    <path stroke="currentColor" stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="2"
                                                                        d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                                </svg>
                                                                <h3
                                                                    class="mb-3 text-center text-lg font-normal text-gray-500 dark:text-gray-400">
                                                                    Are you sure you want to delete this product?</h3>
                                                            </div>
                                                            <div
                                                                class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                                                <form class="flex items-center justify-center w-full pb-3"
                                                                    action="{{ route('admin.types.destroy', $type->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')

                                                                    <button type="submit" @click="open = false"
                                                                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                                        Yes, I'm sure
                                                                    </button>
                                                                    <button type="button" @click="open = false"
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
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @if ($types->hasPages())
                    <div class="py-4 px-4 flex items-center gap-x-1">
                        {{ $types->appends(['facilities_page' => request('facilities_page')])->links('vendor.pagination.custom') }}
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
