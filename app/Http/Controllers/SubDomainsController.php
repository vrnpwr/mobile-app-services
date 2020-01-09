<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subdomain;

class SubDomainsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Subdomain::all();
        return view('admin.subdomains.subdomains')->with('subdomains',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.subdomains.create-subdomains');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Subdomain;
        $data->name = $request->input('name');
        $data->seo_keyword = $request->input('seo_keyword');
        $data->seo_meta_title = implode('`', $request->input('seo_meta_title'));
        $data->seo_description= implode('`', $request->input('seo_description'));
        $data->featured_image = $request->input('image');
        $data->save();
        return redirect('/sub-domains')->with('success','subdomain created');
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
        $data = Subdomain::find($id);
        return view('admin.subdomains.edit-subdomains')->with('subdomain',$data);
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
        $data = Subdomain::find($id);
        $data->name = $request->input('name');
        $data->seo_keyword = $request->input('seo_keyword');
        print_r($request->input('seo_meta_title'));
        die();
        $data->seo_meta_title = implode('`', $request->input('seo_meta_title'));
        $data->seo_description= implode('`', $request->input('seo_description'));
        $data->featured_image= $request->input('image');
        $data->save();
        return redirect('/sub-domains')->with('success','Subdomain update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Subdomain::find($id);
        $data->delete();
        return redirect('/sub-domains')->with('success','Subdomain Removed');
    }
}

