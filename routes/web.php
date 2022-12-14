<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
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


Route::namespace('Auth')->group(function () {
        Route::get('login', [LoginController::class,'create'])->name('login');
        Route::post('login',  [LoginController::class,'login'])->name('login');
});

Route::group(['prefix'=>'users','as'=>'users.','middleware'=>'auth'],function (){
    Route::get('register', [UserController::class, 'create'])->name('register');
    Route::post('register', [UserController::class, 'store'])->name('register');
    Route::get('', [UserController::class, 'index'])->name('index');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [UserController::class, 'update'])->name('update');
    Route::post('delete/{id}',  [UserController::class,'destroy'])->name('delete');
    Route::get('logout',  [UserController::class,'logout'])->name('logout');
});
Route::get('dashboard',[DashboardController::class,'index'])->middleware(('auth'))->name('dashboard');


