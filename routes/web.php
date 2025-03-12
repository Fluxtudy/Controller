<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PedidoController;

Route::resource('produtos', ProdutoController::class);
Route::resource('usuarios', UsuarioController::class);
Route::resource('pedidos', PedidoController::class);