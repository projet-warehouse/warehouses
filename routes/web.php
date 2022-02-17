<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\SousCategorieController;
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

Route::get('/', function () {
    return view('visitor/index');
})->name('home');

Route::get('/about', function () {
    return view('visitor/about-us');
})->name('about');

Route::get('/blog', function () {
    return view('visitor/blog');
})->name('blog');

Route::get('/blog-article', function () {
    return view('visitor/blog-article');
})->name('blogArticle');

Route::get('/cart', function () {
    return view('visitor/cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('visitor/checkout');
})->name('checkout');

Route::get('/contact', function () {
    return view('visitor/contact');
})->name('contact');

Route::get('/myaccount', function () {
    return view('visitor/customer/index_myaccount');
})->name('customerIndex');

Route::get('/myaccount/order/index', function () {
    return view('visitor/customer/order_index_myaccount');
})->name('customerOrder');

Route::get('/myaccount/order/close', function () {
    return view('visitor/customer/order_close_myaccount');
})->name('customerOrderClose');

Route::get('/myaccount/inbox', function () {
    return view('visitor/customer/myaccount_inbox');
})->name('customerInbox');

Route::get('/myaccount/opinion', function () {
    return view('visitor/customer/index_opinion');
})->name('customerOpinion');

Route::get('/myaccount/wishlist', function () {
    return view('visitor/customer/myaccount_wishlist');
})->name('customerWishlist');


Route::get('/login', function () {
    return view('auth/login');
})->name('login');

Route::get('/mail-success', function () {
    return view('visitor/mail-success');
})->name('mail-success');

Route::get('/notfound', function () {
    return view('visitor/notfound');
})->name('notfound');

Route::get('/register', function () {
    return view('auth/register');
})->name('register');

Route::get('/products-grid', function () {
    return view('visitor/products-grid');
})->name('productsInGrid');

Route::get('/products-list', function () {
    return view('visitor/products-list');
})->name('productsInList');

Route::get('/product', function () {
    return view('visitor/product');
})->name('productDetails');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('redirects', 'App\Http\Controllers\HomeController@index');
Route::get('/dashboard', function () {
    return view('admin/dashboard');
})->name('lightDashboard');

Route::get('/newcontroller', function () {
    return view('admin/pages/newcontroller');
})->name('newcontroller');

Route::get('/editcontroller', function () {
    return view('admin/pages/editcontroller');
})->name('editcontroller');

// Route::get('/addcategory', function () {
//     return view('admin/pages/addcategory');
// })->name('addcategory');

Route::get('/addproduct', function () {
    return view('admin/pages/addproduct');
})->name('addproduct');


// midif TAFH

                            // GESTION DES CATHEGORIES

//afficher les cathegories
Route::get('/dashboard/category', [CategorieController::class, 'index'])->name('category');

//ajouter une cathrgories
Route::get('/dashboard/category/add', [CategorieController::class, 'index_add'])->name('add.category');
Route::post('/dashboard/category/add', [CategorieController::class, 'store'])->name('store.category');

//modifier les cathegories
Route::get('/dashboard/category/modify/{id}', [CategorieController::class, 'index_mod'])->name('modify.category');
Route::post('/dashboard/category/modify/{id}', [CategorieController::class, 'update'])->name('update.category');

//supprimer les cathegories
Route::get('/dashboard/category/delete/{id}', [CategorieController::class, 'destroy'])->name('delete.category');


                            // GESTION DES SOUS CATHEGORIES

//afficher les sous cathegories
Route::get('/dashboard/sous_category', [SousCategorieController::class, 'index'])->name('souscategory');

//ajouter une sous cathrgories
Route::get('/dashboard/sous_category/add', [SousCategorieController::class, 'index_add'])->name('add.souscategory');
Route::post('/dashboard/sous_category/add', [SousCategorieController::class, 'store'])->name('store.souscategory');

//modifier les sous cathegories
// Route::get('/dashboard/sous_category/modify/{id}', [SousCategorieController::class, 'index_mod'])->name('modify.souscategory');
// Route::post('/dashboard/sous_category/modify/{id}', [SousCategorieController::class, 'update'])->name('update.souscategory');

//supprimer les sous cathegories
// Route::get('/dashboard/sous_category/delete/{id}', [SousCategorieController::class, 'destroy'])->name('delete.souscategory');
// Route::post('/dashboard/category/delete/{id}', [CategorieController::class, 'destroy'])->name('delete.category');



// fin modif TAFH



// Route::get('/compose', function () {
//     return view('admin/pages/email/compose');
// })->name('composeMail');

// Route::get('/inbox', function () {
//     return view('admin/pages/email/inbox');
// })->name('inboxMail');

// Route::get('/read', function () {
//     return view('admin/pages/email/read');
// })->name('readMail');

// Route::get('/calendar', function () {
//     return view('admin/pages/apps/calendar');
// })->name('calendar');

// Route::get('/table', function () {
//     return view('admin/pages/tables/table');
// })->name('table');

// Route::get('/invoice', function () {
//     return view('admin/pages/general/invoice');
// })->name('invoice');

// Route::get('/admin_login', function () {
//     return view('admin/pages/auth/login');
// })->name('adminlogin');

// Route::get('/admin_register', function () {
//     return view('admin/pages/auth/register');
// })->name('adminregister');
Route::get('/admin_register', function () {
    return view('admin/pages/auth/register');
})->name('adminregister');
