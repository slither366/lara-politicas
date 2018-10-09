@extends('layouts.app')

@section('content')
<section class="container">

	<h1>Bienvenido Depositos</h1>
	<table width="100%" border="1">
		<thead>
			<tr><th>id</th></tr>
			<tr><th>cod_local</th></tr>
			<tr><th>dia_mes</th></tr>
			<tr><th>fecha_mes</th></tr>
			<tr><th>num_doc_jef_zona</th></tr>
		</thead>
		<tbody>
			@foreach($varDepartamento as $varDep)
				<tr>
					<td>{{ $varDepartamento->id }}</td>
					<td>{{ $varDepartamento->cod_local }}</td>
					<td>{{ $varDepartamento->dia_mes }}</td>
					<td>{{ $varDepartamento->fecha_mes }}</td>
					<td>{{ $varDepartamento->num_doc_jef_zona }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</section>
@stop