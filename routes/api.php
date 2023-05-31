<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(\App\Http\Controllers\LocataireController::class)->group(function(){
    Route::post('register', 'createLocataire');
    Route::post('login', 'loginLocataire');
    Route::post('synchro', 'Synchronisation');
});
Route::controller(\App\Http\Controllers\ProprietaireController::class)->group(function(){
    Route::get('listeproprio', 'listeProrietaire');
    Route::post('createproprio', 'createProprietaire');
    Route::post('loginproprio', 'loginProprietaire');
});
Route::get('pays', [\App\Http\Controllers\PaysController::class, 'listePays']);
Route::get('ville/{id}', [\App\Http\Controllers\VilleController::class, 'listeVille']);
Route::get('commune/{id}', [\App\Http\Controllers\CommuneController::class, 'listeCommune']);
