<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Service;
use App\Models\landing_3page;
use App\Models\ServicesMainScreen;
use App\Models\ServiceDetails;
use Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $best_service = landing_3page::where('id',1)->get()->toArray();
        $main_screen = ServicesMainScreen::where('id', 1)->get()->toArray();
        $services = ServiceDetails::all();
        //dd($services);
     
        return view('services.index', [
            'main_screen' => $main_screen,
            'best_service' => $best_service,
            'services' => $services
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
    public function store(StoreServiceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id)
    {
        $service = ServiceDetails::findOrFail($id);
        //dd($service);
        return view('services.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}
