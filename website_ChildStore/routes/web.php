<?php

use App\Http\Controllers\Admin\FrontendController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\FrontController;
use App\Http\Controllers\Frontend\UserController;

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
//     return view('welcome');
// });

Route::get('/', [FrontController::class,'index']);
Route::get('category', [FrontController::class, 'category']);
Route::get('view-category/{slug}', [FrontController::class, 'viewcategory']);
Route::get('category/{cate_slug}/{prod_slug}', [FrontController::class, 'productview']);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('add-to-cart',[CartController::class, 'addProduct']);
Route::post('delete-cart-item',[CartController::class,'deleteproduct']);
Route::post('update-cart', [Cartcontroller::class, 'updatecart']);

Route::middleware(['auth'])->group(function () {
    Route::get('cart', [CartController::class, 'viewcart']);
    Route::get('checkout',[CheckoutController::class, 'index']);
    Route::post('place-order', [CheckoutController::class,'placeorder']);

    Route::get('my-orders',[UserController::class, 'index']);
    Route::get('view-orders/{id}',[UserController::class,'view']);
});


Route::middleware(['auth', 'isAdmin'])->group(function (){
    Route::get('/dashboard','Admin\FrontendController@index');

    //Categories
    Route::get('categories','Admin\CategoryController@index');
    Route::get('add-category','Admin\CategoryController@add');
    Route::post('insert-category','Admin\CategoryController@insert');
    Route::get('edit-category/{id}', [CategoryController::class , 'edit']);
    Route::put('update-category/{id}', [CategoryController::class , 'update']);
    Route::get('delete-category/{id}', [CategoryController::class, 'delete']);

    //Products
    Route::get('products', [ProductController::class, 'index']);
    Route::get('add-products', [ProductController::class, 'add']);
    Route::post('insert-products', [ProductController::class, 'insert']);
    Route::get('edit-products/{id}', [ProductController::class , 'edit']);
    Route::put('update-products/{id}', [ProductController::class , 'update']);
    Route::get('delete-products/{id}', [ProductController::class, 'delete']);

    Route::get('users',[FrontendController::class,'users']);
    Route::get('orders',[OrderController::class,'index']);
    Route::get('admin/view-orders/{id}',[OrderController::class,'view']);
    Route::put('update-order/{id}',[OrderController::class,'updateorder']);
    Route::get('order-history',[OrderController::class, 'orderhistory']);
    Route::get('users',[DashboardController::class,'users']);
    Route::get('view-users/{id}', [DashboardController::class , 'viewusers']);


});
