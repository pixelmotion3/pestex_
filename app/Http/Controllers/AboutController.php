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
use App\Models\contact_forms;
use Illuminate\Http\Request;

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
		$testimonial_abouts = TestimonialAbout::all();
        //dd($contact_info);
        return view('about.index', [
            'main' => $about_main,
            'service' => $service,
            'video' => $video,
            'testimonial' => $testimonial,
            'contact_info' => $contact_info,
			'testimonial_abouts' => $testimonial_abouts
        ]);
    }

	public function ContactFormAbout(Request $request){

        $query = contact_forms::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'confirmed' => true
        ]);
		if ($query) {
			return redirect()->route('About.index')->with('success', 'Formulário enviado com sucesso!');
		}
		return redirect()->back()->with('error', 'Ocorreu um erro ao enviar o formulário. Tente novamente.');
        // if ($query) {
		// 	$about_main = About::where('id',1)->get()->toArray();
		// 	$service = About_service::where('id',1)->get()->toArray();
		// 	$video = About_video::where('id',1)->get()->toArray();
		// 	$testimonial = Testimonial::where('id',1)->get()->toArray();
		// 	$contact_info = ContactInfo::where('id',1)->get()->toArray();
		// 	$testimonial_abouts = TestimonialAbout::all();
		// 	//dd($contact_info);
		// 	return redirect()->route('About.index');
        // }
    }

}
