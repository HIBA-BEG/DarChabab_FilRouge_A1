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

        @if (Auth::check())
            <section class="main-content">
                <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 md:grid-cols-2 lg:gap-8">
                    <div class="post p-5 lg:p-1 rounded-md">
                        <div class="lg:fixed lg:left-14 lg:w-3/12 top-7 md:fixed md:w-5/12 md:top-24">
                            <div class="bg-white p-8 rounded-br-3xl rounded-tl-3xl shadow-md w-full mb-4">
                                @if (auth()->user()->role == 'Admin')
                                    <div class="relative flex justify-end">
                                        <img src="{{ asset($user->profile_picture) }}" alt="Profile Picture"
                                            class="absolute bottom-0 left-2/4 transform translate-x-1/2 translate-y-1/2 w-24 h-24 rounded-full border-4 border-white">
                                    </div>
                                    <div class="flex items-center mt-4">
                                        <h2 class="text-xl font-bold text-gray-800">{{ $user->firstname }}
                                            {{ $user->lastname }}</h2>
                                    </div>
                                    <p class="text-gray-700 mt-2"> Directrice de maison des jeunes Hay Al Oumali </p>
                                @elseif (auth()->check() && auth()->user()->association)
                                    <div class="relative flex justify-end">
                                        <img src="{{ asset($association->profile_picture) }}" alt="Profile Picture"
                                            class="absolute bottom-0 left-2/4 transform translate-x-1/2 translate-y-1/2 w-24 h-24 rounded-full border-4 border-white">
                                    </div>
                                    <div class="flex items-center mt-4">
                                        <h2 class="text-xl font-bold text-gray-800">{{ $association->firstname }}
                                            {{ $association->lastname }}</h2>
                                    </div>
                                    <p class="text-gray-700 mt-2"> Web Developer | Cat Lover | Coffee Enthusiast </p>
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
                                            <a href="{{ $association->otherLink }}"
                                                class="text-blue-500 hover:underline">
                                                Other </a>
                                        @endif
                                    </div>
                                @endif
                            </div>
                            <div class="flex items-center w-full ">
                                <form class="mx-auto w-full" method="GET" action="{{ route('article.search') }}">
                                    @csrf
                                    <div class="flex">
                                        <div class="relative">
                                            <button id="dropdown-button" data-dropdown-toggle="dropdown"
                                                class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200"
                                                type="button">Categories <svg class="w-2.5 h-2.5 ms-2.5"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 10 6">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                                </svg></button>
                                            <div id="dropdown"
                                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                                    aria-labelledby="dropdown-button">
                                                    <li>
                                                        <button type="button" value="all"
                                                            class="categorie-filter-btn inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">All</button>
                                                    </li>
                                                    @foreach ($categories as $categorie)
                                                        <li>
                                                            <button type="button" value="{{ $categorie->id }}"
                                                                class="categorie-filter-btn inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{ $categorie->title }}</button>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="relative w-full">
                                            <input type="search" id="search" name="searchValue"
                                                value="{{ request('searchValue') }}"
                                                class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                                                placeholder="Search Article by title" />
                                            <button type="submit"
                                                class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                <svg class="w-4 h-4" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 20 20">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                                </svg>
                                                <span class="sr-only">Search</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
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
                                <form action="{{ route('article.store') }}" method="POST"
                                    enctype="multipart/form-data">
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
                                            id="title" type="text" placeholder="Enter article title"
                                            name="title" value="{{ old('title') }}">
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
                                        <label for="picture"
                                            class="block text-gray-700 text-sm font-bold mb-2">Ajoutez
                                            une photo:</label>
                                        <input type="file" name="picture" id="picture"
                                            placeholder="profile picture"
                                            class="bg-white file:cursor-pointer cursor-pointer file:border-0 file:rounded-none file:mr-4 file:bg-gray-300 file:hover:bg-gray-200 file:text-white 
                                        w-full rounded-3xl border-none bg-white file:px-6 file:py-2 text-center text-grey-600 outline-none">
                                        @error('picture')
                                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
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

                        <div class="grid grid-cols-1 gap-4" id="articleContainerSearch"></div>
                        <div class="grid grid-cols-1 gap-4" id="articleContainer">
                            <div class="no-articles-message-container">
                                <p class="no-articles-message"></p>
                            </div>
                            @foreach ($articles as $article)
                                <div class="article mycard flex w-full flex-col justify-center rounded-br-3xl rounded-tl-3xl border border-opacity-25 bg-white bg-opacity-30 p-12 backdrop-blur-md backdrop-filter transition-all duration-300"
                                    data-article-categorie="{{ $article->categorie->id }}">

                                    <div class="mb-4 flex items-center justify-between">


                                        <div class="flex items-center space-x-2">
                                            <img src="{{ asset($article->user->profile_picture) }}" alt="User Avatar"
                                                class="h-8 w-8 rounded-full" />
                                            <div>
                                                <p class="font-semibold text-gray-800">{{ $article->user->firstname }}
                                                    {{ $article->user->lastname }}</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex items-center space-x-2">
                                                <p class="font-semibold text-gray-800">Category:</p>
                                                <p class="text-sm text-gray-500">{{ $article->categorie->title }}</p>
                                            </div>
                                            <div class="flex items-center space-x-2">
                                                <p class="font-semibold text-gray-800">Title:</p>
                                                <p class="text-sm text-gray-500">{{ $article->title }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4 flex items-center space-x-2">
                                        <p class="font-semibold text-gray-800"> Description:</p>
                                        <p class="text-gray-800">
                                            {{ $article->description }}
                                        </p>
                                    </div>

                                    <div class="mb-4 flex justify-center">
                                        <img src="{{ asset($article->picture) }}" alt="Post Image"
                                            class="md:h-[600px] object-cover rounded-lg">
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <div class="flex">
                                            <p class="text-sm text-gray-500">Crée le {{ $article->created_at }}</p>
                                        </div>
                                        @if (auth()->check() && $article->user_id == auth()->user()->id || auth()->user()->role == 'Admin')
                                            <div class="flex items-center justify-end gap-6">
                                                <button data-modal-target="crud-modal-{{ $article->id }}"
                                                    data-modal-toggle="crud-modal-{{ $article->id }}"
                                                    type="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="16"
                                                        width="16" viewBox="0 0 512 512">
                                                        <path opacity="1" fill="#2766d3"
                                                            d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152V424c0 48.6 39.4 88 88 88H360c48.6 0 88-39.4 88-88V312c0-13.3-10.7-24-24-24s-24 10.7-24 24V424c0 22.1-17.9 40-40 40H88c-22.1 0-40-17.9-40-40V152c0-22.1 17.9-40 40-40H200c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z" />
                                                    </svg>
                                                </button>
                                                <form action="{{ route('deleteArticle', $article->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <div title="delete">
                                                        <button type="submit">
                                                            <svg xmlns="http://www.w3.org/2000/svg" height="16"
                                                                width="16" viewBox="0 0 448 512">
                                                                <path fill="#e6321e"
                                                                    d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div id="crud-modal-{{ $article->id }}" tabindex="-1"
                                        aria-hidden="true"
                                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative p-4 w-full max-w-md max-h-full">
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <div
                                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                    <h3
                                                        class="text-lg font-semibold text-gray-900 dark:text-white">
                                                        Modifier Article
                                                    </h3>
                                                    <button type="button"
                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                        data-modal-toggle="crud-modal-{{ $article->id }}">
                                                        <svg class="w-3 h-3" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 14 14">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <div class="p-4 md:p-5">
                                                    <form class="space-y-4"
                                                        action="{{ route('updateArticle', $article->id) }}"
                                                        method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')

                                                        <div class="col-span-2">
                                                            <input type="hidden" name="articleID"
                                                                id="editArticleId"
                                                                value="{{ $article->id }}">
                                                            <label for=""
                                                                class="block mb-2 text-sm font-medium text-gray-900 text-black">Titre
                                                                de l'article</label>
                                                            <input type="text" name="title"
                                                                id="editTitle" value="{{ $article->title }}"
                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500"
                                                                placeholder="Type article titre"
                                                                required="">
                                                        </div>
                                                        <div class="col-span-2">
                                                            <input type="hidden" name="articleID"
                                                                id="editArticleId"
                                                                value="{{ $article->id }}">
                                                            <label for=""
                                                                class="block mb-2 text-sm font-medium text-gray-900 text-black">Changer
                                                                la photo "</label>
                                                            <img src="{{ asset($article->picture) }}"
                                                                alt="Current Image">

                                                            <input type="file" name="picture"
                                                                id="editPicture"
                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500"
                                                                placeholder="">
                                                        </div>
                                                        <div class="col-span-2">
                                                            <input type="hidden" name="articleID" id="editArticleId" value="{{ $article->id }}">
                                                            <label for="categorie"
                                                                class="block mb-2 text-sm font-medium text-gray-900 text-black">Categorie</label>
                                                            <select id="categorie" name="categorie_id" id="editCategorie"
                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500">
                                                                <option selected  value="{{ $article->categorie_id }}">{{ $article->categorie->title }}</option>
                                                                @foreach ($categories as $categorie)
                                                                    <option value="{{ $categorie->id }}">{{ $categorie->title }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-span-2">
                                                            <input type="hidden" name="articleID"
                                                                id="editArticleId"
                                                                value="{{ $article->id }}">
                                                            <label for=""
                                                                class="block mb-2 text-sm font-medium text-gray-900 text-black">Description</label>
                                                            <input type="text" name="description"
                                                                id="editDescription"
                                                                value="{{ $article->description }}"
                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500"
                                                                placeholder="Ajoutez une description"
                                                                required="">
                                                        </div>

                                                        <button type="submit"
                                                            class="inline-flex items-center focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-200 hover:bg-blue-400 focus:ring-blue-800">
                                                            <svg class="me-1 -ms-1 w-5 h-5"
                                                                fill="currentColor" viewBox="0 0 20 20"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            Modifier Salle
                                                        </button>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            @endforeach
                        </div>
                        <div class="mt-8 flex justify-center">
                            {{ $articles->links('pagination::tailwind') }}
                        </div>
                    </div>
                </div>
            </section>
        @else
            <section class="main-content">
                <div class="flex justify-center gap-4 lg:gap-8">
                    <div class="p-4 mt-3" id="posted">
                        <div class="top-7 md:top-24">
                            <div class="flex items-center w-full ">
                                <form class="mx-auto w-full" method="GET" action="{{ route('article.search') }}">
                                    @csrf
                                    <div class="flex">
                                        <div class="relative">
                                            <button id="dropdown-button" data-dropdown-toggle="dropdown"
                                                class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200"
                                                type="button">Categories <svg class="w-2.5 h-2.5 ms-2.5"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 10 6">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                                </svg></button>
                                            <div id="dropdown"
                                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                                    aria-labelledby="dropdown-button">
                                                    <li>
                                                        <button type="button" value="all"
                                                            class="categorie-filter-btn inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">All</button>
                                                    </li>
                                                    @foreach ($categories as $categorie)
                                                        <li>
                                                            <button type="button" value="{{ $categorie->id }}"
                                                                class="categorie-filter-btn inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{ $categorie->title }}</button>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="relative w-full">
                                            <input type="search" id="search" name="searchValue"
                                                value="{{ request('searchValue') }}"
                                                class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                                                placeholder="Search Article by title" />
                                            <button type="submit"
                                                class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                <svg class="w-4 h-4" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 20 20">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                                </svg>
                                                <span class="sr-only">Search</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
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
                        </div>
                        <div class="grid grid-cols-1 gap-4" id="articleContainerSearch"></div>
                        <div class="grid grid-cols-1 gap-4" id="articleContainer">
                            <div class="no-articles-message-container">
                                <p class="no-articles-message"></p>
                            </div>
                            @foreach ($articles as $article)
                                <div class="article mycard flex w-full flex-col justify-center rounded-br-3xl rounded-tl-3xl border border-opacity-25 bg-white bg-opacity-30 p-12 backdrop-blur-md backdrop-filter transition-all duration-300"
                                    data-article-categorie="{{ $article->categorie->id }}">

                                    <div class="mb-4 flex items-center justify-between">


                                        <div class="flex items-center space-x-2">
                                            <img src="{{ asset($article->user->profile_picture) }}" alt="User Avatar"
                                                class="h-8 w-8 rounded-full" />
                                            <div>
                                                <p class="font-semibold text-gray-800">{{ $article->user->firstname }}
                                                    {{ $article->user->lastname }}</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex items-center space-x-2">
                                                <p class="font-semibold text-gray-800">Category:</p>
                                                <p class="text-sm text-gray-500">{{ $article->categorie->title }}</p>
                                            </div>
                                            <div class="flex items-center space-x-2">
                                                <p class="font-semibold text-gray-800">Title:</p>
                                                <p class="text-sm text-gray-500">{{ $article->title }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4 flex items-center space-x-2">
                                        <p class="font-semibold text-gray-800"> Description:</p>
                                        <p class="text-gray-800">
                                            {{ $article->description }}
                                        </p>
                                    </div>

                                    <div class="mb-4 flex justify-center">
                                        <img src="{{ asset($article->picture) }}" alt="Post Image"
                                            class="md:h-[600px] object-cover rounded-lg">
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <div class="flex">
                                            <p class="text-sm text-gray-500">Crée le {{ $article->created_at }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="mt-8 flex justify-center">
                            {{ $articles->links('pagination::tailwind') }}
                        </div>
                    </div>
                </div>
            </section>
        @endif
    </div>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'csrftoken': '{{ csrf_token() }}'
            }
        });
    </script>

    <script>
        // to filter articles by categories in blog

        document.addEventListener("DOMContentLoaded", function() {
            const categorieButtons = document.querySelectorAll(".categorie-filter-btn");
            const allArticles = document.querySelectorAll(".article");
            const noArticlesMessageContainer = document.querySelector(
                ".no-articles-message-container"
            );
            const userBanned = true;

            categorieButtons.forEach(function(button) {
                button.addEventListener("click", function() {
                    const selectedCategorieId = this.value;
                    filterArticlessByCategorie(selectedCategorieId);
                });
            });

            function filterArticlessByCategorie(selectedCategorieId) {
                let articlesFound = false;

                allArticles.forEach((article) => {
                    const articleCategorieId = article.getAttribute(
                        "data-article-categorie"
                    );
                    if (
                        selectedCategorieId === "all" ||
                        articleCategorieId === selectedCategorieId
                    ) {
                        article.style.display = "block";
                        articlesFound = true;
                    } else {
                        article.style.display = "none";
                    }
                });
                if (!articlesFound) {
                    const noArticlesMessage = document.querySelector(
                        ".no-articles-message"
                    );
                    if (!noArticlesMessage) {
                        const messageElement = document.createElement("p");
                        messageElement.textContent =
                            "Y a pas d articles dans la categorie selectionnée.";
                        messageElement.className =
                            "flex justify-center w-full no-articles-message";
                        noArticlesMessageContainer.appendChild(messageElement);
                    }
                } else {
                    const noArticlessMessage = document.querySelector(
                        ".no-articles-message"
                    );
                    if (noArticlessMessage) {
                        noArticlessMessage.remove();
                    }
                }
            }
        });


        // searching articles by AJAX in blog

        $(document).ready(function() {
            const currentPage = location.href;
            if (currentPage === "http://127.0.0.1:8000/Myfeed") {
                const search = document.querySelector("#search");
                search.addEventListener("keyup", () => {
                    const searchValue = search.value.trim();
                    console.log("Search query:", searchValue);

                    if (searchValue !== "") {
                        $.ajax({
                            url: `/MyfeedD/search?search=${searchValue}`,
                            type: "GET",
                            success: function(data) {
                                console.log("Received articles:", data);
                                displayArticles(data.articles);
                            },
                            error: function(xhr, status, error) {
                                console.error("Error fetching articles:", xhr, status, error);
                                // alert("An error occurred while fetching articles. Please try again later.");
                            },
                        });
                        $("#articleContainer").hide();
                        $("#articleContainerSearch").show();
                    } else {
                        $("#articleContainer").show();
                        $("#articleContainerSearch").hide();
                    }
                });
            }
        });

        const displayArticles = (articles) => {
            console.log("tesssssssssssst : ", articles);

            const container = document.querySelector("#articleContainerSearch");
            container.innerHTML = "";

            if (articles && articles.data.length > 0) {
                articles.data.forEach((article) => {
                    container.innerHTML += `
                <div class="article flex w-full flex-col justify-center rounded-br-3xl rounded-tl-3xl border border-opacity-25 bg-white bg-opacity-30 p-12 backdrop-blur-md backdrop-filter transition-all duration-300"
                    data-article-categorie="${article.categorie.id}">
                    <div class="mb-4 flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <img src="${article.user.profile_picture}" alt="User Avatar"
                                class="h-8 w-8 rounded-full" />
                            <div>
                                <p class="font-semibold text-gray-800">${article.user.firstname}
                                    ${article.user.lastname}</p>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center space-x-2">
                                <p class="font-semibold text-gray-800">Category:</p>
                                <p class="text-sm text-gray-500">${article.categorie.title}</p>
                            </div>
                            <div class="flex items-center space-x-2">
                                <p class="font-semibold text-gray-800">Title:</p>
                                <p class="text-sm text-gray-500">${article.title}</p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 flex items-center space-x-2">
                        <p class="font-semibold text-gray-800"> Description:</p>
                        <p class="text-gray-800">
                            ${article.description}
                        </p>
                    </div>
                    <div class="mb-4">
                        <img src="${article.picture}" alt="Post Image"
                            class="w-full object-cover rounded-lg">
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex">
                            <p class="text-sm text-gray-500">Crée le ${article.created_at}</p>
                        </div>
                        // This part is skipped for now
                    </div>
                </div>
            `;
                });
            } else {
                container.innerHTML = "<p>No articles found</p>";
            }
        };

        // update article
        document.addEventListener('DOMContentLoaded', function() {
            const editButtons = document.querySelectorAll('.editArticleButton');
            const editArticleIdInput = document.getElementById('editArticleId');
            const editTitleInput = document.getElementById('editTitle');
            const editDescriptionInput = document.getElementById('editDescription');
            const editCategorieInput = document.getElementById('editCategorie');
            editButtons.forEach(function(button) {
                button.addEventListener('click', function(event) {
                    event.preventDefault();

                    const articleId = this.getAttribute('data-article-id');
                    const articleName = this.getAttribute('data-article-name');
                    const articleDescription = this.getAttribute('data-article-description');
                    const articleCategorie = this.getAttribute('data-article-categorie');

                    console.log('Article ID:', articleId);
                    console.log('Article Name:', articleTitle);
                    console.log('Article Description:', articleDescription);
                    console.log('Article Categorie:', articleCategorie);

                    editArticleIdInput.value = articleId;
                    editTitleInput.value = articleTitle;
                    editDescriptionInput.value = articleDescription;
                    editCategorieInput.value = articleCategorie;
                });
            });
        });
    </script>


</body>

</html>
