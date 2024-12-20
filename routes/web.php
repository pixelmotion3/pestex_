<?php

use App\Http\Controllers\HardwarePageController;
use App\Http\Controllers\ServicePageController;
use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontPageController;
use App\Http\Controllers\ContactPageController;
use App\Http\Controllers\HardwareController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SustainabilityController;
use App\Http\Controllers\SustainabilityPageController;
use App\Http\Controllers\ServiceDetailsController;
use App\Http\Controllers\MethodController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;


Route::resource('/', FrontPageController::class);
Route::get('/home', [FrontPageController::class, 'Home'])->name('FrontPage.Home');

Route::resource('/sustentabilidade', SustainabilityController::class);

Route::resource('/equipamentos', HardwareController::class);
Route::get('/contactos', [ContactPageController::class, 'index'])->name('ContactPage.index');
Route::post('/contacts', [FrontPageController::class, 'store'])->name('FrontPage.store');
Route::post('/quote-form', [FrontPageController::class, 'QuoteForm'])->name('FrontPage.QuoteForm');
Route::post('/contact-form', [FrontPageController::class, 'ContactForm'])->name('FrontPage.ContactForm');
Route::get('/termos-servico', [FrontPageController::class, 'TermoServicos'])->name('FrontPage.TermoServicos');
Route::get('/politica-privacidade', [FrontPageController::class, 'PoliticaPrivacidade'])->name('FrontPage.PoliticaPrivacidade');
Route::resource('/servicos', ServiceController::class);


Route::get('/sobre', [AboutController::class, 'index'])->name('About.index');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
#   Route::resource('/dashboard', DashboardController::class);
    Route::resource('/landing-page', LandingPageController::class);
    Route::resource('/about-page', AboutPageController::class);
    Route::resource('/services-page', ServicePageController::class);
    Route::resource('/hardware-page', HardwarePageController::class);

    Route::resource('/sustainability-page', SustainabilityPageController::class);
    Route::resource('/ServiceDetails', ServiceDetailsController::class);
    Route::resource('/methods', MethodController::class);
    Route::resource('/review', ReviewController::class);

    Route::post('MethodController/fetch',[MethodController::class,'fetch'])
            ->name('MethodController.fetch');

    Route::post('ServiceDetailsController/fetch',[ServiceDetailsController::class,'fetch'])
            ->name('ServiceDetailsController.fetch');
    // Route::post('/service-details', [ServiceDetailsController::class,'store'])->middleware(['auth', 'verified'])->name('ServiceDetails.store');
    // Route::put('/service-details/{id}', [ServiceDetailsController::class,'update'])->middleware(['auth', 'verified'])->name('ServiceDetails.update');
    //Route::post('/contacts', [FrontPageController::class, 'store'])->name('FrontPage.store');
});

require __DIR__.'/auth.php';
