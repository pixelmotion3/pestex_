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

        return view('forms-page.index', ['contacts' => $contacts, 'news_letter' => $news_letter, 'contact_forms' => $contact_forms, "quote_forms" => $quote_forms  ]);
    }

    /**
     * Update the specified resource in storage.
     */

}
