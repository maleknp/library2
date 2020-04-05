<?php

namespace App\Http\Controllers;
use App\coments;
use App\materials;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{

    
    /**
     * Create a new controller instance.
     *
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $coments = coments::latest()->get();
        return view('home',['coments'=>$coments , 'user'=> Auth::user()]);
    }


        public function commentsauth()
        {
    
                request()->validate([
                'comment' => 'required'
                ]);
    
              $coments=new coments;
              $coments->name=Auth::user()->name;
              $coments->email= Auth::user()->email;
              $coments->img= Auth::user()->avatar;
              $coments->comment= request('comment');
              $coments->save();
              return redirect('/home/#comment');
        }


        public function search()
        {

            $materials = materials::latest();          
            $materials_en = materials::latest();
            $materials_ar = materials::latest();


            $name = request('search');

            $materials->where('course_code', 'LIKE', '%' . $name . '%');
            $mycode = $materials->first();

            $materials_en->where('name_en', 'LIKE', '%' . $name . '%');
            $mycode_en = $materials_en->first();

            $materials_ar->where('name_ar', 'LIKE', '%' . $name . '%');
            $mycode_ar = $materials_ar->first();

            if($mycode)
            {
                  return redirect()->route('mada',['id' => $mycode->id]);
            }else if($mycode_en){
                return redirect()->route('mada',['id' => $mycode_en->id]);
            }else if($mycode_ar){
                return redirect()->route('mada',['id' => $mycode_ar->id]);
            }
            else{
                return redirect()->route('home')->with('message', 'This Course Not Found Please Try agein');          
            }

        }

}
