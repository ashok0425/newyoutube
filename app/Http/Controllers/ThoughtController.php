<?php

namespace App\Http\Controllers;

use App\Models\Thought;
use Illuminate\Http\Request;

class ThoughtController extends Controller
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
        $district=Thought::orderBy('id','desc')->get();
        return view('backend.thought.index')->with('dist',$district);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.thought.create');

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
            'thought'=>'required|max:225',
            'author'=>'required|max:225',


        ]);
        $thought=new Thought;
        $thought->thought_en=$request->thought_en;
        $thought->thought=$request->thought;
        $thought->author=$request->author;
        $thought->author_en=$request->author_en;

$thought->save();
$notification=array(
    'message'=>"Added sucessfully",

    'alert-type'=>"success",
);
return redirect()->back()->with($notification);
    }


    public function edit($id)
    {
        $category=Thought::find($id);
        return view('backend.thought.edit')->with('dist',$category);
    }


    public function update(Request $request,$id)
    {
        $thought=Thought::find($id);
        $thought->thought_en=$request->thought_en;
        $thought->thought=$request->thought;
        $thought->author=$request->author;
        $thought->author_en=$request->author_en;

        $thought->save();
        $notification=array(
            'message'=>"Updated sucessfully",

            'alert-type'=>"success",
        );
        return redirect()->route('admin.thought')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\district  $district
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete=Thought::find($id);
        $delete->delete();
        $notification=array(
            'message'=>"District deleted sucessfully",

            'alert-type'=>"success",
        );
return redirect()->back()->with($notification);
    }
}
