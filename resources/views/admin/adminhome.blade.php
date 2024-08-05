<style>
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  bottom: 0;
  left: 0;
  background-color: #111;
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
  color: gray;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 16px;}
}

/* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 16px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}


</style>

  <!-- ! Sidebar -->
 
  <div class="sidenav">

<button class="dropdown-btn"><i class="fa fa-users"></i> Users
<i class="fa fa-caret-down"></i>
</button>
<div class="dropdown-container">
<a style="space-between:center;"href="{{ route('users') }}"><i class="fa fa-fw fa-user"></i> Users list</a>

</div>


<button class="dropdown-btn"><i class="fa fa-fw fa-edit"></i> News and Posts
<i class="fa fa-caret-down"></i>
</button>
<div class="dropdown-container">
  
  <a href="{{ route('list-post') }}"><i class="fa fa-fw fa-layer-group"></i> Posts</a>
  <a href="{{ route('list-news') }}"><i class="fa fa-fw fa-newspaper"></i> Last News</a>
  <a href="{{ route('create-lastnews') }}"><i class="fa fa-fw fa-rocket"></i> Breaking News</a>

</div>

<a href="{{ route('company') }}"><i class="fa fa-fw fa-city"></i> Company structure</a>

<button class="dropdown-btn"><i class="fa fa-fw fa-folder"></i> File Sharing
<i class="fa fa-caret-down"></i>
</button>
<div class="dropdown-container">

  <a href="{{ route('category') }}"><i class="fa fa-fw fa-list"></i> Manage Categories</a>
</div>


</div>
@include('dashboard')
