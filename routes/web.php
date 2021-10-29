<?php

use App\Http\Livewire\App;
use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function() {
    Route::get('dashboard', \App\Http\Livewire\Dashboard::class )->name('dashboard');
    Route::get('profile', \App\Http\Livewire\Profile\Index::class )->name('profile');
    Route::get('personal_information', \App\Http\Livewire\Profile\PersonalInformation::class )->name('personal_information');
    Route::get('account_information', \App\Http\Livewire\Profile\AccountInformation::class )->name('account_information');
    Route::get('change_password', \App\Http\Livewire\Profile\ChangePassword::class )->name('change_password');
    Route::get('email_setting', \App\Http\Livewire\Profile\EmailSetting::class )->name('email_setting');
});

Route::middleware('guest')->group(function (){
    Route::get('register', \App\Http\Livewire\Auth\Register::class)->name('register');
    Route::get('login', \App\Http\Livewire\Auth\Login::class)->name('login');
    Route::get('forgotten_password', \App\Http\Livewire\Auth\PasswordReset::class)->name('password_reset');
});
