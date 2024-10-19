<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ordinateurController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('ajouter',[ordinateurController::class,'ajouter']);
Route::get('supprimer',[ordinateurController::class,'supprimer']);
Route::get('modifier',[ordinateurController::class,'formodifier']);
Route::post('modifier',[ordinateurController::class,'modifier']);
