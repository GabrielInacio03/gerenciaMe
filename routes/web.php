<?php
use App\Http\Controllers\CartaoController;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/Restrito/default', function (){
    return view('/Restrito/default');
})->middleware('auth');


Route::resource('/Restrito/cartaos', 'CartaoController')->middleware('auth');
Route::resource('/Restrito/despesas', 'DespesaController')->middleware('auth');
Route::resource('/Restrito/receitas', 'ReceitaController')->middleware('auth');