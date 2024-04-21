@extends('layouts.dashboard.app')

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
                            <h3 class="block-title font-semibold text-[24px] text-[#364A63]">
                                Add Reservation
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Booking Section Details -->
    <section class="container mx-auto px-6 section-margin-20">
        <div class="rounded-t-[4px] border bg-white">
            <!-- Booking create Section -->
            <form method="POST" action="{{ auth()->user()->hasRole('admin') ? route('admin.reservations.store') : route('front-desk.reservations.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="px-5 py-5 justify-between border-b-[0.7px] grid lg:grid-cols-3 md:grid-cols-2 gap-4">

                    <div>
                        <label class="block text-sm font-semibold text-[#344357]">Guest Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter Name"
                            class="w-full mt-1.5 text-[13px] outline-none rounded-[6px] border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 @error('name') border-red-500 @enderror" />
                        @error('name')
                            <span class="text-xs mt-1 text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-[#344357]">Guest Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="Enter Email"
                            class="w-full mt-1.5 text-[13px] outline-none rounded-[6px] border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 @error('name') border-red-500 @enderror" />
                        @error('email')
                            <span class="text-xs mt-1 text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-[#344357]">Guest Phone</label>
                        <input type="text" name="phone" value="{{ old('phone') }}" placeholder="Enter Phone"
                            class="w-full mt-1.5 text-[13px] outline-none rounded-[6px] border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 @error('name') border-red-500 @enderror" />
                        @error('phone')
                            <span class="text-xs mt-1 text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-[#344357]">Guest Photo</label>
                        <div class="flex justify-between items-center mt-1.5 text-gray shadow-sm rounded-[6px] cursor-pointer focus:outline-none focus:ring-2 focus:ring-gray-400"
                            onclick="document.getElementById('fileInput').click()">
                            <div class="flex px-2 py-2 w-10/12 border border-r-0 rounded-l-[6px] bg-[#EEF5FF] items-center">
                                <input type="file" id="fileInput" name="user-image" class="hidden w-full"
                                    onchange="updateFileName()" />
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 24" stroke="#9CA3AF"
                                    class="h-5 w-6 mr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                </svg>
                                <span
                                    class="text-[13px] #9CA3AF text-[#9CA3AF] max-w-52 w-full overflow-hidden whitespace-nowrap text-overflow-ellipsis"
                                    id="fileSpan">Choose File</span>
                            </div>
                            <p class="px-4 rounded-r-[6px] font-semibold py-[9px] text-[13px] bg-[#466ff4] text-white">
                                Browse
                            </p>
                        </div>

                        <script>
                            function updateFileName() {
                                var input = document.getElementById('fileInput');
                                var span = document.getElementById('fileSpan');

                                var fileName = input.value.split('\\').pop();
                                span.textContent = fileName ? fileName : 'Choose File';
                            }
                        </script>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-[#344357]">Room Name</label>
                        <div class="relative mt-1.5">
                            <select name="room_id" onchange="updateTotalAmount(this.value)"
                                class="outline-none text-[13px] appearance-none w-full rounded-[6px] rounded-t-0 border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent">
                                @foreach ($rooms as $room)
                                    <option value="{{ $room->id }}" data-price="{{ $room->price }}"
                                        {{ old('room_id') == $room->id ? 'selected' : '' }}>
                                        {{ $room->name }}</option>
                                @endforeach
                            </select>
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </div>
                        </div>
                        @error('room_id')
                            <span class="text-xs mt-1 text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-[#344357]">Total Adults</label>
                        <div class="relative mt-1.5">
                            @php
                                $total_adults = range(1, 4);
                            @endphp

                            <select name="total_adults"
                                class="outline-none text-[13px] appearance-none w-full rounded-[6px] rounded-t-0 border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent">
                                @foreach ($total_adults as $adult)
                                    <option value="{{ $adult }}"
                                        {{ old('total_adults') == $adult ? 'selected' : '' }}>
                                        {{ str_pad($adult, 2, '0', STR_PAD_LEFT) }}</option>
                                @endforeach
                            </select>
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </div>
                        </div>
                        @error('total_adults')
                            <span class="text-xs mt-1 text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-[#344357]">Total Children</label>
                        <div class="relative mt-1.5">
                            @php
                                $total_children = range(0, 4);
                            @endphp

                            <select name="total_children"
                                class="outline-none text-[13px] appearance-none w-full rounded-[6px] rounded-t-0 border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent">
                                @foreach ($total_children as $children)
                                    <option value="{{ $children }}"
                                        {{ old('total_children') == $children ? 'selected' : '' }}>
                                        {{ str_pad($children, 2, '0', STR_PAD_LEFT) }}</option>
                                @endforeach
                            </select>
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </div>
                        </div>
                        @error('total_children')
                            <span class="text-xs mt-1 text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-[#344357]">Reservation Statut</label>
                        <div class="relative mt-1.5">
                            <select name="statut"
                                class="outline-none text-[13px] appearance-none w-full rounded-[6px] rounded-t-0 border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent">
                                @foreach (App\Models\Reservation::STATUT_RADIO as $value => $label)
                                    <option value="{{ $value }}"
                                        {{ old('statut', $reservation->statut ?? '') == $value ? 'selected' : '' }}>
                                        {{ $label }}
                                    </option>
                                @endforeach
                            </select>
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </div>
                        </div>
                        @error('statut')
                            <span class="text-xs mt-1 text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-[#344357]">Check In</label>
                        <input type="date" name="checkIn" value="{{ old('checkIn') }}"
                            class="w-full mt-1.5 text-[13px] outline-none rounded-[6px] border border-slate-300 @error('checkIn') border-red-500 @enderror bg-white px-3 py-2 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent" />
                        @error('checkIn')
                            <span class="text-xs mt-1 text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-[#344357]">Check Out</label>
                        <input type="date" name="checkOut" value="{{ old('checkOut') }}"
                            class="w-full mt-1.5 text-[13px] outline-none rounded-[6px] border border-slate-300 @error('checkOut') border-red-500 @enderror bg-white px-3 py-2 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent" />
                        @error('checkOut')
                            <span class="text-xs mt-1 text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-[#344357]">Total Amount</label>
                        <input type="number" class="hidden" name="totalAmount" id="totalAmount" value="{{ $room->first()->price }}"/>
                        <input type="number" name="totalAmount" disabled value="{{ $room->first()->price }}"
                            placeholder="Enter Name"
                            class="w-full mt-1.5 text-[13px] outline-none rounded-[6px] border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 @error('name') border-red-500 @enderror" />
                        @error('totalAmount')
                            <span class="text-xs mt-1 text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-[#344357]">Amount Paid</label>
                        <input type="number" name="amountPaid" value="{{ old('amountPaid') }}"
                            placeholder="Enter Amount Paid"
                            class="w-full mt-1.5 text-[13px] outline-none rounded-[6px] border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 @error('amountPaid') border-red-500 @enderror" />
                        @error('amountPaid')
                            <span class="text-xs mt-1 text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="w-260 w-320 sm:col-span-2 lg:col-span-3">
                        <button type="submit"
                            class="bg-[#466ff4] mt-4 px-3 py-2 text-white text-xs font-semibold rounded-[6px] hover:bg-[#466ff4] focus:outline-none focus:ring-2 focus:ring-gray-400">
                            Submit
                        </button>

                        <a href="{{ url()->previous() }}"
                            class="bg-[#DB2777] mt-4 px-3 py-2 text-white text-xs font-semibold rounded-[6px] hover:bg-[#e03a8c] focus:outline-none focus:ring-2 focus:ring-gray-400">
                            Back
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
