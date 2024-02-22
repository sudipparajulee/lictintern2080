<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function index()
    {
        $notices = Notice::all();
        return response()->json([
            'code' => 200,
            'data' => $notices
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'priority' => 'required',
            'notice_text' => 'required',
            'notice_date' => 'required',
            'show' => 'required',
        ]);
        Notice::create($data);
        return response()->json([
            'code' => 200,
            'message' => 'Notice created successfully'
        ]);
    }

    public function edit($id)
    {
        $notice = Notice::find($id);
        return response()->json([
            'code' => 200,
            'data' => $notice
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'priority' => 'required',
            'notice_text' => 'required',
            'notice_date' => 'required',
            'show' => 'required',
        ]);
        $notice = Notice::find($id);
        $notice->update($data);
        return response()->json([
            'code' => 200,
            'message' => 'Notice updated successfully'
        ]);
    }

    public function destroy(Request $request)
    {
        $notice = Notice::find($request->dataid);
        $notice->delete();
        return response()->json([
            'code' => 200,
            'message' => 'Notice deleted successfully'
        ]);
    }
}
