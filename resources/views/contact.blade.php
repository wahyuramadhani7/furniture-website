@extends('layouts.app')

@section('content')
    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            background: #f5f5f5;
        }
        body {
            background-image: url('{{ asset("images/furniture.jpg") }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
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
            background-color: #1565ed;
            color: white;
            text-align: center;
            padding: 0.8rem 0;
            margin-top: 2rem;
            font-size: 0.9rem;
            width: 100%;
        }

        .footer a {
            color: #ffcc00;
            text-decoration: none;
            font-weight: bold;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>

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
        <p>&copy; 2025 Laravel. All rights reserved. <a href="/privacy">Privacy Policy</a> | <a href="/terms">Terms of Service</a></p>
    </footer>
@endsection
