<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Anda dapat menambahkan data produk di sini untuk ditampilkan pada view
        $products = []; // Contoh data kosong

        return view('products.index', compact('products'));
    }
}
