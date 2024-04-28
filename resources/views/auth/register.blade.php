<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.head')
</head>

<body>
    <div class="flex h-screen w-full items-center justify-center bg-gray-900 bg-cover bg-no-repeat"
        style="background-image:url({{ asset('img/darchabab.jpg') }})">
        <div class="rounded-xl bg-gray-800 bg-opacity-50 px-16 py-10 shadow-lg backdrop-blur-md max-sm:px-8">
            <div class="flex text-black">
                <div class="mb-8 flex flex-col items-center gap-4">
                    <img src="{{ asset('img/white-logo.png') }}" width="250" alt="" srcset="" />
                    @if (session('error'))
                        <div role="alert">

                            <div class="bg-red-100 border border-red-400 text-red-700 w-full px-4 py-3 lg:px-0 mx-auto rounded relative"
                                role="alert">
                                <strong class="font-bold">{{ session('error') }}</strong>
                            </div>
                        </div>
                    @endif
{{-- 
                    <div class="mt-5">
                        @if ($errors->any())
                            <div class="col-12">
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger">{{ $error }}</div>
                                @endforeach
                            </div>
                        @endif
                        @if (session()->has('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        @if (session()->has('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                    </div> --}}

                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                        @method('POST')

                        <div class="mb-4 text-lg">
                            <input type="firstname" name="firstname" id="firstname" placeholder="First Name"
                                class="w-full rounded-3xl border-none bg-white px-6 py-2 text-center text-inherit placeholder-grey-500 shadow-lg outline-none backdrop-blur-md"
                                @error('firstname') border-red-500 @enderror">
                            @error('firstname')
                                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4 text-lg ">
                            <input type="lastname" name="lastname" id="lastname" placeholder="Last Name"
                                class="w-full rounded-3xl border-none bg-white px-6 py-2 text-center text-inherit placeholder-grey-500 shadow-lg outline-none backdrop-blur-md"
                                @error('lastname') border-red-500 @enderror">
                            @error('lastname')
                                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4 text-lg">
                            <input type="file" name="profile_picture" id="profile_picture"
                                placeholder="profile picture"
                                class="bg-white file:cursor-pointer cursor-pointer file:border-0 file:rounded-none file:mr-4 file:bg-gray-300 file:hover:bg-gray-200 file:text-white 
                                w-full rounded-3xl border-none bg-white file:px-6 file:py-2 text-center text-grey-600 outline-none"
                                @error('profile_picture') border-red-500 @enderror">
                            @error('profile_picture')
                                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- <div class="mb-4 text-lg">
                            <label for="profile_picture"
                            class=" w-full rounded-3xl text-center text-inherit shadow-lg 
                            flex bg-white hover:bg-gray-700 hover:text-white text-grey-500 px-5 py-3 outline-none rounded cursor-pointer mx-auto font-[sans-serif]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 mr-2 fill-grey-500 hover:fill-white inline"
                                viewBox="0 0 32 32">
                                <path
                                    d="M23.75 11.044a7.99 7.99 0 0 0-15.5-.009A8 8 0 0 0 9 27h3a1 1 0 0 0 0-2H9a6 6 0 0 1-.035-12 1.038 1.038 0 0 0 1.1-.854 5.991 5.991 0 0 1 11.862 0A1.08 1.08 0 0 0 23 13a6 6 0 0 1 0 12h-3a1 1 0 0 0 0 2h3a8 8 0 0 0 .75-15.956z"
                                    data-original="#000000" />
                                    <path
                                    d="M20.293 19.707a1 1 0 0 0 1.414-1.414l-5-5a1 1 0 0 0-1.414 0l-5 5a1 1 0 0 0 1.414 1.414L15 16.414V29a1 1 0 0 0 2 0V16.414z"
                                    data-original="#000000" />
                                </svg>
                            Photo de profile
                            <input type="file"  name="profile_picture" id='profile_picture' class="hidden" @error('profile_picture') border-red-500 @enderror />
                            @error('profile_picture')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                            @enderror
                        </label>
                    </div> --}}
                        <div class="mb-4 text-lg">
                            <input type="email" name="email" id="email" placeholder="Email"
                                class="w-full rounded-3xl border-none bg-white px-6 py-2 text-center text-inherit placeholder-grey-500 shadow-lg outline-none backdrop-blur-md"
                                @error('email') border-red-500 @enderror">
                            @error('email')
                                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4 text-lg">
                            <input type="tel" name="phoneNumber" id="phoneNumber" placeholder="phoneNumber"
                                class="w-full rounded-3xl border-none bg-white px-6 py-2 text-center text-inherit placeholder-grey-500 shadow-lg outline-none backdrop-blur-md"
                                @error('phoneNumber') border-red-500 @enderror">
                            @error('phoneNumber')
                                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4 text-lg">
                            <select name="role" id="role"
                                class="w-full rounded-3xl border-none bg-white px-6 py-2 text-center text-inherit placeholder-grey-500 shadow-lg outline-none backdrop-blur-md"
                                @error('role') border-red-500 @enderror">
                                <option value="Association">Association</option>
                                <option value="Club">Club</option>
                            </select>
                            @error('role')
                                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4 text-lg">
                            <input type="password" name="password" id="password" placeholder="Password"
                                class="w-full rounded-3xl border-none bg-white px-6 py-2 text-center text-inherit placeholder-grey-500 shadow-lg outline-none backdrop-blur-md"
                                @error('password') border-red-500 @enderror">
                            @error('password')
                                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4 text-lg">
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                placeholder="password_confirmation"
                                class="w-full rounded-3xl border-none bg-white px-6 py-2 text-center text-inherit placeholder-grey-500 shadow-lg outline-none backdrop-blur-md"
                                @error('password_confirmation') border-red-500 @enderror">
                            @error('password_confirmation')
                                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- <div class="text-right text-gray-400 hover:underline hover:text-gray-100">
                            <a href="#">Forgot your password?</a>
                        </div> --}}
                        <div class="flex justify-between text-gray-400 hover:underline hover:text-gray-100">
                            <a href="{{ route('login') }}">You already have an account? log in</a>
                        </div>
                        <div class="px-4 pb-2 pt-4">
                            <button type="submit"
                                class="rounded-3xl bg-white px-10 py-2 text-grey-600 shadow-xl hover:bg-black hover:text-white ">
                                Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>
</body>

</html>
