<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/importFile', [ClientController::class, 'importFile'])->name('client.importFile');
Route::get('/getClientList', [ClientController::class, 'getClientList'])->name('client.getClientList');
Route::post('/deleteRow', [ClientController::class, 'deleteClient'])->name('client.deleteClient');
Route::get('/nameCountChart', [ClientController::class, 'getNameCount'])->name('client.nameCountChart');
Route::get('/genderCountChart', [ClientController::class, 'getGenderCount'])->name('client.genderCountChart');
Route::get('/mailCountChart', [ClientController::class, 'getMailCount'])->name('client.mailCountChart');
