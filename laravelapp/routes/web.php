<?php

use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
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

Route::get('/',[PagesController::class,'index']);
Route::get('/about',[PagesController::class,'about']);
Route::get('/contact',[PagesController::class,'contact']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/notice',[NoticeController::class,'index'])->name('notice.index');
    Route::get('/notice/create',[NoticeController::class,'create'])->name('notice.create');
    Route::post('/notice/store',[NoticeController::class,'store'])->name('notice.store');
    Route::get('/notice/{id}/edit',[NoticeController::class,'edit'])->name('notice.edit');
    Route::post('/notice/{id}/update',[NoticeController::class,'update'])->name('notice.update');
    Route::delete('/notice/destroy',[NoticeController::class,'destroy'])->name('notice.destroy');

    //Clients
    Route::get('/client',[ClientController::class,'index'])->name('client.index');
    Route::get('/client/create',[ClientController::class,'create'])->name('client.create');
    Route::post('/client/store',[ClientController::class,'store'])->name('client.store');
    Route::get('/client/{id}/edit',[ClientController::class,'edit'])->name('client.edit');
    Route::post('/client/{id}/update',[ClientController::class,'update'])->name('client.update');
    Route::delete('/client/destroy',[ClientController::class,'destroy'])->name('client.destroy');



    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
