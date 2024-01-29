<?php

namespace App\Http\Controllers;

use App\Models\produk2;
use Illuminate\Http\Request;

class Produk2Controller extends Controller {
public function index()
{
    // Mengambil semua data dari tabel produk2
    $data = produk2::all();

    // Mengembalikan response berupa data dalam format JSON
    return response()->json($data);
}
}
