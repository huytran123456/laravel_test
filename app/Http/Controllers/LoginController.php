<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    //
    function display(Request $request){
         $request->validate([
             'username'=>'required|email',
             'password'=>'required'
         ]);
         $query=DB::table('users')->where([['email','=',$request->input('username')],['password','=',md5($request->input('password'))]])->first();
         if($query!=null){
              return redirect()->route('welcome');
         }
         else{
             return back()->with('errorLogin','Invalid Login');
         }
    }
    function profile(Request $request){

    }
}
