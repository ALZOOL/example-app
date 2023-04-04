<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\NewsController;

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
//###### route login when not authorized
Route::get('login',function(){
    return 'must be login ';
})->name('login');
//##########
Route::group(['prefix' => 'users', 'middleware' => 'auth'],function(){
    Route::get('/', function () {
        return 'work';
});

});

Route::get('check',function(){
    return 'middleware';
})->middleware('auth');
//Route::get('show','Admin\SecondController@show'); this when u hav controller in diffrent path (namespace)
//Route::get('test','Admin\AdminController@admin');
Route::get('/test0', [AdminController::class, 'showString_0']);
Route::get('/test1', [AdminController::class, 'showString_1']);
Route::get('/test2', [AdminController::class, 'showString_2']);

//resources
Route::resource('landing', NewsController::class);