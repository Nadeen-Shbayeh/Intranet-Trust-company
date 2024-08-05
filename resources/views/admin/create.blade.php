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
<form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-3 border-right"  style="background:black">
           <div style="margin: auto; width: 70%; padding: 10px;color:white">
           
            @csrf
                <img src="{{ url('storage/img/user.png') }}" class="rounded" alt="...">
                <input  style="color:white" class="form-control" type="file" name="imgfile"  id="imgfile" placeholder="Post Imge.." required>
        
            </div>
         
        </div>
        <div class="col-md-5 border-right" >
     
        @csrf
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2 class="text-right">Insert User Data</h2>
                </div>
                
                <div class="row mt-2">
                    <div class="col-md-12"><label class="labels">Full Name</label><input type="text" name="name" class="form-control" placeholder="Full Name" value=""></div>
                   
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Email Address</label><input name="email" type="email" class="form-control" placeholder="enter phone number" value=""></div>
                    <div class="col-md-12"><label class="labels">Address</label><input type="text" name="address" class="form-control" placeholder="enter  address " value=""></div>
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="mobile" name="mobile_num" class="form-control" placeholder="enter mobile number" value=""></div>
                    <div class="col-md-12"><label class="labels">Password</label><input type="password" name="password" class="form-control" placeholder="********" value="" require></div>
                    <div class="col-md-12"><label class="labels">Employee ID</label><input type="text" name="emp_id" class="form-control" placeholder="enter employee id" value=""></div>
                    <div class="col-md-12"><label class="labels">ID Number</label><input type="text" name="user_id" class="form-control" placeholder="enter id number" value=""></div>
                    <div class="col-md-12"><label class="labels">Birth Date</label><input type="date" placeholder="dd-mm-yyyy" name="birth_date" class="form-control"  value=""></div>
                </div>
                
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label style="margin-top:15px;"  >Choose Department:</label>
                            
                            <select name="department" id="department" class="form-control">
                                @foreach($department as $item)
                                    <option value="{{$item->name}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label style="margin-top:15px;"  >Choose Branch:</label>
                            
                            <select name="branch" id="branch" class="form-control">
                                @foreach($branches as $item)
                                    <option value="{{$item->name}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="row mt-3">
                        <label style="margin-top:15px;" >Choose gender:</label>
                        <div class="col-md-6">
                            <select name="gender" id="gender" class="form-control">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        
                            </select></div>


                        <label style="margin-top:15px;"  >Choose type:</label>
                            <div class="col-md-6">
                                <select name="type" id="type" class="form-control">
                                <option value="user">User</option>
                                <option value="admin">Admin</option>
                            
                                </select></div>
                    </div>
                      
              
                <div class="mt-5 text-center"><button name="submit" type="submit" style="color:black"class="btn btn-success">Save User</button></div>
            </div>
            </form>
        
        </div>
       
    </div>
</div>
</div>
</div>

</x-app-layout>




