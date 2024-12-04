<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceDetailsRequest;
use App\Http\Requests\UpdateServiceDetailsRequest;
use App\Models\ServiceDetails;
use Illuminate\Http\Request;
use App\Models\ServiceDetailsShow;

class ServiceDetailsController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceDetailsRequest $request)
    {
         if ($request->has('form0')) {
            if ($request->hasFile('img')) {
                $path = $request->file('img')->store('assets/images');  
                $query = ServiceDetails::create([
                    'img' => 'storage/' . $path,
                    'a' => $request->input('a'),
                    'p' => $request->input('p'),
                    'title' => $request->input('title'),
                    'p-1' => $request->input('p-1'),
                    'p-2' => $request->input('p-2'),
                    'p-3' => $request->input('p-3'),
                ]);

            }
            if ($query) {
                return redirect()->route('services-page.index');
            } 
        }
        return back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        if ($request->has('form0')) {

            if ($request->hasFile('img')) { ;
                $path = $request->file('img')->store('assets/images');     
                $query = ServiceDetails::where('id',$id)->update([
                    'img' => 'storage/' . $path 
                ]);                 
            }
            
        
            $query = ServiceDetails::where('id',$id)->update([
                'a' => $request->input('a'),
                'p' => $request->input('p'),
                'title' => $request->input('title'),
                'p-1' => $request->input('p-1'),
                'p-2' => $request->input('p-2'),
                'p-3' => $request->input('p-3'),
            ]);
            if($query){
                return redirect()->route('services-page.index');
            }            
        }
        if ($request->has('form1')) {

            if ($request->hasFile('bg-img')) {
                $path = $request->file('bg-img')->store('assets/images');     
                $query = ServiceDetailsShow::where('id',1)->update([
                    'bg-img' => 'storage/' . $path 
                ]);                 
            }

            if ($request->hasFile('img-1')) {
                $path = $request->file('img-1')->store('assets/images');     
                $query = ServiceDetailsShow::where('id',1)->update([
                    'img-1' => 'storage/' . $path 
                ]);                 
            }
            if ($request->hasFile('img-2')) {
                $path = $request->file('img-2')->store('assets/images');     
                $query = ServiceDetailsShow::where('id',1)->update([
                    'img-2' => 'storage/' . $path 
                ]);                 
            }
            if ($request->hasFile('img-3')) {
                $path = $request->file('img-3')->store('assets/images');     
                $query = ServiceDetailsShow::where('id',1)->update([
                    'img-3' => 'storage/' . $path 
                ]);                 
            }
            if ($request->hasFile('img-4')) {
                $path = $request->file('img-4')->store('assets/images');     
                $query = ServiceDetailsShow::where('id',1)->update([
                    'img-4' => 'storage/' . $path 
                ]);                 
            }
            if ($request->hasFile('img-5')) {
                $path = $request->file('img-5')->store('assets/images');     
                $query = ServiceDetailsShow::where('id',1)->update([
                    'img-5' => 'storage/' . $path 
                ]);                 
            }
            if ($request->hasFile('img-6')) {
                $path = $request->file('img-6')->store('assets/images');     
                $query = ServiceDetailsShow::where('id',1)->update([
                    'img-6' => 'storage/' . $path 
                ]);                 
            }
            if ($request->hasFile('img-7')) {
                $path = $request->file('img-7')->store('assets/images');     
                $query = ServiceDetailsShow::where('id',1)->update([
                    'img-7' => 'storage/' . $path 
                ]);                 
            }
            if ($request->hasFile('img-8')) {
                $path = $request->file('img-8')->store('assets/images');     
                $query = ServiceDetailsShow::where('id',1)->update([
                    'img-8' => 'storage/' . $path 
                ]);                 
            }
            if ($request->hasFile('img-9')) {
                $path = $request->file('img-9')->store('assets/images');     
                $query = ServiceDetailsShow::where('id',1)->update([
                    'img-9' => 'storage/' . $path 
                ]);                 
            }
            if ($request->hasFile('img-10')) {
                $path = $request->file('img-10')->store('assets/images');     
                $query = ServiceDetailsShow::where('id',1)->update([
                    'img-10' => 'storage/' . $path 
                ]);                 
            }
            if ($request->hasFile('img-11')) {
                $path = $request->file('img-11')->store('assets/images');     
                $query = ServiceDetailsShow::where('id',1)->update([
                    'img-11' => 'storage/' . $path 
                ]);                 
            }
            if ($request->hasFile('img-12')) {
                $path = $request->file('img-12')->store('assets/images');     
                $query = ServiceDetailsShow::where('id',1)->update([
                    'img-12' => 'storage/' . $path 
                ]);                 
            }
            if ($request->hasFile('img-13')) {
                $path = $request->file('img-13')->store('assets/images');     
                $query = ServiceDetailsShow::where('id',1)->update([
                    'img-13' => 'storage/' . $path 
                ]);                 
            }

            $query = ServiceDetailsShow::where('id',1)->update([
                'h1' => $request->input('h1'),
                'h3' => $request->input('h3'),
                'h3-1' => $request->input('h3-1'),
                'a' => $request->input('a'),
                'h3-2' => $request->input('h3-2'),
                'h6' => $request->input('h6'),
                'h3-3' => $request->input('h3-3'),
                'h4' => $request->input('h4'),
                'p' => $request->input('p'),
                'h4-1' => $request->input('h4-1'),
                'p-1' => $request->input('p-1'),
                'h4-2' => $request->input('h4-2'),
                'p-2' => $request->input('p-2'),
                'h4-3' => $request->input('h4-3'),
                'p-3' => $request->input('p-3'),
                'h6-1' => $request->input('h6-1'),
                'h3-4' => $request->input('h3-4'),
                'span' => $request->input('span'),
                'h5' => $request->input('h5'),
                'h4-4' => $request->input('h4-4'),
                'p-4' => $request->input('p-4'),
                'h4-5' => $request->input('h4-5'),
                'p-5' => $request->input('p-5'),
                'h4-6' => $request->input('h4-6'),
                'p-6' => $request->input('p-6'),
                'h4-7' => $request->input('h4-7'),
                'p-7' => $request->input('p-7'),
                'h4-8' => $request->input('h4-8'),
                'p-8' => $request->input('p-8'),
                'h6-span-2' => $request->input('h6-span-2'),
                'h3-5' => $request->input('h3-5'),
                'div-1' => $request->input('div-1'),
                'a-1' => $request->input('a-1'),
                'li' => $request->input('li'),
                'a-2' => $request->input('a-2'),
                'li-1' => $request->input('li-1'),
                'a-3' => $request->input('a-3'),
                'p-9' => $request->input('p-9'),
                'div-2' => $request->input('div-2'),
                'span-1' => $request->input('span-1'),
                'li-2' => $request->input('li-2'),
                'a-4' => $request->input('a-4'),
                'li-3' => $request->input('li-3'),
                'h3-6' => $request->input('h3-6'),
                'p-9-1' => $request->input('p-9-1'),
                'div-3' => $request->input('div-3'),
                'span-2' => $request->input('span-2'),
                'li-3-1' => $request->input('li-3-1'),
                'a-5' => $request->input('a-5'),
                'li-4' => $request->input('li-4'),
                'h3-7' => $request->input('h3-7'),
                'p-10' => $request->input('p-10'),
            ]);
            if($query){
                return redirect()->route('services-page.index');
            } 
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ServiceDetails $serviceDetails, $id)
    {
        $query = ServiceDetails::findOrFail($id);

        if ($query->delete()) {
            return redirect()->route('services-page.index');
        }
    }

    public function fetch(Request $request)
    {
        $query = ServiceDetails::where('service_id', $request->input('service_id'))->get();
        
        return response()->json($query);
    }
}
