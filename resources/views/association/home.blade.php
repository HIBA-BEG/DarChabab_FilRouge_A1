<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.head')
</head>

<body>
    <div class="relative">


        @include('layouts.sidebar')
        <!-- component -->
        <section class="main-content">
            <!-- component -->
            <section>
                <div class="py-16">
                    <div class="mx-auto px-6 max-w-6xl text-gray-500">
                        <div class="text-center">
                            <h2 class="text-3xl text-gray-950 dark:text-white font-semibold">Quickstart with boilerplates
                            </h2>
                            <p class="mt-6 text-gray-700 dark:text-gray-300">Harum quae dolore inventore repudiandae?
                                orrupti aut temporibus ariatur.</p>
                        </div>
                        <div class="mt-12 grid sm:grid-cols-2 lg:grid-cols-3 gap-3">
                            @foreach ($salles as $salle)
                                <div href="#"
                                    class="relative group overflow-hidden p-8 rounded-xl bg-white border border-gray-200 dark:border-gray-800 dark:bg-gray-900">
                                    <div aria-hidden="true" class="inset-0 absolute aspect-video border rounded-full -translate-y-1/2 group-hover:-translate-y-1/4 duration-300 bg-gradient-to-b from-green-500 to-white dark:from-white dark:to-white blur-2xl opacity-25 dark:opacity-5 dark:group-hover:opacity-10">
                                    </div>
                                    <div class="relative">
                                        <img src="{{ asset('img/' . $salle->profile_picture) }}"
                                            alt="image" class="w-full h-[210px] rounded-xl" />
                                        {{-- <div
                                            class="border border-green-500/10 flex relative *:relative *:size-6 *:m-auto size-12 rounded-lg dark:bg-gray-900 dark:border-white/15 before:rounded-[7px] before:absolute before:inset-0 before:border-t before:border-white before:from-green-100 dark:before:border-white/20 before:bg-gradient-to-b dark:before:from-white/10 dark:before:to-transparent before:shadow dark:before:shadow-gray-950">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="0.98em" height="1em"
                                                viewBox="0 0 256 263">
                                                <defs>
                                                    <linearGradient id="logosSupabaseIcon0" x1="20.862%"
                                                        x2="63.426%" y1="20.687%" y2="44.071%">
                                                        <stop offset="0%" stop-color="#249361"></stop>
                                                        <stop offset="100%" stop-color="#3ecf8e"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="logosSupabaseIcon1" x1="1.991%"
                                                        x2="21.403%" y1="-13.158%" y2="34.708%">
                                                        <stop offset="0%"></stop>
                                                        <stop offset="100%" stop-opacity="0"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <path fill="url(#logosSupabaseIcon0)"
                                                    d="M149.602 258.579c-6.718 8.46-20.338 3.824-20.5-6.977l-2.367-157.984h106.229c19.24 0 29.971 22.223 18.007 37.292z">
                                                </path>
                                                <path fill="url(#logosSupabaseIcon1)" fill-opacity="0.2"
                                                    d="M149.602 258.579c-6.718 8.46-20.338 3.824-20.5-6.977l-2.367-157.984h106.229c19.24 0 29.971 22.223 18.007 37.292z">
                                                </path>
                                                <path fill="#3ecf8e"
                                                    d="M106.399 4.37c6.717-8.461 20.338-3.826 20.5 6.976l1.037 157.984H23.037c-19.241 0-29.973-22.223-18.008-37.292z">
                                                </path>
                                            </svg>
                                        </div> --}}
                                        <div class="mt-6 pb-6 rounded-b-[--card-border-radius]">
                                            <span
                                                class="mt-1 text-xl font-semibold text-black whitespace-nowrap">{{ $salle->name }}</span>
                                            <p class="text-gray-700 dark:text-gray-300">{{ $salle->description }}</p>
                                        </div>
                                        <div
                                            class="flex gap-3 -mb-8 py-4 border-t border-gray-200 dark:border-gray-800">
                                            <a href="#"
                                                class="group rounded-xl disabled:border *:select-none [&>*:not(.sr-only)]:relative *:disabled:opacity-20 disabled:text-gray-950 disabled:border-gray-200 disabled:bg-gray-100 dark:disabled:border-gray-800/50 disabled:dark:bg-gray-900 dark:*:disabled:!text-white text-gray-950 bg-gray-100 hover:bg-gray-200/75 active:bg-gray-100 dark:text-white dark:bg-gray-500/10 dark:hover:bg-gray-500/15 dark:active:bg-gray-500/10 flex gap-1.5 items-center text-sm h-8 px-3.5 justify-center">
                                                <span>Réserver cette salle</span>
                                                <svg xmlns="http://www.w3.org/2000/svg"width="1em" height="1em" viewBox="0 0 448 512">
                                                    <path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                                                </svg>
                                            </a>
                                            <button class="absolute left-1/2 transform -translate-x-1/2 bottom-0 mb-4 px-4 py-2 text-white rounded-lg bg-blue-500 border-none transition duration-300 ease-out opacity-0 hover:opacity-100">
                                                Reserver cette salle
                                              </button>
                                            <div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </section>
        </section>
    </div>
</body>

</html>
