<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <style>
        .toggle-checkbox:checked {
            @apply: right-0 border-green-400;
            right: 0;
            border-color: #68D391;
        }

        .toggle-checkbox:checked+.toggle-label {
            @apply: bg-green-400;
            background-color: #68D391;
        }
    </style>
    @include('layouts.head')

</head>

<body class="bg-gradient-to-r from-purple-300 to-blue-200">
    <div class="relative">


        @include('layouts.sidebar')
        <!-- component -->
        <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
            <div class="text-center pb-12">
                <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl font-heading text-gray-900">
                    Confirmation des comptes
                </h1>
            </div>
            @if (session('success'))
                <div id="alertDiv" role="alert">
                    <div class="flex items-center bg-green-500 text-white text-sm font-bold px-4 py-3" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-4 h-4">
                            <path fill="#00c23a"
                                d="M342.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 178.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l80 80c12.5 12.5 32.8 12.5 45.3 0l160-160zm96 128c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 402.7 54.6 297.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0l256-256z" />
                        </svg>
                        <p>{{ session('success') }}</p>
                    </div>
                </div>
            @endif
            @if ($allusers->isEmpty())

                <div
                    class="box w-full rounded-br-3xl rounded-tl-3xl flex flex-col justify-center p-12 bg-opacity-30 bg-white border border-opacity-25 backdrop-filter backdrop-blur-md transition-all duration-300">
                    <div class="text-center py-12">
                        <p class="text-base font-bold text-gray-500">Pas de comptes à confirmer pour le moment.</p>
                    </div>
                </div>
            @else
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($allusers as $user)
                        <div
                            class="box w-full rounded-br-3xl rounded-tl-3xl flex flex-col justify-center p-12 bg-opacity-30 bg-white border border-opacity-25 backdrop-filter backdrop-blur-md transition-all duration-300">
                            <div class="mb-8">
                                <img class="w-full object-cover rounded-br-3xl rounded-tl-3xl h-48"
                                    src="{{ asset('img/' . $user->profile_picture) }}" alt="photo de profile">
                            </div>
                            <div class="text-center">
                                <p class="text-xl text-gray-700 font-bold mb-2">{{ $user->firstname }}
                                    {{ $user->lastname }}</p>
                                <p class="text-base text-gray-600 font-normal">{{ $user->email }}</p>
                            </div>
                            <div class="p-8 justify-center">
                                <form action="{{ route('updateConfirmed', $user->id) }}" method="POST">
                                    @csrf
                                    @method('patch')
                                    <input type="hidden" name="confirmed" value="1">
                                    <button type="submit"
                                        class="w-full rounded-br-3xl rounded-tl-3xl bg-gradient-to-r to-purple-400 from-blue-300 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-lightyellow-color focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                        data-ripple-light="true">
                                        Confirmer
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </section>
    </div>
    <script>
        setTimeout(function() {
            document.getElementById('alertDiv').style.display = 'none';
        }, 4000); // 4000 milliseconds 
    </script>
</body>


</html>
