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
})->name("Home");

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::group(['middleware' => 'auth'],function (){
    Route::group(['middleware' => 'Role:guest','prefix' => 'guest','as' => 'guest.'],function (){
        Route::resource('guest',\App\Http\Controllers\Guest\ExpenseController::class);
    });
    Route::group(['middleware' => 'role:admin','prefix' => 'admin','as' => 'admin'],function (){
        Route::resource('admin',\App\Http\Controllers\Admin\ItemsController::class);
    });
});
