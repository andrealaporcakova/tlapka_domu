<header class="w-full" x-data="{ mobileSearchOpen: false }">
    <div class="w-full bg-violet-200 p-3 sm:p-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center px-4 sm:px-6">

            <div class="flex items-center gap-2">
                <img src="{{ asset('images/logo_paw.png') }}" alt="Logo" width="40" height="40">
                <a href="{{ url('/') }}" class="text-xl sm:text-2xl font-bold">Tlapka domů</a>
            </div>

            <div class="flex items-center gap-2 sm:gap-4">

                <form action="{{ route('search') }}" method="GET" class="relative hidden md:block w-48 lg:w-64">

                    <div id="vyhledavac-container" class="relative">
                        <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 h-5 w-5 text-gray-400"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>

                        <input type="search"
                               name="search"
                               placeholder="Hledat..."
                               class="w-full py-2 pl-10 pr-4
                                border border-gray-200 rounded-3xl bg-white text-gray-800 focus:border-violet-300
                                focus:ring-2 focus:outline-none transition duration-150"
                               value="{{ $searchTerm ?? '' }}">
                    </div>

                </form>

                <button @click="mobileSearchOpen = !mobileSearchOpen" class="md:hidden p-2 rounded-full bg-white hover:bg-violet-100 transition-colors">
                    <svg class="h-6 w-6 text-violet-700"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                </button>

                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    @auth
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm
                                leading-4 font-medium rounded-3xl text-gray-500 dark:text-gray-400 bg-white
                                dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none
                                transition ease-in-out duration-150">
                                    <div>{{ Auth::user()->name }}</div>
                                    <div class="ms-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('profile.edit')">
                                    Profil
                                </x-dropdown-link>

                                <x-dropdown-link :href="route('my-animals.index')">
                                    Moje inzeráty
                                </x-dropdown-link>
                                @can('access-admin-panel')
                                    <div class="border-t border-gray-200 dark:border-gray-600"></div>
                                    <x-dropdown-link :href="route('admin.animals.index')">
                                        Správa zvířat (Admin)
                                    </x-dropdown-link>
                                    <x-dropdown-link :href="route('admin.stories.index')">
                                        Správa Příběhů (Admin)
                                    </x-dropdown-link>
                                @endcan

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')"
                                                     onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                        Odhlásit se
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold focus:outline focus:outline-2
                        focus:rounded-full focus:p-2 focus:outline-violet-700 transition duration-500
                        hover:text-gray-800">Přihlásit se</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ms-4 font-semibold focus:outline focus:outline-2
                            focus:rounded-full focus:p-2 focus:outline-violet-700 transition duration-500
                            hover:text-gray-800">
                                Registrovat
                            </a>
                        @endif
                    @endauth
                </div>
            </div>

        </div>
    </div>

    <!-- Mobile Search Bar -->
    <div x-show="mobileSearchOpen"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 transform -translate-y-2"
         x-transition:enter-end="opacity-100 transform translate-y-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 transform translate-y-0"
         x-transition:leave-end="opacity-0 transform -translate-y-2"
         class="md:hidden bg-violet-200 p-4"
         style="display: none;"
    >
        <form action="{{ route('search') }}" method="GET" class="relative">

            <div class="relative">
                <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 h-5 w-5 text-gray-400"
                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>

                <input type="search"
                       name="search"
                       placeholder="Hledat..."
                       class="w-full py-2 pl-10 pr-4
                                border border-gray-200 rounded-3xl bg-white text-gray-800 focus:border-violet-300
                                focus:ring-2 focus:outline-none transition duration-150"
                       value="{{ $searchTerm ?? '' }}">
            </div>
        </form>
    </div>

    <div class="w-full">
        <nav x-data="{ open: false }" class="max-w-7xl mx-auto flex justify-between items-baseline mt-4 relative px-4 sm:px-6">

            <nav id="menu-nav" class="hidden lg:flex md:flex justify-center gap-14 items-center w-full">
                <x-nav-link href="{{ url('/') }}" :active="request()->routeIs('home')">Domů</x-nav-link>
                <x-nav-link href="{{ route('animal.index') }}" :active="request()->routeIs('animal.index')">Databáze zvířat</x-nav-link>
                <x-nav-link href="{{ route('shelters') }}" :active="request()->routeIs('shelters')">Útulky</x-nav-link>
                <x-nav-link href="{{ route('community') }}" :active="request()->routeIs('community')">Komunita</x-nav-link>
            </nav>

            <div id="mobile-menu" :class="{'block': open, 'hidden': ! open}" class="hidden md:hidden lg:hidden top-full
                left-0 w-full bg-white rounded-3xl shadow-lg p-4 z-20">
                <div class="flex flex-col space-y-1">

                    <x-nav-link href="{{ url('/') }}" :active="request()->routeIs('home')" class="block py-2 px-4 rounded-lg text-gray-600">Domů</x-nav-link>
                    <x-nav-link href="{{ route('animal.index') }}" :active="request()->routeIs('animal.index')" class="block py-2 px-4 rounded-lg text-gray-600">Databáze zvířat</x-nav-link>
                    <x-nav-link href="{{ route('shelters') }}" :active="request()->routeIs('shelters')" class="block py-2 px-4 rounded-lg text-gray-600">Útulky</x-nav-link>
                    <x-nav-link href="{{ route('community') }}" :active="request()->routeIs('community')" class="block py-2 px-4 rounded-lg text-gray-600">Komunita</x-nav-link>

                    <div class="border-t border-gray-200 pt-4 mt-4"></div>

                    @auth
                        <div class="px-4 mb-2">
                            <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                            <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                        </div>

                        <x-nav-link :href="route('profile.edit')" class="block py-2 px-4 rounded-lg text-gray-600">
                            Profil
                        </x-nav-link>
                        <x-nav-link :href="route('my-animals.index')" class="block py-2 px-4 rounded-lg text-gray-600">
                            Moje inzeráty
                        </x-nav-link>

                        @can('access-admin-panel')
                            <x-nav-link :href="route('admin.animals.index')" class="block py-2 px-4 rounded-lg text-gray-600">Správa Zvířat (Admin)</x-nav-link>
                            <x-nav-link :href="route('admin.shelters.index')" class="block py-2 px-4 rounded-lg text-gray-600">Správa Útulků (Admin)</x-nav-link>
                        @endcan

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-nav-link :href="route('logout')"
                                        onclick="event.preventDefault(); this.closest('form').submit();"
                                        class="block py-2 px-4 rounded-lg text-violet-700">
                                Odhlásit se
                            </x-nav-link>
                        </form>

                    @else
                        <x-nav-link :href="route('login')" class="block py-2 px-4 rounded-lg text-gray-600">
                            Přihlásit se
                        </x-nav-link>
                        @if (Route::has('register'))
                            <x-nav-link :href="route('register')" class="block py-2 px-4 rounded-lg text-gray-600">
                                Registrovat
                            </x-nav-link>
                        @endif
                    @endauth

                </div>
            </div>

            <button id="hamburger-btn" @click="open = !open" class="md:hidden lg:hidden p-2 rounded-3xl hover:bg-violet-100 transition-colors ml-auto">
                <svg class="h-6 w-6 text-violet-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                </svg>
            </button>

        </nav>
    </div>


</header>
