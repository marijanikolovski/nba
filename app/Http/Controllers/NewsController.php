<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Models\Team;
use App\Http\Requests\CreateNewsRequest;

class NewsController extends Controller
{
    public function index(Team $team)
    {
        $news = [];

        if ($team->id) {
            $news = $team->news()->paginate(2);
        } else {
            $news = News::orderBy('created_at', 'desc')->paginate(2);
        }

        return view('news.index', compact('news'));
    }

    public function show($id)
    {
        $novelty = News::with('user')->find($id);

        return view('news.show', compact('novelty'));
    }

    public function create()
    {
        $teams = Team::all();

        return view('news.create', compact('teams'));
    }

    public function store(CreateNewsRequest $request)
    {
        $validated = $request->validated();

        $news = News::create([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'user_id' => auth()->id()
        ]);

        $news->teams()->attach($request['teams']);

        session()->flash('message', 'Thank you for publishing article on www.nba.com.');

        return redirect('/news');
    }
}
