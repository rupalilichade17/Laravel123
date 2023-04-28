<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use DB;


class MemberController extends Controller
{

    function list()
    {
        $data=customer::all();
        return view('list',['customers'=>$data]);
    }
    function delete($c_id)
    {
        // $data=customer::find($c_id);
        // $data->delete();
        DB::delete('delete from customers where c_id = ?',[$c_id]);
        echo "Record deleted successfully.<br/>";

        return redirect('list');
    }
    function showData($c_id)
    {
    //   return c ustomer::find($c_id);

       $customers=DB::select('select * from customers where c_id = ?',[$c_id]);
        // return  $customers;
        return view('edit',['customers'=>$customers]);

    }
    function update(Request $req)
    {
    //   return $req->input();
    
    
    $id = $req->input('c_id');
    $name = $req->input('c_name');
    $product = $req-> input('c_product');
    $city = $req-> input('c_city');

    $customers=DB::select('update  customers set c_name = ?, c_product = ?, c_city = ? where c_id = ?',[ $name, $product, $city, $id]);
    // $msg = "$customers record updated successfully";
 
    return redirect('list');
 
//Query builder 

    }
    // function dbOperation()
    // {
    //   return DB::table('customers')->get()->count();
    //   return DB::table('customers')
    //   ->where('c_city', 'Gondia')
    //   ->get();

     // INSERT DATA INTO TABLE
        // return $customers = DB::table('customers')
        // ->insert(
        //     [
        //         'c_id'=>102,
        //         'c_name'=>'Shabnum',
        //         'c_product'=>4,
        //         'c_city'=>'GautamNagar'
        //     ]
        //     );
 

    // Delete record in database
             //   return DB::table('customers')
    //   ->where('c_id', 102)
    //   ->deleted();

    // Update record in table

    // return DB::table('customers')
    // ->where('c_id',103)
    // ->update(
    //     [
            
    //                 'c_name'=>'Swati',
    //                 'c_product'=>4,
    //                 'c_city'=>'Mundiapar'
    //     ]
    //     );

    // }

    // Agregation Functions
    
    function operation()
    {
    //Average Function 
        // return DB::table('customers')->avg('c_id');

        // Sum Function 
        // sum all id's
        // return DB::table('customers')->sum('c_id');

        // use count function
        // count all record
                // return DB::table('customers')->count();
 
    // max Function used the Id's
        //    return DB::table('customers')->max('c_id');
        // return DB::table('customers')->max('c_name');


 // min Function used the Id's
 
//  return DB::table('customers')->min('c_id');
return DB::table('customers')->min('c_name');


    }
}

