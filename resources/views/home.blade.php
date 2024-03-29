<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hay Al Oumali</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/Loopple/loopple-public-assets@main/motion-tailwind/motion-tailwind.css"
        rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script
        src="https://cdn.jsdelivr.net/gh/Loopple/loopple-public-assets@main/motion-tailwind/scripts/plugins/countup.min.js">
    </script>
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'mainred-color': '#8A3C44',
                        'mainreddark-color': '#4D1F24',
                        'mainbeige-color': '#FFE6D5',
                        'mainbeigedark-color': '#F2CFC6',
                        'offwhite-color': '#EBEBEB',
                    },
                },
            },
        }
    </script>
    <style>
        #menu-toggle:checked+#menu {
            display: block;
        }
    </style>

</head>

<body class="bg-offwhite-color">
    @include('layouts.navbar')
    <!-- component -->
    {{-- <div class="w-full">
    <div class="flex bg-[#EBEBEB]" style="height:600px;">
        <div class="flex items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2">
            <div>
                <h2 class="text-3xl font-semibold text-gray-800 md:text-4xl">Build Your New <span class="text-indigo-600">Idea</span></h2>
                <p class="mt-2 text-sm text-gray-500 md:text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis commodi cum cupiditate ducimus, fugit harum id necessitatibus odio quam quasi, quibusdam rem tempora voluptates. Cumque debitis dignissimos id quam vel!</p>
                <div class="flex justify-center lg:justify-start mt-6">
                    <a class="px-4 py-3 bg-gray-900 text-gray-200 text-xs font-semibold rounded hover:bg-gray-800" href="#">Get Started</a>
                    <a class="mx-4 px-4 py-3 bg-gray-300 text-gray-900 text-xs font-semibold rounded hover:bg-gray-400" href="#">Learn More</a>
                </div>
            </div>
        </div>
        <div class="hidden lg:block lg:w-1/2" style="clip-path:polygon(10% 0, 100% 0%, 100% 100%, 0 100%)">
            <div class="h-full object-cover">
                <img  src="../../img/darchabab.jpg" alt="DarChabab">
                <div class="h-full bg-black opacity-25"></div>
            </div>
        </div>
    </div>
</div> --}}

    {{-- News Slider --}}
    <section class="mx-auto my-25">
        <div class="container mx-auto px-4 py-8">
            <div class="bg-mainbeige-color rounded-lg shadow-md">
                {{-- <div class="flex items-center justify-between p-4">
                <h2 class="text-xl font-semibold">Toutes les actualités</h2>
                <div class="text-sm text-gray-500">5 mars 2024</div>
            </div> --}}
                <div class="slider">
                    <div class="slide">
                        <div class="flex bg-mainbeige-color" style="height:600px;">
                            <div class="flex items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2">
                                <div>
                                    <h2 class="text-3xl font-semibold text-gray-800 md:text-4xl">actuality 1 <span
                                            class="text-indigo-600">Idea</span></h2>
                                    <p class="mt-2 text-sm text-gray-500 md:text-base">Lorem ipsum dolor sit amet,
                                        consectetur adipisicing elit. Blanditiis commodi cum cupiditate ducimus, fugit
                                        harum id necessitatibus odio quam quasi, quibusdam rem tempora voluptates.
                                        Cumque debitis dignissimos id quam vel!</p>
                                    <div class="flex justify-center lg:justify-start mt-6">
                                        <a class="px-4 py-3 bg-gray-900 text-gray-200 text-xs font-semibold rounded hover:bg-gray-800"
                                            href="#">Get Started</a>
                                        <a class="mx-4 px-4 py-3 bg-gray-300 text-gray-900 text-xs font-semibold rounded hover:bg-gray-400"
                                            href="#">Learn More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden lg:block lg:w-1/2"
                                style="clip-path:polygon(10% 0, 100% 0%, 100% 100%, 0 100%)">
                                <div class="h-full object-cover">
                                    <img src="../../img/darchabab.jpg" alt="DarChabab">
                                    <div class="h-full bg-black opacity-25"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="flex" style="height:600px;">
                            <div class="flex items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2">
                                <div>
                                    <h2 class="text-3xl font-semibold text-gray-800 md:text-4xl">actuality 2 <span
                                            class="text-indigo-600">Idea</span></h2>
                                    <p class="mt-2 text-sm text-gray-500 md:text-base">Lorem ipsum dolor sit amet,
                                        consectetur adipisicing elit. Blanditiis commodi cum cupiditate ducimus, fugit
                                        harum id necessitatibus odio quam quasi, quibusdam rem tempora voluptates.
                                        Cumque debitis dignissimos id quam vel!</p>
                                    <div class="flex justify-center lg:justify-start mt-6">
                                        <a class="px-4 py-3 bg-gray-900 text-gray-200 text-xs font-semibold rounded hover:bg-gray-800"
                                            href="#">Get Started</a>
                                        <a class="mx-4 px-4 py-3 bg-gray-300 text-gray-900 text-xs font-semibold rounded hover:bg-gray-400"
                                            href="#">Learn More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden lg:block lg:w-1/2"
                                style="clip-path:polygon(10% 0, 100% 0%, 100% 100%, 0 100%)">
                                <div class="h-full object-cover">
                                    <img src="../../img/darchabab.jpg" alt="DarChabab">
                                    <div class="h-full bg-black opacity-25"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="flex" style="height:600px;">
                            <div class="flex items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2">
                                <div>
                                    <h2 class="text-3xl font-semibold text-gray-800 md:text-4xl">actuality 3 <span
                                            class="text-indigo-600">Idea</span></h2>
                                    <p class="mt-2 text-sm text-gray-500 md:text-base">Lorem ipsum dolor sit amet,
                                        consectetur adipisicing elit. Blanditiis commodi cum cupiditate ducimus, fugit
                                        harum id necessitatibus odio quam quasi, quibusdam rem tempora voluptates.
                                        Cumque debitis dignissimos id quam vel!</p>
                                    <div class="flex justify-center lg:justify-start mt-6">
                                        <a class="px-4 py-3 bg-gray-900 text-gray-200 text-xs font-semibold rounded hover:bg-gray-800"
                                            href="#">Get Started</a>
                                        <a class="mx-4 px-4 py-3 bg-gray-300 text-gray-900 text-xs font-semibold rounded hover:bg-gray-400"
                                            href="#">Learn More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden lg:block lg:w-1/2"
                                style="clip-path:polygon(10% 0, 100% 0%, 100% 100%, 0 100%)">
                                <div class="h-full object-cover">
                                    <img src="../../img/darchabab.jpg" alt="DarChabab">
                                    <div class="h-full bg-black opacity-25"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="flex" style="height:600px;">
                            <div class="flex items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2">
                                <div>
                                    <h2 class="text-3xl font-semibold text-gray-800 md:text-4xl">Build Your New <span
                                            class="text-indigo-600">Idea</span></h2>
                                    <p class="mt-2 text-sm text-gray-500 md:text-base">Lorem ipsum dolor sit amet,
                                        consectetur adipisicing elit. Blanditiis commodi cum cupiditate ducimus, fugit
                                        harum id necessitatibus odio quam quasi, quibusdam rem tempora voluptates.
                                        Cumque debitis dignissimos id quam vel!</p>
                                    <div class="flex justify-center lg:justify-start mt-6">
                                        <a class="px-4 py-3 bg-gray-900 text-gray-200 text-xs font-semibold rounded hover:bg-gray-800"
                                            href="#">Get Started</a>
                                        <a class="mx-4 px-4 py-3 bg-gray-300 text-gray-900 text-xs font-semibold rounded hover:bg-gray-400"
                                            href="#">Learn More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden lg:block lg:w-1/2"
                                style="clip-path:polygon(10% 0, 100% 0%, 100% 100%, 0 100%)">
                                <div class="h-full object-cover">
                                    <img src="../../img/darchabab.jpg" alt="DarChabab">
                                    <div class="h-full bg-black opacity-25"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="slide">
                        <h3 class="text-xl font-semibold">Actualité 3</h3>
                        <p class="mt-2">Description de l'actualité 3...</p>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

    {{-- statistics --}}
    <section class="bg-mainreddark-color">

        <div class="container flex flex-col mx-auto">
            <div class="w-full draggable">
                <div class="container flex flex-col items-center gap-16 mx-auto my-32">
                    <div class="grid w-full grid-cols-1 lg:grid-cols-4 md:grid-cols-2 gap-y-8">
                        <div class="flex flex-col items-center">
                            <h3 class="text-5xl font-extrabold leading-tight text-center text-mainbeige-color"><span
                                    id="countto1" countTo="250"></span>+</h3>
                            <p class="text-base font-medium leading-7 text-center text-mainbeigedark-color">Successful
                                Projects</p>
                        </div>
                        <div class="flex flex-col items-center">
                            <h3 class="text-5xl font-extrabold leading-tight text-center text-mainbeige-color">$<span
                                    id="countto2" countTo="12"></span>m</h3>
                            <p class="text-base font-medium leading-7 text-center text-mainbeigedark-color">Annual
                                Revenue
                                Growth</p>
                        </div>
                        <div class="flex flex-col items-center">
                            <h3 class="text-5xl font-extrabold leading-tight text-center text-mainbeige-color"><span
                                    id="countto3" countTo="2600" data-decimal="1"></span>k+</h3>
                            <p class="text-base font-medium leading-7 text-center text-mainbeigedark-color">Global
                                Partners
                            </p>
                        </div>
                        <div class="flex flex-col items-center">
                            <h3 class="text-5xl font-extrabold leading-tight text-center text-mainbeige-color"><span
                                    id="countto4" countTo="18000"></span>+</h3>
                            <p class="text-base font-medium leading-7 text-center text-mainbeigedark-color">Daily
                                Website
                                Visitors</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section>
        <!-- This is an example component -->
        <div class="max-w-2xl mx-auto pb-6">

            <div id="default-carousel" class="relative my-32" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <span
                            class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First
                            Slide</span>
                        <img src="https://flowbite.com/docs/images/carousel/carousel-1.svg"
                            class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                            alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://flowbite.com/docs/images/carousel/carousel-2.svg"
                            class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                            alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://flowbite.com/docs/images/carousel/carousel-3.svg"
                            class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                            alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 19l-7-7 7-7"></path>
                        </svg>
                        <span class="hidden">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                        <span class="hidden">Next</span>
                    </span>
                </button>
            </div>

            <p class="mt-5">This carousel slider component is part of a larger, open-source library of Tailwind CSS
                components. Learn
                more
                by going to the official <a class="text-blue-600 hover:underline"
                    href="https://flowbite.com/docs/getting-started/introduction/" target="_blank">Flowbite
                    Documentation</a>.
            </p>

        </div>
    </section>

    <section>

    </section>

    <!-- component -->
    <footer class="bg-gradient-to-r from-[#4D1F24] via-[#EBEBEB] to-[#4D1F24]">
        <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
                <div>
                    <img src="#" class="mr-5 h-6 sm:h-9" alt="logo" />
                    <p class="max-w-xs mt-4 text-sm text-black">
                        DAR CHABAB AL HAY AL OUMALI
                    </p>
                    <div class="flex mt-8 space-x-6 text-black">
                        <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
                            <span class="sr-only"> Facebook </span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fillRule="evenodd"
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                    clipRule="evenodd" />
                            </svg>
                        </a>
                        <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
                            <span class="sr-only"> Instagram </span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fillRule="evenodd"
                                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                    clipRule="evenodd" />
                            </svg>
                        </a>
                        <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
                            <span class="sr-only"> Twitter </span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path
                                    d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a>
                        <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
                            <span class="sr-only"> GitHub </span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fillRule="evenodd"
                                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                    clipRule="evenodd" />
                            </svg>
                        </a>
                        <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
                            <span class="sr-only"> Dribbble </span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fillRule="evenodd"
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                                    clipRule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-8 lg:col-span-2 sm:grid-cols-2 lg:grid-cols-4">
                    <div>
                        <p class="font-medium">
                            Company
                        </p>
                        <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-500">
                            <a class="hover:opacity-75" href> About </a>
                            <a class="hover:opacity-75" href> Meet the Team </a>
                            <a class="hover:opacity-75" href> History </a>
                            <a class="hover:opacity-75" href> Careers </a>
                        </nav>
                    </div>
                    <div>
                        <p class="font-medium">
                            Services
                        </p>
                        <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-500">
                            <a class="hover:opacity-75" href> 1on1 Coaching </a>
                            <a class="hover:opacity-75" href> Company Review </a>
                            <a class="hover:opacity-75" href> Accounts Review </a>
                            <a class="hover:opacity-75" href> HR Consulting </a>
                            <a class="hover:opacity-75" href> SEO Optimisation </a>
                        </nav>
                    </div>
                    <div>
                        <p class="font-medium">
                            Helpful Links
                        </p>0
                        <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-500">
                            <a class="hover:opacity-75" href> Contact </a>
                            <a class="hover:opacity-75" href> FAQs </a>
                            <a class="hover:opacity-75" href> Live Chat </a>
                        </nav>
                    </div>
                    <div>
                        <p class="font-medium">
                            Legal
                        </p>
                        <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-500">
                            <a class="hover:opacity-75" href> Privacy Policy </a>
                            <a class="hover:opacity-75" href> Terms &amp; Conditions </a>
                            <a class="hover:opacity-75" href> Returns Policy </a>
                            <a class="hover:opacity-75" href> Accessibility </a>
                        </nav>
                    </div>
                </div>
            </div>
            <p class="mt-8 text-xs text-gray-800">
                © 2024 Hay Al Oumali
            </p>
        </div>
    </footer>

    <script>
        const slides = document.querySelectorAll('.slide');
        let currentSlide = 0;

        function showSlide() {
            slides.forEach((slide, index) => {
                slide.style.display = index === currentSlide ? 'block' : 'none';
            });

            currentSlide = (currentSlide + 1) % slides.length;
        }

        setInterval(showSlide, 5000);

        let numbers = document.querySelectorAll("[countTo]");

        numbers.forEach((number) => {
            let ID = number.getAttribute("id");
            let value = number.getAttribute("countTo");
            let countUp = new CountUp(ID, value);

            if (number.hasAttribute("data-decimal")) {
                const options = {
                    decimalPlaces: 1,
                };
                countUp = new CountUp(ID, 2.8, options);
            } else {
                countUp = new CountUp(ID, value);
            }

            if (!countUp.error) {
                countUp.start();
            } else {
                console.error(countUp.error);
                number.innerHTML = value;
            }
        });
    </script>

</body>

</html>
