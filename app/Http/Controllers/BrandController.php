<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::where('record_status', '1')->get();

        return view('brands.index', compact('brands'));
    }

    public function show($id)
    {
        $brand = Brand::findOrFail($id);

        return view('brands.show', compact('brand'));
    }
}