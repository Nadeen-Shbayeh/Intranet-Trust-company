<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    public function forgetPassword()
    {
        return view('auth.forgot-password');
    }

    public function entertoken()
    {
        return view('auth.enter-token');
    }

    public function forgetPasswordPost(Request $request)
    {

        $request->validate([
            'email' => "required|email|exists:users",
        ]);
        $token =rand(100000, 999999);

        DB::table('password_resets')->insert([

            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()


        ]);
   
       Mail::send("emails.forget-password", ['token' => $token], function ($message) use ($request){
           $message->to($request->email);
           $message->subject("Reset Pasword");
       });
        
        return redirect()->to(route("enter-token"))
        ->with("success", "We have send an email containe token to reset password.");

                
    }

    public function entertokenpost(Request $request)
    {

        $request->validate([
            'token' => "required",
            'email' => "required|email|exists:password_resets"
        ]);

        $t = DB::table("password_resets")->where(["token" => $request->token])->where(["email" => $request->email]);
       if($t != null){

        return redirect()->to(route("reset.password"));

       }else{

        return redirect()->to(route("enter-token"))->with("error", "Wrong Token");


       }
   
       
                
    }

    public function resetPassword() {

        return view("auth.new-password");
    }

    public function resetPasswordPost(Request $request) {

        $request->validate([
            'email' => "required|email|exists:users",
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);

        

       

        User::where("email" , $request->email)->update(["password" => Hash::make($request->password)]);

        DB::table("password_resets")->where(["email" => $request->email])->delete();
        return redirect()->to(route("login"))->with("success", "Password reset success");
        
        
    }

    }






   
