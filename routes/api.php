<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendapatanController;
use App\Http\Controllers\StatuspaketController;
use App\Http\Controllers\LayananController;

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

Route::get('statuspaket', [StatuspaketController::class,'index']);
Route::post('statuspaket', [StatuspaketController::class,'create']);
Route::get('/statuspaket/{no_resi}', [StatuspaketController::class, 'select']);
Route::put('/statuspaket/{no_resi}', [StatuspaketController::class, 'update']);
Route::delete('/statuspaket/{no_resi}', [StatuspaketController::class, 'delete']);

Route::get('layanan', [LayananController::class,'index']);
Route::post('layanan', [LayananController::class,'create']);
Route::get('/layanan/{id_layanan}', [LayananController::class, 'select']);
Route::put('/layanan/{id_layanan}', [LayananController::class, 'update']);
Route::delete('/layanan/{id_layanan}', [LayananController::class, 'delete']);
