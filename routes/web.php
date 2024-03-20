<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DepartmentController;
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

// Add Department
Route::get('/adddepartment', function () {
    return view('adddepartment');
});
// addcources
Route::get('/addcources', function () {
    return view('addcources');
});
// addteacher
Route::get('/addteacher', function () {
    return view('addteacher');
});
// addstudent
Route::get('/addstudent', function () {
    return view('addstudent');
});
// alldepartment
Route::get('/alldepartment', function () {
    return view('alldepartment');
});
// allcources
Route::get('/allcources', function () {
    return view('allcources');
});
// allteacher
Route::get('/allteacher', function () {
    return view('allteacher');
});
// allstudent
Route::get('/allstudent', function () {
    return view('allstudent');
});
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('logout', [AuthController::class, 'destroy']);
Route::post('/Add_Depertment', [AuthController::class, 'InsertDepartment'])->middleware(['auth', 'verified'])->name('Add_Depertment');
// Add_Cources
Route::post('/Add_Cources', [AuthController::class, 'InsertCources'])->middleware(['auth', 'verified'])->name('Add_Cources');
// Add_Teacher
Route::post('/Add_Teacher', [AuthController::class, 'InsertTeacher'])->middleware(['auth', 'verified'])->name('Add_Teacher');
// Add Student
Route::post('/Add_Student', [AuthController::class, 'InsertStudent'])->middleware(['auth', 'verified'])->name('Add_Student');
// All Department
Route::get('/alldepartment', [AuthController::class, 'ShowDepartment'])->middleware(['auth', 'verified']);
// All Cources
Route::get('/allcources', [AuthController::class, 'ShowCources'])->middleware(['auth', 'verified']);
// All teacher
Route::get('/allteacher', [AuthController::class, 'ShowTeacher'])->middleware(['auth', 'verified']);
// All Student
Route::get('/allstudent', [AuthController::class, 'ShowStudent'])->middleware(['auth', 'verified']);
// Dashboard
Route::get('/dashboard', [AuthController::class, 'Dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
// detailsstudent
Route::get('/detailsstudent', [AuthController::class, 'ShowDateils'])->middleware(['auth', 'verified']);
