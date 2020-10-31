@extends('layout.master')

@section('content')
<div class="card" style="margin: 5%">
    <div class="card-header">
        Periodo
    </div>
<div class="card-body">
<form method="POST" action="/periodos">
    {{ csrf_field() }}

<label for="year">Periodo:</label><br>
<input type="text" id="year" name="year"><br>

><input type="submit" value="Iniciar periodo">
</form>

<a class="btn btn-primary" href="/periodos/show" role="button">Mostrar Periodos</a>
@endsection

</div>