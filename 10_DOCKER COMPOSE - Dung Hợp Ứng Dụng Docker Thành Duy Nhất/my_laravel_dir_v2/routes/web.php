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
    return DB::table('test')->insert([
        'id'=>2,
        'name' =>4
    ]);
    return DB::table('test')->get();
    return view('welcome');
});
Route::get('/get', function () {
    return DB::table('test')->get();
    return view('welcome');
});




// Chạy http://localhost:8000/public/
