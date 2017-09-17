<?php

namespace App\Http\Controllers;

use App\News;

class NewsController extends Controller
{

    public function index()
    {
        $news = News::with('author')->latest()->take(5)->get();

        return view('news', compact('news'));
    }
}
