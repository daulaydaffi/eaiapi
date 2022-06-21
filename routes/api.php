<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendapatanController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('pendapatan', [PendapatanController::class,'index']);
Route::post('pendapatan', [PendapatanController::class,'create']);
Route::get('/pendapatan/{no_resi}', [PendapatanController::class, 'select']);
Route::put('/pendapatan/{no_resi}', [PendapatanController::class, 'update']);
Route::delete('/pendapatan/{no_resi}', [PendapatanController::class, 'delete']);