<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

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

Route::get('error_logs_for_dev', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);

//dashboard route
Route::get('/home', [HomeController::class, 'index'])->name('admin.home');
Route::get('/lysaght', [HomeController::class, 'getLysaghtLeads'])->name('admin.lysaght');
Route::get('/durashine', [HomeController::class, 'getDurashineLeads'])->name('admin.durashine');
