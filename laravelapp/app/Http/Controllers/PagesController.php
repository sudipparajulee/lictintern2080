<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $notices = Notice::where('show',1)->orderBy('priority')->get();
        return view('welcome',compact('notices'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
