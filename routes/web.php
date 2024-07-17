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
Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('admin.logout');

Route::get('dashboard', [AdminController::class,'dashboard']);

Route::get('/', [AdminController::class,'welcome']);
Route::get('/about', [UserController::class,'about']);
Route::get('/project', [UserController::class,'project']);
Route::get('/project/{id}', [UserController::class,'showProject'])->name('project.show');
Route::get('/news', [UserController::class, 'new']);
Route::get('/recruit', [UserController::class, 'recruit']);
Route::get('/service', [UserController::class, 'service']);
Route::get('/service1', [UserController::class, 'service1']);
Route::get('/service2', [UserController::class, 'service2']);
Route::get('/service3', [UserController::class, 'service3']);
Route::get('/service4', [UserController::class, 'service4']);
Route::get('/contact', [UserController::class,'contact']);
Route::post('/contact', [UserController::class,'sendContact'])->name('contact.send');
Route::get('/privacy', [UserController::class,'privacy']);
Route::get('/ad/{id}', [UserController::class, 'story']);
Route::post('/inquiry', [UserController::class, 'storeInquiry'])->name('inquiry.store');

// Admin
//Project
Route::get('/admin/project', [AdminController::class,'allProject'])->name('project')->middleware(['admin']);
Route::get('/admin/project/add', [AdminController::class,'addProject'])->name('add.project')->middleware(['admin']);
Route::post('/admin/project/save', [AdminController::class,'saveProject'])->name('save.project')->middleware(['admin']);
Route::get('/admin/project/edit/{id}', [AdminController::class,'editProject'])->name('edit.project')->middleware(['admin']);
Route::post('/admin/project/update', [AdminController::class,'updateProject'])->name('update.project')->middleware(['admin']);
Route::get('/admin/project/delete/{id}', [AdminController::class,'deleteProject'])->name('delete.project')->middleware(['admin']);

//News
Route::get('/admin/news', [AdminController::class,'allNews'])->name('news')->middleware(['admin']);
Route::get('/admin/news/add', [AdminController::class,'addNews'])->name('add.news')->middleware(['admin']);
Route::post('/admin/news/save', [AdminController::class,'saveNews'])->name('save.news')->middleware(['admin']);
Route::get('/admin/news/edit/{id}', [AdminController::class,'editNews'])->name('edit.news')->middleware(['admin']);
Route::post('/admin/news/update', [AdminController::class,'updateNews'])->name('update.news')->middleware(['admin']);
Route::get('/admin/news/delete/{id}', [AdminController::class,'deleteNews'])->name('delete.news')->middleware(['admin']);

//Advertise
Route::get('/admin/advertise', [AdminController::class,'allAdvertise'])->name('admin.advertise.show')->middleware(['admin']);
Route::get('/admin/advertise-page-add', [AdminController::class,'addPageAdvertise'])->name('admin.page.add')->middleware(['admin']);
Route::post('/admin/advertise-page-store', [AdminController::class,'storePageAdvertise'])->name('admin.page.store')->middleware(['admin']);
Route::get('/admin/advertise-page-edit/{id}', [AdminController::class,'editPageAdvertise'])->name('admin.page.edit')->middleware(['admin']);
Route::post('/admin/advertise-page-update', [AdminController::class,'updatePageAdvertise'])->name('admin.page.update')->middleware(['admin']);
Route::post('/admin/advertise-page-delete', [AdminController::class,'deletePageAdvertise'])->name('admin.page.delete')->middleware(['admin']);
Route::get('/admin/advertise-section-add', [AdminController::class,'addSectionAdvertise'])->name('admin.section.add')->middleware(['admin']);
Route::post('/admin/advertise-section-store', [AdminController::class,'storeSectionAdvertise'])->name('admin.section.store')->middleware(['admin']);
Route::get('/admin/advertise-section-edit/{id}', [AdminController::class,'editSectionAdvertise'])->name('admin.section.edit')->middleware(['admin']);
Route::post('/admin/advertise-section-update', [AdminController::class,'updateSectionAdvertise'])->name('admin.section.update')->middleware(['admin']);
Route::post('/admin/advertise-section-delete', [AdminController::class,'deleteSectionAdvertise'])->name('admin.section.delete')->middleware(['admin']);
Route::get('/admin/advertise-story-add', [AdminController::class,'addStoryAdvertise'])->name('admin.story.add')->middleware(['admin']);
Route::post('/admin/advertise-story-store', [AdminController::class,'storeStoryAdvertise'])->name('admin.story.store')->middleware(['admin']);
Route::get('/admin/advertise-story-edit/{id}', [AdminController::class,'editStoryAdvertise'])->name('admin.story.edit')->middleware(['admin']);
Route::post('/admin/advertise-story-update', [AdminController::class,'updateStoryAdvertise'])->name('admin.story.update')->middleware(['admin']);
Route::post('/admin/advertise-story-delete', [AdminController::class,'deleteStoryAdvertise'])->name('admin.story.delete')->middleware(['admin']);

//Change Password
Route::get('/admin/change-password', [AdminController::class,'changePassword'])->name('admin.password.change')->middleware(['admin']);
Route::post('/admin/change-password', [AdminController::class,'updatePassword'])->name('admin.password.update')->middleware(['admin']);


