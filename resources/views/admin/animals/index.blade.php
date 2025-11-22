<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Správa všech inzerátů zvířat
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <p class="mb-4">Databáze zvířat</p>

                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Jméno/Druh</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Lokace</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Datum</th>
                            <th class="relative px-6 py-3"><span class="sr-only">Akce</span></th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($animals as $animal)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    {{ $animal->name ?? $animal->species }}
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm">
                                    @if($animal->status == 'lost')
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full
                                            bg-red-100 text-red-800">
                                            Ztraceno
                                        </span>
                                    @elseif($animal->status == 'found')
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full
                                         bg-emerald-100 text-emerald-800">
                                            Nalezeno
                                        </span>
                                    @else
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full
                                         bg-gray-100 text-gray-800">
                                            Vráceno
                                        </span>
                                    @endif
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $animal->location_city }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $animal->report_date->format('d.m.Y') }}
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium flex gap-2">
                                    @if($animal->status != 'reunited')
                                        @can('reunite', $animal)
                                            <form action="{{ route('animal.reunite', $animal->id) }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="text-emerald-600 hover:text-emerald-900">
                                                    Nalezeno
                                                </button>
                                            </form>
                                        @endcan
                                    @endif

                                    @can('delete', $animal)
                                        <form action="{{ route('animal.destroy', $animal->id) }}" method="POST"
                                              onsubmit="return confirm('Opravdu smazat?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900">
                                                Smazat
                                            </button>
                                        </form>
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
