<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Facades\Http;
use DB;
// use App\Http\controllers\UserController;


class UserController extends Controller
{
    // 
    // public function viewLoad(){
    //     $data=['anil','Triweni','ankit'];
    //    return view('users',['user'=>$data]);
    // }

    // public function getData(Request $req){
    //     $req->validate(['username'=>'required | max:10',
    //     'userpassword'=>'required |min:5'
    // ]);
    //     return $req->input();
    // }

    // function index(){


    // $Students = DB::select("select * from Students");
    // return view('users',['Students'=>$Students]);
    // }

    function testRequest(Request $req){
     
        return $req->input();
    }
}
