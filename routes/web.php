<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ViewProductController;
use App\Http\Controllers\ViewHospitalController;
use App\Http\Controllers\ViewRoyalController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
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
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PillowsController;
use App\Http\Controllers\ProtectorController;
use App\Http\Controllers\ViewPillowsController;
use App\Http\Controllers\ViewProtectorController;
use App\Http\Controllers\TopperController;
use App\Http\Controllers\ViewTopperController;
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


Route::get('/clear-cache', function() {
  Artisan::call('cache:clear');
  Artisan::call('config:clear');
  Artisan::call('route:clear');
  return "done ";
    
});

Route::get('/optimize', function() {
    Artisan::call('optimize');
    return "Optimize";
});


// For Clear cache
// Route::get('/generate-model', function () {
//     Artisan::call('make:model', [
//         'name' => 'Contact',
//         '-m' => true,
//         '-c' => true,
//         '-r' => true,
//     ]);

//     return 'Model, migration, controller, and resource created successfully';
// });

// Route::get('/generate-controller', function () {
//     Artisan::call('make:controller', [
//         'name' => 'ViewTopperController'
//     ]);

//     return 'controller created successfully';
// });

Route::get('/generate-mail', function () {
    Artisan::call('make:mail', [
        'name' => 'ContactMail'
    ]);

    return 'mail created successfully';
});

Route::get('/run-migrations', function () {
    Artisan::call('migrate');
    return 'Migrations completed successfully';
});


// Route::get('/link', function() {
//     Artisan::call('storage:link');
//         return "Storage is linked successfully.";
// });



// Route::get('/add-column', function () {
//     DB::statement('ALTER TABLE toppers ADD display  VARCHAR(255) AFTER image2');
       
//         return 'Column added successfully.';
     
// });




// for admin login

Route::get('/admin/login', [AdminController::class, 'index'])->name('admin.login');

Route::post('admin_login', [AdminController::class, 'admin_login'])->name('admin_login');

// admin auth 

