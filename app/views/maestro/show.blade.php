@extends('hello')

@section('section')
<section class="container text-center">
    <a href="{{ route('maestros') }}" class="icon-link" data-toggle="tooltip" data-placement="bottom" title="Atras">
        <i class="fa fa-arrow-circle-left"></i>
    </a>
    <a href="{{ route('mtr.new') }}" class="icon-link" data-toggle="tooltip" data-placement="bottom" title="Nuevo maestro">
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
                    <p><strong>Maestro:</strong> {{ $data->nombres }}</p>
                    <p><strong>Clave: </strong>{{ $data->clave }}</p>
                    @if ($data->status == 1)
                    <p>
                        <a href="{{ action('CMMController@index', $data->id) }}">
                            materias del maestro
                        </a>
                    </p>
                    <p>
                        <strong>Activado</strong>
                    <i class="fa fa-dot-circle-o text-success" data-toggle="tooltip" data-placement="bottom" title="Maestro activo"></i>
                    </p>
                    @else
                    <p>
                        <strong>Desactivado</strong>
                        <i class="fa fa-ban text-danger" data-toggle="tooltip" data-placement="bottom" title="Maestro no activo"></i>
                    </p>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
    {{-- opciones del maestro --}}
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
                            <a href="{{ route('mtr.edit', $data->id) }}">
                                <button class="btn btn-primary">Actualizar</button>
                            </a>
                        </td>
                        <td>
                            {{ Form::open(['route' => ['mtr.status', $data->id], 'method' => 'PUT']) }}
                            @if ($data->status == 1)
                            <button class="btn btn-warning">Desactivar</button>
                            @else
                            <button class="btn btn-success">Activar</button>
                            @endif
                            {{ Form::close() }}
                        </td>
                        <td>
                            {{ Form::open(['route' => ['mtr.destroy', $data->id], 'method' => 'DELETE']) }}
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