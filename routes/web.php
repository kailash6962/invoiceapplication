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
    return view('auth/login');
});
Route::get('login', function () {
    return view('auth/login');
});
Route::get('register', function () {
    return view('auth/register');
});
Route::get('dashboard', function () {
    return view('admin/common/dashboard');
})->middleware('auth');

Auth::routes();

Route::get('customeradd', [App\Http\Controllers\Admin\CustomerController::class, 'add']);
Route::get('customerlist', [App\Http\Controllers\Admin\CustomerController::class, 'read']);
Route::post('customer/store', [App\Http\Controllers\Admin\CustomerController::class, 'store']);

// Route::post('newinvoice', [App\Http\Controllers\Admin\InvoiceController::class, 'store']);
Route::get('invoicelist', [App\Http\Controllers\Admin\InvoiceController::class, 'read']);
