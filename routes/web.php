<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;

// Route::get('/', function () {
//     return view('index');
// });

// page controller 
Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/services', [PageController::class, 'service']);
Route::get('/events', [PageController::class, 'event']);
Route::get('/gallery', [PageController::class, 'gallery']);
Route::get('/blog', [PageController::class, 'blog']);
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/register', [PageController::class, 'register'])->name('register');


// admin controller
Route::get('/admin/dashboard', [PageController::class, 'adminDashboard'])->name('admin.dashboard');

// vendor controller
Route::get('/vendor/dashboard', [PageController::class, 'vendorDashboard'])->name('vendor.dashboard');

// customer controller
Route::get('/dashboard', [PageController::class, 'customerDashboard'])->name('dashboard');


//auth controller
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
