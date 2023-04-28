<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use DB;
use App\Models\Student;

class FetchDataController extends Controller
{
    //
  

    function getData(){
        return Student::all();
    }
}
