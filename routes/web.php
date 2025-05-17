<?php

use App\Http\Controllers\HardwarePageController;
use App\Http\Controllers\FormsPageController;
use App\Http\Controllers\ServicePageController;
use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontPageController;
use App\Http\Controllers\ContactPageController;
use App\Http\Controllers\HardwareController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormsHandleController;
use App\Http\Controllers\SustainabilityController;
use App\Http\Controllers\SustainabilityPageController;
use App\Http\Controllers\ServiceDetailsController;
use App\Http\Controllers\MethodController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;

// Rota padrão para o domínio principal
Route::domain('127.0.0.1')->group(function () {
    Route::get('/', [FrontPageController::class, 'Home'])->name('FrontPage.Home');


	Route::resource('/sustentabilidade', SustainabilityController::class);
	Route::post('/newsletter/new', [NewsletterController::class, 'NewsletterForm'])->name('NewsLatterPage.NewsletterForm');
	Route::resource('/equipamentos', HardwareController::class);
	Route::get('/contactos', [ContactPageController::class, 'index'])->name('ContactPage.index');
	Route::post('/quote-form/contactos', [ContactPageController::class, 'ContactFormServiceContactos'])->name('ContactPage.ContactFormContactos');
	Route::post('/contacts', [FrontPageController::class, 'store'])->name('FrontPage.store');
	Route::post('/quote-form', [FrontPageController::class, 'QuoteForm'])->name('FrontPage.QuoteForm');
	Route::post('/schedule-inspection', [FrontPageController::class, 'ScheduleInspection'])->name('FrontPage.ScheduleInspection');
	Route::post('/contact-form', [FrontPageController::class, 'ContactForm'])->name('FrontPage.ContactForm');
	Route::get('/termos-servico', [FrontPageController::class, 'HomeTermoServicos'])->name('FrontPage.TermoServicos');
	Route::get('/politica-privacidade', [FrontPageController::class, 'HomePoliticaPrivacidade'])->name('FrontPage.PoliticaPrivacidade');


	Route::post('/obrigado-fale-conosco', [HomePageController::class, 'thankYouForm'])->name('HomePage.thankYouFormContactUs');
	Route::post('/obrigado-pedir-orcamento', [HomePageController::class, 'thankYouForm'])->name('HomePage.thankYouFormRequestQuote');
	Route::post('/obrigado-entrar-em-contato', [HomePageController::class, 'thankYouForm'])->name('HomePage.thankYouFormContactForm');
	Route::post('/obrigado-agenda-vistoria', [HomePageController::class, 'thankYouForm'])->name('HomePage.thankYouFormScheduleInspection');

	Route::post('/obrigado-fale-conosco', [HomePageController::class, 'thankYouForm'])->name('FrontPage.thankYouFormContactUs');
	Route::post('/obrigado-pedir-orcamento', [HomePageController::class, 'thankYouForm'])->name('FrontPage.thankYouFormRequestQuote');
	Route::post('/obrigado-entrar-em-contato', [HomePageController::class, 'thankYouForm'])->name('FrontPage.thankYouFormContactForm');
	Route::post('/obrigado-agenda-vistoria', [HomePageController::class, 'thankYouForm'])->name('FrontPage.thankYouFormScheduleInspection');


	Route::get('/servicos', [ServiceController::class, 'index'])->name('ServicePage.index');
	Route::get('/servicos/{slug}', [ServiceController::class, 'show'])->name('ServicePage.show');
	Route::post('/quote-form/service', [ServiceController::class, 'ContactFormService'])->name('ServicePage.ContactFormService');

	Route::get('/sobre', [AboutController::class, 'index'])->name('About.index');
	Route::post('/quote-form/about', [AboutController::class, 'ContactFormAbout'])->name('About.ContactFormAbout');
	Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('Dashboard');

	Route::middleware('auth')->group(function () {

		Route::get('/landing-page/nav-paragraph', [LandingPageController::class, 'NavParagraphIndex'])->name('LandingPage.NavParagraphIndex');
		Route::get('/landing-page/about-now', [LandingPageController::class, 'AboutNowIndex'])->name('LandingPage.AboutNowIndex');
		Route::get('/landing-page/best-service', [LandingPageController::class, 'BestServicesIndex'])->name('LandingPage.BestServicesIndex');
		Route::get('/landing-page/call-now', [LandingPageController::class, 'CallNowIndex'])->name('LandingPage.CallNowIndex');
		Route::get('/landing-page/choose-us', [LandingPageController::class, 'ChooseUsIndex'])->name('LandingPage.ChooseUsIndex');
		Route::get('/landing-page/collapse', [LandingPageController::class, 'CollapseIndex'])->name('LandingPage.CollapseIndex');
		Route::get('/landing-page/contact-us', [LandingPageController::class, 'ContactUsIndex'])->name('LandingPage.ContactUsIndex');
		Route::get('/landing-page/customer-area', [LandingPageController::class, 'CustomerAreaIndex'])->name('LandingPage.CustomerAreaIndex');
		Route::get('/landing-page/main-carrousel', [LandingPageController::class, 'MainCarrouselIndex'])->name('LandingPage.MainCarrouselIndex');
		Route::get('/landing-page/our-service', [LandingPageController::class, 'OurServicesIndex'])->name('LandingPage.OurServicesIndex');
		Route::get('/landing-page/privacy-policy', [LandingPageController::class, 'PrivacyPolicyIndex'])->name('LandingPage.PrivacyPolicyIndex');
		Route::get('/landing-page/quote-forms', [LandingPageController::class, 'QuoteFormsIndex'])->name('LandingPage.QuoteFormsIndex');
		Route::get('/landing-page/status', [LandingPageController::class, 'StatusIndex'])->name('LandingPage.StatusIndex');
		Route::get('/landing-page/terms-service', [LandingPageController::class, 'TermsServiceIndex'])->name('LandingPage.TermsServiceIndex');
		Route::get('/landing-page/testimonial', [LandingPageController::class, 'TestimonialIndex'])->name('LandingPage.TestimonialIndex');

		Route::get('/home-page/nav-paragraph', [HomePageController::class, 'NavParagraphIndex'])->name('HomePage.NavParagraphIndex');
		Route::get('/home-page/about-now', [HomePageController::class, 'AboutNowIndex'])->name('HomePage.AboutNowIndex');
		Route::get('/home-page/best-services', [HomePageController::class, 'BestServicesIndex'])->name('HomePage.BestServicesIndex');
		Route::get('/home-page/call-now', [HomePageController::class, 'CallNowIndex'])->name('HomePage.CallNowIndex');
		Route::get('/home-page/choose-us', [HomePageController::class, 'ChooseUsIndex'])->name('HomePage.ChooseUsIndex');
		Route::get('/home-page/collapse', [HomePageController::class, 'CollapseIndex'])->name('HomePage.CollapseIndex');
		Route::get('/home-page/contact-us', [HomePageController::class, 'ContactUsIndex'])->name('HomePage.ContactUsIndex');
		Route::get('/home-page/customer-area', [HomePageController::class, 'CustomerAreaIndex'])->name('HomePage.CustomerAreaIndex');
		Route::get('/home-page/main-carrousel', [HomePageController::class, 'MainCarrouselIndex'])->name('HomePage.MainCarrouselIndex');
		Route::get('/home-page/our-services', [HomePageController::class, 'OurServicesIndex'])->name('HomePage.OurServicesIndex');
		Route::get('/home-page/privacy-policy', [HomePageController::class, 'PrivacyPolicyIndex'])->name('HomePage.PrivacyPolicyIndex');
		Route::get('/home-page/quote-forms', [HomePageController::class, 'QuoteFormsIndex'])->name('HomePage.QuoteFormsIndex');
		Route::get('/home-page/status', [HomePageController::class, 'StatusIndex'])->name('HomePage.StatusIndex');
		Route::get('/home-page/terms-service', [HomePageController::class, 'TermsServiceIndex'])->name('HomePage.TermsServiceIndex');
		Route::get('/home-page/testimonial', [HomePageController::class, 'TestimonialIndex'])->name('HomePage.TestimonialIndex');


		Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
		Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');


		Route::get('/termsservice', [HomePageController::class, 'TermsServiceIndex'])->name('HomePage.TermsServiceIndex');
		Route::get('/privacypolicy', [HomePageController::class, 'PrivacyPolicyIndex'])->name('HomePage.PrivacyPolicyIndex');

		Route::get('/forms/newsletter', [FormsPageController::class, 'newsletter'])->name('FormsPage.newsletter');
		Route::get('/forms/quote', [FormsPageController::class, 'quote'])->name('FormsPage.quote');
		Route::get('/forms/contacto', [FormsPageController::class, 'contact'])->name('FormsPage.contact');

		Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

		Route::post('/formshandle/{contact_form_id}/{type_form}', [FormsHandleController::class, 'destroy'])->name('formshandle.destroy');

		Route::post( '/newfaq', [HomePageController::class, 'newFaq'])->name('HomePage.NewFaq');
		Route::put( '/updatefaq/{id}', [HomePageController::class, 'updateFaq'])->name('HomePage.UpdateFaq');
		Route::delete( '/deletefaq/{id}', [HomePageController::class, 'deleteFaq'])->name('HomePage.DeleteFaq');

		Route::post( '/newfaqlp', [HomePageController::class, 'newFaq'])->name('LandingPage.NewFaq');
		Route::put( '/updatefaqlp/{id}', [HomePageController::class, 'updateFaq'])->name('LandingPage.UpdateFaq');
		Route::delete( '/deletefaqlp/{id}', [HomePageController::class, 'deleteFaq'])->name('LandingPage.DeleteFaq');
		#   Route::resource('/dashboard', DashboardController::class);
		Route::resource( '/home-page', HomePageController::class);
		Route::resource('/landing-page', LandingPageController::class);
		Route::resource('/about-page', AboutPageController::class);
		Route::resource('/services-page', ServicePageController::class);
		Route::resource('/hardware-page', HardwarePageController::class);
		Route::resource('/forms-page', FormsPageController::class);

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
});


// Rota padrão para o domínio principal
Route::domain('sospragas.pt')->group(function () {
	Route::get('/', [FrontPageController::class, 'Home'])->name('FrontPage.Home');


	Route::resource('/sustentabilidade', SustainabilityController::class);
	Route::post('/newsletter/new', [NewsletterController::class, 'NewsletterForm'])->name('NewsLatterPage.NewsletterForm');
	Route::resource('/equipamentos', HardwareController::class);
	Route::get('/contactos', [ContactPageController::class, 'index'])->name('ContactPage.index');
	Route::post('/quote-form/contactos', [ContactPageController::class, 'ContactFormServiceContactos'])->name('ContactPage.ContactFormContactos');
	Route::post('/contacts', [FrontPageController::class, 'store'])->name('FrontPage.store');
	Route::post('/quote-form', [FrontPageController::class, 'QuoteForm'])->name('FrontPage.QuoteForm');
	Route::post('/schedule-inspection', [FrontPageController::class, 'ScheduleInspection'])->name('FrontPage.ScheduleInspection');
	Route::post('/contact-form', [FrontPageController::class, 'ContactForm'])->name('FrontPage.ContactForm');
	Route::get('/termos-servico', [FrontPageController::class, 'HomeTermoServicos'])->name('FrontPage.TermoServicos');
	Route::get('/politica-privacidade', [FrontPageController::class, 'HomePoliticaPrivacidade'])->name('FrontPage.PoliticaPrivacidade');


	Route::post('/obrigado-fale-conosco', [HomePageController::class, 'thankYouForm'])->name('HomePage.thankYouFormContactUs');
	Route::post('/obrigado-pedir-orcamento', [HomePageController::class, 'thankYouForm'])->name('HomePage.thankYouFormRequestQuote');
	Route::post('/obrigado-entrar-em-contato', [HomePageController::class, 'thankYouForm'])->name('HomePage.thankYouFormContactForm');
	Route::post('/obrigado-agenda-vistoria', [HomePageController::class, 'thankYouForm'])->name('HomePage.thankYouFormScheduleInspection');

	Route::post('/obrigado-fale-conosco', [HomePageController::class, 'thankYouForm'])->name('FrontPage.thankYouFormContactUs');
	Route::post('/obrigado-pedir-orcamento', [HomePageController::class, 'thankYouForm'])->name('FrontPage.thankYouFormRequestQuote');
	Route::post('/obrigado-entrar-em-contato', [HomePageController::class, 'thankYouForm'])->name('FrontPage.thankYouFormContactForm');
	Route::post('/obrigado-agenda-vistoria', [HomePageController::class, 'thankYouForm'])->name('FrontPage.thankYouFormScheduleInspection');



	Route::get('/servicos', [ServiceController::class, 'index'])->name('ServicePage.index');
	Route::get('/servicos/{slug}', [ServiceController::class, 'show'])->name('ServicePage.show');
	Route::post('/quote-form/service', [ServiceController::class, 'ContactFormService'])->name('ServicePage.ContactFormService');

	Route::get('/sobre', [AboutController::class, 'index'])->name('About.index');
	Route::post('/quote-form/about', [AboutController::class, 'ContactFormAbout'])->name('About.ContactFormAbout');
	Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('Dashboard');

	Route::middleware('auth')->group(function () {

		Route::get('/landing-page/nav-paragraph', [LandingPageController::class, 'NavParagraphIndex'])->name('LandingPage.NavParagraphIndex');
		Route::get('/landing-page/about-now', [LandingPageController::class, 'AboutNowIndex'])->name('LandingPage.AboutNowIndex');
		Route::get('/landing-page/best-service', [LandingPageController::class, 'BestServicesIndex'])->name('LandingPage.BestServicesIndex');
		Route::get('/landing-page/call-now', [LandingPageController::class, 'CallNowIndex'])->name('LandingPage.CallNowIndex');
		Route::get('/landing-page/choose-us', [LandingPageController::class, 'ChooseUsIndex'])->name('LandingPage.ChooseUsIndex');
		Route::get('/landing-page/collapse', [LandingPageController::class, 'CollapseIndex'])->name('LandingPage.CollapseIndex');
		Route::get('/landing-page/contact-us', [LandingPageController::class, 'ContactUsIndex'])->name('LandingPage.ContactUsIndex');
		Route::get('/landing-page/customer-area', [LandingPageController::class, 'CustomerAreaIndex'])->name('LandingPage.CustomerAreaIndex');
		Route::get('/landing-page/main-carrousel', [LandingPageController::class, 'MainCarrouselIndex'])->name('LandingPage.MainCarrouselIndex');
		Route::get('/landing-page/our-service', [LandingPageController::class, 'OurServicesIndex'])->name('LandingPage.OurServicesIndex');
		Route::get('/landing-page/privacy-policy', [LandingPageController::class, 'PrivacyPolicyIndex'])->name('LandingPage.PrivacyPolicyIndex');
		Route::get('/landing-page/quote-forms', [LandingPageController::class, 'QuoteFormsIndex'])->name('LandingPage.QuoteFormsIndex');
		Route::get('/landing-page/status', [LandingPageController::class, 'StatusIndex'])->name('LandingPage.StatusIndex');
		Route::get('/landing-page/terms-service', [LandingPageController::class, 'TermsServiceIndex'])->name('LandingPage.TermsServiceIndex');
		Route::get('/landing-page/testimonial', [LandingPageController::class, 'TestimonialIndex'])->name('LandingPage.TestimonialIndex');

		Route::get('/home-page/nav-paragraph', [HomePageController::class, 'NavParagraphIndex'])->name('HomePage.NavParagraphIndex');
		Route::get('/home-page/about-now', [HomePageController::class, 'AboutNowIndex'])->name('HomePage.AboutNowIndex');
		Route::get('/home-page/best-services', [HomePageController::class, 'BestServicesIndex'])->name('HomePage.BestServicesIndex');
		Route::get('/home-page/call-now', [HomePageController::class, 'CallNowIndex'])->name('HomePage.CallNowIndex');
		Route::get('/home-page/choose-us', [HomePageController::class, 'ChooseUsIndex'])->name('HomePage.ChooseUsIndex');
		Route::get('/home-page/collapse', [HomePageController::class, 'CollapseIndex'])->name('HomePage.CollapseIndex');
		Route::get('/home-page/contact-us', [HomePageController::class, 'ContactUsIndex'])->name('HomePage.ContactUsIndex');
		Route::get('/home-page/customer-area', [HomePageController::class, 'CustomerAreaIndex'])->name('HomePage.CustomerAreaIndex');
		Route::get('/home-page/main-carrousel', [HomePageController::class, 'MainCarrouselIndex'])->name('HomePage.MainCarrouselIndex');
		Route::get('/home-page/our-services', [HomePageController::class, 'OurServicesIndex'])->name('HomePage.OurServicesIndex');
		Route::get('/home-page/privacy-policy', [HomePageController::class, 'PrivacyPolicyIndex'])->name('HomePage.PrivacyPolicyIndex');
		Route::get('/home-page/quote-forms', [HomePageController::class, 'QuoteFormsIndex'])->name('HomePage.QuoteFormsIndex');
		Route::get('/home-page/status', [HomePageController::class, 'StatusIndex'])->name('HomePage.StatusIndex');
		Route::get('/home-page/terms-service', [HomePageController::class, 'TermsServiceIndex'])->name('HomePage.TermsServiceIndex');
		Route::get('/home-page/testimonial', [HomePageController::class, 'TestimonialIndex'])->name('HomePage.TestimonialIndex');


		Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
		Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');


		Route::get('/termsservice', [HomePageController::class, 'TermsServiceIndex'])->name('HomePage.TermsServiceIndex');
		Route::get('/privacypolicy', [HomePageController::class, 'PrivacyPolicyIndex'])->name('HomePage.PrivacyPolicyIndex');

		Route::get('/forms/newsletter', [FormsPageController::class, 'newsletter'])->name('FormsPage.newsletter');
		Route::get('/forms/quote', [FormsPageController::class, 'quote'])->name('FormsPage.quote');
		Route::get('/forms/contacto', [FormsPageController::class, 'contact'])->name('FormsPage.contact');

		Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

		Route::post('/formshandle/{contact_form_id}/{type_form}', [FormsHandleController::class, 'destroy'])->name('formshandle.destroy');
		#   Route::resource('/dashboard', DashboardController::class);
		Route::post( '/newfaq', [HomePageController::class, 'newFaq'])->name('HomePage.NewFaq');
		Route::put( '/updatefaq/{id}', [HomePageController::class, 'updateFaq'])->name('HomePage.UpdateFaq');
		Route::delete( '/deletefaq/{id}', [HomePageController::class, 'deleteFaq'])->name('HomePage.DeleteFaq');

		Route::post( '/newfaqlp', [HomePageController::class, 'newFaq'])->name('LandingPage.NewFaq');
		Route::put( '/updatefaqlp/{id}', [HomePageController::class, 'updateFaq'])->name('LandingPage.UpdateFaq');
		Route::delete( '/deletefaqlp/{id}', [HomePageController::class, 'deleteFaq'])->name('LandingPage.DeleteFaq');


		Route::resource( '/home-page', HomePageController::class);
		Route::resource('/landing-page', LandingPageController::class);
		Route::resource('/about-page', AboutPageController::class);
		Route::resource('/services-page', ServicePageController::class);
		Route::resource('/hardware-page', HardwarePageController::class);
		Route::resource('/forms-page', FormsPageController::class);

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
});

// Rota padrão para o subdomínio
Route::domain('desinfestacoes.sospragas.pt')->group(function () {
    Route::get('/', [FrontPageController::class, 'index'])->name('FrontPage.Home');


	Route::resource('/sustentabilidade', SustainabilityController::class);
	Route::post('/newsletter/new', [NewsletterController::class, 'NewsletterForm'])->name('NewsLatterPage.NewsletterForm');
	Route::resource('/equipamentos', HardwareController::class);
	Route::get('/contactos', [ContactPageController::class, 'index'])->name('ContactPage.index');
	Route::post('/quote-form/contactos', [ContactPageController::class, 'ContactFormServiceContactos'])->name('ContactPage.ContactFormContactos');
	Route::post('/contacts', [FrontPageController::class, 'store'])->name('FrontPage.store');
	Route::post('/quote-form', [FrontPageController::class, 'QuoteForm'])->name('FrontPage.QuoteForm');
	Route::post('/schedule-inspection', [FrontPageController::class, 'ScheduleInspection'])->name('FrontPage.ScheduleInspection');
	Route::post('/contact-form', [FrontPageController::class, 'ContactForm'])->name('FrontPage.ContactForm');
	Route::get('/termos-servico', [FrontPageController::class, 'HomeTermoServicos'])->name('FrontPage.TermoServicos');
	Route::get('/politica-privacidade', [FrontPageController::class, 'HomePoliticaPrivacidade'])->name('FrontPage.PoliticaPrivacidade');


	Route::post('/obrigado-fale-conosco', [FrontPageController::class, 'thankYouForm'])->name('FrontPage.thankYouFormContactUs');
	Route::post('/obrigado-pedir-orcamento', [FrontPageController::class, 'thankYouForm'])->name('FrontPage.thankYouFormRequestQuote');
	Route::post('/obrigado-entrar-em-contato', [FrontPageController::class, 'thankYouForm'])->name('FrontPage.thankYouFormContactForm');
	Route::post('/obrigado-agenda-vistoria', [FrontPageController::class, 'thankYouForm'])->name('FrontPage.thankYouFormScheduleInspection');

	Route::post('/obrigado-fale-conosco', [FrontPageController::class, 'thankYouForm'])->name('HomePage.thankYouFormContactUs');
	Route::post('/obrigado-pedir-orcamento', [FrontPageController::class, 'thankYouForm'])->name('HomePage.thankYouFormRequestQuote');
	Route::post('/obrigado-entrar-em-contato', [FrontPageController::class, 'thankYouForm'])->name('HomePage.thankYouFormContactForm');
	Route::post('/obrigado-agenda-vistoria', [FrontPageController::class, 'thankYouForm'])->name('HomePage.thankYouFormScheduleInspection');


	Route::get('/servicos', [ServiceController::class, 'index'])->name('ServicePage.index');



	Route::get('/servicos/{slug}', [ServiceController::class, 'show'])->name('ServicePage.show');
	Route::post('/quote-form/service', [ServiceController::class, 'ContactFormService'])->name('ServicePage.ContactFormService');

	Route::get('/sobre', [AboutController::class, 'index'])->name('About.index');
	Route::post('/quote-form/about', [AboutController::class, 'ContactFormAbout'])->name('About.ContactFormAbout');
	Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('Dashboard');

	Route::middleware('auth')->group(function () {

		Route::get('/landing-page/nav-paragraph', [LandingPageController::class, 'NavParagraphIndex'])->name('LandingPage.NavParagraphIndex');
		Route::get('/landing-page/about-now', [LandingPageController::class, 'AboutNowIndex'])->name('LandingPage.AboutNowIndex');
		Route::get('/landing-page/best-service', [LandingPageController::class, 'BestServicesIndex'])->name('LandingPage.BestServicesIndex');
		Route::get('/landing-page/call-now', [LandingPageController::class, 'CallNowIndex'])->name('LandingPage.CallNowIndex');
		Route::get('/landing-page/choose-us', [LandingPageController::class, 'ChooseUsIndex'])->name('LandingPage.ChooseUsIndex');
		Route::get('/landing-page/collapse', [LandingPageController::class, 'CollapseIndex'])->name('LandingPage.CollapseIndex');
		Route::get('/landing-page/contact-us', [LandingPageController::class, 'ContactUsIndex'])->name('LandingPage.ContactUsIndex');
		Route::get('/landing-page/customer-area', [LandingPageController::class, 'CustomerAreaIndex'])->name('LandingPage.CustomerAreaIndex');
		Route::get('/landing-page/main-carrousel', [LandingPageController::class, 'MainCarrouselIndex'])->name('LandingPage.MainCarrouselIndex');
		Route::get('/landing-page/our-service', [LandingPageController::class, 'OurServicesIndex'])->name('LandingPage.OurServicesIndex');
		Route::get('/landing-page/privacy-policy', [LandingPageController::class, 'PrivacyPolicyIndex'])->name('LandingPage.PrivacyPolicyIndex');
		Route::get('/landing-page/quote-forms', [LandingPageController::class, 'QuoteFormsIndex'])->name('LandingPage.QuoteFormsIndex');
		Route::get('/landing-page/status', [LandingPageController::class, 'StatusIndex'])->name('LandingPage.StatusIndex');
		Route::get('/landing-page/terms-service', [LandingPageController::class, 'TermsServiceIndex'])->name('LandingPage.TermsServiceIndex');
		Route::get('/landing-page/testimonial', [LandingPageController::class, 'TestimonialIndex'])->name('LandingPage.TestimonialIndex');

		Route::get('/home-page/nav-paragraph', [HomePageController::class, 'NavParagraphIndex'])->name('HomePage.NavParagraphIndex');
		Route::get('/home-page/about-now', [HomePageController::class, 'AboutNowIndex'])->name('HomePage.AboutNowIndex');
		Route::get('/home-page/best-services', [HomePageController::class, 'BestServicesIndex'])->name('HomePage.BestServicesIndex');
		Route::get('/home-page/call-now', [HomePageController::class, 'CallNowIndex'])->name('HomePage.CallNowIndex');
		Route::get('/home-page/choose-us', [HomePageController::class, 'ChooseUsIndex'])->name('HomePage.ChooseUsIndex');
		Route::get('/home-page/collapse', [HomePageController::class, 'CollapseIndex'])->name('HomePage.CollapseIndex');
		Route::get('/home-page/contact-us', [HomePageController::class, 'ContactUsIndex'])->name('HomePage.ContactUsIndex');
		Route::get('/home-page/customer-area', [HomePageController::class, 'CustomerAreaIndex'])->name('HomePage.CustomerAreaIndex');
		Route::get('/home-page/main-carrousel', [HomePageController::class, 'MainCarrouselIndex'])->name('HomePage.MainCarrouselIndex');
		Route::get('/home-page/our-services', [HomePageController::class, 'OurServicesIndex'])->name('HomePage.OurServicesIndex');
		Route::get('/home-page/privacy-policy', [HomePageController::class, 'PrivacyPolicyIndex'])->name('HomePage.PrivacyPolicyIndex');
		Route::get('/home-page/quote-forms', [HomePageController::class, 'QuoteFormsIndex'])->name('HomePage.QuoteFormsIndex');
		Route::get('/home-page/status', [HomePageController::class, 'StatusIndex'])->name('HomePage.StatusIndex');
		Route::get('/home-page/terms-service', [HomePageController::class, 'TermsServiceIndex'])->name('HomePage.TermsServiceIndex');
		Route::get('/home-page/testimonial', [HomePageController::class, 'TestimonialIndex'])->name('HomePage.TestimonialIndex');


		Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
		Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');


		Route::get('/termsservice', [HomePageController::class, 'TermsServiceIndex'])->name('HomePage.TermsServiceIndex');
		Route::get('/privacypolicy', [HomePageController::class, 'PrivacyPolicyIndex'])->name('HomePage.PrivacyPolicyIndex');

		Route::get('/forms/newsletter', [FormsPageController::class, 'newsletter'])->name('FormsPage.newsletter');
		Route::get('/forms/quote', [FormsPageController::class, 'quote'])->name('FormsPage.quote');
		Route::get('/forms/contacto', [FormsPageController::class, 'contact'])->name('FormsPage.contact');

		Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

		Route::post('/formshandle/{contact_form_id}/{type_form}', [FormsHandleController::class, 'destroy'])->name('formshandle.destroy');
		#   Route::resource('/dashboard', DashboardController::class);
		Route::post( '/newfaq', [HomePageController::class, 'newFaq'])->name('HomePage.NewFaq');
		Route::put( '/updatefaq/{id}', [HomePageController::class, 'updateFaq'])->name('HomePage.UpdateFaq');
		Route::delete( '/deletefaq/{id}', [HomePageController::class, 'deleteFaq'])->name('HomePage.DeleteFaq');

		Route::post( '/newfaqlp', [HomePageController::class, 'newFaq'])->name('LandingPage.NewFaq');
		Route::put( '/updatefaqlp/{id}', [HomePageController::class, 'updateFaq'])->name('LandingPage.UpdateFaq');
		Route::delete( '/deletefaqlp/{id}', [HomePageController::class, 'deleteFaq'])->name('LandingPage.DeleteFaq');

		Route::resource( '/home-page', HomePageController::class);
		Route::resource('/landing-page', LandingPageController::class);
		Route::resource('/about-page', AboutPageController::class);
		Route::resource('/services-page', ServicePageController::class);
		Route::resource('/hardware-page', HardwarePageController::class);
		Route::resource('/forms-page', FormsPageController::class);

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
});


// Route::domain('127.0.0.1')->group(function () {
//     Route::get('/', [FrontPageController::class, 'index'])->name('FrontPage.Home');

// 	Route::resource('/sustentabilidade', SustainabilityController::class);
// 	Route::post('/newsletter/new', [NewsletterController::class, 'NewsletterForm'])->name('NewsLatterPage.NewsletterForm');
// 	Route::resource('/equipamentos', HardwareController::class);
// 	Route::get('/contactos', [ContactPageController::class, 'index'])->name('ContactPage.index');
// 	Route::post('/quote-form/contactos', [ContactPageController::class, 'ContactFormServiceContactos'])->name('ContactPage.ContactFormContactos');
// 	Route::post('/contacts', [FrontPageController::class, 'store'])->name('FrontPage.store');
// 	Route::post('/quote-form', [FrontPageController::class, 'QuoteForm'])->name('QuoteForm');
// 	Route::post('/contact-form', [FrontPageController::class, 'ContactForm'])->name('FrontPage.ContactForm');
// 	Route::get('/termos-servico', [FrontPageController::class, 'HomeTermoServicos'])->name('FrontPage.TermoServicos');
// 	Route::get('/politica-privacidade', [FrontPageController::class, 'HomePoliticaPrivacidade'])->name('FrontPage.PoliticaPrivacidade');



// 	Route::get('/servicos', [ServiceController::class, 'index'])->name('ServicePage.index');
// 	Route::get('/servicos/{slug}', [ServiceController::class, 'show'])->name('ServicePage.show');
// 	Route::post('/quote-form/service', [ServiceController::class, 'ContactFormService'])->name('ServicePage.ContactFormService');

// 	Route::get('/sobre', [AboutController::class, 'index'])->name('About.index');
// 	Route::post('/quote-form/about', [AboutController::class, 'ContactFormAbout'])->name('About.ContactFormAbout');
// 	Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('Dashboard');

// 	Route::middleware('auth')->group(function () {

// 		Route::get('/landing-page/nav-paragraph', [LandingPageController::class, 'NavParagraphIndex'])->name('LandingPage.NavParagraphIndex');
// 		Route::get('/landing-page/about-now', [LandingPageController::class, 'AboutNowIndex'])->name('LandingPage.AboutNowIndex');
// 		Route::get('/landing-page/best-service', [LandingPageController::class, 'BestServicesIndex'])->name('LandingPage.BestServicesIndex');
// 		Route::get('/landing-page/call-now', [LandingPageController::class, 'CallNowIndex'])->name('LandingPage.CallNowIndex');
// 		Route::get('/landing-page/choose-us', [LandingPageController::class, 'ChooseUsIndex'])->name('LandingPage.ChooseUsIndex');
// 		Route::get('/landing-page/collapse', [LandingPageController::class, 'CollapseIndex'])->name('LandingPage.CollapseIndex');
// 		Route::get('/landing-page/contact-us', [LandingPageController::class, 'ContactUsIndex'])->name('LandingPage.ContactUsIndex');
// 		Route::get('/landing-page/customer-area', [LandingPageController::class, 'CustomerAreaIndex'])->name('LandingPage.CustomerAreaIndex');
// 		Route::get('/landing-page/main-carrousel', [LandingPageController::class, 'MainCarrouselIndex'])->name('LandingPage.MainCarrouselIndex');
// 		Route::get('/landing-page/our-service', [LandingPageController::class, 'OurServicesIndex'])->name('LandingPage.OurServicesIndex');
// 		Route::get('/landing-page/privacy-policy', [LandingPageController::class, 'PrivacyPolicyIndex'])->name('LandingPage.PrivacyPolicyIndex');
// 		Route::get('/landing-page/quote-forms', [LandingPageController::class, 'QuoteFormsIndex'])->name('LandingPage.QuoteFormsIndex');
// 		Route::get('/landing-page/status', [LandingPageController::class, 'StatusIndex'])->name('LandingPage.StatusIndex');
// 		Route::get('/landing-page/terms-service', [LandingPageController::class, 'TermsServiceIndex'])->name('LandingPage.TermsServiceIndex');
// 		Route::get('/landing-page/testimonial', [LandingPageController::class, 'TestimonialIndex'])->name('LandingPage.TestimonialIndex');

// 		Route::get('/home-page/nav-paragraph', [HomePageController::class, 'NavParagraphIndex'])->name('HomePage.NavParagraphIndex');
// 		Route::get('/home-page/about-now', [HomePageController::class, 'AboutNowIndex'])->name('HomePage.AboutNowIndex');
// 		Route::get('/home-page/best-services', [HomePageController::class, 'BestServicesIndex'])->name('HomePage.BestServicesIndex');
// 		Route::get('/home-page/call-now', [HomePageController::class, 'CallNowIndex'])->name('HomePage.CallNowIndex');
// 		Route::get('/home-page/choose-us', [HomePageController::class, 'ChooseUsIndex'])->name('HomePage.ChooseUsIndex');
// 		Route::get('/home-page/collapse', [HomePageController::class, 'CollapseIndex'])->name('HomePage.CollapseIndex');
// 		Route::get('/home-page/contact-us', [HomePageController::class, 'ContactUsIndex'])->name('HomePage.ContactUsIndex');
// 		Route::get('/home-page/customer-area', [HomePageController::class, 'CustomerAreaIndex'])->name('HomePage.CustomerAreaIndex');
// 		Route::get('/home-page/main-carrousel', [HomePageController::class, 'MainCarrouselIndex'])->name('HomePage.MainCarrouselIndex');
// 		Route::get('/home-page/our-services', [HomePageController::class, 'OurServicesIndex'])->name('HomePage.OurServicesIndex');
// 		Route::get('/home-page/privacy-policy', [HomePageController::class, 'PrivacyPolicyIndex'])->name('HomePage.PrivacyPolicyIndex');
// 		Route::get('/home-page/quote-forms', [HomePageController::class, 'QuoteFormsIndex'])->name('HomePage.QuoteFormsIndex');
// 		Route::get('/home-page/status', [HomePageController::class, 'StatusIndex'])->name('HomePage.StatusIndex');
// 		Route::get('/home-page/terms-service', [HomePageController::class, 'TermsServiceIndex'])->name('HomePage.TermsServiceIndex');
// 		Route::get('/home-page/testimonial', [HomePageController::class, 'TestimonialIndex'])->name('HomePage.TestimonialIndex');


// 		Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
// 		Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');


// 		Route::get('/termsservice', [HomePageController::class, 'TermsServiceIndex'])->name('HomePage.TermsServiceIndex');
// 		Route::get('/privacypolicy', [HomePageController::class, 'PrivacyPolicyIndex'])->name('HomePage.PrivacyPolicyIndex');

// 		Route::get('/forms/newsletter', [FormsPageController::class, 'newsletter'])->name('FormsPage.newsletter');
// 		Route::get('/forms/quote', [FormsPageController::class, 'quote'])->name('FormsPage.quote');
// 		Route::get('/forms/contacto', [FormsPageController::class, 'contact'])->name('FormsPage.contact');

// 		Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

// 		Route::post('/formshandle/{contact_form_id}/{type_form}', [FormsHandleController::class, 'destroy'])->name('formshandle.destroy');
// 		#   Route::resource('/dashboard', DashboardController::class);
// 		Route::resource( '/home-page', HomePageController::class);
// 		Route::resource('/landing-page', LandingPageController::class);
// 		Route::resource('/about-page', AboutPageController::class);
// 		Route::resource('/services-page', ServicePageController::class);
// 		Route::resource('/hardware-page', HardwarePageController::class);
// 		Route::resource('/forms-page', FormsPageController::class);

// 		Route::resource('/sustainability-page', SustainabilityPageController::class);
// 		Route::resource('/ServiceDetails', ServiceDetailsController::class);
// 		Route::resource('/methods', MethodController::class);
// 		Route::resource('/review', ReviewController::class);



// 		Route::post('MethodController/fetch',[MethodController::class,'fetch'])
// 				->name('MethodController.fetch');

// 		Route::post('ServiceDetailsController/fetch',[ServiceDetailsController::class,'fetch'])
// 				->name('ServiceDetailsController.fetch');
// 		// Route::post('/service-details', [ServiceDetailsController::class,'store'])->middleware(['auth', 'verified'])->name('ServiceDetails.store');
// 		// Route::put('/service-details/{id}', [ServiceDetailsController::class,'update'])->middleware(['auth', 'verified'])->name('ServiceDetails.update');
// 		//Route::post('/contacts', [FrontPageController::class, 'store'])->name('FrontPage.store');
// 	});
// });


require __DIR__.'/auth.php';
