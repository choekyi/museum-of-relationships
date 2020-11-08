<?php

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
use App\Http\Controllers\LettersController;
use App\Http\Controllers\PageController;

Route::view('/', 'index');

Route::view('/about', [PageController::class,'page']);

Route::get('/correspondences', [LettersController::class, 'list']);
Route::get('/letters', [LettersController::class, 'list']);


Route::get('/letter/{id}', [LettersController::class, 'view']);

Route::get('/people', [EntitiesController::class, 'people']);

Route::get('/person/{name}', [EntitiesController::class, 'entity']);

Route::get('/place/{name}', [EntitiesController::class, 'entity']);

Route::get('/artwork/{name}', [EntitiesController::class, 'entity']);
