<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TeacherController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::post('process', [App\Http\Controllers\TestController::class, 'store'])->name('form.process');

// Route::post('teacherprocess', [App\Http\Controllers\TeacherController::class, 'store'])->name('form.handle');

// Route::get('card', [App\Http\Controllers\TeacherController::class, 'allTeacher'])->name('teacher.handle');




Route::middleware('api')->group(function () {
    Route::resource('teachers', TeacherController::class);
});




