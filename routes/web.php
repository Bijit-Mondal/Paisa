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


Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'role:guest', 'prefix' => 'guest', 'as' => 'guest.'], function () {
        Route::get('expenses', \App\Http\Livewire\Expenses::class)->name('expenses');
    });

    Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::get('item', \App\Http\Livewire\ItemGroups::class)->name('admin');
        Route::get('add-item',\App\Http\Livewire\Items::class)->name('admin-add-item');
    });
});
