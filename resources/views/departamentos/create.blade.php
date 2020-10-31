@extends('layout.master')

@section('content')
<div class="card" style="margin: 5%">
    <div class="card-header">
        Departamentos
    </div>
    <div class="card-body">
        <form method="POST" action="/departamentos">
    {{ csrf_field() }}

<label for="nombre">Nombre departamento:</label><br>
<input type="text" id="nombre" name="nombre"><br>

<label for="facultad">Facultad:</label><br>
<input type="text" id="facultad" name="facultad"><br>


<input type="submit" value="Agregar">
</form>

<a class="btn btn-primary" href="/departamentos/show" role="button">Mostrar departamentos</a>
@endsection
    </div>