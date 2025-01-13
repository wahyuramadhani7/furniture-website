<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Display the homepage.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Retrieve a collection of the latest products (example: limit to 10)
        $products = Product::latest()->take(10)->get();

        // Pass data to the home view
        return view('home', compact('products'));
    }
}
