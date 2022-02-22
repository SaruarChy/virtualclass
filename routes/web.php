<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\authentication;
use App\Http\Controllers\allClass\Classes;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Mail;
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
    return view('/frontend/index');
});
Route::get('/welcome', function () {
    return view('layout');
});

// =====================   authentication start==============================
// auth 
Route::get('/teacher/signup/form', [Authentication::class, 'teasignupform'])->name('teacher.signup.form');
Route::post('teacher/register', [Authentication::class, 'teacherRegister'])->name('teacher.register');
// Route::get('/teacher/login/form', [Authentication::class, 'tealoginform'])->name('teacher.login.form');
Route::post('/teacher/login', [Authentication::class, 'teacherLogin'])->name('teacher.login');


// student auth 
Route::get('/student/signup/form', [Authentication::class, 'stdsignupform'])->name('student.signup.form');
Route::post('student/register', [Authentication::class, 'studentRegister'])->name('student.register');
// Route::get('/student/login/form', [Authentication::class, 'stdloginform'])->name('student.login.form');
Route::post('/student/login', [Authentication::class, 'studentLogin'])->name('student.login');


Route::get('/Logout', [Authentication::class, 'logout'])->name('Logout');
Route::get('/password/forgot', [Authentication::class, 'forgotPasswordForm'])->name('password.forgot');
Route::post('/password/forgot', [Authentication::class, 'sendResetLink'])->name('password.forgot.link');
Route::post('/password/reset/{token}', [Authentication::class, 'sendResetForm'])->name('reset.password.form');

Route::get('login', [Authentication::class, 'login'])->name('login');
// =============================  authentication end ======================================

// ===============================   all classes ============================

Route::get('teacher/myclass', [Classes::class, 'teacherClass'])->name('myclass');
