<?php

use App\Livewire;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\DealersAdminController;
use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\DealersUserController;

Route::get('/admin', [AdminAuthController::class, 'LoginView']);
Route::post('/admin/login', [AdminAuthController::class, 'login']);

Route::middleware([App\Http\Middleware\AdminMiddleware::class])->group(function () {
  Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

  Route::get('/admin/dealers', [DealersAdminController::class, 'index'])->name('dealers.index');
  Route::post('/admin/dealers', [DealersAdminController::class, 'store'])->name('dealers.store');
  Route::post('/admin/dealers/{id}/update', [DealersAdminController::class, 'update'])->name('dealers.update');
  Route::post('/admin/dealers/{id}/delete', [DealersAdminController::class, 'destroy'])->name('dealers.destroy');
});


Route::get('/', function () {
  return view('users.homepage');
});

Route::get('/classical', function () {
  return view('users.classical-vehicle');
});

Route::get('/modern', function () {
  return view('users.modern-vehicle');
});

// HAPUS route /dealers yang ini - ganti jadi /dealers-list atau yang lain
Route::get('/dealers', [DealersUserController::class, 'index'])->name('dealers.user.index');

// Services routes - HAPUS yang dobel
Route::get('/services', [ServicesController::class, 'index'])->name('services.index');
Route::get('/services/{id}/contact', [ServicesController::class, 'contact'])->name('services.contact');
Route::post('/services/{id}/contact', [ServicesController::class, 'sendContact'])->name('services.sendContact');

Route::get('/e-pace', function () {
  return view('users.e-pace');
});

Route::get('/e-type', function () {
  return view('users.e-type');
});

Route::get('/i-pace', function () {
  return view('users.i-pace');
});

Route::get('/f-pace', function () {
  return view('users.f-pace');
});

Route::get('/f-type', function () {
  return view('users.f-type');
});

Route::get('/xk120', function () {
  return view('users.xk120');
});

Route::get('/xk140', function () {
  return view('users.xk140');
});

Route::get('/xk150', function () {
  return view('users.xk150');
});
