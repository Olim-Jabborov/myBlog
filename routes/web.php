<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'check_admin']);

Route::get('/about', [HomeController::class, 'about']);

Route::get('/review', [HomeController::class, 'review']);

Route::post('/review/check', [HomeController::class, 'review_check']);

Route::get('/contact', [HomeController::class, 'contact']);

Route::post('/contact/check', [HomeController::class, 'contact_check']);


// admin routes

Route::get('/users', [AdminController::class, 'users']);

Route::get('/contacts', [AdminController::class, 'contacts']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin/adminpage');
})->name('dashboard');
