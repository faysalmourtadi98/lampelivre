<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    //dashboard
    Route::get('/dashboard', [dashboard\HomeController::class,'index'])->name('Dashboard');
    //dashboard.categories
    Route::get('/dashboard/categories/index/', [dashboard\CategoriesController::class,'index'])->name('dashboard.categories.index');
    Route::get('/dashboard/categories/show/categorie_id={id}', [dashboard\CategoriesController::class,'show'])->name('dashboard.categories.show');
    Route::get('/dashboard/categories/create/', [dashboard\CategoriesController::class,'create'])->name('dashboard.categories.create');
    Route::post('/dashboard/categories/store/', [dashboard\CategoriesController::class,'store'])->name('dashboard.categories.store');
    Route::get('/dashboard/categories/edit/categorie_id={id}', [dashboard\CategoriesController::class,'edit'])->name('dashboard.categories.edit');
    Route::put('/dashboard/categories/update/categorie_id={id}', [dashboard\CategoriesController::class,'update'])->name('dashboard.categories.update');
    Route::delete('/dashboard/categories/delete/categorie_id={id}', [dashboard\CategoriesController::class,'delete'])->name('dashboard.categories.delete');
    //dashboard.users
    Route::get('/dashboard/users/index',[dashboard\UsersController::class,'index'])->name('dashboard.users.index');
    Route::get("/dashboard/users/show/user_id={id}",[dashboard\UsersController::class,'show'])->name('dashboard.users.show');
    Route::get("/dashboard/users/edit/user_id={id}",[dashboard\UsersController::class,'edit'])->name('dashboard.users.edit');
    Route::put("/dashboard/users/update/user_id=p{id}",[dashboard\UsersController::class,'update'])->name('dashboard.users.update');
    Route::delete("/dashboard/users/delete/user_id{id}",[dashboard\UsersController::class,'delete'])->name('dashboard.users.delete');
    //dashboard.products
    Route::get('/dashboard/products/index/', [dashboard\ProductsController::class,'index'])->name('dashboard.products.index');
    Route::get('/dashboard/products/show/product_id={id}', [dashboard\ProductsController::class,'show'])->name('dashboard.products.show');
    Route::get('/dashboard/products/create/', [dashboard\ProductsController::class,'create'])->name('dashboard.products.create');
    Route::post('/dashboard/products/store/', [dashboard\ProductsController::class,'store'])->name('dashboard.products.store');
    Route::get('/dashboard/products/edit/product_id={id}', [dashboard\ProductsController::class,'edit'])->name('dashboard.products.edit');
    Route::put('/dashboard/products/update/product_id={id}', [dashboard\ProductsController::class,'update'])->name('dashboard.products.update');
    Route::delete('/dashboard/products/delete/product_id={id}', [dashboard\ProductsController::class,'delete'])->name('dashboard.products.delete');
    //dashboard.orders
    Route::get('/dashboard/orders/index/', [dashboard\OrdersController::class,'index'])->name('dashboard.orders.index');
    Route::get('/dashboard/orders/show/order_id={id}', [dashboard\OrdersController::class,'show'])->name('dashboard.orders.show');
    Route::post('/dashboard/orders/valid/order_id={id}', [dashboard\OrdersController::class,'valide'])->name('dashboard.orders.valide');
    Route::delete('/dashboard/orders/order_id={id}', [dashboard\OrdersController::class,'delete'])->name('dashboard.orders.delete');
    //dashboard.orders.valide
    Route::get('/dashboard/orders_valid/index/', [dashboard\OrdersController::class,'index_valid'])->name('dashboard.orders_valid.index');
//site
Route::get('/',[site\HomeController::class,'index'])->name('site.home.index');
//site.cart
Route::get('/panier/index',[site\PaniersController::class,'index'])->name('site.paniers.index');
Route::post ('/panier/store/{id}',[site\PaniersController::class,'store'])->name('site.paniers.store');
Route::delete ('/panier/delete/panier={id}/user={user}/product={product}',[site\PaniersController::class,'delete'])->name('site.paniers.delete');
//site.checkout
Route::get('/checkout/index/{id}',[site\CheckoutsController::class,'index'])->name('site.checkout.index');
Route::post ('/checkout/store/{id}',[site\CheckoutsController::class,'store'])->name('site.checkout.store');
//site.products
Route::get('/products',[site\ProductsController::class,'index'])->name('site.products.index');
Route::get('/products/show/product_id={id}', [site\ProductsController::class,'show'])->name('site.products.show');
//site.about
Route::get('/about', function () {return view('site.about');})->name('about');
//authentification
Auth::routes();
Auth::routes(['verify' => true]);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/clear-cache', function() {
    $run = Artisan::call('config:clear');
    $run = Artisan::call('cache:clear');
    $run = Artisan::call('config:cache');
    return 'FINISHED';  
});