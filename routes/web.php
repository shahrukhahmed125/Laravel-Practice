<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// route for login page and action

Route::get('/login',[AuthController::class,'index'])->name('login');
Route::post('/login',[AuthController::class,'login'])->name('login');

// route for register page and action

Route::get('/register',[AuthController::class,'register_view'])->name('register');
Route::post('/register',[AuthController::class,'register'])->name('register');

// logout route action

Route::get('/logout', [AuthController::class,'logout'])->name('logout');

// route for the admin dashboard, protected by the admin middleware

Route::get('/admin',[AuthController::class,'ShowAdminDashboard'])->name('admin')->middleware('admin');

// route for the admin dashboard, protected by the scout middleware

Route::get('/scout',[AuthController::class,'ShowScoutDashboard'])->name('scout')->middleware('scout');

// route for the admin dashboard, protected by the player middleware

Route::get('/player',[AuthController::class,'ShowPlayerDashboard'])->name('player')->middleware('player');