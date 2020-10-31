@extends('layout.master')

@section('content')

<div class="card" style="margin: 5%;">
  <div class="card-header">
    Academicos
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Rut</th>

        <th scope="col">Nombre(s)</th>
        <th scope="col">Apellido(s)</th>
        <th scope="col">Departamento</th>
        <th scope="col">Titulo profesional</th>
        <th scope="col">Estado</th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
  </div>
  <div class="card-body">
    <tbody>
      <tr>
        @foreach($academicos as $academico)
        <th >{{$academico->rut}}</th>
        <td>{{$academico->nombre}}</td>
        <td>{{$academico->apellido}}</td>
        <td>@foreach ($departamentos as $departamento)
          @if ($academico->departamento_id == $departamento->id)
              {{ $departamento->nombre }}
          @endif    
        @endforeach</td>
        <td>{{$academico->titulo_profesional}}</td>
        <td>{{$academico->estado}}</td>
        <td><a class="btn btn-primary" href="/evaluars/index" role="button">Evaluar</a></td>
        <td><form action="/academicos/{{$academico->id}}/edit" method="GET">
          <button type="submit">Editar</button></form></td>
        <td><form method="POST" action="/academicos/{{$academico->id}}">
          {{ csrf_field() }}
          {{ method_field('DELETE')}}
          <button type="submit"> Eliminar</button>
        </form>
        </td>
      </tr>
      <tr>
    @endforeach
    </tbody>
  </table>

<a class="btn btn-primary" href="/academicos/create" role="button">Agregar academico</a>
@endsection
  </div>