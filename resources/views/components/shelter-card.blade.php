@props(['name', 'location', 'description', 'url'])

<div class="bg-white rounded-xl shadow-xl p-6 border-t-8 border-violet-500 hover:shadow-2xl transition duration-300">
    <h3 class="text-2xl font-bold text-gray-800 mb-4">{{ $name }}</h3>
    <p class="text-sm text-gray-500 mb-4">{{ $location }}</p>
    <p class="mb-4 text-gray-700">{{ $description }}</p>
    <a href="{{ $url }}" target="_blank" class="block text-center bg-violet-500 text-white py-2.5 rounded-full
        hover:bg-violet-600 transition font-semibold">
        Detail a adopce
    </a>
</div>
