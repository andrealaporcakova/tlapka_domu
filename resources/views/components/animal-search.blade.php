<section id="list">
    <div>
        <aside>
            <div class="bg-white p-6 rounded-xl shadow-lg sticky top-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-4 border-b pb-2">Hledat v databázi</h3>

                <form>
                    <div class="mb-5">
                        <label for="status_filter" class="block text-sm font-medium text-gray-700 mb-2">Status zvířete</label>
                        <select id="status_filter" name="status_filter"
                                class="w-full border-gray-300 rounded-full shadow-sm focus:border-violet-500
                                focus:ring-violet-500 p-2">
                            <option value="nalezeno">Nalezená zvířata</option>
                            <option value="ztraceno">Ztracená zvířata</option>
                            <option value=""selected>Všechny inzeráty</option>
                        </select>
                    </div>

                    <div class="mb-5">
                        <label for="species" class="block text-sm font-medium text-gray-700 mb-2">Druh zvířete</label>
                        <select id="species" name="species" class="w-full border-gray-300 rounded-full shadow-sm
                        focus:border-violet-500 focus:ring-violet-500 p-2">
                            <option value="">Všechna zvířata</option>
                            <option value="pes">Pes</option>
                            <option value="kocka">Kočka</option>
                            <option value="ptak">Pták</option>
                            <option value="hlodavec">Hlodavec</option>
                            <option value="ostatni">Ostatní</option>
                        </select>
                    </div>

                    <div class="mb-5">
                        <label for="region" class="block text-sm font-medium text-gray-700 mb-2">Kraj nálezu</label>
                        <select id="region" name="region" class="w-full border-gray-300 rounded-full shadow-sm
                        focus:border-violet-500 focus:ring-violet-500 p-2">
                            <option value="cela_cr">Celá ČR</option>
                            <option value="praha">Praha</option>
                            <option value="stredocesky">Středočeský kraj</option>
                            <option value="jihocesky">Jihočeský kraj</option>
                            <option value="plzensky">Plzeňský kraj</option>
                            <option value="karlovarsky">Karlovarský kraj</option>
                            <option value="ustecky">Ústecký kraj</option>
                            <option value="liberecky">Liberecký kraj</option>
                            <option value="kralovehradecky">Královéhradecký kraj</option>
                            <option value="pardubicky">Pardubický kraj</option>
                            <option value="vysocina">Kraj Vysočina</option>
                            <option value="jihomoravsky">Jihomoravský kraj</option>
                            <option value="olomoucky">Olomoucký kraj</option>
                            <option value="moravskoslezsky">Moravskoslezský kraj</option>
                            <option value="zlinsky">Zlínský kraj</option>
                        </select>
                    </div>

                    <div class="mb-6">
                        <label for="date" class="block text-sm font-medium text-gray-700 mb-2">Datum nálezu (od)</label>
                        <input type="date" id="date" name="date" class="w-full border-gray-300 rounded-full shadow-sm
                        focus:border-violet-500 focus:ring-violet-500 p-2">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="inline-block bg-violet-600 text-white font-semibold py-3 px-10
                        rounded-full text-lg hover:bg-violet-700 transition duration-300">
                            Aplikovat filtry
                        </button>
                    </div>

                    <button type="reset" class="w-full mt-2 text-sm text-gray-500 py-1 hover:text-gray-700 transition">
                        Zrušit filtry
                    </button>
                </form>
            </div>
        </aside>


    </div>
</section>
