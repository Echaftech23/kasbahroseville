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
    <!-- Booking Section Top -->
    <div class="section-margin-100-0">
        <div class="container mx-auto sm:px-6">
            <div class="flex-grow">
                <div class="relative">
                    <section class="section-margin-100-0 w-full sm:w-8/12  mx-auto px-6 section-margin-20">
                        <div class="rounded-[4px] bg-white">
                            <div class="shadow-xl pb-5 rounded-[4px] text-gray-900">
                                <div class="rounded-t-[4px] h-32 overflow-hidden">
                                    <img class="object-cover object-top w-full"
                                        src='https://images.unsplash.com/photo-1549880338-65ddcdfd017b?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ'
                                        alt='Mountain'>
                                </div>
                                <div
                                    class="mx-auto w-28 h-28 relative -mt-16 border-4 border-white rounded-full overflow-hidden">
                                    <img class="object-cover object-center h-32"
                                        src='{{ $profile->getFirstMediaUrl('profile') ? $profile->getFirstMediaUrl('profile') : asset('img/bg-img/default-profile.jpeg') }}'
                                        alt='profile image'>
                                </div>
                                <div class="text-center mt-2">
                                    <div class="flex justify-center items-center space-x-2">
                                        <h2 class="font-semibold">{{ $profile->name }}</h2>
                                        <div
                                            class="rounded-full border text-[11px] px-[8px] py-[3px] font-semibold
                                                bg-red-100 border-red-500 text-red-500">
                                            {{ $profile->roles->first()->name }}
                                        </div>
                                    </div>
                                </div>

                                <div class="mx-6 mt-10">
                                    <div class="card-header">
                                        <h4 class="font-semibold">Personal info</h4>
                                    </div>
                                    <div class="mt-3 card-body">
                                        <div class="flex items-center mt-2">
                                            <div class="flex items-center mr-2">
                                                <svg class="w-5 h-5 -ml-1 text-black" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                                </svg>

                                                <label class="text-sm sm:text-[16px] font-semibold">Email :</label>
                                            </div>
                                            <span class="text-sm sm:text-[16px] text-gray-500">{{ $profile->email }}</span>
                                        </div>

                                        <div class="flex items-center mt-2">
                                            <div class="flex items-center mr-2">
                                                <svg class="w-5 h-5 -ml-1 text-black" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                                </svg>

                                                <label class="text-sm sm:text-[16px] font-semibold">Phone :</label>
                                            </div>
                                            <span class=" text-sm sm:text-[16px] text-gray-500">{{ $profile->phone }}</span>
                                        </div>

                                        <div class="flex items-center mt-2">
                                            <div class="flex items-center mr-2">
                                                <svg class="w-5 h-5 -ml-1 text-black" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                                </svg>

                                                <label class="text-sm sm:text-[16px] font-semibold">CreatedAT :</label>
                                            </div>
                                            <span class="text-sm sm:text-[16px] text-gray-500">{{ $profile->created_at }}</span>
                                        </div>

                                        <div class="flex justify-end mt-2">
                                            <div class="flex justify-between items-center">
                                                <div x-data="{
                                                    open: false,
                                                    statut: '',
                                                    nameError: false,
                                                    submitForm: function() {
                                                        if (this.statut) {
                                                            let form = document.querySelector('#guest-form-' + {{ $profile->id }});
                                                            form.submit();
                                                        }
                                                    }
                                                }">
                                                    <!-- Button trigger modal -->
                                                    <a @click="open = true, statut = '{{ $profile->statut }}'"
                                                        class="text-xs sm:text-sm cursor-pointer text-center rounded-[8px] bg-blue-600 hover:shadow-lg font-semibold text-white px-4 py-2">
                                                        <span>Edit</span>
                                                    </a>

                                                    <!-- Modal -->
                                                    <div x-show="open" x-cloak style="display: none;"
                                                        class="fixed z-50 inset-0 flex items-center justify-center"
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
                                                                        Edit guest
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
                                                                    <form id="guest-form-{{ $profile->id }}"
                                                                        @submit.prevent="submitForm"
                                                                        action="{{ route('front-desk.guests.updateProfile', $profile) }}"
                                                                        method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <div class="border-t px-6 py-4">
                                                                            <div class="">
                                                                                <label for="name-{{ $profile->name }}"
                                                                                    class="block text-sm mt-3 font-medium text-gray-700">
                                                                                    Name
                                                                                </label>
                                                                                <input type="text" id="name-{{ $profile->name }}" name="name"
                                                                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                                                                    value="{{ $profile->name }}">

                                                                                <label for="image"
                                                                                    class="block text-sm mt-3 font-medium text-gray-700">
                                                                                    Image Upload
                                                                                </label>

                                                                                <input type="file" id="image" name="user-image"
                                                                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">

                                                                                <label for="name-{{ $profile->name }}"
                                                                                    class="block text-sm mt-3 font-medium text-gray-700">
                                                                                    Phone
                                                                                </label>

                                                                                <input type="text" id="phone-{{ $profile->phone }}" name="phone"
                                                                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                                                                    value="{{ $profile->phone }}">

                                                                                <label for="amountPaid-{{ $profile->id }}"
                                                                                    class="block text-sm mt-3 font-medium text-gray-700">
                                                                                    Statut
                                                                                </label>

                                                                                <select name="statut"
                                                                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                                                    @foreach (App\Models\User::STATUT_RADIO as $status)
                                                                                        <option value="{{ $status }}"
                                                                                            {{ $profile->statut == $status ? 'selected' : '' }}>
                                                                                            {{ $status }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>


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

                                                <button
                                                    class="text-xs sm:text-sm text-center rounded-[8px] bg-red-600 hover:shadow-lg font-semibold mx-2 text-white px-4 py-2">Delete
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
