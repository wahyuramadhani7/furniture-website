@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Hubungi Kami</h1>
    <form>
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" placeholder="Masukkan nama Anda">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda">
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Pesan</label>
            <textarea class="form-control" id="message" rows="5" placeholder="Tulis pesan Anda"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
</div>
@endsection
