<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        :root {
            --primary-color: #2563eb;
            --primary-dark: #1d4ed8;
            --secondary-color: #64748b;
            --background-light: #f8fafc;
            --text-dark: #1e293b;
            --text-light: #94a3b8;
            --white: #ffffff;
            --shadow-sm: 0 1px 3px rgba(0,0,0,0.1);
            --shadow-md: 0 4px 6px -1px rgba(0,0,0,0.1);
            --shadow-lg: 0 10px 15px -3px rgba(0,0,0,0.1);
        }

        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            font-family: 'Figtree', system-ui, sans-serif;
            background: var(--background-light);
            display: flex;
            flex-direction: column;
            color: var(--text-dark);
            animation: fadeIn 1s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .header {
            background: var(--white);
            padding: 1rem 2rem;
            color: var(--text-dark);
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: var(--shadow-sm);
            position: sticky;
            top: 0;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .header.scrolled {
            box-shadow: var(--shadow-lg);
            background: var(--primary-color);
            color: var(--white);
        }

        .brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--primary-color);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: color 0.3s ease;
        }

        .brand:hover {
            color: var(--primary-dark);
        }

        .brand i {
            font-size: 1.75rem;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            align-items: center;
        }

        .nav-links a {
            color: var(--text-dark);
            text-decoration: none;
            font-size: 1rem;
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            transition: all 0.3s ease;
        }

        .nav-links a:hover {
            background: var(--background-light);
            color: var(--primary-color);
        }

        .nav-links a.active {
            background: var(--primary-color);
            color: var(--white);
        }

        .user-menu {
            position: relative;
            display: inline-block;
        }

        .user-button {
            background: var(--primary-color);
            border: none;
            color: var(--white);
            padding: 0.75rem 1.5rem;
            cursor: pointer;
            border-radius: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .user-button:hover {
            background: var(--primary-dark);
            transform: translateY(-1px);
            box-shadow: var(--shadow-md);
        }

        .dropdown-content {
            display: none;
            position: absolute;
            right: 0;
            top: 120%;
            background: var(--white);
            min-width: 200px;
            border-radius: 0.5rem;
            box-shadow: var(--shadow-lg);
            overflow: hidden;
            animation: dropdownFade 0.3s ease;
        }

        @keyframes dropdownFade {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .dropdown-content a {
            color: var(--text-dark);
            padding: 1rem 1.5rem;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            transition: all 0.2s ease;
        }

        .dropdown-content a i {
            color: var(--text-light);
            font-size: 1.1rem;
        }

        .dropdown-content a:hover {
            background: var(--background-light);
            color: var(--primary-color);
        }

        .dropdown-content a:hover i {
            color: var(--primary-color);
        }

        .page-header {
            background: var(--white);
            padding: 1.5rem 2rem;
            border-bottom: 1px solid #e5e7eb;
            margin-bottom: 2rem;
        }

        .page-title {
            font-size: 1.75rem;
            color: var(--text-dark);
            font-weight: 700;
            margin: 0;
            animation: slideIn 0.6s ease-out;
        }

        @keyframes slideIn {
            from {
                transform: translateX(-100px);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .main-content {
            flex: 1;
            padding: 2rem;
            max-width: 1200px;
            margin: 0 auto;
            width: 100%;
        }

        .breadcrumbs {
            display: flex;
            gap: 0.5rem;
            align-items: center;
            margin-bottom: 1rem;
            color: var(--text-light);
            font-size: 0.875rem;
        }

        .breadcrumbs a {
            color: var(--text-light);
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .breadcrumbs a:hover {
            color: var(--primary-color);
        }

        @media (max-width: 768px) {
            .header {
                padding: 1rem;
            }

            .nav-links {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: var(--white);
                flex-direction: column;
                padding: 1rem;
                box-shadow: var(--shadow-md);
            }

            .nav-links.show {
                display: flex;
            }

            .mobile-menu-button {
                display: block;
                background: none;
                border: none;
                color: var(--text-dark);
                font-size: 1.5rem;
                cursor: pointer;
            }

            .user-menu {
                margin-left: auto;
            }

            .main-content {
                padding: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <header class="header">
        <a href="/" class="brand">
            <i class="fas fa-home"></i>
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="mobile-menu-button">
            <i class="fas fa-bars"></i>
        </button>
        <nav class="nav-links">
            @include('layouts.navigation')
        </nav>
    </header>

    <!-- Page Heading -->
    @isset($header)
    <div class="page-header">
        <div class="breadcrumbs">
            <a href="/">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Current Page</span>
        </div>
        <div class="max-w-7xl mx-auto">
            {{ $header }}
        </div>
    </div>
    @endisset

    <!-- Page Content -->
    <main class="main-content">
        @if (isset($slot))
            {{ $slot }}
        @else
            @yield('content')
        @endif
    </main>

    <script>
        // Toggle dropdown menu
        const userButton = document.querySelector('.user-button');
        const dropdownContent = document.querySelector('.dropdown-content');
        const mobileMenuButton = document.querySelector('.mobile-menu-button');
        const navLinks = document.querySelector('.nav-links');

        if (userButton && dropdownContent) {
            userButton.addEventListener('click', (e) => {
                e.stopPropagation();
                dropdownContent.style.display = 
                    dropdownContent.style.display === 'none' ? 'block' : 'none';
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', (e) => {
                if (!dropdownContent.contains(e.target) && !userButton.contains(e.target)) {
                    dropdownContent.style.display = 'none';
                }
            });
        }

        // Mobile menu toggle
        if (mobileMenuButton && navLinks) {
            mobileMenuButton.addEventListener('click', () => {
                navLinks.classList.toggle('show');
            });
        }

        // Add active class to current nav item
        const currentPath = window.location.pathname;
        const navItems = document.querySelectorAll('.nav-links a');
        navItems.forEach(item => {
            if (item.getAttribute('href') === currentPath) {
                item.classList.add('active');
            }
        });

        // Add scroll event to header
        window.addEventListener('scroll', () => {
            const header = document.querySelector('.header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>
