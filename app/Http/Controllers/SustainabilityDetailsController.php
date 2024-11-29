<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSustainabilityDetailsRequest;
use App\Http\Requests\UpdateSustainabilityDetailsRequest;
use App\Models\SustainabilityDetails;

class SustainabilityDetailsController extends Controller
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
    public function store(StoreSustainabilityDetailsRequest $request)
    {
        //dd($request->all());

        if ($request->has('form0')) {

            $query = SustainabilityDetails::create([
                'a' => $request->input('a'),
                'p' => $request->input('p'),
                'title' => $request->input('title'),
                'p-1' => $request->input('p-1'),
                'p-2' => $request->input('p-2'),
                'p-3' => $request->input('p-3'),
            ]);

            if ($query) {
                return redirect()->route('services-page.index');
            } 
        }
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(SustainabilityDetails $sustainabilityDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SustainabilityDetails $sustainabilityDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSustainabilityDetailsRequest $request, SustainabilityDetails $sustainabilityDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SustainabilityDetails $sustainabilityDetails)
    {
        //
    }
}
