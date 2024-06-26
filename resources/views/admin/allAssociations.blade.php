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
            <div class="m-5">
                @if ($errors->any())
                    <div class="col-12">
                        @foreach ($errors->all() as $error)
                            <div class="bg-red-100 border border-red-400 text-red-700 w-full px-4 py-3 lg:px-0 mx-auto rounded relative"
                                role="alert">
                                <strong class="font-bold">
                                    {{ $error }}
                                </strong>
                            </div>
                        @endforeach
                    </div>
                @endif
                @if (session()->has('error'))
                    <div class="bg-red-100 border border-red-400 text-red-700 w-full px-4 py-3 lg:px-0 mx-auto rounded relative"
                        role="alert">
                        <strong class="font-bold">
                            {{ session('error') }}
                        </strong>
                    </div>
                @endif
                @if (session()->has('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 w-full px-4 py-3 lg:px-0 mx-auto rounded relative"
                        role="alert">
                        <strong>
                            {{ session('success') }}
                        </strong>
                    </div>
                @endif
            </div>
            @if ($associations->isEmpty())
                <div
                    class="box w-full rounded-br-3xl rounded-tl-3xl flex flex-col justify-center p-12 bg-opacity-30 bg-white border border-opacity-25 backdrop-filter backdrop-blur-md transition-all duration-300">
                    <div class="text-center py-12">
                        <p class="text-base font-bold text-gray-500">Pas d'associations</p>
                    </div>
                </div>
            @else
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($associations as $association)
                        @if ($association->banned)
                            <div
                                class="box w-full rounded-br-3xl rounded-tl-3xl flex flex-col justify-center p-12 bg-opacity-30 bg-white border border-opacity-25 backdrop-filter backdrop-blur-md  transition-all duration-300">
                                <div class="mb-8">
                                    <img class="w-full object-cover rounded-br-3xl rounded-tl-3xl h-48"
                                        src="{{ asset($association->profile_picture) }}"
                                        alt="photo de profile">
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


                                <div class="flex justify-start h-fit mt-4">
                                    <form action="{{ route('Archive.association', ['userId' => $association->id]) }}"
                                        method="post">
                                        @csrf
                                        @method('PUT')
                                        <div title="archived">
                                            <button type="submit" class="w-full rounded-br-3xl rounded-tl-3xl bg-gradient-to-r to-purple-400 from-blue-300 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-lightyellow-color focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                                                Archive
                                            </button>
                                        </div>
                                    </form>
                                </div>

                                <div class="flex justify-end h-fit">
                                    <form action="{{ route('unban.association', ['userId' => $association->id]) }}"
                                        method="post">
                                        @csrf
                                        @method('PUT')
                                        <div title="unban">
                                            <button type="submit">
                                                <svg height="16" width="14" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg" stroke="#1dd33b">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                        stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path
                                                            d="M4.52185 7H7C7.55229 7 8 7.44772 8 8C8 8.55229 7.55228 9 7 9H3C1.89543 9 1 8.10457 1 7V3C1 2.44772 1.44772 2 2 2C2.55228 2 3 2.44772 3 3V5.6754C4.26953 3.8688 6.06062 2.47676 8.14852 1.69631C10.6633 0.756291 13.435 0.768419 15.9415 1.73041C18.448 2.69239 20.5161 4.53782 21.7562 6.91897C22.9963 9.30013 23.3228 12.0526 22.6741 14.6578C22.0254 17.263 20.4464 19.541 18.2345 21.0626C16.0226 22.5842 13.3306 23.2444 10.6657 22.9188C8.00083 22.5931 5.54702 21.3041 3.76664 19.2946C2.20818 17.5356 1.25993 15.3309 1.04625 13.0078C0.995657 12.4579 1.45216 12.0088 2.00445 12.0084C2.55673 12.0079 3.00351 12.4566 3.06526 13.0055C3.27138 14.8374 4.03712 16.5706 5.27027 17.9625C6.7255 19.605 8.73118 20.6586 10.9094 20.9247C13.0876 21.1909 15.288 20.6513 17.0959 19.4075C18.9039 18.1638 20.1945 16.3018 20.7247 14.1724C21.2549 12.043 20.9881 9.79319 19.9745 7.8469C18.9608 5.90061 17.2704 4.3922 15.2217 3.6059C13.173 2.8196 10.9074 2.80968 8.8519 3.57803C7.11008 4.22911 5.62099 5.40094 4.57993 6.92229C4.56156 6.94914 4.54217 6.97505 4.52185 7Z"
                                                            fill="#0F0F0F"></path>
                                                    </g>
                                                </svg>
                                            </button>
                                        </div>
                                    </form>
                                </div>


                            </div>
                        @else
                            <div
                                class="box w-full rounded-br-3xl rounded-tl-3xl flex flex-col justify-center p-12 bg-opacity-30 bg-white border border-opacity-25 backdrop-filter backdrop-blur-md  transition-all duration-300">
                                <div class="mb-8">
                                    <img class="w-full object-cover rounded-br-3xl rounded-tl-3xl h-48"
                                        src="{{ asset($association->profile_picture) }}"
                                        alt="photo de profile">
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

                                <div>
                                    <div class="flex justify-start h-fit mt-4">
                                        <form
                                            action="{{ route('Archive.association', ['userId' => $association->id]) }}"
                                            method="post">
                                            @csrf
                                            @method('PUT')
                                            <div title="archived">
                                                <button type="submit" class="w-full rounded-br-3xl rounded-tl-3xl bg-gradient-to-r to-purple-400 from-blue-300 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-lightyellow-color focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                                                    Archive
                                                </button>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="flex justify-end h-fit">
                                        <form action="{{ route('ban.association', ['userId' => $association->id]) }}"
                                            method="post">
                                            @csrf
                                            @method('PUT')
                                            <div title="ban">
                                                <button type="submit">
                                                    <svg height="16" width="14" fill="#fb0909"
                                                        viewBox="0 0 32 32" version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg" transform="rotate(90)">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                            stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path
                                                                d="M16 0c-8.836 0-16 7.163-16 16s7.163 16 16 16c8.837 0 16-7.163 16-16s-7.163-16-16-16zM2 16c0-3.508 1.3-6.717 3.441-9.177l19.745 19.745c-2.46 2.152-5.673 3.463-9.186 3.463-7.72 0-14-6.312-14-14.032v0zM26.594 25.15l-19.738-19.738c2.456-2.123 5.651-3.412 9.143-3.412 7.72 0 14 6.28 14 14 0 3.489-1.286 6.689-3.406 9.149z">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            @endif
        </section>
    </div>
</body>

</html>
