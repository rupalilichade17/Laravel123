<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class MutatorController extends Controller
{
    //

    function mutatorFun(){
         
        // return "Hello mutator";
         $Customer = new Customer;
         $Customer->id=4;
         $Customer->name="sdfffg";
         $Customer->c_product=5;
         $Customer->city="anfnjjg";
         $Customer->save();
        
    }
}
