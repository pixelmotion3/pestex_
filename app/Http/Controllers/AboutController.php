<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAboutRequest;
use App\Http\Requests\UpdateAboutRequest;
use App\Models\About;
use App\Models\About_service;
use App\Models\About_video;
use App\Models\Testimonial;
use App\Models\ContactInfo;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about_main = About::where('id',1)->get()->toArray();
        $service = About_service::where('id',1)->get()->toArray();
        $video = About_video::where('id',1)->get()->toArray();
        $testimonial = Testimonial::where('id',1)->get()->toArray();
        $contact_info = ContactInfo::where('id',1)->get()->toArray();
        //dd($contact_info);
        return view('about.index', [
            'main' => $about_main,
            'service' => $service,
            'video' => $video,
            'testimonial' => $testimonial,
            'contact_info' => $contact_info
        ]);
    }

}
