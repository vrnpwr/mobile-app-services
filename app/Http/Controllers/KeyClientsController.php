<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KeyClient;
class KeyClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = KeyClient::all();
        return view('admin.key-clients.key-clients')->with('keyClients',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.key-clients.create-clients');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
            'image'=>'required',
            'order_no'=>'required'
        ]);

        $data = new KeyClient;
        $data->name = $request->input('name');
        $data->image = $request->input('image');
        $data->order_no = $request->input('order_no');
        $data->save();
        return redirect('/key-clients')->with('success','Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = KeyClient::find($id);
        return view('admin.key-clients.edit-key-clients')->with('keyclient',$data);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = KeyClient::find($id);
        return view('admin.key-clients.edit-key-clients')->with('keyclient',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = KeyClient::find($id);
        $data->name = $request->input('name');
        $data->image = $request->input('image');
        $data->order_no = $request->input('order_no');
        $data->save();
        return redirect('/key-clients')->with('info','key-client updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = KeyClient::find($id);
        $data->delete();
        return redirect('/key-clients')->with('danger','key-client deleted successfully');
    }
}
