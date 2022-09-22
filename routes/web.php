<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Controller\SubscriberController;

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
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/send', [SubscriberController::class, 'subscribers']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/admin', function () {
    return view('admin.index');
})->middleware(['auth', 'role:admin'])->name('admin.index');

// Route::resource('/products', function () {
//     return view('products.index');
// })->middleware(['auth', 'role:admin'])->name('products.index');

Route::resource('products', ProductController::class);

require __DIR__.'/auth.php';
