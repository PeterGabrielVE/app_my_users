<div class="row">
	<div class="col-md-12">
		<section class="panel">
			<div class="panel-body">

				@if ( !empty ( $users->id) )

					<div class="form-group">
						<label for="name" class="negrita">Nombre:</label>
						<div>
							<input class="form-control" placeholder="Ingrese Nombre" required="required" name="name" type="text" id="name" value="{{ $users->name }}">
						</div>
					</div>

					<div class="form-group">
						<label for="email" class="negrita">Correo:</label>
						<div>
							<input class="form-control" placeholder="Ingrese correo electronico" required="required" name="email" type="text" id="email" value="{{ $users->email }}">
						</div>
					</div>

					<div class="form-group">
						<label for="cedula" class="negrita">Cedula:</label>
						<div>
							<input class="form-control" placeholder="Ingrese cedula" required="required" name="cedula" type="text" id="cedula" value="{{ $users->cedula }}">
						</div>
					</div>

                    <div class="form-group">
						<label for="cargo" class="negrita">Seleccione cargo:</label>
						<div>
							<input class="form-control" placeholder="Ingrese cargo" required="required" name="cargo" type="text" id="cargo" value="{{ $users->cargo }}">
						</div>
					</div>


					@else

					<div class="form-group">
						<label for="name" class="negrita">Nombre:</label>
						<div>
							<input class="form-control" placeholder="Ingrese Nombre" required="required" name="name" type="text" id="name">
						</div>
					</div>

					<div class="form-group">
						<label for="email" class="negrita">Correo:</label>
						<div>
							<input class="form-control" placeholder="Ingrese Correo Electronico" required="required" name="email" type="text" id="email">
						</div>
					</div>

					<div class="form-group">
						<label for="cedula" class="negrita">Cedula:</label>
						<div>
							<input class="form-control" placeholder="Ingrese Cedula" required="required" name="cedula" type="text" id="cedula">
						</div>
					</div>

					<div class="form-group">
						<label for="cargo" class="negrita">Cargo:</label>
						<div>
							<input class="form-control" placeholder="Ingrese Cargo" required="required" name="cargo" type="text" id="cargo">
						</div>
					</div>

				@endif

				<button type="submit" class="btn btn-info">Guardar</button>
				<a href="{{ route('admin/users') }}" class="btn btn-warning">Cancelar</a>

				<br>
				<br>

			</div>
		</section>
	</div>
</div>
