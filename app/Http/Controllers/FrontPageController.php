<?php

namespace App\Http\Controllers;

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
            'reviews' =>  $reviews
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function Home()
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
			'reviews' =>  $reviews
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
			'terms_service' => $landing_12page
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
        //dd($request->all());
        $query = quote_forms::create([
            'customer_type' => $request->input('customer_type'),
            'products' => $request->input('products'),
            'locality' => $request->input('locality'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'confirmed' => true
        ]);
        if ($query) {
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
			$reviews = Review::all();

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
				'reviews' =>  $reviews
			]);
        }
    }


    public function ContactForm(Request $request){

        $query = contact_forms::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'confirmed' => true
        ]);
        if ($query) {
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
			$reviews = Review::all();

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
				'reviews' =>  $reviews
			]);
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


}
