<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>CBTIS #251</title>
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/main.css') }}
</head>
<body>
	<nav class="navbar navbar-default navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ route('root') }}">CBTIS 251</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				@if( Auth::user() )
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
				        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Aulas<b class="caret"></b></a>
				        <ul class="dropdown-menu">
				            <li><a href="{{ route('aulas') }}">Lista de aula</a></li>
				            <li><a href="{{route('aula.new')}} ">Nueva aulas</a></li>
				        </ul>
				    </li>
				    <li class="dropdown">
				        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Especialidades<b class="caret"></b></a>
				        <ul class="dropdown-menu">
				            <li><a href="{{ route('especialidades') }}">Lista de especialidades</a></li>
				            <li><a href="{{route('esp.new')}} ">Nueva especialidad</a></li>
				        </ul>
				    </li>
				    <li class="dropdawn">
				    	<a href="" class="dropdown-toggle" data-toggle="dropdown">Ciclos<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="{{ action('CicloController@index') }}">Lista de ciclos</a></li>
							<li><a href="{{route('ciclo.new')}} ">Nuevo ciclo</a></li>
						</ul>
				    </li>
				    <li class="dropdawn">
				    	<a href="" class="dropdown-toggle" data-toggle="dropdown">Dias<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="{{ route('dias') }}">Lista de dias</a></li>
							<li><a href="{{route('dia.new')}} ">Nuevo dia</a></li>
						</ul>
				    </li>
				    <li class="dropdawn">
				    	<a href="" class="dropdown-toggle" data-toggle="dropdown">Horas<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="{{ route('horas') }}">Lista de horas</a></li>
							<li><a href="{{route('hora.new')}} ">Nueva hora</a></li>
						</ul>
				    </li>
				    <li class="dropdawn">
				    	<a href="" class="dropdown-toggle" data-toggle="dropdown">Maestros<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="{{ route('maestros') }}">Lista de Maestros</a></li>
							<li><a href="{{route('mtr.new')}} ">Nuevo maestro</a></li>
						</ul>
				    </li>
				    <li class="dropdawn">
				    	<a href="" class="dropdown-toggle" data-toggle="dropdown">Materias<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="{{ route('materias') }}">Lista de Materias</a></li>
							<li><a href="{{route('mat.new')}} ">Nueva materia</a></li>
						</ul>
				    </li>
				    <li class="dropdawn">
				    	<a href="" class="dropdown-toggle" data-toggle="dropdown">Semestres<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="{{ route('semestres') }}">Lista de semestres</a></li>
							<li><a href="{{route('sem.new')}} ">Nuevo semestre</a></li>
						</ul>
				    </li>
				    <li class="dropdawn">
				    	<a href="" class="dropdown-toggle" data-toggle="dropdown">Turnos<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="{{ route('turnos') }}">Lista de turnos</a></li>
							<li><a href="{{route('turno.new')}} ">Nuevo turno</a></li>
						</ul>
				    </li>
					<li>
						<a href="{{action('HomeController@logout')}}">Cerrar sesión</a>
					</li>
				</ul>
				@endif
			</div>
		</div>
	</nav>

	@yield('section')

	<div class="container">
		<footer>
			<p>
				CBTIS #251 {{date('Y')}}
			</p>
			<p class="text-muted">
				Sistema Desarrollado por Ing. Informática
			</p>
		</footer>
	</div>

	<script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
	<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
	{{ HTML::script('js/main.js') }}
	@yield('script')
	
</body>
</html>
