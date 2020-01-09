<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Slider::all();

        return view('admin.slider.slider')->with('sliders',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Slider::all();
        if (count($data)==0) {
            return view('admin.slider.add-slider');
        }else{
            return redirect('/slider')->with('info','slider already exist');
        }
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
            'name'=> 'required',
            'image'=> 'required',
            'order_no' => 'required',
        ]);


        $data = new Slider;
        $data->name = $request->input('name');
        $data->image = $request->input('image');
        $data->order_no = $request->input('order_no');
        $data->save();
        return redirect('/slider')->with('success','Post Created');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Slider::find($id);
        return view('admin.slider.edit-slider')->with('slider',$data);
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
        $this->validate($request, [
            'name'=> 'required',
            'image'=> 'required',
            'order_no' => 'required',
        ]);

        $data = Slider::find($id);
        $data->name = $request->input('name');
        $data->image = $request->input('image');
        $data->order_no = $request->input('order_no');
        $data->save();
        return redirect('/slider')->with('info','Post updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $data = Slider::find($id);
     $data->delete();
     return redirect('/slider')->with('danger','Slider Remove');
 }
}
