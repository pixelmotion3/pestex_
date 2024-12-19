<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Service;
use App\Models\landing_3page;
use App\Models\ServicesMainScreen;
use App\Models\ServiceDetails;
use App\Models\ServiceDetailsShow;
use App\Models\Method;
use Illuminate\Http\Request;
use App\Models\About_video;
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
		$video = About_video::where('id',1)->get()->toArray();
        return view('services.index', [
            'main_screen' => $main_screen,
            'best_service' => $best_service,
            'services' => $services,
			'video' => $video
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id)
    {
        $service_detail = ServiceDetails::findOrFail($id)->toArray();
        $service_detail_show = ServiceDetailsShow::findOrFail(1)->toArray();
        $methods = Method::where('service_id',$id)->get();
        $services = ServiceDetails::all();
        //dd($service_detail);
        return view('services.show', [
            'services' => $services,
            'service_detail' => $service_detail,
            'methods' => $methods,
            'service_detail_show'=> $service_detail_show
        ]);
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
