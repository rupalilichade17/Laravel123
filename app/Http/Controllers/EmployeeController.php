<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EmployeeController extends Controller
{
    // 
    function show(){
        // return "Hello from join";
    // Show the all Data     
        // return DB::table('customers')->get();

//    Join the both table
//   return DB::table('customers')
//   ->join('company','customers.id',"=",'company.c_id')
//   ->get();

// Show the only one table data
//   return DB::table('customers')
//   ->join('company','customers.id',"=",'company.c_id')
//   ->select('customers.*')
//   ->get();
 

// show the table from one data
  return DB::table('customers')
  ->join('company','customers.id',"=",'company.c_id')
  ->where('customers.id',102)
  ->get();

    }
}
