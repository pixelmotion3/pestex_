<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\FrontPage;
use App\Models\LandingPage;
use App\Models\landing_2page;
use App\Models\landing_3page;
use App\Models\landing_4page;
use App\Models\landing_5page;
use App\Models\landing_6page;
use App\Models\landing_7page;
use App\Models\landing_8page;
use App\Models\landing_9page;
use App\Models\landing_10page;
use App\Models\landing_11page;
use App\Models\landing_12page;
use App\Models\landing_13page;
use App\Models\ServiceDetails;
use App\Models\contacts;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Models\quote_forms;
use App\Models\contact_forms;
use App\Models\ContactInfo;
use App\Models\faq;
use App\Models\News_letter;
use App\Models\PageView;
use App\Models\schedule_inspection;
use App\Models\SustainabilityPage;
use Illuminate\Support\Facades\Mail;
class FrontPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $landing_page = LandingPage::where('id',1)->get()->toArray();
        $landing_2page = landing_2page::where('id',1)->get()->toArray();
        $landing_3page = landing_3page::where('id',1)->get()->toArray();
        $landing_4page = landing_4page::where('id',1)->get()->toArray();
        $landing_5page = landing_5page::where('id',1)->get()->toArray();
        $landing_6page = landing_6page::where('id',1)->get()->toArray();
        $landing_7page = landing_7page::where('id',1)->get()->toArray();
        $landing_8page = landing_8page::where('id',1)->get()->toArray();
        $landing_9page = landing_9page::where('id',1)->get()->toArray();
        $landing_10page = landing_10page::where('id',1)->get()->toArray();
        $landing_11page = landing_11page::where('id',1)->get()->toArray();
		$services = ServiceDetails::all();
        $reviews = Review::all();
		$faqs = faq::all();
		$contactos_news = contact_forms::where('viewed', null)->get()->toArray();
		$contact_forms_news = count(contact_forms::where('viewed', null)->get()->toArray());
		$news_letters_news = count(News_letter::where('viewed', null)->get()->toArray());
		$quote_forms_news = count(quote_forms::where('viewed', null)->get()->toArray());
		$news_forms = $contact_forms_news + $news_letters_news + $quote_forms_news;


		$showCookieBanner = 0;
		if(isset($_COOKIE['cookie_consent_sosp'])){
			$showCookieBanner = $_COOKIE['cookie_consent_sosp'] == true ? 1 : 0;
		}else{
		 	$showCookieBanner = 0;
		}


		$routeName = 'landing-page'; // Nome da rota ou página que será monitorada
        $today = now()->toDateString(); // Data atual (YYYY-MM-DD)
		// Incrementa ou cria um registro para a contagem de visitas
		PageView::updateOrCreate(
			['route_name' => $routeName, 'view_date' => $today],
			['view_count' => \DB::raw('view_count + 1')]
		);

        return view('index', [
            'main_screen' => $landing_page,
            'company_status' => $landing_2page,
            'best_service' => $landing_3page,
            'our_service_1' => $landing_4page,
            'our_service_2' => $landing_5page,
            'about_now' => $landing_6page,
            'choose_us' => $landing_7page,
            'testimonial_say' => $landing_8page,
            'collapse' => $landing_9page,
            'call_now' => $landing_10page,
			'services' => $services,
            'video_contact' => $landing_11page,
            'reviews' =>  $reviews,
			'contactos_news' => $contactos_news,
			'contact_forms_news' => $contact_forms_news,
			'news_letters_news' => $news_letters_news,
			'quote_forms_news' => $quote_forms_news,
			'showCookieBanner' => !$showCookieBanner,
			'faqs' => $faqs
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function Home(Request $request)
    {
        $landing_page = LandingPage::where('id',2)->get()->toArray();
        $landing_2page = landing_2page::where('id',2)->get()->toArray();
        $landing_3page = landing_3page::where('id',2)->get()->toArray();
        $landing_4page = landing_4page::where('id',2)->get()->toArray();
        $landing_5page = landing_5page::where('id',2)->get()->toArray();
        $landing_6page = landing_6page::where('id',2)->get()->toArray();
        $landing_7page = landing_7page::where('id',2)->get()->toArray();
        $landing_8page = landing_8page::where('id',2)->get()->toArray();
        $landing_9page = landing_9page::where('id',2)->get()->toArray();
        $landing_10page = landing_10page::where('id',2)->get()->toArray();
        $landing_11page = landing_11page::where('id',2)->get()->toArray();
		$services = ServiceDetails::all();
		$reviews = Review::all();
		$faqs = faq::all();
		$showCookieBanner = 0;
		if(isset($_COOKIE['cookie_consent_sosp'])){
			$showCookieBanner = $_COOKIE['cookie_consent_sosp'] == true ? 1 : 0;
		}else{
		 	$showCookieBanner = 0;
		}


		$contactos_news = contact_forms::where('viewed', null)->get()->toArray();
		$contact_forms_news = count(contact_forms::where('viewed', null)->get()->toArray());
		$news_letters_news = count(News_letter::where('viewed', null)->get()->toArray());
		$quote_forms_news = count(quote_forms::where('viewed', null)->get()->toArray());
		$news_forms = $contact_forms_news + $news_letters_news + $quote_forms_news;
		$routeName = 'home'; // Nome da rota ou página que será monitorada
        $today = now()->toDateString(); // Data atual (YYYY-MM-DD)
		// Incrementa ou cria um registro para a contagem de visitas
		PageView::updateOrCreate(
			['route_name' => $routeName, 'view_date' => $today],
			['view_count' => \DB::raw('view_count + 1')]
		);
        return view('home.index', [
            'main_screen' => $landing_page,
            'company_status' => $landing_2page,
            'best_service' => $landing_3page,
            'our_service_1' => $landing_4page,
            'our_service_2' => $landing_5page,
            'about_now' => $landing_6page,
            'choose_us' => $landing_7page,
            'testimonial_say' => $landing_8page,
            'collapse' => $landing_9page,
            'call_now' => $landing_10page,
            'video_contact' => $landing_11page,
			'services' => $services,
			'reviews' =>  $reviews,
			'contactos_news' => $contactos_news,
			'contact_forms_news' => $contact_forms_news,
			'news_letters_news' => $news_letters_news,
			'quote_forms_news' => $quote_forms_news,
			'showCookieBanner' => !$showCookieBanner,
			'faqs' => $faqs
        ]);
    }

	public function TermoServicos()
    {
        $landing_page = LandingPage::where('id',1)->get()->toArray();
        $landing_2page = landing_2page::where('id',1)->get()->toArray();
        $landing_3page = landing_3page::where('id',1)->get()->toArray();
        $landing_4page = landing_4page::where('id',1)->get()->toArray();
        $landing_5page = landing_5page::where('id',1)->get()->toArray();
        $landing_6page = landing_6page::where('id',1)->get()->toArray();
        $landing_7page = landing_7page::where('id',1)->get()->toArray();
        $landing_8page = landing_8page::where('id',1)->get()->toArray();
        $landing_9page = landing_9page::where('id',1)->get()->toArray();
        $landing_10page = landing_10page::where('id',1)->get()->toArray();
        $landing_11page = landing_11page::where('id',1)->get()->toArray();
		$landing_12page = landing_12page::where('id',1)->get()->toArray();

		$contactos_news = contact_forms::where('viewed', null)->get()->toArray();
		$contact_forms_news = count(contact_forms::where('viewed', null)->get()->toArray());
		$news_letters_news = count(News_letter::where('viewed', null)->get()->toArray());
		$quote_forms_news = count(quote_forms::where('viewed', null)->get()->toArray());
		$news_forms = $contact_forms_news + $news_letters_news + $quote_forms_news;
		$routeName = 'termos-servico'; // Nome da rota ou página que será monitorada
        $today = now()->toDateString(); // Data atual (YYYY-MM-DD)
		// Incrementa ou cria um registro para a contagem de visitas
		PageView::updateOrCreate(
			['route_name' => $routeName, 'view_date' => $today],
			['view_count' => \DB::raw('view_count + 1')]
		);
        return view('termos.termos', [
            'main_screen' => $landing_page,
            'company_status' => $landing_2page,
            'best_service' => $landing_3page,
            'our_service_1' => $landing_4page,
            'our_service_2' => $landing_5page,
            'about_now' => $landing_6page,
            'choose_us' => $landing_7page,
            'testimonial_say' => $landing_8page,
            'collapse' => $landing_9page,
            'call_now' => $landing_10page,
            'video_contact' => $landing_11page,
			'terms_service' => $landing_12page,
			'contactos_news' => $contactos_news,
			'contact_forms_news' => $contact_forms_news,
			'news_letters_news' => $news_letters_news,
			'quote_forms_news' => $quote_forms_news
        ]);
    }


	public function HomeTermoServicos()
    {
        $landing_page = LandingPage::where('id',2)->get()->toArray();
        $landing_2page = landing_2page::where('id',2)->get()->toArray();
        $landing_3page = landing_3page::where('id',2)->get()->toArray();
        $landing_4page = landing_4page::where('id',2)->get()->toArray();
        $landing_5page = landing_5page::where('id',2)->get()->toArray();
        $landing_6page = landing_6page::where('id',2)->get()->toArray();
        $landing_7page = landing_7page::where('id',2)->get()->toArray();
        $landing_8page = landing_8page::where('id',2)->get()->toArray();
        $landing_9page = landing_9page::where('id',2)->get()->toArray();
        $landing_10page = landing_10page::where('id',2)->get()->toArray();
        $landing_11page = landing_11page::where('id',2)->get()->toArray();
		$landing_12page = landing_12page::where('id',2)->get()->toArray();

		$contactos_news = contact_forms::where('viewed', null)->get()->toArray();
		$contact_forms_news = count(contact_forms::where('viewed', null)->get()->toArray());
		$news_letters_news = count(News_letter::where('viewed', null)->get()->toArray());
		$quote_forms_news = count(quote_forms::where('viewed', null)->get()->toArray());
		$news_forms = $contact_forms_news + $news_letters_news + $quote_forms_news;
		$routeName = 'termos-servico'; // Nome da rota ou página que será monitorada
        $today = now()->toDateString(); // Data atual (YYYY-MM-DD)
		// Incrementa ou cria um registro para a contagem de visitas
		PageView::updateOrCreate(
			['route_name' => $routeName, 'view_date' => $today],
			['view_count' => \DB::raw('view_count + 1')]
		);
        return view('home-termos.termos', [
            'main_screen' => $landing_page,
            'company_status' => $landing_2page,
            'best_service' => $landing_3page,
            'our_service_1' => $landing_4page,
            'our_service_2' => $landing_5page,
            'about_now' => $landing_6page,
            'choose_us' => $landing_7page,
            'testimonial_say' => $landing_8page,
            'collapse' => $landing_9page,
            'call_now' => $landing_10page,
            'video_contact' => $landing_11page,
			'terms_service' => $landing_12page,
			'contactos_news' => $contactos_news,
			'contact_forms_news' => $contact_forms_news,
			'news_letters_news' => $news_letters_news,
			'quote_forms_news' => $quote_forms_news
        ]);
    }


	public function HomePoliticaPrivacidade()
    {




        $landing_page = LandingPage::where('id',2)->get()->toArray();
        $landing_2page = landing_2page::where('id',2)->get()->toArray();
        $landing_3page = landing_3page::where('id',2)->get()->toArray();
        $landing_4page = landing_4page::where('id',2)->get()->toArray();
        $landing_5page = landing_5page::where('id',2)->get()->toArray();
        $landing_6page = landing_6page::where('id',2)->get()->toArray();
        $landing_7page = landing_7page::where('id',2)->get()->toArray();
        $landing_8page = landing_8page::where('id',2)->get()->toArray();
        $landing_9page = landing_9page::where('id',2)->get()->toArray();
        $landing_10page = landing_10page::where('id',2)->get()->toArray();
        $landing_11page = landing_11page::where('id',2)->get()->toArray();
		$landing_12page = landing_12page::where('id',2)->get()->toArray();
		$landing_13page = landing_13page::where('id',2)->get()->toArray();

		$routeName = 'poltica-privacidade'; // Nome da rota ou página que será monitorada
        $today = now()->toDateString(); // Data atual (YYYY-MM-DD)
		// Incrementa ou cria um registro para a contagem de visitas
		PageView::updateOrCreate(
			['route_name' => $routeName, 'view_date' => $today],
			['view_count' => \DB::raw('view_count + 1')]
		);
        return view('home-politica-privacidade.privacidade', [
            'main_screen' => $landing_page,
            'company_status' => $landing_2page,
            'best_service' => $landing_3page,
            'our_service_1' => $landing_4page,
            'our_service_2' => $landing_5page,
            'about_now' => $landing_6page,
            'choose_us' => $landing_7page,
            'testimonial_say' => $landing_8page,
            'collapse' => $landing_9page,
            'call_now' => $landing_10page,
            'video_contact' => $landing_11page,
			'terms_service' => $landing_12page,
			'privacy_policy' => $landing_13page

        ]);
    }

	public function PoliticaPrivacidade()
    {


        $landing_page = LandingPage::where('id',1)->get()->toArray();
        $landing_2page = landing_2page::where('id',1)->get()->toArray();
        $landing_3page = landing_3page::where('id',1)->get()->toArray();
        $landing_4page = landing_4page::where('id',1)->get()->toArray();
        $landing_5page = landing_5page::where('id',1)->get()->toArray();
        $landing_6page = landing_6page::where('id',1)->get()->toArray();
        $landing_7page = landing_7page::where('id',1)->get()->toArray();
        $landing_8page = landing_8page::where('id',1)->get()->toArray();
        $landing_9page = landing_9page::where('id',1)->get()->toArray();
        $landing_10page = landing_10page::where('id',1)->get()->toArray();
        $landing_11page = landing_11page::where('id',1)->get()->toArray();
		$landing_12page = landing_12page::where('id',1)->get()->toArray();
		$landing_13page = landing_13page::where('id',1)->get()->toArray();

		$routeName = 'politica-privacidade'; // Nome da rota ou página que será monitorada
        $today = now()->toDateString(); // Data atual (YYYY-MM-DD)
		// Incrementa ou cria um registro para a contagem de visitas
		PageView::updateOrCreate(
			['route_name' => $routeName, 'view_date' => $today],
			['view_count' => \DB::raw('view_count + 1')]
		);

        return view('politica-privacidade.privacidade', [
            'main_screen' => $landing_page,
            'company_status' => $landing_2page,
            'best_service' => $landing_3page,
            'our_service_1' => $landing_4page,
            'our_service_2' => $landing_5page,
            'about_now' => $landing_6page,
            'choose_us' => $landing_7page,
            'testimonial_say' => $landing_8page,
            'collapse' => $landing_9page,
            'call_now' => $landing_10page,
            'video_contact' => $landing_11page,
			'terms_service' => $landing_12page,
			'privacy_policy' => $landing_13page

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

    }

    public function QuoteForm(Request $request, quote_forms $quote_form)
    {
		$userIp = $request->ip();
		$isBot = $request->input('user_email_check');
		if($isBot != "") {
			abort(403, 'Ops...');
		}

		$tempo = now()->timestamp - intval($request->input('form_start'));
		if ($tempo < 3) {
			abort(403, 'Ops...');
		}
        //dd($request->all());
        $query = quote_forms::create([
            'customer_type' => $request->input('customer_type'),
            'products' => "",//$request->input('products'),
            'locality' => $request->input('locality'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'confirmed' => true,
			'ip' => $userIp
        ]);
		// <b>Nome:</b> {{ $data['name'] }}<br/>
		// <b>Email:</b> {{ $data['email'] }}<br/>
		// <b>Telefone:</b> {{ $data['phone'] }}<br/>
		// <b>Localidade:</b> {{ $data['local'] }}<br/>
		// <b>Tipo:</b> {{ $data['type'] }}

		$secretKey = 'ES_8cf3c7f61ea84e6ebb4446cb84cfa8e4'; // Substitua pela sua chave secreta
		$verifyUrl = 'https://api.hcaptcha.com/siteverify';

		// Recebe o token da resposta enviada do formulário
		$token = $_POST['h-captcha-response']?? '';

		// Cria os dados para enviar na requisição POST
		$data = [
			'secret' => $secretKey,
			'response' => $token
		];

		// Faz a requisição POST para a API do hCaptcha
		$options = [
			'http' => [
				'method'  => 'POST',
				'content' => http_build_query($data),
				'header'  => "Content-Type: application/x-www-form-urlencoded\r\n"
			]
		];
		$context  = stream_context_create($options);
		$response = file_get_contents($verifyUrl, false, $context);

		// Decodifica a resposta JSON
		$responseJson = json_decode($response, true);

		// Verifica se a verificação foi bem-sucedida
		$success = $responseJson['success'];

		if ($success) {
			$data = [
				'name' => $request->input('name'),
				'email' => $request->input('email'),
				'phone' => $request->input('phone'),
				'local' => $request->input('locality'),
				'type' => $request->input('customer_type')
			];
			Mail::to("geral@sospragas.pt")->send(new ContactMail($data));
			if ($query) {
				return redirect()->back()->with('success', 'Obrigado pelo seu contacto. Iremos entrar em contacto brevemente!!');
			}
		} else {
			return redirect()->back()->with('error', 'Ocorreu um erro ao enviar o formulário. Tente novamente.');
		}


    }


    public function ContactForm(Request $request){
		$secretKey = 'ES_8cf3c7f61ea84e6ebb4446cb84cfa8e4'; // Substitua pela sua chave secreta
		$verifyUrl = 'https://api.hcaptcha.com/siteverify';

		// Recebe o token da resposta enviada do formulário
		$token = $_POST['h-captcha-response']?? '';

		// Cria os dados para enviar na requisição POST
		$data = [
			'secret' => $secretKey,
			'response' => $token
		];

		// Faz a requisição POST para a API do hCaptcha
		$options = [
			'http' => [
				'method'  => 'POST',
				'content' => http_build_query($data),
				'header'  => "Content-Type: application/x-www-form-urlencoded\r\n"
			]
		];
		$context  = stream_context_create($options);
		$response = file_get_contents($verifyUrl, false, $context);

		// Decodifica a resposta JSON
		$responseJson = json_decode($response, true);

		// Verifica se a verificação foi bem-sucedida
		$success = $responseJson['success'];

		if ($success) {
			$query = contact_forms::create([
				'name' => $request->input('name'),
				'email' => $request->input('email'),
				'phone' => $request->input('phone'),
				'confirmed' => true
			]);
			if ($query) {
				return redirect()->back()->with('success', 'Obrigado pelo seu contacto. Iremos entrar em contacto brevemente!!');
			}
			return redirect()->back()->with('error', 'Ocorreu um erro ao enviar o formulário. Tente novamente.');
		} else {
			return redirect()->back()->with('error', 'Ocorreu um erro ao enviar o formulário. Tente novamente.');
		}



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


	public function thankYouForm(Request $request){


		$userIp = $request->ip();

		if($request->input('type_form') == 'QuoteForm'){
			//dd($request->all());
			$isBot = $request->input('user_email_check');
			if($isBot != "") {
				abort(403, 'Ops...');
			}

			$tempo = now()->timestamp - intval($request->input('form_start'));
			if ($tempo < 3) {
				abort(403, 'Ops...');
			}
			$query = quote_forms::create([
				'customer_type' => $request->input('customer_type'),
				'products' => "",//$request->input('products'),
				'locality' => $request->input('locality'),
				'name' => $request->input('name'),
				'email' => $request->input('email'),
				'phone' => $request->input('phone'),
				'confirmed' => true,
				'ip' => $userIp
			]);
			// <b>Nome:</b> {{ $data['name'] }}<br/>
			// <b>Email:</b> {{ $data['email'] }}<br/>
			// <b>Telefone:</b> {{ $data['phone'] }}<br/>
			// <b>Localidade:</b> {{ $data['local'] }}<br/>
			// <b>Tipo:</b> {{ $data['type'] }}

			$secretKey = 'ES_8cf3c7f61ea84e6ebb4446cb84cfa8e4'; // Substitua pela sua chave secreta
			$verifyUrl = 'https://api.hcaptcha.com/siteverify';

			// Recebe o token da resposta enviada do formulário
			$token = $_POST['h-captcha-response']?? '';

			// Cria os dados para enviar na requisição POST
			$data = [
				'secret' => $secretKey,
				'response' => $token
			];

			// Faz a requisição POST para a API do hCaptcha
			$options = [
				'http' => [
					'method'  => 'POST',
					'content' => http_build_query($data),
					'header'  => "Content-Type: application/x-www-form-urlencoded\r\n"
				]
			];
			$context  = stream_context_create($options);
			$response = file_get_contents($verifyUrl, false, $context);

			// Decodifica a resposta JSON
			$responseJson = json_decode($response, true);

			// Verifica se a verificação foi bem-sucedida
			$success = $responseJson['success'];

			if ($success) {
				$data = [
					'name' => $request->input('name'),
					'email' => $request->input('email'),
					'phone' => $request->input('phone'),
					'local' => $request->input('locality'),
					'type' => $request->input('customer_type')
				];
				Mail::to("geral@sospragas.pt")->send(new ContactMail($data));
				$contact_info = ContactInfo::where('id',1)->get()->toArray();
				$main = SustainabilityPage::where('id', 1)->get()->toArray();
				return view('thank-you.index', [
					'contact_info' => $contact_info,
					'main' => $main
				]);
			} else {
				return redirect()->back()->with('error', 'Ocorreu um erro ao enviar o formulário. Tente novamente.');
			}
		}

		if($request->input('type_form') == 'ContactForm'){

			$isBot = $request->input('user_email_check');
			if($isBot != "") {
				abort(403, 'Ops...');
			}

			$tempo = now()->timestamp - intval($request->input('form_start'));
			if ($tempo < 3) {
				abort(403, 'Ops...');
			}

			$secretKey = 'ES_8cf3c7f61ea84e6ebb4446cb84cfa8e4'; // Substitua pela sua chave secreta
			$verifyUrl = 'https://api.hcaptcha.com/siteverify';

			// Recebe o token da resposta enviada do formulário
			$token = $_POST['h-captcha-response']?? '';

			// Cria os dados para enviar na requisição POST
			$data = [
				'secret' => $secretKey,
				'response' => $token
			];

			// Faz a requisição POST para a API do hCaptcha
			$options = [
				'http' => [
					'method'  => 'POST',
					'content' => http_build_query($data),
					'header'  => "Content-Type: application/x-www-form-urlencoded\r\n"
				]
			];
			$context  = stream_context_create($options);
			$response = file_get_contents($verifyUrl, false, $context);

			// Decodifica a resposta JSON
			$responseJson = json_decode($response, true);

			// Verifica se a verificação foi bem-sucedida
			$success = $responseJson['success'];

			if ($success) {
				$query = contact_forms::create([
					'name' => $request->input('name'),
					'email' => $request->input('email'),
					'phone' => $request->input('phone'),
					'confirmed' => true
				]);
				if ($query) {
					$contact_info = ContactInfo::where('id',1)->get()->toArray();
					$main = SustainabilityPage::where('id', 1)->get()->toArray();
					return view('thank-you.index', [
						'contact_info' => $contact_info,
						'main' => $main
					]);
				}
				return redirect()->back()->with('error', 'Ocorreu um erro ao enviar o formulário. Tente novamente.');
			} else {
				return redirect()->back()->with('error', 'Ocorreu um erro ao enviar o formulário. Tente novamente.');
			}

		}

		if($request->input('type_form') == 'ContactFormContactos'){
			$secretKey = 'ES_8cf3c7f61ea84e6ebb4446cb84cfa8e4'; // Substitua pela sua chave secreta
			$verifyUrl = 'https://api.hcaptcha.com/siteverify';

			// Recebe o token da resposta enviada do formulário
			$token = $_POST['h-captcha-response']?? '';

			// Cria os dados para enviar na requisição POST
			$data = [
				'secret' => $secretKey,
				'response' => $token
			];

			// Faz a requisição POST para a API do hCaptcha
			$options = [
				'http' => [
					'method'  => 'POST',
					'content' => http_build_query($data),
					'header'  => "Content-Type: application/x-www-form-urlencoded\r\n"
				]
			];
			$context  = stream_context_create($options);
			$response = file_get_contents($verifyUrl, false, $context);

			// Decodifica a resposta JSON
			$responseJson = json_decode($response, true);

			// Verifica se a verificação foi bem-sucedida
			$success = $responseJson['success'];

			if ($success) {
				$query = contact_forms::create([
					'name' => $request->input('name'),
					'email' => $request->input('email'),
					'phone' => $request->input('phone'),
					'confirmed' => true
				]);
				if ($query) {
					$contact_info = ContactInfo::where('id',1)->get()->toArray();
					$main = SustainabilityPage::where('id', 1)->get()->toArray();
					return view('thank-you.index', [
						'contact_info' => $contact_info,
						'main' => $main
					]);
				}
				return redirect()->back()->with('error', 'Ocorreu um erro ao enviar o formulário. Tente novamente.');
			} else {
				return redirect()->back()->with('error', 'Ocorreu um erro ao enviar o formulário. Tente novamente.');
			}

		}

		if($request->input('type_form') == 'ScheduleInspection'){
			//dd($request->all());
			$query = schedule_inspection::create([
				'name' => $request->input('name'),
				'email' => $request->input('email'),
				'phone' => $request->input('phone'),
				'confirmed' => true
			]);
			$contact_info = ContactInfo::where('id',1)->get()->toArray();
			$main = SustainabilityPage::where('id', 1)->get()->toArray();


			$secretKey = 'ES_8cf3c7f61ea84e6ebb4446cb84cfa8e4'; // Substitua pela sua chave secreta
			$verifyUrl = 'https://api.hcaptcha.com/siteverify';

			// Recebe o token da resposta enviada do formulário
			$token = $_POST['h-captcha-response']?? '';

			// Cria os dados para enviar na requisição POST
			$data = [
				'secret' => $secretKey,
				'response' => $token
			];

			// Faz a requisição POST para a API do hCaptcha
			$options = [
				'http' => [
					'method'  => 'POST',
					'content' => http_build_query($data),
					'header'  => "Content-Type: application/x-www-form-urlencoded\r\n"
				]
			];
			$context  = stream_context_create($options);
			$response = file_get_contents($verifyUrl, false, $context);

			// Decodifica a resposta JSON
			$responseJson = json_decode($response, true);

			// Verifica se a verificação foi bem-sucedida
			$success = $responseJson['success'];

			if ($success) {
				$data = [
					'name' => $request->input('name'),
					'email' => $request->input('email'),
					'phone' => $request->input('phone'),
					'local' => $request->input('locality'),
					'type' => $request->input('customer_type')
				];
				// Mail::to("geral@sospragas.pt")->send(new ContactMail($data));
				$contact_info = ContactInfo::where('id',1)->get()->toArray();
				$main = SustainabilityPage::where('id', 1)->get()->toArray();
				return view('thank-you.index', [
					'contact_info' => $contact_info,
					'main' => $main
				]);
			} else {
				return redirect()->back()->with('error', 'Ocorreu um erro ao enviar o formulário. Tente novamente.');
			}
		}



	}

	public function ScheduleInspection(Request $request, schedule_inspection $schedule_inspection)
    {
        //dd($request->all());
        $query = schedule_inspection::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'confirmed' => true
        ]);
		$contact_info = ContactInfo::where('id',1)->get()->toArray();
		$main = SustainabilityPage::where('id', 1)->get()->toArray();


		$secretKey = 'ES_8cf3c7f61ea84e6ebb4446cb84cfa8e4'; // Substitua pela sua chave secreta
		$verifyUrl = 'https://api.hcaptcha.com/siteverify';

		// Recebe o token da resposta enviada do formulário
		$token = $_POST['h-captcha-response']?? '';

		// Cria os dados para enviar na requisição POST
		$data = [
			'secret' => $secretKey,
			'response' => $token
		];

		// Faz a requisição POST para a API do hCaptcha
		$options = [
			'http' => [
				'method'  => 'POST',
				'content' => http_build_query($data),
				'header'  => "Content-Type: application/x-www-form-urlencoded\r\n"
			]
		];
		$context  = stream_context_create($options);
		$response = file_get_contents($verifyUrl, false, $context);

		// Decodifica a resposta JSON
		$responseJson = json_decode($response, true);

		// Verifica se a verificação foi bem-sucedida
		$success = $responseJson['success'];

		if ($success) {
			$data = [
				'name' => $request->input('name'),
				'email' => $request->input('email'),
				'phone' => $request->input('phone'),
				'local' => $request->input('locality'),
				'type' => $request->input('customer_type')
			];
			Mail::to("geral@sospragas.pt")->send(new ContactMail($data));
			if ($query) {
				return view('thank-you.thank-you', [
					'contact_info' => $contact_info,
					'main' => $main
				]);
			}
		} else {
			return redirect()->back()->with('error', 'Ocorreu um erro ao enviar o formulário. Tente novamente.');
		}
    }


}
