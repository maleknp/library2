<?php

namespace App\Http\Controllers;
use App\type;

use Illuminate\Http\Request;

class SectionsController extends Controller
{
    public function index1(){

        return view('math_deepartment');
  
      }

      public function index2(){

        return view('nat');
  
      }

      public function index3(){

        return view('life');
  
      }

      public function index4(){

        return view('earth');
  
      }

      public function index5(){
        $type = type::latest()->get();
        return view('add',['type'=>$type]);
  
      }
}
