@extends('hello')

@section('section')

<section class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading">Descripcion</div>
				<div class="panel-body">
			    	<p>{{ $data->dia }}</p>
			    	<p><small>identificador: {{ $data->id }}</small></p>
				</div>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
	{{-- opciones del ciclo --}}
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<button class="btn btn-danger">Eliminar</button>
		</div>
		<div class="col-md-3"></div>
	</div>
</section>

@stop