<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreController;
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

Route::get('/', [PrincipalController::class, 'index'])->name('principal.index');
Route::get('/sobrenos', [SobreController::class, 'index'])->name('sobre.index');
Route::get('/contato', [ContatoController::class, 'index'])->name('contato.index');
Route::get('/login', function() {return "Login";})->name('login.index');


Route::prefix('/app')->group(function(){
    Route::get('/clientes', function() {return "Clientes";})->name('app.clientes');
    Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('app.fornecedores');
    Route::get('/produtos', function() {return "<h1>Produtos</h1>";})->name('app.produtos');
});

Route::fallback(function() {
    echo "A rota acessada não existe, <a href='/'>clique no link</a> para ir para a página inicial!";
});


