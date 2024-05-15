<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;

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

Route::controller(SeriesController::class)->group(function () {
    Route::get('/series/', 'index')->name("series.index");
    Route::get('/series/criar', 'create')->name("form_criar_serie");
    Route::post('/series/criar', 'store');
    Route::delete('/series/{id}', 'destroy')->name("form_remover_serie");
});