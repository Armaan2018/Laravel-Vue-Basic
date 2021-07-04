<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TeacherController;

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



Route::get('demo',function(){
	return view('demo-compo');
});


Route::get('card',function(){
	return view('card-compo');
});



// Route::get('newtest', [TestController::class, 'basic']);


Route::get('teacher', [TeacherController::class, 'basicView']);