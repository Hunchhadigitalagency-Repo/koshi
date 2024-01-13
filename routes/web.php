<?php

use App\Http\Controllers\KoshiStudentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
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
Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::post('/students/store', [StudentController::class, 'store'])->name('students.store');
Route::get('/students', [KoshiStudentController::class, 'index'])->name('students.index');
Route::get('/students/create', [KoshiStudentController::class, 'create'])->name('students.create');
Route::post('/students/store', [KoshiStudentController::class, 'store'])->name('students.store');
Route::get('/students/edit/{id}', [KoshiStudentController::class, 'edit'])->name('students.edit');
Route::post('/students/update/{id}', [KoshiStudentController::class, 'update'])->name('students.update');
Route::delete('/students/delete/{id}', [KoshiStudentController::class, 'destroy'])->name('students.destroy');
