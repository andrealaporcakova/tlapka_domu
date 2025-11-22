@if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
        <strong class="font-bold">Holy smokes!</strong>
        <span class="block sm:inline">Something went wrong.</span>
        <ul class="mt-3 list-disc list-inside">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ $story->exists ? route('admin.stories.update', $story) : route('admin.stories.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
    @csrf
    @if($story->exists)
        @method('PUT')
    @endif

    <div>
        <label for="title" class="block text-sm font-medium text-gray-700">Titulek</label>
        <input type="text" name="title" id="title" value="{{ old('title', $story->title) }}" required
               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
    </div>

    <div>
        <label for="category" class="block text-sm font-medium text-gray-700">Kategorie</label>
        <input type="text" name="category" id="category" value="{{ old('category', $story->category) }}" required
               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
    </div>

    <div>
        <label for="excerpt" class="block text-sm font-medium text-gray-700">Krátký úryvek</label>
        <textarea name="excerpt" id="excerpt" rows="3" required
                  class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">{{ old('excerpt', $story->excerpt) }}</textarea>
    </div>

    <div>
        <label for="body" class="block text-sm font-medium text-gray-700">Celý text</label>
        <textarea name="body" id="body" rows="10"
                  class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">{{ old('body', $story->body) }}</textarea>
    </div>

    <div>
        <label for="image" class="block text-sm font-medium text-gray-700">Obrázek</label>
        <input type="file" name="image" id="image" class="mt-1 block w-full">
        @if ($story->image_path)
            <div class="mt-2">
                <img src="{{ Storage::url($story->image_path) }}" alt="Current image" class="h-20 rounded-md">
            </div>
        @endif
    </div>

    <div class="flex justify-end">
        <a href="{{ route('admin.stories.index') }}" class="bg-gray-200 text-gray-700 font-semibold py-2 px-4 rounded-lg hover:bg-gray-300 mr-4">
            Zrušit
        </a>
        <button type="submit" class="bg-emerald-500 text-white font-semibold py-2 px-4 rounded-lg hover:bg-emerald-600">
            {{ $story->exists ? 'Uložit změny' : 'Vytvořit příběh' }}
        </button>
    </div>
</form>
