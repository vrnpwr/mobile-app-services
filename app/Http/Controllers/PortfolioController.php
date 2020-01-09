<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Portfolio::all();
        return view('admin.portfolio.portfolio')->with('portfolios',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Portfolio::all();
        return view('admin.portfolio.create-portfolio')->with('portfolios',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Portfolio;
        $data->title = $request->input('title');
        $data->image = $request->input('image');
        $data->category = $request->input('category');
        $data->save();
        return redirect('/portfolio')->with('success','Portfolio detail inserted successfully');
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
        $data = Portfolio::find($id);
        return view('admin.portfolio.edit-portfolio')->with('portfolio',$data);
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
        $data = Portfolio::find($id);
        $data->title = $request->input('title');
        $data->image = $request->input('image');
        $data->category = $request->input('category');
        $data->save();
        return redirect('/portfolio')->with('success','updated Succsessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Portfolio::find($id);
        $data->delete();
        return redirect('/portfolio')->with('success','Portfolio Removed');
    }
}
