<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [MainController::class, 'getPageData']);
Route::get('/addimage', [MainController::class, 'addNewImage']);
Route::post('/saveimage', [MainController::class,'saveImage']);
Route::get('/all', [MainController::class, 'getAll']);
Route::get('/delete/{id}', [MainController::class, 'delete']);
Route::get('/addabout', [MainController::class, 'addAbout']);
Route::post('/saveabout', [MainController::class,'saveAbout']);