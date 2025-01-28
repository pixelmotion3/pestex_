<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAboutRequest;
use App\Http\Requests\UpdateAboutRequest;
use App\Models\About;
use App\Models\About_service;
use App\Models\About_video;
use App\Models\Testimonial;
use App\Models\ContactInfo;
use App\Models\TestimonialAbout;
use App\Models\contacts;
use App\Models\SustainabilityPage;
use Illuminate\Http\Request;
use App\Models\quote_forms;
use App\Models\contact_forms;
use App\Models\News_letter;
use App\Models\PageView;

class ContactPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service = About_service::where('id',1)->get()->toArray();
        $video = About_video::where('id',1)->get()->toArray();
        $testimonial = Testimonial::where('id',1)->get()->toArray();
        $contact_info = ContactInfo::where('id',1)->get()->toArray();
		$main = SustainabilityPage::where('id', 1)->get()->toArray();
		$testimonial_abouts = TestimonialAbout::all();
		$showCookieBanner = 0;
		if(isset($_COOKIE['cookie_consent_sosp'])){
			$showCookieBanner = $_COOKIE['cookie_consent_sosp'] == true ? 1 : 0;
		}else{
		 	$showCookieBanner = 0;
		}
		$routeName = 'contactos'; // Nome da rota ou página que será monitorada
		$today = now()->toDateString(); // Data atual (YYYY-MM-DD)
		// Incrementa ou cria um registro para a contagem de visitas
		PageView::updateOrCreate(
			['route_name' => $routeName, 'view_date' => $today],
			['view_count' => \DB::raw('view_count + 1')]
		);
		$contactos_news = contact_forms::where('viewed', null)->get()->toArray();
		$contact_forms_news = count(contact_forms::where('viewed', null)->get()->toArray());
		$news_letters_news = count(News_letter::where('viewed', null)->get()->toArray());
		$quote_forms_news = count(quote_forms::where('viewed', null)->get()->toArray());
		$news_forms = $contact_forms_news + $news_letters_news + $quote_forms_news;
        //dd($contact_info);
        return view('contacts.index', [
            'service' => $service,
            'video' => $video,
            'testimonial' => $testimonial,
            'contact_info' => $contact_info,
			'testimonial_abouts' => $testimonial_abouts,
			'main' => $main,
			'news_forms' => $news_forms,
			'contactos_news' => $contactos_news,
			'contact_forms_news' => $contact_forms_news,
			'news_letters_news' => $news_letters_news,
			'quote_forms_news' => $quote_forms_news,
			'showCookieBanner' => !$showCookieBanner
        ]);
    }



    /**
     * Store a newly created|string resource in storage.
     */
    public function store(Request $request, contacts $contacts)
    {
        //dd($request->all());
        $query = contacts::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'message' => $request->input('message'),
            'confirmed' => true
        ]);
        if ($query) {
            return view('contacts.index');
        }
    }

	public function ContactFormServiceContactos(Request $request){
		$query = contact_forms::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'confirmed' => true
        ]);

		if ($query) {

			return redirect()->back()->with('success', 'Obrigado pelo seu contacto. Iremos entrar em contacto brevemente!')->withInput();
		}
		return redirect()->back()->with('error', 'Ocorreu um erro ao enviar o formulário. Tente novamente.');
    }


}
