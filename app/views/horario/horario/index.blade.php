@extends('horario/index')

@section('section')

<div ng-init="grupo_id = {{ $id }}"></div>

<section class="container" ng-app="app">
	<div class="row" ng-controller="horario">
		<h1 class="text-center">Horario</h1>
		<div class="col-md-3">
			<form action="" class="form-horizontal">
				<div class="form-group">
					<label for="" class="col-md-3 control-label">Ciclo:</label>
					<div class="col-md-9">
							
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-md-3 control-label">Dia:</label>
					<div class="col-md-9">
						<select ng-model="dia_id" class="form-control input-sm">
							<option value="@{{ d.id }}" ng-repeat="d in dia">
							@{{ d.dia }}
							</option>
						</select>
						
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-md-3 control-label">hora:</label>
					<div class="col-md-9">
						<select ng-model="hora_id" class="form-control input-sm">
							<option value="@{{ d.id }}" ng-repeat="d in hora">
							@{{ d.hora }}
							</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-md-3 control-label">materia:</label>
					<div class="col-md-9">
						<select class="form-control input-sm" ng-model="materia_id">
							<option value="@{{ d.id }}" ng-repeat="d in materia">
								@{{ d.materia }}
							</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-md-3 control-label">Salon:</label>
					<div class="col-md-9">
						<select ng-model="aula_id" class="form-control input-sm">
							<option value="@{{ d.id }}" ng-repeat="d in aula">
								@{{ d.aula }}
							</option>
						</select>
						
					</div>
				</div>
				<div class="form-group text-center">
					<button class="btn btn-primary" ng-click="save()" type="button">Guardar</button>
				</div>
			</form>
		</div>
		<div class="col-md-9">
			<a href="{{ route('pdf', $id) }}">
				<button class="btn btn-primary btn-block" id="#btn-horario">horario</button>
			</a>
			<article class="table-li">
				<div>Hora</div>
				<div ng-repeat="l in lunes">
					@{{ l.hora }}
				</div>
			</article>
			<article class="table-li">
				<div>Lunes</div>
				<div ng-repeat="l in lunes">
					@{{ l.materia }}
					<div ng-if="l.materia == null">null</div>
				</div>
			</article>

			<article class="table-li">
				<div>Martes</div>
				<div ng-repeat="m in martes">
					@{{ m.materia }}
					<div ng-if="m.materia == null">null</div>
				</div>
			</article>
			<article class="table-li">
				<div>Miercoles</div>
				<div ng-repeat="m in miercoles">
					@{{ m.materia }}
					<div ng-if="m.materia == null">null</div>
				</div>
			</article>
			<article class="table-li">
				<div>Jueves</div>
				<div ng-repeat="j in jueves">
					@{{ j.materia }}
					<div ng-if="j.materia == null">null</div>
				</div>
			</article>
			<article class="table-li">
				<div>Viernes</div>
				<div ng-repeat="v in viernes">
					@{{ v.materia }}
					<div ng-if="v.materia == null">null</div>
				</div>
			</article>
		</div>
		<p class="text-@{{ data.color }}">@{{ data.msg }}</p>
	</div>
</section>


@stop

@section('scripts')

{{ HTML::script('js/vendor/underscore.js') }}
{{ HTML::script('js/vendor/angular.js') }}
{{ HTML::script('js/app.js') }}
{{ HTML::script('js/angular/filter/filter.js') }}
{{ HTML::script('js/angular/controller/horario.js') }}
{{ HTML::script('js/angular/service/appService.js') }}

@stop