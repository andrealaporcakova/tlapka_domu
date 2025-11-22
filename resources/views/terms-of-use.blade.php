<x-app-layout>

    <section class="bg-violet-50 py-16 text-center">
        <div class="max-w-4xl mx-auto px-4">
            <h1 class ="text-4xl sm:text-5xl font-bold">
                Transparentnost a pravidla férové hry
            </h1>
            <p class="mt-4 text-lg sm:text-xl">
                Jsme komunita, ne korporát. S daty a informacemi zacházíme opatrně.
            </p>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-12 lg:gap-12">

                <aside class="lg:col-span-3 mb-8 lg:mb-0">
                    <div class="bg-gray-50 p-6 rounded-xl shadow-md sticky top-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-4 border-b pb-2">Rychlá navigace</h3>
                        <ul class="space-y-3 text-lg">
                            <li>
                                <a href="#podminky" class="text-violet-600 hover:text-violet-800 font-semibold
                                    transition duration-200">
                                    Pravidla užití
                                </a>
                            </li>
                            <li>
                                <a href="#gdpr" class="text-violet-600 hover:text-violet-800 font-semibold
                                    transition duration-200">
                                    Ochrana údajů
                                </a>
                            </li>
                            <li>
                                <a href="#kontakt" class="text-violet-600 hover:text-violet-800 font-semibold
                                    transition duration-200">
                                    Kontakt
                                </a>
                            </li>
                        </ul>
                    </div>
                </aside>

                <div class="lg:col-span-9 prose prose-lg max-w-none text-gray-700">

                    <h2 id="podminky" class="text-3xl font-bold text-violet-700 mt-0 pt-0 border-b pb-2 mb-6">
                        1. Podmínky užití služby Tlapka domů
                    </h2>
                    <p class="text-sm italic text-gray-500">Poslední aktualizace: {{ now()->format('j. n. Y') }}</p>

                    <p class="lead">
                        Tyto podmínky fungují jako pravidla férové hry a vymezují, jak smíme a nesmíme platformu Tlapka
                        domů používat.
                    </p>

                    <h3 class="text-2xl font-semibold text-gray-800 mt-6">
                        1.1. Co je Tlapka domů?
                    </h3>
                    <p>
                        Tlapka domů je komunitní platforma, kterou provozujeme jako soukromá iniciativa s cílem pomoci
                        ztraceným a nalezeným zvířatům. Nejsme oficiální registr, útulek ani policie.
                        Jsme jen digitální nástroj, který pomáhá lidem najít cestu k sobě.
                    </p>

                    <h3 class="text-2xl font-semibold text-gray-800 mt-6">
                        1.2. Vaše zodpovědnosti
                    </h3>
                    <ul>
                        <li>Pravdivost informací: Zodpovídáte za to, že všechny vámi vložené informace
                            (popis zvířete, fotografie, datum a místo nálezu/ztráty, kontakt) jsou pravdivé a aktuální.
                            Klamavý obsah budeme mazat.
                        </li>
                        <li>Etika: Vkládejte pouze informace týkající se ztracených/nalezených zvířat.
                            Žádné reklamy, politické názory, urážky ani duševní vlastnictví, které vám nepatří.
                        </li>
                        <li>Aktualizace: Pokud se zvíře vrátí domů, prosíme o okamžité smazání nebo aktualizace inzerátu.
                            Děkujeme, že šetříte čas hledačům.
                        </li>
                    </ul>

                    <h3 class="text-2xl font-semibold text-gray-800 mt-6">
                        1.3. Naše zodpovědnosti
                    </h3>
                    <ul>
                        <li>Bez záruky: Nezaručujeme, že se zvíře najde, ani že informace vložené jinými uživateli
                            jsou 100% správné. Vždy jednáte na vlastní riziko.
                        </li>
                        <li>Služba je poskytována zdarma a můžeme ji kdykoli změnit, přerušit nebo ukončit bez
                            předchozího upozornění.
                        </li>
                    </ul>

                    <h2 id="gdpr" class="text-3xl font-bold text-violet-700 mt-12 pt-0 border-b pb-2 mb-6">
                        2. Zásady ochrany osobních údajů
                    </h2>
                    <p>
                        Ochrana Vašeho soukromí je pro nás prioritou. Tato sekce vysvětluje,
                        jaké údaje shromažďujeme a proč. Jsme komunita, ne korporát. S daty zacházíme opatrně.
                    </p>

                    <h3 class="text-2xl font-semibold text-gray-800 mt-6">
                        2.1. Jaké údaje sbíráme
                    </h3>
                    <ul>
                        <li>Kontaktní údaje: Jméno, email, telefonní číslo. Sběrem těchto údajů chceme zajistit,
                            že se zvíře a majitel najdou. Tyto údaje jsou po určitou dobu zveřejněny u inzerátu.
                        </li>
                        <li>Geografická poloha: Místo nálezu/ztráty. To je klíčové pro hledání.
                        </li>
                        <li>Cookies: Používáme je standardně k zajištění základní funkčnosti webu a pro anonymní
                            statistiky (abychom věděli, kolik lidí se snaží pomoci).
                        </li>
                    </ul>

                    <h3 class="text-2xl font-semibold text-gray-800 mt-6">
                        2.2. Jak údaje používáme a chráníme
                    </h3>
                    <ul>
                        <li>Jediný účel: Vaše kontaktní údaje používáme výhradně pro účel shledání zvířete.
                        </li>
                        <li>Sdílení: Vaše kontaktní údaje sdílíme s ostatními uživateli, ale pouze v rámci zobrazení
                            inzerátu, abyste se mohli navzájem kontaktovat.
                        </li>
                        <li>Bezpečnost: Snažíme se data chránit, ale stejně jako všude na internetu, nemůžeme zaručit
                            absolutní neprolomitelnost. Buďte opatrní při komunikaci s neznámými lidmi.
                        </li>
                    </ul>

                    <h3 class="text-2xl font-semibold text-gray-800 mt-6">
                        2.3. Odstranění údajů
                    </h3>
                    <p>
                        Kdykoli nás kontaktujte a my vaše údaje vymažeme. Pokud smažete inzerát, většinu informací
                        smažeme automaticky.
                    </p>

                    <h2 id="kontakt" class="text-3xl font-bold text-violet-700 mt-12 pt-0 border-b pb-2 mb-6">
                        3. Kontaktní údaje provozovatele
                    </h2>
                    <p>
                        Máte-li jakékoliv dotazy k pravidlům nebo funkcím kontaktujte nás:
                    </p>
                    <ul class="not-prose">
                        <li>Provozovatel: Andrea Laporčáková</li>
                        <li>Email: info@tlapkadomu.cz <a href="mailto:info@tlapkadomu.cz" class="text-violet-600
                        hover:text-violet-800 font-semibold transition"></a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </section>
</x-app-layout>
