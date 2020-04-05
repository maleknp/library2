<?php

namespace App\Http\Controllers;
use App\all;
use App\materials;
use App\type;
use App\sections;

use Illuminate\Http\Request;

class AllController extends Controller
{
    public function index($id){
      $alls = all::latest()->get();
      $name = materials::find($id);
      return view('mada' ,['alls'=>$alls,'id'=>$id,'name'=>$name]);
  
      }

      public function edit($id){
        $type = type::latest()->get();
        $alls = all::find($id);
        return view('edit', [
            'alls' => $alls,
            'type'=>$type
            ]);
     }

     public function update($id){
       
      $mate = materials::latest()->get();
      $all = all::find($id);
      if(request()->file('img')){

        $newimagePath = request()->file('img')->store('public');
        $all->img = str_replace('public', '', $newimagePath);
    }


    $all->type= request('type');
    $all->code= strtolower(request('code'));
    $all->name= request('name');
    $all->mate_id=0;
    foreach($mate as $materials){
      if($all->code == $materials->course_code){
             $all->mate_id=$materials->id;
      }
    }
    if($all->mate_id == 0){
      return redirect()->route('edit',['id'=>$id])->with('message', 'This Course is not Available in Faculty of Science');
    }else{
      $all->save();
      return redirect()->route('home')->with("success","Changes Complete");
    }
  }

  public function accept($id){
    $all = all::find($id);
    $all->number=true;
    $all->save();
    return redirect()->route('mada',['id'=>$all->mate_id]);
  }

     public function delete($id)
    {
         all::find($id)->delete();

         return redirect()->back();
     }
    
     public function download($id){
       $dl = all::find($id);
       return response()->download(public_path('storage'.$dl->img), $dl->name);
     }

     public function info($id){
       $all = all::find($id);
       $mate = materials::find($all->mate_id);
       $section = sections::find($mate->id_section);
       
       return view('info',['all'=>$all , 'section'=>$section]);
     }

}
