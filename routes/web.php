<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;

// Add this route if not exists
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');


Route::resource('doctors', DoctorController::class);


// Auth Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth')->name('dashboard');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Resource Routes
Route::resource('students', StudentController::class)->middleware('auth');
Route::resource('departments', DepartmentController::class)->middleware('auth');


Route::resource('doctors', DoctorController::class);
Route::resource('courses', CourseController::class);
Route::resource('employees', EmployeeController::class);


