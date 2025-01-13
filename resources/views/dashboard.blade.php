@extends('layouts.app')

@section('styles')
<style>
    body {
        background-image: url('{{ asset("images/furniture.jpg") }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
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
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
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
</style>
@endsection

@section('content')
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
@endsection

@section('scripts')
<script>
    // Toggle dropdown menu
    const userButton = document.querySelector('.user-button');
    const dropdownContent = document.querySelector('.dropdown-content');

    if (userButton) {
        userButton.addEventListener('click', () => {
            dropdownContent.style.display = 
                dropdownContent.style.display === 'none' ? 'block' : 'none';
        });
    }

    // Close dropdown when clicking outside
    window.addEventListener('click', (e) => {
        if (!e.target.matches('.user-button')) {
            if (dropdownContent) {
                dropdownContent.style.display = 'none';
            }
        }
    });
</script>
@endsection
