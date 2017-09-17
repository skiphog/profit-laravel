<?php

namespace App\Http\Controllers;

use App\Article;

class NewsController extends Controller
{

    public function index()
    {
        $news = Article::with('author')->latest()->take(5)->get();

        return view('news', compact('news'));
    }
}
