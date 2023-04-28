<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Practice extends Controller
{
    //
    public function index($user){
        return ['name'=>"anil",'age'=>27];
    }
}
