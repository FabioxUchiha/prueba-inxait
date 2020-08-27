@extends('layout')
@section('title', 'contacto')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">
			{{-- @if ($errors->any())
			<ul>
				@foreach ($errors->all() as $error)
				<li> {{ $error }} </li>
				@endforeach
			</ul>
			@endif --}}

			<form class="bg-white shadow rounded py-3 px-4 was-validated"
			action="{{ route('contact.store') }}" method="POST">
			@csrf
			<h1 class="display-4">Contacto</h1>
			<div class="form-group">
				<label for="name">Nombre:</label><br>
				<input class="form-control bg-light shadow
				@error('name') is-invalid @enderror"
				type="text" name="name" id="name" placeholder="Nombre..."
				value="{{ old('name') }}" required>
				@error('name')
				<span class="invalid-feedback" role="alert">
					<strong>
						{{ $message }}
					</strong>
				</span>
				@enderror
			</div>
			<div class="form-group">
				<label for="last_name">Apellido:</label><br>
				<input class="form-control bg-light shadow
				@error('last_name') is-invalid @enderror"
				type="text" name="last_name" id="last_name" placeholder="Apellido..."
				value="{{ old('last_name') }}" required>
				@error('last_name')
				<span class="invalid-feedback" role="alert">
					<strong>
						{{ $message }}
					</strong>
				</span>
				@enderror
			</div>
			<div class="form-group">
				<label for="cedula">Cedula:</label><br>
				<input class="form-control bg-light shadow
				@error('cedula') is-invalid @enderror"
				type="number" name="cedula" id="cedula" placeholder="Numero de cedula..."
				value="{{ old('cedula') }}" required>
				@error('cedula')
				<span class="invalid-feedback" role="alert">
					<strong>
						{{ $message }}
					</strong>
				</span>
				@enderror
			</div>
			<div class="form-group">
				<label for="phone">Telefono:</label><br>
				<input class="form-control bg-light shadow
				@error('phone') is-invalid @enderror"
				type="number" name="phone" placeholder="Telefono..."
				value="{{ old('phone') }}" required>
				@error('phone')
				<span class="invalid-feedback" role="alert">
					<strong>
						{{ $message }}
					</strong>
				</span>
				@enderror
			</div>
			<div class="form-group">
				<label for="email">Email:</label><br>
				<input class="form-control bg-light shadow
				@error('email') is-invalid @enderror"
				type="email" name="email" id="email" placeholder="Correo electronico..."
				value="{{ old('email') }}" required>
				@error('email')
				<span class="invalid-feedback" role="alert">
					<strong>
						{{ $message }}
					</strong>
				</span>
				@enderror
			</div>

			<div class="form-group">
				<label for="department">Departamanto:</label><br>
				<select class="form-control bg-light shadow dynamic" data-dependent="city"
				name="department" id="department">
				{{-- <option value="">Selecciona un departamento</option> --}}
				@foreach($departments->all() as $department)
				<option value="{{ $department->id }}">{{ $department->id }}</option>
				@endforeach
			</select><br>
		</div>
	<input id="servicioSelecionado" name="nom_Servicio" value="">

		<div class="form-group">
			<label for="city">Ciudad:</label><br>
			<select class="form-control bg-light shadow"
			name="city" id="servicioSelecionado" data-old="{{ old('department_id') }}">
				@if($errors->has('department_id'))
					<strong>{{ $errors->first('department_id') }}</strong>
				@endif
			{{-- <option selected="false">Selecciona una ciudad o municipio</option> --}}
			@foreach($cities->all() as $city)
			<option value="{{ $city->department_id }}">{{ $city->department_id }}</option>
			@endforeach
		</select><br>
	</div>

	<label class="form-group bg-light">“Autorizo el tratamiento de mis datos de acuerdo con la
		finalidad establecida en la política de protección de datos personales”. <br><strong>Haga clic aquí</strong>
	</label>
	<div class="custom-control custom-checkbox mb-3">
		<input class="custom-control-input" id="invalidCheck"
		type="checkbox" name="check" value="1" required>
		<label class="custom-control-label" for="invalidCheck"
		>acepto los terminos y condiciones</label>
	</div>
	<div class="invalid-feedback">
		acepta los terminos y condiciones
	</div>
	<button class="btn btn-primary">Enviar</button>
	</form>
	<button class="btn btn-outline-primary"><a href="{{ route('contact.show') }}">Ganador</a></button>
	</div>
	</div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
	$(document).on('change', '#department', function(event) {
     $valor = $('#servicioSelecionado').val($("#department option:selected").text());
 });
</script>
@endsection
