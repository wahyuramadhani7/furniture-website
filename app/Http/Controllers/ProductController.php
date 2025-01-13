<?php

namespace App\Http\Controllers;

use App\Models\Product; // Pastikan model Product diimpor
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Ambil semua produk dari database
        $products = Product::all(); // Atau bisa menggunakan query builder lainnya sesuai kebutuhan

        // Kirim data produk ke view
        return view('home', compact('products'));
    }
}

