<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.head')
</head>

<body class="bg-gradient-to-r from-purple-300 to-blue-200">
    <div class="relative">
        @include('layouts.sidebar')
        <section class="main-content">
            <section>
                <div class="py-16">
                    <div class="mx-auto px-6 max-w-6xl text-gray-500">
                        <div class="text-center pb-12">
                            <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl font-heading text-gray-900">
                                Mes Reservations
                            </h1>
                        </div>
                        <div class="flex justify-end container mx-auto p-4">
                            <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                                class="block rounded-br-3xl rounded-tl-3xl bg-gradient-to-r to-purple-500 from-blue-400 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-lightyellow-color focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                type="button">
                                Ajouter une reservation
                            </button>
                        </div>

                        {{--hiba don't forget to add hidden to the first div --}}
                        <div id="crud-modal" tabindex="-1" aria-hidden="true"
                            class="hidden fixed left-0 right-0 top-0 z-50 h-[calc(100%-2rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
                            <div class="relative max-h-full w-full max-w-md p-4">
                                <div class="relative rounded-br-3xl rounded-tl-3xl  bg-white shadow dark:bg-gray-700">
                                    <div
                                        class="flex items-center justify-between rounded-t border-b p-4 md:p-5 dark:border-gray-600">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Créer une
                                            reservation</h3>
                                        <button type="button"
                                            class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-toggle="crud-modal">
                                            <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Quitter</span>
                                        </button>
                                    </div>

                                    <form class="p-4 md:p-5" action="{{ route('addReservation') }}" method="POST">
                                        @csrf
                                        <div class="mb-4 grid grid-cols-2 gap-4">
                                            <div class="col-span-2">
                                                <label for="activite_name"
                                                    class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nom
                                                    de l'activité</label>
                                                <input type="text" name="activite_name" id="activite_name"
                                                    class="focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-br-3xl rounded-tl-3xl border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400"
                                                    placeholder="Saisissez le nom de l'activité" />
                                            </div>
                                            <div class="col-span-2">
                                                <label for="activite_description"
                                                    class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Description
                                                    de l'activité</label>
                                                <textarea name="activite_description" id="activite_description" cols="30" rows="5"
                                                    class="focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-br-3xl rounded-tl-3xl border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400"
                                                    placeholder="Donnez une description de l'activité"></textarea>
                                            </div>
                                            <div class="col-span-2 ">
                                                <label for="salle"
                                                    class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Salle</label>
                                                <select id="salle" name="salle_id"
                                                    class="focus:ring-primary-500 focus:border-primary-500 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-br-3xl rounded-tl-3xl  border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400">
                                                    <option selected disabled="">Selectionnez une salle</option>
                                                    @foreach ($salles as $salle)
                                                        <option value="{{ $salle->id }}">{{ $salle->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-span-2">
                                                <label for="description"
                                                    class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Date
                                                    et/ou temps de debut</label>
                                                <input type="datetime-local" name="startTime" id="startTime"
                                                    class="focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-br-3xl rounded-tl-3xl border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400"
                                                    required="" />
                                            </div>
                                            <div class="col-span-2">
                                                <label for="description"
                                                    class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Date
                                                    et/ou temps de fin</label>
                                                <input type="datetime-local" name="endTime" id="endTime"
                                                    class="focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-br-3xl rounded-tl-3xl border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400"
                                                    required="" />
                                            </div>
                                        </div>
                                        <div class="flex justify-center">
                                            <button type="submit" name="addReservation"
                                                class="rounded-br-3xl rounded-tl-3xl bg-gradient-to-r to-purple-500 from-blue-400 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-lightyellow-color focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                                                Reserver
                                            </button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($reservations as $reservation)
                            <div class="box w-full rounded-br-3xl rounded-tl-3xl flex flex-col justify-center p-12 bg-opacity-30 bg-white border border-opacity-25 backdrop-filter backdrop-blur-md transition-all duration-300">
                                <div class="text-center">
                                    <p class="text-xl text-gray-700 font-bold mb-2">{{ $reservation->activite->name }}</p>
                                </div>
                                <p class="text-base text-black font-normal">{{ $reservation->activite->description }}</p>
                                <div class="mt-5">
                                    <p class="text-base text-black font-normal">{{ $reservation->salle->name }}</p>
                                </div>
                                <div class="mt-5">
                                    <p class="text-base text-black font-normal">Start Time: {{ $reservation->startTime }}</p>
                                    <p class="text-base text-black font-normal">End Time: {{ $reservation->endTime }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </section>
    </div>
    <script>
        var now = new Date();

        var nowFormatted = now.getFullYear() + '-' + ('0' + (now.getMonth() + 1)).slice(-2) + '-' + ('0' + now.getDate())
            .slice(-2) + 'T' + ('0' + now.getHours()).slice(-2) + ':' + ('0' + now.getMinutes()).slice(-2);

        document.getElementById('startTime').min = nowFormatted;

        function updateEndTimeMin() {
            var startTimeValue = document.getElementById('startTime').value;
            document.getElementById('endTime').min = startTimeValue;
        }
    </script>
</body>

</html>
