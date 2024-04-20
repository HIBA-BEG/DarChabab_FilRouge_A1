<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.head')
</head>

<body>
    <div class="relative">

        @include('layouts.sidebar')

        <section class="flex items-center justify-center p-12" style="background-color: #f5f5f5;">
            <div class="mx-auto w-full max-w-[800px]">
                <form action="{{ route('profile.storeAssociation') }}" method="POST">
                    @csrf
                    <div class="mb-5">
                        <label for="type" class="mb-3 block text-base font-medium text-[#07074D]">
                            Type
                        </label>
                        <select name="type" id="type" placeholder="Enter association origin"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#F29D12] focus:shadow-md"
                        required>
                            <option value="Nationale">Nationale</option>
                            <option value="Régionale">Régionale</option>
                            <option value="Locale">Locale</option>
                        </select>
                        
                    </div>

                    <div class="mb-5">
                        <label for="origine" class="mb-3 block text-base font-medium text-[#07074D]">
                            Origin
                        </label>
                        <input type="text" name="origine" id="origine" placeholder="Enter association origin"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#F29D12] focus:shadow-md"
                            required />
                    </div>


                    <div class="mb-5">
                        <label for="domaine" class="mb-3 block text-base font-medium text-[#07074D]">
                            Domaine
                        </label>
                        <input type="text" name="domaine" id="domaine" placeholder="Enter association domain"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#F29D12] focus:shadow-md"
                            required />
                    </div>

                    <div class="mb-5">
                        <label for="description" class="mb-3 block text-base font-medium text-[#07074D]">
                            Description
                        </label>
                        <textarea rows="4" name="description" id="description" placeholder="Enter association description"
                            class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#F29D12] focus:shadow-md"
                            required></textarea>
                    </div>

                    <!-- President -->
                    <div class="flex flex-wrap justify-between w-full">
                        <div class="mb-5">
                            <label for="president" class="mb-3 block text-base font-medium text-[#07074D]">
                                President
                            </label>
                            <input type="text" name="president" id="president" placeholder="Enter president name"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#F29D12] focus:shadow-md"
                                required />
                        </div>

                        <div class="mb-5">
                            <label for="emailPresident" class="mb-3 block text-base font-medium text-[#07074D]">
                                President Email
                            </label>
                            <input type="email" name="emailPresident" id="emailPresident"
                                placeholder="Enter president email"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#F29D12] focus:shadow-md"
                                required />
                        </div>

                        <div class="mb-5">
                            <label for="cinPresident" class="mb-3 block text-base font-medium text-[#07074D]">
                                President CIN
                            </label>
                            <input type="text" name="cinPresident" id="cinPresident"
                                placeholder="Enter president CIN"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#F29D12] focus:shadow-md"
                                required />
                        </div>
                    </div>

                    <!-- Vice President -->
                    <div class="flex flex-wrap justify-between w-full">
                        <div class="mb-5">
                            <label for="vicePresident" class="mb-3 block text-base font-medium text-[#07074D]">
                                Vice President
                            </label>
                            <input type="text" name="vicePresident" id="vicePresident"
                                placeholder="Enter vice president name"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#F29D12] focus:shadow-md" />
                        </div>

                        <div class="mb-5">
                            <label for="emailVice" class="mb-3 block text-base font-medium text-[#07074D]">
                                Vice President Email
                            </label>
                            <input type="email" name="emailVice" id="emailVice"
                                placeholder="Enter vice president email"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#F29D12] focus:shadow-md" />
                        </div>

                        <div class="mb-5">
                            <label for="cinVice" class="mb-3 block text-base font-medium text-[#07074D]">
                                Vice President CIN
                            </label>
                            <input type="text" name="cinVice" id="cinVice" placeholder="Enter vice president CIN"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#F29D12] focus:shadow-md" />
                        </div>

                    </div>

                    <!-- Secretary -->
                    <div class="flex flex-wrap justify-between w-full">
                        <div class="mb-5">
                            <label for="secretaire" class="mb-3 block text-base font-medium text-[#07074D]">
                                Secretary
                            </label>
                            <input type="text" name="secretaire" id="secretaire" placeholder="Enter secretary name"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#F29D12] focus:shadow-md"
                                required />
                        </div>

                        <div class="mb-5">
                            <label for="emailSecretaire" class="mb-3 block text-base font-medium text-[#07074D]">
                                Secretary Email
                            </label>
                            <input type="email" name="emailSecretaire" id="emailSecretaire"
                                placeholder="Enter secretary email"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#F29D12] focus:shadow-md"
                                required />
                        </div>

                        <div class="mb-5">
                            <label for="cinSecretaire" class="mb-3 block text-base font-medium text-[#07074D]">
                                Secretary CIN
                            </label>
                            <input type="text" name="cinSecretaire" id="cinSecretaire"
                                placeholder="Enter secretary CIN"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#F29D12]" required/>
                        </div>
                    </div>

                    <!-- Assistant Secretary -->
                    <div class="flex flex-wrap justify-between w-full">

                        <div class="mb-5">
                            <label for="secretaireAdjoint" class="mb-3 block text-base font-medium text-[#07074D]">
                                Assistant Secretary
                            </label>
                            <input type="text" name="secretaireAdjoint" id="secretaireAdjoint"
                                placeholder="Enter assistant secretary name"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#F29D12] focus:shadow-md" />
                        </div>

                        <div class="mb-5">
                            <label for="emailSecretaireAdjoint"
                                class="mb-3 block text-base font-medium text-[#07074D]">
                                Assistant Secretary Email
                            </label>
                            <input type="email" name="emailSecretaireAdjoint" id="emailSecretaireAdjoint"
                                placeholder="Enter assistant secretary email"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#F29D12] focus:shadow-md" />
                        </div>

                        <div class="mb-5">
                            <label for="cinSecretaireAdjoint" class="mb-3 block text-base font-medium text-[#07074D]">
                                Assistant Secretary CIN
                            </label>
                            <input type="text" name="cinSecretaireAdjoint" id="cinSecretaireAdjoint"
                                placeholder="Enter assistant secretary CIN"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#F29D12] focus:shadow-md" />
                        </div>

                    </div>

                    <!-- Treasurer -->
                    <div class="flex flex-wrap justify-between w-full">

                        <div class="mb-5">
                            <label for="tresorier" class="mb-3 block text-base font-medium text-[#07074D]">
                                Treasurer
                            </label>
                            <input type="text" name="tresorier" id="tresorier" placeholder="Enter treasurer name"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#F29D12] focus:shadow-md"
                                required />
                        </div>

                        <div class="mb-5">
                            <label for="emailTresorier" class="mb-3 block text-base font-medium text-[#07074D]">
                                Treasurer Email
                            </label>
                            <input type="email" name="emailTresorier" id="emailTresorier"
                                placeholder="Enter treasurer email"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#F29D12] focus:shadow-md"
                                required />
                        </div>

                        <div class="mb-5">
                            <label for="cinTresorier" class="mb-3 block text-base font-medium text-[#07074D]">
                                Treasurer CIN
                            </label>
                            <input type="text" name="cinTresorier" id="cinTresorier"
                                placeholder="Enter treasurer CIN"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#F29D12] focus:shadow-md"
                                required />
                        </div>


                    </div>

                    <!-- Assistant Treasurer -->
                    <div class="flex flex-wrap justify-between w-full">

                        <div class="mb-5">
                            <label for="tresorierAdjoint" class="mb-3 block text-base font-medium text-[#07074D]">
                                Assistant Treasurer
                            </label>
                            <input type="text" name="tresorierAdjoint" id="tresorierAdjoint"
                                placeholder="Enter assistant treasurer name"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#F29D12] focus:shadow-md" />
                        </div>

                        <div class="mb-5">
                            <label for="emailTresorierAdjoint"
                                class="mb-3 block text-base font-medium text-[#07074D]">
                                Assistant Treasurer Email
                            </label>
                            <input type="email" name="emailTresorierAdjoint" id="emailTresorierAdjoint"
                                placeholder="Enter assistant treasurer email"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#F29D12] focus:shadow-md" />
                        </div>

                        <div class="mb-5">
                            <label for="cinTresorierAdjoint" class="mb-3 block text-base font-medium text-[#07074D]">
                                Assistant Treasurer CIN
                            </label>
                            <input type="text" name="cinTresorierAdjoint" id="cinTresorierAdjoint"
                                placeholder="Enter assistant treasurer CIN"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#F29D12] focus:shadow-md" />
                        </div>
                    </div>

                    <!-- Counselors -->
                    <div class="flex flex-wrap justify-between w-full">

                        <div class="mb-5">
                            <label for="conseiller1" class="mb-3 block text-base font-medium text-[#07074D]">
                                Counselor 1
                            </label>
                            <input type="text" name="conseiller1" id="conseiller1"
                                placeholder="Enter counselor 1 name"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#F29D12] focus:shadow-md" />
                        </div>

                        <div class="mb-5">
                            <label for="emailConseiller1" class="mb-3 block text-base font-medium text-[#07074D]">
                                Counselor 1 Email
                            </label>
                            <input type="email" name="emailConseiller1" id="emailConseiller1"
                                placeholder="Enter counselor 1 email"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#F29D12] focus:shadow-md"/>
                        </div>

                        <div class="mb-5">
                            <label for="cinConseiller1" class="mb-3 block text-base font-medium text-[#07074D]">
                                Counselor 1 CIN
                            </label>
                            <input type="text" name="cinConseiller1" id="cinConseiller1"
                                placeholder="Enter counselor 1 CIN"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#F29D12] focus:shadow-md" />
                        </div>
                    </div>

                    <div class="flex flex-wrap justify-between w-full">
                        <div class="mb-5">
                            <label for="conseiller2" class="mb-3 block text-base font-medium text-[#07074D]">
                                Counselor 2
                            </label>
                            <input type="text" name="conseiller2" id="conseiller2"
                                placeholder="Enter counselor 2 name"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#F29D12] focus:shadow-md" />
                        </div>

                        <div class="mb-5">
                            <label for="emailConseiller2" class="mb-3 block text-base font-medium text-[#07074D]">
                                Counselor 2 Email
                            </label>
                            <input type="email" name="emailConseiller2" id="emailConseiller2"
                                placeholder="Enter counselor 2 email"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#F29D12] focus:shadow-md" />
                        </div>

                        <div class="mb-5">
                            <label for="cinConseiller2" class="mb-3 block text-base font-medium text-[#07074D]">
                                Counselor 2 CIN
                            </label>
                            <input type="text" name="cinConseiller2" id="cinConseiller2"
                                placeholder="Enter counselor 2 CIN"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#F29D12] focus:shadow-md" />
                        </div>
                    </div>

                    <div class="flex flex-wrap justify-between w-full">
                        <div class="mb-5">
                            <label for="conseiller3" class="mb-3 block text-base font-medium text-[#07074D]">
                                Counselor 3
                            </label>
                            <input type="text" name="conseiller3" id="conseiller3"
                                placeholder="Enter counselor 3 name"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#F29D12] focus:shadow-md" />
                        </div>

                        <div class="mb-5">
                            <label for="emailConseiller3" class="mb-3 block text-base font-medium text-[#07074D]">
                                Counselor 3 Email
                            </label>
                            <input type="email" name="emailConseiller3" id="emailConseiller3"
                                placeholder="Enter counselor 3 email"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#F29D12] focus:shadow-md" />
                        </div>

                        <div class="mb-5">
                            <label for="cinConseiller3" class="mb-3 block text-base font-medium text-[#07074D]">
                                Counselor 3 CIN
                            </label>
                            <input type="text" name="cinConseiller3" id="cinConseiller3"
                                placeholder="Enter counselor 3 CIN"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#F29D12] focus:shadow-md" />
                        </div>
                    </div>

                    <div class="flex flex-wrap justify-between w-full">
                        <div class="mb-5">
                            <label for="conseiller4" class="mb-3 block text-base font-medium text-[#07074D]">
                                Counselor 4
                            </label>
                            <input type="text" name="conseiller4" id="conseiller4"
                                placeholder="Enter counselor 4 name"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#F29D12] focus:shadow-md" />
                        </div>

                        <div class="mb-5">
                            <label for="emailConseiller4" class="mb-3 block text-base font-medium text-[#07074D]">
                                Counselor 4 Email
                            </label>
                            <input type="email" name="emailConseiller4" id="emailConseiller4"
                                placeholder="Enter counselor 4 email"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#F29D12] focus:shadow-md" />
                        </div>

                        <div class="mb-5">
                            <label for="cinConseiller4" class="mb-3 block text-base font-medium text-[#07074D]">
                                Counselor 4 CIN
                            </label>
                            <input type="text" name="cinConseiller4" id="cinConseiller4"
                                placeholder="Enter counselor 4 CIN"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#F29D12] focus:shadow-md" />
                        </div>
                    </div>

                    <div class="flex flex-wrap justify-between w-full">
                        <div class="mb-5">
                            <label for="conseiller5" class="mb-3 block text-base font-medium text-[#07074D]">
                                Counselor 5
                            </label>
                            <input type="text" name="conseiller5" id="conseiller5"
                                placeholder="Enter counselor 5 name"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#F29D12] focus:shadow-md" />
                        </div>

                        <div class="mb-5">
                            <label for="emailConseiller5" class="mb-3 block text-base font-medium text-[#07074D]">
                                Counselor 5 Email
                            </label>
                            <input type="email" name="emailConseiller5" id="emailConseiller5"
                                placeholder="Enter counselor 5 email"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#F29D12] focus:shadow-md" />
                        </div>

                        <div class="mb-5">
                            <label for="cinConseiller5" class="mb-3 block text-base font-medium text-[#07074D]">
                                Counselor 5 CIN
                            </label>
                            <input type="text" name="cinConseiller5" id="cinConseiller5"
                                placeholder="Enter counselor 5 CIN"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#F29D12] focus:shadow-md" />
                        </div>
                    </div>

                    <div class="flex flex-wrap justify-between w-full">
                        <div class="mb-5">
                            <label for="conseiller6" class="mb-3 block text-base font-medium text-[#07074D]">
                                Counselor 5
                            </label>
                            <input type="text" name="conseiller6" id="conseiller6"
                                placeholder="Enter counselor 6 name"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#F29D12] focus:shadow-md" />
                        </div>

                        <div class="mb-5">
                            <label for="emailConseiller6" class="mb-3 block text-base font-medium text-[#07074D]">
                                Counselor 6 Email
                            </label>
                            <input type="email" name="emailConseiller6" id="emailConseiller6"
                                placeholder="Enter counselor 6 email"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#F29D12] focus:shadow-md" />
                        </div>

                        <div class="mb-5">
                            <label for="cinConseiller6" class="mb-3 block text-base font-medium text-[#07074D]">
                                Counselor 6 CIN
                            </label>
                            <input type="text" name="cinConseiller6" id="cinConseiller6"
                                placeholder="Enter counselor 6 CIN"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#F29D12] focus:shadow-md" />
                        </div>
                    </div>


                    <div>
                        <button
                            class="hover:shadow-form rounded-md bg-[radial-gradient(circle_at_bottom_left,_var(--tw-gradient-stops))]
                            from-orange-color via-lightorange-color to-yellow-color transition-all hover:shadow-lg
                            hover:shadow-lightyellow-color py-3 px-8 text-base font-semibold text-white outline-none">
                            Update mon profile
                        </button>
                    </div>

                </form>
            </div>
        </section>
    </div>
</body>

</html>
