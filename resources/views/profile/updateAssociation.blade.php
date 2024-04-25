<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.head')
</head>

<body class="bg-gradient-to-r from-purple-300 to-blue-200 min-h-screen">
    <div class="relative ">

        @include('layouts.sidebar')

        <section class=" my-40">

            <div
                class="bg-opacity-30 bg-white border border-opacity-25 backdrop-filter backdrop-blur-md transition-all duration-300 relative shadow rounded-br-3xl rounded-tl-3xl w-full md:w-5/6 lg:w-4/6 xl:w-3/6 mx-auto">
                <form action="{{ route('association.update', ['associationId' => $association->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="flex justify-center">
                        <img src="{{ asset('img/' . ($association->profile_picture ?? '')) }}" alt=""
                            class="rounded-full mx-auto absolute -top-20 w-32 h-32 shadow-md border-4 border-white transition duration-200 transform hover:scale-110">
                    </div>

                    <div class="mt-16">
                        <h1 class="font-bold text-center text-3xl text-gray-900">
                            {{ old('firstname', $association->firstname) }}
                            {{ old('lastname', $association->lastname) }}
                        </h1>
                        <p class="text-center text-sm text-gray-400 font-medium">Type:
                            {{ old('type', $association->type) }}
                        </p>
                        <p class="text-center text-sm text-gray-400 font-medium">Origine:
                            {{ old('origine', $association->origine) }}</p>
                        <p class="text-center text-sm text-gray-400 font-medium">Domaine:
                            {{ old('domaine', $association->domaine) }}</p>
                        <div class="my-5 px-6">
                            <a href="{{ route('association.update', ['associationId' => $association->id]) }}"
                                class="text-gray-200 block rounded-lg text-center font-medium leading-6 px-6 py-3 bg-gray-900 hover:bg-black hover:text-white">Modifier
                                mon compte</a>
                        </div>

                        <!-- links -->
                        <div class="flex justify-between items-center my-5 px-6">
                            @if (isset($association->facebookLink) && $association->facebookLink)
                                <a href="{{ old('facebookLink', $association->facebookLink) }}"
                                    class="text-gray-500 hover:text-gray-900 hover:bg-gray-100 rounded transition duration-150 ease-in font-medium text-sm text-center w-full py-3">Facebook</a>
                            @endif
                            @if (isset($association->instagramLink) && $association->instagramLink)
                                <a href="{{ old('instagramLink', $association->instagramLink) }}"
                                    class="text-gray-500 hover:text-gray-900 hover:bg-gray-100 rounded transition duration-150 ease-in font-medium text-sm text-center w-full py-3">Instagram</a>
                            @endif
                            @if (isset($association->otherLink) && $association->otherLink)
                                <a href="{{ old('otherLink', $association->otherLink) }}"
                                    class="text-gray-500 hover:text-gray-900 hover:bg-gray-100 rounded transition duration-150 ease-in font-medium text-sm text-center w-full py-3">Other
                                    link</a>
                            @endif
                        </div>

                        <div class="w-full">

                            <!-- Président -->
                            <div>
                                <h3 class="font-medium text-gray-900 text-left px-6">Président</h3>
                                <div class="w-full overflow-hidden text-sm">
                                    <div
                                        class="grid items-center max-w-4xl grid-cols-1 gap-2 mx-auto md:grid-cols-3 mb-4">
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
                                            <div>{{ old('president', $association->president) }}</div>
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
                                            <div>{{ old('emailPresident', $association->emailPresident) }}</div>
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
                                            <div>{{ old('cinPresident', $association->cinPresident) }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Vice Président -->
                            @if (isset($association->vicePresident) && $association->vicePresident)
                                <div>
                                    <h3 class="font-medium text-gray-900 text-left px-6">Vice Président</h3>
                                    <div class="w-full overflow-hidden text-sm">
                                        <div
                                            class="grid items-center max-w-4xl grid-cols-1 gap-2 mx-auto md:grid-cols-3">
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
                                                <div>{{ old('vicePresident', $association->vicePresident) }}</div>
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
                                                <div>{{ old('emailVice', $association->emailVice) }}</div>
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
                                                <div>{{ old('cinVice', $association->cinVice) }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <!-- Secretaire -->
                            <div>
                                <h3 class="font-medium text-gray-900 text-left px-6">Secretaire</h3>
                                <div class="w-full overflow-hidden text-sm">
                                    <div class="grid items-center max-w-4xl grid-cols-1 gap-2 mx-auto md:grid-cols-3">
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
                                            <div>{{ old('secretaire', $association->secretaire) }}</div>
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
                                            <div>{{ old('emailSecretaire', $association->emailSecretaire) }}</div>
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
                                            <div>{{ old('cinSecretaire', $association->cinSecretaire) }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Secretaire Adjoint -->
                            @if (isset($association->secretaireAdjoint) && $association->secretaireAdjoint)
                                <div>
                                    <h3 class="font-medium text-gray-900 text-left px-6">Secretaire Adjoint</h3>
                                    <div class="w-full overflow-hidden text-sm">
                                        <div
                                            class="grid items-center max-w-4xl grid-cols-1 gap-2 mx-auto md:grid-cols-3">
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
                                                <div>{{ old('secretaireAdjoint', $association->secretaireAdjoint) }}
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
                                                    {{ old('emailSecretaireAdjoint', $association->emailSecretaireAdjoint) }}
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
                                                    {{ old('cinSecretaireAdjoint', $association->cinSecretaireAdjoint) }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <!-- Tresorier -->
                            <div>
                                <h3 class="font-medium text-gray-900 text-left px-6">Tresorier</h3>
                                <div class="w-full overflow-hidden text-sm">
                                    <div class="grid items-center max-w-4xl grid-cols-1 gap-2 mx-auto md:grid-cols-3">
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
                                            <div>{{ old('tresorier', $association->tresorier) }}</div>
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
                                            <div>{{ old('emailTresorier', $association->emailTresorier) }}</div>
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
                                            <div>{{ old('cinTresorier', $association->cinTresorier) }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tresorier Adjoint -->
                            @if (isset($association->tresorierAdjoint) && $association->tresorierAdjoint)
                                <div>
                                    <h3 class="font-medium text-gray-900 text-left px-6">Tresorier Adjoint</h3>
                                    <div class="w-full overflow-hidden text-sm">
                                        <div
                                            class="grid items-center max-w-4xl grid-cols-1 gap-2 mx-auto md:grid-cols-3">
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
                                                <div>{{ old('tresorierAdjoint', $association->tresorierAdjoint) }}
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
                                                    {{ old('emailTresorierAdjoint', $association->emailTresorierAdjoint) }}
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
                                                    {{ old('cinTresorierAdjoint', $association->cinTresorierAdjoint) }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <!-- Conseiller 1 -->
                            @if (isset($association->conseiller1) && $association->conseiller1)
                                <div>
                                    <h3 class="font-medium text-gray-900 text-left px-6">Conseiller 1</h3>
                                    <div class="w-full overflow-hidden text-sm">
                                        <div
                                            class="grid items-center max-w-4xl grid-cols-1 gap-2 mx-auto md:grid-cols-3">
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
                                                <div>{{ old('conseiller1', $association->conseiller1) }}</div>
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
                                                <div>{{ old('emailConseiller1', $association->emailConseiller1) }}
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
                                                <div>{{ old('cinConseiller1', $association->cinConseiller1) }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <!-- Conseiller 2 -->
                            @if (isset($association->conseiller2) && $association->conseiller2)
                                <div>
                                    <h3 class="font-medium text-gray-900 text-left px-6">Conseiller 2</h3>
                                    <div class="w-full overflow-hidden text-sm">
                                        <div
                                            class="grid items-center max-w-4xl grid-cols-1 gap-2 mx-auto md:grid-cols-3">
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
                                                <div>{{ old('conseiller2', $association->conseiller2) }}</div>
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
                                                <div>{{ old('emailConseiller2', $association->emailConseiller2) }}
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
                                                <div>{{ old('cinConseiller2', $association->cinConseiller2) }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <!-- Conseiller 3 -->
                            @if (isset($association->conseiller3) && $association->conseiller3)
                                <div>
                                    <h3 class="font-medium text-gray-900 text-left px-6">Conseiller 3</h3>
                                    <div class="w-full overflow-hidden text-sm">
                                        <div
                                            class="grid items-center max-w-4xl grid-cols-1 gap-2 mx-auto md:grid-cols-3">
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
                                                <div>{{ old('conseiller3', $association->conseiller3) }}</div>
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
                                                <div>{{ old('emailConseiller3', $association->emailConseiller3) }}
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
                                                <div>{{ old('cinConseiller3', $association->cinConseiller3) }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <!-- Conseiller 4 -->
                            @if (isset($association->conseiller4) && $association->conseiller4)
                                <div>
                                    <h3 class="font-medium text-gray-900 text-left px-6">Conseiller 4</h3>
                                    <div class="w-full overflow-hidden text-sm">
                                        <div
                                            class="grid items-center max-w-4xl grid-cols-1 gap-2 mx-auto md:grid-cols-3">
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
                                                <div>{{ old('conseiller4', $association->conseiller4) }}</div>
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
                                                <div>{{ old('emailConseiller4', $association->emailConseiller4) }}
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
                                                <div>{{ old('cinConseiller4', $association->cinConseiller4) }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <!-- Conseiller 5 -->
                            @if (isset($association->conseiller5) && $association->conseiller5)
                                <div>
                                    <h3 class="font-medium text-gray-900 text-left px-6">Conseiller 5</h3>
                                    <div class="w-full overflow-hidden text-sm">
                                        <div
                                            class="grid items-center max-w-4xl grid-cols-1 gap-2 mx-auto md:grid-cols-3">
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
                                                <div>{{ old('conseiller5', $association->conseiller5) }}</div>
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
                                                <div>{{ old('emailConseiller5', $association->emailConseiller5) }}
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
                                                <div>{{ old('cinConseiller5', $association->cinConseiller5) }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <!-- Conseiller 6 -->
                            @if (isset($association->conseiller6) && $association->conseiller6)
                                <div>
                                    <h3 class="font-medium text-gray-900 text-left px-6">Conseiller 6</h3>
                                    <div class="w-full overflow-hidden text-sm">
                                        <div
                                            class="grid items-center max-w-4xl grid-cols-1 gap-2 mx-auto md:grid-cols-3">
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
                                                <div>{{ old('conseiller6', $association->conseiller6) }}</div>
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
                                                <div>{{ old('emailConseiller6', $association->emailConseiller6) }}
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
                                                <div>{{ old('cinConseiller6', $association->cinConseiller6) }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                        </div>

                    </div>

                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Update
                    </button>
                </form>
            </div>
        </section>
    </div>

</body>

</html>
