<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Tampilkan halaman kontak.
     */
    public function index()
    {
        return view('contact'); // Mengembalikan view contact.blade.php
    }
}
