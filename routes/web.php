<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\Product2Controller;

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

// Route::get('/', function () {
//     return view('product');
// });

Route::get('/create', function () {
    return view('newproduct');
});

Route::get('/update', function () {
    return view('editproduct');
});


Route::get('/', [ProductController::class, 'index']);
Route::post('/create',[ProductController::class, 'create']);
Route::get('/update/{id}',[ProductController::class, 'getprod']);
Route::post('/productedit',[ProductController::class,'editprod']);


// FAHMY
Route::get('/product', [Product2Controller::class, 'index']);
Route::get('/product/create',[Product2Controller::class, 'create']); // open form page (can use for create)
Route::get('/product/update/{id}',[Product2Controller::class, 'update']); // open form page (can use for update)
Route::post('/product/save',[Product2Controller::class, 'save']); // save form (create and edit)
Route::delete('/product/delete/{id}',[Product2Controller::class, 'delete']); // save form (create and edit)