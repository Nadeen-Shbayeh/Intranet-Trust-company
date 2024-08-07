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
.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

</style>

  <!-- ! Sidebar -->
 
  <div class="sidenav">


  <a  class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none"><span class="fs-5 d-none d-sm-inline">القائمة</span></a>
  <a style="space-between:center;"href="{{ route('users') }}"><i class="fa fa-fw fa-user"></i>  المستخدمين</a>
  <a href="{{ route('list-post') }}"><i class="fa fa-fw fa-layer-group"></i>  اخبار الموظفين</a>
  <a href="{{ route('list-news') }}"><i class="fa fa-fw fa-newspaper"></i> اخبار الشركة</a>
  <a href="{{ route('create-lastnews') }}"><i class="fa fa-fw fa-rocket"></i>  اخبار عاجلة</a>
  <a href="{{ route('list-deathnews') }}"><i class="fa fa-fw fa-frown-o"></i>  الموتى</a>
  <a href="{{ route('list-deathnews') }}"><i class="fa fa-fw fa-image"></i>  صور الصفحة</a>
  <a href="{{ route('company') }}"><i class="fa fa-fw fa-city"></i>   هيكلية الشركة   </a>
  <a href="{{ route('category') }}"><i class="fa fa-fw fa-file"></i>  مشاركة الملفات </a>



</div>
@include('dashboard')
