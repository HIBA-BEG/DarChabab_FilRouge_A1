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
            <section>
                <div class="py-16">
                    <div class="mx-auto px-6 max-w-6xl text-gray-500">
                        <div class="text-center pb-12">
                            <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl font-heading text-gray-900">
                                Mes Activités
                            </h1>
                        </div>
                        @if ($activites->isEmpty())
                            <div
                                class="box w-full rounded-br-3xl rounded-tl-3xl flex flex-col justify-center p-12 bg-opacity-30 bg-white border border-opacity-25 backdrop-filter backdrop-blur-md transition-all duration-300">
                                <div class="text-center py-12">
                                    <p class="text-base font-bold text-gray-500">Aucune activité n'est disponible</p>
                                </div>
                            </div>
                        @else
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                @foreach ($activites as $activite)
                                    <div class="box w-full rounded-br-3xl rounded-tl-3xl flex flex-col justify-center p-12 bg-opacity-30 bg-white border border-opacity-25 backdrop-filter backdrop-blur-md transition-all duration-300">
                                        <div class="text-center">
                                            <p class="text-xl text-gray-700 font-bold mb-2">{{ $activite->name }}</p>
                                            <p class="text-base text-gray-600 font-normal">{{ $activite->description }}</p>
                                            <p class="text-base text-gray-600 font-normal">{{ $activite->created_at }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </section>
        </section>
    </div>
</body>

</html>
