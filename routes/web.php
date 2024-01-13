<?php

use App\Http\Controllers\fiturlivecode;
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
    return view('livecode');
});
Route::get('/tes', function () {
    return view('soal');
});
Route::get('/soalukk', [fiturlivecode::class, 'index'])->name('soal.index');

route::post('/', [fiturlivecode::class, 'store']);
