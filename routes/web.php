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
use App\Http\Controllers\LetController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PeopleController;

Route::view('/', 'index');
Route::view('/about', [PageController::class,'page']);
Route::get('/correspondences', [LettersController::class, 'list']);
Route::get('/letters', [LettersController::class, 'list']);
Route::get('/letter/{id}', [LetController::class, 'view']);
Route::get('/entities', [PeopleController::class, 'people']);
Route::get('/entity/{name}', [EntitiesController::class, 'entity']);
