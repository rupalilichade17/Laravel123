<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class MembersController extends Controller
{
    //
    function addData(Request $req)
    {
       $Customer = new Customer;
       $Customer->c_id=$req->c_id;
       $Customer->c_name=$req->c_name;
       $Customer->c_product=$req->c_product;
       $Customer->c_city=$req->c_city;
       $Customer->save();
       return redirect('add');
    }

}
