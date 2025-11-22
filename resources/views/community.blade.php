<x-app-layout>
    <section class="bg-[url('/resources/images/banner_community.png')] bg-cover bg-center bg-no-repeat w-full mx-auto
             rounded-none 2xl:rounded-3xl my-4 relative flex items-center justify-center mb-0 md:mb-12 py-12 sm:py-16">

        <div class="relative z-10 text-center px-4">

            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold">
                Když se naděje stane skutečností
            </h2>
            <p class="mt-4 text-lg sm:text-xl">Vaše příběhy návratů.</p>

            <a href="#list" class="inline-block mt-4 bg-violet-600 text-white font-semibold py-3 px-10 rounded-full
                text-lg hover:bg-violet-700 transition duration-300 shadow-lg">
                Číst příběhy
            </a>
        </div>
    </section>
    <section id="list" class="py-12 bg-gray-50 rounded-none 2xl:rounded-3xl">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">
                Nejnovější dojemné návraty
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                @foreach($stories as $story)
                    <article class="bg-white rounded-xl shadow-xl overflow-hidden border-t-4 border-violet-500
                             hover:shadow-2xl transition duration-300">

                        <img src="{{ asset($story->image_path) }}" alt="{{ $story->title }}" class="w-full h-56 object-cover">

                        <div class="p-5">
                            <span class="text-xs font-semibold uppercase tracking-wider text-violet-600">{{ $story->category }}</span>

                            <h3 class="text-xl font-bold text-gray-800 mt-2 mb-2">{{ $story->title }}</h3>

                            <p class="text-gray-700 text-sm line-clamp-3">{{ $story->excerpt }}</p>

                            <div class="mt-4">
                                <a href="{{ route('story.show', $story) }}" class="inline-block text-violet-600
                                    font-semibold hover:text-violet-800 transition text-sm">
                                    Číst celý příběh &rarr;
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
</x-app-layout>
