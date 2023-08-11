<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ViewProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
// use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MasterSizeController;
use App\Http\Controllers\SizeMMController;
use App\Http\Controllers\SizeInchController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\ThicknessController;
use App\Http\Controllers\HomeMattressController;
use App\Http\Controllers\RoyalMattressController;
use App\Http\Controllers\HospitalMattressController;
use App\Http\Controllers\HotelMattressController;

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



Route::get('/admin/login', [AdminController::class, 'index'])->name('admin.login');

Route::group(['middleware' => 'admin.auth'], function(){

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
 
});




Route::get('add_user', [AdminController::class, 'index'])->middleware(['auth'])->name('add_user');

Route::get('user_list', [AdminController::class, 'show'])->middleware(['auth'])->name('user_list');

Route::post('admin_register', [AdminController::class, 'admin_register'])->name('admin_register');

Route::get('user/delete/{id}', [AdminController::class, 'destroy']);



// Route::get('login', [LoginController::class, 'index'])->name('login');

// Route::post('login', [AdminController::class, 'login']);

Route::get('logout', [AdminController::class, 'logout']);


// user login 

// Route::get('/login', [LoginController::class, 'index'])->name('login');

// Route::post('login', [UserController::class, 'login']);





Route::get('/', [HomeController::class, 'index'])->name('/');

Route::get('royal', [HomeController::class, 'royal'])->name('royal');

Route::get('warranty', [HomeController::class, 'warranty'])->name('warranty');

Route::get('how_to_choose', [HomeController::class, 'how_to_choose'])->name('how_to_choose');

Route::get('homemattress', [HomeController::class, 'homemattress'])->name('homemattress');

Route::get('hospital', [HomeController::class, 'hospital'])->name('hospital');

Route::get('hotel', [HomeController::class, 'hotel'])->name('hotel');

Route::get('contact', [HomeController::class, 'contact'])->name('contact');

Route::get('cart', [HomeController::class, 'cart'])->name('cart');

Route::get('guide_to_good_sleep', [HomeController::class, 'guide'])->name('guide_to_good_sleep');

Route::get('get_product_detail', [HomeController::class, 'get_product_detail']);

Route::get('pillows', [HomeController::class, 'pillows'])->name('pillows');

Route::get('protector', [HomeController::class, 'protector'])->name('protector');

Route::get('topper', [HomeController::class, 'topper'])->name('topper');

Route::get('get_view_product', [HomeController::class, 'get_view_product'])->name('view_product');


Route::get('get_unit', [ViewProductController::class, 'get_unit']);

Route::get('get_master_size', [ViewProductController::class, 'get_master_size']);

Route::get('get_size_id', [ViewProductController::class, 'get_size_id']);

Route::get('get_thick_id', [ViewProductController::class, 'get_thick_id']);

Route::get('get_price', [ViewProductController::class, 'get_price']);



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


// hospital mattresss 
Route::get('hospital_mattress', [HospitalMattressController::class, 'index'])->middleware(['auth'])->name('hospital_mattress');

Route::post('insertHospitalMattress', [HospitalMattressController::class, 'store']);

Route::get('hospital_mattress/edit/{id}', [HospitalMattressController::class, 'edit']);

Route::post('hospital_mattress/update/{id}', [HospitalMattressController::class, 'update']);

Route::get('hospital_mattress/delete/{id}', [HospitalMattressController::class, 'destroy']);


// hotel mattresss 
Route::get('hotel_mattress', [HotelMattressController::class, 'index'])->middleware(['auth'])->name('hotel_mattress');

Route::post('insertHotelMattress', [HotelMattressController::class, 'store']);
 
Route::get('hotel_mattress/edit/{id}', [HotelMattressController::class, 'edit']);

Route::post('hotel_mattress/update/{id}', [HotelMattressController::class, 'update']);

Route::get('hotel_mattress/delete/{id}', [HotelMattressController::class, 'destroy']);


// royal_mattresss 
Route::get('royal_mattress', [RoyalMattressController::class, 'index'])->middleware(['auth'])->name('royal_mattress');

Route::post('insertRoyalMattress', [RoyalMattressController::class, 'store']);

Route::get('royal_mattress/edit/{id}', [RoyalMattressController::class, 'edit']);

Route::post('royal_mattress/update/{id}', [RoyalMattressController::class, 'update']);

Route::get('royal_mattress/delete/{id}', [RoyalMattressController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
