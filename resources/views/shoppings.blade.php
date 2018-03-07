@extends('layouts.main')

@section('title', 'Carrito de compras')

@section('mainContent')
	<!-- Carrito-Compras -->
	<header class="shopcart-header">
		<h2>HISTORIAL COMPRAS</h2>
	</header>

	<div class="table-products">
		<!-- table-header -->
		<div class="table-header">
			<div class="table-col"><h3>Imagen</h3></div>
			<div class="table-col"><h3>Producto</h3></div>
			<div class="table-col"><h3>Talle</h3></div>
			<div class="table-col"><h3>Precio unitario</h3></div>
			<div class="table-col"><h3>Cantidad</h3></div>
			<div class="table-col"><h3>Total</h3></div>
			<div class="table-col"><h3>Ver factura</h3></div>
		</div>
		<!-- /table-header -->

		<!-- table-row -->
		<div class="table-row">
			<div class="table-col"><img src="/images/img-look-book-girl_01.jpg" alt="imagen carrito"></div>
			<div class="table-col"><p>ROSINE <br>	CÓD. AB-ROSINE  <br>Color: CAMEL</p></div>
			<div class="table-col"><p><span>Talle:</span> L</p></div>
			<div class="table-col"><p>$479 <span>c/u</span></p></div>
			<div class="table-col"><p><span>Cantidad:</span> 1</p></div>
			<div class="table-col"><p><span>Total:</span> $479</p></div>
			<div class="table-col"><a class="print"><i class="ion-printer"></i></a></div>
		</div>
		<!-- /table-row -->

		<!-- table-row -->
		<div class="table-row">
			<div class="table-col"><img src="/images/img-look-book-girl_02.jpg" alt="imagen carrito"></div>
			<div class="table-col"><p>ROSINE <br>	CÓD. AB-ROSINE  <br>Color: CAMEL</p></div>
			<div class="table-col"><p><span>Talle:</span> L</p></div>
			<div class="table-col"><p>$479 <span>c/u</span></p></div>
			<div class="table-col"><p><span>Cantidad:</span> 1</p></div>
			<div class="table-col"><p><span>Total:</span> $479</p></div>
			<div class="table-col"><a class="print"><i class="ion-printer"></i></a></div>
		</div>
		<!-- /table-row -->
	</div>
	<!-- /Carrito-Compras -->
@stop
