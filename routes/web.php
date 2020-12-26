<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;

use App\Http\Controllers\ImageController;


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


Route::get('upload-images',[ImageController::class,'index']);
Route::post('upload-images',[ImageController::class,'storeImage'])->name('images.store');
