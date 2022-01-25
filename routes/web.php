<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PackageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

Route::get('/packages/{package}', [PackageController::class, 'show']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
Route::get('/checkout', function (Request $request) {

    return view('checkout', compact('request'));
})->name('checkout')->middleware('auth');
Route::post('/order/store', [OrderController::class, 'store'])->name('order.store');

Route::get('/confirm', function (Request $request) {
    $name = $request->name;

    return view('confirm', compact('name'));
})->name('confirm');
