@extends('layouts.main')

@section('title', 'Listado de Productos')


@section('mainContent')
	<!-- Listado-Productos -->
	<div class="row">
		<div class="col-md-3">
			<nav class="categories-products-list">
				<h2>COMPRAR POR <i class="ion-chevron-down"></i></h2>
				<div class="category-list-wrap">
					<h3>CATEGORÍAS</h3>
					<ul>
						<li class="active"><a href="#">VER TODO</a></li>
						<li><a href="#">CALZADO</a></li>
						<li><a href="#">REMERA & CAMISAS</a></li>
						<li><a href="#">SWEATERS & ABRIGOS</a></li>
						<li><a href="#">VESTIDOS & MONOS</a></li>
						<li><a href="#">PANTALONES</a></li>
						<li><a href="#">TRAJES DE BAÑO</a></li>
						<li><a href="#">ACCESORIOS</a></li>
						<li><a href="#">BODIES</a></li>
						<li><a href="#">CONJUNTOS</a></li>
					</ul>
				</div>
				<div class="category-list-wrap">
					<h3>COMPRAR POR TALLE</h3>
					<ul>
						<li><a href="#">6M</a></li>
						<li><a href="#">9M</a></li>
						<li><a href="#">0M</a></li>
						<li><a href="#">03M</a></li>
						<li><a href="#">06M</a></li>
						<li><a href="#">09M</a></li>
						<li><a href="#">12M</a></li>
						<li><a href="#">18M</a></li>
						<li><a href="#">24M</a></li>
						<li><a href="#">S</a></li>
						<li><a href="#">M</a></li>
						<li><a href="#">L</a></li>
					</ul>
				</div>
				<div class="category-list-wrap">
					<h3>COMPRAR POR TALLE</h3>
					<ul>
						<li><a href="#">18</a></li>
						<li><a href="#">19</a></li>
						<li><a href="#">20</a></li>
						<li><a href="#">21</a></li>
						<li><a href="#">22</a></li>
						<li><a href="#">23</a></li>
						<li><a href="#">24</a></li>
						<li><a href="#">25</a></li>
						<li><a href="#">26</a></li>
						<li><a href="#">S</a></li>
						<li><a href="#">M</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="col-md-9">
			<div class="row product-list-container">
				@php
					$dataProducts = [
						['name' => 'CECILE', 'oldPrice' => '$1898', 'newPrice' => '$949', 'colors' => ['#a3e6da', '#e6ccb8']],
						['name' => 'ROSINE', 'oldPrice' => '1098', 'newPrice' => '$549'],
						['name' => 'ROSINE', 'oldPrice' => '1198', 'newPrice' => '$599', 'colors' => ['#dee6a3', '#e0b8e6']],
						['name' => 'ANAISE', 'oldPrice' => '$998', 'newPrice' => '$598'],
						['name' => 'ROSINE', 'oldPrice' => '$998', 'newPrice' => '$598'],
						['name' => 'CECILE', 'oldPrice' => '$1198', 'newPrice' => '$798', 'colors' => ['#a3e6da', '#e6ccb8']],
						['name' => 'DORA', 'oldPrice' => '$1689', 'newPrice' => '$1013'],
						['name' => 'TUCAN', 'oldPrice' => '$498', 'newPrice' => '$348', 'colors' => ['#dee6a3', '#e0b8e6']],
						['name' => 'UNICORN', 'oldPrice' => '$498', 'newPrice' => '$348']
					]
				@endphp

				@foreach ($dataProducts as $n => $data)
					<div class="col-md-4 item-product">
						<div class="product-list-box">
							<a href="#">
								<img src="/images/img-product-list_0{{$n + 1}}.jpg" alt="imagen de producto">
								<div class="product-info">
									<h2>{{ $data['name'] }}</h2>
									<span class="old-price">{{ $data['oldPrice'] }}</span>
									<span class="new-price">{{ $data['newPrice'] }}</span>
									@if(isset($data['colors']))
										<div>
											@foreach ($data['colors'] as $value)
												<span class="product-color" style="background-color: {{$value}};"></span>
											@endforeach
										</div>
									@else
										<div><span class="product-color"></span></div>
									@endif
								</div>
								<span class="discount">50% OFF</span>
							</a>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
	<!-- /Listado-Productos -->
@stop
