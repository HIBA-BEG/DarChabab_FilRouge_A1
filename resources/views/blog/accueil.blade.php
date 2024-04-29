<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.head')
</head>

<body class="bg-gradient-to-r from-purple-300 to-blue-200">
    <div class="relative">

        @if (Auth::check())
            @include('layouts.sidebar')
        @else
            @include('layouts.navbar')
        @endif

        <section class="main-content">
            <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 md:grid-cols-2 lg:gap-8">
                <div class="post p-5 lg:p-1 rounded-md">
                    <div class="lg:fixed lg:left-14 lg:w-3/12 top-7 md:fixed md:w-5/12 md:top-24">
                        <div class="bg-white p-8 rounded-br-3xl rounded-tl-3xl shadow-md w-full mb-4">
                            @if (auth()->user()->role == 'Admin')
                                <!-- Banner Profile -->
                                <div class="relative flex justify-end">
                                    {{-- <img src="{{ asset($admin->profile_picture) }}" alt="Banner Profile" class="w-full rounded-t-lg"> --}}
                                    <img src="{{ asset($admin->profile_picture) }}" alt="Profile Picture"
                                        class="absolute bottom-0 left-2/4 transform translate-x-1/2 translate-y-1/2 w-24 h-24 rounded-full border-4 border-white">
                                </div>
                                <!-- User Info with Verified Button -->
                                <div class="flex items-center mt-4">
                                    <h2 class="text-xl font-bold text-gray-800">{{ $admin->firstname }}
                                        {{ $admin->lastname }}</h2>
                                </div>
                                <!-- Bio -->
                                <p class="text-gray-700 mt-2"> Directrice de maison des jeunes Hay Al Oumali </p>
                            @else
                                <!-- Banner Profile -->
                                <div class="relative flex justify-end">
                                    {{-- <img src="https://placekitten.com/500/150" alt="Banner Profile" class="w-full rounded-t-lg"> --}}
                                    <img src="{{ asset($association->profile_picture) }}" alt="Profile Picture"
                                        class="absolute bottom-0 left-2/4 transform translate-x-1/2 translate-y-1/2 w-24 h-24 rounded-full border-4 border-white">
                                </div>
                                <!-- User Info with Verified Button -->
                                <div class="flex items-center mt-4">
                                    <h2 class="text-xl font-bold text-gray-800">{{ $association->firstname }}
                                        {{ $association->lastname }}</h2>
                                </div>
                                <!-- Bio -->
                                <p class="text-gray-700 mt-2"> Web Developer | Cat Lover | Coffee Enthusiast </p>
                                <!-- Social Links -->
                                <div class="flex items-center mt-4 space-x-4">
                                    @if (isset($association->facebookLink) && $association->facebookLink)
                                        <a href="{{ $association->facebookLink }}"
                                            class="text-blue-500 hover:underline"> Facebook </a>
                                    @endif
                                    @if (isset($association->instagramLink) && $association->instagramLink)
                                        <a href="{{ $association->instagramLink }}"
                                            class="text-blue-500 hover:underline"> Instagram </a>
                                    @endif
                                    @if (isset($association->otherLink) && $association->otherLink)
                                        <a href="{{ $association->otherLink }}" class="text-blue-500 hover:underline"> Other </a>
                                    @endif
                                </div>

                            @endif
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
                        <div class="bg-white p-8 rounded-br-3xl rounded-tl-3xl shadow-md w-full">
                            <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="col-span-2">
                                    <label for="categorie"
                                        class="block mb-2 text-sm font-medium text-gray-900 text-black">Categorie</label>
                                    <select id="categorie" name="categorie_id"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500">
                                        <option selected disabled="">Select categorie</option>
                                        @foreach ($categories as $categorie)
                                            <option value="{{ $categorie->id }}">{{ $categorie->title }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-6">
                                    <label class="block text-gray-700 font-bold mb-2" for="title">
                                        Titre
                                    </label>
                                    <input
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="title" type="text" placeholder="Enter article title" name="title"
                                        value="{{ old('title') }}">
                                    @error('title')
                                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label class="block text-gray-700 font-bold mb-2" for="description">
                                        Description
                                    </label>
                                    <textarea
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        id="description" placeholder="Enter article description" name="description">{{ old('description') }}</textarea>
                                    @error('description')
                                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-6 text-lg">
                                    <label for="picture" class="block text-gray-700 text-sm font-bold mb-2">Ajoutez
                                        une photo:</label>
                                    <input type="file" name="picture" id="picture"
                                        placeholder="profile picture"
                                        class="bg-white file:cursor-pointer cursor-pointer file:border-0 file:rounded-none file:mr-4 file:bg-gray-300 file:hover:bg-gray-200 file:text-white 
                                        w-full rounded-3xl border-none bg-white file:px-6 file:py-2 text-center text-grey-600 outline-none">
                                    @error('picture')
                                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                    @enderror
                                </div>

                                {{-- <div class="mb-6">
                                    <label for="picture" class="block text-gray-700 text-sm font-bold mb-2">Ajoutez
                                        une photo:</label>
                                    <div
                                        class="relative border-2 rounded-md px-4 py-3 bg-white flex items-center justify-between hover:border-blue-500 transition duration-150 ease-in-out">
                                        <input class="absolute inset-0 w-full h-full opacity-0 cursor-pointer"
                                            type="file" id="picture" name="picture" multiple>
                                        @error('picture')
                                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                        @enderror
                                        <div class="flex items-center">
                                            <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                            </svg>
                                            <span class="ml-2 text-sm text-gray-600">Choisissez vos photos</span>
                                        </div>
                                        <span class="text-sm text-gray-500">Max file size: 5MB</span>
                                    </div>
                                </div> --}}
                                <!-- Submit Button and Character Limit Section -->
                                <div class="flex items-center justify-between">
                                    <button type="submit"
                                        class="flex justify-center items-center bg-blue-500 hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue text-white py-2 px-4 rounded-md transition duration-300 gap-2">
                                        Poster
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                            viewBox="0 0 24 24" id="send" fill="#fff">
                                            <path fill="none" d="M0 0h24v24H0V0z"></path>
                                            <path
                                                d="M3.4 20.4l17.45-7.48c.81-.35.81-1.49 0-1.84L3.4 3.6c-.66-.29-1.39.2-1.39.91L2 9.12c0 .5.37.93.87.99L17 12 2.87 13.88c-.5.07-.87.5-.87 1l.01 4.61c0 .71.73 1.2 1.39.91z">
                                            </path>
                                        </svg>
                                    </button>
                                    <span class="text-gray-500 text-sm">Max 280 characters</span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-2 p-4 mt-3" id="posted">
                    <!-- First Column -->
                    <div class="grid grid-cols-1 gap-4">
                        <div
                            class="flex w-full flex-col justify-center rounded-br-3xl rounded-tl-3xl border border-opacity-25 bg-white bg-opacity-30 p-12 backdrop-blur-md backdrop-filter transition-all duration-300">
                            <!-- User Info with Three-Dot Menu -->
                            <div class="mb-4 flex items-center justify-between">
                                <div class="flex items-center space-x-2">
                                    <img src="https://placekitten.com/40/40" alt="User Avatar"
                                        class="h-8 w-8 rounded-full" />
                                    <div>
                                        <p class="font-semibold text-gray-800">John Doe</p>
                                        <p class="text-sm text-gray-500">Posted 2 hours ago</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Message -->
                            <div class="mb-4">
                                <p class="text-gray-800">
                                    Just another day with adorable kittens! 🐱 <a href=""
                                        class="text-blue-600">#CuteKitten</a>
                                    <a href="" class="text-blue-600">#AdventureCat</a>
                                </p>
                            </div>

                            <div id="controls-carousel" class="relative w-full" data-carousel="static">
                                <!-- Carousel wrapper -->
                                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                                    <!-- Item 1 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="/docs/images/carousel/carousel-1.svg"
                                            class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2"
                                            alt="..." />
                                    </div>
                                    <!-- Item 2 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                                        <img src="/docs/images/carousel/carousel-2.svg"
                                            class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2"
                                            alt="..." />
                                    </div>
                                    <!-- Item 3 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="/docs/images/carousel/carousel-3.svg"
                                            class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2"
                                            alt="..." />
                                    </div>
                                    <!-- Item 4 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="/docs/images/carousel/carousel-4.svg"
                                            class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2"
                                            alt="..." />
                                    </div>
                                    <!-- Item 5 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="/docs/images/carousel/carousel-5.svg"
                                            class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2"
                                            alt="..." />
                                    </div>
                                </div>
                                <!-- Slider controls -->
                                <button type="button"
                                    class="group absolute start-0 top-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none"
                                    data-carousel-prev>
                                    <span
                                        class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-gray-800/70">
                                        <svg class="h-4 w-4 text-white rtl:rotate-180 dark:text-gray-800"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                                        </svg>
                                        <span class="sr-only">Previous</span>
                                    </span>
                                </button>
                                <button type="button"
                                    class="group absolute end-0 top-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none"
                                    data-carousel-next>
                                    <span
                                        class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-gray-800/70">
                                        <svg class="h-4 w-4 text-white rtl:rotate-180 dark:text-gray-800"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                        </svg>
                                        <span class="sr-only">Next</span>
                                    </span>
                                </button>
                            </div>

                            <!-- Like and Comment Section -->

                            <div class="flex items-center justify-end gap-6">
                                <a href="#" title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16"
                                        viewBox="0 0 512 512">
                                        <path opacity="1" fill="#2766d3"
                                            d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152V424c0 48.6 39.4 88 88 88H360c48.6 0 88-39.4 88-88V312c0-13.3-10.7-24-24-24s-24 10.7-24 24V424c0 22.1-17.9 40-40 40H88c-22.1 0-40-17.9-40-40V152c0-22.1 17.9-40 40-40H200c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z" />
                                    </svg>
                                </a>
                                <form action="" method="post">
                                    <div title="delete">
                                        <button type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16"
                                                viewBox="0 0 448 512">
                                                <path fill="#e6321e"
                                                    d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z" />
                                            </svg>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</body>

</html>
