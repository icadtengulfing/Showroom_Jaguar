<?php

use App\Livewire;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\DealersUserController;

Route::get('/admin', [AdminAuthController::class, 'LoginView']);
Route::post('/admin/login', [AdminAuthController::class, 'login']);

Route::middleware([App\Http\Middleware\AdminMiddleware::class])->group(function () {
  Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
  Route::get('/admin/dealers', [AdminController::class, 'dealers']);
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

Route::get('/dealers', [DealersUserController::class, 'index'])->name('dealers.index');

Route::get('/services', function () {
  return view('users.services');
});

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


Route::get('/services', [ServicesController::class, 'index'])->name('services.index');
Route::get('/services/{id}/contact', [ServicesController::class, 'contact'])->name('services.contact');
Route::post('/services/{id}/contact', [ServicesController::class, 'sendContact'])->name('services.sendContact');
