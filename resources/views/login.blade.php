@extends('layouts.main')

@section('title', 'Ingresá a tu cuenta')

@section('mainContent')
	<div class="row">
		<div class="col-md-5">
			<div class="reg-log-form">
				<a>¿Nuevo Usuario?</a>
				<h2>REGISTRARSE</h2>
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
					<div class="form-control">
						<label><input type="checkbox">Deseo recibir novedades</label>
					</div>
					<button type="submit">REGISTRAR</button>
				</form>
			</div>
		</div>
		<div class="col-md-2"><!-- Empty-Column-(Dont delete) --></div>
		<div class="col-md-5">
			<div class="reg-log-form">
				<a>¿Usuario registrado?</a>
				<h2>INGRESAR</h2>
				<form method="post">
					<div class="form-control">
						<label>Email</label>
						<input type="email" placeholder="Email">
					</div>
					<div class="form-control">
						<label>Contraseña</label>
						<input type="password" placeholder="Contraseña">
					</div>
					<a href="#" class="forgot-pass">Olvidé mi contraseña</a>
					<br><br>
					<button type="submit">ENTRAR</button>
				</form>
			</div>
		</div>
	</div>
@stop
