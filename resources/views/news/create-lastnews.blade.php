
<x-app-layout>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" >
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<link  href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />   

<style>
    * {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;

}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row::after {
  content: "";
  display: table;
  clear: both;
}




</style>
</head>
<body>


<div class="main">
  

<div class="container">

<form action="{{ route('create-lastnews') }}" method="post" enctype="multipart/form-data">
      @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
      <div class="row">
      
      <p>Create last news </p>
      
    </div>
  
    @csrf
 

      
      <div class="row">
        <div class="col-25">
          <label for="description">Description</label>
          
        </div>
        <div class="col-75">
          <textarea class="form-control ckeditor" id="description" name="description" placeholder="Write description.." style="height:200px" ></textarea>
        </div>
      </div>
      <br>
      
    
      <div class="row-75">
      
        <input type="submit" value="Create new">
      

        </div>
      </div>

  </form>
  
  <div class="container">
  <br>         
<div class="table-responsive">
                            <table class="table table-condensed" id="table">
                                <thead>
                                    <tr>
                                    
                                        <th>Description</th>
                                   
                                        <th>Created At</th>

                                        <th>Status</th>
                
                                        <th>Actions</th>
                                        

                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($news as $item)
                                    <tr>
                                      
                                        <td>{{ $item->description }}</td>

                                        
                                        
                                        <td>{{ $item->created_at }}</td>

                                        
                                        <td>{{ $item->status }}</td>
                                    

 
                                        <td>
                                       
                                            <a href="{{ url('/edit-lastnews/' . $item->id) }}" title="Edit news"><button class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button></a>
 
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>


                        </div>
                        </div>


    
     



 
   
</body>
</html> 


</x-app-layout>