<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function users()
    {
        $users = User::all();
        return view ('admin.users')->with('users', $users);
    }

    public function create()
    {
        $department = DB::table('departments')->get();
        $branches = DB::table('branches')->get();
        return view('admin.create',compact('department','branches'));
    }
  
    public function store(Request $request)
    {
        
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->password = Hash::make($request->password);
        $user->department = $request->department;
        $user->user_id = $request->user_id;
        $user->emp_id = $request->emp_id;
        $user->branch = $request->branch;
        $user->mobile_num = $request->mobile_num;
        $user->birth_date = $request->birth_date;
        $user->gender = $request->gender;
        $user->usertype = $request->type;
        if($request->hasFile('imgfile'))
        {
            $filename = '';
            $fileName = time() . $request->file('imgfile')->getClientOriginalName(); 
            $path = $request->file('imgfile')->storeAs('img', $fileName, 'public');
            $request['imgfile'] = '/storage/' . $path;
            $user->file = $fileName;
        }
        $user->save();
        return redirect('create')->with("success","User added successfully");

    }





    public function show(string $id)
    {
        $user = User::find($id);
        return view('admin.show')->with('user', $user);
    }



    public function edit(string $id)
    {
        $user = User::find($id);
        $department = DB::table('departments')->get();
        $branches = DB::table('branches')->get();
        return view('admin.edit',compact('user','department','branches'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
      
   
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->address = $request->input('address');
        $user->password = Hash::make($request->input('password'));
        $user->department = $request->input('department');
        $user->user_id = $request->input('user_id');
        $user->emp_id = $request->input('emp_id');
        $user->branch = $request->input('branch');
        $user->mobile_num = $request->input('mobile_num');
        $user->birth_date = $request->input('birth_date');
        $user->gender = $request->input('gender');
        $user->usertype = $request->type;
        $user->status = $request->input('status');

        if($request->hasFile('imgfile')) 
        {
            $filename = '';
            $fileName = time() . $request->file('imgfile')->getClientOriginalName(); 
            $path = $request->file('imgfile')->storeAs('img', $fileName, 'public');
            $request['imgfile'] = '/storage/' . $path;
            $user->file = $fileName;
        }

        $user->update();
        return redirect('/users')->with("success","User updated successfully");
    }

    
    
    public function delete(string $id)
    {
        User::destroy($id);
        return redirect('users')->with("success","User Deleted !");
       
    }


  


    

}
