<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parts; // ✅ pakai singular (Laravel standard)

class PartsController extends Controller
{
    public function index()
    {
        // ambil semua parts dari database
        $parts = Parts::orderBy('parts_id', 'desc')->get();

        return view('parts', compact('parts'));
    }

    public function show($id)
    {
        // ambil 1 data (kalau nanti mau dipakai)
        $part = Parts::findOrFail($id);

        // tetap kirim ke view yang sama biar gak error
        $parts = Parts::orderBy('parts_id', 'desc')->get();

        return view('parts', compact('parts', 'part'));
    }
}