<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\IndexController;
use App\Livewire\Dashboard;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\NewPassword;
use App\Livewire\Auth\ResetPassword;
use App\Livewire\ComplaintsLog;
use App\Livewire\FeedbackRatings;
use App\Livewire\Help;
use App\Livewire\MyComplaints;
use App\Livewire\Notifications;
use App\Livewire\ProfileSettings;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::
// middleware([
//     'auth:sanctum',

//     config('jetstream.auth_session'),
//     'verified',
// ])->
// group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

// Route::prefix('auth')->group(function () {
//     Route::get('dashboard', Dashboard::class)->name('dashboard');
//     // Route::get('settings', Settings::class)->name('settings');
// });

Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'login')->name('login');
    Route::get('register', 'register')->name('register');
    Route::get('password-reset', 'password_reset')->name('password-reset');
    Route::get('new-password', 'new_password')->name('new-password');
});
Route::prefix('auth')->controller(IndexController::class)->group(function () {
    // Route::get('index', 'index')->name('index');
    Route::get('dashboard', Dashboard::class)->name('dashboard');
    Route::get('feedback', FeedbackRatings::class)->name('feedback');
    Route::get('help', Help::class)->name('help');
    Route::get('complaints', MyComplaints::class)->name('complaints');
    Route::get('notifications', Notifications::class)->name('notifications');
    Route::get('profile', ProfileSettings::class)->name('profile');
    Route::get('log', ComplaintsLog::class)->name('log');
});



