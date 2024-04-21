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

                <div
                    class="bg-opacity-30 bg-white border border-opacity-25 backdrop-filter backdrop-blur-md  transition-all duration-300 relative shadow rounded-br-3xl rounded-tl-3xl w-full md:w-5/6  lg:w-4/6 xl:w-3/6 mx-auto">
                    <div class="flex justify-center">
                        <img src="{{ asset('img/' . $association[0]->profile_picture) }}" alt=""
                            class="rounded-full mx-auto absolute -top-20 w-32 h-32 shadow-md border-4 border-white transition duration-200 transform hover:scale-110">
                    </div>

                    <div class="mt-16">
                        <h1 class="font-bold text-center text-3xl text-gray-900">{{ $association[0]->firstname }} {{ $association[0]->lastname }}</h1>
                        <p class="text-center text-sm text-gray-400 font-medium">Type: {{ $association[0]->type }}</p>
                        <p class="text-center text-sm text-gray-400 font-medium">Origine: {{ $association[0]->origine }}
                        </p>
                        <p class="text-center text-sm text-gray-400 font-medium">Domaine: {{ $association[0]->domaine }}
                        </p>
                        <div class="my-5 px-6">
                            <a href="#"
                                class="text-gray-200 block rounded-lg text-center font-medium leading-6 px-6 py-3 bg-gray-900 hover:bg-black hover:text-white">Modifier mon compte</a>
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

                            {{-- Président --}}
                            <div>
                                <h3 class="font-medium text-gray-900 text-left px-6">Président</h3>
                                <div class="w-full overflow-hidden text-sm">
                                    <div
                                        class=" grid items-center max-w-4xl grid-cols-1 gap-2 mx-auto md:grid-cols-3 mb-4 ">
                                        <div
                                            class="from-purple-300 to-blue-200 py-4 pl-3 pr-3 text-gray-600 transition duration-150 hover:bg-gradient-to-r">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                    class="h-5 w-5">
                                                    <path
                                                        d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" />
                                                </svg>
                                                <b>Nom: </b>
                                            </div>
                                            <div>
                                                {{ $association[0]->president }}
                                            </div>
                                        </div>
                                        <div
                                            class="border-r border-l border-gray-100 from-purple-300 to-blue-200 py-4 pl-3 pr-3 text-gray-600 transition duration-150 hover:bg-gradient-to-r">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                    class="h-5 w-5">
                                                    <path
                                                        d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" />
                                                </svg>
                                                <b>Email: </b>
                                            </div>
                                            <div>
                                                {{ $association[0]->emailPresident }}
                                            </div>
                                        </div>
                                        <div
                                            class="from-purple-300 to-blue-200 py-4 pl-3 pr-3 text-gray-600 transition duration-150 hover:bg-gradient-to-r">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                    class="h-5 w-5">
                                                    <path
                                                        d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" />
                                                </svg>
                                                <b>Cin: </b>
                                            </div>
                                            <div>
                                                {{ $association[0]->cinPresident }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Vice Président --}}
                            @if(isset($association[0]->vicePresident) && $association[0]->vicePresident)
                            <div>
                                <h3 class="font-medium text-gray-900 text-left px-6">Vice Président</h3>
                                <div class="w-full overflow-hidden text-sm">
                                    <div class=" grid items-center max-w-4xl grid-cols-1 gap-2 mx-auto md:grid-cols-3">
                                        <div
                                            class="from-purple-300 to-blue-200 py-4 pl-3 pr-3 text-gray-600 transition duration-150 hover:bg-gradient-to-r">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                    class="h-5 w-5">
                                                    <path
                                                        d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" />
                                                </svg>
                                                <b>Nom: </b>
                                            </div>
                                            <div>
                                                {{ $association[0]->vicePresident }}
                                            </div>
                                        </div>
                                        <div
                                            class="border-r border-l border-gray-100 from-purple-300 to-blue-200 py-4 pl-3 pr-3 text-gray-600 transition duration-150 hover:bg-gradient-to-r">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                    class="h-5 w-5">
                                                    <path
                                                        d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" />
                                                </svg>
                                                <b>Email: </b>
                                            </div>
                                            <div>
                                                {{ $association[0]->emailVice }}
                                            </div>
                                        </div>
                                        <div
                                            class="from-purple-300 to-blue-200 py-4 pl-3 pr-3 text-gray-600 transition duration-150 hover:bg-gradient-to-r">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                    class="h-5 w-5">
                                                    <path
                                                        d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" />
                                                </svg>
                                                <b>Cin: </b>
                                            </div>
                                            <div>
                                                {{ $association[0]->cinVice }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            
                            {{-- secretaire --}}
                            <div>
                                <h3 class="font-medium text-gray-900 text-left px-6">Secretaire</h3>
                                <div class="w-full overflow-hidden text-sm">
                                    <div class=" grid items-center max-w-4xl grid-cols-1 gap-2 mx-auto md:grid-cols-3">
                                        <div
                                            class="from-purple-300 to-blue-200 py-4 pl-3 pr-3 text-gray-600 transition duration-150 hover:bg-gradient-to-r">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                    class="h-5 w-5">
                                                    <path
                                                        d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" />
                                                </svg>
                                                <b>Nom: </b>
                                            </div>
                                            <div>
                                                {{ $association[0]->secretaire }}
                                            </div>
                                        </div>
                                        <div
                                            class="border-r border-l border-gray-100 from-purple-300 to-blue-200 py-4 pl-3 pr-3 text-gray-600 transition duration-150 hover:bg-gradient-to-r">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                    class="h-5 w-5">
                                                    <path
                                                        d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" />
                                                </svg>
                                                <b>Email: </b>
                                            </div>
                                            <div>
                                                {{ $association[0]->emailSecretaire }}
                                            </div>
                                        </div>
                                        <div
                                            class="from-purple-300 to-blue-200 py-4 pl-3 pr-3 text-gray-600 transition duration-150 hover:bg-gradient-to-r">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                    class="h-5 w-5">
                                                    <path
                                                        d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" />
                                                </svg>
                                                <b>Cin: </b>
                                            </div>
                                            <div>
                                                {{ $association[0]->cinSecretaire }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- secretaireAdjoint --}}
                            @if(isset($association[0]->secretaireAdjoint) && $association[0]->secretaireAdjoint)
                            <div>
                                <h3 class="font-medium text-gray-900 text-left px-6">Secretaire Adjoint</h3>
                                <div class="w-full overflow-hidden text-sm">
                                    <div class=" grid items-center max-w-4xl grid-cols-1 gap-2 mx-auto md:grid-cols-3">
                                        <div
                                            class="from-purple-300 to-blue-200 py-4 pl-3 pr-3 text-gray-600 transition duration-150 hover:bg-gradient-to-r">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                    class="h-5 w-5">
                                                    <path
                                                        d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" />
                                                </svg>
                                                <b>Nom: </b>
                                            </div>
                                            <div>
                                                {{ $association[0]->secretaireAdjoint }}
                                            </div>
                                        </div>
                                        <div
                                            class="border-r border-l border-gray-100 from-purple-300 to-blue-200 py-4 pl-3 pr-3 text-gray-600 transition duration-150 hover:bg-gradient-to-r">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                    class="h-5 w-5">
                                                    <path
                                                        d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" />
                                                </svg>
                                                <b>Email: </b>
                                            </div>
                                            <div>
                                                {{ $association[0]->emailSecretaireAdjoint }}
                                            </div>
                                        </div>
                                        <div
                                            class="from-purple-300 to-blue-200 py-4 pl-3 pr-3 text-gray-600 transition duration-150 hover:bg-gradient-to-r">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                    class="h-5 w-5">
                                                    <path
                                                        d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" />
                                                </svg>
                                                <b>Cin: </b>
                                            </div>
                                            <div>
                                                {{ $association[0]->cinSecretaireAdjoint }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif

                            {{-- tresorier --}}
                            <div>
                                <h3 class="font-medium text-gray-900 text-left px-6">Tresorier</h3>
                                <div class="w-full overflow-hidden text-sm">
                                    <div class=" grid items-center max-w-4xl grid-cols-1 gap-2 mx-auto md:grid-cols-3">
                                        <div
                                            class="from-purple-300 to-blue-200 py-4 pl-3 pr-3 text-gray-600 transition duration-150 hover:bg-gradient-to-r">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                    class="h-5 w-5">
                                                    <path
                                                        d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" />
                                                </svg>
                                                <b>Nom: </b>
                                            </div>
                                            <div>
                                                {{ $association[0]->tresorier }}
                                            </div>
                                        </div>
                                        <div
                                            class="border-r border-l border-gray-100 from-purple-300 to-blue-200 py-4 pl-3 pr-3 text-gray-600 transition duration-150 hover:bg-gradient-to-r">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                    class="h-5 w-5">
                                                    <path
                                                        d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" />
                                                </svg>
                                                <b>Email: </b>
                                            </div>
                                            <div>
                                                {{ $association[0]->emailTresorier }}
                                            </div>
                                        </div>
                                        <div
                                            class="from-purple-300 to-blue-200 py-4 pl-3 pr-3 text-gray-600 transition duration-150 hover:bg-gradient-to-r">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                    class="h-5 w-5">
                                                    <path
                                                        d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" />
                                                </svg>
                                                <b>Cin: </b>
                                            </div>
                                            <div>
                                                {{ $association[0]->cinTresorier }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- tresorierAdjoint --}}
                            @if(isset($association[0]->tresorierAdjoint) && $association[0]->tresorierAdjoint)
                            <div>
                                <h3 class="font-medium text-gray-900 text-left px-6">Tresorier Adjoint</h3>
                                <div class="w-full overflow-hidden text-sm">
                                    <div class=" grid items-center max-w-4xl grid-cols-1 gap-2 mx-auto md:grid-cols-3">
                                        <div
                                            class="from-purple-300 to-blue-200 py-4 pl-3 pr-3 text-gray-600 transition duration-150 hover:bg-gradient-to-r">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                    class="h-5 w-5">
                                                    <path
                                                        d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" />
                                                </svg>
                                                <b>Nom: </b>
                                            </div>
                                            <div>
                                                {{ $association[0]->tresorierAdjoint }}
                                            </div>
                                        </div>
                                        <div
                                            class="border-r border-l border-gray-100 from-purple-300 to-blue-200 py-4 pl-3 pr-3 text-gray-600 transition duration-150 hover:bg-gradient-to-r">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                    class="h-5 w-5">
                                                    <path
                                                        d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" />
                                                </svg>
                                                <b>Email: </b>
                                            </div>
                                            <div>
                                                {{ $association[0]->emailTresorierAdjoint }}
                                            </div>
                                        </div>
                                        <div
                                            class="from-purple-300 to-blue-200 py-4 pl-3 pr-3 text-gray-600 transition duration-150 hover:bg-gradient-to-r">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                    class="h-5 w-5">
                                                    <path
                                                        d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" />
                                                </svg>
                                                <b>Cin: </b>
                                            </div>
                                            <div>
                                                {{ $association[0]->cinTresorierAdjoint }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif

                            {{-- conseiller1 --}}
                            @if(isset($association[0]->conseiller1) && $association[0]->conseiller1)
                            <div>
                                <h3 class="font-medium text-gray-900 text-left px-6">Conseiller 1</h3>
                                <div class="w-full overflow-hidden text-sm">
                                    <div class=" grid items-center max-w-4xl grid-cols-1 gap-2 mx-auto md:grid-cols-3">
                                        <div
                                            class="from-purple-300 to-blue-200 py-4 pl-3 pr-3 text-gray-600 transition duration-150 hover:bg-gradient-to-r">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                    class="h-5 w-5">
                                                    <path
                                                        d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" />
                                                </svg>
                                                <b>Nom: </b>
                                            </div>
                                            <div>
                                                {{ $association[0]->conseiller1 }}
                                            </div>
                                        </div>
                                        <div
                                            class="border-r border-l border-gray-100 from-purple-300 to-blue-200 py-4 pl-3 pr-3 text-gray-600 transition duration-150 hover:bg-gradient-to-r">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                    class="h-5 w-5">
                                                    <path
                                                        d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" />
                                                </svg>
                                                <b>Email: </b>
                                            </div>
                                            <div>
                                                {{ $association[0]->emailConseiller1 }}
                                            </div>
                                        </div>
                                        <div
                                            class="from-purple-300 to-blue-200 py-4 pl-3 pr-3 text-gray-600 transition duration-150 hover:bg-gradient-to-r">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                    class="h-5 w-5">
                                                    <path
                                                        d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" />
                                                </svg>
                                                <b>Cin: </b>
                                            </div>
                                            <div>
                                                {{ $association[0]->cinConseiller1 }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif

                            {{-- conseiller2 --}}
                            @if(isset($association[0]->conseiller2) && $association[0]->conseiller2)
                            <div>
                                <h3 class="font-medium text-gray-900 text-left px-6">Conseiller 2</h3>
                                <div class="w-full overflow-hidden text-sm">
                                    <div class=" grid items-center max-w-4xl grid-cols-1 gap-2 mx-auto md:grid-cols-3">
                                        <div
                                            class="from-purple-300 to-blue-200 py-4 pl-3 pr-3 text-gray-600 transition duration-150 hover:bg-gradient-to-r">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                    class="h-5 w-5">
                                                    <path
                                                        d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" />
                                                </svg>
                                                <b>Nom: </b>
                                            </div>
                                            <div>
                                                {{ $association[0]->conseiller2 }}
                                            </div>
                                        </div>
                                        <div
                                            class="border-r border-l border-gray-100 from-purple-300 to-blue-200 py-4 pl-3 pr-3 text-gray-600 transition duration-150 hover:bg-gradient-to-r">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                    class="h-5 w-5">
                                                    <path
                                                        d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" />
                                                </svg>
                                                <b>Email: </b>
                                            </div>
                                            <div>
                                                {{ $association[0]->emailConseiller2 }}
                                            </div>
                                        </div>
                                        <div
                                            class="from-purple-300 to-blue-200 py-4 pl-3 pr-3 text-gray-600 transition duration-150 hover:bg-gradient-to-r">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                    class="h-5 w-5">
                                                    <path
                                                        d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" />
                                                </svg>
                                                <b>Cin: </b>
                                            </div>
                                            <div>
                                                {{ $association[0]->cinConseiller2 }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif

                            {{-- conseiller3 --}}
                            @if(isset($association[0]->conseiller3) && $association[0]->conseiller3)
                            <div>
                                <h3 class="font-medium text-gray-900 text-left px-6">Conseiller 3</h3>
                                <div class="w-full overflow-hidden text-sm">
                                    <div class=" grid items-center max-w-4xl grid-cols-1 gap-2 mx-auto md:grid-cols-3">
                                        <div
                                            class="from-purple-300 to-blue-200 py-4 pl-3 pr-3 text-gray-600 transition duration-150 hover:bg-gradient-to-r">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                    class="h-5 w-5">
                                                    <path
                                                        d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" />
                                                </svg>
                                                <b>Nom: </b>
                                            </div>
                                            <div>
                                                {{ $association[0]->conseiller3 }}
                                            </div>
                                        </div>
                                        <div
                                            class="border-r border-l border-gray-100 from-purple-300 to-blue-200 py-4 pl-3 pr-3 text-gray-600 transition duration-150 hover:bg-gradient-to-r">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                    class="h-5 w-5">
                                                    <path
                                                        d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" />
                                                </svg>
                                                <b>Email: </b>
                                            </div>
                                            <div>
                                                {{ $association[0]->emailConseiller3 }}
                                            </div>
                                        </div>
                                        <div
                                            class="from-purple-300 to-blue-200 py-4 pl-3 pr-3 text-gray-600 transition duration-150 hover:bg-gradient-to-r">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                    class="h-5 w-5">
                                                    <path
                                                        d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" />
                                                </svg>
                                                <b>Cin: </b>
                                            </div>
                                            <div>
                                                {{ $association[0]->cinConseiller3 }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif

                            {{-- conseiller4 --}}
                            @if(isset($association[0]->conseiller4) && $association[0]->conseiller4)
                            <div>
                                <h3 class="font-medium text-gray-900 text-left px-6">Conseiller 4</h3>
                                <div class="w-full overflow-hidden text-sm">
                                    <div class=" grid items-center max-w-4xl grid-cols-1 gap-2 mx-auto md:grid-cols-3">
                                        <div
                                            class="from-purple-300 to-blue-200 py-4 pl-3 pr-3 text-gray-600 transition duration-150 hover:bg-gradient-to-r">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                    class="h-5 w-5">
                                                    <path
                                                        d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" />
                                                </svg>
                                                <b>Nom: </b>
                                            </div>
                                            <div>
                                                {{ $association[0]->conseiller4 }}
                                            </div>
                                        </div>
                                        <div
                                            class="border-r border-l border-gray-100 from-purple-300 to-blue-200 py-4 pl-3 pr-3 text-gray-600 transition duration-150 hover:bg-gradient-to-r">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                    class="h-5 w-5">
                                                    <path
                                                        d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" />
                                                </svg>
                                                <b>Email: </b>
                                            </div>
                                            <div>
                                                {{ $association[0]->emailConseiller4 }}
                                            </div>
                                        </div>
                                        <div
                                            class="from-purple-300 to-blue-200 py-4 pl-3 pr-3 text-gray-600 transition duration-150 hover:bg-gradient-to-r">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                    class="h-5 w-5">
                                                    <path
                                                        d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" />
                                                </svg>
                                                <b>Cin: </b>
                                            </div>
                                            <div>
                                                {{ $association[0]->cinConseiller4 }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif

                            {{-- conseiller5 --}}
                            @if(isset($association[0]->conseiller5) && $association[0]->conseiller5)
                            <div>
                                <h3 class="font-medium text-gray-900 text-left px-6">Conseiller 5</h3>
                                <div class="w-full overflow-hidden text-sm">
                                    <div class=" grid items-center max-w-4xl grid-cols-1 gap-2 mx-auto md:grid-cols-3">
                                        <div
                                            class="from-purple-300 to-blue-200 py-4 pl-3 pr-3 text-gray-600 transition duration-150 hover:bg-gradient-to-r">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                    class="h-5 w-5">
                                                    <path
                                                        d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" />
                                                </svg>
                                                <b>Nom: </b>
                                            </div>
                                            <div>
                                                {{ $association[0]->conseiller5 }}
                                            </div>
                                        </div>
                                        <div
                                            class="border-r border-l border-gray-100 from-purple-300 to-blue-200 py-4 pl-3 pr-3 text-gray-600 transition duration-150 hover:bg-gradient-to-r">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                    class="h-5 w-5">
                                                    <path
                                                        d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" />
                                                </svg>
                                                <b>Email: </b>
                                            </div>
                                            <div>
                                                {{ $association[0]->emailConseiller5 }}
                                            </div>
                                        </div>
                                        <div
                                            class="from-purple-300 to-blue-200 py-4 pl-3 pr-3 text-gray-600 transition duration-150 hover:bg-gradient-to-r">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                    class="h-5 w-5">
                                                    <path
                                                        d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" />
                                                </svg>
                                                <b>Cin: </b>
                                            </div>
                                            <div>
                                                {{ $association[0]->cinConseiller5 }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif

                            {{-- conseiller6 --}}
                            @if(isset($association[0]->conseiller6) && $association[0]->conseiller6)
                            <div>
                                <h3 class="font-medium text-gray-900 text-left px-6">Conseiller 6</h3>
                                <div class="w-full overflow-hidden text-sm">
                                    <div class=" grid items-center max-w-4xl grid-cols-1 gap-2 mx-auto md:grid-cols-3">
                                        <div
                                            class="from-purple-300 to-blue-200 py-4 pl-3 pr-3 text-gray-600 transition duration-150 hover:bg-gradient-to-r">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                    class="h-5 w-5">
                                                    <path
                                                        d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" />
                                                </svg>
                                                <b>Nom: </b>
                                            </div>
                                            <div>
                                                {{ $association[0]->conseiller6 }}
                                            </div>
                                        </div>
                                        <div
                                            class="border-r border-l border-gray-100 from-purple-300 to-blue-200 py-4 pl-3 pr-3 text-gray-600 transition duration-150 hover:bg-gradient-to-r">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                    class="h-5 w-5">
                                                    <path
                                                        d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" />
                                                </svg>
                                                <b>Email: </b>
                                            </div>
                                            <div>
                                                {{ $association[0]->emailConseiller6 }}
                                            </div>
                                        </div>
                                        <div
                                            class="from-purple-300 to-blue-200 py-4 pl-3 pr-3 text-gray-600 transition duration-150 hover:bg-gradient-to-r">
                                            <div class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                                    class="h-5 w-5">
                                                    <path
                                                        d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z" />
                                                </svg>
                                                <b>Cin: </b>
                                            </div>
                                            <div>
                                                {{ $association[0]->cinConseiller6 }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>

    </div>
    </section>

    </div>
</body>

</html>
