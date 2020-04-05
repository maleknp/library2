<?php

namespace App\Http\Controllers;
use App\user;
use Illuminate\Http\Request;
use Auth;
use Hash;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile', array('user'=> Auth::user()) );
    }

    public function edit()
    {
        return view('edit-profile', array('user'=> Auth::user()));
    }

    public function update($id){
       
        $user = user::find($id);

        if(request()->file('avatar')){
  
          $newimagePath = request()->file('avatar')->store('public');
          $user->avatar = str_replace('public', '', $newimagePath);
      }

      $user->name= request('name');
      $user->number= request('number');

      $user->save();
      return redirect()->route('profile',array('user'=> Auth::user()));
    }

    public function showChangePasswordForm(){

        return view('auth.changepassword');   
     }

     public function __construct()
     {
         $this->middleware('auth');
     }



     public function changePassword(Request $request){

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:8|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success","Password changed successfully!");

    }


}


