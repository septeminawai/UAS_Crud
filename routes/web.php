<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\FeedbackUsersController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/feedback/seed', [FeedbackUsersController::class, 'store'])->name('feedback.store');



Route::group(['prefix' => 'dashboard','middleware' => ['web','auth']] , function() {

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/feedback/seend', [FeedbackUsersController::class, 'index'])->name('feedback.index');
    Route::delete('/feedback/{feedback}', [FeedbackUsersController::class, 'destroy'])->name('feedback.delete');

    // Route::get('/buku-tamu/{guest}/edit', [GuestBookController::class, 'edit'])->name('guest.edit');
    // Route::get('/buku-tamu/{guest}/show', [GuestBookController::class, 'show'])->name('guest.show');
    // Route::delete('/buku-tamu/{guest}', [GuestBookController::class, 'destroy'])->name('guest.delete');

    Route::resource('/profil',ProfileController::class)->except('show','create','destory','store');

    Route::resource('/employee',EmployeController::class);

    // Route::resource('/feedback',FeedbackUsersController::class)->except('show','create','edit','update');

});
