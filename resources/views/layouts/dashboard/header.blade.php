<!-- header -->
<header
    class="fixed top-0  z-50 headeer-full sm:w-full lg:w-[80%] flex items-center justify-between px-6 py-4 bg-white border-b-2 border-pink-600">
    <div class="flex items-center">
        <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round"></path>
            </svg>
        </button>

        <div class="relative mx-4 lg:mx-0">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                <svg class="w-5 h-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                    <path
                        d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </span>

            <input
                class="w-32 pl-10 pr-4 rounded-lg form-input sm:w-64 bg-[#ecf1f9] outline-none text-sm py-2 focus:border-indigo-600"
                type="text" placeholder="Search" />
        </div>
    </div>

    <div class="flex items-center">
        <div x-data="{ dropdownOpen: false }" class="relative" @click.away="dropdownOpen = false">
            <button class="flex items-center justify-center" @click="dropdownOpen = ! dropdownOpen">
                <div class="relative block w-8 h-8 overflow-hidden rounded-full shadow focus:outline-none mr-2">
                    <img class="object-cover w-full h-full"
                        src="{{ Auth::user()->getFirstMediaUrl('profile') ? Auth::user()->getFirstMediaUrl('profile') : asset('img/bg-img/default-profile.jpeg') }}"
                        alt="Your avatar" />
                </div>
                <span class="text-sm font-medium mobile md:block cursor-pointer">{{Auth::user()->name}}</span>
            </button>

            <div x-show="dropdownOpen" @click="dropdownOpen = ! dropdownOpen"
                class="absolute right-0 z-10 bg-white shadow-lg mt-2 w-[150px] border p-3 overflow-hidden rounded-md"
                style="display: none;">
                <a href="{{ url('/') }}" class="flex w-full items-center px-2 py-2 text-s">
                    <svg width="20" height="20" viewBox="0 0 25 25" fill="none"
                        class="mr-1 inline-flex fill-gray-500"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_15_1329)">
                            <path
                                d="M11.5349 14.04V23.04H7.55054V14.04H11.5349ZM18.1677 9.56348L10.1521 3.25879C10.074 3.19629 9.98413 3.14551 9.88257 3.10645C9.78101 3.06738 9.66772 3.04785 9.54272 3.04785C9.41772 3.04785 9.30444 3.06738 9.20288 3.10645C9.10132 3.14551 9.00366 3.19629 8.90991 3.25879H8.93335L0.917725 9.56348C0.80835 9.65723 0.718506 9.77051 0.648193 9.90332C0.577881 10.0361 0.542725 10.1807 0.542725 10.3369V20.251C0.542725 21.0166 0.812256 21.6729 1.35132 22.2197C1.89038 22.7666 2.54272 23.04 3.30835 23.04H5.53491V13.0322C5.53491 12.7666 5.63257 12.5361 5.82788 12.3408C6.02319 12.1455 6.26147 12.0479 6.54272 12.0479H12.5427C12.824 12.0479 13.0623 12.1455 13.2576 12.3408C13.4529 12.5361 13.5505 12.7666 13.5505 13.0322V23.04H15.7771C16.5427 23.04 17.1951 22.7666 17.7341 22.2197C18.2732 21.6729 18.5427 21.0166 18.5427 20.251V10.3369C18.5427 10.1807 18.5076 10.0361 18.4373 9.90332C18.3669 9.77051 18.2771 9.65723 18.1677 9.56348Z" />
                        </g>
                        <defs>
                            <clipPath id="clip0_15_1329">
                                <rect width="24" height="24" fill="white"
                                    transform="matrix(1 0 0 -1 0.542725 24.54)" />
                            </clipPath>
                        </defs>
                    </svg>

                    <span>Home</span>
                </a>
                <a href="{{ url('profile') }}" class="flex w-full items-center px-2 py-2 text-s">
                    <img src="{{ asset('img/dashborad/profile.svg') }}" class="w-5  mr-1 inline-flex" alt="">
                    <span>Profile</span>
                </a>
                <a href="{{ url('settings') }}" class="flex w-full items-center px-2 py-2 text-s">
                    <img src="{{ asset('img/dashborad/speen.svg') }}" class="w-5 mr-1 inline-flex" alt="">
                    <span>Settings</span>
                </a>
                <a href="{{ url('logout') }}" class="flex w-full items-center px-2 py-2 text-s">
                    <img src="{{ asset('img/dashborad/logout.svg') }}" class="w-5 mr-1 inline-flex" alt="">
                    <span>Logout</span>
                </a>
            </div>
        </div>

        <div x-data="{ notificationOpen: false }" class="relative">
            <button @click="notificationOpen = ! notificationOpen" class="flex mx-4 text-gray-600 focus:outline-none">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M15 17H20L18.5951 15.5951C18.2141 15.2141 18 14.6973 18 14.1585V11C18 8.38757 16.3304 6.16509 14 5.34142V5C14 3.89543 13.1046 3 12 3C10.8954 3 10 3.89543 10 5V5.34142C7.66962 6.16509 6 8.38757 6 11V14.1585C6 14.6973 5.78595 15.2141 5.40493 15.5951L4 17H9M15 17V18C15 19.6569 13.6569 21 12 21C10.3431 21 9 19.6569 9 18V17M15 17H9"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </button>

            <div x-show="notificationOpen" @click="notificationOpen = false" class="fixed inset-0 z-10 w-full h-full"
                style="display: none"></div>

            <div x-show="notificationOpen"
                class="absolute right-0 z-10 mt-2 overflow-hidden bg-white rounded-lg shadow-xl w-80 border-t-4 border-indigo-600"
                style="width: 20rem; display: none">
                <a href="#"
                    class="flex items-center px-4 py-3 -mx-2 text-gray-600 hover:text-white hover:bg-indigo-600">
                    <img class="object-cover w-8 h-8 mx-1 rounded-full"
                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=334&amp;q=80"
                        alt="avatar" />
                    <p class="mx-2 text-sm">
                        <span class="font-bold" href="#">Sara Salah</span>
                        replied on the
                        <span class="font-bold text-indigo-400" href="#">Upload Image</span>
                        artical . 2m
                    </p>
                </a>
                <a href="#"
                    class="flex items-center px-4 py-3 -mx-2 text-gray-600 hover:text-white hover:bg-indigo-600">
                    <img class="object-cover w-8 h-8 mx-1 rounded-full"
                        src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80"
                        alt="avatar" />
                    <p class="mx-2 text-sm">
                        <span class="font-bold" href="#">Slick Net</span>
                        start following you . 45m
                    </p>
                </a>
                <a href="#"
                    class="flex items-center px-4 py-3 -mx-2 text-gray-600 hover:text-white hover:bg-indigo-600">
                    <img class="object-cover w-8 h-8 mx-1 rounded-full"
                        src="https://images.unsplash.com/photo-1450297350677-623de575f31c?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=334&amp;q=80"
                        alt="avatar" />
                    <p class="mx-2 text-sm">
                        <span class="font-bold" href="#">Jane Doe</span>
                        Like Your reply on
                        <span class="font-bold text-indigo-400" href="#">Test with TDD</span>
                        artical . 1h
                    </p>
                </a>
            </div>
        </div>
    </div>
</header>
