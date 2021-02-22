<?php

namespace App\Http\Controllers;

use DebugBar\DebugBar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    //
    function add(Request $request)
    {

          $request->validate([
              'name'=> 'required|min:3|max:10',
              'email'=>'required|email|max:255',
              'subject'=>'required'
          ]);
          $query=DB::table('contact')->insert([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'subject'=>$request->input('subject')
   ]);

          if($query){

              return back()->with('success','Data has been inserted');
          }
          else{return back()->with('fail','Something wrong');}
    }

}
