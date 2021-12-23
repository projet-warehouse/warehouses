<?php

use App\Http\Controllers;
use App\Http\Controllers\PersonnelsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionsController;
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

//Route::get('/newcontroller',[PersonnelsController::class, "index"]);
    /*return view('admin/pages/newcontroller');
})->name('newcontroller');*/

Route::get('/editcontroller', function () {
    return view('admin/pages/editcontroller');
})->name('editcontroller');

Route::get('/addcategory', function () {
    return view('admin/pages/addcategory');
})->name('addcategory');

Route::get('/addproduct', function () {
    return view('admin/pages/addproduct');
})->name('addproduct');


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

//liste des routes pour les role et permissions

Route::group(['middleware' => ['auth']], function() {
    /**
     * Logout Routes
     */
    //Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

    /**
     * User Routes
     */
    Route::group(['prefix' => 'users'], function() {
        Route::get('/', 'UsersController@index')->name('users.index');
        Route::get('/create', 'UsersController@create')->name('users.create');
        Route::post('/create', 'UsersController@store')->name('users.store');
        Route::get('/{user}/show', 'UsersController@show')->name('users.show');
        Route::get('/{user}/edit', 'UsersController@edit')->name('users.edit');
        Route::patch('/{user}/update', 'UsersController@update')->name('users.update');
        Route::delete('/{user}/delete', 'UsersController@destroy')->name('users.destroy');
    });

    /**
     * User Routes
     */
    Route::group(['prefix' => 'personnels'], function() {
        Route::get('/', [personnelsController::class, 'index'])->name('admin.personnels.index');
        Route::get('/create', [personnelsController::class, 'create'])->name('admin.personnels.create');
        Route::post('/create', [personnelsController::class, 'store'])->name('admin.personnels.store');
        Route::get('/{personnels}/show', [personnelsController::class, 'show'])->name('admin.personnels.show');
        Route::get('/{personnels}/edit', [personnelsController::class, 'edit'])->name('admin.personnels.edit');
        Route::patch('/{personnels}/update', [personnelsController::class, 'update'])->name('admin.personnels.update');
        Route::delete('/{personnels}/delete', [personnelsController::class, 'destroy'])->name('admin.personnels.destroy');
    });

    /*Route::group(['prefix' => 'roles'], function() {
        Route::get('/', [personnelsController::class, 'index'])->name('admin.roles.index');
        Route::get('/create', [personnelsController::class, 'create'])->name('admin.roles.create');
        Route::post('/create', [personnelsController::class, 'store'])->name('admin.roles.store');
        Route::get('/{roles}/show', [personnelsController::class, 'show'])->name('admin.roles.show');
        Route::get('/{roles}/edit', [personnelsController::class, 'edit'])->name('admin.roles.edit');
        Route::patch('/{roles}/update', [personnelsController::class, 'update'])->name('admin.roles.update');
        Route::delete('/{roles}/delete', [personnelsController::class, 'destroy'])->name('admin.roles.destroy');
    });*/

    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionsController::class);
});
