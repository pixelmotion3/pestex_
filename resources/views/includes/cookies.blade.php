{{--
@if($showCookieBanner ?? false)
	<div class="fixed bottom-0 left-0 w-full p-4 shadow-md z-50" style="background-color: #002255">
		<div class="container mx-auto flex justify-between items-center">
			<p class="text-sm text-white">
				Olá, o nosso website utiliza cookies essenciais para garantia o seu correcto funcionamento e para melhorar a sua experiência. <a href="/politica-privacidade" class="underline" target="_blank" style="color: #ff6600;">Ler mais</a> sobre a nossa política de cookies.
			</p>
			<button id="acceptCookies" class="bg-blue-500 hover:bg-blue-600 font-bold py-2 px-4 rounded" style="color: #ff6600;">
				Aceitar
			</button>
		</div>
	</div>
@endif

<script>
	$(document).ready(function() {
		if(document.getElementById('acceptCookies')){
			document.getElementById('acceptCookies').addEventListener('click', function() {
				// Define o cookie no navegador com validade de 1 ano
				document.cookie = "cookie_consent_sosp=true; path=/; max-age=" + (365 * 24 * 60 * 60);

				// Esconde o banner
				document.querySelector('[id="acceptCookies"]').parentElement.parentElement.remove();
			});
		}

	})

</script> --}}

@if($showCookieBanner ?? false)
	<div class="fixed bottom-0 left-0 w-full p-4 shadow-md z-50" style="background-color: #002255">
		<div class="container mx-auto flex justify-between items-center">
			<p class="text-sm text-white">
				Olá, o nosso website utiliza cookies essenciais para garantir o seu correcto funcionamento e para melhorar a sua experiência. <a href="/politica-privacidade" class="underline" target="_blank" style="color: #ff6600;">Ler mais</a> sobre a nossa política de cookies.
			</p>
			<button id="acceptCookies" class="bg-blue-500 hover:bg-blue-600 font-bold py-2 px-4 rounded" style="color: #ff6600;">
				Aceitar
			</button>
		</div>
	</div>
@endif

<script>
document.addEventListener('DOMContentLoaded', function() {
	const acceptBtn = document.getElementById('acceptCookies');

	if (acceptBtn) {
		acceptBtn.addEventListener('click', function() {
			// Define o cookie no navegador com validade de 1 ano
			document.cookie = "cookie_consent_sosp=true; path=/; max-age=" + (365 * 24 * 60 * 60);

			// Remove o banner
			acceptBtn.closest('div.fixed').remove(); // remove o container do banner
		});
	}
});
</script>
