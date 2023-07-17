<div class="row">
	<div class="col-md-12">
		<section class="panel"> 
			<div class="panel-body">

				@if ( !empty ( $clientes->id) )

					<div class="mb-3">
						<label for="nombre" class="negrita">Nombre y Apellido:</label> 
						<div>
							<input class="form-control" placeholder="" required="required" name="nombre" type="text" id="nombre" value="{{ isset($clientes->name) ? $clientes->name : old('Nombre') }}"> 
						</div>
					</div>

					<div class="mb-3">
						<label for="email" class="negrita">Email:</label> 
						<div>
							<input class="form-control" placeholder="" required="required" name="email" type="text" id="email" value="{{ isset($clientes->email) ? $clientes->email : old('Email') }}"> 
						</div>
					</div>

					<div class="mb-3">
						<label for="direccion" class="negrita">Direccion:</label> 
						<div>
							<input class="form-control" placeholder="" required="required" name="direccion" type="text" id="direccion" value="{{ isset($clientes->direccion) ? $clientes->direccion : old('Direccion') }}"> 
						</div>
					</div>

					<div class="mb-3">
						<label for="img" class="negrita">Selecciona una imagen:</label> 
						<div>
							<input name="img" type="file" id="img">
							<br>
							<br>

							@if ( !empty ( $clientes->img) )

								<span>Imagen Actual: </span>
								<br>
								<img src="../../../uploads/{{ $clientes->img }}" width="200" class="img-fluid">

							@else

								Aún no se ha cargado una imagen para este cliente

							@endif

						</div>

					</div>

					@else

					<div class="mb-3">
						<label for="nombre" class="negrita">Nombre:</label> 
						<div>
							<input class="form-control" placeholder="" required="required" name="nombre" type="text" id="nombre"> 
						</div>
					</div>

					<div class="mb-3">
						<label for="email" class="negrita">Email:</label> 
						<div>
							<input class="form-control" placeholder="" required="required" name="email" type="text" id="email"> 
						</div>
					</div>

					<div class="mb-3">
						<label for="direccion" class="negrita">Direccion:</label> 
						<div>
							<input class="form-control" placeholder="" required="required" name="direccion" type="text" id="direccion"> 
						</div>
					</div>

					<div class="mb-3">
						<label for="img" class="negrita">Selecciona una imagen:</label>
						<div>
							<input name="img" type="file" id="img"> 
						</div>
					</div>

				@endif

				<button type="submit" class="btn btn-info">Guardar</button>
				<a href="{{ route('admin/clientes') }}" class="btn btn-warning">Cancelar</a>

				<br>
				<br>

			</div>
		</section>
	</div>
</div> 
