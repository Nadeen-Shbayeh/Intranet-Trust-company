<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request): RedirectResponse
    {
        $id = Auth::id();
        $user = User::find($id);
      
   
        $user->name = $request->input('name');
       
        $user->address = $request->input('address');
        
        $user->mobile_num = $request->input('mobile_num');

        if($request->hasFile('file'))
        {
            $filename = '';
            $fileName = time() . $request->file('file')->getClientOriginalName(); 
            $path = $request->file('file')->storeAs('img', $fileName, 'public');
            $request['file'] = '/storage/' . $path;
            $user->file = $fileName;
        }

        $user->update();
      

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

  
}
