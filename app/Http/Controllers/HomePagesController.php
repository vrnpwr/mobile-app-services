<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Blog;
use App\Enquiry;
use App\KeyClient;
use App\Portfolio;
use App\Service;
use App\Slider;
use App\Subdomain;
use App\Testimonial;
use App\User;
use App\HomePage;

class HomePagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        $enquiries = Enquiry::all();
        $keyclients = KeyClient::all();
        $portfolios = new Portfolio;
        $portfolios = DB::table('portfolios')
        ->limit(6)
        ->get();
        $services = Service::all();
        $services = DB::table('services')
        ->limit(3)
        ->get();
        $sliders = Slider::all();
        $subdomains = Subdomain::all();
        $testimonials = Testimonial::all();
        $users = User::all();       
        return view('front-view.home-page.home-page',['blogs'=>$blogs,'enquires'=>$enquiries,'keyclients'=>$keyclients,'portfolios'=>$portfolios,'services'=>$services,'sliders'=>$sliders,'subdomains'=>$subdomains,'testimonials'=>$testimonials,'users'=>$users]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            'first_name'=> 'required',
            'last_name'=> 'required',
            'email_address' => 'required',
            'comment' => 'required',
        ]);


        $data = new HomePage;
        $data->first_name = $request->input('first_name');
        $data->last_name = $request->input('last_name');
        $data->email_address = $request->input('email_address');
        $data->comment = $request->input('comment');
        $data->save();
        return redirect('/homepage')->with('success','comment posted successfully');
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
        //
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
        //
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
