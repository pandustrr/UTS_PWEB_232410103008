<nav class="bg-blue-600 sticky top-0 z-50">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <div class="flex-shrink-0 flex items-center">
                <span class="text-white text-xl font-bold">Himpunan Kosong</span>
            </div>

            <div class="flex space-x-4">
                <a href="{{ route('dashboard') }}"
                    class="text-white px-3 py-2 rounded-md text-sm font-medium hover:bg-blue-700 {{ request()->routeIs('dashboard') ? 'bg-blue-800' : '' }}">
                    Dashboard
                </a>
                <a href="{{ route('pengelolaan') }}"
                    class="text-white px-3 py-2 rounded-md text-sm font-medium hover:bg-blue-700 {{ request()->routeIs('pengelolaan') ? 'bg-blue-800' : '' }}">
                    Pengelolaan
                </a>
                <a href="{{ route('profile') }}"
                    class="text-white px-3 py-2 rounded-md text-sm font-medium hover:bg-blue-700 {{ request()->routeIs('profile') ? 'bg-blue-800' : '' }}">
                    Profile
                </a>
                <a href="{{ route('logout') }}"
                    class="bg-orange-500 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-orange-600">
                    Logout
                </a>
            </div>
        </div>
    </div>
</nav>
