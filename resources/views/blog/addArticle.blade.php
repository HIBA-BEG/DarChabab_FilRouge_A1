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

            <div class="container mx-auto py-8">
                <h1 class="text-3xl font-bold mb-6">Create New Article Blog</h1>

                <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="title">
                            Title
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="title" type="text" placeholder="Entez le titre de l'article " name="title"
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

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="pictures">
                            Pictures
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="pictures" type="file" name="pictures[]" multiple>
                        @error('pictures.*')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-between">
                        <button
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="submit">
                            Create Article Blog
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </div>
</body>

</html>
