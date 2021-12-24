<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\CourseController;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Routing\Redirector;

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


Route::redirect('/','/home');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/home/{id}',[HomeController::class,'show'])->name('home.show');

Route::get('/admin/courses',[CourseController::class,'index'])->name('admin.courses.index')->middleware('auth');

Route::get('/admin/courses/create',[CourseController::class,'create'])->name('admin.courses.create')->middleware('auth');

Route::post('/admin/courses',[CourseController::class,'store'])->name('admin.courses.store')->middleware('auth');

Route::get('/admin/courses/{id}',[CourseController::class,'show'])->name('admin.courses.show')->middleware('auth');

Route::get('/admin/courses/{id}/edit',[CourseController::class,'edit'])->name('admin.courses.edit')->middleware('auth');

Route::put('/admin/courses/{id}',[CourseController::class,'update'])->name('admin.courses.update')->middleware('auth');

Route::delete('/admin/courses/{id}',[CourseController::class,'destroy'])->name('admin.courses.destroy')->middleware('auth');

Auth::routes();


