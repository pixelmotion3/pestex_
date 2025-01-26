<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHardwareMainScreenRequest;
use App\Http\Requests\UpdateHardwareMainScreenRequest;
use App\Models\HardwareMainScreen;
use App\Models\News_letter;
use App\Models\contacts;
use App\Models\contact_forms;
use App\Models\quote_forms;
use Illuminate\Http\Request;

class FormsPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = contacts::orderBy('id', 'desc')->get();
		$quote_forms =  quote_forms::orderBy('id', 'desc')->get();
		$contact_forms = contact_forms::orderBy('id', 'desc')->get();
		$news_letter = News_letter::orderBy('id', 'desc')->get();
		$contactos_news = contact_forms::where('viewed', null)->get()->toArray();
		$contact_forms_news = count(contact_forms::where('viewed', null)->get()->toArray());
		$news_letters_news = count(News_letter::where('viewed', null)->get()->toArray());
		$quote_forms_news = count(quote_forms::where('viewed', null)->get()->toArray());
		$news_forms = $contact_forms_news + $news_letters_news + $quote_forms_news;

        return view('forms-page.index', [
			'contacts' => $contacts,
			'news_letter' => $news_letter,
			'contact_forms' => $contact_forms,
			"quote_forms" => $quote_forms,
			'contactos_news' => $contactos_news,
			'news_forms' => $news_forms,
			'contact_forms_news' => $contact_forms_news,
			'news_letters_news' => $news_letters_news,
			'quote_forms_news' => $quote_forms_news
		]);
    }


	public function newsletter()
    {
        $contacts = contacts::orderBy('id', 'desc')->get();
		$quote_forms =  quote_forms::orderBy('id', 'desc')->get();
		$contact_forms = contact_forms::orderBy('id', 'desc')->get();
		$news_letter = News_letter::orderBy('id', 'desc')->get();
		$contactos_news = contact_forms::where('viewed', null)->get()->toArray();
		$contact_forms_news = count(contact_forms::where('viewed', null)->get()->toArray());
		$news_letters_news = count(News_letter::where('viewed', null)->get()->toArray());
		$quote_forms_news = count(quote_forms::where('viewed', null)->get()->toArray());
		$news_forms = $contact_forms_news + $news_letters_news + $quote_forms_news;

        return view('forms-page.newsletter', [
			'contacts' => $contacts,
			'news_letter' => $news_letter,
			'contact_forms' => $contact_forms,
			"quote_forms" => $quote_forms,
			'contactos_news' => $contactos_news,
			'news_forms' => $news_forms,
			'contact_forms_news' => $contact_forms_news,
			'news_letters_news' => $news_letters_news,
			'quote_forms_news' => $quote_forms_news
		]);
    }


	public function quote()
    {
        $contacts = contacts::orderBy('id', 'desc')->get();
		$quote_forms =  quote_forms::orderBy('id', 'desc')->get();
		$contact_forms = contact_forms::orderBy('id', 'desc')->get();
		$news_letter = News_letter::orderBy('id', 'desc')->get();
		$contactos_news = contact_forms::where('viewed', null)->get()->toArray();
		$contact_forms_news = count(contact_forms::where('viewed', null)->get()->toArray());
		$news_letters_news = count(News_letter::where('viewed', null)->get()->toArray());
		$quote_forms_news = count(quote_forms::where('viewed', null)->get()->toArray());
		$news_forms = $contact_forms_news + $news_letters_news + $quote_forms_news;

        return view('forms-page.quote', [
			'contacts' => $contacts,
			'news_letter' => $news_letter,
			'contact_forms' => $contact_forms,
			"quote_forms" => $quote_forms,
			'contactos_news' => $contactos_news,
			'news_forms' => $news_forms,
			'contact_forms_news' => $contact_forms_news,
			'news_letters_news' => $news_letters_news,
			'quote_forms_news' => $quote_forms_news
		]);
    }

	public function contact()
    {
        $contacts = contacts::orderBy('id', 'desc')->get();
		$quote_forms =  quote_forms::orderBy('id', 'desc')->get();
		$contact_forms = contact_forms::orderBy('id', 'desc')->get();
		$news_letter = News_letter::orderBy('id', 'desc')->get();
		$contactos_news = contact_forms::where('viewed', null)->get()->toArray();
		$contact_forms_news = count(contact_forms::where('viewed', null)->get()->toArray());
		$news_letters_news = count(News_letter::where('viewed', null)->get()->toArray());
		$quote_forms_news = count(quote_forms::where('viewed', null)->get()->toArray());
		$news_forms = $contact_forms_news + $news_letters_news + $quote_forms_news;

        return view('forms-page.contact', [
			'contacts' => $contacts,
			'news_letter' => $news_letter,
			'contact_forms' => $contact_forms,
			"quote_forms" => $quote_forms,
			'contactos_news' => $contactos_news,
			'news_forms' => $news_forms,
			'contact_forms_news' => $contact_forms_news,
			'news_letters_news' => $news_letters_news,
			'quote_forms_news' => $quote_forms_news  ]);
    }

    /**
     * Update the specified resource in storage.
     */

}
