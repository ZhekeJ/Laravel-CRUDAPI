<?php

namespace App\Http\Controllers;

use App\Models\Customer_table;
use Illuminate\Http\Request;


class DataController extends Controller
{
    function DataTableindex(){

        $customerData = Customer_table::all();
        // return $customerData;
        return view('DataTable', ['customerData'=>$customerData]);
    }

    function DataUpdateIndex($id){
        // return $id;
        $customerData = Customer_table::where('id', $id)->get();
        // return $customerData;
        return view('DataUpdate', ['profile'=>$customerData]);
    }

    function DataUpdate(Request $request){
        $id = $request->id;
        $name = $request->input('name');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $t_amount = $request->input('t_amount');

        $isUpdateSuccess = Customer_table::where('id', $id)->update(['name'=>$name, 'phone'=>$phone, 'address'=>$address, 'total_amount'=>$t_amount]);

        if (  $isUpdateSuccess) echo '<h1>Fields updated successfully</h1>';
        else echo '<h1>Failed to update the details</h1>';
    }
}
