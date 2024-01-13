<?php

use App\Http\Controllers\BelajarController;
use App\Http\Controllers\DataTableController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\RosterController;
use App\Http\Controllers\LemburController;
use App\Http\Controllers\CutiController;
use App\Http\Controllers\ProfileController;


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

// Route::get('/', function () {
//     echo 'Hello World';
// });
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login-proses');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register-proses', [LoginController::class, 'register_proses'])->name('register-proses');

Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    // Route::get('/assets', [HomeController::class, 'assets'])->name('assets');
    Route::get('/profile/create', [ProfileController::class, 'create'])->name('profile.create');
    Route::post('profile/store', [ProfileController::class, 'store'])->name('profile.store');
    Route::get('/profilee/{id}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profilee/{id}/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profilee/{id}/delete', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //untuk employe    
    Route::get('/employe', [EmployeController::class, 'index'])->name('employe');
    // Route::get('/assets', [HomeController::class, 'assets'])->name('assets');
    Route::get('/employe/create', [EmployeController::class, 'create'])->name('employe.create');
    Route::post('employe/store', [EmployeController::class, 'store'])->name('employe.store');
    Route::get('/employee/{id}/edit', [EmployeController::class, 'edit'])->name('employe.edit');
    Route::put('/employee/{id}/update', [EmployeController::class, 'update'])->name('employe.update');
    Route::delete('/employee/{id}/delete', [EmployeController::class, 'destroy'])->name('employe.destroy');

     //untuk divisi    
     Route::get('/divisi', [DivisiController::class, 'index'])->name('divisi');
     Route::get('/divisi/create', [DivisiController::class, 'create'])->name('divisi.create');
    Route::post('divisi/store', [DivisiController::class, 'store'])->name('divisi.store');
     Route::get('/divisie/{id}/edit', [DivisiController::class, 'edit'])->name('divisi.edit');
     Route::put('/divisie/{id}/update', [DivisiController::class, 'update'])->name('divisi.update');
     Route::delete('/divisie/{id}/delete', [DivisiController::class, 'destroy'])->name('divisi.destroy');

    //untuk gaji    
    Route::get('/gaji', [GajiController::class, 'index'])->name('gaji');
    Route::get('/gaji/create', [GajiController::class, 'create'])->name('gaji.create');
    Route::post('gaji/store', [GajiController::class, 'store'])->name('gaji.store');
    Route::get('/gajie/{id}/edit', [GajiController::class, 'edit'])->name('gaji.edit');
    Route::put('/gajie/{id}/update', [GajiController::class, 'update'])->name('gaji.update');
    Route::delete('/gajie/{id}/delete', [GajiController::class, 'destroy'])->name('gaji.destroy');

    //untuk user
    Route::get('/user', [HomeController::class, 'index'])->name('user');
    Route::get('/assets', [HomeController::class, 'assets'])->name('assets');
    Route::get('/create', [HomeController::class, 'create'])->name('user.create');
    Route::post('/store', [HomeController::class, 'store'])->name('user.store');

    //untuk roster    
    Route::get('/roster', [RosterController::class, 'index'])->name('roster');
    Route::get('/roster/create', [RosterController::class, 'create'])->name('roster.create');
    Route::post('roster/store', [RosterController::class, 'store'])->name('roster.store');
    Route::get('/rostere/{id}/edit', [RosterController::class, 'edit'])->name('roster.edit');
    Route::put('/rostere/{id}/update', [RosterController::class, 'update'])->name('roster.update');
    Route::delete('/rostere/{id}/delete', [RosterController::class, 'destroy'])->name('roster.destroy');

    //untuk lembur    
    Route::get('/lembur', [LemburController::class, 'index'])->name('lembur');
    Route::get('/lembur/create', [LemburController::class, 'create'])->name('lembur.create');
    Route::post('lembur/store', [LemburController::class, 'store'])->name('lembur.store');
    Route::get('/lembur/{id}/edit', [LemburController::class, 'edit'])->name('lembur.edit');
    Route::put('/lembur/{id}/update', [LemburController::class, 'update'])->name('lembur.update');
    Route::delete('/lembur/{id}/delete', [LemburController::class, 'delete'])->name('lembur.delete');

    //untuk cuti    
    Route::get('/cuti', [CutiController::class, 'index'])->name('cuti');
    Route::get('/cuti/create', [CutiController::class, 'create'])->name('cuti.create');
    Route::post('cuti/store', [CutiController::class, 'store'])->name('cuti.store');
    Route::get('/cuti/{id}/edit', [CutiController::class, 'edit'])->name('cuti.edit');
    Route::put('/cuti/{id}/update', [CutiController::class, 'update'])->name('cuti.update');
    Route::delete('/cuti/{id}/delete', [CutiController::class, 'destroy'])->name('cuti.destroy');


    Route::get('/clientside', [DataTableController::class, 'clientside'])->name('clientside');
    Route::get('/serverside', [DataTableController::class, 'serverside'])->name('serverside');

    Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('user.edit');
    Route::get('/detail/{id}', [HomeController::class, 'detail'])->name('user.detail');
    Route::put('/update/{id}', [HomeController::class, 'update'])->name('user.update');
    Route::delete('/delete/{id}', [HomeController::class, 'delete'])->name('user.delete');


    Route::group(['prefix' => 'belajar'], function () {
        Route::get('/cache', [BelajarController::class, 'cache'])->name('cache');
        Route::get('/import', [BelajarController::class, 'import'])->name('import');
        Route::post('/import-proses', [BelajarController::class, 'import_proses'])->name('import-proses');
    });
});
