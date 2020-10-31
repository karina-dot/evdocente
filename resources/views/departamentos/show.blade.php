@extends('layout.master')

@section('content')
<div class="card" style="margin: 5%">
    <div class="card-header">
        Departamentos
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Facultad</th>
        </tr>
    </thead>
</div>
<div class="card-body">
    <tbody>
        <tr>
        @foreach ($departamentos as $departamento)
    <th>{{$departamento->nombre}}</th>
    <th>{{$departamento->facultad}}</th>
    <td><form action="/departamentos/{{$departamento->id}}/edit" method="GET">
        <button type="submit">Editar</button></form></td>
      <td><form method="POST" action="/departamentos/{{$departamento->id}}">
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
<a  class="btn btn-primary" href="/departamentos/create" role="button">Agregar departamentos</a>
@endsection
</div>