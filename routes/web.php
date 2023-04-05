<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\saveDetailsController;
use App\Http\Controllers\seeDetailsController;
use App\Http\Controllers\deleteDetailsController;
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
Route::get('/send-details', [saveDetailsController::class, 'Details']);

Route::post('/send-details', [saveDetailsController::class, 'DetailsDataSave']);

Route::get('edit-details', [seeDetailsController::class, 'index']);
Route::get('edit/{id}', [seeDetailsController::class, 'show']);
Route::post('edit/{id}', [seeDetailsController::class, 'edit']);

Route::get('delete-records}', [deleteDetailsController::class, 'index']);
Route::get('delete/{id}', [deleteDetailsController::class, 'destroy']);