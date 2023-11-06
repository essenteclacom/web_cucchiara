<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\AcercaDeController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\FondosController;
use App\Http\Controllers\InvestigacionController;
use App\Http\Controllers\OpereOnlineController;
use App\Http\Controllers\AbrirCuentaController;
use App\Http\Controllers\MenusController;
use App\Http\Controllers\RegulacionesController;
use App\Http\Controllers\OpenAccountController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FoundsController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ContactController;

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

Route::get('/', InicioController::class);
Route::get('/acercade', AcercaDeController::class);
Route::get('/servicios', ServiciosController::class);
Route::get('/fondos', FondosController::class);
Route::get('/investigacion', InvestigacionController::class);
Route::get('/opereonline', OpereOnlineController::class);
Route::get('/abrircuenta', AbrirCuentaController::class);
Route::get('/menus', MenusController::class);
Route::get('/regulaciones', RegulacionesController::class);
Route::get('/openaccount', OpenAccountController::class);
Route::get('/about', AboutController::class);
Route::get('/founds', FoundsController::class);
Route::get('/home', HomeController::class);

Route::post('/newsletter', NewsletterController::class);
Route::post('/contact', ContactController::class);