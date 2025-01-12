@extends('layouts.app')

@section('content')
<h1>Hasil Pencarian: {{ $query }}</h1>
@if ($products->isEmpty())
    <p>Tidak ada produk yang ditemukan.</p>
@else
    <div class="category-list">
        @foreach ($products as $product)
            <div class="category-item">
                <img src="{{ $product->image }}" alt="{{ $product->name }}">
                <p>{{ $product->name }}</p>
                <p>Rp {{ number_format($product->price, 0, ',', '.') }}</p>
            </div>
        @endforeach
    </div>
@endif
@endsection
