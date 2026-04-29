<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Product;
use App\Models\OurService;
use App\Models\Brand;
use App\Models\News;
use App\Models\Parts;
use App\Models\Video;
use App\Models\Implement;
use App\Models\Vacancy;
use App\Models\Dealer;   // ✅ TAMBAH
use App\Models\Contact;  // ✅ TAMBAH

class HomeController extends Controller
{
    public function index()
    {
        $slider = Slider::orderBy('ORDER_BY', 'asc')->get();

        $products = Product::latest()->take(6)->get();

        $services = OurService::latest()->take(6)->get();

        $brands = Brand::latest()->get();

        $parts = Parts::latest()->take(6)->get();

        $video = Video::latest()->get();


        $implement = Implement::latest()->take(6)->get();

        $news_primary = News::latest()->take(1)->get();
        $news_list = News::latest()->skip(1)->take(5)->get();


        $vacancy = Vacancy::orderBy('id', 'desc')->take(8)->get();


        $dealerData = Dealer::select('dealer_name', 'latitude', 'longitude')
            ->whereNotNull('latitude')
            ->whereNotNull('longitude')
            ->get();

        return view('homepage', compact(
            'slider',
            'products',
            'services',
            'brands',
            'parts',
            'video',
            'implement',
            'news_primary',
            'news_list',
            'vacancy',
            'dealerData' // ✅ TAMBAH
        ));
    }


    public function sendContact(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'email'    => 'nullable|email',
            'source'   => 'nullable|string|max:255',
            'phone'    => 'required|string|max:20',
            'message'  => 'required|string',
        ]);

        Contact::create([
            'fullname'   => $request->fullname,
            'email'      => $request->email,
            'source'     => $request->source,
            'phone'      => $request->phone,
            'message'    => $request->message,
            'createdby'  => 'guest',
            'createdat'  => now(),
            'changedby'  => null,
            'changedat'  => null,
        ]);

        return back()->with('success', 'Pesan berhasil dikirim!');
    }
}