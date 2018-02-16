@extends('layouts.main')

@section('title', 'Inicio')

@section('otherStyleSheet')
	<link rel="stylesheet" href="/css/owl.carousel.min.css">
@stop

@section('mainContent')
	<!-- Main-Banner -->
	<section class="main-banner">
		<div class="owl-carousel">
			<div class="item"><img src="/images/img-home-banner_01.jpg" alt="banner 01"></div>
			<div class="item"><img src="/images/img-home-banner_02.jpg" alt="banner 02"></div>
			<div class="item"><img src="/images/img-home-banner_03.jpg" alt="banner 03"></div>
			<div class="item"><img src="/images/img-home-banner_04.jpg" alt="banner 04"></div>
			<div class="item"><img src="/images/img-home-banner_05.jpg" alt="banner 05"></div>
		</div>
	</section>
	<!-- /Main-Banner -->

	<!-- Row -->
	<div class="row">
		<!-- Left-Col -->
		<div class="col-md-4">
			<figure class="img-banner"><a href="#"><img src="/images/img-banner-baby-girl.jpg" alt="baby girls"></a></figure>
			<figure class="img-banner"><a href="#"><img src="/images/img-banner-baby-boy.jpg" alt="baby boys"></a></figure>
			<figure class="img-banner"><a href="#"><img src="/images/img-banner-new-born.jpg" alt="new born"></a></figure>
			<figure class="img-banner"><a href="#"><img src="/images/img-banner-pioppa-stars.jpg" alt="pioppa stars"></a></figure>
		</div>
		<!-- /Left-Col -->

		<!-- Right-Col -->
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-6">
					<figure class="img-banner"><a href="#"><img src="/images/img-banner-girl.jpg" alt="girls"></a></figure>
				</div>
				<div class="col-md-6">
					<figure class="img-banner"><a href="#"><img src="/images/img-banner-boy.jpg" alt="boys"></a></figure>
				</div>
				<div class="col-md-12">
					<figure class="img-banner"><a href="#"><img src="/images/img-banner-lookme.jpg" alt="look me"></a></figure>
				</div>
				<div class="col-md-6">
					<figure class="img-banner"><a href="#"><img src="/images/img-banner-pago.jpg" alt="formas de pago"></a></figure>
				</div>
				<div class="col-md-6">
					<figure class="img-banner"><a href="https://www.instagram.com/pioppaoficial/" target="_blank"><img src="/images/img-banner-instagram.jpg" alt="seguinos en instagram"></a></figure>
				</div>
			</div>
		</div>
		<!-- /Right-Col -->
	</div>
	<!-- /Row -->
@stop

@section('otherScripts')
	<script src="/js/owl.carousel.js"></script>
	<script>
      /* global $ */
		$('.owl-carousel').owlCarousel({
			loop: true,
			dots: true,
			autoplay: true,
			smartSpeed: 650,
			responsiveClass: true,
			responsive: {
				0: {
					items: 1
				}
			}
		});
	</script>
@stop
