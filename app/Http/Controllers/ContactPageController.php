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
        //dd($contact_info);
        return view('contacts.index', [
            'service' => $service,
            'video' => $video,
            'testimonial' => $testimonial,
            'contact_info' => $contact_info,
			'testimonial_abouts' => $testimonial_abouts,
			'main' => $main
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


}
