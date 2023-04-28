<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class demo extends Controller
{
   function getdata(Request $req){

    return $req->input();
     
   }
}
