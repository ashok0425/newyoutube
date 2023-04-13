<?php

namespace App\Http\Controllers;

use App\Models\seo;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    public function __construct(){
		$this->middleware('auth');
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\seo  $seo
     * @return \Illuminate\Http\Response
     */
    public function show(seo $seo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\seo  $seo
     * @return \Illuminate\Http\Response
     */
    public function edit(seo $seo)
    {
        $links=seo::find(1);
        return view('backend.editseo')->with("seo",$links);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\seo  $seo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, seo $seo)
    {
        $links=seo::find(1);

        $img=$request->file('logo');
        if($img){
            $imgname=uniqid().".".$img->getClientOriginalExtension();
            $path='image/setting/'.$imgname;
            $img->move(public_path().'/image/setting/',$path);
               $links->logo=$path;
        }
        $img=$request->file('fev');
        if($img){
            $imgname=uniqid().".".$img->getClientOriginalExtension();
            $path='image/setting/'.$imgname;
            $img->move(public_path().'/image/setting/',$path);
               $links->fev=$path;
        }
        $links->meta_author=$request->meta_author;
        $links->meta_title=$request->meta_title;
        $links->meta_keyword=$request->meta_keyword;
        $links->meta_description=$request->meta_description;
        $links->google_analytics=$request->google_analytics;
        $links->google_verification=$request->google_verification;
        $links->alexa_analytics=$request->alexa_analytics;
        $links->facebook=$request->facebook;
        $links->twitter=$request->twitter;
        $links->instagram=$request->instagram;
        $links->youtube=$request->youtube;
        $links->linkedin=$request->linkedin;

        $links->aboutus=$request->aboutus;
        $links->email=$request->email;
        $links->phone=$request->phone;
        $links->address=$request->address;
        $links->term=$request->term;










        $links->save();
        $notification=array(
            'message'=>"seo setting updated",

            'alert-type'=>"success",
         );
         return redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\seo  $seo
     * @return \Illuminate\Http\Response
     */
    public function destroy(seo $seo)
    {
        //
    }
}
