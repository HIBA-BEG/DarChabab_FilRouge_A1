<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Hay Al Oumali')</title>

    @include('layouts.head')
    

</head>

<body>
    <!-- component -->
    @auth
        @if (auth()->user()->role == 'Admin')
            @include('layouts.sidebar')
            @include('admin.home')
        @elseif(auth()->user()->role == 'Association' || auth()->user()->role == 'Club')
            @include('layouts.navbar')

            @include('layouts.footer')
        @endif

        @include('layouts.navbar')

        @yield('content')

        @include('layouts.footer')

    @endauth
</body>

</html>
