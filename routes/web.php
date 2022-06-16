<?php

use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[HomeController::class,'redirectPage']);
Route::get('/home',[HomeController::class,'view']);
Route::get('/add_doctor_view',[AdminHomeController::class,'add_view'])->name('admin.add_doctor');
Route::post('/upload_doctor',[AdminHomeController::class,'upload'])->name('admin.upload_doctor');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
