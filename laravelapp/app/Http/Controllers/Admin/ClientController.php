<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return view('admin.client.index');
    }

    public function create()
    {
        return view('admin.client.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'photopath' => 'required',
            'priority' => 'required|integer',
        ]);

        if($request->hasFile('photopath'))
        {
            $file = $request->photopath;
            //get file name with extension
            $filname = $file->getClientOriginalName();
            $filename = time().'_'.$filname;
            //store file in public
            $file->move('images/client',$filename);
            $data['photopath'] = $filename;
        }

        Client::create($data);
        return redirect(route('client.index'))->with('success','Client Created Successfully');

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy(Request $request)
    {

    }
}
