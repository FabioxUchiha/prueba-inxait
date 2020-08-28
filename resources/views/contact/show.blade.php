@extends('layout')
@section('title', 'participantes')
@section('content')
@if($users->count() < 6)
<h1>aun falta mas participantes para el sorteo</h1>
@foreach($users->all() as $user)
<ul>
	<li>{{ $user->name }}</li>
</ul>
@endforeach
@else
@endif
<h1>{{ $user->count() }}</h1>
<button class="btn btn-light btn-block bg-primary">
	<a href="{{ route('contact.index') }}" class="text-white">Formulario de registro</a>
</button>
<button class="btn btn-light btn-block bg-primary">
	<strong><a href="{{ route('contact.descargar') }}" class="text-white">descargar excel</a></strong>
</button>
@endsection