<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    // By Wahyu
    // UC02.02 Post Komentar pada Forum
    public function saveComment(Request $request) {

        $request->validate([
            'body' => 'required'
        ]);
        Comment::create([
            'user_id' => 1,
            'forum_id' => $request->idForum,
            'body' => $request->body,
            'isVerified' => true,
            'like' => 0,
            'dislike' => 0,
            'report' => 0,
        ]);

        //$forumSlug = Forum::latest()->first()->slug;
        return redirect('/');
    }

}
