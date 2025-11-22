<x-app-layout>
    <section class="py-12 sm:py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <article>
                <div class="mb-8">
                    <a href="{{ route('animal.index') }}" class="inline-block text-violet-600 font-semibold
                        hover:text-violet-800 transition text-sm">
                        &larr; Zpět na databázi zvířat
                    </a>
                </div>

                <div class="mb-4">
                    @if($animal->status == 'lost')
                        <span class="px-4 py-1 text-sm leading-5 font-semibold rounded-full bg-red-100 text-red-800">ZTRACENO</span>
                    @elseif($animal->status == 'found')
                        <span class="px-4 py-1 text-sm leading-5 font-semibold rounded-full bg-emerald-100 text-emerald-800">NALEZENO</span>
                    @else
                        <span class="px-4 py-1 text-sm leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">NALEZENO / VRÁCENO</span>
                    @endif
                </div>

                <h1 class="text-3xl sm:text-4xl font-bold text-gray-800 mt-2 mb-4">{{ $animal->name ?? $animal->species }}</h1>

                <img src="{{ $animal->image_url }}" alt="{{ $animal->name ?? 'Neznámé zvíře' }}" class="w-full h-96 object-cover rounded-xl shadow-lg mb-8">

                <div class="bg-white shadow-lg rounded-xl border border-gray-200 p-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4 border-b pb-2">Detail inzerátu</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <strong class="block text-sm font-medium text-gray-500">Jméno:</strong>
                            <span class="text-lg text-gray-900">{{ $animal->name ?? '(Neznámo)' }}</span>
                        </div>
                        <div>
                            <strong class="block text-sm font-medium text-gray-500">Druh:</strong>
                            <span class="text-lg text-gray-900">{{ $animal->species }}</span>
                        </div>
                        <div>
                            <strong class="block text-sm font-medium text-gray-500">Plemeno:</strong>
                            <span class="text-lg text-gray-900">{{ $animal->breed ?? '(Neznámo)' }}</span>
                        </div>
                        <div>
                            <strong class="block text-sm font-medium text-gray-500">Pohlaví:</strong>
                            <span class="text-lg text-gray-900">{{ $animal->sex_in_czech }}</span>
                        </div>
                        <div>
                            <strong class="block text-sm font-medium text-gray-500">Lokace:</strong>
                            <span class="text-lg text-gray-900">{{ $animal->location_city }} ({{ $animal->location_region }})</span>
                        </div>
                        <div>
                            <strong class="block text-sm font-medium text-gray-500">Datum události:</strong>
                            <span class="text-lg text-gray-900">{{ $animal->report_date->format('d. m. Y') }}</span>
                        </div>
                    </div>

                    <div class="mt-6">
                        <strong class="block text-sm font-medium text-gray-500">Podrobný popis:</strong>
                        <p class="prose max-w-none text-gray-700 mt-2">
                            {!! nl2br(e($animal->description)) !!}
                        </p>
                    </div>

                    <div class="mt-8 border-t pt-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Kontaktní údaje</h3>

                        @if($animal->user_id && $animal->user)
                            <p class="text-gray-700">Inzerát vložil/a: <strong>{{ $animal->user->name }}</strong></p>

                            <p class="text-gray-700">Kontaktní e-mail:
                                <a href="mailto:{{ $animal->user->email }}" class="font-semibold text-violet-600
                                    hover:text-violet-800 hover:underline">
                                    {{ $animal->user->email }}
                                </a>
                            </p>

                            <p class="text-gray-700">Kontaktní telefon:
                                @if($animal->user->phone)
                                    <a href="tel:{{ $animal->user->phone }}" class="font-semibold text-violet-600
                                        hover:text-violet-800 hover:underline">
                                        {{ $animal->user->phone }}
                                    </a>
                                @else
                                    <span class="text-gray-500">(neuveden)</span>
                                @endif
                            </p>

                        @elseif($animal->guest_email)
                            <p class="text-gray-700">Kontaktní e-mail:
                                <a href="mailto:{{ $animal->guest_email }}" class="font-semibold text-violet-600
                                    hover:text-violet-800 hover:underline">
                                    {{ $animal->guest_email }}
                                </a>
                            </p>

                            <p class="text-gray-700">Kontaktní telefon:
                                @if($animal->guest_phone)
                                    <a href="tel:{{ $animal->guest_phone }}" class="font-semibold text-violet-600
                                        hover:text-violet-800 hover:underline">
                                        {{ $animal->guest_phone }}
                                    </a>
                                @else
                                    <span class="text-gray-500">(neuveden)</span>
                                @endif
                            </p>

                        @else
                            <p class="text-gray-500">Ke vložení inzerátu nebyly poskytnuty přímé kontaktní údaje.</p>
                        @endif
                    </div>
                </div>

            </article>
        </div>
    </section>
</x-app-layout>
