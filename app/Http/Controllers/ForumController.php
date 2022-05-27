<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;

class ForumController extends Controller
// By Aldi
// UC02.01 (Read), Share Forum
{
    public function displayAllForum() {

        // Mengambil semua forum dan menampilkan di halaman utama
        $allforum = Forum::latest()->paginate(10);
        return view('halaman-utama', compact('allforum'));

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

public function searchForum(Request $request)
    {
        $keyword = $request->search;
        $forum = User::where('name', 'like', "%" . $keyword . "%")->paginate(5);
        return view('selected.forum', compact('users'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function searchForum(Request $request)
{
	// menangkap data pencarian
	$cari = $request->cari;

 	// mengambil data dari table pegawai sesuai pencarian data
	$forum = DB::table('forum')
	->where('pegawai_nama','like',"%".$cari."%")
	->paginate();

    	// mengirim data pegawai ke view index
	return view('index',['forum' => $forum]);

}

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
