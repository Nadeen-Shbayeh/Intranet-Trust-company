<style>
.sidenav {
  height: 100%;
  width: 100%;
  position: fixed;
  z-index: 1;
  bottom: 0;
  left: 0;
  background: #c86016;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  display: block;
}

.sidenav a:hover {
  color: #C77B08;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 30px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 16px;}
}

/* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 250px;
  position: fixed;
  z-index: 5;
  top: 0;
  left: 0;

  overflow-x: hidden;
  padding-top: 20px;
}



/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #181106;
}


</style>

  <!-- ! Sidebar -->
 
  <div class="sidenav">



<a style="space-between:center;"href="{{ route('users') }}"><i class="fa fa-fw fa-user"></i> Users list</a>




  
  <a href="{{ route('list-post') }}"><i class="fa fa-fw fa-layer-group"></i> Posts</a>
  <a href="{{ route('list-news') }}"><i class="fa fa-fw fa-newspaper"></i> Last News</a>
  <a href="{{ route('create-lastnews') }}"><i class="fa fa-fw fa-rocket"></i> Breaking News</a>
  <a href="{{ route('list-deathnews') }}"><i class="fa fa-fw fa-frown-o"></i> Death news</a>
  <a href="{{ route('list-deathnews') }}"><i class="fa fa-fw fa-image"></i> Images</a>



<a href="{{ route('company') }}"><i class="fa fa-fw fa-city"></i> Company structure</a>




  <a href="{{ route('category') }}"><i class="fa fa-fw fa-file"></i> File Categories</a>



</div>
@include('dashboard')
