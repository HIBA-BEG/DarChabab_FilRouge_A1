<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.head')
</head>

<body>
    <div class="relative bg-gradient-to-r from-purple-300 to-blue-200">


        @include('layouts.sidebar')
        <!-- component -->
        <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
            <div class="text-center pb-12">
                <h2 class="text-base font-bold text-indigo-600">
                    We have the best equipment
                </h2>
                <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl font-heading text-gray-900">
                    Check our awesome team members
                </h1>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($associations as $association)
                    {{-- @if ($user->banned)
                    
                @else
                    
                @endif --}}

                    {{-- <div
                    class="flex flex-col justify-around bg-white opacity-70 overflow-hidden shadow sm:rounded-lg h-[100px] p-4">

                    <div class="flex items-center ">
                        <span class="mt-2 text-xl font-semibold text-black whitespace-nowrap">{{ $user->firstname }}</span>
                        <span class="mt-2 text-xl font-semibold text-black whitespace-nowrap">{{ $user->email }}</span>
                        <span class="mt-2 text-xl font-semibold text-black whitespace-nowrap">{{ $user->lastname }}</span>
                    </div>
                
                </div> --}}

                    {{-- <div class="w-full bg-white rounded-lg p-12 flex flex-col justify-center items-center"> --}}
                    {{-- <div class="w-full bg-gray-900 transition duration-1000 ease-in-out rounded-br-3xl rounded-tl-3xl flex flex-col justify-center p-12"> --}}
                        <div class="box w-full rounded-br-3xl rounded-tl-3xl flex flex-col justify-center p-12 bg-opacity-30 bg-white border border-opacity-25 backdrop-filter backdrop-blur-md  transition-all duration-300">
                        <div class="mb-8">
                            <img class="w-full object-cover rounded-br-3xl rounded-tl-3xl h-48"
                                src="{{ asset('img/' . $association->profile_picture) }}" alt="photo de profile">
                        </div>
                        <div class="text-center">
                            <p class="text-xl text-gray-700 font-bold mb-2">{{ $association->firstname }}</p>
                            <p class="text-base text-gray-400 font-normal">{{ $association->type }}</p>
                            <p class="text-base text-gray-400 font-normal">{{ $association->email }}</p>
                        </div>

                        <p class="text-base text-black font-normal">{{ $association->origine }}</p>
                        <p class="text-base text-black font-normal">{{ $association->domaine }}</p>
                        <p class="text-base text-black font-normal">{{ $association->description }}</p>

                        <div class="mt-5">
                            <p class="text-base text-black font-normal">{{ $association->president }}</p>
                            <p class="text-base text-black font-normal">{{ $association->cinPresident }}</p>

                        </div>
                        <div class="mt-5">
                            <p class="text-base text-black font-normal">{{ $association->vicePresident }}</p>
                            <p class="text-base text-black font-normal">{{ $association->cinVice }}</p>

                        </div>
                        <div class="mt-5">
                            <p class="text-base text-black font-normal">{{ $association->secretaire }}</p>
                            <p class="text-base text-black font-normal">{{ $association->cinSecretaire }}</p>

                        </div>
                        <div class="mt-5">
                            <p class="text-base text-black font-normal">{{ $association->president }}</p>
                            <p class="text-base text-black font-normal">{{ $association->cinPresident }}</p>

                        </div>



                    </div>
                @endforeach

            </div>
        </section>
    </div>
</body>

</html>
