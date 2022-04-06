<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\dashboardController;

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

Auth::routes();


Route::group(['middleware' => ['auth']], function() {
    Route::get('/', [dashboardController::class,'dash']);
    Route::resource('roles', RoleController::class)->middleware('permission:role-list');
    Route::resource('users', UserController::class)->middleware('permission:user-list');
    Route::resource('products', ProductController::class)->middleware('permission:product-list');
    Route::resource('tasks', TaskController::class)->middleware('permission:task-list');
    Route::get('/download/{file}', [TaskController::class, 'download']);
    Route::get('/picdownload/{picfile}', [TaskController::class, 'picdownload']);
    Route::get('export', [TaskController::class, 'export_excel']);
    Route::get('search', [TaskController::class, 'search']);

    // Route::get('profile', ProfileController::class, 'edit')->name('profile.edit');
    // Route::patch('profile', ProfileController::class, 'update')->name('profile.update');

});
