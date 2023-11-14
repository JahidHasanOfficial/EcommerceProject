<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function contactAdd(){
       return view('layouts.guest');
    }
    public function contactStore(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'phone'=> 'required',
            'email'=> 'required',
            'address'=> 'required',
            'message'=> 'required',

        ]);
       Contact::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'address'=>$request->address,
            'message'=>$request->message,
        ]);
        return redirect()->back()->with('success', 'Form Submit Successfull');
}
}