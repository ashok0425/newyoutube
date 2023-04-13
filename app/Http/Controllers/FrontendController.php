<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Subcategory;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\post;
use App\Models\seo;
use Illuminate\Support\Facades\DB;
class FrontendController extends Controller
{
    public function changelanguage(){
        if(session()->has('language')){
            if(session()->get('language')==1){
                session()->put('language',0);

            }else{

                session()->put('language',1);

            }
           }else{
            session()->put('language',1);

           }

            return redirect()->back();
    }


    public function category($id,$slug){
       $post=post::where('category_id',$id)->where('status',1)->paginate(18);
       $category=category::find($id);
       return view('frontend.archieve',compact('post','category'));
}

public function subcategory($id,$sid,$slug=null){
    $post=post::where('subcategory_id',$sid)->where('status',1)->paginate(18);
    $category=Subcategory::find($sid);
    return view('frontend.archieve',compact('post','category'));
}


public function details($category,$id,$slug){
    $post=DB::table('posts')->join('categories','categories.id','posts.category_id')->leftjoin('subcategories','subcategories.id','posts.subcategory_id')->select('posts.id as pid','posts.*','subcategories.*','categories.*','posts.created_at as pc','categories.id as cid','subcategories.id as sid')->where('posts.id',$id)->where('posts.status',1)->first();
    $logo=seo::find(1);
    $related=post::where('category_id',$id)->where('status',1)->orderBy('id','desc')->limit(6)->get();

    return view('frontend.detail',compact('post','logo','related'));
}




public function commentstore(Request $request){

    $request->validate([
        'name'=>'required',
        'email'=>'required|email',
        'comment'=>'required',


    ]);
    try {
        //code...

    $comment=new Comment;
    $comment->name=$request->name;
    $comment->email=$request->email;
    $comment->post_id=$request->post_id;
    $comment->comment=$request->comment;
    $comment->save();
    $notification=array(
        'message'=>"Thank You For Your Feedback.",

        'alert-type'=>"success",
     );

return redirect()->back()->with($notification);


} catch (\Throwable $th) {
    $notification=array(
        'message'=>"Something went wrong.Please try again later",

        'alert-type'=>"error",
     );

return redirect()->back()->with($notification);
}
}



public function search(Request $request){

    if(isset($request->form) && !empty($request->form)){
        $post=DB::table('posts')->where('title','LIKE','%'.$request->keyword.'%')->whereBetween('created_at',[$request->form,$request->to])->paginate(12);
    }else{
        $post=DB::table('posts')->where('title','LIKE','%'.$request->keyword.'%')->paginate(12);
    }

    $search=$request->keyword;
    return view('frontend.archieve',compact('post','search'));

}


}
