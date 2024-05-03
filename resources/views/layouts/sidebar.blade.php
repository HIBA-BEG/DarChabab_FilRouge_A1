<style>
    ul.breadcrumb li+li::before {
        content: "\276F";
        padding-left: 8px;
        padding-right: 4px;
        color: inherit;
    }

    ul.breadcrumb li span {
        opacity: 60%;
    }

    #sidebar {
        -webkit-transition: all 300ms cubic-bezier(0, 0.77, 0.58, 1);
        transition: all 300ms cubic-bezier(0, 0.77, 0.58, 1);
    }

    #sidebar.show {
        transform: translateX(0);
    }

    #sidebar ul li a.active {
        background: #1f2937;
        background-color: #1f2937;
    }
</style>

@if (auth()->user()->role == 'Admin')
    <nav id="navbar" class="sticky top-0 z-40 flex w-full flex-row justify-end bg-gray-700 px-4 sm:justify-between">
        <ul class="breadcrumb hidden flex-row items-center py-4 text-lg text-white sm:flex">
            <li class="inline">
                <a href="#">Dar Chabab Hay Al Oumali</a>
            </li>
            <li class="inline">
                <span> </span>
            </li>
        </ul>
        <button id="btnSidebarToggler" type="button" class="py-4 text-2xl text-white hover:text-gray-200">
            <svg id="navClosed" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="h-8 w-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <svg id="navOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="hidden h-8 w-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </nav>

    <div id="containerSidebar" class="z-40">
        <div class="navbar-menu relative z-40">
            <nav id="sidebar"
                class="fixed left-0 bottom-0 flex w-3/4 -translate-x-full flex-col overflow-y-auto bg-gray-700 pt-6 pb-8 sm:max-w-xs lg:w-80">
                <div class="px-4 pb-6">
                    <h3 class="mb-2 text-xs font-medium uppercase text-gray-500">
                        Associations
                    </h3>
                    <ul class="mb-8 text-sm font-medium">
                        <li>
                            <a class="nav-link flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                                href="{{ route('admin.home') }}">
                                <span class="select-none">Statistiques</span>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                                href="{{ route('confirmAccount') }}">
                                <span class="select-none">Confirmer les comptes</span>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                                href="{{ route('Associations') }}">
                                <span class="select-none">Associations</span>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                                href="{{ route('ArchivedAssociations') }}">
                                <span class="select-none">Associations Archivées</span>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                                href="/">
                                <span class="select-none">Accueil</span>
                            </a>
                        </li>
                    </ul>
                </div>
                

                <div class="px-4 pb-6">
                    <h3 class="mb-2 text-xs font-medium uppercase text-gray-500">
                        Salles
                    </h3>
                    <ul class="mb-8 text-sm font-medium">
                        <li>
                            <a class="nav-link flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                                href="{{ route('admin.salles') }}">
                                <span class="select-none">Toutes les salles</span>
                            </a>
                        </li>
                        {{-- <li>
                            <a class="nav-link flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                                href="#Reservations">
                                <span class="select-none">Reservations</span>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                                href="#Calendrier">
                                <span class="select-none">Calendrier</span>
                            </a>
                        </li> --}}
                    </ul>
                </div>

                <div class="px-4 pb-6">
                    <h3 class="mb-2 text-xs font-medium uppercase text-gray-500">
                        Blog
                    </h3>
                    <ul class="mb-8 text-sm font-medium">
                        <li>
                            <a class="nav-link flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                                href="{{ route('blog')}}">
                                <span class="select-none">My feed</span>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                                href="#ex2">
                                <span class="select-none">...</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="flex justify-center container mx-auto p-4">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit"
                            class="rounded-br-3xl rounded-tl-3xl bg-gradient-to-r to-purple-500 from-blue-400 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-lightyellow-color focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                            data-ripple-light="true">
                            LOGOUT
                        </button>
                    </form>
                </div>

            </nav>
        </div>
        <div class="mx-auto lg:ml-80"></div>
    </div>

