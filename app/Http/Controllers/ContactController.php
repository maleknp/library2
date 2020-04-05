<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contactus');
    }

    public function store()
    {
        $data = request()->all();
        Mail::to('maleknp127@gmail.com')->send(new ContactFormMail($data));
        return redirect()->route('home')->with('success', 'Thanks for contacting us! ');
    }

}
