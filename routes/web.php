<?php

use App\Http\Controllers\Admin\FacilityController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Guest\RoomController as GuestRoomController;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Guest\PaymentController;
use App\Http\Controllers\Guest\ReservationController;
use App\Http\Controllers\Admin\ReservationController as AdminReservationController ;
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

Route::middleware(['guest'])->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'loginAction'])->name('login.action');

    Route::get('register', [AuthController::class, 'register'])->name('register');
    Route::post('register', [AuthController::class, 'registerSave'])->name('register.save');
});


// Admin Routes :
Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('dashboard', function () {
        return view('admin.index');
    })->name('dashboard');

    Route::resource('rooms', RoomController::class);
    Route::post('rooms/search', [RoomController::class, 'search'])->name('rooms.search');
    Route::post('rooms/filter', [RoomController::class, 'filter'])->name('rooms.filter');
    Route::post('reservations/search', [AdminReservationController::class, 'search'])->name('reservations.search');
    Route::post('reservations/filter', [AdminReservationController::class, 'filter'])->name('reservations.filter');

    Route::resource('types', TypeController::class)->except('show');
    Route::post('types/search', [TypeController::class, 'search'])->name('types.search');

    Route::resource('facilities', FacilityController::class)->except('show');
    Route::post('facilities/search', [FacilityController::class, 'search'])->name('facilities.search');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('reservations', AdminReservationController::class);
    });

});



//Home routes
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('home/rooms', GuestRoomController::class)->only('index', 'show')->names([
    'index' => 'home.rooms.index',
    'show' => 'home.rooms.show',
]);

Route::post('/home/search', [HomeController::class, 'search'])->name('search');

// Stripe : Payment Gateway
Route::middleware('auth')->group(function () {
    Route::post('/checkout', [PaymentController::class, 'checkout'])->name('checkout');
    Route::get('/success', [PaymentController::class, 'success'])->name('success');
    Route::get('/home/reservations', [ReservationController::class, 'index'])->name('user.reservations');

    // Reservation :
    Route::post('rooms', [ReservationController::class, 'available_rooms'])->name('rooms.availability');
    Route::resource('reservations', ReservationController::class);

    // Payment :
    Route::get('/home/payments/invoices/{payment}', [PaymentController::class, 'show'])->name('invoiceDetails');

    Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
});
