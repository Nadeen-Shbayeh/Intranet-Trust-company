<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\News;
use App\Models\img;
use App\Models\LastNews;
use App\Models\Post;
use App\Models\User;
use App\Models\Branch;
use App\Models\Department;
use App\Models\death;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::id())
        {
            $data = User::all();
            $posts = Post::latest()->paginate(8);
            $news = News::latest()->take(8)->get();
            $new2 = img::all();
            $num = $new2->count();
            $img1 = $new2[$num -1]->imgfile;
            $img2 = $new2[$num -2]->imgfile;
            $img3 = $new2[$num -3]->imgfile;
            $img4 = $new2[$num -4]->imgfile;
            $count = $data->count();
            $mytime = Carbon::now();
            $day = $mytime->format('d');
            $month = $mytime->format('m');
            $users = DB::table('users')->get();
            $lastnews = DB::table('last_news')->where('status','show')->get();
            $ls = LastNews::all();
            foreach($ls as $rs){
                $stop_date = date('Y-m-d H:i:s', strtotime($rs->created_at . ' +1 day'));
                $today = date('Y-m-d h:i:s');
                if ($today > $stop_date){

                    $rs->status = 'hide';
                    $rs->update();
                   
                }
          
            }
            if($ls == null){
                $element = 'hide';
            }
            
          

            $usersbd = [];
            $online_users = DB::table('users')->where('active_status', 1)->get();
            $offline_users = DB::table('users')->where('active_status', 0)->get();

            $msg = DB::table('ch_messages')->where('to_id', Auth()->user()->id)->where('seen', 0);
            //$msg = DB::table('ch_messages')->where('to_id', Auth()->user()->id)->get();
            $msg_count =  $msg->count();
            $user = User::find(Auth::id());
            $user->msg = $msg_count;
            $user->update();

            $count2 = $online_users->count();
            foreach ($users as $user) {
                if($user->birth_date !== null){

                    $result = substr($user->birth_date, 5, 9);
                  
                    if($result == $month . '-' . $day){
                      $u = $user->name;
                        array_push($usersbd,$u);
                    }
                  
                        
                } 
                
            }

            $death = death::latest()->take(4)->get();

            if (count($usersbd) === 0) {
                array_push($usersbd,"There is no birth day today :( !");
           }
            $usertype=Auth()->user()->usertype;
            if($usertype == 'user'){
                return view('dashboard',compact('count','posts','news','usersbd','online_users','count2','offline_users','lastnews','img1','img2','img3','img4','death'));
            }
            elseif($usertype == 'admin'){

                
                return view('admin.adminhome', compact('count','posts','news','usersbd','online_users','count2','offline_users','lastnews','img1','img2','img3','img4','death'));
       

            }
            else{
                return redirect()->back();
            }
        }
        
    }

    public function department(){

        $department = DB::table('departments')->get();
        $branches = DB::table('branches')->get();
        return view('company.company',compact('department','branches'));
        
    }
    public function adddep(){

        return view('company.add-department');

        
    }

    public function adddeppost(Request $request){

        $dep = new Department();
       
        $dep->name = $request->name;
        $dep->symbol = $request->symbol;
        $dep->save();
        return redirect('add-department')->with("success","added successfully");


        
    }

    public function addbranch(){

        return view('company.add-branch');

        
    }

    public function addbranchpost(Request $request){

        $dep = new Branch();
       
        $dep->name = $request->name;
        $dep->symbol = $request->symbol;
        $dep->save();
        return redirect('company')->with("success","added successfully");


       
        

    }



        public function edit(string $id)
    {
        $dep = Department::find($id);
        return view('company.edit-department')->with('dep', $dep);
    }

    public function update(Request $request, $id)
    {

        $dep = Department::find($id);
     
        $dep->name = $request->name;
        $dep->symbol = $request->symbol;
     
       
       
        $dep->update();
        return view('company.edit-department')->with("success","Updated successfully");

    }


    public function editbranch(string $id)
    {
        $branch = Branch::find($id);
        return view('company.edit-branch')->with('branch', $branch);
    }

    public function updatebranch(Request $request, $id)
    {

        $branch = Branch::find($id);
     
        $branch->name = $request->name;
        $branch->symbol = $request->symbol;
     
       
       
        $branch->update();
        return view('company')->with("success","Updated successfully");

    }




    
}
