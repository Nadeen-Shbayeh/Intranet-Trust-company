<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function list_news()
    {
        $news = News::all();
        return view('news.list-news',compact('news'));
    }
    

    public function create()
    {
        return view('news.create-news');
    }

    public function savenews(Request $request)
    {
        
        $news = new News();
      
        $news->title = $request->title;
        $news->description = $request->description;
        
        if($request->hasFile('imgfile'))
        {
            $filename = '';
            $fileName = time() . $request->file('imgfile')->getClientOriginalName(); 
            $path = $request->file('imgfile')->storeAs('img', $fileName, 'public');
            $request['imgfile'] = '/storage/' . $path;
            $news->imgfile = $fileName;
        }
        
       
        

        $news->save();
        return redirect('create-news')->with("success","Posted successfully");


    }

    public function edit(string $id)
    {
        $news = News::find($id);
        return view('news.edit-news')->with('news', $news);
    }

    public function update(Request $request, $id)
    {

        $news = News::find($id);
        $filename = '';
        $news->title = $request->title;
        $news->description = $request->description;
     
        if($request->hasFile('imgfile'))
        {
            $fileName = time() . $request->file('imgfile')->getClientOriginalName(); 
            $path = $request->file('imgfile')->storeAs('img', $fileName, 'public');
            $request['imgfile'] = '/storage/' . $path;
            $news->imgfile = $fileName;
        }
        
       
        

        $news->update();
        return view('news.edit-news')->with("success","Updated successfully");

    }

    
    
    public function destroy(string $id)
    {
        News::destroy($id);
        return back()->with("success","Deleted successfully");
       
    }

    public function show(string $id)
    {
        $news = News::find($id);
        return view('news.show-news')->with('news', $news);
    }
}
