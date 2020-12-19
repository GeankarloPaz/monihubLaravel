@extends('layout/plantilla')
@section('content')
<h1>Monihub</h1>
<a href="{{url('/personas/create')}}" class="btn btn-success pull-right">Crear Persona</a>
<hr>
<table class="table table-striped table-bordered table-hover">
<thead>
<tr class="bg-info">
<th>Id</th>
<th>Tipo de documento</th>
<th>Numero de documento</th>
<th>Nombre</th>
<th>Apellido</th>
<th>Celular</th>
<th colspan="3">Acciones</th>
</tr>
</thead>
<tbody>
@foreach ($personas as $persona)
<tr>
<td>{{ $persona->id }}</td>
<td>{{ $persona->tipo_documento }}</td>
<td>{{ $persona->numero_documento }}</td>
<td>{{ $persona->nombre }}</td>
<td>{{ $persona->apellido }}</td>
<td>{{ $persona->celular }}</td>
<td><a href="{{ url('personas', $persona->id) }}" class="btn btn-primary">Ver</a></td>
<td><a href="{{ route('personas.edit', $persona->id) }}" class="btn btn-warning">Editar</a></td>
<td>
{!! Form::open(['method' => 'DELETE', 'route'=>['personas.destroy', $persona->id]]) !!}
{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}
</td>
</tr>
@endforeach
</tbody>
</table>
@endsection

86,91,30,35