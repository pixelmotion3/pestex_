<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHardwareRequest;
use App\Http\Requests\UpdateHardwareRequest;
use App\Models\HardwareMainScreen;

class HardwareController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $main = HardwareMainScreen::where('id',1)->get()->toArray();
        
        return view('hardware.index', [
            'main' => $main
        ]);
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
    public function store(StoreHardwareRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Hardware $hardware)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hardware $hardware)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHardwareRequest $request, Hardware $hardware)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hardware $hardware)
    {
        //
    }
}
