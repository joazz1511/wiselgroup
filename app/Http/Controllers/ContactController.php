<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Dealer;

class ContactController extends Controller
{
    // ===================== STORE CONTACT =====================
    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'phone'    => 'nullable',
            'email'    => 'nullable',
            'message'  => 'required'
        ]);

        Contact::create([
            'fullname'  => $request->fullname,
            'phone'     => $request->phone,
            'email'     => $request->email,
            'message'   => $request->message,
            'createdat' => now()
        ]);

        return response()->json([
            'message' => 'Pesan berhasil dikirim'
        ]);
    }

    // ===================== CONTACT PAGE =====================
    public function index()
    {
        $contacts = Contact::latest()->get();
        $dealer   = Dealer::all();

        // 🔥 WAJIB: prepare data map
        $dealerData = $dealer->map(function ($d) {
            return [
                'lat'   => $d->latitude,
                'lon'   => $d->longitude,
                'title' => $d->dealer_name,
                'html'  => $d->address1
            ];
        });

        return view('contact-location', [
            'contacts'   => $contacts,
            'dealer'     => $dealer,
            'dealerData' => $dealerData   // <- INI YANG KURANG SEBELUMNYA
        ]);
    }
}