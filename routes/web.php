<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudController;
use App\Http\Controllers\BatchController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/login",[LoginController::class, 'Login'])->name("/login");
Route::resource("/admin",AdminController::class);
Route::resource("/users",UserController::class);
Route::resource('/students',StudentController::class);
Route::resource('/teachers',TeacherController::class);
Route::resource('/courses',CourseController::class);

Route::resource("/stud",StudController::class);
// Route::resource('/batches',BatchController::class);
