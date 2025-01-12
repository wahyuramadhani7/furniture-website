@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Daftar Produk</h1>

    @if ($products->isEmpty())
        <p class="text-muted">Tidak ada produk yang tersedia saat ini.</p>
    @else
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                            <a href="#" class="btn btn-primary">Detail Produk</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
