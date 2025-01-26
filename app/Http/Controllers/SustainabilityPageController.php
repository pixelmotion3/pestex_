<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSustainabilityPageRequest;
use App\Http\Requests\UpdateSustainabilityPageRequest;
use App\Models\contact_forms;
use App\Models\News_letter;
use App\Models\quote_forms;
use App\Models\SustainabilityPage;
use Illuminate\Http\Request;

class SustainabilityPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $main = SustainabilityPage::where('id', 1)->get()->toArray();

		$contactos_news = contact_forms::where('viewed', null)->get()->toArray();
		$contact_forms_news = count(contact_forms::where('viewed', null)->get()->toArray());
		$news_letters_news = count(News_letter::where('viewed', null)->get()->toArray());
		$quote_forms_news = count(quote_forms::where('viewed', null)->get()->toArray());
		$news_forms = $contact_forms_news + $news_letters_news + $quote_forms_news;
        return view('sustainability-page.index', [
            'main' => $main,
			'contactos_news' => $contactos_news,
			'contact_forms_news' => $contact_forms_news,
			'news_letters_news' => $news_letters_news,
			'quote_forms_news' => $quote_forms_news
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        if ($request->has('form0')) {

            if ($request->hasFile('bg-img')) {
                $path = $request->file('bg-img')->store('assets/images');
                $query = SustainabilityPage::where('id',1)->update([
                    'bg-img' => 'storage/' . $path
                ]);
            }

			if ($request->hasFile('bg-img-2')) {
                $path = $request->file('bg-img-2')->store('assets/images');
                $query = SustainabilityPage::where('id',1)->update([
                    'bg-img-2' => 'storage/' . $path
                ]);
            }

            if ($request->hasFile('img')) {
                $path = $request->file('img')->store('assets/images');
                $query = SustainabilityPage::where('id',1)->update([
                    'img' => 'storage/' . $path
                ]);
            }

            if ($request->hasFile('img-1')) {
                $path = $request->file('img-1')->store('assets/images');
                $query = SustainabilityPage::where('id',1)->update([
                    'img-1' => 'storage/' . $path
                ]);
            }

            if ($request->hasFile('img-2')) {
                $path = $request->file('img-2')->store('assets/images');
                $query = SustainabilityPage::where('id',1)->update([
                    'img-2' => 'storage/' . $path
                ]);
            }

            if ($request->hasFile('img-3')) {
                $path = $request->file('img-3')->store('assets/images');
                $query = SustainabilityPage::where('id',1)->update([
                    'img-3' => 'storage/' . $path
                ]);
            }

            if ($request->hasFile('img-4-1')) {
                $path = $request->file('img-4-1')->store('assets/images');
                $query = SustainabilityPage::where('id',1)->update([
                    'img-4-1' => 'storage/' . $path
                ]);
            }

            if ($request->hasFile('img-5')) {
                $path = $request->file('img-5')->store('assets/images');
                $query = SustainabilityPage::where('id',1)->update([
                    'img-5' => 'storage/' . $path
                ]);
            }
            if ($request->hasFile('img-6')) {
                $path = $request->file('img-6')->store('assets/images');
                $query = SustainabilityPage::where('id',1)->update([
                    'img-6' => 'storage/' . $path
                ]);
            }

            if ($request->hasFile('img-7')) {
                $path = $request->file('img-7')->store('assets/images');
                $query = SustainabilityPage::where('id',1)->update([
                    'img-7' => 'storage/' . $path
                ]);
            }

            if ($request->hasFile('img-8')) {
                $path = $request->file('img-8')->store('assets/images');
                $query = SustainabilityPage::where('id',1)->update([
                    'img-8' => 'storage/' . $path
                ]);
            }
            if ($request->hasFile('img-9')) {
                $path = $request->file('img-9')->store('assets/images');
                $query = SustainabilityPage::where('id',1)->update([
                    'img-9' => 'storage/' . $path
                ]);
            }
            if ($request->hasFile('img-10')) {
                $path = $request->file('img-10')->store('assets/images');
                $query = SustainabilityPage::where('id',1)->update([
                    'img-10' => 'storage/' . $path
                ]);
            }
            $query = SustainabilityPage::where('id',1)->update([
                'h2' => $request->input('h2'),
                'h1' => $request->input('h1'),
                'p' => $request->input('p'),
                'h6' => $request->input('h6'),
                'h3' => $request->input('h3'),
                'h3-1' => $request->input('h3-1'),
                'h3-2' => $request->input('h3-2'),
                'h3-3' => $request->input('h3-3'),
                'h3-4' => $request->input('h3-4'),
                'h3-5-1' => $request->input('h3-5-1'),
                'p-1' => $request->input('p-1'),
                'span' => $request->input('span'),
                'span-1' => $request->input('span-1'),
                'span-2' => $request->input('span-2'),
                'span-3' => $request->input('span-3'),
                'h3-6' => "", //$request->input('h3-6'),
                'p-2' => "",//$request->input('p-2'),
                'span-4' => "",//$request->input('span-4'),
                'span-5' => "",//$request->input('span-5'),
                'span-6' => "",//$request->input('span-6'),
                'span-6-a' => "",//$request->input('span-6-a'),
                'h3-7' => "",//$request->input('h3-7'),
                'p-3' => "",//$request->input('p-3'),
                'span-7' => "",//$request->input('span-7'),
                'span-8' => "",//$request->input('span-8'),
                'span-9' => "",//$request->input('span-9'),
                'span-9-a' => "",//$request->input('span-9-a'),
                'h3-8' => "",//$request->input('h3-8'),
                'p-4' => "",//$request->input('p-4'),
                'span-10' => "",//$request->input('span-10'),
                'span-11' => "",//$request->input('span-11'),
                'span-12' => "",//$request->input('span-12'),
                'span-13' => "", //$request->input('span-13'),
                'h6-span' => $request->input('h6-span'),
                'h3-9' => $request->input('h3-9'),
                'h3-a' => $request->input('h3-a'),
                'p-5' => $request->input('p-5'),
                'h3-a-1' => $request->input('h3-a-1'),
                'p-6' => $request->input('p-6'),
                'h3-a-2' => $request->input('h3-a-2'),
                'p-7' => $request->input('p-7'),
				'link-1' => $request->input('link-1'),
                'link-2' => $request->input('link-2'),
                'link-3' => $request->input('link-3'),
				'meta-title' => $request->input('meta-title'),
                'meta-desctiption' => $request->input('meta-desctiption'),
                'meta-keywords' => $request->input('meta-keywords'),
            ]);
            if($query){
                return redirect()->route('sustainability-page.index');
            }
        }
        return back();
    }
}
