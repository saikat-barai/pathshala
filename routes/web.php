<?php

use App\Http\Controllers\Admin\ClassController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
Route::resource('/class', ClassController::class);


Route::get('/datatable', [HomeController::class, 'datatable'])->name('datatable');
Route::get('/fileupload', [HomeController::class, 'fileupload'])->name('fileupload');


Route::get('/dashboard/login', [HomeController::class, 'dashboard_login'])->name('dashboard.login');
Route::get('/dashboard/register', [HomeController::class, 'dashboard_register'])->name('dashboard.register');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


