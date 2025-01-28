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
use App\Models\News_letter;
use Illuminate\Http\Request;
use App\Mail\ContactMail;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     */


	public function NewsletterForm(Request $request){

        $query = News_letter::create([
            'email' => $request->input('email')
        ]);

		return redirect()->back()->with('success', 'Obrigado pelo seu contacto. Iremos entrar em contacto brevemente!')->withInput();
    }

}
