@if($showCookieBanner ?? false)
<div class="fixed bottom-0 left-0 w-full bg-gray-800 text-white p-4 shadow-md z-50">
	<div class="container mx-auto flex justify-between items-center">
		<p class="text-sm">
			Este site utiliza cookies para melhorar sua experiência. Ao continuar navegando, você concorda com nossa <a href="/politica-de-cookies" class="underline">Política de Cookies</a>.
		</p>
		<button id="acceptCookies" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
			Aceitar
		</button>
	</div>
</div>
@endif

<script>
	document.getElementById('acceptCookies').addEventListener('click', function() {
		// Define o cookie no navegador com validade de 1 ano
		document.cookie = "cookie_consent=true; path=/; max-age=" + (365 * 24 * 60 * 60);

		// Esconde o banner
		document.querySelector('[id="acceptCookies"]').parentElement.parentElement.remove();
	});
</script>