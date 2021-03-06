@extends('hello')

@section('section')
<section class="container text-center">
	<a href="{{ route('aulas') }}" class="icon-link" data-toggle="tooltip" data-placement="bottom" title="Atras">
		<i class="fa fa-arrow-circle-left"></i>
	</a>
	<a href="{{ route('aula.new') }}" class="icon-link" data-toggle="tooltip" data-placement="bottom" title="Nueva aula">
		<i class="fa fa-plus-circle"></i>
	</a>
</section>
<section class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading">Descripción</div>
				<div class="panel-body">
			    	<p><strong>Salón:</strong> {{ $data->aula }}</p>
			    	<p><strong>identificador:</strong> {{ $data->id }}</p>
			    	<p><strong>Descripción: </strong>{{ $data->descripcion }}</p>
			    	@if ($data->status == 1)
			    	<p>
			    		<strong>Activo</strong>
						<i class="fa fa-dot-circle-o text-success" data-toggle="tooltip" data-placement="bottom" title="Salón activo"></i>
			    	</p>
					@else
					<p>
						<strong>No activo</strong>
						<i class="fa fa-ban text-danger" data-toggle="tooltip" data-placement="bottom" title="Salón no activo"></i>
					</p>
					@endif
				</div>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
	{{-- opciones del aula --}}
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			@if(Session::has('mensaje_error'))
			<div class="alert alert-dismissable alert-danger">
			  	<button type="button" class="close" data-dismiss="alert">×</button>
	            {{ Session::get('mensaje_error') }}
			</div>
	        @endif
			<table>
				<tbody>
					<tr>
						<td>
							<a href="{{ action('AulaController@edit', $data->id) }}">
								<button class="btn btn-primary">Actualizar</button>
							</a>
						</td>
						<td>
							@if ($data->status == 1)
							{{ Form::open(['route' => ['aula.status', $data->id], 'method' => 'PUT']) }}
								<button class="btn btn-warning">Desactivar</button>
							{{ Form::close() }}
							@else
							{{ Form::open(['route' => ['aula.status', $data->id], 'method' => 'PUT']) }}
								<button class="btn btn-success">Activar</button>
							{{ Form::close() }}
							@endif
						</td>
						<td>
							{{ Form::open(['route' => ['aula.destroy', $data->id], 'method' => 'DELETE']) }}
								<button class="btn btn-danger">Eliminar</button>
							{{ Form::close() }}
						</td>
					</tr>
				</tbody>
			</table>
			
		</div>
		<div class="col-md-3"></div>
	</div>
</section>

@stop