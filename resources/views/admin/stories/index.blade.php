<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Správa příběhů
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="mb-4">
                        <a href="{{ route('admin.stories.create') }}" class="bg-emerald-500 text-white font-semibold
                            py-2 px-4 rounded-lg hover:bg-emerald-600">
                            + Přidat nový příběh
                        </a>
                    </div>

                    @if(session('success'))
                        <div class="bg-emerald-100 text-emerald-700 p-4 rounded-lg mb-4">{{ session('success') }}</div>
                    @endif

                    @if(session('error'))
                        <div class="bg-red-100 text-red-700 p-4 rounded-lg mb-4">{{ session('error') }}</div>
                    @endif

                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Titulek</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Kategorie</th>
                            <th class="relative px-6 py-3"><span class="sr-only">Akce</span></th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($stories as $story)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $story->title }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $story->category }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium flex gap-4">

                                    <form action="{{ route('admin.stories.destroy', $story) }}" method="POST"
                                          onsubmit="return confirm('Opravdu smazat?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900">Smazat</button>
                                    </form>
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
