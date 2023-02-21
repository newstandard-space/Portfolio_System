<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\WorkController;
use App\Http\Controllers\ProfileController;
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

// Route::get('/dashboard', function () {
//     return view('admin.template');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::get('admin', function () {
    return view('admin.template');
});

// Admin All Route
Route::controller(AdminController::class)->group(function () {
    Route::get('admin', 'index')->name('admin.index');
});

// About All Route
Route::controller(AboutController::class)->prefix('admin')->group(function () {
    Route::get('/about', 'index')->name('admin.about.index');
    Route::get('/about/create', 'create')->name('admin.about.create');
    Route::post('/about/store', 'store')->name('admin.about.store');
    Route::get('/about/create/images', 'create_images')->name('admin.about.create.images');
    Route::get('/about/edit/{id}', 'edit')->name('admin.about.edit');
    Route::get('/about/edit/images/{id}', 'edit_images')->name('admin.about.edit.images');
    Route::post('/about/update', 'update')->name('admin.about.update');
    Route::delete('/about/delete', 'delete')->name('admin.about.delete');
    Route::post('/about/sort_update', 'sort_update')->name('admin.about.sort_update');
});

// Work All Route
Route::controller(WorkController::class)->prefix('admin')->group(function () {
    Route::get('/work', 'index')->name('admin.work.index');
    Route::get('/work/create', 'create')->name('admin.work.create');
    Route::post('/work/store', 'store')->name('admin.work.store');
    Route::get('/work/create/images', 'create_images')->name('admin.work.create.images');
    Route::get('/work/edit/{id}', 'edit')->name('admin.work.edit');
    Route::get('/work/edit/images/{id}', 'edit_images')->name('admin.work.edit.images');
    Route::post('/work/update', 'update')->name('admin.work.update');
    Route::delete('/work/delete', 'delete')->name('admin.work.delete');
    Route::post('/work/sort_update', 'sort_update')->name('admin.work.sort_update');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';