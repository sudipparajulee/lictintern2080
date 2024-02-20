<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Notice;
use App\Models\Visit;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $totalclients = Client::count();
        $totalnotices = Notice::count();
        $date = Carbon::today()->subDays(60);
        $totalvisits = Visit::sum('no_of_visits');
        $visitdate = Visit::where('visit_date', '>=', $date)->pluck('visit_date');
        $visits = Visit::where('visit_date', '>=', $date)->pluck('no_of_visits');
        return view('dashboard',compact('totalclients','totalnotices','totalvisits','visitdate','visits'));
    }
}
