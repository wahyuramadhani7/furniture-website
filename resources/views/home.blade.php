@extends('layouts.app')

@section('content')
<!-- Banner/Carousel -->
<section class="banner">
    <div class="carousel">
        <div class="carousel-item active">
            <img src="{{ asset('images/furniture.jpg') }}" alt="Banner">
            <div class="carousel-caption">
                <h2>Furniture Ruang Tamu Diskon 70%</h2>
                <p>Momen Kumpul Bersama Keluarga Jadi Lebih Nyaman</p>
                <button class="btn-primary">Belanja Sekarang</button>
            </div>
        </div>
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
