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
use App\Models\About_video;
use App\Models\contact_forms;
use App\Models\PageView;
use Illuminate\Http\Request;


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
		$showCookieBanner = 0;
		if(isset($_COOKIE['cookie_consent_sosp'])){
			$showCookieBanner = $_COOKIE['cookie_consent_sosp'] == true ? 1 : 0;
		}else{
		 	$showCookieBanner = 0;
		}
		$routeName = 'servicos'; // Nome da rota ou página que será monitorada
        $today = now()->toDateString(); // Data atual (YYYY-MM-DD)
		// Incrementa ou cria um registro para a contagem de visitas
		PageView::updateOrCreate(
			['route_name' => $routeName, 'view_date' => $today],
			['view_count' => \DB::raw('view_count + 1')]
		);
        return view('services.index', [
            'main_screen' => $main_screen,
            'best_service' => $best_service,
            'services' => $services,
			'video' => $video,
			'showCookieBanner' => !$showCookieBanner
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $slug)
    {
        $service_detail = ServiceDetails::where('slug',$slug)->get();
        $service_detail_show = ServiceDetailsShow::findOrFail(1)->toArray();
        $methods = Method::where('service_id',$service_detail[0]['id'])->get();
        $services = ServiceDetails::all();
        //dd($service_detail);

		$routeName = 'servicos - '.$slug; // Nome da rota ou página que será monitorada
        $today = now()->toDateString(); // Data atual (YYYY-MM-DD)
		// Incrementa ou cria um registro para a contagem de visitas
		PageView::updateOrCreate(
			['route_name' => $routeName, 'view_date' => $today],
			['view_count' => \DB::raw('view_count + 1')]
		);
        return view('services.show', [
            'services' => $services,
            'service_detail' => $service_detail[0],
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

	public function ContactFormService(Request $request){
		$secretKey = 'ES_8cf3c7f61ea84e6ebb4446cb84cfa8e4'; // Substitua pela sua chave secreta
		$verifyUrl = 'https://api.hcaptcha.com/siteverify';

		// Recebe o token da resposta enviada do formulário
		$token = $_POST['h-captcha-response']?? '';

		// Cria os dados para enviar na requisição POST
		$data = [
			'secret' => $secretKey,
			'response' => $token
		];

		// Faz a requisição POST para a API do hCaptcha
		$options = [
			'http' => [
				'method'  => 'POST',
				'content' => http_build_query($data),
				'header'  => "Content-Type: application/x-www-form-urlencoded\r\n"
			]
		];
		$context  = stream_context_create($options);
		$response = file_get_contents($verifyUrl, false, $context);

		// Decodifica a resposta JSON
		$responseJson = json_decode($response, true);

		// Verifica se a verificação foi bem-sucedida
		$success = $responseJson['success'];

		if ($success) {
			$query = contact_forms::create([
				'name' => $request->input('name'),
				'email' => $request->input('email'),
				'phone' => $request->input('phone'),
				'confirmed' => true
			]);

			if ($query) {

				return redirect()->back()->with('success', 'Obrigado pelo seu contacto. Iremos entrar em contacto brevemente!')->withInput();
			}
			return redirect()->back()->with('error', 'Ocorreu um erro ao enviar o formulário. Tente novamente.');
		} else {
			return redirect()->back()->with('error', 'Ocorreu um erro ao enviar o formulário. Tente novamente.');
		}

		// return redirect()->route('ServicePage.index');
    }
}
