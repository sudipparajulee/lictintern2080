<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::orderBy('priority')->get();
        return view('admin.client.index',compact('clients'));
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
            $filename = $file->getClientOriginalName();
            $filename = time().'_'.$filename;
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
