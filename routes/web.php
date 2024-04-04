<?php

use App\Http\Controllers\Admin\FacilityController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\HomeController;
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

Route::get('dashboard', function () {
    return view('admin.rooms.create');
})->name('dashboard');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/roomDetails/{room}',  [HomeController::class, 'show'])->name('roomDetails');

Route::get('admin', function () {
    return view('admin.index');
});


Route::resource('rooms', RoomController::class);



Route::post('rooms', [RoomController::class, 'search'])->name('rooms.search');
Route::post('rooms/filter', [RoomController::class, 'filter'])->name('rooms.filter');

Route::resource('facilities', FacilityController::class)->except('show');
Route::post('facilities', [FacilityController::class, 'search'])->name('facilities.search');

Route::resource('types', TypeController::class)->except('show');
Route::post('types', [TypeController::class, 'search'])->name('types.search');
