<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function index()
    {
        $notices = Notice::orderBy('priority')->get();
        return view('admin.notice.index',compact('notices'));
    }

    public function create()
    {
        return view('admin.notice.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'notice_text' => 'required',
            'notice_date' => 'required|date',
            'priority' => 'required|integer',
            'show' => 'required',
        ]);

        Notice::create($data);

        return redirect(route('notice.index'));

    }

    public function edit($id)
    {
        $notice = Notice::find($id);
        return view('admin.notice.edit',compact('notice'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'notice_text' => 'required',
            'notice_date' => 'required|date',
            'priority' => 'required|integer',
            'show' => 'required',
        ]);

        $notice = Notice::find($id);
        $notice->update($data);

        return redirect(route('notice.index'));
    }
}
