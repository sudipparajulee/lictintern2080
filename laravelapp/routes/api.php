<?php

use App\Http\Controllers\Api\NoticeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/notices', [NoticeController::class, 'index']);
Route::post('/notice/store', [NoticeController::class, 'store']);
Route::get('/notice/edit/{id}', [NoticeController::class, 'edit']);
Route::post('/notice/update/{id}', [NoticeController::class, 'update']);
Route::post('/notice/delete', [NoticeController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
