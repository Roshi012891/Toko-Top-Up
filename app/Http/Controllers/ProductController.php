<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // 1. TAMBAHKAN INI: Fungsi untuk menampilkan daftar produk
    public function index()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }

    // 2. TAMBAHKAN INI: Fungsi untuk menampilkan form tambah
    public function create()
    {
        return view('create');
    }

    // 3. TAMBAHKAN INI: Fungsi untuk memproses data baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
        ]);

        Product::create($validated);
        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan!');
    }

    // --- Fungsi Edit, Update, dan Destroy yang sudah Anda buat (ini sudah benar) ---
    public function edit(Product $product)
    {
        return view('edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
        ]);

        $product->update($validated);
        return redirect()->route('products.index')->with('success', 'Produk berhasil diupdate!');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus!');
    }
}