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

Route::get('/perfil',[App\Http\Controllers\PerfilController::class, 'index'])->name('perfil')->middleware('verified');

Route::get('/altera-senha',[App\Http\Controllers\PerfilController::class, 'NovaSenha'])->name('perfilsenha')->middleware('verified');
Route::post('/novaSenha',[App\Http\Controllers\PerfilController::class, 'AlteraSenha'])->name('alteraSenha')->middleware('verified');

Route::get('/altera-endereco',[App\Http\Controllers\PerfilController::class, 'NovoEndereco'])->name('perfilendereco')->middleware('verified');
Route::post('/novaEndereco',[App\Http\Controllers\PerfilController::class, 'AlteraEndereco'])->name('alteraendereco')->middleware('verified');

Route::post('/perfil-foto',[App\Http\Controllers\PerfilController::class, 'mudaFoto'])->name('perfilFoto')->middleware('verified');

Route::post('/admin',[App\Http\Controllers\PerfilController::class, 'admin'])->name('admin')->middleware('verified');

Auth::routes(['verify' => true]);

Route::resource('chamado', 'App\Http\Controllers\ChamadoController')->middleware('verified');
Route::post('/chamado-filtro', [App\Http\Controllers\ChamadoController::class, 'indexFiltro'])->name('filtro')->middleware('verified');

Route::get('/adiciona', function () {
   return view('chamados.novoChamado');
})->name('adiciona')->middleware('verified');


Route::resource('chat', 'App\Http\Controllers\ChatController')->middleware('verified');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
