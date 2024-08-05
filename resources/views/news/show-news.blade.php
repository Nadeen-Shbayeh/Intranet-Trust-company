
<x-app-layout>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />   

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

<style>
    * {
  box-sizing: border-box;
  text-align: right;
}



label {
 
  display: inline-block;
 font-size:30px;margin-top:20px;
 
  margin-left: auto;
margin-right: 0;
}



.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}



.col-75 {
    margin-left: auto;
margin-right: 0;
  width: 90%;
  margin-top: 10px;
}

/* Clear floats after the columns */
.row::after {
  content: "";
  display: table;
  clear: both;

}

.row img{

    display: block;
margin-left: auto;
margin-right: auto;
width: 50%;
margin-top: 20px;



}





</style>
</head>
<body>



  

<div class="container">
 
  @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

  
  <div class="row"> <div class="col-75">

        <label  style="text-align:right;font-size:30px;margin-top:20px;">{{$news->title}}</label>
            <img src="{{ url('storage/img/'. $news->imgfile) }}" alt="" >
        <label for="title" style="font-size:20px;margin-top:20px;">Posted time : {{$news->created_at}}</label>
            <p style="text-align:right;margin-top: 20px;"> {{$news->description}} </p>
 
  </div> </div>


  

  </div>


  


</div>


    
     



 
   
</body>
</html> 


</x-app-layout>