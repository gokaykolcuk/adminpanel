<?php

use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AdminController;
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

Route::get('/admin/anasayfa',[AdminController::class,'index'])->middleware('auth')->name('admin.index');
Route::get('/admin', [AdminController::class, 'login'])->name('admin.login');
Route::get('/admin/register', [AdminController::class, 'register'])->name('admin.register');
Route::get('/admin/forget-password', [AdminController::class, 'forgetPassword'])->name('admin.forgetpassword');

Route::post('/admin/login', [MemberController::class, 'login'])->name('admin.login.post');
Route::post('/admin/logout', [MemberController::class, 'logout'])->name('admin.logout.post');
Route::post('/admin/registerpost',[MemberController::class, 'register'])->name('admin.registerpost');

Route::get('admin/users',[UserController::class, 'index'])->middleware('auth')->name('admin.users.index');
Route::get('admin/users/{user}', [UserController::class, 'show'])->middleware('auth')->name('admin.users.show');

Route::post('admin/users/{user}',[UserController::class, 'updatePermissions'])->middleware('auth')->name('admin.users.updatePermissions');
