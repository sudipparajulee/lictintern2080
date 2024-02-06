<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Notice;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $totalclients = Client::count();
        $totalnotices = Notice::count();
        return view('dashboard',compact('totalclients','totalnotices'));
    }
}
