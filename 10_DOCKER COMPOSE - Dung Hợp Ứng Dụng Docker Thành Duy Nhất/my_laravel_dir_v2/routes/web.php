<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/insert', function () {
    return DB::table('users')->insert([
        'name' =>"hieu",
        'email' =>"hieu". rand()."@gmail.com",
        'password' =>"hieu@gmail.com",
    ]);
});
Route::get('/get', function () {
    return DB::table('users')->get();
    return view('welcome');
});




// Chạy http://localhost:8000/public/
