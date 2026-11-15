<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    // Menampilkan daftar produk
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // Menampilkan form tambah produk
    public function create()
    {
        return view('products.create');
    }

    // Menyimpan data produk baru termasuk upload gambar
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle upload gambar
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            // Menyimpan gambar ke folder public/storage/products
            $file->move(public_path('storage/products'), $filename);
            $validated['image'] = 'products/' . $filename;
        }

        Product::create($validated);

        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan!');
    }
}j  