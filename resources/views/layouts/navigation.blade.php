<nav class="nav-main">
    <div class="nav-container">
        <div class="nav-content">
            <!-- Logo -->
            <div class="logo-container">
                <a href="{{ url('/') }}" class="brand">
                    <span>Brand</span>
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="nav-links desktop-nav">
                <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Dashboard</a>
                <a href="{{ route('products.index') }}" class="{{ request()->is('products*') ? 'active' : '' }}">Products</a>
                <a href="{{ route('contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a>

                <!-- Authentication Links -->
                @auth
                    <div class="user-menu">
                        <button class="user-button">
                            {{ Auth::user()->name }}
                            <svg class="dropdown-icon" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                            </svg>
                        </button>
                        <div class="dropdown-content" style="display: none;">
                            <a href="{{ route('profile.edit') }}">Profile</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-button">Logout</button>
                            </form>
                        </div>
                    </div>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>

            <!-- Mobile Menu Button -->
            <button class="mobile-menu-button">
                <svg class="menu-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="mobile-menu" style="display: none;">
        <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Dashboard</a>
        <a href="{{ route('products.index') }}" class="{{ request()->is('products*') ? 'active' : '' }}">Products</a>
        <a href="{{ route('contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a>
        @auth
            <a href="{{ route('profile.edit') }}">Profile</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="mobile-logout-button">Logout</button>
            </form>
        @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        @endauth
    </div>
</nav>

<style>
    .nav-main {
        background: #1565ed;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .nav-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1rem;
    }

    .nav-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 4rem;
    }

    .logo-container {
        display: flex;
        align-items: center;
    }

    .brand {
        font-size: 1.5rem;
        font-weight: bold;
        color: white;
        text-decoration: none;
    }

    .nav-links {
        display: flex;
        gap: 1.5rem;
        align-items: center;
    }

    .nav-links a {
        color: white;
        text-decoration: none;
        font-size: 1rem;
        padding: 0.5rem 0;
    }

    .nav-links a:hover {
        opacity: 0.8;
    }

    .nav-links a.active {
        font-weight: 600;
        border-bottom: 2px solid white;
    }

    .user-menu {
        position: relative;
    }

    .user-button {
        background: none;
        border: 1px solid white;
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 4px;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .dropdown-icon {
        width: 1rem;
        height: 1rem;
    }

    .dropdown-content {
        position: absolute;
        right: 0;
        top: 100%;
        background: white;
        border-radius: 4px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        min-width: 10rem;
        margin-top: 0.5rem;
    }

    .dropdown-content a,
    .dropdown-button {
        display: block;
        padding: 0.75rem 1rem;
        color: #333;
        text-decoration: none;
        width: 100%;
        text-align: left;
    }

    .dropdown-content a:hover,
    .dropdown-button:hover {
        background: #f5f5f5;
    }

    .mobile-menu-button {
        display: none;
        background: none;
        border: none;
        color: white;
        padding: 0.5rem;
        cursor: pointer;
    }

    .menu-icon {
        width: 1.5rem;
        height: 1.5rem;
    }

    .mobile-menu {
        display: none;
        padding: 1rem;
        background: white;
    }

    .mobile-menu a,
    .mobile-logout-button {
        display: block;
        padding: 0.75rem 1rem;
        color: #333;
        text-decoration: none;
        width: 100%;
        text-align: left;
    }

    .mobile-menu a:hover,
    .mobile-logout-button:hover {
        background: #f5f5f5;
    }

    @media (max-width: 768px) {
        .desktop-nav {
            display: none;
        }

        .mobile-menu-button {
            display: block;
        }

        .mobile-menu {
            display: none;
        }

        .mobile-menu.show {
            display: block;
        }
    }
</style>

<script>
    // Dropdown menu toggle
    const userButton = document.querySelector('.user-button');
    const dropdownContent = document.querySelector('.dropdown-content');
    const mobileMenuButton = document.querySelector('.mobile-menu-button');
    const mobileMenu = document.querySelector('.mobile-menu');

    if (userButton && dropdownContent) {
        userButton.addEventListener('click', (e) => {
            e.stopPropagation();
            dropdownContent.style.display = dropdownContent.style.display === 'none' ? 'block' : 'none';
        });

        window.addEventListener('click', () => {
            dropdownContent.style.display = 'none';
        });
    }

    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.style.display = mobileMenu.style.display === 'none' ? 'block' : 'none';
        });
    }
</script>
