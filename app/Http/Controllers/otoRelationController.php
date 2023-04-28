<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Company;
use DB;

class otoRelationController extends Controller
{
    //
    function index()
    {
        // return "one to one relationship";

        // return Customer::find(103)->getCompany;

         $c_id = 102;
        $companies = DB::select('select * from companies where c_id = ?',[$c_id]);
        return['companies'=>$companies];
    }
}
