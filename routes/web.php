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

Route::get("/registroclube", [Main::class, "registroclube"]);
Route::get("/registrojogador", [Main::class, "registrojogador"]);
Route::get("/registrotorneio", [Main::class, "registroTorneio"]);
Route::get("/", [Main::class, "time"])->name('home');
