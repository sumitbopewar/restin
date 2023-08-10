<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MasterSizeController;
use App\Http\Controllers\SizeMMController;
use App\Http\Controllers\SizeInchController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\ThicknessController;
use App\Http\Controllers\HomeMattressController;
use App\Http\Controllers\RoyalMattressController;

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
// For Clear cache
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});



Route::get('/', [HomeController::class, 'index'])->name('/');


// admin dashboard 

Route::get('dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

// login 

Route::get('login', [LoginController::class, 'index'])->name('login');

Route::post('login', [LoginController::class, 'login']);

Route::get('logout', [LoginController::class, 'logout']);
//  login 

// user 
Route::get('add_user', [UserController::class, 'index'])->middleware(['auth'])->name('add_user');

Route::post('register', [UserController::class, 'register'])->name('register');

Route::get('user_list', [UserController::class, 'show'])->middleware(['auth'])->name('user_list');

Route::get('user/delete/{id}', [UserController::class, 'delete']);
// user 

// master size 
Route::get('master_size', [MasterSizeController::class, 'index'])->middleware(['auth'])->name('master_size');

Route::post('insertMsize', [MasterSizeController::class, 'store']);

Route::get('msize/delete/{id}', [MasterSizeController::class, 'destroy']);

// unit size 
Route::get('unit', [UnitController::class, 'index'])->middleware(['auth'])->name('unit');

Route::post('insertUnit', [UnitController::class, 'store']);

Route::get('unit/delete/{id}', [UnitController::class, 'destroy']);


// mm size 
Route::get('mm_size', [SizeMMController::class, 'index'])->middleware(['auth'])->name('mm_size');

Route::post('insertMM', [SizeMMController::class, 'store']);

Route::get('mm/edit/{id}', [SizeMMController::class, 'edit']);

Route::post('mm/update/{id}', [SizeMMController::class, 'update']);

Route::get('mm/delete/{id}', [SizeMMController::class, 'destroy']);

// inch size 
Route::get('inch_size', [SizeInchController::class, 'index'])->middleware(['auth'])->name('inch_size');

Route::post('insertInch', [SizeInchController::class, 'store']);

Route::get('inch/edit/{id}', [SizeInchController::class, 'edit']);

Route::post('inch/update/{id}', [SizeInchController::class, 'update']);

Route::get('inch/delete/{id}', [SizeInchController::class, 'destroy']);

// Thickness size 
Route::get('thickness', [ThicknessController::class, 'index'])->middleware(['auth'])->name('thickness');

Route::post('insertThickness', [ThicknessController::class, 'store']);

Route::get('thickness/delete/{id}', [ThicknessController::class, 'destroy']);

// homemattresss 
Route::get('home_mattress', [HomeMattressController::class, 'index'])->middleware(['auth'])->name('home_mattress');

Route::post('insertHomeMattress', [HomeMattressController::class, 'store']);

Route::get('home_mattress/edit/{id}', [HomeMattressController::class, 'edit']);

Route::post('home_mattress/update/{id}', [HomeMattressController::class, 'update']);

Route::get('home_mattress/delete/{id}', [HomeMattressController::class, 'destroy']);

// royal_mattresss 
Route::get('royal_mattress', [RoyalMattressController::class, 'index'])->middleware(['auth'])->name('royal_mattress');

Route::post('insertRoyalMattress', [RoyalMattressController::class, 'store']);

Route::get('royal_mattress/edit/{id}', [RoyalMattressController::class, 'edit']);

Route::post('royal_mattress/update/{id}', [RoyalMattressController::class, 'update']);

Route::get('royal_mattress/delete/{id}', [RoyalMattressController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
