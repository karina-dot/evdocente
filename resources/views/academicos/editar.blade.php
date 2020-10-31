@extends('layout.master')

@section('content')
<div class="card" style="margin: 5%">
<div class="card-header">
Academicos
</div>
<div class="card-body">
<form method="POST" action="/academicos/{{$academico->id}}">
    @method('PUT')
{{ csrf_field() }}

    <label for="rut">Rut: </label><br>
    <input type="text" id="rut" name="rut" value="{{$academico->rut}}"><br>

    <label for="nombre">Nombre: </label><br>
    <input type="text" id="nombre" name="nombre" value="{{$academico->nombre}}"><br>

    <label for="apellido">Apellido: </label><br>
    <input type="text" id="apellido" name="apellido" value="{{$academico->apellido}}"><br>

    <label for="titulo_profesional">Titulo profesional: </label><br>
    <input type="text" id="titulo_profesional" name="titulo_profesional" value="{{$academico->titulo_profesional}}"><br>

    <label for="grado_academico">Grado academico: </label><br>
    <input type="text" id="grado_academico" name="grado_academico" value="{{$academico->grado_academico}}"><br>

    <label for="departamento">Departamento: </label><br>
    <input type="text" id="departamento" name="departamento" value="{{$academico->departamento}}"><br>

    <label for="categoria"> Categoria: </label><br>
    <input type="text" id="categoria" name="categoria" value="{{$academico->categoria}}"><br>

    <label for="horas">Horas: </label><br>
    <input type="text" id="horas" name="horas" value="{{$academico->horas}}"><br>

    <label for="tipo_planta">Tipo planta: </label><br>
    <input type="text" id="tipo_planta" name="tipo_planta" value="{{$academico->tipo_planta}}"><br>

    <label for="estado">Estado:</label>
    <select name="estado" id="estado" size="2">
    <option value="activo"> Activo</option>
    <option value="inactivo">Inactivo</option>
    </select><br><br>

    <input type="submit" value="Editar academico">
</form>

<a class="btn btn-primary" href="/academicos/show" role="button">Mostrar academicos</a>
@endsection
</div>