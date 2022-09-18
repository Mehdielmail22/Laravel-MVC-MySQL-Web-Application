<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;
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
    return view('welcome');
});
Route::get('/produit/index', [ProduitController::class,'index']);
Route::get('/produit/create', [ProduitController::class,'create']);
Route::get('/produit/add', [ProduitController::class,'add']);
Route::get('/produit/{post}/delete', [ProduitController::class,'delete']);
Route::get('/produit/{post}/visite', [ProduitController::class,'visite']);
Route::get('/produit/{post}/edit', [ProduitController::class,'edit']);
Route::get('/produit/{post}/update', [ProduitController::class,'update']);
Route::get('/produit/chercher', [ProduitController::class,'chercher']);

