<?php

use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::group(['middleware' => 'auth:sanctum'], function () {
Route::middleware(['auth:sanctum'])->group(function () {

    Route::get('logout', [UserController::class, 'logout'])->name('logout');
    Route::get('getuser', [UserController::class, 'getUser'])->name('getUser');

    Route::prefix('user')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('user');
        Route::post('add', [UserController::class, 'store'])->name('user.add');
        Route::get("show/{id}", [UserController::class, 'show'])->name('user.show');
        Route::post("update/{id}", [UserController::class, 'update'])->name('user.update');
        Route::delete('delete/{id}', [UserController::class, 'destroy'])->name('user.delete');
    });

    Route::prefix('product')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('product');
        Route::post('add', [ProductController::class, 'store'])->name('product.add');
        Route::get('edit/{id}', [ProductController::class, 'show'])->name('product.edit');
        Route::put('update/{id}', [ProductController::class, 'update'])->name('product.update');
        Route::delete('delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');
    });

    Route::prefix('student')->group(function () {
        Route::get('/', [StudentController::class, 'index'])->name('student');
        Route::post('add', [StudentController::class, 'store'])->name('student.add');
        Route::get('edit/{id}', [StudentController::class, 'show'])->name('student.edit');
        Route::post('update/{id}', [StudentController::class, 'update'])->name('student.update');
        Route::delete('delete/{id}', [StudentController::class, 'destroy'])->name('student.delete');
    });

    Route::prefix('permission')->group(function () {
        Route::get('/', [PermissionController::class, 'index'])->name('permission');
        Route::post('add', [PermissionController::class, 'store'])->name('permission.add');
        Route::get('edit/{id}', [PermissionController::class, 'show'])->name('permission.edit');
        Route::post('update/{id}', [PermissionController::class, 'update'])->name('permission.update');
        Route::delete('delete/{id}', [PermissionController::class, 'destroy'])->name('permission.delete');
    });

    Route::prefix('role')->group(function () {
        Route::get('/', [RoleController::class, 'index'])->name('role');
        Route::post('add', [RoleController::class, 'store'])->name('role.add');
        Route::get('edit/{id}', [RoleController::class, 'show'])->name('role.edit');
        Route::post('update/{id}', [RoleController::class, 'update'])->name('role.update');
        Route::delete('delete/{id}', [RoleController::class, 'destroy'])->name('role.delete');
    });
});

Route::post("login", [UserController::class, 'login'])->name('login');
Route::post("register", [UserController::class, 'register'])->name('register');
