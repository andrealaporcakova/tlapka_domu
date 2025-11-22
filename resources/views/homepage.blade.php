<x-app-layout>
    <div class="swiper my-banner-slider w-full mx-auto rounded-none 2xl:rounded-3xl mb-0 md:mb-12 mt-4 relative
         overflow-hidden h-[350px] md:h-[400px] lg:h-[450px]">

        <div class="swiper-wrapper">

            <div class="swiper-slide bg-[url('/resources/images/banner_1.png')] bg-cover bg-center bg-no-repeat w-full
                text-white p-8 sm:p-10 md:p-12 lg:p-16 relative flex items-center h-full">

                <div class="relative z-2 p-4 flex flex-col items-start">

                    <p class="max-w-lg text-3xl sm:text-4xl lg:text-5xl font-bold leading-tight drop-shadow-lg">
                        Pomáháme zvířatům najít cestu domů
                    </p>

                    <p class="mt-4 text-lg sm:text-xl drop-shadow-md">
                        Přehled ztracených a nalezených mazlíčků ve vašem okolí.
                    </p>

                    <a href="{{ route('animal.index') }}#list" class="mt-10 bg-emerald-500 text-white font-semibold
                        rounded-full px-8 py-3 hover:bg-emerald-600 transition-colors cursor-pointer text-base
                        sm:text-lg shadow-md">
                        Databáze zvířat
                    </a>

                </div>
            </div>

            <div class="swiper-slide bg-[url('/resources/images/banner_2.png')] bg-cover bg-center bg-no-repeat w-full
                text-white p-8 sm:p-10 md:p-12 lg:p-16 relative flex items-center h-full">

                <div class="relative z-2 p-4 flex flex-col items-start">

                        <p class="text-3xl sm:text-4xl lg:text-5xl font-bold leading-tight drop-shadow-lg">
                            Našli jste zvíře?
                        </p>
                        <p class="mt-4 text-lg sm:text-xl drop-shadow-md">
                            Zadejte inzerát do databáze a pomozte mu najít majitele.
                        </p>
                        <a href="{{ route('animal.report', ['stav' => 'nalezeny']) }}" class="mt-8 bg-emerald-500 text-white
                            font-semibold rounded-full px-8 py-3 hover:bg-emerald-600 transition-colors cursor-pointer
                            text-base sm:text-lg shadow-md">
                            Vložit inzerát
                        </a>
                </div>
            </div>

            <div class="swiper-slide bg-[url('/resources/images/banner_3.png')] bg-cover bg-center bg-no-repeat w-full
                text-white p-8 sm:p-10 md:p-12 lg:p-16 relative flex items-center h-full">

                <div class="relative z-2 p-4 flex flex-col items-start">

                        <p class="text-3xl sm:text-4xl lg:text-5xl font-bold leading-tight drop-shadow-lg">
                            Ztratil se vám mazlíček?
                        </p>
                        <p class="mt-4 text-lg sm:text-xl drop-shadow-md">
                            Prohledejte databázi nebo vytvořte nový inzerát
                        </p>
                        <a href="{{ route('animal.index') }}#list" class="mt-8 bg-red-500 text-white font-semibold
                            rounded-full px-8 py-3 hover:bg-red-600 transition-colors cursor-pointer text-base
                            sm:text-lg shadow-md">
                            Hledat zvíře
                        </a>
                </div>
            </div>

        </div>

        <div class="swiper-button-prev text-white"></div>
        <div class="swiper-button-next text-white"></div>
        <div class="swiper-pagination"></div>

    </div>
    <section class="bg-violet-200 py-12 sm:py-16 text-center rounded-none 2xl:rounded-3xl mb-0 md:mb-12">

        <div class="container mx-auto px-4 max-w-4xl">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 text-center mb-6">
                Pomáháme mazlíčkům najít cestu domů.
            </h2>
            <p class="text-xl sm:text-2xl font-semibold mb-10">
                Rychlý přehled ztracených a nalezených mazlíčků ve vašem okolí. Společně dáváme naději.
            </p>
        </div>

        <div class="flex flex-col sm:flex-row justify-center gap-4 px-4">

            <a href="{{ route('animal.report', ['stav' => 'ztraceny']) }}"
               class="bg-red-400 text-white font-semibold rounded-full px-8 py-3 hover:bg-red-500 transition-colors
               shadow-lg text-lg w-full sm:w-auto">
                Nahlásit ztracené zvíře
            </a>

            <a href="{{ route('animal.report', ['stav' => 'nalezeny']) }}"
               class="bg-emerald-500 text-white font-semibold rounded-full px-8 py-3 hover:bg-emerald-600
               transition-colors shadow-lg text-lg w-full sm:w-auto mt-3 sm:mt-0">
                Nahlásit nalezené zvíře
            </a>
        </div>

        <p class="mt-8 text-gray-600 text-sm sm:text-base">
            Využijte naši databázi. Sdílením zachraňujete životy!
        </p>

    </section>

    <section class="relative py-12 sm:py-16 text-center bg-[url('/images/paw_bg.png')] bg-cover bg-center bg-no-repeat
             w-full mx-auto rounded-none 2xl:rounded-3xl mb-0 md:mb-12">
        <div class="absolute inset-0 bg-white/80 rounded-none 2xl:rounded-3xl"></div>
        <div class="container mx-auto px-4 relative z-10">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 text-center mb-6 text-violet-600">
                Hledáme domov, potřebujeme vaši pomoc!
            </h2>
            <p class="text-lg text-gray-700 text-center mb-10 max-w-2xl mx-auto">
                Naše databáze se neustále aktualizuje. Každé sdílení zvyšuje šanci na rychlý návrat k majiteli.
                Prosíme, podívejte se na nejnovější případy v okrese.
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mb-10">

                @foreach($randomAnimals as $animal)
                    <div class="rounded-lg p-6 text-center">
                        <img src="{{ $animal->image_url }}" alt="{{ $animal->name ?? $animal->species }}"
                             class="w-48 h-48 object-cover rounded-full mx-auto mb-4 border-4 border-violet-300">

                        <h3 class="text-xl font-bold text-gray-800 mt-2">{{ $animal->name ?? $animal->species }}</h3>

                        <p class="text-gray-600">
                            {{ $animal->status === 'found' ? 'Nalezen' : 'Ztracen' }} v: {{ $animal->location_city }},
                            {{ $animal->report_date->format('d. m. Y') }}
                        </p>

                        <a href="{{ route('animal.show', $animal) }}" class="mt-4 inline-block bg-violet-600
                                text-white px-5 py-2 rounded-full hover:bg-violet-700 transition-colors">
                            Zobrazit detail
                        </a>
                    </div>
                @endforeach

            </div>
            <div class="text-center mt-10">
                <a href="{{ route('animal.index') }}#list" class="bg-emerald-500 text-white font-semibold
                    rounded-full px-8 py-3 hover:bg-emerald-600 transition-colors shadow-lg text-lg w-full sm:w-auto
                    mt-3 sm:mt-0">
                    Zobrazit vše
                </a>
            </div>

        </div>
    </section>

    <section class="relative py-12 sm:py-16 text-center bg-violet-200 w-full mx-auto rounded-none 2xl:rounded-3xl
            mb-0 md:mb-12">

        <div class="container mx-auto px-4 max-w-3xl relative z-10">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 text-center mb-6">
                Proč to děláme? Věříme v sílu komunity!
            </h2>

            <p class="text-lg text-gray-700 mb-6">
                Naše platforma "Tlapka domů" nevznikla jen jako seznam. Zrodila se z lásky ke zvířatům a přesvědčení,
                že žádné zvíře by nemělo být venku samo. Fungujeme jako most mezi zoufalými majiteli a poctivými nálezci.
            </p>

            <p class="text-lg text-gray-700 mb-10">
                Spolupracujeme s místními útulky a veterináři, abychom zajistili, že každé nahlášené zvíře je v bezpečí,
                dokud nenajde svého právoplatného majitele nebo nový milující domov. Naším cílem je 100% šťastných návratů.
            </p>

            <div class="flex justify-around items-center mt-12 pt-6 border-t border-violet-200">
                <div class="space-y-1">
                    <p class="text-4xl font-extrabold text-violet-600">{{ $reunitedCount }}+</p>
                    <p class="text-sm font-semibold text-gray-600">vrácených zvířat</p>
                </div>
                <div class="space-y-1">
                    <p class="text-4xl font-extrabold text-violet-600">{{ $reporterCount }}+</p>
                    <p class="text-sm font-semibold text-gray-600">registrovaných nálezců</p>
                </div>
                <div class="space-y-1">
                    <p class="text-4xl font-extrabold text-violet-600">{{ $partnersCount }}</p>
                    <p class="text-sm font-semibold text-gray-600">partnerských útulků</p>
                </div>
            </div>

        </div>
    </section>

    <section class="py-12 sm:py-16 mb-0 md:mb-12">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 text-center mb-6 text-violet-600">
                Váš dar = Druhá šance na život
            </h2>

            <p class="text-lg text-gray-700 text-center mb-10 max-w-3xl mx-auto">
                Za každým šťastným příběhem stojí práce, péče a náklady našich partnerských útulků.
                Pomozte nám zajistit krmivo, veterinární péči a teplý pelíšek.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                <x-help-card
                    title="Finanční dary"
                    description="Nejrychlejší forma pomoci. Doporučujeme posílat dary přímo na transparentní účty konkrétních partnerů."
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-hand-helping-icon lucide-hand-helping w-12 h-12 mx-auto mb-4">
                        <path d="M11 12h2a2 2 0 1 0 0-4h-3c-.6 0-1.1.2-1.4.6L3 14"/>
                        <path d="m7 18 1.6-1.4c.3-.4.8-.6 1.4-.6h4c1.1 0 2.1-.4 2.8-1.2l4.6-4.4a2 2 0 0 0-2.75-2.91l-4.2 3.9"/>
                        <path d="m2 13 6 6"/>
                    </svg>
                </x-help-card>

                <x-help-card
                    title="Materiální sbírky"
                    description="Krmivo, deky, hračky, stelivo. Před odesláním si ověřte aktuální potřeby útulku."
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-gift-icon lucide-gift w-12 h-12 mx-auto mb-4">
                        <rect x="3" y="8" width="18" height="4" rx="1"/>
                        <path d="M12 8v13"/>
                        <path d="M19 12v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7"/>
                        <path d="M7.5 8a2.5 2.5 0 0 1 0-5A4.8 4.8 0 0 1 12 8a4.8 4.8 0 0 1 4.5-5 2.5 2.5 0 0 1 0 5"/>
                    </svg>
                </x-help-card>

                <x-help-card
                    title="Dobrovolnictví"
                    description="Nabídněte např. venčení, socializaci zvířat nebo pomoc s úklidem a údržbou areálu."
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart-handshake-icon lucide-heart-handshake w-12 h-12 mx-auto mb-4">
                        <path d="M19.414 14.414C21 12.828 22 11.5 22 9.5a5.5 5.5 0 0 0-9.591-3.676.6.6 0 0 1-.818.001A5.5 5.5 0 0 0 2 9.5c0 2.3 1.5 4 3 5.5l5.535 5.362a2 2 0 0 0 2.879.052 2.12 2.12 0 0 0-.004-3 2.124 2.124 0 1 0 3-3 2.124 2.124 0 0 0 3.004 0 2 2 0 0 0 0-2.828l-1.881-1.882a2.41 2.41 0 0 0-3.409 0l-1.71 1.71a2 2 0 0 1-2.828 0 2 2 0 0 1 0-2.828l2.823-2.762"/>
                    </svg>
                </x-help-card>

                <x-help-card
                    title="Adopce"
                    description="Dejte zvířeti druhou šanci. Detailní informace najdete na webech konkrétních partnerů."
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-house-heart-icon lucide-house-heart w-12 h-12 mx-auto mb-4">
                        <path d="M8.62 13.8A2.25 2.25 0 1 1 12 10.836a2.25 2.25 0 1 1 3.38 2.966l-2.626 2.856a.998.998 0 0 1-1.507 0z"/>
                        <path d="M3 10a2 2 0 0 1 .709-1.528l7-6a2 2 0 0 1 2.582 0l7 6A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                    </svg>
                </x-help-card>
            </div>
        </div>
    </section>

    <section class="max-w-4xl mx-auto mb-0 md:mb-12">
        <x-contact-form></x-contact-form>
    </section>
</x-app-layout>
