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
//customer
Route::get('customeradd', [App\Http\Controllers\Admin\CustomerController::class, 'add']);
Route::get('customerlist', [App\Http\Controllers\Admin\CustomerController::class, 'read']);
Route::post('customer/store', [App\Http\Controllers\Admin\CustomerController::class, 'store']);
//invoice
Route::get('newinvoice', [App\Http\Controllers\Admin\InvoiceController::class, 'add']);
Route::get('invoicelist', [App\Http\Controllers\Admin\InvoiceController::class, 'read']);
Route::get('getcustdetails', [App\Http\Controllers\Admin\CustomerController::class, 'get_first']);
Route::post('createinvoice', [App\Http\Controllers\Admin\InvoiceController::class, 'createinvoice']);
//item
Route::get('itemadd', [App\Http\Controllers\Admin\ItemController::class, 'add']);
Route::post('item/store', [App\Http\Controllers\Admin\ItemController::class, 'store']);
Route::get('itemlist', [App\Http\Controllers\Admin\ItemController::class, 'read']);
