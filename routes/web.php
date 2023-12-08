<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------*/

//ESP routes
use App\Http\Controllers\InicioController;
use App\Http\Controllers\AcercaDeController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\FondosController;
use App\Http\Controllers\InvestigacionController;
use App\Http\Controllers\OpereOnlineController;
use App\Http\Controllers\AbrirCuentaController;
use App\Http\Controllers\RegulacionesController;
use App\Http\Controllers\SeleccionarTipoCuentaController;

Route::get('/', InicioController::class);
Route::get('/acercade', AcercaDeController::class);
Route::get('/servicios', ServiciosController::class);
Route::get('/fondos', FondosController::class);
Route::get('/investigacion', InvestigacionController::class);
Route::get('/opereonline', OpereOnlineController::class);
Route::get('/abrircuenta', AbrirCuentaController::class);
Route::get('/regulaciones', RegulacionesController::class);
Route::get('/seleccionartipocuenta', SeleccionarTipoCuentaController::class);

//ENG routes
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OpenAccountController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FundsController;
use App\Http\Controllers\ResearchController;
use App\Http\Controllers\ServicesController;

Route::get('/home', HomeController::class);
Route::get('/openaccount', OpenAccountController::class);
Route::get('/about', AboutController::class);
Route::get('/funds', FundsController::class);
Route::get('/research', ResearchController::class);
Route::get('/services', ServicesController::class);

//FORM routes
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ContactController;

Route::post('/newsletter', NewsletterController::class);
Route::post('/contact', ContactController::class);