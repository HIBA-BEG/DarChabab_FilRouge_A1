<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.head')
</head>

<body class="bg-gradient-to-r from-purple-300 to-blue-200">
    <div class="relative">

        @include('layouts.sidebar')
        <!-- component -->
        <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
            <div class="text-center pb-12">
                <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl font-heading text-gray-900">
                    Toutes les Associations
                </h1>
            </div>
            @if ($associations->isEmpty())
                <div
                    class="box w-full rounded-br-3xl rounded-tl-3xl flex flex-col justify-center p-12 bg-opacity-30 bg-white border border-opacity-25 backdrop-filter backdrop-blur-md transition-all duration-300">
                    <div class="text-center py-12">
                        <p class="text-base font-bold text-gray-500">Aucune Association n'est archivée</p>
                    </div>
                </div>
            @else
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($associations as $association)
                        <div
                            class="box w-full rounded-br-3xl rounded-tl-3xl flex flex-col justify-center p-12 bg-opacity-30 bg-white border border-opacity-25 backdrop-filter backdrop-blur-md  transition-all duration-300">
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

                            <div class="flex justify-end h-fit">
                                <form action="{{ route('unArchive.association', ['userId' => $association->id]) }}"
                                    method="post">
                                    @csrf
                                    @method('PUT')
                                    <div title="archived">
                                        <button type="submit">
                                            unArchive
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </section>
    </div>
</body>

</html>
