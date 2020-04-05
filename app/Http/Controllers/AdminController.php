<?php

namespace App\Http\Controllers;
use App\user;
use App\all;
use Auth;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function add(){
        $all = all::latest()->get();
        if(Auth::user()->admin == 1){
            return view('additions',['all'=>$all]);
        }else{
            return redirect()->route('home')->with('message', 'You are not allowed to enter this Link');          
        }
    }

    public function users(){
        $user = user::latest()->get();
        if(Auth::user()->admin == 1){
            return view('users',['user'=>$user]);
        }else{
            return redirect()->route('home')->with('message', 'You are not allowed to enter this Link');           
        } 
    }

    public function delete($id)
    {
         user::find($id)->delete();

         return redirect()->back();
     }
}
