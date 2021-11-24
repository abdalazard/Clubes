<?php

use App\Http\Controllers\Main;
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

Route::get('/registro_clube', ["Main@registroClube"])->name('registro_clube');
Route::get('/registro_jogador', ["Main@registroJogador"])->name('registro_jogador');
Route::get('/', ['Main@time'])->name('home');  