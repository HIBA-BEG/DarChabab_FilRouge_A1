<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.head')
</head>

<body class="bg-gradient-to-r from-purple-300 to-blue-200">
    <div class="relative">


        @include('layouts.sidebar')
        <!-- component -->
        <section class="main-content">
            <!-- component -->
                <div class="py-16">
                    <div class="mx-auto px-6 max-w-6xl text-gray-500">
                        <div class="text-center pb-12">
                            <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl font-heading text-gray-900">
                                Toutes les salles 
                            </h1>
                        </div>
                        @if ($salles->isEmpty())
                            <div
                                class="box w-full rounded-br-3xl rounded-tl-3xl flex flex-col justify-center p-12 bg-opacity-30 bg-white border border-opacity-25 backdrop-filter backdrop-blur-md transition-all duration-300">
                                <div class="text-center py-12">
                                    <p class="text-base font-bold text-gray-500">Aucune salle est disponible</p>
                                </div>
                            </div>
                        @else
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                @foreach ($salles as $salle)
                                    <div
                                        class="box w-full rounded-br-3xl rounded-tl-3xl flex flex-col justify-center p-12 bg-opacity-30 bg-white border border-opacity-25 backdrop-filter backdrop-blur-md transition-all duration-300">
                                        <div class="mb-8">
                                            <img class="w-full object-cover rounded-br-3xl rounded-tl-3xl h-48"
                                                src="{{ asset('img/' . $salle->profile_picture) }}"
                                                alt="photo de profile">
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">{{ $salle->name }}</p>
                                            <p class="text-base text-gray-600 font-normal">{{ $salle->description }}</p>
                                        </div>
                                        <div class="p-8 justify-center">
                                            <form action="{{ route('reserveSalle') }}" method="POST">
                                                @csrf
                                                @method('patch')
                                                {{-- <input type="hidden" name="confirmed" value="1"> --}}
                                                <button type="submit"
                                                    class="w-full rounded-br-3xl rounded-tl-3xl bg-gradient-to-r to-purple-400 from-blue-300 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-lightyellow-color focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                                    data-ripple-light="true">
                                                    Reserver
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        @endif
                    </div>
                </div>
        </section>
    </div>
</body>

</html>
