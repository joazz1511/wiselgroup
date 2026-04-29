<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OurService;
use App\Models\Guidance;

class ServiceController extends Controller
{
    public function index()
    {
        $services = OurService::latest()->get();

        return view('services.index', compact('services'));
    }

    public function show($id)
    {
        $service = OurService::findOrFail($id);

        return view('services.show', compact('service'));
    }

    public function guidance()
    {
        $guidance = Guidance::latest()->get();

        return view('services.guidance', compact('guidance'));
    }
}