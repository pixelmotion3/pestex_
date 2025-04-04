<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\About_service;
use App\Models\About_video;
use App\Models\Testimonial;
use App\Models\ContactInfo;
use App\Models\TestimonialAbout;
use App\Models\contact_forms;
use App\Models\News_letter;
use App\Models\quote_forms;

class AboutPageController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $main_screen = About::where('id',1)->get()->toArray();
        $service = About_service::where('id',1)->get()->toArray();
        $video = About_video::where('id',1)->get()->toArray();
        $testimonial = Testimonial::where('id',1)->get()->toArray();
        $contact_info = ContactInfo::where('id',1)->get()->toArray();
		$testimonial_abouts = TestimonialAbout::all();
		$contactos_news = contact_forms::where('viewed', null)->get()->toArray();
		$contact_forms_news = count(contact_forms::where('viewed', null)->get()->toArray());
		$news_letters_news = count(News_letter::where('viewed', null)->get()->toArray());
		$quote_forms_news = count(quote_forms::where('viewed', null)->get()->toArray());
		$news_forms = $contact_forms_news + $news_letters_news + $quote_forms_news;
       // dd($testimonial);
        return view('about-page.index', [
            'main_screen' => $main_screen,
            'service' => $service,
            'video' => $video,
            'testimonial' => $testimonial,
            'contact_info' => $contact_info,
			'testimonial_abouts' => $testimonial_abouts,
			'news_forms' => $news_forms,
			'contactos_news' => $contactos_news,
			'contact_forms_news' => $contact_forms_news,
			'news_letters_news' => $news_letters_news,
			'quote_forms_news' => $quote_forms_news
        ]);
    }

    public function update(Request $request, $id){

        if ($request->has('form0')) {
            if ($request->hasFile('bg-1')) {
                $path = $request->file('bg-1')->store('assets/images');
                $query = About::where('id',1)->update([
                    'bg-1' => 'storage/' . $path
                ]);
            }

            if ($request->hasFile('shape-one-1')) {
                $path = $request->file('shape-one-1')->store('assets/images');
                $query = About::where('id',1)->update([
                    'shape-one-1' => 'storage/' . $path
                ]);
            }

            if ($request->hasFile('shape-two-1')) {
                $path = $request->file('shape-two-1')->store('assets/images');
                $query = About::where('id',1)->update([
                    'shape-two-1' => 'storage/' . $path
                ]);
            }

            if ($request->hasFile('shape-three-1')) {
                $path = $request->file('shape-three-1')->store('assets/images');
                $query = About::where('id',1)->update([
                    'shape-three-1' => 'storage/' . $path
                ]);
            }

            if ($request->hasFile('shape-four-1')) {
                $path = $request->file('shape-four-1')->store('assets/images');
                $query = About::where('id',1)->update([
                    'shape-four-1' => 'storage/' . $path
                ]);
            }

            if ($request->hasFile('thumb-1')) {
                $path = $request->file('thumb-1')->store('assets/images');
                $query = About::where('id',1)->update([
                    'thumb-1' => 'storage/' . $path
                ]);
            }
            //dd($request->all());
            $query = About::where('id',1)->update([
                'h2-span-1' => $request->input('h2-span-1'),
                'h2-span-2' => $request->input('h2-span-2'),
                'h2-span-3' => $request->input('h2-span-3'),
                'p-1' => $request->input('p-1'),
                'div-a-b' => $request->input('div-a-b'),
				'meta-title' => $request->input('meta-title'),
                'meta-desctiption' => $request->input('meta-desctiption'),
                'meta-keywords' => $request->input('meta-keywords'),
                'h2-span-1-1' => "",//$request->input('h2-span-1-1'),
                'h2-span-2-1' => "",//$request->input('h2-span-2-1'),
                'h2-span-3-1' => "",//$request->input('h2-span-3-1'),
                'p-1-1' => "",//$request->input('p-1-1'),
                'div-a-b-1' => "",//$request->input('div-a-b-1'),
            ]);

            if ($request->hasFile('bg-2')) {
                $path = $request->file('bg-2')->store('assets/images');
                $query = About::where('id',1)->update([
                    'bg-2' => 'storage/' . $path
                ]);
            }

            if ($request->hasFile('shape-one-2')) {
                $path = $request->file('shape-one-2')->store('assets/images');
                $query = About::where('id',1)->update([
                    'shape-one-2' => 'storage/' . $path
                ]);
            }

            if ($request->hasFile('shape-two-2')) {
                $path = $request->file('shape-two-2')->store('assets/images');
                $query = About::where('id',1)->update([
                    'shape-two-2' => 'storage/' . $path
                ]);
            }

            if ($request->hasFile('shape-three-2')) {
                $path = $request->file('shape-three-2')->store('assets/images');
                $query = About::where('id',1)->update([
                    'shape-three-2' => 'storage/' . $path
                ]);
            }

            if ($request->hasFile('shape-four-2')) {
                $path = $request->file('shape-four-2')->store('assets/images');
                $query = About::where('id',1)->update([
                    'shape-four-2' => 'storage/' . $path
                ]);
            }

            if ($request->hasFile('thumb-2')) {
                $path = $request->file('thumb-2')->store('assets/images');
                $query = About::where('id',1)->update([
                    'thumb-2' => 'storage/' . $path
                ]);
            }

            return redirect()->route('about-page.index');

        }

        if ($request->has('form1')) {

            if ($request->hasFile('image-layer-path')) {
                $path = $request->file('image-layer-path')->store('assets/images');
                $query = About_service::where('id',1)->update([
                    'image-layer-path' => 'storage/' . $path
                ]);
            }
            if ($request->hasFile('img-path')) {
                $path = $request->file('img-path')->store('assets/images');
                $query = About_service::where('id',1)->update([
                    'img-path' => 'storage/' . $path
                ]);
            }

            $query = About_service::where('id',1)->update([
                'h6' => $request->input('h6'),
                'h2' => $request->input('h2'),
                'p' => $request->input('p'),
                'h6-span' => $request->input('h6-span'),
                'h3' => $request->input('h3'),
                'p-1' => $request->input('p-1'),
                'h3-1' => $request->input('h3-1'),
                'h3-2' => $request->input('h3-2'),
                'h3-3' => $request->input('h3-3'),
                'li-i-1' => $request->input('li-i-1'),

                'li-i-2' => $request->input('li-i-2'),
                'li-i-3' => $request->input('li-i-3'),
                'li-i-4' => $request->input('li-i-4'),
                'a-span' => $request->input('a-span'),
            ]);

            return redirect()->route('about-page.index');
        }

        if ($request->has('form2')) {

            if ($request->hasFile('bg-img')) {
                $path = $request->file('bg-img')->store('assets/images');
                $query = About_video::where('id',1)->update([
                    'bg-img' => 'storage/' . $path
                ]);
            }

            if ($request->hasFile('shape-img')) {
                $path = $request->file('shape-img')->store('assets/images');
                $query = About_video::where('id',1)->update([
                    'shape-img' => 'storage/' . $path
                ]);
            }

            if ($request->hasFile('overlay-img')) {
                $path = $request->file('overlay-img')->store('assets/images');
                $query = About_video::where('id',1)->update([
                    'overlay-img' => 'storage/' . $path
                ]);
            }

            if ($request->hasFile('img-path')) {
                $path = $request->file('img-path')->store('assets/images');
                $query = About_video::where('id',1)->update([
                    'img-path' => 'storage/' . $path
                ]);
            }
           // dd($request->all());
            $query = About_video::where('id',1)->update([
                'h2' => $request->input('h2'),
                'p' => $request->input('p'),
                'h6-span' => $request->input('h6-span'),
                'h3' => $request->input('h3'),
                'p-1' => $request->input('p-1'),
                'div-p' => $request->input('div-p'),
            ]);

            return redirect()->route('about-page.index');
        }

        if ($request->has('form3')) {
            if ($request->hasFile('img-path')) {
                $path = $request->file('img-path')->store('assets/images');
                $query = Testimonial::where('id',1)->update([
                    'img-path' => 'storage/' . $path
                ]);
            }
            if ($request->hasFile('img-path-1')) {
                $path = $request->file('img-path-1')->store('assets/images');
                $query = Testimonial::where('id',1)->update([
                    'img-path-1' => 'storage/' . $path
                ]);
            }
            if ($request->hasFile('img-path-2')) {
                $path = $request->file('img-path-2')->store('assets/images');
                $query = Testimonial::where('id',1)->update([
                    'img-path-2' => 'storage/' . $path
                ]);
            }
            $query = Testimonial::where('id',1)->update([
				'h3-1' => $request->input('h3-1')
                // 'h6' => $request->input('h6'),
                // 'h3' => $request->input('h3'),
                // 'span' => $request->input('span'),
                // 'h3-2' => $request->input('h3-2'),
                // 'p' => $request->input('p'),
                // 'span-1' => $request->input('span-1'),
                // 'h3-3' => $request->input('h3-3'),
                // 'p-1' => $request->input('p-1'),
                // 'span-2' => $request->input('span-2'),
                // 'h3-4' => $request->input('h3-4'),
                // 'p-2' => $request->input('p-2'),
            ]);

            return redirect()->route('about-page.index');
        }

        if ($request->has('form4')) {

            if ($request->hasFile('bg-img')) {
                $path = $request->file('bg-img')->store('assets/images');
                $query = ContactInfo::where('id',1)->update([
                    'bg-img' => 'storage/' . $path
                ]);
            }
            $query = ContactInfo::where('id',1)->update([
                'h4' => $request->input('h4'),
                'p' => $request->input('p'),
                'h4-1' => $request->input('h4-1'),
                'p-1' => $request->input('p-1'),
                'h4-2' => $request->input('h4-2'),
                'p-2' => $request->input('p-2'),
                'h4-3' => $request->input('h4-3'),
                'p-3-1' => $request->input('p-3-1'),
                'h4-4' => $request->input('h4-4'),
                'p-4' => $request->input('p-4'),
                'h-6' => $request->input('h-6'),
                'h-3' => $request->input('h-3'),
                'p-3' => $request->input('p-3'),
				'a-1' => $request->input('a-1'),
				'a-2' => $request->input('a-2'),
            ]);
            return redirect()->route('about-page.index');
        }

		if ($request->has('form5')) {
			$query = TestimonialAbout::where('id',$id)->update([
                'p' => $request->input('p'),
                'name' => $request->input('name'),
                'rating' => $request->input('rating'),
            ]);
		}

        return back();
    }

	public function store(Request $request){
        $query = TestimonialAbout::create([
            'p' => $request->input('p'),
            'name' => $request->input('name'),
            'rating' => $request->input('rating'),
        ]);

        if ($query) {
            return redirect()->route('about-page.index');
        }
        return back();
    }

	public function destroy($id)
    {
        $query = TestimonialAbout::findOrFail($id);

        if ($query->delete()) {
            return redirect()->route('about-page.index');
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
            $main_screen = About::where('id',1)->get()->toArray();
			$service = About_service::where('id',1)->get()->toArray();
			$video = About_video::where('id',1)->get()->toArray();
			$testimonial = Testimonial::where('id',1)->get()->toArray();
			$contact_info = ContactInfo::where('id',1)->get()->toArray();
			$testimonial_abouts = TestimonialAbout::all();
			// dd($testimonial);
			return view('about-page.index', [
				'main_screen' => $main_screen,
				'service' => $service,
				'video' => $video,
				'testimonial' => $testimonial,
				'contact_info' => $contact_info,
				'testimonial_abouts' => $testimonial_abouts
			]);
        }
    }
}
