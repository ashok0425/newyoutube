<?php

namespace App\Http\Controllers;

use App\Models\district;
use Illuminate\Http\Request;

class DistrictController extends Controller
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
        $district=district::orderBy('id','desc')->get();
        return view('backend.district')->with('dist',$district);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.createdistrict');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'district'=>'required|unique:districts|max:225',

        ]);
        $district=new district;
        $district->district=$request->district;
        $category->district_en=$request->district_en;

$district->save();
$notification=array(
    'message'=>"District added sucessfully",

    'alert-type'=>"success",
);
return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\district  $district
     * @return \Illuminate\Http\Response
     */
    public function show(district $district)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\district  $district
     * @return \Illuminate\Http\Response
     */
    public function edit(district $district,$id)
    {
        $category=district::find($id);
        return view('backend.editdistrict')->with('dist',$category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\district  $district
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, district $district,$id)
    {
        $category=district::find($id);
        $category->district=$request->district;
        $category->district_en=$request->district_en;

        $category->save();
        $notification=array(
            'message'=>"District updated sucessfully",

            'alert-type'=>"success",
        );
        return redirect()->route('admin.district')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\district  $district
     * @return \Illuminate\Http\Response
     */
    public function destroy(district $district,$id)
    {
        $delete=district::find($id);
        $delete->delete();
        $notification=array(
            'message'=>"District deleted sucessfully",

            'alert-type'=>"success",
        );
return redirect()->back()->with($notification);
    }
}
