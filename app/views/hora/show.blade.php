@extends('hello')

@section('section')
<section class="container text-center">
	<a href="{{ route('horas') }}" class="icon-link" data-toggle="tooltip" data-placement="bottom" title="Atras">
		<i class="fa fa-arrow-circle-left"></i>
	</a>
	<a href="{{ route('hora.new') }}" class="icon-link" data-toggle="tooltip" data-placement="bottom" title="Nueva hora">
		<i class="fa fa-plus-circle"></i>
	</a>
</section>
<section class="container">
	@foreach($data as $d)
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading">Descripción</div>
				<div class="panel-body">
			    	<p><strong>Hora:</strong> {{ $d->hora }}</p>
					<p><strong>Turno:</strong> {{ $d->turno }}</p>
				</div>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
	{{-- opciones de las horas --}}
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			@if(Session::has('mensaje_error'))
			<div class="alert alert-dismissable alert-danger">
			  	<button type="button" class="close" data-dismiss="alert">×</button>
	            {{ Session::get('mensaje_error') }}
			</div>
	        @endif
			{{-- <button class="btn btn-info">Actualizar</button> --}}
			{{ Form::open(['route' => ['hora.destroy', $d->id], 'method' => 'DELETE']) }}
			<button class="btn btn-danger">Eliminar</button>
			{{ Form::close() }}
		</div>
		<div class="col-md-3"></div>
	</div>
	@endforeach
</section>

@stop