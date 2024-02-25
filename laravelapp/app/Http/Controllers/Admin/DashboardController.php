<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Notice;
use App\Models\Visit;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function sendMail()
    {
        $useremail = 'sudip.parajulee@gmail.com';
        $file = public_path('images/logo.png');
        $data = [
            'name' => 'Sudip Parajuli',
            'body' => 'This is test mail from bitmap I.T. Solution.'
        ];
        Mail::send('email.testemail',$data, function($message) use ($useremail,$file) {
            $message->to($useremail)
                ->subject('This is test mail')
                ->attach($file, [
                    'as' => 'hello.png',
                    'mime' => 'image/png',
                ]);
        });
    }
}
