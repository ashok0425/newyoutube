<?php

namespace App\Http\Controllers;

use App\Models\photogallery;
use Illuminate\Http\Request;
use Image;
use File;
class PhotogalleryController extends Controller
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
        $gallery=photogallery::orderBy('id','desc')->get();
        return view('backend.photogallery')->with('photo',$gallery);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.createphotogallery');

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
            'img'=>'required|mimes:jpg,png,jpeg|max:2048',
            'title'=>'required',

        ]);
        $post=new photogallery;

        $img=$request->file('img');
        if($img){
            $imgname=uniqid().".".$img->getClientOriginalExtension();
            $path='image/gallery/'.$imgname;
            $img->move(public_path().'/image/gallery/',$path);
               $post->img=$path;
        }
        $post->title=$request->title;
        $post->title_en=$request->title_en;


$post->save();
$notification=array(
    'message'=>"New Photo added sucessfully",

    'alert-type'=>"success",
 );

return redirect()->back()->with($notification);


    }

    public function destroy(photogallery $photogallery,$id)
    {
        $photo=photogallery::find($id);
        File::delete($photo->image);
        $photo->delete();
        $notification=array(
            'message'=>"Photo Deleted",

            'alert-type'=>"success",
         );

        return redirect()->back()->with($notification);
    }
}
