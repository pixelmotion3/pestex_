<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHardwareMainScreenRequest;
use App\Http\Requests\UpdateHardwareMainScreenRequest;
use App\Models\HardwareMainScreen;
use Illuminate\Http\Request;

class HardwarePageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $main = HardwareMainScreen::where('id',1)->get()->toArray();
        
        return view('hardware-page.index', ['main' => $main ]);
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
    public function store(StoreHardwareMainScreenRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(HardwareMainScreen $hardwareMainScreen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HardwareMainScreen $hardwareMainScreen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HardwareMainScreen $hardwareMainScreen)
    {
        if ($request->has('form0')) {

            if ($request->hasFile('img')) {
                $path = $request->file('img')->store('assets/images');     
                $query = HardwareMainScreen::where('id',1)->update([
                    'img' => 'storage/' . $path 
                ]);                 
            }

            if ($request->hasFile('img-1')) {
                $path = $request->file('img-1')->store('assets/images');     
                $query = HardwareMainScreen::where('id',1)->update([
                    'img-1' => 'storage/' . $path 
                ]);                 
            }

            if ($request->hasFile('img-2')) {
                $path = $request->file('img-2')->store('assets/images');     
                $query = HardwareMainScreen::where('id',1)->update([
                    'img-2' => 'storage/' . $path 
                ]);                 
            }

            if ($request->hasFile('img-3')) {
                $path = $request->file('img-3')->store('assets/images');     
                $query = HardwareMainScreen::where('id',1)->update([
                    'img-3' => 'storage/' . $path 
                ]);                 
            }

            if ($request->hasFile('img-4')) {
                $path = $request->file('img-4')->store('assets/images');     
                $query = HardwareMainScreen::where('id',1)->update([
                    'img-4' => 'storage/' . $path 
                ]);                 
            }

            if ($request->hasFile('img-5')) {
                $path = $request->file('img-5')->store('assets/images');     
                $query = HardwareMainScreen::where('id',1)->update([
                    'img-5' => 'storage/' . $path 
                ]);                 
            }

            if ($request->hasFile('img-6')) {
                $path = $request->file('img-6')->store('assets/images');     
                $query = HardwareMainScreen::where('id',1)->update([
                    'img-6' => 'storage/' . $path 
                ]);                 
            }
            
            $query = HardwareMainScreen::where('id',1)->update([
                'h1' => $request->input('h1'),
                'h6' => $request->input('h6'),
                'h3' => $request->input('h3'),
                'h3-0' => $request->input('h3-0'),
                'a' => $request->input('a'),
                'p' => $request->input('p'),
                'h3-1' => $request->input('h3-1'),
                'a-1' => $request->input('a-1'),
                'p-1' => $request->input('p-1'),
                'h3-2' => $request->input('h3-2'),
                'a-3' => $request->input('a-3'),
                'p-2' => $request->input('p-2'),
                'h3-3' => $request->input('h3-3'),
                'a-4' => $request->input('a-4'),
                'p-3' => $request->input('p-3'),
                'h3-4' => $request->input('h3-4'),
                'a-5' => $request->input('a-5'),
                'p-4' => $request->input('p-4'),
                'h3-5' => $request->input('h3-5'),
                'h3-a' => $request->input('h3-a'),
                'p-5-0' => $request->input('p-5-0'),
                'div' => $request->input('div'),
                'h6-2' => $request->input('h6-2'),
                'h-3-6' => $request->input('h-3-6'),
                'p-5' => $request->input('p-5'),
                'li-h3' => $request->input('li-h3'),
                'li-p' => $request->input('li-p'),
                'li-h3-1' => $request->input('li-h3-1'),
                'li-p-1' => $request->input('li-p-1'),
            ]);

            if($query){
                return redirect()->route('index');
            }
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HardwareMainScreen $hardwareMainScreen)
    {
        //
    }
}
