<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
Auth::routes();

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

Route::get('/about', function () {
    return view('about');
});

Route::get('/kursus', function () {
    return view('courses');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login-signup', function () {
    return view('login-signup');
});


Route::get('/courses/create', [AdminController::class, 'createCourse'])->name('courses.create')->middleware('admin');


Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create');
Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'web'])->group(function () {
    Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
    Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create');
    Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');
});
Route::middleware(['auth', 'web'])->group(function () {
    Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
    Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create')->middleware('admin');
    Route::post('/courses', [CourseController::class, 'store'])->name('courses.store')->middleware('admin');
});
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->middleware('admin');

Route::prefix('admin')->name('admin.')->middleware('admin')->group(function () {
    // Rute-rute lainnya untuk admin
    
    // Rute untuk menyimpan kursus
    Route::post('kursus', [App\Http\Controllers\AdminController::class, 'storeKursus'])->name('kursus.store');
});
