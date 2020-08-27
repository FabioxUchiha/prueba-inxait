@extends('layout')
@section('title', 'participantes')
@section('content')
@if($user->count() < 6)
	<h1>aun falta mas participantes para el sorteo</h1>
	{{ $aleatorio }}

	@else
@endif
<h1>{{ $user->count() }}</h1>
<a href="{{ route('contact.index') }}">Formulario de registro</a>
@endsection