<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Notice;
use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{
    public function visits()
    {
        if (!Session::has('visit')) {

            $last_date = Visit::latest('visit_date')->first();
            $visit_date = date('Y-m-d');
            if ($last_date) {
                if ($last_date->visit_date != $visit_date) {
                    $no_of_visits = 1;
                    $d = new Visit();
                    $d->visit_date = $visit_date;
                    $d->no_of_visits = $no_of_visits;
                    $d->save();
                } else {
                    $newvisit = $last_date->no_of_visits + 1;
                    $last_date->update(['no_of_visits' => $newvisit]);
                }
            } else {
                $no_of_visits = 1;
                $d = new Visit();
                $d->visit_date = $visit_date;
                $d->no_of_visits = $no_of_visits;
                $d->save();
            }
            Session::put('visit', 'yes');
            Session::save();
        }
    }


    public function index()
    {
        $this->visits();
        $notices = Notice::where('show',1)->orderBy('priority')->get();
        $clients = Client::orderBy('priority')->get();
        return view('welcome',compact('notices','clients'));
    }

    public function about()
    {
        return view('about');
    }

    public function blogs()
    {
        return view('blogs');
    }

    public function viewbllg($id)
    {
        $blog = Blog::find($id);
        $related = Blog::where('id','!=',$id)->orderBy('blog_date','desc')->limit(5)->get() ;
        return view('viewblog',compact('blog','related'));
    }

    public function contact()
    {
        return view('contact');
    }
}
