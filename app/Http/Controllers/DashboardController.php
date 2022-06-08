<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forum;
use App\Models\Report;

class DashboardController extends Controller
{
    public function displayDashboard()
    {
        $mustreadforum = Forum::all()->where('isPublished', true)->sortBy('like')->take(3);
        $allforum = Forum::where('isPublished', true)->get();
        $reportedforum = Forum::where('isPublished', true)->where('report', '>', 0)->get();
        return view('halaman-dashboard-tim-verifikator', compact('allforum', 'reportedforum', 'mustreadforum'));
    }

    public function verifyForum(Request $request, $id)
    {
        $forum = Forum::find($id);
        $forum->verification_status = $request->verification_status;
        $forum->save();
        return redirect()->back();
    }

    public function reportForum(Request $request, $id)
    {

        $forum = Forum::find($id);
        $forum->report = $forum->report + 1;
        $forum->save();

        //dd($request->reports);
        Report::create([
            'user_id' => auth()->user()->id,
            'forum_id' => $id,
        ]);

        return redirect()->back()->with(['success' => 'Report Submitted']);
    }

    public function resetForumReports($id)
    {
        $forum = Forum::find($id);
        $forum->report = 0;
        $forum->reports()->delete();
        $forum->save();
        return redirect()->back()->with(['passsuccess' => 'Forum reports have been reset']);;
    }

    public function deleteReportedForum($id)
    {
        $forum = Forum::find($id);
        $forum->comments()->delete();
        $forum->reports()->delete();
        $forum->delete();
        return redirect()->back()->with(['deletesuccess' => 'Forum deleted']);;
    }
}
