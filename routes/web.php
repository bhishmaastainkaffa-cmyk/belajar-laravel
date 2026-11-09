<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard.index');

Route::get('/admin/about', [AboutController::class, 'index'])
    ->name('about.index');

Route::get('/admin/student', [StudentController::class, 'index'])
    ->name('students.index');

Route::post('/admin/student', [StudentController::class, 'store'])
    ->name('admin.student.store');

Route::get('/admin/classroom', [ClassroomController::class, 'index'])
    ->name('classrooms.index');

Route::get('/admin/subject', [SubjectController::class, 'index'])
    ->name('subjects.index');

Route::get('/admin/teacher', [TeacherController::class, 'index'])
    ->name('teachers.index');


