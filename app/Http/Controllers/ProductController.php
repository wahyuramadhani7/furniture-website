<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Ambil semua produk
        return view('home', compact('products')); // Kirim ke view
    }
}


