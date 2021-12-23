<?php

use Facade\Ignition\Exceptions\ViewException;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonnelController;




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


route::get('redirects' , 'HomeController@index' );

Route::middleware(['auth:sanctum' ])->group(function(){

    route::get('/dashboard', function(){
        return view('admin.dashboard');
    })->name('dashboard');

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

Route::get('/myaccount', function () {
    return view('visitor/customer/index_myaccount');
})->name('myaccountIndex');

Route::get('/myaccount/order/index', function () {
    return view('visitor/customer/order_index_myaccount');
})->name('myaccountorder');

Route::get('/myaccount/order/close', function () {
    return view('visitor/customer/order_close_myaccount');
})->name('myaccountorderClose');


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




Route::get('/dashboard', function () {
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

Route::get('/calendar', function () {
    return view('admin/pages/apps/calendar');
})->name('calendar');

Route::get('/table', function () {
    return view('admin/pages/tables/table');
})->name('table');

Route::get('/invoice', function () {
    return view('admin/pages/general/invoice');
})->name('invoice');

Route::get('/admin_login', function () {
    return view('admin/pages/auth/login');
})->name('adminlogin');

Route::get('/admin_register', function () {
    return view('admin/pages/auth/register');
})->name('adminregister');

//les permissions
Route::resource('personnel', PersonnelController::class);

Route::get('newsletter', [\App\Http\Controllers\NewsletterController::class, 'index']);
Route::post('newsletter/store','NewsletterController@store');

// //newsletter
// Route::get('App/Http/Controllers/NewsletterController', function () {
//     return view('App/Http/Controllers/NewsletterController');
// })->name('NewsletterController');

// Route::get('resource/views/newsletter', function () {
//     return view('resource/views/newsletter');
// })->name('newsletter');

