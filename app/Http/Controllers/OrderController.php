<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class OrderController extends Controller
{
    function test(Request $request){
        return $request->input();
    }
    //
    function add(Request $request){
           $request->validate([
                'name'=>'required|min:1|max:20',
                'city'=>'required',
                'country'=>'required',
                'zipcode'=>'required',
                'email'=>'required|email|max:255',
                'phone'=>'required',
                'product'=>'required'
           ]);
           $check=DB::table('product')->select([
                'product_name',
                'product_price',
                'product_quantity'
           ])->where('product_name','=',$request->input('product'))->get();
           $request['price']=$check->pluck('product_price')->first();
           $tr=$check->pluck('product_quantity')->first();
           if($tr<=0)
           {
               $mess='OUT OF STOCK';
               return back()->with('out','Out Of Stock');
           }
           $query=DB::table('orders')->insert([
               'name'=> $request->input('name'),
               'email'=>$request->input('email'),
               'phone'=>$request->input('phone'),
               'city'=>$request->input('city'),
               'country'=>$request->input('country'),
               'zipcode'=>$request->input('zipcode'),
               'product'=>$request->input('product'),
               'price'=>$request->input('price')
           ]);
           if($query){
               return back()->with('success','Order received!');
           }
           else{
               return back()->with('fail','Something wrong');
           }
    }
}
