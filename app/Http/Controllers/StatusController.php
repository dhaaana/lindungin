<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forum;
use App\Models\Status;
use App\Models\Comment;

class StatusController extends Controller
{
    public function addLike($id, $comment_id = null, $user_id = 1)
    {
        $forum = Forum::find($id);
        if ($comment_id == null) {
            $initialLike = $forum->like;
            $forum->like = $initialLike + 1;
            $forum->save();
            $status = Status::create([
                'user_id' => $user_id,
                'forum_id' => $forum->id,
                'comment_id' => $comment_id,
                'type' => "like",
            ]);
            return redirect()->back();
        } else {
            $comment = Comment::find($comment_id);
            $initialLike = $comment->like;
            $comment->like = $initialLike + 1;
            $comment->save();
            $status = Status::create([
                'user_id' => $user_id,
                'forum_id' => $forum->id,
                'comment_id' => $comment_id,
                'type' => "like",
            ]);
            return redirect()->back();
        }
    }

    public function removeLike($id, $status_id)
    {
        $forum = Forum::find($id);
        $initialLike = $forum->like;
        $forum->like = $initialLike - 1;
        $forum->save();
        $status = Status::find($status_id)->delete();
        return redirect()->back();
    }

    public function addDislike($id, $comment_id = null, $user_id = 1)
    {
        $forum = Forum::find($id);
        if ($comment_id == null) {
            $initialDislike = $forum->dislike;
            $forum->dislike = $initialDislike + 1;
            $forum->save();
            $status = Status::create([
                'user_id' => $user_id,
                'forum_id' => $forum->id,
                'comment_id' => $comment_id,
                'type' => "disklike",
            ]);
            return redirect()->back();
        } else {
            $comment = Comment::find($comment_id);
            $initialDislike = $comment->dislike;
            $comment->dislike = $initialDislike + 1;
            $comment->save();
            $status = Status::create([
                'user_id' => $user_id,
                'forum_id' => $forum->id,
                'comment_id' => $comment_id,
                'type' => "dislike",
            ]);
            return redirect()->back();
        }
    }

    public function removeDislike($id, $status_id)
    {
        $forum = Forum::find($id);
        $initialDislike = $forum->dislike;
        $forum->dislike = $initialDislike - 1;
        $forum->save();
        $status = Status::find($status_id)->delete();
        return redirect()->back();
    }
}
