<?php

namespace App\Http\Controllers;

use App\Models\Customer_table;
use Illuminate\Http\Request;


class DeleteController extends Controller
{
    function DeleteActionDelete($id){
        // return $id;
        return view('DeletePage', ['id'=>$id]);
    }

    function DeleteData($id){
        //    return $id;

        $isDeleteSuccess = Customer_table::where('id', $id)->delete();

        if($isDeleteSuccess) echo '<h1>Fields have been successfully deleted</h1>';
        else echo '<h1>Failed to delete the details</h1>';
    }
}
