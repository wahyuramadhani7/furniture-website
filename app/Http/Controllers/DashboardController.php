<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Tambahkan model Product

class DashboardController extends Controller
{
    public function index()
    {
        // Ambil semua data produk dari tabel products
        $products = Product::all();

        // Kirim data produk ke view
        return view('dashboard', compact('products'));
    }
}

