<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;

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
Route::group(['middleware'=>'auth'],function(){
    Route::group(['prefix'=>'dashboard'],function(){
        Route::get('/',[HomeController::class,'index'])->middleware(['auth'])->name('dashboard');
        Route::resource('/users', HomeController::class);
//      Route::get('/users/create',[HomeController::class,'create']);
//      Route::post('/users/save',[HomeController::class,'store']);
    });
});

require __DIR__.'/auth.php';
