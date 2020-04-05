<?php

namespace App\Http\Controllers;
use App\all;
use App\materials;
use App\sections;
use Auth;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index($id){

      $materials = materials::latest()->get();
      $name = sections::find($id);
        return view('material', ['materials'=>$materials,'name'=>$name,'id'=>$id]);
  
      }
    
      public function store()
      {

            $mate = materials::latest()->get();
            $all=new all;
            $all->type= request('type');
            $all->code= strtolower(request('code'));
            $all->name= request('name');
            $all->email= Auth::user()->email;
            $all->img = request()->file('img')->store('public');
            $all->img = str_replace('public', '', $all->img);         
            $all->mate_id=0;
            foreach($mate as $materials){
              if($all->code == $materials->course_code){
                     $all->mate_id=$materials->id;
              }
          }
          if($all->mate_id == 0){
            return redirect()->route('add')->with('message', 'This Course Code is not Available in Faculty of Science');
          }elseif($all->type == '0'){
            return redirect()->route('add')->with('message', 'File Type Must Be Chosen');
          }else{
            $all->save();
            return redirect()->route('home')->with("success","Your Request Has Been Sent, it will be reviewes and added soon, Thanks for your help...");
          }
     }
    
}
