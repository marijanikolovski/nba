<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCommentRequest;
use App\Models\Comment;
use App\Models\Team;
use Illuminate\Http\Request;
use App\Mail\CommentReceived;
use Illuminate\Support\Facades\Mail;


class CommentsController extends Controller
{
    public function store(CreateCommentRequest $request, $id)    
    {
        $team = Team::find($id);

        $team->addComment($request->validated()['content']);

        if($team) {
            Mail::to($team)->send(new CommentReceived($team));
        }

        return redirect()->back();
    }
}
