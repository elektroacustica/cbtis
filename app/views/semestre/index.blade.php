@extends('hello')

@section('section')

<section class="container text-center">
	<a href="{{ route('sem.new') }}" class="icon-link" data-toggle="tooltip" data-placement="bottom" title="Nuevo semestre">
		<i class="fa fa-plus-circle"></i>
	</a>
</section>

<section class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<h3 class="text-center text-uppercase">semestres del cbtis #251</h3>
			<table class="table table-bordered table-hover table-striped">
				<thead>
					<tr>
						<th class="text-center">Semestre</th>
						<th class="text-center">Opciones</th>
						<th class="text-center">Status</th>
					</tr>
				</thead>
				<tbody>
					@foreach($data as $d)
						<tr>
							<td>{{$d->semestre}}</td>
							<td class="text-center">
								<a href="{{ action('SemestreController@show', $d->id) }}">
									<i class="fa fa-cog" data-toggle="tooltip" data-placement="bottom" title="Mas opciones"></i>
								</a>
							</td>
							<td class="text-center">
								@if ($d->status == 1)
								<i class="fa fa-dot-circle-o text-success" data-toggle="tooltip" data-placement="bottom" title="Semestre activo"></i>
								@else
								<i class="fa fa-ban text-danger" data-toggle="tooltip" data-placement="bottom" title="Semestre no activo"></i>
								@endif
								
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			{{$data->links()}}
		</div>
		<div class="col-md-2"></div>
	</div>
</section>

@stop