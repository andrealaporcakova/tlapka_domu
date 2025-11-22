@props(['animal'])

<div
    class="bg-white rounded-xl shadow-lg overflow-hidden border-t-4 hover:shadow-xl transition duration-300
    {{ $animal->status === 'found' ? 'border-emerald-500' : 'border-violet-500' }}">


    <img src="{{ $animal->image_url }}" alt="{{ $animal->name ?? 'Neznámé zvíře' }}" class="w-full h-48 object-cover">

    <div class="p-4">

        <h4 class="text-xl font-semibold text-gray-800 mb-1">{{ $animal->name ?? ($animal->species ?? 'Neznámé zvíře') }}</h4>

        <p class="text-sm text-gray-500 mb-3">
            {{ $animal->status === 'found' ? 'Nalezeno' : 'Ztraceno' }}: {{ $animal->location_city }}
            , {{ $animal->report_date->format('d. m. Y') }}
        </p>

        <p class="text-gray-700 text-sm mb-4 line-clamp-3">{{ $animal->description }}</p>

        <div class="flex flex-col gap-3 mt-4">

            <a href="{{ route('animal.show', $animal) }}"
               class="{{ $animal->status === 'found' ? 'bg-emerald-500' : 'bg-violet-500' }} text-white text-sm
               font-semibold py-3 px-8 rounded-full w-full hover:{{ $animal->status === 'found' ? 'bg-emerald-600' : 'bg-violet-600' }} transition text-center">
                Detail a kontakt
            </a>

            @can('reunite', $animal)
                <form action="{{ route('animal.reunite', $animal->id) }}" method="POST"
                      onsubmit="return confirm('Opravdu označit jako nalezeno/vráceno? Inzerát zmizí z veřejného seznamu.');">
                    @csrf
                    @method('PATCH')

                    <button type="submit"
                            class="bg-blue-500 text-white text-sm font-semibold rounded-full px-8 py-3
                            hover:bg-blue-600 transition-colors w-full">
                        Nalezeno
                    </button>
                </form>
            @endcan

            @can('delete', $animal)
                <form action="{{ route('animal.destroy', $animal->id) }}" method="POST"
                      onsubmit="return confirm('Opravdu chcete smazat tento inzerát?');">
                    @csrf
                    @method('DELETE')

                    <button type="submit"
                            class="bg-red-400 text-white text-sm font-semibold rounded-full px-8 py-3
                            hover:bg-red-500 transition-colors w-full">
                        Smazat inzerát
                    </button>
                </form>
            @endcan
        </div>
    </div>
</div>
