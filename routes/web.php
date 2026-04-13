<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\TaskController;

Route::get('/', function () {
    return view('welcome');
});

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('companies', CompanyController::class);
    Route::resource('employees', EmployeeController::class);
    Route::resource('tasks', TaskController::class);

    // Super Admin Route - সরাসরি Middleware Class ব্যবহার করছি
    Route::middleware(\App\Http\Middleware\SuperAdminMiddleware::class)->group(function () {

        Route::get('/super-admin/dashboard', function () {
            return view('admin.superadmin.dashboard');
        })->name('superadmin.dashboard');

    });

});
