<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogsController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data = Blog::all();        
        return view('admin.blogs.blogs')->with('blogs',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogs.create-blogs');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Blog;
        $data->name = $request->input('name');
        $data->description = $request->input('description');
        $data->order_no = $request->input('order_no');
        $data->title = $request->input('title');
        $data->seo_keyword = $request->input('seo_keyword');
        $data->seo_description = $request->input('seo_description');
        $data->image = $request->input('image');
        $data->save();
        return redirect('/blogs')->with('success','blog added succesfully');
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
        $data = Blog::find($id);
        return view('admin.blogs.edit-blogs')->with('blog',$data);
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
        $data = Blog::find($id);
        $data->name = $request->input('name');
        $data->description = $request->input('description');
        $data->order_no = $request->input('order_no');
        $data->title = $request->input('title');
        $data->seo_keyword = $request->input('seo_keyword');
        $data->seo_description = $request->input('seo_description');
        $data->image = $request->input('image');
        $data->save();
        return redirect('/blogs')->with('info','Edit added succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Blog::find($id);
        $data->delete();
        return redirect('/blogs')->with('danger','Blog Removed');
    }
}
