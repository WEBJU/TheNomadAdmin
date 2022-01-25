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

Route::get('login',[UserController::class,'login'])->name('login.post');
Route::get('/report',function(){
  return view('layout.reports');
});
Route::get('view',function(){
  return view('layout.index');
});
Route::get('assign',function(){
  return view('layout.assign');
});
Route::get('respond',function(){
  return view('layout.respond');
});
Route::get('single/{id}',function(){
  return view('layout.single');
});
// Route::get('logout',function(){
//   return view('layout.assign');
// });
