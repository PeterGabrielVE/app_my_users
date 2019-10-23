<div class="row">
	<div class="col-md-12">
		<section class="panel">
			<div class="panel-body">

				@if ( !empty ( $cargos->id) )

					<div class="form-group">
						<label for="name" class="negrita">Nombre:</label>
						<div>
							<input class="form-control" placeholder="Ingrese Nombre" required="required" name="name" type="text" id="name" value="{{ $cargos->name }}">
						</div>
					</div>

					<div class="form-group">
						<label for="email" class="negrita">Descripción:</label>
						<div>
							<input class="form-control" placeholder="Ingrese Descripción" required="required" name="description" type="text" id="description" value="{{ $cargos->description }}">
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
						<label for="email" class="negrita">Descripción:</label>
						<div>
							<input class="form-control" placeholder="Ingrese Descripción" required="required" name="description" type="text" id="description">
                            @if ($errors->has('description'))
                            <small class="form-text text-danger">{{ $errors->first('description') }}</small>
                            @endif
                        </div>
					</div>



				@endif

				<button type="submit" class="btn btn-info" title="Guardar"><i class="fas fa-save fa-3x"></i></button>
				<a href="{{ route('admin/cargos') }}" class="btn btn-warning" title="Cancelar"><i class="fas fa-window-close fa-3x"></i></a>

				<br>
				<br>

			</div>
		</section>
	</div>
</div>
