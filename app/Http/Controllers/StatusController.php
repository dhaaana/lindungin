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
        $idUser = 1;

        $forum = Forum::find($id);
        if ($comment_id == null) {
            if (Status::where('user_id', $idUser)->where('forum_id', $id)->where('type', 'dislike')->exists()) {
                $this->removeDislike($id);
            }
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
            if (Status::where('user_id', $idUser)->where('forum_id', $id)->where('comment_id', $comment_id)->where('type', 'dislike')->exists()) {
                $this->removeDislike($id, $comment_id);
            }
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

    public function removeLike($id, $comment_id = null)
    {
        $idUser = 1;
        $forum = Forum::find($id);
        if ($comment_id == null) {
            $initialLike = $forum->like;
            $forum->like = $initialLike - 1;
            $forum->save();
            $status = Status::where('user_id', $idUser)->where('forum_id', $id)->where('type', 'like')->delete();
            return redirect()->back();
        } else {
            $comment = Comment::find($comment_id);
            $initialLike = $comment->like;
            $comment->like = $initialLike - 1;
            $comment->save();
            $status = Status::where('user_id', $idUser)->where('forum_id', $id)->where('comment_id', $comment_id)->where('type', 'like')->delete();
            return redirect()->back();
        }
    }

    public function addDislike($id, $comment_id = null, $user_id = 1)
    {
        $idUser = 1;

        $forum = Forum::find($id);
        if ($comment_id == null) {
            if (Status::where('user_id', $idUser)->where('forum_id', $id)->where('type', 'like')->exists()) {
                $this->removeLike($id);
            }
            $initialDislike = $forum->dislike;
            $forum->dislike = $initialDislike + 1;
            $forum->save();
            $status = Status::create([
                'user_id' => $user_id,
                'forum_id' => $forum->id,
                'comment_id' => $comment_id,
                'type' => "dislike",
            ]);
            return redirect()->back();
        } else {
            if (Status::where('user_id', $idUser)->where('forum_id', $id)->where('comment_id', $comment_id)->where('type', 'like')->exists()) {
                $this->removeLike($id, $comment_id);
            }
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

    public function removeDislike($id, $comment_id = null)
    {
        $idUser = 1;
        $forum = Forum::find($id);
        if ($comment_id == null) {
            $initialDisike = $forum->dislike;
            $forum->dislike = $initialDisike - 1;
            $forum->save();
            $status = Status::where('user_id', $idUser)->where('forum_id', $id)->where('type', 'dislike')->delete();
            return redirect()->back();
        } else {
            $comment = Comment::find($comment_id);
            $initialDislike = $comment->dislike;
            $comment->dislike = $initialDislike - 1;
            $comment->save();
            $status = Status::where('user_id', $idUser)->where('forum_id', $id)->where('comment_id', $comment_id)->where('type', 'dislike')->delete();
            return redirect()->back();
        }
    }

    public function verifyForum(Request $request, $id)
    {
        $forum = Forum::find($id);
        $forum->verification_status = $request->verification_status;
        $forum->save();
        return redirect()->back();
    }
}
