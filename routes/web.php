<?php

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

// Route::get('/', function () {
//     return view('visitor.index');
// });

// Pour les route de la page clients page d'accueil 
Route::get('/',[\App\Http\Controllers\FontendController::class, 'index']);

Route::get('/admin', function () {
    return view('admin.index');
});

// [\App\Http\Controllers\Admin\FontendController::class, 'Active']

// ====================== Debut Admin Category ===============
Route::get('admin/categories', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin.category');
Route::post('admin/categories-store', [\App\Http\Controllers\Admin\CategoryController::class, 'StoreCat'])->name('store.category');
Route::get('admin/categories/edit/{cat_id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit']);
Route::post('admin/categories-update', [\App\Http\Controllers\Admin\CategoryController::class, 'UpdateCat'])->name('update.category');
Route::get('admin/categories/delete/{cat_id}',[\App\Http\Controllers\Admin\CategoryController::class, 'Delete']);
Route::get('admin/categories/inactive/{cat_id}',[\App\Http\Controllers\Admin\CategoryController::class, 'Inactive']);
Route::get('admin/categories/active/{cat_id}',[\App\Http\Controllers\Admin\CategoryController::class, 'Active']);
// ====================== Fin Admin Category ===============

// =============================DEBUT Route Produits ============================
Route::get('admin/products/add', [\App\Http\Controllers\Admin\ProductController::class, 'addProduct'])->name('add-products');
Route::post('admin/products/store', [\App\Http\Controllers\Admin\ProductController::class, 'storeProduct'])->name('store-products');
Route::get('admin/products/manage', [\App\Http\Controllers\Admin\ProductController::class, 'manageProduct'])->name('manage-products');
Route::get('admin/products/edit/{proudct_id}', [\App\Http\Controllers\Admin\ProductController::class, 'editProduct']);
Route::post('admin/products/update', [\App\Http\Controllers\Admin\ProductController::class, 'updateProduct'])->name('update-products');
Route::post('admin/products/image-update', [\App\Http\Controllers\Admin\ProductController::class, 'updateImage'])->name('update-image');
Route::get('admin/products/delete/{product_id}', [\App\Http\Controllers\Admin\ProductController::class, 'destroy']);
Route::get('admin/products/inactive/{product_id}', [\App\Http\Controllers\Admin\ProductController::class, 'Inactive']);
Route::get('admin/products/active/{product_id}', [\App\Http\Controllers\Admin\ProductController::class, 'Active']);
// ======================= FIN Route Produits =============================