<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Hay Al Oumali')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Loopple/loopple-public-assets@main/motion-tailwind/motion-tailwind.css" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/gh/Loopple/loopple-public-assets@main/motion-tailwind/scripts/plugins/countup.min.js"></script>
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

<body>
    <!-- component -->
    @include('layouts.navbar')

    @yield('content')

</body>

</html>
