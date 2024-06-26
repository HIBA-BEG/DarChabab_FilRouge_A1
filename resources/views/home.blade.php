<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    @include('layouts.head')

</head>

<body class="bg-blue-200">
    @include('layouts.navbar')

    {{-- darchabab picture + blog button --}}
    <section class="lg:my-20 my-10">
        <div
            class="relative overflow-hidden bg-cover bg-no-repeat bg-[80%] bg-[url('{{ asset('img/darchabab.jpg') }}')] h-[500px]">
        </div>
        <div class="w-100 mx-auto px-6 sm:max-w-2xl md:max-w-3xl md:px-12 lg:max-w-5xl xl:max-w-7xl xl:px-32">
            <div class="text-center">
                <div
                    class="block rounded-br-3xl rounded-tl-3xl bg-gradient-to-r bg-[hsla(0,0%,100%,0.55)] px-6 py-12 dark:shadow-black/20 md:py-16 md:px-12 mt-[-300px] backdrop-blur-[30px]">
                    <h1 class="mt-2 mb-16 text-2xl font-bold tracking-tight md:text-6xl xl:text-7xl">
                        Maison Des Jeunes<br /><span class="">Hay Al Oumali</span>
                    </h1>
                    <div class="flex justify-center container mx-auto p-4">
                        <a href="{{ route('blog') }}">
                            <button
                                class="block rounded-br-3xl rounded-tl-3xl bg-gradient-to-r to-purple-500 from-blue-400 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-lightyellow-color focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                type="button">
                                BLOG
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- statistics --}}
    <section class="bg-[hsla(0,0%,100%,0.55)]">
        <div class="container rounded-br-3xl flex flex-col mx-auto">
            <div class="w-full draggable">
                <div class="container flex flex-col items-center gap-16 mx-auto my-32">
                    <div class="grid w-full grid-cols-1 lg:grid-cols-4 md:grid-cols-2 gap-y-8">
                        <div class="flex flex-col items-center">
                            <h3 class="text-5xl font-extrabold leading-tight text-center text-mainbeige-color"><span
                                    id="countto1" countTo="{{ $totalArticlesPublished }}"></span>+</h3>
                            <p class="text-base font-medium leading-7 text-center text-mainbeigedark-color">Nbr des
                                articles publiés</p>
                        </div>
                        <div class="flex flex-col items-center">
                            <h3 class="text-5xl font-extrabold leading-tight text-center text-mainbeige-color">
                                <span id="countto2" countTo="{{ $userCount }}"></span>+
                            </h3>
                            <p class="text-base font-medium leading-7 text-center text-mainbeigedark-color">Nbr des
                                utilisateurs</p>
                        </div>
                        <div class="flex flex-col items-center">
                            <h3 class="text-5xl font-extrabold leading-tight text-center text-mainbeige-color">
                                <span id="countto3" countTo="{{ $totalActivites }}"></span>+
                            </h3>
                            <p class="text-base font-medium leading-7 text-center text-mainbeigedark-color">Nbr des
                                Activités</p>
                        </div>
                        {{-- <div class="flex flex-col items-center">
                            <h3 class="text-5xl font-extrabold leading-tight text-center text-mainbeige-color"><span
                                    id="countto4" countTo="18000"></span>+</h3>
                            <p class="text-base font-medium leading-7 text-center text-mainbeigedark-color">Daily
                                Website
                                Visitors</p>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>

    </section>

    {{-- picutes from the Blogg --}}
    <section class="container mx-auto px-5 py-2 lg:px-32 lg:p-24">
        <div class="-m-1 flex flex-wrap md:-m-2">
            <div class="flex lg:w-1/2 flex-wrap">
                <div class="w-1/2 p-1 md:p-2">
                    <img alt="gallery" class="block h-full w-full rounded-lg object-cover object-center"
                        src="{{ asset($articles[2]->picture) }}" />
                </div>
                <div class="w-1/2 p-1 md:p-2">
                    <img alt="gallery" class="block h-full w-full rounded-lg object-cover object-center"
                        src="{{ asset($articles[3]->picture) }}" />
                </div>
                <div class="w-full p-1 md:p-2">
                    <img alt="gallery" class="block h-full w-full rounded-lg object-cover object-center"
                        src="{{ asset($articles[0]->picture) }}" />
                </div>
            </div>
            <div class="flex lg:w-1/2 flex-wrap">
                <div class="w-full p-1 md:p-2">
                    <img alt="gallery" class="block h-full w-full rounded-lg object-cover object-center"
                        src="{{ asset($articles[1]->picture) }}" />
                </div>
                <div class="w-1/2 p-1 md:p-2">
                    <img alt="gallery" class="block h-full w-full rounded-lg object-cover object-center"
                        src="{{ asset($articles[4]->picture) }}" />
                </div>
                <div class="w-1/2 p-1 md:p-2">
                    <img alt="gallery" class="block h-full w-full rounded-lg object-cover object-center"
                        src="{{ asset($articles[5]->picture) }}" />
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-[hsla(0,0%,100%,0.55)]">
        <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
                <div>
                    <img src="{{ asset('img/black-logo.png') }}" class="mr-5 h-24 sm:h-14" alt="logo" />
                    <p class="max-w-xs mt-4 text-sm font-semibold text-black">
                        DAR CHABAB AL HAY AL OUMALI
                    </p>
                    <div class="flex mt-8 space-x-6 text-black">
                        <a class="hover:opacity-75" href="https://www.facebook.com/maisondesjeuneshayoumali"
                            rel="noreferrer">
                            <span class="sr-only"> Facebook </span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fillRule="evenodd"
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                    clipRule="evenodd" />
                            </svg>
                        </a>
                        <a class="hover:opacity-75"
                            href="https://www.instagram.com/darchababhayoumali?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                            rel="noreferrer">
                            <span class="sr-only"> Instagram </span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fillRule="evenodd"
                                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                    clipRule="evenodd" />
                            </svg>
                        </a>
                        {{-- <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
                            <span class="sr-only"> Dribbble </span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fillRule="evenodd"
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                                    clipRule="evenodd" />
                            </svg>
                        </a> --}}
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-8 lg:col-span-2 lg:grid-cols-2">
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
                </div>
            </div>
        </div>
    </footer>
    <div class="p-6 text-center">
        <span>© 2024 Copyright:</span>
        <a class="font-semibold" href="#">Hay Al Oumali</a>
    </div>

    <script>
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
