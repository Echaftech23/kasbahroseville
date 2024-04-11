<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Register</title>
    <!-- Custom fonts for this template-->
    <link href="{{ asset('admin_assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="{{ mix('resources/css/app.css') }}">
</head>

<body class="font-mono h-screen flex items-center justify-center bg-pink-500">
    <!-- Container -->
    <div class="container  mx-auto">
        <div class="flex items-center h-screen justify-center px-6">
            <!-- Row -->
            <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                <!-- Col -->
                <div class="w-full h-auto hidden lg:block lg:w-1/2 bg-cover rounded-l-lg"><img src="{{ asset("img/thumbnail/1686946853_DSC_6809.jpg") }}" class=" w-full h-full" alt=""></div>
                <!-- Col -->
                <div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none">
                    <h3 class="pt-4 text-2xl text-center">Welcome Back!</h3>
                    <form action="{{ route('login.action') }}" method="POST" class="px-8 py-5 bg-white rounded">
                        @csrf
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                                Email
                            </label>
                            <input name="email" value="{{old('email')}}" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('email') border-red-500 @enderror" id="email" type="email" placeholder="Email" />
                            @error('email')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                                Password
                            </label>
                            <input class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline @error('password') border-red-500 @enderror" id="password" type="password" name="password" placeholder="******************" />
                            @error('password')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <input class="mr-2 leading-tight" type="checkbox" id="checkbox_id" />
                            <label class="text-sm" for="checkbox_id">
                                Remember Me
                            </label>
                        </div>
                        <div class="mb-6 text-center">
                            <button class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline" type="submit">
                                Sign In
                            </button>
                        </div>
                        <hr class="mb-6 border-t" />
                        <div class="text-center">
                            <a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800" href="{{ route('register') }}">
                                Create an Account!
                            </a>
                        </div>
                        <div class="text-center">
                            <a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800" href="{{ route('login') }}">
                                Forgot Password?
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Success Alert --}}
    @if (Session::has('success'))
        <div id="dismiss-alert" x-data="{ show: true }" x-show="show" x-transition:leave="transition ease-in duration-2000"
            x-transition:leave-start="opacity-100 translate-x-0" x-transition:leave-end="opacity-0 translate-x-full"
            x-init="setTimeout(() => show = false, 4000)" class="fixed right-0 top-[24%] m-6 max-w-md rounded-lg p-4"
            style="z-index: 9999; background-color: #2ce476; color: #fff; border-color: #2ce476;" role="alert">
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
                            class="inline-flex rounded-lg p-1.5 hover:bg-[#2ce476] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-[#2ce476] focus:ring-[#2ce476]"
                            style="background-color: #2ce476; color: #fff;" @click="show = !open">
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

</body>

</html>
