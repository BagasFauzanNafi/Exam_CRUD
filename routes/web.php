<?php

use App\Http\Controllers\BelajarController;
use App\Models\Belajar;
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

Route::get('/index', [BelajarController::class, 'index']);
Route::get('/add', [BelajarController::class, 'add']);
Route::post('/store', [BelajarController::class, 'create']);
Route::get('{id}/edit', [BelajarController::class,"edit"]);
Route::put('/update/{id}', [BelajarController::class,"update"]);
Route::delete('/update/{id}', [BelajarController::class,"destroy"]);