@else
    <nav id="navbar" class="sticky top-0 z-40 flex w-full flex-row justify-end bg-gray-700 px-4 sm:justify-between">
        <ul class="breadcrumb hidden flex-row items-center py-4 text-lg text-white sm:flex">
            <li class="inline">
                <a href="#">{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</a>
            </li>
            <li class="inline">
                <span> </span>
            </li>
        </ul>
        <button id="btnSidebarToggler" type="button" class="py-4 text-2xl text-white hover:text-gray-200">
            <svg id="navClosed" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="h-8 w-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <svg id="navOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="hidden h-8 w-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </nav>

    <div id="containerSidebar" class="z-40">
        <div class="navbar-menu relative z-40">
            <nav id="sidebar"
                class="fixed left-0 bottom-0 flex w-3/4 -translate-x-full flex-col overflow-y-auto bg-gray-700 pt-6 pb-8 sm:max-w-xs lg:w-80">
                <div class="px-4 pb-6">
                    <h3 class="mb-2 text-xs font-medium uppercase text-gray-500">
                        Mon Dashboard
                    </h3>
                    <ul class="mb-8 text-sm font-medium">
                        <li>
                            <a class="nav-link flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                                href="{{ route('association.home') }}">
                                <span class="select-none">Salles</span>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                                href="{{ route('mesActivites') }}">
                                <span class="select-none">Mes Activités</span>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                                href="{{ route('reservations') }}">
                                <span class="select-none">Mes Reservations</span>
                            </a>
                        </li>
                        {{-- <li>
                            <a class="nav-link flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                                href="#Clubs">
                                <span class="select-none">Clubs</span>
                            </a>
                        </li> 
                        <li>
                            <a class="flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                                href="#Calendrier">
                                <span class="select-none">Calendrier</span>
                            </a>
                        </li>--}}
                    </ul>
                </div>

                <div class="px-4 pb-6">
                    <h3 class="mb-2 text-xs font-medium uppercase text-gray-500">
                        Mon Profile
                    </h3>
                    <ul class="mb-8 text-sm font-medium">
                        @if (Auth::user()->association)
                            <li>
                                <a class="nav-link flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                                    href="{{ route('profile.ShowProfileAssociation') }}">
                                    <span class="select-none">Profile</span>
                                </a>
                            </li>
                        @else
                            <li>
                                <a class="nav-link flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                                    href="{{ route('profile.CompleteAssociation') }}">
                                    <span class="select-none">Completer mon profile</span>
                                </a>
                            </li>
                        @endif

                    </ul>
                </div>

                <div class="px-4 pb-6">
                    <h3 class="mb-2 text-xs font-medium uppercase text-gray-500">
                        Blog
                    </h3>
                    <ul class="mb-8 text-sm font-medium">
                        <li>
                            <a class="nav-link flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                                href="{{ route('blog')}}">
                                <span class="select-none">My feed</span>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                                href="#ex2">
                                <span class="select-none">...</span>
                            </a>
                        </li>
                    </ul>
                </div>


                <div class="flex justify-center container mx-auto p-4">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf 
                        <button type="submit"
                            class="rounded-br-3xl rounded-tl-3xl bg-gradient-to-r to-purple-500 from-blue-400 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-lightyellow-color focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                            data-ripple-light="true">
                            LOGOUT
                        </button>
                    </form>
                </div>


            </nav>
        </div>
        <div class="mx-auto lg:ml-80"></div>
    </div>
@endif


<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", () => {
        const navbar = document.getElementById("navbar");
        const sidebar = document.getElementById("sidebar");
        const btnSidebarToggler = document.getElementById("btnSidebarToggler");
        const navClosed = document.getElementById("navClosed");
        const navOpen = document.getElementById("navOpen");

        btnSidebarToggler.addEventListener("click", (e) => {
            e.preventDefault();
            sidebar.classList.toggle("show");
            navClosed.classList.toggle("hidden");
            navOpen.classList.toggle("hidden");
        });

        sidebar.style.top = parseInt(navbar.clientHeight) - 1 + "px";
    });

    var currentUrl = window.location.href;

    var navLinks = document.querySelectorAll('.nav-link');

    navLinks.forEach(function(link) {
        var linkUrl = link.getAttribute('href');

        if (currentUrl === linkUrl) {
            link.classList.add('active');
        }
    });
</script>
