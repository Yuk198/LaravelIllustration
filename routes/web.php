<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('student', [StudentController::class, 'get_all_student']);
Route::get('student/create', [StudentController::class, 'create_student']);
Route::post('student/create', [StudentController::class, 'add_student']);
Route::get('student/{id}/edit', [StudentController::class, 'get_student_by_id']);
Route::put('student/{id}', [StudentController::class, 'edit_student'])->name('student.edit');
Route::delete('student/{student}', [StudentController::class, 'delete_student']);