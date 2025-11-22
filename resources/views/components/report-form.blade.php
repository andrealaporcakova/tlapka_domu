@props(['status' => null])

<div class="max-w-4xl mx-auto">
    <div class="bg-violet-200 p-8 rounded-3xl shadow-2xl">
        <h2 class="text-3xl font-bold mb-6 text-center">
            Přidat inzerát: Nahlásit NÁLEZ nebo ZTRÁTU
        </h2>
        <p class="text-center text-gray-600 mb-8">
            Vyplňte prosím pečlivě všechny detaily. Čím více informací, tím větší šance na šťastný konec.
        </p>

        <form action="{{ route('animal.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            @if ($errors->any())
                <div class="mb-4 rounded-lg bg-red-100 p-4 text-sm text-red-700">
                    <p class="font-bold">Chyba! Inzerát nebyl uložen. Zkontrolujte prosím následující:</p>
                    <ul class="mt-2 list-inside list-disc">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="status" class="block text-sm font-medium text-gray-800 mb-2">1. Typ události *</label>
                    <select id="status" name="status" required
                            class="w-full border-gray-300 rounded-full shadow-sm bg-white p-3 focus:border-violet-500
                            focus:ring-violet-500">
                        <option value="" disabled {{ !$status && !old('status') ? 'selected' : '' }}>-- Zvolte typ hlášení --</option>
                        <option value="lost" {{ old('status', $status) == 'lost' ? 'selected' : '' }}>Ztratil/a jsem zvíře</option>
                        <option value="found" {{ old('status', $status) == 'found' ? 'selected' : '' }}>Našel/a jsem zvíře</option>
                    </select>
                </div>
                <div>
                    <label for="species" class="block text-sm font-medium text-gray-800 mb-2">2. Druh zvířete *</label>
                    <select id="species" name="species" required
                            class="w-full border-gray-300 rounded-full shadow-sm bg-white p-3 focus:border-violet-500
                            focus:ring-violet-500">
                        <option value="" disabled selected>-- Zvolte druh --</option>
                        <option value="pes" {{ old('species') == 'pes' ? 'selected' : '' }}>Pes</option>
                        <option value="kocka" {{ old('species') == 'kocka' ? 'selected' : '' }}>Kočka</option>
                        <option value="ptak" {{ old('species') == 'ptak' ? 'selected' : '' }}>Pták</option>
                        <option value="hlodavec" {{ old('species') == 'hlodavec' ? 'selected' : '' }}>Hlodavec</option>
                        <option value="ostatni" {{ old('species') == 'ostatni' ? 'selected' : '' }}>Ostatní</option>
                    </select>
                </div>

                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Jméno zvířete</label>
                    <input type="text" id="name" name="name" placeholder="Např. Rex" value="{{ old('name') }}"
                           class="mt-1 block w-full border-gray-300 rounded-full shadow-sm bg-white focus:border-violet-500
                           focus:ring-violet-500 p-3">
                </div>

                <div>
                    <label for="breed" class="block text-sm font-medium text-gray-700">Rasa</label>
                    <input type="text" id="breed" name="breed" placeholder="Např. Německý ovčák" value="{{ old('breed') }}"
                           class="mt-1 block w-full border-gray-300 rounded-full shadow-sm bg-white focus:border-violet-500
                           focus:ring-violet-500 p-3">
                </div>

                <div>
                    <label for="sex" class="block text-sm font-medium text-gray-700">Pohlaví *</label>
                    <select id="sex" name="sex" required
                            class="w-full border-gray-300 rounded-full shadow-sm bg-white p-3 focus:border-violet-500
                            focus:ring-violet-500">
                        <option value="" disabled selected>-- Zvolte pohlaví --</option>
                        <option value="male" {{ old('sex') == 'male' ? 'selected' : '' }}>Samec</option>
                        <option value="female" {{ old('sex') == 'female' ? 'selected' : '' }}>Samice</option>
                        <option value="unknown" {{ old('sex') == 'unknown' ? 'selected' : '' }}>Neznámé</option>
                    </select>
                </div>

                <div>
                    <label for="location_city" class="block text-sm font-medium text-gray-700">Místo události (Město/obec) *</label>
                    <input type="text" id="location_city" name="location_city" required placeholder="Např. Praha 4, Děčín" value="{{ old('location_city') }}"
                           class="mt-1 block w-full border-gray-300 rounded-full shadow-sm bg-white focus:border-violet-500
                           focus:ring-violet-500 p-3">
                </div>
                <div>
                    <label for="location_region" class="block text-sm font-medium text-gray-700">Kraj *</label>
                    <select id="location_region" name="location_region" class="mt-1 block w-full border-gray-300
                            rounded-full shadow-sm bg-white focus:border-violet-500 focus:ring-violet-500 p-3">
                        <option value="" disabled selected>-- Vyberte kraj --</option>
                        <option value="praha" {{ old('location_region') == 'praha' ? 'selected' : '' }}>Praha</option>
                        <option value="stredocesky" {{ old('location_region') == 'stredocesky' ? 'selected' : '' }}>Středočeský kraj</option>
                        <option value="jihocesky" {{ old('location_region') == 'jihocesky' ? 'selected' : '' }}>Jihočeský kraj</option>
                        <option value="plzensky" {{ old('location_region') == 'plzensky' ? 'selected' : '' }}>Plzeňský kraj</option>
                        <option value="karlovarsky" {{ old('location_region') == 'karlovarsky' ? 'selected' : '' }}>Karlovarský kraj</option>
                        <option value="ustecky" {{ old('location_region') == 'ustecky' ? 'selected' : '' }}>Ústecký kraj</option>
                        <option value="liberecky" {{ old('location_region') == 'liberecky' ? 'selected' : '' }}>Liberecký kraj</option>
                        <option value="kralovehradecky" {{ old('location_region') == 'kralovehradecky' ? 'selected' : '' }}>Královéhradecký kraj</option>
                        <option value="pardubicky" {{ old('location_region') == 'pardubicky' ? 'selected' : '' }}>Pardubický kraj</option>
                        <option value="vysocina" {{ old('location_region') == 'vysocina' ? 'selected' : '' }}>Kraj Vysočina</option>
                        <option value="jihomoravsky" {{ old('location_region') == 'jihomoravsky' ? 'selected' : '' }}>Jihomoravský kraj</option>
                        <option value="olomoucky" {{ old('location_region') == 'olomoucky' ? 'selected' : '' }}>Olomoucký kraj</option>
                        <option value="moravskoslezsky" {{ old('location_region') == 'moravskoslezsky' ? 'selected' : '' }}>Moravskoslezský kraj</option>
                        <option value="zlinsky" {{ old('location_region') == 'zlinsky' ? 'selected' : '' }}>Zlínský kraj</option>
                    </select>
                </div>
                <div>
                    <label for="report_date" class="block text-sm font-medium text-gray-700">Datum události *</label>
                    <input type="date" id="report_date" name="report_date" required value="{{ old('report_date') }}"
                           class="mt-1 block w-full border-gray-300 rounded-full shadow-sm bg-white focus:border-violet-500
                           focus:ring-violet-500 p-3">
                </div>
            </div>

            <div>
                <label for="image" class="block text-sm font-bold text-gray-800 mb-2">3. Nahrát fotografii zvířete (max. 2MB)</label>
                <input type="file" id="image" name="image" accept="image/*"
                       class="mt-1 block w-full text-lg text-gray-700
                              file:mr-4 file:py-2 file:px-4
                              file:rounded-full file:border-0
                              file:text-sm file:font-semibold
                              file:bg-violet-100 file:text-violet-700
                              hover:file:bg-violet-200"
                />
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">4. Podrobný popis zvířete a okolností *</label>
                <textarea id="description" name="description" rows="4" required placeholder="Barva, čip, obojek, poslední vidění..."
                          class="mt-1 block w-full border-gray-300 rounded-xl shadow-sm bg-white focus:border-violet-500
                          focus:ring-violet-500 p-3">{{ old('description') }}</textarea>


            @auth
                <div class="bg-emerald-100 border-l-4 border-emerald-500 text-emerald-700 p-4 rounded-lg">
                    <p class="font-bold">Jste přihlášen/a jako {{ auth()->user()->name }}.</p>
                    <p>Inzerát bude automaticky propojen s vaším účtem. Kontaktní údaje (e-mail a telefon) budou použity z vašeho profilu.</p>
                </div>
            @endauth

            @guest
                <div class="space-y-6">
                    <p class="text-sm font-bold text-gray-800 mt-1">5. Kontaktní údaje (pro neregistrované) *</p>
                    <div>
                        <label for="guest_email" class="block text-sm font-medium text-gray-700">E-mail *</label>
                        <input type="email" id="guest_email" name="guest_email" required value="{{ old('guest_email') }}"
                               class="mt-1 block w-full border-gray-300 rounded-full shadow-sm bg-white focus:border-violet-500
                                focus:ring-violet-500 p-3">
                    </div>

                    <div>
                        <label for="guest_phone" class="block text-sm font-medium text-gray-700">Telefon *</label>
                        <input type="tel" id="guest_phone" name="guest_phone" required value="{{ old('guest_phone') }}"
                               class="mt-1 block w-full border-gray-300 rounded-full shadow-sm bg-white focus:border-violet-500
                                   focus:ring-violet-500 p-3">
                    </div>
                </div>
            @endguest

                <div class="text-center">

                    <button type="submit" class="inline-block bg-violet-600 text-white font-semibold py-3 px-10
                    rounded-full text-lg hover:bg-violet-700 transition duration-300 shadow-lg mt-8">
                        Přidat inzerát
                    </button>

                </div>
            </div>
        </form>
    </div>
</div>
