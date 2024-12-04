<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSustainabilityDetailsRequest;
use App\Http\Requests\UpdateSustainabilityDetailsRequest;
use App\Models\SustainabilityDetails;

class SustainabilityDetailsController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSustainabilityDetailsRequest $request)
    {

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

}
