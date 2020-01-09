<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Testimonial::all();
        return view('admin.testimonials.testimonials')->with('testimonials',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonials.create-testimonials');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [
            'name' => 'required',
            'designation' => 'required',
            'review' => 'required',
            'rating' => 'required',
            'image' => 'required',

        ]);
        $data = new Testimonial;
        $data->name = $request->input('name');
        $data->designation = $request->input('designation');
        $data->review = $request->input('review');
        $data->rating = $request->input('rating');
        $data->image = $request->input('image');
        $data->save();
        return redirect('/testimonials')->with('success','Testimonial Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Testimonial::find($id);
        return view('admin.testimonials.edit-testimonials')->with('testimonial',$data);
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
            'name' => 'required',
            'designation' => 'required',
            'review' => 'required',
            'rating' => 'required',
            'image' => 'required',
        ]);
        $data = Testimonial::find($id);
        $data->name = $request->input('name');
        $data->designation = $request->input('designation');
        $data->review = $request->input('review');
        $data->rating = $request->input('rating');
        $data->image = $request->input('image');
        $data->save();
        return redirect('/testimonials')->with('succes' , 'Testimonial Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
