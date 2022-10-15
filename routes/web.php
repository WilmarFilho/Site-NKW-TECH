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

   // Pagina inicial //

Route::get('/', function () {
   return view('index');
});

   // Rota de sucesso no pagamento //

Route::get('/sucess', [App\Http\Controllers\PagamentoController::class, 'pagamentoSucesso'])->name('pagamento-sucesso');

Route::post('/checkout', [App\Http\Controllers\PagamentoController::class, 'checkout'])->name('checkout');

   // Plataforma //

// Home 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified')->middleware('premium');
Auth::routes(['verify' => true]);

// Perfil

Route::get('/perfil',[App\Http\Controllers\PerfilController::class, 'index'])->name('perfil')->middleware('verified')->middleware('premium');

Route::get('/altera-senha',[App\Http\Controllers\PerfilController::class, 'NovaSenha'])->name('perfilsenha')->middleware('verified')->middleware('premium');
Route::post('/novaSenha',[App\Http\Controllers\PerfilController::class, 'AlteraSenha'])->name('alteraSenha')->middleware('verified')->middleware('premium');

Route::get('/altera-endereco',[App\Http\Controllers\PerfilController::class, 'NovoEndereco'])->name('perfilendereco')->middleware('verified')->middleware('premium');
Route::post('/novaEndereco',[App\Http\Controllers\PerfilController::class, 'AlteraEndereco'])->name('alteraendereco')->middleware('verified')->middleware('premium');

Route::post('/perfil-foto',[App\Http\Controllers\PerfilController::class, 'mudaFoto'])->name('perfilFoto')->middleware('verified')->middleware('premium');

// Chamados

Route::resource('chamado', 'App\Http\Controllers\ChamadoController')->middleware('verified')->middleware('premium');
Route::post('/chamado-filtro', [App\Http\Controllers\ChamadoController::class, 'indexFiltro'])->name('filtro')->middleware('verified')->middleware('premium');

Route::get('/adiciona', function () {
   return view('chamados.novoChamado');
})->name('adiciona')->middleware('verified')->middleware('premium');

Route::resource('chat', 'App\Http\Controllers\ChatController')->middleware('verified')->middleware('premium');

// Para adms

Route::post('/admin',[App\Http\Controllers\PerfilController::class, 'admin'])->name('admin')->middleware('verified')->middleware('premium');
