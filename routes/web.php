<?php

use App\Http\Controllers\BackAboutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontPageController;
use App\Http\Controllers\HardwareController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SustainabilityController;
use Illuminate\Support\Facades\Route;


Route::resource('/', FrontPageController::class);
Route::get('/home', [FrontPageController::class, 'Home'])->name('FrontPage.Home');
Route::resource('/sustainability', SustainabilityController::class);
Route::resource('/hardware', HardwareController::class);
Route::post('/contacts', [FrontPageController::class, 'store'])->name('FrontPage.store');
Route::post('/quote-form', [FrontPageController::class, 'QuoteForm'])->name('FrontPage.QuoteForm');
Route::post('/contact-form', [FrontPageController::class, 'ContactForm'])->name('FrontPage.ContactForm');
Route::resource('/services', ServiceController::class);
//Route::resource('/about', AboutController::class);

Route::get('/about', [AboutController::class, 'index'])->name('About.index');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
#    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/landing-page', LandingPageController::class);
    Route::resource('/about-page', BackAboutController::class);
});


require __DIR__.'/auth.php';
