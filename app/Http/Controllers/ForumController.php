<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;
use App\Models\Forum;

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
    //by devi
    //UC02.04 Create forum
    public function displayCreatePage ( ) {
        return view('create');
    }

    public function displayNewForumPage ($id) {
        //nanti
    }

    public function saveAndAdd(Request $request) {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'category' => 'required',
        ]);
        $forum = Forum::create([
            'idUser' => 1,
            'title' => $request->title,
            'body' => $request->body,
            'category' => $request->category,
            'like' => 0,
            'dislike' => 0,
            'report' => 0,
        ]);
        $newForumID = Forum::latest()->first();
        return redirect('/')->with('success','Forum Berhasil di Input');
    }

    public function saveDraft () {
        //nanti
    }

    public function getDraft () {
        //nanti
    }



    //UC02.05 Update/Delete Forum
    public function displayUpdatePage ($id) {
        // $selectedForum = Forum::where('id', $id);
        // return view('update', [
        //     'selectedForum' => $selectedForum
        // ]);
        return view('update');
    }

    public function saveNew () {

    }

    public function displayConfirmation () {

    }

    public function deleteForum () {

    }

    public function displayYourForumPage () {

    }

    public function displayForumPage () {

    }
}
