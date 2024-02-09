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
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ShiftDailyController;
use App\Http\Controllers\ShiftGroupController;
use App\Http\Controllers\ShiftController;
use App\Http\Controllers\EmployeshiftController;


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
    Route::get('/employee/{general_karyawan_id}/edit', [EmployeController::class, 'edit'])->name('employe.edit');
    // Route::get('/employee/edit', function () {
    //     return view('employe/edit');
    // })->name('employe.edits');
    Route::put('/employee/{general_karyawan_id}/update', [EmployeController::class, 'update'])->name('employe.update');
    Route::get('/employee/{general_karyawan_id}/delete', [EmployeController::class, 'destroy'])->name('employe.destroy');
    Route::post('/employee/import-proses', [EmployeController::class, 'import_proses'])->name('employe.import-proses');

     //untuk divisi    
     Route::get('/divisi', [DivisiController::class, 'index'])->name('divisi');
     Route::get('/divisi/create', [DivisiController::class, 'create'])->name('divisi.create');
    Route::post('divisi/store', [DivisiController::class, 'store'])->name('divisi.store');
     Route::get('/divisie/{divisi_id}/edit', [DivisiController::class, 'edit'])->name('divisi.edit');
     Route::put('/divisie/{divisi_id}/update', [DivisiController::class, 'update'])->name('divisi.update');
     Route::get('/divisie/{divisi_id}/delete', [DivisiController::class, 'destroy'])->name('divisi.destroy');
     Route::post('/divisi/import-proses', [DivisiController::class, 'import_proses'])->name('divisi.import-proses');

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

    //shift_daily
    // Route::get('/shift_daily', function () {
    //     return view('roster/shift_daily');
    // })->name('shift_daily');
    // Route::get('/shift_daily', 'App\Http\Controllers\ShiftDailyController@index')->name('shift_daily');
    Route::get('/shift_daily', [ShiftDailyController::class, 'index'])->name('shift_daily');
    Route::get('/shift_daily/create', function () {
        return view('roster/create_shift_daily');
    })->name('shift_daily.create');
    Route::get('/shift_daily/detail', function () {
        return view('roster/detail_shift_daily');
    })->name('shift_daily.detail');
    // Route::get('/shift_daily/create', [ShiftDailyController::class, 'create'])->name('shift_daily.create');
    Route::post('shift_daily/store', [ShiftDailyController::class, 'store'])->name('shift_daily.store');
    Route::get('/shift_daily/{shift_daily_code}/edit', [ShiftDailyController::class, 'edit'])->name('shift_daily.edit');
    Route::put('/shift_daily/{shift_daily_code}/update', [ShiftDailyController::class, 'update'])->name('shift_daily.update');
    Route::get('/shift_daily/{shift_daily_code}/delete', [ShiftDailyController::class, 'destroy'])->name('shift_daily.destroy');
    Route::get('/shift_daily', [EmployeshiftController::class, 'index'])->name('shift_daily');
    Route::get('/detail_shift_daily/{id}/show', [EmployeshiftController::class, 'show'])->name('shift_daily.show');
    Route::get('/shift_daily/create', [EmployeshiftController::class, 'create'])->name('shift_daily.create');
    // Route::get('/shift_daily/create', [EmployeshiftController::class, 'create'])->name('shift_daily.create');
    Route::post('shift_daily/store', [EmployeshiftController::class, 'store'])->name('shift_daily.store');
    Route::get('/shift_daily/{id}/edit', [EmployeshiftController::class, 'edit'])->name('shift_daily.edit');
    Route::put('/shift_daily/{id}/update', [EmployeshiftController::class, 'update'])->name('shift_daily.update');
    Route::delete('/shift_daily/{id}/delete', [EmployeshiftController::class, 'destroy'])->name('shift_daily.destroy');
    
    Route::get('/shift_group', [ShiftGroupController::class, 'index'])->name('shift_group');
    Route::get('/shift_group/create', [ShiftGroupController::class, 'create'])->name('shift_group.create');
    Route::post('shift_group/store', [ShiftGroupController::class, 'store'])->name('shift_group.store');
    Route::get('/shift_groupe/{id}/edit', [ShiftGroupController::class, 'edit'])->name('shift_group.edit');
    Route::put('/shift_groupe/{id}/update', [ShiftGroupController::class, 'update'])->name('shift_group.update');
    Route::delete('/shift_groupe/{id}/delete', [ShiftGroupController::class, 'destroy'])->name('shift_group.destroy');

    Route::get('/shift', [ShiftController::class, 'index'])->name('shift');
    Route::get('/shift/create', [ShiftController::class, 'create'])->name('shift.create');
    Route::post('shift/store', [ShiftController::class, 'store'])->name('shift.store');
    Route::get('/shift/{id}/edit', [ShiftController::class, 'edit'])->name('shift.edit');
    Route::put('/shift/{id}/update', [ShiftController::class, 'update'])->name('shift.update');
    Route::delete('/shift/{id}/delete', [ShiftController::class, 'destroy'])->name('shift.destroy');

    //untuk lembur    
    Route::get('/lembur', [LemburController::class, 'index'])->name('lembur');
    Route::get('/lembur/create', [LemburController::class, 'create'])->name('lembur.create');
    Route::post('lembur/store', [LemburController::class, 'store'])->name('lembur.store');
    Route::get('/lembur/{id}/edit', [LemburController::class, 'edit'])->name('lembur.edit');
    Route::put('/lembur/{id}/update', [LemburController::class, 'update'])->name('lembur.update');
    Route::delete('/lembur/{id}/delete', [LemburController::class, 'delete'])->name('lembur.delete');

    //untuk cuti    
    Route::get('/cuti', [CutiController::class, 'index'])->name('cuti');
    // Route::get('/cuti', function () {
    //     return view('cuti/cuti');
    // })->name('cuti');
    Route::get('/cuti/create', [CutiController::class, 'create'])->name('cuti.create');
    Route::get('/cuti_massal/create', [CutiController::class, 'create_massal'])->name('cuti_massal.create');
    Route::post('cuti/store', [CutiController::class, 'store'])->name('cuti.store');
    Route::get('/cuti/{id}/edit', [CutiController::class, 'edit'])->name('cuti.edit');
    Route::put('/cuti/{id}/update', [CutiController::class, 'update'])->name('cuti.update');
    Route::delete('/cuti/{id}/delete', [CutiController::class, 'destroy'])->name('cuti.destroy');
    
    //untuk kehadiran_hari_ini    
    // Route::get('/kehadiran_hari_ini', [AttendanceController::class, 'index'])->name('kehadiran_hari_ini');
    Route::get('/kehadiran_hari_ini', function () {
        return view('attendance/kehadiran_hari_ini');
    })->name('kehadiran_hari_ini');
    Route::get('/kehadiran_hari_ini/create', [AttendanceController::class, 'create'])->name('kehadiran_hari_ini.create');
    Route::post('kehadiran_hari_ini/store', [AttendanceController::class, 'store'])->name('kehadiran_hari_ini.store');
    Route::get('/kehadiran_hari_ini/{id}/edit', [AttendanceController::class, 'edit'])->name('kehadiran_hari_ini.edit');
    Route::put('/kehadiran_hari_ini/{id}/update', [AttendanceController::class, 'update'])->name('kehadiran_hari_ini.update');
    Route::delete('/kehadiran_hari_ini/{id}/delete', [AttendanceController::class, 'destroy'])->name('kehadiran_hari_ini.destroy');
    
    //untuk kehadiran    
    Route::get('/kehadiran', [AttendanceController::class, 'index'])->name('kehadiran');
    Route::get('/detail_kehadiran/{id}/show', [AttendanceController::class, 'show'])->name('detail_kehadiran.show');
    Route::get('/detail', [AttendanceController::class, 'detail'])->name('detail');
    Route::get('/kehadiran/create', [AttendanceController::class, 'create'])->name('kehadiran.create');
    Route::post('kehadiran/store', [AttendanceController::class, 'store'])->name('kehadiran.store');
    Route::get('/kehadiran/{id}/edit', [AttendanceController::class, 'edit'])->name('kehadiran.edit');
    Route::put('/kehadiran/{id}/update', [AttendanceController::class, 'update'])->name('kehadiran.update');
    Route::delete('/kehadiran/{id}/delete', [AttendanceController::class, 'destroy'])->name('kehadiran.destroy');

    //untuk cuti_izin    
    Route::get('/cuti_izin', [AttendanceController::class, 'index'])->name('cuti_izin');
    Route::get('/cuti_izin', function () {
        return view('attendance/cuti_izin');
    })->name('cuti_izin');
    Route::get('/cuti_izin/create', [AttendanceController::class, 'create'])->name('cuti_izin.create');
    Route::post('cuti/store', [AttendanceController::class, 'store'])->name('cuti_izin.store');
    Route::get('/cuti_izin/{id}/edit', [AttendanceController::class, 'edit'])->name('cuti_izin.edit');
    Route::put('/cuti_izin/{id}/update', [AttendanceController::class, 'update'])->name('cuti_izin.update');
    Route::delete('/cuti_izin/{id}/delete', [AttendanceController::class, 'destroy'])->name('cuti_izin.destroy');

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
