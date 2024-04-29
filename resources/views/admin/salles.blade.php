<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.head')
</head>

<body class="bg-gradient-to-r from-purple-300 to-blue-200">
    <div class="relative">

        @include('layouts.sidebar')

        <section class="main-content">
            <div class="py-16">
                <div class="mx-auto px-6 max-w-6xl text-gray-500">
                    <div class="text-center pb-12">
                        <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl font-heading text-gray-900">
                            Toutes les salles
                        </h1>
                    </div>

                    <!-- Main modal -->
                    <div id="crud-modal" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-md max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow bg-blue-50">
                                <!-- Modal header -->
                                <div
                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-600">
                                    <h3 class="text-lg font-semibold text-gray-900 text-black">
                                        Ajouter une salle
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center hover:bg-gray-600 hover:text-white"
                                        data-modal-toggle="crud-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Fermer</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <form class="p-4 md:p-5" action="{{ route('addSalle') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')

                                    <div class="grid gap-4 mb-4 grid-cols-2">
                                        <div class="col-span-2">
                                            <label for=""
                                                class="block mb-2 text-sm font-medium text-gray-900 text-black">Nom de
                                                la
                                                salle</label>
                                            <input type="text" name="name" id=""
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500"
                                                placeholder="Ecrivez le nom de la salle" required="">
                                        </div>
                                        <div class="col-span-2">
                                            <label for=""
                                                class="block mb-2 text-sm font-medium text-gray-900 text-black">Photo de
                                                la
                                                salle</label>
                                            <input type="file" name="profile_picture" id="profile_picture"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500"
                                                placeholder="Photo de la salle" required="">
                                        </div>
                                        <div class="col-span-2">
                                            <label for=""
                                                class="block mb-2 text-sm font-medium text-gray-900 text-black">Description</label>
                                            <input type="text" name="description" id=""
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500"
                                                placeholder="Donnez une description de la salle" required="">
                                        </div>
                                        <div class="col-span-2">
                                            <label for=""
                                                class="block mb-2 text-sm font-medium text-gray-900 text-black">Capacite</label>
                                            <input type="number" name="capacite" id=""
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500"
                                                placeholder="Quelle est la capacite de la salle" required="">
                                        </div>
                                    </div>
                                    <button type="submit" name="addcat"
                                        class="inline-flex items-center focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-200 hover:bg-blue-400 focus:ring-blue-800">
                                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        Ajouter une salle
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div>


                        <div class="flex justify-end container mx-auto p-4">
                            <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                                class="block rounded-br-3xl rounded-tl-3xl bg-gradient-to-r to-purple-500 from-blue-400 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-lightyellow-color focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                type="button">
                                Ajouter une nouvelle salle
                            </button>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                            <!-- card salle -->
                            @foreach ($salles as $salle)
                                <div
                                    class="box w-full rounded-br-3xl rounded-tl-3xl flex flex-col justify-center p-12 bg-opacity-30 bg-white border border-opacity-25 backdrop-filter backdrop-blur-md transition-all duration-300">
                                    <div class="mb-8">
                                        <img class="w-full object-cover rounded-br-3xl rounded-tl-3xl h-48"
                                            src="{{ asset('img/' . $salle->profile_picture) }}" alt="photo">
                                    </div>
                                    <div class="text-center">
                                        <p class="text-xl text-gray-700 font-bold mb-2">Salle {{ $salle->name }}</p>
                                    </div>
                                    <div>
                                        <p class="text-base text-gray-600 font-normal">
                                            {{ $salle->description }}</p>
                                        <p class="text-base text-gray-600 font-normal">Capacité:
                                            {{ $salle->capacite }}</p>
                                    </div>


                                    <div class="flex items-center justify-end gap-6">
                                        <a href="#" title="Edit" class="editSalleButton"
                                            data-modal-id="authentication-modal-{{ $salle->id }}"
                                            data-modal-toggle="authentication-modal"
                                            data-salle-id="{{ $salle->id }}" data-salle-name="{{ $salle->name }}"
                                            data-salle-description="{{ $salle->description }}"
                                            data-salle-capacite="{{ $salle->capacite }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16"
                                                viewBox="0 0 512 512">
                                                <path opacity="1" fill="#2766d3"
                                                    d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152V424c0 48.6 39.4 88 88 88H360c48.6 0 88-39.4 88-88V312c0-13.3-10.7-24-24-24s-24 10.7-24 24V424c0 22.1-17.9 40-40 40H88c-22.1 0-40-17.9-40-40V152c0-22.1 17.9-40 40-40H200c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z" />
                                            </svg>
                                        </a>
                                        <form action="{{ route('deleteSalle', $salle->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <div title="delete">
                                                <button type="submit">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="16"
                                                        width="14" viewBox="0 0 448 512">
                                                        <path fill="#e6321e"
                                                            d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- update modal -->
                                    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
                                        data-modal-id="authentication-modal-{{ $salle->id }}"
                                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative p-4 w-full max-w-md max-h-full">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow bg-blue-50">
                                                <!-- Modal header -->
                                                <div
                                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-600">
                                                    <h3 class="text-xl font-semibold text-gray-900 text-black">
                                                        Update Salle
                                                    </h3>
                                                    <button type="button"
                                                        class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center hover:bg-gray-600 hover:text-white"
                                                        data-modal-hide="authentication-modal">
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
                                                <!-- Modal body -->
                                                <div class="p-4 md:p-5">
                                                    <form class="space-y-4"
                                                        action="{{ route('updateSalle', $salle->id) }}"
                                                        method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        {{-- @dd($salle->id) --}}
                                                        <div class="col-span-2">
                                                            <input type="hidden" name="salleID" id="editSalleId"
                                                                value="{{ $salle->id }}">
                                                            <label for=""
                                                                class="block mb-2 text-sm font-medium text-gray-900 text-black">Nom
                                                                de la salle</label>
                                                            <input type="text" name="name" id="editName"
                                                                value="{{ $salle->name }}"
                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500"
                                                                placeholder="Type salle name" required="">
                                                        </div>
                                                        <div class="col-span-2">
                                                            <input type="hidden" name="salleID" id="editSalleId"
                                                                value="{{ $salle->id }}">
                                                            <label for=""
                                                                class="block mb-2 text-sm font-medium text-gray-900 text-black">Photo
                                                                de la salle</label>
                                                            <!-- Display current image -->
                                                            <img src="{{ asset('img/' . $salle->profile_picture) }}"
                                                                alt="Current Image">

                                                            <!-- File input for uploading a new image -->
                                                            <input type="file" name="profile_picture"
                                                                id="editPicture"
                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500"
                                                                placeholder="Photo de la salle">
                                                        </div>
                                                        {{-- update dyal l picture ma kheddamachh!! don't forget about it, and don't forget to add what you added to the script f lkhrr --}}
                                                        <div class="col-span-2">
                                                            <input type="hidden" name="salleID" id="editSalleId"
                                                                value="{{ $salle->id }}">
                                                            <label for=""
                                                                class="block mb-2 text-sm font-medium text-gray-900 text-black">Capacite</label>
                                                            <input type="number" name="capacite" id="editCapacite"
                                                                value="{{ $salle->capacite }}"
                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500"
                                                                placeholder="quelle est la capacite de la salle"
                                                                required="">
                                                        </div>
                                                        <div class="col-span-2">
                                                            <input type="hidden" name="salleID" id="editSalleId"
                                                                value="{{ $salle->id }}">
                                                            <label for=""
                                                                class="block mb-2 text-sm font-medium text-gray-900 text-black">Description</label>
                                                            <input type="text" name="description"
                                                                id="editDescription"
                                                                value="{{ $salle->description }}"
                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-100 border-gray-500 placeholder-gray-400 text-black focus:ring-primary-500 focus:border-primary-500"
                                                                placeholder="Ajoutez une description" required="">
                                                        </div>

                                                        <button type="submit"
                                                            class="inline-flex items-center focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-200 hover:bg-blue-400 focus:ring-blue-800">
                                                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor"
                                                                viewBox="0 0 20 20"
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


                                </div>
                            @endforeach

                        </div>

                    </div>

                </div>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const editButtons = document.querySelectorAll('.editSalleButton');
                        const editSalleIdInput = document.getElementById('editSalleId');
                        const editNameInput = document.getElementById('editName');
                        const editDescriptionInput = document.getElementById('editDescription');
                        const editCapaciteInput = document.getElementById('editCapacite');
                        editButtons.forEach(function(button) {
                            button.addEventListener('click', function(event) {
                                event.preventDefault();

                                const salleId = this.getAttribute('data-salle-id');
                                const salleName = this.getAttribute('data-salle-name');
                                const salleDescription = this.getAttribute('data-salle-description');
                                const salleCapacite = this.getAttribute('data-salle-capacite');

                                console.log('Salle ID:', salleId);
                                console.log('Salle Name:', salleName);
                                console.log('Salle Description:', salleDescription);
                                console.log('Salle Capacite:', salleCapacite);

                                editSalleIdInput.value = salleId;
                                editNameInput.value = salleName;
                                editDescriptionInput.value = salleDescription;
                                editCapaciteInput.value = salleCapacite;
                            });
                        });
                    });
                </script>
            </div>
        </section>
    </div>
</body>

</html>
