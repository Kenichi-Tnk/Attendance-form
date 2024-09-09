<?php

use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\AttendanceController;
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

Route::get('/', function () {
    return view('welcome');
});

//ログインホーム
Route::get('/', [AttendanceController::class, 'punch'])
->middleware('auth','verified');

//ログアウト
Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth')->name('logout');

//打刻機能
Route::post('/work', [AttendanceController::class, 'work'])
->name('work');

//日付別管理ページ
Route::get('/attendance/date', [AttendanceController::class, 'indexDate'])
->name('attendance/date');
Route::post('/attendance/date', [AttendanceController::class, 'perDate'])
->name('per/date');

