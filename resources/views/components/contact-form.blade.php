<section class="bg-violet-200 rounded-none md:rounded-3xl p-4" id="kontakt">
    <div class="px-4 py-6 sm:py-12">
        <h2 class="text-3xl sm:text-4xl font-semibold text-center mb-6">
            Kontaktujte nás
        </h2>
        <p class="text-lg text-gray-600 text-center mb-12">
            Napište nám, rádi vám pomůžeme s hledáním nebo hlášením.
        </p>

        @if(session('success'))
            <div class="mb-6 p-4 bg-emerald-100 border border-emerald-300 text-emerald-800 rounded-3xl text-center">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="mb-6 p-4 bg-red-100 border border-red-300 text-red-800 rounded-3xl">
                <strong class="block text-center mb-2">Ajaj, něco se pokazilo:</strong>
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
            @csrf


            <input type="hidden" name="form_sent_time" value="{{ time() }}">


            <div>
                <label for="jmeno" class="block text-sm font-medium text-gray-700 mb-1">Jméno a příjmení:</label>
                <input type="text" id="jmeno" name="jmeno" required value="{{ old('jmeno') }}"
                       placeholder="Vaše jméno a příjmení"
                       class="w-full px-4 py-2 bg-white rounded-3xl">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">E-mail:</label>
                <input type="email" id="email" name="email" required value="{{ old('email') }}"
                       placeholder="vas@email.cz"
                       class="w-full px-4 py-2 bg-white rounded-3xl">
            </div>

            <div>
                <label for="zprava" class="block text-sm font-medium text-gray-700 mb-1">Zpráva:</label>
                <textarea id="zprava" name="zprava" rows="4" required
                          placeholder="Napište nám, co potřebujete..."
                          class="w-full px-4 py-2 bg-white rounded-3xl">{{ old('zprava') }}</textarea>
            </div>

            <div class="text-center">
                <button type="submit"
                        class=" bg-violet-600 text-white font-semibold rounded-3xl px-6 py-3">
                    Odeslat zprávu
                </button>
            </div>
        </form>

    </div>
</section>
