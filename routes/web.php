<?php

use App\Http\Controllers\ChaoticController;
use App\Http\Controllers\LawfulController;
use Illuminate\Support\Facades\Route;

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

Route::get('/lawful/create', [LawfulController::class, 'create']);
Route::put('/lawful/update', [LawfulController::class, 'update']);

Route::put('/chaotic/create', [ChaoticController::class, 'create']);
Route::get('/chaotic/update', [ChaoticController::class, 'update']);