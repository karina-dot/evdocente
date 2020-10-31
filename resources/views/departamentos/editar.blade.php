@extends('layout.master')

@section('content')
<div class="card" style="margin: 5%">
    <div class="card-header">
        Departamentos
    </div>
    <div class="card-body">
        <form method="POST" action="/departamentos/{{$departamento->id}}">
    @method('PUT')
{{ csrf_field() }}

<label for="nombre">Nombre departamento:</label><br>
<input type="text" id="nombre" name="nombre" value="{{$departamento->nombre}}"><br>

<label for="facultad">Facultad:</label><br>
<input type="text" id="facultad" name="facultad" value="{{$departamento->facultad}}"><br>


><input type="submit" value="Guardar">
</form>

<a class="btn btn-primary" href="/departamentos/show" role="button">Mostrar departamentos</a>
@endsection
    </div>