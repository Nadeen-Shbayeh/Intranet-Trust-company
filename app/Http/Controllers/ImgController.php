<?php

namespace App\Http\Controllers;

use App\Models\img;
use Illuminate\Http\Request;

class ImgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $img = img::all();
        return view('news.list-images',compact('img'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create-images');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $img = new img();
      
        $img->title = $request->title;
        
        if($request->hasFile('imgfile'))
        {
            $filename = '';
            $fileName = time() . $request->file('imgfile')->getClientOriginalName(); 
            $path = $request->file('imgfile')->storeAs('img', $fileName, 'public');
            $request['imgfile'] = '/storage/' . $path;
            $img->imgfile = $fileName;
        }
        
       
        

        $img->save();
        return redirect('create-images')->with("success","Posted successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\img  $img
     * @return \Illuminate\Http\Response
     */
    public function show(img $img)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\img  $img
     * @return \Illuminate\Http\Response
     */
    public function edit(img $img)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\img  $img
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, img $img)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\img  $img
     * @return \Illuminate\Http\Response
     */
    public function destroy(img $img)
    {
        //
    }
}
