<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function list_posts()
    {
        $posts = Post::all();
        return view('post.list-posts',compact('posts'));
    }

    public function create()
    {
        return view('post.create-post');
    }

    public function savepost(Request $request)
    {
        
        $post = new Post();
       
        $post->title = $request->title;
        $post->description = $request->description;
  
        if($request->hasFile('imgfile'))
        {
            $filename = '';
            $fileName = time() . $request->file('imgfile')->getClientOriginalName(); 
            $path = $request->file('imgfile')->storeAs('img', $fileName, 'public');
            $request['imgfile'] = '/storage/' . $path;
            $post->imgfile = $fileName;
        }
        
       
        

        $post->save();
        return redirect('create-post')->with("success","Posted successfully");


    }

    public function edit(string $id)
    {
        $post = Post::find($id);
        return view('post.edit-post')->with('post', $post);
    }

    public function update(Request $request, $id)
    {

        $post = Post::find($id);
        $filename = '';
        $post->title = $request->title;
        $post->description = $request->description;
      
        if($request->hasFile('imgfile'))
        {
            $fileName = time() . $request->file('imgfile')->getClientOriginalName(); 
            $path = $request->file('imgfile')->storeAs('img', $fileName, 'public');
            $request['imgfile'] = '/storage/' . $path;
            $post->imgfile = $fileName;
        }
        
       
        

        $post->update();
        return redirect('edit-post')->with("success","Updated successfully");

    }

    public function show(string $id)
    {
        $post = Post::find($id);
        return view('post.show-post')->with('post', $post);
    }
}
