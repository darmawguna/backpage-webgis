<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SungaiController;
use App\Http\Controllers\WaterController;

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
    return view('frontpage.maps');
})->name('home');

Route::get('/dashboard', function () {
    return view('backpage.dashboard.index');
});
Route::get('/sungai',[SungaiController::class, 'index'])->name('sungai.index');
Route::get('/river', function () {
    return view('backpage.river');
})->name('dashboard.river');


// water
Route::resource('/water', WaterController::class);
