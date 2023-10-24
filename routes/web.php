<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\FoundsController;
use App\Http\Controllers\ResearchController;
use App\Http\Controllers\OnlineOperationController;
use App\Http\Controllers\OpenAccountController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RegulationsController;

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

// Route::get('/', function () {
//     return view('home')->name('home');
// });

Route::get('/', HomeController::class);

Route::get('/about', AboutController::class);

Route::get('/services', ServicesController::class);

Route::get('/founds', FoundsController::class);

Route::get('/research', ResearchController::class);

Route::get('/onlineoperation', OnlineOperationController::class);

Route::get('/openaccount', OpenAccountController::class);

Route::get('/menu', MenuController::class);

Route::get('/regulations', RegulationsController::class);