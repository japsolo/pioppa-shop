@extends('layouts.main')

@section('title', 'Locales')

@section('otherStyleSheet')
	<link rel="stylesheet" href="/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/fancybox/jquery.fancybox-1.3.4.css">
@stop

@section('mainContent')
	<div class="container">
		<header class="locales-header">
			<h2>LOCALES</h2>
		</header>

		<div class="row">
			<div class="col-md-6">
				<h3 class="locales-subtitle">LOCALES EXCLUSIVOS</h3>
				@php
					$locales = [
						[
							'name' => 'DOT BAIRES SHOPPING',
							'data' => 'Vedia 3626, 1º Nivel, Local 16 Tel.: 5777-9616',
							'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3286.2724722649464!2d-58.490321684771956!3d-34.54665598047433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb6c04f23f74f%3A0xc96925862f3fd5ff!2sVedia+3632%2C+C1430DAH+CABA!5e0!3m2!1ses!2sar!4v1508421235515'
						],
						[
							'name' => 'GALERÍAS PACÍFICO',
							'data' => 'Florida 737,  Local 124, 1º Subsuelo  Tel.: 4328- 2778',
							'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.1924099858356!2d-58.37741388496249!3d-34.599295764770716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccacba3579fd1%3A0x7ac69e6d03d0702f!2sFlorida+737%2C+C1005AAO+CABA!5e0!3m2!1ses!2sar!4v1508421641611'
						],
						[
							'name' => 'LA PLATA',
							'data' => 'Calle 50 N°488, Pasaje Rodrigo Nivel Tilo, T12/T13 Tel.: 0221 4100442',
							'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3271.7496519001256!2d-57.94957968495206!3d-34.91273158142034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a2e639785b493d%3A0xbbac7ad586ccf0a6!2sPioppa!5e0!3m2!1ses!2sar!4v1508421853933'
						],
						[
							'name' => 'PALERMO OUTLET',
							'data' => 'Av. Córdoba 4834  Tel.: 4899-0287',
							'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.4581883685346!2d-58.43517478496277!3d-34.59257366441515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcca76219d314b%3A0x9c3282af3ae02354!2sPioppa!5e0!3m2!1ses!2sar!4v1508421537940'
						],
						[
							'name' => 'PALERMO SOHO',
							'data' => 'El Salvador 4645,  Tel.: 4833-6795',
							'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.573660819656!2d-58.42859778496287!3d-34.58965276426067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb5879adb7e61%3A0xd6cf04eb9383ca79!2sPioppa!5e0!3m2!1ses!2sar!4v1508421686254'
						],
						[
							'name' => 'PASEO ALCORTA',
							'data' => 'Av. J. Salguero 3172, 2º Nivel, Local 2054. Tel.: 5777-6682',
							'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3285.1486702111924!2d-58.40620768530394!3d-34.57510456349074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb5656cf637cb%3A0x9ab0c8237bd401ba!2sPIOPPA!5e0!3m2!1ses!2sar!4v1507036737430'
						],
						[
							'name' => 'PALMAS DEL PILAR  SHOPPING',
							'data' => 'Las Magnolias 754  Local 1130, Pilar  Tel.: 0230-4667672',
							'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3290.2519723103865!2d-58.870820684967654!3d-34.44575115666348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bc9c5735dea9dd%3A0xee8aa2b465f6124e!2sLas+Magnolias+754%2C+La+Lonja%2C+Buenos+Aires!5e0!3m2!1ses!2sar!4v1508421364898'
						],
						[
							'name' => 'UNICENTER',
							'data' => 'Paraná 3745, Martínez  Local 1170 / Tel.: 4836-3782',
							'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3287.773621938928!2d-58.525401584965586!3d-34.50862295997933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb0ee29cc9bd9%3A0x4566b1702c323359!2sParan%C3%A1+3745%2C+Mart%C3%ADnez%2C+Buenos+Aires!5e0!3m2!1ses!2sar!4v1508421806655'
						],
						[
							'name' => 'LOMAS DE ZAMORA',
							'data' => 'Mitre 192 Tel.: 4243-3557',
							'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3277.603218463376!2d-58.40203108495696!3d-34.76558667358736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcd2eb9319eead%3A0xf5742a09cfe7b772!2sGral.+Bartolom%C3%A9+Mitre+192%2C+B1832JDA+Lomas+de+Zamora%2C+Buenos+Aires!5e0!3m2!1ses!2sar!4v1508421484733'
						],
						[
							'name' => 'QUILMES',
							'data' => 'Alvear 574  Tel.: 4253-8612',
							'url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3279.384692437368!2d-58.257918684958405!3d-34.72069647120357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a32e4076cdafc5%3A0x2a441d02edefa3f2!2sPioppa!5e0!3m2!1ses!2sar!4v1508421431492'
						],
					]
				@endphp
				<ul class="loc-list">
					@foreach ($locales as $local)
						<li href=" {{ $local['url'] }} ">
							<h5> {{ $local['name'] }} </h5>
							<span> {{ $local['data'] }} </span>
						</li>
					@endforeach
				</ul>
			</div>
			<div class="col-md-2"><!-- EMPTY-COLUMN (Don't delete) --></div>
			<div class="col-md-4">
				<h3 class="locales-subtitle">OTROS LOCALES</h3>
				<ul class="other-loc">
					<li>
						<p>CABA <i class="ion-chevron-down"></i></p>
						<ul class="loc-list">
							{{-- en el href="" del <li> debe ir la URL del embeded Google Map --}}
							<li href="">
								<h5>ALMACEN PARA CHICOS - Mataderos</h5>
								<span>Av. J.B.Alberdi 5931</span>
							</li>
							<li href="">
								<h5>KIDS ONLY - Barrio Norte</h5>
								<span>Juncal 1979</span>
							</li>
							<li href="">
								<h5>LOLLIPOP - Caballito</h5>
								<span>Av. Pedro Goyena 1309</span>
							</li>
						</ul>
					</li>
					<li>
						<p>CHACO <i class="ion-chevron-down"></i></p>
						<ul class="loc-list">
							{{-- en el href="" del <li> debe ir la URL del embeded Google Map --}}
							<li href="">
								<h5>ALMACEN PARA CHICOS - Mataderos</h5>
								<span>Av. J.B.Alberdi 5931</span>
							</li>
							<li href="">
								<h5>KIDS ONLY - Barrio Norte</h5>
								<span>Juncal 1979</span>
							</li>
							<li href="">
								<h5>LOLLIPOP - Caballito</h5>
								<span>Av. Pedro Goyena 1309</span>
							</li>
						</ul>
					</li>
					<li>
						<p>CHUBUT <i class="ion-chevron-down"></i></p>
						<ul class="loc-list">
							{{-- en el href="" del <li> debe ir la URL del embeded Google Map --}}
							<li href="">
								<h5>ALMACEN PARA CHICOS - Mataderos</h5>
								<span>Av. J.B.Alberdi 5931</span>
							</li>
							<li href="">
								<h5>KIDS ONLY - Barrio Norte</h5>
								<span>Juncal 1979</span>
							</li>
							<li href="">
								<h5>LOLLIPOP - Caballito</h5>
								<span>Av. Pedro Goyena 1309</span>
							</li>
						</ul>
					</li>
					<li>
						<p>CÓRDOBA <i class="ion-chevron-down"></i></p>
						<ul class="loc-list">
							{{-- en el href="" del <li> debe ir la URL del embeded Google Map --}}
							<li href="">
								<h5>SARASA - Chotaplaza</h5>
								<span>Av. Siempre Viva 1234</span>
							</li>
						</ul>
					</li>
					<li>
						<p>ENTRE RIOS <i class="ion-chevron-down"></i></p>
						<ul class="loc-list">
							{{-- en el href="" del <li> debe ir la URL del embeded Google Map --}}
							<li href="">
								<h5>SARASA - Chotaplaza</h5>
								<span>Av. Siempre Viva 1234</span>
							</li>
						</ul>
					</li>
					<li>
						<p>GBA<i class="ion-chevron-down"></i></p>
						<ul class="loc-list">
							{{-- en el href="" del <li> debe ir la URL del embeded Google Map --}}
							<li href="">
								<h5>SARASA - Chotaplaza</h5>
								<span>Av. Siempre Viva 1234</span>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
@stop


@section('otherScripts')
	<!-- Modal-box -->
	<script src="/js/jquery.min_1.8.3.js"></script>
	<script src="/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script src="/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<script>
		/* global $ */
		$('.loc-list li').click(function () {
			let h5Txt = $('h5', this).text();
			let spanTxt = $('span', this).text();
			$(this).attr('title', `${h5Txt} ${spanTxt}`);
		});
		$('.loc-list li').fancybox({
			'transitionIn': 'fade',
			'transitionOut': 'fade',
			'overlayColor': '#000',
			'autoDimensions': true,
			'overlayOpacity': 0.5,
			'type': 'iframe',
			'titlePosition': 'inside'
		});
		$('.other-loc > li > p').click(function () {
			const theParent = $(this).parent();
			console.log(theParent);
			$('.loc-list', theParent).slideToggle(300);
		});
	</script>
@stop
