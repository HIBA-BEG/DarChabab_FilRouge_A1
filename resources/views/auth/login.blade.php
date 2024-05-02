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
                <div class="mb-8 flex flex-col items-center gap-4 ">
                    <img src="{{ asset('img/white-logo.png') }}" width="250" alt="" srcset="" />
                    <div class="mt-5">
                        @if ($errors->any())
                            <div class="col-12">
                                @foreach ($errors->all() as $error)
                                    <div class="bg-red-100 border border-red-400 text-red-700 w-full px-4 py-3 lg:px-0 mx-auto rounded relative"
                                        role="alert">
                                        <strong class="font-bold">
                                            {{ $error }}
                                        </strong>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                        @if (session()->has('error'))
                            <div class="bg-red-100 border border-red-400 text-red-700 w-full px-4 py-3 lg:px-0 mx-auto rounded relative"
                                role="alert">
                                <strong class="font-bold">
                                    {{ session('error') }}
                                </strong>
                            </div>
                        @endif
                        @if (session()->has('success'))
                            <div class="bg-green-100 border border-green-400 text-green-700 w-full px-4 py-3 lg:px-0 mx-auto rounded relative"
                                role="alert">
                                <strong>
                                    {{ session('success') }}
                                </strong>
                            </div>
                        @endif
                    </div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        @method('POST')

                        <div class="mb-4 text-lg">
                            <input
                                class="rounded-3xl border-none bg-white px-6 py-2 text-center text-inherit placeholder-grey-500 shadow-lg outline-none backdrop-blur-md"
                                type="email" name="email" id="email" placeholder="Email" />
                        </div>

                        <div class="mb-4 text-lg">
                            <input
                                class="rounded-3xl border-none bg-white px-6 py-2 text-center text-inherit placeholder-grey-500 shadow-lg outline-none backdrop-blur-md"
                                type="password" name="password" id="password" placeholder="Password" />
                        </div>
                        <div class="text-right text-gray-400 hover:underline hover:text-gray-100">
                            <a href="{{ route('forgotPassword') }}">Mot de passe oublié?</a>
                        </div>
                        <div class="text-right text-gray-400 hover:underline hover:text-gray-100">
                            <a href="{{ route('register') }}">Créer un compte</a>
                        </div>
                        <div class="mt-8 flex justify-center text-lg">
                            <button type="submit"
                                class="rounded-3xl bg-white px-10 py-2 text-grey-600 shadow-xl hover:bg-black hover:text-white ">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
