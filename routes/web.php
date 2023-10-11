<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;


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

Route::get('/',[UserController::class, 'utama'] );

Route::get('/biodata', [HomeController::class, 'bio']);

Route::post('/kirim', [HomeController::class, 'kirim']);

Route::get('/table', function () {
    return view('halaman.table');
});
Route::get('/data-table', function () {
    return view('halaman.data-Table');
});



