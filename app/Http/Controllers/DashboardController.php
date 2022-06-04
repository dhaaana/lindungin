<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forum;

class DashboardController extends Controller
{
    public function displayDashboard()
    {
        $allforum = Forum::all();
        return view('halaman-dashboard-tim-verifikator', compact('allforum'));
    }
}
