<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\TaskController;

Route::get('/', function () {
    return view('welcome'); // home page
});

Route::prefix('admin')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::resource('companies', CompanyController::class);
    Route::resource('employees', EmployeeController::class);
    Route::resource('tasks', TaskController::class);

});
