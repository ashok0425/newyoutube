<?php

namespace App\Http\Controllers;

use App\Models\subdistrict;
use Illuminate\Http\Request;
use App\Models\district;
class SubdistrictController extends Controller
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
        $subcategory=subdistrict::orderBy('id','desc')->get();
        return view('backend.subdistrict')->with('sub',$subcategory);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=district::all();
        return view('backend.createsubdistrict')->with('district',$category);
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
            'district'=>'required|max:225',
            'city'=>'required|max:225',

        ]);
        $subdistrict=new subdistrict;
        $subdistrict->city=$request->city;
        $subdistrict->city_en=$request->city_en;

        $subdistrict->district_id=$request->district;

$subdistrict->save();
$notification=array(
    'message'=>"Subdistrict added sucessfully",

    'alert-type'=>"success",
);
return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\subdistrict  $subdistrict
     * @return \Illuminate\Http\Response
     */
    public function show(subdistrict $subdistrict)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\subdistrict  $subdistrict
     * @return \Illuminate\Http\Response
     */
    public function edit(subdistrict $subdistrict,$id)
    {
        $sub=subdistrict::find($id);
        $category=district::all();

        return view('backend.editsubdistrict',compact('sub','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\subdistrict  $subdistrict
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, subdistrict $subdistrict,$id)
    {
        $sub=subdistrict::find($id);
        $sub->district_id=$request->district;
        $sub->city=$request->city;
        $subdistrict->city_en=$request->city_en;

        $sub->save();
        $notification=array(
            'message'=>"subdistrict updated",
            'alert-type'=>'success'
        );
        return redirect()->route('admin.subdistrict')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\subdistrict  $subdistrict
     * @return \Illuminate\Http\Response
     */
    public function destroy(subdistrict $subdistrict,$id)
    {
        $delete=subdistrict::find($id);
        $delete->delete();
        $notification=array(
            'message'=>"Subdistrict deleted sucessfully",

            'alert-type'=>"success",
        );
return redirect()->back()->with($notification);

    }
}
