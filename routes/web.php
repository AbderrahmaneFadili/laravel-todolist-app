<?php

use App\Http\Controllers\TodoController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [TodoController::class, 'index']);
Route::get('/create', [TodoController::class, 'create']);
Route::post('/create', [TodoController::class, 'store']);
Route::get('/{id}/edit', [TodoController::class, 'edit']);
Route::post('/update', [TodoController::class, 'update']);
Route::get('/{id}/completed', [TodoController::class, 'completed']);
