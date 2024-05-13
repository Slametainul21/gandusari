<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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
Route::get('/', [DashboardController::class, 'home'])->name('home');
Route::get('/home', [DashboardController::class, 'home'])->name('home');

Route::get('/about', [DashboardController::class, 'about'])->name('about');
Route::get('/details', [DashboardController::class, 'detail'])->name('details');

Route::get('/datatanaman', [DashboardController::class, 'index'])->name('datatanaman');

Route::get('/tambah', [DashboardController::class, 'create'])->name('tambah');
Route::post('/insertdata', [DashboardController::class, 'insertdata'])->name('insertdata');

Route::get('/editdata/{id}', [DashboardController::class, 'editdata'])->name('editdata');
Route::post('/updatedata/{id}', [DashboardController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}', [DashboardController::class, 'delete'])->name('delete');