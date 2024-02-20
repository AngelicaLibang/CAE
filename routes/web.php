<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\OrderController;


//Login
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::get('/user_login', function () {
    return view('user_login');
});

Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login.submit');
Route::get('/logout', [UserController::class, 'logout']);

// User Side
Route::middleware('checkSessionUser')->get('/user_account/upload', [UserController::class, 'upload_profile_picture_form']);
Route::middleware('checkSessionUser')->post('/user_account/upload', [UserController::class, 'upload_profile_picture']);
Route::middleware('checkSessionUser')->post('/user_merch', [OrderController::class, 'place_order']);
Route::middleware('checkSessionUser')->get('/user_account', [StudentController::class, 'view_account']);
Route::middleware('checkSessionUser')->get('/user_merch', [OrderController::class, 'index_product']);
Route::middleware('checkSessionUser')->get('/user_courses', [ClassController::class, 'index']);
Route::middleware('checkSessionUser')->post('/user_merch', [OrderController::class, 'place_order']);
Route::get('/user_dashboard', function () {
    return view('user_dashboard');
});

// Admin
Route::get('/students/report', [StudentController::class, 'generate_report_student']);
Route::get('/students', function () {
    return view('students');
});

Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/create', [StudentController::class, 'add_student_form']);
Route::get('/students/edit/{id}', [StudentController::class, 'edit_student_form']);
Route::get('/students/{id}', [StudentController::class, 'student_show']);
Route::post('/students', [StudentController::class, 'add_student']);
Route::put('/students/{id}', [StudentController::class, 'edit_student']);
Route::delete('/students/{id}', [StudentController::class, 'delete_student']);


Route::get('/admin_dashboard', [UserController::class, 'show_dashboard']);
Route::get('/admin_dashboard', function () {
    return view('admin_dashboard');
});

Route::get('/admin_merch', function () {
    return view('admin_merch');
});

Route::get('/admin_notification', function () {
    return view('admin_notification');
});
Route::get('/admin_faculty/report', [FacultyController::class, 'generate_report_faculty']);
Route::get('/admin_faculty', function () {
    return view('admin_faculty');
});
Route::get('/admin_faculty', [FacultyController::class, 'index']);
Route::get('/admin_faculty/create', [FacultyController::class, 'add_faculty_form']);
Route::get('/admin_faculty/edit/{id}', [FacultyController::class, 'edit_faculty_form']);
Route::get('/admin_faculty/{id}', [FacultyController::class, 'admin_faculty_show']);
Route::post('/admin_faculty', [FacultyController::class, 'add_faculty']);
Route::put('/admin_faculty/{id}', [FacultyController::class, 'edit_faculty']);
Route::delete('/admin_faculty/{id}', [FacultyController::class, 'delete_faculty']);
Route::get('/admin_department', function () {
    return view('admin_department');
});

Route::middleware('checkSessionAdmin')->get('/admin_department', [ClassController::class, 'index']);
Route::get('/admin_orders', [OrderController::class, 'show_all_orders']);
Route::get('/admin_orders/{id}', [OrderController::class, 'show_order']);
Route::put('/admin_orders/accept/{id}', [OrderController::class, 'accept_order']);
Route::put('/admin_orders/status/{id}', [OrderController::class, 'update_order_status']);

//Public
Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/message_ceo', function () {
    return view('message_ceo');
});
Route::get('/merch', function () {
    return view('merch');
});
Route::get('/enroll', function () {
    return view('enroll');
});
Route::get('/inquire', function () {
    return view('inquire');
});

Route::get('/cs', function () {
    return view('cs');
});
