<?php

use Illuminate\Support\Facades\Route;
use App\Models\chamado;

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
   return view('index');
   //return 'oi';
});

Auth::routes();

Route::resource('chamado', 'App\Http\Controllers\ChamadoController');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
