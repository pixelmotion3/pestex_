<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMethodRequest;
use App\Http\Requests\UpdateMethodRequest;
use App\Models\Method;
use Illuminate\Http\Request;
use App\Models\ServicesMainScreen;
use App\Models\ServiceDetails;

class MethodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('methods.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        dd('craete');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());

        if ($request->hasFile('img')) {
            $path = $request->file('img')->store('assets/images');     
            $query = Method::create([
                'img' => 'storage/' . $path ,
                'title-1' => $request->input('title-1'),
                'p' => $request->input('p'),
                'title-2' => $request->input('title-2'),
                'p-1' => $request->input('p-1'),
                'service_id' => $request->input('service_id'),
            ]);  
            $main_screen = ServicesMainScreen::where('id', 1)->get()->toArray();
            $services = ServiceDetails::all();
            $methods = Method::all();
            //dd($methods);
            return view('services-page.index', [
                'services_page' => $main_screen,
                'services' => $services
            ]);              
        }
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Method $method,Request $request, $id)
    {
        dd($id);
        //return view('methods.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Method $method)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        if ($request->hasFile('img')) {
            $path = $request->file('img')->store('assets/images');  
            $query = Method::where('id', $request->input('method_id'))->update([
                'img' => 'storage/' . $path 
            ]);
        }
        $query = Method::where('id', $request->input('method_id'))->update([
            'title-1' => $request->input('title-1'),
            'p' => $request->input('p'),
            'title-2' => $request->input('title-2'),
            'p-1' => $request->input('p-1'),
            'service_id' => $request->input('service_id'),
        ]);
        if ($query) {
            return redirect()->route('services-page.index');
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $query = Method::findOrFail($id);

        if ($query->delete()) {
            return redirect()->route('services-page.index');
        }
    }
}
