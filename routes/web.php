<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;

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
//     return view('pages.home');
// })->name('home');

Route::get('/', 'App\Http\Controllers\HomeController@index')
    ->name('home');

// Route::get('/', 'HomeController@index');

Route::get('/package', function () {
    return view('pages.package');
})->name('package');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Route::get('/', 'App\Http\Controllers\Auth\LoginController@index')
//     ->name('login');

// Route::get('/', 'App\Http\Controllers\Auth\RegisterController@index')
//     ->name('register');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Route::get('/admin/test', function () {
//     return view('pages.admin.dashboard');
// })->name('dashboard1');

// Route::get('/admindash', 'App\Http\Controllers\Admin\DashboardController@index')
//     ->name('deash');

Route::prefix('admin')
    ->middleware(['auth','admin'])
    ->group(function() {
        Route::get('/', 'App\Http\Controllers\Admin\DashboardController@index')
            ->name('dashboard');
    });

// Route::prefix('admin')
//     ->middleware(['auth','admin'])
//     ->group(function() {
//         Route::get('/dash', 'App\Http\Controllers\Admin\DashboardController@index')
//             ->name('dashboard');
        
//     });


// Route::get('/registered', [RegisterController::class, 'index']);
// Route::post('/registered', [RegisterController::class, 'store']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
