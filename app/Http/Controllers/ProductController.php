<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    //
    function display()
    {
       $users=DB::table('product')->select('product_type')->distinct()->get();
       return view('price',['users'=> $users ]);
    }
    function filter(Request $request)
    {
            $output='';
            $query = $request->product_type;
            $data=DB::table('product')->get();
            if($query!=[]){
            $data = DB::table('product')->whereIn('product_type',$query)->get();
            }
            foreach($data as $row)
            {
                $hey=$row->product_name;
		        $yo=htmlspecialchars(json_encode($hey));
                $output .= '

                <section class="shop-item" data-amount="%s" data-img="img/webshop/'. $row->product_image .'"
                            data-description="yeet" data-name="'. $row->product_name .'">
                       <p class="price-tag">
                           <span class="amount">'. $row->product_price .'</span>
                       </p>
                       <figure>
                           <img src="img/webshop/'. $row->product_image .'" alt="Warhammer 40,000: Recruit Edition">
                       </figure>
                       <p class="description">'. $row->product_name .'</p>
                       <button class="order-button" onclick="setupOrderButtonListener();autofill2('.$yo.');autofill('. $row->product_price .','. $row->product_id .');">Order now!</button>
                   </section>
               ';
           }

           echo $output;

    }

}
