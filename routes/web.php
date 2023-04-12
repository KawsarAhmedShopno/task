<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/student', [App\Http\Controllers\StudentController::class, 'student'])->middleware('auth');


Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/index', [App\Http\Controllers\StudentController::class, 'index'])->name('index');
    Route::post('/save', 'App\Http\Controllers\StudentController@save');
        
   Route::patch('/update/{id}', ['as' => 'user.update', 'uses' => 'App\Http\Controllers\StudentController@update']);
        
    Route::delete('/delete/{id}', ['as' => 'user.delete', 'uses' => 'App\Http\Controllers\StudentController@delete']);
});


    

   