Route::group(['middleware' => 'admin.auth'], function(){

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::get('/clients', [UserController::class, 'show'])->name('clients');
    
     Route::get('add_user', [AdminController::class, 'add_user'])->name('add_user');

    Route::get('user_list', [AdminController::class, 'show'])->name('user_list');
    
    Route::post('admin_register', [AdminController::class, 'admin_register'])->name('admin_register');

    Route::get('user/delete/{id}', [AdminController::class, 'destroy']);
        
    Route::get('admin_logout', [AdminController::class, 'logout']);  
    
    Route::get('/orders', [OrderController::class, 'orders'])->name('orders');
        
    // master size 
    Route::get('master_size', [MasterSizeController::class, 'index'])->name('master_size');
    
    Route::post('insertMsize', [MasterSizeController::class, 'store']);
    
    Route::get('msize/delete/{id}', [MasterSizeController::class, 'destroy']);
    
    // unit size 
    Route::get('unit', [UnitController::class, 'index'])->name('unit');
    
    Route::post('insertUnit', [UnitController::class, 'store']);
    
    Route::get('unit/delete/{id}', [UnitController::class, 'destroy']);
    
    
    // mm size 
    Route::get('mm_size', [SizeMMController::class, 'index'])->name('mm_size');
    
    Route::post('insertMM', [SizeMMController::class, 'store']);
    
    Route::get('mm/edit/{id}', [SizeMMController::class, 'edit']);
    
    Route::post('mm/update/{id}', [SizeMMController::class, 'update']);
    
    Route::get('mm/delete/{id}', [SizeMMController::class, 'destroy']);
    
    // inch size 
    Route::get('inch_size', [SizeInchController::class, 'index'])->name('inch_size');
    
    Route::post('insertInch', [SizeInchController::class, 'store']);
    
    Route::get('inch/edit/{id}', [SizeInchController::class, 'edit']);
    
    Route::post('inch/update/{id}', [SizeInchController::class, 'update']);
    
    Route::get('inch/delete/{id}', [SizeInchController::class, 'destroy']);
    
    // Thickness size 
    Route::get('thickness', [ThicknessController::class, 'index'])->name('thickness');
    
    Route::post('insertThickness', [ThicknessController::class, 'store']);
    
    Route::get('thickness/delete/{id}', [ThicknessController::class, 'destroy']);
    
    // homemattresss 
    Route::get('home_mattress', [HomeMattressController::class, 'index'])->name('home_mattress');
    
    Route::post('insertHomeMattress', [HomeMattressController::class, 'store']);
    
    Route::get('home_mattress/edit/{id}', [HomeMattressController::class, 'edit']);
    
    Route::post('home_mattress/update/{id}', [HomeMattressController::class, 'update']);
    
    Route::get('home_mattress/delete/{id}', [HomeMattressController::class, 'destroy']);
    
    
    // hospital mattresss 
    Route::get('hospital_mattress', [HospitalMattressController::class, 'index'])->name('hospital_mattress');
    
    Route::post('insertHospitalMattress', [HospitalMattressController::class, 'store']);
    
    Route::get('hospital_mattress/edit/{id}', [HospitalMattressController::class, 'edit']);
    
    Route::post('hospital_mattress/update/{id}', [HospitalMattressController::class, 'update']);
    
    Route::get('hospital_mattress/delete/{id}', [HospitalMattressController::class, 'destroy']);
    
    
    // hotel mattresss 
    Route::get('hotel_mattress', [HotelMattressController::class, 'index'])->name('hotel_mattress');
    
    Route::post('insertHotelMattress', [HotelMattressController::class, 'store']);
     
    Route::get('hotel_mattress/edit/{id}', [HotelMattressController::class, 'edit']);
    
    Route::post('hotel_mattress/update/{id}', [HotelMattressController::class, 'update']);
    
    Route::get('hotel_mattress/delete/{id}', [HotelMattressController::class, 'destroy']);
    
    
    // royal_mattresss 
    Route::get('royal_mattress', [RoyalMattressController::class, 'index'])->name('royal_mattress');
    
    Route::post('insertRoyalMattress', [RoyalMattressController::class, 'store']);
    
    Route::get('royal_mattress/edit/{id}', [RoyalMattressController::class, 'edit']);
    
    Route::post('royal_mattress/update/{id}', [RoyalMattressController::class, 'update']);
    
    Route::get('royal_mattress/delete/{id}', [RoyalMattressController::class, 'destroy']);
    
    // pillows
    Route::get('adm_pillows', [PillowsController::class, 'index'])->name('adm_pillows');
    
    Route::post('insert_pillows', [PillowsController::class, 'store_pillows']);
    
    Route::get('pillows/edit/{id}', [PillowsController::class, 'edit_pillows']);
    
    Route::post('pillows/update/{id}', [PillowsController::class, 'update_pillows']);
    
    Route::get('pillows/delete/{id}', [PillowsController::class, 'destroy_pillows']);
    
    //Pillow Size in inches 
    Route::get('size_pillows', [PillowsController::class, 'size_pillows'])->name('size_pillows');
    
    Route::post('insert_pillow_size', [PillowsController::class, 'store']);
    
    Route::get('size_pillows/edit/{id}', [PillowsController::class, 'edit']);
    
    Route::post('size_pillows/update/{id}', [PillowsController::class, 'update']);
    
    Route::get('size_pillows/delete/{id}', [PillowsController::class, 'destroy']);
    
    
    //Pillow Size in mm 
    Route::get('size_pillows_mm', [PillowsController::class, 'size_pillows_mm'])->name('size_pillows_mm');
    
    Route::post('insert_pillow_size_mm', [PillowsController::class, 'store_pillow_mm']);
    
    Route::get('size_pillows_mm/edit/{id}', [PillowsController::class, 'edit_pillow_mm']);
    
    Route::post('size_pillows_mm/update/{id}', [PillowsController::class, 'update_pillow_mm']);
    
    Route::get('size_pillows_mm/delete/{id}', [PillowsController::class, 'destroy_pillow_mm']);
    
   
    
    // topper
    Route::get('adm_topper', [TopperController::class, 'index'])->name('adm_topper');
    
    Route::post('insert_topper', [TopperController::class, 'store']);
    
    Route::get('topper/edit/{id}', [TopperController::class, 'edit']);
    
    Route::post('topper/update/{id}', [TopperController::class, 'update']);
    
    Route::get('topper/delete/{id}', [TopperController::class, 'destroy']);

 
    // Protector
    Route::get('adm_protector', [ProtectorController::class, 'index'])->name('adm_protector');
    
    Route::post('insert_protector', [ProtectorController::class, 'store_protector']);
    
    Route::get('protector/edit/{id}', [ProtectorController::class, 'edit_protector']);
    
    Route::post('protector/update/{id}', [ProtectorController::class, 'update_protector']);
    
    Route::get('protector/delete/{id}', [ProtectorController::class, 'destroy_protector']);

 
    //Protector Size
    Route::get('size_protector', [ProtectorController::class, 'size_protector'])->name('size_protector');
    
    Route::post('insert_protector_size', [ProtectorController::class, 'store']);
    
    Route::get('size_protector/edit/{id}', [ProtectorController::class, 'edit']);
    
    Route::post('size_protector/update/{id}', [ProtectorController::class, 'update']);
    
    Route::get('size_protector/delete/{id}', [ProtectorController::class, 'destroy']);

 
});



