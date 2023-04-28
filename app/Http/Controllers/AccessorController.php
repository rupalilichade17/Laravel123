<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class AccessorController extends Controller
{
    //
    function index()
    {
        // return 'code will be here';

        return Customer::all();
    }
}
