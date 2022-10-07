<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCommentRequest;
use App\Models\Comment;
use App\Models\Team;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(CreateCommentRequest $request, $id)    
    {
        Team::find($id)->addComment($request->validated()['content']);

        return redirect()->back();
    }
}
