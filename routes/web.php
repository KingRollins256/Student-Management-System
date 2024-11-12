<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollController;
use App\Http\Controllers\StudentController;
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

Route::get('/', function () {return view('welcome');});


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');


    // student routes
    Route::get('/create-student', [StudentController::class, 'create'])->name('student.create');
    Route::post('/store-student', [StudentController::class, 'store'])->name('student.store');
    Route::get('/student', [StudentController::class, 'index'])->name('student.index');
    Route::get('/{id}/edit-student', [StudentController::class, 'edit'])->name('student.edit');
    Route::post('/{id}/update-student', [StudentController::class, 'update'])->name('student.update');
    Route::delete('/{id}/destroy-student', [StudentController::class, 'destroy'])->name('student.destroy');
    Route::get('/{id}/show-student', [StudentController::class, 'show'])->name('student.show');





    // Courses routes

    Route::get('/create-course', [CourseController::class, 'create'])->name('course.create');
    Route::post('/store-course', [CourseController::class, 'store'])->name('course.store');
    Route::get('/courses', [CourseController::class, 'index'])->name('course.index');
    Route::get('/{id}/edit', [CourseController::class, 'edit'])->name('course.edit');
    Route::put('/{id}/update', [CourseController::class, 'update'])->name('course.update');
    Route::get('/{id}/show', [CourseController::class, 'show'])->name('course.show');




    // Enrollment Routes
    Route::get('/create-enrol', [EnrollController::class, 'create'])->name('enrollment.create');
    Route::get('/enrollments', [EnrollController::class, 'index'])->name('enrollment.index');
    Route::get('/enrolled', [EnrollController::class, 'index'])->name('enrollment.enrolled');
    Route::put('/{id}/update-enrol', [EnrollController::class, 'update'])->name('enrollment.update');
    Route::get('/{id}/show-enrol', [EnrollController::class, 'show'])->name('enrollment.show');
    Route::get('/{id}/edit-enrol', [EnrollController::class, 'edit'])->name('enrollment.edit');
    Route::post('/store-enrol', [EnrollController::class, 'store'])->name('enrollment.store');







});
