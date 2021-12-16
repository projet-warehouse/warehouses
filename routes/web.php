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
    return view('visitor/login');
})->name('login');

Route::get('/mail-success', function () {
    return view('visitor/mail-success');
})->name('mail-success');

Route::get('/notfound', function () {
    return view('visitor/notfound');
})->name('notfound');

Route::get('/register', function () {
    return view('visitor/register');
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

// Admin Routes

Route::get('/dashboard', function () {
    return view('admin/dashboard');
})->name('lightDashboard');

Route::get('/newcontroller', function () {
    return view('admin/pages/newcontroller');
})->name('newcontroller');


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
