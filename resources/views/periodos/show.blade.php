@extends('layout.master')

@section('content')
@foreach ($periodos as $periodo)
<x-card
    :year="$periodo->year"
/>
@endforeach

<a class="btn btn-primary" href="/periodos/create" role="button">Agregar Periodo</a>

@endsection