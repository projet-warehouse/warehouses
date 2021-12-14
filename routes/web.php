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





//Page d'accueil
Route::get('/', function () {
    return view('visitor/index');
})->name('home');

//user authentification
Route::middleware(['auth:sanctum', 'verified'])->get('/myaccount', function () {
    return view('visitor/myaccount');
})->name('myaccount');


//Page de conenxion
Route::get('/login', function () {
    return view('visitor/login');
})->name('login');

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

Route::get('/about', function () {
    return view('visitor/about-us');
})->name('about');



/*
Route::get('/myaccount', function () {
    return view('visitor/myaccount');
})->name('myaccount'); */




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

/* Route::middleware(['auth:sanctum', 'verified','auth'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard'); */




//Dashboard panel
Route::middleware(['auth:sanctum', 'verified', 'auth'])->get('/dashboard', function () {
    return view('admin/dashboard');
})->name('lightDashboard');



Route::get('/dashboard2', function () {
    return view('admin/dashboard2');
})->name('darkDashboard');

Route::get('/compose', function () {
    return view('admin/pages/email/compose');
})->name('composeMail');

Route::get('/inbox', function () {
    return view('admin/pages/email/inbox');
})->name('inboxMail');

Route::get('/read', function () {
    return view('admin/pages/email/read');
})->name('readMail');