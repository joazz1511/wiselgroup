<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookingOrder;

class BookingOrderController extends Controller
{
    public function index()
    {
        $orders = BookingOrder::latest()->get();

        return view('booking.index', compact('orders'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'PIC_NAME' => 'required',
            'EMAIL' => 'nullable',
            'PHONE' => 'nullable',
            'ALAMAT' => 'nullable',
            'TANGGAL_SERVICE' => 'nullable',
            'PRODUCT_NAME' => 'nullable'
        ]);

        BookingOrder::create($request->all());

        return redirect()->back()->with('success', 'Booking berhasil dikirim');
    }

    public function updateStatus(Request $request, $id)
    {
        $order = BookingOrder::findOrFail($id);
        $order->STATUS = $request->status;
        $order->REMARK = $request->remark;
        $order->save();

        return redirect()->back();
    }
}