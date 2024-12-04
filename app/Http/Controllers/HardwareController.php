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

}
