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

		$routeName = 'equipamentos'; // Nome da rota ou página que será monitorada
        $today = now()->toDateString(); // Data atual (YYYY-MM-DD)
		// Incrementa ou cria um registro para a contagem de visitas
		PageView::updateOrCreate(
			['route_name' => $routeName, 'view_date' => $today],
			['view_count' => \DB::raw('view_count + 1')]
		);

        return view('hardware.index', [
            'main' => $main
        ]);
    }

}
