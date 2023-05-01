<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\HalamanController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::resource('siswa', SiswaController::class);

Route::get('/', [HalamanController::class,'index']);
Route::get('/kontak', [HalamanController::class,'kontak']);
Route::get('/tentang', [HalamanController::class,'tentang']);