<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthenticatedSessionController;

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
// login
Route::get('/admin/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('admin.login');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('admin.logout');

Route::get('dashboard', [AdminController::class,'dashboard']);

Route::get('/', [AdminController::class,'welcome']);
Route::get('/about', [UserController::class,'about']);
Route::get('/project', [UserController::class,'project']);
Route::get('/project1', [UserController::class,'project1']);
Route::get('/project2', [UserController::class,'project2']);
Route::get('/project3', [UserController::class,'project3']);
Route::get('/project4', [UserController::class,'project4']);
Route::get('/project5', [UserController::class,'project5']);
Route::get('/project6', [UserController::class,'project6']);
Route::get('/project7', [UserController::class,'project7']);
Route::get('/project8', [UserController::class,'project8']);
Route::get('/news', [UserController::class, 'new']);
Route::get('/recruit', [UserController::class, 'recruit']);
Route::get('/service', [UserController::class, 'service']);
Route::get('/service1', [UserController::class, 'service1']);
Route::get('/service2', [UserController::class, 'service2']);
Route::get('/service3', [UserController::class, 'service3']);
Route::get('/service4', [UserController::class, 'service4']);
Route::get('/contact', [UserController::class,'contact']);
Route::post('/contact/submit', [UserController::class,'submitContactForm']);
Route::get('/privacy', [UserController::class,'privacy']);
Route::get('/story', [UserController::class, 'story']);

Route::get('/admin/project', [AdminController::class,'allProject']);
Route::get('/admin/news', [AdminController::class,'allNews']);
Route::get('/admin/advertise', [AdminController::class,'allAdvertise']);
Route::post('/addproject', [AdminController::class, 'saveProject']);


