<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Models\Team;

class NewsController extends Controller
{
    public function index(Team $team)
    {
        $news = [];

        if ($team->id) {
            $news = $team->news()->paginate(2);
        } else {
            $news = News::paginate(2);
        }

        return view('news.index', compact('news'));
    }

    public function show($id)
    {
        $novelty = News::with('user')->find($id);

        return view('news.show', compact('novelty'));
    }
}
