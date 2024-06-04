<?php

use App\Http\Controllers\Frontpages;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('test2');
});

Route::get('home',[Frontpages::class,'home'])->name('home');
Route::get('about',[Frontpages::class,'about'])->name('about');
Route::get('classes',[Frontpages::class,'classes'])->name('classes');
Route::get('contact',[Frontpages::class,'contact'])->name('contact');
Route::get('facilities',[Frontpages::class,'facilities'])->name('facilities');
Route::get('team',[Frontpages::class,'team'])->name('team');
Route::get('call',[Frontpages::class,'call'])->name('call');
Route::get('appointment',[Frontpages::class,'appointment'])->name('appointment');
Route::get('testimonial',[Frontpages::class,'testimonial'])->name('testimonial');
Route::get('error',[Frontpages::class,'error'])->name('error');

