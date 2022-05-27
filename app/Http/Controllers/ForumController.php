<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forum;

class ForumController extends Controller
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
