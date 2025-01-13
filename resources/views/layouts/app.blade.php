<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>{{ config('app.name', 'Laravel') }}</title>

   <!-- Fonts -->
   <link rel="preconnect" href="https://fonts.bunny.net">
   <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

   <!-- Scripts -->
   @vite(['resources/css/app.css', 'resources/js/app.js'])

   <style>
       body {
           margin: 0;
           padding: 0;
           min-height: 100vh;
           font-family: 'Figtree', Arial, sans-serif;
           background: #f5f5f5;
           display: flex;
           flex-direction: column;
       }

       .header {
           background: #1565ed;
           padding: 1rem 2rem;
           color: white;
           display: flex;
           justify-content: space-between;
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
       }

       .user-menu {
           position: relative;
           display: inline-block;
       }

       .user-button {
           background: none;
           border: 1px solid white;
           color: white;
           padding: 8px 16px;
           cursor: pointer;
           border-radius: 4px;
       }

       .dropdown-content {
           position: absolute;
           right: 0;
           background-color: white;
           min-width: 160px;
           box-shadow: 0 2px 5px rgba(0,0,0,0.2);
           border-radius: 4px;
           z-index: 1;
       }

       .dropdown-content a {
           color: #333;
           padding: 12px 16px;
           text-decoration: none;
           display: block;
       }

       .dropdown-content a:hover {
           background-color: #f1f1f1;
       }

       .page-header {
           background: white;
           padding: 1rem 2rem;
           border-bottom: 1px solid #e5e7eb;
       }

       .page-title {
           font-size: 1.5rem;
           color: #333;
           font-weight: 600;
       }

       .main-content {
           flex: 1;
           padding: 2rem;
           max-width: 1200px;
           margin: 0 auto;
           width: 100%;
       }

       .footer {
           background: #1f2937;
           color: white;
           text-align: center;
           padding: 1rem;
           margin-top: auto;
       }

       /* Responsive adjustments */
       @media (max-width: 768px) {
           .header {
               padding: 1rem;
               flex-direction: column;
               gap: 1rem;
           }

           .nav-links {
               flex-direction: column;
               width: 100%;
               text-align: center;
           }

           .user-menu {
               width: 100%;
           }

           .user-button {
               width: 100%;
           }

           .dropdown-content {
               width: 100%;
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
       <a href="/" class="brand">{{ config('app.name', 'Laravel') }}</a>
       <nav class="nav-links">
           @include('layouts.navigation')
       </nav>
   </header>

   <!-- Page Heading -->
   @isset($header)
   <div class="page-header">
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

   <!-- Footer -->
   <footer class="footer">
       <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
   </footer>

   <script>
       // Toggle dropdown menu
       const userButton = document.querySelector('.user-button');
       const dropdownContent = document.querySelector('.dropdown-content');

       if (userButton && dropdownContent) {
           userButton.addEventListener('click', () => {
               dropdownContent.style.display = 
                   dropdownContent.style.display === 'none' ? 'block' : 'none';
           });

           // Close dropdown when clicking outside
           window.addEventListener('click', (e) => {
               if (!e.target.matches('.user-button')) {
                   dropdownContent.style.display = 'none';
               }
           });
       }
   </script>
</body>
</html>