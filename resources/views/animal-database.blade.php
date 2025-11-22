<x-app-layout>

    <section class="bg-violet-200 mt-4 text-center relative rounded-none 2xl:rounded-3xl mb-0 md:mb-1
            py-12 sm:py-16">

        <div class="max-w-4xl mx-auto px-4 w-full">

            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold">
                Pomozte jim najít cestu domů
            </h2>

            <p class="mt-4 text-lg sm:text-xl">
                Projděte si záznamy ztracených i nalezených zvířat a pomozte nám spojit mazlíčky s jejich majiteli.
            </p>
            <div class="mt-4 flex flex-col sm:flex-row justify-center gap-4">
                <a href="#list" class="inline-block bg-emerald-500 text-white font-semibold py-3 px-10 rounded-full
                text-lg hover:bg-emerald-600 transition duration-300 shadow-lg">
                    Prohlížet zvířata
                </a>
                <a href="#reporting" class="inline-block bg-violet-600 text-white font-semibold py-3 px-10 rounded-full
                text-lg hover:bg-violet-700 transition duration-300 shadow-lg">
                    Nahlásit NÁLEZ / ZTRÁTU
                </a>
            </div>
        </div>
    </section>

    <section class="py-12 rounded-none lg:rounded-3xl mb-0 md:mb-1">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-animal-search></x-animal-search>
        </div>
    </section>

    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <h3 id="list" class="text-2xl font-bold mb-6 scroll-mt-28">Aktuální záznamy</h3>

            @if($animals->isEmpty())
                <p class="text-lg text-gray-600">
                    Žádné záznamy nebyly nalezeny, zkuste změnit filtry.
                </p>
            @else
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4 gap-6">
                    @foreach($animals as $animal)
                        <x-animal-card :animal="$animal" />
                    @endforeach
                </div>

                <div class="mt-8">
                    {{ $animals->withQueryString()->links() }}
                </div>
            @endif

        </div>
    </section>


    <section id="reporting" class="py-12 rounded-none lg:rounded-3xl mb-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-report-form></x-report-form>
        </div>
    </section>

</x-app-layout>











