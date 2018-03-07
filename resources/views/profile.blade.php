@extends('layouts.main')

@section('title', 'Ingresá a tu cuenta')

@section('mainContent')
	<div class="row">
		<div class="col-md-7">
			<div class="reg-log-form">
				<a>Bienvenido</a>
				<h2>User del Orteishon</h2>
				<form method="post">
					<div class="form-control">
						<label>Nombre</label>
						<input type="text" placeholder="Nombre">
					</div>
					<div class="form-control">
						<label>Apellido</label>
						<input type="text" placeholder="Apellido">
					</div>
					<div class="form-control">
						<label>Ciudad</label>
						<div class="select-box_combo">
						<span>Elegí una</span>
						<select name="prov" id="prov">
							<option value="Arg">Argentina</option>
							<option value="Bra">Brasil</option>
							<option value="Chi">Chile</option>
							<option value="Col">Colombia</option>
							<option value="Ecu">Ecuador</option>
						</select>
					</div>
					</div>
					<div class="form-control">
						<label>Email</label>
						<input type="email" placeholder="Email">
					</div>
					<div class="form-control">
						<label>Contraseña</label>
						<input type="password" placeholder="Contraseña">
					</div>
					<div class="form-control">
						<label>Repetir Contraseña</label>
						<input type="password" placeholder="Repetir Contraseña">
					</div>
					<button type="submit">Modificar mis datos</button>
				</form>
			</div>
		</div>
		<div class="col-md-1"><!-- Empty-Column-(Dont delete) --></div>
		<div class="col-md-4">
			<div class="reg-log-form">
				<a>Mi actividad</a>
				<h2>Últimas compras</h2>
				<div class="table-products" style="margin: 40px 0 30px;">
					<!-- table-header -->
					<div class="table-header">
						<div class="table-col"><h3>Imagen</h3></div>
						<div class="table-col"><h3>Producto</h3></div>
						<div class="table-col"><h3>Total</h3></div>
					</div>
					<!-- /table-header -->
					<!-- table-row -->
					<div class="table-row">
						<div class="table-col"><img src="/images/img-look-book-girl_01.jpg" alt="imagen carrito"></div>
						<div class="table-col"><p>ROSINE <br>	CÓD. AB-ROSINE  <br>Color: CAMEL</p></div>
						<div class="table-col"><p><span>Total:</span> $479</p></div>
					</div>
					<!-- /table-row -->
					<!-- table-row -->
					<div class="table-row">
						<div class="table-col"><img src="/images/img-look-book-girl_02.jpg" alt="imagen carrito"></div>
						<div class="table-col"><p>ROSINE <br>	CÓD. LOREM-IPSUM  <br>Color: BORDÓ</p></div>
						<div class="table-col"><p><span>Total:</span> $3739</p></div>
					</div>
					<!-- /table-row -->
				</div>
				<a href="/shoppings" class="link">VER TODA MI ACTIVIDAD</a>
			</div>
		</div>
	</div>
@stop
