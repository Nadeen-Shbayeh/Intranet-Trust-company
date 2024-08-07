<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        return view('file.category',compact('category'));
    }

    public function userindex()
    {
        $user = User::find(Auth::id());
        if($user == null){
            return redirect('/');
        }else{
            if($user->usertype == 'admin'){
                $category = Category::all();
            }elseif($user->usertype == 'user'){
                $category = DB::table('categories')->where('department', $user->department)->get();
            }                   

        }
       
        
        return view('file.category',compact('category'));
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = DB::table('departments')->get();
        return view('file.add-category',compact('department'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category();

        $category->name = $request->name;

        $category->type = $request->type;

        $category->created_by = Auth::user()->name;;
    
        $category->department = $request->department;
      
        
        $category->save();
        return redirect('add-category')->with("success","Category added successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        $category = Category::find($id);
        $department = DB::table('departments')->get();
       
        return view('file.edit-category',compact('category','department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $category = Category::find($id);
       
        $category->name = $request->name;
        $category->department = $request->department;
        $category->type = $request->type;
     
       

        $category->update();
        return redirect('/category')->with("success","User updated successfully");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
