<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniture Store</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Navbar -->
    <header>
        <div class="navbar">
            <div class="logo">
                <a href="#">Furniture Store</a>
            </div>
            <nav>
                <ul>
                    <li><a href="#">Kategori</a></li>
                    <li><a href="#">Inspirasi</a></li>
                    <li><a href="#">Furnitur</a></li>
                    <li><a href="#">Dekorasi</a></li>
                    <li><a href="#">Kasur & Linen</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <p>© 2025 Furniture Store. All Rights Reserved.</p>
    </footer>
</body>
</html>
