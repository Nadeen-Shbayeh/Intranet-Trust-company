<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class FileController extends Controller
{
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
    public function store(Request $request,string $id)
    {
        $category = Category::find($id);

        $file = new File();
        
        $filename = '';
        $fileName =  $request->file('file')->getClientOriginalName(); 
        $path = $request->file('file')->storeAs('files', $fileName, 'public');
        $request['file'] = '/storage/' . $path;
        $file->name = $fileName;
        $file->category = $category->name;
        $file->department = $category->department;
        $file->created_by = Auth::user()->name;
        $category->count = $category->count +1;
        $file->save();
        $category->update();

        return redirect('/category')->with("success","File uploaded successfully");
    }



    public function download(Request $request,string $id)
    {
        $file = File::find($id);
        $file = $file->name;

        return response()->download(public_path('storage/files/'. $file));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function add(string $id)
    {
        $category = Category::find($id);
        
        return view('file.add-file',compact('category'));
    }



    public function show(string $id)
    {
        $category = Category::find($id);
        $files = DB::table('files')->where('category', $category->name)->get();

        
        return view('file.show-file',compact('files'));
    }

    public function ShowUserFile ()
    {
       
        
        $files = DB::table('files')->where('category', $category)->get();

        
        return view('file.show-file',compact('files'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, File $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function destroy(File $file)
    {
        //
    }
}
