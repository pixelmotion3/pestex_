<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSustainabilityRequest;
use App\Http\Requests\UpdateSustainabilityRequest;
use App\Models\Sustainability;
use App\Models\SustainabilityPage;

class SustainabilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $main = SustainabilityPage::where('id', 1)->get()->toArray();
        //dd($main);
        return view('sustainability.index', [
            'main' => $main
        ]);
    }

}
