<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSustainabilityRequest;
use App\Http\Requests\UpdateSustainabilityRequest;
use App\Models\Sustainability;

class SustainabilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('sustainability.index');
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
    public function store(StoreSustainabilityRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Sustainability $sustainability)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sustainability $sustainability)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSustainabilityRequest $request, Sustainability $sustainability)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sustainability $sustainability)
    {
        //
    }
}
