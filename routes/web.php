<?php

use App\Http\Controllers\data_controller;
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
    return view('welcome');
});

Route::post('verify',[data_controller::class , 'verify']);
Route::post('confirm',[data_controller::class,'confirm']);
Route::post('new_pass',[data_controller::class,'new_pass']);