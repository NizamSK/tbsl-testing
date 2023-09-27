<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\BaseController;

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
//     return view('welcome');
// });

Auth::routes();

Route::get('lysaght', [HomeController::class, 'lysaght'])->name('lysaght');
Route::post('lysaght/store', [HomeController::class, 'lysaghtStore'])->name('lysaght.store');
Route::get('durashine', [HomeController::class, 'durashine'])->name('durashine');
Route::post('durashine/store', [HomeController::class, 'durashineStore'])->name('durashine.store');
Route::post('getcitiesbystateid', [BaseController::class, 'getCityFromState'])->name('cities.by.stateid');
