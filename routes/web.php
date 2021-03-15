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

use App\Http\Controllers\concinemy;
Route::get('/',[concinemy::class,'index']);

Route::get('/menu',[concinemy::class,'menu']);

Route::get('/soon',[concinemy::class,'soon']);

Route::get('/top',[concinemy::class,'top']);

//detail movie
Route::get('/dmr3',[concinemy::class,'dmr3']);
Route::get('/dmr2',[concinemy::class,'dmr2']);
Route::get('/dmr1',[concinemy::class,'dmr1']);
Route::get('/dr',[concinemy::class,'dr']);
Route::get('/dnysm1',[concinemy::class,'dnysm1']);
Route::get('/dnysm2',[concinemy::class,'dnysm2']);
Route::get('/dgm',[concinemy::class,'dgm']);
Route::get('/dudw',[concinemy::class,'dudw']);







//Route::get('/', function () {
//    return view('welcome');
//});
