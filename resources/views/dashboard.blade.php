<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            background: #f5f5f5;
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

        .main-content {
            padding: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .dashboard-title {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 1.5rem;
        }

        .welcome-banner {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://source.unsplash.com/random/1200x400/?furniture');
            background-size: cover;
            background-position: center;
            border-radius: 8px;
            padding: 4rem 2rem;
            color: white;
            text-align: center;
            margin-bottom: 2rem;
        }

        .welcome-banner h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .welcome-banner p {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        .products-section {
            background: white;
            border-radius: 8px;
            padding: 2rem;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }

        .products-title {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 1.5rem;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 1.5rem;
        }

        .no-products {
            text-align: center;
            color: #666;
            padding: 2rem;
            grid-column: 1 / -1;
        }

        .footer {
            background: #1f2937;
            color: white;
            text-align: center;
            padding: 1rem;
            margin-top: 2rem;
        }
    </style>
</head>
<body>
    <header class="header">
        <a href="/" class="brand">Furniture Website</a>
        <nav class="nav-links">
            <a href="/">Home</a>
            <a href="/products">Products</a>
            <a href="/contact">Contact</a>
            <div class="user-menu">
                <button class="user-button">Wahyu Ramadhani</button>
                <div class="dropdown-content" style="display: none;">
                    <a href="/profile">Profile</a>
                    <a href="/logout">Logout</a>
                </div>
            </div>
        </nav>
    </header>

    <main class="main-content">
        <h1 class="dashboard-title">Dashboard</h1>

        <div class="welcome-banner">
            <h1>Selamat Datang di Dashboard</h1>
            <p>Pantau produk terbaru dan kelola toko Anda dengan mudah!</p>
        </div>

        <section class="products-section">
            <h2 class="products-title">Produk Terbaru</h2>
            <div class="products-grid">
                <div class="no-products">
                    Tidak ada produk tersedia saat ini.
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <p>© 2025 Laravel. All rights reserved.</p>
    </footer>

    <script>
        // Toggle dropdown menu
        const userButton = document.querySelector('.user-button');
        const dropdownContent = document.querySelector('.dropdown-content');

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
    </script>
</body>
</html>