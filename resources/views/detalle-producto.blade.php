@extends('layouts.main')

@section('title', 'Detalle de Productos')

@section('otherStyleSheet')
	<link rel="stylesheet" href="/css/owl.carousel.min.css">
@stop

@section('mainContent')
	<!-- Listado-Productos -->
	<div class="row">
		<div class="col-md-5">
			<div class="product-detail-image-wrap">
				<span class="discount">50% OFF</span>
				<div class="owl-carousel" data-slider-id="1">
				   <div><img src="/images/img-look-book-girl_01.jpg" alt="image detail"></div>
				   <div><img src="/images/img-look-book-girl_02.jpg" alt="image detail"></div>
				   <div><img src="/images/img-look-book-girl_03.jpg" alt="image detail"></div>
				</div>
			</div>
		</div>
		<div class="col-md-2">
			<div class="owl-thumbs" data-slider-id="1">
				<button class="owl-thumb-item"><img src="/images/img-look-book-girl_01.jpg" width="100" alt="image detail"></button>
				<button class="owl-thumb-item"><img src="/images/img-look-book-girl_02.jpg" width="100" alt="image detail"></button>
				<button class="owl-thumb-item"><img src="/images/img-look-book-girl_03.jpg" width="100" alt="image detail"></button>
			</div>
		</div>
		<div class="col-md-5">
			<div class="product-detail-info">
				<form method="post">
					<h2>ROSINE</h2>
					<p>Cód. AB-ROSINE</p>
					<p class="product-old-price">$1198</p>
					<p class="product-final-price">$479</p>
					<br>
					<h3>COLOR</h3>
					<ul class="product-color-list">
						<li>
							<input type="radio" name="productColor" value="" id="color1">
							<label for="color1" style="background-color: #ddeb46;"></label>
						</li>
						<li>
							<input type="radio" name="productColor" value="" id="color2">
							<label for="color2" style="background-color: #eb9546;"></label>
						</li>
						<li>
							<input type="radio" name="productColor" value="" id="color3">
							<label for="color3" style="background-color: #eb46df;"></label>
						</li>
					</ul>
					<br>
					<h3>TALLES</h3>
					<ul class="product-sizes-list">
						<li>
							<input type="radio" name="productSize" value="S" id="size1">
							<label for="size1">S</label>
						</li>
						<li>
							<input type="radio" name="productSize" value="M" id="size2">
							<label for="size2">M</label>
						</li>
						<li>
							<input type="radio" name="productSize" value="L" id="size3">
							<label for="size3">L</label>
						</li>
					</ul>
					<a href="#" class="sizes-table">VER TABLA DE TALLES</a>
					<br>
					<br>
					<h3>CANTIDAD</h3>
					<div class="select-box_combo">
						<span>1</span>
						<select name="prov" id="prov">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						</select>
					</div>
					<br>
					<h3>DESCRIPCIÓN</h3>
					<p class="description">LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT. VITAE MINUS, ASPERIORES. DELECTUS NAM, SAPIENTE DOLOREMQUE DOLORES, AB UT EX QUAE ADIPISCI FUGA. NEMO IN DOLORE REPREHENDERIT MINUS AD EXCEPTURI QUIDEM.</p>
					<button type="submit" class="product-submit-button">SHOP</button>
				</form>
				<br>
				<h3>COMPARTIR</h3>
				<ul class="share-list">
					<li><a href="#"><i class="ion-social-facebook"></i></a></li>
					<li><a href="#"><i class="ion-social-twitter"></i></a></li>
					<li><a href="#"><i class="ion-social-googleplus"></i></a></li>
					<li><a href="#"><i class="ion-social-pinterest"></i></a></li>
					<li><a href="#"><i class="ion-android-mail"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /Listado-Productos -->
@stop

@section('otherScripts')
	<script src="/js/owl.carousel.js"></script>
	<script src="/js/owl.carousel.thumbs.js"></script>
	<script>
      /* global $ */
		$('.owl-carousel').owlCarousel({
			thumbs: true,
			thumbsPrerendered: true,
			dots: false,
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
