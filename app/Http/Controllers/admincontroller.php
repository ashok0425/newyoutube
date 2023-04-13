<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use File;
class admincontroller extends Controller
{
    public function __construct(){
		$this->middleware('auth');
	}
   public  function logout()
   {
      Auth::logout();
      session()->flush();
      return redirect()->route('login')->with('msg',"You are logout...");
   }
   public  function editprofile()
   {

      return view('backend.changepass');
   }


   public  function  updateprofile()
   {

      return view('backend.editprofile');
   }
   public function updatepass(Request $r){//updating password
      $r->validate([
          'current_password'=>'required',
          'password'=>'required|confirmed|min:8',
      ]);

      if(Hash::check($r->current_password, Auth::user()->password)){
      $user=user::find(Auth::user()->id);
      $user->password=Hash::make($r->password);
      $user->save();
$notification=array(
   'message'=>'Password updated',
   'alert-type'=>'success',

);
return view('admin.index')->with('msg',$notification);
       }
       $notification=array(
         'message'=>'Incorrect Password',
         'alert-type'=>'error',

      );
return redirect()->back()->with($notification);
    }


    public function saveprofile(Request $request){//update profile


$user=User::find(Auth::user()->id);
          $img=$request->file('file');

          if($img){
              File::delete($user->profile_photo_path);
            $imgname=uniqid().".".$img->getClientOriginalExtension();
            $path='image/profile/'.$imgname;
            $img->move(public_path().'/image/profile/',$path);
               $user->profile_photo_path=$path;
        }
      $user->email=$request->email;
      $user->name=$request->username;
      $user->save();
      $notification=array(
        'message'=>'profile updated',
        'alert-type'=>'success',

     );
     return redirect()->back()->with($notification);


  }

  }
