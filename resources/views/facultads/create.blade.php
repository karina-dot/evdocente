@extends('layout.master')

@section('content')
<div class="card" style="margin: 5%">
    <div class="card-header">
        Facultad

    </div>   
<div class="card-body">     
<form method="POST" action="/facultads">
    {{ csrf_field() }}

<label for="nombre">Nombre Facultad:</label><br>
<input type="text" id="nombre" name="nombre"><br>

<label for="decano">Decano:</label><br>
<input type="text" id="decano" name="decano"><br>


><input type="submit" value="Agregar">
</form>

<a class="btn btn-primary" href="/facultads/show" role="button">Mostrar facultades</a>
@endsection
</div>