<?php

namespace App\Http\Controllers;

use App\Models\livetv;
use Illuminate\Http\Request;

class LivetvController extends Controller
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
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\livetv  $livetv
     * @return \Illuminate\Http\Response
     */
    public function show(livetv $livetv)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\livetv  $livetv
     * @return \Illuminate\Http\Response
     */
    public function edit(livetv $livetv)
    {
        $links=livetv::find(1);
        return view('backend.editlivetv')->with("livetv",$links);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\livetv  $livetv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, livetv $livetv)
    {
        $livetv=livetv::find(1);
        $livetv->embed_link=$request->embed_link;
        $livetv->save();
        $notification=array(
            'message'=>'liveTv Link Updated',
            'alert-type'=>'success'

        );
        return redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\livetv  $livetv
     * @return \Illuminate\Http\Response
     */
    public function active(livetv $livetv)
    {
        $livetv=livetv::find(1);
         $livetv->status=1;
         $livetv->save();
        $notification=array(
            'message'=>'liveTv Activated succesfuly',
            'alert-type'=>'success'

        );
        return redirect()->back()->with($notification);
    }
    public function deactive(livetv $livetv)
    {
        $livetv=livetv::find(1);
        $livetv->status=0;
        $livetv->save();

        $notification=array(
            'message'=>'liveTv Deactived succesfuly',
            'alert-type'=>'success'

        );
        return redirect()->back()->with($notification);
    }
}
