<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;

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

Route::get('/schedules', [ScheduleController::class, 'showForm'])->name('schedules');
Route::post('/schedules', [ScheduleController::class, 'addSchedule'])->name('schedules');
Route::get('/dashboard', [ScheduleController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';
