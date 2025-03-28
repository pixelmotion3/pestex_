<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHardwareMainScreenRequest;
use App\Http\Requests\UpdateHardwareMainScreenRequest;
use App\Models\contact_forms;
use App\Models\HardwareMainScreen;
use App\Models\News_letter;
use App\Models\quote_forms;
use Illuminate\Http\Request;

class HardwarePageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $main = HardwareMainScreen::where('id',1)->get()->toArray();

		$contactos_news = contact_forms::where('viewed', null)->get()->toArray();
		$contact_forms_news = count(contact_forms::where('viewed', null)->get()->toArray());
		$news_letters_news = count(News_letter::where('viewed', null)->get()->toArray());
		$quote_forms_news = count(quote_forms::where('viewed', null)->get()->toArray());
		$news_forms = $contact_forms_news + $news_letters_news + $quote_forms_news;
        return view('hardware-page.index', ['main' => $main,
		'contactos_news' => $contactos_news,
		'contact_forms_news' => $contact_forms_news,
		'news_letters_news' => $news_letters_news,
		'quote_forms_news' => $quote_forms_news ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HardwareMainScreen $hardwareMainScreen)
    {
        if ($request->has('form0')) {

            if ($request->hasFile('bg-img')) {
                $path = $request->file('bg-img')->store('assets/images');
                $query = HardwareMainScreen::where('id',1)->update([
                    'bg-img' => 'storage/' . $path
                ]);
            }

            if ($request->hasFile('img')) {
                $path = $request->file('img')->store('assets/images');
                $query = HardwareMainScreen::where('id',1)->update([
                    'img' => 'storage/' . $path
                ]);
            }

            if ($request->hasFile('img-1')) {
                $path = $request->file('img-1')->store('assets/images');
                $query = HardwareMainScreen::where('id',1)->update([
                    'img-1' => 'storage/' . $path
                ]);
            }

            if ($request->hasFile('img-2')) {
                $path = $request->file('img-2')->store('assets/images');
                $query = HardwareMainScreen::where('id',1)->update([
                    'img-2' => 'storage/' . $path
                ]);
            }

            if ($request->hasFile('img-3')) {
                $path = $request->file('img-3')->store('assets/images');
                $query = HardwareMainScreen::where('id',1)->update([
                    'img-3' => 'storage/' . $path
                ]);
            }

            if ($request->hasFile('img-4')) {
                $path = $request->file('img-4')->store('assets/images');
                $query = HardwareMainScreen::where('id',1)->update([
                    'img-4' => 'storage/' . $path
                ]);
            }

            if ($request->hasFile('img-5')) {
                $path = $request->file('img-5')->store('assets/images');
                $query = HardwareMainScreen::where('id',1)->update([
                    'img-5' => 'storage/' . $path
                ]);
            }

            if ($request->hasFile('img-6')) {
                $path = $request->file('img-6')->store('assets/images');
                $query = HardwareMainScreen::where('id',1)->update([
                    'img-6' => 'storage/' . $path
                ]);
            }
            //dd($request->all());
            $query = HardwareMainScreen::where('id',1)->update([
                'h1' => $request->input('h1'),
                'h6' => $request->input('h6'),
                'h3' => $request->input('h3'),
                'h3-0' => $request->input('h3-0'),
                'a' => $request->input('a'),
                'p' => $request->input('p'),
                'h3-1' => $request->input('h3-1'),
                'a-1' => $request->input('a-1'),
                'p-1' => $request->input('p-1'),
                'h3-2' => $request->input('h3-2'),
                'a-3' => $request->input('a-3'),
                'p-2' => $request->input('p-2'),
                'h3-3' => $request->input('h3-3'),
                'a-4' => $request->input('a-4'),
                'p-3' => $request->input('p-3'),
                'h3-4' => $request->input('h3-4'),
                'a-5' => $request->input('a-5'),
                'p-4' => $request->input('p-4'),
                'h3-5' => $request->input('h3-5'),
                'h3-6' => $request->input('h3-6'),
                'h3-a' => $request->input('h3-a'),
                'p-5-0' => $request->input('p-5-0'),
                'div' => $request->input('div'),
                'h6-2' => $request->input('h6-2'),
                'p-5' => $request->input('p-5'),
                'li-h3' => $request->input('li-h3'),
                'li-p' => $request->input('li-p'),
                'li-h3-1' => $request->input('li-h3-1'),
                'li-p-1' => $request->input('li-p-1'),
				'meta-title' => $request->input('meta-title'),
                'meta-desctiption' => $request->input('meta-desctiption'),
                'meta-keywords' => $request->input('meta-keywords'),
            ]);

            if($query){
                return redirect()->route('hardware-page.index');
            }
        }
        return back();
    }

}
