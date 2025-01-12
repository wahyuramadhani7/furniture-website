<nav class="bg-white shadow-md border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="block h-10 w-auto">
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="hidden sm:flex space-x-6">
                <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'text-blue-500 font-semibold' : 'text-gray-700 hover:text-blue-500' }}">
                    Home
                </a>
                <a href="{{ route('products.index') }}" class="{{ request()->is('products*') ? 'text-blue-500 font-semibold' : 'text-gray-700 hover:text-blue-500' }}">
                    Products
                </a>
                <a href="{{ route('contact') }}" class="{{ request()->is('contact') ? 'text-blue-500 font-semibold' : 'text-gray-700 hover:text-blue-500' }}">
                    Contact
                </a>
            </div>

            <!-- Authentication Links -->
            <div class="hidden sm:flex items-center space-x-4">
                @auth
                    <!-- User Dropdown -->
                    <div class="relative">
                        <button class="inline-flex items-center text-gray-700 hover:text-blue-500 focus:outline-none">
                            <span>{{ Auth::user()->name }}</span>
                            <svg class="ml-1 w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"/>
                            </svg>
                        </button>
                        <div class="absolute right-0 mt-2 w-48 bg-white shadow-lg rounded-lg">
                            <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profile</a>
                            <form method="POST" action="{{ route('logout') }}" class="block">
                                @csrf
                                <button type="submit" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                @else
                    <!-- Login and Register -->
                    <a href="{{ route('login') }}" class="text-gray-700 hover:text-blue-500 font-medium">Login</a>
                    <a href="{{ route('register') }}" class="text-gray-700 hover:text-blue-500 font-medium">Register</a>
                @endauth
            </div>

            <!-- Mobile Menu Button -->
            <div class="sm:hidden flex items-center">
                <button id="mobile-menu-button" class="text-gray-500 hover:text-gray-700 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden sm:hidden">
        <div class="px-4 pt-2 pb-3 space-y-1">
            <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'text-blue-500 font-semibold' : 'text-gray-700 hover:text-blue-500' }}">
                Home
            </a>
            <a href="{{ route('products.index') }}" class="{{ request()->is('products*') ? 'text-blue-500 font-semibold' : 'text-gray-700 hover:text-blue-500' }}">
                Products
            </a>
            <a href="{{ route('contact') }}" class="{{ request()->is('contact') ? 'text-blue-500 font-semibold' : 'text-gray-700 hover:text-blue-500' }}">
                Contact
            </a>
            @auth
                <a href="{{ route('profile.edit') }}" class="block text-gray-700 hover:text-blue-500">Profile</a>
                <form method="POST" action="{{ route('logout') }}" class="block">
                    @csrf
                    <button type="submit" class="w-full text-left text-gray-700 hover:text-blue-500">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="block text-gray-700 hover:text-blue-500">Login</a>
                <a href="{{ route('register') }}" class="block text-gray-700 hover:text-blue-500">Register</a>
            @endauth
        </div>
    </div>
</nav>
