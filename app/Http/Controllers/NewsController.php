<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::paginate(2);

        info($news);

        return view('news.index', compact('news'));
    }

    public function show($id)
    {
        $novelty = News::with('user')->find($id);

        return view('news.show', compact('novelty'));
    }
}
