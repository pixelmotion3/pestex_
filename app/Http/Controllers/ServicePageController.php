<?php

namespace App\Http\Controllers;

use App\Models\ServicesMainScreen;
use App\Models\ServiceDetails;
use App\Models\Method;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ServicePageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$main_screen = ServicesMainScreen::where('id', 1)->get()->toArray();
        //$services = ServiceDetails::all();
        //dd(Session::get('result'));
        return view('services-page.index', [
            'services_page' => ServicesMainScreen::where('id', 1)->get()->toArray(),
            'services' => ServiceDetails::all(),
            'methods' => Session::get('result')
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->has('form0')) {

            if ($request->hasFile('bg-img-path')) { ;
                $path = $request->file('bg-img-path')->store('assets/images');     
                $query = ServicesMainScreen::where('id',1)->update([
                    'bg-img-path' => 'storage/' . $path 
                ]);                 
            }
            if ($request->hasFile('bg-img')) {
                $path = $request->file('bg-img')->store('assets/images');     
                $query = ServicesMainScreen::where('id',1)->update([
                    'bg-img' => 'storage/' . $path 
                ]);                 
            }
            if ($request->hasFile('bg-img-1')) {
                $path = $request->file('bg-img-1')->store('assets/images');     
                $query = ServicesMainScreen::where('id',1)->update([
                    'bg-img-1' => 'storage/' . $path 
                ]);                 
            }
            if ($request->hasFile('bg-img-2')) {
                $path = $request->file('bg-img-2')->store('assets/images');     
                $query = ServicesMainScreen::where('id',1)->update([
                    'bg-img-2' => 'storage/' . $path 
                ]);                 
            }

            if ($request->hasFile('bg-img-3-a')) { 
                $path = $request->file('bg-img-3-a')->store('assets/images');     
                $query = ServicesMainScreen::where('id',1)->update([
                    'bg-img-3-a' => 'storage/' . $path 
                ]);                 
            }

            if ($request->hasFile('bg-img-3')) {
                $path = $request->file('bg-img-3')->store('assets/images');     
                $query = ServicesMainScreen::where('id',1)->update([
                    'bg-img-3' => 'storage/' . $path 
                ]);                 
            }

            if ($request->hasFile('bg-img-4')) {
                $path = $request->file('bg-img-4')->store('assets/images');     
                $query = ServicesMainScreen::where('id',1)->update([
                    'bg-img-4' => 'storage/' . $path 
                ]);                 
            }

            if ($request->hasFile('bg-img-5')) {
                $path = $request->file('bg-img-5')->store('assets/images');     
                $query = ServicesMainScreen::where('id',1)->update([
                    'bg-img-5' => 'storage/' . $path 
                ]);                 
            }
        
            $query = ServicesMainScreen::where('id',1)->update([
                'h2' => $request->input('h2'),
                'h1' => $request->input('h1'),
                'p' => $request->input('p'),
                'h3-a' => $request->input('h3-a'),
                'p-a-1' => $request->input('p-a-1'),
                'h3' => $request->input('h3'),
                'p-a' => $request->input('p-a'),
                'h6' => $request->input('h6'),
                'h3-1' => $request->input('h3-1'),
                'p-1' => $request->input('p-1'),
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
    public function destroy(string $id)
    {
        //
    }
}
