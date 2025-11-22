@props(['title', 'description'])

<div class="p-6 bg-white rounded-xl shadow-lg border-b-4 border-violet-500 hover:shadow-xl transition">
    {{ $slot }}

    <h4 class="font-bold text-xl mt-3 mb-2 text-gray-800 text-center">{{ $title }}</h4>
    <p class="text-gray-600 text-sm text-center">{{ $description }}</p>
</div>
