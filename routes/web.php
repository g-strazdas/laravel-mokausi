<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
tvarkingas kodas: vartotojas paspaudžia ant link, tada route žino
į kurį controller kreiptis ir kurį controller metodą(function) paleisti, o
controlleryje funkcija gražina mūsų sukurtą view demo.blade.php
*/
Route::get('/',[CompanyController::class, 'index']);
Route::get('/add-company',[CompanyController::class, 'addCompany']);
Route::post('/store', [CompanyController::class, 'store']);
Route::get('/imone/{company}',[CompanyController::class, 'showCompany']);
Route::get('/imone/delete/{company}',[CompanyController::class, 'deleteCompany']);
Route::get('/imone/update/{company}',[CompanyController::class, 'updateCompany']);
Route::post('/update/{company}',[CompanyController::class, 'storeUpdate']);
