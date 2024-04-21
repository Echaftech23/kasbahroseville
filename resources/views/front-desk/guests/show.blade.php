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
        <div class="container mx-auto px-6">
            <div class="flex-grow">
                <div class="relative">
                    <div class="flex justify-between items-center flex-wrap">
                        <div class="block-head-content mpb">
                            <h3 class="block-title font-bold text-[24px] text-[#364A63]">
                                Guest Details
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Booking Section Details -->
    <section class="container mx-auto px-6 section-margin-20">
        <div class="rounded-[4px] bg-white">
            <div class="shadow-xl pb-5 rounded-[4px] text-gray-900">
                <div class="rounded-t-[4px] h-32 overflow-hidden">
                    <img class="object-cover object-top w-full"
                        src='https://images.unsplash.com/photo-1549880338-65ddcdfd017b?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ'
                        alt='Mountain'>
                </div>
                <div class="mx-auto w-32 h-32 relative -mt-16 border-4 border-white rounded-full overflow-hidden">
                    <img class="object-cover object-center h-32"
                        src='{{ $guest->getFirstMediaUrl('profile') ? $guest->getFirstMediaUrl('profile') : asset('img/bg-img/default-profile.jpeg') }}'
                        alt='Woman looking front'>
                </div>
                <div class="text-center mt-2">
                    <h2 class="font-semibold">{{ $guest->name }}</h2>
                    <div class="flex justify-center space-x-2">
                        @php
                            $statusColors = [
                                'Active' => 'bg-green-100 border-green-500 text-green-500',
                                'Suspended' => 'bg-indigo-100 border-indigo-500 text-indigo-500',
                                'Inactive' => 'bg-orange-100 border-orange-500 text-orange-500',
                                'Banned' => 'bg-red-100 border-red-500 text-red-500',
                            ];
                        @endphp
                        <p class="text-gray-500">{{ $guest->phone ? $guest->phone : 'No phone Phone Number Added' }}</p>
                        <div
                            class="rounded-full border text-[11px] px-[8px] py-[3px] font-semibold
                                                {{ $statusColors[$guest->statut] }}">
                            {{ $guest->statut }}
                        </div>
                    </div>
                </div>
                <ul class="w-1/5 mx-auto py-4 mt-2 text-gray-700 flex items-center justify-around">
                    <li class="flex flex-col items-center justify-around">
                        <svg class="w-4 fill-current text-blue-900" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <path
                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                        </svg>
                        <div>2k</div>
                    </li>
                    <li class="flex flex-col items-center justify-between">
                        <svg class="w-4 fill-current text-blue-900" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <path
                                d="M7 8a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0 1c2.15 0 4.2.4 6.1 1.09L12 16h-1.25L10 20H4l-.75-4H2L.9 10.09A17.93 17.93 0 0 1 7 9zm8.31.17c1.32.18 2.59.48 3.8.92L18 16h-1.25L16 20h-3.96l.37-2h1.25l1.65-8.83zM13 0a4 4 0 1 1-1.33 7.76 5.96 5.96 0 0 0 0-7.52C12.1.1 12.53 0 13 0z" />
                        </svg>
                        <div>10k</div>
                    </li>
                    <li class="flex flex-col items-center justify-around">
                        <svg class="w-4 fill-current text-blue-900" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <path
                                d="M9 12H1v6a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-6h-8v2H9v-2zm0-1H0V5c0-1.1.9-2 2-2h4V2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1h4a2 2 0 0 1 2 2v6h-9V9H9v2zm3-8V2H8v1h4z" />
                        </svg>
                        <div>15</div>
                    </li>
                </ul>

                <div class="p-4 border-t flex justify-center mx-8 mt-2">
                    <div class="flex justify-between items-center">
                        <div x-data="{
                            open: false,
                            statut: '',
                            nameError: false,
                            submitForm: function() {
                                if (this.statut) {
                                    let form = document.querySelector('#guest-form-' + {{ $guest->id }});
                                    form.submit();
                                }
                            }
                        }">
                            <!-- Button trigger modal -->
                            <a @click="open = true, statut = '{{ $guest->statut }}'"
                                class="text-sm cursor-pointer text-center rounded-[8px] bg-blue-600 hover:shadow-lg font-semibold text-white px-4 py-2">
                                <span>Edit</span>
                            </a>

                            <!-- Modal -->
                            <div x-show="open" x-cloak style="display: none;"
                                class="fixed z-50 inset-0 flex items-center justify-center" aria-labelledby="modal-title"
                                role="dialog" aria-modal="true">
                                <div class="fixed w-full h-full  top-0 left-0 bg-gray-500 bg-opacity-75 transition-opacity"
                                    aria-hidden="true"></div>

                                <!-- Modal content -->
                                <div
                                    class="bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:max-w-sm sm:w-full">
                                    <div class="pb-4 sm:py-6 sm:pb-4">
                                        <div class="flex items-center justify-between px-6">
                                            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
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
                                            <form id="guest-form-{{ $guest->id }}" @submit.prevent="submitForm"
                                                action="{{ route('guests.update', $guest) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="border-t px-6 py-4">
                                                    <div class="">
                                                        <label for="amountPaid-{{ $guest->id }}"
                                                            class="block text-sm mt-3 font-medium text-gray-700">
                                                            Statut
                                                        </label>

                                                        <select name="statut"
                                                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                            @foreach (App\Models\User::STATUT_RADIO as $status)
                                                                <option value="{{ $status }}"
                                                                    {{ $guest->statut == $status ? 'selected' : '' }}>
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
                            class="text-sm text-center rounded-[8px] bg-red-600 hover:shadow-lg font-semibold mx-2 text-white px-4 py-2">Delete
                        </button>
                        <button
                            class="text-sm text-center rounded-[8px] bg-gray-900 hover:shadow-lg font-semibold text-white px-4 py-2">Send
                            Message
                        </button>
                    </div>
                </div>

                <main class="mx-8 my-10  rounded-md pb-12 sm:pb-24 px-[30px]">
                    <div class="flex items-center justify-between py-5 lg:py-6">
                        <div class="flex items-center space-x-1">
                            <h2
                                class="text-xl font-medium text-slate-700 line-clamp-1 dark:text-navy-50 lg:text-[23px]">
                                Recent Reservations
                            </h2>
                        </div>
                    </div>
                    <div class="single-room-area grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-3 lg:gap-6 wow fadeInUp"
                        data-wow-delay="100ms">
                        @forelse ($reservations as $reservation)
                            <div class="card border-2 rounded-lg shadow-lg bg-white">
                                <div class="p-2.5">
                                    <img src="{{ $reservation->room->getFirstMediaUrl('rooms') }}"
                                        class="h-48 w-full rounded-lg object-cover object-center" alt="image" />
                                </div>
                                <div class="flex grow flex-col px-4 pb-5 pt-1 text-center sm:px-5">
                                    <div class="mt-1">
                                        <a href="{{ route('reservations.show', $reservation->room->id) }}"
                                            class="text-lg font-medium text-gray-700 hover:text-blue-500 focus:text-blue-500 dark:text-gray-100 dark:hover:text-blue-300 dark:focus:text-blue-300">
                                            {{ $reservation->room->name }} Room
                                        </a>
                                    </div>
                                    <div class="my-2 flex items-center space-x-3 text-xs">
                                        <div class="h-px flex-1 bg-slate-200 dark:bg-navy-500"></div>
                                        <p class="shrink-0 font-bold text-sm text-pink-600">
                                            {{ date('F j, Y', strtotime($reservation->created_at)) }}</p>
                                        <div class="h-px flex-1 bg-slate-200 dark:bg-navy-500"></div>
                                    </div>
                                    <p class="my-2 grow text-left line-clamp-3">
                                        {{ $reservation->room->description }}
                                    </p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    @if($reservations->isEmpty())
                        <p colspan="9" class="text-center text-gray-400 py-4">No guests found</p>
                    @endif
                    <nav class="grid-cols-3 w-fit mt-50 bg-white rounded-lg"
                        data-wow-delay="1000ms" id="pagination-container">
                        @if ($reservations->hasPages())
                            {{ $reservations->links('vendor.pagination.custom') }}
                        @endif
                    </nav>
                </main>
            </div>
        </div>
    </section>
@endsection
