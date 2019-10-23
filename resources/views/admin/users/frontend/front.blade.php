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
                        <select class="select-cargos" name="cargo" id="cargo">
                            <option value="{{$users->cargo}}">{{$users->cargo}}</option>
                            @foreach($cargo as $c => $name)
                                    <option value="{{$name}}">{{$name}}</option>
                            @endforeach
                         </select>

						</div>
					</div>


					@else

					<div class="form-group">
						<label for="name" class="negrita">Nombre:</label>
						<div>
							<input class="form-control" placeholder="Ingrese Nombre" required="required" name="name" type="text" id="name">
                            @if ($errors->has('name'))
                            <small class="form-text text-danger">{{ $errors->first('name') }}</small>
                            @endif
                        </div>
					</div>

					<div class="form-group">
						<label for="email" class="negrita">Correo:</label>
						<div>
							<input class="form-control" placeholder="Ingrese Correo Electronico" required="required" name="email" type="text" id="email">
                            @if ($errors->has('correo'))
                            <small class="form-text text-danger">{{ $errors->first('correo') }}</small>
                            @endif
                        </div>
					</div>

					<div class="form-group">
						<label for="cedula" class="negrita">Cédula:</label>
						<div>
							<input class="form-control" placeholder="Ingrese Cedula" required="required" name="cedula" type="text" id="cedula">
                            @if ($errors->has('cedula'))
                            <small class="form-text text-danger">{{ $errors->first('cedula') }}</small>
                            @endif
                        </div>
					</div>

					<div class="form-group">
						<label for="cargo" class="negrita">Cargo:</label>
						<div>
                        <select class="select-cargos" name="cargo" id="cargo">
                            @foreach($cargo as $c => $name)
                                    <option value="{{$name}}">{{$name}}</option>
                            @endforeach
                         </select>
						</div>
					</div>

				@endif

				<button type="submit" class="btn btn-info" title="Guardar"><i class="fas fa-save fa-3x"></i></button>
				<a href="{{ route('admin/users') }}" class="btn btn-warning" title="Cancelar"><i class="fas fa-window-close fa-3x"></i></a>

				<br>
				<br>

			</div>
		</section>
	</div>
</div>
