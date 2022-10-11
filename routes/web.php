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
});

Route::get('/perfil',[App\Http\Controllers\PerfilController::class, 'index'])->name('perfil');

Route::get('/altera-senha',[App\Http\Controllers\PerfilController::class, 'NovaSenha'])->name('perfilsenha');
Route::post('/novaSenha',[App\Http\Controllers\PerfilController::class, 'AlteraSenha'])->name('alteraSenha');

Route::get('/altera-endereco',[App\Http\Controllers\PerfilController::class, 'NovoEndereco'])->name('perfilendereco');
Route::post('/novaEndereco',[App\Http\Controllers\PerfilController::class, 'AlteraEndereco'])->name('alteraendereco');

Route::post('/perfil-foto',[App\Http\Controllers\PerfilController::class, 'mudaFoto'])->name('perfilFoto');

Route::post('/admin',[App\Http\Controllers\PerfilController::class, 'admin'])->name('admin');

Auth::routes();

Route::resource('chamado', 'App\Http\Controllers\ChamadoController');

Route::get('/adiciona', function () {
   return view('chamados.novoChamado');
})->name('adiciona');


Route::resource('chat', 'App\Http\Controllers\ChatController');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
