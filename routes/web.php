<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\itemsController;
use App\Http\Controllers\itemCategoryController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/dashboard', function () {
    return view('dash');
});


Route::get('/addOrder', function () {
    return view('user/addOrder');
});

Route::get('/displayOrder', function () {
    return view('user/displayOrders');
});

Route::get('/manageTables', function () {
    return view('user/manageTables');
});

Route::get('/addTable', function () {
    return view('user/addTable');
});



//for add staffs
Route::get('/addStaff',[staffController::class, 'index']);
Route::post('/addStaff',[staffController::class, 'addStaffDetails']);
Route::get('/displayStaff',[staffController::class, 'displayStaff']); 
//for delete staff
Route::get('/displayStaff/{staff_id}',[staffController::class, 'deleteStaff'])->name('delete');

//for items
Route::get('/addItem',[itemsController::class, 'index']);
Route::post('/addItem',[itemsController::class, 'addItemDetails']);
Route::get('/displayItem',[itemsController::class, 'displayItem']); 
//for delete item
Route::get('/displayItem/{item_id}',[itemsController::class, 'deleteItem'])->name('delete');


//for add item category

Route::get('/addItemCategory',[itemCategoryController::class, 'index']);
Route::post('/addItemCategory',[itemCategoryController::class, 'addItemCat']);
Route::get('/displayItemCategory',[itemCategoryController::class, 'displayItemC']);
//for delete item category
Route::get('/displayItemCategory/{ic_id}',[itemCategoryController::class, 'deleteItemC'])->name('delete');

//Adding tables one by one
Route::get('/addTable', [addTableController::class, 'addTable']);
//   aadafafa
//Abhi is here
