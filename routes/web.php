<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\Auth\LoginController;

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

Route::prefix('admin')->group(function(){
    Auth::routes(['register'=>false]);
    Route::get('/login', function () { return view('admin/auth/login'); })->name('login');
    Route::post('/login',[LoginController::class,'authenticate'])->name('login');

    Route::middleware(['auth'])->group(function(){
        Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
        require __DIR__.'/admin.php';
    });
});
