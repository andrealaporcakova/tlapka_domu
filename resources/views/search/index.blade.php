<x-app-layout>
    <section class="py-12">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            <h1 class="text-3xl font-bold text-gray-800 mb-6">
                Výsledky hledání pro: "{{ $searchTerm }}"
            </h1>

            <form action="{{ route('search') }}" method="GET" class="flex mb-8">
                <input type="text"
                       name="search"
                       placeholder="Hledat..."
                       class="flex-grow border-gray-300 rounded-l-3xl shadow-sm"
                       value="{{ $searchTerm ?? '' }}">
                <button type="submit"
                        class="px-4 py-2 bg-violet-600 text-white font-semibold rounded-r-3xl">
                    Hledat
                </button>
            </form>

            {{--Checking if any result was found--}}
            @if($animals->isEmpty() && $shelters->isEmpty() && $stories->isEmpty())
                <p class="text-gray-500 text-lg">
                    Pro výraz "{{ $searchTerm }}" nebylo nic nalezeno.
                </p>

            @else

                {{-- --- ANIMAL SECTION --- --}}
                @if($animals->isNotEmpty())
                    <div class="mb-8">
                        <h2 class="text-2xl font-semibold text-gray-700 mb-4 border-b pb-2">Nalezená zvířata</h2>
                        <ul class="space-y-3">
                            @foreach($animals as $animal)
                                <li class="bg-white shadow-sm rounded-lg p-4">
                                    <a href="{{ route('animal.show', $animal) }}" class="font-bold text-violet-600 hover:underline">
                                        {{ $animal->name ?? $animal->species }}
                                    </a>
                                    <p class="text-sm text-gray-600">{{ $animal->location_city }}</p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{-- --- SECTION FOR SHELTERS --- --}}
                @if($shelters->isNotEmpty())
                    <div class="mb-8">
                        <h2 class="text-2xl font-semibold text-gray-700 mb-4 border-b pb-2">Nalezené útulky</h2>
                        <ul class="space-y-3">
                            @foreach($shelters as $shelter)
                                <li class="bg-white shadow-sm rounded-lg p-4">
                                    {{-- Uprav 'shelter.show' na tvou skutečnou routu --}}
                                    <a href="{{ route('shelters') }}" class="font-bold text-violet-600 hover:underline">
                                        {{ $shelter->name }}
                                    </a>
                                    <p class="text-sm text-gray-600">{{ $shelter->city }}</p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{-- --- STORIES SECTION --- --}}
                @if($stories->isNotEmpty())
                    <div class="mb-8">
                        <h2 class="text-2xl font-semibold text-gray-700 mb-4 border-b pb-2">Nalezené příběhy</h2>
                        <ul class="space-y-3">
                            @foreach($stories as $story)
                                <li class="bg-white shadow-sm rounded-lg p-4">
                                    {{-- Uprav 'story.show' na tvou skutečnou routu --}}
                                    <a href="{{ route('story.show', $story) }}" class="font-bold text-violet-600 hover:underline">
                                        {{ $story->title }}
                                    </a>
                                    <p class="text-sm text-gray-600">{{ Str::limit(strip_tags($story->content), 150) }}</p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            @endif

        </div>
    </section>
</x-app-layout>
