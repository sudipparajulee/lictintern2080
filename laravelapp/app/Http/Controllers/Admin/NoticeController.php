<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function index()
    {
        return view('admin.notice.index');
    }

    public function create()
    {
        return view('admin.notice.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'notice_text' => 'required',
            'notice_date' => 'required',
            'priority' => 'required',
            'show' => 'required',
        ]);
    }
}
