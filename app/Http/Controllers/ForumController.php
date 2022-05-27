<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use App\Models\Forum;
use Illuminate\Http\Request;
>>>>>>> a8e4716233b951ddaf88e9ab9d02a7bcdff5f8c1
use App\Models\Forum;
use Illuminate\Http\Request;

class ForumController extends Controller
{
<<<<<<< HEAD
    // By Aldi
    // UC02.01 (Read), Share Forum
    public function displayAllForum() {

        // Mengambil semua forum
        $allforum = Forum::all();
        return view('halaman-utama', compact('allforum'));
    }

    public function displayYourForum() {
        $idUser = 1;
        $yourforum = Forum::where('idUser', $idUser)->get();
        return view('your-forum', compact('yourforum'));
    }

=======
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
>>>>>>> a8e4716233b951ddaf88e9ab9d02a7bcdff5f8c1
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
        $selectedForum = Forum::where('idForum', $id)->first();
        return view('update', [
            'selectedForum' => $selectedForum
        ]);
        // return view('update');
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
// By Aldi
// UC02.01 Read, (Share) Forum
// {
//     //public function shareForum() {


//     }
// }


// By Aldi
// UC02.06 (Search), Category, Filter Forum

// public function searchForum(Request $request)
//     {
//         $keyword = $request->search;
//         $forum = User::where('name', 'like', "%" . $keyword . "%")->paginate(5);
//         return view('selected.forum', compact('users'))->with('i', (request()->input('page', 1) - 1) * 5);
//     }

//     public function searchForum(Request $request)
// {
// 	// menangkap data pencarian
// 	$cari = $request->cari;

//  	// mengambil data dari table pegawai sesuai pencarian data
// 	$forum = DB::table('forum')
// 	->where('pegawai_nama','like',"%".$cari."%")
// 	->paginate();

//     	// mengirim data pegawai ke view index
// 	return view('index',['forum' => $forum]);

// }

// By Aldi
// UC02.06 Search, (Category), Filter Forum
// {
//     public function categoryForum()

//     {
//          // Mengambil forum sesuai category dan menampilkan di halaman category
//         $allforum = Forum::latest()->paginate(10);
//         return view('halaman-utama', compact('allforum'));
//     }
// }
