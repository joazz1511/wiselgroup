<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PartsOrder;

class PartsOrderController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'nullable',
            'phone' => 'nullable',
            'message' => 'nullable'
        ]);

        PartsOrder::create($request->all());

        return back()->with('success', 'Order parts berhasil dikirim');
    }
}