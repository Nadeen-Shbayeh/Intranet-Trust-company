<?php

namespace App\Http\Controllers;
use App\Models\LastNews;

use Illuminate\Http\Request;

class LastNewsController extends Controller
{
    //
    public function create()
    {
        $news = LastNews::all()->sortByDesc('created_at');
      
        return view('news.create-lastnews',compact('news'));
    }

    public function update(Request $request)
    {
       
        $news = new LastNews();
  
        $news->description = $request->description;
     
        $news->save();
        
        $news = LastNews::all()->sortByDesc('created_at');
        return view('news.create-lastnews',compact('news'))->with("success","Updated successfully");

    }

    public function edit(string $id)
    {
        $news = LastNews::find($id);
        return view('news.edit-lastnews')->with('news', $news);
    }

    public function save(Request $request, $id)
    {

        $news = LastNews::find($id);
     
        $news->description = $request->description;
        $news->status = $request->status;
     
       
       
        $news->update();
        return view('news.edit-lastnews',compact('news'))->with("success","Updated successfully");

    }


    
}
