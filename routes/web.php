<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DLController;
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

Route::get('/', [HomeController::class, 'index']);

Route::Controller(DLController::class)->prefix("destination")->group(function(){
    Route::get('/', 'index');
    Route::get('/{id}', 'show');
});
<