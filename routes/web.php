<?php

use App\Http\Controllers\JogosController;
use App\Models\Jogo;
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

// Teste de Rotas (Estudo Apenas)
Route::get('/jogosEscolha/{id?}/{nome?}', function($id = null, $name = null) {
    return view('TesteRotas/jogos', ['idJogo' => $id, 'nomeJogo' => $name]);
}) -> where(['id' => '[0-9]+', 'name' => '[a-z]+']);

Route::get('/gamePg', function() { // Link que retorna view com iframe do Jogo
    return view('TesteRotas/quadro_game');
}) -> name('siteJogo');
// Fim do teste de rotas

Route::get('/', function () { // Página inicial
    return view('welcome');
});

Route::fallback(function() { // Tela de Erro 404
    return view('error404');
});

Route::prefix('jogos')->group(function() {
    Route::get('/', [JogosController::class, 'index'])->name('jogos-index');
    Route::get('/create', [JogosController::class, 'create'])->name('jogos-create');
    Route::post('/', [JogosController::class, 'store'])->name('jogos-store');
    Route::get('/{id}', [JogosController::class, 'show'])->where('id', '[0-9]+')->name('jogos-show');
    Route::get('/{id}/edit', [JogosController::class, 'edit'])->where('id', '[0-9]+')->name('jogos-edit');
    Route::put('/{id}/update', [JogosController::class, 'update'])->where('id', '[0-9]+')->name('jogos-update');
    Route::delete('/{id}', [JogosController::class, 'destroy'])->where('id', '[0-9]+')->name('jogos-destroy');
});