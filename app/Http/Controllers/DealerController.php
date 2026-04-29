<?php

namespace App\Http\Controllers;

use App\Models\Dealer;

class DealerController extends Controller
{
    public function index()
    {
        $dealerData = Dealer::select(
            'dealer_name',
            'address1',
            'address2',
            'city',
            'phone',
            'latitude',
            'longitude'
        )
        ->whereNotNull('latitude')
        ->whereNotNull('longitude')
        ->get();

        return view('contact-location', compact('dealerData'));
    }
}