<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class roleController extends Controller
{

	public function __construct(){
		$this->middleware('auth');
	}


    public function InsertWriter(){

    	return view('backend.addwriter');
    }


     public function StoreWriter(Request $request){

        $request->validate([
            'email'=>'required|unique:users',
            'name'=>'required',
            'password'=>'required|min:8',

        ]);
     	$data = array();
     	$data['name'] = $request->name;
     	$data['email'] = $request->email;
     	$data['password'] = Hash::make($request->password);
     	$data['category'] = $request->category;
     	$data['district'] = $request->district;
     	$data['post'] = $request->post;
     	$data['setting'] = $request->setting;
     	$data['gallery'] = $request->gallery;
     	$data['ads'] = $request->ads;
         $data['role'] = $request->role;
     	$data['thought'] = $request->thought;
     	$data['livetv'] = $request->livetv;


     	$data['type'] = 0;

     	DB::table('users')->insert($data);

     	 $notification = array(
    	 	'message' => 'Writer Inserted Successfully',
    	 	'alert-type' => 'success'
    	 );

    	 return Redirect()->back()->with($notification);

     }



   public function AllWriter(){
   	$writer = DB::table('users')->where('type',0)->get();
   	return view('backend.writer',compact('writer'));

   }


   public function EditWriter($id){

   	$writer = DB::table('users')->where('id',$id)->first();
   	return view('backend.editwriter',compact('writer'));

   }


   public function UpdateWriter(Request $request, $id){

        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['category'] = $request->category;
        $data['district'] = $request->district;
        $data['post'] = $request->post;
        $data['setting'] = $request->setting;
        $data['gallery'] = $request->gallery;
        $data['ads'] = $request->ads;
        $data['role'] = $request->role;
        $data['thought'] = $request->thought;
        $data['livetv'] = $request->livetv;


     	DB::table('users')->where('id',$id)->update($data);

     	 $notification = array(
    	 	'message' => 'Writer Updated Successfully',
    	 	'alert-type' => 'info'
    	 );

    	 return Redirect()->route('all.writer')->with($notification);

   }



   public function deleteWriter($id){


	$writer = DB::table('users')->where('id',$id);
    $writer->delete();

    $notification = array(
        'message' => 'Writer deleted',
        'alert-type' => 'info'
    );
    return redirect()->back()->with($notification);

}




}
