@extends('layouts.app')

@section('content')
    <style>
        body {
            background-image: url('{{ asset("images/furniture.jpg") }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .banner {
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .banner h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .banner p {
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
        }

        .btn-primary {
            background: #1565ed;
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .btn-primary:hover {
            background-color: #1151c3;
        }

        .categories {
            padding: 2rem;
            max-width: 800px;
            margin: 0 auto;
            background: white;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .section-title {
            font-size: 1.8rem;
            color: #333;
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .category-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
        }

        .category-item {
            text-align: center;
        }

        .category-item img {
            width: 100%;
            height: auto;
            border-radius: 4px;
            margin-bottom: 0.5rem;
        }

        .category-item p {
            color: #333;
            margin-bottom: 0.5rem;
        }
    </style>

    <!-- Banner/Carousel -->
    <section class="banner">
        <div class="carousel-caption">
            <h2>Furniture Ruang Tamu Diskon 70%</h2>
            <p>Momen Kumpul Bersama Keluarga Jadi Lebih Nyaman</p>
            <button class="btn-primary">Belanja Sekarang</button>
        </div>
    </section>

    <!-- Category Section -->
    <section class="categories">
        <h2 class="section-title">Produk Terbaru</h2>
        <div class="category-list">
            @if ($products->isEmpty())
                <p>Tidak ada produk tersedia saat ini.</p>
            @else
                @foreach ($products as $product)
                    <div class="category-item">
                        <img src="{{ $product->image }}" alt="{{ $product->name }}">
                        <p>{{ $product->name }}</p>
                        <p>Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                    </div>
                @endforeach
            @endif
        </div>
    </section>
@endsection
