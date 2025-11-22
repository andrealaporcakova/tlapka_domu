<footer class="bg-gray-800 text-white py-12 sm:py-16 pb-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 gap-8 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4">

            <div>
                <h4 class="text-lg font-semibold mb-4 border-b-2 border-violet-500 pb-1">Tlapka domů</h4>
                <p class="text-sm text-gray-400 mb-4">
                    S námi najdou ztracené tlapky cestu domů. Spojujeme komunitu, útulky a nálezce.
                </p>
                <div class="flex space-x-4">
                    <a href="#" aria-label="Facebook" class="text-gray-400 hover:text-violet-400 transition-colors">FB</a>
                    <a href="#" aria-label="Instagram" class="text-gray-400 hover:text-violet-400 transition-colors">IG</a>
                </div>
            </div>

            <div>
                <h4 class="text-lg font-bold mb-4 border-b-2 border-violet-500 pb-1">Hlášení & Nálezy</h4>
                <ul class="space-y-2 text-sm">
                    <li>
                        <a href="{{ route('animal.index') }}" class="text-gray-400 hover:text-violet-300 transition-colors">
                            Nalezená zvířata
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('animal.index') }}" class="text-gray-400 hover:text-violet-300 transition-colors">
                            Ztracená zvířata
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('animal.index') }}" class="text-gray-400 hover:text-violet-300 transition-colors">
                            Databáze zvířat
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('animal.report', ['stav' => 'ztraceny']) }}" class="text-gray-400 hover:text-violet-300 transition-colors">
                            Nahlásit ztrátu
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('animal.report', ['stav' => 'nalezeny']) }}" class="text-gray-400 hover:text-violet-300 transition-colors">
                            Nahlásit nález
                        </a>
                    </li>
                </ul>
            </div>

            <div>
                <h4 class="text-lg font-bold mb-4 border-b-2 border-violet-500 pb-1">Podpora & Pomoc</h4>
                <ul class="space-y-2 text-sm">
                    <li>
                        <a href="{{ route('shelters') }}#partner-list" class="text-gray-400 hover:text-violet-300 transition-colors">
                            Partnerské útulky
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('shelters') }}#how-to-help" class="text-gray-400 hover:text-violet-300 transition-colors">
                            Chci finančně přispět
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('shelters') }}#how-to-help" class="text-gray-400 hover:text-violet-300 transition-colors">
                            Dobrovolnictví
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('community') }}" class="text-gray-400 hover:text-violet-300 transition-colors">
                            Příběhy
                        </a>
                    </li>
                </ul>
            </div>

            <div>
                <h4 class="text-lg font-bold mb-4 border-b-2 border-violet-500 pb-1">Info & Kontakt</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="mailto:info@tlapkadomu.cz" class="text-gray-400 hover:text-violet-300 transition-colors">info@tlapkadomu.cz</a></li>
                    <li><span class="text-gray-400">Tel: +420 123 456 789</span></li>
                    <li><a href="{{ route('terms-of-use') }}" class="text-gray-400 hover:text-violet-300 transition-colors">Podmínky užití</a></li>
                    <li><a href="{{ route('terms-of-use') }}#gdpr" class="text-gray-400 hover:text-violet-300 transition-colors">
                            Zásady ochrany osobních údajů
                        </a></li>
                </ul>
            </div>

        </div>

        <div class="mt-12 pt-8 border-t border-gray-700 text-center">
            <p class="text-gray-400 text-sm">&copy; {{ date('Y') }} Tlapka domů. Všechna práva vyhrazena.</p>
        </div>
    </div>
</footer>
