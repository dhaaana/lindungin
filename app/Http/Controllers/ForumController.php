<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Forum;
use App\Models\Status;



class ForumController extends Controller
{
    // By Aldi
    // UC02.01 (Read), Share Forum
    public function displayAllForum() {
        $idUser = 1; //sementara
        $allforum = Forum::all()->where('isPublished', true)->sortByDesc('created_at');
        $allstatus = Status::where('user_id', $idUser)->get();
        return view('halaman-utama', compact('allforum', 'allstatus'));
    }

    public function displayYourForum() {
        $idUser = 1; //sementara
        $yourforum = Forum::where('user_id', $idUser)->get()->sortByDesc('created_at');
        return view('halaman-your-forum', compact('yourforum'));
    }

    public function displayForumPage($slug) {
        $idUser = 1;
        $selectedforum = Forum::where('slug', $slug)->first();
        $comments = Forum::find($selectedforum->id)->comments;
        $allstatus = Status::where('user_id', $idUser)->get();
        return view('halaman-forum', [
            'forum' => $selectedforum,
            'comments' => $comments,
            'allstatus' => $allstatus
        ]);
    }

    //by Devi
    //UC02.04 Create Forum
    public function displayCreatePage() {
        return view('halaman-create');
    }

    public function saveAndAdd(Request $request) {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'category' => 'required',
        ]);
        Forum::create([
            'user_id' => 1,
            'title' => $request->title,
            'body' => $request->body,
            'category' => $request->category,
            'slug' => Str::slug($request->title),
            'isPublished' => true,
            'like' => 0,
            'dislike' => 0,
            'report' => 0,
        ]);
        $newforumSlug = Forum::latest()->first()->slug;
        return redirect('/forum/'.$newforumSlug);
    }

    public function saveDraft(Request $request) {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'category' => 'required',
        ]);

       Forum::create([
            'user_id' => 1,
            'title' => $request->title,
            'body' => $request->body,
            'category' => $request->category,
            'slug' => Str::slug($request->title),
            'isPublished' => false,
            'like' => 0,
            'dislike' => 0,
            'report' => 0,
        ]);

        return redirect('/your-forum');
    }

    //UC02.05 Update/Delete Forum
    public function displayUpdatePage($id) {
        $selectedforum = Forum::find($id);
        return view('halaman-update', ['forum' => $selectedforum]);
    }

    public function saveNew(Request $request) {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'category' => 'required',
        ]);

        $selectedforum = Forum::find($request->idForum);

        Forum::where('id',$request->idForum)->update([
            'user_id' => $selectedforum->user_id,
            'title' => $request->title,
            'body' => $request->body,
            'category' => $request->category,
            'slug' => Str::slug($request->title),
            'isPublished' => true,
            'like' => $selectedforum->like,
            'dislike' => $selectedforum->dislike,
            'report' => $selectedforum->report,
        ]);

        $selectedforumSlug = Forum::find($request->idForum)->slug;

        return redirect('/forum/'.$selectedforumSlug);
    }

    public function saveNewDraft(Request $request) {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'category' => 'required',
        ]);

        $selectedforum = Forum::find($request->idForum)->first();

        Forum::where('id',$request->idForum)->update([
            'user_id' => $selectedforum->user_id,
            'title' => $request->title,
            'body' => $request->body,
            'category' => $request->category,
            'slug' => Str::slug($request->title),
            'isPublished' => false,
            'like' => $selectedforum->like,
            'dislike' => $selectedforum->dislike,
            'report' => $selectedforum->report,
        ]);

        return redirect('/your-forum');
    }

    public function deleteForum($id) {
        Forum::find($id)->delete();

        return redirect('/your-forum');
    }
}
