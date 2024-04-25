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
            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');

                function getBackgroundColor(statut) {
                    var colors = {
                        'Confirmed': '#3B82F6',
                        'Checked In': '#22C55E',
                        'Checked Out': '#FFA500',
                        'Due Out': '#9A3412'
                    };

                    return colors[statut];
                }

                var events = @json($events).map(function(event) {

                    event.backgroundColor = getBackgroundColor(event.statut);
                    event.borderColor = getBackgroundColor(event.statut);
                    return event;
                });

                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    themeSystem: 'tailwind',
                    events: events,

                    eventClick: function(info) {
                        window.location.href = info.event.url;
                },
                });

                calendar.render();
            });
        </script>

        <style>
            .fc-view-harness {
                max-height: 500px;
                height: fit-content;
            }

            .fc-button-group button {
                background-color: #4F46E5;
                border: none;
            }
            .fc-today-button[disabled] {
                background-color: #4F46E5;
            }
        </style>
    @endpush
    <div class="section-margin-100-0">
        <div class="container mx-auto px-6">
            <div class="flex-grow">
                <div class="relative">
                    <div class="flex justify-between items-center flex-wrap">
                        <div class="block-head-content mpb">
                            <h3 class="block-title font-bold text-[24px] text-[#364A63]">
                                Front Desk
                            </h3>
                            <div class="text-[#8094ae]">
                                <p class="text-sm pt-1">You have total {{ $reservationsCount }} booking's.</p>
                            </div>
                        </div>
                        <div>

                            <div class="inline-block">
                                <div>
                                    <a href="{{ route('admin.reservations.create') }}" type="button"
                                        class="inline-flex bg-indigo-600 w-full justify-center items-center gap-x-1.5 rounded-md text-white border-none px-3 py-2 text-sm shadow-sm ring-1 ring-inset ring-gray-300">
                                        <img class="h-[18.5px] w-[18px] shrink-0" alt=""
                                            src="../img/dashborad/icon-201.svg" />
                                        Add
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
        <div class=" bg-white p-6">
            <div id="calendar"></div>
            <div>
                <div class="flex items-center sm:-mt-6 flex-wrap">
                    <div
                        class="badge space-x-2.5 text-[13px] flex mr-8 items-center font-semibold
                        text-blue-500">
                        <div class="size-2 rounded-full bg-current"></div>
                        <span>Confirmed</span>
                    </div>
                    <div
                        class="badge space-x-2.5 text-[13px] flex mr-8 items-center font-semibold
                        text-green-500">
                        <div class="size-2 rounded-full bg-current"></div>
                        <span>Checked In</span>
                    </div>
                    <div
                        class="badge space-x-2.5 text-[13px] mr-8 flex items-center font-semibold
                        text-[#FFA500]">
                        <div class="size-2 rounded-full bg-current"></div>
                        <span>Checked Out</span>
                    </div>
                    <div
                        class="badge space-x-2.5 text-[13px] mr-8 flex items-center font-semibold
                        text-orange-800">
                        <div class="size-2 rounded-full bg-current"></div>
                        <span>Due Out</span>
                    </div>
                </div>
            </div>
        </div>
        @push('scripts')
            <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
        @endpush
    </section>
@endsection
