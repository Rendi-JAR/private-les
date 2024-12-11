<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ReportController;

Route::get('/students/report', [ReportController::class, 'generatePdf'])->name('students.report');
Route::resource('students', StudentController::class);

Route::get('/', function () {
    return view('welcome');
});
