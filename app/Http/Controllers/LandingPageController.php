<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLandingPageRequest;
use App\Http\Requests\UpdateLandingPageRequest;
use App\Models\LandingPage;
use App\Models\landing_2page;
use App\Models\landing_3page;
use App\Models\landing_4page;
use App\Models\landing_5page;
use App\Models\landing_6page;
use App\Models\landing_7page;
use App\Models\landing_8page;
use App\Models\landing_9page;
use App\Models\landing_10page;
use App\Models\landing_11page;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $landing_page = LandingPage::where('id',1)->get()->toArray();
        $landing_2page = landing_2page::where('id',1)->get()->toArray();
        $landing_3page = landing_3page::where('id',1)->get()->toArray();
        $landing_4page = landing_4page::where('id',1)->get()->toArray();
        $landing_5page = landing_5page::where('id',1)->get()->toArray();
        $landing_6page = landing_6page::where('id',1)->get()->toArray();
        $landing_7page = landing_7page::where('id',1)->get()->toArray();
        $landing_8page = landing_8page::where('id',1)->get()->toArray();
        $landing_9page = landing_9page::where('id',1)->get()->toArray();
        $landing_10page = landing_10page::where('id',1)->get()->toArray();
        $landing_11page = landing_11page::where('id',1)->get()->toArray();

       //dd($landing_3page);

        return view('landing-page.index', [
            'main_screen' => $landing_page,
            'company_status' => $landing_2page,
            'best_service' => $landing_3page,
            'our_service_1' => $landing_4page,
            'our_service_2' => $landing_5page,
            'about_now' => $landing_6page,
            'choose_us' => $landing_7page,
            'testimonial_say' => $landing_8page,
            'collapse' => $landing_9page,
            'call_now' => $landing_10page,
            'video_contact' => $landing_11page,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLandingPageRequest $request, LandingPage $landingPage)
    {
        if ($request->has('form0')) {
            $query = LandingPage::where('id',1)->update([
                'nav-paragraph' => $request->input('nav-paragraph')
            ]);
        }

        if ($request->has('form1')) {            
            $query = LandingPage::where('id',1)->update([
                'quote-form-tab-title-1' => $request->input('quote-form-tab-title-1'),
                'quote-form-tab-title-2' => $request->input('quote-form-tab-title-2'),
                'quote-form-tab-2-h2' => $request->input('quote-form-tab-2-h2'),
                'quote-form-tab-2-p' => $request->input('quote-form-tab-2-p'),
            ]);
        }

        if ($request->has('form2')) {
            $query = LandingPage::where('id',1)->update([
                'carrousel-h5' => $request->input('carrousel-h5'),
                'carrousel-h2' => $request->input('carrousel-h2'),
                'carrousel-p' => $request->input('carrousel-p'),
                'carrousel-a-1' => $request->input('carrousel-a-1'),
                'carrousel-h5-1' => $request->input('carrousel-h5-1'),
                'carrousel-h2-1' => $request->input('carrousel-h2-1'),
                'carrousel-p-1' => $request->input('carrousel-p-1'),
                'carrousel-a-1-1' => $request->input('carrousel-a-1-1'),
                'carrousel-h5-2' => $request->input('carrousel-h5-2'),
                'carrousel-h2-2' => $request->input('carrousel-h2-2'),
                'carrousel-p-2' => $request->input('carrousel-p-2'),
                'carrousel-a-1-2' => $request->input('carrousel-a-1-2'),
            ]);
            if ($request->hasFile('carrousel-bg-img-path')) {
                $path = $request->file('carrousel-bg-img-path')->store('assets/images');     
                $query = LandingPage::where('id',1)->update([
                    'carrousel-bg-img-path' => 'storage/' . $path 
                ]);                 
            }
            if ($request->hasFile('carrousel-bg-img-path-1')) {
                $path = $request->file('carrousel-bg-img-path-1')->store('assets/images');     
                $query = LandingPage::where('id',1)->update([
                    'carrousel-bg-img-path-1' => 'storage/' . $path 
                ]);                 
            }
            if ($request->hasFile('carrousel-bg-img-path-2')) {
                $path = $request->file('carrousel-bg-img-path-2')->store('assets/images');     
                $query = LandingPage::where('id',1)->update([
                    'carrousel-bg-img-path-2' => 'storage/' . $path 
                ]);                 
            }
        }

        if ($request->has('form3')) {
            $query = landing_2page::where('id',1)->update([
                'company-status-h6' => $request->input('company-status-h6'),
                'company-status-h3' => $request->input('company-status-h3'),
                'company-status-1h4' => $request->input('company-status-1h4'),
                'company-status-1p' => $request->input('company-status-1p'),
                'company-status-2h4' => $request->input('company-status-2h4'),
                'company-status-2p' => $request->input('company-status-2p'),
                'company-status-3h4' => $request->input('company-status-3h4'),
                'company-status-3p' => $request->input('company-status-3p'),
            ]);
        }

        if ($request->has('form4')) {
            $query = landing_3page::where('id',1)->update([
                'best-service-h6-1' => $request->input('best-service-h6-1'),
                'best-service-h3-1' => $request->input('best-service-h3-1'),                
                'best-service-p-1' => $request->input('best-service-p-1'),
                'best-service-a-2' => $request->input('best-service-a-2'),
                'best-service-p-2' => $request->input('best-service-p-2'),
                'best-service-a-3' => $request->input('best-service-a-3'),
                'best-service-p-3' => $request->input('best-service-p-3'),
            ]);         
            if ($request->hasFile('best-service-img-path-1')) {
                $filename = $request->file('best-service-img-path-1');
                $path = $request->file('best-service-img-path-1')->store('assets/images');     
                $query = landing_3page::where('id',1)->update([
                    'best-service-img-path-1' => 'storage/' . $path 
                ]);                 
            } 
            if ($request->hasFile('best-service-img-path-2')) {
                $filename = $request->file('best-service-img-path-2');
                $path = $request->file('best-service-img-path-2')->store('assets/images');     
                $query = landing_3page::where('id',1)->update([
                    'best-service-img-path-2' => 'storage/' . $path 
                ]);                 
            } 
            if ($request->hasFile('best-service-img-path-3')) {
                $filename = $request->file('best-service-img-path-3');
                $path = $request->file('best-service-img-path-3')->store('assets/images');     
                $query = landing_3page::where('id',1)->update([
                    'best-service-img-path-3' => 'storage/' . $path 
                ]);                 
            } 
        }

        if ($request->has('form5')) {
            $query = landing_4page::where('id',1)->update([
                'our-services-h6-1' => $request->input('our-services-h6-1'),
                'our-services-h2-1' => $request->input('our-services-h2-1'),
                'our-services-h2-2' => $request->input('our-services-h2-2'),
                'our-services-tab-1' => $request->input('our-services-tab-1'),
                'our-services-tab-1-h2' => $request->input('our-services-tab-1-h2'),
                'our-services-tab-1-p' => $request->input('our-services-tab-1-p'),
                'our-services-tab-1-li-1' => $request->input('our-services-tab-1-li-1'),
                'our-services-tab-1-li-2' => $request->input('our-services-tab-1-li-2'),
                'our-services-tab-1-li-3' => $request->input('our-services-tab-1-li-3'),
                'our-services-tab-1-p-2' => $request->input('our-services-tab-1-p-2'),
                'our-services-tab-1-a-2' => $request->input('our-services-tab-1-a-2'),
            ]);
            if ($request->hasFile('our-services-bg-img-path-1')) {
                $path = $request->file('our-services-bg-img-path-1')->store('assets/images');     
                $query = landing_4page::where('id',1)->update([
                    'our-services-bg-img-path-1' => 'storage/' . $path 
                ]);                 
            } 
            if ($request->hasFile('img-1')) {
                $path = $request->file('img-1')->store('assets/images');     
                $query = landing_4page::where('id',1)->update([
                    'img-1' => 'storage/' . $path 
                ]);                 
            } 

            if ($request->hasFile('img-2')) {
                $path = $request->file('img-2')->store('assets/images');     
                $query = landing_5page::where('id',1)->update([
                    'img-2' => 'storage/' . $path 
                ]);                 
            } 
            $query = landing_5page::where('id',1)->update([
                'our-services-tab-2' => $request->input('our-services-tab-2'),
                'our-services-tab-2-h2' => $request->input('our-services-tab-2-h2'),
                'our-services-tab-2-p' => $request->input('our-services-tab-2-p'),
                'our-services-tab-2-li-1' => $request->input('our-services-tab-2-li-1'),
                'our-services-tab-2-li-2' => $request->input('our-services-tab-2-li-2'),
                'our-services-tab-2-li-3' => $request->input('our-services-tab-2-li-3'),
                'our-services-tab-2-p-2' => $request->input('our-services-tab-2-p-2'),
                'our-services-tab-2-a' => $request->input('our-services-tab-2-a'),
            ]);
        }

        if ($request->has('form6')) {
            //dd($request->all());
            $query = landing_6page::where('id',1)->update([
                'about-now-h6' => $request->input('about-now-h6'),
                'about-now-h3' => $request->input('about-now-h3'),
                'about-now-p' => $request->input('about-now-p'),
                'about-now-li-1' => $request->input('about-now-li-1'),
                'about-now-li-2' => $request->input('about-now-li-2'),
                'about-now-li-3' => $request->input('about-now-li-3'),
                'about-now-li-4' => $request->input('about-now-li-4'),
                'about-now-li-5' => $request->input('about-now-li-5'),
                'about-now-li-6' => $request->input('about-now-li-6'),
            ]);
            if ($request->hasFile('about-now-1-bg-img-path')) {
                $path = $request->file('about-now-1-bg-img-path')->store('assets/images');     
                $query = landing_6page::where('id',1)->update([
                    'about-now-1-bg-img-path' => 'storage/' . $path 
                ]);                 
            } 
            if ($request->hasFile('about-now-2-img-path')) {
                $path = $request->file('about-now-2-img-path')->store('assets/images');     
                $query = landing_6page::where('id',1)->update([
                    'about-now-2-img-path' => 'storage/' . $path 
                ]);                 
            } 

            if ($request->hasFile('about-now-img-path')) {
                $path = $request->file('about-now-img-path')->store('assets/images');     
                $query = landing_6page::where('id',1)->update([
                    'about-now-img-path' => 'storage/' . $path 
                ]);                 
            } 
        }
        if ($request->has('form7')) {
            $query = landing_7page::where('id',1)->update([
                'choose-us-p-1' => $request->input('choose-us-p-1'),
                'choose-us-h3' => $request->input('choose-us-h3'),
                'choose-us-p-2' => $request->input('choose-us-p-2'),
                'choose-us-h4-1' => $request->input('choose-us-h4-1'),
                'choose-us-h4-2' => $request->input('choose-us-h4-2'),
                'choose-us-h4-3' => $request->input('choose-us-h4-3')
            ]);
            if ($request->hasFile('choose-us-img')) {
                $path = $request->file('choose-us-img')->store('assets/images');     
                $query = landing_7page::where('id',1)->update([
                    'choose-us-img' => 'storage/' . $path 
                ]);                 
            } 
            if ($request->hasFile('choose-us-img-1')) {
                $path = $request->file('choose-us-img-1')->store('assets/images');     
                $query = landing_7page::where('id',1)->update([
                    'choose-us-img-1' => 'storage/' . $path 
                ]);                 
            } 
            if ($request->hasFile('choose-us-img-2')) {
                $filename = $request->file('choose-us-img-2');
                $path = $request->file('choose-us-img-2')->store('assets/images');     
                $query = landing_7page::where('id',1)->update([
                    'choose-us-img-2' => 'storage/' . $path 
                ]);                 
            } 
            if ($request->hasFile('choose-us-img-3')) {
                $filename = $request->file('choose-us-img-3');
                $path = $request->file('choose-us-img-3')->store('assets/images');     
                $query = landing_7page::where('id',1)->update([
                    'choose-us-img-3' => 'storage/' . $path 
                ]);                 
            } 
        }

        if ($request->has('form8')) {
            $query = landing_8page::where('id',1)->update([
                'testimonial-say-p-strong' => $request->input('testimonial-say-p-strong'),
                'testimonial-say-h2' => $request->input('testimonial-say-h2'),
                'testimonial-say-p-i-1' => $request->input('testimonial-say-p-i-1'),
                'testimonial-say-h3-1' => $request->input('testimonial-say-h3-1'),
                'testimonial-say-h5-1' => $request->input('testimonial-say-h5-1'),
                'testimonial-say-p-i-2' => $request->input('testimonial-say-p-i-2'),

                'testimonial-say-h3-2' => $request->input('testimonial-say-h3-2'),
                'testimonial-say-h5-2' => $request->input('testimonial-say-h5-2'),
                'testimonial-say-p-i-3' => $request->input('testimonial-say-p-i-3'),
                'testimonial-say-h3-3' => $request->input('testimonial-say-h3-3'),
                'testimonial-say-h5-3' => $request->input('testimonial-say-h5-3'),
            ]);
        }

        if ($request->has('form9')) {
            $query = landing_9page::where('id',1)->update([
                'collapse-h3-1' => $request->input('collapse-h3-1'),
                'collapse-p-1' => $request->input('collapse-p-1'),
                'collapse-h3-2' => $request->input('collapse-h3-2'),
                'collapse-p-2' => $request->input('collapse-p-2'),
                'collapse-h3-3' => $request->input('collapse-h3-3'),
                'collapse-p-3' => $request->input('collapse-p-3'),
                'collapse-h4-1' => $request->input('collapse-h4-1'),
                'collapse-div-p-1' => $request->input('collapse-div-p-1'),
                'collapse-h4-2' => $request->input('collapse-h4-2'),
                'collapse-div-p-2' => $request->input('collapse-div-p-2'),
                'collapse-h4-3' => $request->input('collapse-h4-3'),
                'collapse-div-p-3' => $request->input('collapse-div-p-3'),
                'collapse-h4-4' => $request->input('collapse-h4-4'),
                'collapse-div-p-4' => $request->input('collapse-div-p-4'),
                'collapse-h4-5' => $request->input('collapse-h4-5'),
                'collapse-div-p-5' => $request->input('collapse-div-p-5')
            ]);
            if ($request->hasFile('collapse-bg-img')) {
                $path = $request->file('collapse-bg-img')->store('assets/images');     
                $query = landing_9page::where('id',1)->update([
                    'collapse-bg-img' => 'storage/' . $path 
                ]);                 
            } 
        }

        if ($request->has('form10')) {
            $query = landing_10page::where('id',1)->update([
                'call-now-h4-1' => $request->input('call-now-h4-1'),
                'call-now-p-a-1' => $request->input('call-now-p-a-1'),
                'call-now-p-a-2' => $request->input('call-now-p-a-2'),
                'call-now-h4-2' => $request->input('call-now-h4-2'),
                'call-now-p-a-3' => $request->input('call-now-p-a-3'),
                'call-now-p' => $request->input('call-now-p'),
                'call-now-a-2' => $request->input('call-now-a-2'),
                'call-now-a-3' => $request->input('call-now-a-3'),
            ]);
            if ($request->hasFile('call-now-bg-image-1-path')) {
                $path = $request->file('call-now-bg-image-1-path')->store('assets/images');   
                $query = landing_10page::where('id',1)->update([
                    'call-now-bg-image-1-path' => 'storage/' . $path 
                ]);                 
            } 
            if ($request->hasFile('call-now-bg-image-2-path')) {
                $path = $request->file('call-now-bg-image-2-path')->store('assets/images');     
                $query = landing_10page::where('id',1)->update([
                    'call-now-bg-image-2-path' => 'storage/' . $path 
                ]);                 
            } 
            if ($request->hasFile('call-now-bg-image-3-path')) {
                $path = $request->file('call-now-bg-image-3-path')->store('assets/images');     
                $query = landing_10page::where('id',1)->update([
                    'call-now-bg-image-3-path' => 'storage/' . $path 
                ]);                 
            } 
            if ($request->hasFile('call-now-bg-image-4-path')) {
                $path = $request->file('call-now-bg-image-4-path')->store('assets/images');     
                $query = landing_10page::where('id',1)->update([
                    'call-now-bg-image-4-path' => 'storage/' . $path 
                ]);                 
            } 
        }

        if ($request->has('form11')) {
            $query = landing_11page::where('id',1)->update([
                'watch-video-p-strong-1' => $request->input('watch-video-p-strong-1'),
                'watch-video-h2' => $request->input('watch-video-h2'),
                'watch-video-p-2' => $request->input('watch-video-p-2'),
                'watch-video-p-3' => $request->input('watch-video-p-3'),
            ]);
            if ($request->hasFile('watch-video-bg-img')) {
                $path = $request->file('watch-video-bg-img')->store('assets/images');     
                $query = landing_11page::where('id',1)->update([
                    'watch-video-bg-img' => 'storage/' . $path 
                ]);                 
            } 
        }

        if ($request->has('form12')) {
            $query = landing_11page::where('id',1)->update([
                'contact-us-h2-part-1' => $request->input('contact-us-h2-part-1'),
                'contact-us-h2-part-2' => $request->input('contact-us-h2-part-2'),
            ]);
            if ($request->hasFile('contact-us-bg-img')) {
                $path = $request->file('contact-us-bg-img')->store('assets/images');     
                $query = landing_11page::where('id',1)->update([
                    'contact-us-bg-img' => 'storage/' . $path 
                ]);                 
            } 
        }

        return redirect()->route('landing-page.index');
    }
}
