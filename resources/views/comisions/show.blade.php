@extends('layout.master')

@section('content')
<div class="card" style="margin: 5%">
    <div class="card-header">
        Comisiones
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Año</th>
        <th scope="col">Facultad</th>
        <th scope="col">Rut</th>
        <th scope="col">Decano</th>
        <th scope="col">Miembro uno</th>
        <th scope="col">Miembro dos</th>
        <th scope="col">fecha pie</th>
      </tr>
    </thead>
</div>
<div class="card-body">
    <tbody>
      <tr>
        @foreach($comisions as $comision)
        <th >{{$comision->year}}</th>
        <th>{{$comision->facultad}}</th>
        <th>{{$comision->rut}}</th>
        <th>{{$comision->decano}}</th>
        <th>{{$comision->miembro_uno}}</th>
        <th>{{$comision->miembro_dos}}</th>
        <th>{{$comision->fecha_pie}}</th>
        <td><form action="/comisions/{{$comision->id}}/edit" method="GET">
          <button type="submit">Editar</button></form></td>
        <td><form method="POST" action="/comisions/{{$comision->id}}">
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
  <a class="btn btn-primary" href="/comisions/create" role="button">Agregar comisiones</a>

  @endsection
</div>