// user login

Route::get('login', [LoginController::class, 'index'])->name('login');

Route::post('user_login', [LoginController::class, 'user_login'])->name('user_login');

Route::get('register', [LoginController::class, 'register'])->name('register');

Route::post ('user_register', [LoginController::class, 'user_register'])->name('user_register');

Route::get('logout', [LoginController::class, 'logout']);

// user login end




Route::get('/', [HomeController::class, 'index'])->name('/');

Route::get('new_design', [HomeController::class, 'new_design'])->name('new_design');

Route::get('royal', [HomeController::class, 'royal'])->name('royal');

Route::get('policy', [HomeController::class, 'policy'])->name('policy');

Route::get('conditions', [HomeController::class, 'conditions'])->name('conditions');

Route::get('warranty', [HomeController::class, 'warranty'])->name('warranty');

Route::get('how_to_choose', [HomeController::class, 'how_to_choose'])->name('how_to_choose');

Route::get('homemattress', [HomeController::class, 'homemattress'])->name('homemattress');

Route::get('hospital', [HomeController::class, 'hospital'])->name('hospital');

Route::get('hotel', [HomeController::class, 'hotel'])->name('hotel');

Route::get('guide_to_good_sleep', [HomeController::class, 'guide'])->name('guide_to_good_sleep');

// contact 
Route::get('contact', [ContactController::class, 'index'])->name('contact');

Route::get('adm_contact', [ContactController::class, 'adm_contact'])->name('adm_contact');

Route::get('adm_contact/delete/{id}', [ContactController::class, 'destroy']);

Route::post('/contact_detail', [ContactController::class, 'store']);


// pillows 

Route::get('pillows', [HomeController::class, 'pillows'])->name('pillows');

Route::get('get_pillow_detail', [HomeController::class, 'get_pillow_detail']);


Route::get('get_view_pillows', [HomeController::class, 'get_view_pillows'])->name('get_view_pillows');
 
Route::get('get_category', [ViewPillowsController::class, 'get_category'])->name('get_category');

Route::get('/get_pillows_size', [ViewPillowsController::class, 'get_pillows_size']);

Route::get('get_pillow_id', [ViewPillowsController::class, 'get_pillow_id']);
    

// protector 

Route::get('protector', [HomeController::class, 'protector'])->name('protector');

Route::get('get_protector_detail', [HomeController::class, 'get_protector_detail']);


Route::get('get_view_protector', [HomeController::class, 'get_view_protector'])->name('get_view_protector');
 
Route::get('get_protector_category', [ViewProtectorController::class, 'get_protector_category']);

Route::get('/get_protector_size', [ViewProtectorController::class, 'get_protector_size']);

Route::get('get_protector_id', [ViewProtectorController::class, 'get_protector_id']);
    

// topper 

Route::get('topper', [HomeController::class, 'topper'])->name('topper');

Route::get('get_topper_detail', [HomeController::class, 'get_topper_detail']);


Route::get('get_view_topper', [HomeController::class, 'get_view_topper'])->name('get_view_topper');
 
Route::get('get_topper_category', [ViewTopperController::class, 'get_topper_category']);

Route::get('/get_topper_size', [ViewTopperController::class, 'get_topper_size']);

Route::get('get_topper_id', [ViewTopperController::class, 'get_topper_id']);
    


// homemattress 

Route::get('get_product_detail', [HomeController::class, 'get_product_detail']);

Route::get('get_view_product', [HomeController::class, 'get_view_product'])->name('view_product');

