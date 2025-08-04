<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\CareerController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ProductController;
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

// Ürün Route'ları
Route::get('/ekstruder', [ProductController::class, 'ekstruder'])->name('ekstruder');
Route::get('/co-ekstruder-cizgimakinasi', [ProductController::class, 'coEkstruderCizgiMakinasi'])->name('co-ekstruder-cizgimakinasi');
Route::get('/vakum-tanki', [ProductController::class, 'vakumTanki'])->name('vakum-tanki');
Route::get('/sprey-tanki', [ProductController::class, 'spreyTanki'])->name('sprey-tanki');
Route::get('/cekici-palet', [ProductController::class, 'cekiciPalet'])->name('cekici-palet');
Route::get('/kesici', [ProductController::class, 'kesici'])->name('kesici');
Route::get('/devirme-sehpasi', [ProductController::class, 'devirmeSehpasi'])->name('devirme-sehpasi');
Route::get('/sarici-makinasi', [ProductController::class, 'sariciMakinasi'])->name('sarici-makinasi');
Route::get('/yazi-makinasi', [ProductController::class, 'yaziMakinasi'])->name('yazi-makinasi');
Route::get('/pvc-makinalari', [ProductController::class, 'pvcMakinalari'])->name('pvc-makinalari');
Route::get('/granul-makinalari', [ProductController::class, 'granulMakinalari'])->name('granul-makinalari');
Route::get('/bant-cekici', [ProductController::class, 'bantCekici'])->name('bant-cekici');
Route::get('/pvc-fitil-havuzu', [ProductController::class, 'pvcFitilHavuzu'])->name('pvc-fitil-havuzu');
Route::get('/yedek-ekipmanlar', [ProductController::class, 'yedekEkipmanlar'])->name('yedek-ekipmanlar');

// Boru Hatları Route'ları
Route::get('/pp-atik-su-boru-hatti', [ProductController::class, 'ppAtikSuBoruHatti'])->name('pp-atik-su-boru-hatti');
Route::get('/pe-boru-hatti', [ProductController::class, 'peBoruHatti'])->name('pe-boru-hatti');
Route::get('/pprc-cam-elyaf-kompozit-boru-hatti', [ProductController::class, 'pprcCamElyafKompozitBoruHatti'])->name('pprc-cam-elyaf-kompozit-boru-hatti');

// Kalıplar Route'ları
Route::get('/kafa-pe-pp-rc-kaliplari', [ProductController::class, 'kafaPePpRcKaliplari'])->name('kafa-pe-pp-rc-kaliplari');
Route::get('/pvc-kaliplari', [ProductController::class, 'pvcKaliplari'])->name('pvc-kaliplari');
Route::get('/yumusak-pvc-kaliplari', [ProductController::class, 'yumusakPvcKaliplari'])->name('yumusak-pvc-kaliplari');
Route::get('/kalipreler', [ProductController::class, 'kalipreler'])->name('kalipreler');

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
Route::post('/contact/message', [ContactController::class, 'store'])->name('contact.message.store');

// Quote gönderme (frontend)
Route::post('/contact/quote', [ContactController::class, 'storeQuote'])->name('contact.quote.store');

// Quote silme (admin)
Route::delete('/admin/quote/{id}', [ContactController::class, 'destroyQuote'])->name('admin.quote.destroy');

Route::get('language/{locale}', function($locale){
    session()->put('locale', $locale);
    return redirect()->back();
})->name('locale');














