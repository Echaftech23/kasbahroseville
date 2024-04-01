@extends('layouts.dashboard.app')

@section('contents')
    <!-- Booking Section Top -->
    <div class="section-margin-100-0">
        <div class="container mx-auto px-6">
            <div class="flex-grow">
                <div class="relative">
                    <div class="flex justify-between items-center flex-wrap">
                        <div class="block-head-content mpb">
                            <h3 class="block-title font-bold text-[24px] text-[#364A63]">
                                Facilities and Room Type List
                            </h3>
                            <div class="text-[#8094ae]">
                                <p class="text-sm pt-1">Here is our verious rooms.</p>
                            </div>
                        </div>

                        <div class="relative inline-block text-left mr-1" x-data="{ open: false }" @click.away="open = false">
                            <div>
                                <button type="button" href="{{ '#' }}"
                                    class="inline-flex bg-indigo-600 w-full justify-center items-center gap-x-1.5 rounded-md text-white border-none px-3 pl-4 py-2 text-sm shadow-sm ring-1 ring-inset ring-gray-300"
                                    id="menu-button" aria-expanded="true" aria-haspopup="true" @click="open = !open">
                                    <img class="h-[18.5px] w-[18px] shrink-0" alt=""
                                        src="../img/dashborad/icon-201.svg" />
                                </button>
                            </div>

                            <div class="absolute z-10 right-0 mt-2 w-[125px] origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1"
                                x-show="open">
                                <div class="py-1" role="none">
                                    <a href="{{ route('types.create') }}" class="text-gray-700 block px-4 py-2 text-[13px]"
                                        role="menuitem" tabindex="-1" id="menu-item-0">Add Type</a>
                                    <a href="{{ route('facilities.create') }}"
                                        class="text-gray-700 block px-4 py-2 text-[13px]" role="menuitem" tabindex="-1"
                                        id="menu-item-1">Add Facilities</a>
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
            <div class="rounded-t-[4px] w-full sm:w-1/2 border bg-white">
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

                                <input
                                    class="w-[220px] sm:w-[180px] lg:w-[240px] pl-10 pr-4 rounded-lg form-input bg-[#ecf1f9] outline-none text-sm py-2 focus:border-indigo-600"
                                    type="text" placeholder="Search" />
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
                                        name
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
                                                <a href="{{ route('rooms.edit', $facility->id) }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"
                                                        width="32" fill="#364A62" height="32">
                                                        <path
                                                            d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z">
                                                        </path>
                                                    </svg>
                                                </a>
                                                <!-- Delete Icon -->
                                                <form action="{{ route('rooms.destroy', $facility->id) }}" method="POST"
                                                    onsubmit="return confirm('Are You sure You want To Delete This Room?')">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit">
                                                        <svg class="mt-1" xmlns="http://www.w3.org/2000/svg"
                                                            fill="#E11D48" viewBox="0 0 32 32" width="32"
                                                            height="32" stroke-width="1">
                                                            <path d="M13 15h2v6h-2zM17 15h2v6h-2z"></path>
                                                            <path
                                                                d="M20 9c0-.6-.4-1-1-1h-6c-.6 0-1 .4-1 1v2H8v2h1v10c0 .6.4 1 1 1h12c.6 0 1-.4 1-1V13h1v-2h-4V9zm-6 1h4v1h-4v-1zm7 3v9H11v-9h10z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </form>
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

            <div class="rounded-t-[4px] w-full sm:w-1/2 border bg-white">
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

                                <input
                                    class="w-[220px] sm:w-[180px] lg:w-[240px] pl-10 pr-4 rounded-lg form-input bg-[#ecf1f9] outline-none text-sm py-2 focus:border-indigo-600"
                                    type="text" placeholder="Search" />
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
                                        Type
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
                                                <a href="{{ route('rooms.edit', $type->id) }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"
                                                        width="32" fill="#364A62" height="32">
                                                        <path
                                                            d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z">
                                                        </path>
                                                    </svg>
                                                </a>
                                                <!-- Delete Icon -->
                                                <form action="{{ route('rooms.destroy', $type->id) }}" method="POST"
                                                    onsubmit="return confirm('Are You sure You want To Delete This Room?')">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit">
                                                        <svg class="mt-1" xmlns="http://www.w3.org/2000/svg"
                                                            fill="#E11D48" viewBox="0 0 32 32" width="32"
                                                            height="32" stroke-width="1">
                                                            <path d="M13 15h2v6h-2zM17 15h2v6h-2z"></path>
                                                            <path
                                                                d="M20 9c0-.6-.4-1-1-1h-6c-.6 0-1 .4-1 1v2H8v2h1v10c0 .6.4 1 1 1h12c.6 0 1-.4 1-1V13h1v-2h-4V9zm-6 1h4v1h-4v-1zm7 3v9H11v-9h10z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @if ($types->hasPages())
                        <div class="py-4 px-4 flex items-center gap-x-1">
                            {{ $types->appends(['facilities_page' => request('facilities_page')])->links('vendor.pagination.custom') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
