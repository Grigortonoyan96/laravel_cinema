<?php

use Illuminate\Support\Facades\Route;

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

//
Route::match(['post','get'],'/add_film', function () {
    return view('newFilm');
});

Route::Post('/add', function(){
    return view('addFilm');
});

Route::resource('web',\App\Http\Controllers\cinema\cinemaStarController::class);

Route::match(['get','post'],'/newCategory',function (){
    return view('add_newCategory');
});




