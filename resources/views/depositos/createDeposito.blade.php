@extends('layouts.app')

@section('content')
<section class="container">

	<div class="pl-4 mt-4 pt-0">
		<h1 class="text-center Titulo">Politicas Pendientes</h1>
	</div>

	<form method="POST" action="{{ route('depositos.store') }}" >
		{!! csrf_field() !!}
		<p><label for="cod_local">
			Local:
			<input type="text" name="cod_local" value="">
		</label></p>
		<p><label for="dia_mes">
			Dia Mes:
			<input type="text" name="dia_mes">
		</label></p>
		<p><label for="fecha_mes">
			Fecha:
			<input type="text" name="fecha_mes">
		</label></p>
		<p><label for="num_doc_jef_zona">
			Num Documento Jefe:
			<input type="text" name="num_doc_jef_zona">
		</label></p>
		<input type="submit" name="enviar" value="Enviar">
	</form>
</section>
@stop	