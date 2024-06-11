<?php

use App\Http\Controllers\Frontpages;
use App\Http\Controllers\DashBoard;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('home2',[Frontpages::class,'home2'])->name('home2');
Route::get('about',[Frontpages::class,'about'])->name('about');
Route::get('classes',[Frontpages::class,'classes'])->name('classes');
Route::get('contact',[Frontpages::class,'contact'])->name('contact');
Route::get('facilities',[Frontpages::class,'facilities'])->name('facilities');
Route::get('team',[Frontpages::class,'team'])->name('team');
Route::get('call',[Frontpages::class,'call'])->name('call');
Route::get('appointment',[Frontpages::class,'appointment'])->name('appointment');
Route::get('testimonial',[Frontpages::class,'testimonial'])->name('testimonial');
Route::get('error',[Frontpages::class,'error'])->name('error');


Route::prefix('dashboard')->group(function () {
    Route::get('/index', [Dashboard::class, 'index'])->name('dashboard.index');
});
    //Route::get('/profile', [ProfileController::class, 'index'])->name('dashboard.profile');
    //Route::get('/settings', [SettingsController::class, 'index'])->name('dashboard.settings');

//Route::get('dashHome',[DashBoard::class,'dashHome'])->name('dashHome');

//Route::get('dashLogin',[DashBoard::class,'dashLogin'])->name('dashLogin');
//Route::post('dashLogin',[DashBoard::class,'receiveData'])->name('receiveData');

//Route::get('dashRegister',[DashBoard::class,'dashRegister'])->name('dashRegister');
//Route::post('dashRegister', [DashBoard::class, 'store'])->name('dashRegister.store');
Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
