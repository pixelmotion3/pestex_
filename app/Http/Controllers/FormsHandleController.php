<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use App\Models\contact_forms;
use App\Models\contacts;
use App\Models\News_letter;
use App\Models\quote_forms;
use App\Models\Review;

class FormsHandleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreReviewRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReviewRequest $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($contact_form_id, $type_form)
    {
		// $contacts = contacts::orderBy('id', 'desc')->get();
		// $quote_forms =  quote_forms::orderBy('id', 'desc')->get();
		// $contact_forms = contact_forms::orderBy('id', 'desc')->get();
		// $news_letter = News_letter::orderBy('id', 'desc')->get();

		if($type_form == "contact_forms"){
			$query = contact_forms::findOrFail($contact_form_id);

			$updated = $query->update([
				'viewed' => 1
			]);
		}
		if($type_form == "news_letter"){
			$query = News_letter::findOrFail($contact_form_id);

			$updated = $query->update([
				'viewed' => 1
			]);
		}

		if($type_form == "quote_form"){
			$query = quote_forms::findOrFail($contact_form_id);

			$updated = $query->update([
				'viewed' => 1
			]);
		}

		return redirect()->back();
    }
}
