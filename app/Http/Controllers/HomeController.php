<?php

namespace App\Http\Controllers;

use App\Models\Customer_table;
use Illuminate\Http\Request;


class HomeController extends Controller
{

    //index
    function Homeindex(){

      return view ('Home'); 
    }
    
    // create   
    function Datainsert(Request $request){
      
        $name = $request->input('name');
        $phone =$request->input('phone');
        $address =$request->input('address');
        $t_amount =$request->input('t_amount');

        $isInsertSuccess = Customer_table::insert(['name'=>$name, 'phone'=>$phone, 'address'=>$address,'total_amount'=>$t_amount]);
        
        if ($isInsertSuccess) echo '<h1>Data has been successfully inserted</h1>';
        else echo '<h1>Failed to insert data into the database</h1>';
    }
}
