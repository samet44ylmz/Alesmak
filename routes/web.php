<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\CareerController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/about', [\App\Http\Controllers\Frontend\AboutController::class, 'index'])->name('about');

Route::get('/product', function () {
    return view('frontend.product');
})->name('product');

Route::get('/contact', [\App\Http\Controllers\Frontend\ContactController::class, 'index'])->name('contact');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
   
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::group(['middleware'=>['auth'],'prefix'=>'admin', 'as'=>'admin.'], function (){
    Route::resource('hero', HeroController::class);
    Route::resource('services', ServicesController::class);
    Route::resource('career', CareerController::class);
    Route::resource('about', AboutController::class);
    Route::resource('contact', ContactController::class);

    // Sadece toplu silme için ekstra route (isteğe bağlı)
    Route::delete('contact-messages/delete-all', [ContactController::class, 'destroyAll'])->name('contact.destroyAll');
});

// Mesaj gönderme (frontend)
Route::post('/contact/message', [\App\Http\Controllers\Admin\ContactController::class, 'store'])->name('contact.message.store');














