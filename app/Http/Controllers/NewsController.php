<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\NewsCategory;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::with('category')->latest()->paginate(10);

        return view('news.index', compact('news'));
    }

    public function show($id)
    {
        $news = News::findOrFail($id);

        return view('news.show', compact('news'));
    }

    public function category($id)
    {
        $news = News::where('category_id', $id)->get();

        return view('news.category', compact('news'));
    }
}