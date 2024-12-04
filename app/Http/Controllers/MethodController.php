<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMethodRequest;
use App\Http\Requests\UpdateMethodRequest;
use App\Models\Method;
use Illuminate\Http\Request;
use App\Models\ServicesMainScreen;
use App\Models\ServiceDetails;
use App\Models\ServiceDetailsShow;

class MethodController extends Controller
{
    public function fetch(Request $request)
    {
        $query = Method::where('service_id', $request->input('service_id'))->get();
        return response()->json($query);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('img')) {
            $path = $request->file('img')->store('assets/images');
            $query = Method::create([
                'img' => 'storage/' . $path,
                'title1' => $request->input('title-1'),
                'p' => $request->input('p'),
                'title2' => $request->input('title-2'),
                'p1' => $request->input('p-1'),
                'service_id' => $request->input('service_id'),
            ]);
            $main_screen = ServicesMainScreen::where('id', 1)->get()->toArray();
            $services = ServiceDetails::all();
            return view('services-page.index', [
                'services_page' => $main_screen,
                'services' => $services,
                'service_details_page' => ServiceDetailsShow::where('id', 1)->get()->toArray(),
            ]);
        }
        return back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //dd($request->all());
        if ($request->hasFile('img')) {
            $path = $request->file('img')->store('assets/images');
            $query = Method::where('id', $request->input('method_id'))->update([
                'img' => 'storage/' . $path
            ]);
        }
        $query = Method::where('id', $request->input('method_id'))->update([
            'title1' => $request->input('title-1'),
            'p' => $request->input('p'),
            'title2' => $request->input('title-2'),
            'p1' => $request->input('p-1'),
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
    public function destroy(Request $request, $id)
    {
        //dd($request->all());
        $query = Method::findOrFail($id);

        if ($query->delete()) {
            return redirect()->route('services-page.index');
        }
    }
}
