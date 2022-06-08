<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    // By Wahyu
    // UC02.02 Post Komentar pada Forum
    public function saveComment(Request $request)
    {

        $request->validate([
            'body' => 'required'
        ]);
        Comment::create([
            'user_id' => auth()->user()->id,
            'forum_id' => $request->idForum,
            'body' => $request->body,
            'isVerified' => true,
            'like' => 0,
            'dislike' => 0,
            'report' => 0,
        ]);

        //$forumSlug = Forum::latest()->first()->slug;
        return redirect()->back()->with(['commentsuccess' => 'Comment Posted']);
    }

    public function pinComment($id)
    {
        $comment = Comment::find($id);
        $comment->isPinned = true;
        $comment->save();
        return redirect()->back();
    }

    public function unpinComment($id)
    {
        $comment = Comment::find($id);
        $comment->isPinned = false;
        $comment->save();
        return redirect()->back();
    }
}
