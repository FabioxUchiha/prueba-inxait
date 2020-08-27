@extends('layout')
@section('title', 'inicio')
@section('content')
<h1 class="text-center">aqui esta la pagina de publicidad</h1>
<br><br><br>
<button class="btn btn-light btn-block bg-primary">
	<a href=" {{ route('contact.index') }} " class="text-white">Resgistrate para ganar</a>
</button>
@endsection