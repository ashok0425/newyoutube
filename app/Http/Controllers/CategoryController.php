<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use File;
use Image;
use \Cviebrock\EloquentSluggable\Services\SlugService;


class CategoryController extends Controller
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
        $category=category::orderBy('id','desc')->get();
        return view('backend.category')->with('arr',$category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.createcategory');
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
            // 'category_en'=>'required|unique:categories|max:225',
            'category'=>'required|unique:categories|max:225',

        ]);
        $category=new category;
        $category->category=$request->category;
        $category->category_en=$request->category_en;
        $category->slug=$request->slug;

        $img=$request->file('file');
        if($img){
            $imgname=uniqid().".".$img->getClientOriginalExtension();
            Image::make($img)->resize(500, 300)->save('image/category/'.$imgname);
            $path='image/category/'.$imgname;
            $category->image=$path;
        }
$category->save();
$notification=array(
    'message'=>"Category added sucessfully",
    'alert-type'=>"success",
);
return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category,$id)
    {
        $category=category::find($id);
        return view('backend.editcategory')->with('cat',$category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category,$id)
    {
        $category=category::find($id);
        $img=$request->file('file');

        if($img){
            File::delete($category->image);
            $imgname=uniqid().".".$img->getClientOriginalExtension();
            Image::make($img)->resize(500, 300)->save('image/category/'.$imgname);
            $path='image/category/'.$imgname;
            $category->image=$path;
        }
        $category->category=$request->category;
        $category->slug=$request->slug;
        $category->category_en=$request->category_en;

        $category->save();
        $notification=array(
            'message'=>"Category updated sucessfully",

            'alert-type'=>"success",
        );
        return redirect()->route('admin.category')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category,$id)
    {
        $delete=category::find($id);
        File::delete($delete->image);
        $delete->delete();
        $notification=array(
            'message'=>"Category deleted sucessfully",

            'alert-type'=>"success",
        );
return redirect()->back()->with($notification);
    }


    public function getslug($value){
      $slug = SlugService::createSlug(Category::class, 'slug', $value);
     return response()->json($slug);
    }


}
