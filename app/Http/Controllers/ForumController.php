<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Forum;
use App\Models\Status;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
{
    // By Aldi
    // UC02.01 (Read), Share Forum
    public function displayAllForum()
    {
        $mustreadforum = Forum::all()->where('isPublished', true)->sortBy('like')->take(3);
        $allforum = Forum::all()->where('isPublished', true)->sortByDesc('created_at');
        if (Auth::check()) {
            $idUser = auth()->user()->id;
            $allstatus = Status::where('user_id', $idUser)->get();
            return view('halaman-utama', [
                'allforum' => $allforum,
                'allstatus' => $allstatus,
                'mustreadforum' => $mustreadforum,
            ]);
        }
        return view('halaman-utama', compact('allforum', 'mustreadforum'));
    }

    public function searchForum(Request $request)
    {
        $mustreadforum = Forum::all()->where('isPublished', true)->sortBy('like')->take(3);
        $allforum = Forum::where('title', 'like', "%" . $request->title . "%")->where('isPublished', true)->get();
        if (Auth::check()) {
            $idUser = auth()->user()->id;
            $allstatus = Status::where('user_id', $idUser)->get();
            return view('halaman-utama', [
                'allforum' => $allforum,
                'allstatus' => $allstatus,
                'mustreadforum' => $mustreadforum,
            ]);
        }
        return view('halaman-utama', compact('allforum', 'mustreadforum'));
    }

    public function categoryForum($category)
    {
        $mustreadforum = Forum::all()->where('isPublished', true)->sortBy('like')->take(3);
        $allforum = Forum::where('category', $category)->where('isPublished', true)->get();
        if (Auth::check()) {
            $idUser = auth()->user()->id;
            $allstatus = Status::where('user_id', $idUser)->get();
            return view('halaman-utama', [
                'allforum' => $allforum,
                'allstatus' => $allstatus,
                'mustreadforum' => $mustreadforum,
            ]);
        }
        return view('halaman-utama', compact('allforum', 'mustreadforum'));
    }

    public function filterForum($filter)
    {
        $mustreadforum = Forum::all()->where('isPublished', true)->sortBy('like')->take(3);

        if ($filter == "new") {
            $allforum = Forum::all()->where('isPublished', true)->sortByDesc('created_at');
        }
        if ($filter == "hot") {
            $allforum = Forum::all()->where('isPublished', true)->sortBy('like');
        }
        if ($filter == "verified") {
            $allforum = Forum::all()->where('isPublished', true)->where('verification_status', '<>', "Not Verified");
        }
        if ($filter == "hoax") {
            $allforum = Forum::all()->where('isPublished', true)->where('verification_status', "Hoax");
        }
        if ($filter == "misinformation") {
            $allforum = Forum::all()->where('isPublished', true)->where('verification_status', "Misinformation");
        }
        if ($filter == "facts") {
            $allforum = Forum::all()->where('isPublished', true)->where('verification_status', "Not Facts");
        }

        if (Auth::check()) {
            $idUser = auth()->user()->id;
            $allstatus = Status::where('user_id', $idUser)->get();
            return view('halaman-utama', [
                'allforum' => $allforum,
                'allstatus' => $allstatus,
                'filter' => $filter,
                'mustreadforum' => $mustreadforum
            ]);
        }

        return view('halaman-utama', [
            'allforum' => $allforum,
            'filter' => $filter,
            'mustreadforum' => $mustreadforum
        ]);
    }
    public function displayYourForum()
    {
        $idUser = auth()->user()->id;
        $yourforum = Forum::where('user_id', $idUser)->get()->sortByDesc('created_at');
        $yourcommentcount = Comment::where('user_id', $idUser)->get()->count();
        $yourlikecount = Status::where('user_id', $idUser)->where('type', 'like')->get()->count();
        return view('halaman-your-forum', compact('yourforum', 'yourcommentcount', 'yourlikecount'));
    }

    public function displayForumPage($slug)
    {
        $mustreadforum = Forum::all()->where('isPublished', true)->sortBy('like')->take(3);
        if (Auth::check()) {
            $idUser = auth()->user()->id;
            $selectedforum = Forum::where('slug', $slug)->first();
            $comments = Forum::find($selectedforum->id)->comments->where('isPinned', false);
            $pinnedcomments = Forum::find($selectedforum->id)->comments->where('isPinned', true);
            $isliked = Status::where('user_id', $idUser)->where('forum_id', $selectedforum->id)->where('comment_id', null)->where('type', 'like')->exists();
            $isdisliked = Status::where('user_id', $idUser)->where('forum_id', $selectedforum->id)->where('comment_id', null)->where('type', 'dislike')->exists();
            $commentlike = Status::where('user_id', $idUser)->where('forum_id', $selectedforum->id)->where('comment_id', '<>', null)->where('type', 'like')->get();
            $commentdislike = Status::where('user_id', $idUser)->where('forum_id', $selectedforum->id)->where('comment_id', '<>', null)->where('type', 'dislike')->get();
            //dd($commentlike);
            return view('halaman-forum', [
                'forum' => $selectedforum,
                'comments' => $comments,
                'pinnedcomments' => $pinnedcomments,
                'isliked' => $isliked,
                'isdisliked' => $isdisliked,
                'commentlike' => $commentlike,
                'commentdislike' => $commentdislike,
                'mustreadforum' => $mustreadforum,
            ]);
        } else {
            $selectedforum = Forum::where('slug', $slug)->first();
            $comments = Forum::find($selectedforum->id)->comments->where('isPinned', false);
            $pinnedcomments = Forum::find($selectedforum->id)->comments->where('isPinned', true);

            return view('halaman-forum', [
                'forum' => $selectedforum,
                'comments' => $comments,
                'pinnedcomments' => $pinnedcomments,
                'mustreadforum' => $mustreadforum,
            ]);
        }
    }

    //by Devi
    //UC02.04 Create Forum
    public function displayCreatePage()
    {
        $mustreadforum = Forum::all()->where('isPublished', true)->sortBy('like')->take(3);
        return view('halaman-create', ['mustreadforum' => $mustreadforum]);
    }

    public function saveAndAdd(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'category' => 'required',
        ]);
        Forum::create([
            'user_id' => auth()->user()->id,
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
        return redirect('/forum/' . $newforumSlug);
    }

    public function saveDraft(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'category' => 'required',
        ]);

        Forum::create([
            'user_id' => auth()->user()->id,
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
    public function displayUpdatePage($id)
    {
        $mustreadforum = Forum::all()->where('isPublished', true)->sortBy('like')->take(3);
        $selectedforum = Forum::find($id);
        return view('halaman-update', ['forum' => $selectedforum, 'mustreadforum' => $mustreadforum]);
    }

    public function saveNew(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'category' => 'required',
        ]);

        $selectedforum = Forum::find($request->idForum);

        Forum::where('id', $request->idForum)->update([
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

        return redirect('/forum/' . $selectedforumSlug);
    }

    public function saveNewDraft(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'category' => 'required',
        ]);

        $selectedforum = Forum::find($request->idForum);

        Forum::where('id', $request->idForum)->update([
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

    public function deleteForum($id)
    {
        $forum = Forum::find($id);
        $forum->comments()->delete();
        $forum->delete();
        return redirect('/your-forum');
    }
}