Route::get('get_unit', [ViewProductController::class, 'get_unit']);

Route::get('get_master_size', [ViewProductController::class, 'get_master_size']);

Route::get('get_size_id', [ViewProductController::class, 'get_size_id']);

Route::get('get_thick_id', [ViewProductController::class, 'get_thick_id']);

Route::get('get_price', [ViewProductController::class, 'get_price']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// royal mattress 
Route::get('get_royal_product', [HomeController::class, 'get_royal_product']);

Route::get('royal_product', [HomeController::class, 'royal_product'])->name('royal_product');

Route::get('royal_unit', [ViewRoyalController::class, 'royal_unit']);

Route::get('royal_master_size', [ViewRoyalController::class, 'royal_master_size']);

Route::get('royal_size_id', [ViewRoyalController::class, 'royal_size_id']);

Route::get('royal_thick_id', [ViewRoyalController::class, 'royal_thick_id']);

Route::get('royal_price', [ViewRoyalController::class, 'royal_price']);



Route::get('hospital_product_detail', [HomeController::class, 'hospital_product_detail']);

Route::get('hospital_product', [HomeController::class, 'hospital_product'])->name('hospital_product');

Route::get('hospital_unit', [ViewHospitalController::class, 'hospital_unit']);

Route::get('hospital_master_size', [ViewHospitalController::class, 'hospital_master_size']);

Route::get('hospital_size_id', [ViewHospitalController::class, 'hospital_size_id']);

Route::get('hospital_thick_id', [ViewHospitalController::class, 'hospital_thick_id']);

Route::get('hospital_price', [ViewHospitalController::class, 'hospital_price']);



// cart 
Route::get('cart', [CartController::class, 'index'])->name('cart')->middleware('auth');

Route::post('cart_data', [CartController::class, 'store']);

Route::get('cart_item/delete/{id}', [CartController::class, 'destroy']);

Route::get('/order', [OrderController::class, 'store']);

Route::get('/get_pro_price', [OrderController::class, 'get_pro_price']);

Route::get('/my_order', [OrderController::class, 'index'])->name('my_order')->middleware('auth');

Route::get('my_order/cancel_order/{id}', [OrderController::class, 'cancel_order']);
     
// admin order      
Route::get('order_item/detail/{id}', [OrderController::class, 'order_details']);

Route::get('order_item/shipped/{id}', [OrderController::class, 'order_shipped']);

Route::get('order_item/arriving/{id}', [OrderController::class, 'order_arriving']);

Route::get('order_item/delivered/{id}', [OrderController::class, 'order_delivered']);

Route::get('order_item/reject/{id}', [OrderController::class, 'order_reject']);

// payment 
Route::get('/place_order', [PaymentController::class, 'place_order']);

Route::get('/delete_order', [PaymentController::class, 'delete_order']);

// order 

Route::get('/my_order_details/{id}', [OrderController::class, 'my_order_details'])->name('my_order_details');

Route::get('/track_package/{id}', [OrderController::class, 'track_package'])->name('track_package');

// profile 

Route::get('/profile', [UserController::class, 'profile'])->name('profile');

Route::post('profile/update/{id}', [UserController::class, 'update']);

// Sumit Bopewar Changes 

// Route::get('/card', [HomeController::class, 'card'])->name('card');
Route::get('/index_page', [HomeController::class, 'index_page'])->name('index_page');
Route::get('/good_sleep', [HomeController::class, 'good_sleep'])->name('good_sleep');
Route::get('/homesmattress', [HomeController::class, 'homesmattress'])->name('homesmattress');
Route::get('/hospitalmattress', [HomeController::class, 'hospitalmattress'])->name('hospitalmattress');
Route::get('/hotelsmattress', [HomeController::class, 'hotelsmattress'])->name('hotelsmattress');
Route::get('/pillows_page', [HomeController::class, 'pillows_page'])->name('pillows_page');
Route::get('/protector_page', [HomeController::class, 'protector_page'])->name('protector_page');
Route::get('/royalemattress', [HomeController::class, 'royalemattress'])->name('royalemattress');
Route::get('/topper_page', [HomeController::class, 'topper_page'])->name('topper_page');
Route::get('/contact_page', [HomeController::class, 'contact_page'])->name('contact_page');
