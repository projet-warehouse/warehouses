<?php

use Facade\Ignition\Exceptions\ViewException;
use Illuminate\Support\Facades\Route;


//Page d'accueil
Route::get('/', function () {
    return view('visitor/index');
})->name('home');

//Page d'inscription
Route::get('/register', function () {
    return view('visitor/register');
})->name('register');

//Page de connexion
Route::get('/login', function () {
    return view('visitor/login');
})->name('login');


//user parametre
Route::middleware(['auth:sanctum' , 'verified'])->group(function(){
    Route::get('/myaccount', function () {
        return view('visitor/myaccount');
    })->name('myaccount');

    Route::get('/checkout', function () {
        return view('visitor/checkout');
    })->name('checkout');

});




//admin parametre


route::get('redirects' , '\App\http\controllers\HomeController@index' );

Route::middleware(['auth:sanctum' ])->group(function(){

    route::get('/dashboard', function(){
        return view('admin.dashboard');
    })->name('dashboard');


    return view('/admin/dashboard');



Route::get('/compose', function () {
       return view('admin/pages/email/compose');
    })->name('composeMail');

   Route::get('/inbox', function () {
        return view('admin/pages/email/inbox');
    })->name('inboxMail');

    Route::get('/read', function () {
        return view('admin/pages/email/read');
    })->name('readMail');


});





Route::get('/cart', function () {
    return view('visitor/cart');
})->name('cart');

Route::get('/contact', function () {
    return view('visitor/contact');
})->name('contact');

Route::get('/about', function () {
    return view('visitor/about-us');
})->name('about');



Route::get('/mail-success', function () {
    return view('visitor/mail-success');
})->name('mail-success');

Route::get('/notfound', function () {
    return view('visitor/notfound');
})->name('notfound');



Route::get('/products-grid', function () {
    return view('visitor/products-grid');
})->name('productsInGrid');

Route::get('/products-list', function () {
    return view('visitor/products-list');
})->name('productsInList');

Route::get('/product', function () {
    return view('visitor/product');
})->name('productDetails');




//Dashboard panel
/* Route::middleware(['auth:sanctum', 'verified', 'AuthAdmin'])->get('/dashboard', function () {
    return view('admin/dashboard');
})->name('lightDashboard'); */




