<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

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


Route::get('/novo-arquivo', function () {
    return view('teste01');
});

Route::get('/novo-arquivo1', function () {
    return view('teste02');
});

Route::get('/novo-arquivo', [AlunoController::class, 'index']);