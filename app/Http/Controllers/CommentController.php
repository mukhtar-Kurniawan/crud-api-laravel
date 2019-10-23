<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $id_tutorial)
    {
        $this->validate($request, ['body'  => 'required']);

        $comment = $request->user()->comments()->create([
            'body'        => $request->json('body'),
            'tutorial_id' => $id_tutorial
        ]);

        return $comment;

    }
}
