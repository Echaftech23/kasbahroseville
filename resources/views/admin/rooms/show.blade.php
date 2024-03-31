@extends('layouts.dashboard.app')

@section('contents')
    <!-- Booking Section Top -->
    <div class="section-margin-100-0">
        <div class="container mx-auto px-6">
        <div class="flex-grow">
            <div class="relative">
            <div class="flex justify-between items-center flex-wrap">
                <div class="block-head-content mpb">
                <h3
                    class="block-title font-semibold text-[24px] text-[#364A63]"
                >
                    {{$room->name}} Room Details
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
            <div
            class="px-5 py-5 justify-between border-b-[0.7px] grid lg:grid-cols-3 md:grid-cols-2 gap-4"
            >
                <div class="mt-2 sm:col-span-2 lg:col-span-3">
                    <label class="block text-sm pb-2 font-semibold text-[#344357]"
                    >Upload Room Images</label
                    >
                    <div class="flex flex-col">
                    <div
                        id="drop-zone"
                        class="w-full h-40 border-2 @error('room-images') border-red-500 @enderror border-dashed border-gray-300 rounded-lg flex justify-center items-center text-gray-400 text-lg"
                        onclick="document.getElementById('file-input').click()"
                    >
                        <div class="flex items-center pl-1 overflow-x-scroll sm:overflow-hidden">
                            <div
                                id="selected-images"
                                class="flex flex-none"
                            >
                                @foreach($images as $image)
                                    <img src="{{ $image->getUrl() }}" class="w-32 mr-3 h-24 object-cover rounded-lg" alt="Room image">
                                @endforeach
                            </div>
                        </div>

                    </div>
                    </div>
                    @error('room-images')
                        <span class="text-sm mt-1 text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-semibold text-[#344357]"
                    >Room Name</label
                    >
                    <input
                    type="text"
                    name="name"
                    value="{{ $room->name }}"
                    placeholder="Enter Name"
                    disabled
                    class="w-full mt-1.5 text-[13px] outline-none rounded-[6px] border border-slate-300 bg-white px-3 py-2 hover:border-slate-400"
                    />
                </div>

                <div>
                    <label class="block text-sm font-semibold text-[#344357]"
                    >Room Type</label
                    >
                    <input
                    type="text"
                    name="name"
                    value="{{ $room->type->type }}"
                    placeholder="Enter Name"
                    disabled
                    class="w-full mt-1.5 text-[13px] outline-none rounded-[6px] border border-slate-300 bg-white px-3 py-2 hover:border-slate-400"
                    />
                </div>

                <div>
                    <label class="block text-sm font-semibold text-[#344357]"
                    >Room Statut</label
                    >
                    <input
                    type="text"
                    name="name"
                    value="{{ $room->statut }}"
                    disabled
                    class="w-full mt-1.5 text-[13px] outline-none rounded-[6px] border border-slate-300 bg-white px-3 py-2 hover:border-slate-400"
                    />
                </div>

                <div>
                    <label class="block text-sm font-semibold text-[#344357]"
                    >Room Priority</label
                    >
                    <input
                    type="text"
                    value="{{ $room->priority }}"
                    disabled
                    class="w-full mt-1.5 text-[13px] outline-none rounded-[6px] border border-slate-300 bg-white px-3 py-2 hover:border-slate-400"
                    />
                </div>

                <div>
                    <label class="block text-sm font-semibold text-[#344357]"
                    >Room Price</label
                    >
                    <input
                    type="text"
                    value="{{ $room->price }}"
                    disabled
                    class="w-full mt-1.5 text-[13px] outline-none rounded-[6px] border border-slate-300 bg-white px-3 py-2 hover:border-slate-400"
                    />
                </div>

                <div>
                    <label class="block text-sm font-semibold text-[#344357]"
                    >Room Capacity</label
                    >
                    <input
                    type="text"
                    name="name"
                    value="{{ $room->capacity }}"
                    disabled
                    class="w-full mt-1.5 text-[13px] outline-none rounded-[6px] border border-slate-300 bg-white px-3 py-2 hover:border-slate-400"
                    />
                </div>

                <div>
                    <label class="block text-sm font-semibold text-[#344357]">
                        Room Facilities
                    </label>

                    <div
                    class="relative w-full mt-1.5  inline-block"
                    x-data="{ open: false }"
                    @click.away="open = false"
                    >
                    <div>
                        <button
                        type="button"
                        class="inline-flex w-full justify-between items-center gap-x-1.5 rounded-[6px]  px-3 py-[9px] font-medium text-[13px] shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
                        id="menu-button"
                        aria-expanded="true"
                        aria-haspopup="true"
                        @click="open = !open"
                        >
                        Select Facilities
                        <svg
                            class="-mr-1 h-4 w-4"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            aria-hidden="true"
                        >
                            <path
                            fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                            clip-rule="evenodd"
                            />
                        </svg>
                        </button>
                    </div>

                    <div
                        class="absolute right-0 z-10 mt-2 w-full h-full  origin-top-right rounded-md bg-white shadow-lg  ring-black ring-opacity-5 focus:outline-none"
                        role="menu"
                        aria-orientation="vertical"
                        aria-labelledby="menu-button"
                        tabindex="-1"
                        x-show="open"
                    >
                        <div class="py-1" role="none">
                            <select multiple name="facility_id[]" class="block appearance-none w-full bg-white border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                @foreach($room->facilities as $facility)
                                    <option value="{{ $facility->id }}" selected>{{ $facility->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    </div>
                    @error('facility_id')
                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-semibold text-[#344357]"
                    >Room Size</label
                    >
                    <input
                    type="text"
                    value="{{ $room->size }}"
                    disabled
                    class="w-full mt-1.5 text-[13px] outline-none rounded-[6px] border border-slate-300 bg-white px-3 py-2 hover:border-slate-400"
                    />
                </div>

                <div class="w-260 w-320 sm:col-span-2 lg:col-span-3">
                    <a
                        href="{{ url()->previous() }}"
                        class="bg-[#466ff4] mt-4 px-3 py-2 text-white text-xs font-semibold rounded-[6px] hover:bg-[#466ff4] focus:outline-none focus:ring-2 focus:ring-gray-400"
                    >
                        Back
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
