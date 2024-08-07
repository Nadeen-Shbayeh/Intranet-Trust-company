<?php

namespace App\Http\Controllers;

use App\Models\death;
use Illuminate\Http\Request;

class DeathController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = death::all();
        return view('news.list-deathnews',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create-deathnews');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news = new death();
      
        $news->name = $request->name;
        $news->relation = $request->relation;
        $news->description = $request->description;
       

        $news->save();
        return redirect('create-deathnews')->with("success","Posted successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\death  $death
     * @return \Illuminate\Http\Response
     */
    public function show(death $death)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\death  $death
     * @return \Illuminate\Http\Response
     */
    public function edit(death $death)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\death  $death
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, death $death)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\death  $death
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        death::destroy($id);
        return back()->with("success","Deleted successfully");
       
    }
}
