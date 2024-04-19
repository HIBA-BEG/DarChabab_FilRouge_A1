<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.head')
</head>

<body class="bg-gradient-to-r from-purple-300 to-blue-200 min-h-screen">
    <div class="relative ">

        @include('layouts.sidebar')

        <!-- component -->
            <section class=" my-40">
                <div>

                    <div class="bg-opacity-30 bg-white border border-opacity-25 backdrop-filter backdrop-blur-md  transition-all duration-300 relative shadow rounded-br-3xl rounded-tl-3xl w-full md:w-5/6  lg:w-4/6 xl:w-3/6 mx-auto">
                        <div class="flex justify-center">
                            <img src="{{ asset('img/' . $association[0]->profile_picture) }}" alt=""
                                class="rounded-full mx-auto absolute -top-20 w-32 h-32 shadow-md border-4 border-white transition duration-200 transform hover:scale-110">
                        </div>

                        <div class="mt-16">
                            <h1 class="font-bold text-center text-3xl text-gray-900">{{ $association[0]->firstname }}</h1>
                            <p class="text-center text-sm text-gray-400 font-medium">Type: {{ $association[0]->type }}</p>
                            <p class="text-center text-sm text-gray-400 font-medium">Origine: {{ $association[0]->origine }}</p>
                            <p class="text-center text-sm text-gray-400 font-medium">Domaine: {{ $association[0]->domaine }}</p>
                            <p>
                                <span>

                                </span>
                            </p>
                            <div class="my-5 px-6">
                                <a href="#"
                                    class="text-gray-200 block rounded-lg text-center font-medium leading-6 px-6 py-3 bg-gray-900 hover:bg-black hover:text-white">Connect
                                    with <span class="font-bold">@pantazisoft</span></a>
                            </div>
                            <div class="flex justify-between items-center my-5 px-6">
                                <a href=""
                                    class="text-gray-500 hover:text-gray-900 hover:bg-gray-100 rounded transition duration-150 ease-in font-medium text-sm text-center w-full py-3">Facebook</a>
                                <a href=""
                                    class="text-gray-500 hover:text-gray-900 hover:bg-gray-100 rounded transition duration-150 ease-in font-medium text-sm text-center w-full py-3">Twitter</a>
                                <a href=""
                                    class="text-gray-500 hover:text-gray-900 hover:bg-gray-100 rounded transition duration-150 ease-in font-medium text-sm text-center w-full py-3">Instagram</a>
                                <a href=""
                                    class="text-gray-500 hover:text-gray-900 hover:bg-gray-100 rounded transition duration-150 ease-in font-medium text-sm text-center w-full py-3">Email</a>
                            </div>

                            <div class="w-full">
                                <h3 class="font-medium text-gray-900 text-left px-6">Recent activites</h3>
                                <div class="mt-5 w-full flex flex-col items-center overflow-hidden text-sm">
                                    <div class="flex items-center justify-between border-t border-gray-100">
                                        <a href="#" class="flex from-purple-300 to-blue-200 py-4 pl-3 pr-3 text-gray-600 transition duration-150 hover:bg-gradient-to-r">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="h-5 w-5"><path d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" /></svg>
                                            {{ $association[0]->president }}
                                        </a>
                                        <a href="#" class="flex border-r border-l border-gray-100 from-purple-300 to-blue-200 py-4 pl-3 pr-3 text-gray-600 transition duration-150 hover:bg-gradient-to-r">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="h-5 w-5"><path d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" /></svg>
                                            {{ $association[0]->emailPresident }}
                                        </a>
                                        <a href="#" class="flex from-purple-300 to-blue-200 py-4 pl-3 pr-3 text-gray-600 transition duration-150 hover:bg-gradient-to-r">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="h-5 w-5"><path d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" /></svg>
                                            {{ $association[0]->cinPresident }}
                                        </a>
                                    </div>
                                </div>
                                <div class="w-full overflow-hidden text-sm">
                                    <div class=" grid items-center max-w-4xl grid-cols-1 gap-2 mx-auto md:grid-cols-3 border-t border-gray-100">
                                        <a href="#" class="flex from-purple-300 to-blue-200 py-4 pl-3 pr-3 text-gray-600 transition duration-150 hover:bg-gradient-to-r">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="h-5 w-5"><path d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" /></svg>
                                            {{ $association[0]->president }}
                                        </a>
                                        <a href="#" class="flex border-r border-l border-gray-100 from-purple-300 to-blue-200 py-4 pl-3 pr-3 text-gray-600 transition duration-150 hover:bg-gradient-to-r">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="h-5 w-5"><path d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" /></svg>
                                            {{ $association[0]->emailPresident }}
                                        </a>
                                        <a href="#" class="flex from-purple-300 to-blue-200 py-4 pl-3 pr-3 text-gray-600 transition duration-150 hover:bg-gradient-to-r">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="h-5 w-5"><path d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" /></svg>
                                            {{ $association[0]->cinPresident }}
                                        </a>
                                    </div>
                                </div>
                                
                                      
                                    <a href="#"
                                        class="w-full border-t border-gray-100 text-gray-600 py-4 pl-6 pr-3 w-full block hover:bg-gradient-to-r from-purple-300 to-blue-200 transition duration-150">
                                        <img src="https://avatars0.githubusercontent.com/u/35900628?v=4" alt=""
                                            class="rounded-full h-6 shadow-md inline-block mr-2">
                                        Added new profile picture
                                        <span class="text-gray-500 text-xs">42 min ago</span>
                                    </a>

                                    <a href="#"
                                        class="w-full border-t border-gray-100 text-gray-600 py-4 pl-6 pr-3 w-full block hover:bg-gray-100 transition duration-150">
                                        <img src="https://avatars0.githubusercontent.com/u/35900628?v=4" alt=""
                                            class="rounded-full h-6 shadow-md inline-block mr-2">
                                        Posted new article in <span class="font-bold">#Web Dev</span>
                                        <span class="text-gray-500 text-xs">49 min ago</span>
                                    </a>

                                    <a href="#"
                                        class="w-full border-t border-gray-100 text-gray-600 py-4 pl-6 pr-3 w-full block hover:bg-gray-100 transition duration-150">
                                        <img src="https://avatars0.githubusercontent.com/u/35900628?v=4" alt=""
                                            class="rounded-full h-6 shadow-md inline-block mr-2">
                                        Edited website settings
                                        <span class="text-gray-500 text-xs">1 day ago</span>
                                    </a>

                                    <a href="#"
                                        class="w-full border-t border-gray-100 text-gray-600 py-4 pl-6 pr-3 w-full block hover:bg-gray-100 transition duration-150 overflow-hidden">
                                        <img src="https://avatars0.githubusercontent.com/u/35900628?v=4" alt=""
                                            class="rounded-full h-6 shadow-md inline-block mr-2">
                                        Added new rank
                                        <span class="text-gray-500 text-xs">5 days ago</span>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
        </section>

    </div>
</body>

</html>
