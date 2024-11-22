<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class BackAboutController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /*
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
        */
        $main_screen = About::where('id',1)->get()->toArray();   
        //dd($main_screen);
        return view('about-page.index');
    }
}
