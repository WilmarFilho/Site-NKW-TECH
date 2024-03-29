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
})->name('index');

Route::get('/pagina', function () {
   return view('index_secundaria');
})->name('pagina');

   // Rota de sucesso no pagamento //

Route::get('/sucess/{session_id}', [App\Http\Controllers\PagamentoController::class, 'pagamentoSucesso'])->name('pagamento-sucesso');

Route::post('/webhook', [App\Http\Controllers\WebhookController::class, 'webhook'])->name('webhook');

Route::post('/checkout', [App\Http\Controllers\PagamentoController::class, 'checkout'])->name('checkout');

Route::post('/portal', [App\Http\Controllers\PagamentoController::class, 'portal'])->name('portal');

   // Plataforma //

// Usuario sem acesso 

Route::get('/assinatura', [App\Http\Controllers\PagamentoController::class, 'assinar'])->name('assinar')->middleware('verified');

// Home 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified')->middleware('premium');
Auth::routes(['verify' => true]);

// Perfil

Route::get('/perfil',[App\Http\Controllers\PerfilController::class, 'index'])->name('perfil')->middleware('verified')->middleware('premium');

Route::get('/ajudaAnyDesk',[App\Http\Controllers\PerfilController::class, 'ajudaAnyDesk'])->name('ajuda')->middleware('verified')->middleware('premium');

Route::get('/perfil/{id}',[App\Http\Controllers\PerfilController::class, 'perfilUser'])->name('perfilUser')->middleware('verified')->middleware('premium');

Route::get('/altera-senha',[App\Http\Controllers\PerfilController::class, 'NovaSenha'])->name('perfilsenha')->middleware('verified')->middleware('premium');
Route::post('/novaSenha',[App\Http\Controllers\PerfilController::class, 'AlteraSenha'])->name('alteraSenha')->middleware('verified')->middleware('premium');

Route::get('/altera-endereco',[App\Http\Controllers\PerfilController::class, 'NovoEndereco'])->name('perfilendereco')->middleware('verified')->middleware('premium');
Route::post('/novaEndereco',[App\Http\Controllers\PerfilController::class, 'AlteraEndereco'])->name('alteraendereco')->middleware('verified')->middleware('premium');

Route::post('/perfil-foto',[App\Http\Controllers\PerfilController::class, 'mudaFoto'])->name('perfilFoto')->middleware('verified')->middleware('premium');

// Chamados

Route::resource('chamado', 'App\Http\Controllers\ChamadoController')->middleware('verified')->middleware('premium');
Route::get('/chamado-feedback', [App\Http\Controllers\ChamadoController::class, 'novofeedback'])->name('feedback')->middleware('verified')->middleware('premium');
Route::post('/chamado-filtro', [App\Http\Controllers\ChamadoController::class, 'indexFiltro'])->name('filtro')->middleware('verified')->middleware('premium');

Route::get('/adiciona', function () {
   return view('chamados.novoChamado');
})->name('adiciona')->middleware('verified')->middleware('premium');

Route::resource('chat', 'App\Http\Controllers\ChatController')->middleware('verified')->middleware('premium');

// Montagem de pcs

Route::get('/montagem/{tipo}', [App\Http\Controllers\MontagemController::class, 'index'])->name('montagem')->middleware('verified')->middleware('premium');

Route::post('/ajax-montagem/{tipo}/{valor}', [App\Http\Controllers\MontagemController::class, 'ajax'])->name('ajax-montagem')->middleware('verified')->middleware('premium');

// Para adms

Route::post('/admin',[App\Http\Controllers\PerfilController::class, 'admin'])->name('admin')->middleware('verified')->middleware('premium');
