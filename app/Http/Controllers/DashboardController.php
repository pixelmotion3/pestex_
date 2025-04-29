<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDashboardRequest;
use App\Http\Requests\UpdateDashboardRequest;
use App\Models\contact_forms;
use App\Models\contacts;
use App\Models\Dashboard;
use App\Models\News_letter;
use App\Models\PageView;
use App\Models\quote_forms;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
		$page_views = PageView::orderBy('view_date', 'desc')->get()->toArray();


		$total_views_all = PageView::sum('view_count');
		$total_quote_forms_all = quote_forms::count();
		$total_contact_forms_all = contact_forms::count();
		$total_contacts_all = contacts::count();
		$total_news_letters_all = News_letter::count();
		// echo "<pre>";
		// print_r($page_views);
		// echo "</pre>";
		// die();
		$contactos_news = contact_forms::where('viewed', null)->orderBy('created_at', 'desc')->get()->toArray();
		$contact_forms_news = count(contact_forms::where('viewed', null)->get()->toArray());
		$news_letters_news = count(News_letter::where('viewed', null)->get()->toArray());
		$quote_forms_news = count(quote_forms::where('viewed', null)->get()->toArray());
		$total_all_forms = $total_quote_forms_all + $total_contact_forms_all + $total_contacts_all + $total_news_letters_all;
		$news_forms = $contact_forms_news + $news_letters_news + $quote_forms_news;
        return view('dashboard', [
            'page_views' => $page_views,
			'total_views_all' => $total_views_all,
			'total_all_forms' => $total_all_forms,
			'news_forms' => $news_forms,
			'contactos_news' => $contactos_news,
			'contact_forms_news' => $contact_forms_news,
			'news_letters_news' => $news_letters_news,
			'quote_forms_news' => $quote_forms_news
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDashboardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDashboardRequest $request, Dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}
