@extends('layout.master')

@section('content')
<div class="card" style="margin: 5%">
    <div class="card-header">
        Facultad
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Decano</th>
        </tr>
    </thead>
    </div>
<div class="card-body">
    <tbody>
        <tr>
        @foreach ($facultads as $facultad)
        <th>{{$facultad->nombre}}</th>
        <th>{{$facultad->decano}}</th>
        <td><form action="/facultads/{{$facultad->id}}/edit" method="GET">
          <button type="submit">Editar</button></form></td>
        <td><form method="POST" action="/facultads/{{$facultad->id}}">
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

<a class="btn btn-primary" href="/facultads/create" role="button">Agregar facultad</a>
@endsection
</div>