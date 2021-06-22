<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\HomeController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/create-siswa', [AdminController::class, 'create'])->name('admin.create');
Route::post('/create-siswa', [AdminController::class, 'store']);
Route::get('/edit-siswa', [AdminController::class, 'edit'])->name('admin.edit');
Route::get('/delete-siswa', [AdminController::class, 'destroy'])->name('admin.destroy');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/data-admin', [HomeController::class, 'admin'])->name('admin.admin');
Route::get('/data-siswa', [HomeController::class, 'create'])->name('admin.show');
Route::get('/admin-show', [HomeController::class, 'adminShow'])->name('admin.datasiswa');

Route::get('/beranda', [StudentController::class, 'index'])->name('index');
Route::get('/create-data-siswa', [StudentController::class, 'create'])->name('student.create');
Route::post('/create-data-siswa', [StudentController::class, 'store']);