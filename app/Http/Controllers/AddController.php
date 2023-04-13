<?php

namespace App\Http\Controllers;

use App\Models\add;
use Illuminate\Http\Request;
use Image;
use File;
class AddController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery=add::orderBy('id','desc')->get();
        return view('backend.addlist')->with('add',$gallery);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.createadd');
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
            'img'=>'required|mimes:jpg,png,jpeg,gif|max:2048',
            'page'=>'required',
            'place'=>'required',

        ]);
        $img=$request->file('img');
        $imgname=uniqid().".".$img->getClientOriginalExtension();
        $path='image/adds/'.$imgname;
        $img->move(public_path().'/image/adds/',$imgname);
        $post=new add;
        $post->img=$path;
        $post->link=$request->link;
        $post->page=$request->page;
        $post->place=$request->place;
$post->save();
$notification=array(
    'message'=>"New Add added sucessfully",

    'alert-type'=>"success",
 );

return redirect()->back()->with($notification);

    }


    public function destroy(add $add,$id)
    {
        $photo=add::find($id);
        $photo->delete();
        File::Delete($photo->img);
        $notification=array(
            'message'=>"Add Deleted",

            'alert-type'=>"success",
         );

        return redirect()->back()->with($notification);
    }
}
