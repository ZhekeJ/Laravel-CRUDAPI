<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\DeleteController;

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

Route::get('/', [HomeController::class, 'HomeIndex']);
Route::post('dataInsert', [HomeController::class, 'Datainsert']);

Route::get('/customerData', [DataController::class, 'DataTableindex']);
Route::get('/edit{id}', [DataController::class, 'DataUpdateIndex']);
Route::post('/dataUpdate{id}', [DataController::class, 'DataUpdate']);

Route::get('/deletePage{id}', [DeleteController::class, 'DeleteActionDelete']);
Route::get('/delete{id}', [DeleteController::class, 'DeleteData']);
