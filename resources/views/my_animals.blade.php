<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">Moje inzeráty</h1>

        @if($animals->isEmpty())
            <p>Zatím jste nenahlásili žádné inzeráty.</p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($animals as $animal)
                    <x-animal-card :animal="$animal" />
                @endforeach
            </div>
        @endif
    </div>
</x-app-layout>
