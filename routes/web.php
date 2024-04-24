<?php

use App\Http\Controllers\Guest\PaymentController;
use App\Http\Controllers\Guest\ReservationController;
use App\Http\Controllers\Guest\RoomController as GuestRoomController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\Admin\GuestController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\FacilityController;
use App\Http\Controllers\Admin\PaymentController as AdminPaymentController;
use App\Http\Controllers\Admin\ReservationController as AdminReservationController ;
use App\Http\Controllers\FrontDesk\GuestController as FrontDeskGuestController;
use App\Http\Controllers\FrontDesk\RoomController as FrontDeskRoomController;
use App\Http\Controllers\FrontDesk\ReportController as FrontDeskReportController;
use App\Http\Controllers\FrontDesk\PaymentController as FrontDeskPaymentController;
use App\Http\Controllers\FrontDesk\ReservationController as FrontDeskReservationController;
use App\Http\Controllers\Auth\AuthController;
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

    Route::get('/admin/dashboard', [ReportController::class, 'getStats'])->name('admin.dashboard');
    Route::get('/admin/profile', [GuestController::class, 'profile'])->name('admin.profile');

    Route::resource('/admin/rooms', RoomController::class)->names([
        'index' => 'admin.rooms.index',
        'create' => 'admin.rooms.create',
        'store' => 'admin.rooms.store',
        'show' => 'admin.rooms.show',
        'edit' => 'admin.rooms.edit',
        'update' => 'admin.rooms.update',
        'destroy' => 'admin.rooms.destroy',
    ]);

    Route::post('/admin/rooms/search', [RoomController::class, 'search'])->name('admin.rooms.search');
    Route::post('/admin/rooms/filter', [RoomController::class, 'filter'])->name('admin.rooms.filter');
    Route::post('/admin/reservations/search', [AdminReservationController::class, 'search'])->name('admin.reservations.search');
    Route::post('/admin/reservations/filter', [AdminReservationController::class, 'filter'])->name('admin.reservations.filter');

    Route::get('/admin/calender', [AdminReservationController::class, 'events'])->name('admin.calender');

    Route::resource('/admin/payments', AdminPaymentController::class)->names([
        'index' => 'admin.payments.index',
        'create' => 'admin.payments.create',
        'store' => 'admin.payments.store',
        'show' => 'admin.payments.show',
        'edit' => 'admin.payments.edit',
        'update' => 'admin.payments.update',
        'destroy' => 'admin.payments.destroy'
    ]);

    Route::get('/admin/payments/invoices/{payment}', [AdminPaymentController::class, 'download'])->name('admin.invoice.download');

    Route::get('/admin/bookings/reports', [ReportController::class, 'index'])->name('admin.reports.index');
    Route::post('reports/search', [ReportController::class, 'search'])->name('admin.reports.search');
    Route::post('/reports/filter', [ReportController::class, 'filter'])->name('admin.reports.filter');


    Route::resource('/admin/guests', GuestController::class)->names([
        'index' => 'admin.guests.index',
        'create' => 'admin.guests.create',
        'store' => 'admin.guests.store',
        'show' => 'admin.guests.show',
        'edit' => 'admin.guests.edit',
        'update' => 'admin.guests.update',
        'destroy' => 'admin.guests.destroy',
    ]);

    Route::put('/admin/guests/updateProfile/{profile}', [GuestController::class, 'updateProfile'])->name('admin.guests.updateProfile');
    Route::post('/admin/guests/search', [GuestController::class, 'search'])->name('admin.guests.search');

    Route::resource('/admin/types', TypeController::class)->except('show')->names([
        'index' => 'admin.types.index',
        'create' => 'admin.types.create',
        'store' => 'admin.types.store',
        'edit' => 'admin.types.edit',
        'update' => 'admin.types.update',
        'destroy' => 'admin.types.destroy'
    ]);

    Route::post('/admin/types/search', [TypeController::class, 'search'])->name('admin.types.search');

    Route::resource('/admin/facilities', FacilityController::class)->except('show')->names([
        'index' => 'admin.facilities.index',
        'create' => 'admin.facilities.create',
        'store' => 'admin.facilities.store',
        'edit' => 'admin.facilities.edit',
        'update' => 'admin.facilities.update',
        'destroy' => 'admin.facilities.destroy'
    ]);

    Route::post('/admin/facilities/search', [FacilityController::class, 'search'])->name('admin.facilities.search');

    Route::resource('/admin/reservations', AdminReservationController::class)->names([
        'index' => 'admin.reservations.index',
        'create' => 'admin.reservations.create',
        'store' => 'admin.reservations.store',
        'show' => 'admin.reservations.show',
        'edit' => 'admin.reservations.edit',
        'update' => 'admin.reservations.update',
        'destroy' => 'admin.reservations.destroy'
    ]);

});


