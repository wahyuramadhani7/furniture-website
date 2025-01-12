@extends('layouts.app')

@section('content')
<!-- Banner/Carousel -->
<section class="banner">
    <div class="carousel">
        <div class="carousel-item active">
            <img src="./images/furniture.jpg" alt="Banner">
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
    <h2 class="section-title">Kategori</h2>
    <div class="category-list">
        <div class="category-item">
            <img src="./images/meja.jpg" alt="Kategori 1">
            <p>Furnitur</p>
        </div>
        <div class="category-item">
            <img src="https://via.placeholder.com/200" alt="Kategori 2">
            <p>Kasur & Linen</p>
        </div>
        <div class="category-item">
            <img src="https://via.placeholder.com/200" alt="Kategori 3">
            <p>Elektronik</p>
        </div>
        <div class="category-item">
            <img src="https://via.placeholder.com/200" alt="Kategori 4">
            <p>Dekorasi</p>
        </div>
    </div>
</section>
@endsection
