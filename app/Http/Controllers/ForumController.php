<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    // By wahyu
    // UC02.02 Post Komentar pada Forum
    public function check()
    {
    }

    public function displayCommentBox()
    {
    }

    public function saveComment()
    {
    }

    public function displayComment()
    {
    }

    // By Wahyu
    // UC02.03 Like, Dislike, Report Forum
    public function displayForumPage($id)
    {
        // Menampilkan halaman forum yang dipilih
        $forum = Forum::where("id", $id);
        return view('halaman-forum', compact('forum'));
    }

    public function checkUserResponse()
    {
    }

    public function addLike($id)
    {
        $forum = Forum::find($id);
        $forum->like = $like++;
        $forum->save();
    }

    public function saveLike()
    {
    }

    public function addDislike($id)
    {
        $forum = Forum::find($id);
        $forum->dislike = $dislike--;
        $forum->save();
    }

    public function saveReport()
    {
    }
}
