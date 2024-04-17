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
                                Booking Reports List
                            </h3>
                            <div class="text-[#8094ae]">
                                <p class="text-sm pt-1">Here is our booking report.</p>
                            </div>
                        </div>

                        <div>
                            <div class="relative inline-block text-left mr-1" x-data="{ open: false }">
                                <div>
                                    <button type="button"
                                        class="inline-flex w-full justify-center items-center gap-x-1.5 rounded-md bg-white text-[#8094ae] px-3 py-2 text-sm shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
                                        id="menu-button" aria-expanded="true" aria-haspopup="true"
                                        @click="open = !open">
                                        <svg width="20" height="20" viewBox="0 0 25 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_15_1315)">
                                                <path
                                                    d="M20.5583 8.04004H0.542725C0.542725 7.21191 0.835693 6.50488 1.42163 5.91895C2.00757 5.33301 2.7146 5.04004 3.54272 5.04004H5.55835V4.03223C5.55835 3.7666 5.65601 3.53613 5.85132 3.34082C6.04663 3.14551 6.2771 3.04785 6.54272 3.04785C6.82397 3.04785 7.06226 3.14551 7.25757 3.34082C7.45288 3.53613 7.55054 3.7666 7.55054 4.03223V5.04004H13.5505V4.03223C13.5505 3.7666 13.6482 3.53613 13.8435 3.34082C14.0388 3.14551 14.2771 3.04785 14.5583 3.04785C14.824 3.04785 15.0544 3.14551 15.2498 3.34082C15.4451 3.53613 15.5427 3.7666 15.5427 4.03223V5.04004H17.5583C18.3865 5.04004 19.0935 5.33301 19.6794 5.91895C20.2654 6.50488 20.5583 7.21191 20.5583 8.04004ZM0.542725 10.0322H20.5583V19.0322C20.5583 19.8604 20.2654 20.5674 19.6794 21.1533C19.0935 21.7393 18.3865 22.0322 17.5583 22.0322H3.54272C2.7146 22.0322 2.00757 21.7393 1.42163 21.1533C0.835693 20.5674 0.542725 19.8604 0.542725 19.0322V10.0322ZM13.5505 14.04C13.5505 14.1025 13.5583 14.1689 13.574 14.2393C13.5896 14.3096 13.613 14.3682 13.6443 14.415H13.6208C13.6521 14.4775 13.6873 14.5361 13.7263 14.5908C13.7654 14.6455 13.8005 14.6963 13.8318 14.7432C13.8943 14.79 13.949 14.8291 13.9958 14.8604C14.0115 14.8916 14.0349 14.9111 14.0662 14.9189C14.0974 14.9268 14.1287 14.9385 14.1599 14.9541C14.1912 14.9697 14.2224 14.9814 14.2537 14.9893C14.2849 14.9971 14.3162 15.0088 14.3474 15.0244H14.3708C14.3865 15.0244 14.4099 15.0283 14.4412 15.0361C14.4724 15.0439 14.5115 15.0479 14.5583 15.0479C14.5896 15.0479 14.6208 15.0439 14.6521 15.0361C14.6833 15.0283 14.7224 15.0244 14.7693 15.0244H14.7458C14.7771 15.0088 14.8083 14.9971 14.8396 14.9893C14.8708 14.9814 14.9021 14.9697 14.9333 14.9541C14.9646 14.9385 14.9958 14.9268 15.0271 14.9189C15.0583 14.9111 15.0896 14.8916 15.1208 14.8604C15.1365 14.8447 15.156 14.8291 15.1794 14.8135C15.2029 14.7979 15.2302 14.7744 15.2615 14.7432C15.3083 14.6963 15.3474 14.6455 15.3787 14.5908C15.4099 14.5361 15.4412 14.4854 15.4724 14.4385V14.415C15.5037 14.3682 15.5232 14.3096 15.531 14.2393C15.5388 14.1689 15.5427 14.1025 15.5427 14.04C15.5427 13.9775 15.5388 13.9111 15.531 13.8408C15.5232 13.7705 15.5037 13.7119 15.4724 13.665C15.4412 13.6025 15.4099 13.5439 15.3787 13.4893C15.3474 13.4346 15.3083 13.3838 15.2615 13.3369C15.2302 13.3057 15.2029 13.2822 15.1794 13.2666C15.156 13.251 15.1365 13.2354 15.1208 13.2197C15.0896 13.1885 15.0583 13.1689 15.0271 13.1611C14.9958 13.1533 14.9646 13.1416 14.9333 13.126C14.9021 13.1104 14.8708 13.0986 14.8396 13.0908C14.8083 13.083 14.7771 13.0713 14.7458 13.0557C14.7146 13.0557 14.6833 13.0518 14.6521 13.0439C14.6208 13.0361 14.5896 13.0322 14.5583 13.0322C14.4177 13.0322 14.2849 13.0596 14.1599 13.1143C14.0349 13.1689 13.9255 13.2432 13.8318 13.3369C13.8005 13.3838 13.7654 13.4346 13.7263 13.4893C13.6873 13.5439 13.6599 13.5947 13.6443 13.6416L13.6208 13.665C13.6052 13.7119 13.5896 13.7705 13.574 13.8408C13.5583 13.9111 13.5505 13.9775 13.5505 14.04ZM9.54272 14.04C9.54272 14.04 9.54272 14.0439 9.54272 14.0518C9.54272 14.0596 9.54272 14.0635 9.54272 14.0635C9.54272 14.126 9.55054 14.1885 9.56616 14.251C9.58179 14.3135 9.60522 14.3682 9.63647 14.415C9.6521 14.4775 9.67944 14.5361 9.71851 14.5908C9.75757 14.6455 9.80054 14.6963 9.84741 14.7432C9.89429 14.79 9.94507 14.833 9.99976 14.8721C10.0544 14.9111 10.1052 14.9385 10.1521 14.9541H10.1755C10.2224 14.9854 10.281 15.0088 10.3513 15.0244C10.4216 15.04 10.488 15.0479 10.5505 15.0479C10.6912 15.0479 10.8201 15.0205 10.9373 14.9658C11.0544 14.9111 11.1599 14.8369 11.2537 14.7432C11.3005 14.6963 11.3396 14.6455 11.3708 14.5908C11.4021 14.5361 11.4333 14.4854 11.4646 14.4385V14.415C11.4958 14.3682 11.5193 14.3096 11.5349 14.2393C11.5505 14.1689 11.5583 14.1025 11.5583 14.04C11.5583 13.9775 11.5505 13.9111 11.5349 13.8408C11.5193 13.7705 11.4958 13.7119 11.4646 13.665C11.4021 13.4775 11.2849 13.3252 11.113 13.208C10.9412 13.0908 10.7537 13.0322 10.5505 13.0322C10.3474 13.0322 10.1599 13.0908 9.98804 13.208C9.81616 13.3252 9.69897 13.4775 9.63647 13.665C9.60522 13.7119 9.58179 13.7666 9.56616 13.8291C9.55054 13.8916 9.54272 13.9541 9.54272 14.0166C9.54272 14.0166 9.54272 14.0205 9.54272 14.0283C9.54272 14.0361 9.54272 14.04 9.54272 14.04ZM9.54272 18.0479C9.54272 18.0479 9.54272 18.0557 9.54272 18.0713C9.54272 18.1338 9.55054 18.1963 9.56616 18.2588C9.58179 18.3213 9.60522 18.376 9.63647 18.4229C9.6521 18.4854 9.67944 18.5439 9.71851 18.5986C9.75757 18.6533 9.80054 18.7041 9.84741 18.751C9.94116 18.8447 10.0466 18.915 10.1638 18.9619C10.281 19.0088 10.4099 19.0322 10.5505 19.0322C10.6912 19.0322 10.8201 19.0088 10.9373 18.9619C11.0544 18.915 11.1599 18.8447 11.2537 18.751C11.3005 18.7041 11.3435 18.6533 11.3826 18.5986C11.4216 18.5439 11.449 18.4854 11.4646 18.4229C11.4958 18.3604 11.5193 18.2979 11.5349 18.2354C11.5505 18.1729 11.5583 18.1104 11.5583 18.0479C11.5583 17.9697 11.5505 17.8994 11.5349 17.8369C11.5193 17.7744 11.4958 17.7119 11.4646 17.6494C11.449 17.5869 11.4216 17.5283 11.3826 17.4736C11.3435 17.4189 11.3005 17.3682 11.2537 17.3213C11.1755 17.2432 11.074 17.1768 10.949 17.1221C10.824 17.0674 10.6912 17.04 10.5505 17.04C10.488 17.04 10.4216 17.0479 10.3513 17.0635C10.281 17.0791 10.2224 17.1025 10.1755 17.1338V17.1104C10.113 17.1416 10.0544 17.1768 9.99976 17.2158C9.94507 17.2549 9.89429 17.29 9.84741 17.3213C9.80054 17.3682 9.76147 17.4189 9.73022 17.4736C9.69897 17.5283 9.66772 17.5869 9.63647 17.6494C9.60522 17.7119 9.58179 17.7744 9.56616 17.8369C9.55054 17.8994 9.54272 17.9619 9.54272 18.0244C9.54272 18.0244 9.54272 18.0322 9.54272 18.0479ZM5.55835 18.0479C5.55835 18.1729 5.58179 18.2979 5.62866 18.4229C5.67554 18.5479 5.74585 18.6572 5.8396 18.751C5.85522 18.7666 5.87866 18.7861 5.90991 18.8096C5.94116 18.833 5.9646 18.8525 5.98022 18.8682C6.01147 18.8838 6.04272 18.8994 6.07397 18.915C6.10522 18.9307 6.13647 18.9463 6.16772 18.9619C6.19897 18.9775 6.23022 18.9893 6.26147 18.9971C6.29272 19.0049 6.32397 19.0088 6.35522 19.0088C6.38647 19.0244 6.41772 19.0322 6.44897 19.0322C6.48022 19.0322 6.51147 19.0322 6.54272 19.0322C6.5896 19.0322 6.62866 19.0322 6.65991 19.0322C6.69116 19.0322 6.72241 19.0244 6.75366 19.0088H6.73022C6.7771 19.0088 6.81616 19.0049 6.84741 18.9971C6.87866 18.9893 6.90991 18.9775 6.94116 18.9619C6.97241 18.9463 6.99976 18.9307 7.02319 18.915C7.04663 18.8994 7.07397 18.8838 7.10522 18.8682C7.13647 18.8525 7.16382 18.833 7.18726 18.8096C7.21069 18.7861 7.23804 18.7666 7.26929 18.751C7.34741 18.6572 7.41382 18.5518 7.46851 18.4346C7.52319 18.3174 7.55054 18.1885 7.55054 18.0479C7.55054 17.9072 7.52319 17.7744 7.46851 17.6494C7.41382 17.5244 7.34741 17.415 7.26929 17.3213C7.23804 17.3057 7.21069 17.29 7.18726 17.2744C7.16382 17.2588 7.13647 17.2354 7.10522 17.2041C7.07397 17.1885 7.04663 17.1729 7.02319 17.1572C6.99976 17.1416 6.97241 17.126 6.94116 17.1104C6.90991 17.0947 6.87866 17.083 6.84741 17.0752C6.81616 17.0674 6.78491 17.0635 6.75366 17.0635H6.73022C6.7146 17.0479 6.68726 17.04 6.64819 17.04C6.60913 17.04 6.57397 17.04 6.54272 17.04C6.51147 17.04 6.48022 17.04 6.44897 17.04C6.41772 17.04 6.38647 17.0479 6.35522 17.0635C6.32397 17.0635 6.29272 17.0713 6.26147 17.0869C6.23022 17.1025 6.19897 17.1104 6.16772 17.1104C6.13647 17.126 6.10522 17.1416 6.07397 17.1572C6.04272 17.1729 6.01147 17.1885 5.98022 17.2041L5.8396 17.3213C5.74585 17.415 5.67554 17.5244 5.62866 17.6494C5.58179 17.7744 5.55835 17.9072 5.55835 18.0479Z"
                                                    fill="#8094AE" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_15_1315">
                                                    <rect width="20" height="20" fill="white"
                                                        transform="matrix(1 0 0 -1 0.542725 24.54)" />
                                                </clipPath>
                                            </defs>
                                        </svg>

                                        Last 30 days
                                        <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>

                                <div @click.away="open = false" class="absolute right-0 z-10 mt-2 w-40 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                    role="menu" aria-orientation="vertical" aria-labelledby="menu-button"
                                    tabindex="-1" x-show="open">
                                    <form action="{{ route('reports.filter') }}" method="POST">
                                        @csrf
                                        <button type="submit" name="from" value="7" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1">Last 7 Days</button>
                                        <button type="submit" name="from" value="30" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1">Last 30 Days</button>
                                        <button type="submit" name="from" value="180" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1">Last 6 Months</button>
                                        <button type="submit" name="from" value="365" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1">Last Year</button>
                                    </form>
                                </div>
                            </div>

                            <div class="inline-block">
                                <div>
                                    <button type="button"
                                        class="inline-flex bg-indigo-600 w-full justify-center items-center gap-x-1.5 rounded-md text-white border-none px-3 py-2 text-sm shadow-sm ring-1 ring-inset ring-gray-300"
                                        id="menu-button" aria-expanded="true" aria-haspopup="true"
                                        @click="open = !open">
                                        <svg width="20" height="20" viewBox="0 0 25 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_15_1341)">
                                                <path
                                                    d="M13.949 3.04785H3.54272C2.7146 3.04785 2.00757 3.34082 1.42163 3.92676C0.835693 4.5127 0.542725 5.21973 0.542725 6.04785V20.04C0.542725 20.8682 0.835693 21.5752 1.42163 22.1611C2.00757 22.7471 2.7146 23.04 3.54272 23.04H13.949C14.7771 23.04 15.4841 22.7471 16.0701 22.1611C16.656 21.5752 16.949 20.8682 16.949 20.04V6.04785C16.949 5.21973 16.656 4.5127 16.0701 3.92676C15.4841 3.34082 14.7771 3.04785 13.949 3.04785ZM14.9568 20.04C14.9568 20.3213 14.8591 20.5596 14.6638 20.7549C14.4685 20.9502 14.2302 21.0479 13.949 21.0479H3.54272C3.44897 21.0322 3.35522 21.0088 3.26147 20.9775C3.16772 20.9463 3.08179 20.9072 3.00366 20.8604L5.55835 18.1885L7.1521 19.8525C7.2146 19.9307 7.29272 19.9893 7.38647 20.0283C7.48022 20.0674 7.58179 20.0869 7.69116 20.0869C7.78491 20.0869 7.87476 20.0713 7.96069 20.04C8.04663 20.0088 8.12085 19.9619 8.18335 19.8994L11.9333 16.7119L11.7693 17.8369C11.7693 17.8525 11.7693 17.8682 11.7693 17.8838C11.7693 17.8994 11.7693 17.915 11.7693 17.9307C11.7693 18.1182 11.8318 18.2822 11.9568 18.4229C12.0818 18.5635 12.238 18.6494 12.4255 18.6807C12.4412 18.6807 12.4568 18.6807 12.4724 18.6807C12.488 18.6807 12.5037 18.6807 12.5193 18.6807C12.7068 18.6807 12.8708 18.6182 13.0115 18.4932C13.1521 18.3682 13.238 18.2119 13.2693 18.0244L13.6677 15.0244C13.6677 15.0088 13.6677 14.9932 13.6677 14.9775C13.6677 14.9619 13.6677 14.9463 13.6677 14.9307C13.6677 14.7432 13.6052 14.5791 13.4802 14.4385C13.3552 14.2979 13.2068 14.2119 13.0349 14.1807H13.0115L10.0115 13.7822C9.99585 13.7822 9.98022 13.7822 9.9646 13.7822C9.94897 13.7822 9.92554 13.7822 9.89429 13.7822C9.69116 13.7822 9.51538 13.8525 9.36694 13.9932C9.21851 14.1338 9.14429 14.3135 9.14429 14.5322C9.14429 14.7197 9.21069 14.8838 9.34351 15.0244C9.47632 15.165 9.63647 15.251 9.82397 15.2822L11.0896 15.4463L7.73804 18.3057L6.09741 16.5713C6.03491 16.5088 5.95679 16.458 5.86304 16.4189C5.76929 16.3799 5.66772 16.3604 5.55835 16.3604C5.44897 16.3604 5.34741 16.3799 5.25366 16.4189C5.15991 16.458 5.08179 16.5088 5.01929 16.5713L2.53491 19.1729V6.04785C2.53491 5.7666 2.63257 5.52832 2.82788 5.33301C3.02319 5.1377 3.26147 5.04004 3.54272 5.04004H13.949C14.2302 5.04004 14.4685 5.1377 14.6638 5.33301C14.8591 5.52832 14.9568 5.7666 14.9568 6.04785V20.04ZM12.7537 8.04004C12.7537 8.32129 12.656 8.55957 12.4607 8.75488C12.2654 8.9502 12.0271 9.04785 11.7458 9.04785H5.74585C5.4646 9.04785 5.22632 8.9502 5.03101 8.75488C4.83569 8.55957 4.73804 8.32129 4.73804 8.04004C4.73804 7.75879 4.83569 7.52051 5.03101 7.3252C5.22632 7.12988 5.4646 7.03223 5.74585 7.03223H11.7458C12.0271 7.03223 12.2654 7.12988 12.4607 7.3252C12.656 7.52051 12.7537 7.75879 12.7537 8.04004ZM8.74585 12.0479C8.74585 12.3135 8.64819 12.5439 8.45288 12.7393C8.25757 12.9346 8.01929 13.0322 7.73804 13.0322H5.74585C5.4646 13.0322 5.22632 12.9346 5.03101 12.7393C4.83569 12.5439 4.73804 12.3135 4.73804 12.0479C4.73804 11.7666 4.83569 11.5283 5.03101 11.333C5.22632 11.1377 5.4646 11.04 5.74585 11.04H7.73804C8.01929 11.04 8.25757 11.1377 8.45288 11.333C8.64819 11.5283 8.74585 11.7666 8.74585 12.0479Z"
                                                    fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_15_1341">
                                                    <rect width="20" height="20" fill="white"
                                                        transform="matrix(1 0 0 -1 0.542725 24.54)" />
                                                </clipPath>
                                            </defs>
                                        </svg>

                                        Import
                                    </button>
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
            <div class="px-5 py-5 flex justify-between items-center border-b-[0.7px]">
                <h3 class="text-[20px] text-[#364A63] font-semibold">All Reports</h3>

                <div class="relative inline-block text-left">
                    <div class="flex hidden-area">
                        <div class="flex items-center mr-4">
                            <div class="relative mx-4 lg:mx-0">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg class="w-5 h-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </span>

                                <form action="{{ route('rooms.search') }}" method="POST" id="roomForm">
                                    @csrf
                                    <input
                                        class="w-[220px] sm:w-[180px] lg:w-[240px] pl-10 pr-4 rounded-lg form-input bg-[#ecf1f9] outline-none text-sm py-2 focus:border-indigo-600"
                                        type="text" placeholder="Search" name="room-search"
                                        onchange="document.getElementById('roomForm').submit();" />

                                </form>
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
                                    Room ID
                                </th>
                                <th class="whitespace-nowrap px-4 py-3 text-[13px] text-[#364A62] lg:px-5">
                                    Room Name
                                </th>
                                <th class="whitespace-nowrap px-4 py-3 uppercase text-[13px] text-[#364A62] lg:px-5">
                                    Room Type
                                </th>
                                <th class="whitespace-nowrap px-4 py-3 uppercase text-[13px] text-[#364A62] lg:px-5">
                                    From
                                </th>
                                <th class="whitespace-nowrap px-4 py-3 uppercase text-[13px] text-[#364A62] lg:px-5">
                                    TO
                                </th>
                                <th class="whitespace-nowrap px-4 py-3 uppercase text-[13px] text-[#364A62] lg:px-5">
                                    total Amount
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
                                    <td
                                        class="whitespace-nowrap px-4 py-3 text-sm font-medium text-slate-700 dark:text-navy-100 sm:px-5">
                                        {{ $room->name }}
                                    </td>
                                    <td
                                        class="whitespace-nowrap px-4 py-3 text-sm font-medium text-slate-700 dark:text-navy-100 sm:px-5">
                                        {{ $room->type->type }}
                                    </td>
                                    <td
                                        class="whitespace-nowrap px-4 py-3 text-sm font-medium text-slate-700 dark:text-navy-100 sm:px-5">
                                        {{ $from->format('d M Y') }}
                                    </td>
                                    <td
                                        class="whitespace-nowrap px-4 py-3 text-sm font-medium text-slate-700 dark:text-navy-100 sm:px-5">
                                        {{ $to->format('d M Y') }}
                                    </td>
                                    <td
                                        class="whitespace-nowrap px-4 py-3 text-sm font-medium text-slate-700 dark:text-navy-100 sm:px-5">
                                        ${{ $room->totalAmount }}
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                        <div class="flex items-center">
                                            <div x-data="{
                                                open: false,
                                                name: '',
                                                nameError: false,
                                                submitForm: function() {
                                                    if (this.name) {
                                                        let form = document.querySelector('#payment-form-' + {{ $room->id }});
                                                        form.submit();
                                                    }
                                                }
                                            }">
                                                <!-- Button trigger modal -->
                                                <a @click="open = true, name = '{{ $room->name }}'"
                                                    class="badge mr-2 text-white space-x-2 p-2 px-3 text-[13px] rounded-sm font-semibold flex items-center focus:bg-[#6576FF] hover:bg-[#6576FF] hover:text-white focus:text-white bg-blue-600 dark:bg-navy-500 dark:text-navy-100">
                                                    <span>View</span>
                                                </a>

                                                <!-- Modal -->
                                                <div x-show="open"
                                                    class="fixed z-50 inset-0 flex items-center justify-center"
                                                    aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                                    <div class="fixed w-full h-full  top-0 left-0 bg-gray-500 bg-opacity-75 transition-opacity"
                                                        aria-hidden="true"></div>

                                                    <!-- Modal content -->
                                                    <div
                                                        class="bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all w-11/12 sm:max-w-3xl sm:w-full">
                                                        <div class="pb-4 sm:py-6 sm:pb-4">
                                                            <div class="flex items-center justify-between px-4 sm:px-4 sm:pl-8 mb-4">
                                                                <h3 class="text-lg leading-6 font-medium text-gray-900"
                                                                    id="modal-title">
                                                                    Details
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
                                                            <div class="w-11/12 mb-6 mx-auto">
                                                                <div class="min-w-full max-h-80 overflow-auto">
                                                                    <table class="w-full border-2 text-left">
                                                                        <thead>
                                                                            <tr class="bg-[#F8FAFC] border-b-[0.7px]">
                                                                                <th
                                                                                    class="whitespace-nowrap px-4 py-3 text-[13px] text-[#364A62] lg:px-5">
                                                                                    ID
                                                                                </th>
                                                                                <th
                                                                                    class="whitespace-nowrap px-4 py-3 text-[13px] text-[#364A62] lg:px-5">
                                                                                    Room Name
                                                                                </th>
                                                                                <th
                                                                                    class="whitespace-nowrap px-4 py-3 uppercase text-[13px] text-[#364A62] lg:px-5">
                                                                                    Payment
                                                                                </th>
                                                                                <th
                                                                                    class="whitespace-nowrap px-4 py-3 uppercase text-[13px] text-[#364A62] lg:px-5">
                                                                                    Amount
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody x-data="{ expanded: false }">
                                                                            @forelse ($room->reservations as $reservation)
                                                                                <tr class="border-y">
                                                                                    <td
                                                                                        class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                                                        {{ $reservation->id }}</td>
                                                                                    <td
                                                                                        class="whitespace-nowrap px-4 py-3 text-sm font-medium text-slate-700 dark:text-navy-100 sm:px-5">
                                                                                        {{ $reservation->payment->created_at->format('d M Y') }}
                                                                                    </td>
                                                                                    <td
                                                                                        class="whitespace-nowrap px-4 py-3 text-sm font-medium text-slate-700 dark:text-navy-100 sm:px-5">
                                                                                        {{ $reservation->payment->statut }}
                                                                                    </td>
                                                                                    <td
                                                                                        class="whitespace-nowrap px-4 py-3 text-sm font-medium text-slate-700 dark:text-navy-100 sm:px-5">
                                                                                        {{ $reservation->payment->amountPaid }}
                                                                                    </td>
                                                                                </tr>
                                                                            @empty
                                                                                <tr>
                                                                                    <td colspan="4"
                                                                                        class="text-center text-gray-400 py-4">No
                                                                                        Payment found</td>
                                                                                </tr>
                                                                            @endforelse
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9" class="text-center text-gray-400 py-4">No Report found</td>
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

    <script>
        document.querySelectorAll('.print-button').forEach(function(button) {
            button.addEventListener('click', function() {
                var invoiceUrl = this.dataset.url;
                var win = window.open(invoiceUrl, '_blank');
                win.onload = function() {
                    this.print();
                };
            });
        });
    </script>
@endsection
