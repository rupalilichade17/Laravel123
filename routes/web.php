<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mycontrollerr;
use App\Http\Controllers\Practice;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FetchDataController;
use App\Http\Controllers\UserAuth;
use App\Http\controllers\AddMember;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AccessorController;
use App\Http\Controllers\MutatorController;
use App\Http\Controllers\otoRelationController;
// use App\Http\Controllers\MembersController;

/*
|--------------------------------------------------------------------------
| Web Routes n
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Route::get('/about{name}', function ($name) {
//     // echo $name;
//     return view('about', ['name'=>$name]);
// });
// Route::get('/about', function () {
//     // echo $name;
//     return view('about');
// });


// Route::get('/', function () {
//     return view('index');
// });
// Route::get('about',[demo::class, 'getdata']);
// Route::view('/form', 'about');


// Route::get('about', [mycontrollerr::class, 'index']);
// Route::view('/about', 'about');

// Route::get("users/{user}",[mycontrollerr::class,'index']);
// Route::get('/users', function () {
//     return view('users');
// });
// Route::get("users/{user}",[practice::class,'index']);
// Route::view('users/{user}',"users");

// Route::get("users",[UserController::class,'viewLoad']);

// Route::post("users",[UserController::class,'getData']);

// Route::view("home","home")->middleware('protectedPage'); 
// Route::view("noaccess","noaccess");
// Route::group(['middleware'=>['protectedPage']],function(){
//    Route::view("users","users")->middleware('protectedPage');

   Route::get('/', function () {
    return view('index');
});
// });
// Route::get('users',[FetchDataController::class,'index']);
// Route::get('users',[FetchDataController::class,'getData']);
// Route::get('/users',[UserController::class,'index']);
// Route::delete('users',[UserController::class,'testRequest']);
// Route::view("login",'users');



// Route::post("user",[UserAuth::class,'userLogin']);
// // Route::view("login",'login');
// Route::view("profile",'profile');

// Route::get('/login', function () {
//     if(session()->has('user'))
//     {
//       return redirect('profile');
//     }
//     return view('login');
// });


// Route::get('/logout', function () {
//     if(session()->has('user'))
//     {
//         session()->pull('user');
//     }
//     return redirect('login');
// });

// Laravel Flash Session Example
// Route::view('add','add');
// Route::get("addmember",[AddMember::class,'add']); 

// Upload file in Laravel
// Route::view('upload','uploade');
// Route::post('upload',[UploadController::class,'index']);

// User List From DB

// Route::get('list',[MemberController::class,'show']); 
// Route::view('add','addmember');
// Route::post('add',[MembersController::class,'addData']);

// Route::get('/delete/{c_id}',DeleteController::class,'deleteData');
Route::get('list',[MemberController::class,'list']);
Route::get('delete/{c_id}',[MemberController::class,'delete']);
Route::get('edit/{c_id}',[MemberController::class,'showData']);
Route::post('edit',[MemberController::class,'update']);

Route::get('customerRecord',[MemberController::class,'dbOperation']);
Route::get('list',[MemberController::class,'operation']);

// both table joining
Route::get('show',[EmployeeController::class,'show']);

//==========Accessors=============
// Route::get('member',[AccessorController::class,'index']);

// =============Mutator==============
Route::get('members',[MutatorController::class,'mutatorFun']);

// ===========One To One relationship===============
Route::get('data',[otoRelationController::class,'index']);
