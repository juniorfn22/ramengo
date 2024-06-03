<?php

use App\Http\Controllers\RamenController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/broths', [RamenController::class, 'getBroths']);
Route::get('/proteins', [RamenController::class, 'getProteins']);
Route::post('/order', [RamenController::class, 'createOrder']);
