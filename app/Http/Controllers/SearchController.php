<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Search;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $term = $request->term;

        $results = Search::where('term', 'like', "%$term%")->get();

        return view('search.index', compact('results', 'term'));
    }
}