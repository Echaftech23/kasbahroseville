<?php

use App\Http\Controllers\Admin\RoomController;
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

Route::get('/', function () {
    return view('home.index');
});

Route::get('admin', function () {
    return view('admin.index');
});


Route::resource('rooms', RoomController::class);
