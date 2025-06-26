<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\AdminController;
use App\Http\controllers\UserController;
use App\Http\Controller\HomeController;
use Illuminate\Support\Facades\Auth;

// Route::get('/user',[UserController::class,'user'])->name('user.userr');

// Route::get('/parking',[AdminController::class, 'parking'])->name('admin.parking');
// Route::get('/admin',[AdminController::class,'admin'])->name('type');
// Route::get('/customer',[AdminController::class,'customer'])->name('customer');
// Route::get('/parking_queue',[AdminController::class,'parking_queue'])->name('parking_queue');
// Route::get('/parking',[AdminController::class,'parking'])->name('parking');
// Route::get('/all_information',[AdminController::class,'all_information'])->name('all_information');

//admin
//Create แบบฟอมร์
Route::get('/parkingadmin', [AdminController::class, 'parking'])->name('parking');   //มันทับกับ parking ด้านลาง
Route::get('/type', [AdminController::class, 'type'])->name('type');
Route::get('/userr', [AdminController::class, 'User'])->name('userr.User');
Route::get('/payment_method', [AdminController::class, 'payment_method'])->name('payment_method');
Route::get('/reserve_parking', [AdminController::class, 'reserve_parking'])->name('admin.index');

//test
// Route::get('/User', [AdminController::class, 'User'])->name('admin.User');

// Route::get('/parking_queue/createParking_queue', [AdminController::class, 'createParking_queue']);
// Route::get('/parking/createParking', [AdminController::class, 'createParking']);
// Route::get('/all_information/createAll_information', [AdminController::class, 'createAll_information']);

//บันทึกข้อมูลลงใน Database
Route::post('/parkingadmin', [AdminController::Class, 'admin'])->name('admin.parking');
Route::post('/storeresere_parking',[AdminController::class, 'storeresere_parking'])->name('storeresere_parking');
Route::post('/storetype', [AdminController::Class, 'storetype'])->name('storetype');
Route::post('/storetype', [AdminController::Class, 'storetype'])->name('storetype');
// Route::post('/CM', [AdminController::Class, 'storeCustomer']);
// Route::post('/parking_queue', [AdminController::Class, 'storeParking_queue']);
// Route::post('/parking', [AdminController::Class, 'storeParking']);
// Route::post('/all_information', [AdminController::Class, 'storeAll_information']);

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


// Route::get('/payment_method', function () {
//     return view('admin.payment_method');
// });

// Route::get('/type', function () {
//     return view('admin.type');
// });

// Route::get('/userr', function () {
//     return view('admin.userr');
// });

// Route::get('/parking', function () {
//     return view('admin.parking');
// });

// Route::get('/reserve_parking', function () {
//     return view('admin.reserve_parking');
// });

//หน้าแรก Dashboard
Route::get('/', function () {
    return view('welcome');
});
// Route::get('/userr', function () {
//     return view('user.userr');
// });
// Route::get('/user', function () {    ทางลัดไม่อยากเข้า controllers
//     return view('admin.customer');
// });

//test
// Route::get('/test', function () {
//     return view('user.selectType');
// });
// Route::get('/test', [UserController::class, ''])->name('test');
// ent test

//user
Route::get('/home', [UserController::class, 'index'])->name('home');
Route::get('/parking', [UserController::class, 'parking'])->name('parking');
Route::get('/selectType', [UserController::class, 'selectType'])->name('selectType');
Route::get('/form', [UserController::class, 'form'])->name('form');

                                                            //ชื่อที่อยู่ตรงนี้ต้องเหมือนกับในหน้า controller
Route::get('/user', [UserController::class, 'index'])->name('user.index');

//end user

Route::post('/storeresere_parking',[UserController::class, 'storeresere_parking'])->name('storeresere_parking');

//admin
// Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'admin'])->name('admin.home')->middleware('is_admin');
//end admin


//delete
//destroy
// Route::get('/destsroyCustomer/{idCustomer}', [AdminController::class, 'destsroyCustomer']);
// Route::get('/destsroyProduct/{Pid}', [crudmvcController::class, 'editmCustomer']);


Auth::routes();

