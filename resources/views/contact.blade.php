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
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            background-image: url('./images/furniture.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
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
            max-width: 800px;
            margin: 0 auto;
        }

        .contact-form {
            background: white;
            border-radius: 8px;
            padding: 2rem;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }

        .contact-title {
            font-size: 1.8rem;
            color: #333;
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            color: #333;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
            box-sizing: border-box;
        }

        .form-control:focus {
            outline: none;
            border-color: #1565ed;
            box-shadow: 0 0 0 2px rgba(21, 101, 237, 0.1);
        }

        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }

        .submit-button {
            background: #1565ed;
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .submit-button:hover {
            background-color: #1151c3;
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
        <div class="contact-form">
            <h1 class="contact-title">Hubungi Kami</h1>
            <form>
                <div class="form-group">
                    <label class="form-label" for="name">Nama</label>
                    <input type="text" class="form-control" id="name" placeholder="Masukkan nama Anda">
                </div>
                <div class="form-group">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda">
                </div>
                <div class="form-group">
                    <label class="form-label" for="message">Pesan</label>
                    <textarea class="form-control" id="message" placeholder="Tulis pesan Anda"></textarea>
                </div>
                <button type="submit" class="submit-button">Kirim</button>
            </form>
        </div>
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