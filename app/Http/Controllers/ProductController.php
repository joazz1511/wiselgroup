<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductType;
use App\Models\Implement; // ✅ TAMBAH INI

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category', 'type')
            ->where('is_product', 1)
            ->latest()
            ->get();

        $product_category = ProductCategory::all();

        $implement = Implement::latest()->get(); // ✅ TAMBAH

        return view('product', compact(
            'products',
            'product_category',
            'implement' // ✅ WAJIB
        ));
    }

    public function show($id)
    {
        $product = Product::with('category', 'type')->findOrFail($id);

        $product_category = ProductCategory::all(); // biar view gak error
        $implement = Implement::latest()->get(); // ✅ TAMBAH

        return view('product', compact(
            'product',
            'product_category',
            'implement'
        ));
    }

    public function category($id)
    {
        $products = Product::where('product_category', $id)->get();

        $product_category = ProductCategory::all();

        $implement = Implement::latest()->get(); // ✅ TAMBAH

        return view('product', compact(
            'products',
            'product_category',
            'implement'
        ));
    }
}