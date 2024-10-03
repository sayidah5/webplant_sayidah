<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\UserController;
use App\Models\Artikel;
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
Route::get('/',[UserController::class,'home']);

Route::get('/login', [UserController::class, 'login']);
Route::middleware(['App\Http\Middleware\statusLogin::class'])->group(function(){
    Route::get('/index', [ArtikelController::class, 'show']);
    Route::post('/search',[ArtikelController::class,'search']);
    Route::get('/artikelcreate/create',[ArtikelController::class,'create']);
    Route::post('/artikel/create',[ArtikelController::class,'add']);
    Route::get('/artikeledit/edit/{id}', [ArtikelController::class, 'edit']);
    Route::post('/artikel/edit/{id}',[ArtikelController::class,'update']);
    Route::get('/artikel/delete/{id}',[ArtikelController::class,'delete']);
    Route::get('/logout', [UserController::class,'logout']);
});
Route::post('/auth', [UserController::class,'auth']);
Route::get('/home',[UserController::class,'home']);
Route::get('/kategorihias',[UserController::class,'kategorihias']);
Route::get('/kategoribuah',[UserController::class,'kategoribuah']);
Route::get('/tentangkami',[UserController::class,'tentangkami']);
Route::get('/detailmawar/{id}',[UserController::class,'detailmawar']);
Route::get('/detailanggrek',[UserController::class,'detailanggrek']);
Route::get('/detailjandabolong',[UserController::class,'detailjandabolong']);
Route::get('/detaildahlia',[UserController::class,'detaildahlia']);
Route::get('/detailstroberi',[UserController::class,'detailstroberi']);
Route::get('/detailanggur',[UserController::class,'detailanggur']);
Route::get('/detailjeruk',[UserController::class,'detailjeruk']);
Route::get('/detaildurian',[UserController::class,'detaildurian']);
Route::get('/kategoribuah',[UserController::class,'kategoribuah']);
Route::get('/kategorihias',[UserController::class,'kategorihias']);
Route::get('/tipsperawatan',[UserController::class,'tipsperawatan']);
// Route::get('dashboard2',[ArtikelController::class,'dashboard2']);

