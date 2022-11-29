<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QnaController;
use App\Http\Controllers\FoodDBController;
use App\Http\Controllers\UploadController;

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
Route::get('/info', function () {
    return view('info');
});


Route::get('/barcode', [UploadController::class, 'index']);
Route::post('/upload', [UploadController::class, 'upload']);
Route::get('/select', [FoodDBController::class, 'select']);
Route::get('/save', [FoodDBController::class, 'save']);
Route::post('/store', [QnaController::class, 'store']);
Route::post('/delete', [QnaController::class, 'delete']);
// https://gravis.tistory.com/entry/Laravel-%ED%8C%8C%EC%9D%BC-%EC%97%85%EB%A1%9C%EB%93%9C-FileUpload

// Route::get('/barcode_qr_reader', 'App\Http\Controllers\UploadController@page');
// Route::post('/barcode_qr_reader/upload', 'App\Http\Controllers\UploadController@upload')->name('image.upload');

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/barcode', function () {
    return view('barcode');
});

Route::resource('qna', QnaController::class);
Route::resource('barcode', FoodDBController::class);


require __DIR__.'/auth.php';
