<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceDetailsRequest;
use App\Http\Requests\UpdateServiceDetailsRequest;
use App\Models\ServiceDetails;
use Illuminate\Http\Request;

class ServiceDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

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
     * Display the specified resource.
     */
    public function show(ServiceDetails $serviceDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ServiceDetails $serviceDetails)
    {
        dd('ok');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //dd($id);
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
}
