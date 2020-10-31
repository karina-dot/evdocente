@extends('layout.master')

@section('content')
<div class="card" style="margin: 5%">
    <div class="card-header">
    Comision
    </div>
<div class="card-body">
    <form method="POST" action="/comisions/{{$comision->id}}">
        @method('PUT')
{{ csrf_field() }}

    <label for="year">Año: </label><br>
    <input type="year" id="year" name="year" value="{{$comision->year}}"><br>

    <label for="facultad">Facultad: </label><br>
    <input type="text" id="facultad" name="facultad" value="{{$comision->facultad}}"><br>

    <label for="rut">Rut: </label><br>
    <input type="text" id="rut" name="rut" value="{{$comision->rut}}"><br>

    <label for="decano">Decano: </label><br>
    <input type="text" id="decano" name="decano" value="{{$comision->decano}}"><br>

    <label for="miembro_uno">Miembro uno: </label><br>
    <input type="text" id="miembro_uno" name="miembro_uno" value="{{$comision->miembro_uno}}"><br>

    <label for="miembro_dos">Miembro dos: </label><br>
    <input type="text" id="miembro_dos" name="miembro_dos" value="{{$comision->miembro_dos}}"><br>

    <label for="fecha_pie">Fecha pie: </label><br>
    <input type="text" id="fecha_pie" name="fecha_pie" value="{{$comision->fecha_pie}}"><br><br><br>
    
    <input type="submit" value="Guardar">
</form>

<a class="btn btn-primary" href="/comisions/show" role="button">Mostrar comisiones</a>

@endsection
</div>