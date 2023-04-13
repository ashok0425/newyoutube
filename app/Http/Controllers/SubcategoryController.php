<?php

namespace App\Http\Controllers;

use App\Models\subcategory;
use Illuminate\Http\Request;
use App\Models\category;

class SubcategoryController extends Controller
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
        $subcategory=subcategory::orderBy('id','desc')->get();
        return view('backend.subcategory')->with('sub',$subcategory);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=category::all();
        return view('backend.createsubcategory')->with('category',$category);

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
            'category'=>'required|max:225',
            'subcategory'=>'required|max:225',

        ]);
        $subcategory=new subcategory;
        $subcategory->subcategory=$request->subcategory;
        $subcategory->category_id=$request->category;
        $sub->subcategory_en=$request->subcategory_en;

$subcategory->save();
$notification=array(
    'message'=>"Subacategory added sucessfully",

    'alert-type'=>"success",
);
return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show(subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(subcategory $subcategory,$id)
    {
        $sub=subcategory::find($id);
        $category=category::all();

        return view('backend.editsubcategory',compact('sub','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, subcategory $subcategory,$id)
    {
        $sub=subcategory::find($id);
        $sub->category_id=$request->category;
        $sub->subcategory=$request->subcategory;
        $sub->subcategory_en=$request->subcategory_en;

        // $sub->slug=$request->slug;


        $sub->save();
        $notification=array(
            'message'=>"subcategory updated",
            'alert-type'=>'success'
        );
        return redirect()->route('admin.subcategory')->with($notification);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(subcategory $subcategory,$id)
    {
        $delete=subcategory::find($id);
        $delete->delete();
        $notification=array(
            'message'=>"Subcategory deleted sucessfully",

            'alert-type'=>"success",
        );
return redirect()->back()->with($notification);

    }
}