// Front Desk Routes :
Route::middleware(['auth', 'isFrontDesk'])->group(function () {
    Route::get('/front-desk/dashboard', [FrontDeskReportController::class, 'getStats'])->name('front-desk.dashboard');

    Route::get('/front-desk/calender', [FrontDeskReservationController::class, 'events'])->name('front-desk.calender');

    Route::resource('/front-desk/rooms', FrontDeskRoomController::class)->names([
        'index' => 'front-desk.rooms.index',
        'show' => 'front-desk.rooms.show',
    ]);

    Route::resource('/front-desk/guests', FrontDeskGuestController::class)->names([
        'index' => 'front-desk.guests.index',
        'show' => 'front-desk.guests.show',
    ]);

    Route::post('/front-desk/guests/search', [FrontDeskGuestController::class, 'search'])->name('front-desk.guests.search');
    Route::get('/front-desk/payments/invoices/{payment}', [FrontDeskPaymentController::class, 'download'])->name('front-desk.invoice.download');

    Route::resource('/front-desk/payments', FrontDeskPaymentController::class)->names([
        'index' => 'front-desk.payments.index',
        'create' => 'front-desk.payments.create',
        'store' => 'front-desk.payments.store',
        'show' => 'front-desk.payments.show',
        'edit' => 'front-desk.payments.edit',
        'update' => 'front-desk.payments.update',
        'destroy' => 'front-desk.payments.destroy'
    ]);

    Route::get('/front-desk/profile', [FrontDeskGuestController::class, 'profile'])->name('front-desk.profile');
    Route::put('/front-desk/guests/updateProfile/{profile}', [FrontDeskGuestController::class, 'updateProfile'])->name('front-desk.guests.updateProfile');

    Route::resource('/front-desk/reservations', FrontDeskReservationController::class)->names([
        'index' => 'front-desk.reservations.index',
        'create' => 'front-desk.reservations.create',
        'store' => 'front-desk.reservations.store',
        'show' => 'front-desk.reservations.show',
        'edit' => 'front-desk.reservations.edit',
        'update' => 'front-desk.reservations.update',
        'destroy' => 'front-desk.reservations.destroy'
    ]);

    Route::post('/front-desk/rooms/search', [FrontDeskRoomController::class, 'search'])->name('front-desk.rooms.search');
    Route::post('/front-desk/rooms/filter', [FrontDeskRoomController::class, 'filter'])->name('front-desk.rooms.filter');
    Route::post('/front-desk/reservations/search', [FrontDeskReservationController::class, 'search'])->name('front-desk.reservations.search');
    Route::post('/front-desk/reservations/filter', [FrontDeskReservationController::class, 'filter'])->name('front-desk.reservations.filter');
});

//Home routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('/rooms', GuestRoomController::class)->only('index', 'show')->names([
    'index' => 'home.rooms.index',
    'show' => 'home.rooms.show',
]);


Route::get('/about', [HomeController::class, 'about'])->name( 'home.about');
Route::get('/blogs', [ HomeController::class, 'blog'])->name('home.blog');
Route::get('/blogs/{blog}', [HomeController::class, 'singleBlog'])->name('home.single-blog');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
Route::post('/home/search', [HomeController::class, 'search'])->name('search');

//Profile :
Route::get('/guest/profile/{guest}', [HomeController::class, 'profile'])->name('guest.profile');
Route::put('/guest/updateProfile/{profile}', [HomeController::class, 'updateProfile'])->name('guest.updateProfile');

// Stripe : Payment Gateway
Route::middleware('auth')->group(function () {
    Route::post('/checkout', [PaymentController::class, 'checkout'])->name('checkout');
    Route::get('/success', [PaymentController::class, 'success'])->name('success');
    Route::get('/user/reservations', [ReservationController::class, 'index'])->name('user.reservations');

    // Reservation :
    Route::post('/rooms', [ReservationController::class, 'available_rooms'])->name('rooms.availability');
    Route::resource('reservations', ReservationController::class);

    // Payment :
    Route::get('/payments/invoices/{payment}', [PaymentController::class, 'show'])->name('invoiceDetails');

    Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
});
