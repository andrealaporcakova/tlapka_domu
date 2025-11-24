<x-app-layout>

    <section class="relative my-4 text-center bg-[url('/resources/images/paw_bg.png')] bg-cover bg-center bg-no-repeat
            mx-auto rounded-none 2xl:rounded-3xl w-full border border-violet-200
            py-12 sm:py-16">

        <div class="absolute inset-0 bg-white/80 rounded-3xl"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="flex justify-center items-center">

                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold">
                    Pomozte s námi těm, kteří to potřebují
                </h2>

                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-paw-print ml-3" aria-hidden="true">
                    <circle cx="11" cy="4" r="2"/><circle cx="18" cy="8" r="2"/><circle cx="20" cy="16" r="2"/><path d="M9 10a5 5 0 0 1 5 5v3.5a3.5 3.5 0 0 1-6.84 1.045Q6.52 17.48 4.46 16.84A3.5 3.5 0 0 1 5.5 10Z"/>
                </svg>
            </div>
            <p class="mt-4 text-lg sm:text-xl">
                Seznam ověřených útulků, se kterými spolupracujeme. Každá koruna a každý dobrý skutek se počítá.
            </p>
            <a href="#partner-list" class="inline-block mt-4 bg-emerald-500 text-white font-semibold py-3 px-10
                rounded-full text-lg hover:bg-emerald-600 transition duration-300 shadow-lg">
                Zobrazit útulky
            </a>
        </div>
    </section>

    <section id="partner-list" class="py-12 sm:py-16 mb-0 md:mb-12 rounded-none lg:rounded-3xl">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 text-center mb-6">Naši klíčoví partneři</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 text-center">

                @foreach($shelters as $shelter)
                    <x-shelter-card
                        :name="$shelter->name"
                        :location="$shelter->location"
                        :description="$shelter->description"
                        :url="$shelter->url"
                    />
                @endforeach

            </div>
        </div>
    </section>

    <section id="how-to-help" class="py-16 bg-violet-100 rounded-none 2xl:rounded-3xl mb-10">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 text-center mb-6">Jak můžete útulkům pomoci?</h2>

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

</x-app-layout>
