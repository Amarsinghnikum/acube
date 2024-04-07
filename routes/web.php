<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;

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

Route::get('/', function () {
    return redirect('/');
});

Route::get('/admin/login',[AdminController::class, 'Loginpage']);
Route::post('/admin_login',[AdminController::class, 'adminLogin']);
Route::get('/dashboard',[AdminController::class, 'dashboard']);
Route::get('/admin/logout',[AdminController::class, 'adminLogout'])->name('session.delete');

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/view-category/{slug}', [FrontendController::class, 'viewcategory']);
Route::get('/category/{cate_slug}/{id}', [FrontendController::class, 'productview']);
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/contact-us', [FrontendController::class, 'contact'])->name('contact-us');
Route::post('/contact-store', [ContactController::class, 'contactStore'])->name('contact-store');

Route::get('/sliders',[SliderController::class, 'index']);
Route::get('/add-slider',[SliderController::class, 'add']);
Route::post('/insert-slider', [SliderController::class, 'insert']);
Route::get('/edit-slider/{id}', [SliderController::class, 'edit']);
Route::put('update-slider/{id}', [SliderController::class, 'update']);
Route::get('/delete-slider/{id}',[SliderController::class, 'destroy']);

Route::get('/categories',[CategoryController::class, 'index']);
Route::get('/add-category',[CategoryController::class, 'add']);
Route::post('/insert-category', [CategoryController::class, 'insert']);
Route::get('/edit-category/{id}', [CategoryController::class, 'edit']);
Route::put('update-category/{id}', [CategoryController::class, 'update']);
Route::get('/delete-category/{id}',[CategoryController::class, 'destroy']);

Route::get('/products', [ProductController::class, 'index']);
Route::get('/add-products', [ProductController::class, 'add']);
Route::post('/insert-product', [ProductController::class, 'insert']);
Route::get('edit-product/{id}/', [ProductController::class, 'edit']);
Route::put('update-product/{id}/', [ProductController::class, 'update']);
Route::get('/delete-product/{id}',[ProductController::class, 'destroy']);

Route::get('queries', [ContactController::class, 'queries'])->name('queries');
Route::put('/update-status/{id}', [ContactController::class, 'updateStatus'])->name('update-status');