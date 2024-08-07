<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />   
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 
<x-app-layout>
    
<div class="container rounded bg-white mt-5 mb-5" >
    <div class="row">
        <div class="col-md-3 border-right"  style="background:black">
        <form action="{{ url('edit/'.$user->id) }}" method="POST" enctype="multipart/form-data">
        {!! csrf_field() !!}
        @method('PUT')
        <div style="margin: auto; width: 70%; padding: 10px;color:white">
               <img id="img" style="padding: 5px;margin-top:10px"src="{{ url('storage/img/'. $user->file)      }}" class="rounded" alt="...">
               <input  style=" padding: 5px;margin-top:10px"  type="file" name="imgfile"  id="imgfile" placeholder="Post Imge.." >
               <script>
                    let profilePic = document.getElementById("img"); 
                    let inputFile = document.getElementById("imgfile");
                    inputFile.onchange = function(){
                        profilePic.src = URL.createObjectURL(inputFile.files[0]);
                    }
            
                </script>
               <p> _____________________________ </p>
               <i style=" padding: 5px;margin-top:10px" class="fa fa-user"></i> User Roles
           </div>
            
        </div>
        <div class="col-md-5 border-right" >
       
       
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2 class="text-right">Insert User Data</h2>
                </div>
                
                <div class="row mt-2">
                    <div class="col-md-12"><label class="labels">Full Name</label><input type="text" name="name" class="form-control"  value="{{ $user->name }}"></div>
                   
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Email Address</label><input name="email" type="email" class="form-control"  value="{{ $user->email }}"></div>
                    <div class="col-md-12"><label class="labels">Address</label><input type="text" name="address" class="form-control"  value="{{ $user->address }}"></div>
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="mobile" name="mobile_num" class="form-control"  value="{{ $user->mobile_num }}"></div>
                    <div class="col-md-12"><label class="labels">Password</label><input type="password" name="password" class="form-control"  value="{{ $user->password }}" require></div>
                    <div class="col-md-12"><label class="labels">Employee ID</label><input type="text" name="emp_id" class="form-control"  value="{{ $user->emp_id }}"></div>
                    <div class="col-md-12"><label class="labels">ID Number</label><input type="text" name="user_id" class="form-control"value="{{ $user->user_id }}"></div>
                    <div class="col-md-12"><label class="labels">Birth Date</label><input type="date" name="birth_date" class="form-control"  value="{{ $user->birth_date }}"></div>
                </div>
                
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label style="margin-top:15px;" for="department" >Choose Department:</label>
                            
                            <select name="department" id="department" class="form-control" value="{{$user->department}}">
                          
                                @foreach($department as $item)
                                <option value="{{$item->name}}" {{ $item->name == $item->name ? 'selected' : '' }}>{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label style="margin-top:15px;" for="gender" >Choose Branch:</label>
                            
                            <select name="branch" id="branch" class="form-control">
                                @foreach($branches as $item)
                                    <option value="{{$item->name}}" {{ $item->name == $item->name ? 'selected' : '' }}>{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label style="margin-top:15px;" for="gender" >Choose gender:</label>
                            
                                <select name="gender" id="gender" class="form-control">
                                <option value="male" {{ $user->gender == 'male' ? 'selected' : '' }}>Male</option>
                                <option value="female" {{ $user->gender == 'female' ? 'selected' : '' }}>Female</option>
                            
                            </select>
                        </div>
                            <div class="col-md-6">
                             <label style="margin-top:15px;" for="status" >Active status:</label>
                            
                                <select name="status" id="status" class="form-control">
                                <option value="active" {{ $user->status == 'active' ? 'selected' : '' }}>Active</option>
                                <option value="inactive" {{ $user->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                            
                            </select></div>
                    
                        </div>
               

                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label style="margin-top:15px;" for="type" >Choose type:</label>
                            
                                <select name="type" id="type" class="form-control">
                                <option value="user" {{ $user->usertype == 'user' ? 'selected' : '' }}>User</option>
                                <option value="admin" {{ $user->usertype == 'admin' ? 'selected' : '' }}>Admin</option>
                            
                            </select>
                        </div>
                           
                    
                        </div>
                    </div>
                <div class="mt-5 text-center"><button name="submit" type="submit" style="color:black"class="btn btn-success">Update User</button></div>
            </div>
            </form>
        
        </div>
       
    </div>
</div>
</div>
</div>

</x-app-layout>




