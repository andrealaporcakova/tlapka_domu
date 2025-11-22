<x-app-layout>
    <section class="py-12 sm:py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <article>
                <span class="text-xs font-semibold uppercase tracking-wider text-violet-600">{{ $story->category }}</span>
                <h1 class="text-3xl sm:text-4xl font-bold text-gray-800 mt-2 mb-4">{{ $story->title }}</h1>

                <img src="{{ asset($story->image_path) }}" alt="{{ $story->title }}" class="w-full h-96 object-cover
                    rounded-xl shadow-lg mb-8">

                <div class="prose prose-lg max-w-none text-gray-700">
                    <p>{!! nl2br(e($story->body)) !!}</p>

                    <p class="mt-4 italic">{{ $story->excerpt }}</p>
                </div>

                <div class="mt-12 border-t pt-8">
                    <a href="{{ route('community') }}" class="inline-block text-violet-600 font-semibold
                        hover:text-violet-800 transition text-sm">
                        &larr; Zpět na všechny příběhy
                    </a>
                </div>
            </article>
        </div>
    </section>
</x-app-layout>
