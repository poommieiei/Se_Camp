<?php

use App\Http\Controllers\MyController;
use App\Http\Controllers\MyAuth;
use Illuminate\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\C_titles;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', [MyAuth::class, 'login_view'])->name('login');
Route::get('/register', [MyAuth::class, 'register_view']);
Route::get('/logout', [MyAuth::class, 'logout_process']);

Route::post('/login', [MyAuth::class, 'login_process']);
Route::post('/register', [MyAuth::class, 'register_process']);



Route::resource('titles', C_titles::class)->middleware('auth');




Route::get('/my-controller', [MyController::class, 'index']);
// Route::get('/my-controller2', 'App\Http\Controllers\MyController@index');
// Route::namespace('App\Http\Controllers')->group(function(){
//     Route::get('/my-controller3', 'MyController@index');
// });

// Route::resource('/my-controller4', MyController::class);

Route::get('/', function () {
    return view('welcome'); //welcome.blade.php
});

Route::get('/my-route', function(){
    // return view('myroute');
    //        Key    =>  Value
    $data = ['val_a' => 'Hello World!'];
    $data['val_b'] = "Laravel";
    return view('Myfolder.myPage',$data);
});


Route::post('/my-route', function(Request $req){
    $data['myinput'] =  $req->input('myinput');
    return view('myroute', $data);
});

Route::get('/my-multiple', function(){
    return view('Myfolder.Multiplication_Table');
});


Route::post('/my-multiple', function(Request $req){
    $data['myinput'] = $req->input('myinput');

    return view('Myfolder.Multiplication_Table',$data);
});
