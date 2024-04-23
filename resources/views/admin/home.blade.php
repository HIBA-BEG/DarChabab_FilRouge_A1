<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.head')
</head>

<body class="bg-gradient-to-r from-purple-300 to-blue-200">
    <div class="relative">


        @include('layouts.sidebar')
        <!-- component -->
        <section class="main-content py-16">
            <div class="mx-auto px-6 max-w-6xl text-gray-500">
                <div class="text-center pb-12">
                    <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl font-heading text-gray-900">
                        Statistiques
                    </h1>
                </div>

            </div>

            <div class="container px-5">
                <div class="flex flex-wrap m-4 text-center">

                    {{-- 1 Associations non verifiés --}}
                    <div class="p-4 sm:w-1/2 lg:w-1/4 w-full hover:scale-105 duration-500">
                        <div class="items-center  justify-between p-4  rounded-br-3xl rounded-tl-3xl bg-white shadow-indigo-50 shadow-md">
                            <h2 class="text-gray-900 text-lg font-bold my-auto">Associations non verifiés:</h2>
                            <div class="flex justify-center container mx-auto p-4">

                                <div
                                    class="bg-gradient-to-tr from-indigo-600 to-indigo-300 w-32 h-32 rounded-full shadow-2xl shadow-indigo-400 border-white  border-dashed border-2  flex justify-center items-center ">
                                    <h1 class="text-white text-2xl">{{ $associationNOTverified }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- 2 Nombre des associations --}}
                    <div class="p-4 sm:w-1/2 lg:w-1/4 w-full hover:scale-105 duration-500">
                        <div class="items-center  justify-between p-4  rounded-br-3xl rounded-tl-3xl bg-white shadow-indigo-50 shadow-md">
                            <h2 class="text-gray-900 text-lg font-bold my-auto">Associations:</h2>
                            <div class="flex justify-center container mx-auto p-4">
                                <div
                                    class="bg-gradient-to-tr from-orange-600 to-orange-300 w-32 h-32 rounded-full shadow-2xl shadow-orange-400 border-white  border-dashed border-2  flex justify-center items-center ">
                                    <h1 class="text-white text-2xl">{{ $verifiedAssociationCount }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- 3 Clubs --}}
                    <div class="p-4 sm:w-1/2 lg:w-1/4 w-full hover:scale-105 duration-500">
                        <div class="items-center  justify-between p-4  rounded-br-3xl rounded-tl-3xl bg-white shadow-indigo-50 shadow-md">
                            <h2 class="text-gray-900 text-lg font-bold my-auto">Clubs:</h2>
                            <div class="flex justify-center container mx-auto p-4">

                                <div
                                    class="bg-gradient-to-tr from-cyan-600 to-cyan-300 w-32 h-32 rounded-full shadow-2xl shadow-cyan-400 border-white  border-dashed border-2  flex justify-center items-center ">
                                    <h1 class="text-white text-2xl">{{ $clubCount }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- 4 nbr Activités --}}
                    <div class="p-4 sm:w-1/2 lg:w-1/4 w-full hover:scale-105 duration-500">
                        <div class="items-center  justify-between p-4  rounded-br-3xl rounded-tl-3xl bg-white shadow-indigo-50 shadow-md">
                            <h2 class="text-gray-900 text-lg font-bold my-auto">Nombre totale des activités:</h2>
                            <div class="flex justify-center container mx-auto p-4">

                                <div
                                    class="bg-gradient-to-tr from-red-700 to-red-500 w-32 h-32 rounded-full shadow-2xl shadow-red-400 border-white  border-dashed border-2  flex justify-center items-center ">
                                    <h1 class="text-white text-2xl">{{ $totalActivites }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    
                    {{-- 5 nbr des membres de la direction --}}
                    <div class="p-4 sm:w-1/2 lg:w-1/4 w-full hover:scale-105 duration-500">
                        <div class="items-center  justify-between p-4  rounded-br-3xl rounded-tl-3xl bg-white shadow-yellow-50 shadow-md">
                            <h2 class="text-gray-900 text-lg font-bold my-auto">Membres de la Direction:</h2>
                            <div class="flex justify-center container mx-auto p-4">

                                <div
                                    class="bg-gradient-to-r from-yellow-400 to-yellow-300 w-32 h-32 rounded-full shadow-2xl shadow-yellow-400 border-white  border-dashed border-2  flex justify-center items-center ">
                                    <h1 class="text-white text-2xl">{{ $directionCount }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- 6 nbr des utilisateurs all roles except admin --}}
                    <div class="p-4 sm:w-1/2 lg:w-1/4 w-full hover:scale-105 duration-500">
                        <div class="items-center  justify-between p-4  rounded-br-3xl rounded-tl-3xl bg-white shadow-pink-50 shadow-md">
                            <h2 class="text-gray-900 text-lg font-bold my-auto">Totale des utilisateurs:</h2>
                            <div class="flex justify-center container mx-auto p-4">

                                <div
                                    class="bg-gradient-to-r from-pink-600 to-pink-400 w-32 h-32 rounded-full shadow-2xl shadow-pink-400 border-white  border-dashed border-2  flex justify-center items-center ">
                                    <h1 class="text-white text-2xl">{{ $userCount }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- 7 Most Active Association  --}}
                    <div class="p-4 sm:w-1/2 lg:w-1/4 w-full hover:scale-105 duration-500">
                        <div class="items-center justify-between p-4 rounded-br-3xl rounded-tl-3xl bg-white shadow-purple-50 shadow-md">
                            <h2 class="text-gray-900 text-lg font-bold my-auto">Most Active Association :</h2>
                            <div class="flex justify-center container mx-auto p-4">
                                <div class="bg-gradient-to-tr from-purple-600 to-purple-300 w-32 h-32 rounded-full shadow-2xl shadow-purple-400 border-white border-dashed border-2 flex justify-center items-center">
                                    @if ($mostActiveAssociation)
                                        <h1 class="text-white text-2xl">{{ $mostActiveAssociation->firstname }} {{ $mostActiveAssociation->lastname }}</h1>
                                    @else
                                        <p class="text-white">No active association found</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    {{-- 8 Nombre totale des articles publiés --}}
                    <div class="p-4 sm:w-1/2 lg:w-1/4 w-full hover:scale-105 duration-500">
                        <div class="items-center  justify-between p-4  rounded-br-3xl rounded-tl-3xl bg-white shadow-teal-50 shadow-md">
                            <h2 class="text-gray-900 text-lg font-bold my-auto">Nombre totale des articles publiés:</h2>
                            <div class="flex justify-center container mx-auto p-4">

                                <div
                                    class="bg-gradient-to-r from-teal-600 to-teal-400 w-32 h-32 rounded-full shadow-2xl shadow-teal-400 border-white  border-dashed border-2  flex justify-center items-center ">
                                    <h1 class="text-white text-2xl">{{ $totalArticlesPublished }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--9 Nombre des associations Nationale --}}
                    <div class="p-4 sm:w-1/2 lg:w-1/4 w-full hover:scale-105 duration-500">
                        <div class="items-center  justify-between p-4  rounded-br-3xl rounded-tl-3xl bg-white shadow-green-50 shadow-md">
                            <h2 class="text-gray-900 text-lg font-bold my-auto">Associations Nationale:</h2>
                            <div class="flex justify-center container mx-auto p-4 ">
                                <div
                                    class="bg-gradient-to-r from-green-600 to-green-400 w-32 h-32 rounded-full shadow-2xl shadow-green-400 border-white  border-dashed border-2  flex justify-center items-center ">
                                    <h1 class="text-white text-2xl">{{ $nationaleCount }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--10 Associations régionale --}}
                    <div class="p-4 sm:w-1/2 lg:w-1/4 w-full hover:scale-105 duration-500">
                        <div class="items-center  justify-between p-4  rounded-br-3xl rounded-tl-3xl bg-white shadow-sky-50 shadow-md">
                            <h2 class="text-gray-900 text-lg font-bold my-auto">Associations régionale:</h2>
                            <div class="flex justify-center container mx-auto p-4">

                                <div
                                    class="bg-gradient-to-tr from-sky-600 to-sky-300 w-32 h-32 rounded-full shadow-2xl shadow-sky-400 border-white  border-dashed border-2  flex justify-center items-center ">
                                    <h1 class="text-white text-2xl">{{ $regionaleCount }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--11 Associations locale--}}
                    <div class="p-4 sm:w-1/2 lg:w-1/4 w-full hover:scale-105 duration-500">
                        <div class="items-center  justify-between p-4  rounded-br-3xl rounded-tl-3xl bg-white shadow-amber-50 shadow-md">
                            <h2 class="text-gray-900 text-lg font-bold my-auto">Associations locale:</h2>
                            <div class="flex justify-center container mx-auto p-4">
                                <div class="bg-gradient-to-tr from-amber-600 to-amber-300 w-32 h-32 rounded-full shadow-2xl shadow-amber-400 border-white  border-dashed border-2  flex justify-center items-center ">
                                    <h1 class="text-white text-2xl">{{ $localeCount }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- 3 Clubs --}}
                    <div class="p-4 sm:w-1/2 lg:w-1/4 w-full hover:scale-105 duration-500">
                        <div class="items-center  justify-between p-4  rounded-br-3xl rounded-tl-3xl bg-white shadow-rose-50 shadow-md">
                            <h2 class="text-gray-900 text-lg font-bold my-auto">nombre des utilisateurs archivés:</h2>
                            <div class="flex justify-center container mx-auto p-4">
                                <div class="bg-gradient-to-tr from-rose-600 to-rose-300 w-32 h-32 rounded-full shadow-2xl shadow-rose-400 border-white  border-dashed border-2  flex justify-center items-center ">
                                    <h1 class="text-white text-2xl">{{ $archivedUserCount }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
