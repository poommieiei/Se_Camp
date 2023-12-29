<?php
use Illuminate\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome'); //welcome.blade.php
});

Route::get('/my-route', function(){

    $data = ['val_a' => 'Hello World!!!!!!'];

    $data['val_b'] = "Laravel";

    return view('myfolder.myPage',$data);
});


Route::post('/my-route', function(Request $req){
    // $data['myinput'] = $req->input('myinput');
    // $data['myinput'] = "laravel";
    return view('test',$data);
});
