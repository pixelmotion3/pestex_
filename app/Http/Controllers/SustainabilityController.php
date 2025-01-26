<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSustainabilityRequest;
use App\Http\Requests\UpdateSustainabilityRequest;
use App\Models\PageView;
use App\Models\Sustainability;
use App\Models\SustainabilityPage;

class SustainabilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $main = SustainabilityPage::where('id', 1)->get()->toArray();

		$routeName = 'sustentabilidade'; // Nome da rota ou página que será monitorada
		$today = now()->toDateString(); // Data atual (YYYY-MM-DD)
		// Incrementa ou cria um registro para a contagem de visitas
		PageView::updateOrCreate(
			['route_name' => $routeName, 'view_date' => $today],
			['view_count' => \DB::raw('view_count + 1')]
		);
        //dd($main);
        return view('sustainability.index', [
            'main' => $main
        ]);
    }

}
