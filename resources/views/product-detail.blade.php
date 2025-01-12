@extends('layouts.app')

@section('content')
<section class="product-detail">
    <h1>{{ $product->name }}</h1>
    <img src="{{ $product->image }}" alt="{{ $product->name }}">
    <p>Kategori: {{ $product->category }}</p>
    <p>Harga: Rp {{ number_format($product->price, 0, ',', '.') }}</p>
    <p>Deskripsi:</p>
    <p>{{ $product->description }}</p>
    <a href="/" class="btn-primary">Kembali ke Beranda</a>
</section>
@endsection
